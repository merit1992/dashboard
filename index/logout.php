<?php
if (isset($_POST["logout"])){
    session_start();
// destroying session
    if (isset($_SESSION["mat_no"])){
        unset($_SESSION["mat_no"]);
    }

    if (isset($_SESSION["password"])){
        unset($_SESSION["password"]);
    }
    echo ("user successfully logged out");

    
}
?>