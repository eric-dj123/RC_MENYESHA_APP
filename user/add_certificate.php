<?php
session_start();
error_reporting(0);
include('includes/config.php');

	if(isset($_POST['Apply'])){
		$certificate_title= $_POST['certificate_title'];
		$certificate_diocese= $_POST['certificate_diocese'];
        $rec_id= $_POST['rec_id'];
        $status=0;


		$sql = "INSERT INTO certicate (certificate_title,certificate_diocese,status,rec_id) VALUES ('$certificate_title', '$certificate_diocese','$status','$rec_id')";
		if($con->query($sql)){
            echo '<script>alert("Done")</script>';
		}
		else{
            echo '<script>alert("Something Went Wrong Please try Again.")</script>';
		}

	}
	

?>
<?php include('userheader.php'); ?>

               <div class="s-12 l-10">
               <h1>Register Certificate</h1><hr>
               <div class="clearfix"></div>
               </div>
               <div class="s-12 l-6">
                 	<form action="" method="post">
					  
					    
                        <div class="form-group">
                                            <label for="exampleInputName1">Select Certificate Type</label>
                                            <select class="form-control" name="certificate_title" id="">
                                            <option value="ICYEMEZO CYUKO WAHAWE UKARISTIYA">ICYEMEZO CYUKO WAHAWE UKARISTIYA</option>
                                            <option value="ICYEMEZO CYUKO WAHAWE BATISIMU">ICYEMEZO CYUKO WAHAWE BATISIMU</option>
                                            <option value="ICYEMEZO CYUKO WAKOMEJWE">ICYEMEZO CYUKO WAKOMEJWE</option>
                                            <option value="ICYEMEZO CYUKO WAZEZERANYE">ICYEMEZO CYUKO WAZEZERANYE</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Select Cathedrale</label>
                                            <select class="form-control" name="certificate_diocese" id="">
                                            <option value="CATHEDRALE DE RUHENGERI">CATHEDRALE DE RUHENGERI</option>
                                            
                                            </select>
                                        </div>
                        
					      <input type="hidden" id="lname" name="rec_id" placeholder="" title="Reason"  value="<?php echo $_SESSION['rec_id']; ?>">
					    <input type="submit" name="Apply" title="Submit" value="Submit">

				  	</form>
               </div>

<?php include('userfooter.php'); ?>

<script type="text/javascript">
  
$('#EndDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'d/m/Y',
  formatDate:'Y/m/d',
  minDate:'2015/01/01', // yesterday is minimum date
  maxDate:'2030/01/01' // and tommorow is maximum date calendar
});

$('#StartDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'d/m/Y',
  formatDate:'Y/m/d',
  minDate:'2015/01/01', // yesterday is minimum date
  maxDate:'2030/01/01' // and tommorow is maximum date calendar
});

</script>


