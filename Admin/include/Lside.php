<!-- ========== Left Sidebar Start ========== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="left-side-menu">

<div class="h-100" data-simplebar>

     <!-- User box -->
    <div class="user-box text-center">

        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
            
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false"> 
                <?php
                    echo $_SESSION['username'];
                ?></a>

                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="AdminProfile.php" class="dropdown-item notify-item">
                        <i class="dripicons-user-id"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="dripicons-lock"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="auth-lock-screen.php" class="dropdown-item notify-item">
                        <i class="dripicons-lock"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="auth-logout.php" class="dropdown-item notify-item">
                        <i class="fas fa-power-off"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

        <p class="text-muted left-user-info">Admin Head</p>

        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="auth-lock-screen.php">
                    <i class="fas fa-power-off"></i>
                </a>
            </li>
        </ul>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul id="side-menu">

            <li class="menu-title">Home</li>

            <li>
                <a href="home.php">
                    <i class="fas fa-desktop"></i>
                    <span class="badge bg-success rounded-pill float-end">9+</span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="menu-title mt-2">Apps</li>

            <li>
                <a href="../index.php" target="-blank">
                    <i class="fas fa-th-large"></i>
                    <span> Client Website </span>
                </a>
            </li>

            <li>
                <a href="apps-calendar.php">
                    <i class="fas fa-calendar-alt"></i>
                    <span> Calendar </span>
                </a>
            </li>

            <li>
                <a href="#contacts" data-bs-toggle="collapse">
                    <i class="fas fa-portrait"></i>
                    <span> Contacts </span>
                    
                </a>
                <div class="collapse" id="contacts">
                    <ul class="nav-second-level">
                         <li>
                            <a href="AdminProfile.php">Profile</a>
                        </li>
                        <li>
                            <a href="contact_modal.php">Add Contact</a>
                        </li>
                        <li>
                            <a href="contacts-list.php">Contacts List</a>
                        </li>
                        
                    </ul>
                </div>
            </li>

            <li class="menu-title mt-2">Tools</li>

            <li>
                <a href="#sidebarAuth" data-bs-toggle="collapse">
                    <i class="fas fa-user-shield"></i>
                    <span> Authentication Pages </span>
                </a>
                <div class="collapse" id="sidebarAuth">
                    <ul class="nav-second-level">
                        <li>
                            <a href="auth-login.php">Log In</a>
                        </li>
                        <li>
                            <a href="auth-register.php">Register</a>
                        </li>
                        
                        <li>
                            <a href="auth-lock-screen.php">Lock Screen</a>
                        </li>
                        <li>
                            <a href="auth-logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarExpages" data-bs-toggle="collapse">
                    <i class="fab fa-leanpub"></i>
                    <span> Extra Pages </span>
                    
                </a>
                <div class="collapse" id="sidebarExpages">
                    <ul class="nav-second-level">
                      
                        <li>
                            <a href="pages-invoice.php">Invoice</a>
                        </li>
                       
                        <li>
                            <a href="pages-gallery.php">Gallery</a>
                        </li>
                      
                        <li>
                            <a href="pages-coming-soon.php">Coming Soon</a>
                        </li>
                     </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarLayouts" data-bs-toggle="collapse">
                    <i class="dripicons-device-mobile"></i>
                    <span> Product Edit  </span>
                    

                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="nav-second-level">
                    <li>
                            <a href="AddProduct.php">Add Product </a>
                    </li>
                    <li>
                            <a href="UpdatePro.php">Update Product </a>
                    </li>
                    <li>
                            <a href="pages-gallery.php"> View All Product </a>
                    </li>

                    </ul>
                </div>
            </li>

            <li class="menu-title mt-2">View</li>

            <li>
                <a href="order.php">
                    <i class="fa fa-reorder"></i>
                    <span> Client | Orders </span>
                </a>
            </li>

            <li>
                <a href="#sidebarTables" data-bs-toggle="collapse">
                    <i class="fas fa-table"></i>
                    <span> Data Tables </span>
                    
                </a>
                <div class="collapse" id="sidebarTables">
                    <ul class="nav-second-level">
                        <li>
                            <a href="tables-datatables.php"> Admin | user Data Tables</a>
                        </li>
                        <li>
                            <a href="tables-editable.php"> Admin | user Editable Tables</a>
                        </li>
                        
                        <li>
                            <a href="Client-feedback.php"> Client | Feedbacks </a>
                        </li>
                        
                    </ul>
                </div>
            </li>

           

            <li>
                <a href="maps-vector.php">
                    <i class="dripicons-location"></i>
                    <span> Maps </span>
                </a>
            </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->