function country_name(){
	//alert(1);
	$.ajax({
		type:"post",
		//data:"ri_id="+ri_id, 
		url:"user_data.php?call=country_leva",
		success:function(msg){
			//alert(msg);
			$("#country").html(msg);
			var con_id = document.getElementById("cont_id").value;
			$('#country').value = con_id;
		}
	});
}

function all_cities(){
	//alert(1);
	$.ajax({
		type:"post",
		//data:"ri_id="+ri_id, 
		url:"user_data.php?call=cities_leva",
		success:function(msg){
			//alert(msg);
			$("#city").html(msg);
			var con_id = document.getElementById("cit_id").value;
			$('#city').value = con_id;
		}
	});
}

function work_country(){  
	//alert(1);
	$.ajax({
		type:"post",
		//data:"ri_id="+ri_id, 
		url:"user_data.php?call=country_leva",
		success:function(msg){
			//alert(msg);
			$(".country_work").html(msg);
			var con_id = document.getElementById("cont_id").value;
			$('.country_work').value = con_id;
		}
	});
}

function adm_state(){
	var con_no = document.getElementById("ad_country").value;
	//alert(con_no);
	$.ajax({
		type:"post",
		data:"con_id="+con_no, 
		url:"user_data.php?call=state_leva",
		success:function(msg){     
			//alert(msg);
			var msga = msg.split("~");
			$("#ad_state").html(msga[0]);     
			//alert(msga[1]);
			var state_id = document.getElementById("state_id").value;
			$('#ad_state').value = state_id;  
		}
	});
}

function state_nm(){
	var con_no = document.getElementById("country").value;
	$.ajax({
		type:"post",
		data:"con_id="+con_no, 
		url:"user_data.php?call=state_leva",
		success:function(msg){     
			//alert(msg);
			var msga = msg.split("~");
			$("#state").html(msga[0]);    			
			//alert(msga[1]);
			var state_id = document.getElementById("state_id").value;
			$('#state').value = state_id;  
			//var cont_phon = msga[1];
			//document.getElementById('tel_no').value = "+" + cont_phon;  
			//alert(cont_phon);
		}
	});
}

function state_nm1(){
	//alert("1");
	var con_no = document.getElementById("country").value;
	//alert(con_no);
	$.ajax({
		type:"post",
		data:"con_no="+con_no, 
		url:"user_data.php?call=state_edit",
		success:function(msg){  
			//alert(msg);
			var msga = msg.split("~");   
			$("#state").html(msga[0]);
			var state_id = document.getElementById("state_id").value;
			$('#state').value = state_id;  
			//alert(msga[1]);
			$("#country").value(msga[1]);
		}
	});
}

function city_nm1(){
	//alert("1");
	var city_no = document.getElementById("state").value;
	//alert(city_no);
	$.ajax({
		type:"post",
		data:"city_no="+city_no, 
		url:"user_data.php?call=city_edit",
		success:function(msg){   
			var msga = msg.split("~");   
			$("#city").html(msga[0]);  
		}
	});
}

function ind_state(){
	$.ajax({
		type:"post",
		//data:"ri_id="+ri_id, 
		url:"user_data.php?call=ind_state_leva",
		success:function(msg){
			//alert(msg);
			$("#state").html(msg);
			var state_id = document.getElementById("state_id").value;
			$('#state').value = state_id;   
		}
	});
}

function work_ind_state(){
	$.ajax({
		type:"post",
		//data:"ri_id="+ri_id, 
		url:"user_data.php?call=ind_state_leva",
		success:function(msg){
			//alert(msg);
			$(".state_work").html(msg);
			var state_id = document.getElementById("state_id").value;
			$('.state_work').value = state_id;   
		}
	});
}

function work_state(){
	//alert("1");
	//alert("country id:" + document.getElementById("country_work").value);
	var con_id = document.getElementById("country_work_1").value;
	$.ajax({
		type:"post",
		data:"con_id="+con_id, 
		url:"user_data.php?call=state_leva",
		success:function(msg){     
			//alert(msg);
			var msga = msg.split("~");
			$(".state_work").html(msga[0]);     
			//alert(msga[1]);
			var state_id = document.getElementById("state_id").value;
			$('.state_work').value = state_id;   
			//alert(cont_phon);
		}
	});
}
	
function city_nm(){
	var stat_no = document.getElementById("state").value;
	//alert(stat_no);
	$.ajax({
		type:"post",
		data:"stat_no="+stat_no, 
		url:"user_data.php?call=city_leva",
		success:function(msg){
			//alert(msg);
			$("#city").html(msg);
			var city_id = document.getElementById("city_id").value;
			$('#city').value = city_id;
		}
	});
}

function city_name(){
	var stat_no = document.getElementById("state_work_1").value;
	//alert(stat_no);
	$.ajax({
		type:"post",
		data:"stat_no="+stat_no, 
		url:"user_data.php?call=city_leva",
		success:function(msg){
			//alert(msg);
			$(".city_work").html(msg);
		}
	});
}

function adm_city(){
	var stat_no = document.getElementById("ad_state").value;
	//alert(stat_no);
	$.ajax({
		type:"post",
		data:"stat_no="+stat_no, 
		url:"user_data.php?call=city_leva",
		success:function(msg){
			//alert(msg);
			$("#ad_city").html(msg);
		}
	});
}


function ngo_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=ngo_nm",
		success:function(msg){
			//alert(msg);
			$("#sel_ngo").html(msg);
			$("#ng_nm").html(msg);
			$("#ngo_list").html(msg);
		}
	});
}


function vol_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=vol_nm",
		success:function(msg){
			//alert(msg);
			$("#sel_vol").html(msg);
			$("#vl_nm").html(msg);
			$("#vol_list").html(msg);
		}
	});
}

function schl_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=schl_nm",
		success:function(msg){
			//alert(msg);
			$("#sel_schl").html(msg);
		}
	});
}



function schl_name1(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=schl_nm1",
		success:function(msg){
			//alert(msg);
			$("#sclnm").html(msg);
			$("#schl_list").html(msg);
		}
	});
}

function stud_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=stud_nm",
		success:function(msg){
			//alert(msg);
			$("#sel_stud").html(msg);
		}
	});
}


function class_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=class_nm",
		success:function(msg){
			//alert(msg);
			$("#sel_class").html(msg);
		}
	});
}

function medium_name(){
	//alert("1");
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=medium_nm",
		success:function(msg){
			//alert(msg);
			$("#stud_medium").html(msg);
		}
	});
}

function board_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"data.php?call=board_nm",
		success:function(msg){
			//alert(msg);
			$("#stud_board").html(msg);
		}
	});
}

