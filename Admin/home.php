<!DOCTYPE html>
<?php
include('security.php');
?>

<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Unique Electronics </title>
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
                include('security-pd.php');
                
            ?>
    
                    
                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                            <li>
                                <button class="button-menu-mobile disable-btn waves-effect">
                                    <i class="fe-menu"></i>
                                </button>
                            </li>
                            
                            <li>
                                <h4 class="page-title-main">Dashboard</h4>
                            </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        
    
                                        <h4 class="header-title mt-0 mb-4">Total Revenue</h4>
    
                                        <div class="widget-chart-1">
                                            <div class="widget-chart-box-1 float-start" dir="ltr">
                                                <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 "
                                                       data-bgColor="#F9B9B9" value="58"
                                                       data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                       data-thickness=".15"/>
                                            </div>
    
                                            <div class="widget-detail-1 text-end">
                                                <h2 class="fw-normal pt-2 mb-1"> 256 </h2>
                                                <p class="text-muted mb-1">Revenue today</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        
    
                                        <h4 class="header-title mt-0 mb-3">Sales Analytics</h4>
    
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-success rounded-pill float-start mt-3">32% </span>
                                                <h2 class="fw-normal mb-1"> 8451 </h2>
                                                <p class="text-muted mb-3">Revenue today</p>
                                            </div>
                                            <div class="progress progress-bar-alt-success progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 77%;">
                                                    <span class="visually-hidden">77% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        
    
                                        <h4 class="header-title mt-0 mb-4">Statistics</h4>
    
                                        <div class="widget-chart-1">
                                            <div class="widget-chart-box-1 float-start" dir="ltr">
                                                <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                                        data-bgColor="#FFE6BA" value="80"
                                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                        data-thickness=".15"/>
                                            </div>
                                            <div class="widget-detail-1 text-end">
                                                <h2 class="fw-normal pt-2 mb-1"> 4569 </h2>
                                                <p class="text-muted mb-1">Revenue today</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                       
    
                                        <h4 class="header-title mt-0 mb-3">Daily Sales</h4>
    
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-pink rounded-pill float-start mt-3">32% </span>
                                                <h2 class="fw-normal mb-1"> 158 </h2>
                                                <p class="text-muted mb-3">Revenue today</p>
                                            </div>
                                            <div class="progress progress-bar-alt-pink progress-sm">
                                                <div class="progress-bar bg-pink" role="progressbar"
                                                        aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 77%;">
                                                    <span class="visually-hidden">77% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <?php
                                     $select = mysqli_query($conn, "SELECT * FROM contact");
                            ?>

                            <?php while($row = mysqli_fetch_assoc($select)){ ?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body widget-user">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar-lg me-3">
                                                <img src="Profile_img/<?php echo $row['image']; ?>" class="img-fluid rounded-circle" alt="user">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="mt-0 mb-1"><?php echo $row['name']; ?></h5>
                                                <p class="text-muted mb-2 font-13 text-truncate"><?php echo $row['email']; ?></p>
                                                <small class="text-warning"><b>Admin</b></small>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                              
                            </div><!-- end col -->
                            <?php } ?>
        
                            </div><!-- end row -->

   
                        
                            <center>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        
    
                                        <h4 class="header-title mt-0 mb-3">Product Odders</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Client Name</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                    <th>order details</th>
                                                </tr>
                                                </thead>

                                        <?php
                                            $query = "SELECT * FROM order_detail ";
                                            $query_run = mysqli_query($connection, $query);
                                        ?>

                                                <?php
                                            if(mysqli_num_rows($query_run) > 0)        
                                            {
                                                while($row = mysqli_fetch_assoc($query_run))
                                                {
                                            ?>
    
    
                                            <tbody>
                                            <tr>
                                                <td><?php  echo $row['id']; ?></td>
                                                <td><?php  echo $row['fname']; ?></td>
                                                <td><?php  echo $row['date']; ?></td>
                                                <td><?php  echo $row['date']; ?></td>
                                                <td><span class="badge bg-danger">Released</span></td>
                                                <td>-------</td>
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
                               
                            </div><!-- end col -->
                         </center>
                        </div>
                        <!-- end row -->       
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <?php
        include('include/Rside.php');
        include('include/footer.php');
        include('include/Scripts.php');
        ?>
    </body>
</html>