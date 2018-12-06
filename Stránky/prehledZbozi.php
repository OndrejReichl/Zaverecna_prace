<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "heraldika";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
/*$sql = "SELECT id_uzivatele, email, heslo, mesto, jmeno, prijmeni, psc, telefon, ulice
  FROM uzivatele";*/
$sql = "SELECT id_polozky, nazev, fotka, popis, pocet, cena
  FROM heraldika.polozky";
$result = $conn->query($sql);





/*if ($result->fetchAll() > 0) {
    // output data of each row*/
  /*  echo "<table><tr><th>ID</th><th>Jméno</th><th>Příjmení</th><th>Heslo</th>
<th>Email</th> <th>Telefon</th> <th>Ulice</th> <th>Mesto</th> <th>PSC</th></tr>
    ";
    while($row = $result->fetch()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo "<tr><td>" . $row["id_uzivatele"]."</td><td>".$row["jmeno"]."</td><td>".$row["prijmeni"]."</td><td>"
            .$row["heslo"]."</td><td>".$row["email"]
            ."</td><td>".$row["telefon"]."</td><td>".$row["ulice"]."</td><td>".$row["mesto"]
            ."</td><td>".$row["psc"].  "</td></tr>";

    }
    echo "</table>";*//*
} else {
    echo "0 results";
}*/

$sql = null;
$conn = null;;
?>