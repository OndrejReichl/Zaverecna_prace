<?php




        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "heraldika";

        try {
            $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
$sql="INSERT INTO kosiky (pocet, id_uzivatele, id_polozky, id_erbu) VALUES ( ".$query['pocet'].",".$query['id_uzivatele']. ",".$query['id_polozky'].", NULL)";
$result = $conn->query($sql);
$sql="UPDATE polozky SET pocet = pocet - ".$query['pocet']." WHERE polozky.id_polozky = ".$query['id_polozky']."";
$result = $conn->query($sql);
?>