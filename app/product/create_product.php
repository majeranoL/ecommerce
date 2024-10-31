<?php

if(!isset($_SESSION)){
    session_start();
}

require_once(__DIR__."/../config/Directories.php"); //to handle folder specific path
include("../config/DatabaseConnect.php"); //to access database connection

$db = new DatabaseConnect(); //make a new database instance

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $productName = htmlspecialchars($_POST["productName"]);
    $productDesc = htmlspecialchars($_POST["description"]);
    $category = htmlspecialchars($_POST["category"]);
    $basePrice = htmlspecialchars($_POST["basePrice"]);
    $numberOfStocks = htmlspecialchars($_POST["numberOfStocks"]);
    $unitPrice = htmlspecialchars($_POST["unitPrice"]);
    $totalPrice = htmlspecialchars($_POST["totalPrice"]);
    
    if (trim($productName) == "" || trim($productDesc) == "" || trim($category) == "" || trim($basePrice) == "" || trim($numberOfStocks) == "" || 
        trim($unitPrice) == "" ||  trim($totalPrice) == "" ) 
    {
        $_SESSION["error"] = "Please fill in all the fields";
        header("location: ".BASE_URL."views/admin/product/add.php");
        exit();
    }
    if(!isset($_FILES['productImage']) || $_FILES['productImage']['error'] != 0){
        $_SESSION['error'] = 'No Image Attached';
        header("location: ".BASE_URL."views/admin/product/add.php");
        exit;
    }
    
    try {
        $conn = $db->connectDB();
        $sql = "INSERT INTO products (product_name, product_description, category_id, base_price, stocks, unit_price, total_price, created_at, updated_at) 
                VALUES (:p_product_name, :p_product_description, :p_category_id, :p_base_price, :p_stocks, :p_unit_price, :p_total_price, NOW(), NOW())";
        $stmt = $conn->prepare($sql);
        
        $data = [
            ':p_product_name' => $productName,
            ':p_product_description' => $productDesc,
            ':p_category_id' => $category,
            ':p_base_price' => $basePrice,
            ':p_stocks' => $numberOfStocks,
            ':p_unit_price' => $unitPrice,
            ':p_total_price' => $totalPrice 
        ];

        if(!$stmt->execute($data)){
            $_SESSION['error'] = 'Failed to Insert Record';
            header("location: ".BASE_URL."views/admin/product/add.php");
            exit;
        }

        $lastId = $conn->lastInsertId();

        $error = processImage($lastId);
        if($error){
            $_SESSION["error"] = $error;
            header("location: ".BASE_URL."views/admin/product/add.php");
            exit;
        }
        
        $_SESSION["success"] = "Product Added successfully";
        header("location: ".BASE_URL."views/admin/product/index.php");
        exit;
    } catch(Exception $e){
        $_SESSION["error"] = "Connection Failed: " . $e->getMessage();
        header("location: ".BASE_URL."views/admin/product/add.php");
        exit;
    }
}

function processImage($id){
    global $db;
    $path = $_FILES['productImage']['tmp_name'];
    $fileName = $_FILES['productImage']['name'];
    $filetype = mime_content_type($path);
    
    if($filetype != 'image/jpeg' && $filetype != 'image/png'){
        return "File is not a jpg/png file";
    }
    
    // Rename image upload 
    $newFileName = md5(uniqid($fileName, true));
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $hashedName = $newFileName . '.' . $fileExt;

    // Move the image to project folder 
    $destination = ROOT_DIR . 'public/uploads/products/' . $hashedName;
    if(!move_uploaded_file($path, $destination)){
     return "Transferring to image returns an error";
    }

    // Update the image_url field in products table 
    $imageUrl = 'public/uploads/products/' . $hashedName;
    $conn = $db->connectDB();
    $sql = 'UPDATE products SET image_url = :p_image_url WHERE id = :p_id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':p_image_url', $imageUrl);
    $stmt->bindParam(':p_id', $id);
    $stmt->execute();
    if(!$stmt ->execute()){
        return "Failed to upload the image url field";
    };

    // Return null if no error
    return null;
}
