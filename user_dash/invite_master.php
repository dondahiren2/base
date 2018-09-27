<?php 
	include("header.php");
?>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Invite Master</a>
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
								<a href="#">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									
									<div class="desc">
										Volunteer
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat red-intense">
								<a href="#">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
										
									</div>
									<div class="desc">
										School
									</div>
								</div>
								</a>													
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat red-intense">
								<a href="#">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
									
									</div>
									<div class="desc">
										Student
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
		$(".nav_invite").addClass('active_head');		
	}); 	
</script>
</body>
</html>