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
                    <a href="#">
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

                <div class="notification" style="margin-right:-19%;">
                     <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications"></ion-icon>
                        </span>
                    </a>
                    
                </div>
            
                <div class="user" style="margin-right:-20%;">
                   
                    <img src="{{asset('uploads/users/'.$item->image)}}" alt="no image">
                    
                </div>
            </div>
            
            <!-- ======================= Cards ================== -->
        

                <!-- ================= New Customers ================ -->
                <div class="details" style="width:1300px;">
                <div class="recentOrders" style="width:700px;">

                <?php
                    $connection = mysqli_connect("localhost", "root", "", "onealis");
                    $sql = "SELECT * FROM election WHERE electionId='1'";
                    $result = mysqli_query($connection, $sql);
                    $row = mysqli_fetch_object($result);
                ?>
                      <h1 style="text-align:center; font-family:cursive; font-size:50px;" >ELECTION COUNTDOWN </h1>

                    <div style="margin-top:-10%;" data-date="<?php echo $row->setDate; ?>" id="count-down"></div>

                  
                   

                         
                   
                  
                       
        </div>

    <!-- =========== Scripts =========  -->
    <script>
                            $(function () {
                                $("#count-down").TimeCircles();
                            });
                        </script>
                                    
    <script src="../js/main.js"></script>
    

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>