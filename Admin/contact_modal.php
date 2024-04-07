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
                            <h4 class="page-title-main"> Add Contacts</h4>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->

            <!-- Left Sidebar End -->
            
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
             <!-- Modal -->

        <?php
                include('security-pd.php');
                if(isset($_POST['add_contact'])){

                $contact_name = $_POST['name'];
                $contact_mobile = $_POST['mobile'];
                $contact_email = $_POST['email'];
                $contact_address = $_POST['address'];
                $contact_detail = $_POST['detail'];
                $contact_image = $_FILES['image']['name'];
                $contact_image_tmp_name = $_FILES['image']['tmp_name'];
                $contact_image_folder = 'Profile_img/'.$contact_image;

                if(empty($contact_name) || empty($contact_mobile) || empty($contact_email) || empty($contact_address) || empty($contact_detail) || empty($contact_image)){
                    $message[] = 'please fill out all';
                }else{
                    $insert = "INSERT INTO contact(name,mobile,email,address,detail, image) VALUES('$contact_name', '$contact_mobile','$contact_email','$contact_address','$contact_detail', '$contact_image')";
                    $upload = mysqli_query($conn,$insert);
                    if($upload){
                        move_uploaded_file($contact_image_tmp_name, $contact_image_folder);
                        $message[] = 'New Contact Added Successfully';
                    }else{
                        $message[] = 'Could not Add the Contact';
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
                                        <h4 class="header-title">ADD Contact </h4>
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
                                                <label for="Product Name" class="col-4 col-form-label"> Full Name <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input type="text" required parsley-type="Name" class="form-control" id="" name="name" placeholder="Name" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="mobile" class="col-4 col-form-label">Mobile <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input id="mobile" name="mobile" type="number" placeholder="Enter Mobile Number " required parsley-type="number"class="form-control" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="hori-pass1" class="col-4 col-form-label">Email <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input id="hori-pass1" name="email" type="email" placeholder="Enter Email " required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="hori-pass1" class="col-4 col-form-label">Address <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input id="hori-pass1" name="address" type="text" placeholder="Enter Address " required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="hori-pass1" class="col-4 col-form-label">Yourself <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input id="hori-pass1" name="detail" type="text" placeholder=" Enter yourself " required class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="hori-pass1" class="col-4 col-form-label">Profile image<span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                <input type="file" required parsley-type="file" class="form-control" id="" name="image" placeholder="Profile image" />
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
                                                    <button type="submit" name="add_contact" class="btn btn-primary waves-effect waves-light">Add Contact</button>
                                                    <button type="reset" class="btn btn-secondary waves-effect"><a href="contact-list.php"></a> Cancel
                                                    </button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    </center>
                                  </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->


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