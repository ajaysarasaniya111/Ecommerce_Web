<?php

echo "how are you";
session_start();

include("connection.php");

if(isset($_GET['token']))
{
    $token=$_GET['token'];
    
    $q="update register set status='active' where token='$token'" ;
    $r=mysqli_query($con,$q);
    if($r)
    {
        if(isset($_SESSION['msg']))
        {
        $_SESSION['msg']="Account activated successfully.";
        header('location:login.php');
    }
    else
    {
        $_SESSION['msg']="You are loged out.";
        header('location:login.php');
    }
}
else 
{
    $_SESSION['msg']="Account not updated";
        header('location:register.php');
}
}
?>



