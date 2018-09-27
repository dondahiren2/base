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
						<a href="admin_user.php">Donor Details</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php 
		$type = $_SESSION['user_type'];
		global $con ;
?>
		<input type="hidden" value="<?php echo $type; ?>" id="type" name="type" />
<?php
		if($type == "c_donor"){
			
		if(isset($_SESSION['don_db_id'])){
			$don_id = $_SESSION['don_db_id'];
		}else{
			$don_id = "";
		}
		$spre = $con->query("select don_uid,cdon_reg_doc,cdon_pan_doc,cdon_pic,cdon_logo,admin_adhardoc,admin_pic,admin_lang from donor where don_id = '$don_id'");
		$r = mysqli_fetch_array($spre);
			   
?>
				<div class="col-md-12" id="pdon">
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update Corporate / NGO Donor Details</span>
							</div>
						</div>
						<div class="portlet-body form"><!--onsubmit="return valid_donor()"-->
				<form role="form" id="ngoform" action="user_data.php?call=edit_cdonor" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				<section>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Corporate Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input type="hidden" id="cdon_id" name="cdon_id" value="<?php echo $don_id; ?>" />
							<input type="hidden" id="cdon_uid" name="cdon_uid" value="<?php echo $r['don_uid']; ?>" />
							<input type="hidden" id="language1" name="language1" value="<?php echo $r['admin_lang'];  ?>" />
							<div class="form-group">
								<input type="text" onchange="chnge_bnm();" class="form-control required" id="corp_name" value="" name="corp_name"> 
							</div>
						</div>
					</div>
					<p class="botmarg" style="font-size:16px;">Contact Details : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Floor :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_floor" name="corp_floor" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Unit :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_unit" name="corp_unit" value=""> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_soc_nm" value="" name="corp_soc_nm"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society / Building No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_build_no" name="corp_build_no" value=""> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_add1" value="" name="corp_add1"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_add2" name="corp_add2" value=""> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Other Refernce :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_ref_add" name="corp_ref_add" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Taluka :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control botmarg" id="corp_taluka_new" name="corp_taluka_new" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Village :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_village" name="corp_village" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">District :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_taluka" name="corp_taluka" value=""> 
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
										
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">State :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control" id="state" name="state" onchange="city_nm();">
								
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
									<input type="hidden" id="citynm" name="citynm" value="" />
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pin Code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" id="corp_zip_code" name="corp_zip_code">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Mobile No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="mob_no" name="mob_no" />
								<input type="text" class="form-control required" id="corp_co_no" name="corp_co_no" style="width:80%;"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Telephone No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="corp_c_tel_no" name="corp_c_tel_no" />
								<input type="text" class="form-control" style="width:20%;float:left;" id="corp_a_tel_no" name="corp_a_tel_no" />
								<input type="text" class="form-control required" id="corp_tel_no" name="corp_tel_no" style="width:60%;"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Fax No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="corp_c_fax_no" name="corp_c_fax_no" />
								<input type="text" class="form-control" style="width:20%;float:left;" id="corp_a_fax_no" name="corp_a_fax_no" />
								<input type="text" class="form-control required" id="corp_fax_no" name="corp_fax_no" style="width:60%;"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Email :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_email" name="corp_email" value=""> 
							</div>
						</div>
					</div>
				</section>
				<section>
					<p class="topmarg" style="font-size:16px;">KYC : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration Date :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="don_regdt" name="don_regdt" onfocusout="(this.type='text')">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Corporate Logo :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['cdon_logo'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cdon_logo']; ?>" download = "newdoc">Download Logo Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cdon_logo'] == "") echo $default_img; else echo $r['cdon_logo']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="box">
									<input type="file" name="corp_logo" id="corp_logo" class="inputfile inputfile-6"/>
									<label for="corp_logo" class=""><span></span> 
										<strong>Upload Corporate Logo (PDF/JPG)</strong>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_reg_no" name="corp_reg_no" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['cdon_reg_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cdon_reg_doc']; ?>" download = "newdoc">Download Registration Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cdon_reg_doc'] == "") echo $default_img; else echo $r['cdon_reg_doc']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="box">
									<input type="file" name="corp_reg_doc" id="corp_reg_doc" class="inputfile inputfile-6" />
									<label for="corp_reg_doc" class="nospace"><span id="reg_filenm"></span> 
										<strong>Upload Registration Certificate (PDF/JPG)</strong>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pan No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="corp_pan_no" name="corp_pan_no" value=""/>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pan Card Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['cdon_pan_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cdon_pan_doc']; ?>" download = "newdoc">Download PanCard Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cdon_pan_doc'] == "") echo $default_img; else echo $r['cdon_pan_doc']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="box">
									<input type="file" name="corp_pan_doc" id="corp_pan_doc" class="inputfile inputfile-6" />
									<label for="corp_pan_doc" class="nospace"><span id="reg_filenm"></span> 
										<strong>Upload Pan Card (PDF/JPG)</strong>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Corporate Profile :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_pro" name="corp_pro" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Profile Pic :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['cdon_pic'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cdon_pic']; ?>" download = "newdoc">Download Profile Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cdon_pic'] == "") echo $default_img; else echo $r['cdon_pic']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="box">
									<input type="file" name="corp_pic" id="corp_pic" class="inputfile inputfile-6"/>
									<label for="corp_pic" class="nospace"><span></span> 
										<strong>Upload Corporate Profile Photo (PDF/JPG)</strong>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Corporate Website :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_site" name="corp_site" value=""> 
							</div>
						</div>
					</div>
				</section>
				<section>
					<p class="topmarg" style="font-size:16px;">Representative contact detail : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">First Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
							<input type="text" class="form-control" id="admin_fnm" name="admin_fnm" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Middle Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12"> 
							<div class="form-group">
								<input type="text" class="form-control" id="admin_mnm" name="admin_mnm" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Surname :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_snm" name="admin_snm" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Email Id :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_email" name="admin_email" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Blood group :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
							<div class="">
								<Select class="form-control" id="admin_bldgrp" name="admin_bldgrp">
									<option value="">Select any</option>
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
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Gender :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="">
								<Select class="form-control" id="admin_gender" name="admin_gender">
									<option>Male</option>
									<option>Female</option>
								</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Date Of Birth :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="a_dob" name="a_dob" onfocusout="(this.type='text')">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Mobile No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="mobil_no" name="mobil_no" onkeypress="javascript:return isNumber (event)"/>
								<input type="text" class="form-control" id="mob_co_code" name="mob_co_code" style="width:80%;" onkeypress="javascript:return isNumber (event)"/> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Floor :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_floor" name="admin_floor" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Unit :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_unit" name="admin_unit"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_soc_nm" name="admin_soc_nm" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society / Building No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_build_no" name="admin_build_no"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_add1" name="admin_add1" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_add2" name="admin_add2"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Other Refernce :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_ref_add" name="admin_ref_add" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Village :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_village" name="admin_village"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Taluka :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_taluka_new" name="admin_taluka_new" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">District :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_taluka" name="admin_taluka"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Country :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control country_work" id="country_work_1" name="country_work_1" onchange="work_state();" placeholder="">
					
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">State :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control state_work" id="state_work_1" name="state_work_1" onchange="city_name();" placeholder="">
          
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
								<Select class="form-control city_work" id="state_city_1" name="state_city_1" placeholder="">
									<input type="hidden" id="city_nme" name="city_nme" value="" />
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pin Code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="admin_zip_code" name="admin_zip_code" onkeypress="javascript:return isNumber (event)" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Aadhar Card No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12"> 
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_adhar_no" name="admin_adhar_no" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Aadhar Card Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['admin_adhardoc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['admin_adhardoc']; ?>" download = "newdoc">Download Aadhar Card Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['admin_adhardoc'] == "") echo $default_img; else echo $r['admin_adhardoc']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
										<input type="file" name="admin_adhar_doc" id="admin_adhar_doc" class="inputfile inputfile-6"/>
										<label for="admin_adhar_doc" class=""><span></span> 
											<strong>Upload Id Card / Aadhar Card (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>Language Spoken :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="" style="" id="langauages1" style="margin-top:12px;">
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Profile Pic :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<img src="../<?php if($r['admin_pic'] == "") echo $default_img; else echo $r['admin_pic']; ?>" height="75" width="75" />
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
										<input type="file" name="admin_pic" id="admin_pic" class="inputfile inputfile-6" />
										<label for="admin_pic" class=""><span></span> 
											<strong>Upload Photo</strong>
										</label>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Martial Status :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control" id="mar_status" name="mar_status" >
									<option value="">Select any</option>
									<option>Married</option>
									<option>Single</option>
									<option>Divorced</option>
									<option>Widowed </option>
								</select>
							</div>
						</div>
					</div>
				</section>
					<div class="form-actions noborder">
						<input type="submit" class="btn blue" id="edit_pdonor" name="edit_pdonor" value="Submit" />
						<input type="clear" class="btn default" value="Cancel"/>
					</div>
							</form>
						</div>
					</div>
				</div>
				
		<?php } else{ 
				if(isset($_SESSION['don_db_id'])){
					$don_id = $_SESSION['don_db_id'];
				}else{
					$don_id = "";
				}
				$spre = $con->query("select don_uid,don_lagu,don_adhar_doc,don_pan_doc,don_pic from donor where don_id = '$don_id'");
				$r = mysqli_fetch_array($spre);
		?>
			<div class="col-md-12" id="cdon">
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update Personal Donor Details</span>
							</div>
						</div>
				<div class="portlet-body form">
				<form role="form" id="ngoform" action="user_data.php?call=edit_pdonor" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				<section>
					<div class="row">
							<input type="hidden" id="pdon_id" name="pdon_id" value="<?php echo $don_id;  ?>" />
							<input type="hidden" id="don_uid" name="don_uid" value="<?php echo $r['don_uid'];  ?>" />
							<input type="hidden" id="language" name="language" value="<?php echo $r['don_lagu'];  ?>" />
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">First Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_fname" value="" name="don_fname"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Middle Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_mname" value="" name="don_mname">  
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Last Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_lname" value="" name="don_lname"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Blood Group :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div style="" class="">
									<Select class="form-control" id="don_bldgrp" name="don_bldgrp">
										<option value="">Select any</option>
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
							<p style="margin-top:7px;">Gender :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="">
								<Select class="form-control" id="don_gender" name="don_gender">
									<option>Male</option>
									<option>Female</option>
								</select>
								</div>
							</div>
						</div>
					</div>
					<p class="topmarg" style="font-size:16px;">Contact Details : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Floor :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_floor" name="don_floor" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Unit :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_unit" name="don_unit" value=""> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society / Building No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_build_no" name="don_build_no" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_soc_nm" value="" name="don_soc_nm"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_add1" value="" name="don_add1"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_add2" name="don_add2" value=""> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Other Reference :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_ref_add" name="don_ref_add" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Taluka :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control botmarg" id="taluka_new" name="taluka_new" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Village :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_village" name="don_village" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">District :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_taluka" name="don_taluka" value=""> 
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
								
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">State :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control" id="state" name="state" onchange="city_nm();">
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
									<input type="hidden" id="citynm" name="citynm" value=""/>
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pin Code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" id="don_zip_code" name="don_zip_code">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Mobile No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="don_c_code" name="don_c_code" />
								<input type="text" class="form-control required" id="don_co_no" name="don_co_no" style="width:80%;">  
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Telephone Code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group"> 
								<input type="text" class="form-control" style="width:20%;float:left;" id="don_c_tel_no" name="don_c_tel_no" />
								<input type="text" class="form-control" style="width:20%;float:left;" id="don_a_tel_no" name="don_a_tel_no" />
								<input type="text" class="form-control required" id="don_tel_no" name="don_tel_no" style="width:60%;"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Fax No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="don_c_fax_no" name="don_c_fax_no" />
								<input type="text" class="form-control" style="width:20%;float:left;" id="don_a_fax_no" name="don_a_fax_no" />
								<input type="text" class="form-control required" id="don_fax_no" name="don_fax_no" style="width:60%;"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Email :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="don_email" name="don_email" value=""> 
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
							<input type="text" class="form-control required" id="don_dob" name="don_dob" style="margin-bottom:15px;"> 
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Language Spoken :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="topmarg" style="margin-top: 7px;margin-bottom:15px;">
								<div class="" style="" id="langauages">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Aadhar No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" id="don_adhar_no" name="don_adhar_no" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Aadhar Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['don_adhar_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['don_adhar_doc']; ?>" download = "newdoc">Download Aadhar Card Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['don_adhar_doc'] == "") echo $default_img; else echo $r['don_adhar_doc']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
									<input type="file" name="don_adhar_doc" id="don_adhar_doc" class="inputfile inputfile-6"/>
									<label for="don_adhar_doc" class="nospace"><span></span> 
										<strong>Upload Adhar Card Doc (PDF/JPG)</strong>
									</label>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pan No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" id="don_pan_no" name="don_pan_no" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pan Card Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['don_pan_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['don_pan_doc']; ?>" download = "newdoc">Download Pan Card Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['don_pan_doc'] == "") echo $default_img; else echo $r['don_pan_doc']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
									<input type="file" name="don_pan_doc" id="don_pan_doc" class="inputfile inputfile-6"/>
									<label for="don_pan_doc" class="nospace"><span></span> 
										<strong>Upload Pan Doc (PDF/JPG)</strong>
									</label>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Profile Pic :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
							<img src="../<?php if($r['don_pic'] == "") echo $default_img; else echo $r['don_pic']; ?>" height="75" width="75" />
						</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
										<input type="file" name="don_pic" id="don_pic" class="inputfile inputfile-6"/>
										<label for="don_pic" class="nospace"><span></span> 
											<strong>Upload Photo (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="form-actions noborder">
					<input type="submit" class="btn blue" id="edit_cdonor" name="edit_cdonor" value="Submit" />
					<input type="clear" class="btn default" value="Cancel"/>
				</div>
				</section>
							</form>
						</div>
					</div>
			</div>
		<?php } ?>
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
	country_name();
	ind_state();
	all_cities();
	work_country();
	work_ind_state();
	ngo_name();
	vol_name();
	
	
	
	var tp = document.getElementById("type").value;
	if(tp == "c_donor"){
		copro_data();
		langauge_spk1();
	}else{
		personal_data();
		langauge_spk();
	}
    //});
	
	$('input[type="file"]').change(function(e){
		//alert("1");
		var fileName = e.target.files[0].name;
		//alert('The file "' + fileName +  '" has been selected.');
		getFileExtension(fileName);
	});
	
});