function product_name(){
	//alert("1");
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=product_nm",
		success:function(msg){
			//alert(msg);
			$("#product").html(msg);
		}
	});
}

function maha_cities(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=maha_city_leva",
		success:function(msg){
			//alert(msg);
			$("#city").html(msg);
			$("#ad_city").html(msg);
			$("#city_work_1").html(msg);
			$("#state_city_1").html(msg);
		}
	});
}

function langauge_spk(){
	var lang = document.getElementById('language').value;
	//alert(lang);
	$.ajax({
		type:"post",
		data:"lang="+lang, 
		url:"user_data.php?call=language",
		success:function(msg){
			//alert(msg);
			$("#langauages1").html(msg);
			var spl = lang.split(",");
			for(var i = 0 ;i < spl.length ; i++){
				var id = 'language_'+ spl[i];
				document.getElementById(id).checked = true;
			}
		}
	});
}

function langauge_spk1(){
	var lang = document.getElementById('language1').value;
	$.ajax({
		type:"post",
		data:"lang="+lang, 
		url:"user_data.php?call=language",
		success:function(msg){
			//alert(msg);
			$("#langauages1").html(msg);
			var spl = lang.split(",");
			for(var i = 0 ;i < spl.length ; i++){
				var id = 'language_'+ spl[i];
				document.getElementById(id).checked = true;
			}
		}
	});
}

function langauge_spk(){
	var lang = document.getElementById('language').value;
	//alert(lang);
	$.ajax({
		type:"post",
		data:"lang="+lang, 
		url:"user_data.php?call=language",
		success:function(msg){
			//alert(msg);
			$("#langauages").html(msg);
			var spl = lang.split(",");
			for(var i = 0 ;i < spl.length ; i++){
				var id = 'language_'+ spl[i];
				document.getElementById(id).checked = true;
			}
		}
	});
}

function valid_ngo(){  
		
	if(document.getElementById("ngo_name").value == ""){
		alert("Enter Name Of NGO");return false;
	}else if(document.getElementById("add1").value == ""){
		alert("Enter NGO Address1");return false;
	}else if(document.getElementById("add2").value == ""){
		alert("Enter NGO Address2");return false;
	}else if(document.getElementById("soc_nm").value == ""){
		alert("Enter NGO Society Name");return false;
	}else if(document.getElementById("build_no").value == ""){
		alert("Enter NGO Building No");return false;
	}else if(document.getElementById("floor").value == ""){
		alert("Enter NGO Floor");return false;
	}else if(document.getElementById("unit").value == ""){
		alert("Enter NGO Unit");return false;
	}else if(document.getElementById("ref_add").value == ""){
		alert("Enter NGO Refrence Address");return false;
	}else if(document.getElementById("village").value == ""){
		alert("Enter NGO Village");return false;
	}else if(document.getElementById("taluka").value == ""){
		alert("Enter NGO Taluka");return false;
	}else if(document.getElementById("country").value == ""){
		alert("Enter NGO Country");return false;
	}else if(document.getElementById("state").value == ""){
		alert("Enter NGO State");return false;
	}else if(document.getElementById("city").value == ""){
		alert("Enter NGO City");return false;
	}else if(document.getElementById("zip_code").value == ""){
		alert("Enter NGO Zip-Code");return false;
	}else if(document.getElementById("ngo_mob_no").value == ""){
		alert("Enter NGO Mobile Country Code");return false;
	}else if(document.getElementById("ngo_m_no").value == ""){
		alert("Enter NGO Mobile No");return false;
	}else if(document.getElementById("tel_c_no").value == ""){
		alert("Enter NGO Telephone Country Code");return false;
	}else if(document.getElementById("tel_a_no").value == ""){
		alert("Enter NGO Telephone Area Code");return false;
	}else if(document.getElementById("tel_no").value == ""){
		alert("Enter NGO Telephone No");return false;
	}else if(document.getElementById("fax_c_no").value == ""){
		alert("Enter NGO Fax Country Code");return false;
	}else if(document.getElementById("fax_a_no").value == ""){
		alert("Enter NGO Fax Area Code");return false;
	}else if(document.getElementById("fax_no").value == ""){
		alert("Enter NGO Fax No");return false;
	}else if(document.getElementById("email").value == ""){
		alert("Enter NGO Email");return false;
	}else if(document.getElementById("reg_no").value == ""){
		alert("Enter NGO Registration No");return false;
	}else if(document.getElementById("reg_certi").value == ""){
		alert("Enter NGO Registration Doc");return false;
	}else if(document.getElementById("reg_no2").value == ""){
		alert("Enter NGO Tax Registration No2");return false;
	}else if(document.getElementById("reg_certi2").value == ""){
		alert("Enter NGO Registration Doc2");return false;
	}else if(document.getElementById("tax_no").value == ""){
		alert("Enter Pan Tax No");return false;
	}else if(document.getElementById("tax_certi").value == ""){
		alert("Enter Tax Doc");return false;
	}else if(document.getElementById("pan_no").value == ""){
		alert("Enter Pan No");return false;
	}else if(document.getElementById("pan_doc").value == ""){
		alert("Enter Pan Doc");return false;
	}else if(document.getElementById("ncra_no").value == ""){
		alert("Enter NCRA No");return false;
	}else if(document.getElementById("ncra_proof").value == ""){
		alert("Enter NCRA Proof");return false;
	}else if(document.getElementById("d_reg").value == ""){
		alert("Enter Registration Date");return false;
	}else if(document.getElementById("ngo_ref").checked == false || document.getElementById("vol_ref").checked == false || document.getElementById("no_ref").checked == false){
		alert("Checked Any Refrence Address");return false;
	}else if(document.getElementById("ngo_case1").checked == false || document.getElementById("ngo_case2").checked == false){
		alert("Checked NGO Police Case");return false;
	}else if(document.getElementById("add_proof").value == ""){
		alert("Enter Address Proof");return false;
	}else if(document.getElementById("bank_nm").value == ""){
		alert("Enter Bank Name");return false;
	}else if(document.getElementById("acc_no").value == ""){
		alert("Enter Account No");return false;
	}else if(document.getElementById("acc_nm").value == ""){
		alert("Enter Account Holder Name");return false;
	}else if(document.getElementById("ifsc_no").value == ""){
		alert("Enter IFSC Code");return false;
	}else if(document.getElementById("brnch_nm").value == ""){
		alert("Enter Branch Name");return false;
	}else if(document.getElementById("bank_proof").value == ""){
		alert("Enter Bank Proof");return false;
	}else if(document.getElementById("admin_fnm").value == ""){
		alert("Enter Admin First Name");return false;
	}else if(document.getElementById("admin_mnm").value == ""){
		alert("Enter Admin Middle Name");return false;
	}else if(document.getElementById("admin_snm").value == ""){
		alert("Enter Admin Surname");return false;
	}else if(document.getElementById("admin_email").value == ""){
		alert("Enter Admin Emailid");return false;
	}else if(document.getElementById("admin_dob").value == ""){
		alert("Enter Admin Date Of Birth");return false;
	}else if(document.getElementById("admin_gender").value == ""){
		alert("Enter Admin Gender");return false;
	}else if(document.getElementById("mob_no").value == ""){
		alert("Enter Admin Mobile No");return false;
	}else if(document.getElementById("admin_pic").value == ""){
		alert("Enter Admin Profile Pic");return false;
	}else if(document.getElementById("admin_add1").value == ""){
		alert("Enter Admin Address1");return false;
	}else if(document.getElementById("admin_add2").value == ""){
		alert("Enter Admin Address2");return false;
	}else if(document.getElementById("ad_country").value == ""){
		alert("Enter Admin Country");return false;
	}else if(document.getElementById("ad_state").value == ""){
		alert("Enter Admin State");return false;
	}else if(document.getElementById("ad_city").value == ""){
		alert("Enter Admin City");return false;
	}else if(document.getElementById("admin_zip_code").value == ""){
		alert("Enter Admin Pin Code");return false;
	}else if(document.getElementById("admin_adhar_no").value == ""){
		alert("Enter Admin Aadhar card No");return false;
	}else if(document.getElementById("admin_adhar_doc").value == ""){
		alert("Enter Admin Aadhar card Doc");return false;
	}else if(document.getElementById("ad_why").value == ""){
		alert("Enter Why u want to b part of it");return false;
	}else{
		var atpos = document.getElementById("email").value.indexOf("@");
		var dotpos = document.getElementById("email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("email").value.length) {
			alert("Not a valid e-mail address");
			return false;
		}else {
			return true;
		}
		var atpos = document.getElementById("admin_email").value.indexOf("@");
		var dotpos = document.getElementById("admin_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("admin_email").value.length) {
			alert("Not a valid e-mail address");
			return false;
		}else {
			return true;
		}
	}
}

