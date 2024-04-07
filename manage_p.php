<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="post")
{
    if(isset($_POST['ok']))
    {
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('name'=>$_POST['name'],'price'=>$_POST['price']);
        }
        else 
        {
            $_SESSION['cart'][0]=array('name'=>$_POST['name'],'price'=>$_POST['price']);
            echo ($_SESSION['cart']);
        }
    }
}

?>