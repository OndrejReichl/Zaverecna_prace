<?php
session_start();
function __autoload ($trida) {
    require_once ('./class/'.$trida.'.php');
}



if (isset($_POST['newsletter'])) {
    if(!empty($_POST['email'])) {
        if ((preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email']))) {
            //@to-do zavest adresu do DB
            $message = 'Přihlášení k odběru proběhlo v pořádku.';
        } else {
            $message = 'Emailová adresa je ve špatném formátu.';
        }
    } else {
        $message = 'Je nutné zadat emailovou adresu.';
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Tvorba erbů</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <link rel="stylesheet" href="examples/css/sample.css" />
    <script src="js/jquery/jquery-1.9.0.min.js"></script>
    <!-- <msdropdown> -->
    <link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" />
    <script src="js/msdropdown/jquery.dd.js"></script>
    <!-- </msdropdown> -->

    <link rel="stylesheet" type="text/css" href="css/msdropdown/skin2.css" />
    <link rel="stylesheet" type="text/css" href="css/msdropdown/flags.css" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script src="js/jquery.easydropdown.js"></script>
    <script src="js/simpleCart.min.js"> </script><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script><script src="js/msdropdown/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" />
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script src="js/jquery.easydropdown.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <script src="js/simpleCart.min.js"> </script>
<style>
    .malyStit {
        height: 300%;
        width: 20%;

    }
    table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 10px;
}
</style>
</head>
<body>

<?php
include "include/banner.php";
if(is_null($_GET['co'])){
    $_GET['co']="";
}
switch ($_GET['co']) {
    case 'generator': include 'generator.php';
        break;
    case 'login': include 'login.php';
        break;
    case 'man': include 'man.php';
        break;
    case 'sprava': include 'include/sprava.php';
        break;
    case 'zbozi': include 'zbozi.php';
        break;
    case 'login.php': include 'include/prihlaseni.php';
        break;
    case 'odhlaseni': include 'include/odhlaseni.php';
        break;
    case 'registrace': include 'include/registrace.php';
        break;
    default: include 'include/domu.php';
        break;
}
?>
<div class="footer">
    <div class="container">
        <div class="newsletter">
            <h3>Newsletter</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
            <form>
                <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                <input type="submit" value="SUBSCRIBE">
            </form>
        </div>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <ul class="social">
            <li><a href=""> <i class="instagram"> </i> </a></li>
            <li><a href=""><i class="fb"> </i> </a></li>
            <li><a href=""><i class="tw"> </i> </a></li>
        </ul>
        <div class="clearfix"></div>
        <div class="copy">
            <p> &copy; 2015 Watches. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
        </div>
    </div>
</div>
</body>

</html>
<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 30. 12. 2017
 * Time: 23:44
 */