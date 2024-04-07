<?php
include('security.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Datatables | Adminto - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Logo3.png">

        <!-- third party css -->
        <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

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
                            <h4 class="page-title-main">Datatables</h4>
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
                                        <h4 class="mt-0 header-title">Admin Register Databass</h4>
                                        

                                        
    
                                        <table id="datatable" class="table table-bordered text-center dt-responsive table-responsive nowrap">
                                            <thead>
                                            <tr>

                                                <th>Order_ID</th>
                                                <th>Orders</th>
                                                <th>Country</th>
                                                <th>Firstname</th>
                                                <th>Laststname</th>
                                                <th>Company_name</th>
                                                <th>Address</th>
                                                <th>Appartment</th>
                                                <th>Town_City</th>
                                                <th>State</th>
                                                <th>Postcode</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                
                                            </tr>
                                            </thead>

                                            
    
    
                                            <tbody>
                                            <?php
                                            $q = "SELECT * FROM order_detail";
                                            $r = mysqli_query($connection, $q);
                                            while($row=mysqli_fetch_assoc($r))
                                            {
                                                echo"
                                                
                                                <tr>
                                                <td>$row[id]</td>
                                                <td>
                                                
                                            <table id='datatable' class='table table-bordered text-center dt-responsive table-responsive nowrap'>
                                            <thead>
                                            <tr>
                                                
                                                <th>name</th>
                                                <th>quantity</th>
                                                <th>price</th>
                                                
                                                
                                            </tr>
                                            </thead>

                                            
    
    
                                            <tbody>
                                            ";

                                            
                                            $q1 = "SELECT * FROM order_details WHERE order_id='$row[id]'";
                                            $r1 = mysqli_query($connection, $q1);  
                                            while($row1=mysqli_fetch_assoc($r1))
                                                {
                                                    echo "
                                                    
                                                    <tr>
                                                    <td>$row1[name]</td>
                                                <td>$row1[quantity]</td>
                                                <td>$row1[price]</td>
                                                    
                                                    </tr>
                                                    
                                                    ";
                                                }
                                            
                                            echo "
                                            
                                            
                                            
                                                </tbody>
                                                </table>
                                                
                                                
                                                
                                                </td>
                                                <td>$row[country]</td>
                                                <td>$row[fname]</td>
                                                <td>$row[lname]</td>
                                                <td>$row[company_name]</td>
                                                <td>$row[street_address]</td>
                                                <td>$row[appartment]</td>
                                                <td>$row[town_city]</td>
                                                <td>$row[state]</td>
                                                <td>$row[postcode]</td>
                                                <td>$row[email]</td>
                                                <td>$row[phone]</td>
                                            </tr>
                                                
                                                ";
                                            }
                                        ?>
                                            
                                           
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                               
                            </div>
                        </div> <!-- end row -->


                        
                        <!-- end row -->
                                      
                    </div> <!-- container-fluid -->

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

        <!-- third party js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.php5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>