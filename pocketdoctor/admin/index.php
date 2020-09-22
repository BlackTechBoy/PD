<?php
	include_once('inc/db.php');
	if (isset($_POST['Loginbtn'])) {
		 $mail = $_POST['email'];
		 $pass = $_POST['password'];
	      
	        $sql="SELECT * FROM `admin_users` where Email='$mail'AND Password='$pass'";
	        $result = $conn->query($sql);

	        if (mysqli_num_rows($result) > 0) {
	        	session_start();
	                $_SESSION['email']=$mail;
	                header("location:dashboard.php");
	        } else {
	            die("Login failed: " . $conn->connect_error);
	        }
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>POCKET DOCTOR</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
	<!-- Custom styles for this template-->
	<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
</head>
	
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	  <a class="navbar-brand" href="index.php"><img src="../img/logo.jpg" alt="POCKET DOCTOR"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	</nav>

<div class="container">
	<div class="row">
		<div class="col-4 mx-auto pt-5 pb-5">
			<div class="text-center">
				<img src="../img/logo.jpg" alt="POCKET DOCTOR">
			</div>
			<form method="POST" action='index.php'>
		        <fieldset>
		        	<legend>Admin Login</legend>
		        	<div class="form-group">
			          <label for="email">Email Address</label>
			          <input type="email" name="email" class="form-control" id="email-address" />
			        </div>
			        <div class="form-group">
			          <label for="password">Passsword</label>
			          <input type="password" name="password" class="form-control" id="password" />
			        </div>
			        <div class="form-submit text-center">
			          <button type="submit" name="Loginbtn" class="btn btn-primary"> Login </button>
			        </div>
		        </fieldset>
		      </form>
		</div>
	</div>
</div>