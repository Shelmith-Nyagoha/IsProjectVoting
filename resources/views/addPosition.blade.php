<head>
	<title>Online Voting System</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
    .form-control{
      width: 500px;
      color: black !important;
      border: 0 !important;
      border-radius: 10px;
    }
    .pos_block{
      height: 700px;
      margin-left: 5%;
      padding-top: auto;

    }
    .button{
      width: 10%;
      height: 5%;
      color: black !important;
      margin-left: 12%;
      border-radius: 10px;
}

  </style>
</head>
<div class="pos_block" style="width=700px; margin-top: auto;">
  <div>
    <br>
    <h3 style="margin-left=5%;">ADD ELECTION POSITIONS </h3>
    <hr style="border-top: 2px solid black;>
  </div>
  
        <form " action="{{route('addPositions')}}"  method="post" style="padding-top:0px;">
          @csrf
          @if(Session::has('success'))
				<div class="alert alert-success" style="background:  #aaf0d1;">
					{{Session::get('success')}}
				</div>
				@endif

				@csrf 

          <div class="form-group mb-6">
            <input type="number" class="form-control " placeholder="Position Id" id="positionId" name="positionId" required>
          </div>
          <div class="form-group mb-6">
            <input type="text" class="form-control" placeholder="Position Name" id="positionName" name="positionName" required>
          </div>
          <div class="form-group mb-6">
            <input type="text" class="form-control block" placeholder="Position Description" id="positionDescription" name="positionDescription" required>
          </div>
          
          <button class="button" type="submit">Save</button>
        </form>
        
  
</div>