function valid_student(){  
	//alert("call");
	
	if(document.getElementById("stud_fname").value == ""){
		alert("Enter Student First Name");return false;
	}else if(document.getElementById("stud_mname").value == ""){
		alert("Enter Student Middle Name");return false;
	}else if(document.getElementById("stud_lname").value == ""){
		alert("Enter Student Last Name");return false;
	}/*else if(document.getElementById("bld_grp").value == ""){
		alert("Enter Student Blood Group");return false;
	}*/else if(document.getElementById("stud_gender").value == ""){
		alert("Enter Student Gender");return false;
	}else if(document.getElementById("stud_add1").value == ""){
		alert("Enter Student Address1");return false;
	}else if(document.getElementById("stud_village").value == ""){
		alert("Enter Student Village");return false;
	}else if(document.getElementById("stud_taluka").value == ""){
		alert("Enter Student District");return false;
	}else if(document.getElementById("country").value == ""){
		alert("Enter Student Country");return false;
	}else if(document.getElementById("state").value == ""){
		alert("Enter Student Stste");return false;
	}else if(document.getElementById("city").value == ""){
		alert("Enter Student City");return false;
	}else if(document.getElementById("stud_zip_code").value == ""){
		alert("Enter Student Zip Code");return false;
	}else if(document.getElementById("stud_dob").value == ""){
		alert("Enter Student Date Of Birth");return false;
	}
	/*else if(document.getElementById("stud_add2").value == ""){
		alert("Enter Student Address2");return false;
	}else if(document.getElementById("stud_soc_nm").value == ""){
		alert("Enter Student Society Name");return false;
	}else if(document.getElementById("stud_build_no").value == ""){
		alert("Enter Student Building No");return false;
	}else if(document.getElementById("stud_floor").value == ""){
		alert("Enter Student Floor");return false;
	}else if(document.getElementById("stud_unit").value == ""){
		alert("Enter Student Unit");return false;
	}else if(document.getElementById("stud_ref_add").value == ""){
		alert("Enter Student Other Address Refrence");return false;
	}else if(document.getElementById("ngo_mob_no").value == ""){
		alert("Enter Student Mobile No");return false;
	}else if(document.getElementById("stud_co_no").value == ""){
		alert("Enter Student Contact No");return false;
	}else if(document.getElementById("tel_c_no").value == ""){
		alert("Enter Student Telephone Country Code");return false;
	}else if(document.getElementById("stud_a_tel_no").value == ""){
		alert("Enter Student Telephone Area Code");return false;
	}else if(document.getElementById("stud_tel_no").value == ""){
		alert("Enter Student Telephone No");return false;
	}else if(document.getElementById("fax_c_no").value == ""){
		alert("Enter Student Fax Country Code");return false;
	}else if(document.getElementById("stud_a_fax_no").value == ""){
		alert("Enter Student Fax Area Code");return false;
	}else if(document.getElementById("stud_fax_no").value == ""){
		alert("Enter Student Fax No");return false;
	}else if(document.getElementById("stud_email").value == ""){
		alert("Enter Student Email");return false;
	}else if(document.getElementById("country_work_1").value == ""){
		alert("Enter Student Birth Country");return false;
	}else if(document.getElementById("state_work_1").value == ""){
		alert("Enter Student Birth State");return false;
	}else if(document.getElementById("state_city_1").value == ""){
		alert("Enter Student Birth City");return false;
	}else if(document.getElementById("stud_vill").value == ""){
		alert("Enter Student Birth Village");return false;
	}else if(document.getElementById("stud_dist").value == ""){
		alert("Enter Student Birth District");return false;
	}else if(document.getElementById("stud_lang").value == ""){
		alert("Enter Student Spoken Language");return false;
	}else if(document.getElementById("stud_adhar_no").value == ""){
		alert("Enter Student Aadhar No.");return false;
	}else if(document.getElementById("stud_adhar").value == ""){
		alert("Enter Student Aadhar Card Doc");return false;
	}else if(document.getElementById("stud_pan_no").value == ""){
		alert("Enter Student Pan No.");return false;
	}else if(document.getElementById("stud_pan_doc").value == ""){
		alert("Enter Student Pan Card Doc");return false;
	}else if(document.getElementById("fath_fnm").value == ""){
		alert("Enter Student Father First Name");return false;
	}else if(document.getElementById("fath_mnm").value == ""){
		alert("Enter Student Father Middle Name");return false;
	}else if(document.getElementById("fath_snm").value == ""){
		alert("Enter Student Father Last Name");return false;
	}else if(document.getElementById("fath_dob").value == ""){
		alert("Enter Student Father Date Of Birth");return false;
	}else if(document.getElementById("fath_email").value == ""){
		alert("Enter Student Father Emailid");return false;
	}else if(document.getElementById("fath_educ").value == ""){
		alert("Enter Student Father Education");return false;
	}else if(document.getElementById("fath_prof").value == ""){
		alert("Enter Student Father Profession");return false;
	}else if(document.getElementById("moth_fnm").value == ""){
		alert("Enter Student Mother First Name");return false;
	}else if(document.getElementById("moth_mnm").value == ""){
		alert("Enter Student Mother Middle Name");return false;
	}else if(document.getElementById("moth_snm").value == ""){
		alert("Enter Student Mother Last Name");return false;
	}else if(document.getElementById("moth_mno").value == ""){
		alert("Enter Student Mother Mobile No");return false;
	}else if(document.getElementById("moth_dob").value == ""){
		alert("Enter Student Mother Date Of Birth");return false;
	}else if(document.getElementById("moth_email").value == ""){
		alert("Enter Student Mother Emailid");return false;
	}else if(document.getElementById("moth_educ").value == ""){
		alert("Enter Student Mother Education");return false;
	}else if(document.getElementById("moth_prof").value == ""){
		alert("Enter Student Mother Profession");return false;
	}else if(document.getElementById("bro_fnm").value == ""){
		alert("Enter Student Brother First Name");return false;
	}else if(document.getElementById("bro_age").value == ""){
		alert("Enter Student Brother Age");return false;
	}else if(document.getElementById("sis_fnm").value == ""){
		alert("Enter Student Sister First Name");return false;
	}else if(document.getElementById("sis_age").value == ""){
		alert("Enter Student Sister Age");return false;
	}else if(document.getElementById("an_income").value == ""){
		alert("Enter Student Yearly Income");return false;
	}else if(document.getElementById("spec_need").value == ""){
		alert("Enter Student Special Need Require");return false;
	}else if(document.getElementById("stud_schl_id").value == ""){
		alert("Enter Student School Id");return false;
	}
	else if(document.getElementById("stud_id_doc").value == "" && document.getElementById("schlid_takepic").value == ""){
		alert("Upload / Take photo for school id");return false;
	}*/
	else if(document.getElementById("ngo_ref").checked == false && document.getElementById("vol_ref").checked == false){
		alert("Select Any reference");
	}else if(document.getElementById("stud_pic").value == "" && document.getElementById("profile_takepic").value == ""){
		alert("Upload or take photo for profile");return false;
	}else if(document.getElementById("sel_schl").value == ""){
		alert("Enter Student School Name");return false;
	}else if(document.getElementById("schl_add").value == ""){
		alert("Enter School Address");return false;
	}else if(document.getElementById("sel_class").value == ""){
		alert("Enter Student Division");return false;
	}else if(document.getElementById("stud_board").value == ""){
		alert("Enter Student Education Board");return false;
	}else if(document.getElementById("stud_medium").value == ""){
		alert("Enter School Midim");return false;
	}else{	
		var atpos = document.getElementById("stud_email").value.indexOf("@");
		var dotpos = document.getElementById("stud_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("stud_email").value.length) {
			alert("Not a valid student e-mail address");
			return false;
		}else {
			return true;
		}
		var atpos = document.getElementById("fath_email").value.indexOf("@");
		var dotpos = document.getElementById("fath_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("fath_email").value.length) {
			alert("Not a valid father e-mail address");
			return false;
		}else {
			return true;
		}
		var atpos = document.getElementById("moth_email").value.indexOf("@");
		var dotpos = document.getElementById("moth_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("moth_email").value.length) {
			alert("Not a valid mother e-mail address");
			return false;
		}else {
			return true;
		}
	}
}

