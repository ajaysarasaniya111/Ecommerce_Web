<!DOCTYPE html>
<html lang="en">
<?php
include('security.php');
?>
    <head>
        <meta charset="utf-8" />
        <title>Calendar | Unique Electronics Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Logo3.png">

        <!-- Plugin css -->
        <link href="assets/libs/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->

        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

        <!-- body start -->
        <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->
        <div id="wrapper">

            <?php
                include('include/header.php');
                include('include/Lside.php');
                include('include/logo.php');
            ?>
    
                   

                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                        <li>
                            <button class="button-menu-mobile disable-btn waves-effect">
                                <i class="fe-menu"></i>
                            </button>
                        </li>
    
                        <li>
                            <h4 class="page-title-main">Add Product </h4>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <?php
                include('security-pd.php');
                if(isset($_POST['add_product'])){

                $product_cat = $_POST['product_cat'];
                $product_name = $_POST['product_name'];
                $product_price = $_POST['product_price'];
                $product_details = $_POST['product_details'];
                $product_image = $_FILES['product_image']['name'];
                $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
                $product_image_folder = 'uploaded_img/'.$product_image;

                if( empty($product_cat) || empty($product_name) || empty($product_price) || empty($product_details) || empty($product_image)){ 
                    $message[] = 'please fill out all';
                }else{
                    $insert = "INSERT INTO products(cat,name, price,details, image) VALUES( '$product_cat','$product_name', '$product_price','$product_details', '$product_image')";
                    $upload = mysqli_query($conn,$insert);
                    if($upload){
                        move_uploaded_file($product_image_tmp_name, $product_image_folder);
                        $message[] = 'new product added successfully';
                    }else{
                        $message[] = 'could not add the product';
                    }
                }

                };

                

            ?>



            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                    <center>
                    <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">ADD Product </h4>
                                        <br>

                                        <?php
                                            if(isset($message))
                                            {
                                                foreach($message as $message)
                                                {
                                                echo '<span class="message">'.$message.'</span>';
                                                }
                                            }
                                        ?>

                                        <form role="form" class="parsley-examples" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

                                        <div class="row mb-3">
                                            <label for="Categories" class="col-4 col-form-label">Category<span class="text-danger">*</span></label>
                                            <div class="col-7">
                                             <select id="Categories" type="text" class="form-select" name="product_cat">
                                                        <option>Choose</option>
                                                        <option value="Watches">Watches</option>
                                                        <option value="Laptop">Laptop</option>
                                                        <option value="Mobile">Mobile</option>
                                                        <option value="Accessories">Accessories</option>

                                            </select>
                                            </div>
                                        </div>
                                            <div class="row mb-3">
                                                <label for="Product Name" class="col-4 col-form-label"> Product Name <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input type="text" required parsley-type="Name" class="form-control" id="" name="product_name" placeholder="Name" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="hori-pass1" class="col-4 col-form-label">Product Price <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input id="hori-pass1" name="product_price" type="number" placeholder="Product Price " required class="form-control" />
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-textarea" class="col-4 col-form-label">Product Details <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                <textarea class="form-control" id="example-textarea" rows="5" name="product_details" placeholder="Product Details"></textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Product image" class="col-4 col-form-label">Product image<span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                <input type="file" required parsley-type="file" class="form-control" id="" name="product_image" placeholder="Product image" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-3 offset-4">
                                                    <div class="form-check ">
                                                        <input id="checkbox6" type="checkbox" class="form-check-input"/>
                                                        <label for="checkbox6"class="form-check-label">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-8 offset-2">
                                                    <button type="submit" name="add_product" class="btn btn-primary waves-effect waves-light">ADD</button>
                                                    <button type="reset" class="btn btn-secondary waves-effect"><a href="pages-gallery.php"></a> Cancel
                                                    </button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    </center>
                                  </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->


  

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <?php
        include('include/Rside.php');
        ?>
       
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <!-- plugin js -->
        <script src="assets/libs/moment/min/moment.min.js"></script>
        <script src="assets/libs/fullcalendar/main.min.js"></script>

        <!-- Calendar init -->
        <script src="assets/js/pages/calendar.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>