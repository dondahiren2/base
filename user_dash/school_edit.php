 
<?php
	include("header.php");
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
						<a href="admin_user.php">School Details</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php 
		//date('m/d/y', strtotime($date));
		
		if(isset($_GET['id']) && $_GET['id'] != ''){
			$scl_id = $_GET['id'];
			$_SESSION['scl_db_id'] = $_GET['id'];
		}else if (isset($_SESSION['scl_db_id'])){
			$scl_id = $_SESSION['scl_db_id'];
		}else{
			session_destroy();
			echo "<script>window.location = 'index.php'</script>";
		}
		
		$spre = $con->query("select * from school_register where schl_id = '$scl_id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			
			if($r['schl_wtgov_supp'] != ""){
				$gov_sup = $r['schl_wtgov_supp'];
				//echo "value = ".$gov_sup;
			}else {
				$gov_sup = '';
			}
			
			if($r['wht_ngo_supp'] != "" && $r['ngo_nm_supp'] != ""){
				$wht_sup = $r['wht_ngo_supp'];
				$ngo_sup_nm = $r['ngo_nm_supp'];
			}else{
				$wht_sup = '';
				$ngo_sup_nm = '';
			}
?>

				<div class="col-md-12">
					
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo"> 
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Update School Details</span>
							</div>
						</div>
						<div class="portlet-body form"><!--onsubmit="return valid_school()"-->
				<form role="form" id="ngoform" action="user_data.php?call=edit_school" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
				<section>
					<input type="hidden" id="gov_sup" name="gov_sup" value="<?php echo $gov_sup;  ?>" />
					<input type="hidden" id="language" name="language" value="<?php echo $r['admin_lang'];  ?>" />
					<input type="hidden" id="wht_sup" name="wht_sup" value="<?php echo $wht_sup;  ?>" />
					<input type="hidden" id="ngo_sup_nm" name="scl_id" value="<?php echo $ngo_sup_nm;  ?>" />
					<input type="hidden" id="scl_id" name="scl_id" value="<?php echo $scl_id;  ?>" />
					<input type="hidden" id="schl_uid" name="schl_uid" value="<?php echo $r['schl_uid'];  ?>" />
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">School Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_name" value="<?php echo $r['schl_nm']; ?>" name="scl_name"> 
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
								<input type="text" class="form-control required" id="scl_floor" name="scl_floor" value="<?php echo $r['schl_floor']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Unit :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_unit" name="scl_unit" value="<?php echo $r['schl_unit']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_soc_nm" value="<?php echo $r['schl_socnm']; ?>" name="scl_soc_nm"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_build_no" name="scl_build_no" value="<?php echo $r['schl_build_no']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_add1" value="<?php echo $r['schl_add1']; ?>" name="scl_add1"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_add2" name="scl_add2" value="<?php echo $r['schl_add2']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Other Refernce :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_ref_add" name="scl_ref_add" value="<?php echo $r['schl_ref_add']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Village :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_village" name="scl_village" value="<?php echo $r['schl_village']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Taluka :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_taluka_new" name="scl_taluka_new" value="<?php echo $r['schl_taluka']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">District :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_taluka" name="scl_taluka" value="<?php echo $r['schl_district']; ?>"> 
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
						<?php if($r['schl_country'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $co_nm = $con->query("select id,name from countries");
						$admin_cont = '';
						while($cnm = mysqli_fetch_array($co_nm)){
							if($r['schl_country'] == $cnm['id']){
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
								<Select class="form-control" id="state" name="state" onchange="city_nm();">
									<?php if($r['schl_state'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select id,name from states where country_id = '$admin_cont'");
						$admin_state = '';
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['schl_state'] == $stnm['id']){
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
								<?php if($r['schl_city'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ct_nm = $con->query("select id,name from cities where state_id = '$admin_state'");
						while($ctnm = mysqli_fetch_array($ct_nm)){
							if($r['schl_city'] == $ctnm['id']){
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
							<p style="margin-top:7px;">PinCode :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" value="<?php echo $r['schl_pin']; ?>" id="scl_zip_code" name="scl_zip_code">
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
								<input type="hidden" class="form-control required" id="hiddn_m_no" name="hiddn_m_no" value="<?php echo $r['schl_mobile']; ?>"> 
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
								<input type="hidden" class="form-control required" id="hiddn_tel_no" name="hiddn_tel_no" value="<?php echo $r['schl_tele_no']; ?>"> 
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
								<input type="hidden" class="form-control required" id="hiddn_fax_no" name="hiddn_fax_no" value="<?php echo $r['schl_fax']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Email :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="scl_email" name="scl_email" value="<?php echo $r['schl_email']; ?>"> 
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
								<input placeholder="Date Of Registration" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="d_reg" name="d_reg" onfocusout="(this.type='text')" value="<?php echo $r['register_date']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration No1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="Registration No1" id="scl_reg_no" name="scl_reg_no" value="<?php echo $r['schl_register_no']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration Doc1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['schl_register_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['schl_register_doc']; ?>" download = "newdoc">Download Registration Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['schl_register_doc'] == "") echo $default_img; else echo $r['schl_register_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="scl_reg_doc" id="scl_reg_doc" class="inputfile inputfile-6" />
										<label for="scl_reg_doc" class="nospace"><span id="reg_filenm"></span> 
											<strong>Upload Registration Certificate1 (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration NO2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Registration No2" id="scl_reg_no2" name="scl_reg_no2" value="<?php echo $r['schl_register_no2']; ?>"/>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration Doc2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['schl_register_doc2'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['schl_register_doc2']; ?>" download = "newdoc">Download Registration Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['schl_register_doc2'] == "") echo $default_img; else echo $r['schl_register_doc2']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="scl_reg_doc2" id="scl_reg_doc2" class="inputfile inputfile-6" />
										<label for="scl_reg_doc2" class="nospace"><span id="reg_filenm"></span> 
											<strong>Upload Registration Certificate2 (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Tax Examption No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="Tax Exemption No" id="scl_tax_no" name="scl_tax_no" value="<?php echo $r['schl_tax_no']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Tax Examption Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['schl_tax_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['schl_tax_doc']; ?>" download = "newdoc">Download Tax Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['schl_tax_doc'] == "") echo $default_img; else echo $r['schl_tax_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="scl_tax_doc" id="scl_tax_doc" class="inputfile inputfile-6" />
										<label for="scl_tax_doc" class="nospace"><span id="tax_filenm"></span> 
											<strong>Upload Tax Exemption Certificate (PDF/JPG)</strong>
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
								<input type="text" class="form-control required" placeholder="Pan card No" id="scl_pan_no" name="scl_pan_no" value="<?php echo $r['schl_pancard_no']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pan Card Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['schl_pancard_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['schl_pancard_doc']; ?>" download = "newdoc">Download PanCard Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['schl_pancard_doc'] == "") echo $default_img; else echo $r['schl_pancard_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="scl_pan_doc" id="scl_pan_doc" class="inputfile inputfile-6"/>
										<label for="scl_pan_doc" class="nospace"><span></span> 
											<strong>Upload PanCard (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address Proof :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['schl_add_proof'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['schl_add_proof']; ?>" download = "newdoc">Download PanCard Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['schl_add_proof'] == "") echo $default_img; else echo $r['schl_add_proof']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="scl_add_proof" id="scl_add_proof" class="inputfile inputfile-6"/>
											<label for="scl_add_proof" class="nospace"><span></span> 
											<strong>Upload Address Proof (PDF/JPG)</strong>
											</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">School Photos :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<img src="../<?php if($r['schl_pics'] == "") echo $default_img; else echo $r['schl_pics']; ?>" height="75" width="75" />
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="scl_pics[]" id="scl_pics" class="inputfile inputfile-6" multiple="multiple"/>
										<label for="scl_pics" class="nospace"><span name=""></span> 
											<strong>Upload School Photos (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">No Of Staff :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="Total No Of Staff" id="no_staff" name="no_staff" value="<?php echo $r['schl_no_staff']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">No Of Students :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="Total No Of Student" id="no_stud" name="no_stud" value="<?php echo $r['schl_no_stud']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Select NGO :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control " id="sel_ngo" name="sel_ngo" placeholder="">
								<?php if($r['schl_ngo'] == ""){echo '<option value = "">Select any </option>';} ?>
								<?php $ngo_nm = $con->query("select ngo_id,ngo_name from ngo_register");
								while($ngnm = mysqli_fetch_array($ngo_nm)){
									if($r['schl_ngo'] == $ngnm['ngo_id']){
										$selected = 'selected';
									}else{
										$selected = '';
									}
									
								?>
									<option value="<?php echo $ngnm['ngo_id']; ?>" <?php echo $selected ?> ><?php echo $ngnm['ngo_name']; ?></option>
								<?php 
									}
								?>
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Select Volunteer Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control" id="sel_vol" name="sel_vol" placeholder="">
								<?php if($r['schl_volun'] == ""){echo '<option value = "">Select any </option>';} ?>
								<?php $vol_nm = $con->query("select vol_id,vol_fnm,vol_lnm from volunteer_register");
								while($vlnm = mysqli_fetch_array($vol_nm)){
									if($r['schl_volun'] == $vlnm['vol_id']){
										$selected = 'selected';
									}else{
										$selected = '';
									}
									
								?>
									<option value="<?php echo $vlnm['vol_id']; ?>" <?php echo $selected ?> ><?php echo $vlnm['vol_fnm'].' '.$vlnm['vol_lnm']; ?></option>
								<?php 
									}
								?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Available Class :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="number_format" class="form-control" placeholder="" id="avai_class" name="avai_class" value="<?php echo $r['schl_avil_class']; ?>">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">School Logo :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<img src="../<?php if($r['schl_logo'] == "") echo $default_img; else echo $r['schl_logo']; ?>" height="75" width="75" />
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="scl_logo" id="scl_logo" class="inputfile inputfile-6"/>
										<label for="scl_logo" class=""><span></span> 
											<strong>Upload School Logo (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="font-size:12px;">  
						<p class="topmarg" style="font-size:16px;margin-left:16px;">Goverment Supported :</p>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<input class="rdio" type="radio" id="supp_gov_ys" name="gov_supp" onclick="show_text()" style="float:left;margin-right:5px;"/>Yes
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input type="text" class="form-control" id="what_gov_supp" name="what_gov_supp" style="margin-top:10px;display:none;margin-bottom:10px;" value="<?php echo $r['schl_wtgov_supp']; ?>"/>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<input class="rdio" type="radio" id="supp_gov_no" onclick="show_text()" name="gov_supp" style="float:left;margin-right:5px;"/>No
						</div>
					</div>
					<div class="row" style="font-size:12px;">
						<p class="topmarg" style="font-size:16px;margin-left:16px;">Any Other NGO Supported :</p>
						<div class="col-md-6 col-sm-6 col-xs-12 nopadiing" style="">
							<input class="rdio" type="radio" id="supp_ys" name="ngo_supp" onclick="show_ngo_supp()" style="float:left;margin-right:5px;"/>Yes
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 nopadiing" style="">
							<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="float:left;padding-left:0px;">
								<input class="rdio" type="radio" id="supp_no" onclick="show_ngo_supp()" name="ngo_supp" style="float:left;margin-right:5px;"/>No
							</div>
						</div>
					</div>
					<div class="row" id="supposrt" style="font-size:12px;display:none;">  
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:20px;">What Support :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input type="text" class="form-control" id="wht_supp_txt" name="wht_supp_txt" style="margin-top:10px;margin-bottom:10px;" placeholder="" value="<?php echo $r['wht_ngo_supp']; ?>"/>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:20px;">Name Of NGO Supporting :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input type="text" class="form-control" id="ngo_nm_supp" name="ngo_nm_supp" style="margin-top:10px;margin-bottom:10px;margin-left:15px;" placeholder="" value="<?php echo $r['ngo_nm_supp']; ?>"/>
						</div>
					</div>
				</section>
				<section>
					<p class="topmarg" style="font-size:16px;">Bank Details : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Bank Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="" id="scl_bank_nm" name="scl_bank_nm" value="<?php echo $r['schl_bank_nm']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Account Holder Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="" id="scl_acc_nm" name="scl_acc_nm" value="<?php echo $r['schl_holder_name'];?>" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Account No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" placeholder="" class="form-control required" id="scl_acc_no" name="scl_acc_no" value="<?php echo $r['schl_acc_no']; ?>" > 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Branch Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group" style="">
								<input type="text" class="form-control required" id="scl_brnch_nm" name="scl_brnch_nm" value="<?php echo $r['schl_branch_name']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">IFSC Code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="IFSC Code" id="scl_ifsc_no" name="scl_ifsc_no" value="<?php echo $r['schl_ifsc_code']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Bank Proof :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['schl_bankproof_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['schl_bankproof_doc']; ?>" download = "newdoc">Download Bank Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['schl_bankproof_doc'] == "") echo $default_img; else echo $r['schl_bankproof_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="scl_bank_proof" id="scl_bank_proof" class="inputfile inputfile-6"/>
										<label for="scl_bank_proof" class="nospace"><span></span> 
											<strong>Upload Bank Proof (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section>
					<p class="topmarg" style="font-size:16px;">Administrator for this project : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">First Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="admin_fnm" name="admin_fnm" value="<?php echo $r['admin_fnm']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Middle Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="acc_nm" name="admin_mnm" value="<?php echo $r['admin_mnm']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Last Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="admin_snm" name="admin_snm" value="<?php echo $r['admin_surnm']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Mobile No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" style="width:20%;float:left;" id="mob_co_code" name="mob_co_code" />
								<input type="text" class="form-control required" id="mob_no" name="mob_no" style="width:80%;">
								<input type="hidden" class="form-control" value="<?php echo $r['admin_mob']; ?>" id="hiidn_m_no" name="hiidn_m_no">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Email :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="admin_email" name="admin_email" value="<?php echo $r['admin_email']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Date Of Birth :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">  
							<div class="form-group">
								<input placeholder="Date Of Birth *" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="a_dob" name="a_dob" onfocusout="(this.type='text')" value="<?php echo $r['admin_dob']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Gender :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="" style="margin-top: 5px;">
								<div class="" style="">
									<Select class="form-control" id="admin_gender" name="admin_gender">
										<?php if($r['admin_gender'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["admin_gender"].'>'.$r["admin_gender"].' </option>' ;} ?>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Blood group :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div style="" class="">
									<Select style="margin-bottom:15px;" class="form-control" id="admin_bldgrp" name="admin_bldgrp">
										<?php if($r['admin_blgrp'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["admin_blgrp"].'>'.$r["admin_blgrp"].' </option>' ;} ?>
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
							<p style="margin-top:7px;">Floor :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_floor" name="admin_floor" value="<?php echo $r['admin_floor']; ?>">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Unit :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_unit" name="admin_unit" value="<?php echo $r['admin_unit']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Socity Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_soc_nm" name="admin_soc_nm" value="<?php echo $r['admin_sconm']; ?>">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_build_no" name="admin_build_no" value="<?php echo $r['admin_socno']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Address1 *" id="admin_add1" name="admin_add1" value="<?php echo $r['admin_add1']; ?>">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Address2 *" id="admin_add2" name="admin_add2" value="<?php echo $r['admin_add2']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Other Refrence :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_ref_add" name="admin_ref_add" value="<?php echo $r['admin_oth_ref']; ?>">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Village :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_village" name="admin_village" value="<?php echo $r['admin_village']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Taluka :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_taluka_new" name="admin_taluka_new" value="<?php echo $r['admin_taluka']; ?>">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">District :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="admin_taluka" name="admin_taluka" value="<?php echo $r['admin_district']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Country :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control" id="ad_country" name="ad_country" onchange="adm_state();" placeholder="">
									<?php if($r['admin_country'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $co_nm = $con->query("select id,name from countries");
						$admin_cont1 = '';
						while($cnm = mysqli_fetch_array($co_nm)){
							if($r['admin_country'] == $cnm['id']){
								$selected = 'selected';
								$admin_cont1 = $cnm['id'];
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
								<Select class="form-control" id="ad_state" name="ad_state" onchange="adm_city();" placeholder="">
									<?php if($r['admin_state'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select id,name from states where country_id = '$admin_cont1' ");
						$admin_state1 = '';
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['admin_state'] == $stnm['id']){
								$selected = 'selected';
								$admin_state1 = $stnm['id'];
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
									<?php if($r['admin_city'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ct_nm = $con->query("select id,name from cities where state_id = '$admin_state1'");
						while($ctnm = mysqli_fetch_array($ct_nm)){
							if($r['admin_city'] == $ctnm['id']){
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
							<p style="margin-top:7px;">PIN / Zip code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="PIN / Zip code *" id="admin_zip_code" name="admin_zip_code" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['admin_pincode']; ?>" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Adhar Card No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="admin_adhar_no" name="admin_adhar_no" value="<?php echo $r['admin_adharno']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Aadhar Card Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['admin_adhardoc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['admin_adhardoc']; ?>" download = "newdoc">Download AdharCard Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['admin_adhardoc'] == "") echo $default_img; else echo $r['admin_adhardoc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="admin_adhar_doc" id="admin_adhar_doc" class="inputfile inputfile-6"/>
										<label for="admin_adhar_doc" class="nospace"><span></span> 
											<strong>Upload Aadhar Card (PDF/JPG)</strong>
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
							<div class="form-group" id="langauages">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Martial Status :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="">
								<Select class="form-control" id="mar_status" name="mar_status" placeholder="">
									<?php if($r['martial_status'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["martial_status"].'>'.$r["martial_status"].' </option>' ;} ?>
									<option>Married</option>
									<option>Single</option>
									<option>Divorced</option>
									<option>Widowed </option>
								</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Position In School :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="">
								<Select class="form-control" id="position" name="position" placeholder="">
									<option>Principal</option>
									<option>Teacher</option>
									<option>Supervisors</option>
									<option>Assistant Head Teachers</option>
								</select>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Profile Pic :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<img src="../<?php if($r['admin_pic'] == "") echo $default_img; else echo $r['admin_pic']; ?>" height="75" width="75" />
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="admin_pic" id="admin_pic" class="inputfile inputfile-6"/>
										<label for="admin_pic" class="nospace"><span></span> 
											<strong>Upload Photo (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="form-actions noborder">
					<input type="submit" class="btn blue" id="edit_ngo" name="edit_ngo" value="Submit" />
					<input type="clear" class="btn default" value="Cancel"/>
				</div>
							</form>
						</div>
					</div>
				</div>
<?php }  ?>
			</div>
		</div>
	 
<?php include('footer.php'); ?>
 
<script>
$(document).ready(function(){
	//alert("1");
	langauge_spk();
	
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
	
	$('input[type="file"]').change(function(e){
		//alert("1");
		var fileName = e.target.files[0].name;
		//alert('The file "' + fileName +  '" has been selected.');
		getFileExtension(fileName);
	});
	
	$(function () {                
        var t_code = document.getElementById("hiddn_tel_no").value.split("-");
		if(t_code[0] != ''){
		document.getElementById("tel_c_no").value = t_code[0];
		}
		if(t_code[1] != ''){
		document.getElementById("tel_a_no").value = t_code[1];
		}
		if(t_code[2] != ''){
		document.getElementById("tel_no").value = t_code[2];
		}
		
		var f_code = document.getElementById("hiddn_fax_no").value.split("-");
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
		
		var mo_code = document.getElementById("hiidn_m_no").value.split("-");
		if(mo_code[0] != ''){        
		document.getElementById("mob_co_code").value = mo_code[0];
		}
		if(mo_code[1] != ''){        
		document.getElementById("mob_no").value = mo_code[1];
		}
	});    
	
	if(document.getElementById("gov_sup").value != ""){ 
		$("#supp_gov_ys").attr("checked","true");
		$("#what_gov_supp").css({"display":"block"});
	}else{
		$("#supp_gov_no").attr("checked","true");
	}
	    
	if(document.getElementById("wht_sup").value != "" && document.getElementById("ngo_sup_nm").value != ""){      
		$("#supp_ys").attr("checked","true");
		$("#supposrt").css({"display":"block"});
	}else{
		$("#supp_no").attr("checked","true");
	}
	
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

/* function show_ngo() {
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
} */

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
		$("#supposrt").css({"display":"block"});
	}else if(document.getElementById("supp_no").checked == true){
		$("#supposrt").css({"display":"none"});
	}else {
		$("#supposrt").css({"display":"none"});
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