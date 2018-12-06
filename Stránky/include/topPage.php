<?php
echo "    <!DOCTYPE HTML> ";
echo "    <html>";
 echo "   <head>";
  echo "      <title>Tvorba erbů</title>";
  echo "      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
  echo "      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
 echo "       <meta name=\"keywords\" content=\"Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />";
  echo "      <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>";
  echo "      <link href=\"css/bootstrap.css\" rel='stylesheet' type='text/css' />";
  echo "      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->";
  echo "      <!-- Custom Theme files -->";
  echo "      <link href=\"css/style.css\" rel='stylesheet' type='text/css' />";
  echo "      <!-- Custom Theme files -->";
  echo "      <!--webfont-->";
  echo "      <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>";
  echo "      <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>";
  echo "      <script type=\"text/javascript\" src=\"js/jquery-1.11.1.min.js\"></script>";
  echo "      <!-- start menu -->";
  echo "      <link href=\"css/megamenu.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />";
  echo "      <script type=\"text/javascript\" src=\"js/megamenu.js\"></script>";
 // echo "      <script>".$(document).ready(function(){$(".megamenu").megamenu();});."</script>";
  echo "      <script src=\"js/jquery.easydropdown.js\"></script>";
  echo "      <script src=\"js/simpleCart.min.js\"> </script><script type=\"application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>";
  echo "      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />";
  echo "      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->";
  echo "      <!-- Custom Theme files -->";
  echo "      <link href="css/style.css" rel='stylesheet' type='text/css' />
 echo "       <!-- Custom Theme files --> ";
 echo "       <!--webfont-->";
echo "        <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
  echo "      <link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
  echo "      <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script><script src="js/msdropdown/jquery-1.3.2.min.js" type="text/javascript"></script>
  echo "      <script src="js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>
 echo "       <link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" />
   echo "     <!-- start menu -->
  echo "      <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
   echo "     <script type="text/javascript" src="js/megamenu.js"></script>
  echo "      <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
 echo "       <script src="js/jquery.easydropdown.js"></script>
 echo "       <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
 echo "       <script type="text/javascript">
   echo "         $(document).ready(function () { ";
    echo "            $('#horizontalTab').easyResponsiveTabs({ ";
   echo "                 type: 'default', //Types: default, vertical, accordion
     echo "               width: 'auto', //auto or any width like 600px
      echo "              fit: true ";  // 100% fit in a container 
   echo "             });\";
   echo "         });";
  echo "      </script>\";
 echo "       <script src="js/simpleCart.min.js"> </script>";
 echo "   </head>\";
 echo "   <body>";
echo "    <div class="banner">\";
 echo "       <div class="container">";
 echo "           <div class="header_top">\";
 echo "               <div class="header_top_left">";
 echo "                   <div class="box_11"><a href="checkout.php">\";
 echo "                           <h4>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>";
 echo "                       </a></div>\";
 echo "                   <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>";
 echo "                   <div class="clearfix"> </div>\";
 echo "               </div>";
 echo "               <div class="header_top_right">\";

  echo "                  <ul class="header_user_info">";
  echo "                      <a class="login" href="login.php">\";
    echo "                        <i class="user"> </i>";


echo "                            <div class="clearfix">\";
                               

                                if(!is_null($_SESSION['login_user'])){
                                    echo '<li class="user_desc">'.$_SESSION['login_user'].'</li>';
                                }
                                else{
                                    $_SESSION['login_user']=NULL;
                                    echo '<li class="user_desc">Přihlásit se</li>';
                                }
                                
  echo "                      </a>";


   echo"                     <!-- start search-->";

    echo "            </div><div class="search-box">\";
                    <?php
                    echo '<a href="obsah.php?co=odhlaseni">';

                    if(!is_null($_SESSION['login_user'])){
                        echo '<li class="user_desc">Odhlásit se</li>';
                    }
                    else{

                    }

                    echo '</a>';
                    ?>
  echo "              </div><div class="search-box">";
                    
                    echo '<a href="obsah.php?co=registrace">';

                    if(!is_null($_SESSION['login_user'])){

                    }
                    else{
                        echo '<li class="user_desc">Registrace</li>';
                    }

                    echo '</a>';
                    
 echo "               </div>\";
echo "                <div class="search-box">";
                    
                    echo '<a href="obsah.php?co=sprava">';

                    if(!is_null($_SESSION['role'])&&$_SESSION['role']>0){
                        echo '<li class="user_desc">Správa systému</li>';
                    }
                    else{

                    }

                    echo '</a>';";

   echo "             </div>\";
   echo "             </ul>";
   echo "             <!----search-scripts---->\";
  echo "              <script src="js/classie1.js"></script>";
 echo "               <script src="js/uisearch.js"></script>\";
 echo "               <script>";
 echo "                   new UISearch( document.getElementById( 'sb-search' ) );\";
 echo "               </script>";
 echo "               <!----//search-scripts---->\";
 echo "               <div class="clearfix"> </div>";
