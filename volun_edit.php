
<?php include("header.php");
	if(isset($_SESSION['ermsg']) and $_SESSION['ermsg'] != ''){
		echo "<script>alert('".$_SESSION['ermsg']."')</script>";
		$_SESSION['ermsg'] = '';
	}else {
		//echo "<script>alert('session not stored');</script>";
	}
?>
		
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="volun_edit.php">Volunteer Details</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php 
		if(isset($_GET['id']) && $_GET['id'] != ''){
			$v_id = $_GET['id'];
			$_SESSION['vol_db_id'] = $_GET['id'];
		}else if (isset($_SESSION['vol_db_id'])){
			$v_id = $_SESSION['vol_db_id'];
		}else{
			session_destroy();
			echo "<script>window.location = 'index.php'</script>";
		}
	
		$spre = $con->query("select * from volunteer_register where vol_id = '$v_id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			
?>

<div class="col-md-12">
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-red-sunglo">
				<i class="icon-settings font-red-sunglo"></i>
				<span class="caption-subject bold uppercase"> Update Volunteer Details</span>
			</div>
		</div>
		<div class="portlet-body form"><!--onsubmit="return valid_volunteer()"-->
		<form role="form" id="studform" action="user_data.php?call=edit_volun" method="post"  enctype="multipart/form-data">
		<section>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">First Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="hidden" id="vol_id" name="vol_id" value="<?php echo $v_id;?>" />
						<input type="hidden" id="language" name="language" value="<?php echo $r['lang_spk'];  ?>" />
						<input type="hidden" id="ngo_id" name="ngo_id" value="<?php echo $r['vol_conn_ngo'];?>" />
						<input type="hidden" id="vol_uid" name="vol_uid" value="<?php echo $r['vol_uid']; ?>" />
						<input type="text" class="form-control" value="<?php echo $r['vol_fnm']; ?>" id="vo_fname" name="vo_fname">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Middle Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_mnm']; ?>" id="vo_mname" name="vo_mname">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Last Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_lnm']; ?>" id="vo_lname" name="vo_lname">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Gender :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
					<div style="" class="">
						<Select class="form-control" id="vo_gender" name="vo_gender">
							<?php if($r['vol_gender'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["vol_gender"].'>'.$r["vol_gender"].' </option>' ;} ?>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Blood Group :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<div style="" class="">
						<Select class="form-control" id="vol_grp" name="vol_grp">
							<?php if($r['vol_bld_grp'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["vol_bld_grp"].'>'.$r["vol_bld_grp"].' </option>' ;} ?>
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
		</section>
		<section>
			<p class="topmarg" style="font-size:16px;">Contact Details : </p>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Floor :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_floor']; ?>" id="vol_floor" name="vol_floor" />
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Unit :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_unit']; ?>" id="vol_unit" name="vol_unit"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Society Name :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_soc_nm']; ?>" id="vol_soc_nm" name="vol_soc_nm">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Society No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_soc_no']; ?>" id="vol_build_no" name="vol_build_no">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Address1 :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_add1']; ?>" id="vo_add1" name="vo_add1">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Address2 :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_add2']; ?>" id="vo_add2" name="vo_add2">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Other Reference :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_oth_ref']; ?>" id="vol_ref_add" name="vol_ref_add" />
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Taluka :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control botmarg" value="<?php echo $r['vol_taluka']; ?>" id="vol_taluka_new" name="vol_taluka_new" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Village :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control botmarg" value="<?php echo $r['vol_village']; ?>" id="vol_village" name="vol_village" />
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">District :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_district']; ?>" id="vol_taluka" name="vol_taluka"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Country :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<Select class="form-control" id="country" name="country" onchange="state_nm();">
							<?php if($r['vol_cont'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $co_nm = $con->query("select id,name from countries"); 
						$country_id = "";
						while($cnm = mysqli_fetch_array($co_nm)){
							if($r['vol_cont'] == $cnm['id']){
								$selected = 'selected';
								$country_id = $cnm['id'];
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
						<Select class="form-control" id="state" name="state" onchange="city_nm();">
							<?php if($r['vol_state'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select id,name from states where country_id = '$country_id'");
						$state_id = '';
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['vol_state'] == $stnm['id']){
								$selected = 'selected';
								$state_id = $stnm['id'];
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
						<?php if($r['vol_city'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ct_nm = $con->query("select id,name from cities where state_id = '$state_id'");
						while($ctnm = mysqli_fetch_array($ct_nm)){
							if($r['vol_city'] == $ctnm['id']){
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
					<p style="margin-top:7px;">Pin Code :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_zipcode']; ?>" id="vo_zip_code" name="vo_zip_code">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Mobile No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" style="width:20%;float:left;" id="ngo_c_mob_no" name="ngo_c_mob_no" />
						<input type="text" class="form-control " id="ngo_m_no" name="ngo_m_no" style="width:80%;"/>
						<input type="hidden" class="form-control" value="<?php echo $r['vol_contact']; ?>" id="hiddn_m_no" name="hiddn_m_no">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Telephone No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="tel_c_no" name="tel_c_no" />
						<input type="text" class="form-control" placeholder="Area code" style="width:20%;float:left;" id="tel_a_no" name="tel_a_no" />
						<input type="text" class="form-control" placeholder="Telephone No" style="width:60%" id="tel_no" name="tel_no"/>
						<input type="hidden" class="form-control" value="<?php echo $r['vol_tele_no']; ?>" id="hiddn_t_no" name="hiddn_t_no" /> 
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Fax No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="fax_c_no" name="fax_c_no" />
						<input type="text" class="form-control" placeholder="Area code" style="width:20%;float:left;" id="fax_a_no" name="fax_a_no" />
						<input type="text" class="form-control" placeholder="Fax" id="fax_no" name="fax_no" style="width:60%"/>
						<input type="hidden" class="form-control" value="<?php echo $r['vol_fax_no']; ?>" id="hiddn_f_no" name="hiddn_f_no" />
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Email :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" value="<?php echo $r['vol_email']; ?>" id="vo_email" name="vo_email">
					</div>
				</div>
			</div>
		</section>
		<section>
			<p class="topmarg" style="font-size:16px;">KYC : </p>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Date Of Birth :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input placeholder="Date Of Birth" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="vo_dob" name="vo_dob" onfocusout="(this.type='text')" value="<?php echo $r['vol_dob']; ?>">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Profile Pic :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
							<img src="../<?php if($r['vol_pic'] == "") echo $default_img; else echo $r['vol_pic']; ?>" height="75" width="75" />
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
							<div class="box">
								<input type="file" name="vo_pic" id="vo_pic" class="inputfile inputfile-6"/>
								<label for="vo_pic" class="nospace"><span></span> 
									<strong>Upload Photo (PDF/JPG)</strong>
								</label>
							</div>
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
						<input type="text" class="form-control" placeholder="Id Card / Aadhar Card No" value="<?php echo $r['vol_adhar_no']; ?>" id="vo_adha_no" name="vo_adha_no">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12" style="margin-bottom:15px;">
					<p style="margin-top:7px;">Aadhar Card Doc :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
						<?php $extnm = pathinfo($r['vol_adhar_doc'], PATHINFO_EXTENSION).','; 
							if($extnm == "pdf,"){ 
						?>
							<a href="<?php echo $downl.$r['vol_adhar_doc']; ?>" download = "newdoc">Download AadharCard Doc</a>
						<?php }else{ ?>
							<img src="../<?php if($r['vol_adhar_doc'] == "") echo $default_img; else echo $r['vol_adhar_doc']; ?>" height="75" width="75" />
						<?php } ?>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
							<div class="box">
								<input type="file" name="adhar_doc" id="adhar_doc" class="inputfile inputfile-6"/>
								<label for="adhar_doc" class="nospace"><span></span> 
									<strong>Upload Adhar Card (PDF/JPG)</strong>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Pan Card No :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Pan Card No" value="<?php echo $r['vol_pan_no']; ?>" id="vo_pan_no" name="vo_pan_no">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Pan Card Doc :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
						<?php $extnm = pathinfo($r['vol_pan_doc'], PATHINFO_EXTENSION).','; 
							if($extnm == "pdf,"){ 
						?>
							<a href="<?php echo $downl.$r['vol_pan_doc']; ?>" download = "newdoc">Download PanCard Doc</a>
						<?php }else{ ?>
							<img src="../<?php if($r['vol_pan_doc'] == "") echo $default_img; else echo $r['vol_pan_doc']; ?>" height="75" width="75" />
						<?php } ?>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
							<div class="box">
								<input type="file" name="pan_doc" id="pan_doc" class="inputfile inputfile-6"/>
								<label for="pan_doc" class="nospace"><span></span> 
									<strong>Upload Pan Card (PDF/JPG)</strong>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Education :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Education" value="<?php echo $r['education']; ?>" id="educ" name="educ">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Education Doc :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
					<div class="form-group">
						<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
						<?php $extnm = pathinfo($r['edu_doc'], PATHINFO_EXTENSION).','; 
							if($extnm == "pdf,"){ 
						?>
							<a href="<?php echo $downl.$r['edu_doc']; ?>" download = "newdoc">Download Education Doc</a>
						<?php }else{ ?>
							<img src="../<?php if($r['edu_doc'] == "") echo $default_img; else echo $r['edu_doc']; ?>" height="75" width="75" />
						<?php } ?>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
							<div class="box">
								<input type="file" name="edu_doc" id="edu_doc" class="inputfile inputfile-6"/>
								<label for="edu_doc" class="nospace"><span></span> 
									<strong>Upload Education Certificate (PDF/JPG)</strong>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Language Spoken :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<div class="" style="" id="langauages">
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Profession :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group" style="">
						<input type="text" class="form-control" value="<?php echo $r['profess']; ?>" id="vol_prof" name="vol_prof">
					</div>
				</div>
			</div>
			<div class="row" style="font-size:12px;">
				<p class="topmarg" style="font-size:16px;margin-left:16px;">Connected To NGO :</p>
				<div class="col-md-2 col-sm-2 col-xs-12" style="margin-top:10px;">
					<input class="rdio" type="radio" id="vol_ngo_ys" name="vol_ngo" onclick="show_ngo()" style="float:left;margin-right:5px;" value="1"/>Yes
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" id="ngo_drop" name="ngo_drop" style="display:none;margin-top:10px;margin-bottom:10px;">
					<Select class="form-control " id="sel_ngo" name="sel_ngo" placeholder="">
						<?php if($r['vol_conn_ngo'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ct_nm = $con->query("select ngo_id,ngo_name from ngo_register");
						while($ctnm = mysqli_fetch_array($ct_nm)){
							if($r['vol_conn_ngo'] == $ctnm['ngo_id']){
								$selected = 'selected';
							}else{
								$selected = '';
							}
							
						?>
							<option value="<?php echo $ctnm['ngo_id']; ?>" <?php echo $selected ?> ><?php echo $ctnm['ngo_name']; ?></option>
						<?php 
							}
						?>
					</select>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12" style="margin-top:10px;"> 
					<input class="rdio" type="radio" id="vol_ngo_no" onclick="show_ngo()" name="vol_ngo" style="float:left;margin-right:5px;" value="0"/>No
				</div>
			</div>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Martial Status :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<div class="">
						<Select class="form-control" id="mar_status" name="mar_status">
							<?php if($r['matiral_status'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["matiral_status"].'>'.$r["matiral_status"].' </option>' ;} ?>
							<option>Married</option>
							<option>Single</option>
							<option>Divorced</option>
							<option>Widowed </option>
						</select>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Preffered Area Of Work :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['vol_pref_area']; ?>" id="vo_work" name="vo_work">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">How do you find out about us :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['vol_us']; ?>" id="vo_us" name="vo_us">
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Volunteer Experiance :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['vol_expe']; ?>" id="vo_exp" name="vo_exp">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<p style="margin-top:7px;">Why you want to work with us :</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="" value="<?php echo $r['vol_why']; ?>" id="wrk_us" name="wrk_us">
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

<script>
$(document).ready(function(){
	//alert("1");
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
	vol_name();
	schl_name();
	class_name(); 
	langauge_spk();	
	
	$('input[type="file"]').change(function(e){
		//alert("1");
		var fileName = e.target.files[0].name;
		//alert('The file "' + fileName +  '" has been selected.');
		getFileExtension(fileName);
	});
	
	$(function () {                
        var t_code = document.getElementById("hiddn_t_no").value.split("-");
		if(t_code[0] != ''){
		document.getElementById("tel_c_no").value = t_code[0];
		}
		if(t_code[1] != ''){
		document.getElementById("tel_a_no").value = t_code[1];
		}
		if(t_code[2] != ''){
		document.getElementById("tel_no").value = t_code[2];
		}
		
		var f_code = document.getElementById("hiddn_f_no").value.split("-");
		if(f_code[0] != ''){
		document.getElementById("fax_c_no").value = f_code[0];
		}
		if(f_code[1] != ''){
		document.getElementById("fax_a_no").value = f_code[1];
		}
		if(f_code[2] != ''){
		document.getElementById("fax_no").value = f_code[2];
		}
		    
		var m_code = document.getElementById("hiddn_m_no").value.split("-");
		if(m_code[0] != ''){
		document.getElementById("ngo_c_mob_no").value = m_code[0];
		}
		if(m_code[1] != ''){
		document.getElementById("ngo_m_no").value = m_code[1];
		}
	});
	
	if(document.getElementById("ngo_id").value != ""){  
			$("#vol_ngo_ys").attr("checked","true");
			$("#ngo_drop").css({"display":"block"});
		}else{
			$("#vol_ngo_no").attr("checked","true");
		}
	
});

function show_ngo() {
	//alert("1");
	if(document.getElementById("vol_ngo_ys").checked == true ){
		$("#ngo_drop").css({"display":"block"});
	}else if(document.getElementById("vol_ref").checked == true){
		$("#ngo_drop").css({"display":"none"});
	}else if(document.getElementById("no_ref").checked == true){
		$("#ngo_drop").css({"display":"none"});
	}
}

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