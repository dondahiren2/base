<?php
	session_start();
    // https://beta.touchalife.hk/user_dash/order_note1.php?id=1&from=1&to100
    include("../config.php");
    include ("../qrlib.php");
    include("../".admin_dir."/mpdf/mpdf.php");
    $icard=new mPDF('','A4-L','','',2,2,30,5,5,5);  
    $icard->SetProtection(array('print'));
    $icard->SetTitle('Delivery '.date("d-m-Y"));
    $icard->SetAuthor("");

    $icard->showWatermarkText = true;
    $icard->watermark_font = 'DejaVuSansCondensed';
    $icard->watermarkTextAlpha = 0.1;
    $icard->SetDisplayMode('fullpage'); 

	
	global $url;
	$id = $_GET['id']; 
	
    $html = '
<html>
<body>
<style>
 
h3 { font-size: 20pt; margin-bottom:0; font-family:arial; }

table.items {
    border: 1px solid #0070C0;
    font-family:arial;
}
td { vertical-align: center;font-family:arial; }

table thead td { 
    background-color: #DCE6F1;
    text-align: center;
    border: 1px solid #0070C0;
    font-family:arial; 
    padding:5px;
    font-weight:bold;
    font-size:20px;
    color:#000;
}
table tr td {
    color : #000;
    text-transform: uppercase;
    text-align: center;
    font-family:arial; 
    padding:5px;
    font-size:20px;
}
.header1 td{
    padding-top:2px;
    padding-bottom:2px;
    padding-left:1px;
    padding-right:1px;
    }
.items td.totals {
    text-align: right;
    border: 1px solid #0070C0;
    font-family:arial;
}
.items td.cost {
    text-align: "." center;
    font-family:arial;
}
.border{
    border:1px;
    border-color: #0070C0;
    border-style: solid;
    padding-top:3px;
    padding-bottom:3px;
    padding-left:1px;
    padding-right:1px;
}


</style>';

$html .='
<!--mpdf


<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->';
    $spre = $con->query("SELECT o.ord_txid,s.stud_uid,s.stud_fnm as fname,s.stud_mnm as mname, s.stud_lnm as lname,sc.schl_nm,sc.schl_village,c.cl_name,m.medium_name,p.p_title FROM `orders` as o join orders_student as os on os.ord_tx_id = o.ord_txid join student_register as s on s.stud_id = os.stud_id join school_register as sc on schl_id = s.schl_name join class as c on c.cl_id = s.stud_class join medium as m on m.medium_id = s.stud_midium join quatation as q on q.qt_id = o.qt_id join product as p on p.p_id = q.prod_id where o.ord_id = '$id' ORDER by sc.schl_id asc");
    $i=1;
	if(mysqli_num_rows($spre) > 0){
        $num_rows = mysqli_num_rows($spre);
		while($r = mysqli_fetch_array($spre)){

            $qrcode = $r["stud_uid"] . "-" . $r["ord_txid"];

            $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
        if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
        $filename1 = $PNG_TEMP_DIR.'test.png';
        
    
        
        $PNG_TEMP_DIR = 'orders/';
        $errorCorrectionLevel = 'H';
        $matrixPointSize = 4;
        
         $qrcode = $r["stud_uid"] . "-" . $r["ord_txid"];
        //echo '<input type="hidden" name="data" value="'.($uniqueid?htmlspecialchars($uniqueid):'PHP QR Code :)').'" />';
            if (trim($qrcode != ''))
            //$filename1 = $PNG_TEMP_DIR.($uniqueid).'.png';
            $filename1 = $PNG_TEMP_DIR .$qrcode.'.png';
            QRcode::png($qrcode, $filename1, $errorCorrectionLevel, $matrixPointSize, 2);

        
            //echo "file path :- " . $filename1 . "</br>";
	$html .= '
<table cellspacing="0" width="80%" height="80%" align="center" style="border:1px solid">
<tr>
	<td width="100%" colspan="4"  style="height:10px;text-align:center">

    </td>
</tr>
<tr>
	<td width="100%" colspan="4"  style="height:60px; text-align:center; color:#570000; font-weight:bold; font-size:60px; border-bottom: 1px solid #000;">
		'.$r["fname"].' '.$r["mname"].' '.$r["lname"].'
	</td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center; font-size:20px; padding: 15px 0px;">
        <b>School Name : </b>   '.$r["schl_nm"].','.$r["schl_village"].'
    </td>
</tr>
<tr>
    <td width="30%" colspan="1"  style="text-align:right;">
        <b>Standard : </b>
    </td>
    <td width="20%" colspan="1"  style="text-align:left; border-right: 1px solid #000;">
		 '.$r["cl_name"].'		
    </td>
    <td width="15%" colspan="1"  style="text-align:right">
        <b>Medium : </b>
    </td>
    <td width="35%" colspan="1"  style="text-align:left">
		 '.$r["medium_name"].'
    </td>
</tr>
<tr>
    <td width="30%" colspan="1"  style="text-align:right">
        <b>Student Unique ID : </b>
    </td>
    <td width="20%" colspan="1"  style="text-align:left; border-right: 1px solid #000;">
         '.$r["stud_uid"].'
    </td>
    <td width="15%" colspan="1"  style="text-align:right">
         <b>Order ID : </b>
    </td>
    <td width="35%" colspan="1"  style="text-align:left">
        '.$r["ord_txid"].'
    </td>
</tr>

<tr>
    <td width="100%" colspan="4"  style="text-align:center;font-size:20px; border-bottom: 1px solid #000;padding: 15px 0px;">
       <b> Product : </b>	'.$r["p_title"].'
    </td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center">
        <img src="'.$filename1.'" >
    </td>
</tr>

</table>';

    if($i%1==0){
        	$html .= '<pagebreak>';
        }else{
        	//$html .='<br/><br/>';
        }
$i++;
  }
}
else{

}
 
 $html .='</body></html>';
 $icard->WriteHTML($html);
 $icard->Output();
 //echo $html;
 exit;
 ?>