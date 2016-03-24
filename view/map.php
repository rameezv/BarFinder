<div id="map"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 52.13, lng: -106.65},
            zoom: 14
        });

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
    }
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALaBJ4XLzppINnC43hz8jSR3fkWxlaxgo&callback=initMap" async defer></script>
