<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "merit";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];


   
      $sql = "INSERT INTO client (mat_no, first_name, last_name, email, password)
VALUES ('1343031', '$first_name', '$last_name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>