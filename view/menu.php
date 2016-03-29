<script src="js/functions.js"></script>
<div id="navmenu" class="fastTrans shadow">

<!-- Close Button -->
<div id="navclose" onclick="toggleMenu();"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></div>
<!-- Close Button -->


<!-- Profile Info -->
<?php
    if($this->usrsrv->isLoggedIn()) {
        $_SESSION['form_submitted'] = true;
        echo '<div id="profilepic"><img src="images/user-512.png" alt="Profile Pic" /></div>';
        echo '<div id="profilename">'.$this->usrsrv->getName().'</div>';
        echo '<div class="clear"><br /></div>';
        echo '<div class="menuitem fastTrans">Edit Profile</div>';
        echo '<a href="logout.php"><div class="menuitem fastTrans">Log Out</div></a>';
    }
?>
<!-- Profile Info -->

<!-- Persistent Menu Items -->

<div class="menuitem fastTrans">Support</div>

<!-- Persistent Menu Items -->

</div>