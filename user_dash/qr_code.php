 <?php
	include '../config.php';
	include ("../qrlib.php");
	
	require_once '../S3.php';
	date_default_timezone_set('Asia/Kolkata');
	$sdate = date('YmdHis').rand(111,999);
	 
	$bp_tal_id = 'TAL_00002'; 
	
	$target_file = 'uploads/STD/'.$bp_tal_id.'/qr_code/';	
	if(file_exists($target_file)){
	} else {
		mkdir($target_file,0755, true);
	}
	$file = $bp_tal_id.'.png';
	$target_filename = $target_file.$file;
	
	$errorCorrectionLevel = 'M';
	$matrixPointSize = 4;
	QRcode::png($bp_tal_id, $target_filename, $errorCorrectionLevel, $matrixPointSize, 2);
	$s3 = new S3(awsAccessKey, awsSecretKey);
	if($s3->putObjectFile($target_filename, bucket, $target_filename, S3::ACL_PUBLIC_READ)){
		unlink($target_filename);
		echo $target_filename;
	}else{
		echo 2;
	}
?>