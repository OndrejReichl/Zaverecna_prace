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

        <table>
            <form action="PHP/complain.php" method="post" id="formComplain">

                <tr>
                    <td>
                        Číslo objednávky:

                    </td>
                    <td>
                        <input type='text' name = 'objednavka'>

                    </td>
                </tr>


                <tr>
                    <td>
                        Email:

                    </td>
                    <td>
                        <input type='text' name = 'email'>

                    </td>
                </tr>


                <tr>


                    <td>

                        Důvod (do 65 000 znaků):
                    </td>
                    <td>
                        <textarea name="stiznost"  style="max-width: 200px;"></textarea>

                    </td>
                </tr>
                <tr>

                    <td>

                    </td>
                    <td>
                        <input type='submit' value="Odeslat">

                    </td>
                </tr>
            </form>
         </table>

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
