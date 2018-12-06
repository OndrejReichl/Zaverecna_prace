<?php
session_start();
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
if(is_null($_SESSION['id'])||$_SESSION['id']==3){
    echo "Je treba se prihlsait.";
}
else {
    echo "nepsor";
    $sql = "SELECT * FROM hodnoceni WHERE id_uzivatele = '" . $_SESSION['id'] . "'";
    $result = $conn->query($sql);
    if ($result->rowCount() == 0) {
        $sql = "INSERT INTO hodnoceni (id_hodnoceni, id_uzivatele, id_zbozi, ohodnoceni) VALUES ('', '" . $_SESSION['id'] . "', '" . $_POST['idecko'] . "', '" . $_POST['hodnoceniVyber'] . "')";
    } else {
        $sql = "UPDATE hodnoceni SET ohodnoceni = " . $_POST['hodnoceniVyber'] . " WHERE id_uzivatele = '" . $_SESSION['id'] . "' AND id_zbozi = '" . $_POST['idecko'] . "'";

    }
    echo $sql;

    $result = $conn->query($sql);
}?>
<script>
    //window.history.go(-1);
</script>

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 11. 6. 2018
 * Time: 10:17
 */