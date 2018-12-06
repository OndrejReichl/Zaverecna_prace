<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Watches an E-Commerce online Shopping Category Flat Bootstrap Responsive Website Template| Checkout ::
        w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });</script>
    <script src="js/jquery.easydropdown.js"></script>
    <script src="js/simpleCart.min.js"></script>
</head>
<body>
<!DOCTYPE HTML>
<html>
<head>
    <title>Tvorba erbů</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });</script>
    <script src="js/jquery.easydropdown.js"></script>
    <script src="js/simpleCart.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script src="js/msdropdown/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css"/>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });</script>
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
    <script src="js/simpleCart.min.js"></script>
</head>
<body>
<div class="banner" style="height: 50%;">
    <div class="container">
        <div class="header_top">
            <div class="header_top_left">
                <div class="box_11"><a href="checkout.php">
                        <h4>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity"
                                                                                class="simpleCart_quantity"></span>
                            items)</p><img src="images/bag.png" alt=""/>
                            <div class="clearfix"></div>
                        </h4>
                    </a></div>
                <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                <div class="clearfix"></div>
            </div>
            <div class="header_top_right">

                <ul class="header_user_info">
                    <a class="login" href="login.php">
                        <i class="user"> </i>


                        <div class="clearfix">
                            <?php

                            if (!is_null($_SESSION['login_user'])) {
                                echo '<li class="user_desc">' . $_SESSION['login_user'] . '</li>';
                            } else {
                                $_SESSION['login_user'] = NULL;
                                echo '<li class="user_desc">Přihlásit se</li>';
                            }
                            ?>
                    </a>


                    <!-- start search-->

            </div>
            <div class="search-box">
                <?php
                echo '<a href="obsah.php?co=odhlaseni">';

                if (!is_null($_SESSION['login_user'])) {
                    echo '<li class="user_desc">Odhlásit se</li>';
                } else {

                }

                echo '</a>';
                ?>
            </div>
            <div class="search-box">
                <?php
                echo '<a href="obsah.php?co=registrace">';

                if (!is_null($_SESSION['login_user'])) {

                } else {
                    echo '<li class="user_desc">Registrace</li>';
                }

                echo '</a>';
                ?>
            </div>
            <div class="search-box">
                <?php
                echo '<a href="obsah.php?co=sprava">';

                if (!is_null($_SESSION['login_user'])) {
                    echo '<li class="user_desc">Správa systému</li>';
                } else {

                }

                echo '</a>';
                ?>
            </div>
            </ul>
            <!----search-scripts---->
            <script src="js/classie1.js"></script>
            <script src="js/uisearch.js"></script>
            <script>
                new UISearch(document.getElementById('sb-search'));
            </script>
            <!----//search-scripts---->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
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
                                            <div class="clearfix"></div>
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
                                            <div class="clearfix"></div>
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
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li><a class="color10" href="obsah.php?co=generator">Tvorba erbu</a></li>
                <li><a class="color7" href="404.html">Novinky</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="account-in">
    <div class="container">
        <div class="check_box">
            <div class="col-md-9 cart-items">
                <h1>Můj košík (<?php echo $_SESSION["pocet"]; ?> ks)</h1>
                <script>$(document).ready(function (c) {
                        $('.close1').on('click', function (c) {
                            $('.cart-header').fadeOut('slow', function (c) {
                                $('.cart-header').remove();
                            });
                        });
                    });
                </script>
                <?php
                if ($_SESSION['pocet'] != 0 || isset($_SESSION['kosik'])) {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "heraldika";

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    } catch (PDOException $e) {
                        // echo "Connection failed: " . $e->getMessage();
                    }
                    echo "Košík:" . $_SESSION['kosik'];
                    echo "<br>Role:" . $_SESSION['role'];
                    echo "<br>Košík:" . $_SESSION['kosik'];
                    $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $parts = parse_url($url);
                    // parse_str($parts['query'], $query);
                    $sql = "SELECT  typ, fotka, nazev, pocet, cenasdph, id_zbozi FROM prehled WHERE id_kosiku = " . $_SESSION['kosik'];
                    //echo $sql;
                    $result = $conn->query($sql);
                    $row = $result->fetchAll(PDO::FETCH_BOTH);


                    for ($j = 0; $j < $result->rowCount(); $j++) {
                        echo "<form method='post' action='include/remove.php'>";
                        echo "<div class=\"cart-header\">";
                        echo "     <div><input type='submit' class=\"close1\" value=''><input type='hidden' name=\"id\" value='" . $row[$j]['id_zbozi'] . "'></div>";
                        echo "     <div class=\"cart-sec simpleCart_shelfItem\">";
                        echo "        <div class=\"cart-item cyc\">";
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($row[$j]['fotka']) . '" class="img-responsive" alt="">';
                        echo "        </div>";
                        echo "        <div class=\"cart-item-info\">";
                        echo "            <h3><a href=\"#\">" . $row[$j]['nazev'] . "</a></h3>";
                        echo "            <ul class=\"qty\">";
                        echo "                <li><p>Varianta : " . $row[$j]["typ"] . "</p></li>";
                        echo "                <li><p>Počet : " . $row[$j]['pocet'] . "</p></li>";
                        echo "            </ul>";
                        echo "            <div class=\"delivery\">";
                        echo "                <p>Cena s DPH : " . $row[$j]["cenasdph"] * $row[$j]["pocet"] . ",-</p>";
                        echo "                <span>Delivered in 2-3 business days</span>";
                        echo "                <div class=\"clearfix\"></div>";
                        echo "            </div>";
                        echo "        </div>";
                        echo "        <div class=\"clearfix\"></div>";
                        echo "    </div>";
                        echo "</div>";
                        echo "</form>";
                    }
                }
                else{
                    echo "Váš košík je prazdný.";
                }
                ?>

                <script>$(document).ready(function (c) {
                        $('.close2').on('click', function (c) {
                            $('.cart-header2').fadeOut('slow', function (c) {
                                $('.cart-header2').remove();
                            });
                        });
                    });
                </script>
            </div>
            <div class="col-md-3 cart-total">
                <a class="continue" href="#">Continue to basket</a>
                <div class="price-details">
                    <h3>Price Details</h3>
                    <span>Total</span>
                    <span class="total1">6200.00</span>
                    <span>Discount</span>
                    <span class="total1">---</span>
                    <span>Delivery Charges</span>
                    <span class="total1">150.00</span>
                    <div class="clearfix"></div>
                </div>
                <ul class="total_price">
                    <li class="last_price"><h4>TOTAL</h4></li>
                    <li class="last_price"><span>6350.00</span></li>
                    <div class="clearfix"></div>
                </ul>
                <div class="clearfix"></div>
                <a class="order" href="include/delivery.php">Place Order</a>
                <div class="total-item">
                    <h3>OPTIONS</h3>
                    <h4>COUPONS</h4>
                    <a class="cpns" href="#">Apply Coupons</a>
                    <p><a href="#">Log In</a> to use accounts - linked coupons</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="newsletter">
            <h3>Newsletter</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard</p>
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
            <p> &copy; 2015 Watches. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
            </p>
        </div>
    </div>
</div>
</body>
</html>
/**
* Created by PhpStorm.
* User: Andrew
* Date: 12. 5. 2018
* Time: 9:15
*/