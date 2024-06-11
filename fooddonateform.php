<?php
    $foodname = $_POST['foodname'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $imagechoice = $_POST['imagechoice'];
    $quantity = $_POST['quantity'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $district = $_POST['district'];
    $address = $_POST['address'];
    $donationType = $_POST['donationType'];
    

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'food'); 
    if($conn->connect_error){
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO donate (foodname, weight, price, imagechoice, quantity, email, phoneno, district,  address,donationType ) VALUES (?, ?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss", $foodname, $weight, $price, $imagechoice, $quantity, $email, $phoneno, $district,  $address,$donationType);
        $stmt->execute();
        echo "Submitted successful";
        $stmt->close();
        $conn->close();
    }
?>