function valid_volunteer(){  
	//alert("call");
	
	if(document.getElementById("vo_fname").value == ""){
		alert("Enter Volunteer First Name");return false;
	}else if(document.getElementById("vo_mname").value == ""){
		alert("Enter Volunteer Middle Name");return false;
	}else if(document.getElementById("vo_lname").value == ""){
		alert("Enter Volunteer Last Name");return false;
	}else if(document.getElementById("vo_gender").value == ""){
		alert("Enter Volunteer Gender");return false;
	}else if(document.getElementById("vol_grp").value == ""){
		alert("Enter Volunteer Blood Group");return false;
	}else if(document.getElementById("vo_add1").value == ""){
		alert("Enter Volunteer Address1");return false;
	}else if(document.getElementById("vo_add2").value == ""){
		alert("Enter Volunteer Address1");return false;
	}else if(document.getElementById("vol_soc_nm").value == ""){
		alert("Enter Volunteer Society Name");return false;
	}else if(document.getElementById("vol_build_no").value == ""){
		alert("Enter Volunteer Building No");return false;
	}else if(document.getElementById("vol_floor").value == ""){
		alert("Enter Volunteer Floor");return false;
	}else if(document.getElementById("vol_unit").value == ""){
		alert("Enter Volunteer Unit");return false;
	}else if(document.getElementById("vol_ref_add").value == ""){
		alert("Enter Volunteer Other Refrence");return false;
	}else if(document.getElementById("vol_village").value == ""){
		alert("Enter Volunteer Village");return false;
	}else if(document.getElementById("vol_taluka").value == ""){
		alert("Enter Volunteer District");return false;
	}else if(document.getElementById("country").value == ""){
		alert("Enter Volunteer Country");return false;
	}else if(document.getElementById("state").value == ""){
		alert("Enter Volunteer State");return false;
	}else if(document.getElementById("city").value == ""){
		alert("Enter Volunteer City");return false;
	}else if(document.getElementById("vo_zip_code").value == ""){
		alert("Enter Volunteer Zip Code");return false;
	}else if(document.getElementById("ngo_mob_no").value == ""){
		alert("Enter Volunteer Contact Country Code");return false;
	}else if(document.getElementById("co_no").value == ""){
		alert("Enter Volunteer Contact No");return false;
	}else if(document.getElementById("tel_c_no").value == ""){
		alert("Enter Volunteer Telephone Country Code");return false;
	}else if(document.getElementById("vol_a_tel_no").value == ""){
		alert("Enter Volunteer Telephone Area Code");return false;
	}else if(document.getElementById("vol_tel_no").value == ""){
		alert("Enter Volunteer Telephone No");return false;
	}else if(document.getElementById("fax_c_no").value == ""){
		alert("Enter Volunteer Fax Country Code");return false;
	}else if(document.getElementById("vol_a_fax_no").value == ""){
		alert("Enter Volunteer Fax Area Code");return false;
	}else if(document.getElementById("vol_fax_no").value == ""){
		alert("Enter Volunteer Fax No");return false;
	}else if(document.getElementById("vo_email").value == ""){
		alert("Enter Volunteer Email Id");return false;
	}else if(document.getElementById("vo_dob").value == ""){
		alert("Enter Volunteer Date Of Birth");return false;
	}else if(document.getElementById("vo_pic").value == ""){
		alert("Upload Volunteer Photo");return false;
	}else if(document.getElementById("vo_adha_no").value == ""){
		alert("Enter Volunteer Aadhar Card No");return false;
	}else if(document.getElementById("adhar_doc").value == ""){
		alert("Upload Volunteer Aadhar Card Doc");return false;
	}else if(document.getElementById("vo_pan_no").value == ""){
		alert("Enter Volunteer Pan Card No");return false;
	}else if(document.getElementById("pan_doc").value == ""){
		alert("Upload Volunteer Pan Card Doc");return false;
	}else if(document.getElementById("educ").value == ""){
		alert("Upload Volunteer Education");return false;
	}else if(document.getElementById("edu_doc").value == ""){
		alert("Upload Volunteer Education Doc");return false;
	}else if(document.getElementById("vol_prof").value == ""){
		alert("Upload Volunteer Profession");return false;
	}else if(document.getElementById("vol_lang").value == ""){
		alert("Upload Volunteer Language");return false;
	}else if(document.getElementById("vol_ngo_ys").checked == false || document.getElementById("vol_ngo_no").checked == false){
		alert("Checked Any Connected NGO Name");return false;
	}else if(document.getElementById("vo_work").value == ""){
		alert("Enter Prefferd Area Of Work");return false;
	}else if(document.getElementById("vo_us").value == ""){
		alert("Enter How To Found Volunteer");return false;
	}else if(document.getElementById("vo_exp").value == ""){
		alert("Enter Volunteer Experiance");return false;
	}else if(document.getElementById("wrk_us").value == ""){
		alert("Enter Why Work With Us");return false;
	}else if(document.getElementById("travel_area").value == ""){
		alert("Enter Willing Travel Area");return false;
	}else{
		var atpos = document.getElementById("vo_email").value.indexOf("@");
		var dotpos = document.getElementById("vo_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("vo_email").value.length) {
			alert("Not a valid volunteer e-mail address");
			return false;
		}else {
			return true;
		}
	}
}

