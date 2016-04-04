<script src="js/functions.js"></script>

<div id="map" class="shadow"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALaBJ4XLzppINnC43hz8jSR3fkWxlaxgo&callback=load" async defer></script>

<?php
    //$db = new mysqli("localhost", "root", "root", "testDB");
    $db = new mysqli("localhost:2016", "350user", "350password", "bmuusers");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $res = $db->query("select * from clubs");

    $mrk_cnt = 0;

    while ($obj = $res->fetch_object())  // get all rows (markers)
    {
        $lat[$mrk_cnt] = $obj->latitude;  // save the lattitude
        $lng[$mrk_cnt] = $obj->longitude;  // save the longitude
        $name[$mrk_cnt] = $obj->name;
        $phone[$mrk_cnt] = $obj->phone;  // save the info-window
        $addr[$mrk_cnt] = $obj->address;
        $mrk_cnt++;                      // increment the marker counter
    }



    $res->close();
?>

<script type='text/javascript'>
    var point;
    var mrktx;
    function load() {
        addTo = 0;

        var latlng = new google.maps.LatLng(52.13, -106.65);
        var icon = 'http://labs.google.com/ridefinder/images/mm_20_blue.png';
        var shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';

        var myOptions = {
            zoom: 14,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"),
            myOptions);

        // This next block of JavaScript needs to be generated by PHP
        // to 'add-in' the information from the arrays

        var infoWindow = new google.maps.Marker({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                    title: 'Your Position'
                };

                infoWindow.setPosition(pos);
                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
        }
        <?php
            echo 'var last=null;';
            for ($lcnt = 0; $lcnt < $mrk_cnt; $lcnt++) {

                echo "var point$lcnt = new google.maps.LatLng($lat[$lcnt], $lng[$lcnt]);\n";
                echo "var mrktx$lcnt = \"<div id='mapItem'>\"+
                                        \"<form method='post' action='index.php'>\"+
                                        \"<h3 id='fav-name'>$name[$lcnt]</h3>\"+
                                        \"<input type='hidden' name='fav-name' value='$name[$lcnt]'>\"+
                                        \"<p>Address: $addr[$lcnt]</p>\"+
                                        \"<input type='hidden' name='fav-addr' value='$addr[$lcnt]'>\"+
                                        \"<p>Phone: $phone[$lcnt]</p>\"+
                                        \"<input type='hidden' name='fav-phone' value='$phone[$lcnt]'>\"+
                                        \"<button type='submit' name='fav-btn'>Add To Favourite</button>\"+
                                        \"</form>\"+
                                        \"</div>\";";

                echo "var infowindow$lcnt = new google.maps.InfoWindow({
   			              content: mrktx$lcnt
			         });";
                echo "var marker$lcnt = new google.maps.Marker({
                    position: point$lcnt,
                    map: map,
                    icon: icon,
                    shadow: shadow
                    });\n";
                echo "google.maps.event.addListener(marker$lcnt,
                    'click', function() {
                       if (last) {
                        last.close();
                       }
   		               infowindow$lcnt.open(map,marker$lcnt);
                       last = infowindow$lcnt;
                    });\n";
                }
        ?>
    }
</script>

<?php
    if(isset($_POST['fav-btn'])) {
        $email = $this->usrsrv->getEmail();//$_POST['email'];
        $nm = $_POST['fav-name'];
        $ad = $_POST['fav-addr'];
        $ph = $_POST['fav-phone'];
        //echo "alert('$ph');";
        //$this->usrsrv->addFav($email,$nm, $ad,$ph);
        if ($this->usrsrv->addFav($email,$nm, $ad,$ph)) {
            echo '<script>parent.window.location.reload();</script>';
        }

    }
?>