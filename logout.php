<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['msg']);

echo "<script>window.location='login.php'</script>";
?>