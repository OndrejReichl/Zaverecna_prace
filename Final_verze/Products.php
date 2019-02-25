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
        .style5 {font-size: 85%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
        .style3 {font-weight: bold}
        .style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
        -->

        .products {
            display: flex;
            flex-wrap: wrap;
        }

        .product-card {
            padding: 2%;
            flex-grow: 1;
            flex-basis: 16%;

            display: inline-block;

            border-color: lightgrey;
            border-style: solid;
            border-width: 1px;
        }
        .product-image img {
            max-width: 100%;
        }

        @media (max-width: 920px) {
            .product-card {
                flex: 1 21%;
                display: inline-flex;
                width: 100%;
                alignment: center;
            }
        }
    </style>
</head>
<body>
<div id="wrapper">

    <?php
    include "Header.php";
    ?>

    <div id="content">
<a href="Category.php">Zpět</a>
        <section class="products">
<ul>
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
                        $kategorie = $_GET["kategorie"];
                    $sql = "SELECT DISTINCT id_zbozi,   fotka, nazev, ceil(cena * 1.21) as cenasdph FROM zbozi WHERE id_kategorie = ".$kategorie." ORDER BY  nazev ASC";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch()){
                        if ($nazev != $row["nazev"]) {
                            echo "<a href='zbozi.php?id_zbozi=".$row["id_zbozi"]."'> <li class=\"product-card\" style='width: 200px'>\n";
                            echo "<div class=\"view view-first\">\n";
                            echo "<div class=\"inner_content clearfix\">\n";
                            echo "<div class=\"product_image\">\n";
                            echo "<div class=\"mask1\">" . '<img src="data:image/jpeg;base64,' . base64_encode($row['fotka']) . '" style=\'width: 200px;\'>' . " </div>\n";
                            echo "<div class=\"mask\">\n";
                            echo "</div>\n";
                            echo "<div class=\"product_container\">\n";
                            echo "<h4>" . $row["nazev"] . "</h4>\n";
                            echo "<div class=\"price mount item_price\">" . $row["cenasdph"] . ",-</div>\n";
                            echo "<form method='post' action='.\PHP\addToCart.php'>";
                            echo "<input type='submit' value='Přidat do košíku'> \n";
                            echo "<input type='hidden' name='id_zbozi' id='id_zbozi' value=".$row["id_zbozi"]."> \n";
                            echo "</form>";
                            echo "</div>\n";
                            echo "</div>\n";
                            echo "</div>\n";
                            echo "</div>\n";
                            echo "</li>\n";
                            echo "</a>\n";
                            $nazev = $row["nazev"];
                        }
                    }

            ?>


</ul>

        </section>
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
