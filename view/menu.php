<script src="js/functions.js"></script>
<div id="navmenu" class="fastTrans shadow">

<!-- Close Button -->
<div id="navclose" onclick="toggleMenu();"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></div>
<!-- Close Button -->

<!-- Profile Info -->
<?php
    if($this->usrsrv->isLoggedIn()) {
        $_SESSION['form_submitted'] = true;
        //echo '<div id="profilepic"><img src="images/user-512.png" alt="Profile Pic" /></div>';
        echo '<div id="profilename">'.$this->usrsrv->getName().'</div>';
        echo '<div class="clear"><br /></div>';
        echo '<a href="index.php"><div class="menuitem fastTrans">Home</div></a>';
        echo '<a href="profile.php"><div class="menuitem fastTrans">Edit Profile</div></a>';
        echo '<a href="favourite.php"><div class="menuitem fastTrans">Favourites</div></a>';
        echo '<a href="logout.php" id="logoutbtn" onclick="FB.logout(function(response) {});"><div class="menuitem fastTrans">Log Out</div></a>';
    }
?>
<!-- Profile Info -->

<!-- Persistent Menu Items -->

<?php
    if(!$this->usrsrv->isLoggedIn()) {
        echo '<a href="index.php"><div class="menuitem fastTrans">Home</div></a>';
    }
?>

<a href="support.php"><div class="menuitem fastTrans">Support</div></a>

<!-- Persistent Menu Items -->

</div>