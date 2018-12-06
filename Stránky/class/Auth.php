<?php

class Auth{
    static private $instance = NULL;
    static private $identity = NULL;

    static function getInstance() {
        if (self::$instance == NULL){
            self::$instance == new Auth();
        }
        return self::$instance;
    }

    function construct( ) {
        if (isset($_SESSION['identity'])){
            self::$identity = $_SESSION['identity'];
        }
    }

    function login($username, $password){
        $db = new Oracle();

    }
}

?>