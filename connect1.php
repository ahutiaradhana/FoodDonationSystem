<?php
    // Check if username and password are set in the POST request
    if(isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'login'); // Use the correct database name here
        if($conn->connect_error){
            die('Connection failed: ' . $conn->connect_error);
        } else {
            // Prepared statement
            $stmt = $conn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");
            if($stmt) {
                // Bind parameters and execute
                $stmt->bind_param("ss", $username, $password);
                $stmt->execute();
                echo "Registration successful";
                $stmt->close();
            } else {
                echo "Failed to prepare statement";
            }
            $conn->close();
        }
    } else {
        echo "Username or password not provided";
    }
?>
