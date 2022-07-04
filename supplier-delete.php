<?php
	include('dbconnection.php');

	$id= $_GET['supplier_id'];

	mysqli_query($connection, "DELETE FROM suppliers WHERE supplier_id = '$id'");

	header("location:suppliers.php")

?>