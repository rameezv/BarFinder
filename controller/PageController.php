<?php
/**
 * PageController
 */

/**
 * PageController
 * Controls the user database.
 */
class PageController {

    /**
     * Constructor
     */
    public function __construct() {

    }

    public function displayHome() {
        include 'view/header.php';
        include 'view/map.php';
        include 'view/menu.php';
        include 'view/info.php';
        include 'view/footer.php';
    }

}

?>