function valid_school(){  
	//alert("call");
	
	if(document.getElementById("scl_name").value == ""){
		alert("Enter Name Of School");return false;
	}else if(document.getElementById("scl_add1").value == ""){
		alert("Enter School Address1");return false;
	}else if(document.getElementById("scl_add2").value == ""){
		alert("Enter School Address2");return false;
	}else if(document.getElementById("scl_soc_nm").value == ""){
		alert("Enter School Society Name");return false;
	}else if(document.getElementById("scl_build_no").value == ""){
		alert("Enter School Building No");return false;
	}else if(document.getElementById("scl_floor").value == ""){
		alert("Enter School Floor");return false;
	}else if(document.getElementById("scl_unit").value == ""){
		alert("Enter School Unit");return false;
	}else if(document.getElementById("scl_ref_add").value == ""){
		alert("Enter School Refrence Address");return false;
	}else if(document.getElementById("scl_village").value == ""){
		alert("Enter School Village");return false;
	}else if(document.getElementById("scl_taluka").value == ""){
		alert("Enter School Taluka");return false;
	}else if(document.getElementById("country").value == ""){
		alert("Enter School Country");return false;
	}else if(document.getElementById("state").value == ""){
		alert("Enter School State");return false;
	}else if(document.getElementById("city").value == ""){
		alert("Enter School City");return false;
	}else if(document.getElementById("scl_zip_code").value == ""){
		alert("Enter School Zip-Code");return false;
	}else if(document.getElementById("fax_c_no").value == ""){
		alert("Enter School Fax Country Code");return false;
	}else if(document.getElementById("scl_a_fax_no").value == ""){
		alert("Enter School Fax Area Code");return false;
	}else if(document.getElementById("scl_fax_no").value == ""){
		alert("Enter School Fax No");return false;
	}else if(document.getElementById("tel_c_no").value == ""){
		alert("Enter School Telephone Country Code");return false;
	}else if(document.getElementById("scl_a_tel_no").value == ""){
		alert("Enter School Telephone Area Code");return false;
	}else if(document.getElementById("scl_tel_no").value == ""){
		alert("Enter School Telephone No");return false;
	}else if(document.getElementById("scl_email").value == ""){
		alert("Enter School Email");return false;
	}else if(document.getElementById("ngo_mob_no").value == ""){
		alert("Enter School Mobile Country Code");return false;
	}else if(document.getElementById("scl_mo_no").value == ""){
		alert("Enter School Mobile No");return false;
	}else if(document.getElementById("scl_reg_no").value == ""){
		alert("Enter School Registration No");return false;
	}else if(document.getElementById("scl_reg_doc").value == ""){
		alert("Upload School Registration Document");return false;
	}else if(document.getElementById("scl_reg_no2").value == ""){
		alert("Enter School Registration No2");return false;
	}else if(document.getElementById("scl_reg_doc2").value == ""){
		alert("Upload School Registration Doc2");return false;
	}else if(document.getElementById("scl_tax_no").value == ""){
		alert("Enter Tax Examption No");return false;
	}else if(document.getElementById("scl_tax_doc").value == ""){
		alert("Upload Tax Examption Document");return false;
	}else if(document.getElementById("scl_pan_no").value == ""){
		alert("Enter Pan Card No");return false;
	}else if(document.getElementById("scl_pan_doc").value == ""){
		alert("Upload Pan Card");return false;
	}else if(document.getElementById("scl_add_proof").value == ""){
		alert("Enter Address Proof Doc");return false;
	}else if(document.getElementById("scl_pics").value == ""){
		alert("Upload School Profile Pic");return false;
	}else if(document.getElementById("no_staff").value == ""){
		alert("Enter School No Of Staff");return false;
	}else if(document.getElementById("no_stud").value == ""){
		alert("Enter School No Of Student");return false;
	}else if(document.getElementById("scl_ngo_nm").value == ""){
		alert("Enter School NGO Name");return false;
	}else if(document.getElementById("scl_vol_nm").value == ""){
		alert("Enter School Volunteer Name");return false;
	}else if(document.getElementById("supp_gov_ys").checked == false || document.getElementById("supp_gov_no").checked == false){
		alert("Checked Goverment Support");return false;
	}else if(document.getElementById("supp_ys").checked == false || document.getElementById("supp_no").checked == false){
		alert("Checked Any Connected NGO Name");return false;
	}else if(document.getElementById("scl_acc_no").value == ""){
		alert("Enter School Account No");return false;
	}else if(document.getElementById("scl_acc_nm").value == ""){
		alert("Enter Account Holder Name");return false;
	}else if(document.getElementById("scl_bank_nm").value == ""){
		alert("Enter Bank Name");return false;
	}else if(document.getElementById("scl_ifsc_no").value == ""){
		alert("Enter IFSC No");return false;
	}else if(document.getElementById("scl_brnch_nm").value == ""){
		alert("Enter Branch Name");return false;
	}else if(document.getElementById("scl_bank_proof").value == ""){  
		alert("Upload Bannk Proof");return false;
	}else if(document.getElementById("admin_fnm").value == ""){
		alert("Enter Admin First Name");return false;
	}else if(document.getElementById("admin_mnm").value == ""){
		alert("Enter Admin Middle Name");return false;
	}else if(document.getElementById("admin_snm").value == ""){
		alert("Enter Admin Last Name");return false;
	}else if(document.getElementById("mob_no").value == ""){
		alert("Enter Admin Mobile No");return false;
	}else if(document.getElementById("admin_email").value == ""){
		alert("Enter Admin Emailid");return false;
	}else if(document.getElementById("admin_pic").value == ""){
		alert("Enter Admin Profile Pic");return false;
	}else if(document.getElementById("admin_adhar_no").value == ""){
		alert("Enter Admin Aadhar card No");return false;
	}else if(document.getElementById("admin_adhar_doc").value == ""){
		alert("Enter Admin Aadhar card Doc");return false;
	}else if(document.getElementById("ad_why").value == ""){
		alert("Enter Why u want to b part of it");return false;
	}else{
		var atpos = document.getElementById("scl_email").value.indexOf("@");
		var dotpos = document.getElementById("scl_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("scl_email").value.length) {
			alert("Not a valid school e-mail address");
			return false;
		}else {
			return true;
		}
		var atpos = document.getElementById("admin_email").value.indexOf("@");
		var dotpos = document.getElementById("admin_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("admin_email").value.length) {
			alert("Not a valid admin e-mail address");
			return false;
		}else {
			return true;
		}
	}
}

