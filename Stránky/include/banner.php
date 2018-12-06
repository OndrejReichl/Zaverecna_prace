<div class="banner">
    <div class="container">
        <div class="header_top">
            <div class="header_top_left">
                <div class="box_11"><a href="checkout.php">
                        <h4>Košík: <?php if(isset($_SESSION['cena'])) {echo $_SESSION['cena'];} else {echo "0";} ?>,- (<?php if(isset($_SESSION['pocet'])) {echo $_SESSION['pocet'];} else {echo "0";} ?> ks)<img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
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



                            <!-- start search-->

                        </div></a><div class="search-box">
                        <?php
                        echo '<a href="?co=odhlaseni">';

                        if(!is_null($_SESSION['login_user'])){
                            echo '<li class="user_desc">Odhlásit se</li>';
                        }
                        else{

                        }

                        echo '</a>';
                        ?>
                    </div><div class="search-box">
                        <?php
                        echo '<a href="?co=registrace">';

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
                        echo '<a href="?co=sprava">';

                        if(!is_null($_SESSION['role'])&&$_SESSION['role']==2){
                            echo '<li class="user_desc">Správa systému</li>';
                        }
                        else{

                        }

                        echo '</a>';
                        ?>
                    </div>
                </ul>
                <!--search-scripts-->
                <script src="js/classie1.js"></script>
                <script src="js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!--//search-scripts-->
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
                                            <li><a href="?co=man&kategorie=1">Trika</a></li>
                                            <li><a href="?co=man&kategorie=2">Mikiny</a></li>

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

                    <li><a class="color10" href="?co=generator">Tvorba erbu</a></li>
                    <li><a class="color7" href="404.html">Novinky</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 08.11.2018
 * Time: 14:31
 */