<?php include("session.php");?>
 <?php
  
		session_start();
		$conn = mysqli_connect("localhost", "root", "", "onealis");
		
//Auth::user()->id;

		$conn->query("INSERT INTO `votes` VALUES('', '{$_SESSION['pres_id']}', '{$_SESSION['voterId']}', '' , '') ") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '{$_SESSION['vp_id']}', '{$_SESSION['voterId']}' ,'','') ") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '{$_SESSION['ua_id']}', '{$_SESSION['voterId']}' ,'','') ") or die($conn->error);
		$conn->query("INSERT INTO `votes` VALUES('', '{$_SESSION['ss_id']}', '{$_SESSION['voterId']}' ,'','' )") or die($conn->error);
	
		$conn->query("UPDATE `users` SET `status` = 1 WHERE `voterId` = '{$_SESSION['voterId']}'") or die($conn->error);
		header("location:voterDashboard");
		
?>  