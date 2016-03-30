$(document).on('pageinit', function(event){
   $("body").swipeleft(function(e) {
        if ( e.swipestart.coords[0] > ($( document ).width() - 100)) {
            showMenu();
        }
    });
   $("#navmenu").swiperight(function() {
        hideMenu();
    });
});

function toggleMenu() {

    var num = parseInt($("#navmenu").css("margin-right"), 10);
    $("#navmenu").css("margin-right", (-350 - num));
    $("#menuIcon").css("margin-right", -num);

}

function showMenu() {
    $("#navmenu").css("margin-right", 0);
    $("#menuIcon").css("margin-right", 350);
}

function hideMenu() {
    $("#navmenu").css("margin-right", -350);
    $("#menuIcon").css("margin-right", 0);
}

/* FACEBOOK INTEGRATION */

// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
        fbLoginHandler();
        testAPI();
    } else if (response.status === 'not_authorized') {
        // The person is logged into Facebook, but not your app.
    } else {

    }
}
  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }



window.fbAsyncInit = function() {
    FB.init({
        appId      : '1147142072012152',
        cookie     : true,  // enable cookies to allow the server to access
                             // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.5' // use graph api version 2.5
    });

  // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

};

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', {fields: 'name,email'}, function(response) {
      console.log('Successful login for: ' + response.name);
      //document.getElementById('status').innerHTML =
        //'Thanks for logging in, ' + response.name + '!';
    });
  }

  function regFB() {
    console.log("?");
    //FB.api('/me', {fields: 'name,email,id'}, function(response) {
        //$("#signup-name").val(response.name);
        //$("#signup-email").val(response.email);
        //$("#signup-fbid").val(response.id);
        //$("#signup-pwd").val(Math.random().toString(36).slice(2));
        alert($("#signupform"));
        //$("#signupform").submit();
    //});
}

function fbLoginHandler() {
    $.get('sessioncheck.php', function(data) {
        if( data == "No" ) {
            FB.api('/me', {fields: 'name,email,id'}, function(response2) {
                var form = $('<form action="fblogin.php" method="post">' +
                '<input type="text" name="email" value="' + response2.email + '" />' +
                '<input type="text" name="name" value="' + response2.name + '" />' +
                '<input type="text" name="pwd" value="' + (Math.random().toString(36).slice(2)) + '" />' +
                '<input type="text" name="fbid" value="' + response2.id + '" />' +
                '</form>');
                $('body').append(form);
                form.submit();
            });
        } else {
            //alert("Session active");
        }
    });
}