<?php
session_start();



if(isset($_POST['ok']))
{
    
        
    $name=$_POST['name'];
     $image=$_POST['image'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $_SESSION['cart'][]=array('name'=>$name,'total'=>$st,'price'=>$price,'quantity'=>$quantity);
    header('location:products.php');
    }                                 

   

?>
<?php
if(isset($_POST['delete']))
{
    foreach($_SESSION['cart'] as $key => $value)
   {
    if($_GET['name'] == $key)
    {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        header('location:cart.php');

    }
   }
}
?>
