<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include("../config.php");
	  if($_SESSION['uname'] == ""){
		header('location:index.php');
	  }
?>

<body class="page-header-fixed page-quick-sidebar-over-content ">

<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner">
		<div class="page-logo">
			<a href="index.php">
			Books For A Pourpose
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<?php include('top_naigation.php'); ?>
	</div>
</div>
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
						<a href="#">Helping Details</a>
					</li>
				</ul>
			</div>
			<div class="row">
<?php
	if(isset($_GET['id'])){
		$hlp_id = $_GET['id'];
		$hlp = $con->query("select * from start_helping where help_id = '$hlp_id'");
		if(mysqli_num_rows($hlp) > 0){
			$r = mysqli_fetch_array($hlp);
			/*if($r['proj_status'] == 0){
				$nm = "Unapprove";
			}else{
				$nm = "Approve";
			}*/
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Helping Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=edit_help" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
							<input type="hidden" id="hlp_id" name="hlp_id" value="<?php echo $hlp_id; ?>"/>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Help Title :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" value="<?php echo $r['help_title']; ?>" id="hlp_title" name="hlp_title" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<img src="<?php if($r['help_pic'] == "") echo $default_img; else echo $r['help_pic']; ?>" height="75" width="75" />
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="box">
											<input type="file" name="hlp_pic" id="hlp_pic" class="inputfile inputfile-6" />
												<label for="hlp_pic" class="nospace"><span id="reg_filenm"></span> 
													<strong>Upload Help Pic</strong>
												</label>
										</div>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<div class="form-actions noborder">
											<input type="submit" class="btn blue" id="edit_hlp" name="edit_hlp" value="Edit" />
											<a href="helping_list.php" class="btn default">List</a>	
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
								<span class="caption-subject bold uppercase">Helping Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=add_help" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Help Title :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" placeholder="Help Title" id="hlp_title" name="hlp_title" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<div class="box">
											<input type="file" name="hlp_pic" id="hlp_pic" class="inputfile inputfile-6" />
											<label for="hlp_pic" class="nospace"><span id="reg_filenm"></span> 
												<strong>Upload Help Pic</strong>
											</label>
										</div>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<div class="form-actions noborder">
											<input type="submit" class="btn blue" id="add_hlp" name="add_hlp" value="Add" />
											<a href="helping_list.php" class="btn default">List</a>	
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php }  ?>			
			</div>
		</div>
	</div>
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<?php include('quick_sidebar.php'); ?>
</div>
<?php include('footer.php'); ?>

<?php include("js.php"); ?>

<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
 var rough_enter1 = 0;
 $(document).ready(function() {
	
 });
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>