function valid_donor(){  
if(document.getElementById("type").value == "p_donor"){
	if(document.getElementById("don_fname").value == ""){
		alert("Enter Donor First Name");return false;
	}else if(document.getElementById("don_mname").value == ""){
		alert("Enter Donor Middle Name");return false;
	}else if(document.getElementById("don_lname").value == ""){
		alert("Enter Donor Last Name");return false;
	}else if(document.getElementById("don_bld_grp").value == ""){
		alert("Enter Donor Date Bllod Group");return false;
	}else if(document.getElementById("don_gender").value == ""){
		alert("Enter Donor Gender");return false;
	}else if(document.getElementById("don_add1").value == ""){
		alert("Enter Donor Address1");return false;
	}else if(document.getElementById("don_add2").value == ""){
		alert("Enter Donor Address2");return false;
	}else if(document.getElementById("don_soc_nm").value == ""){
		alert("Upload Donor Society Name");return false;
	}else if(document.getElementById("don_build_no").value == ""){
		alert("Enter Donor Buildig No");return false;
	}else if(document.getElementById("don_floor").value == ""){
		alert("Enter Donor Floor");return false;
	}else if(document.getElementById("don_unit").value == ""){
		alert("Enter Donor Unit");return false;
	}else if(document.getElementById("don_ref_add").value == ""){
		alert("Enter Donor Refrence Address");return false;
	}else if(document.getElementById("don_village").value == ""){
		alert("Enter Donor Village");return false;
	}else if(document.getElementById("don_taluka").value == ""){
		alert("Enter Donor Disrtict");return false;
	}else if(document.getElementById("country").value == ""){
		alert("Enter Donor Country");return false;
	}else if(document.getElementById("state").value == ""){
		alert("Enter Donor State");return false;
	}else if(document.getElementById("city").value == ""){
		alert("Enter Donor City");return false;
	}else if(document.getElementById("don_zip_code").value == ""){
		alert("Enter Donor Zip Code");return false;
	}else if(document.getElementById("ngo_mob_no").value == ""){
		alert("Enter Donor Mobile Country Code");return false;
	}else if(document.getElementById("don_co_no").value == ""){
		alert("Enter Donor Mobile No");return false;
	}else if(document.getElementById("tel_c_no").value == ""){
		alert("Enter Donor Telephone Country Code");return false;
	}else if(document.getElementById("don_a_tel_no").value == ""){
		alert("Enter Donor Telephone Area Code");return false;
	}else if(document.getElementById("don_tel_no").value == ""){
		alert("Enter Donor Telephone No");return false;
	}else if(document.getElementById("don_c_fax_no").value == ""){
		alert("Enter Donor Fax Country Code");return false;
	}else if(document.getElementById("don_a_fax_no").value == ""){
		alert("Enter Donor Fax Area Code");return false;
	}else if(document.getElementById("don_fax_no").value == ""){
		alert("Enter Donor Fax No");return false;
	}else if(document.getElementById("don_email").value == ""){
		alert("Enter Donor Emailid");return false;
	}else if(document.getElementById("don_dob").value == ""){
		alert("Enter Donor Date Of Birth");return false;
	}else if(document.getElementById("don_vill").value == ""){
		alert("Enter Donor Bith Village");return false;
	}else if(document.getElementById("don_dist").value == ""){
		alert("Enter Donor Birth District");return false;
	}else if(document.getElementById("country_work_1").value == ""){
		alert("Enter Donor Birth Country");return false;
	}else if(document.getElementById("state_work_1").value == ""){
		alert("Enter Donor Birth State");return false;
	}else if(document.getElementById("state_city_1").value == ""){
		alert("Enter Donor Birth City");return false;
	}else if(document.getElementById("don_lang").value == ""){
		alert("Enter Donor Language");return false;
	}else if(document.getElementById("don_adhar_no").value == ""){
		alert("Enter Donor Adhar Card No");return false;
	}else if(document.getElementById("don_adhar_doc").value == ""){
		alert("Enter Donor Adhar Card Doc");return false;
	}else if(document.getElementById("don_pan_no").value == ""){
		alert("Enter Donor Pan Card No");return false;
	}else if(document.getElementById("don_pan_doc").value == ""){
		alert("Enter Donor Pan Card Doc");return false;
	}else if(document.getElementById("don_pic").value == ""){
		alert("Enter Donor Profile pic");return false;
	}else{
		var atpos = document.getElementById("don_email").value.indexOf("@");
		var dotpos = document.getElementById("don_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("don_email").value.length) {
			alert("Not a valid personal donor e-mail address");
			return false;
		}else {
			return true;
		}
	}
}
else{
	if(document.getElementById("corp_name").value == ""){
		alert("Enter Donor Corporate Name");return false;
	}else if(document.getElementById("corp_add1").value == ""){
		alert("Enter Donor Corporate Address1");return false;
	}else if(document.getElementById("corp_add2").value == ""){
		alert("Enter Donor Corporate Address2");return false;
	}else if(document.getElementById("corp_soc_nm").value == ""){
		alert("Enter Donor Corporate Society Name");return false;
	}else if(document.getElementById("corp_build_no").value == ""){
		alert("Enter Donor Corporate Building No");return false;
	}else if(document.getElementById("corp_floor").value == ""){
		alert("Enter Donor Corporate Floor");return false;
	}else if(document.getElementById("corp_unit").value == ""){
		alert("Enter Donor Corporate Unit");return false;
	}else if(document.getElementById("corp_ref_add").value == ""){
		alert("Enter Donor Corporate Refrence Address");return false;
	}else if(document.getElementById("corp_village").value == ""){
		alert("Enter Donor Corporate Village");return false;
	}else if(document.getElementById("corp_taluka").value == ""){
		alert("Enter Donor Corporate District");return false;
	}else if(document.getElementById("ad_country").value == ""){
		alert("Enter Donor Corporate Country");return false;
	}else if(document.getElementById("ad_state").value == ""){
		alert("Enter Donor Corporate State");return false;
	}else if(document.getElementById("ad_city").value == ""){
		alert("Enter Donor Corporate City");return false;
	}else if(document.getElementById("corp_zip_code").value == ""){
		alert("Enter Donor Corporate Refrence Address");return false;
	}else if(document.getElementById("mob_no").value == ""){
		alert("Enter Donor Corporate Mobile Country Code");return false;
	}else if(document.getElementById("corp_co_no").value == ""){
		alert("Enter Donor Corporate Mobile No");return false;
	}else if(document.getElementById("corp_c_tel_no").value == ""){
		alert("Enter Donor Corporate Telephone Country Code");return false;
	}else if(document.getElementById("corp_a_tel_no").value == ""){
		alert("Enter Donor Corporate Telephone Area Code");return false;
	}else if(document.getElementById("corp_tel_no").value == ""){
		alert("Enter Donor Corporate Telephone No");return false;
	}else if(document.getElementById("corp_c_fax_no").value == ""){
		alert("Enter Donor Corporate Fax Country Code");return false;
	}else if(document.getElementById("corp_a_fax_no").value == ""){
		alert("Enter Donor Corporate Fax Area Code");return false;
	}else if(document.getElementById("corp_fax_no").value == ""){
		alert("Enter Donor Corporate Fax No");return false;
	}else if(document.getElementById("corp_email").value == ""){
		alert("Enter Donor Corporate Emailid");return false;
	}else if(document.getElementById("corp_reg_no").value == ""){
		alert("Enter Donor Corporate Registration No");return false;
	}else if(document.getElementById("corp_reg_doc").value == ""){
		alert("Enter Donor Corporate Registration Doc");return false;
	}else if(document.getElementById("corp_pan_no").value == ""){
		alert("Enter Donor Corporate Pan No");return false;
	}else if(document.getElementById("corp_pan_doc").value == ""){
		alert("Enter Donor Corporate Pan Doc");return false;
	}else if(document.getElementById("corp_pro").value == ""){
		alert("Enter Donor Corporate Profession");return false;
	}else if(document.getElementById("corp_pic").value == ""){
		alert("Enter Donor Corporate Profile Pic");return false;
	}else if(document.getElementById("corp_site").value == ""){
		alert("Enter Donor Corporate Website");return false;
	}else{
		var atpos = document.getElementById("corp_email").value.indexOf("@");
		var dotpos = document.getElementById("corp_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("corp_email").value.length) {
			alert("Not a valid Corporate donor e-mail address");
			return false;
		}else {
			return true;
		}
	}
}
}

