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