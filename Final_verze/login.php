<?php
session_start();





        $servername = "localhost";
        $email = "root";
        $password = "";
        $dbname = "eshop";

        try {
            $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $email, $password);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            // echo "Connection failed: " . $e->getMessage();
        }
// Define $username and $password
        $email=$_POST['txtEmail'];
        $password=$_POST['txtHeslo'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        //$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
        $email = stripslashes($email);
        $password = stripslashes($password);
        //$username = mysql_real_escape_string($username);
        //$password = mysql_real_escape_string($password);
// Selecting Database
        // $db = mysql_select_db("company", $connection);
// SQL query to fetch information of registerd users and finds user match.
        $sql = "select id_uzivatele,heslo,email,role from uzivatele where  email='".$email."'";
        // echo $sql;
        $result = $connection->query($sql);
        if ($result->rowCount() == 1) {
            $row = $result->fetch();
            echo $password."===".$row["heslo"];
            if (password_verify($password,$row["heslo"])){
                $_SESSION['login_user']=$email; // Initializing Session
                $_SESSION['role']=$row['role'];
                $_SESSION['id']=$row['id_uzivatele'];
                echo "All is fine.";
                echo $_SESSION['role'];
                echo $_SESSION['id'];
            }
            else {
                $error = "Username or Password is invalid";
                echo $error;
            }
        }
        else {
            $error = "Username or Password is invalid";
            echo $error;
        }
        // mysql_close($connection); // Closing Connection


?>
<script>
    window.history.back();
</script>
