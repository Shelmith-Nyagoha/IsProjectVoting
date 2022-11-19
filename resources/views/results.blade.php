
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <span class="title">
                            <h3 style="margin-left:-14%;">ADMIN'S DASHBOARD</h3></span>
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
                    <a href="manageCandidate">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Candidate</span>
                    </a>
                </li>

                <li>
                    <a href="positions">
                        <span class="icon">
                            
                            <ion-icon name="help-buoy-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Positions</span>
                    </a>
                </li>

            
                <li>
                    <a href="setElection">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Set Election</span>
                    </a>
                </li>

                <li>
                    <a href="results">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Results</span>
                    </a>
                </li>

                <li>
                    <a href="reports">
                        <span class="icon">
                            <ion-icon name="document-text-outline"</ion-icon>
                        </span>
                        <span class="title">Reports</span>
                    </a>
                </li>

                <li>
                    <a href="adminLogin">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
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

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details" style="">
                <div class="recentOrders" >
                    <div class="cardHeader">
                        <h2>Election Overview</h2> 
                        <br>               
                    </div>  
                    <h3 style=" margin-top:-20%;"></h3>    
                    <div class="panel-body">
					<div id="wrapper">

<!-- Navigation -->

<!-- Page Content -->
<div id="page-wrapper" >
	<div class="row" style="margin-top:0%;">
		<div class="col-lg-12" style="margin-top:5%;">
			
			
		</div>
		
		
		<hr/>
		
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class = "alert alert-success">Election Report</h3>	
				</div>
				
			<br/>
			   <form method="POST" action="sort.php">
	
	<select name="position" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
		<option readonly>----Sort by Position----</option>
		<option></option>
						<option>President</option>
						<option>Vice President</option>
						<option>Female Sports Representative</option>
						<option>Finance Representative </option>
						
	</select>
	
	&nbsp;
	&nbsp;
	<button style = " height: 30px; text-align:center;padding:5px; background-color:#008b8b; color:white;"href="sort.php" id ="sort" class = "btn btn-success">Sort</button>  <button type="button" style = " height: 30px; text-align:center;padding:5px; background-color:#008b8b; color:white;" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
