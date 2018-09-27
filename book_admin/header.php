<?php
	include('../config.php');
	$user_id = isset($_SESSION['ad_id']) ? $_SESSION['ad_id'] : '';
	$bp_tal_id = isset($_SESSION['bp_tal_id']) ? $_SESSION['bp_tal_id'] : '';
	$uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : ''; 
	$u_nm = isset($_SESSION['username']) ? $_SESSION['username'] : ''; 
	$bp_user_type = isset($_SESSION['bp_user_type']) ? $_SESSION['bp_user_type'] : '';  
	$bp_unique_id = isset($_SESSION['bp_unique_id']) ? $_SESSION['bp_unique_id'] : '';  
	$bp_sub_user_type = isset($_SESSION['bp_sub_user_type']) ? $_SESSION['bp_sub_user_type'] : '';  
	
	$ngo_sel = $con->query("SELECT bp_id, bk_status, bk_brand_logo, bk_profile FROM basic_profile as bp left join basic_kyc as bk on bp.bp_unique_id = bk.bk_bp_unique_id WHERE bp_tal_id = '$bp_tal_id' and bp_user_type = '$bp_user_type' and bp_status = 1 ");
	if(mysqli_num_rows($ngo_sel) > 0){
		$r = mysqli_fetch_assoc($ngo_sel);
		$bp_id = $r['bp_id'];
		$bk_status = $r['bk_status'];
		if($bp_user_type == 10){
			if($r['bk_brand_logo']){
				$pro_pic = $cdn_path.$r['bk_brand_logo'];
			}
		} else if($bp_user_type == 11){
			if($r['bk_profile']){
				$pro_pic = $cdn_path.$r['bk_profile'];
			}
		}
	}

	if($uname == ""){
		echo "<script>window.location = '$site_url'; </script>";
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Touch A Life</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="<?php echo $admin_url?>livecss.js" type="text/javascript"></script>
 
<link href="<?php echo $admin_url?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $admin_url?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $admin_url?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $admin_url?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo $admin_url?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo $admin_url?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $admin_url?>assets/global/css/custom_css.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $admin_url?>assets/global/css/new_custome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $admin_url?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo $admin_url?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $admin_url?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" href="<?php echo $admin_url?>css/custome.css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="https://touchalife.hk/images/favicon.png"/>
<style>

.dropdown {
    display:inline-block;
    margin-left:20px;
    padding:10px;
}


.glyphicon-bell {
    font-size:1.5rem;
}

.notifications {
	min-width:420px; 
}
  
.notifications-wrapper {
	overflow:auto;
	max-height:250px;
}
    
.menu-title {
	color:#ff7788;
	font-size:1.5rem;
	display:inline-block;
}
 
.glyphicon-circle-arrow-right {
	margin-left:10px;     
}
  
   
.notification-heading, .notification-footer  {
 	padding:2px 10px;
}
      
        
.dropdown-menu.divider {
  margin:5px 0;          
  }

.item-title {  
	 font-size:1.3rem;
	 color:#000;
}

.notifications a.content {
	 text-decoration:none;
	 background:#ccc;
 }
    
.notification-item {
	 padding:10px;
	 margin:5px;
	 background:#fbfafa;
	 border-radius:4px;
 }

</style>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content ">
	<div class="response_gif"></div>
	<div class="page-header navbar navbar-fixed-top">
		<div class="page-header-inner">
			<div class="page-logo">
				<a href="<?php echo $admin_url?>dashboard" style="margin-top:10px;">
					<p><img src="<?php echo $site_url.$logo_path ?>" height="50" width="110"/></p>
				</a>
				<div class="menu-toggler sidebar-toggler hide"></div>
			</div>
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>
			<div class="top-menu" style="margin-top:10px;">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="<?php echo $site_url.$pro_pic ?>" style="height:30px;width:30px;border-radius:50%!important;"/>
						<span class="username username-hide-on-mobile">
							<?php 
								echo $u_nm;
							?>
						</span>
						<i class="fa fa-angle-down"></i>
						</a>
					</li>
					<li class="dropdown dropdown-quick-sidebar-toggler">
						<div class="dropdown">
							<a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#" style="background: transparent !important;">
								<i class="glyphicon glyphicon-bell" style="margin-top: 15px;font-size: 20px;"></i>
								<span id="notificationCount" style="background: #b70021;color: #fff;padding: 2px;width: 25px;height: 25px;position: absolute;border-radius: 70px !important;line-height: 21px;text-align: center;font-size: 11px;margin-top: -48px;margin-left: 10px;">0</span>
							</a>
						  
							<ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">
								<div class="notification-heading" ><h4 class="menu-title" style="padding: 0;margin: 0;">Notifications</h4><h4 style="display:none;" class="menu-title pull-right">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4></div>
								<li class="divider"></li>
								<div class="notifications-wrapper" id="notifications-wrapper"></div>
							</ul>
						</div>
					</li>
					<li class="dropdown dropdown-quick-sidebar-toggler">
						<a href="<?php echo $admin_url?>logout" class="dropdown-toggle"><i class="icon-logout"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	
	
<div class="page-container">
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start nav_dashboard">
					<a href="<?php echo $admin_url?>dashboard">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="start">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Admin Profile</span>
					</a>
				</li>
				<li class="start">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Organization Profile</span>
					</a>
				</li>
				<li class="start nav_admin_user_list">
					<a href="<?php echo $admin_url?>admin_user_list">
					<i class="icon-list"></i>
					<span class="title">Team Members</span>
					</a>
				</li>
				<li class="start">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">User Rights MGNT</span>
					</a>
				</li>
				<li class="start nav_registered_members">
					<a href="<?php echo $admin_url?>registered_members">
					<i class="icon-list"></i>
					<span class="title">Registered Members</span>
					</a>
				</li>
				<li class="start nav_invite_members">
					<a href="<?php echo $admin_url?>invite_master">
					<i class="icon-list"></i>
					<span class="title">Invite Members</span>
					</a>
				</li>
				
				<li class="start nav_contact">
					<a href="<?php echo $admin_url?>contact">
					<i class="icon-list"></i>
					<span class="title">Contact List</span>
					</a>
				</li> 
				<li class="start nav_product_master">
					<a href="<?php echo $admin_url?>product_service_master">
					<i class="icon-list"></i>
					<span class="title">Product & Service Master</span>
					</a>
				</li>
				<li class="start nav_project_master">
					<a href="<?php echo $admin_url?>project_master">
					<i class="icon-list"></i>
					<span class="title">Project Master</span>
					</a>
				</li>
				<li class="start nav_task_management">
					<a href="<?php echo $admin_url?>task_management">
					<i class="icon-list"></i>
					<span class="title">Task Management</span>
					</a>
				</li>
				<li class="start nav_legal_management">
					<a href="<?php echo $admin_url?>legal_management">
					<i class="icon-list"></i>
					<span class="title">Legal & Certificate Manag</span>
					</a>
				</li>
				<li class="start nav_web_management">
					<a href="<?php echo $admin_url?>web_management">
					<i class="icon-list"></i>
					<span class="title">Web Management</span>
					</a>
				</li>
				<li class="start nav_technical_management">
					<a href="<?php echo $admin_url?>technical_management">
					<i class="icon-list"></i>
					<span class="title">Technical Management</span>
					</a>
				</li>
				<li class="start nav_email_management">
					<a href="<?php echo $admin_url?>email_management">
					<i class="icon-list"></i>
					<span class="title">E-Mail & SMS Templates</span>
					</a>
				</li>
				<li class="start nav_email_campaign">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">E-Mail Campaign (To Send)</span>
					</a>
				</li>
			 	<li class="start nav_special_request">
					<a href="<?php echo $admin_url?>special_request">
					<i class="icon-list"></i>
					<span class="title">Special Requests</span>
					</a>
				</li>
			 	<li class="start nav_helpdesk">
					<a href="<?php echo $admin_url?>helpdesk">
					<i class="icon-list"></i>
					<span class="title">HelpDesk Inquiries</span>
					</a>
				</li>
			 	<li class="start">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Accounting</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="page-content-wrapper">
		<div class="page-content">
			