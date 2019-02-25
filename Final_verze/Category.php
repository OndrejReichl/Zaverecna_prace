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
</style>
</head>
<body>
<div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
  
  <div id="content">
    <h2><span style="color:#003300"> Kategorie Produktů</span></h2>
    <table width="100%" border="1" bordercolor="#003300" >
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eshop";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    }
    $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parts = parse_url($url);
    $sql ="SELECT kategorie,id_kategorie FROM kategorie";
    $result = $conn->query($sql);
    while ($row = $result->fetch()){
        echo "<td><a href='Products.php?kategorie=".$row["id_kategorie"]."'>".$row["kategorie"]."</a></td>";
    }

    ?>
 

    </table>
   
    <p>&nbsp;</p>
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
