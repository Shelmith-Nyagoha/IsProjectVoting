<header> 
<title>Online Voting System</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="..\css\styles.css">
  
</header>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="../images/logo.png" class="brand_logo" alt="Programming Knowledge logo">
				</div>
			</div>	
			<div class="d-flex justify-content-center form_container">
				<form action="{{route('login-admin')}}" method="post">
					@csrf
					<p style="font-size:24px; font-weight:bold;">ADMINSTRATOR LOGIN</p>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>					
						</div>
						<input placeholder="Admin Number" type="number" name="adminNumber" id="adminNumber" class="form-control input_user" required>
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>					
						</div>
						<input placeholder="Password" type="password" name="password" id="password" class="form-control input_pass" required>
					</div>
					
				
			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
			
				<button type="submit" name="button" id="login" class="btn login_btn">Login</button> 
			</div>
            <div class="mt-4">
				<!-- <div class="d-flex justify-content-center links">
					Have no account? <a href="adminRegistration" class="ml-2">Sign Up</a>
				</div> -->
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