<?php
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
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
$sql ="SELECT  nazev,  dph, fotka, cena, round(ceil(cena*1.21),2) as cenasdph, popis FROM sortiment where nazev = \"".$query["idzbozi"]."\"";
echo $sql;
$result = $conn->query($sql);
$row = $result->fetchAll();
if($result->rowCount() > 1){
    echo "Varianta trika:";/*
for ($i=0; $i<$result->rowCount(); $i++){
    if($i==0){
        echo "<input type='radio' name='varianta' checked='true' value='".$i."' onchange='selectVariant(".$i.",".$result->rowCount().")'>";
    }
    else{
        echo "<input type='radio' name='varianta' checked='false' value='".$i."' onchange='selectVariant(".$i.",".$result->rowCount().")'>";
    }
}*/
    for ($i=0; $i<$result->rowCount(); $i++){
        $text = "<button onclick=\"";


        for ($j=0; $j<$result->rowCount(); $j++){
            if ($i == $j){
                $text = $text . "var item = document.getElementsByClassName('varianta" . $j . "'); for(var i = 0; i < item.length; i++){item[i].style.display='block';}";
            }
            else {
                $text = $text . "var item = document.getElementsByClassName('varianta" . $j . "'); for(var i = 0; i < item.length; i++){item[i].style.display='none';}";
            }
        }

        $text = $text . "\">Turn on the light</button>";
        echo $text;
    }

}


echo "<div class=\"men\">";
    echo "<div class=\"container\">";
        echo "<div class=\"col-md-9 single_top\">";
            echo "<div class=\"single_left\">";
                echo "<div class=\"labout span_1_of_a1\">";
                    echo "<div class=\"flexslider\">";
                        echo "<ul class=\"slides\">";
                            echo "<li data-thumb=\"images/s1.jpg\">";

for ($i=0; $i<$result->rowCount(); $i++) {
    if ($i == 0) {
        echo '<img class="varianta'.$i.'" src="data:image/jpeg;base64,'.base64_encode( $row[$i]['fotka'] ).'" style=" display: block;">';
    } else {
        echo '<img class="varianta'.$i.'" src="data:image/jpeg;base64,'.base64_encode( $row[$i]['fotka'] ).'" style=" display: none;">';
    }
}

                            echo "</li>";
                        echo "</ul>";
                    echo "</div>";
                    echo "<div class=\"clearfix\"></div>";
                echo "</div>";
                echo "<div class=\"cont1 span_2_of_a1 simpleCart_shelfItem\">";
echo"<h1>".$row[0]['nazev']."</h1>\n";
for ($i=0; $i<$result->rowCount(); $i++) {
    if ($i == 0) {
        //echo "<div class= 'varianta" . $i . "' style=' display: block;'>";
        //echo"<div class= 'varianta" . $i . "' style=' display: block;'><p class=\"availability\">Dostupnost: <span class=\"color\"></span>".$row[$i]['pocet']." ks</p></div>\n";
        echo "<div class=\"price_single\">";
        // echo "<span class=\"reducedfrom\">$140.00</span>";
        echo "<span class= 'varianta" . $i . "' style=' display: block;'>" . $row[$i]['cena'] . " Kč</span><br />";

        echo "<div class= 'varianta" . $i . "' style=' display: block;'><span class=\"amount item_price actual\">".sprintf("%01.2f", round($row[$i]['cena']*(1+$row[$i]['dph']),2))." Kč</span><a href=\"#\"> click for offer</a><br></div>";
    } else {

        //echo "<div class= 'varianta" . $i . "' style=' display: block;'>";
        //echo"<div class= 'varianta" . $i . "' style=' display: none;'><p class=\"availability\">Dostupnost: <span class=\"color\"></span>".$row[$i]['pocet']." ks</p></div>\n";
        echo "<div class=\"price_single\">";
        // echo "<span class=\"reducedfrom\">$140.00</span>";
        echo "<span class= 'varianta" . $i . "' style=' display: none;'>" . $row[$i]['cena'] . " Kč</span><br />";

        echo "<div class= 'varianta" . $i . "' style=' display: none;'><span class=\"amount item_price actual\">".sprintf("%01.2f", round($row[$i]['cena']*(1+$row[$i]['dph']),2))." Kč</span><a href=\"#\"> click for offer</a><br></div>";
    }
}



                    echo "</div>";
                    echo "<h2 class=\"quick\">Quick Overview:</h2>";
