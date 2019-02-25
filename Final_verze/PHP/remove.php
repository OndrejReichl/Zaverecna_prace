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

    $sql = "DELETE FROM polozky WHERE id_zbozi = ".$_POST['id_zbozi']." AND id_kosiku = ".$_SESSION['kosik'];
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

$sql = "DELETE FROM polozky WHERE id_zbozi = ".$_POST['id_zbozi']." AND id_kosiku = ".$_SESSION['kosik'];
echo $sql;
$result = $connection->query($sql);
$sql = "SELECT cenasdph, pocet, id_kosiku from prehled where id_kosiku = ".$_SESSION["kosik"];
$result = $connection->query($sql);
$row=$result->fetch();
$_SESSION['cena']= 0;
$_SESSION['pocet']= 0;
while($row = $result->fetch()){
    $_SESSION['cena']+= $row["cenasdph"]*$row["pocet"];
    $_SESSION['pocet']+= $row["pocet"];

}
?>
<script>
    window.history.go(-1);
</script>
/**
* Created by PhpStorm.
* User: Andrew
* Date: 12. 5. 2018
* Time: 17:52
*/