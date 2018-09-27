<?php
	session_start();

    include("../config.php");
    include ("../qrlib.php");
    include("../".admin_dir."/mpdf/mpdf.php");
   // $icard=new mPDF('','A4-L','','',2,2,30,5,5,5);  
    $icard=new mPDF('','A4','','',2,2,30,5,5,5);  
    $icard->SetProtection(array('print'));
    $icard->SetTitle('Delivery '.date("d-m-Y"));
    $icard->SetAuthor("");

    $icard->showWatermarkText = true;
    $icard->watermark_font = 'DejaVuSansCondensed';
    $icard->watermarkTextAlpha = 0.1;
    $icard->SetDisplayMode('fullpage'); 

	
	global $url;
    $id = $_GET['id']; 
    $from = $_GET['from']; 
	$to = $_GET['to']; 
	
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
.border_bottom{
    border-bottom:1px dashed black;
   
}


</style>';

$html .='
<!--mpdf


<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->';
    $spre = $con->query("SELECT bp.bp_fname as fname,bp.bp_mname as mname,bp.bp_lname as lname,bp.bp_tal_id as tal_id, bp.bp_qrcode as qr,(select bp_crop_name as schl_nm from basic_profile where bp_id = bos.bos_scl_id) as schl_nm,(SELECT p_name FROM `prime_category` where p_id = bos.bos_class) as class,(SELECT p_name FROM `prime_category` where p_id = bos.bos_medium) as medium FROM `basic_profile` as bp JOIN basic_other_student as bos on bos.bos_bp_unique_id = bp.bp_unique_id where bos.bos_ngo_id = 64 order by bos.bos_scl_id asc limit $from,$to");
    $i=1;
	if(mysqli_num_rows($spre) > 0){
        $num_rows = mysqli_num_rows($spre);
		while($r = mysqli_fetch_array($spre)){
            $qr = s3_link. $r['qr'];
	$html .= ' 
<table cellspacing="0" width="80%" height="80%" align="center" style="border:1px solid">
<tr>
	<td width="100%" colspan="4"  style="height:10px;text-align:center">

    </td>
</tr>
<tr>
	<td width="100%" colspan="4"  style="height:30px; text-align:center; color:#570000; font-weight:bold; font-size:25px; border-bottom: 1px solid #000;">
		'.$r["fname"].' '.$r["mname"].' '.$r["lname"].'
	</td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center; font-size:20px; padding: 15px 0px;">
        <b>School Name : </b>   '.$r["schl_nm"].'
    </td>
</tr>
<tr>
    <td width="30%" colspan="1"  style="text-align:left;">
        <b>Standard : </b>
    </td>
    <td width="20%" colspan="1"  style="text-align:left;">
		 '.$r["class"].'		
    </td>
    <td width="100%" rowspan="3" colspan="2"  style="text-align:center">
        <img src="'.$qr.'" >
    </td>
    </tr>
    <tr>
    <td width="15%" colspan="1"  style="text-align:left">
        <b>Medium : </b>
    </td>
    <td width="35%" colspan="1"  style="text-align:left">
		 '.$r["medium"].'
    </td>
</tr>
<tr>
    <td width="30%" colspan="1"  style="text-align:left">
        <b>Tal Id : </b>
    </td>
    <td width="20%" colspan="1"  style="text-align:left;">
         '.$r["tal_id"].'
    </td>
   
</tr>

</table>
    
';

    if($i%3==0){
        	$html .= '<pagebreak>';
        }else{
        	$html .='<br/><p class="border_bottom"><p><br/>';
        }
$i++;
  }
}
else{

}
$sum = $from + $to - 1;
 $filename = $from .'-'. $sum.".pdf";
 $html .='</body></html>';
 $icard->WriteHTML($html);
 $icard->Output($filename, 'D');
 //echo $html;
 exit;
 ?>