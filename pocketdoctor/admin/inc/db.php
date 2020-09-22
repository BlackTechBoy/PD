<?php
$conn = mysqli_connect('sql209.epizy.com', 'epiz_26627246', 'qItL9SbenFI7E2', 'epiz_26627246_pd');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>