<?php
session_start();
error_reporting(0);
include('includes/config.php');

	if(isset($_POST['Apply'])){
		$anou_title= $_POST['anou_title'];
		$anou_category= $_POST['anou_category'];
		$anou_description= $_POST['anou_description'];
        $rec_id= $_POST['rec_id'];
        $status=0;


		$sql = "INSERT INTO anouncement_tbl (anou_title,anou_category,anou_description,status,rec_id) VALUES ('$anou_title', '$anou_category','$anou_description','$status','$rec_id')";
		if($con->query($sql)){
            echo '<script>alert("New anouncement is Published")</script>';
		}
		else{
            echo '<script>alert("Something Went Wrong Please try Again.")</script>';
		}

	}
	

?>
<?php include('userheader.php'); ?>

               <div class="s-12 l-10">
               <h1>Add Anouncement</h1><hr>
               <div class="clearfix"></div>
               </div>
               <div class="s-12 l-6">
                 	<form action="" method="post">
					  
					    <label for="lname">Title</label>
					    <input type="text" id="lname" name="anou_title" placeholder="Enter Anouncement Title" title="Reason" required="" autocomplete="off">
                        
					    <label for="lname">Category</label>
					    <input type="text" id="lname" name="anou_category" placeholder="Enter Anouncement Category" title="Reason" required="" autocomplete="off">
					    <label for="lname">Description</label>
					    <textarea id="" name="anou_description"  placeholder="Enter Anouncement Description" title="Start Date" required=""></textarea>
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


