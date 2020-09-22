<?php 
include_once("inc/header.php"); 
include_once("inc/menu.php"); 
?>

<div class="p-3 float-right" style="width: 80%;">
  <?php
  	if(!($_GET['page']) ){
		include("home.php");
	}
	if($_GET['page']=='msg'){
		include("msg.php");
	}
  ?>
  
</div>

<?php include_once("inc/footer.php"); ?>

