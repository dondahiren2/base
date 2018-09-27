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
	<?php include("student_menu.php"); ?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<?php include('theme_panel.php'); ?>
			
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Acedemic Details</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php //date('m/d/y', strtotime($date));
		if(isset($_GET['id'])){
		$id = $_GET['id'];
		$spre = $con->query("select * from student_academic_info where aca_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			$st_id = $r['stud_id'];
			$st_nm = $con->query("select * from student_register where stud_id = '$st_id'");
			$r1 = mysqli_fetch_array($st_nm);
?>

				<div class="col-md-12">
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update Student Academic Details</span>
							</div>
						</div>
				<div class="portlet-body form">
				<form role="form" onsubmit="return result_submit()" id="ngoform" action="user_data.php?call=edit_result" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				
				<section>
					<div class="row">
						<div class="col-md-6">
							<input type="hidden" id="res_id" name="res_id" value="<?php echo $r['aca_id'];  ?>" />
							<div class="form-group">
								<label class="lableedit">NGO Name :</label>
								<Select class="form-control" id="sel_stud" name="sel_stud">
									<option><?php echo $r1['stud_fnm']; ?></option>
								</select>
							</div>
						</div>
						<div class="col-md-6" style="margin-top:25px;">
							<div class="form-group">
								<input type="text" class="form-control required" id="res_gred" value="<?php echo $r['grade']; ?>" name="res_gred"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="res_year" value="<?php echo $r['year']; ?>" name="res_year"> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control required" id="over_res" name="over_res" value="<?php echo $r['overall_res']; ?>"> 
							</div>
						</div>
					</div>
				</section>
				
				<div class="form-actions noborder">
					<input type="submit" class="btn blue" id="edit_res" name="edit_res" value="Submit" />
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
	stud_name();
});
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>