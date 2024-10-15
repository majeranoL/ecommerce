<?php 
$fullname = $_POST["FullName"];
$username = $_POST["username"];
$password = $_POST["Password"];
$confirmpassword = $_POST["ConfirmPassword"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(trim($password) == trim($confirmpassword)){
        $host = "localhost";
        $database = "ecommerce";
        $dbusername = "root";
        $dbpassword = "";
        
        $dsn = "mysql: host=$host;dbname=$database;";
        try {
            $conn = new PDO($dsn, $dbusername, $dbpassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $stmt = $conn -> prepare('INSERT INTO users (FullName, username,password,created_at,updated_at) VALUES(:p_FullName, :p_username, :p_password,NOW(),NOW())');
            $stmt ->bindParam('p_FullName',$fullname);
            $stmt ->bindParam('p_username',$username);
            $stmt ->bindParam('p_password',$password);
            $stmt ->execute();
            header("location: /registration.php?success=Password are the same");
        echo "Connection successful";
        } catch (Exception $e){
            echo "Connection Failed: " . $e->getMessage();
        }
        
    }
    else{
        header("location: /registration.php?error=Password not same");
        exit;
    }
}
?>