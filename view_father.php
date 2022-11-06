<?php include('header.php'); ?>

<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<!-- <link rel="stylesheet" type="text/css" href="css/basictable.css" /> -->
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item"><a href="Home.php">Home</a><i class="fa fa-angle-right"></i>Father<i class="fa fa-angle-right"></i>Father View</li>
</ol>

<div class="validation-system" style="margin-top: 0;">	
<div class="validation-form">
 	<div>
		<div class="w3l-table-info">
		<h2>Father View</h2>
		<br>
	  	<form method="GET" action="#">
			<input style="float: right;" type="submit" name="searchview">
			<input style="float: right;" placeholder="Search" value="<?php echo(isset($SearchName))?$SearchName:''; ?>" type="search-box" name="search"><br>
		</form>
		<table id="table">
		<thead>
			<tr>
				<th style="text-transform: capitalize;">Profile Photo</th>
				<th style="text-transform: capitalize;">Firstname</th>
				<th style="text-transform: capitalize; text-align: center;">Lastname</th>
				<th style="text-transform: capitalize; text-align: center;">Eamil</th>
                <th style="text-transform: capitalize; text-align: center;">Mobile Number</th>
                <th style="text-transform: capitalize; text-align: center;">Block</th>
                <th style="text-transform: capitalize; text-align: center;">Action</th>
            
			</tr>
		</thead>
		<tbody>
        <?php
        $select = mysqli_query($con,"SELECT * FROM father_tbl where status='0'");
                                                while ($row = mysqli_fetch_array($select)) {
                                                   
                                            ?>
			<tr>
				<td style="width: 140px;"><img id="myImg" src="image/<?php echo $row['ImageName']; ?>" style="width: 50px;height: 50px;object-fit: cover;border-radius: 100%;border: 1px solid"></td>
				
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phonenumber'];?></td>
               
                <td style="text-align: center;"><a href="block_father.php?fath_id=<?php echo $row['fath_id'];?>"onclick="return confirm('Do you really want to block Father User?');" title="Block this User">Block</a></td>
                <td style="text-align: center;"><a href="detailview.php?fath_id=<?php echo $row['fath_id'];?>"onclick="return confirm('Do you really want to block Father User?');" title="Block this User">Update</a></td>
               

				<td style="width: 105px;"></td>

			</tr>
            <?php
                                                }
                                            ?>
	
		</tbody>
		</table>
        
		<div><?php echo $page; ?></div>
		</div>  
	</div>
    <div class="validation-system" style="margin-top: 0;">	
<div class="validation-form">
 	<div>
		<div class="w3l-table-info">
		<h2>Blocked User</h2>
		<br>
	  	<form method="GET" action="#">
			<input style="float: right;" type="submit" name="searchview">
			<input style="float: right;" placeholder="Search" value="<?php echo(isset($SearchName))?$SearchName:''; ?>" type="search-box" name="search"><br>
		</form>
		<table id="table">
		<thead>
			<tr>
				<th style="text-transform: capitalize;">Profile Photo</th>
				<th style="text-transform: capitalize;">Firstname</th>
				<th style="text-transform: capitalize; text-align: center;">Lastname</th>
				<th style="text-transform: capitalize; text-align: center;">Eamil</th>
                <th style="text-transform: capitalize; text-align: center;">Mobile Number</th>
                <th style="text-transform: capitalize; text-align: center;">Restore</th>
                <th style="text-transform: capitalize; text-align: center;">Action</th>
            
			</tr>
		</thead>
		<tbody>
        <?php
        $select = mysqli_query($con,"SELECT * FROM father_tbl where status='1'");
                                                while ($row = mysqli_fetch_array($select)) {
                                                   
                                            ?>
			<tr>
				<td style="width: 140px;"><img id="myImg" src="image/<?php echo $row['ImageName']; ?>" style="width: 50px;height: 50px;object-fit: cover;border-radius: 100%;border: 1px solid"></td>
				
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['lastname'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phonenumber'];?></td>
                <td style="text-align: center;"><a href="restore_father.php?fath_id=<?php echo $row['fath_id'];?>"onclick="return confirm('Do you really want to Restore Father User?');" title="Block this User">Restore</a></td>
                <td style="text-align: center;"><a href="detailview.php?fath_id=<?php echo $row['fath_id'];?>"onclick="return confirm('Do you really want to block Father User?');" title="Block this User">Update</a></td>
               
                

				<td style="width: 105px;"></td>

			</tr>
            <?php
                                                }
                                            ?>
	
		</tbody>
		</table>
        
		<div><?php echo $page; ?></div>
		</div>  
	</div>
 </div>
 </div>

</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<?php include('footer.php'); ?>



<!--image Popup-->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<!--End image Popup -->