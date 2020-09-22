<?php
include_once 'inc/header.php';

session_start();
if(!$_GET["successfullypaid"]){
  header("Location: index.php");
  exit;
}else{
  $reference  =  $_GET["successfullypaid"];
}

 $first_name = $_SESSION["first_name"];
 $last_name = $_SESSION["last_name"];
 $phone = $_SESSION["phone"];
 $email = $_SESSION["email"];
 $amount = $_SESSION["amount"];
 $service = $_SESSION["service"];
 $date = date("Y.m.d: h:i:sa");

 $fname = $first_name . " " . $last_name;

 $sql = "INSERT INTO `cuistomers`(Fullname, Email, Phone, Amount, Payment_Description, Reference_Number, Date_Of_Payment) VALUES ('$fname', '$email', '$phone', '$amount', '$service', '$reference', '$date')";
	$run = mysqli_query($conn, $sql);
	
?>

<div class="container">
	<div class="text-center">
		<img src="img/logo.jpg">
		<div class="display-4 text-success">Payment Successfull!</div>
		<i class="fas fa-check-circle text-success pt-2" style="font-size: 10rem;"></i>
	</div>
	<div class="row">
		<div class="col-6 mx-auto pt-3 pb-3">
			<table class="table">
			    <tbody>
			      <tr>
			      	<td class="font-weight-bold"> Full Name:</td>
			        <td class="text-uppercase"><?php echo $fname; ?></td>
			      </tr>
			      <tr>
			      	<td class="font-weight-bold">Email Address:</td>
			        <td class="text-uppercase"><?php echo $email; ?></td>
			      </tr>
			      <tr>
			      	<td class="font-weight-bold">Services Paid:</td>
			        <td class="text-uppercase"><?php echo $service; ?></td>
			      </tr>
			      <tr>
			      	<td class="font-weight-bold">Amount:</td>
			        <td class="text-uppercase"><del>N</del> <?php echo $amount; ?></td>
			      </tr>
			      <tr>
			      	<td class="font-weight-bold">Reference Number:</td>
			        <td><?php echo $reference; ?></td>
			      </tr>
			    </tbody>
			  </table>
		</div>
	</div>
	<form action="success.php?successfullypaid=<?php echo $reference; ?>" class="text-center" method="POST">
	  <button name="subbtn" class="btn btn-success"> Back To Index page </button>  
	</form>

</div>
<?php
if (isset($_POST['subbtn'])) {
	header("Location: index.php");
	session_unset();
	session_destroy();
}
?>