<!DOCTYPE html>

<html lang="en">

<?php include("header.php");
	  include("../config.php");
?>

<body class="page-header-fixed page-quick-sidebar-over-content ">

<div class="page-header navbar navbar-fixed-top">

	<div class="page-header-inner">
		
			<?php include('top_naigation.php'); ?>
	</div>
</div>
<div class="clearfix">
</div>
<div class="page-container">
	<?php include("ngo_menu.php"); ?>
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
						<a href="ad_user_list.php">Admin User List</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="admin_user.php">Admin Details</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php //date('m/d/y', strtotime($date));
		if(isset($_GET['id'])){
		$id = $_GET['id'];
		$spre = $con->query("select * from trustee_register where trustee_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			$ng_id = $r['trustee_ngo_id'];
			$ng_nm = $con->query("select * from ngo_register where ngo_id = '$ng_id'");
			$r1 = mysqli_fetch_array($ng_nm);
?>

				<div class="col-md-12">
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update Trustee Details</span>
							</div>
						</div>
				<div class="portlet-body form">
				<form role="form" onsubmit="return trust_submit()" id="ngoform" action="user_data.php?call=edit_trustee" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				
				<section>
					<div class="row">
						<div class="col-md-6">
							<input type="hidden" id="t_id" name="t_id" value="<?php echo $r['trustee_id'];  ?>" />
							<div class="form-group">
								<label class="lableedit">NGO Name :</label>
								<Select class="form-control" id="sel_ngo" name="t_ngnm">
									<option><?php echo $r1['ngo_name']; ?></option>
								</select>
							</div>
						</div>
						<div class="col-md-6" style="margin-top:25px;">
							<div class="form-group">
								<input type="text" class="form-control required" id="t_fnm" value="<?php echo $r['trustee_fnm']; ?>" name="t_fnm"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="t_mnm" value="<?php echo $r['trustee_mnm']; ?>" name="t_mnm"> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="t_lnm" name="t_lnm" value="<?php echo $r['trustee_lnm']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="t_mno" value="<?php echo $r['trustee_mobile']; ?>" name="t_mno"> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="t_email" name="t_email" value="<?php echo $r['trustee_email']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="date" class="form-control required" id="t_dob" value="<?php echo $r['trustee_dob']; ?>" name="t_dob"> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group"> 
								<select class="form-control" name="t_type" id='t_type' style="margin-top: 12px;">
									<option><?php echo $r['trustee_type']; ?></option>
									<option>President</option>
									<option>Vice President</option>
									<option>Secretory</option>
									<option>Treasurer</option>
									<option>Members of the Committee</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group"> 
								<select class="form-control" name="t_gen" id='t_gen' style="margin-top: 12px;">
									<option><?php echo $r['trustee_gender']; ?></option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>
					</div>
				</section>
				
				<div class="form-actions noborder">
					<input type="submit" class="btn blue" id="edit_trustee" name="edit_trustee" value="Submit" />
					<input type="clear" class="btn default" value="Cancel"/>
				</div>
							</form>
						</div>
					</div>
				</div>
		<?php } } ?>
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
<script>
$(document).ready(function(){
	//alert("1");
	ngo_name();
});
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>