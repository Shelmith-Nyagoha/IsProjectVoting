<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" type="text/css" href="../css/styles.cs">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <!-- ===== Link Swiper's CSS ===== -->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

<!-- ===== Fontawesome CDN Link ===== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    
<!-- ===== CSS ===== -->
<link rel="stylesheet" href="../css/styleCan.css">
</head>

<body>
     <!-- =============== Navigation ================ -->
     <div class="container"  style="margin-left:-1%; margin-top:-48.5%; width;1180px;">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                           
                        </span>
                        <span class="title">
                            <h4 style="margin-left:-34%;margin-top:10%">VOTER'S DASHBOARD</h4>
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
        <div class="main" style="width:1105px; style=">
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
                   
                    <p></p>
                    
                </div>
                
                <div class="notification" style="margin-right:-19%;">
                     <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications"></ion-icon>
                        </span>
                    </a>
                    
                </div>


                <div class="user" style="margin-right:0%;">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

           
               

            <!-- ================ Order Details List ================= -->
            <div class="details">

                <div class="recentOrders"  style="width:1090px;">
                    <div class="cardHeader">
                    <h1 style="margin-left:30%;margin-top:5%;" > <span class="lab la-accusoft"> Listed Candidates  <i  class="far fa-grin-beam-sweat" class="far fa-grin-beam-sweat"> </i> </h1 >  
                    </div>
                    
                    @foreach ($data as $candidates)

                    <section>
        
                        <div class="swiper mySwiper container">
                        <div class="swiper-wrapper content">

                       

                            <div class="swiper-slide card" style="width:500px;  margin-left:20%">
                                <div class="card-content">
                                    <div class="image">
                                    <img src="{{asset('uploads/candidates/'.$candidates->image)}}" alt="">
                                    </div>

                                    <div class="media-icons">
                                    
                                    </div>

                                    <div class="name-profession">
                                    <span class="name">{{$candidates->firstName}}</span>
                                    <span class="profession">{{$candidates->positionName}}</span>
                                    </div>

                                    <div class="button">
                                    <button class="aboutMe">
                                    <a href="viewManifesto" class="aboutMe" style="text-decoration:none; color:white;">Manifesto</a>
                                    </button>
                                    
                                    <button class="hireMe">
                                    <a href="#" class="hireMe" style="text-decoration:none; color:white;">Connect</a>
                                    </button>
                                    </div>
                                </div>
                            </div>
                    
                        
                    </section>
                    @endforeach

                     <div class="swiper-button-next" ></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

                    


    <!-- =========== Scripts =========  -->
    <script src="../js/main.js"></script>
    <script src="js/swiper-bundle.min.js"></script>

    <!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      spaceBetween: 25,
      slidesPerGroup: 2,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

      navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
      },
      
      breakpoints:{
        0: {
            slidesPerView: 2,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 2,
        },
    },
    });
  </script>

</body>

</html>