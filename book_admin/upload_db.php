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
<body class="page-header-fixed page-quick-sidebar-over-content " onload="dispimg();">
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
						<a href="ring_list.php">Ring List</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="ring.php">Ring Details</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-6 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Upload Database</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" id="myForm" action="ad_data.php?call=upload_db" method="post"  enctype="multipart/form-data">
								
								<div class="form-group form-md-line-input">
									<input type="file" id="file" name="file"/>
									<label for="form_control_1"></label>
									<span class="help-block"></span>
								</div>
								
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="upl_db" name="upl_db" value="Upload" />
								</div>
							</form>
						</div>
					</div>
				</div>
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
	
	/*$("#add_ring").on('click', function(){
				//alert("0");
				if(document.getElementById("ri_name").value == "")
				{
					alert("Enter Ring Name");
				}
				else if(document.getElementById("ri_size").value == "")
				{
					alert("Enter Ring Size");
				}
				else if(document.getElementById("ri_price").value == "")
				{
					alert("Enter Price");
				}
				else if(document.getElementById("ri_metal").value == "")
				{
					alert("Enter Metal");
				}
				else if(document.getElementById("ri_type").value == "")
				{
					alert("Re-Enter Ring Type");
				}
				
				else
				{
				var ri_name = document.getElementById('ri_name').value;
				var ri_size = document.getElementById('ri_size').value;
				var ri_price = document.getElementById('ri_price').value;
				var ri_metal = document.getElementById('ri_metal').value;
				var ri_type = document.getElementById('ri_type').value;
				
				if(requ && requ.readyState != 4)
				{
				requ.abort();
				}
				
				requ = $.ajax({
					type:"POST",
					data:"ri_name="+ri_name+"&ri_size="+ri_size+"&ri_price="+ri_price+"&ri_metal="+ri_metal+"&ri_type="+ri_type,
					url:"ad_data.php?call=save_ring",
					success: function(html){
						//alert(html);
						if(html == 1){
							alert("Insert Successfully.");
							window.location = "ring_list.php";
							document.getElementById('ri_name').value = '';
							document.getElementById('ri_size').value = '';
							document.getElementById('ri_price').value = '';
							document.getElementById('ri_metal').value = '';
							document.getElementById('ri_type').value = '';
						}else
						{
							alert("Try Again.");
						}	
					}
				});
				}
    });	
	
	$("#edit_ring").on('click', function(){
		alert("0");
				if(document.getElementById("ri_name").value == "")
				{
					alert("Enter Ring Name");
				}
				else if(document.getElementById("ri_size").value == "")
				{
					alert("Enter Ring Size");
				}
				else if(document.getElementById("ri_price").value == "")
				{
					alert("Enter Price");
				}
				else if(document.getElementById("ri_metal").value == "")
				{
					alert("Enter Metal");
				}
				else if(document.getElementById("ri_type").value == "")
				{
					alert("Re-Enter Ring Type");
				}
				
				else
				{
				var ri_name = document.getElementById('ri_name').value;
				var ri_size = document.getElementById('ri_size').value;
				var ri_price = document.getElementById('ri_price').value;
				var ri_metal = document.getElementById('ri_metal').value;
				var ri_type = document.getElementById('ri_type').value;
				var id = document.getElementById('id').value;
				
				if(requ && requ.readyState != 4)
				{
				requ.abort();
				}
				
				requ = $.ajax({
					type:"POST",
					data:"ri_name="+ri_name+"&ri_size="+ri_size+"&ri_price="+ri_price+"&ri_metal="+ri_metal+"&ri_type="+ri_type+"&id="+id,
					url:"ad_data.php?call=edit_ring",
					success: function(html){
						//alert(html);
						if(html == 1){
							alert("Update Successfully.");
							window.location = "ring_list.php";
							document.getElementById('ri_name').value = '';
							document.getElementById('ri_size').value = '';
							document.getElementById('ri_price').value = '';
							document.getElementById('ri_metal').value = '';
							document.getElementById('ri_type').value = '';
						}else
						{
							alert("Try Again.");
						}	
					}
				});
				}
					
    });*/
	
 });
 
function dispimg(){
		var ri_id = document.getElementById("id").value
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"ri_id="+ri_id,
			url:"ad_data.php?call=dispimg",
			success: function(msg){
				$("#disimg").html(msg);
			}
		});
}
 
 function myFunction(){
				//alert("0");
				if(document.getElementById("ri_name").value == "")
				{
					alert("Enter Ring Name");
				}
				else if(document.getElementById("ri_size").value == "")
				{
					alert("Enter Ring Size");
				}
				else if(document.getElementById("ri_price").value == "")
				{
					alert("Enter Price");
				}
				else if(document.getElementById("ri_metal").value == "")
				{
					alert("Enter Metal");
				}
				else if(document.getElementById("ri_type").value == "")
				{
					alert("Re-Enter Ring Type");
				} 
	}
function deleteid(id){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id,
			url:"ad_data.php?call=ring_img_delete",
			success: function(html){
				if(html == 1){
					
				} else {
					//window.location = "ring.php";
					dispimg();
				}	
			}
		});
}
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>