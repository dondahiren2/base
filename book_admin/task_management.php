<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="task_management">Task Management</a>
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
								<a href="task_category">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from task_category where tc_action = 1 ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Task Category Master
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
										<?php 
											echo 0;
										?>
									</div>
									<div class="desc">
										Roles & Responsibility List
									</div>
								</div>
								</a>													
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat red-intense">
								<a href="ad_hoc_task_list">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php 
											$coun = $con->query("select count(*) from task where t_status != 'Completed' ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Ad Hoc Task List
									</div>
								</div>
								</a>													
							</div>
						</div>
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat red-intense">
								<a href="ad_hoc_task_list">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php 
											$coun = $con->query("select count(*) from task where  CONCAT(',', t_assign_to, ',') REGEXP ',($user_id),' and t_status NOT IN ('Completed','Closed','Rejected') ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										My Task List
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
		$(".nav_task_management").addClass('active_head');
	}); 	
</script>
</body>
</html>