function copro_data(){
	var dbid = document.getElementById("cdon_id").value;
	//alert(ring_id);
	$.ajax({
		type:"post", 
		data:"dbid="+dbid,
		url:"user_data.php?call=corp_don_data",
		success:function(msg){
			//alert(msg);
			var msga = msg.split("~");
			$("#corp_name").val(msga[0]);
			$("#corp_add1").val(msga[1]);
			$("#corp_add2").val(msga[2]);
			$("#corp_soc_nm").val(msga[3]);
			$("#corp_build_no").val(msga[4]);
			$("#corp_floor").val(msga[5]);
			$("#corp_unit").val(msga[6]);
			$("#corp_ref_add").val(msga[7]);
			$("#corp_village").val(msga[8]);
			$("#corp_taluka").val(msga[9]);
			$("#country").val(msga[10]);
			$("#state").val(msga[11]);
			$("#city").val(msga[12]);
			$("#corp_zip_code").val(msga[13]);
			var c1nm = msga[14].split("-");
			$("#mob_no").val(c1nm[0]);
			$("#corp_co_no").val(c1nm[1]);
			var t1nm = msga[15].split("-");
			$("#corp_c_tel_no").val(t1nm[0]);
			$("#corp_a_tel_no").val(t1nm[1]);
			$("#corp_tel_no").val(t1nm[2]);
			var f1nm = msga[16].split("-");
			$("#corp_c_fax_no").val(f1nm[0]);
			$("#corp_a_fax_no").val(f1nm[1]);
			$("#corp_fax_no").val(f1nm[2]);
			$("#corp_email").val(msga[17]);
			$("#don_regdt").val(msga[18]);
			$("#corp_reg_no").val(msga[19]);
			$("#corp_pan_no").val(msga[20]);
			$("#corp_pro").val(msga[21]);
			$("#corp_site").val(msga[22]);
			$("#admin_fnm").val(msga[23]);
			$("#admin_mnm").val(msga[24]);
			$("#admin_snm").val(msga[25]);
			$("#admin_email").val(msga[26]);
			$("#admin_bldgrp").val(msga[27]);
			$("#admin_gender").val(msga[28]);
			$("#a_dob").val(msga[29]);
			var ad_m = msga[30].split("-");
			$("#mobil_no").val(ad_m[1]);
			$("#mob_co_code").val(ad_m[0]);
			$("#admin_floor").val(msga[31]);
			$("#admin_unit").val(msga[32]);
			$("#admin_soc_nm").val(msga[33]);
			$("#admin_build_no").val(msga[34]);
			$("#admin_add1").val(msga[35]);
			$("#admin_add2").val(msga[36]);
			$("#admin_ref_add").val(msga[37]);
			$("#admin_village").val(msga[38]);
			$("#admin_taluka").val(msga[40]);
			$("#admin_taluka_new").val(msga[39]);
			if(msga[41] != ""){
				$("#country_work_1").val(msga[41]);
			}else{
				
			}
			if(msga[42] != ""){
				$("#state_work_1").val(msga[42]);
			}else{
				
			}
			if(msga[43] != ""){
				$("#state_city_1").val(msga[43]);
				$("#city_nme").val(msga[43]);
				dbcity2();
			}else{
				
			}			
			$("#admin_zip_code").val(msga[44]);
			$("#admin_adhar_no").val(msga[45]);
			$("#mar_status").val(msga[46]);
			$("#corp_taluka_new").val(msga[47]);
		}
	});
}

