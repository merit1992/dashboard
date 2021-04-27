<?php
if (isset($_POST["submit"])){
    $email = $_POST["email"];
   
}
if ($email){
    echo "email received, link has been sent to your mail!";

}else{
    echo "invalid";
}

?>