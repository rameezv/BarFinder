<?php
session_start();

if( empty($_SESSION['user']) ) {
     print "No";
}
else {
     print "Yes," . $_SESSION['user'];
}

?>