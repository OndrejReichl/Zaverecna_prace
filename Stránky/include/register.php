<?php
session_start();
if(!is_null($_SESSION['login_user'])){
    echo '<li class="user_desc">'.$_SESSION['login_user'].'</li>';
}
else{
    $_SESSION['login_user']=NULL;
    echo '<li class="user_desc">My Account</li>';
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "heraldika";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
}
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
$sql ="INSERT INTO adresy VALUES ( '', \"".$_POST["ulice"]."\", \"".$_POST["mesto"]."\", \"".$_POST["psc"]."\")";
echo $sql."<br>";
$result = $conn->query($sql);
$sql = "SELECT LAST_INSERT_ID()";
$id  = $conn->lastInsertId();

echo "ID: ".$id."<br>";
$sql ="INSERT INTO uzivatele VALUES ( NULL,'".$_POST["email"]."', '".$_POST["jmeno"]."', '".$_POST["prijmeni"]."', '".$_POST["heslo"]."', 0, ".$_POST["telefon"].", ".$id.")";
echo $sql."<br>";
$result = $conn->query($sql);
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28. 4. 2018
 * Time: 17:18
 */