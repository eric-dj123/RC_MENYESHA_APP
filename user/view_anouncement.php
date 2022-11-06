<?php include('userheader.php'); ?>
          <div class="s-12 l-10">
             

               
               <div class="validation-system" style="margin-top: 0;">	
<div class="validation-form">
 	<div>
		<div class="w3l-table-info">
		<h2>Manage Anouncement</h2>
		<br>
	  	
		  <!--   end modal -->
          <div class="card-body table-responsive p-3">
          <table class="table align-items-center table-flush table-hover" id="dataTableHover">
		<thead>
			<tr>
				<th style="text-transform: capitalize;">ID</th>
				<th style="text-transform: capitalize;">Title</th>
				<th style="text-transform: capitalize; text-align: center;">Category</th>
				<th style="text-transform: capitalize; text-align: center;">Description</th>
                <th style="text-transform: capitalize; text-align: center;">Added On</th>
                <th style="text-transform: capitalize; text-align: center;">Restore</th>
                <th style="text-transform: capitalize; text-align: center;">Action</th>
            
			</tr>
		</thead>
		<tbody>
        <?php
        $select = mysqli_query($con,"SELECT * FROM anouncement_tbl where status='0'");
                                                while ($row = mysqli_fetch_array($select)) {
                                                   
                                            ?>
			<tr>
			
				
                <td><?php echo $row['anou_id'];?></td>
                <td><?php echo $row['anou_title'];?></td>
                <td><?php echo $row['anou_category'];?></td>
                <td><?php echo $row['anou_description'];?></td>
                <td><?php echo $row['added_on'];?></td>
                <td style="text-align: center;"><a href="block_anouncement.php?anou_id=<?php echo $row['anou_id'];?>"onclick="return confirm('Do you really want to Disable Anouncement');" title="Block this User">Disable</a></td>
                <td style="text-align: center;"><a href="detailview.php?anou_id=<?php echo $row['anou_id'];?>"onclick="return confirm('Do you really want to block Father User?');" title="Block this User">Update</a></td>
               

			

			</tr>
            <?php
                                                }
                                            ?>
	
		</tbody>
		</table>
               </div>
               <div class="s-12 l-14">
             

               
             <div class="validation-system" style="margin-top: 0;">	
<div class="validation-form">
   <div>
      <div class="w3l-table-info">
      <h2>Disabled Anouncement</h2>
      <br>
        
        <!--   end modal -->
        <div class="card-body table-responsive p-3">
        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
      <thead>
          <tr>
              <th style="text-transform: capitalize;">ID</th>
              <th style="text-transform: capitalize;">Title</th>
              <th style="text-transform: capitalize; text-align: center;">Category</th>
              <th style="text-transform: capitalize; text-align: center;">Description</th>
              <th style="text-transform: capitalize; text-align: center;">Added On</th>
              <th style="text-transform: capitalize; text-align: center;">Block</th>
              <th style="text-transform: capitalize; text-align: center;">Action</th>
          
          </tr>
      </thead>
      <tbody>
      <?php
      $select = mysqli_query($con,"SELECT * FROM anouncement_tbl where status='1'");
                                              while ($row = mysqli_fetch_array($select)) {
                                                 
                                          ?>
          <tr>
          
              
              <td><?php echo $row['anou_id'];?></td>
              <td><?php echo $row['anou_title'];?></td>
              <td><?php echo $row['anou_category'];?></td>
              <td><?php echo $row['anou_description'];?></td>
              <td><?php echo $row['added_on'];?></td>
              <td style="text-align: center;"><a href="restore_anouncement.php?anou_id=<?php echo $row['anou_id'];?>"onclick="return confirm('Do you really want to Restore Anouncement?');" title="Block this User">Restore</a></td>
              <td style="text-align: center;"><a href="detailview.php?rec_id=<?php echo $row['anou_id'];?>"onclick="return confirm('Do you really want to block Father User?');" title="Block this User">Update</a></td>
             

             

          </tr>
          <?php
                                              }
                                          ?>
  
      </tbody>
      </table>
             </div>

<script>
	$(".la").mouseover(function (e) 
    {
        $(this).removeClass('fa fa-refresh')
        $(this).addClass('fa fa-refresh fa-spin')
    }).mouseout(function (e)
    {
        $(this).removeClass('fa fa-refresh fa-spin')
        $(this).addClass('fa fa-refresh')
    })
</script>
