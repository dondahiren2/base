<?php
	include("header.php");
?>

<div class="row" style="margin:0px;">
<div class="col-md-12" style="margin-bottom: 10px;background: #b70021 !important;padding: 10px;color: #fff;">
	<span style="font-size:16px;">Welcome </span>
	<span style="font-size:16px;font-weight:bold;"><?php echo strtoupper($username); ?></span>
	<span style="font-size:16px;"> at</span>
	<span style="font-size:16px;font-weight:bold;"> <?php echo "Touch A Life"  ?></span>
	
	<span style="font-size:16px;font-weight:bold;float:right;;">
		<?php
		 
			$ip = $_SERVER['REMOTE_ADDR'];
			
			$ch = curl_init();
			$curlConfig = array(
				CURLOPT_URL            => "http://ip-api.com/php/".$ip,
				CURLOPT_RETURNTRANSFER => true
			);
			curl_setopt_array($ch, $curlConfig);
			$result = curl_exec($ch);
			curl_close($ch);
			$query = @unserialize($result);
			
			if(isset($query['status'])){
				if($query['status'] == 'success'){
					$timezone = $query['timezone'];
					
					date_default_timezone_set($timezone);
					$date = date("jS M Y h:i A");
					echo '<span style="font-size:12px;">'.$date.'</span>';
					
					echo '<span style="font-size:12px;margin-left: 15px;">';
					$hr = date("H"); 
					if ($hr >= 0 && $hr < 6){ 
						echo "Mornin' Sunshine";
					} else if ($hr >=  6 && $hr < 12){
						echo "Good Morning"; 
					} else if ($hr >= 12 && $hr < 17){
						echo "Good Afternoon";    // After 12pm
					} else if ($hr >= 17 && $hr < 22){
						echo "Good Evening";      // After 5pm
					} else if ($hr >= 22  && $hr <= 24){
						echo "Good Night";        // After 10pm
					}
					echo '</span>';
				}
			}
 
		?>		
	</span>
</div>
</div>

<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="index">Dashboard</a>
		</li>
	</ul>	
</div>
 