function valid_vendor(){  
if(document.getElementById("type").value == "p_vendor"){
	if(document.getElementById("ven_fname").value == ""){
		alert("Enter Vendor First Name");return false;
	}else if(document.getElementById("ven_mname").value == ""){
		alert("Enter Vendor Middle Name");return false;
	}else if(document.getElementById("ven_lname").value == ""){
		alert("Enter Vendor Last Name");return false;
	}else if(document.getElementById("ven_bld_grp").value == ""){
		alert("Enter Vendor Date Bllod Group");return false;
	}else if(document.getElementById("ven_gender").value == ""){
		alert("Enter Vendor Gender");return false;
	}else if(document.getElementById("ven_add1").value == ""){
		alert("Enter Vendor Address1");return false;
	}else if(document.getElementById("ven_add2").value == ""){
		alert("Enter Vendor Address2");return false;
	}else if(document.getElementById("ven_soc_nm").value == ""){
		alert("Upload Vendor Society Name");return false;
	}else if(document.getElementById("ven_build_no").value == ""){
		alert("Enter Vendor Buildig No");return false;
	}else if(document.getElementById("ven_floor").value == ""){
		alert("Enter Vendor Floor");return false;
	}else if(document.getElementById("ven_unit").value == ""){
		alert("Enter Vendor Unit");return false;
	}else if(document.getElementById("ven_ref_add").value == ""){
		alert("Enter Vendor Refrence Address");return false;
	}else if(document.getElementById("ven_village").value == ""){
		alert("Enter Vendor Village");return false;
	}else if(document.getElementById("ven_taluka").value == ""){
		alert("Enter Vendor Disrtict");return false;
	}else if(document.getElementById("country").value == ""){
		alert("Enter Vendor Country");return false;
	}else if(document.getElementById("state").value == ""){
		alert("Enter Vendor State");return false;
	}else if(document.getElementById("city").value == ""){
		alert("Enter Vendor City");return false;
	}else if(document.getElementById("ven_zip_code").value == ""){
		alert("Enter Vendor Zip Code");return false;
	}else if(document.getElementById("ngo_mob_no").value == ""){
		alert("Enter Vendor Mobile Country Code");return false;
	}else if(document.getElementById("ven_co_no").value == ""){
		alert("Enter Vendor Mobile No");return false;
	}else if(document.getElementById("tel_c_no").value == ""){
		alert("Enter Vendor Telephone Country Code");return false;
	}else if(document.getElementById("ven_a_tel_no").value == ""){
		alert("Enter Vendor Telephone Area Code");return false;
	}else if(document.getElementById("ven_tel_no").value == ""){
		alert("Enter Vendor Telephone No");return false;
	}else if(document.getElementById("fax_c_no").value == ""){
		alert("Enter Vendor Fax Country Code");return false;
	}else if(document.getElementById("ven_a_fax_no").value == ""){
		alert("Enter Vendor Fax Area Code");return false;
	}else if(document.getElementById("ven_fax_no").value == ""){
		alert("Enter Vendor Fax No");return false;
	}else if(document.getElementById("ven_email").value == ""){
		alert("Enter Vendor Emailid");return false;
	}else if(document.getElementById("ven_dob").value == ""){
		alert("Enter Vendor Date Of Birth");return false;
	}else if(document.getElementById("ven_vill").value == ""){
		alert("Enter Vendor Bith Village");return false;
	}else if(document.getElementById("ven_dist").value == ""){
		alert("Enter Vendor Birth District");return false;
	}else if(document.getElementById("country_work_1").value == ""){
		alert("Enter Vendor Birth Country");return false;
	}else if(document.getElementById("state_work_1").value == ""){
		alert("Enter Vendor Birth State");return false;
	}else if(document.getElementById("state_city_1").value == ""){
		alert("Enter Vendor Birth City");return false;
	}else if(document.getElementById("ven_lang").value == ""){
		alert("Enter Vendor Language");return false;
	}else if(document.getElementById("ven_adhar_no").value == ""){
		alert("Enter Vendor Adhar Card No");return false;
	}else if(document.getElementById("ven_adhar_doc").value == ""){
		alert("Enter Vendor Adhar Card Doc");return false;
	}else if(document.getElementById("ven_pan_no").value == ""){
		alert("Enter Vendor Pan Card No");return false;
	}else if(document.getElementById("ven_pan_doc").value == ""){
		alert("Enter Vendor Pan Card Doc");return false;
	}else if(document.getElementById("ven_pic").value == ""){
		alert("Enter Vendor Profile pic");return false;
	}else{
		var atpos = document.getElementById("ven_email").value.indexOf("@");
		var dotpos = document.getElementById("ven_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("ven_email").value.length) {
			alert("Not a valid personal Vendor e-mail address");
			return false;
		}else {
			return true;
		}
	}
}
else{
	if(document.getElementById("corp_name").value == ""){
		alert("Enter Vendor Corporate Name");return false;
	}else if(document.getElementById("corp_add1").value == ""){
		alert("Enter Vendor Corporate Address1");return false;
	}else if(document.getElementById("corp_add2").value == ""){
		alert("Enter Vendor Corporate Address2");return false;
	}else if(document.getElementById("corp_soc_nm").value == ""){
		alert("Enter Vendor Corporate Society Name");return false;
	}else if(document.getElementById("corp_build_no").value == ""){
		alert("Enter Vendor Corporate Building No");return false;
	}else if(document.getElementById("corp_floor").value == ""){
		alert("Enter Vendor Corporate Floor");return false;
	}else if(document.getElementById("corp_unit").value == ""){
		alert("Enter Vendor Corporate Unit");return false;
	}else if(document.getElementById("corp_ref_add").value == ""){
		alert("Enter Vendor Corporate Refrence Address");return false;
	}else if(document.getElementById("corp_village").value == ""){
		alert("Enter Vendor Corporate Village");return false;
	}else if(document.getElementById("corp_taluka").value == ""){
		alert("Enter Vendor Corporate District");return false;
	}else if(document.getElementById("ad_country").value == ""){
		alert("Enter Vendor Corporate Country");return false;
	}else if(document.getElementById("ad_state").value == ""){
		alert("Enter Vendor Corporate State");return false;
	}else if(document.getElementById("ad_city").value == ""){
		alert("Enter Vendor Corporate City");return false;
	}else if(document.getElementById("corp_zip_code").value == ""){
		alert("Enter Vendor Corporate Refrence Address");return false;
	}else if(document.getElementById("mob_no").value == ""){
		alert("Enter Vendor Corporate Mobile Country Code");return false;
	}else if(document.getElementById("corp_co_no").value == ""){
		alert("Enter Vendor Corporate Mobile No");return false;
	}else if(document.getElementById("corp_c_tel_no").value == ""){
		alert("Enter Vendor Corporate Telephone Country Code");return false;
	}else if(document.getElementById("corp_a_tel_no").value == ""){
		alert("Enter Vendor Corporate Telephone Area Code");return false;
	}else if(document.getElementById("corp_tel_no").value == ""){
		alert("Enter Vendor Corporate Telephone No");return false;
	}else if(document.getElementById("corp_c_fax_no").value == ""){
		alert("Enter Vendor Corporate Fax Country Code");return false;
	}else if(document.getElementById("corp_a_fax_no").value == ""){
		alert("Enter Vendor Corporate Fax Area Code");return false;
	}else if(document.getElementById("corp_fax_no").value == ""){
		alert("Enter Vendor Corporate Fax No");return false;
	}else if(document.getElementById("corp_email").value == ""){
		alert("Enter Vendor Corporate Emailid");return false;
	}else if(document.getElementById("corp_reg_no").value == ""){
		alert("Enter Vendor Corporate Registration No");return false;
	}else if(document.getElementById("corp_reg_doc").value == ""){
		alert("Enter Vendor Corporate Registration Doc");return false;
	}else if(document.getElementById("corp_pan_no").value == ""){
		alert("Enter Vendor Corporate Pan No");return false;
	}else if(document.getElementById("corp_pan_doc").value == ""){
		alert("Enter Vendor Corporate Pan Doc");return false;
	}else if(document.getElementById("corp_pro").value == ""){
		alert("Enter Vendor Corporate Profession");return false;
	}else if(document.getElementById("corp_pic").value == ""){
		alert("Enter Vendor Corporate Profile Pic");return false;
	}else if(document.getElementById("corp_site").value == ""){
		alert("Enter Vendor Corporate Website");return false;
	}else{
		var atpos = document.getElementById("corp_email").value.indexOf("@");
		var dotpos = document.getElementById("corp_email").value.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.getElementById("corp_email").value.length) {
			alert("Not a valid Corporate vendor e-mail address");
			return false;
		}else {
			return true;
		}
	}
}
}