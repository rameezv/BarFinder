function toggleMenu() {

    var num = parseInt($("#navmenu").css("margin-right"), 10);
    $("#navmenu").css("margin-right", (-200 - num));
    $("#menuIcon").css("margin-right", -num);
    console.log (num);

}