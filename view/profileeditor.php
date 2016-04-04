<?php
    if(isset($_POST['btn-updatepr'])) {
        $name = $_POST['name'];
        $upass = md5($_POST['pass']);
        $upasscon = md5($_POST['pass-con']);

        echo '<div id="pralert">';

        if (empty($_POST['pass'])) {
            if ($this->usrsrv->updateUserName($name)) {
                echo "Updated Profile!";
            } else {
                echo "Error: Please check your input! If problem persists, find a nearby bar manually.";
            }
        } elseif ($upass == $upasscon && !empty($name)) {
            if ($this->usrsrv->updateUserNameAndPW($name, $upass)) {
                echo "Updated Profile and Changed Password!";
            } else {
                echo "Error: Please check your input! If problem persists, find a nearby bar manually.";
            }
        } elseif (!empty($name)) {
            echo 'Passwords do not match. Please check your input.';
        } else {
            echo 'Unknown Error: Please check your input! If problem persists, find a nearby bar manually.';
        }

        echo '</div>';
    }

    if (isset($_POST['del'])) {
        if ($this->usrsrv->deleteUser()) {
            $_SESSION['user'] = NULL;
            session_destroy();
            header("Location: logout.php");
            exit();
        } else {
            echo '<div id="pralert">Unknown Error. If problem persists, find a nearby bar manually.</div>';
        }
    }
?>

<div id="information" class="shadow">

<h2 style="margin-top:0;">Edit Profile</h2>

Account: <b><?php echo $this->usrsrv->getEmail(); ?></b>
<br />

<div id="profile-form">

<div class="proform">
    <form method="post" action="profile.php" id="profileform">
    <table align="center" width="100%" border="0">
    <tr>
    <td><input type="text" name="name" placeholder="Your Name" id="signup-name" value="<?php echo $this->usrsrv->getName();?>" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="pass" placeholder="New Password" id="signup-pwd" /></td>
    </tr>
    <tr>
    <td><input type="password" name="pass-con" placeholder="Confirm New Password" id="signup-pwd" /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-updatepr">Update Profile</button></td>
    </tr>
    </table>
    </form>

<a href="#" onclick="deleteProfile();">Delete Profile</a>
</div>

</div>

</div>