for ($i=0; $i<$result->rowCount(); $i++) {
    if ($i == 0) {
        echo "<div class= 'varianta" . $i . "' style=' display: block;'>";
    } else {
        echo "<div class= 'varianta" . $i . "' style= 'display: none;'>";
    }
}
                    echo "<p class=\"quick_desc\"> ".$row[$i]['popis']."</p>";
                    echo "<div class=\"wish-list\">";
                        echo "<ul>";
                            echo "<li class=\"wish\"><a href=\"#\">Add to Wishlist</a></li>";
                            echo "<li class=\"compare\"><a href=\"#\">Add to Compare</a></li>";
                        echo "</ul>";
                    echo "</div>";
                    echo "</div>";

                    echo "<form method='post' action='include/addToCart.php'>\n";
                    echo "<ul class=\"size\">\n";
                    $sql2 ="SELECT   typ, nazev, id_zbozi FROM sortiment where nazev = \"".$query["idzbozi"]."\"";

                    $result2 = $conn->query($sql2);
                    $row2= $result2->fetchAll(PDO::FETCH_BOTH);
                    $idZ = $row2[0]["id_zbozi"];
                    $nazev="";
                    for($i=0; $i<$result2->rowCount(); $i++)
                        {
                        echo "<input type=\"radio\" name=\"varianta\" value=\"".$row2[$i]['typ']."\" checked> ".$row2[$i]['typ']."<br>";
                        $nazev=$row2[$i]['nazev'];
                    }
                    echo "<input type=\"hidden\" name=\"nazev\" value=\"".$nazev."\">";
                    echo "</ul>\n";
                    echo "<input type='submit' class='potvrzeni'   value='Objednat'>\n";
                    echo "</form>";
                    echo "<div style='border-color: green; border: 5px'>";

                    echo "</div>";
                    echo "<form method='post' action='/Obchod/veci/class/Stránky/include/ohodnotit.php'>";

                    echo "<div class=\"quantity_box\">\n";

                        echo "<ul class=\"product-qty\">\n";
                            echo "<span>Ohodnoťte tento produkt:</span>\n";
                            echo "<select name='hodnoceniVyber' style=\"width: 300px; height: 50px;\">\n";
                                echo "<option value='5'>*****</option>\n";
                                echo "<option value='4'>****</option>\n";
                                echo "<option value='3'>***</option>\n";
                                echo "<option value='2'>**</option>\n";
                                echo "<option value='1'>*</option>\n";
                            echo "</select>\n";
                        echo "</ul>\n";

                        echo "<ul class=\"single_social\">\n";
                        echo "</ul>\n";
                        echo "<input type='submit' class='potvrzeni'  target=\"_self\" value='Ohodnotit'>\n";
echo "<input name='idecko' id='idecko' type='hidden' value=".$idZ.">\n";
                        echo "</div></form>\n";
                        echo "<div class=\"clearfix\"></div>\n";
                    echo "</div>\n";


                echo "</div>";
                echo "<div class=\"clearfix\"> </div>";
            echo "</div>";
            echo "<div class=\"sap_tabs\">";
                echo "<div id=\"horizontalTab\" style=\"display: block; width: 100%; margin: 0px;\">";
                    echo "<ul class=\"resp-tabs-list\">";
                        echo "<li class=\"resp-tab-item\" aria-controls=\"tab_item-0\" role=\"tab\"><span>Product Description</span></li>";
                        echo "<li class=\"resp-tab-item\" aria-controls=\"tab_item-1\" role=\"tab\"><span>Additional Information</span></li>";
                        echo "<li class=\"resp-tab-item\" aria-controls=\"tab_item-2\" role=\"tab\"><span>Reviews</span></li>";
                    echo "</ul>";
                    echo "<div class=\"resp-tabs-container\">";
                        echo "<div class=\"tab-1 resp-tab-content\" aria-labelledby=\"tab_item-0\">";
                            echo "<div class=\"facts\">";
                                echo "<ul class=\"tab_list\">";
                                echo "</ul>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class=\"tab-1 resp-tab-content\" aria-labelledby=\"tab_item-1\">";
                            echo "<div class=\"facts\">";
                                echo "<ul class=\"tab_list\">";
                                echo "</ul>";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class=\"tab-1 resp-tab-content\" aria-labelledby=\"tab_item-2\">";
                            echo "<div class=\"facts\">";
                                echo "<ul class=\"tab_list\">";
                                echo "</ul>";
                            echo "</div>";
                            echo "<button role='radio'></button>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class=\"clearfix\"> </div>";
    echo "</div>";
echo "</div>";?>
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
    function selectVariant(idVar, number){
        for (var i = 0; i < number; i++){
            if (idVar == i){
                var variant = document.getElementsByName("varianta"+i);
                variant.style.display = "block";
            }
            else {
                var variant = document.getElementsByName("varianta"+i);
                variant.style.display = "none";
            }
        }
    }
</script>