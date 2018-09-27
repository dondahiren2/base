<?php 
	include("header.php");
?>

<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="dashboard.php">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Project Details</a>
		</li>
	</ul>
</div>
<div class="row">
<?php
	if(isset($_GET['id'])){
		$prj_id = $_GET['id'];
		$projk = $con->query("select * from project where proj_id = '$prj_id'");
		if(mysqli_num_rows($projk) > 0){
			$r = mysqli_fetch_array($projk);
			if($r['work_status'] == 0){
				$nm = "Working";
			}else{
				$nm = "Complete";
			}
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Project Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=edit_project" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
							<input type="hidden" id="prjid" name="prjid" value="<?php echo $prj_id; ?>"/>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Project category Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select class="form-control" id="cat_id" name="cat_id" >
											<?php if($r['proj_cat'] == ""){echo '<option value = "">Select any </option>';} ?>
											<?php $co_nm = $con->query("select pc_id,pc_name from project_cat");
											while($mn = mysqli_fetch_array($co_nm)){
												if($r['proj_cat'] == $mn['pc_id']){
													$selected = 'selected';
												}else{
													$selected = '';
												}
												
											?>
												<option value="<?php echo $mn['pc_id']; ?>" <?php echo $selected ?> ><?php echo $mn['pc_name']; ?></option>
											<?php 
												}
											?>
										</select>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Project Title :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" value="<?php echo $r['proj_title']; ?>" id="prj_title" name="prj_title" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Project Data :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea class="form-control" id="prj_data" name="prj_data"><?php echo $r['proj_data']; ?></textarea>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Why this project :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea class="form-control" placeholder="Why this project" id="why_pro" name="why_pro" value=""><?php echo $r['why_this']; ?></textarea>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">How to achieve :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea class="form-control" value="" placeholder="How to achieve" id="how_pro" name="how_pro"><?php echo $r['how_achv']; ?></textarea>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Partners & co sponsors Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" value="<?php echo $r['partener_name']; ?>" placeholder="Partners & co sponsors Name" id="part_name" name="part_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Start Date :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input placeholder="Start Date" class="textbox-n form-control form-group" type="text" onfocus="(this.type='date')"  id="st_date" name="st_date" onfocusout="(this.type='text')" value="<?php echo $r['project_add_date']; ?>">
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">End Date :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input placeholder="End Date" class="textbox-n form-control form-group" type="text" onfocus="(this.type='date')" id="end_date" name="end_date" onfocusout="(this.type='text')"  value="<?php echo $r['project_join_edate']; ?>">
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<img src="../<?php if($r['comp_logo'] == "") echo $default_img; else echo $r['comp_logo']; ?>" height="75" width="75" />
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="box">
											<input type="file" name="comp_logo" id="comp_logo" class="inputfile inputfile-6" />
												<label for="comp_logo" class="nospace"><span id="reg_filenm"></span> 
													<strong>Upload Company Logo</strong>
												</label>
										</div>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<a href="">See Profile Of Partners & co sponsors :</a>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<img src="../<?php if($r['proj_pic'] == "") echo $default_img; else echo $r['proj_pic']; ?>" height="75" width="75" />
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="box">
											<input type="file" name="prj_pic" id="prj_pic" class="inputfile inputfile-6" />
												<label for="prj_pic" class="nospace"><span id="reg_filenm"></span> 
													<strong>Upload Project Pic</strong>
												</label>
										</div>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Status :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select class="form-control" id="prj_status" name="prj_status">
											<option value="<?php echo $r['proj_status']; ?>"><?php echo $nm; ?></option>
											<option value="1">Complete</option>
											<option value="0">Working</option>
										</select>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<div class="form-actions noborder">
											<input type="submit" class="btn blue" id="edit_prj" name="edit_prj" value="Edit" />
											<a href="project_list.php" class="btn default">List</a>	
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
								<span class="caption-subject bold uppercase">Project Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=add_project" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Project category Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select class="form-control" id="cat_id" name="cat_id">
											<?php $co_nm = $con->query("select pc_id,pc_name from project_cat"); ?>
											<option value="">Select Project Category</option>
											<?php
											while($mn = mysqli_fetch_array($co_nm)){
											?>
												<option value="<?php echo $mn['pc_id']; ?>"><?php echo $mn['pc_name']; ?></option>
											<?php 
												}
											?>
										</select>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Project Title :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" placeholder="Project Title" id="prj_title" name="prj_title" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Project Data :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea class="form-control" placeholder="Project Data" id="prj_data" name="prj_data"></textarea>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Why this project :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea class="form-control" placeholder="Why this project" id="why_pro" name="why_pro"></textarea>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">How to achieve :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<textarea class="form-control" placeholder="How to achieve" id="how_pro" name="how_pro"></textarea>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Partners & co sponsors Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" placeholder="Partners & co sponsors Name" id="part_name" name="part_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Start Date :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input placeholder="Start Date" class="textbox-n form-control form-group" type="text" onfocus="(this.type='date')"  id="st_date" name="st_date" onfocusout="(this.type='text')">
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">End Date :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input placeholder="End Date" class="textbox-n form-control form-group" type="text" onfocus="(this.type='date')" id="end_date" name="end_date" onfocusout="(this.type='text')">
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<div class="box">
											<input type="file" name="comp_logo" id="comp_logo" class="inputfile inputfile-6" />
												<label for="comp_logo" class="nospace"><span id="reg_filenm"></span> 
													<strong>Upload Company Logo</strong>
												</label>
										</div>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<a href="">See Profile Of Partners & co sponsors :</a>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<div class="box">
											<input type="file" name="prj_pic" id="prj_pic" class="inputfile inputfile-6" />
												<label for="prj_pic" class="nospace"><span id="reg_filenm"></span> 
													<strong>Upload Project Pic</strong>
												</label>
										</div>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<div class="form-actions noborder">
											<input type="submit" class="btn blue" id="add_prj" name="add_prj" value="Add" />
											<a href="project_list.php" class="btn default">List</a>	
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php }  ?>			
			</div>
 
<?php include('footer.php'); ?>
 
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
 var rough_enter1 = 0;
 $(document).ready(function() {
	$(".nav_project_master").addClass('active_head');
 });
</script>

</body>
</html>