echo "            </div>\";
echo "            <div class="clearfix"> </div>";
echo "        </div>\";
echo "        <div class="header_bottom">";
echo "            <div class="logo">\";
  echo "              <h1><a href="index.php"><span class="m_1">W</span>atches</a></h1>";
 echo "           </div>\";
 echo "           <div class="menu">";
 echo "               <ul class="megamenu skyblue">\";
 echo "                   <li><a class="color2" href="#">Zboží</a>";
 echo "                       <div class="megapanel">\";
 echo "                           <div class="row">";
  echo "                              <div class="col1">\";
 echo "                                   <div class="h_nav">";
   echo "                                     <h4>Muži</h4>\";
   echo "                                     <ul>";
   echo "                                         <li><a href="obsah.php?co=man">Trika</a></li>\";
    echo "                                        <li><a href="obsah.php?co=man">Mikiny</a></li>";

  echo "                                      </ul>";
  echo "                                  </div>\";
  echo "                              </div>";
 echo "                               <div class="col1">\";
  echo "                                  <div class="h_nav">";
   echo "                                     <h4>Ženy</h4>\";
   echo "                                     <ul>";
   echo "                                         <li><a href="men.html">Watches</a></li>\";
    echo "                                        <li><a href="men.html">Outerwear</a></li>";
    echo "                                        <li><a href="men.html">Dresses</a></li>\";
    echo "                                        <li><a href="men.html">Handbags</a></li>";
   echo "                                         <li><a href="men.html">Trousers</a></li>\";
     echo "                                       <li><a href="men.html">Jeans</a></li>";
   echo "                                         <li><a href="men.html">T-Shirts</a></li>\";
   echo "                                         <li><a href="men.html">Shoes</a></li>";
 echo "                                           <li><a href="men.html">Coats</a></li>\";
 echo "                                           <li><a href=\"men.html\">Accessories</a></li>";
 echo "                                       </ul>";
echo "                                   </div>";
echo "                                </div>";
echo "                                <div class=\"col2\">";
echo "                                    <div class=\"h_nav\">";
echo "                                        <h4>Trends</h4>";
echo "                                        <ul>";
echo "                                            <li class>";
echo "                                                <div class=\"p_left\">";
echo "                                                    <img src=\"images/p1.jpg\" class=\"img-responsive\" alt=\"\"/>";
echo "                                                </div>";
echo "                                                <div class=\"p_right\">";
echo "                                                    <h4><a href=\"#\">Denim shirt</a></h4>";
echo "                                                    <span class=\"item-cat\"><small><a href=\"#\">watches</a></small></span>";
echo "                                                    <span class=\"price\">29.99 $</span>";
echo "                                                </div>";
echo "                                                <div class=\"clearfix\"> </div>";
echo "                                            </li>";
echo "                                            <li>";
echo "                                                <div class=\"p_left\">";
echo "                                                    <img src=\"images/p2.jpg\" class=\"img-responsive\" alt=\"\"/>";
echo "                                                </div>";
echo "                                                <div class=\"p_right\">";
echo "                                                    <h4><a href=\"#\">Denim shirt</a></h4>";
echo "                                                    <span class=\"item-cat\"><small><a href=\"#\">watches</a></small></span>";
echo "                                                    <span class=\"price\">29.99 $</span>";
echo "                                                </div>";
echo "                                                <div class=\"clearfix\"> </div>";
echo "                                            </li>";
echo "                                            <li>";
echo "                                                <div class=\"p_left\">";
echo "                                                    <img src=\"images/p3.jpg\" class=\"img-responsive\" alt=\"\"/>";
echo "                                               </div>";
echo "                                                <div class=\"p_right\">";
echo "                                                    <h4><a href=\"#\">Denim shirt</a></h4>";
echo "                                                    <span class=\"item-cat\"><small><a href=\"#\">watches</a></small></span>";
echo "                                                    <span class=\"price\">29.99 $</span>";
echo "                                                </div>";
echo "                                                <div class=\"clearfix\"> </div>";
echo "                                            </li>";
echo "                                        </ul>";
echo "                                    </div>";
echo "                                </div>";
echo "                            </div>";
echo "                        </div>";
echo "                    </li>";

echo "                    <li><a class=\"color10\" href=\"obsah.php?co=generator\">Tvorba erbu</a></li>";
echo "                    <li><a class=\"color7\" href=\"404.html\">Novinky</a></li>";
echo "                    <div class=\"clearfix\"> </div>";
echo "                </ul>";
echo "            </div>";
echo "            <div class=\"clearfix\"> </div>";
echo "        </div>";
echo "    </div>";
echo "    </div>";

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 28. 5. 2018
 * Time: 17:01
 */
 ?>