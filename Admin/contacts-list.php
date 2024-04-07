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
                            <h4 class="page-title-main">Contacts</h4>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->

            <!-- Left Sidebar End -->
            
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
            include('security-pd.php');
            if(isset($_GET['delete']))
                {
                $id = $_GET['delete'];
                mysqli_query($conn, "DELETE FROM contact WHERE id = $id");
                
                };
            ?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-md-4">
                                                <div class="mt-3 mt-md-0">
                                                <h5>All Contact Details </h5>
                                                </div>
                                            </div><!-- end col-->
                                            <div class="col-md-8">
                                                <form class="d-flex flex-wrap align-items-center justify-content-sm-end">
                                                    <label for="status-select" class="me-2">Sort By</label>
                                                    <div class="me-sm-2">
                                                        <select class="form-select my-1 my-md-0" id="status-select">
                                                            <option selected="">All</option>
                                                            <option value="1">Name</option>
                                                            <option value="2">Address</option>
                                                            <option value="3">email</option>
                                                        </select>
                                                    </div>
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                    <div>
                                                        <input type="search" class="form-control my-1 my-md-0" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                </form>
                                            </div>
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->        
                        <div class="row">
                        <?php
                                     $select = mysqli_query($conn, "SELECT * FROM contact");
                                ?>

                            <?php while($row = mysqli_fetch_assoc($select)){ ?>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="text-center card-body">
                                        
                                        <div>
                                            <img src="Profile_img/<?php echo $row['image']; ?>" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">
    
                                            <p class="text-muted font-13 mb-3">
                                            <?php echo $row['detail']; ?>
                                            </p>
    
                                            <div class="text-start">
                                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="ms-2"><?php echo $row['name']; ?></span></p>
    
                                                <p class="text-muted font-13"><strong>Mobile :</strong><span class="ms-2"><?php echo $row['mobile']; ?></span></p>
    
                                                <p class="text-muted font-13"><strong>Email :</strong> <span class="ms-2"><?php echo $row['email']; ?></span></p>
    
                                                <p class="text-muted font-13"><strong>Location :</strong> <span class="ms-2"><?php echo $row['address']; ?></span></p>
                                            </div>

                                            <td>
                                                <a href="contacts-list.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                                            </td>
    
                                            <button type="button" class="btn btn-primary rounded-pill waves-effect waves-light">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                                

                            </div> <!-- end col -->
                            <?php } ?>

                            </div> <!-- end row -->
  
                        
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