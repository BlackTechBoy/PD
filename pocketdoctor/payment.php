<?php
 include("inc/header.php");
$service=$_GET['pay'];

if ($service == 'general_specialist') {
  $amount = 1000;
}else if ($service == 'home_visit') {
  $amount = 6500;
}else if ($service == 'sample_collection') {
  $amount = 2500;
}else if ($service == 'prescription_delivery') {
  $amount = 1500;
}
session_start();
$_SESSION['service'] = $service;

?>
<div class="container">
  
  <div class="row">
    <div class="col-4 mr-auto ml-auto">
      <form action="pay.php" method="post">
        <div class="form-group">
          <label for="service_name">Service</label>
          <input type="tel" name="service" class="form-control" value="<?php echo $service?>" id="service_name" disabled />
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" class="form-control" id="email-address" />
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="tel" name="amount" class="form-control" value="<?php echo $amount?>" id="amount" disabled />
        </div>
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" name="firstname" class="form-control" id="first-name" />
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" name="lastname" class="form-control" id="last-name" />
        </div>
        <div class="form-group">
          <label for="phone-number">Phone Number</label>
          <input type="tel" name="phone" class="form-control" id="phone-number" />
        </div>
        <div class="form-submit text-center">
          <button class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include("inc/footer.php");?>

