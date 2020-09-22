 <h4>List  of Paid Customers and Reference</h4>
 <table class="table table-dark table-hover table-bordered">
	    <thead>
	      <tr class="text-uppercase">
	        <th>ID</th>
	        <th>Fullname</th>
	        <th>Email Address</th>
	        <th>Phone Number</th>
	        <th>Amount Paid</th>
	        <th>Payment Description</th>
	        <th>Reference Number</th>
	        <th>Date of Payment</th>
	        <th>Delete</th>
	      </tr>
	    </thead>
	    <?php
			include_once('inc/db.php');
		   $sql = "SELECT * FROM `cuistomers`";
		   $run = $conn->query($sql);
		   	   
		   	   while($row = $run->fetch_array()) {
					$id=$row[0];
					$fname=$row[1];
					$email=$row[2];
					$phone=$row[3];
					$amount=$row[4];
					$PaymentType=$row[5];
					$reference=$row[6];
					$dateTime=$row[7];
		?>
	    <tbody>
	      <tr>
	        <td><?php echo $id;?></td>
	        <td><?php echo $fname;?></td>
	        <td><?php echo $email;?></td>
	        <td><?php echo $phone;?></td>
	        <td><?php echo $amount;?></td>
	        <td><?php echo $PaymentType;?></td>
	        <td><?php echo $reference;?></td>
	        <td><?php echo $dateTime;?></td>
	        <td><a href="delete.php?del=<?php echo $id; ?>"> Delete</a></td>
	      </tr>
	    </tbody>
	<?php } ?>
	</table>