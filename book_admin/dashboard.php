<?php 
	include("header.php");
?>

	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="<?php echo $admin_url?>dashboard">Dashboard</a>
			</li>
		</ul>
	</div>
	
	<aside class="right-side">
		<section class="content">
			<div class="row"> 
				<div class="col-md-12">
					<div class="box box-primary" style="padding-bottom:20px;padding-top: 20px;">
						<div style="margin-bottom:50px;overflow-x:auto; text-align:center;">
							<div class="col-md-12">
								<h3 class="form-title">Pending</h3>
							</div>
							<div class="col-md-12 ">
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat blue-madison">
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
											Team Members
										</div>
									</div>
									<a class="more" href="#" style="text-align: left;">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat red-intense">
									<div class="visual">
										<i class="fa fa-bar-chart-o"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php 
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 10 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
									<div class="desc">
										NGO
									</div>
								</div>
								<a class="more" href="<?php echo $admin_url?>ngo_list/0" style="text-align: left;">
									View more <i class="m-icon-swapright m-icon-white"></i>
								</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat green-haze">
									<div class="visual">
										<i class="fa fa-shopping-cart"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 12 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											School
										</div>
									</div>
									<a class="more" href="#" style="text-align: left;">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 13 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Student
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 11 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Voluntree
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 16 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Intership
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 14 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Personal Donor
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 17 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Corporate / NGO Partner
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 15 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Personal Vendor
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from basic_profile where bp_user_type = 20 and bp_status = 0 ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Corporate Vendor
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Project
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Task
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Web Management
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Special Requests
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											HelpDesk Inquiries
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							</div>
							
						</div>
						
						
						
						<div style="margin-bottom:50px;overflow-x:auto; text-align:center;">
							<div class="col-md-12">
								<h3 class="form-title">Countdown</h3>
							</div>
							<div class="col-md-12 ">
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat blue-madison">
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
											Total Team Memebrs
										</div>
									</div>
									<a class="more" href="#" style="text-align: left;">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat red-intense">
									<div class="visual">
										<i class="fa fa-bar-chart-o"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php 
												$coun = $con->query("select count(*) from ngo_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
									<div class="desc">
										Total NGO
									</div>
								</div>
								<a class="more" href="#" style="text-align: left;">
									View more <i class="m-icon-swapright m-icon-white"></i>
								</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat green-haze">
									<div class="visual">
										<i class="fa fa-shopping-cart"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from product ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Total Product
										</div>
									</div>
									<a class="more" href="#" style="text-align: left;">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Total School
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Total Task
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Total Project
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Total Special Requests
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div>
										<div class="desc">
											Total HelpDesk
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
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
var requ;
var page = 1;
$(document).ready(function() { 
	$(".nav_dashboard").addClass('active_head');
}); 
 
	
</script>

</body>
</html>