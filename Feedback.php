<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Unique Electronics | Feedback</title>
</head>
<body>

<header>
    <?php
include("include/header.php");
?>
</header>
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

        <div class="empty-space col-xs-b25 col-sm-b50"></div>
        <div class="empty-space col-xs-b25 col-sm-b50"></div>
        <div class="empty-space col-xs-b25 col-sm-b50"></div>
        <div class="empty-space col-xs-b25 col-sm-b50"></div>

        <div class="container">
            <h4 class="h4 text-center col-xs-b25">Give a Feedback</h4>
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


	<footer>
            <?php
            include("include/footer.php");
            ?>
    </footer>

	</body>
</html>