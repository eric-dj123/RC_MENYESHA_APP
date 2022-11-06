<?php include('userheader.php'); ?>
<style>
	.dash-summary{
	display: flex;
	justify-content:space-between;
	width: 83%;
	}
	.dash-panel {
		border: 1px solid #f0efef;
		width: 48%;
		padding: 1em 1em;
		box-shadow: 2px 2px 7px #c8c8c8;
	}
</style>
            <div class="s-12 l-10">
               <h1>Home</h1><hr>
               <div class="clearfix"></div>
               </div>
               <div class="s-12 dash-summary">
                 	<div class="dash-panel">
						<h3>No. of Pending Applications</h3>
						<h4 align="right">MM</h4>
					</div>
					<div class="dash-panel">
						<h3>No. of Accepted Applications</h3>
						<h4 align="right">MM</h4>
					</div>
               </div>
<?php include('userfooter.php'); ?>