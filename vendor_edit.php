<!DOCTYPE html>

<html lang="en">

<?php include("header.php");
	  include("../config.php");
		if(isset($_SESSION['ermsg']) and $_SESSION['ermsg'] != ''){
			echo "<script>alert('".$_SESSION['ermsg']."')</script>";
			$_SESSION['ermsg'] = '';
		}else {
			//echo "<script>alert('session not stored');</script>";
		}
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
						<a href="admin_user.php">Vendor Details</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php 
		if(isset($_SESSION['ven_db_id'])){
			$ven_id = $_SESSION['ven_db_id'];
		}else{
			$ven_id = "";
		}
		$spre = $con->query("select admin_lang,cven_logo,cven_reg_doc,cven_pan_doc,cven_pic,cven_bank_proof,admin_adhardoc ,admin_pic from vendor where ven_id = '$ven_id'");
		$r = mysqli_fetch_array($spre);
		$type = $_SESSION['user_type'];
		global $con ;
?>
		<input type="hidden" value="<?php echo $type; ?>" id="type" name="type" />
		<input type="hidden" id="language" name="language" value="<?php echo $r['admin_lang'];  ?>" />
<?php
		if($type == "c_vendor"){
			   
?>
				<div class="col-md-12" id="pdon">
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update Corporate / NGO Vendor Details</span>
							</div>
						</div>
						<div class="portlet-body form"><!--onsubmit="return school_submit()"-->
				<form role="form" id="ngoform" action="user_data.php?call=edit_cvendor" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				<section>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Corporate Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input type="hidden" id="cven_id" name="cven_id" value="<?php echo $ven_id; ?>" />
							<input type="hidden" id="cven_uid" name="cven_uid" value="" />
							<input type="hidden" id="language" name="language" value="<?php echo $r['language_spk'];  ?>" />
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
								<input class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="dt_reg" name="dt_reg" onfocusout="(this.type='text')">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Corporate Logo :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['cven_logo'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cven_logo']; ?>" download = "newdoc">Download Logo Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cven_logo'] == "") echo $default_img; else echo $r['cven_logo']; ?>" height="75" width="75" />
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
								<?php $extnm = pathinfo($r['cven_reg_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cven_reg_doc']; ?>" download = "newdoc">Download Registration Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cven_reg_doc'] == "") echo $default_img; else echo $r['cven_reg_doc']; ?>" height="75" width="75" />
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
								<?php $extnm = pathinfo($r['cven_pan_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cven_pan_doc']; ?>" download = "newdoc">Download PanCard Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cven_pan_doc'] == "") echo $default_img; else echo $r['cven_pan_doc']; ?>" height="75" width="75" />
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
								<?php $extnm = pathinfo($r['cven_pic'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cven_pic']; ?>" download = "newdoc">Download Profile Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cven_pic'] == "") echo $default_img; else echo $r['cven_pic']; ?>" height="75" width="75" />
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
							<p style="margin-top:7px;">Corporate Site :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="corp_site" name="corp_site" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">NGO :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
							<Select class="form-control" placeholder="" id="sel_ngo" name="sel_ngo">

							</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Volunteer :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
							<Select class="form-control" placeholder="" id="sel_vol_corp" name="sel_vol_corp">

							</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Other :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="" id="oth_ref_nm" name="oth_ref_nm"/>
							</div>
						</div>
					</div>
				</section>
				<section>
					<p class="botmarg" style="font-size:16px;">Bank Details : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Account Holder Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
							<input type="text" class="form-control" style="" id="c_acc_nm" name="c_acc_nm" readonly />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Branch Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="" id="c_brnch_nm" name="c_brnch_nm"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Bank Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12"> 
							<div class="form-group">
							<input type="text" class="form-control" style="" id="c_bank_nm" name="c_bank_nm"/>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">IFSC No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="" id="c_ifsc_no" name="c_ifsc_no"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Account No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
							<input type="text" class="form-control" style="" id="c_acc_no" name="c_acc_no"/>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Bank Proof Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['cven_bank_proof'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['cven_bank_proof']; ?>" download = "newdoc">Download Bank Proof Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['cven_bank_proof'] == "") echo $default_img; else echo $r['cven_bank_proof']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
										<input type="file" name="c_bank_proof" id="c_bank_proof" class="inputfile inputfile-6"/>
										<label for="c_bank_proof" class=""><span></span> 
											<strong>Upload Bank Proof (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<p class="botmarg" style="font-size:16px;">Representative contact detail : </p>
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
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Position :</p> 
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control" id="ven_position" name="ven_position">
									<option>Manger</option>
									<option>Proprietor</option>
									<option>Partner </option>
									<option>Director  </option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-actions noborder">
						<input type="submit" class="btn blue" id="edit_pdonor" name="edit_pdonor" value="Submit" />
						<input type="clear" class="btn default" value="Cancel"/>
					</div>
				</section>
							</form>
						</div>
					</div>
				</div>
				
		<?php } else{ 
				if(isset($_SESSION['ven_db_id'])){
					$ven_id = $_SESSION['ven_db_id'];
				}else{
					$ven_id = "";
				}
				$spre = $con->query("select ven_lang,ven_ahdar_doc,ven_pan_doc,ven_pic,bank_proof from vendor where ven_id = '$ven_id'");
				$r = mysqli_fetch_array($spre);
				
		?>
		<input type="hidden" id="language1" name="language1" value="<?php echo $r['ven_lang'];  ?>" />
			<div class="col-md-12" id="cdon">
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update Personal Vendor Details</span>
							</div>
						</div>
						<div class="portlet-body form"><!--onsubmit="return school_submit()" -->
				<form role="form" id="ngoform" action="user_data.php?call=edit_pvendor" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				<section>
					<div class="row">
							<input type="hidden" id="pven_id" name="pven_id" value="<?php echo $ven_id;  ?>" />
							<input type="hidden" id="pven_uid" name="pven_uid" value="" />
							<input type="hidden" id="language" name="language" value="<?php echo $r['ven_lang'];  ?>" />
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">First Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_fname" value="" name="ven_fname"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Middle Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_mname" value="" name="ven_mname">  
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Last Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_lname" value="" name="ven_lname"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Blood Group :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div style="" class="topmarg">
									<Select class="form-control" id="ven_bldgrp" name="ven_bldgrp">
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
								<Select class="form-control" id="ven_gender" name="ven_gender">
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
							<p style="margin-top:7px;">Address1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_add1" value="" name="ven_add1"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_add2" name="ven_add2" value=""> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_soc_nm" value="" name="ven_soc_nm"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society / Building No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_build_no" name="ven_build_no" value=""> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Floor :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_floor" name="ven_floor" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Unit :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_unit" name="ven_unit" value=""> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Other Reference :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_ref_add" name="ven_ref_add" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Taluka :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control botmarg" placeholder="Taluka *" id="taluka_new" name="taluka_new" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Village :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_village" name="ven_village" value=""> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Taluka :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_taluka" name="ven_taluka" value=""> 
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
								<input type="text" class="form-control" value="" id="ven_zip_code" name="ven_zip_code">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Mobile No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="ven_c_code" name="ven_c_code" />
								<input type="text" class="form-control required" id="ven_co_no" name="ven_co_no" style="width:80%;">  
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pin Code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group"> 
								<input type="text" class="form-control" style="width:20%;float:left;" id="ven_c_tel_no" name="ven_c_tel_no" />
								<input type="text" class="form-control" style="width:20%;float:left;" id="ven_a_tel_no" name="ven_a_tel_no" />
								<input type="text" class="form-control required" id="ven_tel_no" name="ven_tel_no" style="width:60%;"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Fax No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="ven_c_fax_no" name="ven_c_fax_no" />
								<input type="text" class="form-control" style="width:20%;float:left;" id="ven_a_fax_no" name="ven_a_fax_no" />
								<input type="text" class="form-control required" id="ven_fax_no" name="ven_fax_no" style="width:60%;"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Email :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ven_email" name="ven_email" value=""> 
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
							<input type="text" class="form-control required" id="ven_dob" name="ven_dob" style="margin-bottom:15px;"> 
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
								<input type="text" class="form-control" value="" id="ven_adhar_no" name="ven_adhar_no" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Aadhar Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['ven_ahdar_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['ven_ahdar_doc']; ?>" download = "newdoc">Download Aadhar Card Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['ven_ahdar_doc'] == "") echo $default_img; else echo $r['ven_ahdar_doc']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
									<input type="file" name="ven_adhar_doc" id="ven_adhar_doc" class="inputfile inputfile-6"/>
									<label for="ven_adhar_doc" class="nospace"><span></span> 
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
								<input type="text" class="form-control" value="" id="ven_pan_no" name="ven_pan_no" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pan Card Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['ven_pan_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['ven_pan_doc']; ?>" download = "newdoc">Download Pan Card Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['ven_pan_doc'] == "") echo $default_img; else echo $r['ven_pan_doc']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
									<input type="file" name="ven_pan_doc" id="ven_pan_doc" class="inputfile inputfile-6"/>
									<label for="ven_pan_doc" class="nospace"><span></span> 
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
							<img src="../<?php if($r['ven_pic'] == "") echo $default_img; else echo $r['ven_pic']; ?>" height="75" width="75" />
						</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
										<input type="file" name="ven_pic" id="ven_pic" class="inputfile inputfile-6"/>
										<label for="ven_pic" class="nospace"><span></span> 
											<strong>Upload Photo (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top:15px;">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">NGO :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
							<Select class="form-control" placeholder="" id="sel_ngo" name="sel_ngo">

							</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Volunteer :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
							<Select class="form-control" placeholder="" id="sel_vol" name="sel_vol">

							</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Other :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="" id="oth_ref_nm" name="oth_ref_nm"/>
							</div>
						</div>
					</div>
				</section>
				<section>
					<p class="topmarg" style="font-size:16px;">Bank Details : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Account Holder Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="acc_nm" name="acc_nm" />							
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Branch Name :</p> 
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="brnch_nm" name="brnch_nm" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Account No. :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="acc_no" name="acc_no" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Bank Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="bank_nm" name="bank_nm"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">IFSC Code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" id="ifsc_no" name="ifsc_no" />
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Bank Doc :</p> 
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;margin-bottom:10px;">
								<?php $extnm = pathinfo($r['bank_proof'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['bank_proof']; ?>" download = "newdoc">Download Bank Proof Doc</a>
								<?php }else{ ?>
								<img src="../<?php if($r['bank_proof'] == "") echo $default_img; else echo $r['bank_proof']; ?>" height="75" width="75" />
								<?php } ?>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="form-group">
									<div class="box">
										<input type="file" name="bank_proof" id="bank_proof" class="inputfile inputfile-6"/>
										<label for="bank_proof" class=""><span></span> 
											<strong>Upload Bank Proof (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<div class="form-actions noborder">
						<input type="submit" class="btn blue" id="edit_pvendor" name="edit_pvendor" value="Submit" />
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
<?php //include('quick_sidebar.php'); ?>
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
	maha_cities();
	work_country();
	work_ind_state();
	ngo_name();
	vol_name();
	langauge_spk();
	
	
	var tp = document.getElementById("type").value;
	if(tp == "c_vendor"){
		copro_data();
		//dbcity1();
	}else{
		personal_data();
		//dbcity();
	}
	
	$('input[type="file"]').change(function(e){
		//alert("1");
		var fileName = e.target.files[0].name;
		//alert('The file "' + fileName +  '" has been selected.');
		getFileExtension(fileName);
	});
	
	$("#corp_name").change(function (){
		//alert("1");
		//var ng_nm = $(this).val();
		var vnnm = $(this).val();
		//alert(ngnm);
		document.getElementById('c_acc_nm').value = vnnm;
	});
	
});

function copro_data(){
	var dbid = document.getElementById("cven_id").value;
	//alert(dbid);
	$.ajax({
		type:"post", 
		data:"dbid="+dbid,
		url:"user_data.php?call=corp_ven_data",
		success:function(msg){
			//alert(msg);
			var msga = msg.split("~");
			//alert(msga[58]);
			$("#cven_uid").val(msga[58]);
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
			$("#corp_taluka_new").val(msga[10]);
			if(msga[11] != ""){
				$("#country").val(msga[11]);
			}else{
				
			}
			if(msga[12] != ""){
				$("#state").val(msga[12]);
			}else{
				
			}
			if(msga[13] != ""){
				$("#city").val(msga[13]);
				$("#citynm").val(msga[13]);
				dbcity1();
			}else{
				
			}
			$("#corp_zip_code").val(msga[14]);
			var c1nm = msga[15].split("-");
			$("#mob_no").val(c1nm[0]);
			$("#corp_co_no").val(c1nm[1]);
			var t1nm = msga[16].split("-");
			$("#corp_c_tel_no").val(t1nm[0]);
			$("#corp_a_tel_no").val(t1nm[1]);
			$("#corp_tel_no").val(t1nm[2]);
			var f1nm = msga[17].split("-");
			$("#corp_c_fax_no").val(f1nm[0]);
			$("#corp_a_fax_no").val(f1nm[1]);
			$("#corp_fax_no").val(f1nm[2]);
			$("#corp_email").val(msga[18]);
			$("#dt_reg").val(msga[19]);
			$("#corp_reg_no").val(msga[20]);
			$("#corp_pan_no").val(msga[21]);
			$("#corp_pro").val(msga[22]);
			$("#corp_site").val(msga[23]);
			$("#sel_ngo").val(msga[24]);
			$("#sel_vol_corp").val(msga[25]);
			$("#oth_ref_nm").val(msga[26]);      
			$("#c_acc_nm").val(msga[27]);
			$("#c_brnch_nm").val(msga[28]);
			$("#c_acc_no").val(msga[29]);
			$("#c_bank_nm").val(msga[30]);   
			$("#c_ifsc_no").val(msga[31]);
			$("#admin_fnm").val(msga[32]);
			$("#admin_mnm").val(msga[33]);
			$("#admin_snm").val(msga[34]);
			$("#admin_email").val(msga[35]);
			$("#admin_bldgrp").val(msga[36]);
			$("#admin_gender").val(msga[37]); 
			$("#a_dob").val(msga[38]);
			var monm = msga[39].split("-");
			$("#mobil_no").val(monm[0]);
			$("#mob_co_code").val(monm[1]);
			$("#admin_floor").val(msga[40]);
			$("#admin_unit").val(msga[41]);
			$("#admin_soc_nm").val(msga[42]);
			$("#admin_build_no").val(msga[43]);
			$("#admin_add1").val(msga[44]);
			$("#admin_add2").val(msga[45]);
			$("#admin_ref_add").val(msga[46]);
			$("#admin_village").val(msga[47]);
			$("#admin_taluka").val(msga[48]);
			$("#admin_taluka_new").val(msga[49]);
			if(msga[50] != ""){
				$("#country_work_1").val(msga[50]);
			}else{
				
			}
			if(msga[51] != ""){
				$("#state_work_1").val(msga[51]);
			}else{
				
			}
			if(msga[52] != ""){
				$("#state_city_1").val(msga[52]);
				$("#city_nme").val(msga[52]);
				dbcity2();
			}else{
				
			}			
			//$("#country_work_1").val(msga[50]);
			//$("#state_work_1").val(msga[51]);
			//$("#state_city_1").val(msga[52]);
			$("#admin_zip_code").val(msga[53]);
			$("#admin_adhar_no").val(msga[54]);
			$("#language").val(msga[55]);
			$("#mar_status").val(msga[56]);
			$("#ven_position").val(msga[57]);  
		}
	});
}

function personal_data(){
	var dbid = document.getElementById("pven_id").value;
	//alert(ring_id);
	$.ajax({
		type:"post", 
		data:"dbid="+dbid,
		url:"user_data.php?call=pers_ven_data",
		success:function(msg){
			//alert(msg);
			var msga = msg.split("~");
			$("#ven_fname").val(msga[0]);
			$("#ven_mname").val(msga[1]);
			$("#ven_lname").val(msga[2]);
			$("#ven_bldgrp").val(msga[3]);
			$("#ven_gender").val(msga[4]);
			$("#ven_add1").val(msga[5]);
			$("#ven_add2").val(msga[6]);
			$("#ven_soc_nm").val(msga[7]);
			$("#ven_build_no").val(msga[8]);
			$("#ven_floor").val(msga[9]);
			$("#ven_unit").val(msga[10]);
			$("#ven_ref_add").val(msga[11]);
			$("#ven_village").val(msga[12]);
			$("#taluka_new").val(msga[13]);
			$("#ven_taluka").val(msga[14]);
			if(msga[15] != ""){
				$("#country").val(msga[15]);
			}else{
				
			}
			if(msga[16] != ""){
				$("#state").val(msga[16]);
			}else{
				
			}
			if(msga[17] != ""){
				$("#city").val(msga[17]);
				$("#citynm").val(msga[17]);
				dbcity();
			}else{
				
			}
			$("#ven_zip_code").val(msga[18]);
			var cnm = msga[19].split("-");
			$("#ven_c_code").val(cnm[0]);
			$("#ven_co_no").val(cnm[1]);
			var tnm = msga[20].split("-");
			$("#ven_c_tel_no").val(tnm[0]);
			$("#ven_a_tel_no").val(tnm[1]);
			$("#ven_tel_no").val(tnm[2]);
			var fnm = msga[21].split("-");
			$("#ven_c_fax_no").val(fnm[0]);
			$("#ven_a_fax_no").val(fnm[1]);
			$("#ven_fax_no").val(fnm[2]);
			$("#ven_email").val(msga[22]);
			$("#ven_dob").val(msga[23]);
			$("#language1").val(msga[24]);
			$("#ven_adhar_no").val(msga[25])
			$("#ven_pan_no").val(msga[26]);
			$("#sel_ngo").val(msga[27]);
			$("#sel_vol").val(msga[28]);
			$("#oth_ref_nm").val(msga[29]);      
			$("#acc_nm").val(msga[30]);
			$("#brnch_nm").val(msga[31]);
			$("#acc_no").val(msga[32]);
			$("#bank_nm").val(msga[33]);
			$("#ifsc_no").val(msga[34]);
			$("#pven_uid").val(msga[35]);
		}
	});
}

function dbcity(){
	//alert(1);
	var citid = document.getElementById('citynm').value;
	//alert(citid);
	$.ajax({
		type:"post",
		data:"citid="+citid, 
		url:"user_data.php?call=db_city",
		success:function(msg){
			//alert(msg);
			$("#city").html(msg);
		}
	});
}



function dbcity1(){
	//alert(1);
	var citid = document.getElementById('citynm').value;
	//var citid = document.getElementById('city_nm').value;
	$.ajax({
		type:"post",
		data:"citid="+citid, 
		url:"user_data.php?call=db_city",
		success:function(msg){
			//alert(msg);
			$("#city").html(msg);
			//$("#state_city_1").html(msg);
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
			//alert(msg);
			//$("#city").html(msg);
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

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>