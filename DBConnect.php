<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "quanlysinhvien";
	$conn= mysqli_connect($hostname , $username, $password, $database);
	mysqli_query($conn, "SET NAMES 'UTF8"); 
?>