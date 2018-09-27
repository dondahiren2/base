<!DOCTYPE html>

<html lang="en">

<?php include("header.php");
	  include("../config.php");
?>

<body class="page-header-fixed page-quick-sidebar-over-content ">

<div class="page-header navbar navbar-fixed-top">

	<div class="page-header-inner">
		<div class="page-logo">
			<a href="index.php">
			<p>Books For A Purpose</p>
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
		$spre = $con->query("select * from ngo_intrested_area where area_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			$c_id = $r['work_country'];
			$c_nm = $con->query("select * from countries where id = $c_id");
			$rc = mysqli_fetch_array($c_nm);
			$s_id = $r['work_state'];
			$s_nm = $con->query("select * from states where id = $s_id");
			$rs = mysqli_fetch_array($s_nm);
			$ci_id = $r['work_city'];
			$ci_nm = $con->query("select * from cities where id = $ci_id");
			$rci = mysqli_fetch_array($ci_nm);
			$ng_id = $r['area_ngo_id'];
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
				<form role="form" onsubmit="return area_submit()" id="ngoform" action="user_data.php?call=edit_area" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				
				<section>
					<div class="row">
						<div class="col-md-6">
							<input type="hidden" id="a_id" name="a_id" value="<?php echo $r['area_id'];  ?>" />
							<div class="form-group">
								<label class="lableedit">NGO Name :</label>
								<Select class="form-control" id="sel_ngo" name="a_ngnm">
									<option><?php echo $r1['ngo_name']; ?></option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="lableedit">Country :</label>
								<Select class="form-control" id="country" name="country" onchange="state_nm();">
									<option value="<?php echo $rc['id']; ?>"><?php echo $rc['name']; ?></option>
								<?php $co_nm = $con->query("select * from countries");
									while($rnm = mysqli_fetch_array($co_nm)){
								?>
									<option value="<?php echo $rnm['id']; ?>"><?php echo $rnm['name']; ?></option>
								<?php 
									}
								?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="lableedit">State :</label>
								<Select class="form-control" id="state" name="state" onchange="city_nm();">
									<option value="<?php echo $rs['id']; ?>"><?php echo $rs['name']; ?></option>
								<?php $st_nm = $con->query("select * from states");
									while($snm = mysqli_fetch_array($st_nm)){
								?>
									<option value="<?php echo $snm['id']; ?>"><?php echo $snm['name']; ?></option>
								<?php 
									}
								?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="lableedit">City :</label>
								<Select class="form-control" id="city" name="city">
								<option value="<?php echo $rci['id']; ?>"><?php echo $rci['name']; ?></option>
								<?php $ci_nm = $con->query("select * from cities");
									while($cinm = mysqli_fetch_array($ci_nm)){
								?>
									<option value="<?php echo $cinm['id']; ?>"><?php echo $cinm['name']; ?></option>
								<?php 
									}
								?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="a_taluka" value="<?php echo $r['work_district']; ?>" name="a_taluka"> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="a_village" name="a_village" value="<?php echo $r['work_village']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="a_area" value="<?php echo $r['why_area']; ?>" name="a_area"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="mt25 col-md-12 col-sm-12 col-xs-12">
							<input type="submit" name="area_edit" class="btn-orange" id="area_edit" value="Submit"/>
						</div>
					</div>
				</section>
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