<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include("../config.php");
	  if($_SESSION['uname'] == ""){
		header('location:index.php');
	  }
?>

<body class="page-header-fixed page-quick-sidebar-over-content ">
		<?php include('top_naigation.php'); ?>

<div class="clearfix">
</div>

<div class="page-container">
	<?php include("menu.php"); ?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<?php include('theme_panel.php'); ?>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Category Details</a>
					</li>
				</ul>
			</div>
			<div class="row">
			<div class="col-md-3"></div>
<?php
	if(isset($_GET['pc_id'])){
		$pc_id = $_GET['pc_id'];
		$mast = $con->query("select * from project_cat where pc_id = '$pc_id'");
		if(mysqli_num_rows($mast) > 0){
			$mr = mysqli_fetch_array($mast);
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Master Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" id="primeform" action="ad_data.php?call=edit_proj_cate" method="post" >
								<input type="hidden" id="pc_id" name="pc_id" value="<?php echo $pc_id ; ?>" />
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Project category Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" value="<?php echo $mr['pc_name']; ?>" id="p_name" name="p_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
								<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
									<div class="form-actions noborder" style="margin-top:10px;">
										<input type="submit" class="btn blue" id="edit_mast" name="edit_mast" value="Edit" />
										<a href="project_cate_list.php" class="btn default">List</a>	
									</div>
								</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php }}else{ ?>		
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Project Category Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" id="primeform" action="ad_data.php?call=add_proj_cate" method="post" >
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Project category Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" placeholder="Category Name" id="p_name" name="p_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
								<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
									<div class="form-actions noborder" style="margin-top:10px;">
										<input type="submit" class="btn blue" id="add_cate" name="add_cate" value="Add" />
										<a href="project_cate_list.php" class="btn default">List</a>	
									</div>
								</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php } ?>	
<div class="col-md-3"></div>	
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

<?php include("js.php"); ?>

<script type="application/javascript" >

 $(document).ready(function() {

	
 });

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>