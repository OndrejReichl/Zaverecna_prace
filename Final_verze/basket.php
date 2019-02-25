<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlavolamy & Deskovky</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style type="text/css">
        <!--
        .style8 {font-size: 24px}
        .style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
        -->
    </style>
</head>
<body>
<div id="wrapper">

    <?php
    include "Header.php";
    ?>
    <div id="content" width="200px">
        <?php
        if(!isset($_SESSION["kosik"])){
            echo "Zdá se že tu nic není.";
        }

        else {
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

            $sql = "SELECT cenasdph, id_polozky, id_zbozi, nazev, fotka, pocet, id_kosiku from prehled where id_kosiku = ".$_SESSION["kosik"];
            $result = $connection->query($sql);
            if($result->rowCount()==0){
                echo "Zdá se že tu nic není.";
            }
            else{

                echo "<h2>Košík</h2>";

                echo "<div>";
                echo "<table style='width: 100%'>";
                while($row = $result->fetch()){
                    echo "<tr>";
                    echo "<td>";
                    echo "<img src=\"data:image/jpeg;base64," . base64_encode($row['fotka']) . "\" style='width: 50px;'>";
                    echo "</td>";
                    echo "<td>";
                    echo $row['nazev'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['cenasdph'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['pocet'];
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='post' action='PHP/remove.php'>";
                    echo "<input type='submit' value='X'> \n";
                    echo "<input type='hidden' name='id_zbozi' id='id_zbozi' value=".$row["id_zbozi"]."> \n";
                    echo "<input type='hidden' name='id_polozky' id='id_polozky' value=".$row["id_polozky"]."> \n";

                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";

                }

                echo "</table>";
                echo "</div>";
                echo "<form method='post' action='PHP/order.php'>";
                echo "<input type='submit' value='Objednat'> \n";
                echo "</form>";

            }
            }

        ?>
    </div>
    <?php
    include "Right.php";
    ?>
    <div style="clear:both;"></div>
    <?php
    include "Footer.php";
    ?>
</div>
</body>
</html>
