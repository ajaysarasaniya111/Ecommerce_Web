<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.extension.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/sumoselect.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="Admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    
   

    <link rel="shortcut icon" href="img/favicon.ico" />
  	<title>Unique Electronics</title>
</head>
<body>

    <!-- LOADER -->
   <?php
   $count=0;
if(isset($_SESSION['cart']))
{
    $count=count($_SESSION['cart']);
}

?>

    <div id="content-block">
        <!-- HEADER -->
        <header>
            <div class="header-top">
                <div class="content-margins">
                    <div class="row">
                        <div class="col-md-5 hidden-xs hidden-sm">
                            <div class="entry"><b>contact us:</b> <a href="">+91 9905464074</a></div>
                            <div class="entry"><b>email:</b> <a href="">UniqueElectronics@gmail.com</a></div>
                        </div>
                        <div class="col-md-7 col-md-text-right">
                        <div class="entry"><a  data-rel="1" href='login.php' ><b >login</b></a>&nbsp; or &nbsp;<a  data-rel="2" href='register.php'><b>register</b></a></div>                            
                        <div class="entry language">
                                <a href="profile.php"><i class="fa fa-user-circle"></i></a>
                            </div>
                            <div class="entry language">
                                <a href="logout.php"><b>logout</b></a>
                            </div>
                            
                            <div class="entry hidden-xs hidden-sm cart">
                                <a href="cart.php">
                                    <b class="hidden-xs">Your bag</b>
                                    <span class="cart-icon">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <span class="cart-label"><?php   echo $count;  ?></span>
                                    </span>
                                    <span class="cart-title hidden-xs"></span>
                                </a>
                                <div class="cart-toggle hidden-xs hidden-sm">
                                    <div class="cart-overflow">
                                        <div class="cart-entry clearfix">

                                        <?php
                                        $total=0;
                                        $st=0;
                                        if(isset($_SESSION['cart']))
                                        {

                                        foreach($_SESSION['cart'] as $key=> $value)
                                        {
                                         //   $total+=$value['price']*$value['quantity']; 
                                          //  $st=$st + $total;

                                        ?>
                                        
                                         <form name='f1' method='post' action='cart4.php'>
                                            <a class="cart-entry-thumbnail" href="#">  </a>
                                            <div class="cart-entry-description">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <div class="h6"><a href="#"><?php echo $value['name'] ;?></a></div>
                                                            <br>
                                                            <div class="simple-article size-1">Quantity:<?php echo  $value['quantity'];?></div>
                                                        </td>
                                                        <td>
                                                            <div class="simple-article size-2 grey">Mrp :<?php echo $value['price'] ;?> </div>
                                                            
                                                        </td>
                                                        
                                                        <td>
                                                            <td ><button class='btn-danger' name='delete'>delete</button></td>    
                                                            <td><input type='hidden' name='d' value="<?php  $value['name'] ?>"></td>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </form>
                                        <?php
                    
                                        }
                                        }
                                        
                                        ?>
                                        </div>
                                        
                                        
                                    <div class="empty-space col-xs-b40"></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="cell-view empty-space col-xs-b50">
                                                <div class="simple-article size-5 grey">TOTAL : <?php echo $st ;?> <span class="color"></span></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <a class="button size-2 style-3" href="cart.php">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                                    <span class="text"> checkout</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="content-margins">
                    <div class="row">
                        <div class="col-xs-3 col-sm-1">
                            <a  href="index.php"><img src="logo/Logo4.png" alt="" height="120 " width="170" /></a>  
                        </div>
                        <div class="col-xs-9 col-sm-11 text-right">
                            <div class="nav-wrapper">
                                <div class="nav-close-layer"></div>
                                <nav>
                                    <ul>
                                        <li class="active">
                                            <a href="index.php">Home</a>
                                            <div class="menu-toggle"></div>
                                           
                                        </li>
                                        <li>
                                            <a href="about.php">about us</a>
                                        </li>
                                        <li >
                                            <a href="products.php">products</a>
                                        </li>
                                    
                                        <li>
                                            <a href="gallery.php">gallery</a>
                                            
                                        </li>
                                        <li class="megamenu-wrapper">
                                            <a href="#">Pages</a>
                                            <div class="menu-toggle"></div>
                                            <div class="megamenu">
                                                <div class="links">
                                                    
                                                    
                                                    <a href="cart.php">Cart</a>
                                                    <a href="Feedback.php">Feedback</a>
                                                    
                                                </div>
                                                <div class="content">
                                                    <div class="row nopadding">
                                                        <div class="col-xs-6">
                                                            <div class="product-shortcode style-5">
                                                                <div class="product-label green">best price</div>
                                                                
                                                                <div class="preview">
                                                                    <div class="swiper-container" data-loop="1">
                                                                        <div class="swiper-button-prev style-1"></div>
                                                                        <div class="swiper-button-next style-1"></div>
                                                                        <div class="swiper-wrapper">
                                                                            <div class="swiper-slide">
                                                                                <img src="img/product-61.jpg" alt="" />
                                                                            </div>
                                                                            <div class="swiper-slide">
                                                                                <img src="img/product-59.jpg" alt="" />
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                                <div class="content-animate">
                                                                    <div class="title">
                                                                        <div class="shortcode-rate-wrapper">
                                                                            <div class="rate-wrapper align-inline">
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="h6 animate-to-green"><a href="product.php">modern beat nine</a></div>
                                                                    </div>
                                                                    <div class="description">
                                                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                                                    </div>
                                                                    <div class="price">
                                                                        <div class="simple-article size-4 dark">Mrp : 630.00</div>
                                                                    </div>
                                                                </div>
                                                                <div class="preview-buttons">
                                                                    <div class="buttons-wrapper">
                                                                        <a class="button size-2 style-2" href="product.php">
                                                                            <span class="button-wrapper">
                                                                                <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                                                
                                                                            </span>
                                                                        </a>
                                                                        <a class="button size-2 style-3" href="cart.php">
                                                                            <span class="button-wrapper">
                                                                                <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                                                <span class="text">Add To Cart</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="banner-shortcode style-3 rounded-image text-center" style="background-image: url(img/background-11.jpg);">
                                                                <div class="valign-middle-cell">
                                                                    <div class="valign-middle-content">
                                                                        <div class="simple-article size-5 light transparent uppercase col-xs-b5"><span class="color">30%</span>DISCOUNT</div>
                                                                        <h3 class="h3 light col-xs-b15">all models from relax seriece</h3>
                                                                        <div class="simple-article size-3 light transparent col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac</div>
                                                                        <a class="button size-2 style-1" href="#">
                                                                            <span class="button-wrapper">
                                                                                <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                                                
                                                                            </span>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                    <div class="navigation-title">
                                        Navigation
                                        <div class="hamburger-icon active">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="header-bottom-icon toggle-search"><i class="fas fa-search" aria-hidden="true"></i></div>
                            <div class="header-bottom-icon visible-rd"><i class="fa fa-heart" aria-hidden="true"></i></div>
                            <div class="header-bottom-icon visible-rd">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <span class="cart-label">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-wrapper">
                        <div class="header-search-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                                        <form>
                                            <div class="search-submit">
                                                <i class="fas fa-search" aria-hidden="true"></i>
                                                <input type="submit"/>
                                            </div>
                                            <input class="simple-input style-1" type="text" value="" placeholder="Enter keyword" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="button-close"></div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
      </div>
    </body>
</html>