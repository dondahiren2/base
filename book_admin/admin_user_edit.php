<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<?php include("header.php");
	  include("../config.php");
	  if($_SESSION['uname'] == ""){
		header('location:index.php');
	  }
?>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.php">
			DIANA
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
	<?php include("menu.php"); ?>
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
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="ad_user_list.php">Admin User List</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="admin_user.php">Admin Details</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
<?php //date('m/d/y', strtotime($date));
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$spre = $con->query("select * from admin_user where ad_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
?>

				<div class="col-md-6 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> User Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return myFunction()" id="myForm" action="ad_data.php?call=edit_admin" method="post"  enctype="multipart/form-data">
								<div class="form-body">
									<input type="hidden" id="id" value="<?php echo $r['ad_id']; ?>" name="id">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="fname" value="<?php echo $r['ad_fname']; ?>" name="fname">
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="lname" value="<?php echo $r['ad_lname']; ?>" name="lname">
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="email" value="<?php echo $r['ad_email']; ?>" name="email">
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="password" class="form-control" id="pass" value="" name="pass">
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="password" class="form-control" id="repass" value="" name='repass'>
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="type" name="type">
											<option value="">Select Type</option>
											<option value="Head">Head</option>
											<option value="Sub Admin">Sub Admin</option>
											<option value="Admin">Admin</option>
										</select>
										<label for="form_control_1"><label>
									</div>
									<div class="form-group form-md-line-input">
										<input type="file" id="file" name="file" value="<?php echo $r['ad_profile']; ?>"/>
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="edit_admin" name="edit_admin" value="Submit" />
									<input type="clear" class="btn default" value="Cancel" />
								</div>
							</form>
						</div>
					</div>
				</div>
<?php	
	}
	}	else {
?>		

				<div class="col-md-6 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Add User Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return myFunction()" id="myForm" action="ad_data.php?call=save_admin" method="post"  enctype="multipart/form-data">
								<div class="form-body">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="fname" placeholder="Enter Your First Name" name='fname'>
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="lname" placeholder="Enter Your Last Name" name='lname'>
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="email" placeholder="Enter Your Email" name='email'>
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="password" class="form-control" id="pass" placeholder="Enter Password" name='pass'>
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="password" class="form-control" id="repass" placeholder="Re-Enter Password" name='repass'>
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="type" name='type'>
											<option value="">Select Type</option>
											<option value="Head">Head</option>
											<option value="Sub Admin">Sub Admin</option>
											<option value="Admin">Admin</option>
										</select>
										<label for="form_control_1"><label>
									</div>
									<div class="form-group form-md-line-input">
										<input type="file" id="file" name="file" />
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="add_admin" name="add_admin" value="Submit" />
									<button type="clear" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
<?php
	}
?>
				
			</div>
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
<?php include('footer.php'); ?>

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
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
 var rough_enter1 = 0;
 $(document).ready(function() {
	var options = { 
    beforeSend: function() {
        $("#progress").show(); 
        $("#bar").width('0%');
        $("#message").html("");
        $("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%'); 
    },
    success: function() {
        $("#bar").width('100%');
        $("#percent").html('100%');
    },
    complete: function(response) {
		var res = response.responseText;
		if(res == 1){
			alert("Upload Document Successfully");
		} else if(res == 9){
			alert("Check photo extensions only PNG, JPG, JPEG and file size maximum 1MB");
		} else if(res == 5){
			alert("Select Photo.");
		} else {
			alert("Try Again");
		}
    
	},
    error: function() {
        alert("<font color='red'> ERROR: unable to upload files</font>");
    }
}; 
 
		$("#myForm").ajaxForm(options);

	/*	
	$("#add_admin").on('click', function(){
				alert("0");
				if(document.getElementById("fname").value == "")
				{
					alert("Enter First Name");
				}
				else if(document.getElementById("lname").value == "")
				{
					alert("Enter Last Name");
				}
				else if(document.getElementById("email").value == "")
				{
					alert("Enter Email");
				}
				else if(document.getElementById("pass").value == "")
				{
					alert("Enter Password");
				}
				else if(document.getElementById("repass").value == "")
				{
					alert("Re-Enter Password");
				}
				else if(document.getElementById("type").value == "")
				{
					alert("Enter Type");
				}
				
				else
				{
				var fname = document.getElementById('fname').value;
				var lname = document.getElementById('lname').value;
				var email = document.getElementById('email').value;
				var pass = document.getElementById('pass').value;
				var type = document.getElementById('type').value;
				
				if(requ && requ.readyState != 4)
				{
				requ.abort();
				}
				
				var file_data = $('#file').prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', file_data);
				requ = $.ajax({
					type:"POST",
					data:"fname="+fname+"&lname="+lname+"&email="+email+"&pass="+pass+"&type="+type+"&form_data"+form_data,
					url:"ad_data.php?call=save_admin",
					success: function(html){
						alert(html);
						if(html == 1){
							alert("Insert Successfully.");
							document.getElementById('fname').value = '';
							document.getElementById('lname').value = '';
							document.getElementById('email').value = '';
							document.getElementById('pass').value = '';
							document.getElementById('repass').value = '';
							document.getElementById('type').value = '';
						}else
						{
							alert("Try Again.");
						}	
					}
				});
				}
    });	
	
	$("#edit_admin").on('click', function(){
		alert("0");
				var fname = document.getElementById('fname').value;
				var lname = document.getElementById('lname').value;
				var email = document.getElementById('email').value;
				var pass = document.getElementById('pass').value;
				var type = document.getElementById('type').value;
				var id = document.getElementById('id').value;
	
				if(requ && requ.readyState != 4)
				{
				requ.abort();
				}
				requ = $.ajax({
					type:"POST",
					data:"fname="+fname+"&lname="+lname+"&email="+email+"&pass="+pass+"&type="+type+"&id="+id,
					url:"ad_data.php?call=edit_admin",
					success: function(html){
						alert(html);
						if(html == 1){
							alert("Update Successfully.");
							document.getElementById('fname').value = '';
							document.getElementById('lname').value = '';
							document.getElementById('email').value = '';
							document.getElementById('pass').value = '';
							document.getElementById('repass').value = '';
							document.getElementById('type').value = '';
						}else
						{
							alert("Try Again.");
						}	
					}
				});
					
    });
	*/
 });
 function myFunction(){
				if(document.getElementById("fname").value == "")
				{
					alert("Enter First Name");
				}
				else if(document.getElementById("lname").value == "")
				{
					alert("Enter Last Name");
				}
				else if(document.getElementById("email").value == "")
				{
					alert("Enter Email");
				}
				else if(document.getElementById("pass").value == "")
				{
					alert("Enter Password");
				}
				else if(document.getElementById("repass").value == "")
				{
					alert("Re-Enter Password");
				}
				else if(pass !== repass){
					alert("Enter rigth confirm password");
				}
				else if(document.getElementById("type").value == "")
				{
					alert("Enter Type");
				} else {
				var atpos = document.getElementById("email").value.indexOf("@");
				var dotpos = document.getElementById("email").value.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("email").value.length) {
					alert("Not a valid e-mail address");
					return false;
				}else {
				return true;
				}				
		}
	}
	
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>