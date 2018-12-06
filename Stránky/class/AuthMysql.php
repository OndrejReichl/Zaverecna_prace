<?php

class AuthMysql
{

    static private $instance = NULL;
    static private $identity = NULL;

    static function getInstance()
    {
        if (self::$instance == NULL) {
            self::$instance = new AuthMysql();
        }
        return self::$instance;
    }

    function __construct()
    {
        if (isset($_SESSION['identity'])) {
            self::$identity = $_SESSION['identity'];
        }
    }

    function login($username, $password)
    {
        $db = new Database();
        $db->query('SELECT * FROM users WHERE username = :username AND password = :password');
        $db->bind(":username", $username);
        $db->bind(":password", $password);
        $r = $db->single();

        if ($r != false) {
            if (count($r) > 0) {
                $profil = array('username' => $r['username'][0], 'email' => $r['password'][0]);
                $_SESSION['identity'] = $profil;
                self::$identity = $profil;
                return true;
            } else {
                self::$identity = NULL;
                return false;
            }
        } else {
            return false;
        }
    }

    function hasIdentity()
    {
        if (self::$identity == NULL) {
            return false;
        }
        return true;
    }

    function getIdentity()
    {
        if (self::$identity == NULL) {
            return false;
        }
        return self::$identity;
    }

    function logout()
    {
        unset($_SESSION['identity']);
        $_SESSION = array();
        session_destroy();
        self::$identity = NULL;;
    }

}

?>
