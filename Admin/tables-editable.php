<?php
include('security.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Table Editable | Adminto - Responsive Admin Dashboard Template</title>
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
                            <h4 class="page-title-main">Table Editable</h4>
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
            ?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Admin Register Databass Edit </h4>
                                        <?php
                                                if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                                                {
                                                    echo '<p class=" small font-weight-bold text-primary text-gray-900"> '.$_SESSION['status'].' </p>';
                                                    unset($_SESSION['status']);
                                                }
                                        ?>
                                        

                                        <?php
                                            $query = "SELECT * FROM adminreg";
                                            $query_run = mysqli_query($connection, $query);
                                        ?>
    
                                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>

                                            <?php
                                            if(mysqli_num_rows($query_run) > 0)        
                                            {
                                                while($row = mysqli_fetch_assoc($query_run))
                                                {
                                            ?>
    
    
                                            <tbody>
                                            <tr>
                                                <td><?php  echo $row['uid']; ?></td>
                                                <td><?php  echo $row['username']; ?></td>
                                                <td><?php  echo $row['email']; ?></td>
                                                <td><?php  echo $row['password']; ?></td>
                                                <td>
                                                    <form action="register_edit.php" method="post">
                                                    <input type="hidden" name="edit_id" value="<?php echo $row['uid'] ?>">
                                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                                    </form>
                                                </td>
                                                <td>
                                                <form action="code.php" method="post">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['uid']; ?>">
                                                <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <?php
                                                } 
                                                    }
                                                else {
                                                    echo "No Record Found";
                                                }
                                            ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               
                            </div>


                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Clint Usre Databass Edit </h4>
                                        <?php
                                                if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                                                {
                                                    echo '<p class=" small font-weight-bold text-primary text-gray-900"> '.$_SESSION['status'].' </p>';
                                                    unset($_SESSION['status']);
                                                }
                                        ?>
                                        <?php
                                            $query = "SELECT * FROM register";
                                            $query_run = mysqli_query($connection, $query);
                                        ?>
                                                                    
    
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>

                                            <?php
                                            if(mysqli_num_rows($query_run) > 0)        
                                            {
                                                while($row = mysqli_fetch_assoc($query_run))
                                                {
                                            ?>
    
    
                                            <tbody>
                                            <tr>
                                                <td><?php  echo $row['id']; ?></td>
                                                <td><?php  echo $row['name']; ?></td>
                                                <td><?php  echo $row['email']; ?></td>
                                                <td><?php  echo $row['password']; ?></td>
                                                <td>
                                                <form action="client_register_edit.php" method="post">
                                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                                    <button type="submit" name="edit_btnc" class="btn btn-success"> EDIT</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="code.php" method="post">
                                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="delete_btnc" class="btn btn-danger"> DELETE</button>
                                                </form>
                                            </td>
                                            </tr>

                                            <?php
                                                } 
                                            }
                                            else {
                                                echo "No Record Found";
                                            }
                                            ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               
                            </div>
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

        <!-- Table Editable plugin-->
        <script src="assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>

        <!-- Table editable init-->
        <script src="assets/js/pages/tabledit.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>