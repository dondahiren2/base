<?php
	session_start();


    include("mpdf/mpdf.php");
    $icard=new mPDF('','A4','','',2,2,11,5,5,5);  
    $icard->SetProtection(array('print'));
    $icard->SetTitle('I-card '.date("d-m-Y"));
    $icard->SetAuthor("");

    $icard->showWatermarkText = true;
    $icard->watermark_font = 'DejaVuSansCondensed';
    $icard->watermarkTextAlpha = 0.1;
    $icard->SetDisplayMode('fullpage'); 

	include("../config.php");
	global $url;
	$id = $_GET['id']; 
	
    $html = '
<html>
<body>
<style>
 
h3 { font-size: 15pt; margin-bottom:0; font-family:arial; }

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
    font-size:12px;
    color:#570000;
}
table tr td {
    color : #570000;
    text-transform: uppercase;
    text-align: center;
    font-family:arial; 
    padding:5px;
    font-size:12px;
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
    $spre = $con->query("SELECT st.stud_uid,st.stud_qrid,st.stud_pic,st.stud_fnm as fname,st.stud_mnm as mname,st.stud_lnm as lname,sc.schl_nm,sc.schl_village,n.ngo_name as ngo_name , v.vol_fnm as vol_fname , v.vol_lnm as vol_lname FROM `student_register` as st join school_register as sc on sc.schl_id = st.schl_name join ngo_register as n on n.ngo_id = st.ngo_add_ref join volunteer_register as v on v.vol_id = st.vol_add_ref where st.stud_id IN($id)");
    $i=1;
	if(mysqli_num_rows($spre) > 0){
        $num_rows = mysqli_num_rows($spre);
		while($r = mysqli_fetch_array($spre)){
        if($r["stud_pic"] != ""){
                $img = $r["stud_pic"];
            }else{
                $img = "img/none.jpg";
            }

	$html .= '
<table cellspacing="0" style="background:url(uploads/card.png);background-repeat:no-repeat;background-position:center center;" width="50%" align="center">

<tr>
	<td width="25%" rowspan="2" align="center">
	</td>
	<td colspan="2" width="50%" style="height:100px;" align="center">
	</td>
	<td width="25%" rowspan="2" align="center">
	</td>
</tr>
<tr>
	<td width="50%" style="height:100px;" align="center">
	<img src="../'.$img.'" height="100">
	</td>
</tr>
<tr>
	<td width="100%" colspan="4"  style="height:5px;text-align:center"></td>
</tr>
<tr>
	<td width="100%" colspan="4"  style="text-align:center;color:#570000;font-weight:bold;">
		'.$r["fname"].' '.$r["mname"].' '.$r["lname"].'
	</td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center">
        Father : '.$r["mname"].' '.$r["lname"].'
    </td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center">
        School : '.$r["schl_nm"].'
    </td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center">
        Address : '.$r["schl_village"].'
    </td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center">
        
    </td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center">
        
    </td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="height:30px;text-align:center" align="center"></td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="text-align:center">
        <img src="../'.$r["stud_qrid"].'" >
    </td>
</tr>
<tr>
    <td width="100%" colspan="4"  style="height:15px;text-align:center" align="center"></td>
</tr>
</table>';

if($i == $num_rows){

} else {
  $html .='<br/><br/>';    
}
$i++;
  }

}
else{

}
 
 $html .='</body></html>';
 //$icard->WriteHTML($html);
 //$icard->Output();
 echo $html;
 exit;
 ?>