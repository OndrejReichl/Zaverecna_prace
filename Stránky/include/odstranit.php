<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "heraldika";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    {
    // echo "Connection failed: " . $e->getMessage();
}

$sql = "DELETE FROM ".$_POST['tabulka']." ".$_POST['id']." = ".$_POST['hodnota']." AND id_kosiku = ".$_SESSION['kosik'];
echo $sql;
$result = $connection->query($sql);
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 12. 5. 2018
 * Time: 17:52
 */
//set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$sql = "DELETE FROM polozky WHERE id_zbozi = ".$_POST['id']." AND id_kosiku = ".$_SESSION['kosik'];
echo $sql;
$result = $connection->query($sql);
$sql = "SELECT SUM(cenasdph) as cenaCelkem, SUM(pocet) as pocetCelkem from prehled where id_kosiku = ".$_SESSION["kosik"];
$result = $connection->query($sql);
$row=$result->fetch();
echo $sql;
$_SESSION['cena']= $row['cenaCelkem'];
$_SESSION['pocet']= $row['pocetCelkem'];
echo "Cena ".$_SESSION['cena'];
echo "Pocet ".$_SESSION['pocet'];
?>
<script>
    window.history.go(-1);
</script>