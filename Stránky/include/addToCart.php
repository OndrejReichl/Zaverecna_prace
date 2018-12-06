<?php

session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "heraldika";

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
// Define $username and $password
        //$username=$_POST['username'];
        //$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        //$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
        //$username = stripslashes($username);
        //$password = stripslashes($password);
        //$username = mysql_real_escape_string($username);
        //$password = mysql_real_escape_string($password);
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

$sql = "SELECT id_zbozi FROM sortiment WHERE nazev = \"".$_POST["nazev"]."\" AND typ = \"".$_POST["varianta"]."\"";
        echo $sql;
$result = $connection->query($sql);
$row=$result->fetch();
$id_zbozi = $row['id_zbozi'];
$sql = "SELECT pocet FROM prehled WHERE id_zbozi =".$id_zbozi ." AND id_kosiku = ".$_SESSION['kosik'];
echo $sql;
$result = $connection->query($sql);
echo "<br>pocet radku: ".$result->rowCount();
if($result->rowCount()>0){
    $row=$result->fetch();
    $pocet = $row['pocet'];
    $sql="UPDATE prehled SET pocet = '".($pocet+1)."' WHERE id_zbozi =".$id_zbozi ." AND id_kosiku = ".$_SESSION['kosik'];
    $result = $connection->query($sql);
}
else{
    $sql = "INSERT INTO polozky(id_polozky, id_zbozi, id_kosiku, pocet) VALUES ('','".$id_zbozi."','".$_SESSION['kosik']."' ,'1')";
    $result = $connection->query($sql);
}

$sql = "SELECT SUM(cenasdph) as cenaCelkem, SUM(pocet) as pocetCelkem from prehled where id_kosiku = ".$_SESSION["kosik"];
$result = $connection->query($sql);
$row=$result->fetch();
echo $sql;
$_SESSION['cena']= $row['cenaCelkem'];
$_SESSION['pocet']= $row['pocetCelkem'];
echo "<br/>Cena".$row['cenaCelkem'];
echo "<br/>Pocet".$row['pocetCelkem'];
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