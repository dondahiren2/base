<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>legal_management">Legal & Certificate Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>legal_catagory_master">Category Master</a>
		</li>
	</ul>
</div>
<aside class="right-side">
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-bottom:20px;">
					<div class="col-md-12" style="margin-bottom:50px;overflow-x:auto;text-align:center;margin-top: 15px;">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div_pending_zero">
							<div class="dashboard-stat blue-madison">
								<a href="<?php echo $admin_url?>master_list/legal/9">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from master_category where m_cc_id = 9 ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Master Category
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div_pending_zero">
							<div class="dashboard-stat red-intense">
								<a href="<?php echo $admin_url?>prime_list/legal/9">
								<div class="visual">
									<i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php 
											$coun = $con->query("select count(*) from prime_category where p_cc_id = 9 ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Prime Category
									</div>
								</div>
								</a>													
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 div_pending_zero">
							<div class="dashboard-stat green-haze">
								<a href="<?php echo $admin_url?>sub_list/legal/9">
								<div class="visual">
									<i class="fa fa-shopping-cart"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											$coun = $con->query("select count(*) from sub_category where s_cc_id = 9 ");
											$counn = mysqli_fetch_array($coun);
											echo $counn[0];
										?>
									</div>
									<div class="desc">
										Sub Category
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
		$(".nav_legal_management").addClass('active_head');		
	}); 	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>