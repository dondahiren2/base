<?php
	include '../config.php';
	date_default_timezone_set("Asia/Kolkata"); 
	 
	
function t_unid($prefix="",$long) {
	return uniqid($prefix,$long);
}
	 
if(isset($_POST['Submit'])){
	$tpi_date = date('Y-m-d');
	 
	$i = 0;

	$rand = rand();
	$file_title = t_unid("o_",false);

	$t=time()+$i++;
	$file_name = $key.$_FILES['file']['name'];
	$file_size = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$file_type = $_FILES['file']['type'];	

	$ext = pathinfo($file_name, PATHINFO_EXTENSION);
	$file = basename($file_name, ".".$ext);
	$filenam = $file_title.$t.'.'.$ext;

	$target_dir = "../banner/";
	 
	$target_file = $target_dir.$filenam;
	if(move_uploaded_file($file_tmp,$target_file)){
		mysqli_set_charset($con, 'utf8');
		$re = $con->query("insert into micro_logo_banner(mlb_unique_id, mlb_path, mlb_type, mlb_active, mlb_tal_id) values('$bp_unique_id','$target_filename','$parts','1','$bp_tal_id')");
		if($re == 1){
			echo '<script>window.location="banner_list.php?msg=1";</script>';
		} else {
			echo '<script>window.location="banner_list.php?msg=0";</script>';
		}		
	} 
} 
?>