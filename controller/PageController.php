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
        session_start();
        include 'view/header.php';
        if($this->usrsrv->isLoggedIn()) {
            include 'view/map.php';
        } else {
            include 'view/login.php';
        }
        include 'view/menu.php';
        include 'view/info.php';
        include 'view/footer.php';
    }

    public function displaySupport() {
        session_start();
        include 'view/header.php';
        include 'view/support.php';
        include 'view/menu.php';
        include 'view/footer.php';
    }

    public function displayProfileEditor() {
        session_start();
        include 'view/header.php';
        include 'view/profileeditor.php';
        include 'view/menu.php';
        include 'view/footer.php';
    }

    public function logout() {
        session_start();
        $_SESSION = array();
        echo '<script>parent.window.location.reload();</script>';
    }
}

?>