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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">

                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($connection, $query);
                    $rowcount = mysqli_num_rows( $result );   
                ?>
                    <div>
                        <div class="numbers"> <?php echo $rowcount ?> </div>
                        <div class="cardName">Voters</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM positions";
                    $result = mysqli_query($connection, $query);
                    $rowcount = mysqli_num_rows( $result );   
                ?>
                    <div>
                        <div class="numbers"><?php echo $rowcount ?> </div>
                        <div class="cardName">Positions</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM candidates";
                    $result = mysqli_query($connection, $query);
                    $rowcount = mysqli_num_rows( $result );   
                ?>
                    <div>
                        <div class="numbers"><?php echo $rowcount ?></div>
                        <div class="cardName">Candidates</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="color-filter-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $query = "SELECT * FROM users where status = 1";
                    $result = mysqli_query($connection, $query);
                    $rowcount = mysqli_num_rows( $result );   
                ?>
                    <div>
                        <div class="numbers"><?php echo $rowcount ?></div>
                        <div class="cardName">Voted</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="color-filter-outline"></ion-icon>
                    </div>
                </div>

                <!-- <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div> -->
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details" style="">
                <div class="recentOrders" >
                    <div class="cardHeader">
                        <h2>Election Overview</h2> 
                        <br>               
                    </div>  
                    <h3 style=" margin-top:-20%;">VOTED STUDENTS</h3>    
                    <div class="panel-body">
                            <div class="table-responsive">
                                
                                <table style="width:300px; margin-top:-35%;"class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Student ID</th>
                                            <th>Names</th>
                                                                                       
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                      
										<?php 
										$conn = mysqli_connect("localhost", "root", "", "onealis"); 
										$query = $conn->query("SELECT * FROM users where status = '1'");
										while($row = $query->fetch_array()){
											$voterId=$row ['voterId'];
										?>
										 <tr class="odd gradeX">
											    <td><?php echo $row ['studentnumber'];?></td>
                                                <td><?php echo $row ['firstname']." ". $row ['lastname'];?></td>
                                                    
                                        </tr>
                                        
                                       <?php
											} 
									   ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                </div>  
            </div>

            <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
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