<?php 
//received user input
$username = $_POST["username"];
$password = $_POST["password"];

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        //connect to database
        $host = "localhost";
        $database = "ecommerce";
        $dbusername = "root";
        $dbpassword = "";

        $dsn = "mysql: host=$host;dbname=$database;";
        try {
            $conn = new PDO($dsn, $dbusername, $dbpassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
            $stmt = $conn->prepare('SELECT * FROM `users` WHERE username = :p_username');
            $stmt->bindParam(':p_username',$username);
            $stmt->execute();
            $users = $stmt->fetchAll();
            if($users){
                if(password_verify($password,$users[0]["password"])){
                    $_SESSION = [];
                    session_regenerate_id(true);
                    $_SESSION["user_id"] = $users[0]["id"];
                    $_SESSION["username"] = $users[0]["username"];
                    $_SESSION["fullname"] = $users[0]["fullname"];
                    $_SESSION["is_admin"] = $users[0]["is_admin"];

                    header("location: /index.php");
                } else {
                    echo "password did not match";
                }
            } else {
                echo "user not exist";
            }

        } catch (Exception $e){
            echo "Connection Failed: " . $e->getMessage();
        }

}
?>