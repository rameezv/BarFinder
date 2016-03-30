<?php
    session_start();
    require_once 'model/UserService.php'; // Attach User Service
    require_once 'controller/UserController.php'; // Attach User Controller

    $usrsrv = new UserController();
    if(isset($_POST['fbid'])) {
        if ($usrsrv->userExistsByFBID($_POST['fbid'])) {
            $usrsrv->loginFB($_POST['fbid']);
            echo $_SESSION['user'];
        } else {
            $usrsrv->addNewUser($_POST['email'], $_POST['name'], $_POST['pwd'], $_POST['fbid']);
            $usrsrv->loginFB($_POST['fbid']);
        }
    }
    header("Location: index.php");
    exit();
?>