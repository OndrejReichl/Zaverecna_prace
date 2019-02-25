<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";
try {
$connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
// set the PDO error mode to exception
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * from objednavky where id_objednavky = ".$_POST["objednavka"];
echo $sql;
$result = $connection->query($sql);
if  (  $result->rowCount()== 1 ){
    $sql = "INSERT INTO reklamace(id_reklamace, id_objednavky, duvod, id_stavu) VALUES 
('', '".$_POST["objednavka"]."', '".$_POST["stiznost"]."', '1')";
    echo $sql;
    $connection->query($sql);
}
else {
    echo "Objednavka neexistuje";
}
?>
<script>
    window.history.go(-1);
</script>
