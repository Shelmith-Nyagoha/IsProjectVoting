

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  

  <style>
    /* .form-control{
      width: 400px;
      color: black !important;
      border: 0 !important;
      border-radius: 10px;
    }
    .pos_block{
      height: 700px;
      margin-left: 5%;
      padding-top: auto;

    } */
      
  </style>
</head>
<body>

<div class="container">
  <h1>Laravel CRUD : with bootstrap Modal</h1>

  @if(Session::has('success'))
				<div class="alert alert-success" style="background:  #aaf0d1;">
					{{Session::get('success')}}
				</div>
				@endif

<!-- Start add modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style= "background-color:#008B8B" >
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Election Positions</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form " action="{{route('addPositions')}}"  method="POST" style="padding-top:0px;">
      @csrf
      <div class="modal-body">         
          <div class="form-group mb-6">
            <input type="number" class="form-control " placeholder="Position Id" id="positionId" name="positionId" value=""required>
          </div> 
          <br>
          <div class="form-group mb-6">
            <input type="text" class="form-control" placeholder="Position Name" id="positionName" name="positionName" required>
          </div>
          <br>
          <div class="form-group mb-6">
            <input type="text" class="form-control block" placeholder="Position Description" id="positionDescription" name="positionDescription" required>
          </div>
          <br>       
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  style= "background-color:#008B8B; color:black;">Close</button>
        <button type="submit" class="btn btn-primary" style= "background-color:#008B8B; color:black;">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="table">
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:70%; background:  #008B8B; colo:black;">
    Add position

</form>

</div>
<!-- End modal -->

<!-- Start Edit Modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style= "background-color:#008B8B" >
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Election Positions</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form " action="{{route('addPositions')}}"  method="POST" style="padding-top:0px;">
      @csrf
      <div class="modal-body">         
          <div class="form-group mb-6">
            <input type="number" class="form-control " placeholder="Position Id" id="positionId" name="positionId" value=""required>
          </div> 
          <br>
          <div class="form-group mb-6">
            <input type="text" class="form-control" placeholder="Position Name" id="positionName" name="positionName" required>
          </div>
          <br>
          <div class="form-group mb-6">
            <input type="text" class="form-control block" placeholder="Position Description" id="positionDescription" name="positionDescription" required>
          </div>
          <br>       
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  style= "background-color:#008B8B; color:black;">Close</button>
        <button type="submit" class="btn btn-primary" style= "background-color:#008B8B; color:black;">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="table">
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:70%; background:  #008B8B; colo:black;">
    Add position

</form>

</div>
<!-- End Edit Modal -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html> 
