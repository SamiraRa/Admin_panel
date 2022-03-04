<?php
session_start();

include('admin/config/dbcon.php');

if(isset($_POST['register_btn'])){
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $fn = mysqli_real_escape_string($con,$_POST['fname']);
    $ln = mysqli_real_escape_string($con,$_POST['lname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pswd = mysqli_real_escape_string($con,$_POST['password']);
    $cpswd = mysqli_real_escape_string($con,$_POST['cpassword']);

    if($pswd == $cpswd)
    {
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con,$checkemail);

        if(mysqli_num_rows($checkemail_run)>0)
        {
            $_SESSION['message'] = "Already Email Exists";
            header("Location: register.php");
            exit(0);
        }
        else{
            $user_query = "INSERT INTO users (id,fname,lname,email,password) VALUES('$id','$fn','$ln','$email','$pswd')";
            $user_query_run = mysqli_query($con,$user_query);

            if($user_query_run){
                $_SESSION['message'] = "Registered Successfully";
                header("Location: login.php");
                exit(0);
            }
            else{
                $_SESSION['message'] = "Something Went Wrong!";
                header("Location: register.php");
                exit(0);
            }
        }
    }
    else{
        $_SESSION['message'] = "Password and Confirm Password does not Match";
        header("Location: register.php");
        exit(0);
    }
}
else{
    header();
    exit(0);
}
?>