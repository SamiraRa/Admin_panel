<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "rnd_demo";

    $con = mysqli_connect("$host","$username","$password","$db");
    if(!$con){
        header("Location:../error/dberror.php");
        die();
    }
?>