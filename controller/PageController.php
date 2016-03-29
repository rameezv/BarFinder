<?php
/**
 * PageController
 */

/**
 * PageController
 * Controls the user database.
 */
class PageController {
    private $usrsrv = NULL;
    /**
     * Constructor
     */
    public function __construct() {
        $this->usrsrv = new UserController();
    }

    public function displayHome() {
        include 'view/header.php';
        session_start();
        if($this->usrsrv->isLoggedIn()) {
            include 'view/map.php';
        } else {
            include 'view/login.php';
        }
        include 'view/menu.php';
        include 'view/info.php';
        include 'view/footer.php';
    }
}

?>