<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "merit";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//   echo "Connected successfully";


if (isset($_POST['mat_no']) && isset($_POST['password'])){

        $mat_no = $_POST['mat_no'];
        $password = $_POST['password'];

        }
     
            $sql = "SELECT * FROM client WHERE mat_no= '$mat_no' AND pass= '$password'";
            $res= mysqli_query($conn, $sql);           
     
            // print_r ($res);   
        if ($res == false){
            echo "invalid";
            $_session["mat_no"] = "$mat_id";
            $_session["password"] = "$password";
        }  
        else {
            //use foreach loop to ascertain var username and var password
            
           if(mysqli_num_rows($res) > 0){
               echo "user logged in successfully";
           } else{
               echo "user not found";
           }
           echo "<br>";
           echo "<form action = 'logout.php' method = 'post'>
           <button type = 'logout' name = 'logout'> click here to log out</button></form>";
              
           
   
}          
        

?>