function personal_data(){
	var dbid = document.getElementById("pdon_id").value;        
	//alert(ring_id);
	$.ajax({
		type:"post", 
		data:"dbid="+dbid,
		url:"user_data.php?call=pers_don_data",
		success:function(msg){
			//alert(msg);
			var msga = msg.split("~");
			$("#don_fname").val(msga[0]);
			$("#don_mname").val(msga[1]);
			$("#don_lname").val(msga[2]);
			$("#don_bldgrp").val(msga[3]);
			$("#don_gender").val(msga[4]);
			$("#don_add1").val(msga[5]);
			$("#don_add2").val(msga[6]);
			$("#don_soc_nm").val(msga[7]);
			$("#don_build_no").val(msga[8]);
			$("#don_floor").val(msga[9]);
			$("#don_unit").val(msga[10]);
			$("#don_ref_add").val(msga[11]);
			$("#don_village").val(msga[12]);
			$("#don_taluka").val(msga[13]);
			$("#taluka_new").val(msga[26]);
			if(msga[14] != ""){
				$("#country_work_1").val(msga[14]);
			}else{
				
			}
			if(msga[15] != ""){
				$("#state_work_1").val(msga[15]);
			}else{
				
			}
			if(msga[16] != ""){
				$("#city").val(msga[16]);
				$("#citynm").val(msga[16]);
				dbcity1();
			}else{
				
			}		
			$("#don_zip_code").val(msga[17]);
			var cnm = msga[18].split("-");
			$("#don_c_code").val(cnm[0]);
			$("#don_co_no").val(cnm[1]);
			var tnm = msga[19].split("-");
			$("#don_c_tel_no").val(tnm[0]);
			$("#don_a_tel_no").val(tnm[1]);
			$("#don_tel_no").val(tnm[2]);
			var fnm = msga[20].split("-");
			$("#don_c_fax_no").val(fnm[0]);
			$("#don_a_fax_no").val(fnm[1]);
			$("#don_fax_no").val(fnm[2]);
			$("#don_email").val(msga[21]);
			$("#don_dob").val(msga[22]);
			$("#language").val(msga[23]);
			$("#don_adhar_no").val(msga[24]);
			$("#don_pan_no").val(msga[25]);
		}
	});
}



