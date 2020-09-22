<?php 
$msg = null;
include ("inc/header.php");
if (isset($_POST['contactbtn'])) {
	$fname = $_POST['firstname'] . " " . $_POST['lastname'];
	$mail = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$sql = "INSERT INTO `contact` (FullName, Email, Phone, Messages) VALUES ('$fname', '$email', '$phone', '$message')";
	$run = mysqli_query($conn, $sql);
	if ($run === true) {
	  $msg = "<div class='alert alert-success'>Your Message have been sent to the appropriate Personnel</div>";
	} else {
	  $msg = "<div class='alert alert-danger'>Error Sending Your Message</div>";
	}
}
?>
<div class="container">
	<h3 class="text-center">CONTACT US</h3>
	<div class="row">
		<div class="col-6 mx-auto">
			<form class="form" action="contact.php" method="POST">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
				          <label for="first-name">First Name</label>
				          <input type="text" name="firstname" class="form-control" id="first-name" />
				        </div>
					</div>
					<div class="col-6">
						<div class="form-group">
				          <label for="last-name">Last Name</label>
				          <input type="text" name="lastname" class="form-control" id="last-name" />
				        </div>
					</div>
					<div class="col-6">
						<div class="form-group">
				          <label for="email">Email Address</label>
				          <input type="email" name="email" class="form-control" id="email-address" />
				        </div>
					</div>
					<div class="col-6">
						<div class="form-group">
				          <label for="phone-number">Phone Number</label>
				          <input type="tel" name="phone" class="form-control" id="phone-number" />
				        </div>
					</div>
					<div class="col-12">
						<label for="message">Message Area</label>
    					<textarea class="form-control" name="message" id="message" rows="3"></textarea>
					</div>
					<div class="col-12">
						<div class="form-submit text-center p-3">
				          <button class="btn btn-primary" name="contactbtn">Submit</button>
				        </div>
					</div>
					<div class="col-12">
						<?php echo $msg; ?>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include ("inc/footer.php");?>