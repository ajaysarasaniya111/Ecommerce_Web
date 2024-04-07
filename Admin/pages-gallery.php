<!DOCTYPE html>
<?php
include('security.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gallery | Unique Electronics Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Logo3.png">

        <!-- Lightbox css -->
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="page-title-main">Gallery</h4>
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
            if(isset($_GET['delete']))
                {
                $id = $_GET['delete'];
                mysqli_query($conn, "DELETE FROM products WHERE id = $id");
                
                };
            ?> 

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                       
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="portfolioFilter">
                                    <a href="#" data-filter="*" class="current waves-effect waves-primary">All</a>
                                    <a href="#" data-filter=".natural" class="waves-effect waves-primary">Latest</a>
                                    <a href="#" data-filter=".creative" class="waves-effect  waves-primary">New Models</a>
                                    <a href="#" data-filter=".photography" class="waves-effect waves-primary">Upcoming</a>
                                </div>
                            </div>
                        </div>

                        <div class="port mb-2">
                            <div class="row portfolioContainer">

                                <?php
                                     $select = mysqli_query($conn, "SELECT * FROM products");
                                     
                                ?>

                                <?php while($row = mysqli_fetch_assoc($select)){ ?>

                                <div class="col-md-6 col-xl-3 col-lg-4 natural creative personal">
                                    <div class="gal-detail thumb">
                                        <a href="uploaded_img/<?php echo $row['image']; ?>" class="image-popup" title="Screenshot-12">
                                            <img class="thumb-img img-fluid" alt="work-thumbnail" src="uploaded_img/<?php echo $row['image']; ?>"</a>

                                        <div class="text-center">
                                            <h4><?php echo $row['name']; ?></h4>
                                            <h5>Mrp .<?php echo $row['price']; ?>/-</h5>

                                            <p class="font-13 text-muted mb-2"><?php echo $row['details']; ?></p>
                                            <td>
                                                <a href="UpdatePro.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                                                <a href="pages-gallery.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                                            </td>


                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                            </div><!-- end portfoliocontainer-->
                        </div> <!-- End row -->
        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php 
                    include('include/footer.php');
                ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
            <?php
                include('include/Rside.php');
            ?>
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

        <!-- isotope filter plugin -->
        <script src="assets/libs/isotope-layout/isotope.pkgd.min.js"></script>

        <!-- Magnific Popup-->
        <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Gallery Init-->
        <script src="assets/js/pages/gallery.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>