<?php
	$conn = mysqli_connect("localhost", "root", "", "onealis");
	session_start(); 
	
	if(!ISSET($_SESSION['voterId'])){
		header("location:login.blade.php");
	}
	else{
		$session_id=$_SESSION['voterId'];
		$user_query = $conn->query("SELECT * FROM users WHERE voterId = '$session_id'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();	
		
	}
?>