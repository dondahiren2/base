<?php
	include('../config.php');
	
	$bp_ref_id = isset($_SESSION['bp_id']) ? $_SESSION['bp_id'] : '';
	$bp_tal_id = isset($_SESSION['bp_tal_id']) ? $_SESSION['bp_tal_id'] : '';
	$bp_user_type = isset($_SESSION['bp_user_type']) ? $_SESSION['bp_user_type'] : '';
	$bp_sub_user_type = isset($_SESSION['bp_sub_user_type']) ? $_SESSION['bp_sub_user_type'] : '';
	$bp_unique_id = isset($_SESSION['bp_unique_id']) ? $_SESSION['bp_unique_id'] : '';
	$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
	if($bp_tal_id == ""){
		session_destroy();
		echo "<script>window.location = '".$site_url."'</script>";
	}

	$pro_pic = '';
	$bp_id = 0;
	$bk_status = 0;
	$bp_micro_website = 0;
	$bp_micro_weburl = '';
	$ngo_sel = $con->query("SELECT bp_id, bk_status, bk_brand_logo, bk_profile, bp_micro_website, bp_micro_weburl FROM basic_profile as bp left join basic_kyc as bk on bp.bp_unique_id = bk.bk_bp_unique_id WHERE bp_tal_id = '$bp_tal_id' and bp_user_type = '$bp_user_type' and  bp_call_int_status = 1 and bp_status IN(0,1,2,4) ");
	if(mysqli_num_rows($ngo_sel) > 0){
		$r = mysqli_fetch_assoc($ngo_sel);
		$bp_id = $r['bp_id'];
		$bp_micro_website = $r['bp_micro_website'];
		$bp_micro_weburl = $r['bp_micro_weburl'];
		$bk_status = $r['bk_status'];
		if($bp_user_type == 10){
			if($r['bk_brand_logo']){
				$pro_pic = $cdn_path.$r['bk_brand_logo'];
			}
		} else if($bp_user_type == 12){
			if($r['bk_brand_logo']){
				$pro_pic = $cdn_path.$r['bk_brand_logo'];
			}
		} else if($bp_user_type == 11){
			if($r['bk_profile']){
				$pro_pic = $cdn_path.$r['bk_profile'];
			}
		} else if($bp_user_type == 13){
			if($r['bk_profile']){
				$pro_pic = $cdn_path.$r['bk_profile'];
			}
		}
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
</head>


<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="response_gif"></div>
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">

		<div class="page-logo">
			<a href="index" style="margin-top:10px;">
				<p><img src="<?php echo $site_url.$logo_path ?>" height="50" width="110"/></p>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>
		
		<div class="top-menu" style="margin-top:10px;">
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<?php 
						if($pro_pic == ""){
					?>
							<img src="<?php echo $site_url ?>img/none.jpg" class="img-responsive" style="height:30px;width:30px;border-radius:50%!important;">
					<?php
						} else{
					?>
						 <img alt="" class="img-circle" src="<?php echo $pro_pic ?>" style="height:30px;width:30px;border-radius:30%;"/>
					<?php
						}
					?>
					<span class="username username-hide-on-mobile">
						<?php 
							echo $username;
						?>
					</span>
					<i class="fa fa-angle-down"></i>
					</a>
				</li>
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="<?php echo $user_url ?>logout" class="dropdown-toggle"> <i class="icon-logout"></i></a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- END HEADER -->
<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
		<div style="text-align: center;margin: 0;" class="row">
			<div class="col-md-12">
			<a class="author-img" href="#" style="margin-bottom:5px;margin-top:10px;">
			<?php
				if($pro_pic == ""){
			?>
				<img src="<?php echo $site_url ?>img/none.jpg" class="img-responsive" style="width:125px;">
			<?php
				} else {
			?>
				<img src="<?php echo $pro_pic; ?>" class="img-responsive" style="width:125px;">
			<?php
				}
			?>
            </a>
			</div>
			
			<div class="col-md-12">
				<div style="color:#fff;font-size:14px;font-weight:800;border-bottom: 1px dotted #ab8c8c;"><?php echo strtoupper($username); ?></div>
			</div>
			
			<div class="col-md-12">
				<div style="color:#fff;font-size:14px;padding:10px;">
					Address
				</div>
			</div>
		</div>
		
		
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			
			
			<?php
				if($bp_user_type == 10){
			?>
				<li class="start nav_dashboard">
					<a href="<?php echo $user_url ?>index">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="start nav_admin">
					<a href="<?php echo $user_url ?>admin_profile/<?php echo $bp_id ?>">
					<i class="icon-list"></i>
					<span class="title">Admin Profile</span>
					</a>
				</li>
				<li class="start nav_personal">
					<a href="ngo_edit">
					<i class="icon-list"></i>
					<span class="title">Personal Profile</span>
					</a>
				</li>
				<li class="start nav_team_member">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Team Member</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="invite_master">
					<i class="icon-list"></i>
					<span class="title">Invite</span>
					</a>
				</li>
				<li class="start nav_volunteer_management">
					<a href="ngo_ref_volunteer">
					<i class="icon-list"></i>
					<span class="title">Volunteer Management</span>
					</a>
				</li>
				<li class="start nav_school_management">
					<a href="ngo_ref_school">
					<i class="icon-list"></i>
					<span class="title">School Management</span>
					</a>
				</li>
				<li class="start nav_student_management">
					<a href="ngo_ref_student">
					<i class="icon-list"></i>
					<span class="title">Students List</span>
					</a>
				</li>
				<li class="start nav_project_management">
					<a href="project_master">
					
					<i class="icon-list"></i>
					<span class="title">Project Management</span>
					</a>
				</li>
				<li class="start nav_sponsor">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Sponsored Project</span>
					</a>
				</li>
				<li class="start nav_task_management">
					<a href="task_management">
					<i class="icon-list"></i>
					<span class="title">Task Management</span>
					</a>
				</li>
				<li class="start nav_web_management">
					<a href="web_management">
					<i class="icon-list"></i>
					<span class="title">Web Management</span>
					</a>
				</li>
				<li class="start nav_specific_request">
					<a href="specific">
					<i class="icon-list"></i>
					<span class="title">Specific Request</span>
					</a>
				</li>
				<li class="start nav_helpdesk">
					<a href="helpdesk">
					<i class="icon-list"></i>
					<span class="title">HelpDesk</span>
					</a>
				</li>
				
			<?php
				} else if($bp_user_type == 11){
			?>
				 <li class="start nav_dashboard">
					<a href="<?php echo $user_url ?>index">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="start nav_admin">
					<a href="<?php echo $user_url ?>vol_profile/<?php echo $bp_id ?>">
					<i class="icon-list"></i>
					<span class="title">My Profile</span>
					</a>
				</li>
				<li class="start nav_personal">
					<a href="ngo_edit">
					<i class="icon-list"></i>
					<span class="title">Work Profile</span>
					</a>
				</li>
				<li class="start nav_team_member">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Comunication Link</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Achivement</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Invite</span>
					</a>
				</li> 
				<li class="start nav_school_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">School Management</span>
					</a>
				</li>
				<li class="start nav_student_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Students Management</span>
					</a>
				</li>
				<li class="start nav_project_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Project Management</span>
					</a>
				</li>
				<li class="start nav_sponsor">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Specific Request</span>
					</a>
				</li>
				<li class="start nav_task_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Task Management</span>
					</a>
				</li>
				<li class="start nav_helpdesk">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">HelpDesk</span>
					</a>
				</li>
				<li class="start nav_helpdesk">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Request for a Project</span>
					</a>
				</li>
				<li class="start nav_helpdesk">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Blog</span>
					</a>
				</li>
				
			<?php 
				} else if($bp_user_type == 12){
			?>
				 <li class="start nav_dashboard">
					<a href="<?php echo $user_url ?>index">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="start nav_admin">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Admin Profile</span>
					</a>
				</li>
				<li class="start nav_profile">
					<a href="<?php echo $user_url ?>scl_profile/<?php echo $bp_id ?>">
					<i class="icon-list"></i>
					<span class="title">School Profile</span>
					</a>
				</li>
				<li class="start nav_personal">
					<a href="<?php echo $user_url ?>team_member_list">
					<i class="icon-list"></i>
					<span class="title">Team Profile</span>
					</a>
				</li>
				<li class="start nav_team_member">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Students List</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Leaving Certificate</span>
					</a>
				</li>
				<li class="start nav_project_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Project Management</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Student Attendance</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Result</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Student Helth Records</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Student Achedmic Records</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Achivement</span>
					</a>
				</li>
				<li class="start nav_sponsor">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Specific Request</span>
					</a>
				</li>
				<li class="start nav_task_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Task Management</span>
					</a>
				</li>
				<?php 
					if($bp_micro_website == 1){
				?>
				<li class="start nav_micro_site">
					<a href="<?php echo $user_url ?>micro_site">
					<i class="icon-list"></i>
					<span class="title">Micro Web Management</span>
					</a>
				</li>
				<?php	
					}
				?>
				
				<li class="start nav_helpdesk">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">HelpDesk</span>
					</a>
				</li>
				
			<?php 
				}  else if($bp_user_type == 13){
			?>
				 <li class="start nav_dashboard">
					<a href="<?php echo $user_url ?>index">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="start nav_admin">
					<a href="<?php echo $user_url ?>vol_profile/<?php echo $bp_id ?>">
					<i class="icon-list"></i>
					<span class="title">My Profile</span>
					</a>
				</li>
				<li class="start nav_personal">
					<a href="ngo_edit">
					<i class="icon-list"></i>
					<span class="title">Work Profile</span>
					</a>
				</li>
				<li class="start nav_team_member">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Comunication Link</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Achivement</span>
					</a>
				</li>
				<li class="start nav_invite_master">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Invite</span>
					</a>
				</li> 
				<li class="start nav_school_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">School Management</span>
					</a>
				</li>
				<li class="start nav_student_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Students Management</span>
					</a>
				</li>
				<li class="start nav_project_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Project Management</span>
					</a>
				</li>
				<li class="start nav_sponsor">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Specific Request</span>
					</a>
				</li>
				<li class="start nav_task_management">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Task Management</span>
					</a>
				</li>
				<li class="start nav_helpdesk">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">HelpDesk</span>
					</a>
				</li>
				<li class="start nav_helpdesk">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Request for a Project</span>
					</a>
				</li>
				<li class="start nav_helpdesk">
					<a href="#">
					<i class="icon-list"></i>
					<span class="title">Blog</span>
					</a>
				</li>
				
			<?php 
				} 
			?>
			
			</ul>
		</div>
	</div>
	
	<div class="page-content-wrapper">
		<div class="page-content">
			<script type="text/javascript">
				function isNumber(evt) {
					var iKeyCode = (evt.which) ? evt.which : evt.keyCode
					if (iKeyCode != 43 && iKeyCode != 46 && iKeyCode != 45 && iKeyCode > 37 && iKeyCode > 39 && (iKeyCode < 48 || iKeyCode > 57) && (iKeyCode < 40 || iKeyCode > 41)) {	
						return false;
					} else {
						return true;
					}    
				}	
			</script>