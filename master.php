
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
</head>

<style>
body {
	background-image: url('https://icdn3.digitaltrends.com/image/digitaltrends/microsoftsurfacelaptop3-8-1200x630-c-ar1.91.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
</style>


<div style="background class="jumbotron">
	<div class="container text-center">
		<h1 style="color:red;">Student Online Class Registration</h1>
		
	</div>
</div>
<nav class="navbar navbar-transparent">
	<div class="container-fluid">
		
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li <h2><a href="index.php"><span class="glyphicon glyphicon-home" style="color:red"></span><font color="red"><b> Home</b></font></a></h2></li></left>
				<li <h3><a href="contact_us.php"><span class="glyphicon glyphicon-phone" style="color:red"></span><font color="red"><b> Contact Us</b></font></a></h3></li>
				
			</ul>
			<ul class="nav navbar-nav navbar-right">
		<?php	
			
	
			if(isset($_SESSION['username']))
			{
				echo '<li><a href="profile.php"><span class="glyphicon glyphicon-briefcase" style="color:red"></span><font color:"red"><b> Profile</b></font></a></li>';
				echo '<li><a href="courseAdd.php"><span class="glyphicon glyphicon-briefcase" style="color:red"></span><font color:"red"><b> Course Add</b></font></a></li>';
				echo '<li><a href="index.php?logout=1"><span class="glyphicon glyphicon-off" style="color:red"></span><font color:"red><b> Logout</b></font></a></li>';
			}
			else
			{
		
				echo '<li><a href="login.php"><span class="glyphicon glyphicon-user" style="color:red"></span><font color="red"><b> Login</b></font></a></li>';
				echo '<li><a href="registration.php"><span class="glyphicon glyphicon-pencil" style="color:red"></span><font color="red"><b> Registration</b></font></a></li>';
			}
		?>
			</ul>
		</div>
	</div>
</nav>	
<?php include 'footer.php';?>
</body>
</html>