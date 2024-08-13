<?php
session_start();
include 'config.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from `hod_login` where email ='$email' and password='$password'";

    $result= mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        header('location:details.php');
    }
    else{
        echo "please enter correct details <a href='login.php'>Try Again</a>";
    }
}
else{
    header('location:login.php');
}
?>