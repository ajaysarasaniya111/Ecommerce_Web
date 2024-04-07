<?php

echo "how are you";

?>



$subject="Email Activation";
                                    $body="Hi,$name.click here to activate your acoount 
                                    http://localhost/Unique_Electronics_Admin/activate.php?token=$token";

                                    $sender_email="From: ajaysarasaniya11@gmail.com";

                                    if(mail($email,$subject,$body,$sender_email))
                                    {
                                        $_SESSION['msg']="Check you mail to activate your account $email ";
                                        echo"<script>window.location='login.php'</script>";
                                    }
                                    else 
                                    {
                                        echo "Email sending failed...";
                                    }