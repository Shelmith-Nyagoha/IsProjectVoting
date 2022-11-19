



<body>

<div id="wrapper">

    <!-- Navigation -->

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                
                
            </div>
            
            
            <hr/>
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class = "alert alert-success">Election Report</h4>	
                    </div>
                    
                <br/>
                   <form method="post" action="sort.php">
        
        <select name="position" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
            <option readonly>----Sort by Position----</option>
            <option></option>
                            <option>President</option>
                            <option>Vice President</option>
                            <option>Female Sports Representative</option>
                            <option>Finance Representative </option>
                            
        </select>
        
        &nbsp;
        &nbsp;
        <button id ="sort" class = "btn btn-success">Sort</button><button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
</form>	
                    <div class="panel-body">
                        
                    
        <table class="table table-striped table-bordered table-hover " style="width:500px;">
                <thead>
                    <td style = "width:600px;" class = "alert alert-success">Candidate for President</td>
                    <td style = "width:200px;"class = "alert alert-success">Image</td>
                    <td class = "alert alert-success">Total</td>
                
                </thead>
                <?php
                      $connection = mysqli_connect("localhost", "root", "", "onealis");
                      $result = mysqli_query($connection, "SELECT * FROM candidates WHERE positionName ='President'");
                    while($row = mysqli_fetch_array($result))
                    {
                         $id = $row['candidateId'];
                         $result1 = mysqli_query($connection, "SELECT COUNT(*) as total FROM `votes` WHERE candidateId = '$id'");
                         $row1 = mysqli_fetch_array($result1);
            ?>
                <tbody> 
                    <td><?php echo $row['firstName'];?></td>
                    <td><img src = "{{asset('uploads/candidates/'.$row['image'])}}" style = "width:40px; height:40px; border-radius:500px; " >
                    <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $row1['total'];?></button>	</td>
                <?php }?>
                </tbody>
                
                
        </table>	
        

        <table class="table table-striped table-bordered table-hover " style="width:500px;">
                <thead>
                    <td style = "width:600px;" class = "alert alert-success">Candidate for Vice President</td>
                    <td style = "width:200px;"class = "alert alert-success">Image</td>
                    <td class = "alert alert-success">Total</td>
                
                </thead>
                <?php
                      $connection = mysqli_connect("localhost", "root", "", "onealis");
                      $result = mysqli_query($connection, "SELECT * FROM candidates WHERE positionName ='Vice President'");
                    while($row = mysqli_fetch_array($result))
                    {
                         $id = $row['candidateId'];
                         $result1 = mysqli_query($connection, "SELECT COUNT(*) as total FROM `votes` WHERE candidateId = '$id'");
                         $row1 = mysqli_fetch_array($result1);
            ?>
                <tbody> 
                    <td><?php echo $row['firstName'];?></td>
                    <td><img src = "{{asset('uploads/candidates/'.$row['image'])}}" style = "width:40px; height:40px; border-radius:500px; " >
                    <td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $row1['total'];?></button>	</td>
                <?php }?>
                </tbody>
                
                
        </table>	
        
        
                        
        
        
        
        
        
        
        
        
        
        
                        </div>				
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

