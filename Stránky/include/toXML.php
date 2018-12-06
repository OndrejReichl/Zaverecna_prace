<?php
$nazev = $_POST["tabulka"];
$attr = $_POST["vlastnosti"];
$vlastnosti = explode(", ",$attr);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "heraldika";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
}
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);

$xml = new SimpleXMLElement('<'.$_POST["tabulka"].'></'.$_POST["tabulka"].'>');

$sql = "SELECT";
for ($i = 0; $i < count($vlastnosti); $i++) {
    if ($i == 0) {
        $sql = $sql . " " . $vlastnosti[$i];
    } else {
        $sql = $sql . ", " . $vlastnosti[$i];
    }
}
$sql = $sql ." FROM ".$nazev;
//echo $sql;
$result = $conn->query($sql);
$row = $result->fetchAll();


for($i = 0; $i < $result->rowCount(); $i++) {
    $member = $xml->addChild("Objekt");
    for ($j = 0; $j < count($vlastnosti); $j++) {
        $member->addChild($vlastnosti[$j],$row[$i][$vlastnosti[$j]]);
    }
}

header("Content-type: text/xml");
header('Content-Disposition: attachment;filename='.$nazev.'.xml');
echo $xml->saveXML();

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 29.10.2018
 * Time: 21:3
 */

