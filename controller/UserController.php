<?php
/**
 * UserController
 */

/**
 * UserController
 * Controls the user database.
 */
class UserController {

    private $userService = NULL;   // UserService holder

    /**
     * Creates a new UserService attached to a UserController
     */
    public function __construct() {
        $this->userService = new UserService();
    }

}

?>