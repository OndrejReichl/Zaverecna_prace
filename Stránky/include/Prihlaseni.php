<?php
session_start();


if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
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
            echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
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

        $sql = "select id_uzivatele,heslo,email,role from uzivatele where email='".$username."'";

        $result = $connection->query($sql);

        if ($result->rowCount() == 1) {
            $row = $result->fetch();
            if (password_verify($row["heslo"]));
            $_SESSION['login_user']=$username; // Initializing Session
            $_SESSION['role']=$role;
            $_SESSION['id']=$id_uzivatele;
            echo "Přihlášeno.";
           // header("location: index.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
       // mysql_close($connection); // Closing Connection
    }
}
?>
<script>
    //window.history.go(-1);
</script>


