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
						<a href="ndo_edit.php">NGO Details</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php 
		//date('m/d/y', strtotime($date));
		$ng_id = $_SESSION['ngo_db_id'];
		$spre = $con->query("select * from ngo_register where ngo_id = '$ng_id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			
?>

<div class="col-md-12">
	
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-red-sunglo">
				<i class="icon-settings font-red-sunglo"></i>
				<span class="caption-subject bold uppercase"> Update NGO Details</span>
			</div>
		</div>
		<div class="portlet-body form"><!--onsubmit="return valid_ngo()"-->
			<form role="form" id="ngoform" action="user_data.php?call=edit_ngo" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
			
				<section>
					<input type="hidden" id="language" name="language" value="<?php echo $r['language_spk'];  ?>" />
					<input type="hidden" id="ngo_id" name="ngo_id" value="<?php echo $ng_id;  ?>" />
					<input type="hidden" id="ngo_uniqe" name="ngo_uniqe" value="<?php echo $r['ngo_uid'];  ?>" />
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">NGO Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ngo_name" value="<?php echo $r['ngo_name']; ?>" name="ngo_name"> 
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
								<input type="text" class="form-control required" id="floor" name="floor" value="<?php echo $r['ngo_floor']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Unit :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="unit" name="unit" value="<?php echo $r['ngo_unit']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="soc_nm" value="<?php echo $r['ngo_soc_nm']; ?>" name="soc_nm"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Society No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="build_no" name="build_no" value="<?php echo $r['ngo_build_no']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="add1" value="<?php echo $r['ngo_address1']; ?>" name="add1"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="add2" name="add2" value="<?php echo $r['ngo_address2']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Reference Address :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="ref_add" name="ref_add" value="<?php echo $r['ngo_ref_add']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Village :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="village" name="village" value="<?php echo $r['ngo_village']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Taluka :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="taluka_new" name="taluka_new" value="<?php echo $r['ngo_taluka']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">District :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="taluka" name="taluka" value="<?php echo $r['ngo_district']; ?>"> 
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
									<?php if($r['ngo_country'] == ""){echo '<option value = "">Select any </option>';} ?>
									<?php $co_nm = $con->query("select id,name from countries");
									$country_id = "";
									while($cnm = mysqli_fetch_array($co_nm)){
										if($r['ngo_country'] == $cnm['id']){
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
								<?php if($r['ngo_state'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select id,name from states where country_id = '$country_id' ");
						$state_id = '';
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['ngo_state'] == $stnm['id']){
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
								<?php if($r['ngo_city'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ct_nm = $con->query("select id,name from cities where state_id = '$state_id'");
						while($ctnm = mysqli_fetch_array($ct_nm)){
							if($r['ngo_city'] == $ctnm['id']){
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
								<input type="text" class="form-control" value="<?php echo $r['ngo_pin']; ?>" id="zip_code" name="zip_code">
							</div>
						</div>
					</div>
						
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Mobile No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" style="width:20%;float:left;" id="ngo_c_mob_no" name="ngo_c_mob_no" />
								<input type="text" class="form-control " onkeypress="javascript:return isNumber (event)" id="ngo_m_no" name="ngo_m_no" style="width:80%;"/>
								<input type="hidden" class="form-control required" id="hiddn_m_no" name="hiddn_m_no" value="<?php echo $r['ngo_mobile']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Telephone No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" placeholder="Country code" style="width:20%;float:left;" id="tel_c_no" name="tel_c_no" />
								<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" placeholder="Area code" style="width:20%;float:left;" id="tel_a_no" name="tel_a_no" />
								<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" placeholder="Telephone No" style="width:60%" id="tel_no" name="tel_no"/>
								<input type="hidden" class="form-control required" id="hiddn_tel_no" name="hiddn_tel_no" value="<?php echo $r['ngo_tele_no']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Fax No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" placeholder="Country code" style="width:20%;float:left;" id="fax_c_no" name="fax_c_no" />
								<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" placeholder="Area code" style="width:20%;float:left;" id="fax_a_no" name="fax_a_no" />
								<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" placeholder="Fax" id="fax_no" name="fax_no" style="width:60%"/>
								<input type="hidden" class="form-control required" id="hiddn_fax_no" name="hiddn_fax_no" value="<?php echo $r['ngo_fax']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Email :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="email" name="email" value="<?php echo $r['ngo_email']; ?>"> 
							</div>
						</div>
					</div>
				
				</section>
				
				
				<section>
					<p class="topmarg" style="font-size:16px;">KYC : </p>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration No1 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="Registration No1" id="reg_no" name="reg_no" value="<?php echo $r['ngo_register_no']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['ngo_register_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['ngo_register_doc']; ?>" download = "newdoc">Download Registration Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['ngo_register_doc'] == "") echo $default_img; else echo $r['ngo_register_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="reg_certi" id="reg_certi" class="inputfile inputfile-6" />
										<label for="reg_certi" class="nospace"><span id="reg_filenm"></span> 
											<strong>Upload Registration Certificate1 (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration No2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Registration No2" id="reg_no2" name="reg_no2" value="<?php echo $r['ngo_register_no2']; ?>"/>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Registration Doc2 :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<?php $extnm = pathinfo($r['ngo_register_doc2'], PATHINFO_EXTENSION).','; 
										if($extnm == "pdf,"){ 
									?>
									<a href="<?php echo $downl.$r['ngo_register_doc2']; ?>" download = "newdoc">Download Registration Doc</a>
									<?php }else{ ?>
									<img src="../<?php if($r['ngo_register_doc2'] == "") echo $default_img; else echo $r['ngo_register_doc2']; ?>" height="75" width="75" />
									<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="reg_certi2" id="reg_certi2" class="inputfile inputfile-6" />
										<label for="reg_certi2" class="nospace"><span id="reg_filenm"></span> 
											<strong>Upload Registration Certificate2 (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Tax Exemption No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="Tax Exemption No" id="tax_no" name="tax_no" value="<?php echo $r['ngo_tax_no']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Tax Exemption Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['ngo_tax_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['ngo_tax_doc']; ?>" download = "newdoc">Download Tax Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['ngo_tax_doc'] == "") echo $default_img; else echo $r['ngo_tax_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="tax_certi" id="tax_certi" class="inputfile inputfile-6" />
										<label for="tax_certi" class="nospace"><span id="tax_filenm"></span> 
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
								<input type="text" class="form-control required" placeholder="PanCard No" id="pan_no" name="pan_no" value="<?php echo $r['ngo_pancard_no']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Pan Card Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['ngo_pancard_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['ngo_pancard_doc']; ?>" download = "newdoc">Download PanCard Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['ngo_pancard_doc'] == "") echo $default_img; else echo $r['ngo_pancard_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="pan_doc" id="pan_doc" class="inputfile inputfile-6"/>
											<label for="pan_doc" class="nospace"><span></span> 
											<strong>Upload PanCard (PDF/JPG)</strong>
											</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">NCRA No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="NCRA No" id="ncra_no" name="ncra_no" value="<?php echo $r['ngo_ncra_no']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">NCRA Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['ngo_ncra_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['ngo_ncra_doc']; ?>" download = "newdoc">Download NCRA Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['ngo_ncra_doc'] == "") echo $default_img; else echo $r['ngo_ncra_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="ncra_proof" id="ncra_proof" class="inputfile inputfile-6"/>
										<label for="ncra_proof" class="nospace"><span></span> 
											<strong>Upload NCRA Proof (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Date Of Register :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<input placeholder="Date Of Register" class="textbox-n form-control form-group" type="text" onfocus="(this.type='date')"  id="d_reg" name="d_reg" onfocusout="(this.type='text')" value="<?php echo $r['date_reigster']; ?>">
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Address Proof :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['ngo_add_proof'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['ngo_add_proof']; ?>" download = "newdoc">Download Address Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['ngo_add_proof'] == "") echo $default_img; else echo $r['ngo_add_proof']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="add_proof" id="add_proof" class="inputfile inputfile-6 form-group"/>
										<label for="add_proof" class="nospace"><span></span> 
											<strong>Upload Address Proof (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">NGO Logo :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<img src="../<?php if($r['ngo_logo'] == "") echo $default_img; else echo $r['ngo_logo']; ?>" height="75" width="75" />
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="ngo_logo" id="ngo_logo" class="inputfile inputfile-6 form-group"/>
										<label for="ngo_logo" class="nospace"><span></span> 
											<strong>Upload NGO Logo (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="font-size:12px;">
						<p class="topmarg" style="font-size:16px;margin-left:16px;">Add Reference :</p>
						<div class="col-md-2 col-sm-2 col-xs-12" style="margin-top:10px;">
							<input class="rdio ngo_ref" type="checkbox" id="ngo_ref" name="ngo_ref" style="float:left;margin-right:5px;" value="ngo"/><p>NGO :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" id="ngo_drop" name="ngo_drop">
						<input type="hidden" id="ref_vl_nm" name="ref_vl_nm" value="<?php echo $r['ngo_ref_nm']; ?>" />
							<Select class="form-control" id="sel_ngo" name="sel_ngo">
								<?php if($r['ngo_ref_nm'] == ""){echo '<option value = "">Select any </option>';} ?>
								<?php $ngo_nm = $con->query("select ngo_id, ngo_name from ngo_register");
								while($ngnm = mysqli_fetch_array($ngo_nm)){
									if($r['ngo_ref_nm'] == $ngnm['ngo_id']){
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
						<div class="col-md-2 col-sm-2 col-xs-12" style="margin-top:10px;"> 
							<input class="rdio vol_ref" type="checkbox" id="vol_ref" name="vol_ref" style="float:left;margin-right:5px;" value="volun"/><p>Volunteer :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" id="vol_drop" name="vol_drop">
							<input type="hidden" id="ref_ng_nm" name="ref_ng_nm" value="<?php echo $r['vol_ref_nm']; ?>" />
							<Select class="form-control" id="sel_vol" name="sel_vol">
								<?php if($r['vol_ref_nm'] == ""){echo '<option value = "">Select any </option>';} ?>
								<?php $ngo_nm = $con->query("select vol_id, vol_fnm, vol_lnm from volunteer_register");
								while($ngnm = mysqli_fetch_array($ngo_nm)){
									if($r['vol_ref_nm'] == $ngnm['vol_id']){
										$selected = 'selected';
									}else{
										$selected = '';
									}
									
								?>
									<option value="<?php echo $ngnm['vol_id']; ?>" <?php echo $selected ?> ><?php echo $ngnm['vol_fnm'].' '.$ngnm['vol_lnm']; ?></option>
								<?php 
									}
								?>
							</select>
						</div>
					</div>
					<div class="row" style="font-size:12px;">
						<div class="col-md-2 col-sm-2 col-xs-12" style="margin-top:10px;">
							<input class="rdio no_ref" type="checkbox" id="no_ref" name="no_ref" style="float:left;margin-right:5px;" value="other"/><p>Other :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" id="oth_ref" name="oth_ref">
							<input type="text" class="form-control" style="margin-top:10px;margin-bottom:10px;" value="<?php echo $r['oth_ref_nm']; ?>" id="othr_ref" name="othr_ref"/>
						</div>
					</div>
					<div class="row" style="font-size:12px;">
						<p class="topmarg" style="font-size:16px;margin-left:16px;">Any cases in past or pending in court or police station. (Basically have they been involved in any illegal activities you will know) :</p>
						<div class="col-md-2 col-sm-2 col-xs-12" style="margin-top:10px;">
							<input class="rdio" type="radio" id="ngo_case1" name="ngo_police" onclick="show_text()" style="float:left;margin-right:5px;"/>Yes
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" id="ngo_drop" name="ngo_drop">
							<input type="text" class="form-control" id="txt_inside" name="txt_inside" style="margin-top:10px;display:none;margin-bottom:10px;" value="<?php echo $r['ngo_poli_case']; ?>"/>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:10px;">
							<input class="rdio" type="radio" id="ngo_case2" onclick="show_text()" name="ngo_police" style="float:left;margin-right:5px;"/>No
						</div>
					</div>
					<div class="row" style="font-size:12px;">
						<p class="topmarg" style="font-size:16px;margin-left:16px;">Note : All KYC - must updated before end of each calendar year to keep their acc valid to be activated on our portal.</p>
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
								<input type="text" class="form-control required" placeholder="" id="bank_nm" name="bank_nm" value="<?php echo $r['ngo_bank_nm']; ?>" onchange="chnge_bnm();"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Account Hold Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="acc_nm" name="acc_nm" value="<?php echo $r['ngo_holder_name'];?>" readonly />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Account No. :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="" id="acc_no" name="acc_no" value="<?php echo $r['ngo_acc_no']; ?>" > 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Branch Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group" style="">
								<input type="text" class="form-control required" placeholder="Branch Name" id="brnch_nm" name="brnch_nm" value="<?php echo $r['ngo_branch_name']; ?>"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">IFSC Code :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="IFSC Code" id="ifsc_no" name="ifsc_no" value="<?php echo $r['ngo_ifsc_code']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Bank Proof Doc :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;padding-right:0px;">
								<?php $extnm = pathinfo($r['ngo_bankproof_doc'], PATHINFO_EXTENSION).','; 
									if($extnm == "pdf,"){ 
								?>
									<a href="<?php echo $downl.$r['ngo_bankproof_doc']; ?>" download = "newdoc">Download Bank Proof Doc</a>
								<?php }else{ ?>
									<img src="../<?php if($r['ngo_bankproof_doc'] == "") echo $default_img; else echo $r['ngo_bankproof_doc']; ?>" height="75" width="75" />
								<?php } ?>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12" style="padding-left:0px;padding-right:0px;">
									<div class="box">
										<input type="file" name="bank_proof" id="bank_proof" class="inputfile inputfile-6"/>
										<label for="bank_proof" class="nospace"><span></span> 
											<strong>Upload Bank Proof (PDF/JPG)</strong>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					
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
							<p style="margin-top:7px;">Date Of Birth :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="date" class="form-control" placeholder="Date Of Birth" id="a_dob" name="a_dob" value="<?php echo $r['admin_dob']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Blood Group :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<div>
								<Select style="margin-bottom:15px;" class="form-control" id="admin_bldgrp" name="admin_bldgrp">
									<?php if($r['admin_bldgrp'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["admin_bldgrp"].'>'.$r["admin_bldgrp"].' </option>' ;} ?>
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
								<div class="topmarg" style="margin-top:0px;">
									<Select class="form-control" id="admin_gender" name="admin_gender">
										<?php if($r['admin_gender'] == ""){echo '<option value = "">Select any </option>';} else{echo '<option value = '.$r["admin_gender"].'>'.$r["admin_gender"].' </option>' ;} ?>
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Mobile No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" onkeypress="javascript:return isNumber (event)" style="width:20%;float:left;" id="c_mob_no" name="c_mob_no" />
								<input type="text" class="form-control " onkeypress="javascript:return isNumber (event)" id="mob_no" name="mob_no" style="width:80%;"/>
								<input type="hidden" class="form-control required" id="hiddn_mo_no" name="hiddn_mo_no" value="<?php echo $r['admin_mob']; ?>">  
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Email :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="admin_email" name="admin_email" value="<?php echo $r['admin_email']; ?>"> 
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
							<p style="margin-top:7px;">Country :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<Select class="form-control" id="ad_country" name="ad_country" onchange="adm_state();" />
						<?php if($r['admin_cont'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $co_nm = $con->query("select id,name from countries");
						$admin_cont = '';
						
						while($cnm = mysqli_fetch_array($co_nm)){
							if($r['admin_cont'] == $cnm['id']){
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
								<Select class="form-control " id="ad_state" name="ad_state" onchange="adm_city();" />
									<?php if($r['admin_state'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $st_nm = $con->query("select id,name from states where country_id = '$admin_cont' ");
						$admin_state = '';
						while($stnm = mysqli_fetch_array($st_nm)){
							if($r['admin_state'] == $stnm['id']){
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
								<Select class="form-control" id="ad_city" name="ad_city" placeholder="">
									<?php if($r['admin_city'] == ""){echo '<option value = "">Select any </option>';} ?>
						<?php $ct_nm = $con->query("select id,name from cities where state_id = '$admin_state'");
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
								<input type="text" class="form-control" placeholder="" id="admin_zip_code" name="admin_zip_code" value="<?php echo $r['admin_pin']; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Aadhar Card No :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" id="admin_adhar_no" name="admin_adhar_no" value="<?php echo $r['admin_adharno']; ?>"> 
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Aadhar Card :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:10px;">
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
							<div class="topmarg" style="margin-top: 7px;margin-bottom:15px;">
								<div class="" style="" id="langauages">
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:7px;">Martial Status :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="topmarg" style="margin-top: 7px;">
								<div class="" style="">
								<Select class="form-control" id="mar_status" name="mar_status">
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
		
		
<?php include('footer.php'); ?>

<script>
$(document).ready(function(){

	langauge_spk();
	
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
	//alert("1");
	
	$('input[type="file"]').change(function(e){
		//alert("1");
		var fileName = e.target.files[0].name;
		//alert('The file "' + fileName +  '" has been selected.');
		getFileExtension(fileName);
	});
	                   
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
		  
		var m_code = document.getElementById("hiddn_mo_no").value.split("-");		 
		if(m_code[0] != ''){
		document.getElementById("c_mob_no").value = m_code[0];
		}
		if(m_code[1] != ''){
		document.getElementById("mob_no").value = m_code[1];
		}
		
		if(document.getElementById("txt_inside").value != ""){
			$("#ngo_case1").attr("checked","true");
			$("#txt_inside").css({"display":"block"});
		}else{
			$("#ngo_case2").attr("checked","true");
		}        
		
		if(document.getElementById("txt_inside").value != ""){
			$("#ngo_case1").attr("checked","true");
			$("#txt_inside").css({"display":"block"});
		}else{

		}        
		
		if(document.getElementById("ref_vl_nm").value != ""){
			$("#ngo_ref").attr("checked","true");
		}
		if(document.getElementById("ref_ng_nm").value != ""){
			$("#vol_ref").attr("checked","true");
		}
		if(document.getElementById("othr_ref").value != ""){
			$("#no_ref").attr("checked","true");
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
 

function chnge_bnm(){
	//alert("1");
	$("#showhy").css({"display":"block"});
}



</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>