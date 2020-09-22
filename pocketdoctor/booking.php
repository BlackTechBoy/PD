<?php include("inc/header.php");?>
<style type="text/css">
.jumbotron {
	background: url(img/book1.jpg) fixed center no-repeat;;
	background-size: 100% 100%;
}
</style>
<div class="container">
			<div class="jumbotron">
				<div class="display-4 font-weight-bold p-3 text-light w-50">
					BOOK NOW FOR ONE OF OUR PACKAGE <br>
					SECURED PAYMENT OPTION AVAILABLE
				</div>
			</div>
			<div class="row text-center">
				<div class="col-6">
					<div class="card mb-3 p-3 mx-auto">
						<h6 class="card-subtitle mb-2 card-img-top"><i class="fas fa-comment-medical"></i></h6>
					  <div class="card-body">
					    <h5 class="card-title">Consult With General Specialist</h5>
					    <p class="card-text">Get a call from our general specialist for just.</p>
					    <h4>N 1000</h4>
					    <a href="payment.php?pay=general_specialist" class="btn  btn-primary">Order Now</a>
					  </div>
					</div>
				</div>

				<div class="col-6">
					<div class="card mb-3 p-3 mx-auto">
						<h6 class="card-subtitle mb-2 card-img-top"><i class="fas fa-clinic-medical"></i></h6>
					  <div class="card-body">
					    <h5 class="card-title">Home Visit</h5>
					    <p class="card-text">Get a Home Visit from our specialist for just.</p>
					    <h4>N 6500</h4>
					    <a href="payment.php?pay=home_visit" class="btn  btn-primary">Order Now</a>
					  </div>
					</div>
				</div>

				<div class="col-6">
					<div class="card mb-3 p-3 mx-auto">
						<h6 class="card-subtitle mb-2 card-img-top"><i class="fas fa-hand-holding-medical"></i></h6>
					  <div class="card-body">
					    <h5 class="card-title">Sample Collection</h5>
					    <p class="card-text">Get your test and investigation done from the comfort of your home. <br>we collect samples collection from your home for just</p>
					    <h4>N 2500</h4>
					    <a href="payment.php?pay=sample_collection" class="btn  btn-primary">Order Now</a>
					  </div>
					</div>
				</div>

				<div class="col-6">
					<div class="card mb-3 p-3 mx-auto">
						<h6 class="card-subtitle mb-2 card-img-top"><i class="fas fa-briefcase-medical"></i></h6>
					  <div class="card-body">
					    <h5 class="card-title">Prescription Delivery</h5>
					    <p class="card-text">Get your prescription delivered to you at home for just</p>
					    <h4>N 1500</h4>
					    <a href="payment.php?pay=prescription_delivery" class="btn  btn-primary">Order Now</a>
					  </div>
					</div>
				</div>
				
			</div>
		</a>

<?php include("inc/footer.php");?>