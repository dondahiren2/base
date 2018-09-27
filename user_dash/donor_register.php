<!DOCTYPE html>
<html lang="en">

<?php
	include('head.php');
?>
<head>
<style>
#results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results1 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results2 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results3 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results4 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results5 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results6 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results7 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results8 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
#results9 { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; }
</style>
</head>
<body>

<?php  
	include('header.php');
?>

<section class="mt160">
  <div class="container">
    <div class="row wow slideInDown">
      <div class="col-md-12">
        <h1>Donor Registration</h1>
        <hr>
      </div>
    </div>
	<div class="row mt10"><!--onsubmit="return valid_donor()"-->
	<form role="form" id="donorform" action="data.php?call=add_donor" method="post"  enctype="multipart/form-data">
      <div class="col-md-12 wow fadeIn">
        <div class="row gray-bg register-now">
			<p class="topmarg">Donor as a : </p>
			<div class="col-md-2 col-sm-6 col-xs-12 botmarg">
				<input class="rdio" type="radio" id="personal" name="show_div" onclick="pers();" value="personal" style="float:left;margin-right:5px;" checked="checked"/>Personal 
			</div>
			<div class="col-md-2 col-sm-6 col-xs-12">
				<input class="rdio" type="radio" id="corpo" name="show_div" onclick="pers();" value="corporate" style="float:left;margin-right:5px;"/>Corporate / NGO
			</div>
		</div>
      </div>
	<div class="col-md-12 wow fadeIn" id="don_pers" style="padding-left:0px;padding-right:0px;">
      <div class="col-md-12 wow fadeIn bordtop">
		<div class="row gray-bg register-now">
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="First Name *" id="don_fname" name="don_fname" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Middle Name *" id="don_mname" name="don_mname" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Last Name *" id="don_lname" name="don_lname" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Blood group *" id="don_bld_grp" name="don_bld_grp" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;margin-bottom:10px;">
					<div style="float:left;margin-top:15px;"><label class="lableedit">Gender :</label></div>
					<div style="float:left;margin-left:20px;" class="topmarg">
						<Select style="width:145%;" class="form-control" id="don_gender" name="don_gender">
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	  </div>
	  <div class="col-md-12 wow fadeIn bordtop">
        <div class="row gray-bg register-now">
			<div class="col-md-12 col-sm-12 col-xs-12 topmarg nopadiing" style="padding-left:0px;">
				<p class="nomarg">Contact Details :</p>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Floor *" id="don_floor" name="don_floor" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Unit *" id="don_unit" name="don_unit"/>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Building/ Tower/ Complax/ Society Name *" id="don_soc_nm" name="don_soc_nm" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Building/ Tower/ Complax/ Society No *" id="don_build_no" name="don_build_no" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Address1 *" id="don_add1" name="don_add1" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Address2" id="don_add2" name="don_add2" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Other Refrence For Address *" id="don_ref_add" name="don_ref_add" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control botmarg" placeholder="Village *" id="don_village" name="don_village" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control botmarg" placeholder="Taluka *" id="don_taluka_new" name="don_taluka_new" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="District *" id="don_taluka" name="don_taluka" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 botmarg nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<label class="lableedit">Country :</label>
					<Select class="form-control" id="country" name="country" onchange="state_nm();">
					
					</select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<label class="lableedit">State :</label>
					<Select class="form-control" id="state" name="state" onchange="city_nm();">
          
					</select>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<label class="lableedit">City :</label>
					<Select class="form-control" id="city" name="city" placeholder="">
          
					</select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;margin-top:11px;">
					<input type="text" class="form-control" placeholder="PIN / Zip code *" id="don_zip_code" name="don_zip_code" onkeypress="javascript:return isNumber (event)" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" style="width:20%;float:left;" placeholder="Country Code" id="ngo_mob_no" name="ngo_mob_no" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Mobile No *" id="don_co_no" name="don_co_no" style="width:80%;" onkeypress="javascript:return isNumber (event)" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="tel_c_no" name="don_c_tel_no" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Area code *" style="width:20%;float:left;" id="don_a_tel_no" name="don_a_tel_no" onkeypress="javascript:return isNumber (event)" />
					<input type="text" class="form-control" placeholder="Telephone No *" id="don_tel_no" name="don_tel_no" style="width:60%" onkeypress="javascript:return isNumber (event)" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;margin-bottom:10px;">
					<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="fax_c_no" name="don_c_fax_no" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Area code *" style="width:20%;float:left;" id="don_a_fax_no" name="don_a_fax_no" onkeypress="javascript:return isNumber (event)" />
					<input type="text" class="form-control" placeholder="Fax No *" id="don_fax_no" name="don_fax_no" style="width:60%" onkeypress="javascript:return isNumber (event)" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Email *" id="don_email" name="don_email">
				</div>
			</div>
        </div>
      </div>
	  <div class="col-md-12 wow fadeIn bordtop">
        <div class="row gray-bg register-now">
			<div class="col-md-12 col-sm-12 col-xs-12 topmarg nopadiing" style="padding-left:0px;">
				<p class="nomarg">KYC :</p>
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input placeholder="Date Of Birth" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="don_dob" name="don_dob" onfocusout="(this.type='text')"/>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<div class="topmarg" style="float:left;">
						<label class="lableedit">Language Spoken :</label></div>
						<div class="" style="margin-top:12px;" id="langauages" >
						</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding nopaddtop" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Id Card / Adhar no" id="don_adhar_no" name="don_adhar_no" />
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 lefpadding nopaddtop" style="padding-right:0px;">
					<div class="box">
						<input type="file" name="don_adhar_doc" id="don_adhar_doc" class="inputfile inputfile-6"/>
						<label for="don_adhar_doc" class=""><span></span> 
							<strong>Upload Id Card / Adhar Doc (PDF/JPG)</strong>
						</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 lefpadding acolor takmarge" style="margin-top:20px;padding-right:0px;">
					<a onclick="take_pic4()" data-toggle="modal" data-target="#pidcrd" id="pidc">Take Photo</a>
					<input type="hidden" value="" name="pid_takepic" id="pid_takepic" />
				</div>
				<div class="modal fade" id="pidcrd" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 600px;height: 440px;border-radius: 0px;text-align: -webkit-center;margin-top:200px;">
							<div id="pid_card" class="modal-body" style="padding:0px;"></div>
							<input type="button" value="Take Photo" onClick="take_snapshot4()" data-dismiss="modal" />
						</div>
					</div>
				</div>
				<div id="results4" style="display:none">Your captured image will appear here...</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding nopaddtop" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Pan no" id="don_pan_no" name="don_pan_no">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 lefpadding nopaddtop" style="padding-right:0px;">
					<div class="box">
						<input type="file" name="don_pan_doc" id="don_pan_doc" class="inputfile inputfile-6"/>
						<label for="don_pan_doc" class=""><span></span> 
							<strong>Upload Pan Doc (PDF/JPG)</strong>
						</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 lefpadding acolor takmarge" style="margin-top:20px;padding-right:0px;">
					<a onclick="take_pic5()" data-toggle="modal" data-target="#ppanc" id="ppan">Take Photo</a>
					<input type="hidden" value="" name="ppan_takepic" id="ppan_takepic" />
				</div>
				<div class="modal fade" id="ppanc" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 600px;height: 440px;border-radius: 0px;text-align: -webkit-center;margin-top:200px;">
							<div id="ppan_card" class="modal-body" style="padding:0px;"></div>
							<input type="button" value="Take Photo" onClick="take_snapshot5()" data-dismiss="modal" />
						</div>
					</div>
				</div>
				<div id="results5" style="display:none">Your captured image will appear here...</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-4 col-sm-4 col-xs-12 ripadding nopaddtop" style="padding-left:0px;">
					<div class="box">
						<input type="file" name="don_pic" id="don_pic" class="inputfile inputfile-6"/>
						<label for="don_pic" class=""><span></span> 
							<strong>Upload Photo (PDF/JPG)</strong>
						</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 lefpadding acolor takmarge" style="margin-top:20px;padding-right:0px;">
					<a onclick="take_pic6()" data-toggle="modal" data-target="#profile" id="prof">Take Photo</a>
					<input type="hidden" value="" name="profile_takepic" id="profile_takepic" />
				</div>
				<div class="modal fade" id="profile" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 600px;height: 440px;border-radius: 0px;text-align: -webkit-center;margin-top:200px;">
							<div id="pro_pic" class="modal-body" style="padding:0px;"></div>
							<input type="button" value="Take Photo" onClick="take_snapshot6()" data-dismiss="modal" />
						</div>
					</div>
				</div>
				<div id="results6" style="display:none">Your captured image will appear here...</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding topmarg" style="padding-right:0px;">
					Note : you want to be part of volunteer
					<input class="mrg_left" style="margin-top:0px!important;"  type='checkbox' value=""  id="don_volun" name="don_volun">
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<div class="col-md-12 wow fadeIn" id="don_corpo" style="padding-left:0px;padding-right:0px;display:none;">
      <div class="col-md-12 wow fadeIn bordtop">
		<div class="row gray-bg register-now">
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-12 col-sm-12 col-xs-12 ripadding botmarg" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Name Of NGO / Corporate *" id="corp_name" name="corp_name">
				</div>
			</div>
		</div>
	  </div>
	  <div class="col-md-12 wow fadeIn bordtop">
        <div class="row gray-bg register-now">
			<div class="col-md-12 col-sm-12 col-xs-12 topmarg nopadiing" style="padding-left:0px;">
				<p class="nomarg">Contact Details :</p>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Floor *" id="corp_floor" name="corp_floor" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Unit *" id="corp_unit" name="corp_unit" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Building/ Tower/ Complax/ Society Name *" id="corp_soc_nm" name="corp_soc_nm" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Building/ Tower/ Complax/ Society No *" id="corp_build_no" name="corp_build_no" />
				</div>
			</div>
				<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Address1 *" id="corp_add1" name="corp_add1" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Address2" id="corp_add2" name="corp_add2" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Other Refrence For Address *" id="corp_ref_add" name="corp_ref_add" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control botmarg" placeholder="Village *" id="corp_village" name="corp_village" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control botmarg" placeholder="Taluka *" id="corp_taluka_new" name="corp_taluka_new" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="District *" id="corp_taluka" name="corp_taluka" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 botmarg nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<label class="lableedit">Country :</label>
					<Select class="form-control" id="ad_country" name="ad_country" onchange="adm_state();">
					
					</select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<label class="lableedit">State :</label>
					<Select class="form-control" id="ad_state" name="ad_state" onchange="adm_city();">
          
					</select>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<label class="lableedit">City :</label>
					<Select class="form-control" id="ad_city" name="ad_city" placeholder="">
          
					</select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;margin-top:11px;">
					<input type="text" class="form-control" placeholder="PIN / Zip code *" id="corp_zip_code" name="corp_zip_code" onkeypress="javascript:return isNumber (event)" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" style="width:20%;float:left;" id="mob_no" name="mob_no" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Mobile No *" id="corp_co_no" name="corp_co_no" style="width:80%;" onkeypress="javascript:return isNumber (event)" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="corp_c_tel_no" name="corp_c_tel_no" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Area code *" style="width:20%;float:left;" id="corp_a_tel_no" name="corp_a_tel_no" onkeypress="javascript:return isNumber (event)" />
					<input type="text" class="form-control" placeholder="Telephone No *" id="corp_tel_no" name="corp_tel_no" style="width:60%;" onkeypress="javascript:return isNumber (event)" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;margin-bottom:10px;">
					<input type="text" class="form-control" placeholder="Country code" style="width:20%;float:left;" id="corp_c_fax_no" name="corp_c_fax_no" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Area code *" style="width:20%;float:left;" id="corp_a_fax_no" name="corp_a_fax_no" onkeypress="javascript:return isNumber (event)" />
					<input type="text" class="form-control" placeholder="Fax *" id="corp_fax_no" name="corp_fax_no" style="width:60%;" onkeypress="javascript:return isNumber (event)" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Email *" id="corp_email" name="corp_email">
				</div>
			</div>
        </div>
      </div>
	  <div class="col-md-12 wow fadeIn bordtop">
        <div class="row gray-bg register-now">
			<div class="col-md-12 col-sm-12 col-xs-12 topmarg nopadiing" style="padding-left:0px;">
				<p class="nomarg">KYC :</p>
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input placeholder="Date Of Registration" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="don_regdt" name="don_regdt" onfocusout="(this.type='text')"/>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding nopaddtop" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Registration No" id="corp_reg_no" name="corp_reg_no">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 lefpadding nopaddtop" style="padding-right:0px;">
					<div class="box">
						<input type="file" name="corp_reg_doc" id="corp_reg_doc" class="inputfile inputfile-6"/>
						<label for="corp_reg_doc" class=""><span></span> 
							<strong>Upload Registration Doc (PDF/JPG)</strong>
						</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 lefpadding acolor takmarge" style="margin-top:20px;padding-right:0px;">
					<a onclick="take_pic()" data-toggle="modal" data-target="#regis" id="registraion">Take Photo</a>
					<input type="hidden" value="" name="regis_takepic" id="regis_takepic" />
				</div>
				<div class="modal fade" id="regis" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 600px;height: 440px;border-radius: 0px;text-align: -webkit-center;margin-top:200px;">
							<div id="regist_doc" class="modal-body" style="padding:0px;"></div>
							<input type="button" value="Take Photo" onClick="take_snapshot()" data-dismiss="modal" />
						</div>
					</div>
				</div>
				<div id="results" style="display:none">Your captured image will appear here...</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding nopaddtop" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Pan no" id="corp_pan_no" name="corp_pan_no">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 lefpadding nopaddtop" style="padding-right:0px;">
					<div class="box">
						<input type="file" name="corp_pan_doc" id="corp_pan_doc" class="inputfile inputfile-6"/>
						<label for="corp_pan_doc" class=""><span></span> 
							<strong>Upload Pan Doc (PDF/JPG)</strong>
						</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 lefpadding acolor takmarge" style="margin-top:20px;padding-right:0px;">
					<a onclick="take_pic1()" data-toggle="modal" data-target="#panc" id="pan">Take Photo</a>
					<input type="hidden" value="" name="pan_takepic" id="pan_takepic" />
				</div>
				<div class="modal fade" id="panc" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 600px;height: 440px;border-radius: 0px;text-align: -webkit-center;margin-top:200px;">
							<div id="pan_card" class="modal-body" style="padding:0px;"></div>
							<input type="button" value="Take Photo" onClick="take_snapshot1()" data-dismiss="modal" />
						</div>
					</div>
				</div>
				<div id="results1" style="display:none">Your captured image will appear here...</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding nopaddtop" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Corporate / NGO Profile" id="corp_pro" name="corp_pro">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 lefpadding nopaddtop" style="padding-right:0px;">
					<div class="box">
						<input type="file" name="corp_pic" id="corp_pic" class="inputfile inputfile-6"/>
						<label for="corp_pic" class=""><span></span> 
							<strong>Upload Profile Photo (PDF/JPG)</strong>
						</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 lefpadding acolor takmarge" style="margin-top:20px;padding-right:0px;">
					<a onclick="take_pic2()" data-toggle="modal" data-target="#profile" id="cdon_prof">Take Photo</a>
					<input type="hidden" value="" name="profile_takepic" id="profile_takepic" />
				</div>
				<div class="modal fade" id="profile" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 600px;height: 440px;border-radius: 0px;text-align: -webkit-center;margin-top:200px;">
							<div id="cdon_profile" class="modal-body" style="padding:0px;"></div>
							<input type="button" value="Take Photo" onClick="take_snapshot2()" data-dismiss="modal" />
						</div>
					</div>
				</div>
				<div id="results2" style="display:none">Your captured image will appear here...</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding nopaddtop botmarg" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Corporate / NGO Website" id="corp_site" name="corp_site">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 lefpadding nopaddtop" style="padding-right:0px;">
					<div class="box">
						<input type="file" name="corp_logo" id="corp_logo" class="inputfile inputfile-6"/>
						<label for="corp_logo" class=""><span></span> 
							<strong>Upload Logo (PDF/JPG)</strong>
						</label>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-12 lefpadding acolor takmarge" style="margin-top:20px;padding-right:0px;">
					<a onclick="take_pic3()" data-toggle="modal" data-target="#nglogo" id="logo">Take Photo</a>
					<input type="hidden" value="" name="logo_takepic" id="logo_takepic" />
				</div>
				<div class="modal fade" id="nglogo" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 600px;height: 440px;border-radius: 0px;text-align: -webkit-center;margin-top:200px;">
							<div id="ngo_lg" class="modal-body" style="padding:0px;"></div>
							<input type="button" value="Take Photo" onClick="take_snapshot3()" data-dismiss="modal" />
						</div>
					</div>
				</div>
				<div id="results3" style="display:none">Your captured image will appear here...</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 wow fadeIn bordtop">
        <div class="row gray-bg register-now">
			<div class="col-md-12 col-sm-12 col-xs-12 topmarg nopadiing" style="padding-left:0px;">
				<p class="nomarg">Representative contact detail :</p>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="First Name *" id="admin_fnm" name="admin_fnm" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Middle name *" id="admin_mnm" name="admin_mnm" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Surname *" id="admin_snm" name="admin_snm" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" placeholder="Email *" id="admin_email" name="admin_email" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input type="text" class="form-control" placeholder="Blood Goup *" id="admin_bldgrp" name="admin_bldgrp" />
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<div class="topmarg" style="float:left;margin-top: 15px;">
						<label class="lableedit">Gender :</label></div>
						<div class="topmarg" style="float:left;margin-left:10px;">
						<Select class="form-control" id="admin_gender" name="admin_gender" style="width:155%;">
							<option>Male</option>
							<option>Female</option>
						</select>
						</div>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<input placeholder="Date Of Birth *" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="a_dob" name="a_dob" onfocusout="(this.type='text')">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;">
					<input type="text" class="form-control" style="width:20%;float:left;" id="mobil_no" name="mobil_no" onkeypress="javascript:return isNumber (event)"/>
					<input type="text" class="form-control" placeholder="Mobile No *" id="mob_co_code" name="mob_co_code" style="width:80%;" onkeypress="javascript:return isNumber (event)" />
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 nopadiing botmarg" style="padding-left:0px;">
				<div class="col-md-6 col-sm-6 col-xs-12 ripadding" style="padding-left:0px;">
					<div class="topmarg" style="float:left;margin-top: 15px;">
						<label class="lableedit">Martial Status  :</label></div>
						<div class="topmarg" style="float:left;margin-left:10px;">
						<Select class="form-control" id="mar_status" name="mar_status" style="width:155%;">
							<option>Married</option>
							<option>Single</option>
							<option>Divorced</option>
							<option>Widowed </option>
						</select>
						</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 lefpadding" style="padding-right:0px;margin-top: 15px;">
					Note : you want to be part of volunteer
					<input class="mrg_left" style="margin-top:0px!important;"  type='checkbox' value=""  id="cdon_volun" name="cdon_volun">
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col-md-12">
	<div class="row gray-bg register-now">
		<div class="mt25 col-md-12 col-sm-12 col-xs-12" style="text-align: -webkit-center;">
			<input type="submit" name="don_add"class="btn-orange" id="don_add" value="Register"/>
		</div>
	</div>
	</div>