function dbcity1(){
	var citid = document.getElementById('citynm').value;
	$.ajax({
		type:"post",
		data:"citid="+citid, 
		url:"user_data.php?call=db_city",
		success:function(msg){
			$("#city").html(msg);
		}
	});
}

function dbcity2(){
	//alert(1);
	var citid = document.getElementById('city_nme').value;
	$.ajax({
		type:"post",
		data:"citid="+citid, 
		url:"user_data.php?call=db_city",
		success:function(msg){
			$("#state_city_1").html(msg);
		}
	});
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

function show_ngo() {
	alert("1");
	if(document.getElementById("ngo_ref").checked == true  && document.getElementById("vol_ref").checked == false && document.getElementById("no_ref").checked == false){
		$("#ngo_drop").css({"display":"block"});
		$("#vol_drop").css({"display":"none"});
		$("#oth_ref").css({"display":"none"});
	}else if(document.getElementById("vol_ref").checked == true && document.getElementById("ngo_ref").checked == false && document.getElementById("no_ref").checked == false){
		$("#ngo_drop").css({"display":"none"});
		$("#vol_drop").css({"display":"block"});
		$("#oth_ref").css({"display":"none"});
	}else if(document.getElementById("no_ref").checked == true && document.getElementById("ngo_ref").checked == false && document.getElementById("vol_ref").checked == false){
		$("#ngo_drop").css({"display":"none"});
		$("#vol_drop").css({"display":"none"});
		$("#oth_ref").css({"display":"block"});
	}
}

function show_text() {
	if(document.getElementById("supp_gov_ys").checked == true){
		$("#what_gov_supp").css({"display":"block"});
	}else if(document.getElementById("supp_gov_no").checked == true){
		$("#what_gov_supp").css({"display":"none"});
	}else {
		$("#what_gov_supp").css({"display":"none"});   
	}
}

function show_ngo_supp() {
	if(document.getElementById("supp_ys").checked == true){
		$("#wht_supp_txt").css({"display":"block"});
		$("#ngo_nm_supp").css({"display":"block"});
	}else if(document.getElementById("supp_no").checked == true){
		$("#wht_supp_txt").css({"display":"none"});
		$("#ngo_nm_supp").css({"display":"none"});
	}else {
		$("#wht_supp_txt").css({"display":"none"});
		$("#ngo_nm_supp").css({"display":"none"});
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