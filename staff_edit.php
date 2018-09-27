
<?php include("header.php");
?>
 			
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
		$spre = $con->query("select * from staff_register where staff_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			$sl_id = $r['staff_schl_id'];
			$sl_nm = $con->query("select * from school_register where schl_id = '$sl_id'");
			$r1 = mysqli_fetch_array($sl_nm);
?>

				<div class="col-md-12">
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update Staff Details</span>
							</div>
						</div>
				<div class="portlet-body form">
				<form role="form" onsubmit="return trust_submit()" id="ngoform" action="user_data.php?call=edit_staff" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				
				<section>
					<div class="row">
						<div class="col-md-6">
							<input type="hidden" id="s_id" name="s_id" value="<?php echo $id;  ?>" />
							<div class="form-group">
								<label class="lableedit">NGO Name :</label>
								<Select class="form-control" id="sel_schl" name="sel_schl">
									<option><?php echo $r1['schl_nm']; ?></option>
								</select>
							</div>
						</div>
						<div class="col-md-6" style="margin-top:25px;">
							<div class="form-group">
								<input type="text" class="form-control required" id="s_fnm" value="<?php echo $r['staff_fnm']; ?>" name="s_fnm"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="s_lnm" value="<?php echo $r['staff_lnm']; ?>" name="s_lnm"> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="s_mno" value="<?php echo $r['staff_mobile']; ?>" name="s_mno"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="s_email" name="s_email" value="<?php echo $r['staff_email']; ?>"> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group"> 
								<select class="form-control" name="s_type" id="s_type">
									<option><?php echo $r['staff_type']; ?></option>
									<option>Principal</option>
									<option>Teacher</option>
								</select>
							</div>
						</div>
					</div>
				</section>
				
				<div class="form-actions noborder">
					<input type="submit" class="btn blue" id="edit_staff" name="edit_staff" value="Submit" />
					<input type="clear" class="btn default" value="Cancel"/>
				</div>
							</form>
						</div>
					</div>
				</div>
		<?php } } ?>
			</div>
		
<?php include('footer.php'); ?>

<script>
$(document).ready(function(){
	//alert("1");
	schl_name();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>