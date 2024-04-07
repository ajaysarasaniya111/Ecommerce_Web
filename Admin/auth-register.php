<!DOCTYPE html>
<?php
include('security.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register | Unique Electronics Admin </title>
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
                            <h4 class="page-title-main">Admin Registration </h4>
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


               <br>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                    <center>
                    <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Admin Register </h4>
                                        <br>

                                        <?php
                                                if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                                                {
                                                    echo '<p class=" small font-weight-bold text-primary text-gray-900"> '.$_SESSION['status'].' </p>';
                                                    unset($_SESSION['status']);
                                                }
                                        ?>

                                        

                                        <form action="code.php" method="POST" >

                                            <div class="row mb-3">
                                                <label for="Name" class="col-4 col-form-label"> Name </label>
                                                <div class="col-7">
                                                    <input type="text" required parsley-type="Name" class="form-control" id="" placeholder=" Enter your Name" name="username"  />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Email Id" class="col-4 col-form-label">Email Id      </label>
                                                <div class="col-7">
                                                    <input id="email" type="email" placeholder="Enter your Email id " required class="form-control" name="email"  />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Password" class="col-4 col-form-label">Password</label>
                                                <div class="col-7">
                                                <input  required parsley-type="password" class="form-control" type="password" name="password" required id="password" placeholder="Enter your password"  />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="Confirm Password" class="col-4 col-form-label">Confirm Password</label>
                                                <div class="col-7">
                                                <input class="form-control" type="password" name="confirmpassword" required id="password" placeholder="Enter your confirm-password"  />
                                                </div>
                                            </div>
                                            
                                           <!-- <div class="row mb-3">
                                                <label for="Profile Image" class="col-4 col-form-label">Profile Image </label>
                                                <div class="col-7">
                                                    <input id="imagefile" type="file" placeholder="upload your image" required class="form-control" name="imagefile"  />
                                                </div>
                                            </div>-->
                                            
                                            <div class="row mb-3">
                                                <div class="col-4 offset-4">
                                                    <div class="form-check ">
                                                        <input id="checkbox6" type="checkbox" class="form-check-input"/>
                                                        <label for="checkbox6"class="form-check-label"> I accept Terms and Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-8 offset-2">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light"  name="registerbtn" >Sign Up</button>

                                                    <a  class="btn btn-secondary waves-effect" href="home.php"> Cancel</a>
                                                </div>
                                            </div>
                                            
                                        </form>
                                       
                                    </div>
                                    </center>
                                  </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

            </div><!-- end content-->

  

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