<aside class="right-side">
	 
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-top:0px; padding-bottom:0px;">
					<div class="col-md-12" style="margin-top:15px;margin-bottom:50px;overflow-x:auto; text-align:center;">
					<?php
					if($bp_user_type == 10){ ?>
					
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											echo 0;
										?>
									</div>
									<div class="desc">
										Pending Invite
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Total Volunteer
									</div>
								</div>
								<a class="more" href="ngo_ref_volunteer.php" style="text-align: left;">
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
											echo 0;
										?>
									</div>
								<div class="desc">
									Total School
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Total Student
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
											echo 0;
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Special Requests of Student
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Special Requests of school
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Sponsored Projects
									</div>
								</div>
									<a class="more" href="javascript:;" style="text-align: left;">
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Project
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Project Item orders
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
											echo 0;
										?>
									</div>
									<div class="desc">
										pending order
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Shipped Order
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Delivered Order
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Pending task
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Vacancy
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
											echo 0;
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
					
					<?php 
						} else if($bp_user_type == 11){ 
					?>
						
						<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
							<div class="dashboard-stat blue-madison">
								<div class="visual">
									<i class="fa fa-comments"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											echo 0;
										?>
									</div>
									<div class="desc">
										Pending Invitation
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Total Invitation
									</div>
								</div>
								<a class="more" href="ngo_ref_volunteer.php" style="text-align: left;">
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
											echo 0;
										?>
									</div>
								<div class="desc">
									Total Project
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Total School
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
											echo 0;
										?>
									</div>
									<div class="desc">
										Total Student
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
											echo 0;
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
											echo 0;
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
											echo 0;
										?>
									</div>
									<div class="desc">
										HelpDesk
									</div>
								</div>
								<a class="more" href="javascript:;" style="text-align: left;">
									View more <i class="m-icon-swapright m-icon-white"></i>
								</a>
							</div>
						</div>
					<?php 
						} else if($bp_user_type == 12){ 
					?>
						<div class="col-lg-8  col-md-8 col-sm-8 col-xs-12" style="padding:0px;" >
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Total Student
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>								
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Total Team Members
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
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
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Specific Request By Student
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Specific Request By School
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Achievement
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>
							
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Present Today
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>						
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Absent Today
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>						
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Health Record
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>		
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Achedamic Record
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>	
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Pending Task
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>	
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											Web status
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>	
							<div class="col-lg-4 div_pending_zero col-md-4 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php
												echo 0;
											?>
										</div>
										<div class="desc">
											help desk
										</div>
									</div>
										<a class="more" href="javascript:;" style="text-align: left;">
											View more <i class="m-icon-swapright m-icon-white"></i>
										</a>
								</div>
							</div>	
						</div>
							 	
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
							<div class="panel panel-widget calendar-widget calendar-alt" id="p02" style="background:#f9f2f2">
								<div class="panel-heading ui-sortable-handle" style="border-bottom:1px dotted #ccc;">
									<span class="panel-title">Administration Details</span>
								</div>
								<div class="panel-body" style="overflow-x:auto;color:black;font-size:14px;margin-top:20px;margin-bottom:20px;">
								<?php
									$coun = $con->query("select bk_profile, bp_fname, bp_mname, bp_lname, bp_email, bp_mobile_no from basic_profile as bp left join basic_kyc as bk on bp.bp_unique_id = bk.bk_bp_unique_id where bp_ref_id = $bp_ref_id and bp_designation = 32 and bp_status = 1 limit 1");
									$str = mysqli_fetch_assoc($coun);	
								?>
									<div class="row">
										<div class="col-md-12">
											<div class="author-img">
											<?php 
												if($str['bk_profile']){
											?>
												<img src="<?php echo $cdn_path.$str['bk_profile'] ?>" class="img-responsive" style="width:125px;max-height:125px;">
											<?php
												} else {
											?>
												<img src="<?php echo $cdn_path ?>uploads/No-Profile.png" class="img-responsive" style="width:125px;max-height:125px;">
											<?php
												}
											?>
											</div>
										</div>
										<div class="col-md-12"  style="margin-bottom: 5px;font-size: 16px;font-weight: bold;margin-top: 15px;"> <?php echo ucwords($str['bp_fname'].' '.$str['bp_mname'].' '.$str['bp_lname']);?> </div>
										<div class="col-md-12" style="margin-bottom: 5px;"> <?php echo $str['bp_email'];?> </div>
										<div class="col-md-12" style="margin-bottom: 5px;"> <?php echo $str['bp_mobile_no'];?> </div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12 admin-grid" id="grid-1" style="margin-top:30px;border: 0px solid rgba(0,0,0,.15);padding: 0;">
							<div class="panel panel-widget calendar-widget calendar-alt" id="p02">
								<div class="panel-heading ui-sortable-handle" style="background: #b70021;color: #fff;font-weight: 800;letter-spacing: 1px;">
									<span class="panel-title"> Communication Link</span>
								</div>
								<?php
									$school = $con->query("select bp_crop_name, (select bp_crop_name from basic_profile where bp_id = bis.bis_ngo_id) as ngo, (select CONCAT(bp_fname, bp_lname) from basic_profile where bp_id = bis.bis_vol_id) as vol from basic_profile as bp join basic_other_info_school as bis on bp.bp_unique_id = bis.bis_bp_unique_id where bp_id = $bp_id ");
									$scl = mysqli_fetch_array($school);
								?>
								<div class="panel-body" style="color:#364150;font-size:14px;margin-top:20px;margin-bottom:20px;">
									<div class="boxs_comm">
										<p><?php echo ucwords($scl['bp_crop_name']); ?></p>
									</div>
									<div class="boxs_comm1"><p><i class="fa fa-chevron-right" aria-hidden="true"></i></p></div>
									
									<?php  
										if($scl['vol'] != ""){
									?>
										<div class="boxs_comm"><p><?php echo ucwords($scl['vol']); ?></p></div>
										<div class="boxs_comm1"><p><i class="fa fa-chevron-right" aria-hidden="true"></i></p></div>
									<?php }?>
									
									
									<?php 
										if($scl['ngo'] != ""){
									?>
										<div class="boxs_comm"><p><?php echo ucwords($scl['ngo']); ?></p></div>
									<?php }?>
								</div>
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
	$(".nav_dashboard").addClass('active_head');
});	

function getprojectstatus(proj_id,user_id){
	$.ajax({
		type:"post",
		data:"proj_id="+proj_id+"&user_id="+user_id, 
		url:"user_data.php?call=getprojectstatus",
		success:function(msg){
			//alert(msg);
			$("#product_status").html(msg);
			$(".prstatus").css("display","block");
		}
	});
}

function getpro_st_school(proj_id,user_id){
	$.ajax({
		type:"post",
		data:"proj_id="+proj_id+"&user_id="+user_id, 
		url:"user_data.php?call=getpro_st_school",
		success:function(msg){
			//alert(msg);
			$("#product_status").html(msg);
			$(".prstatus").css("display","block");
		}
	});

}

</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>