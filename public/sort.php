
<?php include ('session.php');?>


<body>

    <div id="wrapper">

       

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
					
                </div>
				
				
				<!-- -->
				
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">

						<?php
									$conn = mysqli_connect("localhost", "root", "", "onealis");
								
									$sql = mysqli_query($conn,"SELECT * FROM candidates ");
									$row = mysqli_fetch_array($sql);
									$sort =  $row['positionName'];
									$query = $conn->query("SELECT * FROM candidates WHERE positionName = '$sort'");
									$fetch = $query->fetch_array();
									{
										
										
								?>
					<div class="panel-heading">
							<center><?php echo $fetch ['positionName'];?> category winner
								<?php }?>
								
					</div>  </center>  
									
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href = "results" id="back" class = "btn btn-warning" ><i class = "fa fa-refresh"> </i> Back</a>
						<button onclick="window.print();" style = "margin-right:14px; margin-bottom:12px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover " style="width:300px;">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate </td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					

<?php

		 $conn = mysqli_connect("localhost", "root", "", "onealis");
		 
		 $sql = mysqli_query($conn,"SELECT * FROM candidates ");
		 $row = mysqli_fetch_array($sql);
		 $sort =  $row['positionName'];
		$query = $conn->query("SELECT * FROM candidates WHERE positionName = '$sort'");
		while($fetch = mysqli_fetch_array($query))
		{
			$id = $fetch['candidateId'];
			$query1 = mysqli_query($conn, "SELECT COUNT(*) as total FROM `votes` WHERE candidateId = '$id'");
			$fetch1 = mysqli_fetch_array( $query1);
			
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstName'] ;?></td>
						<td><img src = "{{asset('uploads/candidates/'.$fetch['image'])}}" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('scripts.php');?>

</body>

</html>

