<?php
    $browser = $_POST['browser'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'food'); 
    if($conn->connect_error){
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO contact (browser, email, feedback) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $browser, $email, $feedback);
        $stmt->execute();
        echo "Submitted ";
        $stmt->close();
        $conn->close();
    }
?>





