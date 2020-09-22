<?php
	error_reporting(1);
	include_once("inc/header.php");
?>


<div class="container">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/img01.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/img02.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/img03.jpg" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		
		<a name="services">
			<div class="header text-center p-3 mb-2 bg-dark text-white">
				<h1>OUR SERVICES</h1>
			</div>
			<div class="row mb-3 p-3">
				<div class="col-4">
					<img src="img/img01.jpg" class="bd-placeholder-img rounded-circle" width="300" height="300" alt="">
					<h6>Call a Doctor </h6>
					<p>Speak with Qualified Medical Practitioners</p>
				</div>
				<div class="col-4">
					<img src="img/img02.jpg" class="bd-placeholder-img rounded-circle" width="300" height="300" alt="">
					<h6>Home Visit</h6>
					<p>Get quality medical care in the comfort of your home</p>
				</div>
				<div class="col-4">
					<img src="img/img03.jpg" class="bd-placeholder-img rounded-circle" width="300" height="300" alt="">
					<h6>Ancillary Investigations and Prescription Delivery</h6>
					<p>Get Biomedical samples collected and results and prescriptions delivered at your convinience.</p>
				</div>
			</div>
		</a>

		<div class="container">
			<div class="row text-center">
				<div class="col-3">
					<div class="card mb-3 p-3">
						<h3>6 MONTHS</h3>
						<p>Years in Business</p>
					</div>
				</div>
				<div class="col-3">
					<div class="card mb-3 p-3">
						<h3>10</h3>
						<p>Dedicated Medical Doctor</p>
					</div>
				</div>
				<div class="col-3">
					<div class="card mb-3 p-3">
						<h3>50</h3>
						<p>Home Visit Completed</p>
					</div>
				</div>
				<div class="col-3">
					<div class="card mb-3 p-3">
						<h3>100%</h3>
						<p>Satisfactory Gauranteed</p>
					</div>
				</div>
			</div>
		</div>

	</div>

<?php
	
	include_once("inc/footer.php")
?>

	

	