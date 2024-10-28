<?php 
   include(ROOT_DIR."app/config/DatabaseConnect.php");
   $db = new DatabaseConnect();
   $conn = $db ->connectDB();

   $productList = [];
   try {
       $sql = "SELECT * FROM `products`";
       $stmt = $conn ->prepare($sql);
       $stmt -> execute();
       $productList = $stmt -> fetchAll();
       

   } catch (PDOException $e){
      echo "Connection Failed: " . $e->getMessage();
      $db = null;
   }
?>