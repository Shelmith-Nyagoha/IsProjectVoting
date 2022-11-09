<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container" style="margin-left:-1%;">
        <div class="navigation" >
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name=""></ion-icon>
                        </span>
                        <span class="title">
                            <h4 style="margin-left:-34%;margin-top:5%">ADMIN'S DASHBOARD</h4></span>
                    </a>
                </li>

                <li>
                    <a href="newAdminDash">
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
                            
                            <ion-icon name="people-outline"></ion-icon>
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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Results</span>
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
        <div class="main" >
            <div class="topbar" style="margin-top:0%;">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                
                <div class="notification" style="margin-right:-25%;">
                     <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications"></ion-icon>
                        </span>
                    </a>
                    
                </div>

                <div class="user" style="margin-right:-20%;">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

           
               

            <!-- ================ Order Details List ================= -->
            <div class="details" >
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Vet Candidates</h2>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background:  #008B8B; color:white;">
                            Add Candidate
                        </button>
                    </div>

                    <form>
  <table class="table"  style="width:900px; margin-top:1%; margin-left:0%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">StudentNumber</th>
      <th class="col">Image</th>
      <th scope="col">First Name</th>
      <th scope="col">Position Name</th>
      <th scope="col">Email</th>
      
      <th scope="col">APPROVE</th>
      <th scope="col">DECLINE</th>
    </tr>
  </thead>
  <tbody>

    <?php
     $i=1;
    ?>


    
@foreach ($data as $candidates)
    <tr>
     <td>{{$candidates->candidateId}}</td>
     <td>{{$candidates->studentNumber}}</td>
     <td>
      <img src="{{asset('uploads/candidates/'.$candidates->image)}}"  width="100px" height="100px"alt="">
     </td>
      <td>{{$candidates->firstName}}</td>
      <td>{{$candidates->positionName}}</td>
      <td>{{$candidates->email}}</td>
      <td><button type="button" class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#editModal" style=" background:  	#9F2B68; color:white;">Approve</td>
      <td><button type="button" class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#deletemodal" style=" background:  #9F2B68;; color:white;">Decline</td>
  
     
    </tr>
    @endforeach

  
   
  
  </tbody>
</table>

</form>
<!-- Start add modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style= "background-color:#008B8B" >
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Election Positions</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="addPositions"  method="POST" style="padding-top:0px;">
      @csrf
      <div class="modal-body">         
          <div class="form-group mb-6">
            <input type="number" class="form-control " placeholder="Position Id" id="positionId" name="positionId" required>
          </div> 
          <br>
          <div class="form-group mb-6">
            <input type="text" class="form-control" placeholder="Position Name" id="positionName" name="positionName" required>
          </div>
          <br>
          <div class="form-group mb-6">
            <input type="text" class="form-control block" placeholder="Position Description" id="positionDescription" name="positionDescription" required>
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

<div class="table">
</div>


<!-- end modal -->
<!-- Start Approve Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style= "background-color:#9F2B68" >
        <h1 class="modal-title fs-5" id="exampleModalLabel">Approve and Send Notification to selected candidate</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <form  action=""  method="" style="padding-top:0px;">
      @csrf
      <div class="modal-body">    
         
          <!-- <div class="form-group mb-6">
            <input value="" type="number" class="form-control " placeholder="Student Number" id="studentNumber" name="studentNumber" value="" required>
          </div> 
      
          <br>
          <div class="form-group mb-6">
            <input value="" type="text" class="form-control" placeholder="Position Name" id="positionName" name="positionName" required>
          </div>
          <br>
          <div class="form-group mb-6">
            <input value=""type="text" class="form-control block" placeholder="Position Description" id="positionDescription" name="positionDescription" required>
          </div>
          <br>     -->
          <div class="form-group mb-6">
          <input type="checkbox" id="status" name="status" value="Status">
          <label for="status">Approve Candidate</label><br>
          </div>
          <br>    
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  style= "background-color:#9F2B68; color:black;">Close</button>
        <button type="submit" class="btn btn-primary" style= "background-color:#9F2B68; color:black;">Save changes</button>
      </div>
      </form>
    
     
    </div>
  </div>
</div>

</form>

</div>
<!-- End Edit Modal -->

<!-- Delete Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"  style= "background-color:#9F2B68;">
                    <h5 class="modal-title" id="exampleModalLabel"> Decline Candidate </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="get">
                  @csrf

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h6> Are you sure you want to decline this candidate?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal" style= "background-color:#9F2B68;"> No </button>

                        <button href="delete-position/'.$positions['id']"   type="submit" name="deletedata" class="btn btn-primary" style= "background-color:#9F2B68;">Decline</button>
                    </div>
                </form>

<!-- End delete modal -->
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