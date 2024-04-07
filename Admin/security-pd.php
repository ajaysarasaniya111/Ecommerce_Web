<?php
$conn = mysqli_connect('localhost','root','','unique_db');
?>

<?php
include('database/dbconfig.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}
?>