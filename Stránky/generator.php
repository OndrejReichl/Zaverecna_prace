
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<div class="main">
    <canvas id="myCanvas" width="800" height="800"
            style="border:1px solid #000000;">
    </canvas>
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
    $sql ="SELECT  helma FROM helmy where id_helmy = 1";
    echo $sql;
    $result = $conn->query($sql);
    $row = $result->fetch();
    $obraz = $row['helma'];
    echo 'Obraz: <img id="helmaImg" style="display: none; src="data:image/svg+xml;base64,'.base64_encode( $row['helma'] ).'">';
    //echo "<svg>\n";

    //echo $row['helma']."\n";
    //echo $row['helma']."\n";
    //echo "</svg>";

    //$outputImage = imagecreatetruecolor(600, 600);
    //$white = imagecolorallocate($outputImage, 255, 255, 255);
    //imagefill($outputImage, 0, 0, $white);

    //echo $outputImage;
    //echo "SVG:";
    //echo '<svg href="data:image/svg+xml;base64,'.base64_encode( $row['helma'] ).'">';
    ?>
    <script>
        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d");
        //ctx.fillRect(0,0,150,75);
        var img = document.getElementById("helmaImg");
        ctx.drawImage(img,10,10);
    </script>
    <form id="someForm" >
        <ul style = "list-style-type:none;">
            <li><p>Tinktura:</p>
                <ul style="list-style-type: none">
                    <li>Čevená<input value=0 name="color_main" type="radio" checked="checked" style="background-color: red"></li>
                    <li>Modrá<input value=2 name="color_main" type="radio" style="background-color: blue"></li>
                    <li>Zelená<input value=4 name="color_main" type="radio" style="background-color: green"></li>
                    <li>Černá<input value=6 name="color_main" type="radio" style="background-color: black"></li>

                </ul>
            </li>
            <li><p>Kov:</p>
                <ul style="list-style-type: none">
                     <li>Stříbro<input value=1 name="color_minor" type="radio" checked="checked" style="background-color: white"></li>
                    <li>Zlato<input value=2 name="color_minor" type="radio" style="background-color: yellow"></li>
                </ul>
                <p>Barva štítu:</p>
                <ul style="list-style-type: none">
                    <li>Tinktura<input value="color" name="color_shield" type="radio" checked="checked" style="background-color: white"></li>
                    <li>Kov<input value="metal" name="color_shield" type="radio" style="background-color: yellow"></li>
                </ul>
            </li>
        </ul>
        <input type="button" onclick="nactiStit() id="tlacitko">
    </form>
</div>
<div id="demo">dsd</div>

<script>
    function nactiStit(){
        var butt = document.getElementById("tlacitko");
        butt.value = "Hodor";
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("demo").innerHTML =
                    this.responseText;
            }
        };
        var barva1 = document.getElementsByName("color_main");
        var barva2 = document.getElementsByName("color_minor");
        for(var i = 0; i < genders.length; i++) {
            if(barva1[i].checked)
                selectedGender = genders[i].value;
        }
        for(var i = 0; i < genders.length; i++) {
            if(barva2[i].checked)
                selectedGender = genders[i].value;
        }
        xhttp.open("GET", "vratHelmu.php?barva1="+barva1.value+"&barva2="barva2.value, true);
        xhttp.send();

    }


</script>