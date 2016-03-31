<!doctype html>
<html>
<head>
<title>BarMeUp</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="js/functions.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
<script type="text/javascript">
$(document).bind("mobileinit", function () {
    $.mobile.ajaxEnabled = false;
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
<script src="js/bootstrap.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="initial-scale=1.0">
<meta charset="utf-8">
</head>

<body>

<div id="header" class="shadow">
<a href="index.php"><h1><span class="glyphicon glyphicon-glass" style="font-size:28pt" aria-hidden="true"></span>&nbsp;BarMeUp</h1></a>
<div id="menuIcon" onclick="toggleMenu();" class="fastTrans"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>
<div class="clear"></div>
</div>