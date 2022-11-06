<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->

<!--inner block end here-->
<!--copy rights start here-->
<div style="margin-top: -20px;" class="copyrights">
	 <p>All Rights Reserved © <?= date("Y") ?> Ruhengeri Cathedrale Menyesha  </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Dashboard	</span><div class="clearfix"></div></a></li>

										<li><a href="#"><i class="fa fa-user"></i><span>Father</span><span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
											<ul>
												<li><a href="add_father.php">Add Father</a></li>
												<li><a href="view_father.php">Father View</a></li>
												<!-- <li><a href="atten.php">Attendece Details</a></li>
												<li><a href="modifiedlogout.php">Modified Logout Time</a></li>
												<li><a href="inquiry.php">Inquiry</a></li> -->
											</ul>
										</li>
										<li><a href="#"><i class="fa fa-user"></i><span>Receptionist</span><span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
											<ul>
												<li><a href="add_receptionist.php">Add Receptionist</a></li>
												<li><a href="view_receptionist.php">Receptionist View</a></li>
												<!-- <li><a href="atten.php">Attendece Details</a></li>
												<li><a href="modifiedlogout.php">Modified Logout Time</a></li>
												<li><a href="inquiry.php">Inquiry</a></li> -->
											</ul>
										</li>
									

										
							        	

										<!-- <li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										  	<ul>
												<li><a href="employeeadd.php">All Employee</a></li>
											</ul>
										</li> -->

										
										<li><a href="#"><i class="fa fa-list"></i><span>Chiristian Request</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										  	<ul>
												<li><a href="city.php">Christian Approved</a></li>
												<li><a href="state.php">Christian Rejected</a></li>
												
											</ul>
										</li>
										<li><a href="#"><i class="fa fa-list"></i><span>Report Payment</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										  	<ul>
												<li><a href="city.php">Approved Payment</a></li>
												<li><a href="state.php">Canceled Payment</a></li>
												
											</ul>
										</li>
										<li id="menu-academico" ><a href="changepassword.php"><i class="fa fa-cogs"></i><span>Change Password</span></a> <!-- <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div>
										 <ul id="menu-academico-sub">
											<li id="menu-academico-avaliacoes" ><a href="changepassword.php">Change Password</a></li>
											

										  </ul> -->
									 	</li>

										
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>