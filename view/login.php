<?php

    if(isset($_POST['btn-signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $upass = md5($_POST['pass']);
        if ($this->usrsrv->addNewUser($email, $name, $upass)) {
            header('Location: index.php');
            exit();
        } else {
            echo 'Signup Error.';
        }
    }

    if(isset($_POST['btn-login'])) {
        $email = $_POST['email'];
        $upass = $_POST['pass'];
        if ($this->usrsrv->checkInfo($email, $upass)) {
            header('Location: index.php');
            exit();
        } else {
            echo 'Error.';
        }
    }
?>
<div id="login-form">

<div class="logform">
    <h2>Sign Up</h2>
    <form method="post" action="index.php">
    <table align="center" width="30%" border="0">
    <tr>
    <td><input type="text" name="name" placeholder="Your Name" required /></td>
    </tr>
    <tr>
    <td><input type="email" name="email" placeholder="Your Email" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="pass" placeholder="Your Password" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-signup">Sign Me Up</button></td>
    </tr>
    </table>
    </form>
</div>

<div class="logform">
    <h2>Log In</h2>
    <form method="post" action="index.php">
    <table align="center" width="30%" border="0">
    <tr>
    <td><input type="text" name="email" placeholder="Your Email" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="pass" placeholder="Your Password" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-login">Sign In</button></td>
    </tr>
    </table>
    </form>
</div>

</div>
