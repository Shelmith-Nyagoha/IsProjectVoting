<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>

    <style>
        body {
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
    background-color: #008080;s
    color: #008080;
    border: none;
    border-radius: 50%;
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

<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="regForm" action="{{route('add-campaign')}}" method="post">
                @csrf
                <h1 id="register">Campaign Form</h1>
                <div class="all-steps" id="all-steps"> 
                  <span class="step"><i class="fa fa-user"></i></span> 
                  <span class="step"><i class="fa fa-users"></i></span>
                  <span class="step"><i class="fa fa-whatsapp"></i></span>
                  <span class="step"><i class="fas fa-users"></i></i></span>
                  
                </div>

            
                <div class="tab">
                  <h6>What's your admission number</h6>
                    <p>
                      <input placeholder="Admission..." oninput="this.className = ''" name="studentNumber" id="firstNumber" type="number" value="$dat->studentnumber"></p>
                    
                </div>
                <div class="tab">
                  <h6>What's your first name</h6>
                    <p>
                      <input placeholder="Fisrtname..." oninput="this.className = ''" name="fName" id="fName" type="text"></p>
                    
                </div>
                <div class="tab">
                  <h6>What's your last name</h6>
                    <p>
                      <input placeholder="Fisrtname..." oninput="this.className = ''" name="lName" id="lName" type="text"></p>
                    
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
                    <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services! <br>
                    
                    </span>
                    <button class="button" type="submit">Save</button>
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