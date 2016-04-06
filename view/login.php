<?php

    if(isset($_POST['fbid'])) {
        if ($this->usrsrv->userExistsByFBID($_POST['fbid'])) {
            $this->usrsrv->loginFB($_POST['fbid']);
        } else {
            echo '<script type="text/javascript">regFB();</script>';
        }
    }

    if(isset($_POST['btn-signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $upass = md5($_POST['pass']);
        $fbid = $_POST['fbid'];
        if ($this->usrsrv->addNewUser($email, $name, $upass, $fbid)) {
            if($this->usrsrv->checkInfo($email, $upass)) {
                session_start();
                $_SESSION['user'] = $email;
                echo '<script>parent.window.location.reload();</script>';
            } else {
                echo 'Error Logging In';
            }

        } else {
            echo 'Signup Error.';
        }
    }

    if(isset($_POST['btn-login'])) {
        $email = $_POST['email'];
        $upass = $_POST['pass'];
        if ($this->usrsrv->checkInfo($email, md5($upass))) {
            echo '<script>parent.window.location.reload();</script>';
        } else {
            echo '<div id="pralert">Error logging in, please check your info.</div>';
        }
    }
?>

<div id="login-form">

<div class="logform">
    <h2>Sign Up</h2>
    <form method="post" action="index.php" id="signupform">
    <table align="center" width="100%" border="0">
    <tr>
    <td><input type="text" name="name" placeholder="Your Name" id="signup-name" required /></td>
    </tr>
    <tr>
    <td><input type="email" name="email" placeholder="Your Email" id="signup-email" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="pass" placeholder="Your Password" id="signup-pwd" required /></td>
    <input type="hidden" name="fbid" id="signup-fbid" />
    </tr>
    <tr>
    <td><button type="submit" name="btn-signup">Sign Up</button></td>
    </tr>
    </table>
    </form>
</div>

<div class="logform">
    <h2>Log In</h2>
    <form method="post" action="index.php">
    <table align="center" width="100%" border="0">
    <tr>
    <td><input type="text" name="email" placeholder="Your Email" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="pass" placeholder="Your Password" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-login">Log In</button></td>
    </tr>
    </table>
    </form>
</div>

</div>



<div class="fb-login-button" scope="email,public_profile" style="margin-left:5%;" data-max-rows="1" data-size="xlarge" data-show-faces="true" data-auto-logout-link="false" onlogin="checkLoginState();"></div>