<?php
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="web_management">Web Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="touch_a_life_site">Touch A Life Site</a>
		</li>
	</ul>
</div>
<aside class="right-side">
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-bottom:20px;">
					<div style="margin-bottom:50px;overflow-x:auto;text-align:center;margin-top: 15px;" class="col-md-12">
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="logo_banner">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										Logo and Banner
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="home_page">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										Home
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="tal_testimonial">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										Testimonials
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="Spotlight">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										Spotlight
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
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										Contact
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
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										About
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
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										Ambassadors
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
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										Social Links
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="gallery_list">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<!-- <div class="number">
										<?php
											$coun = $con->query("select count(*) from admin_user ");
											$counn = mysqli_fetch_array($coun);
											echo '';
											//echo $counn[0];
										?>
									</div> -->
									<div class="desc">
										Gallery
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
		$(".nav_web_management").addClass('active_head');		
	}); 	
</script>
</body>
</html>