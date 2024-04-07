<!DOCTYPE html>
<?php
include('security.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Contacts | Unique Electronics Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Logo3.png">

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
                            <h4 class="page-title-main">Profile</h4>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->

            <!-- Left Sidebar End -->
            
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                        
                                        
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>

                        <!-- end row -->  
                
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="text-center card-body">
                                        <?php  
                                            include("security-pd.php");
                                            $q="select * from adminreg where email='".$_SESSION['username']."'";
                                            $r=mysqli_query($conn,$q);
                                            while($row=mysqli_fetch_array($r))
                                            {
                                        ?>
                                        
                                        <div>
                                            <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">
    
                                            <p class="text-muted font-13 mb-3">
                                            <?php echo $row['email']; ?>
                                            </p>
    
                                            <div class="text-start">
                                                <p class="text-muted font-13"><strong>Admin id :</strong> <span class="ms-2"><?php echo $row['uid']; ?></span></p>
    
                                                <p class="text-muted font-13"><strong>Name :</strong><span class="ms-2"><?php echo $row['username']; ?></span></p>
    
                                                <p class="text-muted font-13"><strong>Email :</strong> <span class="ms-2"><?php echo $row['email']; ?></span></p>
    
                                                <p class="text-muted font-13"><strong>Password :</strong> <span class="ms-2"><?php echo $row['password']; ?></span></p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> 
                            </div> <!-- end col -->

                            <?php
					            }
		                    ?> 
                            
                        </div>
                        <!-- end row -->   
                        
                        
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


        <!-- Modal -->
        <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light">
                        <h4 class="modal-title" id="myCenterModalLabel">Add Contact</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" class="form-control" id="position" placeholder="Enter position">
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" placeholder="Enter company">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
        
                                <button type="submit" class="btn btn-light waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


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

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>