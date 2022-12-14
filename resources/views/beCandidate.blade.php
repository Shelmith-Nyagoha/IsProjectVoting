<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- ======= Styles ====== -->\
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
</head>
 <style>
  td{
    text-align:center;
  }
 </style>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container" style="margin-left:-2%; margin-top:-2%; ">
        <div class="navigation" style="" >
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                           
                        </span>
                        <span class="title">
                            <h4 style="margin-left:-34%;margin-top:5%">VOTER'S DASHBOARD</h4>
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

                <div class="user">
                    <img alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
        

                <!-- ================= New Customers ================ -->
                <div class="details" style="width:1100px;">
                <div class="recentOrders" style="width:500px;">
                   
                <div class="container">
  <h2> 
    Are you interested in vying for a position?  </h2>
    
  </h2>

  @if(Session::has('success'))
				<div class="alert alert-success" style="background:  #aaf0d1;">
					{{Session::get('success')}}
				</div>
				@endif

<!-- Start add modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style= "background-color:#008B8B" >
        <h1 class="modal-title fs-5" id="exampleModalLabel">Vie for any position of your choice
        <h2 class="far fa-grin-beam-sweat" > </h2>
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     

      <form action="{{route('add-vie')}}"  method="POST" style="padding-top:0px;"  enctype="multipart/form-data">
      @csrf
      <div class="modal-body">         
          <div class="form-group mb-6">
            <input value="{{$row->studentnumber}}" type="number" class="form-control " placeholder="Student Number" id="studentNumber" name="studentNumber" required>
          </div> 
          <br>
          <div class="form-group mb-6">
            <input  value="{{$row->firstname}} {{$row->lastname}}" type="text" class="form-control block" placeholder="First Name" id="firstName" name="firstName" required>
          </div>
          <br>
          <p>Upload your academic progress report here:</p>
          <div class="input-group mb-6">
						<input  type="file" name="academicReport" id="academicReport" class="form-control input_pass" required>
					</div>	
          <br>
          <p>Upload your manifesto:</p>
          <div class="input-group mb-6">
						<input type="file" name="manifesto" id="manifesto" class="form-control input_pass" required>
					</div>	
          <br>
          <p>Upload your profile picture:</p>
          <div class="input-group mb-6">
						<input placeholder="Upload your profile picture" type="file" name="image" id="image" class="form-control input_pass" required>
					</div>	
          <br>
          <div class="form-group mb-6">
            <input type="text" class="form-control" placeholder="Position Name" id="positionName" name="positionName" required>
          </div>
          <br>
          <div class="form-group mb-6">
            <input type="text" class="form-control block" placeholder="Email" id="email" name="email" required>
          </div>
          <br>       
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  style= "background-color:#008B8B; color:black;">Close</button>
        <button type="submit" class="btn btn-primary" style= "background-color:#008B8B; color:black;">Save changes</button>
      </div>
      </form>

      @if(Session::has('success'))
				<div class="alert alert-success" >
					{{Session::get('success')}}
				</div>
				@endif

				@if(Session::has('fail'))
				<div class="alert alert-danger">
					{{Session::get('fail')}}
				</div>
				@endif
				@csrf
    </div>
  </div>
</div>

<div class="table">
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:70%; background:  #008B8B; colo:black;">
    Vie for a position
</button>

<!-- end modal -->






<!-- Start Edit Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style= "background-color:#008B8B" >
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Election Positions</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form  action=""  method="" style="padding-top:0px;">
      @csrf
      <div class="modal-body">    
         
          <div class="form-group mb-6">
            <input value="" type="number" class="form-control " placeholder="Position Id" id="positionId" name="positionId" value=""required>
          </div> 
      
          <br>
          <div class="form-group mb-6">
            <input value="" type="text" class="form-control" placeholder="Position Name" id="positionName" name="positionName" required>
          </div>
          <br>
          <div class="form-group mb-6">
            <input value=""type="text" class="form-control block" placeholder="Position Description" id="positionDescription" name="positionDescription" required>
          </div>
          <br>       
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  style= "background-color:#008B8B; color:black;">Close</button>
        <button type="submit" class="btn btn-primary" style= "background-color:#008B8B; color:black;">Save changes</button>
      </div>
      </form>
    
     
    </div>
  </div>
</div>

</form>

</div>
<!-- End Edit Modal -->

<?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM positions";
                    $res = mysqli_query($connection, $query);
                    
                ?>
                    
                    <form>
                      <h3 style="margin-top:-25%;">Available positions:</h3>
                        <table class="table"  style="width:600px; margin-top:4%; margin-left:0%;">
                            <thead>
                                <tr>
                                    <th scope="col">Position Id</th>
                                    <th scope="col">Position Name</th>
                                    
                                </tr>
                            </thead>
                                <tbody> 
                                <?php
                                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                                    $sql = "SELECT * FROM positions";
                                    $result = mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_object($result);
                                ?>
                                    <?php 
                                        while($row = mysqli_fetch_object($res))
                                        {
                                    ?>
                                            <tr>
                                                <td><?php  echo $row->positionId ?></td>
                                                <td><?php   echo $row->positionName ?> </td>
                                                
                                            </tr>
                                    <?php 
                                        }
                                    ?>      
                                </tbody>
                        </table>
                    </form>




</div>

                  
                       
                </div>

    <!-- =========== Scripts =========  -->
    <script src="../js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>