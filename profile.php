<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<header>
    <?php
include("include/header.php");
?>
        </header>

		
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> 

<style>

.container1 {
  position: relative;
  width: 500px;
  height: 580px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-logo1 {
  height: 90px;
  width: 100px;
  background: url("https://img.icons8.com/color/100/000000/user--v2.png");
  margin: auto;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}

.brand-title1 {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.8rem;
  color: #1DA1F2;
  letter-spacing: 1px;
}

.inputs{
  text-align: left;
  margin-top: 30px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-top: 13px;
  margin-bottom: 7px;
  text-align: left;
}

label:nth-of-type(2) {
  margin-top: 15px;
}


input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 30px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  color: white;
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

</style>

<?php  
					 include("connection.php");
					 $q="select * from register where email='".$_SESSION['user']."'";
					  $r=mysqli_query($con,$q);
					  while($row=mysqli_fetch_array($r))
					  {
						  
					?>
                    <center>
                    <div class="container1">
                    <div class="brand-logo1"></div>
                    <div class="brand-title1"><?php echo $row['email']; ?></div>
                    <br>
                    <div class="inputs1">
                        <label>Usre ID :</label><br>
                        <input type="text" value="<?php echo $row['id']; ?>"/>
                        <label>User Name :</label><br>
                        <input type="text" value="<?php echo $row['name']; ?>" />
                        <label> User Email :</label><br>
                        <input type="text" value="<?php echo $row['email']; ?>" />
                        
                        <br>
                        <br>
                        <button type="submit"><a href="logout.php">Logout</a></button>
                    </div> 
                    </div>
                    </center>
                    <?php
                        }
                    ?> 

	<br> <br> <br> <br> <br>  

	<footer>
            <?php
            include("include/footer.php");
            ?>
        </footer>

	</body>
</html>