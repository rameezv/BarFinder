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

    public function addNewUser($email, $name, $password, $fbid) {
        return $this->service->addUser($email, $name, $password, $fbid );
    }

    public function addFav($email, $name, $address, $phone){
        return $this->service->addUserFav($email, $name, $address, $phone);
    }

    public function getUFav(){
        return $this->service->getUserFav();
    }

    public function delUFav($name){
        return $this->service->deleteUserFav($name);
    }

    public function checkInfo($email, $password) {
        return $this->service->checkInfo($email, $password);
    }

    public function isLoggedIn() {
        return (isset($_SESSION['user']) && ($_SESSION['user']!=""));
    }

    public function getName() {
        $result = $this->service->getUserData();
        return $result[0]['name'];
    }

    public function getEmail() {
        $result = $this->service->getUserData();
        return $result[0]['id'];
    }

    public function updateUserName($name) {
        return $this->service->updateUser($this->getEmail(), $name, NULL);
    }

    public function updateUserNameAndPW($name, $pw) {
        return $this->service->updateUser($this->getEmail(), $name, $pw);
    }

    public function deleteUser() {
        return $this->service->deleteUser($this->getEmail());
    }

    public function userExistsByFBID($fbid) {
        return $this->service->checkFBID($fbid);
    }

    public function loginFB($fbid) {
        if ($this->service->setFBses($fbid)) {
            //header('Location: index.php');
            //exit();
        }
    }

    public function getClubs(){
        return $this->service->getClubData();
    }

}

?>