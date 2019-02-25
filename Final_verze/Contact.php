<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="HandheldFriendly" content="true">
<title>Hlavolamy & Deskovky</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style10 {
	font-size: 100%;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="wrapper">

  <?php
  include "Header.php";
  ?>

  <div id="content">
    <h2><span style="color:#003300"> Kontaktujete nás</span></h2>
    <table width="100%" height="152" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#BCE0A8"><span class="style10">Kontaktní adresa</span></td>
        <td bgcolor="#BCE0A8"><span class="style10">Adresa pobočky</span></td>
      </tr>
      <tr>
        <td>Hlavní 35<br/>Dolany<br/>53250</td>


        <td>Vedlejší 55<br/>
          Pardubice
<br/>
33100</td>
      </tr>
      <tr>
        <td>Telefon: 012345678</td>
        <td>Telefon: 022334455</td>
      </tr>
      <tr>
        <td>Email: info@deskovky.cz</td>
        <td>Email: info@deskovky.cz</td>

      </tr>
			<td>Website: <a href="https://hlavolamy-deskovky.cz/">www.hlavolamy-deskovky.cz</a> </td>
			<td>Website: <a href="https://hlavolamy-deskovky.cz/">www.hlavolamy-deskovky.cz</a> </td>
    </table>
   
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
