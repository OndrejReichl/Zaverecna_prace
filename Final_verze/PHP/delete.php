<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    {
        //echo "Connection failed: " . $e->getMessage();
    }

    $sql = "DELETE FROM ".$_POST["tabulka"]." WHERE ".$_POST["nazev"]." = ".$_POST["hodnota"];
    echo $sql;
    $result = $connection->query($sql);
    /**
     * Created by PhpStorm.
     * User: Andrew
     * Date: 12. 5. 2018
     * Time: 17:52
     */
// set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>
<script>
   // window.history.go(-1);
</script>
/**
* Created by PhpStorm.
* User: Andrew
* Date: 12. 5. 2018
* Time: 17:52
*/