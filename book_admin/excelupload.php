<?php
include 'Classes/PHPExcel/IOFactory.php';
include '../config.php';
if(isset($_POST['submitexcel'])){

	@$filetype = $_REQUEST['files'];
	$file_name = $_FILES['files']['name']; // Excel file name 
	$file_size=$_FILES['files']['size'];
	$file_tmp=$_FILES['files']['tmp_name'];
	$file_type=$_FILES['files']['type']; 
 
	$d = explode('.',$file_name);
			if($d[1] == 'xls' || $d[1] == 'xlsx') { 
				$file_tmp = $_FILES['files']['tmp_name'];  
				$response = move_uploaded_file($file_tmp, $file_name); 
				if($response) {
					try  {
						$objPHPExcel = PHPExcel_IOFactory::load($file_name);
					} catch(Exception $e)  {
						die('Error : Unable to load the file : "'.pathinfo($_FILES['files']['name'],PATHINFO_BASENAME).'": '.$e->getMessage());
					}

				$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true); 
				$arrayCount = count($allDataInSheet);

				$string = "insert into student_register (stud_uid, stud_qrid, stud_pwd, stud_fnm, stud_mnm, stud_lnm, stud_bld_grp, stud_add1, stud_add2, stud_soc_nm, stud_soc_no, stud_floor, stud_unit, stud_othref, stud_village, stud_dist, stud_taluka, stud_country, stud_state, stud_city, stud_pincode, stud_teleno, stud_fax, stud_dob, stud_email, stud_contact, stud_gender, stud_bcountry, stud_bstate, stud_bcity, stud_bvillage, stud_bdist, stud_btaluka, stud_lang, stud_adhar_no, stud_panno, stud_fath_fnm, stud_fath_mnm, stud_fath_lnm, stud_fath_mno, stud_fath_dob, stud_fath_email, stud_fath_edu, stud_fath_prof, stud_moth_fnm, stud_moth_mnm, stud_moth_lnm, stud_moth_mno, stud_moth_dob, stud_moth_email, stud_moth_edu, stud_moth_pro, ngo_add_ref, vol_add_ref, oth_add_ref, annual_income, stud_spec_need, schl_idcard_no, schl_name, schl_add, stud_midium, stud_class, stud_education_board,stud_join_date,stud_gr_no,stud_is_rte,stud_religion,stud_cast) values";

				if($arrayCount >= 2000){
					echo '<script type="text/javascript">alert("Too Big")</script>';
				}else{
					//echo '<script type="text/javascript">alert("'.$arrayCount.'")</script>';
					include ("../qrlib.php");
					for($i=2;$i<=$arrayCount;$i++) {
						$uniqueid_stud = "";		
						$fname		= trim($allDataInSheet[$i]["B"]); 
						$nmane		= trim($allDataInSheet[$i]["C"]);
						$lname		= trim($allDataInSheet[$i]["D"]); 
						$blood		= trim($allDataInSheet[$i]["E"]);
						$floor		= trim($allDataInSheet[$i]["F"]);
						$unit		= trim($allDataInSheet[$i]["G"]);
						$societyname= trim($allDataInSheet[$i]["H"]);
						$societyno	= trim($allDataInSheet[$i]["I"]);
						$add1		= trim($allDataInSheet[$i]["J"]);
						$add2		= trim($allDataInSheet[$i]["K"]);
						$ref		= trim($allDataInSheet[$i]["L"]);
						$village	= trim($allDataInSheet[$i]["M"]);
						$dict		= trim($allDataInSheet[$i]["N"]);
						$taluka		= trim($allDataInSheet[$i]["O"]);
						$country	= trim($allDataInSheet[$i]["P"]);
						$state		= trim($allDataInSheet[$i]["Q"]);
						$city		= trim($allDataInSheet[$i]["R"]);
						$pin		= trim($allDataInSheet[$i]["S"]);
						$tele		= trim($allDataInSheet[$i]["T"]);
						$fax		= trim($allDataInSheet[$i]["U"]);
						$dob		= trim($allDataInSheet[$i]["V"]);
						$email		= trim($allDataInSheet[$i]["W"]);
						$contact	= trim($allDataInSheet[$i]["X"]);
						if($contact == ''){

						}else{
							$contact = '+91-'.$contact;
						}
						
						$gen		= trim($allDataInSheet[$i]["Y"]);
						$bcountry	= trim($allDataInSheet[$i]["Z"]);
						$bstate		= trim($allDataInSheet[$i]["AA"]);
						$bcity		= trim($allDataInSheet[$i]["AB"]);
						$bville		= trim($allDataInSheet[$i]["AC"]);
						$bdist		= trim($allDataInSheet[$i]["AD"]);
						$btaluka	= trim($allDataInSheet[$i]["AE"]);
						$lang		= trim($allDataInSheet[$i]["AF"]);
						$adharno	= trim($allDataInSheet[$i]["AG"]);
						$panno		= trim($allDataInSheet[$i]["AH"]);
						$ffname		= trim($allDataInSheet[$i]["AI"]);
						$fmname		= trim($allDataInSheet[$i]["AJ"]);
						$flname		= trim($allDataInSheet[$i]["AK"]);
						$fmno		= trim($allDataInSheet[$i]["AL"]);
						$fdob		= trim($allDataInSheet[$i]["AM"]);
						$femail		= trim($allDataInSheet[$i]["AN"]);
						$fedu		= trim($allDataInSheet[$i]["AO"]);
						$fprof		= trim($allDataInSheet[$i]["AP"]);
						$mfname		= trim($allDataInSheet[$i]["AQ"]);
						$mmnane		= trim($allDataInSheet[$i]["AR"]);
						$mlname		= trim($allDataInSheet[$i]["AS"]);
						$mmob		= trim($allDataInSheet[$i]["AT"]);
						$mdob		= trim($allDataInSheet[$i]["AU"]);
						$memail		= trim($allDataInSheet[$i]["AV"]);
						$medu		= trim($allDataInSheet[$i]["AW"]);
						$mprof		= trim($allDataInSheet[$i]["AX"]);
						$ngoref		= trim($allDataInSheet[$i]["AY"]);
						$volref		= trim($allDataInSheet[$i]["AZ"]);
						$otherref	= trim($allDataInSheet[$i]["BA"]);
						$anincome	= trim($allDataInSheet[$i]["BB"]);
						$speneed	= trim($allDataInSheet[$i]["BC"]);
						$scidno		= trim($allDataInSheet[$i]["BD"]);
						$scname		= trim($allDataInSheet[$i]["BE"]);
						$scadd		= trim($allDataInSheet[$i]["BF"]);
						$studmedium	= trim($allDataInSheet[$i]["BG"]);
						$studclass	= trim($allDataInSheet[$i]["BH"]);
						$studboard	= trim($allDataInSheet[$i]["BI"]);

						$stud_join_date	= trim($allDataInSheet[$i]["BJ"]);
						$stud_gr_no	= trim($allDataInSheet[$i]["BK"]);
						$stud_is_rte	= trim($allDataInSheet[$i]["BL"]);
						$stud_religion	= trim($allDataInSheet[$i]["BM"]);
						$stud_cast	= trim($allDataInSheet[$i]["BN"]);

						$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
						if (!file_exists($PNG_TEMP_DIR))
				        mkdir($PNG_TEMP_DIR);
						$filename2 = $PNG_TEMP_DIR.'test.png';
						
						$PNG_TEMP_DIR = '../temp/';
						$errorCorrectionLevel = 'M';
						$matrixPointSize = 4;
						
						$uniqueid_stud = getuid();
						echo '<input type="hidden" name="data" value="'.($uniqueid_stud?htmlspecialchars($uniqueid_stud):'PHP QR Code :)').'" />';
							//it's very important!
							if (trim($uniqueid_stud == ''))
								//echo "data cannot be empty!!!";
							// user data
							//$filename2 = $PNG_TEMP_DIR.($uniqueid_stud).'.png';
							$filename2 = $PNG_TEMP_DIR .$uniqueid_stud.'.png';
							QRcode::png($uniqueid_stud, $filename2, $errorCorrectionLevel, $matrixPointSize, 2);
						
						$path = "../uploads/Student/$uniqueid_stud";
						@mkdir($path,0777,true);

						$pwd = randomPassword();	

						$citycr = $con->query("select id from city where name = '$city'");
						$cityrow = mysqli_fetch_array($citycr);
						$city = $cityrow['id'];

						$statecr = $con->query("select id from state where name = '$state'");
						$staterow = mysqli_fetch_array($statecr);
						$state = $staterow['id'];

						$countrycr = $con->query("select id from city where name = '$country'");
						$countryrow = mysqli_fetch_array($countrycr);
						$country = $countryrow['id'];
						
						$bcitycr = $con->query("select id from city where name = '$bcity'");
						$bcityrow = mysqli_fetch_array($bcitycr);
						$bcity = $bcityrow['id'];

						$bstatecr = $con->query("select id from state where name = '$bstate'");
						$bstaterow = mysqli_fetch_array($bstatecr);
						$bstate = $bstaterow['id'];

						$bcountrycr = $con->query("select id from city where name = '$bcountry'");
						$bcountryrow = mysqli_fetch_array($bcountrycr);
						$bcountry = $bcountryrow['id'];

						$langcr = $con->query("select lang_id as id from language where lang_nam = '$lang'");
						$langrow = mysqli_fetch_array($langcr);
						$lang = $langrow['id'];

						$ngorefcr = $con->query("select ngo_id as id from ngo_register where ngo_name = '$ngoref'");
						$ngorow = mysqli_fetch_array($ngorefcr);
						$ngoref = $ngorow['id'];

						$volrefcr = $con->query("select vol_id as id from volunteer_register where CONCAT(vol_fnm,'_',vol_lnm)  = '$volref'");
						$volrow = mysqli_fetch_array($volrefcr);
						$volref = $volrow['id'];

						$scnamecr = $con->query("select schl_id as id from school_register where schl_nm = '$scname'");
						$scnamerow = mysqli_fetch_array($scnamecr);
						$scname = $scnamerow['id'];

						$studmediumcr = $con->query("select medium_id as id from medium where medium_name = '$studmedium'");
						$studmediumrow = mysqli_fetch_array($studmediumcr);
						$studmedium = $studmediumrow['id'];

						$studclasscr = $con->query("select cl_id as id from class where cl_name = '$studclass'");
						$studclassrow = mysqli_fetch_array($studclasscr);
						$studclass = $studclassrow['id'];

						$studboardcr = $con->query("select board_id as id from board where board_short_name = '$studboard'");
						$studboardrow = mysqli_fetch_array($studboardcr);
						$studboard = $studboardrow['id'];

					$dob = date_format(date_create_from_format('m-d-y', $dob), 'Y-m-d');
					$fdob = date_format(date_create_from_format('m-d-y', $fdob), 'Y-m-d');
					$mdob = date_format(date_create_from_format('m-d-y', $mdob), 'Y-m-d');
					$stud_join_date = date_format(date_create_from_format('m-d-y', $stud_join_date), 'Y-m-d');
					//$stud_join_date = date_format(date_create_from_format('m/d/y', $stud_join_date), 'Y-m-d');
					//$mdob = date('Y-m-d', strtotime($mdob));

						$string .= "('$uniqueid_stud','$filename2','$pwd','$fname','$nmane','$lname','$blood','$floor','$unit','$societyname','$societyno','$add1','$add2','$ref','$village','$dict','$taluka','$country','$state','$city','$pin','$tele','$fax','$dob','$email','$contact','$gen','$bcountry','$bstate','$bcity','$bville','$bdist','$btaluka','$lang','$adharno','$panno','$ffname','$fmname','$flname','$fmno','$fdob','$femail','$fedu','$fprof','$mfname','$mmnane','$mlname','$mmob','$mdob','$memail','$medu','$mprof','$ngoref','$volref','$otherref','$anincome','$speneed','$scidno','$scname','$scadd','$studmedium','$studclass','$studboard','$stud_join_date','$stud_gr_no','$stud_is_rte','$stud_religion','$stud_cast'),";
						}

						$string = substr($string,0,-1); 
						echo $string; 
						//$re = $con->query($string);
						if($re == 1){
						echo "<script>alert('Data Successfully uploaded.')</script>";
						echo "<script>window.location = 'student_list.php'</script>";
					}else{
						echo "<script>alert('Data Not uploaded.')</script>";
					}
					}
				}
			}else {
				echo '<script type="text/javascript">alert("Please Select Excel File.")</script>';
			}
}

function randomPassword() {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); 
		$alphaLength = strlen($alphabet) - 1; 
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}
function getuid(){
	return "st_".date('his').gettimeofday()["usec"].date('dmy');
	//return "st_" .date('hisdmy');
}
?>