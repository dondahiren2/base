<?php 

include("../config.php");

/*$qr = "SELECT si_uid,si_img,si_ord_id FROM `studentapi`";
$qrr = $con->query($qr);
echo "<table border='1'>";
$no=1;
while($qrrow = mysqli_fetch_array($qrr)){
	if(!file_exists("../".$qrrow['si_img'])){
		$imgpath = explode('/', $qrrow['si_img']);
		$newimg = end($imgpath);
		$img = explode('st_', $newimg);
		$path = '../saved_images/delivery/st_'.$img[1];
		$path1 = 'saved_images/delivery/st_'.$img[1];
		if(file_exists($path)){
			//echo "<tr><td>".$no++."</td><td>".$qrrow['si_uid']."</td><td>".$qrrow['si_img']."</td><td>".end($imgpath)."</td><td>st_".$img[1]."</td></tr>";
			echo "update studentapi set si_img = '$path1' where si_uid = '$qrrow[si_uid]' and si_ord_id = '$qrrow[si_ord_id]';</br>";
		}
	
	}
}

echo "</table>";*/

$qr = "SELECT si_uid,si_img,si_ord_id,stud_id FROM `studentapi` as s join student_register as st on st.stud_uid = s.si_uid";
$qrr = $con->query($qr);
//echo $qr;
echo "<table border='1'>";
$no=1;
while($qrrow = mysqli_fetch_array($qrr)){
	//if(!file_exists("../".$qrrow['si_img'])){
		//$imgpath = explode('/', $qrrow['si_img']);
		//$newimg = end($imgpath);
		//$img = explode('st_', $newimg);
		//$path = '../saved_images/delivery/'.$img[1];
		//$path = '../saved_images/delivery/st_'.$img[1];
		//$path1 = 'saved_images/delivery/st_'.$img[1];
		//if(file_exists($path)){
			//echo "<tr><td>".$no++."</td><td>".$qrrow['si_uid']."</td><td>".$qrrow['stud_id']."</td><td>".$qrrow['si_img']."</td><td>".$qrrow['si_ord_id']."</td></tr>";
			echo "update orders_student set ord_stud_re_status = 1,ord_stud_re_pic = '$qrrow[si_img]' where stud_id = '$qrrow[stud_id]' and ord_tx_id = '$qrrow[si_ord_id]';</br>";
		//}
	
	//}
}

echo "</table>";
?>