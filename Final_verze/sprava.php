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
        .tabulka{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div id="wrapper">

    <?php
    include "Header.php";
    ?>
    <div id="content" width="200px">
        <?php
        if  ($_SESSION["role"]==2) {
            $pocetSloupcu;
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "eshop";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Connected successfully";
            } catch (PDOException $e) {
                // echo "Connection failed: " . $e->getMessage();
            }


            $sql = "SHOW tables";
            $tabulky;
            $result = $conn->query($sql);
            $i = 0;
            for ($i; $i < $result->rowCount(); $i++){
                $row = $result->fetch();
                $tabulka=$row[0];
                $tabulky[$i] = $tabulka;;
               // echo  $tabulky[$i];

            }

            $nmbTables = $result->rowCount();
            $i = 0;
            for ($i; $i < $nmbTables; $i++){
            $sql = "SHOW columns FROM ".$tabulky[$i];
                $result = $conn->query($sql);
                $sloupce;
                $j = 0;
                for ($j; $j < $result->rowCount(); $j++){
                    $row = $result->fetch();
                    $sloupec=$row[0];
                    $sloupce[$j]=$sloupec;
                }
                $pocetSloupcu = $result->rowCount();
                $sql = "SELECT ";
                $j = 0;
                for ($j; $j < $result->rowCount(); $j++){
                    $sql = $sql . $sloupce[$j];
                    if($j == $result->rowCount()-1){
                        $sql = $sql." ";
                    }
                    else{
                        $sql = $sql.", ";
                    }

                }
                $sql = $sql . "FROM ". $tabulky[$i];

                $tabulka = $tabulky[$i];
            $result = $conn->query($sql);
            $table = "<table class='tabulka'><tr>";
                $j = 0;
            for ($j; $j < $pocetSloupcu; $j++){
                $table = $table."<th>".$sloupce[$j]."</th>";
            }
                $table = $table."<th>Odstranit</th><th>Upravit</th></tr>";
            while($row=$result->fetch()){
                $j = 0;
                $table = $table."<tr>";
                for ($j; $j < $pocetSloupcu; $j++){
                    if($sloupce[$j]=="fotka"){
                        $table = $table . "<td><img src=\"data:image/jpeg;base64," . base64_encode($row['fotka']) . "\" style='width: 50px; padding : 5px'></td>";
                    }
                    else if($sloupce[$j]=="popis" || $sloupce[$j]=="heslo" || $sloupce[$j]=="duvod"){
                        $table = $table . "<td>" . substr($row[$sloupce[$j]],0,30) . "</td>";
                        }
                    else {
                        $table = $table . "<td>" . $row[$sloupce[$j]] . "</td>";
                    }
                }

                $table = $table."<td><form action='PHP/delete.php' method='post'>

<input type='hidden' name='nazev' value='".$sloupce[0]."'>
<input type='hidden' name='hodnota' value='".$row[$sloupce[0]]."'>
<input type='hidden' name='tabulka' value='".$tabulka."'>
<input type='submit' value='X'></form></td><td><form action='PHP/change.php' method='post'><input type='submit' value='Uprav'></form></td></tr>";
            }
                $table = $table."</table>";
            if($tabulka!="prehled") {
                echo ucwords("<h2>".$tabulka."</h2>");
                echo $table;
                echo "<form               action='PHP/toXML.php' method='post'>";
                echo "<input type='hidden' name='tabulka' value='".$tabulka."'>";
                $k = 0;
                $attr = "";
                for ($k; $k < $pocetSloupcu; $k++){
                    if($k == 0){
                    $attr = $attr."".$sloupce[$k];
                    }
                    else{
                        $attr = $attr.", ".$sloupce[$k];
                    }
                }
                echo "<input type='hidden' name='tabulka' value='".$tabulka."'>";
                echo "<input type='hidden' name='pocet' value='".$pocetSloupcu."'>";
                echo "<input type='hidden' name='attr' value='".$attr."'>";
                echo "<input type='submit' value='Do XML'><input type='hidden' name=" . $tabulky[$i] . " value=" . $tabulky[$i] . "><input type='hidden' name='vlastnosti' value='id_uzivatele, jmeno, prijmeni, email, heslo, id_adresy, ulice, mesto, psc, telefon'>";
                echo "</form>";
                echo "<form action='PHP/fromXML.php' method='post' enctype='multipart/form-data'>
<p>Vlož XML soubory: <input type=\"file\" name=\"myFile\"></p>
<input type=\"submit\" value=\"Vlož\">
</form>";
            }
        }

        }

        else{
            echo "Nejste oprávněn spravovat systém.";
        }
        ?>

        <p>&nbsp;</p>
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

<script>
    function ($id){
        $elm=document.getElementById($id);

    }
</script>
<script>
    function potvrzeni() {
        var txt;
        if (confirm("Opravdu chcete odstranit tuto položku?")) {
            txt = "You pressed OK!";
        } else {
            txt = "You pressed Cancel!";
        }
        document.getElementById("demo").innerHTML = txt;
    }
</script>

