<?php
session_start();

if(isset($_SESSION['user']))
{
?>

<?php
//$id=$key;
// $name=$value['name'];
// $quantity=$value['quantity'];
if(isset($_POST['ok']))
{
include("connection.php");


 $q="insert into order_detail(  country, fname, lname, company_name,street_address, appartment, town_city, state, postcode, email, phone)values('".$_POST['country']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['cname']."','".$_POST['address']."','".$_POST['appartment']."','".$_POST['city']."','".$_POST['state']."','".$_POST['postcode']."','".$_POST['email']."','".$_POST['phone']."')";
 
  $r=mysqli_query($con,$q);

  
  if($r)
  {
    $order_id=mysqli_insert_id($con);
     $q1="INSERT INTO order_details(order_id, name , quantity, price) VALUES (?,?,?,?)";
     $stmt=mysqli_prepare($con,$q1);
     if($stmt)
     {
        mysqli_stmt_bind_param($stmt,"isii",$order_id,$item_name,$quantity,$price);
        foreach($_SESSION['cart'] as $key => $value)
        {
            $item_name= $value['name'];
            $quantity=$value['quantity'];
            $price=$value['price'];
            mysqli_stmt_execute($stmt); 
        }
        unset($_SESSION['cart']);
        echo "<script>alert('order placed')</script>";
        header('location:index.php');
     }
     else 
     {
        echo "<script>alert('sql query prepared error')</script>";
        header('location:cart.php');     
     }
                              
 }
 else
 {
    echo"<script>alert('something went wrong')</script>";
    header('location:cart.php');                                   


 }

  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>

    <!-- LOADER -->
    <header>
    <?php
include("include/header.php");
?>
        </header>
            
        <div class="header-empty-space"></div>

        <div class="container">
            
            <div class="empty-space col-xs-b15 col-sm-b50 col-md-b100"></div>
            <div class="text-center">
                <div class="simple-article size-3 grey uppercase col-xs-b5">shopping cart</div>
                <div class="h2">check your products</div>
                <div class="title-underline center"><span></span></div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th style="width: 190px;">Index no.</th>
                        <th style="width: 190px;">product name</th>
                        <th style="width: 190px;">price</th>
                        <th style="width: 190px;">quantity</th>
                        <th style="width: 190px;">total</th>
                        <th style="width: 190px;">Remove</th>
                        

                    </tr>
                </thead>
                <tbody>
                    
                <?php
                    $total=0;
                    $st=0;
                    if(isset($_SESSION['cart']))
                    {

                    foreach($_SESSION['cart'] as $key=> $value)
                    {
                        //$total+=$value['price']*$value['quantity']; 
                        //$st=$st + $total;
                        
                     ?>
                    
                    <form name='f1' method='post' action='cart4.php'>
                    <tr>
                    <td><?php echo $key ; ?>
                    </td>
                    <td><?php echo $value['name'] ;?>
                    </td>
                    
                    <td><?php echo $value['price'] ;?>
                    
                        </td>
                    <td><?php echo  $value['quantity'];?>
                
                        </td>
                    <td><?php echo $total ;?></td>
                    
                    <input type='hidden' name='t' value="<?php  echo $st ?>">

                    <td ><button class='btn-danger' name='delete'>Delete</button></td>    
                    <td><input type='hidden' name='d' value="<?php  $value['name'] ?>"></td>

                    
                    </tr>
                </form> 
                    
                    <?php
                   
                   
                    }
                    }
                    
                    ?>
                     
                </tbody>
            </table>
            <div class="empty-space col-xs-b35"></div>
            <div class="row">
                <div class="col-sm-6 col-md-5 col-xs-b10 col-sm-b0">
                    
                </div>
            </div>
            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <form name="f1" method="post">
                <div>
                    
                    

                    
                <input type='hidden' name='k' value="<?php echo $key ?>">
                <input type='hidden' name='name' value="<?php echo $value['name'] ?>">
                <input type='hidden' name='q' value="<?php  echo $value['quantity'] ?>">
                    
                    

                </div>
            <div class="row">
                <div class="col-md-6 col-xs-b50 col-md-b0">
                    <h4 class="h4 col-xs-b25">billing details</h4>
                    <select class="SlectBox" name="country">
                        <option disabled="disabled" selected="selected">Choose country</option>
                        <option value="volvo">india</option>
                        <option value="saab">Sri Lanka</option>
                        <option value="mercedes">Nepal</option>
                        <option value="audi">bhutan</option>
                    </select>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="row m10">
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" name="fname" value="" placeholder="First name" />
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" name="lname" placeholder="Last name" />
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                    </div>
                    <input class="simple-input" type="text" value="" name="cname"placeholder="Company name" />
                    <div class="empty-space col-xs-b20"></div>
                    <input class="simple-input" type="text" value="" name="address" placeholder="Street address" />
                    <div class="empty-space col-xs-b20"></div>
                    <div class="row m10">
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" name="appartment" placeholder="Appartment" />
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" name="city" placeholder="Town/City" />
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                    </div>
                    <div class="row m10">
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" name="state" placeholder="State/Country" />
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" name="postcode" placeholder="Postcode/ZIP" />
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                    </div>
                    <div class="row m10">
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" name="email" placeholder="Email" />
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input" type="text" value="" name="phone" placeholder="Phone" />
                            <div class="empty-space col-xs-b20"></div>
                        </div>
                    </div>
                    <label class="checkbox-entry">
                        <input type="checkbox" checked><span>Privacy policy agreement</span>
                    </label>
                    <div class="empty-space col-xs-b50"></div>

                   
                    
                </div>
                <div class="col-md-6">
                    <h4 class="h4">cart totals</h4>
                    <div class="order-details-entry simple-article size-3 grey uppercase">
                        <div class="row">
                            <div class="col-xs-6">
                                cart subtotal
                            </div>
                            <div class="col-xs-6 col-xs-text-right">
                                <div class="color"><?php echo $st ;?></div>
                            </div>
                        </div>
                    </div>
                    <div class="order-details-entry simple-article size-3 grey uppercase">
                        <div class="row">
                            <div class="col-xs-6">
                                shipping and handling
                            </div>
                            <div class="col-xs-6 col-xs-text-right">
                                <div class="color">free shipping</div>
                            </div>
                        </div>
                    </div>
                    <div class="order-details-entry simple-article size-3 grey uppercase">
                        <div class="row">
                            <div class="col-xs-6">
                                order total
                            </div>
                            <div class="col-xs-6 col-xs-text-right">
                                <div class="color"><?php echo $st ;?></div>
                            </div>
                            <div class="empty-space col-xs-b10"></div>
                            <h4 class="h4 col-xs-b25">payment method</h4>
                    <select class="SlectBox">
                        <option selected="selected">COD</option>
                        <option value="volvo">Google Pay</option>
                        <option value="saab">PhonePe</option>
                        
                    </select>
                    <div class="empty-space col-xs-b10"></div>
                    
                    
                    <div class="button block size-2 style-2">
                        <span class="button-wrapper">
                            <span class="icon"><img src="img/icon-4.png" alt=""></span>
                            <span class="text">place order</span>
                        </span> 
                        <input type="submit" name="ok"/>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
                </form>
            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-xs-b50"></div>
                    
        </div>

        <!-- FOOTER -->
        <footer>
            <?php
            include("include/footer.php");
            ?>
        </footer>
    </div>

    <!-- login-registration-->

     
      <!-- end login-registration -->

        <div class="popup-content" data-rel="3">
            <div class="layer-close"></div>
            <div class="popup-container size-2">
                <div class="popup-align">
                    <div class="row">
                        <div class="col-sm-6 col-xs-b30 col-sm-b0">
                            
                            <div class="main-product-slider-wrapper swipers-couple-wrapper">
                                <div class="swiper-container swiper-control-top">
                                   <div class="swiper-button-prev hidden"></div>
                                   <div class="swiper-button-next hidden"></div>
                                   <div class="swiper-wrapper">
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-4.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-5.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-6.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-7.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-8.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-9.jpg"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-10.jpg"></div>
                                       </div>
                                   </div>
                                </div>

                                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="5" data-slides-per-view="5" data-center="1" data-click="1">
                                   <div class="swiper-button-prev hidden"></div>
                                   <div class="swiper-button-next hidden"></div>
                                   <div class="swiper-wrapper">
                                       <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-4_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-5_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-6_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-7_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-8_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-9_.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="img/product-preview-10_.jpg" alt="" />
                                            </div>
                                       </div>

                                   </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
                            <div class="h3 col-xs-b25">watch 42mm smartwatch</div>
                            <div class="row col-xs-b25">
                                <div class="col-sm-6">
                                    <div class="simple-article size-5 grey">PRICE: <span class="color">$225.00</span></div>        
                                </div>
                                <div class="col-sm-6 col-sm-text-right">
                                    <div class="rate-wrapper align-inline">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">127-#5238</span></div>
                                </div>
                                <div class="col-sm-6 col-sm-text-right">
                                    <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
                                </div>
                            </div>
                            <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.</div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-1">size:</div>
                                </div>
                                <div class="col-sm-9">
                                    <select class="SlectBox">
                                        <option disabled="disabled" selected="selected">Choose size</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title">color:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="color-selection size-1">
                                        <div class="entry active" style="color: #a7f050;"></div>
                                        <div class="entry" style="color: #50e3f0;"></div>
                                        <div class="entry" style="color: #eee;"></div>
                                        <div class="entry" style="color: #4d900c;"></div>
                                        <div class="entry" style="color: #edb82c;"></div>
                                        <div class="entry" style="color: #7d3f99;"></div>
                                        <div class="entry" style="color: #3481c7;"></div>
                                        <div class="entry" style="color: #bf584b;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-1">quantity:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="quantity-select">
                                        <span class="minus"></span>
                                        <span class="number">1</span>
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row m5 col-xs-b40">
                                <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                    <a class="button size-2 style-2 block" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="img/icon-2.png" alt=""></span>
                                            <span class="text">add to cart</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="button size-2 style-1 block noshadow" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><i class="fa fa-heart" aria-hidden="true"></i></span>
                                        <span class="text">add to favourites</span>
                                    </span>
                                </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-2">share:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="follow light">
                                        <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-close"></div>
            </div>
        </div>

    </div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/global.js"></script>

    <!-- styled select -->
    <script src="js/jquery.sumoselect.min.js"></script>

    <!-- counter -->
    <script src="js/jquery.classycountdown.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.throttle.js"></script>

    <!-- masonry -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script>
        $(window).load(function(){
            var $container = $('.grid').isotope({
                itemSelector: '.grid-item',
                masonry: {
                    columnWidth: '.grid-sizer'
                }
            });
        });
    </script>

</body>
</html>
<?php
}
else{
    echo "<script>window.location='login.php'</script>";
}


?>