</form>
	
</div>
</div>
</section>

<?php
	include('footer.php');
?>

</body>

<script src="ajax.js"></script>

<script language="JavaScript">    
	Webcam.set({
		width: 600,
		height: 450,
		image_format: 'jpeg',
		jpeg_quality: 90
	});
	Webcam.attach('#regist_doc');
	Webcam.attach('#pan_card');
	Webcam.attach('#cdon_profile');
	Webcam.attach('#ngo_lg');
	Webcam.attach('#pid_card');
	Webcam.attach('#ppan_card');	
	Webcam.attach('#pro_pic');	

</script>

<script language="JavaScript">
	
	function take_pic() {
		var uppic = document.getElementById('corp_reg_doc').value;
		if(uppic == ""){
			//alert("1");
			//$("#photodiv").css({"display":"block"});
		}
		else{
			alert("You have already upload a photo");
			$("#registraion").attr({"data-target":""});
		}
			
	}
	
	function take_pic1() {
		var uppic = document.getElementById('corp_pan_doc').value;
		if(uppic == ""){
			//alert("1");
			//$("#photodiv").css({"display":"block"});
		}
		else{
			alert("You have already upload a photo");
			$("#pan").attr({"data-target":""});
		}
			
	} 
	
	function take_pic2() {
		var uppic = document.getElementById('corp_pic').value;
		if(uppic == ""){
			//alert("1");
			//$("#photodiv").css({"display":"block"});
		}
		else{
			alert("You have already upload a photo");
			$("#vol_prof").attr({"data-target":""});
		}
			
	}
	
	function take_pic3() {
		var uppic = document.getElementById('corp_logo').value;
		if(uppic == ""){
			//alert("1");
			//$("#photodiv").css({"display":"block"});
		}
		else{
			alert("You have already upload a photo");
			$("#logo").attr({"data-target":""});
		}
			
	} 
	
	function take_pic4() {
		var uppic = document.getElementById('don_adhar_doc').value;
		if(uppic == ""){
			//alert("1");
			//$("#photodiv").css({"display":"block"});
		}
		else{
			alert("You have already upload a photo");
			$("#pidc").attr({"data-target":""});
		}
			
	}  
	
	function take_pic5() {
		var uppic = document.getElementById('don_pan_doc').value;
		if(uppic == ""){
			//alert("1");
			//$("#photodiv").css({"display":"block"});
		}
		else{
			alert("You have already upload a photo");
			$("#ppan").attr({"data-target":""});
		}
			
	}
	
	function take_pic6() {
		var uppic = document.getElementById('don_pic').value;
		if(uppic == ""){
			//alert("1");
			//$("#photodiv").css({"display":"block"});
		}
		else{
			alert("You have already upload a photo");
			$("#prof").attr({"data-target":""});
		}
			
	}
	
	function take_snapshot() { 
		Webcam.snap( function(data_uri) {
			document.getElementById('results').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				document.getElementById("corp_reg_doc").disabled = true;
				document.getElementById("regis_takepic").value = text;
				document.getElementById('results').innerHTML = '<img src="'+text+'" height="200px" width="200px"/>';
			} );	
		} );
	}
	
	function take_snapshot1() {
		Webcam.snap( function(data_uri) {
			document.getElementById('results1').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				document.getElementById("corp_pan_doc").disabled = true;
				document.getElementById("pan_takepic").value = text;
				document.getElementById('results1').innerHTML = '<img src="'+text+'" height="200px" width="200px"/>';
			} );	
		} );
	}
	
	function take_snapshot2() {
		Webcam.snap( function(data_uri) {
			document.getElementById('results2').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				document.getElementById("corp_pic").disabled = true;
				document.getElementById("profile_takepic").value = text;
				document.getElementById('results2').innerHTML = '<img src="'+text+'" height="200px" width="200px"/>';
			} );	
		} );
	}
	
	function take_snapshot3() {
		Webcam.snap( function(data_uri) {
			document.getElementById('results3').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				document.getElementById("ngo_logo").disabled = true;
				document.getElementById("logo_takepic").value = text;
				document.getElementById('results3').innerHTML = '<img src="'+text+'" height="200px" width="200px"/>';
			} );	
		} );
	} 
	
	function take_snapshot4() { 
		Webcam.snap( function(data_uri) {
			document.getElementById('results4').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				document.getElementById("don_adhar_doc").disabled = true;
				document.getElementById("pid_takepic").value = text;
				document.getElementById('results4').innerHTML = '<img src="'+text+'" height="200px" width="200px"/>';
			} );	
		} );
	}    
	
	function take_snapshot5() {
		Webcam.snap( function(data_uri) {
			document.getElementById('results5').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				document.getElementById("don_pan_doc").disabled = true;
				document.getElementById("ppan_takepic").value = text;
				document.getElementById('results5').innerHTML = '<img src="'+text+'" height="200px" width="200px"/>';
			} );	
		} );
	}
	
	function take_snapshot6() {
		Webcam.snap( function(data_uri) {
			document.getElementById('results6').innerHTML = 
				'<h2>Processing:</h2>';
			Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
				document.getElementById("don_pic").disabled = true;
				document.getElementById("profile_takepic").value = text;
				document.getElementById('results6').innerHTML = '<img src="'+text+'" height="200px" width="200px"/>';
			} );	
		} );
	}
	
