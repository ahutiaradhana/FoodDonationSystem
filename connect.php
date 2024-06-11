<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];
    $psw_repeat = $_POST['pswrepeat']; // Changed variable name
    $gender = $_POST['gender'];// Assuming gender is selected from either male or female

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'food'); 
    if($conn->connect_error){
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (username, email, address, phoneno, password, pswrepeat, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $username, $email, $address, $phoneno, $password, $psw_repeat, $gender );
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
    }
?>








$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='No';
$DATABASE='signup';

$con=mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if(!$con) {
    die(mysqli_error($con));
}
?>