<?php
	include('dbconnection.php');

	$id= $_GET['customer_id'];

	mysqli_query($connection, "DELETE FROM customers WHERE customer_id = '$id'");

	header("location:customers.php")

?>