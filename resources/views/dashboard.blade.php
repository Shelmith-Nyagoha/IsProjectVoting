<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.cs">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
        *{
            padding: 0;
            margin:0;
            box-sizing: border-box;
            list-style-type: none;
            text-decoration:none;
            font-family:'Poppins', sans-serif;
        }
        .sidebar{
            width: 280px;
            position:fixed;
            left: 0;
            top: 0;
            height:100%;
            background: #008B8B ;;
        }
        .sidebar-brand{
            height:90px;
            padding: 1rem  0rem 1rem 2rem;
            color:white;
        }
        .sidebar-menu{
            width: 100%;
            margin-bottom:1.3rem;
            padding-left:2rem;
        }
        .sidebar-menu a{
            text-decoration: none;
            display: block;
            color:black;
            font-size:1.2rem;
            padding: 12px;
        }
        .sidebar-menu a:hover{
	        transform: scale(1.1);
            background:white;
            border-radius:30px;
        }
        header{
            display: flex;
            justify-content: space-between;
            padding: 0.3rem;
            background :#aaf0d1;

        }
    </style>

</head>
<body>
<div class="sidebar" >
        <div class="sidebar-brand">
            <h4 class="far fa-grin-beam-sweat" > <span class="lab la-accusoft"> Welcome,{{$data->firstname}}</h4 >
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dash" style="color:black;">
                        <span class="fas fa-home" ></span>
                        <span >DASHBOARD</span>
                    </a>
                </li>
                <li>
                    <a href="profile" style="color:black;">
                        <span class="fas fa-user-circle"></span>
                        <span>PROFILE</span>
                    </a>
                </li>
                <li>
                    <a href="beCandidate" style="color:black;">
                        <span class="fas fa-users"></span>
                        <span>VIE FOR A POSITION</span>
                    </a>
                </li>
                <li>
                    <a href="connect" style="color:black;">
                        <span class="fas fa-comments"></span>
                        <span>CONNECT</span>
                    </a>
                </li>
                <li>
                    <a href="campaign" style="color:black;">
                        <span class="fas fa-comments"></span>
                        <span>CAMPAIGN</span>
                    </a>
                </li>
                <li>
                    <a href="voteNow" style="color:black;"s>
                        <span class="fa fa-check-square"></span>
                        <span>VOTE NOW</span>
                    </a>
                </li>
                <li>
                    <a href="logout" style="color:black;"s>
                    
                        <span class="fas fa-sign-out"></span>
                        <span>LOG OUT</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h1>
            <div class="header-title">
                <label for="">
                    <span class="la-bars">
                    DASHBOARD
                        
                    </span>
                </label>
               
            </h1>

<!-- 
            <div class="search-wrapper">
                <span class="las la-search">
                    <input type="search" placeholder="Search here" />
                </span>
            </div> -->
            <div class="name">
                <h3 style="font-family:'Poppins', sans-serif; font-size:45px;">Masomo University Voting System</h3>
            </div>

            <div class="user-wrapper">
                <img src="{{$data->image}}" width="50px" height="50px" alt="">
                <p>{{$data->firstname}},{{$data->lastname}}</p>
            </div>
            


            </div>
        </header>

        

    
    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-md-">
                <h4> Welcome to the dashboard,{{$data->firstname}}</h4>
                <hr>
                <table class="table">
                    <thead>
                        <th>Student Number</th>
                        <th>Email</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Student Photo</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td> {{$data->studentnumber}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->firstname}}</td>
                            <td>{{$data->lastname}}</td>
                            <td>{{$data->image}}</td>
                            <td> 
                                <a href="logout"> LOGOUT</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div> -->
    
</body>
</html>