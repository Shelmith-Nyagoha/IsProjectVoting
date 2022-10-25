

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Fonts CDN-->

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="..\css\styles.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: poppins;
        }
     
        
    </style>
</head>
<body>
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="bannerh1" style="text-align:center; margin-top:50px;"> Online Voting System </h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="font-size:20px;">
                    <p style="text-align:center"> This system ensures the voting process at Strathmore </p>
                    <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp university is conducted securely and </p>
                    <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  transparently.</p>
                        
                        <h3 style="text-align:center">YOUR VOTE IS YOUR VOICE SPEAK UP!!! <h3/>
                    
                        
                       </p>
                
                
                <div class="d-flex justify-content-center mt-3 login_container"  style="padding:15px; margin-left:20%;" >

                    <a href="login"  style="color: black; font-weight: 600; padding:15px; " ><button class="home_btn" id="myButton1">VOTE NOW</button></a>   <a href="adminLogin"  style="color: black; font-weight: 600; padding:5px; "><button class="home_btn" id="myButton">ADMIN LOGIN</button></a><br>
                    
                    
                
            </div>
                <div class="col-md-6"> 
                <img src="../images/2.svg" alt=""  height="400vh " width="90%" class="animate__animated animate__bounceInRight " style="margin-left: 10px; margin-top: 20px;" >
                    </div> 
                </div> 
            
        </div>
        <div class="container">
            <div class="row">
            
            
            </div>
        </div>
    </section>
   

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript">
    document.getElementById("myButton1").onclick = function () {
        location.href = "login";
    };
</script>
  
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
</body>
</html>

  
    

