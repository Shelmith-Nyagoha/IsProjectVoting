<?php
	 $conn = mysqli_connect("localhost", "root", "", "onealis");   
	session_start();
	session_destroy();
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pres_id]', '$_SESSION[voterId]', '' , '') ") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[vp_id]', '$_SESSION[voterId]' ,'','') ") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ua_id]', '$_SESSION[voterId]' ,'','') ") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ss_id]', '$_SESSION[voterId]' ,'','' )") or die($conn->error);
	
		$conn->query("UPDATE `users` SET `status` = 'Voted' WHERE `voterId` = '$_SESSION[voterId]'") or die($conn->error);
		header("location:index.php");
		
?> 