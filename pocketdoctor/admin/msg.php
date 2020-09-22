 <h4>Messages From Customers</h4>
 <table class="table table-dark table-hover table-bordered">
	    <thead>
	      <tr class="text-uppercase">
	        <th>ID</th>
	        <th>Fullname</th>
	        <th>Email Address</th>
	        <th>Phone Number</th>
	        <th>Messages</th>
	        <th>Delete</th>
	      </tr>
	    </thead>
	    <?php
			include_once('inc/db.php');
		   $sql = "SELECT * FROM `contact`";
		   $run = $conn->query($sql);
		   	   
		   	   while($row = $run->fetch_array()) {
					$id=$row[0];
					$fname=$row[1];
					$email=$row[2];
					$phone=$row[3];
					$msg=$row[4];
		?>
	    <tbody>
	      <tr>
	        <td><?php echo $id;?></td>
	        <td><?php echo $fname;?></td>
	        <td><?php echo $email;?></td>
	        <td><?php echo $phone;?></td>
	        <td><?php echo $msg;?></td>
	        <td><a href="delete.php?del=<?php echo $id; ?>"> Delete</a></td>
	      </tr>
	    </tbody>
	<?php } ?>
	</table>