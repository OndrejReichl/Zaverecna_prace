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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "eshop";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //  echo "Connected successfully";
        } catch (PDOException $e) {
            // echo "Connection failed: " . $e->getMessage();
        }

        $nazev = "";
        $sql = "SELECT DISTINCT id_zbozi,   fotka, popis, pocet, nazev, cena, dph, ceil(cena * (1 + dph)) as cenasdph FROM zbozi WHERE id_zbozi = ".$_GET["id_zbozi"];
        $result = $conn->query($sql);
        $row = $result->fetch();




        echo "<h2><span style=\"color:#003300\">".$row["nazev"]." </span></h2>";


        echo "<table>";
        echo "<tr>";
        echo "<td>";
        echo "<img src=\"data:image/jpeg;base64," . base64_encode($row['fotka']) . "\" style='width: 200px; padding : 5px'>";
        echo "</td>";
        echo "<td>";
        echo "<li id='hodnoty' style='list-style-type: none'>";
        echo "<ul>Cena: ".$row['cena'].",-</ul>";
        echo "<ul>DPH: ".($row['dph']*100)."%</ul>";
        echo "<ul>Počet ks: ".$row['pocet']."</ul>";

        echo "<ul>Cena s DPH: ".($row['cenasdph']).",-</ul>";
        echo "</li>";
        echo "</td>";

        echo "</tr>";
        echo "<tr>";
        echo "<td style='text-align: center'>";
        echo "<form method='post' action='PHP/addToCart.php'>";
        echo "<input type='submit' value='Přidat do košíku'> \n";
        echo "<input type='hidden' name='id_zbozi' id='id_zbozi' value=".$row["id_zbozi"]."> \n";
        echo "</form>";
        echo "</td>";
        echo "<td >";
        echo $row["popis"];
        echo "</td>";
        echo "</tr>";

        echo "</table>";

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
