<?php 

session_start();
//received user input
include('../config/DatabaseConnect.php');

   $fullname        = htmlspecialchars($_POST["fullName"]);
   $username        = htmlspecialchars($_POST["username"]);
   $password        = htmlspecialchars($_POST["password"]);
   $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //validate confirmpassword

    $db = new DatabaseConnect();
    $conn = $db ->connectDB();

    if(trim($password) == trim($confirmPassword)){
        

        try {
        
            $stmt = $conn->prepare('INSERT INTO users (fullname,username,password,created_at,updated_at) VALUES (:p_fullname, :p_username, :p_password,NOW(),NOW())');
            $stmt->bindParam(':p_fullname',$fullname);
            $stmt->bindParam(':p_username',$username);
            $stmt->bindParam(':p_password',$password);


            $password = password_hash($password,PASSWORD_BCRYPT);
            $stmt->execute();
            header("location: /registration.php?");
$_SESSION["success"] = "Registration Successful";

        exit;
        } catch (Exception $e){
            echo "Connection Failed: " . $e->getMessage();
        }


    } else {
        header("location: /registration.php?");

        $_SESSION["error"] = "Password not the same";
        exit;
    }
}




//connect to database

//insert data


?>