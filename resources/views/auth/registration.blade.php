<!DOCTYPE html>
<html>
<head>
	<title>Online Voting System</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
</head>
<body  style=" background:#008B8B !important">


<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card_one" >
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container" style="margin-top:5%;">
					<img src="../images/logo.png" class="brand_logo" alt="Programming Knowledge logo">
				</div>
			</div>	
			<div class="d-flex justify-content-center form_container">
            <form action="{{route('register-user')}}" method="post" enctype="multipart/form-data">
				@if(Session::has('success'))
				<div class="alert alert-success" style="background:  #aaf0d1;">
					{{Session::get('success')}}
				</div>
				@endif

				@if(Session::has('fail'))
				<div class="alert alert-danger" style="background:  #aaf0d1;>
			
					{{Session::get('fail')}}
				</div>
				@endif
				@csrf    
				<!-- For security purposes -->
                    <div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
                        <input placeholder="Student Number" class="form-control input_user" id="studentnumber"  type="number" name="studentnumber" required> 
						<span class="text danger">@error('studentnumber') {{$message}} @enderror</span>
					</div>
                    <div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
                        <input  placeholder="First Name"class="form-control" id="firstname" type="text" name="firstname" required>
						<span class="text danger">@error('firstname') {{$message}} @enderror</span>
					</div>
                    <div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
                        <input  placeholder="Last Name"class="form-control" id="lastname" type="text" name="lastname" required>
					</div>

					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>					
						</div>
						<input placeholder="Email" type="email" name="email" id="email" class="form-control input_user"  required>
					</div>

                    <div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-book"></i></span>					
						</div>
                       
						<select id="faculty" placeholder="Faculty" class="form-control" id="faculty"  type="text" name="faculty" required>
							<option value="sces">SCES</option>
							<option value="sbs">SBS</option>
							<option value="sls">Strathmore Law School</option>
							<option value="sht">School of tourism</option>
					
						</select>
					</div>

                    <div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>					
						</div>
                        <input placeholder="Year of Study" class="form-control" id="yearofStudy"  type="number" name="yearofStudy" required>
					</div>

					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input placeholder="Password" type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-image"></i></span>					
						</div>
						<input placeholder="Upload your profile picture" type="file" name="image" id="image" class="form-control input_pass" required>
					</div>	
				
			</div>
			<div class="login_container">
			<!-- <input class="login_btn type="submit" id="register" name="create" value="Sign Up"> -->
			<a href="login" ><button class="signup_btn" type= "submit">Sign Up</button></a>
			</div>
			</form>
			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Already have an account? <a href="login" class="ml-2">Log in</a>
				</div>
		
			</div>
		</div>
	</div>
</div>


</body>
</html>