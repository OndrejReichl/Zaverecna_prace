
<script>
    function ($id){
    $elm=document.getElementById($id);

    }
</script>
<script>
    function potvrzeni() {
        var txt;
        if (confirm("Opravdu chcete odstranit tuto položku?")) {
            txt = "You pressed OK!";
        } else {
            txt = "You pressed Cancel!";
        }
        document.getElementById("demo").innerHTML = txt;
    }
</script>
<?php

if  ($_SESSION["role"]==2) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "heraldika";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    }




    //echo $svg;

//    $sql = "SELECT id_helmy, helma, popis, pridano FROM helmy";
//    $result = $conn->query($sql);/*if ($result->fetchAll() > 0) {
//        // output data of each row*/;
//    echo "<table style=\"text-align: center;width: 80%; margin-left: auto; margin-right: auto; border: 3px solid green; min-width: 30px;\" id='t_helmy'><tr><th>ID</th><th>Obraz</th><th>Popis</th><th>Přidáno</th><th>Upravit</th><th>Odstranit</th></tr>";
//    while ($row = $result->fetch()) {
//        $row["helma"]=str_replace("<svg","<svg class=\"malyStit\"",$row["helma"]);
//        echo "<tr><td>" . $row["id_helmy"] . "</td><td>" . $row["helma"] . "</td><td>" . $row["popis"] . "</td><td>"
//            . $row["pridano"] . "</td><td><input type='submit' value='Upravit'></td><td><input type='submit' value='Odstranit' onclick='potvrzeni()'></td></tr>";

//    }
//    echo "</table>";

/*
    $sql = "SELECT id_stuhy, stuha, pridano 
  FROM stuhy";
    $result = $conn->query($sql);/*if ($result->fetchAll() > 0) {
        // output data of each row*/;
  /*  echo "<table><tr><th>ID</th><th>Stuha</th><th>Název</th><th>Přidáno</th><th>Upravit</th></tr>";

        while ($row = $result->fetch()) {
            echo "<tr><td>" . $row["id_stuhy"] . "</td><td>" . $row["stuha"] . "</td><td>" . $row["nazev"] . "</td><td>"
                . $row["pridano"] . "</td><td><input type='submit'></td></tr>";
        }
        echo "</table>";
*/

//    $sql = "SELECT id_stitu, stit, popis, pridano
//  FROM stity";
//    $result = $conn->query($sql);/*if ($result->fetchAll() > 0) {
        // output data of each row*/;

//    echo "<table id='t_stity'><tr><th>ID</th><th>Štít</th><th>Název</th><th>Přidáno</th></tr>";
//        while ($row = $result->fetch()) {
//            $row["stit"]=str_replace("<svg","<svg class=\"malyStit\"",$row["stit"]);
//            echo "<tr><td>" . $row["id_stitu"] . "</td><td>" . $row["stit"] . "</td><td>" . $row["popis"] . "</td><td>"
//                . $row["pridano"] . "</td></tr>";

//    }
//    echo "</table>";


    $sql = "SELECT id_uzivatele, jmeno, prijmeni, email, heslo, id_adresy, ulice, mesto, psc, telefon 
  FROM uzivateleadresy";
    $vlastnosti = array("id_uzivatele", "jmeno", "prijmeni", "email", "heslo", "id_adresy", "ulice", "mesto", "psc", "telefon");
    $result = $conn->query($sql);/*if ($result->fetchAll() > 0) {
        // output data of each row*/;
    
        echo "<form action='include/toXML.php' method='post'><table><tr><th>ID</th><th>Jméno</th><th>Příjmení</th><th>Heslo</th>
<th>Email</th> <th>Telefon</th> <th>ID Adresy</th> <th>Ulice</th> <th>Mesto</th> <th>PSC</th> <th>Odstranit</th></tr>
    ";

        while ($row = $result->fetch()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            echo "<tr><form action='include/odstranit.php' method='POST'><td>" . $row["id_uzivatele"] . "</td><td>" . $row["jmeno"] . "</td><td>" . $row["prijmeni"] . "</td><td>"
                . password_hash($row["heslo"], PASSWORD_DEFAULT) . "</td><td>" . $row["email"]
                . "</td><td>" . $row["telefon"] . "</td><td>" . $row["id_adresy"] . "</td><td>" . $row["ulice"] . "</td><td>" . $row["mesto"]
                . "</td><td>" . $row["psc"] . "</td><td><input type='submit'  value='X'><input type='hidden' id='hodnota' value='". $row["id_uzivatele"] ."'><input type='hidden' id='id' value='id_uzivatele'></td></form><input type='hidden' id='tabulka' value='uzivatele'></td></form></tr>";

        }
        echo "</table>";
echo "<input type='submit' value='Do XML'><input type='hidden' name='tabulka' value='uzivateleadresy'><input type='hidden' name='vlastnosti' value='id_uzivatele, jmeno, prijmeni, email, heslo, id_adresy, ulice, mesto, psc, telefon'>";
echo "</form>";
echo "<form action='include/fromXML.php' method='post' enctype='multipart/form-data'>
<p>Vlož XML soubory: <input type=\"file\" name=\"myFile\"></p>
<input type='submit' value='Potvrdit'>
<input type='hidden' name='tabulka' value='uzivateleadresy'>
<input type='hidden' name='vlastnosti' value='id_uzivatele, jmeno, prijmeni, email, heslo, id_adresy, ulice, mesto, psc, telefon'>
</form>";

    }



else{
    echo "Nejste oprávněn spravovat systém.";
}
?>
