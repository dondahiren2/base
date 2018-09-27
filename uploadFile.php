 <?php
	include '../config.php';
	include "../qrlib.php";
	require_once '../S3.php';
	
	$bp_tal_id = isset($_SESSION['bp_tal_id']) ? $_SESSION['bp_tal_id'] : '';
	if($bp_tal_id){
		$mg_id = $_POST['mg_id'];
		$mg_title = trim($_POST['mg_title']);
		$mg_sub_title = trim($_POST['mg_sub_title']);
		$mg_text = trim($_POST['mg_text']);
		$mg_date = date('Y-m-d', strtotime($_POST['mg_date']));
		
		$parts = 'gallery'; 
		$types = isset($_SESSION['bp_sub_user_type']) ? $_SESSION['bp_sub_user_type'] : '';
		$bp_unique_id = isset($_SESSION['bp_unique_id']) ? $_SESSION['bp_unique_id'] : '';
		
		$target_file = 'uploads/'.substr($types,0,3).'/'.$bp_tal_id.'/micro_site/'.$parts.'/';	
		if(file_exists($target_file)){
		} else {
			mkdir($target_file,0755, true);
		}
		
		$upload_filename = '';
		$un_upload_filename = '';
		$file_invalid = ''; 
		$i = 0;
		if($_FILES['uploadFile']['tmp_name']){
		foreach($_FILES['uploadFile']['tmp_name'] as $key => $tmp_name ){
			$image_name  = $_FILES['uploadFile']['name'][$key];
			$size 		 = $_FILES['uploadFile']['size'][$key];
			$type 		 = $_FILES['uploadFile']['type'][$key];
			$tmp_name	 = $_FILES['uploadFile']['tmp_name'][$key];
			
			$sdate = date('dmYHis').rand(11111,99999).$i;
			$allowed =  array('jpg','jpeg');
			$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
			$file = basename($sdate.'.'.$ext);
			if(in_array($ext,$allowed)){
				
				$target_filename = $target_file.$file;

				$src = imagecreatefromjpeg($tmp_name);
				list($width,$height) = getimagesize($tmp_name);

				$newwidth = 1020; 
				$newheight = ($height/$width)*$newwidth;

				$dst = imagecreatetruecolor( $newwidth, $newheight );
				imagecopyresized($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height );
				imagejpeg($dst, $target_filename);

				imagedestroy($src);
				imagedestroy($dst);
				
				$s3 = new S3(awsAccessKey, awsSecretKey);
				if($s3->putObjectFile($target_filename, bucket, $target_filename, S3::ACL_PUBLIC_READ)){
					unlink($target_filename);
					$upload_filename .= $target_filename.'parts';
				}else{
					$un_upload_filename .= $target_filename.'parts';
				}
				$i++;
			} else {
				$file_invalid .= $target_filename.'parts';
			}
		}
		}
		
		if($mg_id){
			$spre = $con->query("select mg_all_img from micro_gallery where mg_id = $mg_id and mg_tal_id = '$bp_tal_id' ");
			if(mysqli_num_rows($spre) > 0){
				$r = mysqli_fetch_assoc($spre);
				$mg_all_img = $r['mg_all_img'].$upload_filename;
				$ds = explode('parts', $mg_all_img);
				$mg_main_img = $ds[0];
				$re = $con->query("update micro_gallery set mg_title = '$mg_title' , mg_sub_title = '$mg_sub_title', mg_text = '$mg_text', mg_main_img = '$mg_main_img', mg_all_img = '$mg_all_img', mg_date = '$mg_date' where mg_id = $mg_id and mg_tal_id = '$bp_tal_id'");
				if($re == 1){
					$con->query("insert into notification(n_tal_id, n_details) values('$bp_tal_id', 'Micro - Gallery Update')");
					echo '2par123'.$upload_filename;
				} else {
					echo '0par123'.$un_upload_filename;
				}
			}
		} else {
			$ds = explode('parts', $upload_filename);
			$mg_main_img = $ds[0];
			
			$re = $con->query("INSERT INTO micro_gallery( mg_title, mg_sub_title, mg_text, mg_main_img, mg_all_img, mg_tal_id, mg_unique_id, mg_date) VALUES('$mg_title', '$mg_sub_title', '$mg_text', '$mg_main_img', '$upload_filename', '$bp_tal_id', '$bp_unique_id', '$mg_date')");
			if($re == 1){
				$con->query("insert into notification(n_tal_id, n_details) values('$bp_tal_id', 'Micro - Gallery Update')");
				echo '1par123'.$upload_filename;
			} else {
				echo '0par123'.$un_upload_filename;
			}
		}
	}
?>