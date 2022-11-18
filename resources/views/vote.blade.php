<?php include("session.php");?>
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
<style>
    .img{
        margin-left:-200%;
    }
</style>

</head>

<body>
   
    <!-- =============== Navigation ================ -->
    <div class="container" style="margin-left:-2%;">
        <div class="navigation" >
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                           
                        </span>
                        <span class="title">
                            <h3 style="margin-left:-22%;">VOTER'S DASHBOARD</h3>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="voterDashboard">
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
                    <a href="#">
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
                <div class="name" style="margin-right:-20%;">
                   
                   <p> </p>
                   
               </div>

                <div class="notification" style="margin-right:-19%;">
                     <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications"></ion-icon>
                        </span>
                    </a>
                    
                </div>
            
                <div class="user" style="margin-right:-20%;">
                   
                    <img src=""alt="no image">
                    
                </div>
            </div>
            
            <!-- ======================= Cards ================== -->
        

                <!-- ================= New Customers ================ -->
                <div class="details" style="width:1300px;">
                <div class="recentOrders" style="width:700px;">

                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM candidates WHERE positionName ='President'";
                    $result = mysqli_query($connection, $query);
                    
                    
                ?>
                    <h1 style="text-align:center; font-family:cursive; font-size:50px;" >CAST YOUR VOTE </h1>
                    <center>
                    <form method = "POST" action = "voteResult">
                        @csrf
                    <h3 style="text-align:left;margin-top:1%; font-family:; font-size:20px;" >PRESIDENTIAL CANDIDATES:</h3>
                   

                        <table class="table"  style="width:600px; margin-top:1%; margin-left:0%;">
                            <thead>
                                <tr>
                                <th scope="col">First Name</th>
                                <th class="col">Image</th> 
                                <th class="col">Total Votes</th>     
                                <th scope="col">VOTE</th>
                                </tr>
                            </thead>
                                <tbody> 
                                    <?php 
                                        while($row = mysqli_fetch_object($result))
                                        {
                                    ?>
                                            <tr>
                                                <td><?php  echo $row->firstName ?></td>
                                                <td> <img align ="left"  src="{{asset('uploads/candidates/'.$row->image)}}"  width="100px" height="100px"alt=""> </td> 
                                                <td><?php  echo $row->votes ?></td>
                                                <td> <input type = "checkbox"  value = "<?php echo $row->candidateId ?>" id ="presidentId" name = "pres_id" class = "pres"> &nbsp &nbspGive Vote </td>
                                                
                                            </tr>
                                    <?php 
                                        }
                                    ?>  
                                </tbody>
                        </table>
                   



                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM candidates WHERE positionName ='Vice President'";
                    $res = mysqli_query($connection, $query);
                    
                ?>
                
                    <h3 style="text-align:left;margin-top:1%; font-family:; font-size:20px;" >VICE PRESIDENT CANDIDATES:</h3>
                    
                        <table class="table"  style="width:600px; margin-top:1%; margin-left:0%;">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th class="col">Image</th> 
                                    <th class="col">Total Votes</th>     
                                    <th scope="col">VOTE</th>
                                </tr>
                            </thead>
                                <tbody> 
                                    <?php 
                                        while($row = mysqli_fetch_object($res))
                                        {
                                    ?>
                                            <tr>
                                                <td><?php  echo $row->firstName ?></td>
                                                <td> <img align ="left"  src="{{asset('uploads/candidates/'.$row->image)}}"  width="100px" height="100px"alt=""> </td> 
                                                <td><?php  echo $row->votes ?></td>
                                                <td> <input type = "checkbox"  id ="viceId" value = "<?php echo $row->candidateId ?>" name = "vp_id" class = "vpres"> &nbsp &nbspGive Vote </td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>      
                                </tbody>
                        </table>
                    


                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM candidates WHERE positionName ='Female Sports Representative'";
                    $res = mysqli_query($connection, $query);
                    
                ?>
                    <h3 style="text-align:left;margin-top:1%; font-family:; font-size:20px;" >FEMALE SPORTS REPRESENTATIVE CANDIDATES:</h3>
                    
                        <table class="table"  style="width:600px; margin-top:1%; margin-left:0%;">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th class="col">Image</th>  
                                    <th class="col">Total Votes</th>    
                                    <th scope="col">VOTE</th>
                                </tr>
                            </thead>
                                <tbody> 
                                    <?php 
                                        while($row = mysqli_fetch_object($res))
                                        {
                                    ?>
                                            <tr>
                                                <td><?php  echo $row->firstName ?></td>
                                                <td> <img align ="left"  src="{{asset('uploads/candidates/'.$row->image)}}"  width="100px" height="100px"alt=""> </td> 
                                                <td><?php  echo $row->votes ?></td>
                                                <td> <input type = "checkbox"  value = "<?php echo $row->candidateId ?>"  id ="sportId" name = "ua_id" class = "ua"> &nbsp &nbspGive Vote </td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>      
                                </tbody>
                        </table>
                   
                
                
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM candidates WHERE positionName ='Finance Representative'";
                    $res = mysqli_query($connection, $query);
                    
                ?>
                    <h3 style="text-align:left;margin-top:1%; font-family:; font-size:20px;" >FINANCE REPRESENTATIVE CANDIDATES:</h3>
                   
                        <table class="table"  style="width:600px; margin-top:1%; margin-left:0%;">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th class="col">Image</th> 
                                    <th class="col">Total Votes</th>    
                                    <th scope="col">VOTE</th>
                                </tr>
                            </thead>
                                <tbody> 
                                    <?php 
                                        while($row = mysqli_fetch_object($res))
                                        {
                                    ?>
                                            <tr>
                                                <td><?php  echo $row->firstName ?></td>
                                                <td> <img align ="left"  src="{{asset('uploads/candidates/'.$row->image)}}"  width="80px" height="80px"alt=""> </td> 
                                                <td><?php  echo $row->votes ?></td>
                                                <td> <input type = "checkbox"  value = "<?php echo $row->candidateId ?>"  id ="financeId" name = "ss_id" class = "ss"> &nbsp &nbspGive Vote </td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>      
                                </tbody>
                        </table>
                   
                        <center><button class = "btn btn-success ballot" type = "submit" name = "submit" style=" background-color:#008B8B">Submit Ballot</button></center>
                  
                </form>


            </center>

                         
                   
                  
                       
       
                </div>

    <!-- =========== Scripts =========  -->
    <script type = "text/javascript">

		$(document).ready(function(){
			$(".pres").on("change", function(){
				if($(".pres:checked").length == 1)
					{
						$(".pres").attr("disabled", "disabled");
						$(".pres:checked").removeAttr("disabled");
					}
				else
					{
						$(".pres").removeAttr("disabled");
					}
			});
    </script>
                                    
    <script src="../js/main.js"></script>
    

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<script type = "text/javascript">

		$(document).ready(function(){
			$(".pres").on("change", function(){
				if($(".pres:checked").length == 1)
					{
						$(".pres").attr("disabled", "disabled");
						$(".pres:checked").removeAttr("disabled");
					}
				else
					{
						$(".pres").removeAttr("disabled");
					}
			});

            $(".vpres").on("change", function(){
				if($(".vpres:checked").length == 1)
					{
						$(".vpres").attr("disabled", "disabled");
						$(".vpres:checked").removeAttr("disabled");
					}
				else
					{
						$(".vpres").removeAttr("disabled");
					}
			});

            $(".ua").on("change", function(){
				if($(".ua:checked").length == 1)
					{
						$(".ua").attr("disabled", "disabled");
						$(".ua:checked").removeAttr("disabled");
					}
				else
					{
						$(".ua").removeAttr("disabled");
					}
			}); 
            $(".ss").on("change", function(){
				if($(".ss:checked").length == 1)
					{
						$(".ss").attr("disabled", "disabled");
						$(".ss:checked").removeAttr("disabled");
					}
				else
					{
						$(".ss").removeAttr("disabled");
					}
			});  
        });
</script>

</html>