<?php
include_once('inc/db.php');
$delete_id=$_GET['del'];
$query="DELETE FROM `cuistomers` WHERE id='$delete_id'";
if ($conn->query($query)) {
	    header("location:dashboard.php");
} else {
    header("location:dashboard.php"). mysqli_error($conn);
}
?>