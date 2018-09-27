
<?php
	include("header.php");
	if(isset($_SESSION['ermsg']) and $_SESSION['ermsg'] != ''){
		echo "<script>alert('".$_SESSION['ermsg']."')</script>";
		$_SESSION['ermsg'] = '';
	}else {
		//echo "<script>alert('session not stored');</script>";
	}
?>

  
<style type="text/css">
	#results { float:right; margin:-20px; padding:20px; border:0px solid; background:none; }
	#results1 { float:right; margin:-20px; padding:20px; border:0px solid; background:none; }
	#results2 { float:right; margin:-20px; padding:20px; border:0px solid; background:none; }
</style>
 
<div class="loader"></div>
 			
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Student Details</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php 
		//date('m/d/y', strtotime($date));
		global $default_img;
		if(isset($_GET['id']) && $_GET['id'] != ''){
			$_SESSION['stud_db_id'] = $_GET['id'];
			$st_id = $_SESSION['stud_db_id'];
		}else if (isset($_SESSION['stud_db_id'])){
			$st_id = $_SESSION['stud_db_id'];
		}else{
			session_destroy();
			echo "<script>window.location = 'index.php'</script>";
		}
		
		$spre = $con->query("select * from student_register where stud_id = '$st_id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
?>

<div class="col-md-12">
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-red-sunglo">
				<i class="icon-settings font-red-sunglo"></i>
				<span class="caption-subject bold uppercase"> Update Student Details</span>
			</div>
		</div>
		<div class="portlet-body form">
		<form role="form" onsubmit="return valid_student()" id="studform" action="user_data.php?call=edit_student" method="post"  enctype="multipart/form-data">
		<section>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> School Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<select class="form-control" id="sel_schl" name="sel_schl">
						<?php if($r['schl_name'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $scl_nm = $con->query("select schl_id,schl_nm from school_register");
						$admin_cont = '';
						while($snm = mysqli_fetch_array($scl_nm)){
							if($r['schl_name'] == $snm['schl_id']){
								$selected = 'selected';
								$admin_cont = $snm['schl_id'];
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $snm['schl_id']; ?>" <?php echo $selected ?> ><?php echo $snm['schl_nm']; ?></option>
						<?php 
							}
						?>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">First Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="hidden" id="ref_type" name="ref_type" value="<?php echo $type;  ?>" />
						<input type="hidden" id="language" name="language" value="<?php echo $r['stud_lang'];  ?>" />
						<input type="hidden" id="stud_id" name="stud_id" value="<?php echo $st_id;  ?>" />
						<input type="hidden" id="stud_uniqe" name="stud_uniqe" value="<?php echo $r['stud_uid'];  ?>" />
						<input type="text" class="form-control" value="<?php echo $r['stud_fnm']; ?>" id="stud_fname" name="stud_fname">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Middle Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_mnm']; ?>" id="stud_mname" name="stud_mname">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Last Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_lnm']; ?>" id="stud_lname" name="stud_lname">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Date Of Birth :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input placeholder="" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="stud_dob" name="stud_dob" onfocusout="(this.type='text')" value="<?php echo $r['stud_dob']; ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Gender :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
					<div style="float:left;margin-bottom:15px;">
						<Select style="width:145%;" class="form-control" id="stud_gender" name="stud_gender">
							<?php if($r['stud_gender'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["stud_gender"].'>'.$r["stud_gender"].' </option>' ;} ?>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Blood group :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<div style="float:left;margin-bottom:15px;">
						<Select style="width:145%;" class="form-control" id="bld_grp" name="bld_grp">
							<?php if($r['stud_bld_grp'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["stud_bld_grp"].'>'.$r["stud_bld_grp"].' </option>' ;} ?>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>O+</option>
							<option>O-</option>
							<option>AB-</option>
							<option>AB+</option>
						</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Aadhar Card No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_adhar_no']; ?>" id="stud_adhar_no" name="stud_adhar_no">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Aadhar Card Doc :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
					<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
						<?php $extnm = pathinfo($r['stud_adhar_doc'], PATHINFO_EXTENSION).','; 
							if($extnm == "pdf,"){ 
						?>
							<a href="<?php echo $downl.$r['stud_adhar_doc']; ?>" download = "newdoc">Download Adhar Doc</a>
						<?php }else{ ?>
						<img src="../<?php if($r['stud_adhar_doc'] == "") echo $default_img; else echo $r['stud_adhar_doc']; ?>" height="75" width="75" />
						<?php } ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
						<div class="box">
							<input type="file" name="stud_adhar_doc" id="stud_adhar_doc" class="inputfile inputfile-6"/>
							<label for="stud_adhar_doc" class="nospace"><span></span> 
								<strong>Upload Adhar Doc (PDF/JPG)</strong>
							</label>
						</div>
					</div>
					</div>
						<div id="results"></div>
						<a onclick="take_pic()" id="idc">Take Aadhar Photo </a>
						<input type="hidden" value="" name="id_takepic" id="id_takepic" />
					<div id="id_disp" class="popup" style="display:none;text-align: -webkit-center;">
						<div id="id_card"></div>
						<input type="button" value="Take Photo" id="adhar" onClick="take_snapshot()"/>
					</div>
					
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Profile Photo :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
					<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
						<img src="../<?php if($r['stud_pic'] == "") echo $default_img; else echo $r['stud_pic']; ?>" height="75" width="75" />
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
					<div class="box">
						<input type="file" name="stud_pic" id="stud_pic" class="inputfile inputfile-6"/>
						<label for="stud_pic" class="nospace"><span></span> 
							<strong>Upload Photo (PDF/JPG)</strong>
						</label>
					</div>
					</div>
					</div>
						<div id="results1"></div>
						<a onclick="take_pic2()" id="st_prof">Take Profile Photo </a>
						<input type="hidden" value="" name="profile_takepic" id="profile_takepic" />
					<div id="adhar_disp" class="popup" style="display:none;text-align: -webkit-center;">
						<div id="stud_profile"></div>
						<input type="button" value="Take Photo" id="profile" onClick="take_snapshot2()"/>
					</div>
				</div>
			</div>
			</section>
			<section>
			<p class="topmarg" style="font-size:16px;">Contact Details : </p>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Floor :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_floor']; ?>" id="stud_floor" name="stud_floor" />
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Unit :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_unit']; ?>" id="stud_unit" name="stud_unit"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Society Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_soc_nm']; ?>" id="stud_soc_nm" name="stud_soc_nm">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Society No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_soc_no']; ?>" id="stud_build_no" name="stud_build_no">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Address1 :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_add1']; ?>" id="stud_add1" name="stud_add1">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Address2 :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_add2']; ?>" id="stud_add2" name="stud_add2">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Other Refrence :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_othref']; ?>" id="stud_ref_add" name="stud_ref_add" />
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Village :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control botmarg" value="<?php echo $r['stud_village']; ?>" id="stud_village" name="stud_village" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Taluka :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control botmarg" value="<?php echo $r['stud_taluka']; ?>" id="stud_taluka_new" name="stud_taluka_new" />
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">District :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_dist']; ?>" id="stud_taluka" name="stud_taluka"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Country :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<Select class="form-control" id="country" name="country" onchange="state_nm();" readonly >
						<?php if($r['stud_country'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $co_nm = $con->query("select id,name from countries");
						$admin_cont = '';
						while($cnm = mysqli_fetch_array($co_nm)){
							if($r['stud_country'] == $cnm['id']){
								$selected = 'selected';
								$admin_cont = $cnm['id'];
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $cnm['id']; ?>" <?php echo $selected ?> ><?php echo $cnm['name']; ?></option>
						<?php 
							}
						?>
						</select>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">State :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<Select class="form-control" id="state" name="state" onchange="city_nm();" readonly >
						<?php if($r['stud_state'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select id,name from states where country_id = '$admin_cont'");
						$admin_state = '';
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['stud_state'] == $stnm['id']){
								$selected = 'selected';
								$admin_state = $stnm['id'];
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $stnm['id']; ?>" <?php echo $selected ?> ><?php echo $stnm['name']; ?></option>
						<?php 
							}
						?>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">City :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<Select class="form-control" id="city" name="city">
						<?php if($r['stud_city'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ct_nm = $con->query("select id,name from cities where state_id = '$admin_state'");
						while($ctnm = mysqli_fetch_array($ct_nm)){
							if($r['stud_city'] == $ctnm['id']){
								$selected = 'selected';
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $ctnm['id']; ?>" <?php echo $selected ?> ><?php echo $ctnm['name']; ?></option>
						<?php 
							}
						?>
						</select>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Pincode :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_pincode']; ?>" id="stud_zip_code" name="stud_zip_code">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Mobile No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" style="width:20%;float:left;" id="st_c_code" onkeypress="javascript:return isNumber (event)" name="st_c_code" />
						<input type="text" class="form-control required" id="st_co_no" name="st_co_no" style="width:80%;">
						<input type="hidden" class="form-control" value="<?php echo $r['stud_contact']; ?>" onkeypress="javascript:return isNumber (event)" id="hiidn_m_no" name="hiidn_m_no">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Telephone No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" style="width:20%;float:left;" onkeypress="javascript:return isNumber (event)" id="st_c_tel_no" name="st_c_tel_no" />
						<input type="text" class="form-control" style="width:20%;float:left;" onkeypress="javascript:return isNumber (event)" id="st_a_tel_no" name="st_a_tel_no" />
						<input type="text" class="form-control required" id="st_tel_no" onkeypress="javascript:return isNumber (event)" name="st_tel_no" style="width:60%;"> 
						<input type="hidden" class="form-control" value="<?php echo $r['stud_teleno']; ?>" id="hidden_t_no" name="hidden_t_no" /> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Fax No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" style="width:20%;float:left;" id="st_c_fax_no" name="st_c_fax_no" />
						<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" style="width:20%;float:left;" id="st_a_fax_no" name="st_a_fax_no" />
						<input type="text" class="form-control required" onkeypress="javascript:return isNumber (event)" id="st_fax_no" name="st_fax_no" style="width:60%;"> 
						<input type="hidden" class="form-control" value="<?php echo $r['stud_fax']; ?>" id="hiddn_f_no" name="hiddn_f_no" />
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Email :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['stud_email']; ?>" id="stud_email" name="stud_email">
					</div>
				</div>
			</div>
		</section>
		<section>
			<p class="topmarg" style="font-size:16px;">KYC : </p>
			<div class="row">
				
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12"><label>Birth Palce :</label></div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Country :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<Select class="form-control" id="ad_country" name="ad_country" onchange="adm_state();" readonly />
						<?php if($r['stud_bcountry'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $co_nm = $con->query("select id,name from countries");
						$admin_cont_1 = '';
						while($cnm = mysqli_fetch_array($co_nm)){
							if($r['stud_bcountry'] == $cnm['id']){
								$selected = 'selected';
								$admin_cont_1 = $cnm['id'];
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $cnm['id']; ?>" <?php echo $selected ?> ><?php echo $cnm['name']; ?></option>
						<?php 
							}
						?>
						</select>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">State :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
							<Select class="form-control " id="ad_state" name="ad_state" onchange="adm_city();" readonly >
							<?php if($r['stud_bstate'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select id,name from states where country_id = '$admin_cont_1'");
						$admin_state_1 = '';
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['stud_bstate'] == $stnm['id']){
								$selected = 'selected';
								$admin_state_1 = $stnm['id'];
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $stnm['id']; ?>" <?php echo $selected ?> ><?php echo $stnm['name']; ?></option>
						<?php 
							}
						?>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">City :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
					<Select class="form-control" id="ad_city" name="ad_city" placeholder="">
					<?php if($r['stud_bcity'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ct_nm = $con->query("select id,name from cities where state_id = '$admin_state_1'");
						while($ctnm = mysqli_fetch_array($ct_nm)){
							if($r['stud_bcity'] == $ctnm['id']){
								$selected = 'selected';
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $ctnm['id']; ?>" <?php echo $selected ?> ><?php echo $ctnm['name']; ?></option>
						<?php 
							}
						?>
					</select>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Village :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control"  value="<?php echo $r['stud_bvillage']; ?>" id="stud_vill" name="stud_vill">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">District :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_bdist']; ?>" id="stud_dist" name="stud_dist">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Taluka :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_btaluka']; ?>" id="stud_btaluka" name="stud_btaluka">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Language Spoken :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group" style="" id="langauages">
					</div>
				</div>
			</div>
		</section>
		<section>
			<p class="topmarg" style="font-size:16px;">Family History : </p>
			<p class="topmarg" style="font-size:16px;">Father  / Guardian  info : </p>
			<div class="row" style="font-size:12px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> First Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_fath_fnm']; ?>" id="fath_fnm" name="fath_fnm">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Middle Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_fath_mnm']; ?>" id="fath_mnm" name="fath_mnm">
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Last Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_fath_lnm']; ?>" id="fath_snm" name="fath_snm">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Mobile No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" style="width:20%;float:left;" id="fath_c_code" name="fath_c_code" />
						<input type="text" class="form-control required" onkeypress="javascript:return isNumber (event)" id="fath_mno" name="fath_mno" style="width:80%;">
						<input type="hidden" class="form-control" value="<?php echo $r['stud_fath_mno']; ?>" id="hiidn_f_m_no" name="hiidn_f_m_no" onkeypress="javascript:return isNumber (event)"> 
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Date Of Birth :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input placeholder="Date Of Birth" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="fath_dob" name="fath_dob" onfocusout="(this.type='text')" value="<?php echo $r['stud_fath_dob']; ?>">	
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Email :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_fath_email']; ?>" id="fath_email" name="fath_email">
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Education :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_fath_edu']; ?>" id="fath_educ" name="fath_educ">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Profession :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_fath_prof']; ?>" id="fath_prof" name="fath_prof">
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<div class="col-md-12 col-sm-12 col-xs-12"><p class="topmarg" style="font-size:16px;">Mother  / Guardian  info : </p></div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> First Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_moth_fnm']; ?>" id="moth_fnm" name="moth_fnm">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Middle Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_moth_mnm']; ?>" id="moth_mnm" name="moth_mnm">
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Last Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_moth_lnm']; ?>" id="moth_snm" name="moth_snm">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Mobile No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" style="width:20%;float:left;" id="moth_c_code" name="moth_c_code" />
						<input type="text" class="form-control required" onkeypress="javascript:return isNumber (event)" id="moth_mno" name="moth_mno" style="width:80%;">
						<input type="hidden" class="form-control" value="<?php echo $r['stud_moth_mno']; ?>" id="hiidn_m_m_no" name="hiidn_m_m_no" onkeypress="javascript:return isNumber (event)"> 
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Date Of Birth :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input placeholder="Date Of Birth" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="moth_dob" name="moth_dob" onfocusout="(this.type='text')" value="<?php echo $r['stud_moth_dob']; ?>">	
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Email :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_moth_email']; ?>" id="moth_email" name="moth_email">
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Education :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_moth_edu']; ?>" id="moth_educ" name="moth_educ">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Profession :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_moth_pro']; ?>" id="moth_prof" name="moth_prof">
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<p class="topmarg" style="font-size:16px;padding-left:15px;">Add Reference :</p>
				<div class="col-md-2 col-sm-2 col-xs-12" style="margin-top:10px;">
					<p>NGO :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" id="ngo_drop" name="ngo_drop">
					<Select class="form-control" id="sel_ngo" name="sel_ngo">
						<?php if($r['ngo_add_ref'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select ngo_id,ngo_name from ngo_register");
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['ngo_add_ref'] == $stnm['ngo_id']){
								$selected = 'selected';
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $stnm['ngo_id']; ?>" <?php echo $selected ?> ><?php echo $stnm['ngo_name']; ?></option>
						<?php 
							}
						?>
					</select>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12" style="margin-top:10px;">
					<p>Volunteer :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" id="vol_drop" name="vol_drop">
					<Select class="form-control" id="sel_vol" name="sel_vol">
						<?php if($r['vol_add_ref'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select vol_id,vol_fnm,vol_lnm from volunteer_register");
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['vol_add_ref'] == $stnm['vol_id']){
								$selected = 'selected';
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $stnm['vol_id']; ?>" <?php echo $selected ?> ><?php echo $stnm['vol_fnm'].' '.$stnm['vol_lnm']; ?></option>
						<?php 
							}
						?>
					</select>
				</div>
			</div>
			<div class="row" style="font-size:12px;margin-top:13px;">
				<div class="col-md-2 col-sm-2 col-xs-12" style="margin-top:10px;">
					<p>Other :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<input type="text" class="form-control" style="" name="othr_ref" id="othr_ref" value="<?php echo $r['oth_add_ref']; ?>"/>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Annual Income :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['annual_income']; ?>" id="an_income" name="an_income">
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Special Need :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['stud_spec_need']; ?>" id="spec_need" name="spec_need">
					</div>
				</div>
			</div>
		</section>
		<section>
			<p class="topmarg" style="font-size:16px;">Academic Information : </p>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> School Id No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['schl_idcard_no']; ?>" id="stud_schl_id" name="stud_schl_id">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> School Id Card :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
					<div class="form-group">
					<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
					<?php $extnm = pathinfo($r['schl_idcard_doc'], PATHINFO_EXTENSION).','; 
							if($extnm == "pdf,"){ 
					?>
						<a href="<?php echo $downl.$r['schl_idcard_doc']; ?>" download = "newdoc">Download IdCard Doc</a>
					<?php }else{ ?>
						<img src="../<?php if($r['schl_idcard_doc'] == "") echo $default_img; else echo $r['schl_idcard_doc']; ?>" height="75" width="75" />
					<?php } ?>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
					<div class="box">
						<input type="file" name="stud_id_doc" id="stud_id_doc" class="inputfile inputfile-6"/>
						<label for="stud_id_doc" class="nospace"><span></span> 
							<strong>Upload School Id Card (PDF/JPG)</strong>
						</label>
					</div>
					</div>
					</div>
					<div id="results2"></div>
						<a onclick="take_pic3()" id="sclid">Take School Id Photo </a>
						<input type="hidden" value="" name="sclid_takepic" id="sclid_takepic" />
					<div id="scl_disp" class="popup" style="display:none;text-align: -webkit-center;">
						<div id="sclid_card"></div>
						<input type="button" value="Take Photo" id="school" onClick="take_snapshot3()"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> School Address :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['schl_add']; ?>" id="schl_add" name="schl_add">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Education Board :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group" style="">   
						<Select class="form-control" id="stud_board" name="stud_board">
						<?php if($r['stud_education_board'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ngo_nm = $con->query("select board_id,board_short_name from board");
						while($ngnm = mysqli_fetch_array($ngo_nm)){
							if($r['stud_education_board'] == $ngnm['board_id']){
								$selected = 'selected';
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $ngnm['board_id']; ?>" <?php echo $selected ?> ><?php echo $ngnm['board_short_name']; ?></option>
						<?php 
							}
						?>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Class / Grade :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<Select class="form-control" id="sel_class" name="sel_class">
						<?php if($r['stud_class'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ngo_nm = $con->query("select cl_id,cl_name from class");
						while($ngnm = mysqli_fetch_array($ngo_nm)){
							if($r['stud_class'] == $ngnm['cl_id']){
								$selected = 'selected';
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $ngnm['cl_id']; ?>" <?php echo $selected ?> ><?php echo $ngnm['cl_name']; ?></option>
						<?php 
							}
						?>
						</select> 
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;"> Medium :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<Select class="form-control" id="stud_medium" name="stud_medium"> 
						<?php if($r['stud_midium'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ngo_nm = $con->query("select medium_id,medium_name from medium");
						while($ngnm = mysqli_fetch_array($ngo_nm)){
							if($r['stud_midium'] == $ngnm['medium_id']){
								$selected = 'selected';
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $ngnm['medium_id']; ?>" <?php echo $selected ?> ><?php echo $ngnm['medium_name']; ?></option>
						<?php 
							}
						?>
						</select>
					</div>
				</div>
			</div>
		</section>
		<div class="form-actions noborder">
			<input type="submit" class="btn blue" id="edit_student" name="edit_student" value="Submit" />
			<input type="clear" class="btn default" value="Cancel"/>
		</div>
			</form>
		</div>
	</div>
</div>


<?php }  ?>
			</div>
<?php include('footer.php'); ?>


<script language="JavaScript">
	 
	function take_pic() {
		$('#id_disp').css({"display":"block"});
	}
	
	function take_pic2() {
		$('#adhar_disp').css({"display":"block"});
			
	}

	function take_pic3() {
		$('#scl_disp').css({"display":"block"});
			
	}	
	
	function take_snapshot() {
		Webcam.snap( function(data_uri) {
			document.getElementById('results').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				alert(text);
				var displaypath = '../'+text;
				document.getElementById("stud_adhar_doc").disabled = true;
				document.getElementById("id_takepic").value = text;
				document.getElementById('results').innerHTML = 
				'<img src="'+displaypath+'" style="height:150px;width:150px;"/>';
				$('#adhar').toggle('hide');
				$('#id_disp').css({"display":"none"});
			} );	
		} );
	}
	
	function take_snapshot2() {
		Webcam.snap( function(data_uri) {
			document.getElementById('results1').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				var displaypath1 = '../'+text;
				document.getElementById("stud_pic").disabled = true;
				document.getElementById("profile_takepic").value = text;
				document.getElementById('results1').innerHTML = 
				'<img src="'+displaypath1+'" height="150px" width="150px"/>';
				$('#profile').toggle('hide');
				$('#adhar_disp').css({"display":"none"});
			} );	   
		} );
	}
	
	function take_snapshot3() {
		Webcam.snap( function(data_uri) {
			document.getElementById('results2').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				var displaypath2 = '../'+text;
				document.getElementById("stud_id_doc").disabled = true;
				document.getElementById("sclid_takepic").value = text;
				document.getElementById('results2').innerHTML = 
				'<img src="'+displaypath2+'" height="150px" width="150px"/>';
				$('#school').toggle('hide');
				$('#scl_disp').css({"display":"none"});
			} );	   
		} );
	}
	
</script>

<script>
$(document).ready(function(){
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
	langauge_spk();
          
        var t_code = document.getElementById("hidden_t_no").value.split("-");
		if(t_code[0] != ''){  
		document.getElementById("st_c_tel_no").value = t_code[0];
		}
		if(t_code[1] != ''){
		document.getElementById("st_a_tel_no").value = t_code[1];
		}
		if(t_code[2] != ''){
		document.getElementById("st_tel_no").value = t_code[2];
		}
		
		var f_code = document.getElementById("hiddn_f_no").value.split("-");
		if(f_code[0] != ''){
		document.getElementById("st_c_fax_no").value = f_code[0];
		}
		if(f_code[1] != ''){
		document.getElementById("st_a_fax_no").value = f_code[1];
		}
		if(f_code[2] != ''){
		document.getElementById("st_fax_no").value = f_code[2];
		}
		    
		var m_code = document.getElementById("hiidn_m_no").value.split("-"); 
		if(m_code[0] != ''){		
		document.getElementById("st_c_code").value = m_code[0];
		}
		if(m_code[1] != ''){
		document.getElementById("st_co_no").value = m_code[1];
		}
		
		var mo_code = document.getElementById("hiidn_f_m_no").value.split("-");
		if(mo_code[0] != ''){		
		document.getElementById("fath_c_code").value = mo_code[0];
		}
		if(mo_code[1] != ''){	
		document.getElementById("fath_mno").value = mo_code[1];
		}
		
		var m1_code = document.getElementById("hiidn_m_m_no").value.split("-"); 
		if(m1_code[0] != ''){			
		document.getElementById("moth_c_code").value = m1_code[0];
		}
		if(m1_code[1] != ''){	
		document.getElementById("moth_mno").value = m1_code[1];
		}

	
	$('input[type="file"]').change(function(e){
		//alert("1");
		var fileName = e.target.files[0].name;
		//alert('The file "' + fileName +  '" has been selected.');
		getFileExtension(fileName);
	});
	
	$("#schl_name").change(function (){ 
		//alert("1");
		var sclnm = $(this).val();
		$.ajax({
			type:"post",
			data:"sclnm="+sclnm, 
			url:"data.php?call=scl_address",
			success:function(msg){
				//alert(msg);
				document.getElementById("schl_add").value = msg; 
			}
		});
	});
	
});


function getFileExtension(filenm){
	//alert(filenm);
	var extnm = (filenm.split('.'));
	//alert(extnm[1]);
	if(extnm[1] == 'jpg' || extnm[1] == 'png' || extnm[1] == 'JPG' || extnm[1] == 'jpeg'){
		return true;
	}else{
		alert("Invalid file...");
		return false;
	}
}

function show_text() {
	if(document.getElementById("ngo_case1").checked == true){
		$("#txt_inside").css({"display":"block"});
	}else if(document.getElementById("ngo_case2").checked == true){
		$("#txt_inside").css({"display":"none"});
	}else {
		$("#txt_inside").css({"display":"none"});
	}
}


function chnge_bnm(){
	//alert("1");
	$("#showhy").css({"display":"block"});
}



</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>