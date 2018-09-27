<?php
include('../config.php');
require_once '../S3.php'; 

date_default_timezone_set('Asia/Kolkata');
$sdate = rand(111,999); 

$data = $_POST['image'];
$parts = $_POST['parts'];
$bp_tal_id = isset($_SESSION['bp_tal_id']) ? $_SESSION['bp_tal_id'] : '';
$bp_user_type = isset($_SESSION['bp_user_type']) ? $_SESSION['bp_user_type'] : '';
$types = isset($_SESSION['bp_sub_user_type']) ? $_SESSION['bp_sub_user_type'] : '';
$bp_unique_id = isset($_SESSION['bp_unique_id']) ? $_SESSION['bp_unique_id'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

$seoFriendly = generateSeoURL($username);
$target_file = 'uploads/'.substr($types,0,3).'/'.$bp_tal_id.'/micro_site/'.$parts.'/';	
 
if($bp_tal_id){

	if(file_exists($target_file)){
	} else {
		mkdir($target_file,0755, true);
	}
		
	$allowed =  array('jpg','jpeg','JPEG','png');
	$file = basename($seoFriendly.'-'.$sdate.'.png');
	$target_filename = $target_file.$file;

	list($type, $data) = explode(';', $data);
	list(, $data)      = explode(',', $data);

	$data = base64_decode($data);

	file_put_contents($target_filename, $data);

	$s3 = new S3(awsAccessKey, awsSecretKey);
	if($s3->putObjectFile($target_filename, bucket, $target_filename, S3::ACL_PUBLIC_READ)){
		unlink($target_filename);
		
		$res = $con->query("select mlb_id from micro_logo_banner where mlb_unique_id = '$bp_unique_id' and mlb_type = 'logo'");
		if(mysqli_num_rows($res) > 0){
			$con->query("update micro_logo_banner set mlb_path = '$target_filename' where mlb_unique_id = '$bp_unique_id' and mlb_type = '$parts' ");
		} else {
			$con->query("insert into micro_logo_banner(mlb_unique_id, mlb_path, mlb_type, mlb_active, mlb_tal_id) values('$bp_unique_id','$target_filename','$parts','1','$bp_tal_id')");
		}
		echo '1part'.$target_filename;
	}else{
		echo '2part';
	}
}
function generateSeoURL($string, $wordLimit = 0){
    $separator = '-';
    
    if($wordLimit != 0){
        $wordArr = explode(' ', $string);
        $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
    }

    $quoteSeparator = preg_quote($separator, '#');

    $trans = array(
        '&.+?;'                    => '',
        '[^\w\d _-]'            => '',
        '\s+'                    => $separator,
        '('.$quoteSeparator.')+'=> $separator
    );

    $string = strip_tags($string);
    foreach ($trans as $key => $val){
        $string = preg_replace('#'.$key.'#i'.(UTF8_ENABLED ? 'u' : ''), $val, $string);
    }

    $string = strtolower($string);

    return trim(trim($string, $separator));
}

?>