<?php 
include('../config.php');
unset($_SESSION['vol_db_id']);
unset($_SESSION['ngo_db_id']);
unset($_SESSION['scl_db_id']);
unset($_SESSION['ven_db_id']);
unset($_SESSION['don_db_id']);
unset($_SESSION['db_id']);
unset($_SESSION['stud_db_id']);
if(isset($_GET['id']) and isset($_GET['type'])){   
	$type = $_GET['type'];
	$id = $_GET['id'];
	if($type == "ngo"){
		$ngo_sel = $con->query("SELECT ngo_email,ngo_pwd,ngo_name,ngo_country,ngo_state,ngo_logo,ngo_city,admin_fnm,admin_surnm,ngo_id,ngo_uid,admin_pic FROM ngo_register WHERE ngo_id = '$id'");
		//echo "SELECT ngo_email,ngo_pwd,ngo_name,ngo_country,ngo_state,ngo_city,admin_fnm,admin_surnm,ngo_id,ngo_uid,admin_pic FROM ngo_register WHERE ngo_id = '$id'";
			if(mysqli_num_rows($ngo_sel) > 0){
				//echo "first if";if(mysqli_num_rows($ngo_sel) > 0){
				//echo "first if";
				$r = mysqli_fetch_array($ngo_sel);
				$c = $r['ngo_country'];
				$s = $r['ngo_state'];
				$ci = $r['ngo_city'];
				$cr = $con->query("select name from countries where id = '$c'");
				$cr1 = $con->query("select name from states where id = '$s'");
				$cr2 = $con->query("select name from cities where id = '$ci'");
				$r1 = mysqli_fetch_array($cr);
				$r2 = mysqli_fetch_array($cr1);
				$r3 = mysqli_fetch_array($cr2);
				$ngo_email  = $r['ngo_email'];
				$ngo_pwd  = $r['ngo_pwd'];
				$ngo_unm = $r['admin_fnm'].' '.$r['admin_surnm'];
				$ngo_nm = $r['ngo_name'];
				$uniqid = $r['ngo_uid'];
				$db_id = $r['ngo_id'];
				$profile = $r['admin_pic'];
				$logo = $r['ngo_logo'];
				
					$_SESSION['country'] = $r1['name'];
					$_SESSION['state'] = $r2['name'];
					$_SESSION['city'] = $r3['name'];
					$_SESSION['user_name'] = $ngo_nm;
					$_SESSION['logo']=$logo;
					$_SESSION['user_nm'] = $ngo_unm;
					$_SESSION['user_id'] = $ngo_email;
					$_SESSION['user_pwd'] = $ngo_pwd;
					$_SESSION['user_uniqid'] = $uniqid;
					$_SESSION['ngo_db_id'] = $db_id;
					$_SESSION['profile'] = $profile;
					$_SESSION['user_type'] = "ngo";
			
					
				echo "<script> window.location = 'index.php'</script>";                             
		
		}
		else {
			echo "<script> window.location = '../book_admin/ngo_list.php'</script>";     
		}
	}else if($type == "student"){
		
			$std_sel = $con->query("SELECT stud_email,schl_name,stud_country,stud_state,stud_city,stud_pwd,stud_fnm,stud_lnm ,stud_id,stud_uid,stud_pic  FROM student_register WHERE stud_id = '$id'");
			if(mysqli_num_rows($std_sel) > 0){
				$r = mysqli_fetch_array($std_sel);
				$c = $r['stud_country'];
				$s = $r['stud_state'];
				$ci = $r['stud_city'];
				$scl_nm = $r['schl_name'];
				$cr = $con->query("select name from countries where id = '$c'");
				$cr1 = $con->query("select name from states where id = '$s'");
				$cr2 = $con->query("select name from cities where id = '$ci'");
				$sc_nm = $con->query("select schl_nm from school_register where schl_id = '$scl_nm'");
				$r1 = mysqli_fetch_array($cr);
				$r2 = mysqli_fetch_array($cr1);
				$r3 = mysqli_fetch_array($cr2);
				$scr = mysqli_fetch_array($sc_nm);
				$std_uid  = $r['stud_email'];
				$std_pwd  = $r['stud_pwd'];
				$std_unm = $r['stud_fnm'] .' '. $r['stud_lnm'];
				$uniqid = $r['stud_uid'];
				$db_id = $r['stud_id'];
				$profile = $r['stud_pic'];
					$_SESSION['country'] = $r1['name'];
					$_SESSION['state'] = $r2['name'];
					$_SESSION['city'] = $r3['name'];
					$_SESSION['user_nm'] = $std_unm;
					$_SESSION['user_name'] = $scr['schl_nm'];
					$_SESSION['user_id'] = $std_uid;
					$_SESSION['user_pwd'] = $std_pwd;
					$_SESSION['user_uniqid'] = $uniqid;
					$_SESSION['stud_db_id'] = $db_id;
					$_SESSION['profile'] = $profile;
					$_SESSION['user_type'] = "student";
			
					echo "<script> window.location = 'index.php'</script>";     
		}
		else {
			echo "<script> window.location = '../book_admin/student_list.php'</script>";  
		}
	}else if($type == "school"){
			
			$scl_sel = $con->query("SELECT schl_email,schl_nm,schl_logo,schl_ngo,schl_pwd,admin_fnm,admin_surnm,schl_uid,schl_id,admin_pic FROM school_register WHERE schl_id = '$id'");
			
			if(mysqli_num_rows($scl_sel) > 0){
				$r = mysqli_fetch_array($scl_sel);
				
				$ng_nm = $r['schl_ngo'];
				$ng_id = $con->query("select ngo_name,ngo_country,ngo_state,ngo_city from ngo_register where ngo_id = '$ng_nm'");
				$ng_nme = mysqli_fetch_array($ng_id);
				
				$c = $ng_nme['ngo_country'];
				$s = $ng_nme['ngo_state'];
				$ci = $ng_nme['ngo_city'];
				
				$cr = $con->query("select name from countries where id = '$c'");
				
				$cr1 = $con->query("select name from states where id = '$s'");
				$cr2 = $con->query("select name from cities where id = '$ci'");
				
				$r1 = mysqli_fetch_array($cr);
				$r2 = mysqli_fetch_array($cr1);
				$r3 = mysqli_fetch_array($cr2);
				
				$scl_uid  = $r['schl_email'];
				$scl_pwd  = $r['schl_pwd'];
				$scl_unm = $r['admin_fnm'].' '.$r['admin_surnm'];
				$uniqid = $r['schl_uid'];
				$db_id = $r['schl_id'];
				$profile = $r['admin_pic'];
				$logo = $r['schl_logo'];
				
				//echo "NGO name :- " . $ng_nme['ngo_name'] ." city :- " . $r3['name']." state :- " . $r2['name']." country :- " . $r1['name'];
					$_SESSION['country'] = $r1['name'];
					$_SESSION['state'] = $r2['name'];
					$_SESSION['city'] = $r3['name'];
					$_SESSION['user_nm'] = $scl_unm;
					$_SESSION['user_name'] = $ng_nme['ngo_name'];
					//echo "NGO name :- " . $_SESSION['user_name'] ." city :- " . $_SESSION['city']." state :- " . $_SESSION['state']." country :- " . $_SESSION['country'];
					$_SESSION['user_id'] = $scl_uid;
					$_SESSION['user_pwd'] = $scl_pwd;
					$_SESSION['user_uniqid'] = $uniqid;
					$_SESSION['scl_db_id'] = $db_id;
					$_SESSION['profile'] = $profile;
					$_SESSION['logo'] = $logo;
					$_SESSION['user_type'] = "school";
					echo "<script> window.location = 'index.php'</script>";     
		}
		else {
			echo "<script> window.location = '../book_admin/school_list.php'</script>";  
		}
	}else if($type == "volunteer"){
		$vol_sel = $con->query("SELECT vol_email,vol_cont,vol_state,vol_city,vol_conn_ngo,vol_pwd,vol_fnm,vol_lnm,vol_uid,vol_id,vol_pic FROM volunteer_register WHERE vol_id = '$id'");
			if(mysqli_num_rows($vol_sel) > 0){
				$r = mysqli_fetch_array($vol_sel);
				
				$ngo_nm = $r['vol_conn_ngo'];
				$nr = $con->query("select ngo_name,ngo_logo,ngo_country,ngo_state,ngo_city from ngo_register where ngo_id = '$ngo_nm'");
				$nrow = mysqli_fetch_array($nr);
				$c = $nrow['ngo_country'];
				$s = $nrow['ngo_state'];
				$ci = $nrow['ngo_city'];
				$cr = $con->query("select name from countries where id = '$c'");
				$cr1 = $con->query("select name from states where id = '$s'");
				$cr2 = $con->query("select name from cities where id = '$ci'");
				
				$r1 = mysqli_fetch_array($cr);
				$r2 = mysqli_fetch_array($cr1);
				$r3 = mysqli_fetch_array($cr2);
				
				$vol_uid  = $r['vol_email'];
				$vol_pwd  = $r['vol_pwd'];
				$vol_unm = $r['vol_fnm'] .' '. $r['vol_lnm'];
				$uniqid = $r['vol_uid'];
				$db_id = $r['vol_id'];
				$profile = $r['vol_pic'];
				
					$_SESSION['country'] = $r1['name'];
					$_SESSION['state'] = $r2['name'];
					$_SESSION['city'] = $r3['name'];
					$_SESSION['user_nm'] = $vol_unm;
					$_SESSION['user_name'] = $nrow['ngo_name'];
					$_SESSION['logo'] = $nrow['ngo_logo'];
					$_SESSION['user_id'] = $vol_uid;
					$_SESSION['user_pwd'] = $vol_pwd;
					$_SESSION['user_uniqid'] = $uniqid;
					$_SESSION['vol_db_id'] = $db_id;
					$_SESSION['profile'] = $profile;
					$_SESSION['user_type'] = "volunteer";
				
				echo "<script> window.location = 'index.php'</script>";     
			}else {
			echo "<script> window.location = '../book_admin/volunteer_list.php'</script>";  
		}
	}else if($type == "p_donor"){
		
			$don_sel = $con->query("SELECT don_email,don_pwd,don_fnm,don_lnm,don_uid,don_id,don_pic FROM donor WHERE don_id = '$id'");
			if(mysqli_num_rows($don_sel) > 0){
				$r = mysqli_fetch_array($don_sel);
				$don_uid  = $r['don_email'];
				$don_pwd  = $r['don_pwd'];
				$don_unm = $r['don_fnm'] .' '. $r['don_lnm'];
				$uniqid = $r['don_uid'];
				$db_id = $r['don_id'];
				$profile = $r['don_pic'];
				
					$_SESSION['user_nm'] = $don_unm;
					$_SESSION['user_id'] = $don_uid;
					$_SESSION['user_pwd'] = $don_pwd;
					$_SESSION['user_uniqid'] = $uniqid;
					$_SESSION['don_db_id'] = $db_id;
					$_SESSION['profile'] = $profile;
					$_SESSION['user_type'] = "p_donor";
				echo "<script> window.location = 'index.php'</script>";     
		}
		else {
			echo "<script> window.location = '../book_admin/pdonor_list.php'</script>";  
		}
	}else if($type == "c_donor"){
		$don_sel = $con->query("SELECT cdon_email,don_pwd,cdon_nm,don_uid,don_id FROM donor WHERE don_id = '$id'");
			if(mysqli_num_rows($don_sel) > 0){
				$r = mysqli_fetch_array($don_sel);
				$cdon_uid  = $r['cdon_email'];
				$cdon_pwd  = $r['don_pwd'];
				$cdon_unm = $r['cdon_nm'];
				$cuniqid = $r['don_uid'];
				$cdb_id = $r['don_id'];
				
					$_SESSION['user_nm'] = $cdon_unm;
					$_SESSION['user_id'] = $cdon_uid;
					$_SESSION['user_pwd'] = $cdon_pwd;
					$_SESSION['user_uniqid'] = $cuniqid;
					$_SESSION['don_db_id'] = $cdb_id;
					$_SESSION['user_type'] = "c_donor";
				echo "<script> window.location = 'index.php'</script>";   
		
		
		}else {
			echo "<script> window.location = '../book_admin/cdonor_list.php'</script>";  
		}
	}else if($type == "pven"){
		
			$std_sel = $con->query("SELECT ven_email,ven_pic,ven_pwd,ven_fnm,ven_lnm,ven_uid,ven_id FROM vendor WHERE ven_id = '$id'");
			if(mysqli_num_rows($std_sel) > 0){
				$r = mysqli_fetch_array($std_sel);
				$ven_uid  = $r['ven_email'];
				$ven_pwd  = $r['ven_pwd'];
				$ven_unm = $r['ven_fnm'].' '.$r['ven_lnm'];
				$vuniqid = $r['ven_uid'];
				$vdb_id = $r['ven_id'];
				$pro_pic = $r['ven_pic'];
					$_SESSION['user_nm'] = $ven_unm;
					$_SESSION['user_id'] = $ven_uid;
					$_SESSION['user_pwd'] = $ven_pwd;
					$_SESSION['user_uniqid'] = $vuniqid;
					$_SESSION['ven_db_id'] = $vdb_id;
					$_SESSION['profile'] = $pro_pic;
					$_SESSION['user_type'] = "p_vendor";
			
					echo "<script> window.location = 'index.php'</script>";     
		}
		else {
			echo "<script> window.location = '../book_admin/pvendor_list.php'</script>";  
		}
	}else if($type == "cven"){
		
			$std_sel = $con->query("SELECT cven_email,admin_pic,ven_pwd,cven_logo,admin_fnm,admin_lnm,ven_uid,ven_id FROM vendor WHERE ven_id = '$id'");
			if(mysqli_num_rows($std_sel) > 0){
				$r = mysqli_fetch_array($std_sel);
				$cven_uid  = $r['cven_email'];
				$cven_pwd  = $r['ven_pwd'];
				$cven_unm = $r['admin_fnm']. ' '.$r['admin_lnm'];
				$cvuniqid = $r['ven_uid'];
				$cvdb_id = $r['ven_id'];
				$pro_pic = $r['admin_pic'];
				$logo = $r['cven_logo'];
					$_SESSION['user_nm'] = $cven_unm;
					$_SESSION['user_id'] = $cven_uid;
					$_SESSION['user_pwd'] = $cven_pwd;
					$_SESSION['user_uniqid'] = $cvuniqid;
					$_SESSION['ven_db_id'] = $cvdb_id;
					$_SESSION['profile'] = $pro_pic;
					$_SESSION['logo'] = $logo;
					$_SESSION['user_type'] = "c_vendor";
			
					echo "<script> window.location = 'index.php'</script>";     
		}
		else {
			echo "<script> window.location = '../book_admin/cvendor_list.php'</script>";  
		}
	}else if($type == "project"){
		$don_sel = $con->query("SELECT proj_id,proj_title,proj_pic,comp_logo FROM project WHERE proj_id = '$id'");
		if(mysqli_num_rows($don_sel) > 0){
			$r = mysqli_fetch_array($don_sel);
				$p_title  = $r['proj_title'];
				$p_pic  = $r['proj_pic'];
				$p_logo = $r['comp_logo'];
				$p_id = $r['proj_id'];
				
				$_SESSION['user_name'] = $p_title;
				$_SESSION['user_nm'] = $p_title;
				$_SESSION['profile'] = $p_pic;
				$_SESSION['logo'] = $p_logo;
				$_SESSION['db_id'] = $p_id;
				$_SESSION['user_type'] = "project";
				echo "<script> window.location = 'index.php'</script>";   
		}else {
			echo "<script> window.location = '../book_admin/project_list.php'</script>";  
		}
	}
}

?>