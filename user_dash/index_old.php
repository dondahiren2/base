<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include('config.php');
?>
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.php">
				<p>Books For A Purpose</p>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<?php include('top_naigation.php'); ?>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php 
		$user_type = $_SESSION['user_type'];
		if($user_type == "ngo"){
			include("ngo_menu.php"); 
		}else if($user_type == "student"){
			include("student_menu.php"); 
		}else if($user_type == "volunteer"){
			include("volunteer_menu.php"); 
		}else if($user_type == "school"){
			include("school_menu.php"); 
		}else if($user_type == "p_donor" || $user_type == "c_donor"){
			include("donor_menu.php"); 
		}else if($user_type == "p_vendor" || $user_type == "c_vendor"){
			include("vendor_menu.php"); 
		}
	?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
		
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN STYLE CUSTOMIZER -->
				<?php include('theme_panel.php'); ?>
			<!-- END STYLE CUSTOMIZER -->
			
			<!-- BEGIN PAGE HEADER-->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
					<aside class="right-side">
						<div class="page-bar">
							<span id="greeting" style="float:left;"> </span>
							<div style="float:right;">
								<span id="setdate"></span>
								<span id="settime" style="margin-left:10px;">12:00:00</span>
								<span style="margin-left:10px;">27&#8451;</span>
							</div>
						</div>
						<section class="content">
							<div class="row"> 
								<div class="col-md-12 admin-grid" id="grid-1" style="border: 1px solid rgba(0,0,0,.15);border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.1);">
									<div class="panel panel-widget calendar-widget calendar-alt" id="p02">
										<div class="panel-heading ui-sortable-handle">
											<span class="panel-title"> School Details</span>
										</div>
										<div class="panel-body" style="overflow-x:auto;color:black;font-size:14px;margin-top:20px;margin-bottom:20px;">
											<table id="mytable" cellpadding="10" width="100%">
												<thead>
													<tr style="border-bottom: 1px solid rgba(0,0,0,.15);box-shadow: 0px 5px 4px -3px rgba(0, 0, 0, 0.13);, 0 1px 2px rgba(0,0,0,.1);">
														<th>School Name</th>
														<th>Address</th>
														<th>Board</th>
														<th>Class</th>
														<th>Medium</th>
													</tr>
												</thead>
												<tbody id="table1">
													<tr width="100%">
														<td width="20%" style="padding-top:10px;">Gajera High School</td>
														<td width="50%" style="padding-top:10px;">Katargam-Amreli Road, Katargam, Surat, Gujarat 395004.</td>
														<td width="10%" style="padding-top:10px;">CBSC</td>
														<td width="10%" style="padding-top:10px;">7th</td>
														<td width="10%" style="padding-top:10px;">Gujarati</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 admin-grid" id="grid-1" style="margin-top:30px;border: 1px solid rgba(0,0,0,.15);border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.1);">
									<div class="panel panel-widget calendar-widget calendar-alt" id="p02">
										<div class="panel-heading ui-sortable-handle">
											<span class="panel-title"> Communication Link</span>
										</div>
										<div class="panel-body" style="color:#364150;margin-left:20px;font-size:14px;margin-top:20px;margin-bottom:20px;">
											<div class="boxborder col-md-2 col-sm-2 col-xs-12">Student</div>
											<div class="col-md-1 col-sm-1 col-xs-12 harr" style="font-size:40px;text-align: -webkit-center;">&#8680;</div>
											<div class="col-md-1 col-sm-1 col-xs-12 varr" style="display:none;font-size:40px;text-align: -webkit-center;">&#8681;</div>
											<div class="boxborder col-md-2 col-sm-2 col-xs-12">School</div>
											<div class="col-md-1 col-sm-1 col-xs-12 harr" style="font-size:40px;text-align: -webkit-center;">&#8680;</div>
											<div class="col-md-1 col-sm-1 col-xs-12 varr" style="display:none;font-size:40px;text-align: -webkit-center;">&#8681;</div>
											<div class="boxborder col-md-2 col-sm-2 col-xs-12">Volunteer</div>
											<div class="col-md-1 col-sm-1 col-xs-12 harr" style="font-size:40px;text-align: -webkit-center;">&#8680;</div>
											<div class="col-md-1 col-sm-1 col-xs-12 varr" style="display:none;font-size:40px;text-align: -webkit-center;">&#8681;</div>
											<div class="boxborder col-md-2 col-sm-2 col-xs-12">NGO</div>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 admin-grid" id="projstatus" style="margin-top:30px;margin-bottom:30px;border: 1px solid rgba(0,0,0,.15);border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.1);">
									<div class="panel panel-widget calendar-widget calendar-alt" id="p02">
										<div class="panel-heading ui-sortable-handle">
											<span class="panel-title"> Current Project Application Status</span>
										</div>
										<div class="panel-body" style="margin-left:20px;font-size:14px;">
											1.	Books for a Purpose 2018
										</div>
										<div class="panel-body" style="margin-left:20px;font-size:14px;">
											2.	Student Health Check 2018
										</div>
										<div class="panel-body" style="margin-left:20px;font-size:14px;">
											3.	Shoe Distribution for Summer 2018
										</div>
										<div class="" style="border-top: 1px solid #dadada;padding:10px;">
										</div>
									</div>
								</div>	<!--/.col (left) -->
								<div class="col-md-12 col-sm-12 col-xs-12 admin-grid" id="grid-1" style="margin-top:30px;border: 1px solid rgba(0,0,0,.15);border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.1);">
									<div class="panel panel-widget calendar-widget calendar-alt" id="p02">
										<div class="panel-heading ui-sortable-handle">
											<span class="panel-title"> Project Status</span>
										</div>
										<div class="panel-body" style="overflow-x:auto;color:black;font-size:14px;margin-top:20px;margin-bottom:20px;">
											<table id="mytable" cellpadding="10">
												<thead>
													<tr style="border-bottom: 1px solid rgba(0,0,0,.15);box-shadow: 0px 5px 4px -3px rgba(0, 0, 0, 0.13);, 0 1px 2px rgba(0,0,0,.1);">
														<th>Application Status Approve/ Pending</th>
														<th>Syllabus Request</th>
														<th>Delivery Status</th>
													</tr>
												</thead>
												<tbody id="table1">
													<tr width="100%">
														<td width="30%" style="padding-top:10px;">Approve</td>
														<td width="30%" style="padding-top:10px;">30 Sets Standard 10 –M</td>
														<td width="10%" style="padding-top:10px;">In Warehouse</td>
													</tr>
													<tr width="100%">
														<td width="30%" style="padding-top:10px;">Pending</td>
														<td width="30%" style="padding-top:10px;">25 Sets Standard 10 –M</td>
														<td width="10%" style="padding-top:10px;">In Order</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div><!-- /.row (main row) -->
						</section><!-- /.content -->
					</aside>
						
		</div>
	</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<?php include('quick_sidebar.php'); ?>
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		2014 &copy; Metronic by keenthemes. 
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>

<script>
/*jQuery(document).ready(function() {   
   // initiate layout and plugins
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features
});*/
</script>
<?php include("js.php"); ?>
<script type="application/javascript" >
$(document).ready(function() {
		$(".cur_proj").click(function (e) { 
			$("#projstatus").css({"display":"block"});
		}); 
		
		var now = new Date();
		var hrs = now.getHours();
		var min = now.getMinutes();
		var sec = now.getSeconds();
		var day = now.getDate();
		var mon = now.getMonth();
		var yer = now.getFullYear();
		var msg = "";
		var newtime = hrs + ":" + min + ":" + sec;
		var newdate = mon + "/" + day + "/" + yer;
		//alert(newdate);
		if (hrs >  0) msg = "Mornin' Sunshine!"; // REALLY early
		if (hrs >  6) msg = "Good morning";      // After 6am
		if (hrs > 12) msg = "Good afternoon";    // After 12pm
		if (hrs > 17) msg = "Good evening";      // After 5pm
		if (hrs > 22) msg = "Good night!";        // After 10pm
		//alert(msg);
		$("#greeting").html(msg);
		$("#settime").html(newtime);
		$("#setdate").html(newdate);
	});	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>