</form>	
				<div class="panel-body">
					
				
	<table class="table table-striped table-bordered table-hover " style="width:500px;">
			<thead>
				<td style = "width:600px;" class = "alert alert-success">Candidate for President</td>
				<td style = "width:200px;"class = "alert alert-success">Image</td>
				<td class = "alert alert-success">Total</td>
			
			</thead>
			<?php
				  $connection = mysqli_connect("localhost", "root", "", "onealis");
				  $result = mysqli_query($connection, "SELECT * FROM candidates WHERE positionName ='President'");
				while($row = mysqli_fetch_array($result))
				{
					 $id = $row['candidateId'];
					 $result1 = mysqli_query($connection, "SELECT COUNT(*) as total FROM `votes` WHERE candidateId = '$id'");
					 $row1 = mysqli_fetch_array($result1);
		?>
			<tbody> 
				<td><?php echo $row['firstName'];?></td>
				<td><img src = "{{asset('uploads/candidates/'.$row['image'])}}" style = "width:40px; height:40px; border-radius:500px; " >
				<td style = "width:20px; text-align:center;padding:5px;"><button style = "width:30px; height: 30px; text-align:center;padding:5px; color:white; background-color:#008b8b;"  class = "btn btn-primary"disabled><?php echo $row1['total'];?></button>	</td>
			<?php }?>
			</tbody>
			
			
	</table>	
	

	<table class="table table-striped table-bordered table-hover " style="width:500px;">
			<thead>
				<td style = "width:600px;" class = "alert alert-success">Candidate for Vice President</td>
				<td style = "width:200px;"class = "alert alert-success">Image</td>
				<td class = "alert alert-success">Total</td>
			
			</thead>
			<?php
				  $connection = mysqli_connect("localhost", "root", "", "onealis");
				  $result = mysqli_query($connection, "SELECT * FROM candidates WHERE positionName ='Vice President'");
				while($row = mysqli_fetch_array($result))
				{
					 $id = $row['candidateId'];
					 $result1 = mysqli_query($connection, "SELECT COUNT(*) as total FROM `votes` WHERE candidateId = '$id'");
					 $row1 = mysqli_fetch_array($result1);
		?>
			<tbody> 
				<td><?php echo $row['firstName'];?></td>
				<td><img src = "{{asset('uploads/candidates/'.$row['image'])}}" style = "width:40px; height:40px; border-radius:500px; " >
				<td style = "width:20px; text-align:center"><button style = "width:30px; height: 30px; text-align:center;padding:5px; color:white; background-color:#008b8b;" class = "btn btn-primary"disabled><?php echo $row1['total'];?></button>	</td>
			<?php }?>
			</tbody>
			
			
	</table>	

	<table class="table table-striped table-bordered table-hover " style="width:500px;">
			<thead>
				<td style = "width:600px;" class = "alert alert-success">Female Sports Representative Candidates</td>
				<td style = "width:200px;"class = "alert alert-success">Image</td>
				<td class = "alert alert-success">Total</td>
			
			</thead>
			<?php
				  $connection = mysqli_connect("localhost", "root", "", "onealis");
				  $result = mysqli_query($connection, "SELECT * FROM candidates WHERE positionName ='Female Sports Representative'");
				while($row = mysqli_fetch_array($result))
				{
					 $id = $row['candidateId'];
					 $result1 = mysqli_query($connection, "SELECT COUNT(*) as total FROM `votes` WHERE candidateId = '$id'");
					 $row1 = mysqli_fetch_array($result1);
		?>
			<tbody> 
				<td><?php echo $row['firstName'];?></td>
				<td><img src = "{{asset('uploads/candidates/'.$row['image'])}}" style = "width:40px; height:40px; border-radius:500px; " >
				<td style = "width:20px; text-align:center;padding:5px;"><button style = "width:30px; height: 30px; text-align:center;padding:5px; color:white; background-color:#008b8b;"  class = "btn btn-primary"disabled><?php echo $row1['total'];?></button>	</td>
			<?php }?>
			</tbody>
			
			
	</table>	

	<table class="table table-striped table-bordered table-hover " style="width:500px;">
			<thead>
				<td style = "width:600px;" class = "alert alert-success">Female Sports Representative Candidates</td>
				<td style = "width:200px;"class = "alert alert-success">Image</td>
				<td class = "alert alert-success">Total</td>
			
			</thead>
			<?php
				  $connection = mysqli_connect("localhost", "root", "", "onealis");
				  $result = mysqli_query($connection, "SELECT * FROM candidates WHERE positionName ='Finance Representative'");
				while($row = mysqli_fetch_array($result))
				{
					 $id = $row['candidateId'];
					 $result1 = mysqli_query($connection, "SELECT COUNT(*) as total FROM `votes` WHERE candidateId = '$id'");
					 $row1 = mysqli_fetch_array($result1);
		?>
			<tbody> 
				<td><?php echo $row['firstName'];?></td>
				<td><img src = "{{asset('uploads/candidates/'.$row['image'])}}" style = "width:40px; height:40px; border-radius:500px; " >
				<td style = "width:20px; text-align:center;padding:5px;"><button style = "width:30px; height: 30px; text-align:center;padding:5px; color:white; background-color:#008b8b;"  class = "btn btn-primary"disabled><?php echo $row1['total'];?></button>	</td>
			<?php }?>
			</tbody>
			
			
	</table>	
	
	
	
					
	
	
	
	
	
	
	
	
	
	
					</div>				
	</div>
					<!-- /.table-responsive -->
					
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
	  
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->



</div>
                        
                            
                        </div>
                </div>  
            </div>


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