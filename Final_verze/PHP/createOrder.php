<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
date_default_timezone_set('Europe/Prague');
$info = getdate();
echo "info:".$info;
//$time_posted = date("Y-m-d H:i:s", $info);
$time_posted = date("Y-m-d H:i:s", time());
$adresa = NULL;
echo "Datum:".$time_posted;
if($_POST['adresa']==0){

    $sql_adresa = "SELECT id_adresy FROM uzivatele WHERE id_uzivatele = ".$_SESSION['id'];
    $result_adresa = $conn->query($sql_adresa);
    $row=$result_adresa->fetch();
    $adresa = $row['id_adresy'];
}
else{
    $sql_adresa = "INSERT INTO adresy (id_adresy, ulice, mesto, psc) VALUES ('', '".$_POST['f_ulice']."', '".$_POST['f_mesto']."', ".$_POST['f_psc'].") ";
    echo "<br>".$sql_adresa;
    $conn->query($sql_adresa);
    $last_id = $conn->lastInsertId();
    $adresa=$last_id;
}
$sql ="INSERT INTO objednavky(id_objednavky, id_kosiku, id_dopravy, id_adresy, id_platby, id_stavu, datum_doruceni, datum_objednani) VALUES  ('',".$_SESSION['kosik'].","
    .$_POST['doprava'].",".$adresa.",".$_POST['platba'].", 1 ,'".$time_posted."','".$time_posted."')";
echo $sql;
$result = $conn->query($sql);
$_SESSION['kosik']=NULL;
$_SESSION['pocet']=0;
$_SESSION['cena']=0;

echo "<br>Vaše objednávka byla přijata ke zpracování.";?>
<script>
window.location.replace("./index.php");
</script>