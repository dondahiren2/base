<?php
	require_once("../phpmailer/class.phpmailer.php");
	include("../config.php");
	   
	if(isset($_GET['call']) == "")
	{
	}
	else   
	{
		$call = $_GET['call'];
		if($call == "country_leva"){
			country_leva();
		}else if($call == "state_leva"){   
			state_leva();
		}else if($call == "state_edit"){    
			state_edit();
		}else if($call == "cities_leva"){    
			cities_leva();
		}else if($call == "db_city"){    
			db_city();
		}else if($call == "city_edit"){    
			city_edit();
		}else if($call == "ind_state_leva"){
			ind_state_leva();
		}else if($call == "city_leva"){
			city_leva();
		}else if($call == "maha_city_leva"){
			maha_city_leva();
		}else if($call == "ngo_nm"){  
			ngo_nm();
		}else if($call == "vol_nm"){  
			vol_nm();
		}else if($call == "schl_nm"){  
			schl_nm();
		}else if($call == "schl_nm1"){  
			schl_nm1();
		}else if($call == "stud_nm"){  
			stud_nm();
		}else if($call == "stud_nm_vol"){  
			stud_nm_vol();
		}else if($call == "stud_nm_scl"){  
			stud_nm_scl();
		}else if($call == "email_student") {
            email_student();
        }else if($call == "email_school") {
            email_school();
        }else if($call == "email_volun") {
            email_volun();
        }else if($call == "email_stud_vol") {
            email_stud_vol();
        }else if($call == "email_stud_scl") {
            email_stud_scl();
        }else if($call == "email_stud_scl1") {
            email_stud_scl1();
        }else if($call == "vol_nm1") {
            vol_nm1();
        }else if($call == "class_nm"){  
			class_nm();
		}else if($call == "medium_nm"){  
			medium_nm();
		}else if($call == "board_nm"){  
			board_nm();
		}else if($call == "language"){
			language();
		}else if($call == "scl_address"){
			scl_address();
		}else if($call == "edit_ngo"){
			edit_ngo();
		}else if($call == "trustee_list"){
			trustee_list();
		}else if($call == "trustee_delete"){  
			trustee_delete();
		}else if($call == "edit_trustee"){  
			edit_trustee();
		}else if($call == "int_area_list"){
			int_area_list();
		}else if($call == "edit_area"){
			edit_area();
		}else if($call == "area_delete"){    
			area_delete();
		}else if($call == "edit_volun"){    
			edit_volun();
		}else if($call == "sudent_list"){
			sudent_list();
		}else if($call == "school_list"){
			school_list();
		}else if($call == "edit_school"){    
			edit_school();
		}else if($call == "ngo_school_list"){    
			ngo_school_list();
		}else if($call == "ngo_sudent_list"){    
			ngo_sudent_list();
		}else if($call == "school_sudent_list"){    
			school_sudent_list();
		}else if($call == "ngo_volun_list"){    
			ngo_volun_list();
		}else if($call == "staff_list"){    
			staff_list();
		}else if($call == "edit_staff"){    
			edit_staff();
		}else if($call == "staff_delete"){    
			staff_delete();
		}else if($call == "edit_student"){    
			edit_student();
		}else if($call == "result_list"){    
			result_list();
		}else if($call == "edit_result"){    
			edit_result();
		}else if($call == "result_delete"){    
			result_delete();
		}else if($call == "pers_don_data"){    
			pers_don_data();
		}else if($call == "corp_don_data"){    
			corp_don_data();
		}else if($call == "edit_cdonor"){    
			edit_cdonor();
		}else if($call == "edit_pdonor"){    
			edit_pdonor();
		}else if($call == "corp_ven_data"){    
			corp_ven_data();
		}else if($call == "edit_cvendor"){    
			edit_cvendor();
		}else if($call == "pers_ven_data"){    
			pers_ven_data();
		}else if($call == "edit_pvendor"){    
			edit_pvendor();
		}else if($call == "product_list"){
			product_list();
		}else if($call == "add_quatation"){
			add_quatation();
		}else if($call == "sum_total"){
			sum_total();
		}else if($call == "update_is_admin"){    
			update_is_admin();
		}else if($call == "update_is_admin_schl"){    
			update_is_admin_schl();
		}else if($call == "ngo_list"){    
			ngo_list();
		}else if($call == "invite_ngo"){    
			invite_ngo();
		}else if($call == "project_list"){    
			project_list();
		}else if($call == "update_status"){    
			update_status();
		}else if($call == "schl_list"){    
			schl_list();
		}else if($call == "volun_list"){    
			volun_list();
		}else if($call == "proj_list"){    
			proj_list();
		}else if($call == "proj_list_scl"){    
			proj_list_scl();
		}else if($call == "invite_scl_vol"){    
			invite_scl_vol();
		}else if($call == "vol_project_list"){    
			vol_project_list();
		}else if($call == "update_vol_status"){    
			update_vol_status();
		}else if($call == "schl_project_list"){    
			schl_project_list();
		}else if($call == "update_schl_status"){    
			update_schl_status();
		}else if($call == "stud_list"){    
			stud_list();
		}else if($call == "invite_student"){    
			invite_student();
		}else if($call == "stud_project_list"){    
			stud_project_list();
		}else if($call == "requirement_list"){    
			requirement_list();
		}
	}
	
function country_leva(){
	global $con;
	$msg = '';
	$con_nm = $con->query("select id,name from countries");
	$ind = $con->query("select * from countries where name = 'India'");
		$row = mysqli_fetch_array($ind);
		$msg .= '<option value="'.$row['id'].'" id="ind_id">'.$row['name'].'</option>';
	while($r = mysqli_fetch_array($con_nm)){
		$msg .= '<option value="'.$r['id'].'" id="cont_id">'.$r['name'].'</option>';
	}
	echo $msg;
}

function cities_leva(){
	global $con;
	$msg = '';
	$citi_nm = $con->query("select id,name from cities");
	while($r = mysqli_fetch_array($citi_nm)){
		$msg .= '<option value="'.$r['id'].'" id="cit_id">'.$r['name'].'</option>';
	}
	echo $msg;
}

function db_city(){
	global $con;
	$citid = $_POST['citid'];
	$msg = '';
	$citi_nm = $con->query("select id,name from cities");
	while($r = mysqli_fetch_array($citi_nm)){
		if($r['id'] == $citid){
			$sellected = "selected";
		}else{
			$sellected = "";
		}
		$msg .= '<option value="'.$r['id'].'" id="cit_id" '.$sellected.'>'.$r['name'].'</option>';
	}
	echo $msg;
}

function state_leva(){  
	global $con;
	
	$cont_no = $_POST['con_id'];
	
	$msg = '';
	$stat_nm = $con->query("select id,name from states where country_id = $cont_no");
	while($row = mysqli_fetch_array($stat_nm)){
		$msg .= '<option value="'.$row["id"].'" id="state_id">'.$row["name"].'</option>';
	}
	$con_ph = $con->query("select id,name,phonecode from countries where id = $cont_no");
	$r = mysqli_fetch_array($con_ph);
	$msg .= '~' .$r['phonecode'];
	echo $msg;
}

function state_edit(){
	global $con;
	
	$cont_no = $_POST['con_no'];
	
	$msg = '';
	$con_nm = $con->query("select id from countries where name = '$cont_no'");
	$rid = mysqli_fetch_array($con_nm);
	$conid = $rid[0];
	$stat_nm = $con->query("select id,name from states where country_id = $conid");
	while($row = mysqli_fetch_array($stat_nm)){
		$msg .= '<option value="'.$row["id"].'" id="state_id">'.$row["name"].'</option>';
	}
	$msg .= '~' .$rid[0];
	echo $msg;
}

function city_edit(){
	global $con;
	
	$st_no = $_POST['city_no'];
	
	$msg = '';
	$st_nm = $con->query("select id from states where name = '$st_no'");
	$stid = mysqli_fetch_array($st_nm);
	$stid = $stid[0];
	$stat_nm = $con->query("select id,name from cities where state_id = $stid");
	while($row = mysqli_fetch_array($stat_nm)){
		$msg .= '<option value="'.$row["id"].'" id="city_id">'.$row["name"].'</option>';
	}
	echo $msg;
}

function ind_state_leva(){
	global $con;
		$msg = '';
		$con_nm = $con->query("select id,name from states where country_id = '101'");
		while($r = mysqli_fetch_array($con_nm)){
			if($r["name"] == "Maharashtra"){
				$sellected = "selected";
			}else{
				$sellected = "";
			}
			$msg .= '<option value="'.$r["id"].'" id="state_id" '.$sellected.'>'.$r["name"].'</option>';
		}
		$c_ph = $con->query("select phonecode,id,name from countries where id = 101");
		$r1 = mysqli_fetch_array($c_ph);
		$msg .= '~' .$r1['phonecode'];
		echo $msg;
}

function city_leva(){
	global $con;
	
	$stat_no = $_POST['stat_no'];
	
	$msg = '';
	$stat_nm = $con->query("select id,name from cities where state_id = $stat_no");
	while($row = mysqli_fetch_array($stat_nm)){
		$msg .= '<option value="'.$row['id'].'" id="city_id">'.$row['name'].'</option>';
	}
	echo $msg;
}

function maha_city_leva(){
	global $con;
	
	$msg = '';
	$stat_nm = $con->query("SELECT id,name FROM `cities` WHERE state_id = 22");
	while($row = mysqli_fetch_array($stat_nm)){
		$msg .= '<option value="'.$row['id'].'" id="city_id">'.$row['name'].'</option>';
	}
	echo $msg;
}

function ngo_nm(){
	global $con;
	
	$msg = '';
	$ngo_nm = $con->query("select ngo_id,ngo_name from ngo_register");
		$msg .='<option value="">NGO Name</otion>';
	while($row = mysqli_fetch_array($ngo_nm)){
	
		$msg .= '<option value="'.$row['ngo_id'].'" id="ngo_id">'.$row['ngo_name'].'</option>';
	}
	echo $msg;
}

function vol_nm(){   
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select vol_fnm,vol_lnm,vol_id from volunteer_register");
	$msg .='<option value="">Volunteer Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$name = $row['vol_fnm'] .' '. $row['vol_lnm'];
		$msg .= '<option value="'.$row['vol_id'].'" id="vol_id">'.$name.'</option>';
	}
	echo $msg;
}

function schl_nm1(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select schl_nm,schl_id from school_register");
	$msg .='<option value="">School Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['schl_id'].'" id="schl_id">'.$row['schl_nm'].'</option>';
	}
	echo $msg;
}

function schl_nm(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select schl_nm,schl_id from school_register orderby schl_nm asc");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['schl_nm'].'" id="schl_id"></option>';
	}
	echo $msg;
}

function stud_nm(){  
	global $con;
	$ngo_id = $_POST['ngo_id'];
	$msg = '';
	$vol_nm = $con->query("select stud_id,stud_fnm,stud_lnm from student_register where ngo_add_ref = $ngo_id orderby stud_fnm asc");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['stud_fnm'].' '.$row['stud_lnm'].'" id="stud_id"></option>';
	}
	echo $msg;
}

function stud_nm_vol(){  
	global $con;
	$vol_id = $_POST['vl_id'];
	$msg = '';
	$vol_nm = $con->query("select stud_id,stud_fnm,stud_lnm from student_register where vol_add_ref = $vol_id orderby stud_fnm asc");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['stud_fnm'].' '.$row['stud_lnm'].'" id="stud_id"></option>';
	}
	echo $msg;
}

function stud_nm_scl(){  
	global $con;
	$scl_id = $_POST['scl_id'];
	$msg = '';
	$vol_nm = $con->query("select stud_id,stud_fnm,stud_lnm from student_register where schl_name = $scl_id orderby stud_fnm asc");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['stud_fnm'].' '.$row['stud_lnm'].'" id="stud_id"></option>';
	}
	echo $msg;
}

function email_student(){  
	global $con;
	$ngo_id = $_POST['ngo_id'];
	$msg = '';
	$vol_nm = $con->query("select stud_email from student_register where ngo_add_ref = $ngo_id");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['stud_email'].'" id="vol_id">'.$row['stud_email'].'</option>';
	}
	echo $msg;
}

function email_school(){  
	global $con;
	$ngo_id = $_POST['ngo_id'];
	$msg = '';
	$vol_nm = $con->query("select admin_email from school_register where schl_ngo = $ngo_id");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['admin_email'].'" id="vol_id">'.$row['admin_email'].'</option>';
	}
	echo $msg;
}

function email_volun(){  
	global $con;
	$ngo_id = $_POST['ngo_id'];
	$msg = '';
	$vol_nm = $con->query("select vol_email from volunteer_register where vol_conn_ngo = $ngo_id");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['vol_email'].'" id="vol_id">'.$row['vol_email'].'</option>';
	}
	echo $msg;
}

function email_stud_vol(){  
	global $con;
	$vol_id = $_POST['vl_id'];
	$msg = '';
	$vol_nm = $con->query("select stud_email from student_register where vol_add_ref = $vol_id");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['stud_email'].'" id="vol_id">'.$row['stud_email'].'</option>';
	}
	echo $msg;
}

function email_stud_scl(){  
	global $con;
	$vl_id = $_POST['vl_id'];
	$msg = '';
	$vol_nm = $con->query("select admin_email from school_register where schl_volun = $vl_id");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['admin_email'].'" id="vol_id">'.$row['admin_email'].'</option>';
	}
	echo $msg;
}

function email_stud_scl1(){  
	global $con;
	$scl_id = $_POST['scl_id'];
	$msg = '';
	$vol_nm = $con->query("select stud_email from student_register where schl_name = $scl_id");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['stud_email'].'" id="vol_id">'.$row['stud_email'].'</option>';
	}
	echo $msg;
}

function vol_nm1(){   
	global $con;
	$ngo_id = $_POST['ngo_id'];
	$msg = '';
	$vol_nm = $con->query("select vol_fnm,vol_lnm,vol_id from volunteer_register where vol_conn_ngo = $ngo_id orderby vol_fnm asc");
	$msg .='<option value="">Volunteer Name</otion>';
	while($row = mysqli_fetch_array($vol_nm)){
		$name = $row['vol_fnm'] .' '. $row['vol_lnm'];
		$msg .= '<option value="'.$name.'" id="vol_id"></option>';
	}
	echo $msg;
}

function class_nm(){  
	global $con;
	
	$msg = '';
	$cls_nm = $con->query("select cl_id,cl_name from class");
	while($row = mysqli_fetch_array($cls_nm)){
		$msg .= '<option value="'.$row['cl_id'].'" id="cl_id">'.$row['cl_name'].'</option>';
	}
	echo $msg;
}

function medium_nm(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select medium_id,medium_name from medium where medium_name in ('Semi' , 'Marathi')");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['medium_id'].'" id="me_id">'.$row['medium_name'].'</option>';
	}
	echo $msg;
}

function board_nm(){  
	global $con;
	
	$msg = '';
	$vol_nm = $con->query("select board_id,board_short_name from board where board_short_name = 'MSB'");
	while($row = mysqli_fetch_array($vol_nm)){
		$msg .= '<option value="'.$row['board_id'].'" id="b_id">'.$row['board_short_name'].'</option>';
	}
	echo $msg;
}

function language(){   
	global $con;
	$lang = explode(',',$_POST['lang']);
	$msg = '';
	$lang_nm = $con->query("select lang_id,lang_nam from language");
	$no = 1;
	$size = sizeof($lang);
	$checked = '';
	
	
	//print_r($row);
	while($row = mysqli_fetch_array($lang_nm)){
		
		$msg .= '<input type="checkbox" class="language" '.$checked.' id="language_'.$no++.'" name="check_list[]" value="'.$row['lang_id'].'" style="margin-right:5px;margin-left:15px;">'.$row['lang_nam'];
		
	}

	
	echo $msg;
}

function scl_address(){
	global $con;
	
	$sclnm = $_POST['sclnm'];
	
	$msg = '';
	$stat_nm = $con->query("select schl_add1,schl_add2 from school_register where schl_nm = '$sclnm'");
		$row = mysqli_fetch_array($stat_nm);
		$msg .= $row["schl_add1"].' '.$row["schl_add2"];
	echo $msg;
}