</script>
 
<script>
$(document).ready(function(){
	country_name();
	work_country();
	ind_state();
	work_ind_state();
	ad_ind_state();
	ad_country();
	langauge_spk();

	$('input[type="file"]').change(function(e){
		var fileName = e.target.files[0].name;
		//alert('The file "' + fileName +  '" has been selected.');
		getFileExtension(fileName);
	});
	
	$('input[type="file"]').change(function(e){
		var fileSize = e.target.files[0].size;
		//alert('The file "' + fileSize +  '" has been selected.');
		getFileSize(fileSize);
	});
	
	$("#don_a_fax_no").change(function(){
		var acode = this.value;
		var tacode = document.getElementById('don_a_tel_no').value;
		if(acode == tacode){
			return true;
		}else{
			alert("Enter valid area code for fax");
			this.value = null;
			return false;
		}
	});
	
	$("#corp_a_fax_no").change(function(){
		var acode = this.value;
		var tacode = document.getElementById('corp_a_tel_no').value;
		if(acode == tacode){
			return true;
		}else{
			alert("Enter valid area code for fax");
			this.value = null;
			return false;
		}
	});
	
		$("#don_email").change(function (){ 
				var email = this.value;
				//alert(email);
				$.ajax({
					type:"post",
					data:"email="+email, 
					url:"data.php?call=check_email_pdon",
					success:function(msg){
						//alert(msg);
						if(msg == 1){
							alert("Your email id is aleready registred..");
							return false;
						}else{
							return true;
						}
					}
				});
			});
			
			$("#corp_email").change(function (){ 
				var email = this.value;
				$.ajax({
					type:"post",
					data:"email="+email, 
					url:"data.php?call=check_email_cdon",
					success:function(msg){
						//alert(msg);
						if(msg == 1){
							alert("Your email id is aleready registred..");
							return false;
						}else{
							return true;
						}
					}
				});
			});
	
});

function pers(){
	$("#don_pers").css("display","block");
	if(document.getElementById("personal").checked == true){
		$("#don_pers").css("display","block");
		$("#don_corpo").css({"display":"none"});
	}else if(document.getElementById("corpo").checked == true){
		$("#don_pers").css("display","none");
		$("#don_corpo").css({"display":"block"});
	}else {
	}
}

function getFileSize(filesiz){
	if(filesiz > 307200){
		alert("File is too big!");
		return false;
	};
}

function getFileExtension(filenm){
	//alert(filenm);
	var extnm = (filenm.split('.'));
	//alert(extnm[1]);
	if(extnm[1] == 'jpg' || extnm[1] == 'png' || extnm[1] == 'JPG' || extnm[1] == 'jpeg' || extnm[1] == 'pdf'){
		return true;
	}else{
		alert("Invalid file...");
		return false;
	}
}
</script>

</html>