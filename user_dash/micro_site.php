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
			<a href="web_management">Micro Site</a>
		</li>
	</ul>
</div>
<aside class="right-side">
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-bottom:20px;">
					<div style="margin-bottom:50px;overflow-x:auto;text-align:center;margin-top: 15px;" class="col-md-12">
						<?php 
							if($bp_micro_website == 1){
						?>
						<div  class="col-xs-12" style="padding: 5px;background-color: #b70021;color: #fff;font-size: 14px;">
							<label>URL : </label> <a href="<?php echo $site_url?>website/<?php echo $bp_micro_weburl;?>" target="_blank" style="color: #fff;"><?php echo $site_url?>website/<?php echo $bp_micro_weburl;?></a>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>logo">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Logo
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>banner">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										 Banner
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>short-details">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Short Detail
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>slogan">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Slogan
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>whats_news_list">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details"> 
									<div class="desc">
										Whats News
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>events_list">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Events
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>team_member_list">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details"> 
									<div class="desc">
										Team Members
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>testimonial_list">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Testimonials
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>index">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details"> 
									<div class="desc">
										Contact us
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>social_links">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Social Links
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>index">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details"> 
									<div class="desc">
										Academics
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>gallery_list">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details"> 
									<div class="desc">
										Gallery
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>education_list">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Education
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>usefull_link_list">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Usefull Link
									</div>
								</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>about_list/about">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details"> 
									<div class="desc">
										About us
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $user_url ?>about_list/student_life">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="desc">
										Student Life
									</div>
								</div>
								</a>
							</div>
						</div>
						<?php 
							}
						?>
						
					</div>
				</div>
			</div><!--/.col (left) -->
		</div><!-- /.row (main row) -->
	</section><!-- /.content -->
</aside>
<?php include('footer.php'); ?>
<script type="application/javascript" >
	$(document).ready(function() {
		$(".nav_micro_site").addClass('active_head');		
	}); 	
</script>
</body>
</html>