<?php
include_once('inc/header.php');
session_start();
$service = $_SESSION['service'];
if ($service == 'general_specialist') {
  $amount = 1000;
}else if ($service == 'home_visit') {
  $amount = 6500;
}else if ($service == 'sample_collection') {
  $amount = 2500;
}else if ($service == 'prescription_delivery') {
  $amount = 1500;
}
//Sanitize form inputs from harmful data
 $sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 
 //Collect form data into regular post variables
  $first_name = $sanitizer['firstname'];
  $last_name = $sanitizer['lastname'];
  $phone = $sanitizer['phone'];
  $email = $sanitizer['email'];
  $amount = $amount;
  $service = $service;


if(empty($first_name) || empty($last_name) || empty($phone) || empty($email)){
header("Location: index.php");
}else{
 
$_SESSION['first_name'] =  $first_name;
$_SESSION['last_name'] =  $last_name;
$_SESSION['phone']  = $phone;
$_SESSION['email']  = $email;
$_SESSION['service']  = $service;
$_SESSION['amount']  = $amount;

}
?>

<div class="container">
  
  <div class="row">
    <div class="col-4 mr-auto ml-auto">
      <form>
        <div class="form-group">
          <label for="service_name">Service</label>
          <input type="tel" class="form-control" value="<?php echo $service; ?>" disabled />
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" value="<?php echo $email; ?>" disabled />
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="tel" class="form-control" value="<?php echo $amount; ?>" id="amount" disabled />
        </div>
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" class="form-control" value="<?php echo $first_name; ?>" disabled/>
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" class="form-control" value="<?php echo $last_name; ?>" disabled/>
        </div>
        <div class="form-group">
          <label for="phone-number">Phone Number</label>
          <input type="tel" class="form-control" value="<?php echo $phone; ?>" disabled/>
        </div>
        <div class="form-submit text-center">
          <button class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- Button trigger modal -->
<div class="text-center pt-5">
  <button type="button" id="btn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Gataway</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Hi, <?php echo $email; ?></h4>
        <p>You are making payment for <b class="text-uppercase"><?php echo $service; ?></b>, pleas click on the proceed button to continue with your payment</p>
      </div>
      <div class="modal-footer">
        <button name="sub" class="btn btn-primary" type="button" onclick="payPageWithPaystack()"> Proceed </button>
      </div>
    </div>
  </div>
</div>

<form action="" method="POST">
  <script src="https://js.paystack.co/v1/inline.js"></script>
   
</form>
 
<script>
  function payPageWithPaystack(){
const api = "pk_test_29618181cb066f06fe4dfb25d697741ddfac4cba";
    var handler = PaystackPop.setup({
      key: api,
      email: "<?php echo $email; ?>",
      amount: <?php echo $amount*100; ?>,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      firstname: "<?php echo". $first_name."; ?>",
      lastname: "<?php echo $last_name; ?>",
      phone: "<?php echo $phone; ?>",
      // label: "Optional string that replaces customer email"
      metadata: {
         custom_fields: [
            {
                display_name: "First Name:",
                variable_name: "first_name",
                value: "<?php echo $first_name; ?>"
            },
             {
                display_name: "Last Name:",
                variable_name: "last_name",
                value: "<?php echo $last_name; ?>"
            },
             {
                display_name: "Phone Number:",
                variable_name: "phone_number",
                value: "<?php echo $phone; ?>"
            },
             {
                display_name: "Product Name",
                variable_name: "product_name",
                value: "<?php echo $product_name; ?>"
            }
         ]
      },
      callback: function(response){
           const referenced = response.reference;
		  window.location.href='success.php?successfullypaid='+ referenced;
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
<?php
include 'inc/footer.php';

?>