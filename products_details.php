

<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body class="fonts-1">

    <!-- LOADER -->
    <header>

<?php
include("include/header.php");

?>
        </header>

        <div class="header-empty-space"></div>

        <div class="container">
            
            <div class="empty-space col-xs-b15 col-sm-b50 col-md-b100"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="slider-wrapper">
                        <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="5">
                            <div class="h4 swiper-title">popular products</div>
                            <div class="empty-space col-xs-b20"></div>
                            <div class="swiper-button-prev style-1"></div>
                            <div class="swiper-button-next style-1"></div>
                            <div class="swiper-wrapper">
                            
                                    <?php
                                    include('connection.php');
                                        $select = mysqli_query($con, "SELECT * FROM products");
                                    ?>

                                    <?php while($row = mysqli_fetch_assoc($select)){ ?>
                                        <form name=" f1" method="post" action="manage_p.php">

                                <div class="swiper-slide">
                                    <div class="product-shortcode style-1 small">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                            <div class="h6 animate-to-green"><a href="#"><?php echo $row['name']; ?></a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="Admin/uploaded_img/<?php echo $row['image']; ?>" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                           
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="cart.php">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                            <input type="submit" name="ok">
                                                            <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                                                            <input type="hidden" name="price" value="<?php echo $row['price']; ?>"> 
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark"><?php echo $row['price']; ?></div>
                                        </div>
                                    </div>
                                    
                                </div>
                                    </form>
                                <?php } 
                                
                                ?>
                                
                            
                            <div class="swiper-pagination relative-pagination visible-xs"></div>
                        </div>
                    </div>


                    

                    <div class="empty-space col-xs-b20 col-sm-b35 col-md-b70"></div>

                    <div class="align-inline spacing-1">
                        <div class="h4">Sport gadgets</div>
                    </div>
                    <div class="align-inline spacing-1">
                        <div class="simple-article size-1">SHOWING <b class="grey">15</b> OF <b class="grey">2 358</b> RESULTS</div>
                    </div>
                    <div class="align-inline spacing-1 hidden-xs">
                        <a class="pagination toggle-products-view active"><img src="img/icon-14.png" alt="" /><img src="img/icon-15.png" alt="" /></a>
                        <a class="pagination toggle-products-view"><img src="img/icon-16.png" alt="" /><img src="img/icon-17.png" alt="" /></a>
                    </div>
                    <div class="align-inline spacing-1 filtration-cell-width-1">
                        <select class="SlectBox small">
                            <option disabled="disabled" selected="selected">Most popular products</option>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="align-inline spacing-1 filtration-cell-width-2">
                        <select class="SlectBox small">
                            <option disabled="disabled" selected="selected">Show 30</option>
                            <option value="volvo">30</option>
                            <option value="saab">50</option>
                            <option value="mercedes">100</option>
                            <option value="audi">200</option>
                        </select>
                    </div>


                    <div class="empty-space col-xs-b25 col-sm-b60"></div>

                    <div class="products-content">
                        <div class="products-wrapper">
                            <div class="row nopadding">
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-40.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="color-selection">
                                                <div class="entry active" style="color: #a7f050;"></div>
                                                <div class="entry" style="color: #50e3f0;"></div>
                                                <div class="entry" style="color: #eee;"></div>
                                            </div>
                                            <div class="simple-article size-4"><span class="color">$630.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$350.00</span></div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-41.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-42.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-43.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-44.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-45.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-46.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-47.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-48.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-40.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="color-selection">
                                                <div class="entry active" style="color: #a7f050;"></div>
                                                <div class="entry" style="color: #50e3f0;"></div>
                                                <div class="entry" style="color: #eee;"></div>
                                            </div>
                                            <div class="simple-article size-4"><span class="color">$630.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$350.00</span></div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-41.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="img/product-42.jpg" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
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
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b35 col-sm-b0"></div>
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <a class="button size-1 style-5" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                    <span class="text">prev page</span>
                                </span>
                            </a>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="pagination-wrapper">
                                <a class="pagination active">1</a>
                                <a class="pagination">2</a>
                                <a class="pagination">3</a>
                                <a class="pagination">4</a>
                                <span class="pagination">...</span>
                                <a class="pagination">23</a>
                            </div>
                        </div>
                        <div class="col-sm-3 hidden-xs text-right">
                            <a class="button size-1 style-5" href="#">
                                <span class="button-wrapper">
                                    <span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <span class="text">prev page</span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>
                    <div class="empty-space col-md-b70"></div>
                </div>

            </div>

            
            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-b25">
                    <div class="h4 col-xs-b25">Hot Sale</div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-28.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-29.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-30.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article"><span class="color">$24.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$32.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-b25">
                    <div class="h4 col-xs-b25">Top Rated</div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-31.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-32.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-33.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article dark">$4.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-b25">
                    <div class="h4 col-xs-b25">Popular</div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-34.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-35.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-36.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article dark">$4.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-b25">
                    <div class="h4 col-xs-b25">Best Choice</div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-37.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-38.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="img/product-39.jpg" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article dark">$4.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b15 col-sm-b45"></div>
        <div class="empty-space col-md-b70"></div>

        <!-- FOOTER -->
        <div class="footer-form-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-b10 col-lg-b0">
                        <div class="cell-view empty-space col-lg-b50">
                            <h3 class="h3 light">dont miss your chance</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-b10 col-lg-b0">
                        <div class="cell-view empty-space col-lg-b50">
                            <div class="simple-article size-3 light transparent">ONLY 200 PROMO CODES ON DISCOUNT!</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-line-form">
                            <input class="simple-input light" type="text" value="" placeholder="Your email">
                            <div class="button size-2 style-1">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                    <span class="text">submit</span>
                                </span>
                                <input type="submit" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- range slider -->
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script>
        $(document).ready(function(){
            var minVal = parseInt($('.min-price').text());
            var maxVal = parseInt($('.max-price').text());
            $( "#prices-range" ).slider({
                range: true,
                min: minVal,
                max: maxVal,
                step: 5,
                values: [ minVal, maxVal ],
                slide: function( event, ui ) {
                    $('.min-price').text(ui.values[ 0 ]);
                    $('.max-price').text(ui.values[ 1 ]);
                }
            });
        });
    </script>


</body>
</html>
