<?php 

$path = 'https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/STD/STD_100920181308089937/logo/purvesh-tejani-20180910132008951.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

echo ".... ". $data . " .... ";
echo $base64;
 //s ass
//asd asd
?>