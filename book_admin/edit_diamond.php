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
	  include("config.php");
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
						<a href="diamond_list.php">Diamond List</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="edit_diamond.php">Diamond Details</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
<?php //date('m/d/y', strtotime($date));
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$spre = $con->query("select * from stock where st_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
?>

				<div class="col-md-6 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update Ring Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" id="myForm" method="post">
								<div class="form-body">
									<input type="hidden" id="id" value="<?php echo $r['st_id']; ?>">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="di_id" value="<?php echo $r['DiamondID']; ?>">
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="lab" value="<?php echo $r['LabTitle']; ?>">
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="shape">
											<option value="">Select Shape</option>
											<option value="Emerald">Emerald</option>
											<option value="Princess">Princess</option>
											<option value="Round"> Round</option>
											<option value="Cushion">Cushion</option>
											<option value="Pear">Pear</option>
											<option value="Oval">Oval</option>
											<option value="Radiant">Radiant</option>
											<option value="Asscher">Asscher</option>
											<option value="Marquise">Marquise</option>
											<option value="Heart">Heart</option>          
											
										</select>
										<label for="form_control_1"><label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="color">
											<option value="">Select Color</option>
											<option value="D">D</option>
											<option value="E">E</option>
											<option value="F">F</option>
											<option value="G">G</option>
											<option value="H">H</option>
											<option value="I">I</option>
											<option value="J">J</option>
											<option value="K">K</option>
											<option value="L">L</option>
											<option value="M">M</option>
										</select>
										<label for="form_control_1"><label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="clarity">
											<option value="">Select Clarity</option>
											<option value="I1">I1</option>
											<option value="SI2">SI2</option>
											<option value="SI1">SI1</option>
											<option value="VS2">VS2</option>
											<option value="VS1">VS1</option>
											<option value="VVS1">VVS1</option>
											<option value="VVS2">VVS2</option>
											<option value="IF">IF</option>
										</select>
										<label for="form_control_1"><label>
									</div>
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="weight" value="<?php echo $r['Weight']; ?>">
										<label for="form_control_1"></label>
										<span class="help-block"></span>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="cut">
											<option value="">Select Cut</option>
											<option value="Good">Good</option>
											<option value="Very Good">Very Good</option>
											<option value="Ideal">Ideal</option>
											
										</select>
										<label for="form_control_1"><label>
									</div>
								</div>
								<div class="form-actions noborder">
									<button type="button" class="btn blue" id="edit_diamond" name="">Submit</button>
									<button type="clear" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
<?php	
	}
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
	
	$("#edit_diamond").on('click', function(){
		//alert("0");
				if(document.getElementById("di_id").value == "")
				{
					alert("Enter Ring Name");
				}
				else if(document.getElementById("lab").value == "")
				{
					alert("Enter Ring Size");
				}
				else if(document.getElementById("shape").value == "")
				{
					alert("Enter Price");
				}
				else if(document.getElementById("color").value == "")
				{
					alert("Enter Metal");
				}
				else if(document.getElementById("clarity").value == "")
				{
					alert("Re-Enter Ring Type");
				}
				else if(document.getElementById("weight").value == "")
				{
					alert("Re-Enter Ring Type");
				}
				else if(document.getElementById("cut").value == "")
				{
					alert("Re-Enter Ring Type");
				}
				
				else
				{
				var di_id = document.getElementById('di_id').value;
				var lab = document.getElementById('lab').value;
				var shape = document.getElementById('shape').value;
				var color = document.getElementById('color').value;
				var clarity = document.getElementById('clarity').value;
				var weight = document.getElementById('weight').value;
				var cut = document.getElementById('cut').value;
				var id = document.getElementById('id').value;
				
				if(requ && requ.readyState != 4)
				{
				requ.abort();
				}
				
				requ = $.ajax({
					type:"POST",
					data:"di_id="+di_id+"&lab="+lab+"&shape="+shape+"&color="+color+"&clarity="+clarity+"&weight="+weight+"&cut="+cut+"&id="+id,
					url:"ad_data.php?call=edit_diamond",
					success: function(html){
						//alert(html);
						if(html == 1){
							alert("Update Successfully.");
							document.getElementById('di_id').value = '';
							document.getElementById('lab').value = '';
							document.getElementById('shape').value = '';
							document.getElementById('color').value = '';
							document.getElementById('clarity').value = '';
							document.getElementById('weight').value = '';
							document.getElementById('cut').value = '';
						}else
						{
							alert("Try Again.");
						}	
					}
				});
				}
					
    });
	
 });
 
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>