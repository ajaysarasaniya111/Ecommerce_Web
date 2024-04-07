<?php
            error_reporting(0);
                if(isset($_POST['Send_btn']))
                {
                               
                include("connection.php");
                $fname = $_POST['name'];
                $femail = $_POST['email'];
                $fphone = $_POST['mobile'];
                $fsubject = $_POST['subject'];
                $fmsg = $_POST['message'];

                $q="insert into feedback (name,email,phone,subject,message)values('$fname','$femail','$fphone','$fsubject','$fmsg')";
                $r=mysqli_query($con,$q);
                    if($r>0)
                    {
                        $_SESSION['status'] = "Your Feedback Send :";
                    }
                    else
                    {
                        $_SESSION['status'] = "Your Feedback Not Send :";
                    }
                }
             ?>

<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>

    <!-- LOADER -->
    <header>
<?php
include("include/header.php");
?>
        </header>

        <div class="header-empty-space"></div>

        <div class="block-entry fixed-background" style="background-image: url(img/background-26.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="cell-view simple-banner-height text-center">
                            <div class="empty-space col-xs-b35 col-sm-b70"></div>
                            <h1 class="h1 light">contact us</h1>
                            <div class="title-underline center"><span></span></div>
                            <div class="simple-article light transparent size-4">In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div>
                            <div class="empty-space col-xs-b35 col-sm-b70"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <div class="container">
            <div class="text-center">
                <div class="simple-article size-3 grey uppercase col-xs-b5">our contacts</div>
                <div class="h2">we ready for your questions</div>
                <div class="title-underline center"><span></span></div>
            </div>
        </div>

        <div class="empty-space col-sm-b15 col-md-b50"></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="icon-description-shortcode style-1">
                        <img class="icon" src="img/icon-25.png" alt="">
                        <div class="title h6">address</div>
                        <div class="description simple-article size-2">Unique Electronics,Rajkot<br>Gujarat-360002</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="icon-description-shortcode style-1">
                        <img class="icon" src="img/icon-23.png" alt="">
                        <div class="title h6">phone</div>
                        <div class="description simple-article size-2" style="line-height: 26px;">
                            <a href="">+91 9905464074</a>
                            <br/>
                            <a href="">+91 9905464074</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="icon-description-shortcode style-1">
                        <img class="icon" src="img/icon-28.png" alt="">
                        <div class="title h6">email</div>
                        <div class="description simple-article size-2"><a href="">UniqueElectronics@gmail.com</a></div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="empty-space col-xs-b25 col-sm-b50"></div>
    
        

        <div class="empty-space col-xs-b25 col-sm-b50"></div>

        <div class="container">
            <h4 class="h4 text-center col-xs-b25"> Contact Us</h4>
            <?php
                        if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                            {
                                echo '<p class=" small text-center col-xs-b25"> '.$_SESSION['status'].' </p>';
                                unset($_SESSION['status']);
                            }
                ?>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <form class="contact-form" action="" method="POST">
                        <div class="row m5">
                            <div class="col-sm-6">
                                <input class="simple-input col-xs-b20" type="text" value="" placeholder="Name" name="name" />
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input col-xs-b20" type="text" value="" placeholder="Email" name="email" />
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input col-xs-b20" type="text" value="" placeholder="Phone" name="mobile" />
                            </div>
                            <div class="col-sm-6">
                                <input class="simple-input col-xs-b20" type="text" value="" placeholder="Subject" name="subject" />
                            </div>
                            <div class="col-sm-12">
                                <textarea class="simple-input col-xs-b20" placeholder="Your message" name="message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <div class="button size-2 style-3">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                            <span class="text">send Feedback</span>
                                        </span>
                                        <input type="submit" name="Send_btn" value="Submit" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>
        <div class="empty-space col-xs-b35 col-md-b70"></div>

        <!-- FOOTER -->
        <footer>
            <?php
            include("include/footer.php");
            ?>
        </footer>
    </div>

    

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/global.js"></script>

    <!-- styled select -->
    <script src="js/jquery.sumoselect.min.js"></script>

    <!-- counter -->
    <script src="js/jquery.classycountdown.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.throttle.js"></script>

    <!-- MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/map.js"></script>

    <!-- CONTACT -->
    <script src="js/contact.form.js"></script>



</body>
</html>
