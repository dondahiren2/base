<?php 
	include("header.php");
?>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="admin_user_list">Admin User List</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="admin_user">Add Our Team Members</a>
			</li>
		</ul>
	</div>
<div class="row">
	<link rel="stylesheet" href="<?php echo $site_url?>book_admin/css/croppie.css">
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog" style="width: 90%;">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Profile Picture Upload</h4>
			</div>
			<div class="modal-body">
				<div class="row margin-bottom-60">
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<div id="upload-demo" style="width:350px"></div>
						
						<i class="fa fa-undo" aria-hidden="true" id="rotateLeft" data-rotate="-90" style="margin-right: 15px;"></i>
						<i class="fa fa-repeat" aria-hidden="true" id="rotateRight" data-rotate="90"></i>
						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
						<strong>Select Image:</strong>
						<br/>
						<input type="file" id="upload">
						<br/>
						<button class="btn btn-success upload-result">Upload Image</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12" >
						<div id="upload-demo-i" style="background:#e1e1e1;width:300px;height:300px;margin-top: 30px;text-align: center;padding-top: 25px;"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php 

	$country = '';
	$state = '';
	$city = '';
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$spre = $con->query("select * from admin_user where ad_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			
			$country = $r['ad_country'];
			$state = $r['ad_state'];
			$city = $r['ad_city'];
			
?>

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
			<div class="form-body">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" class="form-control" placeholder="First Name *" id="ad_fname" name="ad_fname" value="<?php echo $r['ad_fname']?>">
						<input type="hidden" id="ad_id" name="ad_id" value="<?php echo $r['ad_id']?>">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" class="form-control" placeholder="Middle Name *" id="ad_mname" name="ad_mname" value="<?php echo $r['ad_mname']?>">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" class="form-control" placeholder="Last Name *" id="ad_lname" name="ad_lname" value="<?php echo $r['ad_lname']?>">
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="topmarg" style="float:left;margin-top: 17px;width: 20%;">
							<label class="lableedit">Gender :</label>
						</div>
						<div class="topmarg" style="float:left;width: 80%;">
							<select class="form-control" id="ad_gender" name="ad_gender">
								<option value="">Select any</option>
								<option value="Male" <?php if($r['ad_gender'] == 'Male'){ echo 'selected'; } ?>>Male</option>
								<option value="Female" <?php if($r['ad_gender'] == 'Female'){ echo 'selected'; } ?>>Female</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div style="float:left;margin-top:15px;width: 28%;"><label class="lableedit">Blood group :</label></div>
						<div style="float:left;width: 72%;" class="topmarg">
							<select class="form-control" id="ad_blood_group" name="ad_blood_group">
								<option value="">Select any</option>
								<option value="A" <?php if($r['ad_blood_group'] == 'A'){ echo 'selected'; } ?> >A+</option>
								<option value="A-" <?php if($r['ad_blood_group'] == 'A-'){ echo 'selected'; } ?> >A-</option>
								<option value="B" <?php if($r['ad_blood_group'] == 'B'){ echo 'selected'; } ?> >B+</option>
								<option value="B-" <?php if($r['ad_blood_group'] == 'B-'){ echo 'selected'; } ?> >B-</option>
								<option value="O" <?php if($r['ad_blood_group'] == 'O'){ echo 'selected'; } ?> >O+</option>
								<option value="O-" <?php if($r['ad_blood_group'] == 'O-'){ echo 'selected'; } ?> >O-</option>
								<option value="AB-" <?php if($r['ad_blood_group'] == 'AB-'){ echo 'selected'; } ?> >AB-</option>
								<option value="AB" <?php if($r['ad_blood_group'] == 'AB'){ echo 'selected'; } ?> >AB+</option>
							</select>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
			<div class="form-body">
			<h3 class="form-title">Contact Details</h3> 
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<input type="text" class="form-control" placeholder="Floor *" id="ad_floor" name="ad_floor" value="<?php echo $r['ad_floor']?>" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<input type="text" class="form-control" placeholder="Unit *" id="ad_units" name="ad_units" value="<?php echo $r['ad_units']?>"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Building/ Tower/ Complax/ Society Name *" id="ad_so_name" name="ad_so_name" value="<?php echo $r['ad_so_name']?>">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Building/ Tower/ Complax/ Society No *" id="ad_so_no" name="ad_so_no" value="<?php echo $r['ad_so_no']?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Address1 *" id="ad_add1" name="ad_add1" value="<?php echo $r['ad_add1']?>">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Address2" id="ad_add2" name="ad_add2" value="<?php echo $r['ad_add2']?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Other Reference For Address *" id="ad_other_add" name="ad_other_add"  value="<?php echo $r['ad_other_add']?>"/>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control botmarg" placeholder="Village *" id="ad_village" name="ad_village" value="<?php echo $r['ad_village']?>" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Taluka *" id="ad_taluka" name="ad_taluka" value="<?php echo $r['ad_taluka']?>"/>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="District *" id="ad_district" name="ad_district" value="<?php echo $r['ad_district']?>"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="lableedit">Country :</label>
					<select class="form-control country" id="ad_country" name="ad_country" onchange="state_nm();" placeholder=""></select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="lableedit">State :</label>
					<Select class="form-control ad_state" id="ad_state" name="ad_state" onchange="city_nm();" placeholder=""></select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="lableedit ">City :</label>
					<select class="form-control ad_city" id="ad_city" name="ad_city" placeholder=""></select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="lableedit ">PIN / Zip code :</label>
					<input type="text" class="form-control" placeholder="PIN / Zip code *" id="ad_pincode" name="ad_pincode" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_pincode']?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" style="width:20%;float:left;" placeholder="Country Code" id="ad_con_code" name="ad_con_code" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_con_code']?>"/>
					<input type="text" class="form-control" placeholder="Mobile No *" id="ad_mobile_no" name="ad_mobile_no" style="width:80%" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_mobile_no']?>" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="ad_con_code_tel" name="ad_con_code_tel" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_con_code_tel']?>"/>
					<input type="text" class="form-control" placeholder="Area code *" style="width:20%;float:left;" id="ad_area_code_tel" name="ad_area_code_tel" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_area_code_tel']?>" />
					<input type="text" class="form-control" placeholder="Telephone No *" id="ad_tel_no" name="ad_tel_no" style="width:60%" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_tel_no']?>" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="ad_con_code_fax" name="ad_con_code_fax" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_con_code_fax']?>"/>
					<input type="text" class="form-control" placeholder="Area code *" style="width:20%;float:left;" id="ad_area_code_fax" name="ad_area_code_fax" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_area_code_fax']?>" />
					<input type="text" class="form-control" placeholder="Fax No*" id="ad_fa_no" name="ad_fa_no" style="width:60%" onkeypress="javascript:return isNumber (event)" value="<?php echo $r['ad_fa_no']?>" />
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<input type="text" class="form-control" placeholder="Email *" id="ad_email" name="ad_email" value="<?php echo $r['ad_email']?>">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<input type="text" class="form-control" placeholder="Password *" id="ad_pass" name="ad_pass" value="<?php echo $r['ad_pass']?>">
				</div>
			</div>
	 
			</div>
		</div>
	</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
		<div class="form-body">
		<h3 class="form-title">KYC (Know your customer)</h3>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input placeholder="Date Of Birth" class="textbox-n form-control datepickerdob" type="text" id="ad_dob" name="ad_dob" value="<?php  if($r['ad_dob'] == '1970-01-01'){} else { echo date('d-m-Y', strtotime($r['ad_dob'])); } ?>">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
				
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Profile Picture Upload</button>

					<form method="post" name="upload_photo" id="s3_upload_profile" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;display:none;">
						<div class="box">
							<input type="file" name="profile" id="profile" class="inputfile inputfile-6" onchange="readURLs3(this,'profile');" />
							<label for="profile" class=""><span></span> 
								<strong>Upload Photo (JPG Only)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="profile" />
					</form>
					<div id="s3_msg_profile" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_profile" name="ad_profile" value="<?php echo $r['ad_profile']?>" />
					<div id="results" style="display:block">Your Profile Photo will appear here...</div>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-6 col-sm-6 col-xs-12 " >
					<input type="text" class="form-control" placeholder="Front Id Card / Aadhar Card No" id="ad_id_proof_no" name="ad_id_proof_no" value="<?php echo $r['ad_id_proof_no']?>">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<form method="post" name="upload_photo" id="s3_upload_fornt_img" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="fornt_img" id="fornt_img" class="inputfile inputfile-6" onchange="readURLs3(this,'fornt_img');" />
							<label for="fornt_img" class=""><span></span> 
								<strong>Upload <b>Front</b> Id Card / Adhar Card (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="fornt_img" />
					</form>
					<div id="s3_msg_fornt_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_front_id_proof_img" name="ad_front_id_proof_img" value="<?php echo $r['ad_front_id_proof_img']?>"  />
					<div id="results1" style="display:block">Your Front Id Card / Aadhar Card doc will appear here...</div>
				</div> 
			</div>
			<div class="row" >
				<div class="col-md-6 col-sm-6 col-xs-12"></div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<form method="post" name="upload_photo" id="s3_upload_back_img" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="back_img" id="back_img" class="inputfile inputfile-6" onchange="readURLs3(this,'back_img');" />
							<label for="back_img" class=""><span></span> 
								<strong>Upload <b>Back</b> Id Card / Adhar Card (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="back_img" />
					</form>
					<div id="s3_msg_back_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_back_id_proof_img" name="ad_back_id_proof_img"  value="<?php echo $r['ad_back_id_proof_img']?>" />
					<div id="results1" style="display:block">Your Back Id Card / Aadhar Card doc will appear here...</div>
				</div> 
			</div>
			<div class="row" >
				<div class="col-md-6 col-sm-6 col-xs-12 " >
					<input type="text" class="form-control" placeholder="Pan Card No" id="ad_pan_no" name="ad_pan_no" value="<?php echo $r['ad_pan_no']?>" >
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 " >
					<form method="post" name="upload_photo" id="s3_upload_pan_img" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="pan_img" id="pan_img" class="inputfile inputfile-6" onchange="readURLs3(this,'pan_img');" />
							<label for="pan_img" class=""><span></span> 
								<strong>Upload Pan Card (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="pan_img" />
					</form>
					<div id="s3_msg_pan_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_pan_no_img" name="ad_pan_no_img" value="<?php echo $r['ad_pan_no_img']?>" />
					<div id="results2" style="display:block">Your Pan Card doc will appear here...</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 "  >
					<input type="text" class="form-control" placeholder="Education" id="ad_edu" name="ad_edu" value="<?php echo $r['ad_edu']?>">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 "  >
					<form method="post" name="upload_photo" id="s3_upload_edu_img" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="edu_img" id="edu_img" class="inputfile inputfile-6" onchange="readURLs3(this,'edu_img');" />
							<label for="edu_img" class=""><span></span> 
								<strong>Upload Education Certificate (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="edu_img" />
					</form>
					<div id="s3_msg_edu_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_edu_img" name="ad_edu_img" value="<?php echo $r['ad_edu_img']?>" />
					<div id="results3" style="display:block">Your Education certificate will appear here...</div>
				</div>
			</div> 
			<div class="row">
				<div class="col-xs-12" >
					<p>View Proof Details</p>
				</div>
					<?php
						if($r['ad_profile']){
					?>
						<div class="col-md-2 col-sm-2 col-xs-12" >
							<img class="img-responsive" src="<?php echo $site_url.$r['ad_profile'] ?>" />
						</div>	
					<?php
						}
					?>
					
					<div class="col-md-6 col-sm-6 col-xs-12" >
					<?php
						if($r['ad_front_id_proof_img']){
					?>
							<a href="<?php echo $site_url.$r['ad_front_id_proof_img'] ?>" target="_blank" >Fornt Id Card / Aadhar Card</a></br>
					<?php
						}
					?>
				
					<?php
						if($r['ad_back_id_proof_img']){
					?>
							<a href="<?php echo $site_url.$r['ad_back_id_proof_img'] ?>" target="_blank" >Back Id Card / Aadhar Card</a></br>
					<?php
						}
					?>
				
					<?php
						if($r['ad_pan_no_img']){
					?>
							<a href="<?php echo $site_url.$r['ad_pan_no_img'] ?>" target="_blank" >Pan Card</a></br>
					<?php
						}
					?>
				
					<?php
						if($r['ad_edu_img']){
					?>
							<a href="<?php echo $site_url.$r['ad_edu_img'] ?>" target="_blank" >Education Certificate</a></br>
					<?php
						}
					?>
					</div>
			</div>
		</div>
		</div>
	</div>
</div>	

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 border_admi" ></div>	
</div>	
<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
		<div class="form-body">
			<h3 class="form-title">Administration</h3>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12" >
					<label class="lableedit ">Designation</label>
					<select class="form-control" id="ad_work_type" name='ad_work_type'>
						<option value="">Select Designation</option>
						<?php 
							mysqli_set_charset($con, 'utf8');
							$spre = $con->query("select at_title from admin_type where at_action = 1 ");
							if(mysqli_num_rows($spre) > 0){
							   while($r1 = mysqli_fetch_array($spre)){
								?>
									<option value="<?php echo $r1['at_title']?>" <?php if($r['ad_work_type'] == $r1['at_title']){ echo 'selected'; } ?>><?php echo $r1['at_title']?></option>
								<?php
							   }
							}
						?>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">User Role</label>
					<select class="form-control" id="ad_type" name='ad_type'>
						<option value="">Select Role Type</option>
						<?php 
							mysqli_set_charset($con, 'utf8');
							$spre = $con->query("select ut_title from user_type where ut_action = 1 ");
							if(mysqli_num_rows($spre) > 0){
							   while($r1 = mysqli_fetch_array($spre)){
								?>
									<option value="<?php echo $r1['ut_title']?>" <?php if($r['ad_type'] == $r1['ut_title']){ echo 'selected'; } ?> ><?php echo $r1['ut_title']?></option>
								<?php
							   }
							}
						?>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Show On Website</label>
					<select class="form-control" id="ad_display" name='ad_display'>
						<option value=""  <?php if($r['ad_display'] == ""){ echo 'selected'; } ?>></option>
						<option value="1"  <?php if($r['ad_display'] == 1){ echo 'selected'; } ?>>Yes</option>
						<option value="0" <?php if($r['ad_display'] == 0){ echo 'selected'; } ?>>No</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Status</label>
					<select class="form-control" id="ad_status" name='ad_status'>
						<option value="" <?php if($r['ad_status'] == ""){ echo 'selected'; } ?> ></option>
						<option value="paid" <?php if($r['ad_status'] == "paid"){ echo 'selected'; } ?> >Paid</option>
						<option value="volunteer" <?php if($r['ad_status'] == "volunteer"){ echo 'selected'; } ?> >volunteer</option>
					</select>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Position No</label>
					<input placeholder="Position No show on website" class="textbox-n form-control" type="text" id="ad_sort" name="ad_sort" value="<?php echo $r['ad_sort']?>" >
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Joining Date</label>
					<input placeholder="Joining Date" class="textbox-n datepicker form-control" type="text" id="ad_join_date" name="ad_join_date" value="<?php if($r['ad_join_date'] == '1970-01-01'){} else { echo date('d-m-Y', strtotime($r['ad_join_date'])); } ?>" >
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Leaving Date</label>
					<input placeholder="Leaving Date" class="textbox-n datepicker form-control" type="text" id="ad_leaving_date" name="ad_leaving_date" value="<?php if($r['ad_leaving_date'] == '1970-01-01'){} else { echo date('d-m-Y', strtotime($r['ad_leaving_date'])); } ?>">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">User Status</label>
					<select class="form-control" id="ad_active" name='ad_active'>
						<option value="" <?php if($r['ad_active'] == ""){ echo 'selected'; } ?> ></option>
						<option value="0" <?php if($r['ad_active'] == 0){ echo 'selected'; } ?> >Active</option>
						<option value="1" <?php if($r['ad_active'] == 1){ echo 'selected'; } ?> >Delete</option>
					</select>
				</div>
			</div>
			<div class="row" >
				<hr>
				<div class="col-xs-12">
					<input type="submit" class="btn blue" id="add_admin" name="add_admin" value="Submit" />
					<button type="clear" class="btn default">Cancel</button>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

<?php	
		}
	}	else {
?>		

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
			<div class="form-body">
				<?php
					$pre_fix = 'ngo';
				?>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" class="form-control get_data" placeholder="First Name *" id="<?php echo $pre_fix ?>_fname" name="<?php echo $pre_fix ?>_fname">
						<input type="hidden" id="ad_id" name="ad_id">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" class="form-control get_data" placeholder="Middle Name *" id="<?php echo $pre_fix ?>_mname" name="<?php echo $pre_fix ?>_mname">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="text" class="form-control get_data" placeholder="Last Name *" id="<?php echo $pre_fix ?>_lname" name="<?php echo $pre_fix ?>_lname">
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<label class="lableedit">Country of Residence :</label>
						<input type="text" class="form-control get_data" placeholder="Country of Residence" id="<?php echo $pre_fix ?>_re_country" name="<?php echo $pre_fix ?>_re_country">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<label class="lableedit">State :</label>
						<input type="text" class="form-control get_data" placeholder="State" id="<?php echo $pre_fix ?>_re_state" name="<?php echo $pre_fix ?>_re_state">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<label class="lableedit">City :</label>
						<input type="text" class="form-control get_data" placeholder="City" id="<?php echo $pre_fix ?>_re_city" name="<?php echo $pre_fix ?>_re_city">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<label class="lableedit">Country of Citizenship :</label>
						<input type="text" class="form-control get_data" placeholder="Country of Citizenship" id="<?php echo $pre_fix ?>_citi_country" name="<?php echo $pre_fix ?>_citi_country">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<label class="lableedit">State :</label>
						<input type="text" class="form-control get_data" placeholder="State" id="<?php echo $pre_fix ?>_citi_state" name="<?php echo $pre_fix ?>_citi_state">
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<label class="lableedit">City :</label>
						<input type="text" class="form-control get_data" placeholder="City" id="<?php echo $pre_fix ?>_citi_city" name="<?php echo $pre_fix ?>_citi_city">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<label class="lableedit">Mobile No :</label>
						<input type="text" class="form-control get_data" placeholder="Mobile No" id="<?php echo $pre_fix ?>_mobile_no" name="<?php echo $pre_fix ?>_mobile_no">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<label class="lableedit">E-Mail :</label>
						<input type="text" class="form-control get_data" placeholder="E-Mail" id="<?php echo $pre_fix ?>_email" name="<?php echo $pre_fix ?>_email">
					</div>
				</div>
					
			</div>
		</div>
	</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
			<div class="form-body">
			<h3 class="form-title">Contact Details</h3> 
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<input type="text" class="form-control" placeholder="Floor *" id="ad_floor" name="ad_floor" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<input type="text" class="form-control" placeholder="Unit *" id="ad_units" name="ad_unit"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Building/ Tower/ Complax/ Society Name *" id="ad_so_name" name="ad_so_name">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Building/ Tower/ Complax/ Society No *" id="ad_so_no" name="ad_so_no">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Address1 *" id="ad_add1" name="ad_add1">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Address2" id="ad_add2" name="ad_add2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Other Reference For Address *" id="ad_other_add" name="ad_other_add" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control botmarg" placeholder="Village *" id="ad_village" name="ad_village" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Taluka *" id="ad_taluka" name="ad_taluka"/>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="District *" id="ad_district" name="ad_district"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="lableedit">Country :</label>
					<select class="form-control country" id="ad_country" name="ad_country" onchange="state_nm();" placeholder=""></select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="lableedit">State :</label>
					<Select class="form-control ad_state" id="ad_state" name="ad_state" onchange="city_nm();" placeholder=""></select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="lableedit ">City :</label>
					<select class="form-control ad_city" id="ad_city" name="ad_city" placeholder=""></select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label class="lableedit ">PIN / Zip code :</label>
					<input type="text" class="form-control" placeholder="PIN / Zip code *" id="ad_pincode" name="ad_pincode" onkeypress="javascript:return isNumber (event)">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" style="width:20%;float:left;" placeholder="Country Code" id="ad_con_code" name="ad_con_code" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Mobile No *" id="ad_mobile_no" name="ad_mobile_no" style="width:80%" onkeypress="javascript:return isNumber (event)" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="ad_con_code_tel" name="ad_con_code_tel" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Area code *" style="width:20%;float:left;" id="ad_area_code_tel" name="ad_area_code_tel" onkeypress="javascript:return isNumber (event)" />
					<input type="text" class="form-control" placeholder="Telephone No *" id="ad_tel_no" name="ad_tel_no" style="width:60%" onkeypress="javascript:return isNumber (event)" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="ad_con_code_fax" name="ad_con_code_fax" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Area code *" style="width:20%;float:left;" id="ad_area_code_fax" name="ad_area_code_fax" onkeypress="javascript:return isNumber (event)" />
					<input type="text" class="form-control" placeholder="Fax No*" id="ad_fa_no" name="ad_fa_no" style="width:60%" onkeypress="javascript:return isNumber (event)" />
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<input type="text" class="form-control" placeholder="Email *" id="ad_email" name="ad_email">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<input type="text" class="form-control" placeholder="Password *" id="ad_pass" name="ad_pass">
				</div>
			</div>
	 
			</div>
		</div>
	</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
		<div class="form-body">
		<h3 class="form-title">KYC (Know your customer)</h3>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input placeholder="Date Of Birth" class="textbox-n form-control datepickerdob" type="text" id="ad_dob" name="ad_dob" >
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Profile Picture Upload</button>
					<form method="post" name="upload_photo" id="s3_upload_profile" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;display:none;">
						<div class="box">
							<input type="file" name="profile" id="profile" class="inputfile inputfile-6" onchange="readURLs3(this,'profile');" />
							<label for="profile" class=""><span></span> 
								<strong>Upload Photo (JPG Only)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="profile" />
					</form>
					<div id="s3_msg_profile" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_profile" name="ad_profile" />
				</div>
			</div>
			<div class="row" >
				<div class="col-md-6 col-sm-6 col-xs-12 " >
					<input type="text" class="form-control" placeholder="Front Id Card / Aadhar Card No" id="ad_id_proof_no" name="ad_id_proof_no">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 ">
					<form method="post" name="upload_photo" id="s3_upload_fornt_img" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="fornt_img" id="fornt_img" class="inputfile inputfile-6" onchange="readURLs3(this,'fornt_img');" />
							<label for="fornt_img" class=""><span></span> 
								<strong>Upload <b>Front</b> Id Card / Adhar Card (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="fornt_img" />
					</form>
					<div id="s3_msg_fornt_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_front_id_proof_img" name="ad_front_id_proof_img" />
					<div id="results1" style="display:block">Your Front Id Card / Aadhar Card doc will appear here...</div>
				</div> 
			</div>
			<div class="row" >
				<div class="col-md-6 col-sm-6 col-xs-12"></div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<form method="post" name="upload_photo" id="s3_upload_back_img" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="back_img" id="back_img" class="inputfile inputfile-6" onchange="readURLs3(this,'back_img');" />
							<label for="back_img" class=""><span></span> 
								<strong>Upload <b>Back</b> Id Card / Adhar Card (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="back_img" />
					</form>
					<div id="s3_msg_back_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_back_id_proof_img" name="ad_back_id_proof_img" />
					<div id="results1" style="display:block">Your Back Id Card / Aadhar Card doc will appear here...</div>
				</div> 
			</div>
			<div class="row" >
				<div class="col-md-6 col-sm-6 col-xs-12 " >
					<input type="text" class="form-control" placeholder="Pan Card No" id="ad_pan_no" name="ad_pan_no">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 " >
					<form method="post" name="upload_photo" id="s3_upload_pan_img" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="pan_img" id="pan_img" class="inputfile inputfile-6" onchange="readURLs3(this,'pan_img');" />
							<label for="pan_img" class=""><span></span> 
								<strong>Upload Pan Card (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="pan_img" />
					</form>
					<div id="s3_msg_pan_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_pan_no_img" name="ad_pan_no_img" />
					<div id="results2" style="display:block">Your Pan Card doc will appear here...</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 "  >
					<input type="text" class="form-control" placeholder="Education" id="ad_edu" name="ad_edu">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 "  >
					<form method="post" name="upload_photo" id="s3_upload_edu_img" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="edu_img" id="edu_img" class="inputfile inputfile-6" onchange="readURLs3(this,'edu_img');" />
							<label for="edu_img" class=""><span></span> 
								<strong>Upload Education Certificate (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="edu_img" />
					</form>
					<div id="s3_msg_edu_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
					<input type="hidden" class="form-control" id="ad_edu_img" name="ad_edu_img" />
					<div id="results3" style="display:block">Your Education certificate will appear here...</div>
				</div>
			</div> 
		</div>
		</div>
	</div>
</div>	

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 border_admi" ></div>	
</div>	
<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
		<div class="form-body">
			<h3 class="form-title">Administration</h3>
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12" >
					<label class="lableedit ">Designation</label>
					<select class="form-control" id="ad_work_type" name='ad_work_type'>
						<option value="">Select Designation</option>
						<?php 
							mysqli_set_charset($con, 'utf8');
							$spre = $con->query("select at_title from admin_type where at_action = 1 ");
							if(mysqli_num_rows($spre) > 0){
							   while($r = mysqli_fetch_array($spre)){
								?>
									<option value="<?php echo $r['at_title']?>"><?php echo $r['at_title']?></option>
								<?php
							   }
							}
						?>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">User Role</label>
					<select class="form-control" id="ad_type" name='ad_type'>
						<option value="">Select Role Type</option>
						<?php 
							mysqli_set_charset($con, 'utf8');
							$spre = $con->query("select ut_title from user_type where ut_action = 1 ");
							if(mysqli_num_rows($spre) > 0){
							   while($r = mysqli_fetch_array($spre)){
								?>
									<option value="<?php echo $r['ut_title']?>"><?php echo $r['ut_title']?></option>
								<?php
							   }
							}
						?>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Show On Website</label>
					<select class="form-control" id="ad_display" name='ad_display'>
						<option value=""></option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Status</label>
					<select class="form-control" id="ad_status" name='ad_status'>
						<option value=""></option>
						<option value="paid">Paid</option>
						<option value="volunteer">volunteer</option>
					</select>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Position No</label>
					<input placeholder="Position No show on website" class="textbox-n form-control" type="text" id="ad_sort" name="ad_sort" >
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Joining Date</label>
					<input placeholder="Joining Date" class="textbox-n datepicker form-control" type="text" id="ad_join_date" name="ad_join_date" >
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Leaving Date</label>
					<input placeholder="Leaving Date" class="textbox-n datepicker form-control" type="text" id="ad_leaving_date" name="ad_leaving_date">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">User Status</label>
					<select class="form-control" id="ad_active" name='ad_active'>
						<option value="0">Active</option>
						<option value="1" >Delete</option>
					</select>
				</div>
			</div>
			<div class="row" >
				<hr>
				<div class="col-xs-12">
					<input type="submit" class="btn blue" id="add_admin" name="add_admin" value="Submit" />
					<button type="clear" class="btn default">Cancel</button>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
		 		
<?php
	}
?>
 
</div>
 
<?php include('footer.php'); ?> 
<script src="<?php echo $site_url?>book_admin/js/croppie.js"></script>
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
var rough_enter1 = 0;
$(document).ready(function() { 	
	$(".nav_admin_user_list").addClass('active_head');	

	$uploadCrop = $('#upload-demo').croppie({
		enableExif: true,
		viewport: {
			width: 250,
			height: 250
		},
		boundary: {
			width: 300,
			height: 300
		},
		enableExif: true,
		enableOrientation: true
	});

	$('#upload').on('change', function () { 
		var reader = new FileReader();
		reader.onload = function (e) {
			$uploadCrop.croppie('bind', {
				url: e.target.result
			}).then(function(){
				console.log('jQuery bind complete');
			});
			
		}
		reader.readAsDataURL(this.files[0]);
	});

	$( "#rotateLeft" ).click(function() {
		$uploadCrop.croppie('rotate', parseInt($(this).data('rotate')));
	});

	$( "#rotateRight" ).click(function() {
		$uploadCrop.croppie('rotate',parseInt($(this).data('rotate')));
	});

	$('.upload-result').on('click', function (ev) {
		$uploadCrop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function (resp) {
			$.ajax({
				url: "<?php echo $site_url?>ajaxpro",
				type: "POST",
				data: {"image":resp,"type":"profile"},
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function (data) {
					var spli = data.split('part');
					if(spli[0] == 1){
						document.getElementById("ad_profile").value = spli[1];
					} else {
						alert("Try Again.");
					}					
					html = '<img src="' + resp + '" />';
					$("#upload-demo-i").html(html);
					$(".response_gif").hide();
				}
			});
		});
	});
	
	$("#add_admin").on('click', function(){
		var ad_id = document.getElementById('ad_id').value;
		var ad_fname = document.getElementById('ad_fname').value;
		var ad_mname = document.getElementById('ad_mname').value;
		var ad_lname = document.getElementById('ad_lname').value;
		var ad_email = document.getElementById('ad_email').value;
		var ad_pass = document.getElementById('ad_pass').value;
		var ad_work_type = document.getElementById('ad_work_type').value;
		var ad_type = document.getElementById('ad_type').value;
		var ad_profile = document.getElementById('ad_profile').value;
		var ad_sort = document.getElementById('ad_sort').value;
		var ad_display = document.getElementById('ad_display').value;
		var ad_gender = document.getElementById('ad_gender').value;
		var ad_blood_group = document.getElementById('ad_blood_group').value;
		var ad_floor = document.getElementById('ad_floor').value;
		var ad_units = document.getElementById('ad_units').value;
		var ad_so_name = document.getElementById('ad_so_name').value;
		var ad_so_no = document.getElementById('ad_so_no').value;
		var ad_add1 = document.getElementById('ad_add1').value;
		var ad_add2 = document.getElementById('ad_add2').value;
		var ad_other_add = document.getElementById('ad_other_add').value;
		var ad_village = document.getElementById('ad_village').value;
		var ad_taluka = document.getElementById('ad_taluka').value;
		var ad_district = document.getElementById('ad_district').value;
		var ad_country = document.getElementById('ad_country').value;
		var ad_state = document.getElementById('ad_state').value;
		var ad_city = document.getElementById('ad_city').value;
		var ad_pincode = document.getElementById('ad_pincode').value;
		var ad_con_code = document.getElementById('ad_con_code').value;
		var ad_mobile_no = document.getElementById('ad_mobile_no').value;
		var ad_con_code_tel = document.getElementById('ad_con_code_tel').value;
		var ad_area_code_tel = document.getElementById('ad_area_code_tel').value;
		var ad_tel_no = document.getElementById('ad_tel_no').value;
		var ad_con_code_fax = document.getElementById('ad_con_code_fax').value;
		var ad_active = document.getElementById('ad_active').value;
		var ad_area_code_fax = document.getElementById('ad_area_code_fax').value;
		var ad_fa_no = document.getElementById('ad_fa_no').value;
		var ad_dob = document.getElementById('ad_dob').value;
		var ad_id_proof_no = document.getElementById('ad_id_proof_no').value;
		var ad_front_id_proof_img = document.getElementById('ad_front_id_proof_img').value;
		var ad_back_id_proof_img = document.getElementById('ad_back_id_proof_img').value;
		var ad_pan_no = document.getElementById('ad_pan_no').value;
		var ad_pan_no_img = document.getElementById('ad_pan_no_img').value;
		var ad_edu = document.getElementById('ad_edu').value;
		var ad_edu_img = document.getElementById('ad_edu_img').value;
		var ad_status = document.getElementById('ad_status').value;
		var ad_join_date = document.getElementById('ad_join_date').value;
		var ad_leaving_date = document.getElementById('ad_leaving_date').value;
		
		if(ad_fname == ""){
			alert("Enter First Name");
		} else if(ad_lname == "") {
			alert("Enter Last Name");
		} else if(ad_mname == "") {
			alert("Enter Middle Name");
		} else if(ad_email == "") {
			alert("Enter Email");
		} else if(ad_pass == "") {
			alert("Enter Password");
		} else if(ad_work_type == "") {
			alert("Enter User Type");
		} else if(ad_type == "") {
			alert("Enter Role Type");
		} else if(ad_profile == "") {
			alert("Enter Profile Picture");
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"ad_id="+ad_id+"&ad_fname="+ad_fname+"&ad_mname="+ad_mname+"&ad_lname="+ad_lname+"&ad_email="+ad_email+"&ad_pass="+ad_pass+"&ad_work_type="+ad_work_type+"&ad_type="+ad_type+"&ad_profile="+ad_profile+"&ad_sort="+ad_sort+"&ad_display="+ad_display+"&ad_gender="+ad_gender+"&ad_blood_group="+ad_blood_group+"&ad_floor="+ad_floor+"&ad_units="+ad_units+"&ad_so_name="+ad_so_name+"&ad_so_no="+ad_so_no+"&ad_add1="+ad_add1+"&ad_add2="+ad_add2+"&ad_other_add="+ad_other_add+"&ad_village="+ad_village+"&ad_taluka="+ad_taluka+"&ad_district="+ad_district+"&ad_country="+ad_country+"&ad_state="+ad_state+"&ad_city="+ad_city+"&ad_pincode="+ad_pincode+"&ad_con_code="+ad_con_code+"&ad_mobile_no="+ad_mobile_no+"&ad_con_code_tel="+ad_con_code_tel+"&ad_area_code_tel="+ad_area_code_tel+"&ad_tel_no="+ad_tel_no+"&ad_con_code_fax="+ad_con_code_fax+"&ad_area_code_fax="+ad_area_code_fax+"&ad_fa_no="+ad_fa_no+"&ad_dob="+ad_dob+"&ad_id_proof_no="+ad_id_proof_no+"&ad_front_id_proof_img="+ad_front_id_proof_img+"&ad_back_id_proof_img="+ad_back_id_proof_img+"&ad_pan_no="+ad_pan_no+"&ad_pan_no_img="+ad_pan_no_img+"&ad_edu="+ad_edu+"&ad_edu_img="+ad_edu_img+"&ad_status="+ad_status+"&ad_join_date="+ad_join_date+"&ad_leaving_date="+ad_leaving_date+"&ad_active="+ad_active,
				url:"ad_data.php?call=save_admin",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Submit Successfully.");
						location.reload();
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });
});
 
 
	country_name();
	function country_name(){
		var country_name = '<?php echo $country; ?>';
		$.ajax({
			type:"post",
			data:"country_name="+country_name,
			url:"<?php echo $site_url?>data.php?call=country_leva",
			success:function(msg){
				$(".country").html(msg);
				state_nm();
			}
		});
	}
		
	function state_nm(){
		var con_no = document.getElementById("ad_country").value;
		var state_name = '<?php echo $state; ?>';
		$.ajax({
			type:"post",
			data:"con_id="+con_no+"&state_name="+state_name, 
			url:"<?php echo $site_url?>data.php?call=state_leva",
			success:function(msg){     
				var msga = msg.split("~");
				$(".ad_state").html(msga[0]);
				city_nm();
			}
		});
	}
	
		
	function city_nm(){
		var stat_no = document.getElementById("ad_state").value;
		var city_name = '<?php echo $city; ?>';
		$.ajax({
			type:"post",
			data:"stat_no="+stat_no+"&city_name="+city_name, 
			url:"<?php echo $site_url?>data.php?call=city_leva",
			success:function(msg){
				$(".ad_city").html(msg);
			}
		});
	}
	
	function readURLs3(input, typex) {
		
			if(typex == 'profile'){
				document.getElementById('ad_profile').value = '';
			} else if(typex == 'fornt_img'){
				document.getElementById('ad_front_id_proof_img').value = '';
			} else if(typex == 'back_img'){
				document.getElementById('ad_back_id_proof_img').value = '';
			} else if(typex == 'pan_img'){
				document.getElementById('ad_pan_no_img').value = '';
			} else if(typex == 'edu_img'){
				document.getElementById('ad_edu_img').value = '';
			}
			
			$('#s3_upload_'+typex).ajaxForm({
				target:'',
				beforeSubmit:function(e){
					$('#s3_msg_'+typex).html("File Uploading...");
				}, 
				cache: false,
				success:function(response){
					if(response == 1) {
						$('#s3_msg_'+typex).html("File Uploaded");
					} else if(response == 2){
						$('#s3_msg_'+typex).html("File Not Upload.");
					} else if(response == 3){
						$('#s3_msg_'+typex).html("File Format Invalid.");
					} else {
						$('#s3_msg_'+typex).html("File Upload");
						console.log("response "+response);
						if(typex == 'profile'){
							document.getElementById('ad_profile').value = response;
						} else if(typex == 'fornt_img'){
							document.getElementById('ad_front_id_proof_img').value = response;
						} else if(typex == 'back_img'){
							document.getElementById('ad_back_id_proof_img').value = response;
						} else if(typex == 'pan_img'){
							document.getElementById('ad_pan_no_img').value = response;
						} else if(typex == 'edu_img'){
							document.getElementById('ad_edu_img').value = response;
						}
						
					}
				},complete: function(response) {
				},
				error:function(e){
				}
			}).submit();
		
	}
 
</script>

</body>
</html>