<?php include("session.php");
echo $session_id ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <script src="jquery-3.3.1.min.js"></script>
<script src="../js/TimeCircles.js"></script>
<link rel="stylesheet" type="text/css" href="../css/TimeCircles.css">


</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container" style="margin-left:-2%;">
        <div class="navigation" >
            <ul>
                <li>
                    <a href="voterDashboard">
                        <span class="icon">
                           
                        </span>
                        <span class="title">
                            <h3 style="margin-left:-22%;">VOTER'S DASHBOARD</h3>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="beCandidate">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Vie for a position</span>
                    </a>
                </li>

                <li>
                    <a href="allCandView">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Connect </span>
                    </a>
                </li>

                <li>
                    <a href="campaign">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Campaign</span>
                    </a>
                </li>

                <li>
                    <a href="vote">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Vote Now</span>
                    </a>
                </li>

                <li>
                    <a href="logout">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="notification" style="margin-right:-19%;">
                     <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications"></ion-icon>
                        </span>
                    </a>
                    
                </div>
            
                <div class="user" style="margin-right:-20%;">
                   
                    <img src="" alt="no image">
                    
                </div>
            </div>
            
            <!-- ======================= Cards ================== -->
        

                <!-- ================= New Customers ================ -->
                <div class="details" style="width:1300px;">
                    <div class="recentOrders" style="width:700px;">
                <div id="row">
                    <?php
                    
                      if(ISSET($_POST['submit']))
                        {
                            if(!ISSET($_POST['pres_id']))
                            {
                                $_SESSION['pres_id'] = "";
                            }
                            else
                            {
                                $_SESSION['pres_id'] = $_POST['pres_id'];
                                
                                echo $_SESSION['voterId'];
                            }
                            if(!ISSET($_POST['vp_id']))
                            {
                                $_SESSION['vp_id'] = "";
                            }
                            else
                            {
                                $_SESSION['vp_id'] = $_POST['vp_id'];
                                
                            }
                            if(!ISSET($_POST['ua_id']))
                            {
                                $_SESSION['ua_id'] = "";
                            }
                            else
                            {
                                $_SESSION['ua_id'] = $_POST['ua_id'];
                            }
                            if(!ISSET($_POST['ss_id']))
                            {
                                $_SESSION['ss_id'] = "";
                            }
                            else
                            {
                                $_SESSION['ss_id'] = $_POST['ss_id'];
                            }
                            if(!ISSET($_POST['voterId']))
                            {
                                $_SESSION['voterId'] = "";
                            }
                            else
                            {
                                $_SESSION['voterId'] = $_POST['voterId'];
                            }
                        }
                    ?>
                </div>
                <div class="col-lg-8" style = "margin-left:25%; margin-right:25%;" >
		  <div class = "alert alert-info" style = "text-align:center;">
			<div class="panel-heading" style = "font-size:20px;"><center>PRESIDENT</center></div>
           
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{
						
					}
				else
					{
                       

                        $conn = mysqli_connect("localhost", "root", "", "onealis");   
                
						$fetch = $conn->query("SELECT * FROM `candidates` WHERE `candidateId` = '$_SESSION[pres_id]'")->fetch_array();
						
						echo $fetch['firstName']." "."<img src = '../uploads/candidates/".$fetch['image']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success"  style = "text-align:center;">
			<div class="panel-heading" style = "font-size:20px;"><center>VICE PRESIDENT</center></div>
			<br />
			<?php
				if(!$_SESSION['vp_id'])
					{
						
					}
				else
					{
                        $conn = mysqli_connect("localhost", "root", "", "onealis");   
                
						$fetch = $conn->query("SELECT * FROM `candidates` WHERE `candidateId` = '$_SESSION[vp_id]'")->fetch_array();
						
						echo $fetch['firstName']." "."<img src = '../uploads/candidates/".$fetch['image']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
                    }
			?>
			</div>
			<div class = "alert alert-info" style = "text-align:center;" >
			<div class="panel-heading" style = "font-size:20px;"><center>FEMALE SPORTS REPRESENTATIVE </center></div>
			<br/>
			<?php
				if(!$_SESSION['ua_id'])
					{
						
					}
				else
					{
                        $conn = mysqli_connect("localhost", "root", "", "onealis");   
                
						$fetch = $conn->query("SELECT * FROM `candidates` WHERE `candidateId` = '$_SESSION[ua_id]'")->fetch_array();
						
						echo $fetch['firstName']." "."<img src = '../uploads/candidates/".$fetch['image']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
                    }
                    

			?>
				
			</div>
			<div class = "alert alert-success"  style = "text-align:center;">
			<div class="panel-heading" style = "font-size:20px;"><center>FINANCE REPRESENTATIVE </center></div>
			<br />
			<?php
				if(!$_SESSION['ss_id'])
					{
						
					}
				else
					{
                        $conn = mysqli_connect("localhost", "root", "", "onealis");   
                
						$fetch = $conn->query("SELECT * FROM `candidates` WHERE `candidateId` = '$_SESSION[ss_id]'")->fetch_array();
                        
                        echo $fetch['candidateId']; 
                    
						echo $fetch['firstName']." "."<img src = '../uploads/candidates/".$fetch['image']."' style = 'height:80px; width:80px; border-radius:500px;' />";
                      
                    }
			?>
            

            <div class="modal-body">
										<p style = "font-size: 20px;"><center>Are you sure you want to submit your votes? </center></p>
                                    </div>
									
									<div class="modal-footer"><center>
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</center></div>










                    </div>
                </div>


            

                  
                   

                         
                   
                  
                       
        </div>

    <!-- =========== Scripts =========  -->
    <script src="../js/main.js"></script>
    

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>