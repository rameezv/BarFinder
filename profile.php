<?php

    require_once 'model/UserService.php'; // Attach User Service
    require_once 'controller/UserController.php'; // Attach User Controller
    require_once 'controller/PageController.php'; // Attach Page Controller

    $pc = new PageController();
    $pc->displayProfileEditor();

?>