function edit_ngo(){
	global $con;
	
	$id = $_POST['ngo_id'];
	$uniqueid = $_POST['ngo_uniqe'];
	$ngo_name = mysqli_escape_string($con,$_POST['ngo_name']);
		$add1 = mysqli_escape_string($con,$_POST['add1']);
		$add2 = mysqli_escape_string($con,$_POST['add2']);
		$soc_nm = mysqli_escape_string($con,$_POST['soc_nm']);
		$build_no = mysqli_escape_string($con,$_POST['build_no']);
		$floor = mysqli_escape_string($con,$_POST['floor']);
		$unit = mysqli_escape_string($con,$_POST['unit']);
		$ref_add = mysqli_escape_string($con,$_POST['ref_add']);
		$village = mysqli_escape_string($con,$_POST['village']);
		$taluka = mysqli_escape_string($con,$_POST['taluka']);
		$taluka_new = mysqli_escape_string($con,$_POST['taluka_new']);
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$zip_code = $_POST['zip_code'];
		if($_POST['ngo_m_no'] != ""){
			$ngo_c_mob_no = $_POST['ngo_c_mob_no'];
			$ngo_m_no = $_POST['ngo_m_no'];
			$mobileno = $ngo_m_no.'-'.$ngo_c_mob_no;
		}else{
			$mobileno = "";
		}
		if($_POST['tel_no'] != ""){
			$tel_no = $_POST['tel_no'];
			$tel_a_no = $_POST['tel_a_no']; 
			$tel_c_no = $_POST['tel_c_no']; 
			$telephoneno = $tel_a_no.'-'.$tel_c_no.'-'.$tel_no; 
		}else{
			$telephoneno = "";
		}
		if($_POST['tel_no'] != ""){
			$fax_no = $_POST['fax_no'];
			$fax_a_no = $_POST['fax_a_no'];
			$fax_c_no = $_POST['fax_c_no'];
			$faxno = $fax_c_no.'-'.$fax_a_no.'-'.$tel_no;
		}else{
			$faxno = "";
		}
		
		$email = $_POST['email'];
		$reg_no = $_POST['reg_no'];
		$reg_no2 = $_POST['reg_no2'];
		$tax_no = $_POST['tax_no'];
		$pan_no = $_POST['pan_no'];
		$ncra_no = $_POST['ncra_no'];    
		$d_reg = $_POST['d_reg'];
		$txt_inside = $_POST['txt_inside'];   
		$acc_no = $_POST['acc_no'];
		$acc_nm = $_POST['acc_nm'];
		$bank_nm = $_POST['bank_nm'];
		$ifsc_no = $_POST['ifsc_no'];
		$brnch_nm = $_POST['brnch_nm'];
		$admin_fnm = mysqli_escape_string($con,$_POST['admin_fnm']);
		$admin_mnm = mysqli_escape_string($con,$_POST['admin_mnm']);
		$admin_snm = mysqli_escape_string($con,$_POST['admin_snm']);
		$a_dob = $_POST['a_dob'];   
		$admin_gender = $_POST['admin_gender'];
		$admin_add1 = mysqli_escape_string($con, $_POST['admin_add1']);
		$admin_add2 = mysqli_escape_string($con, $_POST['admin_add2']);
		$admin_floor = mysqli_escape_string($con, $_POST['admin_floor']);
		$admin_unit = mysqli_escape_string($con, $_POST['admin_unit']);
		$admin_soc_nm = mysqli_escape_string($con, $_POST['admin_soc_nm']);
		$admin_build_no = mysqli_escape_string($con, $_POST['admin_build_no']);
		$admin_ref_add = mysqli_escape_string($con, $_POST['admin_ref_add']);
		$admin_village = mysqli_escape_string($con, $_POST['admin_village']);
		$admin_taluka = mysqli_escape_string($con, $_POST['admin_taluka']);
		$admin_taluka_new = mysqli_escape_string($con, $_POST['admin_taluka_new']);
		$admin_country = $_POST['ad_country'];
		$admin_state = $_POST['ad_state'];
		$admin_city = $_POST['ad_city'];
		$admin_pin = $_POST['admin_zip_code'];
		
		if($_POST['mob_no'] != ""){
			$mob_no = $_POST['mob_no'];
			$c_mob_no = $_POST['c_mob_no'];
			$mobileno1 = $c_mob_no.'-'.$mob_no;
		}else{
			$mobileno1 = "";
		}
		$admin_email = $_POST['admin_email'];
		$admin_adhar_no = $_POST['admin_adhar_no'];
		$admin_bldgrp = $_POST['admin_bldgrp'];
		$check_list = $_POST['check_list'];
			for ($i=0; $i<sizeof($check_list);$i++) {
				$langes .= $check_list[$i]. ",";
			}
			$language = rtrim($langes , ',');
		$mar_status = $_POST['mar_status'];
		$ngo_refr = $_POST['sel_ngo'];
		$vol_refr = $_POST['sel_vol'];
		$oth_ref_nm = mysqli_escape_string($con,$_POST['othr_ref']);
	
	
	
	
	$msg = "";
	
	if((isset($_FILES['reg_certi']['name'])) && $_FILES['reg_certi']['name'] != '' ){
				if (0 < $_FILES['reg_certi']['error']) { 
					$_SESSION['ermsg'] =  'Error during Registran doc file upload' . $_FILES['reg_certi']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['reg_certi']['name'])){
						$path1 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['reg_certi']['name'];
					}else{
						move_uploaded_file($_FILES['reg_certi']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['reg_certi']['name']);
						$path1 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['reg_certi']['name'];
					}
				}
			}else {
				$cr = $con->query("select ngo_register_doc from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path1= $crrow['ngo_register_doc'];
			}
	if((isset($_FILES['reg_certi2']['name'])) && $_FILES['reg_certi2']['name'] != '' ){
				if (0 < $_FILES['reg_certi2']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['reg_certi2']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['reg_certi2']['name'])){
						$path9 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['reg_certi2']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['reg_certi2']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['reg_certi2']['name']);
						$path9 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['reg_certi2']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select ngo_register_doc2 from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path9= $crrow['ngo_register_doc2'];
			}
	if((isset($_FILES['tax_certi']['name'])) && $_FILES['tax_certi']['name'] != '' ){
				if (0 < $_FILES['tax_certi']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['tax_certi']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['tax_certi']['name'])){
						$path2 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['tax_certi']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['tax_certi']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['tax_certi']['name']);
						$path2 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['tax_certi']['name'];
					}
				}
			}else {
				$cr = $con->query("select ngo_tax_doc from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path2= $crrow['ngo_tax_doc'];
			}
			
	if((isset($_FILES['pan_doc']['name'])) && $_FILES['pan_doc']['name'] != '' ){
				if (0 < $_FILES['pan_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['pan_doc']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['pan_doc']['name'])){
						$path3 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['pan_doc']['name'];
						//echo 'File already exists : $path10';
					}else{
						move_uploaded_file($_FILES['pan_doc']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['pan_doc']['name']);
						$path3 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['pan_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select ngo_pancard_doc from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path3= $crrow['ngo_pancard_doc'];
			}
	if((isset($_FILES['ncra_proof']['name'])) && $_FILES['ncra_proof']['name'] != ''){
				if (0 < $_FILES['ncra_proof']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['ncra_proof']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['ncra_proof']['name'])){
						$path4 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['ncra_proof']['name'];
						//echo 'File already exists : $path4';
					}else{
						move_uploaded_file($_FILES['ncra_proof']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['ncra_proof']['name']);
						$path4 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['ncra_proof']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select ngo_ncra_doc from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path4 = $crrow['ngo_ncra_doc'];
			}
	if((isset($_FILES['add_proof']['name'])) && $_FILES['add_proof']['name'] != ''){
				if (0 < $_FILES['add_proof']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['add_proof']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['add_proof']['name'])){
						$path5 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['add_proof']['name'];
						//echo 'File already exists : $path5';
					}else{
						move_uploaded_file($_FILES['add_proof']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['add_proof']['name']);
						$path5 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['add_proof']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select ngo_add_proof from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path5 = $crrow['ngo_add_proof'];
			}
	if((isset($_FILES['ngo_logo']['name'])) && $_FILES['ngo_logo']['name'] != ''){
				if (0 < $_FILES['ngo_logo']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['ngo_logo']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['ngo_logo']['name'])){
						$path10 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['ngo_logo']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['ngo_logo']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['ngo_logo']['name']);
						$path10 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['ngo_logo']['name'];
					}
				}
			}else {
				$cr = $con->query("select ngo_logo from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path10 = $crrow['ngo_logo'];
			}
	if((isset($_FILES['bank_proof']['name'])) && $_FILES['bank_proof']['name'] != ''){
				if (0 < $_FILES['bank_proof']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['bank_proof']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['bank_proof']['name'])){
						$path6 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['bank_proof']['name'];
						//echo 'File already exists : $path6';
					}else{
						move_uploaded_file($_FILES['bank_proof']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['bank_proof']['name']);
						$path6 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['bank_proof']['name'];
					}
				}
			}else {
				$cr = $con->query("select ngo_bankproof_doc from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path6 = $crrow['ngo_bankproof_doc'];
			}
	if((isset($_FILES['admin_adhar_doc']['name'])) && $_FILES['admin_adhar_doc']['name'] != ''){
				if (0 < $_FILES['admin_adhar_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['admin_adhar_doc']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['admin_adhar_doc']['name'])){
						$path8 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['admin_adhar_doc']['name'];
						//echo 'File already exists : $path8';
					}else{
						move_uploaded_file($_FILES['admin_adhar_doc']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['admin_adhar_doc']['name']);
						$path8 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['admin_adhar_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select admin_adhardoc from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path8 = $crrow['admin_adhardoc'];
			}
	if((isset($_FILES['admin_pic']['name'])) && $_FILES['admin_pic']['name'] != ''){
				if (0 < $_FILES['admin_pic']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['admin_pic']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/NGO/'.$uniqueid.'/' . $_FILES['admin_pic']['name'])){
						$path7 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['admin_pic']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['admin_pic']['tmp_name'], '../uploads/NGO/'.$uniqueid.'/' . $_FILES['admin_pic']['name']);
						$path7 = 'uploads/NGO/'.$uniqueid.'/' . $_FILES['admin_pic']['name'];
					}
				}
			}else {
				$cr = $con->query("select admin_pic from ngo_register where ngo_id = '$id'");
				$crrow = mysqli_fetch_array($cr);
				$path7 = $crrow['admin_pic'];
			}
				$ngo_edit = $con->query("update `ngo_register` set `ngo_name` = '$ngo_name',`ngo_address1` ='$add1',`ngo_address2` = '$add2',`ngo_soc_nm` ='$soc_nm',`ngo_build_no` = '$build_no', `ngo_floor` = '$floor', `ngo_unit` = '$unit', `ngo_ref_add` = '$ref_add', `ngo_village` = '$village', `ngo_district` = '$taluka', `ngo_taluka` = '$taluka_new', `ngo_country` = '$country', `ngo_state` = '$state', `ngo_city` = '$city', `ngo_pin` = '$zip_code', `ngo_mobile` = '$mobileno', `ngo_tele_no` = '$telephoneno', `ngo_fax` = '$faxno', `ngo_email` = '$email', `ngo_register_no` = '$reg_no', `ngo_register_doc` = '$path1',`ngo_register_no2` = '$reg_no2',`ngo_register_doc2` = '$path9',`date_reigster` = '$d_reg',`ngo_ref_nm` = '$ngo_refr',`vol_ref_nm` = '$vol_refr',`oth_ref_nm` = '$oth_ref_nm', `ngo_tax_no` = '$tax_no', `ngo_tax_doc` = '$path2', `ngo_pancard_no` = '$pan_no', `ngo_pancard_doc` = '$path3', `ngo_ncra_no` = '$ncra_no', `ngo_ncra_doc` = '$path4', `ngo_add_proof` = '$path5', `ngo_poli_case` = '$txt_inside', `ngo_acc_no` = '$acc_no', `ngo_holder_name` = '$acc_nm', `ngo_bank_nm` = '$bank_nm', `ngo_ifsc_code` = '$ifsc_no',`ngo_branch_name` = '$brnch_nm', `ngo_bankproof_doc` = '$path6',`admin_fnm` = '$admin_fnm',`admin_mnm` = '$admin_mnm',`admin_surnm` = '$admin_snm',`admin_dob` = '$a_dob',`admin_gender` = '$admin_gender',`admin_mob` = '$mobileno1',`admin_email` = '$admin_email',`admin_pic` = '$path7',`admin_add1` = '$admin_add1', `admin_add2` = '$admin_add2',`admin_sconm` = '$admin_soc_nm',`admin_socno` = '$admin_build_no',`admin_floor` = '$admin_floor',`admin_unit` = '$admin_unit',`admin_oth_ref` = '$admin_ref_add',`admin_village` = '$admin_village',`admin_district` = '$admin_taluka',`admin_taluka` = '$admin_taluka_new', `admin_cont` = '$admin_country',`admin_state` = '$admin_state',`admin_city` = '$admin_city',`admin_pin` = '$admin_pin',`admin_adharno` = '$admin_adhar_no',`admin_adhardoc` = '$path8',`language_spk`='$language',`martial_status` = '$mar_status' , `ngo_logo` = '$path10' where `ngo_id` = '$id'");
				 
				if($ngo_edit == 1){   
					$_SESSION['ermsg'] =  'Your update success fully .';
					echo "<script>window.location = 'ngo_edit.php'</script>";
				}else{
					$_SESSION['ermsg'] =  'Your update Not success fully';
					echo "<script>window.location = 'ngo_edit.php'</script>";
				}
			}



function trustee_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
	$ngo_nm = $_POST['ngo_nm'];
    $t_fnm = $_POST['t_fnm'];
    $t_mno = $_POST['t_mno'];
    $t_emil = $_POST['t_emil'];
    $ngo_no = $_POST['ngo_sess'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $status = "1";
    $veer = "";
 
	$sel = $con->query("select ngo_id from ngo_register where ngo_name = '$ngo_nm'");
	$rid = mysqli_fetch_array($sel);
	$id = $rid['ngo_id'];
   if($ngo_nm == ""){
        $veer .= "";
    } else {
        $veer .= "trustee_ngo_id = '$id' and ";
    }
    
    if($t_fnm == ""){
        $veer .= "";
    } else {
        $veer .= "trustee_fnm like '%$t_fnm%' and ";
    }
	
	if($t_mno == ""){
        $veer .= "";
    } else {
        $veer .= "(trustee_mobile like '%$t_mno%') and ";
    }
	
	if($t_emil == ""){
        $veer .= "";
    } else {
        $veer .= "(trustee_email like '%$t_emil%') and ";
    }
	if($ngo_no == ""){
        $veer .= "";
    } else {
        $veer .= "trustee_ngo_id = '$ngo_no' and ";
    }
	
	if($status == ""){
        $veer .= "";
    } else {
        $veer .= "status = '$status' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " trustee_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
    
    mysqli_set_charset($con, 'utf8');
    $trust = $con->query("select * from trustee_register $veer1 LIMIT $start, $per_page");
	//echo "select * from trustee_register $veer1 LIMIT $start, $per_page";
    $msg = "";
	$nmr = mysqli_num_rows($trust);
	//echo "number of row" . $nmr;
    if($nmr > 0){
        while($r = mysqli_fetch_array($trust)){
			$ng_id = $r['trustee_ngo_id'];
			$ngo = $con->query("select ngo_name from ngo_register where ngo_id = $ng_id");
			while($r1 = mysqli_fetch_array($ngo)){
				
			$msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="trust_id[]" class="rowsf"  id="check'.$r["trustee_id"].'" value="'.$r["trustee_id"].'"></td>';      
            $msg .= '<td style="width:5%">'.$r["trustee_id"].'</td>';     
            $msg .= '<td style="width:10%">'.$r1["ngo_name"].'</td>';     
            $msg .= '<td style="width:10%">'.$r["trustee_fnm"].'</td>';      
            $msg .= '<td style="width:10%">'.$r["trustee_mnm"].'</td>'; 
            $msg .= '<td style="width:10%">'.$r["trustee_lnm"].'</td>'; 
            $msg .= '<td style="width:10%">'.$r["trustee_mobile"].'</td>';
			$msg .= '<td style="width:15%">'.$r["trustee_email"].'</td>';
			$msg .= '<td style="width:12%">'.$r["trustee_dob"].'</td>';
			$msg .= '<td style="width:12%">'.$r["trustee_type"].'</td>';
			$msg .= '<td style="width:15%">'.$r["trustee_gender"].'</td>';

			$msg .= '<td style="width:12%"> <i onclick="editbtn(';
            $msg .= "'".$r["trustee_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["trustee_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 10px;"></i>
						<i onclick="showimg('.$r["trustee_id"].')" id="plus_'.$r["trustee_id"].'" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 15px; text-align:right; cursor: pointer; margin-left: 10px;"></i>
                    </td>'; 
			
            $msg .= '</tr>';
			}
        }
	} else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }     
			mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM trustee_register $veer1";
			//echo "SELECT COUNT(*) AS count FROM ring $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

           if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#1e88e5;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con);  
}

function trustee_delete(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("update trustee_register set `status` =  '0' where trustee_id IN($ids)");
    } else {
        $re = $con->query("update trustee_register set `status` =  '0'");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function edit_trustee(){
    global $con;
	$t_ngnm = $_POST['t_ngnm'];
	$t_fnm = $_POST['t_fnm'];
	$t_mnm = $_POST['t_mnm'];
	$t_lnm = $_POST['t_lnm'];
	$t_mno = $_POST['t_mno'];
	$t_email = $_POST['t_email'];
	$t_dob = $_POST['t_dob'];
	$t_type = $_POST['t_type'];
	$t_gen = $_POST['t_gen'];
	$trust_id = $_POST['t_id'];
	
	
	$ed_trust = $con->query("update `trustee_register` set `trustee_ngo_id` = '$t_ngnm',`trustee_fnm` ='$t_fnm',`trustee_mnm` = '$t_mnm',`trustee_lnm` ='$t_lnm',`trustee_mobile` = '$t_mno',`trustee_email` = '$t_email',`trustee_dob` ='$t_dob',`trustee_type` = '$t_type',`trustee_gender` = '$t_gen' where `trustee_id` = '$trust_id'");
	
	//echo "update `trustee_register` set `trustee_ngo_id` = '$t_ngnm',`trustee_fnm` ='$t_fnm',`trustee_mnm` = '$t_mnm',`trustee_lnm` ='$t_lnm',`trustee_mobile` = '$t_mno',`trustee_email` = '$t_email' where `trustee_id` = '$trust_id'";

	if($ed_trust==1){
		echo "<script> window.location = 'trust_list.php';</script>";
	}else{
		echo "0";
	}
}

function int_area_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
	$ngo_nm = $_POST['ngo_nm'];
    $cont = $_POST['cont'];
    $city = $_POST['city'];
	 $ngo_no = $_POST['ngo_sess'];
    $village = $_POST['village'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $status = "1";
    $veer = "";
    
	$sel = $con->query("select ngo_id from ngo_register where ngo_name = '$ngo_nm'");
	$rid = mysqli_fetch_array($sel);
	$id = $rid['ngo_id'];
	
	$sel = $con->query("select id from countries where name = '$cont'");
	$coid = mysqli_fetch_array($sel);
	$conid = $coid[0];
	
	$sel = $con->query("select id from cities where name = '$city'");
	$cid = mysqli_fetch_array($sel);
	$ciid = $cid[0];
	
   if($ngo_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(area_ngo_id like '%$id%') and ";
    }
    
    if($cont == ""){
        $veer .= "";
    } else {
        $veer .= "(work_country like '%$conid%') and ";
    }
	
	if($city == ""){
        $veer .= "";
    } else {
        $veer .= "(work_city like '%$ciid%') and ";
    }
	
	if($village == ""){
        $veer .= "";
    } else {
        $veer .= "(work_village like '%$village%') and ";
    }
	
	if($ngo_no == ""){
        $veer .= "";
    } else {
        $veer .= "area_ngo_id = '$ngo_no' and ";
    }
    
	if($status == ""){
        $veer .= "";
    } else {
        $veer .= "status = '$status' and ";
    }
	
    if($fields == "" || $ord_sort == ""){
        $orderby = "area_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
    
    mysqli_set_charset($con, 'utf8');
    $trust = $con->query("select * from ngo_intrested_area $veer1  LIMIT $start, $per_page ");
	
    $msg = "";
    if(mysqli_num_rows($trust) > 0){
        while($r = mysqli_fetch_array($trust)){
			$conid = $r["work_country"];
			$statid = $r["work_state"];
			$cityid = $r["work_city"];
			$connm = $con->query("select id,name from countries where id = $conid");
			$statnm = $con->query("select id,name from states where id = $statid");
			
			$citynm = $con->query("select id,name from cities where id = $cityid");
			
			$ng_id = $r['area_ngo_id'];
			$ngo = $con->query("select ngo_name from ngo_register where ngo_id = $ng_id");
			while($r1 = mysqli_fetch_array($ngo)){
				while($r2 = mysqli_fetch_array($connm)){
					while($r3 = mysqli_fetch_array($statnm)){
						while($r4 = mysqli_fetch_array($citynm)){
				
			$msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="a_id[]" class="rowsf"  id="check'.$r["area_id"].'" value="'.$r["area_id"].'"></td>';      
            $msg .= '<td style="width:3%">'.$r['area_id'].'</td>';     
            $msg .= '<td style="width:12%">'.$r1['ngo_name'].'</td>';     
            $msg .= '<td style="width:12%">'.$r2['name'].'</td>';      
            $msg .= '<td style="width:12%">'.$r3['name'].'</td>'; 
            $msg .= '<td style="width:12%">'.$r4['name'].'</td>'; 
            $msg .= '<td style="width:12%">'.$r["work_district"].'</td>';
			$msg .= '<td style="width:12%">'.$r["work_village"].'</td>';
			$msg .= '<td style="width:15%">'.$r["why_area"].'</td>';

			$msg .= '<td style="width:12%"> <i onclick="editbtn(';
            $msg .= "'".$r["area_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["area_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 10px;"></i>
						<i onclick="showimg('.$r["area_id"].')" id="plus_'.$r["area_id"].'" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 15px; text-align:right; cursor: pointer; margin-left: 10px;"></i>
                    </td>'; 
			
            $msg .= '</tr>';
						}
					}
				}
			}
        }
	} else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }     
			mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM ngo_intrested_area $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

           if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#1e88e5;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con);  
}

function edit_area(){
    global $con;
	$a_ngnm = $_POST['a_ngnm'];
	$a_cont = $_POST['country'];
	$a_state = $_POST['state'];
	$a_city = $_POST['city'];
	$a_taluka = $_POST['a_taluka'];
	$a_village = $_POST['a_village'];
	$area_no = $_POST['a_id'];
	
	$ed_area = $con->query("update `ngo_intrested_area` set `area_ngo_id` = '$a_ngnm',`work_country` ='$a_cont',`work_state` = '$a_state',`work_city` ='$a_city',`work_district` = '$a_taluka',`work_village` = '$a_village' where `area_id` = $area_no");

	if($ed_area==1){
		echo "<script> window.location = 'area_list.php';</script>";
	}else{
		echo "0";
	}
}

function area_delete(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){  
        $re = $con->query("update ngo_intrested_area set `status` =  '0' where area_id IN($ids)");
    } else {
        $re = $con->query("update ngo_intrested_area set `status` =  '0'");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function edit_volun(){
    global $con;
		$vo_fname = $_POST['vo_fname'];
		$vo_mname = $_POST['vo_mname'];
		$vo_lname = $_POST['vo_lname'];
		$vo_bld_grp = $_POST['vol_grp'];
		$vo_dob = $_POST['vo_dob'];
		$vo_email = $_POST['vo_email'];
		$vo_gender = $_POST['vo_gender'];
		if($_POST['ngo_m_no'] != ""){
			$ngo_c_mob_no = $_POST['ngo_c_mob_no'];
			$ngo_m_no = $_POST['ngo_m_no'];
			$mobileno = $ngo_c_mob_no.'-'.$ngo_m_no;
		}else{
			$mobileno = "";
		}
		if($_POST['ngo_m_no'] != ""){
			$tel_c_no = $_POST['tel_c_no'];
			$tel_a_no = $_POST['tel_a_no'];
			$tel_no = $_POST['tel_no'];
			$telephoneno = $tel_c_no.'-'.$tel_a_no.'-'.$tel_no;  
		}else{
			$telephoneno = "";
		}
		if($_POST['ngo_m_no'] != ""){
			$fax_c_no = $_POST['fax_c_no'];
			$fax_a_no = $_POST['fax_a_no'];
			$fax_no = $_POST['fax_no'];
			$faxno = $fax_c_no.'-'.$fax_a_no.'-'.$fax_no;
		}else{
			$faxno = "";
		}
		
		$vo_add1 = $_POST['vo_add1'];
		$vo_add2 = $_POST['vo_add2'];
		$vol_soc_nm = $_POST['vol_soc_nm'];
		$vol_build_no = $_POST['vol_build_no'];
		$vol_floor = $_POST['vol_floor'];
		$vol_unit = $_POST['vol_unit'];
		$vol_ref_add = $_POST['vol_ref_add'];
		$vol_village = $_POST['vol_village'];
		$vol_taluka = $_POST['vol_taluka'];
		$vol_taluka_new = $_POST['vol_taluka_new'];
		$vol_country = $_POST['country'];
		$vol_state = $_POST['state'];
		$vol_city = $_POST['city'];
		$vo_zip_code = $_POST['vo_zip_code']; 
		$vo_adha_no = $_POST['vo_adha_no'];
		$vo_pan_no = $_POST['vo_pan_no'];  
		$education = $_POST['educ'];
		$prof = $_POST['vol_prof'];
		$check_list = $_POST['check_list'];
			for ($i=0; $i<sizeof($check_list);$i++) {
				$langes .= $check_list[$i]. ",";
			}
			$lang = rtrim($langes , ',');
			
			$val = $_POST['vol_ngo'];
			if($val == "1"){
				$vol_ngo_nm = $_POST['sel_ngo'];
			}else{
				$vol_ngo_nm = '';
			}
			
		$mar_status = $_POST['mar_status'];
		$vo_work = $_POST['vo_work'];
		$vo_us = $_POST['vo_us'];
		$vo_exp = $_POST['vo_exp'];
		$wrk_us = $_POST['wrk_us'];
		$vol_id = $_POST['vol_id'];
		$uniqueid_volun = $_POST['vol_uid'];
	

		$pathVolunm = "../uploads/Volunteer/$uniqueid_volun";
	
		$path = "uploads/Volunteer/$uniqueid_volun";
		//@mkdir($path,0777,true);
		
		$msg = ""; 
		//print_r($_FILES);
		//if($profile_takepic == ""){
			if((isset($_FILES['vo_pic']['name'])) && $_FILES['vo_pic']['name'] != ""){
				if (0 < $_FILES['vo_pic']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['vo_pic']['error'];
					echo "<script>window.location = 'volun_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathVolunm.'/' . $_FILES['vo_pic']['name'])){
						$path1 = $path.'/' . $_FILES['vo_pic']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['vo_pic']['tmp_name'], $pathVolunm.'/' . $_FILES['vo_pic']['name']);
						$path1 = $path.'/' . $_FILES['vo_pic']['name'];
					}
				}
			}else {
				$cr = $con->query("select vol_pic from volunteer_register where vol_id = '$vol_id'");
				$crrow = mysqli_fetch_array($cr);
				$path1 = $crrow['vol_pic'];
			}
		/* }else{
			$path1 = $profile_takepic;
		} */
		
		//if($id_takepic == ""){
			if((isset($_FILES['adhar_doc']['name'])) && $_FILES['adhar_doc']['name'] != ""){
				if (0 < $_FILES['adhar_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['adhar_doc']['error'];
					echo "<script>window.location = 'volun_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathVolunm.'/' . $_FILES['adhar_doc']['name'])){
						$path2 = $path.'/' . $_FILES['adhar_doc']['name'];
						//echo 'File already exists : $path2';
					}else{
						move_uploaded_file($_FILES['adhar_doc']['tmp_name'], $pathVolunm.'/' . $_FILES['adhar_doc']['name']);
						$path2 = $path.'/' . $_FILES['adhar_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select vol_adhar_doc from volunteer_register where vol_id = '$vol_id'");
				$crrow = mysqli_fetch_array($cr);
				$path2 = $crrow['vol_adhar_doc'];
			}
		/* }else{
			$path2 = $id_takepic;
		} */
		
		//if($pan_takepic == ""){
			if((isset($_FILES['pan_doc']['name'])) && $_FILES['pan_doc']['name'] !== ""){
				if (0 < $_FILES['pan_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['pan_doc']['error'];
					echo "<script>window.location = 'volun_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathVolunm.'/' . $_FILES['pan_doc']['name'])){
						$path3 = $path.'/' . $_FILES['pan_doc']['name'];
						//echo 'File already exists : $path3';
					}else{
						move_uploaded_file($_FILES['pan_doc']['tmp_name'], $pathVolunm.'/' . $_FILES['pan_doc']['name']);
						$path3 = $path.'/' . $_FILES['pan_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select vol_pan_doc from volunteer_register where vol_id = '$vol_id'");
				$crrow = mysqli_fetch_array($cr);
				$path3 = $crrow['vol_pan_doc'];
			}
		/* }else{
			$path3 = $pan_takepic;
		} */
		
		//if($edu_takepic == ""){
			if((isset($_FILES['edu_doc']['name'])) && $_FILES['edu_doc']['name'] != ""){
				if (0 < $_FILES['edu_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['edu_doc']['error'];
					echo "<script>window.location = 'volun_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathVolunm.'/' . $_FILES['edu_doc']['name'])){
						$path4 = $path.'/' . $_FILES['edu_doc']['name'];
						//echo 'File already exists : $path4';
					}else{
						move_uploaded_file($_FILES['edu_doc']['tmp_name'], $pathVolunm.'/' . $_FILES['edu_doc']['name']);
						$path4 = $path.'/' . $_FILES['edu_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select edu_doc from volunteer_register where vol_id = '$vol_id'");
				$crrow = mysqli_fetch_array($cr);
				$path4 = $crrow['edu_doc'];
			}
		/* }else{
			$path4 = $edu_takepic;
		} */
					            
					$volun_edit = $con->query("update `volunteer_register` set `vol_fnm` = '$vo_fname', `vol_mnm` = '$vo_mname', `vol_lnm` = '$vo_lname',`vol_dob` = '$vo_dob', `vol_email` = '$vo_email', `vol_tele_no` = '$telephoneno', `vol_fax_no` = '$faxno',`vol_gender` = '$vo_gender', `vol_bld_grp` = '$vo_bld_grp', `vol_contact` = '$mobileno',`vol_pic` = '$path1', `vol_add1` = '$vo_add1',`vol_add2` = '$vo_add2',`vol_soc_nm` = '$vol_soc_nm',`vol_soc_no` = '$vol_build_no',`vol_floor` = '$vol_floor',`vol_unit` = '$vol_unit',`vol_oth_ref` = '$vol_ref_add' , `vol_village` = '$vol_village',`vol_district` = '$vol_taluka' ,`vol_taluka` = '$vol_taluka_new',`vol_cont` = '$vol_country', `vol_state` = '$vol_state', `vol_city` = '$vol_city', `vol_zipcode` = '$vo_zip_code', `vol_adhar_no` = '$vo_adha_no', `vol_adhar_doc` = '$path2',`vol_pan_no` = '$vo_pan_no',`vol_pan_doc` = '$path3', `education` = '$education',`edu_doc` = '$path4',`profess` = '$prof',`lang_spk` = '$lang', `vol_conn_ngo` = '$vol_ngo_nm' , `vol_pref_area` = '$vo_work', `vol_us` = '$vo_us', `vol_expe` = '$vo_exp',`vol_why` = '$wrk_us',`matiral_status` = '$mar_status' where vol_id = $vol_id");
					       
					   
					if($volun_edit == 1){
						$_SESSION['ermsg'] =  'Data Update Successfully';
						echo "<script>window.location = 'volun_edit.php';</script>";
					}else{
							$_SESSION['ermsg'] =  'Data Not Update Successfully';
						echo "<script>window.location = 'volun_edit.php';</script>";
					}
				}

function sudent_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $studnm = $_POST['studnm'];
    $scl_nm = $_POST['scl_nm'];
    $email = $_POST['email'];
    $cls = $_POST['cls'];
    $vol_id = $_POST['vl_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	
	$scl_id = $con->query("select cl_id from class where cl_name = '$cls'");
	$scl = mysqli_fetch_array($scl_id);
	$id = $scl['cl_id'];
	
	$scl_id = $con->query("select schl_id from school_register where schl_id = '$scl_nm'");
	$scl = mysqli_fetch_array($scl_id);
	$nm = $scl['schl_id'];
	
	if($studnm == ""){
        $veer .= "";
    } else {
        $veer .= "(CONCAT(`stud_fnm`, ' ', `stud_lnm`) like '%$studnm%') and ";
    }
    
    if($scl_nm == ""){ 
        $veer .= "";
    } else {
        $veer .= "(schl_name like '%$nm%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(stud_email like '%$email%') and ";
    } 
	
	if($cls == ""){
        $veer .= "";
    } else {
        $veer .= "(stud_class like '%$id%') and ";
    }
	
    
    if($fields == "" || $ord_sort == ""){
        $orderby = "schl_name asc";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = ' where vol_add_ref = '.$vol_id. ' order by '.$orderby;
    } else {
        $veer1 = ' where ' .$dev. ' and vol_add_ref = '.$vol_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select stud_class,stud_id,stud_fnm,stud_mnm,stud_lnm,vol_add_ref,stud_email,stud_midium,stud_contact,stud_adhar_no,schl_name from student_register $veer1  LIMIT $start, $per_page ");

    $msg = "";
	$no = 1;
	$cls ="";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["stud_class"] == ""){
				$clsname = '';
			}else{
				$cls = $r["stud_class"];
				$sel = $con->query("select cl_name from class where cl_id = $cls");
				$cr = mysqli_fetch_array($sel);
				$clsname = $cr["cl_name"];
			}
			if($r["schl_name"] == ""){
				$sclname = '';
			}else{
				$scl_name = $r['schl_name'];
			$sel = $con->query("select schl_nm from school_register where schl_id = $scl_name");
			$schl = mysqli_fetch_array($sel);
			$sclname = $schl["schl_nm"];
			}
			if($r["stud_midium"] == ""){
				$midnm = '';
			}else{
				$mid = $r["stud_midium"];
				$midn = $con->query("select medium_name from medium where medium_id = $mid");
				$mr = mysqli_fetch_array($midn);
				$midnm = $mr["medium_name"];
			}
			if($r["stud_contact"] != ""){
				$std_mno = $r["stud_contact"];
			}else{
				$std_mno = "";
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="scl_id[]" class="rowsf"  id="check'.$r["stud_id"].'" value="'.$r["stud_id"].'"></td>';    
            $msg .= '<td>'.$no++.'</td>';     
            $msg .= '<td>'.$r["stud_fnm"].' '.$r["stud_lnm"].'</td>';    
			$msg .= '<td>'.$sclname.'</td>'; 		
            $msg .= '<td>'.$r["stud_email"].'</td>'; 
            $msg .= '<td>'.$std_mno.'</td>'; 
            $msg .= '<td>'.$r["stud_adhar_no"].'</td>'; 
            $msg .= '<td>'.$clsname.'</td>'; 
            $msg .= '<td>'.$midnm.'</td>'; 
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["stud_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
			}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM student_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function school_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $sclnm = $_POST['sclnm'];
    $ngonm = $_POST['ngonm'];
    $email = $_POST['email'];
    $vol_id = $_POST['vol_id'];
	echo $vol_id;
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
	
	if($ngonm != ""){
		$ngo_id = $con->query("select ngo_id from ngo_register where ngo_id = '$ngonm'");
		$ngo = mysqli_fetch_array($ngo_id);
		$id = $ngo['ngo_id'];
	}else{
		$id = "";
	}
	
	$school = $con->query("select schl_id from school_register where schl_id = '$sclnm'");
	$scl = mysqli_fetch_array($school);
	$sid = $scl['schl_id'];
    
   if($sclnm == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_id = '$sid') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(admin_email like '%$email%') and ";
    }
	
	if($ngonm == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_ngo like '%$id%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = "schl_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = 'where schl_volun = '.$vol_id. ' order by '.$orderby;
    } else {
        $veer1 = 'where ' .$dev. ' and schl_volun = '.$vol_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select schl_id,admin_fnm,schl_nm,schl_add1,schl_taluka,schl_tele_no,schl_district,schl_pin,schl_state,schl_village,schl_volun,admin_surnm,admin_email,admin_mob,schl_no_stud,schl_ngo from school_register $veer1  LIMIT $start, $per_page ");

    $msg = "";
	$no = 1;
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if( $r["schl_tele_no"] != ""){
				$a_code =  $r["schl_tele_no"];
			}else{
				$a_code = "";
			}
			if( $r["admin_mob"] != ""){
				$aa_code =  $r["admin_mob"];
			}else{
				$aa_code = "";
			}
			
			$vol_id = $r['schl_volun'];
			$st_id = $r['schl_state'];
			$st_nm = $con->query("select name from states where id = $st_id");
			$vq = $con->query("select vol_fnm,vol_lnm from volunteer_register where vol_id = $vol_id");
			while($vr = mysqli_fetch_array($vq)){
				while($sr = mysqli_fetch_array($st_nm)){
			if($r["schl_ngo"] == ""){
				$ng_nm = '';
			}else{
				$ng_nm = $r["schl_ngo"];
				$midn = $con->query("select ngo_name from ngo_register where ngo_id = $ng_nm");
				$mr = mysqli_fetch_array($midn);
				$ng_nm = $mr["ngo_name"];
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="scl_id[]" class="rowsf"  id="check'.$r["schl_id"].'" value="'.$r["schl_id"].'"></td>';    
            $msg .= '<td>'.$no++.'</td>';       
            $msg .= '<td style="width:12%">'.$vr['vol_fnm'].' '.$vr['vol_lnm'].'</td>';     
            $msg .= '<td style="width:12%">'.$ng_nm.'</td>';     
            $msg .= '<td style="width:12%">'.$r["schl_nm"].'</td>';     
            $msg .= '<td style="width:12%">'.$r["schl_add1"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_village"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_taluka"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_district"].'</td>';      
            $msg .= '<td style="width:12%">'.$sr["name"].'</td>'; 
			$msg .= '<td style="width:12%">'.$r["schl_pin"].'</td>';			
            $msg .= '<td style="width:12%">'.$r["schl_no_stud"].'</td>';            
            $msg .= '<td style="width:12%">'.$a_code.'</td>';       
            $msg .= '<td style="width:12%">'.$r["admin_fnm"].' '.$r["admin_surnm"].'</td>';        
            $msg .= '<td style="width:12%">'.$aa_code.'</td>';        
            $msg .= '<td style="width:12%">'.$r["admin_email"].'</td>';    
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["schl_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
				}
			}
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM school_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function ngo_school_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $sclnm = $_POST['sclnm'];
    $vl_nm = $_POST['vl_nm'];
    $email = $_POST['email'];
    $ngo_id = $_POST['ngo_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
	
	$vol = $con->query("select vol_id from volunteer_register where vol_id = '$vl_nm'");
	$v_id = mysqli_fetch_array($vol);
	$id = $v_id['vol_id'];
	
	$school = $con->query("select schl_id from school_register where schl_id = '$sclnm'");
	$s_id = mysqli_fetch_array($school);
	$sid = $s_id['schl_id'];
    
	if($sclnm == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_id = '$sid') and ";
    }
	
	if($vl_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_volun like '%$id%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(schl_email like '%$email%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = "schl_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = 'where schl_ngo = '.$ngo_id. ' order by '.$orderby;
    } else {
        $veer1 = 'where ' .$dev. ' and schl_ngo = '.$ngo_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select schl_id,admin_fnm,schl_nm,schl_add1,schl_taluka,schl_mobile,schl_district,schl_pin,schl_state,schl_village,schl_volun,admin_surnm,admin_email,admin_mob,schl_no_stud from school_register $veer1  LIMIT $start, $per_page ");

    $msg = "";
	$no = 1;
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["schl_mobile"] != ""){
				$a_code =  $r["schl_mobile"];
			}else{
				$a_code =  "";
			}
			if($r["admin_mob"] != ""){
				$aa_code =  $r["admin_mob"];
			}else{
				$aa_code =  "";
			}
			
			$vol_id = $r['schl_volun'];
			$st_id = $r['schl_state'];
			$st_nm = $con->query("select name from states where id = $st_id");
			$vq = $con->query("select vol_fnm,vol_lnm from volunteer_register where vol_id = $vol_id");
			while($vr = mysqli_fetch_array($vq)){
				while($sr = mysqli_fetch_array($st_nm)){
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="scl_id[]" class="rowsf"  id="check'.$r["schl_id"].'" value="'.$r["schl_id"].'"></td>';    
            $msg .= '<td>'.$no++.'</td>';       
            $msg .= '<td style="width:12%">'.$vr['vol_fnm'].' '.$vr['vol_lnm'].'</td>';     
            $msg .= '<td style="width:12%">'.$r["schl_nm"].'</td>';     
            $msg .= '<td style="width:12%">'.$r["schl_add1"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_village"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_taluka"].'</td>';      
            $msg .= '<td style="width:12%">'.$r["schl_district"].'</td>';      
            $msg .= '<td style="width:12%">'.$sr["name"].'</td>'; 
			$msg .= '<td style="width:12%">'.$r["schl_pin"].'</td>';			
            $msg .= '<td style="width:12%">'.$r["schl_no_stud"].'</td>';            
            $msg .= '<td style="width:12%">'.$a_code.'</td>';      
            $msg .= '<td style="width:12%">'.$r["admin_fnm"].' '.$r["admin_surnm"].'</td>';        
            $msg .= '<td style="width:12%">'.$aa_code.'</td>';        
            $msg .= '<td style="width:12%">'.$r["admin_email"].'</td>';    
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["schl_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
				}
			}
        }
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM school_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function ngo_sudent_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $studnm = $_POST['studnm'];
    $scl_nm = $_POST['scl_nm'];
    $email = $_POST['email'];
    $vl_nm = $_POST['vl_nm'];
    $ngo_id = $_POST['ngo_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	$vol = $con->query("select vol_id from volunteer_register where vol_id = '$vl_nm'");
	$v_id = mysqli_fetch_array($vol);
	$id = $v_id['vol_id'];
	
	$scl_id = $con->query("select schl_id from school_register where schl_id = '$scl_nm'");
	$scl = mysqli_fetch_array($scl_id);
	$nm = $scl['schl_id'];
	
   if($studnm == ""){
        $veer .= "";
    } else {
        $veer .= "(CONCAT(`stud_fnm`, ' ', `stud_lnm`) like '%$studnm%') and ";  
    }
    
    if($scl_nm == ""){ 
        $veer .= "";
    } else {
        $veer .= "(schl_name like '%$nm%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(stud_email like '%$email%') and ";
    }
	
	if($vl_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(vol_add_ref like '%$id%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = "schl_name asc";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = ' where ngo_add_ref = '.$ngo_id. ' order by '.$orderby;
    } else {
        $veer1 = ' where ' .$dev. ' and ngo_add_ref = '.$ngo_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select stud_class,stud_midium,stud_id,stud_fnm,stud_mnm,stud_lnm,stud_email,stud_contact,vol_add_ref,stud_adhar_no,schl_name from student_register $veer1  LIMIT $start, $per_page ");

    $msg = "";
	$no = 1;
	$cls ="";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["stud_class"] == ""){
				$clsname = '';
			}else{
				$cls = $r["stud_class"];
				$sel = $con->query("select cl_name from class where cl_id = $cls");
				$cr = mysqli_fetch_array($sel);
				$clsname = $cr["cl_name"];
			}
			if($r["stud_midium"] == ""){
				$midname = '';
			}else{
				$mid = $r["stud_midium"];
				$sel = $con->query("select medium_name from medium where medium_id = $mid");
				$mr = mysqli_fetch_array($sel);
				$midname = $mr["medium_name"];
			}
			if($r["schl_name"] == ""){
				$sclname = '';
			}else{
				$scl_name = $r['schl_name'];
			$sel = $con->query("select schl_nm from school_register where schl_id = $scl_name");
			$schl = mysqli_fetch_array($sel);
			$sclname = $schl["schl_nm"];
			}
			if($r["vol_add_ref"] == ""){
				$vlname = '';
			}else{
				$vlname = $r['vol_add_ref'];
				$sel = $con->query("select vol_fnm,vol_lnm from volunteer_register where vol_id = $vlname");
				$vol = mysqli_fetch_array($sel);
				$volnm = $vol["vol_fnm"].' '.$vol["vol_lnm"];
			}
			
			if($r["stud_contact"] != ""){
				$cono = $r["stud_contact"];
			}else{
				$cono = "";
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="scl_id[]" class="rowsf"  id="check'.$r["stud_id"].'" value="'.$r["stud_id"].'"></td>';    
             $msg .= '<td>'.$no++.'</td>';     
            $msg .= '<td>'.$r["stud_fnm"].' '.$r["stud_lnm"].'</td>';       
            $msg .= '<td>'.$sclname.'</td>';       
            $msg .= '<td>'.$volnm.'</td>';       
            $msg .= '<td>'.$midname.'</td>';       
            $msg .= '<td>'.$r["stud_email"].'</td>'; 
            $msg .= '<td>'.$cono.'</td>'; 
            $msg .= '<td>'.$r["stud_adhar_no"].'</td>'; 
            $msg .= '<td>'.$clsname.'</td>'; 
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["stud_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
			}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM student_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function school_sudent_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $studnm = $_POST['studnm'];
    $scl_nm = $_POST['scl_id'];
    $email = $_POST['email'];
    $ng_nm = $_POST['ng_nm'];
    $vl_nm = $_POST['vl_nm'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	$ngo = $con->query("select ngo_id from ngo_register where ngo_id = '$ng_nm'");
	$nr = mysqli_fetch_array($ngo);
	$id = $nr['ngo_id'];
	
	$vol = $con->query("select vol_id from volunteer_register where vol_id = '$vl_nm'");
	$vr = mysqli_fetch_array($vol);
	$vid = $vr['vol_id'];
	
	if($studnm == ""){
        $veer .= "";
    } else {
        $veer .= "(CONCAT(`stud_fnm`, ' ', `stud_lnm`) like '%$studnm%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(stud_email like '%$email%') and ";
    }
	
	if($ng_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(ngo_add_ref like '%$id%') and ";
    }
	
	if($vl_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(vol_add_ref like '%$vid%') and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = "schl_name asc";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = ' where schl_name = '.$scl_nm. ' order by '.$orderby;
    } else {
        $veer1 = ' where ' .$dev. ' and schl_name = '.$scl_nm. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select stud_class,stud_midium,stud_id,stud_fnm,stud_mnm,ngo_add_ref,vol_add_ref,stud_lnm,stud_email,stud_contact,stud_adhar_no,schl_name from student_register $veer1  LIMIT $start, $per_page ");

    $msg = "";
	$no = 1;
	$cls ="";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["stud_class"] == ""){
				$clsname = '';
			}else{
				$cls = $r["stud_class"];
				$sel = $con->query("select * from class where cl_id = $cls");
				$cr = mysqli_fetch_array($sel);
				$clsname = $cr["cl_name"];
			}
			if($r["schl_name"] == ""){
				$sclname = '';
			}else{
				$scl_name = $r['schl_name'];
			$sel = $con->query("select schl_nm from school_register where schl_id = $scl_name");
			$schl = mysqli_fetch_array($sel);
			$sclname = $schl["schl_nm"];
			}
			if($r["stud_midium"] == ""){
				$midnm = '';
			}else{
				$mid = $r["stud_midium"];
				$midn = $con->query("select medium_name from medium where medium_id = $mid");
				$mr = mysqli_fetch_array($midn);
				$midnm = $mr["medium_name"];
			}
			if($r["ngo_add_ref"] == ""){
				$ng_nm = '';
			}else{
				$ng_nm = $r["ngo_add_ref"];
				$midn = $con->query("select ngo_name from ngo_register where ngo_id = $ng_nm");
				$nr = mysqli_fetch_array($midn);
				$ng_nm = $nr["ngo_name"];
			}
			if($r["vol_add_ref"] == ""){
				$vl_nm = '';
			}else{
				$vl_nm = $r["vol_add_ref"];
				$vol = $con->query("select vol_fnm,vol_lnm from volunteer_register where vol_id = $vl_nm");
				$vr = mysqli_fetch_array($vol);
				$vl_nm = $vr["vol_fnm"]. ' '.$vr['vol_lnm'];
			}
			if($r["stud_contact"] != ""){
				$cono = $r["stud_contact"];
			}else{
				$cono = "";
			}
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="scl_id[]" class="rowsf"  id="check'.$r["stud_id"].'" value="'.$r["stud_id"].'"></td>';    
            $msg .= '<td>'.$no++.'</td>';     
            $msg .= '<td>'.$r["stud_fnm"].' '.$r["stud_lnm"].'</td>';       
            $msg .= '<td>'.$sclname.'</td>';      
            $msg .= '<td>'.$ng_nm.'</td>';      
            $msg .= '<td>'.$vl_nm.'</td>';      
            $msg .= '<td>'.$r["stud_email"].'</td>'; 
            $msg .= '<td>'.$cono.'</td>'; 
            $msg .= '<td>'.$r["stud_adhar_no"].'</td>'; 
            $msg .= '<td>'.$clsname.'</td>'; 
            $msg .= '<td>'.$midnm.'</td>'; 
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["stud_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
			}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="12">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM student_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function ngo_volun_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    
    $fnm = $_POST['fnm'];
    $bld_grp = $_POST['bld_grp'];
    $email = $_POST['email'];
    $ngo_id = $_POST['ngo_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	if($fnm == ""){
        $veer .= "";
    } else {
        $veer .= "(CONCAT(`vol_fnm`, ' ', `vol_lnm`) like '%$fnm%') and ";
    }
    
    if($bld_grp == ""){ 
        $veer .= "";
    } else {
        $veer .= "(vol_bld_grp like '%$bld_grp%') and ";
    }
    
    if($email == ""){
        $veer .= "";
    } else {
        $veer .= "(vol_email like '%$email%') and ";
    }
    
	if($fields == "" || $ord_sort == ""){
        $orderby = "vol_conn_ngo asc";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
	
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = ' where vol_conn_ngo = '.$ngo_id. ' order by '.$orderby;
    } else {
		$veer1 = ' where ' .$dev. ' and vol_conn_ngo = '.$ngo_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select ngo_is_admin,vol_id,vol_fnm,vol_mnm,vol_lnm,vol_email,vol_bld_grp,vol_contact from volunteer_register $veer1  LIMIT $start, $per_page ");
    //echo "select * from student_register $veer1  LIMIT $start, $per_page ";

    $msg = "";
	$no = 1;
	$cls ="";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["ngo_is_admin"] == "0"){
				$sellected = "selected";
			}else{
				$sellected = "";
			}
			if($r["vol_contact"] != ""){
				$cono = $r["vol_contact"];
			}else{
				$cono ="";
			}
			
            $msg .= '<tr>'; 
            $msg .= '<td><input type="checkbox" name="scl_id[]" class="rowsf"  id="check'.$r["vol_id"].'" value="'.$r["vol_id"].'"></td>';    
            $msg .= '<td>'.$no++.'</td>';     
            $msg .= '<td>'.$r["vol_fnm"].' '.$r["vol_lnm"].'</td>'; 
            $msg .= '<td>'.$r["vol_email"].'</td>'; 
            $msg .= '<td>'.$r["vol_bld_grp"].'</td>'; 
            $msg .= '<td>'.$cono.'</td>'; 
            $msg .= '<td><select onchange="changeisadmin(this.value,'.$r['vol_id'].')";><option value="1" '.$sellected.'>Yes</option><option value="0" '.$sellected.'>No</option></select></td>'; 
            $msg .= '<td style="text-align:center;"> <i onclick="editbtn(';
            $msg .= "'".$r["vol_id"]."'";
            $msg .=')" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 16px; float: left; cursor: pointer; margin-left: 5px;"></i> 
                    </td>'; 
            
            $msg .= '</tr>';
			}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM volunteer_register $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function edit_school(){
    global $con;
		$scl_name = mysqli_escape_string($con, $_POST['scl_name']);
		$scl_add1 = mysqli_escape_string($con, $_POST['scl_add1']);
		$scl_add2 = mysqli_escape_string($con, $_POST['scl_add2']);
		$scl_soc_nm = mysqli_escape_string($con, $_POST['scl_soc_nm']);
		$scl_build_no = mysqli_escape_string($con, $_POST['scl_build_no']);
		$scl_floor = mysqli_escape_string($con, $_POST['scl_floor']);
		$scl_unit = mysqli_escape_string($con, $_POST['scl_unit']);
		$scl_ref_add = mysqli_escape_string($con, $_POST['scl_ref_add']);
		$scl_village = mysqli_escape_string($con, $_POST['scl_village']);
		$scl_taluka = mysqli_escape_string($con, $_POST['scl_taluka']);
		$scl_taluka_new = mysqli_escape_string($con, $_POST['scl_taluka_new']);
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$scl_zip_code = $_POST['scl_zip_code'];
		$scl_email = $_POST['scl_email'];
		if($_POST['ngo_m_no'] != ""){
			$ngo_c_mob_no = $_POST['ngo_c_mob_no'];
			$ngo_m_no = $_POST['ngo_m_no'];
			$mobileno = $ngo_m_no.'-'.$ngo_c_mob_no;
		}else{
			$mobileno = "";
		}
		if($_POST['fax_no'] != ""){
			$fax_no = $_POST['fax_no'];
			$fax_a_no = $_POST['fax_a_no'];
			$fax_c_no = $_POST['fax_c_no'];
			$faxno = $fax_c_no.'-'.$fax_a_no.'-'.$fax_no;  
		}else{
			$faxno = "";
		}
		if($_POST['tel_no'] != ""){
			$tel_no = $_POST['tel_no'];
			$tel_a_no = $_POST['tel_a_no'];
			$tel_c_no = $_POST['tel_c_no'];
			$telephoneno = $tel_c_no.'-'.$tel_a_no.'-'.$tel_no;
		}else{
			$telephoneno = "";
		}
		
		$scl_ngo_nm = $_POST['sel_ngo'];
		$scl_vol_nm = $_POST['sel_vol'];    
		$scl_reg_no = $_POST['scl_reg_no'];
		$scl_reg_no2 = $_POST['scl_reg_no2'];
		$d_reg = $_POST['d_reg'];
		$scl_tax_no = $_POST['scl_tax_no'];
		$scl_pan_no = $_POST['scl_pan_no'];
		$no_staff = $_POST['no_staff'];  
		$no_stud = $_POST['no_stud'];
		$avai_class = $_POST['avai_class'];
		$what_gov_supp = mysqli_escape_string($con, $_POST['what_gov_supp']);
		$wht_supp_txt = mysqli_escape_string($con, $_POST['wht_supp_txt']);
		$ngo_nm_supp = $_POST['ngo_nm_supp'];
		$scl_acc_no = $_POST['scl_acc_no'];
		$scl_acc_nm = $_POST['scl_acc_nm'];
		$scl_bank_nm = $_POST['scl_bank_nm'];
		$scl_ifsc_no = $_POST['scl_ifsc_no'];
		$scl_brnch_nm = $_POST['scl_brnch_nm'];
		$admin_fnm = mysqli_escape_string($con, $_POST['admin_fnm']);
		$admin_mnm = mysqli_escape_string($con, $_POST['admin_mnm']);
		$admin_snm = mysqli_escape_string($con, $_POST['admin_snm']);
		$admin_bldgrp = $_POST['admin_bldgrp']; 
		$admin_gender = $_POST['admin_gender'];
		$a_dob = $_POST['a_dob'];
		$admin_add1 = mysqli_escape_string($con, $_POST['admin_add1']);
		$admin_add2 = mysqli_escape_string($con, $_POST['admin_add2']);
		$admin_floor = mysqli_escape_string($con, $_POST['admin_floor']);
		$admin_unit = mysqli_escape_string($con, $_POST['admin_unit']);
		$admin_soc_nm = mysqli_escape_string($con, $_POST['admin_soc_nm']);
		$admin_build_no = mysqli_escape_string($con, $_POST['admin_build_no']);
		$admin_ref_add = mysqli_escape_string($con, $_POST['admin_ref_add']);
		$admin_village = mysqli_escape_string($con, $_POST['admin_village']);
		$admin_taluka = mysqli_escape_string($con, $_POST['admin_taluka']);
		$admin_taluka_new = mysqli_escape_string($con, $_POST['admin_taluka_new']);
		$ad_country = $_POST['ad_country'];
		$ad_state = $_POST['ad_state'];
		$ad_city = $_POST['ad_city'];
		$admin_zip_code = $_POST['admin_zip_code'];
		if($_POST['tel_no'] != ""){
			$mob_co_code = $_POST['mob_co_code'];
			$mob_no = $_POST['mob_no'];
			$mobno = $mob_co_code.'-'.$mob_no;
		}else{
			$mobno = "";
		}
		$admin_email = $_POST['admin_email'];
		$admin_adhar_no = $_POST['admin_adhar_no'];
		$check_list = $_POST['check_list'];
			for ($i=0; $i<sizeof($check_list);$i++) {
				$langes .= $check_list[$i]. ",";
			}
			$language = rtrim($langes , ',');
		$mar_status = $_POST['mar_status'];
		$position = $_POST['position'];
		$scl_id = $_POST['scl_id'];
		$uniqueid_school = $_POST['schl_uid'];
	
		$pathSchool = "uploads/School/$uniqueid_school";
		$pathSchoolm = "../uploads/School/$uniqueid_school";
		//@mkdir($path,0777,true);
	
		$msg = "";   
		
		
		//if($regis1_takepic == ""){
			if((isset($_FILES['scl_reg_doc']['name'])) && $_FILES['scl_reg_doc']['name'] != ""){
				if (0 < $_FILES['scl_reg_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['scl_reg_doc']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm .'/' . $_FILES['scl_reg_doc']['name'])){
						$path1 = $pathSchool.'/' . $_FILES['scl_reg_doc']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['scl_reg_doc']['tmp_name'], $pathSchoolm. '/' . $_FILES['scl_reg_doc']['name']);
						$path1 = $pathSchool.'/' . $_FILES['scl_reg_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select schl_register_doc from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path1 = $crrow['schl_register_doc'];
			}
		/* }else{
			$path1 = $regis1_takepic;
		} */
		
		//if($regis2_takepic == ""){
			if((isset($_FILES['scl_reg_doc2']['name'])) && $_FILES['scl_reg_doc2']['name'] != "" ){
				if (0 < $_FILES['scl_reg_doc2']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['scl_reg_doc2']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm.'/' . $_FILES['scl_reg_doc2']['name'])){
						$path4 = $pathSchool.'/' . $_FILES['scl_reg_doc2']['name'];
						//echo 'File already exists : $path4';
					}else{
						move_uploaded_file($_FILES['scl_reg_doc2']['tmp_name'], $pathSchoolm.'/' . $_FILES['scl_reg_doc2']['name']);
						$path4 = $pathSchool.'/' . $_FILES['scl_reg_doc2']['name'];
					}
				}
			}else {
				$cr = $con->query("select schl_register_doc2 from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path4 = $crrow['schl_register_doc2'];
			}
		/* }else{
			$path4 = $regis2_takepic;
		} */
		
		//if($tax_takepic == ""){
			if((isset($_FILES['scl_tax_doc']['name'])) && $_FILES['scl_tax_doc']['name'] != "" ){
				if (0 < $_FILES['scl_tax_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['scl_tax_doc']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm.'/' . $_FILES['scl_tax_doc']['name'])){
						$path2 = $pathSchool.'/' . $_FILES['scl_tax_doc']['name'];
						//echo 'File already exists : $path2';
					}else{
						move_uploaded_file($_FILES['scl_tax_doc']['tmp_name'], $pathSchoolm.'/' . $_FILES['scl_tax_doc']['name']);
						$path2 = $pathSchool.'/' . $_FILES['scl_tax_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select schl_tax_doc from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path2 = $crrow['schl_tax_doc'];
			}
		/* }else{
			$path2 = $tax_takepic;
		} */
		
		//if($pan_takepic == ""){
			if((isset($_FILES['scl_pan_doc']['name'])) && $_FILES['scl_pan_doc']['name'] != ""){
				if (0 < $_FILES['scl_pan_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['scl_pan_doc']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm.'/' . $_FILES['scl_pan_doc']['name'])){
						$path3 = $pathSchool.'/' . $_FILES['scl_pan_doc']['name'];
						//echo 'File already exists : $path3';
					}else{
						move_uploaded_file($_FILES['scl_pan_doc']['tmp_name'], $pathSchoolm.'/' . $_FILES['scl_pan_doc']['name']);
						$path3 = $pathSchool.'/' . $_FILES['scl_pan_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select schl_pancard_doc from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path3 = $crrow['schl_pancard_doc'];
			}
		/* }else{
			$path3 = $pan_takepic;
		} */
		
		//if($add_takepic == ""){
			if((isset($_FILES['scl_add_proof']['name'])) && $_FILES['scl_add_proof']['name'] != ""){
				if (0 < $_FILES['scl_add_proof']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['scl_add_proof']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm.'/' . $_FILES['scl_add_proof']['name'])){
						$path5 = $pathSchool.'/' . $_FILES['scl_add_proof']['name'];
						//echo 'File already exists : $path5';
					}else{
						move_uploaded_file($_FILES['scl_add_proof']['tmp_name'], $pathSchoolm.'/' . $_FILES['scl_add_proof']['name']);
						$path5 = $pathSchool.'/' . $_FILES['scl_add_proof']['name'];
					}
				}
			}else {
				$cr = $con->query("select schl_add_proof from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path5 = $crrow['schl_add_proof'];
			}
		/* }else{
			$path5 = $add_takepic;
		} */
		
		//if($schoolpro_takepic == ""){
			$j = 0;
			$file_name_all[]="";
			$target_path = $pathSchool .'/';
			for ($i = 0; $i < count($_FILES['scl_pics']['name']); $i++) {
				$validextensions = array("jpeg", "jpg", "png");
				$ext = explode('.', basename($_FILES['scl_pics']['name'][$i]));
				$file_extension = end($ext);
				$basename=basename($_FILES['scl_pics']['name'][$i]);
				$target_path1 = $target_path .$basename;
				$j = $j + 1;     

				if (($_FILES["scl_pics"]["size"][$i] < (1024*1024)) && in_array($file_extension, $validextensions)) {
					if (move_uploaded_file($_FILES['scl_pics']['tmp_name'][$i], $target_path1)) { 
					$path6[] = $target_path1;
					} else {
						$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['scl_pics']['error'];
						echo "<script>window.location = 'school_edit.php';</script>";
					}
				} 
			}
			$picpath = join(",", $path6);
		/* }else{
			$picpath = $schoolpro_takepic;
		} */
		
		//if($logo_takepic == ""){
			if((isset($_FILES['scl_logo']['name'])) && $_FILES['scl_logo']['name'] != ""){
				if (0 < $_FILES['scl_logo']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['scl_logo']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm.'/' . $_FILES['scl_logo']['name'])){
						$path10 = $pathSchool.'/' . $_FILES['scl_logo']['name'];
						//echo 'File already exists : $path10';
					}else{
						move_uploaded_file($_FILES['scl_logo']['tmp_name'], $pathSchoolm.'/' . $_FILES['scl_logo']['name']);
						$path10 = $pathSchool.'/' . $_FILES['scl_logo']['name'];
					}
				}
			}else {
				$cr = $con->query("select schl_logo from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path10 = $crrow['schl_logo'];
			}
		/* }else{
			$path10 = $logo_takepic;
		} */
		
		//if($bank_takepic == ""){
			if((isset($_FILES['scl_bank_proof']['name'])) && $_FILES['scl_bank_proof']['name'] != ""){
				if (0 < $_FILES['scl_bank_proof']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['scl_bank_proof']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm.'/' . $_FILES['scl_bank_proof']['name'])){
						$path7 = $pathSchool.'/' . $_FILES['scl_bank_proof']['name'];
						//echo 'File already exists : $path7';
					}else{
						move_uploaded_file($_FILES['scl_bank_proof']['tmp_name'], $pathSchoolm.'/' . $_FILES['scl_bank_proof']['name']);
						$path7 = $pathSchool.'/' . $_FILES['scl_bank_proof']['name'];
					}
				}
			}else {
				$cr = $con->query("select schl_bankproof_doc from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path7 = $crrow['schl_bankproof_doc'];
			}
		/* }else{
			$path7 = $bank_takepic;
		} */
		
		//if($id_takepic == ""){
			if((isset($_FILES['admin_adhar_doc']['name'])) && $_FILES['admin_adhar_doc']['name']){
				if (0 < $_FILES['admin_adhar_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['admin_adhar_doc']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm.'/' . $_FILES['admin_adhar_doc']['name'])){
						$path9 = $pathSchool.'/' . $_FILES['admin_adhar_doc']['name'];
						//echo 'File already exists : $path9';
					}else{
						move_uploaded_file($_FILES['admin_adhar_doc']['tmp_name'], $pathSchoolm.'/' . $_FILES['admin_adhar_doc']['name']);
						$path9 = $pathSchool.'/' . $_FILES['admin_adhar_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select admin_adhardoc from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path9 = $crrow['admin_adhardoc'];
			}
		/* }else{
			$path9 = $id_takepic;
		} */
		
		//if($admin_takepic == ""){
			if((isset($_FILES['admin_pic']['name'])) && $_FILES['admin_pic']['name'] != ""){
				if (0 < $_FILES['admin_pic']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['admin_pic']['error'];
					echo "<script>window.location = 'school_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathSchoolm.'/' . $_FILES['admin_pic']['name'])){
						$path8 = $pathSchool.'/' . $_FILES['admin_pic']['name'];
						//echo 'File already exists : $path8';
					}else{
						move_uploaded_file($_FILES['admin_pic']['tmp_name'], $pathSchoolm.'/' . $_FILES['admin_pic']['name']);
						$path8 = $pathSchool.'/' . $_FILES['admin_pic']['name'];
					}
				}
			}else {
				$cr = $con->query("select admin_pic from school_register where schl_id = '$scl_id'");
				$crrow = mysqli_fetch_array($cr);
				$path8 = $crrow['admin_pic'];
			}
		/* }else{
			$path8 = $admin_takepic;
		} */
			       
			$schl_ins = $con->query("update `school_register` set `schl_nm` = '$scl_name', `schl_add1` = '$scl_add1', `schl_add2` = '$scl_add2', `schl_socnm` = '$scl_soc_nm', `schl_build_no` = '$scl_build_no', `schl_floor` = '$scl_floor',`schl_unit` = '$scl_unit', `schl_ref_add` = '$scl_ref_add', `schl_village` = '$scl_village', `schl_district` = '$scl_taluka',`schl_taluka` = '$scl_taluka_new', `schl_country` = '$country', `schl_state` = '$state',  `schl_city` = '$city', `schl_pin` = '$scl_zip_code', `schl_mobile` = '$mobileno', `schl_tele_no` = '$telephoneno', `schl_fax` = '$faxno', `schl_email` = '$scl_email',`schl_ngo` = '$scl_ngo_nm',`schl_volun` = '$scl_vol_nm',`schl_register_no` = '$scl_reg_no', `register_date` = '$d_reg', `schl_register_doc` = '$path1',`schl_register_no2` = '$scl_reg_no2',`schl_register_doc2` = '$path4',`schl_tax_no` = '$scl_tax_no',`schl_tax_doc` = '$path2',`schl_pancard_no` = '$scl_pan_no', `schl_pancard_doc` = '$path3', `schl_add_proof` = '$path5', `schl_pics` = '$picpath', `schl_no_staff` = '$no_staff',`schl_no_stud` = '$no_stud',`schl_avil_class` = '$avai_class',`schl_logo` = '$path10', `schl_wtgov_supp` = '$what_gov_supp', `wht_ngo_supp` = '$wht_supp_txt',`ngo_nm_supp` = '$ngo_nm_supp',`schl_acc_no` = '$scl_acc_no', `schl_holder_name` = '$scl_acc_nm',`schl_bank_nm` = '$scl_bank_nm', `schl_ifsc_code` = '$scl_ifsc_no', `schl_branch_name` = '$scl_brnch_nm', `schl_bankproof_doc` = '$path7', `admin_fnm` = '$admin_fnm', `admin_mnm` = '$admin_mnm', `admin_surnm` = '$admin_snm',`admin_blgrp` = '$admin_bldgrp',`admin_gender` = '$admin_gender',`admin_dob` = '$a_dob', `admin_mob` = '$mobno',`admin_email` = '$admin_email',`admin_add1` = '$admin_add1', `admin_add2` = '$admin_add2',`admin_sconm` = '$admin_soc_nm',`admin_socno` = '$admin_build_no',`admin_floor` = '$admin_floor',`admin_unit` = '$admin_unit',`admin_oth_ref` = '$admin_ref_add',`admin_village` = '$admin_village',`admin_district` = '$admin_taluka',`admin_taluka` = '$admin_taluka_new', `admin_country` = '$ad_country' , `admin_state` = '$ad_state' ,`admin_city` = '$ad_city', `admin_pincode` = '$admin_zip_code', `admin_pic` = '$path8', `admin_adharno` = '$admin_adhar_no', `admin_adhardoc` = '$path9',`admin_lang` = '$language', `martial_status` = '$mar_status',`admin_position` = '$position' where `schl_id` = $scl_id");
					  
		  
			
			if($schl_ins == 1){
				$_SESSION['ermsg'] =  'Data Update Successfully';
				echo "<script>window.location = 'school_edit.php';</script>";
			}else{
				$_SESSION['ermsg'] =  'Data Update Not Successfully';
			echo "<script>window.location = 'school_edit.php';</script>";
			} 
}

function edit_student(){
    global $con;
		$stud_fname = mysqli_escape_string($con, $_POST['stud_fname']);
		$stud_mname = mysqli_escape_string($con, $_POST['stud_mname']);
		$stud_lname = mysqli_escape_string($con, $_POST['stud_lname']);
		$full_nm = $stud_fname . $stud_lname;
		$bld_grp = $_POST['bld_grp'];
		$stud_gender = $_POST['stud_gender'];
		$stud_add1 = mysqli_escape_string($con, $_POST['stud_add1']);
		$stud_add2 = mysqli_escape_string($con, $_POST['stud_add2']);
		$stud_soc_nm = mysqli_escape_string($con, $_POST['stud_soc_nm']);
		$stud_build_no = mysqli_escape_string($con, $_POST['stud_build_no']);
		$stud_floor = mysqli_escape_string($con, $_POST['stud_floor']);
		$stud_unit = mysqli_escape_string($con, $_POST['stud_unit']);
		$stud_ref_add = mysqli_escape_string($con, $_POST['stud_ref_add']);
		$stud_village = mysqli_escape_string($con, $_POST['stud_village']);
		$stud_taluka = mysqli_escape_string($con, $_POST['stud_taluka']);
		$stud_taluka_new = mysqli_escape_string($con, $_POST['stud_taluka_new']);
		$country = $_POST['country'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$stud_zip_code = $_POST['stud_zip_code']; 
		if($_POST['st_co_no'] != ""){
			$st_c_code = $_POST['st_c_code'];
			$stud_co_no = $_POST['st_co_no'];
			$cono = $st_c_code.'-'.$stud_co_no;
		}else{
			$cono = "";
		}	
		if($_POST['st_tel_no'] != ""){
			$st_c_tel_no = $_POST['st_c_tel_no'];
			$st_a_tel_no = $_POST['st_a_tel_no'];
			$st_tel_no = $_POST['st_tel_no'];
			$teleno = $st_c_tel_no.'-'.$st_a_tel_no.'-'.$st_tel_no; 
		}else{
			$teleno = "";
		}	
		if($_POST['st_fax_no'] != ""){
			$st_c_fax_no = $_POST['st_c_fax_no'];
			$st_a_fax_no = $_POST['st_a_fax_no'];
			$st_fax_no = $_POST['st_fax_no'];
			$faxno = $st_c_fax_no.'-'.$st_a_fax_no.'-'.$st_fax_no;
		}else{
			$faxno = "";
		}	
	
		$stud_email = $_POST['stud_email'];
		$stud_dob = $_POST['stud_dob'];
		$country_work_1 = $_POST['ad_country'];
		$state_work_1 = $_POST['ad_state'];
		$state_city_1 = $_POST['ad_city'];
		$stud_vill = mysqli_escape_string($con, $_POST['stud_vill']);
		$stud_dist = mysqli_escape_string($con, $_POST['stud_dist']);
		$stud_btaluka = mysqli_escape_string($con, $_POST['stud_btaluka']);  
		$check_list = $_POST['check_list'];
			for ($i=0; $i<sizeof($check_list);$i++) {
				$langes .= $check_list[$i]. ",";
			}
		$stud_lang = rtrim($langes , ',');
		$stud_adhar_no = $_POST['stud_adhar_no'];
		$fath_fnm = mysqli_escape_string($con, $_POST['fath_fnm']);
		$fath_mnm = mysqli_escape_string($con, $_POST['fath_mnm']);
		$fath_snm = mysqli_escape_string($con, $_POST['fath_snm']);
		if($_POST['fath_mno'] != ""){
			$fath_c_code = $_POST['fath_c_code'];
			$fath_mno = $_POST['fath_mno'];
			$fathcono = $fath_c_code.'-'.$fath_mno;
		}else{
			$fathcono = "";
		}	
		
		$fath_dob = $_POST['fath_dob'];
		$fath_email = $_POST['fath_email'];
		$fath_educ = mysqli_escape_string($con, $_POST['fath_educ']);
		$fath_prof = mysqli_escape_string($con, $_POST['fath_prof']);
		$moth_fnm = mysqli_escape_string($con, $_POST['moth_fnm']);
		$moth_mnm = mysqli_escape_string($con, $_POST['moth_mnm']);
		$moth_snm = mysqli_escape_string($con, $_POST['moth_snm']);
		if($_POST['moth_mno'] != ""){
			$moth_c_code = $_POST['moth_c_code'];
			$moth_mno = $_POST['moth_mno'];
			$mothcono = $moth_c_code.'-'.$moth_mno;
		}else{
			$mothcono = "";
		}	
		
		$moth_dob = $_POST['moth_dob'];
		$moth_email = $_POST['moth_email'];
		$moth_educ = $_POST['moth_educ'];
		$moth_prof = $_POST['moth_prof'];
		$an_income = $_POST['an_income'];
		$spec_need = mysqli_escape_string($con, $_POST['spec_need']);
		$stud_schl_id = $_POST['stud_schl_id'];
		$sel_schl = $_POST['sel_schl'];
		$schl_add = $_POST['schl_add'];
		$sel_class = $_POST['sel_class'];
		$stud_board = $_POST['stud_board'];
		$stud_medium = $_POST['stud_medium'];
		$stud_id = $_POST['stud_id'];
		$ngo_refr = $_POST['sel_ngo'];
		$vol_refr = $_POST['sel_vol'];
		$oth_ref_nm = mysqli_escape_string($con, $_POST['othr_ref']);
		$uniqueid_stud = $_POST['stud_uniqe'];
		$id_takepic = $_POST['id_takepic'];
		$profile_takepic = $_POST['profile_takepic'];
		$sclid_takepic = $_POST['sclid_takepic'];
	
		$pathStudent = "uploads/Student/$uniqueid_stud";
		$pathStudentm = "../uploads/Student/$uniqueid_stud";
	
		//$path = "uploads/Student/$uniqueid_stud";
		//mkdir($path,0777,true);
	
		$msg = ""; 
		//print_r($_FILES);
		
		if($id_takepic == ""){
			if((isset($_FILES['stud_adhar_doc']['name'])) && ($_FILES['stud_adhar_doc']['name'] != '' )){
				if (0 < $_FILES['stud_adhar_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['stud_adhar_doc']['error'];
					echo "<script>window.location = 'student_edit.php';</script>";
				} 
				else { 
					if (file_exists($pathStudentm.'/' . $_FILES['stud_adhar_doc']['name'])){
						$path1 = $pathStudent.'/' . $_FILES['stud_adhar_doc']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['stud_adhar_doc']['tmp_name'], $pathStudentm.'/' . $_FILES['stud_adhar_doc']['name']);
						$path1 = $pathStudent.'/' . $_FILES['stud_adhar_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select stud_adhar_doc from student_register where stud_id = '$stud_id'");
				$crrow = mysqli_fetch_array($cr);
				$path1 = $crrow['stud_adhar_doc'];
			}
		}else{
			$path1 = $id_takepic;
		} 
		
		if($profile_takepic == ""){
			if((isset($_FILES['stud_pic']['name'])) && ($_FILES['stud_pic']['name'] != '' )){
				if (0 < $_FILES['stud_pic']['error']) { 
					$_SESSION['ermsg'] =  'Error during student picture upload' . $_FILES['stud_pic']['error'];
					echo "<script>window.location = 'student_edit.php'</script>";
				} 
				else { 
					if (file_exists($pathStudentm.'/' . $_FILES['stud_pic']['name'])){
						$path3 = $pathStudent.'/' . $_FILES['stud_pic']['name'];
						//echo 'File already exists : $path3';
					}else{
						move_uploaded_file($_FILES['stud_pic']['tmp_name'], $pathStudentm.'/' . $_FILES['stud_pic']['name']);
						$path3 = $pathStudent.'/' . $_FILES['stud_pic']['name'];
					}
				}
			}else {
				$cr = $con->query("select stud_pic from student_register where stud_id = '$stud_id'");
				$crrow = mysqli_fetch_array($cr);
				$path3 = $crrow['stud_pic'];
			}
		}else{
			$path3 = $profile_takepic;
		}
		
		if($sclid_takepic == ""){
			if((isset($_FILES['stud_id_doc']['name'])) && ($_FILES['stud_id_doc']['name'] != '' )){
				if (0 < $_FILES['stud_id_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during student id card upload' . $_FILES['stud_id_doc']['error'];
					echo "<script>window.location = 'student_edit.php'</script>";
				} 
				else { 
					if (file_exists($pathStudentm.'/' . $_FILES['stud_id_doc']['name'])){
						$path4 = $pathStudent.'/' . $_FILES['stud_id_doc']['name'];
						//echo 'File already exists : $path4';
					}else{
						move_uploaded_file($_FILES['stud_id_doc']['tmp_name'], $pathStudentm.'/' . $_FILES['stud_id_doc']['name']);
						$path4 = $pathStudent.'/' . $_FILES['stud_id_doc']['name'];
					}
				}
			}else {
				$cr = $con->query("select stud_adhar_doc from student_register where stud_id = '$stud_id'");
				$crrow = mysqli_fetch_array($cr);
				$path4 = $crrow['stud_adhar_doc'];
			}
		}else{
			$path4 = $sclid_takepic;
		}
		
					       
					$stud_edit = $con->query("update `student_register` set `stud_fnm` = '$stud_fname', `stud_mnm` = '$stud_mname',`stud_lnm` = '$stud_lname',`stud_bld_grp` = '$bld_grp',`stud_add1` = '$stud_add1',`stud_add2` = '$stud_add2',`stud_soc_nm` = '$stud_soc_nm',`stud_soc_no` = '$stud_build_no',`stud_floor` = '$stud_floor',`stud_unit` = '$stud_unit',`stud_othref` = '$stud_ref_add',`stud_village`  = '$stud_village',`stud_dist` = '$stud_taluka',`stud_taluka` ='$stud_taluka_new' ,`stud_country` = '$country',`stud_state` = '$state',`stud_city` = '$city',`stud_pincode` = '$stud_zip_code',`stud_teleno` = '$teleno',`stud_fax` = '$faxno',`stud_dob` = '$stud_dob',`stud_email` = '$stud_email',`stud_contact` = '$cono',`stud_gender` = '$stud_gender',`stud_pic` = '$path3',`stud_bcountry` = '$country_work_1',`stud_bstate` = '$state_work_1',`stud_bcity` = '$state_city_1',`stud_bvillage` = '$stud_vill',`stud_bdist` = '$stud_dist',`stud_btaluka` = '$stud_btaluka',`stud_lang` = '$stud_lang',`stud_adhar_no` = '$stud_adhar_no',`stud_adhar_doc` = '$path1',`stud_fath_fnm` = '$fath_fnm',`stud_fath_mnm` = '$fath_mnm',`stud_fath_lnm` = '$fath_snm',`stud_fath_mno` = '$fathcono',`stud_fath_dob` = '$fath_dob',`stud_fath_email` = '$fath_email',`stud_fath_edu` = '$fath_educ',`stud_fath_prof` = '$fath_prof',`stud_moth_fnm` = '$moth_fnm',`stud_moth_mnm` = '$moth_mnm',`stud_moth_lnm` = '$moth_snm',`stud_moth_mno` = '$mothcono',`stud_moth_dob` = '$moth_dob',`stud_moth_email` = '$moth_email',`stud_moth_edu` = '$moth_educ',`stud_moth_pro` = '$moth_prof',`ngo_add_ref` = '$ngo_refr',`vol_add_ref` = '$vol_refr',`oth_add_ref` = '$oth_ref_nm', `annual_income` = '$an_income',`stud_spec_need` = '$spec_need',`schl_idcard_no` = '$stud_schl_id',`schl_idcard_doc` = '$path4',`schl_name` = '$sel_schl',`schl_add` = '$schl_add',`stud_midium` = '$stud_medium',`stud_class` = '$sel_class',`stud_education_board` = '$stud_board' where stud_id = $stud_id");
					 
					//echo "update `student_register` set `stud_fnm` = '$stud_fname', `stud_mnm` = '$stud_mname',`stud_lnm` = '$stud_lname',`stud_bld_grp` = '$bld_grp',`stud_add1` = '$stud_add1',`stud_add2` = '$stud_add2',`stud_soc_nm` = '$stud_soc_nm',`stud_soc_no` = '$stud_build_no',`stud_floor` = '$stud_floor',`stud_unit` = '$stud_unit',`stud_othref` = '$stud_ref_add',`stud_village`  = '$stud_village',`stud_dist` = '$stud_taluka',`stud_country` = '$country',`stud_state` = '$state',`stud_city` = '$city',`stud_pincode` = '$stud_zip_code',`stud_teleno` = '$st_c_tel_no-$st_a_tel_no-$st_tel_no',`stud_fax` = '$st_c_fax_no-$st_a_fax_no-$st_fax_no',`stud_dob` = '$stud_dob',`stud_email` = '$stud_email',`stud_contact` = '$st_c_code-$stud_co_no',`stud_gender` = '$stud_gender',`stud_pic` = '$path3',`stud_bcountry` = '$country_work_1',`stud_bstate` = '$state_work_1',`stud_bcity` = '$state_city_1',`stud_bvillage` = '$stud_vill',`stud_bdist` = '$stud_dist',`stud_lang` = '$stud_lang',`stud_adhar_no` = '$stud_adhar_no',`stud_adhar_doc` = '$path1', `stud_panno` = '$stud_pan_no',`stud_pan_doc` = '$path2',`stud_fath_fnm` = '$fath_fnm',`stud_fath_mnm` = '$fath_mnm',`stud_fath_lnm` = '$fath_snm',`stud_fath_mno` = '$fath_mno',`stud_fath_dob` = '$fath_dob',`stud_fath_email` = '$fath_email',`stud_fath_edu` = '$fath_educ',`stud_fath_prof` = '$fath_prof',`stud_moth_fnm` = '$moth_fnm',`stud_moth_mnm` = '$moth_mnm',`stud_moth_lnm` = '$moth_snm',`stud_moth_mno` = '$moth_mno',`stud_moth_dob` = '$moth_dob',`stud_moth_email` = '$moth_email',`stud_moth_edu` = '$moth_educ',`stud_moth_pro` = '$moth_prof',`ngo_add_ref` = '$ngo_refr',`vol_add_ref` = '$vol_refr',`oth_add_ref` = '$oth_ref_nm', `annual_income` = '$an_income',`stud_spec_need` = '$spec_need',`schl_idcard_no` = '$stud_schl_id',`schl_idcard_doc` = '$path4',`schl_name` = '$sel_schl',`schl_add` = '$schl_add',`stud_midium` = '$stud_medium',`stud_class` = '$sel_class',`stud_education_board` = '$stud_board' where stud_id = $stud_id";
					

					
					//echo 'File successfully uploaded : uploads/Student/' . $_FILES['stud_pic']['name'];
					if($stud_edit == 1){
						$_SESSION['ermsg'] =  'Data Update Successfully';
						echo "<script>window.location = 'student_edit.php';</script>";
					}else{
						$_SESSION['ermsg'] =  'Data Update Not Successfully';
						echo "<script>window.location = 'student_edit.php';</script>";
					}
}

function result_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
	$stud_nm = $_POST['stud_nm'];
    $res_gred = $_POST['res_gred'];
    $res_year = $_POST['res_year'];
    $over_res = $_POST['over_res'];
    $stud_sess = $_POST['stud_sess'];
    $status = "1";
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	$sel = $con->query("select stud_id from student_register where stud_fnm = '$stud_nm'");
	$sid = mysqli_fetch_array($sel);
	$id = $sid['stud_id'];
	
   if($stud_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(stud_id like '%$id%') and ";
    }
    
    if($res_gred == ""){
        $veer .= "";
    } else {
        $veer .= "(grade like '%$res_gred%') and ";
    }
	
	if($res_year == ""){
        $veer .= "";
    } else {
        $veer .= "(year like '%$res_year%') and ";
    }
	
	if($over_res == ""){
        $veer .= "";
    } else {
        $veer .= "(overall_res like '%$over_res%') and ";
    }
	
	if($stud_sess == ""){
        $veer .= "";
    } else {
        $veer .= "stud_id = '$stud_sess' and ";
    }
	
	if($status == ""){
        $veer .= "";
    } else {
        $veer .= "status = '$status' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = "aca_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
    
    mysqli_set_charset($con, 'utf8');
    $stud_ac = $con->query("select aca_id,stud_id,grade,year,overall_res from student_academic_info $veer1  LIMIT $start, $per_page ");
	
    $msg = "";
    if(mysqli_num_rows($stud_ac) > 0){
        while($r = mysqli_fetch_array($stud_ac)){
			
			$st_id = $r['stud_id'];
			$stud = $con->query("select stud_fnm from student_register where stud_id = $st_id");
			while($r1 = mysqli_fetch_array($stud)){
				
			$msg .= '<tr>'; 
            $msg .= '<td style="width:2%;"><input type="checkbox" name="st_id[]" class="rowsf"  id="check'.$r["aca_id"].'" value="'.$r["aca_id"].'"></td>';      
            $msg .= '<td style="width:5%">'.$r['aca_id'].'</td>';     
            $msg .= '<td style="width:15%">'.$r1['stud_fnm'].'</td>'; 
            $msg .= '<td style="width:15%">'.$r["grade"].'</td>';
			$msg .= '<td style="width:15%">'.$r["year"].'</td>';
			$msg .= '<td style="width:15%">'.$r["overall_res"].'</td>';

			$msg .= '<td style="width:12%"> <i onclick="editbtn(';
            $msg .= "'".$r["aca_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["aca_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 10px;"></i>
						<i onclick="showimg('.$r["aca_id"].')" id="plus_'.$r["aca_id"].'" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 15px; text-align:right; cursor: pointer; margin-left: 10px;"></i>
                    </td>'; 
			
            $msg .= '</tr>';
						}
					}
				}else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }     
			mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM student_academic_info $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

           if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#364150;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con);  
}

function edit_result(){
    global $con;
	$res_id = $_POST['res_id'];
	$res_gred = $_POST['res_gred'];
	$res_year = $_POST['res_year'];
	$over_res = $_POST['over_res'];
	$sel_stud = $_POST['sel_stud'];
	
	$ed_res = $con->query("update `student_academic_info` set `stud_id` = '$sel_stud' , `grade` = '$res_gred',`year` ='$res_year',`overall_res` = '$over_res' where `aca_id` = '$res_id'");
	
	//echo "update `student_academic_info` set `grade` = '$res_gred',`year` ='$res_year',`overall_res` = '$over_res' where `aca_id` = '$res_id'";

	if($ed_res==1){
		echo "<script> window.location = 'stud_ecademic_list.php';</script>";
	}else{
		echo "0";
	}
}

function result_delete(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("update student_academic_info set `status` = '0' where aca_id IN($ids)");
    } else {
        $re = $con->query("update student_academic_info set `status` = '0'");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function staff_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
	$schl_nm = $_POST['schl_nm'];
    $s_fnm = $_POST['s_fnm'];
    $s_email = $_POST['s_email'];
    $s_type = $_POST['s_type'];
    $stf_sess = $_POST['stf_sess'];
    $ord_sort = $_POST['ord_sort'];
    $status = "1";
    $fields = $_POST['fields'];
    $veer = "";
    
	$sel = $con->query("select schl_id from school_register where schl_nm = '$schl_nm'");
	$rid = mysqli_fetch_array($sel);
	$id = $rid['schl_id'];
   if($schl_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(staff_schl_id like '%$id%') and ";
    }
    
    if($s_fnm == ""){
        $veer .= "";
    } else {
        $veer .= "(staff_fnm like '%$s_fnm%') and ";
    }
	
	if($s_email == ""){
        $veer .= "";
    } else {
        $veer .= "(staff_email like '%$s_email%') and ";
    }
	
	if($s_type == ""){
        $veer .= "";
    } else {
        $veer .= "(staff_type like '%$s_type%') and ";
    }
	
	if($stf_sess == ""){
        $veer .= "";
    } else {
        $veer .= "staff_schl_id = '$stf_sess' and ";
    }
	
	if($status == ""){
        $veer .= "";
    } else {
        $veer .= "status = '$status' and ";
    }
    
    if($fields == "" || $ord_sort == ""){
        $orderby = " staff_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
    
    mysqli_set_charset($con, 'utf8');
    $trust = $con->query("select staff_id,staff_fnm,staff_lnm,staff_mobile,staff_email,staff_type,staff_schl_id,schl_is_admin from staff_register $veer1  LIMIT $start, $per_page ");
	
    $msg = "";
    if(mysqli_num_rows($trust) > 0){
        while($r = mysqli_fetch_array($trust)){
			$sl_id = $r['staff_schl_id'];
			$ngo = $con->query("select schl_nm from school_register where schl_id = $sl_id");
			while($r1 = mysqli_fetch_array($ngo)){
			if($r["schl_is_admin"] == "0"){
				$sellected = "selected";
			}else{
				$sellected = "";
			}
			if($r["staff_mobile"] != ""){
				$mobile = $r["staff_mobile"];
			}else{
				$mobile = "";
			}
				
			$msg .= '<tr>'; 
            $msg .= '<td style="width:2%;"><input type="checkbox" name="st_id[]" class="rowsf"  id="check'.$r["staff_id"].'" value="'.$r["staff_id"].'"></td>';      
            $msg .= '<td style="width:5%">'.$r["staff_id"].'</td>';     
            $msg .= '<td style="width:14%">'.$r1["schl_nm"].'</td>';     
            $msg .= '<td style="width:15%">'.$r["staff_fnm"].'</td>';      
            $msg .= '<td style="width:15%">'.$r["staff_lnm"].'</td>'; 
            $msg .= '<td style="width:12%">'.$mobile.'</td>'; 
            $msg .= '<td style="width:15%">'.$r["staff_email"].'</td>';
			$msg .= '<td style="width:12%">'.$r["staff_type"].'</td>';
			$msg .= '<td><select onchange="changeisadmin(this.value,'.$r['staff_id'].')";><option value="1" '.$sellected.'>Yes</option><option value="0" '.$sellected.'>No</option></select></td>';
			$msg .= '<td style="width:13%"> <i onclick="editbtn(';
            $msg .= "'".$r["staff_id"]."'";
            $msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i>  
                        <i onclick="deletedbtn('.$r["staff_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 10px;"></i>
						<i onclick="showimg('.$r["staff_id"].')" id="plus_'.$r["staff_id"].'" class="fa fa-plus" aria-hidden="true" title="More" style="font-size: 15px; text-align:right; cursor: pointer; margin-left: 10px;"></i>
                    </td>'; 
			
            $msg .= '</tr>';
			}
        }
	} else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }     
			mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM staff_register $veer1";
			//echo "SELECT COUNT(*) AS count FROM ring $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

           if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#1e88e5;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con);  
}

function edit_staff(){
    global $con;
	$s_fnm = $_POST['s_fnm'];
	$s_lnm = $_POST['s_lnm'];
	$s_mno = $_POST['s_mno'];
	$s_email = $_POST['s_email'];
	$s_type = $_POST['s_type'];
	$sel_schl = $_POST['sel_schl'];
	$staff_id = $_POST['s_id'];
	
	$ed_trust = $con->query("update `staff_register` set `staff_schl_id` = '$sel_schl', `staff_fnm` = '$s_fnm',`staff_lnm` ='$s_lnm',`staff_mobile` = '$s_mno',`staff_email` ='$s_email',`staff_type` = '$s_type' where `staff_id` = '$staff_id'");
	
	if($ed_trust==1){
		echo "<script> window.location = 'staff_list.php';</script>";
	}else{
		echo "0";
	}
}

function staff_delete(){
    global $con;
    $ids = $_POST['id']; 
    if($ids){
        $re = $con->query("update staff_register set `status` = '0' where staff_id IN($ids) ");
    } else {
        $re = $con->query("update staff_register set `status` = '0'");
    }
    if($re == 1){
        echo 1;
    }else{
        echo 0;
    }
}

function pers_don_data(){
	global $con;
	$don_id = $_POST['dbid'];
	$msg = "";
	$spre = $con->query("select don_fnm,don_mnm,don_lnm,don_bldgrp,don_gender,don_add1,don_add2,don_soc_nm,don_soc_no,don_floor,don_unit,don_oth_ref,don_village,don_district,don_country,don_state,don_city,don_pincode,don_mono,don_teleno,don_fax,don_email,don_dob,don_lagu,don_adhar_no,don_pan_no from donor where don_id = '$don_id'");
		
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
		
		$msg .= $r["don_fnm"];
		$msg .= '~'.$r["don_mnm"];
		$msg .= '~'.$r["don_lnm"];
		$msg .= '~'.$r["don_bldgrp"];
		$msg .= '~'.$r["don_gender"];
		$msg .= '~'.$r["don_add1"];
		$msg .= '~'.$r["don_add2"];
		$msg .= '~'.$r["don_soc_nm"];
		$msg .= '~'.$r["don_soc_no"];
		$msg .= '~'.$r["don_floor"];
		$msg .= '~'.$r["don_unit"];
		$msg .= '~'.$r["don_oth_ref"];
		$msg .= '~'.$r["don_village"];
		$msg .= '~'.$r["don_district"];
		$msg .= '~'.$r["don_country"];
		$msg .= '~'.$r["don_state"];
		$msg .= '~'.$r["don_city"];
		$msg .= '~'.$r["don_pincode"];
		$msg .= '~'.$r["don_mono"];
		$msg .= '~'.$r["don_teleno"];
		$msg .= '~'.$r["don_fax"];
		$msg .= '~'.$r["don_email"];
		$msg .= '~'.$r["don_dob"];
		$msg .= '~'.$r["don_lagu"];
		$msg .= '~'.$r["don_adhar_no"];
		$msg .= '~'.$r["don_pan_no"];
	}
	echo $msg;
}

function corp_don_data(){
	global $con;
	$don_id = $_POST['dbid'];
	$msg = "";
	$spre = $con->query("select cdon_nm,cdon_add1,cdon_add2,cdon_soc_nm,cdon_soc_no,cdon_floor,cdon_unit,cdon_oth_ref,cdon_village,cdon_district,cdon_country,cdon_state,cdon_city,cdon_pincode,cdon_mono,cdon_teleno,cdon_faxno,cdon_email,cdon_regi_dt,cdon_regno,cdon_pan_no,cdon_profile,cdon_ngowebsite,admin_fnm,admin_mnm,admin_lnm,admin_email,admin_bldgrp,admin_gender,admin_dob,admin_mobile,admin_martial_st from donor where don_id = '$don_id'");
	
	if(mysqli_num_rows($spre) > 0){
		$r = mysqli_fetch_array($spre);
		
		$msg .= $r["cdon_nm"];
		$msg .= '~'.$r["cdon_add1"];
		$msg .= '~'.$r["cdon_add2"];
		$msg .= '~'.$r["cdon_soc_nm"];
		$msg .= '~'.$r["cdon_soc_no"];
		$msg .= '~'.$r["cdon_floor"];
		$msg .= '~'.$r["cdon_unit"];
		$msg .= '~'.$r["cdon_oth_ref"];
		$msg .= '~'.$r["cdon_village"];
		$msg .= '~'.$r["cdon_district"];
		$msg .= '~'.$r["cdon_country"];
		$msg .= '~'.$r["cdon_state"];
		$msg .= '~'.$r["cdon_city"];
		$msg .= '~'.$r["cdon_pincode"];
		$msg .= '~'.$r["cdon_mono"];
		$msg .= '~'.$r["cdon_teleno"];
		$msg .= '~'.$r["cdon_faxno"];
		$msg .= '~'.$r["cdon_email"];
		$msg .= '~'.$r["cdon_regi_dt"];
		$msg .= '~'.$r["cdon_regno"];
		$msg .= '~'.$r["cdon_pan_no"];
		$msg .= '~'.$r["cdon_profile"];
		$msg .= '~'.$r["cdon_ngowebsite"];
		$msg .= '~'.$r["admin_fnm"];
		$msg .= '~'.$r["admin_mnm"];
		$msg .= '~'.$r["admin_lnm"];
		$msg .= '~'.$r["admin_email"];
		$msg .= '~'.$r["admin_bldgrp"];
		$msg .= '~'.$r["admin_gender"];
		$msg .= '~'.$r["admin_dob"];
		$msg .= '~'.$r["admin_mobile"];
		$msg .= '~'.$r["admin_martial_st"];
	}
	echo $msg;
}

function edit_cdonor(){
    global $con;
		$corp_name = $_POST['corp_name'];    
		$corp_add1 = $_POST['corp_add1'];
		$corp_add2 = $_POST['corp_add2'];
		$corp_soc_nm = $_POST['corp_soc_nm'];
		$corp_build_no = $_POST['corp_build_no'];
		$corp_floor = $_POST['corp_floor'];
		$corp_unit = $_POST['corp_unit'];
		$corp_ref_add = $_POST['corp_ref_add'];
		$corp_village = $_POST['corp_village'];
		$corp_taluka = $_POST['corp_taluka'];
		$corp_country = $_POST['country'];
		$corp_state = $_POST['state'];
		$corp_city = $_POST['city'];
		$corp_zip_code = $_POST['corp_zip_code'];
		$mob_no = $_POST['mob_no'];
		$corp_co_no = $_POST['corp_co_no'];
		$corp_tel_no = $_POST['corp_tel_no'];
		$corp_a_tel_no = $_POST['corp_a_tel_no'];
		$corp_c_tel_no = $_POST['corp_c_tel_no'];
		$corp_fax_no = $_POST['corp_fax_no'];
		$corp_a_fax_no = $_POST['corp_a_fax_no'];
		$corp_c_fax_no = $_POST['corp_c_fax_no'];
		$corp_email = $_POST['corp_email'];
		$don_regdt = $_POST['don_regdt'];
		$corp_reg_no = $_POST['corp_reg_no'];
		$corp_pan_no = $_POST['corp_pan_no'];
		$corp_pro = $_POST['corp_pro'];
		$corp_site = $_POST['corp_site'];
		$admin_fnm = $_POST['admin_fnm'];
		$admin_mnm = $_POST['admin_mnm'];
		$admin_snm = $_POST['admin_snm'];
		$admin_email = $_POST['admin_email'];
		$admin_bldgrp = $_POST['admin_bldgrp'];
		$admin_gender = $_POST['admin_gender'];
		$a_dob = $_POST['a_dob'];
		$mobil_no = $_POST['mobil_no'];
		$mob_co_code = $_POST['mob_co_code'];
		$mar_status = $_POST['mar_status'];
		$cdon_id = $_POST['cdon_id'];
		$uniqueid_donor = $_POST['cdon_uid'];
	
		$path = "uploads/Donor/$uniqueid_donor";
		mkdir($path,0777,true);
	
		$msg = ""; 
		if ((isset($_FILES['corp_reg_doc']['name'])) && (isset($_FILES['corp_pan_doc']['name'])) && (isset($_FILES['corp_pic']['name'])) && (isset($_FILES['corp_logo']['name']))) { 
			if (0 < $_FILES['corp_reg_doc']['error']) { 
				echo 'Error during file upload' . $_FILES['corp_reg_doc']['error'];
			} 
			else { 
				if (file_exists('uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_reg_doc']['name'])){
					$path1 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_reg_doc']['name'];
					echo 'File already exists : $path1';
				}else if(file_exists('uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_pan_doc']['name'])){
					$path2 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_pan_doc']['name'];
					echo 'File already exists : $path2';
				}else if(file_exists('uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_pic']['name'])){
					$path3 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_pic']['name'];
					echo 'File already exists : $path3';
				}else if(file_exists('uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_logo']['name'])){
					$path4 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_logo']['name'];
					echo 'File already exists : $path4';
				}
				else {
					move_uploaded_file($_FILES['corp_reg_doc']['tmp_name'], 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_reg_doc']['name']);
					$path1 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_reg_doc']['name'];
					move_uploaded_file($_FILES['corp_pan_doc']['tmp_name'], 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_pan_doc']['name']);
					$path2 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_pan_doc']['name'];
					move_uploaded_file($_FILES['corp_pic']['tmp_name'], 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_pic']['name']);
					$path3 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_pic']['name'];
					move_uploaded_file($_FILES['corp_logo']['tmp_name'], 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_logo']['name']);
					$path3 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['corp_logo']['name'];
					           
					                                      
					$donor_ins = $con->query("update `donor` set `cdon_nm` = '$corp_name', `cdon_add1` = '$corp_add1', `cdon_add2` = '$corp_add2', `cdon_soc_nm` = '$corp_soc_nm', `cdon_soc_no` = '$corp_build_no', `cdon_floor` = '$corp_floor',  `cdon_unit` = '$corp_unit', `cdon_oth_ref` = '$corp_ref_add', `cdon_village` = '$corp_village', `cdon_district` = '$corp_taluka', `cdon_country` = '$corp_country' , `cdon_state` = '$corp_state',`cdon_city` = '$corp_city', `cdon_pincode` = '$corp_zip_code', `cdon_mono` = '$mob_no-$corp_co_no', `cdon_teleno` = '$corp_c_tel_no-$corp_a_tel_no-$corp_tel_no', `cdon_faxno` = '$corp_c_fax_no-$corp_a_fax_no-$corp_fax_no', `cdon_email` = '$corp_email',`cdon_regi_dt` = '$don_regdt', `cdon_regno` = '$corp_reg_no', `cdon_reg_doc` = '$path1', `cdon_pan_no` = '$corp_pan_no', `cdon_pan_doc` = '$path2', `cdon_profile` = '$corp_pro', `cdon_pic` = '$path3',`cdon_logo` = '$path4',`cdon_ngowebsite` = '$corp_site',`admin_fnm` = '$admin_fnm',`admin_mnm` = '$admin_mnm' , `admin_lnm` = '$admin_snm',`admin_email` = '$admin_email',`admin_bldgrp` = '$admin_bldgrp' , `admin_gender` = '$admin_gender', `admin_dob` = '$a_dob',`admin_mobile` = '$mobil_no-$mob_co_code',`admin_martial_st` = '$mar_status' where cdon_id = $cdon_id");   
					                                                  
					//echo "update `corporate_donor` set `cdon_nm` = '$corp_name', `cdon_add1` = '$corp_add1', `cdon_add2` = '$corp_add2', `cdon_soc_nm` = '$corp_soc_nm', `cdon_soc_no` = '$corp_build_no', `cdon_floor` = '$corp_floor',  `cdon_unit` = '$corp_unit', `cdon_oth_ref` = '$corp_ref_add', `cdon_village` = '$corp_village', `cdon_district` = '$corp_taluka', `cdon_country` = '$corp_country' , `cdon_state` = '$corp_state',`cdon_city` = '$corp_city', `cdon_pincode` = '$corp_zip_code', `cdon_mono` = '$mob_no-$corp_co_no', `cdon_teleno` = '$corp_c_tel_no-$corp_a_tel_no-$corp_tel_no', `cdon_faxno` = '$don_c_fax_no-$corp_a_fax_no-$corp_fax_no', `cdon_email` = '$corp_email', `cdon_regno` = '$corp_reg_no', `cdon_reg_doc` = '$path1', `cdon_pan_no` = '$corp_pan_no', `cdon_pan_doc` = '$path2', `cdon_profile` = '$corp_pro', `cdon_pic` = '$path3',`cdon_ngowebsite` = '$corp_site' where cdon_id = $cdon_id";
					
					//echo 'File successfully uploaded : uploads/Donor/' . $_FILES['do_adhar_doc']['name'];
					if($donor_ins == 1){
						echo "<script> window.location = 'index.php';</script>";
					}else{
						echo 0;
					}
				} 
			}
		}else{
			echo 'Please choose a file';
		}
}

function edit_pdonor(){
    global $con;
			$don_fname = $_POST['don_fname'];
			$don_mname = $_POST['don_mname'];
			$don_lname = $_POST['don_lname'];
			$don_bld_grp = $_POST['don_bldgrp'];
			$don_gender = $_POST['don_gender'];
			$don_add1 = $_POST['don_add1'];
			$don_add2 = $_POST['don_add2'];
			$don_soc_nm = $_POST['don_soc_nm'];
			$don_build_no = $_POST['don_build_no'];
			$don_floor = $_POST['don_floor'];
			$don_unit = $_POST['don_unit'];
			$don_ref_add = $_POST['don_ref_add'];
			$don_village = $_POST['don_village'];
			$don_taluka = $_POST['don_taluka'];
			$country = $_POST['country'];
			$state = $_POST['state'];
			$city = $_POST['city'];
			$don_zip_code = $_POST['don_zip_code'];   
			$mob_no = $_POST['don_c_code'];   
			$don_co_no = $_POST['don_co_no'];
			$don_tel_no = $_POST['don_tel_no'];
			$don_c_tel_no = $_POST['don_c_tel_no'];
			$don_a_tel_no = $_POST['don_a_tel_no']; 
			$don_fax_no = $_POST['don_fax_no'];   
			$don_c_fax_no = $_POST['don_c_fax_no'];   
			$don_a_fax_no = $_POST['don_a_fax_no'];
			$don_email = $_POST['don_email'];
			$don_dob = $_POST['don_dob'];
			$check_list = $_POST['check_list'];
			for ($i=0; $i<sizeof($check_list);$i++) {
				$langes .= $check_list[$i]. ",";
			}
			$don_lang = rtrim($langes , ',');
			$don_adhar_no = $_POST['don_adhar_no'];
			$don_pan_no = $_POST['don_pan_no'];
			$don_id = $_POST['pdon_id'];
			$uniqueid_donor = $_POST['don_uid'];
	
		$path = "uploads/Donor/$uniqueid_donor";
		//@mkdir($path,0777,true);
	
		$msg = ""; 
		if ((isset($_FILES['don_adhar_doc']['name'])) && (isset($_FILES['don_pan_doc']['name'])) && (isset($_FILES['don_pic']['name']))) { 
			if (0 < $_FILES['don_adhar_doc']['error']) { 
				echo 'Error during file upload' . $_FILES['don_adhar_doc']['error'];
			} 
			else { 
				if (file_exists('uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_adhar_doc']['name'])){
					$path1 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_adhar_doc']['name'];
					echo 'File already exists : $path1';
				}else if(file_exists('uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_pan_doc']['name'])){
					$path2 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_pan_doc']['name'];
					echo 'File already exists : $path2';
				}else if(file_exists('uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_pic']['name'])){
					$path3 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_pic']['name'];
					echo 'File already exists : $path3';
				}
				else {
					move_uploaded_file($_FILES['don_adhar_doc']['tmp_name'], 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_adhar_doc']['name']);
					$path1 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_adhar_doc']['name'];
					move_uploaded_file($_FILES['don_pan_doc']['tmp_name'], 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_pan_doc']['name']);
					$path2 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_pan_doc']['name'];
					move_uploaded_file($_FILES['don_pic']['tmp_name'], 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_pic']['name']);
					$path3 = 'uploads/Donor/'.$uniqueid_donor.'/' . $_FILES['don_pic']['name'];
					
					  
					$pdon_edit = $con->query("update `donor` set `don_fnm` = '$don_fname', `don_mnm` = '$don_mname', `don_lnm`  = '$don_lname',`don_bldgrp` = '$don_bld_grp',`don_gender` = '$don_gender', `don_add1` = '$don_add1', `don_add2` = '$don_add2', `don_soc_nm` = '$don_soc_nm', `don_soc_no` = '$don_build_no', `don_floor` = '$don_floor', `don_unit` = '$don_unit', `don_oth_ref` = '$don_ref_add', `don_village` = '$don_village', `don_district` = '$don_taluka', `don_country` = '$country', `don_state` = '$state',`don_city` = '$city', `don_pincode` = '$don_zip_code', `don_mono` = '$mob_no-$don_co_no', `don_teleno` = '$don_c_tel_no-$don_a_tel_no-$don_tel_no', `don_fax` = '$don_c_fax_no-$don_a_fax_no-$don_fax_no', `don_email` = '$don_email', `don_dob` = '$don_dob', `don_lagu` = '$don_lang', `don_adhar_no` = '$don_adhar_no', `don_adhar_doc` = '$path1',`don_pan_no` = '$don_pan_no',`don_pan_doc` = '$path2',`don_pic` = '$path3' where don_id = $don_id");
					                                                  
					//echo "update `donor` set `don_fnm` = '$don_fname', `don_mnm` = '$don_mname', `don_lnm`  = '$don_lname',`don_bldgrp` = '$don_bld_grp',`don_gender` = '$don_gender', `don_add1` = '$don_add1', `don_add2` = '$don_add2', `don_soc_nm` = '$don_soc_nm', `don_soc_no` = '$don_build_no', `don_floor` = '$don_floor', `don_unit` = '$don_unit', `don_oth_ref` = '$don_ref_add', `don_village` = '$don_village', `don_district` = '$don_taluka', `don_country` = '$country', `don_state` = '$state',`don_city` = '$city', `don_pincode` = '$don_zip_code', `don_mono` = '$mob_no-$don_co_no', `don_teleno` = '$don_c_tel_no-$don_a_tel_no-$don_tel_no', `don_fax` = '$don_c_fax_no-$don_a_fax_no-$don_fax_no', `don_email` = '$don_email', `don_dob` = '$don_dob', `don_lagu` = '$don_lang', `don_adhar_no` = '$don_adhar_no', `don_adhar_doc` = '$path1',`don_pan_no` = '$don_pan_no',`don_pan_doc` = '$path2',`don_pic` = '$path3' where don_id = $don_id"; 
					
					//echo 'File successfully uploaded : uploads/Donor/' . $_FILES['do_adhar_doc']['name'];
					if($pdon_edit == 1){
						echo "<script> window.location = 'index.php';</script>";
					}else{
						echo 0;
					}
				} 
			}
		}else{
			echo 'Please choose a file';
		}
}

function corp_ven_data(){
	global $con;
	$ven_id = $_POST['dbid'];
	$msg = "";
	$spre = $con->query("select cven_nm,cven_add1,cven_add2,cven_soc_nm,cven_soc_no,cven_floor,cven_unit,cven_oth_ref,cven_village,cven_district,cven_taluka,cven_country,cven_state,cven_city,cven_pincode,cven_mono,cven_teleno,cven_faxno,cven_email,cven_reg,cven_pan_no,cven_profile,cven_ngowebsite,cven_ngo_ref,cven_vol_ref,cven_other_ref,cven_acc_nm,cven_branch_nm,cven_acc_no,cven_bnk_nm,cven_ifsc_code,admin_fnm,admin_lnm,admin_mnm,admin_email, `admin_bld_grp`, `admin_gender`, `admin_dob`, `admin_mobile`, `admin_pic`, `admin_add1` ,`admin_add2` ,`admin_sconm`, `admin_socno`, `admin_floor`, `admin_unit`, `admin_oth_ref`, `admin_village`,`admin_district`, `admin_taluka`,`admin_cont`, `admin_state`, `admin_city`, `admin_pin`,`admin_adharno`, `admin_adhardoc`, `language_spk`, `martial_status`,`cven_reg_date`, `admin_position`,ven_uid from vendor where ven_id = '$ven_id'");
	
	if(mysqli_num_rows($spre) > 0){
		$r = mysqli_fetch_array($spre);
		
		$msg .= $r["cven_nm"];
		$msg .= '~'.$r["cven_add1"];
		$msg .= '~'.$r["cven_add2"];
		$msg .= '~'.$r["cven_soc_nm"];
		$msg .= '~'.$r["cven_soc_no"];
		$msg .= '~'.$r["cven_floor"];
		$msg .= '~'.$r["cven_unit"];
		$msg .= '~'.$r["cven_oth_ref"];
		$msg .= '~'.$r["cven_village"];
		$msg .= '~'.$r["cven_district"];
		$msg .= '~'.$r["cven_taluka"];
		$msg .= '~'.$r["cven_country"];
		$msg .= '~'.$r["cven_state"];
		$msg .= '~'.$r["cven_city"];
		$msg .= '~'.$r["cven_pincode"];
		$msg .= '~'.$r["cven_mono"];
		$msg .= '~'.$r["cven_teleno"];
		$msg .= '~'.$r["cven_faxno"];
		$msg .= '~'.$r["cven_email"];
		$msg .= '~'.$r["cven_reg_date"];
		$msg .= '~'.$r["cven_reg"];
		$msg .= '~'.$r["cven_pan_no"];
		$msg .= '~'.$r["cven_profile"];
		$msg .= '~'.$r["cven_ngowebsite"];
		$msg .= '~'.$r["cven_ngo_ref"]; 
		$msg .= '~'.$r["cven_vol_ref"];
		$msg .= '~'.$r["cven_other_ref"];
		$msg .= '~'.$r["cven_acc_nm"];
		$msg .= '~'.$r["cven_branch_nm"];
		$msg .= '~'.$r["cven_acc_no"];
		$msg .= '~'.$r["cven_bnk_nm"];
		$msg .= '~'.$r["cven_ifsc_code"];
		$msg .= '~'.$r["admin_fnm"];
		$msg .= '~'.$r["admin_mnm"];
		$msg .= '~'.$r["admin_lnm"];
		$msg .= '~'.$r["admin_email"];
		$msg .= '~'.$r["admin_bld_grp"];
		$msg .= '~'.$r["admin_gender"];
		$msg .= '~'.$r["admin_dob"];
		$msg .= '~'.$r["admin_mobile"];
		$msg .= '~'.$r["admin_add1"];
		$msg .= '~'.$r["admin_add2"];
		$msg .= '~'.$r["admin_sconm"];
		$msg .= '~'.$r["admin_socno"];
		$msg .= '~'.$r["admin_floor"];
		$msg .= '~'.$r["admin_unit"];
		$msg .= '~'.$r["admin_oth_ref"];
		$msg .= '~'.$r["admin_village"];
		$msg .= '~'.$r["admin_district"];
		$msg .= '~'.$r["admin_taluka"];
		$msg .= '~'.$r["admin_cont"];
		$msg .= '~'.$r["admin_state"];
		$msg .= '~'.$r["admin_city"];
		$msg .= '~'.$r["admin_pin"];
		$msg .= '~'.$r["admin_adharno"];
		$msg .= '~'.$r["language_spk"];
		$msg .= '~'.$r["martial_status"];
		$msg .= '~'.$r["admin_position"];
		$msg .= '~'.$r["ven_uid"];
	}
	echo $msg;
}
function edit_cvendor(){
    global $con;
		$corp_name = $_POST['corp_name'];    
		$corp_add1 = $_POST['corp_add1'];
		$corp_add2 = $_POST['corp_add2'];
		$corp_soc_nm = $_POST['corp_soc_nm'];
		$corp_build_no = $_POST['corp_build_no'];
		$corp_floor = $_POST['corp_floor'];
		$corp_unit = $_POST['corp_unit'];
		$corp_ref_add = $_POST['corp_ref_add'];
		$corp_village = $_POST['corp_village'];
		$corp_taluka = $_POST['corp_taluka'];
		$corp_taluka_new = $_POST['corp_taluka_new'];
		$corp_country = $_POST['country'];
		$corp_state = $_POST['state'];
		$corp_city = $_POST['city'];
		$corp_zip_code = $_POST['corp_zip_code'];
		if($_POST['corp_co_no'] != ""){
			$mob_no = $_POST['mob_no'];
			$corp_co_no = $_POST['corp_co_no'];
			$corpomobile = $mob_no.'-'.$corp_co_no;
		}else{
			$corpomobile = "";
		}
		if($_POST['corp_tel_no'] != ""){
			$corp_tel_no = $_POST['corp_tel_no'];
			$corp_a_tel_no = $_POST['corp_a_tel_no'];
			$corp_c_tel_no = $_POST['corp_c_tel_no'];
			$corpteleno = $corp_c_tel_no.'-'.$corp_a_tel_no.'-'.$corp_tel_no;  
		}else{
			$corpteleno = "";
		}
		if($_POST['corp_fax_no'] != ""){
			$corp_fax_no = $_POST['corp_fax_no'];
			$corp_a_fax_no = $_POST['corp_a_fax_no'];
			$don_c_fax_no = $_POST['corp_c_fax_no'];
			$corpfaxno = $don_c_fax_no.'-'.$corp_a_fax_no.'-'.$corp_fax_no;
		}else{
			$corpfaxno = "";
		}
		
		$corp_email = $_POST['corp_email'];
		$dt_reg = $_POST['dt_reg'];
		$corp_reg_no = $_POST['corp_reg_no'];
		$corp_pan_no = $_POST['corp_pan_no'];
		$corp_pro = $_POST['corp_pro'];
		$corp_site = $_POST['corp_site'];
		$c_acc_nm = $_POST['c_acc_nm'];
		$c_brnch_nm = $_POST['c_brnch_nm'];
		$c_acc_no = $_POST['c_acc_no'];
		$c_bank_nm = $_POST['c_bank_nm'];
		$c_ifsc_no = $_POST['c_ifsc_no'];
		$admin_fnm = $_POST['admin_fnm'];
		$admin_mnm = $_POST['admin_mnm'];
		$admin_snm = $_POST['admin_snm'];
		$admin_email = $_POST['admin_email'];
		$admin_bldgrp = $_POST['admin_bldgrp'];
		$admin_gender = $_POST['admin_gender'];
		$a_dob = $_POST['a_dob'];
		if($_POST['mob_co_code'] != ""){
			$mobil_no = $_POST['mobil_no'];
			$mob_co_code = $_POST['mob_co_code'];
			$mobileno = $mobil_no.'-'.$mob_co_code;
		}else{
			$mobileno = "";
		}
		
		$admin_floor = $_POST['admin_floor'];
		$admin_unit = $_POST['admin_unit'];
		$admin_soc_nm = $_POST['admin_soc_nm'];
		$admin_build_no = $_POST['admin_build_no'];
		$admin_add1 = $_POST['admin_add1'];
		$admin_add2 = $_POST['admin_add2'];
		$admin_ref_add = $_POST['admin_ref_add'];
		$admin_village = $_POST['admin_village'];
		$admin_taluka_new = $_POST['admin_taluka_new'];
		$admin_taluka = $_POST['admin_taluka'];
		$ad_country = $_POST['country_work_1']; 
		$ad_state = $_POST['state_work_1'];
		$ad_city = $_POST['state_city_1'];
		$admin_zip_code = $_POST['admin_zip_code'];
		$admin_adhar_no = $_POST['admin_adhar_no'];
		$check_list = $_POST['check_list'];
		for ($i=0; $i<sizeof($check_list);$i++) {
			$langes .= $check_list[$i]. ",";
		}
		$langes = rtrim($langes , ','); 
		$mar_status = $_POST['mar_status'];
		$ven_position = $_POST['ven_position'];
		$ngo_refr1 = $_POST['sel_ngo'];
		$vol_refr1 = $_POST['sel_vol'];
		$oth_ref_nm1 = $_POST['oth_ref_nm'];
		$cven_id = $_POST['cven_id'];
		$uniqueid_vendor = $_POST['cven_uid'];
	echo $uniqueid_vendor;
		$path = "uploads/Vendor/$uniqueid_vendor";
		//@mkdir($path,0777,true);
	
		$msg = ""; 
		
		if((isset($_FILES['corp_reg_doc']['name'])) && $_FILES['corp_reg_doc']['name'] != '' ){
				if (0 < $_FILES['corp_reg_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['corp_reg_doc']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_reg_doc']['name'])){
						$path1 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_reg_doc']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['corp_reg_doc']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_reg_doc']['name']);
						$path1 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_reg_doc']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select cven_reg_doc from vendor where ven_id = '$cven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path1= $crrow['cven_reg_doc'];
			}
	
			if((isset($_FILES['corp_pan_doc']['name'])) && $_FILES['corp_pan_doc']['name'] != '' ){
				if (0 < $_FILES['corp_pan_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['corp_pan_doc']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_pan_doc']['name'])){
						$path2 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_pan_doc']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['corp_pan_doc']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_pan_doc']['name']);
						$path2 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_pan_doc']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select cven_pan_doc from vendor where ven_id = '$cven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path2= $crrow['cven_pan_doc'];
			}
			
			if((isset($_FILES['corp_pic']['name'])) && $_FILES['corp_pic']['name'] != '' ){
				if (0 < $_FILES['corp_pic']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['corp_pic']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_pic']['name'])){
						$path3 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_pic']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['corp_pic']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_pic']['name']);
						$path3 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_pic']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select cven_pic from vendor where ven_id = '$cven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path3= $crrow['cven_pic'];
			}
			
			if((isset($_FILES['corp_logo']['name'])) && $_FILES['corp_logo']['name'] != '' ){
				if (0 < $_FILES['corp_logo']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['corp_logo']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_logo']['name'])){
						$path4 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_logo']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['corp_logo']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_logo']['name']);
						$path4 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['corp_logo']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select cven_logo from vendor where ven_id = '$cven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path4= $crrow['cven_logo'];
			}
			
			if((isset($_FILES['c_bank_proof']['name'])) && $_FILES['c_bank_proof']['name'] != '' ){
				if (0 < $_FILES['c_bank_proof']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['c_bank_proof']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['c_bank_proof']['name'])){
						$path5 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['c_bank_proof']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['c_bank_proof']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['c_bank_proof']['name']);
						$path5 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['c_bank_proof']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select cven_bank_proof from vendor where ven_id = '$cven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path5= $crrow['cven_bank_proof'];
			}
			
			if((isset($_FILES['admin_adhar_doc']['name'])) && $_FILES['admin_adhar_doc']['name'] != '' ){
				if (0 < $_FILES['admin_adhar_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['admin_adhar_doc']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['admin_adhar_doc']['name'])){
						$path6 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['admin_adhar_doc']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['admin_adhar_doc']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['admin_adhar_doc']['name']);
						$path6 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['admin_adhar_doc']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select admin_adhardoc from vendor where ven_id = '$cven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path6= $crrow['admin_adhardoc'];
			}
			
			if((isset($_FILES['admin_pic']['name'])) && $_FILES['admin_pic']['name'] != '' ){
				if (0 < $_FILES['admin_pic']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['admin_pic']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['admin_pic']['name'])){
						$path7 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['admin_pic']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['admin_pic']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['admin_pic']['name']);
						$path7 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['admin_pic']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select admin_pic from vendor where ven_id = '$cven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path7= $crrow['admin_pic'];
			}
					
					$vendor_edit = $con->query("update `vendor` set `cven_nm` = '$corp_name', `cven_add1` = '$corp_add1', `cven_add2` = '$corp_add2', `cven_soc_nm` = '$corp_soc_nm', `cven_soc_no` = '$corp_build_no', `cven_floor` = '$corp_floor',  `cven_unit` = '$corp_unit', `cven_oth_ref` = '$corp_ref_add', `cven_village` = '$corp_village', `cven_district` = '$corp_taluka',`cven_taluka` = '$corp_taluka_new', `cven_country` = '$corp_country' , `cven_state` = '$corp_state',`cven_city` = '$corp_city', `cven_pincode` = '$corp_zip_code', `cven_mono` = '$corpomobile', `cven_teleno` = '$corpteleno', `cven_faxno` = '$corpfaxno', `cven_email` = '$corp_email',`cven_reg_date` = '$dt_reg', `cven_reg` = '$corp_reg_no', `cven_reg_doc` = '$path1', `cven_pan_no` = '$corp_pan_no', `cven_pan_doc` = '$path2', `cven_profile` = '$corp_pro', `cven_pic` = '$path3',`cven_logo` = '$path4',`cven_ngowebsite` = '$corp_site', `cven_ngo_ref` = '$ngo_refr1', `cven_vol_ref` = '$vol_refr1', `cven_other_ref` = '$oth_ref_nm1', `cven_acc_nm` = '$c_acc_nm', `cven_branch_nm` = '$c_brnch_nm', `cven_acc_no` = '$c_acc_no', `cven_bnk_nm` = '$c_bank_nm', `cven_ifsc_code` = '$c_ifsc_no', `cven_bank_proof` = '$path5', `admin_fnm` = '$admin_fnm', `admin_mnm` = '$admin_mnm', `admin_lnm` = '$admin_snm', `admin_email` = '$admin_email', `admin_bld_grp` = '$admin_bldgrp', `admin_gender` = '$admin_gender', `admin_dob` = '$a_dob', `admin_mobile` = '$mobileno', `admin_pic` = '$path7', `admin_add1` = '$admin_add1' ,`admin_add2` = '$admin_add2' ,`admin_sconm` = '$admin_soc_nm', `admin_socno` = '$admin_build_no', `admin_floor` = '$admin_floor', `admin_unit` = '$admin_unit', `admin_oth_ref` = '$admin_ref_add', `admin_village` = '$admin_village',`admin_district` = '$admin_taluka', `admin_taluka` = '$admin_taluka_new',`admin_cont` = '$ad_country', `admin_state` = '$ad_state', `admin_city` = '$ad_city', `admin_pin` = '$admin_zip_code',`admin_adharno` = '$admin_adhar_no', `admin_adhardoc` = '$path6', `language_spk` = '$langes', `martial_status` = '$mar_status', `admin_position` = '$ven_position' where ven_id = $cven_id");  
					       
					//echo 'File successfully uploaded : uploads/Donor/' . $_FILES['do_adhar_doc']['name'];
					if($vendor_edit == 1){
						echo "<script> window.location = 'index.php';</script>";
					}else{
						echo 0;
					}
}

function pers_ven_data(){
	global $con;
	$ven_id = $_POST['dbid'];
	$msg = "";
	$spre = $con->query("select ven_fnm,ven_mnm,ven_lnm,ven_bldgrp,ven_gender,ven_taluka,ven_add1,ven_add2,ven_soc_nm,ven_soc_no,ven_floor,ven_unit,ven_oth_ref,ven_village,ven_district,ven_country,ven_state,ven_city,ven_pincode,ven_mono,ven_teleno,ven_fax,ven_email,ven_dob,ven_lang,ven_adhar_no,ven_pan_no,ven_uid,ven_id,ngo_ref_nm,vol_ref_nm,other_ref_nm,acc_hl_nm,branch_nm,bank_nm,acc_no,ifsc_code from vendor where ven_id = '$ven_id'");
		
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			$cid = $r['ven_country'];
		$rq = $con->query("select * from states where country_id = $cid");
		$id = "";
		while($drq = mysqli_fetch_array($rq)){
			$id .= "<option value='".$drq['id']."'>".$drq['name']."</option>";
		}
		$msg .= $r["ven_fnm"];
		$msg .= '~'.$r["ven_mnm"];
		$msg .= '~'.$r["ven_lnm"];
		$msg .= '~'.$r["ven_bldgrp"];
		$msg .= '~'.$r["ven_gender"];
		$msg .= '~'.$r["ven_add1"];
		$msg .= '~'.$r["ven_add2"];
		$msg .= '~'.$r["ven_soc_nm"];
		$msg .= '~'.$r["ven_soc_no"];
		$msg .= '~'.$r["ven_floor"];
		$msg .= '~'.$r["ven_unit"];
		$msg .= '~'.$r["ven_oth_ref"];
		$msg .= '~'.$r["ven_village"];
		$msg .= '~'.$r["ven_district"];
		$msg .= '~'.$r["ven_taluka"];
		$msg .= '~'.$r["ven_country"];
		$msg .= '~'.$r["ven_state"];
		$msg .= '~'.$r["ven_city"];
		$msg .= '~'.$r["ven_pincode"];
		$msg .= '~'.$r["ven_mono"];
		$msg .= '~'.$r["ven_teleno"];
		$msg .= '~'.$r["ven_fax"];
		$msg .= '~'.$r["ven_email"];
		$msg .= '~'.$r["ven_dob"];
		$msg .= '~'.$r["ven_lang"];
		$msg .= '~'.$r["ven_adhar_no"];
		$msg .= '~'.$r["ven_pan_no"];
		$msg .= '~'.$r["ngo_ref_nm"];
		$msg .= '~'.$r["vol_ref_nm"];
		$msg .= '~'.$r["other_ref_nm"];
		$msg .= '~'.$r["acc_hl_nm"];
		$msg .= '~'.$r["branch_nm"];
		$msg .= '~'.$r["bank_nm"];
		$msg .= '~'.$r["acc_no"];
		$msg .= '~'.$r["ifsc_code"];
		$msg .= '~'.$r["ven_uid"];
	}
	echo $msg;
}

function edit_pvendor(){
    global $con;
			$ven_fname = $_POST['ven_fname'];
			$ven_mname = $_POST['ven_mname'];
			$ven_lname = $_POST['ven_lname'];
			$ven_bld_grp = $_POST['ven_bldgrp'];
			$ven_gender = $_POST['ven_gender'];
			$ven_add1 = $_POST['ven_add1'];
			$ven_add2 = $_POST['ven_add2'];
			$ven_soc_nm = $_POST['ven_soc_nm'];
			$ven_build_no = $_POST['ven_build_no'];
			$ven_floor = $_POST['ven_floor'];
			$ven_unit = $_POST['ven_unit'];
			$ven_ref_add = $_POST['ven_ref_add'];
			$ven_village = $_POST['ven_village'];
			$ven_taluka = $_POST['ven_taluka'];
			$taluka_new = $_POST['taluka_new'];
			$country = $_POST['country'];
			$state = $_POST['state'];
			$city = $_POST['city'];
			$ven_zip_code = $_POST['ven_zip_code']; 
			if($_POST['ven_co_no'] != ""){
				$ven_c_code = $_POST['ven_c_code'];   
				$ven_co_no = $_POST['ven_co_no'];
				$cono = $ven_c_code.'-'.$ven_co_no;
			}else{
				$cono = "";
			}
			if($_POST['ven_tel_no'] != ""){
				$ven_tel_no = $_POST['ven_tel_no'];
				$ven_c_tel_no = $_POST['ven_c_tel_no'];
				$ven_a_tel_no = $_POST['ven_a_tel_no']; 
				$teleno = $ven_c_tel_no.'-'.$ven_a_tel_no.'-'.$ven_tel_no; 
			}else{
				$teleno = "";
			}
			if($_POST['ven_fax_no'] != ""){
				$ven_fax_no = $_POST['ven_fax_no'];   
				$ven_c_fax_no = $_POST['ven_c_fax_no'];   
				$ven_a_fax_no = $_POST['ven_a_fax_no'];
				$faxno = $ven_c_fax_no.'-'.$ven_a_fax_no.'-'.$ven_fax_no;
			}else{
				$faxno = "";
			}
		
			$ven_email = $_POST['ven_email'];
			$ven_dob = $_POST['ven_dob'];
			$check_list = $_POST['check_list'];
			for ($i=0; $i<sizeof($check_list);$i++) {
				$langes .= $check_list[$i]. ",";
			}
			$langes = rtrim($langes , ',');
			$ven_adhar_no = $_POST['ven_adhar_no'];
			$ven_pan_no = $_POST['ven_pan_no'];
			$sel_ngo = $_POST['sel_ngo']; 
			$sel_vol = $_POST['sel_vol'];
			$oth_ref_nm = $_POST['oth_ref_nm'];
			$acc_nm = $_POST['acc_nm'];
			$brnch_nm = $_POST['brnch_nm'];
			$acc_no = $_POST['acc_no'];
			$bank_nm = $_POST['bank_nm'];
			$ifsc_no = $_POST['ifsc_no'];
			$ven_id = $_POST['pven_id'];
			$uniqueid_vendor = $_POST['pven_uid'];
	
		$path = "uploads/Vendor/$uniqueid_vendor";
		//@mkdir($path,0777,true);
		
			if((isset($_FILES['ven_adhar_doc']['name'])) && $_FILES['ven_adhar_doc']['name'] != '' ){
				if (0 < $_FILES['ven_adhar_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['ven_adhar_doc']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_adhar_doc']['name'])){
						$path1 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_adhar_doc']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['ven_adhar_doc']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_adhar_doc']['name']);
						$path1 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_adhar_doc']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select ven_ahdar_doc from vendor where ven_id = '$ven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path1= $crrow['ven_ahdar_doc'];
			}
			
			if((isset($_FILES['ven_pan_doc']['name'])) && $_FILES['ven_pan_doc']['name'] != '' ){
				if (0 < $_FILES['ven_pan_doc']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['ven_pan_doc']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_pan_doc']['name'])){
						$path2 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_pan_doc']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['ven_pan_doc']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_pan_doc']['name']);
						$path2 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_pan_doc']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select ven_pan_doc from vendor where ven_id = '$ven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path2= $crrow['ven_pan_doc'];
			}
			
			if((isset($_FILES['ven_pic']['name'])) && $_FILES['ven_pic']['name'] != '' ){
				if (0 < $_FILES['ven_pic']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['ven_pic']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_pic']['name'])){
						$path3 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_pic']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['ven_pic']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_pic']['name']);
						$path3 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['ven_pic']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select ven_pic from vendor where ven_id = '$ven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path3= $crrow['ven_pic'];
			}
			
			if((isset($_FILES['bank_proof']['name'])) && $_FILES['bank_proof']['name'] != '' ){
				if (0 < $_FILES['bank_proof']['error']) { 
					$_SESSION['ermsg'] =  'Error during file upload' . $_FILES['bank_proof']['error'];
					echo "<script>window.location = 'ngo_edit.php';</script>";
				} 
				else { 
					if (file_exists('../uploads/Vendor/'.$uniqueid.'/' . $_FILES['bank_proof']['name'])){
						$path4 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['bank_proof']['name'];
						//echo 'File already exists : $path1';
					}else{
						move_uploaded_file($_FILES['bank_proof']['tmp_name'], '../uploads/Vendor/'.$uniqueid.'/' . $_FILES['bank_proof']['name']);
						$path4 = 'uploads/Vendor/'.$uniqueid.'/' . $_FILES['bank_proof']['name'];
					}
				}
			}
			else {
				$cr = $con->query("select bank_proof from vendor where ven_id = '$ven_id'");
				$crrow = mysqli_fetch_array($cr);
				$path4= $crrow['bank_proof'];
			}
	
		$msg = ""; 
					
					$pvendor_edit = $con->query("update `vendor` set `ven_fnm` = '$ven_fname', `ven_mnm` = '$ven_mname', `ven_lnm`  = '$ven_lname',`ven_bldgrp` = '$ven_bld_grp',`ven_gender` = '$ven_gender', `ven_add1` = '$ven_add1', `ven_add2` = '$ven_add2', `ven_soc_nm` = '$ven_soc_nm', `ven_soc_no` = '$ven_build_no', `ven_floor` = '$ven_floor', `ven_unit` = '$ven_unit', `ven_oth_ref` = '$ven_ref_add', `ven_village` = '$ven_village', `ven_district` = '$ven_taluka', `ven_country` = '$country', `ven_state` = '$state',`ven_city` = '$city', `ven_pincode` = '$ven_zip_code', `ven_mono` = '$cono', `ven_teleno` = '$teleno', `ven_fax` = '$faxno', `ven_email` = '$ven_email', `ven_dob` = '$ven_dob', `ven_lang` = '$langes', `ven_adhar_no` = '$ven_adhar_no', `ven_ahdar_doc` = '$path1',`ven_pan_no` = '$ven_pan_no',`ven_pan_doc` = '$path2',`ven_pic` = '$path3',`ngo_ref_nm` = '$sel_ngo',`vol_ref_nm` = '$sel_vol',`other_ref_nm` = '$oth_ref_nm',`acc_hl_nm` = '$acc_nm', `branch_nm` = '$brnch_nm', `bank_nm` = '$bank_nm', `acc_no` = '$acc_no', `ifsc_code` = '$ifsc_no', `bank_proof` = '$path4' where ven_id = $ven_id");
					                                                      
					//echo "update `personal_vendor` set `ven_fnm` = '$ven_fname', `ven_mnm` = '$ven_mname', `ven_lnm`  = '$ven_lname',`ven_bldgrp` = '$ven_bld_grp',`ven_gender` = '$ven_gender', `ven_add1` = '$ven_add1', `ven_add2` = '$ven_add2', `ven_soc_nm` = '$ven_soc_nm', `ven_soc_no` = '$ven_build_no', `ven_floor` = '$ven_floor', `ven_unit` = '$ven_unit', `ven_oth_ref` = '$ven_ref_add', `ven_village` = '$ven_village', `ven_district` = '$ven_taluka', `ven_country` = '$country', `ven_state` = '$state',`ven_city` = '$city', `ven_pincode` = '$ven_zip_code', `ven_mono` = '$mob_no-$ven_co_no', `ven_teleno` = '$ven_c_tel_no-$ven_a_tel_no-$ven_tel_no', `ven_fax` = '$ven_c_fax_no-$ven_a_fax_no-$ven_fax_no', `ven_email` = '$ven_email', `ven_dob` = '$ven_dob', `ven_bvillage` = '$ven_vill', `ven_bdistrict` = '$ven_dist', `ven_bcountry` = '$country_work_1', `ven_bstate` = '$state_work_1', `ven_bcity` = '$state_city_1', `ven_lang` = '$ven_lang', `ven_adhar_no` = '$ven_adhar_no', `ven_ahdar_doc` = '$path1',`ven_pan_no` = '$ven_pan_no',`ven_pan_doc` = '$path2',`ven_pic` = '$path3' where ven_id = $ven_id"; 
					
					//echo 'File successfully uploaded : uploads/Donor/' . $_FILES['do_adhar_doc']['name'];
					if($pvendor_edit == 1){
						echo "<script> window.location = 'index.php';</script>";
					}else{
						echo 0;
					} 
}

function product_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
	
    //$mast_nm = $_POST['mast_nm'];
    //$prm_nm = $_POST['prm_nm'];
    //$sub_nm = $_POST['sub_nm'];
    //$brd_nm = $_POST['brd_nm'];
	$ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $v_id = $_POST['v_id'];
    $veer = "";
	
	/* $sel = $con->query("select sc_id from s_catagory where sc_name = '$sub_nm'");
	$sub = mysqli_fetch_array($sel);
	$sid = $sub['sc_id'];
	
	$sel = $con->query("select mc_id from m_catagory where mc_name = '$mast_nm'");
	$mast = mysqli_fetch_array($sel);
	$mid = $mast['mc_id'];
	
	$sel = $con->query("select pc_id from p_catagory where pc_name = '$prm_nm'");
	$prm = mysqli_fetch_array($sel);
	$pid = $prm['pc_id']; */
	
    
	/* if($mast_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(mc_id like '%$mid%') and ";
    }
	
	if($prm_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(pc_id like '%$pid%') and ";
    }
	
	if($sub_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(sub_id like '%$sid%') and ";
    }
	
	if($brd_nm == ""){
        $veer .= "";
    } else {
        $veer .= "(comp_name like '%$brd_nm%') and ";
    } */
	
	if($fields == "" || $ord_sort == ""){
        $orderby = " p_id";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
    
    $dev = substr($veer,0,-4);
    if($veer == ""){
        $veer1 = " order by ".$orderby;
    } else {
        $veer1 = ' where '.$dev.' order by '.$orderby;
    }
	  $msg = "";
	$no = 1;
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select proj_id,sub_id,mc_id,pc_id,p_id,p_title,comp_name,size,color,qty,p_image from product $veer1 LIMIT $start, $per_page ");
	if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			$pd = $r['p_id'];
			if($r['mc_id'] != ""){
				$mid = $r['mc_id'];
				$mast = $con->query("select mc_name from m_catagory where mc_id = $mid");
				$r1 = mysqli_fetch_array($mast);
			}else{
				$mid = "";
			}
			
			if($r['pc_id'] != ""){
				$pid = $r['pc_id'];
				$prm = $con->query("select pc_name from p_catagory where pc_id = $pid");
				$r2 = mysqli_fetch_array($prm);
			}else{
				$pid = "";
			}
			
			if($r['sub_id'] != ""){
				$sid = $r['sub_id'];
				$sub = $con->query("select sc_name from s_catagory where sc_id = $sid");
				$r3 = mysqli_fetch_array($sub);
			}else{
				$sid = "";
			}
			
			if($r['proj_id'] != ""){
				$pro_id = $r['proj_id'];
				$proj = $con->query("select proj_title from project where proj_id = $pro_id");
				$por = mysqli_fetch_array($proj);
			}else{
				$pro_id = "";
			}
			
			$quat = $con->query("select quat_detail,prod_id,ship_charge,tax,per_price,total_price,quat_status from quatation where prod_id = $pd and ven_id = $v_id");
			$pr = mysqli_fetch_array($quat);
			if($pr['quat_detail'] != ""){
				$details = $pr['quat_detail'];
			}else{
				$details = "";
			}
			if($pr['ship_charge'] != ""){
				$charge = $pr['ship_charge'];
			}else{
				$charge = "";
			}
			if($pr['tax'] != ""){
				$tax = $pr['tax'];
			}else{
				$tax = "";
			}
			if($pr['per_price'] != ""){
				$p_price = $pr['per_price'];
			}else{
				$p_price = "";
			}
			if($pr['total_price'] != ""){
				$t_price = $pr['total_price'];
			}else{
				$t_price = "";
			}
			if($pr['prod_id'] != ""){
				$produc_id = "Edit";
			}else{
				$produc_id = "Submit";
			}
			
            $msg .= '<tr style="with:135%;">';     
            $msg .= '<td style="width:1%">'.$no++.'</td>';     
            $msg .= '<td style="width:15%">'.$r["p_title"].'</td>';     
            $msg .= '<td style="width:10%">'.$por["proj_title"].'</td>';  
            $msg .= '<td style="width:10%"><img src="../'.$r["p_image"].'" width="100" height="100" /></td>';
			$msg .= '<td style="width:10%">'.$details.'</td>';  
            $msg .= '<td style="width:10%">'.$charge.'</td>';  
            $msg .= '<td style="width:10%">'.$tax.'</td>';  
            $msg .= '<td style="width:10%">'.$p_price.'</td>';  
            $msg .= '<td style="width:10%">'.$t_price.'</td>';   			
			$msg .= '<td style="width:2%"><input type="submit" value="'.$produc_id.'" class="form-control saerchbtn" id="quat" name="quat" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="open_quatation('.$r['p_id'].');"/></td>';
            //$msg .= '<td style="width:15%"> <i onclick="editbtn(';
            //$msg .= "'".$r["p_id"]."'";
            //$msg .=')" class="fa fa-pencil-square-o" aria-hidden="true" title="Edit" style="font-size: 15px; text-align: left; cursor: pointer; margin-left: 5px;"></i> <i onclick="deletedbtn('.$r["p_id"].')" class="fa fa-trash-o" aria-hidden="true" title="Delete" style="font-size: 15px; text-align: center; cursor: pointer; margin-left: 20px;"></i></td>'; 
            
            $msg .= '</tr>';
	
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count FROM product $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function add_quatation(){
	global $con;
	$msg = "";
	$no = 1;
	$prod_id = $_POST['id'];
	$v_id = $_POST['v_id'];
	$sum = 0;
	$det = $con->query("select per_price,ship_charge,tax,quat_detail from quatation where prod_id = $prod_id and ven_id = $v_id");
	$qr = mysqli_fetch_array($det);
	$spre = $con->query("select p_title,qty,esti_price from product where p_id = $prod_id");
	while($r = mysqli_fetch_array($spre)){
		$qanty = $r['qty'];
		$no++;
		$msg .= '<tr style="width:100%;">';
		$msg .= '<td style="border-top:0px;text-align:left;">'.$r['p_title'].'</td>';
		$msg .= '<td style="border-top:0px;text-align:left;">'.$qanty.'</td>';
		$msg .= '<td style="border-top:0px;text-align:left;">
			<input type="text" id="price" name="price" style="width:100px;" value="'.$qr['per_price'].'"/></td>';
		$msg .= '<td style="border-top:0px;text-align:left;">
			<input type="text" id="charge" name="charge" style="width:100px;" value="'.$qr['ship_charge'].'"/></td>';
		$msg .= '<td style="border-top:0px;text-align:left;">
			<input type="text" id="tax" name="tax" style="width:100px;" value="'.$qr['tax'].'"/></td>';
		$msg .= '</tr>';	
	}
	$msg .= '<tr>';
	$msg .= '<td colspan="2" style="text-align:left">Quatation Details </td>';
	$msg .= '<td colspan="3" style="text-align:left;"><textarea id="qt_det" name="qt_det" style="width:225px;">'.$qr['quat_detail'].'</textarea></td>';
	$msg .= '</tr>';
	$msg .= '<tr>';
	$msg .= '<td style="width:20%;border-top:0px;text-align:center;" colspan="5"><input type="submit" name="price_sub" id="price_sub" value="submit" onclick="totalamount('.$qanty.','.$prod_id.');"/></td>';
	$msg .= '</tr>';
	$msg .= '<tr>';
	$msg .= '<td style="width:20%;border-top:0px;text-align:left;">Total :</td>';
	$msg .= '<td style="width:20%;border-top:0px;text-align:left;" id="total"></td>';
	$msg .= '<td style="width:20%;border-top:0px;text-align:left;"></td>';
	$msg .= '<td style="width:20%;border-top:0px;text-align:left;"></td>';
	$msg .= '<td style="width:20%;border-top:0px;text-align:left;"></td>';
	$msg .= '</tr>';
	echo $msg;
}

function sum_total(){
	global $con;
	$msg = "";
	$price = $_POST['price_id'];
	$charge = $_POST['charge'];
	$tax = $_POST['tax'];
	$qty = $_POST['qty'];
	$v_id = $_POST['v_id'];
	$p_id = $_POST['p_id'];
	$qt_det = $_POST['qt_det'];
	
	$total = ($price * $qty) + $charge + $tax;
	echo $total;
	
	$det = $con->query("select * from quatation where ven_id = $v_id and prod_id IN ($p_id)");
	$qr = mysqli_fetch_array($det);
	if(mysqli_num_rows($det)){
		$ad_qt = $con->query("update quatation set `quat_detail` = '$qt_det' , `ship_charge` = '$charge' , `tax` = '$tax', `per_price` = '$price' ,`total_price` = '$total' where `prod_id` = '$p_id' and `ven_id` = '$v_id'");
	}else{
		$ad_qt = $con->query("insert into quatation (`prod_id`,`ven_id`,`quat_detail`,`ship_charge`,`tax`,`per_price`,`total_price`) value('$p_id','$v_id','$qt_det','$charge','$tax','$price','$total')");
	}
		
	if($ad_qt == 1){
		echo "<script>window.location = 'q_list.php'</script>";
	}else{
		//echo 0;
	}
	
}

function update_is_admin(){
	global $con;
	$value = $_POST['val'];
	$vol_id = $_POST['id'];
	
	$msg = "";
	$admin = $con->query("update volunteer_register set ngo_is_admin = '$value' where vol_id = '$vol_id'");
	
	if($admin == 1){
		$msg = "Update Is Admin Successfully";
	}else{
		$msg = "Not Update Is Admin Successfully";
	}
	echo $msg;
}

function update_is_admin_schl(){
	global $con;
	$value = $_POST['val'];
	$scl_id = $_POST['id'];
	
	$msg = "";
	$admin = $con->query("update staff_register set schl_is_admin = '$value' where staff_schl_id = '$scl_id'");
	
	if($admin == 1){
		$msg = "Update Is Admin Successfully";
	}else{
		$msg = "Not Update Is Admin Successfully";
	}
	echo $msg;
}

function ngo_list(){
    global $con;
	$lang_nm = $con->query("select ngo_name,ngo_id from ngo_register");
	$no = 1;
	$msg = "";
	while($row = mysqli_fetch_array($lang_nm)){
		
		$msg .= '<br/><input type="checkbox" class="ngo" id="ngo_'.$no++.'" name="ngo_list[]" value="'.$row['ngo_id'].'" style="margin-right:5px;">'.$row['ngo_name'];
		
	}
	echo $msg;
}

function invite_ngo(){
	$site_name = "Touch A Life";
	global $con,$email_Username,$email_Password,$site_url;
	
	global $site_url, $email_Host, $email_Username, $email_Port, $email_Password, $email_Setemail, $email_Setname, $email_AddReplyTo, $email_AddReplyToname, $our_email;
	
	$ngo_nm = "";
	$proj_id = $_POST['proj_id'];
	$ngo_list = $_POST['ngo_list'];
	for ($i=0; $i<sizeof($ngo_list);$i++) {
		$ngo_nm .= $ngo_list[$i]. ",";
	}
	$ngo_nm = rtrim($ngo_nm , ',');
	$ngolist = explode(",", $ngo_nm);
	
	$numberngo = count($ngolist);
	if($numberngo > 0){
		for($i = 0 ;$i< $numberngo ; $i++ ){
			$pro_join = $con->query("INSERT INTO `project_join`(`p_id`,`ngo_id`) VALUES ('$proj_id','$ngolist[$i]')");
		}
	} 
	
	$msg = $_POST['msg'];
	
	if($pro_join == 1){
	$ngo = $con->query("select ngo_email,ngo_name,ngo_mobile from ngo_register where ngo_id IN($ngo_nm)");
	//echo "select ngo_email,ngo_mobile from ngo_register IN($ngo_nm)";
	while($nr = mysqli_fetch_array($ngo)){
		$ng_nm = $nr['ngo_name'];
		if(isset($_POST['sms'])){
			$mo_no = $nr['ngo_mobile'];
		}
	
		if(isset($_POST['mail'])){
			$emailid = $nr['ngo_email'];
			$comment = "";
			$comment .='<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<title>Registration Active - Diana</title>
					<meta name="viewport" content="width=device-width" />
					<style type="text/css">
						@media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
							body[yahoo] .buttonwrapper { background-color: transparent !important; }
							body[yahoo] .button { padding: 0 !important; }
							body[yahoo] .button a { background-color: #f79f17;; padding: 15px 25px !important; }
						} 
						@media only screen and (min-device-width: 601px) {
							.content { width: 600px !important; }
							.col387 { width: 387px !important; }
						}
					</style>
			</head>
			<body bgcolor="#ffffff" style="margin: 0; padding: 0;" yahoo="fix">
				<table align="center" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width:100%; max-width:600px; border:1px solid #f79f17;" class="content">
					
					<tr>
						<td align="left" bgcolor="#f79f17" style="padding: 20px; color: #fff; font-family: Arial, sans-serif; font-size: 18px; line-height: 30px;text-align:center;">
							'.site_name.'
						</td>
					</tr>
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 20px; color: #666; font-family: Arial, sans-serif; font-size: 13px; line-height: 30px; border-bottom: 1px solid #f79f17;">
						<b>'.ucfirst($ng_nm).',</b> <br><br>
						<p>'.$msg.'</p>
						<p>Sincerely,<br>'.$site_name.'</p>
						</td>
					</tr>
					<tr>
						<td style="padding: 15px 10px 15px 10px;" bgcolor="#f79f17">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td align="center" width="100%" style="color: #fff; font-family: Arial, sans-serif; font-size: 12px;">
										<a href="'.$site_url.'" style="color: #fff;text-decoration:none;" target="_blank">'.$site_name.'</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</body>
			</html>'; 	
							
				$mail	= new PHPMailer();  
				$mail->SMTPDebug = 0;
				$mail->Host = $email_Host;
				$mail->Port = $email_Port;
				$mail->SMTPSecure = true;
				$mail->SMTPAuth = true;
				$mail->Username   = $email_Username; 
				$mail->Password   = $email_Password; 
				$mail->SetFrom($email_Setemail, $email_Setname);
				$mail->AddReplyTo($email_AddReplyTo, $email_AddReplyToname); 

				$mail->Subject     = site_name." - Account Activation";
				$mail->MsgHTML($comment);
				$mail->AddAddress($admin_email); 
				$mail->AddAddress('dondahiren2@gmail.com'); 
				$mail->AddAddress('axisavani1997@gmail.com');$mail->AddAddress(our_mail); 
				if($mail->Send()) {
					$_SESSION['ermsg'] =  'Your message send successfully.';
					echo "<script>window.location = 'invitation.php'</script>";
				} else {
					$_SESSION['ermsg'] =  'Your message send successfully.';
					echo "<script>window.location = 'invitation.php'</script>";
				}
		}
	}
	}

}

function project_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    $ngo_id = $_POST['ngo_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	if($fields == "" || $ord_sort == ""){
        $orderby = "pj.pj_id asc";   
    } else {
        $orderby = "pj.".$fields." ".$ord_sort;
    }
	
	$dev = substr($veer,0,-4);
	if($veer == ""){
        $veer1 = ' where pj.ngo_id = '.$ngo_id. ' order by '.$orderby;
    } else {
		$veer1 = ' where ' .$dev. ' and pj.ngo_id = '.$ngo_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select pj_id,p_id,ngo_id,status,work_status from project_join as pj join project as p on pj.p_id = p.proj_id $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["status"] == "0"){
				$sellected = "selected";
			}else{
				$sellected = "";
			}
			if($r["work_status"] == "1"){
				$stat = "Complete";
			}else{
				$stat = "Working";
			}
			if($r['p_id'] != ""){
				$ng_id = $r['p_id'];
				$ng = $con->query("select proj_title from project where proj_id = $ng_id");
				$nr = mysqli_fetch_array($ng);
			}
			
            $msg .= '<tr>';     
            $msg .= '<td>'.$nr["proj_title"].'</td>'; 
            $msg .= '<td>'.$stat.'</td>'; 
            $msg .= '<td><select onchange="changestatus(this.value,'.$r['pj_id'].')";><option value="1" '.$sellected.'>Appprove</option><option value="0" '.$sellected.'>Unapprove</option></select></td>';  
            
            $msg .= '</tr>';
			}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count from project_join as pj join project as p on pj.p_id = p.proj_id $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function update_status(){
	global $con;
	$value = $_POST['val'];
	$proj_id = $_POST['id'];
	
	$msg = "";
	$admin = $con->query("update project_join set status = '$value' where pj_id = '$proj_id'");
	
	if($admin == 1){
		$msg = "Update Successfully";
	}else{
		$msg = "Not Update Successfully";
	}
	echo $msg;
}

function proj_list(){
    global $con;
	$ngo_id = $_POST['ng_id'];
	$lang_nm = $con->query("select proj_id,proj_title,status from project,project_join where status=1 and project.proj_id = project_join.p_id and ngo_id = $ngo_id");

	$msg = "";
		$msg .= '<option value="">Select Any</option>';
	while($row = mysqli_fetch_array($lang_nm)){
		$msg .= '<option value="'.$row['proj_id'].'">'.$row['proj_title'].'</option>';
	}
	echo $msg;
}

function proj_list_scl(){
    global $con;
	$schl_id = $_POST['schl_id'];
	$lang_nm = $con->query("select proj_id,proj_title,status from project,project_join where status=1 and project.proj_id = project_join.p_id and schl_id = $schl_id");

	$msg = "";
		$msg .= '<option value="">Select Any</option>';
	while($row = mysqli_fetch_array($lang_nm)){
		$msg .= '<option value="'.$row['proj_id'].'">'.$row['proj_title'].'</option>';
	}
	echo $msg;
}

function schl_list(){
    global $con;
	$lang_nm = $con->query("select schl_nm,schl_id from school_register");
	$no = 1;
	$msg = "";
	while($row = mysqli_fetch_array($lang_nm)){
		
		$msg .= '<br/><input type="checkbox" class="ngo" id="scl_'.$no++.'" name="school_list[]" value="'.$row['schl_id'].'" style="margin-right:5px;">'.$row['schl_nm'];
		
	}
	echo $msg;
}

function volun_list(){
    global $con;
	$lang_nm = $con->query("select vol_fnm,vol_lnm,vol_id from volunteer_register");
	$no = 1;
	$msg = "";
	while($row = mysqli_fetch_array($lang_nm)){
		
		$msg .= '<br/><input type="checkbox" class="volun" id="vol_'.$no++.'" name="volun_list[]" value="'.$row['vol_id'].'" style="margin-right:5px;">'.$row['vol_fnm'].' '.$row['vol_lnm'];
		
	}
	echo $msg;
}

function invite_scl_vol(){
	$site_name = "Touch A Life";
	global $con,$email_Username,$email_Password,$site_url;
	
	global $site_url, $email_Host, $email_Username, $email_Port, $email_Password, $email_Setemail, $email_Setname, $email_AddReplyTo, $email_AddReplyToname, $our_email;
	
	$proj_id = $_POST['proj_id'];
	
	if(isset($_POST['invite'])){
		if($_POST['invite'] == "school"){
			$scl_nm = "";
			$school_list = $_POST['school_list'];
			for ($i=0; $i<sizeof($school_list);$i++) {
				$scl_nm .= $school_list[$i]. ",";
			}
			$scl_nm = rtrim($scl_nm , ',');
			$scllist = explode(",", $scl_nm);
			
			$numberscl = count($scllist);
			if($numberscl > 0){
				for($i = 0 ;$i< $numberscl ; $i++ ){
					$pro_join = $con->query("INSERT INTO `project_join`(`p_id`,`schl_id`) VALUES ('$proj_id','$scllist[$i]')");
				}
			} 
			
			$msg = $_POST['scl_msg'];
			
			if($pro_join == 1){
			$school = $con->query("select schl_email,schl_nm,schl_mobile from school_register where schl_id IN($scl_nm)");
			while($sr = mysqli_fetch_array($school)){
				$scl_nm = $sr['schl_nm'];
				if(isset($_POST['scl_sms'])){
					$mo_no = $sr['schl_mobile'];
				}
			
				if(isset($_POST['scl_mail'])){
					$emailid = $sr['schl_email'];
					$comment = "";
					$comment .='<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
							<title>Registration Active - Diana</title>
							<meta name="viewport" content="width=device-width" />
							<style type="text/css">
								@media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
									body[yahoo] .buttonwrapper { background-color: transparent !important; }
									body[yahoo] .button { padding: 0 !important; }
									body[yahoo] .button a { background-color: #f79f17;; padding: 15px 25px !important; }
								} 
								@media only screen and (min-device-width: 601px) {
									.content { width: 600px !important; }
									.col387 { width: 387px !important; }
								}
							</style>
					</head>
					<body bgcolor="#ffffff" style="margin: 0; padding: 0;" yahoo="fix">
						<table align="center" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width:100%; max-width:600px; border:1px solid #f79f17;" class="content">
							
							<tr>
								<td align="left" bgcolor="#f79f17" style="padding: 20px; color: #fff; font-family: Arial, sans-serif; font-size: 18px; line-height: 30px;text-align:center;">
									'.site_name.'
								</td>
							</tr>
							<tr>
								<td align="left" bgcolor="#ffffff" style="padding: 20px; color: #666; font-family: Arial, sans-serif; font-size: 13px; line-height: 30px; border-bottom: 1px solid #f79f17;">
								<b>'.ucfirst($scl_nm).',</b> <br><br>
								<p>'.$msg.'</p>
								<p>Sincerely,<br>'.$site_name.'</p>
								</td>
							</tr>
							<tr>
								<td style="padding: 15px 10px 15px 10px;" bgcolor="#f79f17">
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="center" width="100%" style="color: #fff; font-family: Arial, sans-serif; font-size: 12px;">
												<a href="'.$site_url.'" style="color: #fff;text-decoration:none;" target="_blank">'.$site_name.'</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</body>
					</html>'; 	
									
						$mail	= new PHPMailer();  
						$mail->SMTPDebug = 0;
						$mail->Host = $email_Host;
						$mail->Port = $email_Port;
						$mail->SMTPSecure = true;
						$mail->SMTPAuth = true;
						$mail->Username   = $email_Username; 
						$mail->Password   = $email_Password; 
						$mail->SetFrom($email_Setemail, $email_Setname);
						$mail->AddReplyTo($email_AddReplyTo, $email_AddReplyToname); 

						$mail->Subject     = site_name." - Account Activation";
						$mail->MsgHTML($comment);
						$mail->AddAddress($admin_email); 
						$mail->AddAddress('dondahiren2@gmail.com'); 
						$mail->AddAddress('axisavani1997@gmail.com');$mail->AddAddress(our_mail); 
						if($mail->Send()) {
							$_SESSION['ermsg'] =  'Your message send successfully.';
							echo "<script>window.location = 'invite.php'</script>";
						} else {
							$_SESSION['ermsg'] =  'Your message send successfully.';
							echo "<script>window.location = 'invite.php'</script>";
						}
				}
			}
			}
		}else{
			$vol_nm = "";
			//$proj_id = $_POST['proj_id'];
			$volun_list = $_POST['volun_list'];
			for ($i=0; $i<sizeof($volun_list);$i++) {
				$vol_nm .= $volun_list[$i]. ",";
			}
			$vol_nm = rtrim($vol_nm , ',');
			$vollist = explode(",", $vol_nm);
			
			$numbervol = count($vollist);
			if($numbervol > 0){
				for($i = 0 ;$i< $numbervol ; $i++ ){
					$pro_join = $con->query("INSERT INTO `project_join`(`p_id`,`vol_id`) VALUES ('$proj_id','$vollist[$i]')");
				}
			} 
			
			$msg = $_POST['vl_msg'];
			
			if($pro_join == 1){
			$school = $con->query("select vol_email,vol_fnm,vol_lnm,vol_contact from volunteer_register where vol_id IN($vol_nm)");
			while($sr = mysqli_fetch_array($school)){
				$vol_nm = $sr['vol_fnm'].' '.$sr['vol_lnm'];
				if(isset($_POST['vl_sms'])){
					$mo_no = $sr['vol_contact'];
				}
			
				if(isset($_POST['vl_mail'])){
					$emailid = $sr['vol_email'];
					$comment = "";
					$comment .='<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
							<title>Registration Active - Diana</title>
							<meta name="viewport" content="width=device-width" />
							<style type="text/css">
								@media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
									body[yahoo] .buttonwrapper { background-color: transparent !important; }
									body[yahoo] .button { padding: 0 !important; }
									body[yahoo] .button a { background-color: #f79f17;; padding: 15px 25px !important; }
								} 
								@media only screen and (min-device-width: 601px) {
									.content { width: 600px !important; }
									.col387 { width: 387px !important; }
								}
							</style>
					</head>
					<body bgcolor="#ffffff" style="margin: 0; padding: 0;" yahoo="fix">
						<table align="center" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width:100%; max-width:600px; border:1px solid #f79f17;" class="content">
							
							<tr>
								<td align="left" bgcolor="#f79f17" style="padding: 20px; color: #fff; font-family: Arial, sans-serif; font-size: 18px; line-height: 30px;text-align:center;">
									'.site_name.'
								</td>
							</tr>
							<tr>
								<td align="left" bgcolor="#ffffff" style="padding: 20px; color: #666; font-family: Arial, sans-serif; font-size: 13px; line-height: 30px; border-bottom: 1px solid #f79f17;">
								<b>'.ucfirst($vol_nm).',</b> <br><br>
								<p>'.$msg.'</p>
								<p>Sincerely,<br>'.$site_name.'</p>
								</td>
							</tr>
							<tr>
								<td style="padding: 15px 10px 15px 10px;" bgcolor="#f79f17">
									<table border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="center" width="100%" style="color: #fff; font-family: Arial, sans-serif; font-size: 12px;">
												<a href="'.$site_url.'" style="color: #fff;text-decoration:none;" target="_blank">'.$site_name.'</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</body>
					</html>'; 	
									
						$mail	= new PHPMailer();  
						$mail->SMTPDebug = 0;
						$mail->Host = $email_Host;
						$mail->Port = $email_Port;
						$mail->SMTPSecure = true;
						$mail->SMTPAuth = true;
						$mail->Username   = $email_Username; 
						$mail->Password   = $email_Password; 
						$mail->SetFrom($email_Setemail, $email_Setname);
						$mail->AddReplyTo($email_AddReplyTo, $email_AddReplyToname); 

						$mail->Subject     = site_name." - Account Activation";
						$mail->MsgHTML($comment);
						$mail->AddAddress($admin_email); 
						$mail->AddAddress('dondahiren2@gmail.com'); 
						$mail->AddAddress('axisavani1997@gmail.com');$mail->AddAddress(our_mail); 
						if($mail->Send()) {
							$_SESSION['ermsg'] =  'Your message send successfully.';
							echo "<script>window.location = 'invite.php'</script>";
						} else {
							$_SESSION['ermsg'] =  'Your message send successfully.';
							echo "<script>window.location = 'invite.php'</script>";
						}
				}
			}
			}
		}
	}
}

function vol_project_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    $vol_id = $_POST['vol_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	if($fields == "" || $ord_sort == ""){
        $orderby = "pj_id asc";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
	
	$dev = substr($veer,0,-4);
	if($veer == ""){
        $veer1 = ' where vol_id = '.$vol_id. ' order by '.$orderby;
    } else {
		$veer1 = ' where ' .$dev. ' and vol_id = '.$vol_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select pj_id,p_id,vol_id,work_status,status from project_join as pj join project as p on pj.p_id = p.proj_id $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["status"] == "0"){
				$sellected = "selected";
			}else{
				$sellected = "";
			}
			if($r['p_id'] != ""){
				$proj_id = $r['p_id'];
				$ng = $con->query("select proj_title from project where proj_id = $proj_id");
				$nr = mysqli_fetch_array($ng);
			}
			if($r["work_status"] == "1"){
				$stat = "Complete";
			}else{
				$stat = "Working";
			}
			
            $msg .= '<tr>';     
            $msg .= '<td>'.$nr["proj_title"].'</td>'; 
            $msg .= '<td>'.$stat.'</td>'; 
            $msg .= '<td><select onchange="changestatus(this.value,'.$r['pj_id'].')";><option value="1" '.$sellected.'>Appprove</option><option value="0" '.$sellected.'>Unapprove</option></select></td>';  
            
            $msg .= '</tr>';
			}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count from project_join as pj join project as p on pj.p_id = p.proj_id $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function update_vol_status(){
	global $con;
	$value = $_POST['val'];
	$proj_id = $_POST['id'];
	
	$msg = "";
	$admin = $con->query("update project_join set status = '$value' where pj_id = '$proj_id'");
	
	if($admin == 1){
		$msg = "Approve Successfully";
	}else{
		$msg = "Not Approve Successfully";
	}
	echo $msg;
}

function schl_project_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    $schl_id = $_POST['schl_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	if($fields == "" || $ord_sort == ""){
        $orderby = "pj_id asc";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
	
	$dev = substr($veer,0,-4);
	if($veer == ""){
        $veer1 = ' where schl_id = '.$schl_id. ' order by '.$orderby;
    } else {
		$veer1 = ' where ' .$dev. ' and schl_id = '.$schl_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select pj_id,p_id,schl_id,status,work_status from project_join as pj join project as p on pj.p_id = p.proj_id $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["status"] == "0"){
				$sellected = "selected";
			}else{
				$sellected = "";
			}
			if($r["work_status"] == "1"){
				$stat = "Complete";
			}else{
				$stat = "Working";
			}
			if($r['p_id'] != ""){
				$proj_id = $r['p_id'];
				$ng = $con->query("select proj_title from project where proj_id = $proj_id");
				$nr = mysqli_fetch_array($ng);
			}
			
            $msg .= '<tr>';     
            $msg .= '<td>'.$nr["proj_title"].'</td>'; 
            $msg .= '<td>'.$stat.'</td>'; 
            $msg .= '<td><select onchange="changestatus(this.value,'.$r['pj_id'].')";><option value="1" '.$sellected.'>Appprove</option><option value="0" '.$sellected.'>Unapprove</option></select></td>';  
            
            $msg .= '</tr>';
			}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count from project_join as pj join project as p on pj.p_id = p.proj_id $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function update_schl_status(){
	global $con;
	$value = $_POST['val'];
	$proj_id = $_POST['id'];
	
	$msg = "";
	$admin = $con->query("update project_join set status = '$value' where pj_id = '$proj_id'");
	
	if($admin == 1){
		$msg = "Approve Successfully";
	}else{
		$msg = "Not Approve Successfully";
	}
	echo $msg;
}

function stud_list(){
    global $con;
	$lang_nm = $con->query("select stud_fnm,stud_lnm,stud_id from student_register");
	$no = 1;
	$msg = "";
	while($row = mysqli_fetch_array($lang_nm)){
		
		$msg .= '<br/><input type="checkbox" class="stud" id="std_'.$no++.'" name="stud_list[]" value="'.$row['stud_id'].'" style="margin-right:5px;">'.$row['stud_fnm'].' '.$row['stud_lnm'];
		
	}
	echo $msg;
}

function invite_student(){
	$site_name = "Touch A Life";
	global $con,$email_Username,$email_Password,$site_url;
	
	global $site_url, $email_Host, $email_Username, $email_Port, $email_Password, $email_Setemail, $email_Setname, $email_AddReplyTo, $email_AddReplyToname, $our_email;
	
	$stud_nm = "";
	$schl_id = $_POST['schl_id'];
	$proj_id = $_POST['proj_id'];
	
	$ng = $con->query("select ngo_id from project_join where schl_id = $schl_id");
	$nr = mysqli_fetch_array($ng);
	$ng_id = $nr['ngo_id'];
	
	$stud_list = $_POST['stud_list'];
	for ($i=0; $i<sizeof($stud_list);$i++) {
		$stud_nm .= $stud_list[$i]. ",";
	}
	$stud_nm = rtrim($stud_nm , ',');
	$studlist = explode(",", $stud_nm);
	
	$numberstud = count($studlist);
	if($numberstud > 0){
		for($i = 0 ;$i< $numberstud ; $i++ ){
			$pro_join = $con->query("INSERT INTO `project_join`(`p_id`,`stud_id`) VALUES ('$proj_id','$studlist[$i]')");
		}
	} 
	
	$msg = $_POST['stud_msg'];
	
	if($pro_join == 1){
	$ngo = $con->query("select stud_email,stud_fnm,stud_lnm,stud_contact from student_register where stud_id IN($stud_nm)");
	//echo "select ngo_email,ngo_mobile from ngo_register IN($ngo_nm)";
	while($nr = mysqli_fetch_array($ngo)){
		$st_nm = $nr['stud_fnm'].' '.$row['stud_lnm'];
		if(isset($_POST['stud_sms'])){
			$mo_no = $nr['stud_contact'];
		}
	
		if(isset($_POST['stud_mail'])){
			$emailid = $nr['stud_email'];
			$comment = "";
			$comment .='<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<title>Registration Active - Diana</title>
					<meta name="viewport" content="width=device-width" />
					<style type="text/css">
						@media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
							body[yahoo] .buttonwrapper { background-color: transparent !important; }
							body[yahoo] .button { padding: 0 !important; }
							body[yahoo] .button a { background-color: #f79f17;; padding: 15px 25px !important; }
						} 
						@media only screen and (min-device-width: 601px) {
							.content { width: 600px !important; }
							.col387 { width: 387px !important; }
						}
					</style>
			</head>
			<body bgcolor="#ffffff" style="margin: 0; padding: 0;" yahoo="fix">
				<table align="center" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width:100%; max-width:600px; border:1px solid #f79f17;" class="content">
					
					<tr>
						<td align="left" bgcolor="#f79f17" style="padding: 20px; color: #fff; font-family: Arial, sans-serif; font-size: 18px; line-height: 30px;text-align:center;">
							'.site_name.'
						</td>
					</tr>
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 20px; color: #666; font-family: Arial, sans-serif; font-size: 13px; line-height: 30px; border-bottom: 1px solid #f79f17;">
						<b>'.ucfirst($st_nm).',</b> <br><br>
						<p>'.$msg.'</p>
						<p>Sincerely,<br>'.$site_name.'</p>
						</td>
					</tr>
					<tr>
						<td style="padding: 15px 10px 15px 10px;" bgcolor="#f79f17">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td align="center" width="100%" style="color: #fff; font-family: Arial, sans-serif; font-size: 12px;">
										<a href="'.$site_url.'" style="color: #fff;text-decoration:none;" target="_blank">'.$site_name.'</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</body>
			</html>'; 	
							
				$mail	= new PHPMailer();  
				$mail->SMTPDebug = 0;
				$mail->Host = $email_Host;
				$mail->Port = $email_Port;
				$mail->SMTPSecure = true;
				$mail->SMTPAuth = true;
				$mail->Username   = $email_Username; 
				$mail->Password   = $email_Password; 
				$mail->SetFrom($email_Setemail, $email_Setname);
				$mail->AddReplyTo($email_AddReplyTo, $email_AddReplyToname); 

				$mail->Subject     = site_name." - Account Activation";
				$mail->MsgHTML($comment);
				$mail->AddAddress($admin_email); 
				$mail->AddAddress('dondahiren2@gmail.com'); 
				$mail->AddAddress('axisavani1997@gmail.com');$mail->AddAddress(our_mail); 
				if($mail->Send()) {
					$_SESSION['ermsg'] =  'Your message send success fully.';
					echo "<script>window.location = 'stud_invite.php'</script>";
				} else {
					$_SESSION['ermsg'] =  'Your message send success fully';
					echo "<script>window.location = 'stud_invite.php'</script>";
				}
		}
	}
	}

}

function stud_project_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    $stud_id = $_POST['stud_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	if($fields == "" || $ord_sort == ""){
        $orderby = "pj_id asc";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
	
	$dev = substr($veer,0,-4);
	if($veer == ""){
        $veer1 = ' where stud_id = '.$stud_id. ' order by '.$orderby;
    } else {
		$veer1 = ' where ' .$dev. ' and stud_id = '.$stud_id. ' order by '.$orderby;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select pj_id,p_id,stud_id,work_status from project_join as pj join project as p on pj.p_id = p.proj_id $veer1  LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			if($r["work_status"] == "1"){
				$stat = "Complete";
			}else{
				$stat = "Working";
			}
			if($r['p_id'] != ""){
				$proj_id = $r['p_id'];
				$ng = $con->query("select proj_title from project where proj_id = $proj_id");
				$nr = mysqli_fetch_array($ng);
			}
			
            $msg .= '<tr>';     
            $msg .= '<td>'.$nr["proj_title"].'</td>'; 
            $msg .= '<td>'.$stat.'</td>'; 
            $msg .= '</tr>';
			}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count from project_join as pj join project as p on pj.p_id = p.proj_id $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

function requirement_list(){
    global $con, $per_page;
    $page = $_POST['page'];
    $cur_page = $page;
    
    $page -= 1; 
    $previous_btn = true;
    $next_btn = true;
    $first_btn = true;
    $last_btn = true;
    $start = $page * $per_page; 
    if($page == 0){
        $cur_pagea = ($page + 1);
    } else {
        $cur_pagea = ($page * $per_page) + 1;
    
    }
    
    $stud_id = $_POST['stud_id'];
    $ord_sort = $_POST['ord_sort'];
    $fields = $_POST['fields'];
    $veer = "";
    
	if($fields == "" || $ord_sort == ""){
        $orderby = "stud_id asc";   
    } else {
        $orderby = $fields." ".$ord_sort;
    }
	
	$dev = substr($veer,0,-4);
	if($veer == ""){
        $veer1 = ' on sh.schl_id = st.schl_name ';
    } else {
		$veer1 = ' on sh.schl_id = st.schl_name where ' .$dev;
    }
  
    mysqli_set_charset($con, 'utf8');
    $spre = $con->query("select count(st.schl_name) as school,sh.schl_nm as schoolname from student_register as st join school_register sh $veer1 group by st.schl_name LIMIT $start, $per_page ");

    $msg = "";
    if(mysqli_num_rows($spre) > 0){
        while($r = mysqli_fetch_array($spre)){
			
				$sclnm = $r['schoolname'];
				$sclid = $con->query("select schl_id from school_register where schl_nm = '$sclnm'");
				$sr = mysqli_fetch_array($sclid);
				$scl_id = $sr['schl_id'];
				
				$msg .= '<tr>';     
				$msg .= '<td>'.$r["schoolname"].' ('.$r['school'].')</td>'; 
				 
				$clname = $con->query("select count(s.stud_class) as class,cl.cl_name as classname from student_register as s join class as cl on cl.cl_id=s.stud_class where s.schl_name=$scl_id group by s.stud_class");
				if(mysqli_num_rows($clname) > 0){
					$msg .= '<td><table>'; 
				while($clr = mysqli_fetch_array($clname)){ 
					$msg .= '<tr><td>'.$clr["classname"].' ('.$clr['class'].')</td></tr>';  
				}
				$msg .= '</table></td>';
				}else{ 	
				}
				$msg .= '<td></td>';
				$msg .= '</tr>';
		}
    } else {
        $msg .= '<tr>'; 
        $msg .= '<td colspan="9">No Data Found.</td>';
        $msg .= '</tr>';
    }       
            mysqli_set_charset($con, 'utf8');
            $query_pag_num = "SELECT COUNT(*) AS count from student_register as st join school_register sh $veer1";
            $result_pag_num = $con->query($query_pag_num);
            $row = mysqli_fetch_array($result_pag_num);
            $count = $row['count'];
            $no_of_paginations = ceil($count / $per_page);

            if($cur_page >= 7) {
                $start_loop = $cur_page - 3;
                if ($no_of_paginations > $cur_page + 3)
                    $end_loop = $cur_page + 3;
                else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                    $start_loop = $no_of_paginations - 6;
                    $end_loop = $no_of_paginations;
                } else {
                    $end_loop = $no_of_paginations;
                }
            } else {
                $start_loop = 1;
                if ($no_of_paginations > 7)
                    $end_loop = 7;
                else
                    $end_loop = $no_of_paginations;
            }
            
            $msg .= "pagination_part<div class='pagination'><ul>"; 
                    // FOR ENABLING THE FIRST BUTTON
                    if ($first_btn && $cur_page > 1) {
                        $msg .= "<li p='1' class='active'>First</li>";
                    } else if ($first_btn) {
                        $msg .= "<li p='1' class='inactive'>First</li>";
                    } 
                    // FOR ENABLING THE PREVIOUS BUTTON
                    if ($previous_btn && $cur_page > 1) {
                        $pre = $cur_page - 1;
                        $msg .= "<li p='$pre' class='active'>Previous</li>";
                    } else if ($previous_btn) {
                        $msg .= "<li class='inactive'>Previous</li>";
                    }
                    for ($i = $start_loop; $i <= $end_loop; $i++) { 
                        if ($cur_page == $i){
                            $msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'>{$i}</li>";
                        } else {
                            $msg .= "<li p='$i' class='active'>{$i}</li>";
                        }   
                    } 
                    // TO ENABLE THE NEXT BUTTON
                    if ($next_btn && $cur_page < $no_of_paginations) {
                        $nex = $cur_page + 1;
                        $msg .= "<li p='$nex' class='active'>Next</li>";
                    } else if ($next_btn) {
                        $msg .= "<li class='inactive'>Next</li>";
                    } 
                    // TO ENABLE THE END BUTTON
                    if ($last_btn && $cur_page < $no_of_paginations) {
                        $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
                    } else if ($last_btn) {
                        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
                    }
                     
                    $msg .= "</ul></div>pagination_part".$count; 
                    
            echo $msg;
            mysqli_close($con); 
}

?>