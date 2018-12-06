<?php
session_start();


if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
        echo $error;
    }

    else
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "heraldika";

        try {
            $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo "Connected successfully";
        }
        catch(PDOException $e)
        {
           // echo "Connection failed: " . $e->getMessage();
        }
// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        //$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        //$username = mysql_real_escape_string($username);
        //$password = mysql_real_escape_string($password);
// Selecting Database
        // $db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.
        $sql = "select id_uzivatele,heslo,email,role from uzivatele where  email='".$username."'";
       // echo $sql;
        $result = $connection->query($sql);
        if ($result->rowCount() == 1) {
            $row = $result->fetch();
            echo $password."===".$row["heslo"];
            if (password_verify($password,$row["heslo"])){
                $_SESSION['login_user']=$username; // Initializing Session
                $_SESSION['role']=$row['role'];
                $_SESSION['id']=$row['id_uzivatele'];
                echo "All is fine.";
                echo $_SESSION['role'];
                echo $_SESSION['id'];
            }
            else {
                $error = "Username or Password isss invalid";
                echo $error;
            }
        } else {
            $error = "Username or Password is invalid";
            echo $error;
        }
        // mysql_close($connection); // Closing Connection
    }
}
?>
<?php
//include('include/Prihlaseni.php'); // Includes Login Script

//if(isset($_SESSION['login_user'])){
//    header("location: obsah.php");
//}
?>

<?php
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
    </head>
    <body>
    <div class="banner">
        <div class="container">
            <div class="header_top">
                <div class="header_top_left">
                    <div class="box_11"><a href="checkout.php">
                            <h4>Košík: <?php if(isset($_SESSION['cena'])) {echo $_SESSION['cena'];} else {echo "0";} ?>,- (<?php if(isset($_SESSION['pocet'])) {echo $_SESSION['pocet'];} else {echo "0";} ?> ks)</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
                        </a></div>
                    <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>
                <div class="header_top_right">

                    <ul class="header_user_info">
                        <a class="login" href="login.php">
                            <i class="user"> </i>


                            <div class="clearfix">
                                <?php

                                if(!is_null($_SESSION['login_user'])){
                                    echo '<li class="user_desc">'.$_SESSION['login_user'].'</li>';
                                }
                                else{
                                    $_SESSION['login_user']=NULL;
                                    echo '<li class="user_desc">Přihlásit se</li>';
                                }
                                ?>
                        </a>


                        <!-- start search-->

                </div><div class="search-box">
                    <?php
                    echo '<a href="obsah.php?co=odhlaseni">';

                    if(!is_null($_SESSION['login_user'])){
                        echo '<li class="user_desc">Odhlásit se</li>';
                    }
                    else{

                    }

                    echo '</a>';
                    ?>
                </div><div class="search-box">
                    <?php
                    echo '<a href="obsah.php?co=registrace">';

                    if(!is_null($_SESSION['login_user'])){

                    }
                    else{
                        echo '<li class="user_desc">Registrace</li>';
                    }

                    echo '</a>';
                    ?>
                </div>
                <div class="search-box">
                    <?php
                    echo '<a href="obsah.php?co=sprava">';

                    if(!is_null($_SESSION['role'])&&$_SESSION['role']>0){
                        echo '<li class="user_desc">Správa systému</li>';
                    }
                    else{

                    }

                    echo '</a>';
                    ?>
                </div>
                </ul>
                <!----search-scripts---->
                <script src="js/classie1.js"></script>
                <script src="js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!----//search-scripts---->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="header_bottom">
            <div class="logo">
                <h1><a href="index.html"><span class="m_1">W</span>atches</a></h1>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li><a class="color2" href="#">Zboží</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Muži</h4>
                                        <ul>
                                            <li><a href="obsah.php?co=man">Trika</a></li>
                                            <li><a href="obsah.php?co=man">Mikiny</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Ženy</h4>
                                        <ul>
                                            <li><a href="men.html">Watches</a></li>
                                            <li><a href="men.html">Outerwear</a></li>
                                            <li><a href="men.html">Dresses</a></li>
                                            <li><a href="men.html">Handbags</a></li>
                                            <li><a href="men.html">Trousers</a></li>
                                            <li><a href="men.html">Jeans</a></li>
                                            <li><a href="men.html">T-Shirts</a></li>
                                            <li><a href="men.html">Shoes</a></li>
                                            <li><a href="men.html">Coats</a></li>
                                            <li><a href="men.html">Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="h_nav">
                                        <h4>Trends</h4>
                                        <ul>
                                            <li class>
                                                <div class="p_left">
                                                    <img src="images/p1.jpg" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">watches</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                    <img src="images/p2.jpg" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">watches</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                            <li>
                                                <div class="p_left">
                                                    <img src="images/p3.jpg" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="p_right">
                                                    <h4><a href="#">Denim shirt</a></h4>
                                                    <span class="item-cat"><small><a href="#">watches</a></small></span>
                                                    <span class="price">29.99 $</span>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li><a class="color10" href="obsah.php?co=generator">Tvorba erbu</a></li>
                    <li><a class="color7" href="404.html">Novinky</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    </div>
    <div id="main">
        <?php
        if(!defined($_SESSION['role'])){
        echo "<h1>PHP Login Session Example</h1>".$_SESSION['role'];
echo "<div id=\"login\">";
    echo "        <h2>Login Form</h2>";
          echo "  <form action=\"\" method=\"post\">";
                echo "<label>Email :</label>";
              echo "  <input id=\"name\" name=\"username\" placeholder=\"username\" type=\"text\">";
               echo " <label>Password :</label>";
               echo " <input id=\"password\" name=\"password\" placeholder=\"**********\" type=\"password\">";
                echo "<input name=\"submit\" type=\"submit\" value=\" Login \">";
                echo "<span><?php echo $error; ?></span>";
            echo "</form>";
echo "</div>";}
else{
            echo "Přihlášení proběhlo úspěšně.";
}
    ?>
    </div>
    <div class="footer">
        <div class="container">
            <div class="newsletter">
                <h3>Newsletter</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <y>
                    <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                    <input type="submit" value="SUBSCRIBE">
                </y>
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