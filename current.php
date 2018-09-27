<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="index">Current Project</a>
		</li>
	</ul>
</div>
<aside class="right-side">
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-bottom:20px;">
					<div class="col-md-12" style="margin-bottom:50px;overflow-x:auto;text-align:center;margin-top: 15px;">
						
	
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Accepted Project Invitation
									</div>
								</div>
								</a>
							</div>
						</div>	<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Rejected Project Invitaion
									</div>
								</div>
								</a>
							</div>
						</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Requirement
									</div>
								</div>
								</a>
							</div>
						</div>
<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Quatations
									</div>
								</div>
								</a>
							</div>
						</div>
<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Accepted Quatations
									</div>
								</div>
								</a>
							</div>
						</div>
<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Rejected Quatations
									</div>
								</div>
								</a>
							</div>
						</div>
<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Approved Quatations
									</div>
								</div>
								</a>
							</div>
						</div>
<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Place Order
									</div>
								</div>
								</a>
							</div>
						</div>
<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Shipped Order List
									</div>
								</div>
								</a>
							</div>
						</div>
<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Shipment Deliver Status
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Final Delivery
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
									Resources
									</div>
								</div>
								</a>
							</div>
						</div>


					</div>
				</div>
			</div><!--/.col (left) -->
		</div><!-- /.row (main row) -->
	</section><!-- /.content -->
</aside>
<?php include('footer.php'); ?>
<script type="application/javascript" >
	$(document).ready(function() {
		$(".nav_project_master").addClass('active_head');		
	}); 	
</script> 
</body>
</html>