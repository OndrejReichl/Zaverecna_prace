<?php

session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "eshop";

        try {
            $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
//je li vybrán anonym

        if((is_null($_SESSION["kosik"])||defined($_SESSION["kosik"]))&&is_null($_SESSION['login_user'])){
            echo "Vybrán anonym.<br>";
            $sql = "SELECT id_uzivatele, role FROM uzivatele WHERE role < 0";
            $result = $connection->query($sql);
            $row = $result->fetch();
            $id = $row["id_uzivatele"];
            $sql = "insert into kosiky(id_kosiku, id_uzivatele) VALUES ('','".$id."')";
            $result = $connection->query($sql);
            $_SESSION['kosik']= $connection->lastInsertId();
        }
        else if((is_null($_SESSION["kosik"])||defined($_SESSION["kosik"]))&&!is_null($_SESSION['login_user'])){
            echo "Vybrán uživatel.<br>";
            $sql = "SELECT id_uzivatele, email FROM uzivatele WHERE email = '".$_SESSION['login_user']."'";
            $result = $connection->query($sql);
            $row = $result->fetch();
            $id = $row["id_uzivatele"];
            $sql = "insert into kosiky(id_kosiku, id_uzivatele) VALUES ('','".$id."')";
            $result = $connection->query($sql);
            $_SESSION['kosik']= $connection->lastInsertId();
        }
$id_zbozi = $_POST["id_zbozi"];

        $sql = "SELECT pocet FROM polozky WHERE id_zbozi =".$id_zbozi ." AND id_kosiku = ".$_SESSION['kosik'];

echo $sql;
$result = $connection->query($sql);
echo "<br>pocet radku: ".$result->rowCount();
$pocetR = $result->rowCount();
echo $pocetR;
if($pocetR>0){
    $row=$result->fetch();
    $pocet = $row['pocet'];
    $sql="UPDATE prehled SET pocet = '".($pocet+1)."' WHERE id_zbozi =".$id_zbozi ." AND id_kosiku = ".$_SESSION['kosik'];
    $result = $connection->query($sql);
}
else{
    echo "hovno2";
    $sql = "INSERT INTO polozky(id_polozky, id_zbozi, id_kosiku, pocet) VALUES ('','".$id_zbozi."','".$_SESSION['kosik']."' ,'1')";
    $result = $connection->query($sql);
    echo $sql;
}

$sql = "SELECT cenasdph, pocet, id_kosiku from prehled where id_kosiku = ".$_SESSION["kosik"];
$result = $connection->query($sql);
//$row=$result->fetch();
$_SESSION['cena']= 0;
$_SESSION['pocet']= 0;
while($row = $result->fetch()){
    $_SESSION['cena']+= $row["cenasdph"]*$row["pocet"];
    $_SESSION['pocet']+= $row["pocet"];

}
echo $sql;
echo "<br/>SessionCena".$_SESSION['cena'];
echo "<br/>SessionPocet".$_SESSION['pocet'];?>
<script>
    window.history.go(-1);
</script>
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 3. 5. 2018
 * Time: 15:51
 */