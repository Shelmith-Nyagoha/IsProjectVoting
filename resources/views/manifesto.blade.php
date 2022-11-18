<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
        {
    background: #008080;
}

#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}

#register{

  color: #008080;
}
.tab{
    font-size:28px;
}

h1 {
    text-align: center
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 10px;
    -webkit-appearance: none;
}



.tab input:focus{

  border:1px solid #008080; !important;
  outline: none;
}

input.invalid {
 
    border:1px solid #e03a0666;
}

.tab {
    display: none
}

button {
    background-color: #008080;
    color: white;
    border: none;
    border-radius: 50%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}
butt{
    background-color: #008080;
    color: #008080;
    border: none;
    border-radius: 10%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}

button:hover {
    opacity: 0.8
}

button:focus{

  outline: none !important;
}

#prevBtn {
    background-color: #008080;
}


.all-steps{
      text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center;
}

.step {
       height: 40px;
    width: 40px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    color: #008080;
    opacity: 0.5;
}

.step.active {
    opacity: 1
}


.step.finish {
   color: #fff;
   background: #008080;
   opacity: 1;

}



.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}


    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                           
                        </span>
                        <span class="title">
                            <h3 style="margin-left:-10%;">VOTER'S DASHBOARD</h3>
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

                <div class="notification" style="margin-right:-19%;">
                     <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications"></ion-icon>
                        </span>
                    </a>
                    
                </div>
            
                <div class="user">
                   
                    <img src="" alt="no image">
                    
                </div>
            </div>
            
            <!-- ======================= Cards ================== -->
        

                <!-- ================= New Customers ================ -->
                <div class="details" style="width:1300px;">
                <div class="recentOrders" style="width:700px;background-color:#008080;">
                   
                <div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="regForm" action="{{route('add-campaign')}}" method="post">
                @csrf
                <h1 id="register">Campaign Form</h1>
                <div class="all-steps" id="all-steps"> 
                  <span class="step"><i class="fa fa-user-circle"></i></span> 
                  <span class="step"><i class="fa fa-user"></i></span>
                  <span class="step"><i class="fa fa-user"></i></span> 
                  <span class="step"><i class="  fa fa-ravelry"></i></span> 
                
                  <span class="step"><i class="fa fa-fa fa-snowflake-o"></i></span>
                  <span class="step"><i class="fa fa-whatsapp"></i></span>
                  <span class="step"><i class="fa fa-cloud-upload"></i></i></span>
                  
                </div>

            
                <div class="tab">
                  <h6>What's your admission number</h6>
                    <p>
                      <input placeholder="Admission..." oninput="this.className = ''" name="studentNumber" id="firstNumber" type="number" value="$dat->studentnumber"></p>
                    
                </div>
                <div class="tab">
                  <h6>What's your first name</h6>
                    <p>
                      <input placeholder="Firstname..." oninput="this.className = ''" name="fName" id="fName" type="text"></p>
                    
                </div>
                <div class="tab">
                  <h6>What's your last name</h6>
                    <p>
                      <input placeholder="Lastname..." oninput="this.className = ''" name="lName" id="lName" type="text"></p>
                    
                </div>
                <div class="tab">
                  <h6>Which position are you vying for?</h6>
                    <p><input placeholder="Position...." oninput="this.className = ''" name="positionName" id="positionName"></p>
                    
                </div>
                <div class="tab">
                    <h6>What's the link to your  campaign group?</h6>
                    <p><input placeholder="Link to your campaign group..." oninput="this.className = ''" name="campaignChannel" id="campaignChannel"></p>
                 
                </div>
                <div class="tab">
                  <h6>Add your profile picture</h6>
                    <p>
                      <input placeholder="Profile picture..." oninput="this.className = ''" name="profile" id="profile" type="file"></p>
                    
                </div>
                <div class="tab">
                    <h6>Upload your manifesto here?</h6>
                    <p><input placeholder="Manifesto..." oninput="this.className = ''" name="manifesto" id="manifesto" type="file"></p>
                </div>

                <div class="thanks-message text-center" id="text-message"> <img src="../images/tick.png" width="100" class="mb-4">
                    <h3>You are done filling the form</h3> <span>All the best in your campaigns <br>
                    
                    </span>
                    <button class="butt" type="submit">Save</button>
                </div>
               
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                      <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
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
                  
                       
                </div>

    <!-- =========== Scripts =========  -->
    <script src="../js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>

var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {


              showTab(currentTab);

              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              } else {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
            
              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }
</script>
</body>

</html>