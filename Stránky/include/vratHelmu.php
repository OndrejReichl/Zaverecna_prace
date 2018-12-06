<?php
// function  returnHelmet ($barva1,$barva2){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "heraldika";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
   // echo "Connection failed: " . $e->getMessage();
}






$sql = "SELECT id_helmy, helma
  FROM helmy WHERE id_helmy = ".($_REQUEST['barva1']+$_REQUEST['barva2']);
$result = $conn->query($sql);
$row = $result->fetch();
echo $row['helma'];
?>

