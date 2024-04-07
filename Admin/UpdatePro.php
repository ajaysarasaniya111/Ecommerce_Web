<!DOCTYPE html>
<?php
include('security.php');
?>
<html lang="en">
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
                            <h4 class="page-title-main">Update Product </h4>
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
                    $id = $_GET['edit'];

                    if(isset($_POST['update_product'])){

                        $product_name = $_POST['product_name'];
                        $product_price = $_POST['product_price'];
                        $product_details = $_POST['product_details'];
                        $product_image = $_FILES['product_image']['name'];
                        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
                        $product_image_folder = 'uploaded_img/'.$product_image;
                    
                        if(empty($product_name) || empty($product_price) || empty($product_details) || empty($product_image)){
                        $message[] = 'please fill out all';
                        }else{

                        $update_data = "UPDATE products SET name='$product_name', price='$product_price',details='$product_details', image='$product_image'  WHERE id = '$id'";
                        $upload = mysqli_query($conn, $update_data);

                        if($upload){
                            move_uploaded_file($product_image_tmp_name, $product_image_folder);
                            $message[] = ' product updated successfully';
                            
                        }else{
                            $$message[] = 'please fill out all!'; 
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
                                        <h4 class="header-title">Update Product </h4>
                                        <br>

                                        <?php
                                            if(isset($message))
                                            {
                                                foreach($message as $message)
                                                {
                                                echo '<span class="message" >'.$message.'</span>';
                                                }
                                            }
                                        ?>

                                        <?php
                                            $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
                                            while($row = mysqli_fetch_assoc($select)){
                                        ?>

                                        <form role="form" class="parsley-examples" action="" method="post" enctype="multipart/form-data">

                                            <div class="row mb-3">
                                                <label for="Product Name" class="col-4 col-form-label"> Product Name <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input type="text" required parsley-type="Name" class="form-control" id="" placeholder="Name" name="product_name" value="<?php echo $row['name']; ?>" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="hori-pass1" class="col-4 col-form-label">Product Price <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input id="hori-pass1" type="number" placeholder="Product Price " required class="form-control" name="product_price" value="<?php echo $row['price']; ?>" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Product Details" class="col-4 col-form-label">Product Details<span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                <input type="text" required parsley-type="text" class="form-control" id="" placeholder="Product Details" name="product_details" value="<?php echo $row['details']; ?>" />
                                                </div>
                                            </div>
                                            

                                            <div class="row mb-3">
                                                <label for="Product image" class="col-4 col-form-label">Product image<span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                <input type="file" accept="image/png, image/jpeg, image/jpg" required parsley-type="file" class="form-control" id="" placeholder="Product image"  name="product_image" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-5 offset-4">
                                                    <div class="form-check ">
                                                        <input id="checkbox6" type="checkbox" class="form-check-input"/>
                                                        <label for="checkbox6"class="form-check-label">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-8 offset-2">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_product" >Update</button>
                                                    <button type="reset" class="btn btn-secondary waves-effect"><a href="pages-gallery.php"</a> Cancel</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                        <?php }; ?>
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