<?php
	include('dbconnection.php');

	$barcode= $_GET['barcode'];

	mysqli_query($connection, "DELETE FROM items WHERE barcode = '$barcode'");

	header("location:items.php")

?>