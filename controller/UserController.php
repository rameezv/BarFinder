<?php
/**
 * UserController
 */

/**
 * UserController
 * Controls the user database.
 */
class UserController {
    private $service = NULL;

    public function __construct() {
        $this->service = new UserService();
    }

    public function addNewUser($email, $name, $password) {
        return $this->service->addUser($email, $name, $password );
    }

    public function checkInfo($email, $password) {
        return $this->service->checkInfo($email, $password);
    }

    public function isLoggedIn() {
        return isset($_SESSION['user'])!="";
    }

    public function getName() {
        $result = $this->service->getUserData();
        return $result[0]['name'];
    }

}

?>