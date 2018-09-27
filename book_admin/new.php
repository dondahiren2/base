<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include("config.php");
	  if($_SESSION['uname'] == ""){
		header('location:index.php');
	  }
?>

<body class="page-header-fixed page-quick-sidebar-over-content ">

<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner">
		<div class="page-logo">
			<a href="index.php">
			Books For A Pourpose
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<?php include('top_naigation.php'); ?>
	</div>
</div>

<div class="clearfix">
</div>

<div class="page-container">
	<?php include("menu.php"); ?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<?php include('theme_panel.php'); ?>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="cli_user_list.php">School List</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="edit_diamond.php">School Details</a>
					</li>
				</ul>
			</div>
			<div class="row">
<?php //date('m/d/y', strtotime($date));
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$spre = $con->query("select * from student_register where stud_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			
		$ngid = $r['ngo_add_ref'];
		$ngnm = $con->query("select * from ngo_register where ngo_id = '$ngid'");
		$ngr = mysqli_fetch_array($ngnm);
		
		$vlid = $r['vol_add_ref'];
		$vlnm = $con->query("select * from volunteer_register where vol_id = '$vlid'");
		$vlr = mysqli_fetch_array($vlnm);
		
		$cnm = $r['stud_country'];
		$cqu = $con->query("select * from countries where id = '$cnm'");
		$cir = mysqli_fetch_array($cqu);
		
		$snm = $r['stud_state'];
		$squ = $con->query("select * from states where id = '$snm'");
		$str = mysqli_fetch_array($squ);
		
		$cinm = $r['stud_city'];
		$ciqu = $con->query("select * from cities where id = '$cinm'");
		$cr = mysqli_fetch_array($ciqu);
		
		$bcnm = $r['stud_bcountry'];
		$bcqu = $con->query("select * from countries where id = '$bcnm'");
		$bcir = mysqli_fetch_array($bcqu);
		
		$bsnm = $r['stud_bstate'];
		$bsqu = $con->query("select * from states where id = '$bsnm'");
		$bstr = mysqli_fetch_array($bsqu);
		
		$bcinm = $r['stud_bcity'];
		$bciqu = $con->query("select * from cities where id = '$bcinm'");
		$bcr = mysqli_fetch_array($bciqu);
		
		$st = $r['stud_status'];
		if($st == "1"){
			$nm = "Approve";  
		}else{
			$nm = "Unapprove";
		}
?>
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> School Details</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Student Id :</span>
								<span><?php echo $r['stud_id']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Student User Id :</span>
								<span><?php echo $r['stud_uid']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Student Fname :</span>
								<span><?php echo $r['stud_fnm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Student Mname :</span>
								<span><?php echo $r['stud_mnm']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Student Lname :</span>
								<span><?php echo $r['stud_lnm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Student Blood Group :</span>
								<span><?php echo $r['stud_bld_grp']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Student Gender :</span>
								<span><?php echo $r['stud_gender']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2" style="margin-top:10px;">
								<p style="font-size:16px;border-bottom: 1px solid #eee">Contact Details :</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Address1 :</span>
								<span><?php echo $r['stud_add1']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Address2 :</span>
								<span><?php echo $r['stud_add2']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Socity Name :</span>
								<span><?php echo $r['stud_soc_nm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Building No :</span>
								<span><?php echo $r['stud_soc_no']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Floor :</span>
								<span><?php echo $r['stud_floor']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Unit :</span>
								<span><?php echo $r['stud_unit']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Refrence Address :</span>
								<span><?php echo $r['stud_othref']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Village :</span>
								<span><?php echo $r['stud_village']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">District :</span>
								<span><?php echo $r['stud_dist']; ?></span>
							</div>
						</div>
						<div class="row">    
							<div class="col-md-6">
								<span class="headtxt">Country :</span>
								<span><?php echo $cir['name']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">State :</span>
								<span><?php echo $str['name']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">City :</span>
								<span><?php echo $cr['name']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Pin Code :</span>
								<span><?php echo $r['stud_pincode']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Mobile No :</span>
								<span><?php echo $r['stud_contact']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Telephone No :</span>
								<span><?php echo $r['stud_teleno']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Fax No :</span>
								<span><?php echo $r['stud_fax']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Email Id :</span>
								<span><?php echo $r['stud_email']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Speacking Language :</span>
								<span><?php echo $r['stud_lang']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Date Of Birth :</span>
								<span><?php echo $r['stud_dob']; ?></span>    
							</div>
							<div class="col-md-6">
								<span class="headtxt">Birthday Country :</span>
								<span><?php echo $bcir['name']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Birthday State :</span>
								<span><?php echo $bstr['name']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Birthday City :</span>
								<span><?php echo $bcr['name']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Birthday Village :</span>
								<span><?php echo $r['stud_bvillage']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Birthday District :</span>
								<span><?php echo $r['stud_bdist']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-1" style="margin-top:10px;">
								<p style="font-size:16px;border-bottom: 1px solid #eee">KYC :</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Adhar Card No :</span>
								<span><?php echo $r['stud_adhar_no']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Pan No :</span>
								<span><?php echo $r['stud_panno']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Adhar card :</span>
								<span><img src="../<?php echo $r['stud_adhar_doc']; ?>" height="100" width="100"/></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Pan Card :</span>
								<span><img src="../<?php  echo $r['stud_pan_doc']; ?>" height="100" width="100"/></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2" style="margin-top:10px;">
								<p style="font-size:16px;border-bottom: 1px solid #eee">Family History :</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Father Fname :</span>
								<span><?php echo $r['stud_fath_fnm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Father Mname :</span>
								<span><?php echo $r['stud_fath_mnm']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Father Lname :</span>
								<span><?php echo $r['stud_fath_lnm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Father Mobile No :</span>
								<span><?php echo $r['stud_fath_mno']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Father Date Of Birth :</span>
								<span><?php echo $r['stud_fath_dob']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Father Email Id :</span>
								<span><?php echo $r['stud_fath_email']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Father Education :</span>
								<span><?php echo $r['stud_fath_edu']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Father Profession :</span>
								<span><?php echo $r['stud_fath_prof']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Mother Fname :</span>
								<span><?php echo $r['stud_moth_fnm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Mother Mname :</span>
								<span><?php echo $r['stud_moth_mnm']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Mother Lname :</span>
								<span><?php echo $r['stud_moth_lnm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Mother Mobile No :</span>
								<span><?php echo $r['stud_moth_mno']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Mother Date Of Birth :</span>
								<span><?php echo $r['stud_moth_dob']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Mother Email Id :</span>
								<span><?php echo $r['stud_moth_email']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Mother Education :</span>
								<span><?php echo $r['stud_moth_edu']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Mother Profession :</span>
								<span><?php echo $r['stud_moth_pro']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Brother Name :</span>
								<span><?php echo $r['stud_bro_fnm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Brother Age :</span>
								<span><?php echo $r['stud_bro_age']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Sister Name :</span>
								<span><?php echo $r['stud_sis_fnm']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Sister Age :</span>
								<span><?php echo $r['stud_sis_age']; ?></span>
							</div>
						</div>
						<div class="row">
							<?php if($r['ngo_add_ref'] != ""){ ?>
								<div class="col-md-6">
									<span class="headtxt">NGO Refrence :</span>
									<span><?php echo $ngr['ngo_name']; ?></span>
								</div>
							<?php }else if($r['vol_add_ref'] != ""){ ?>
								<div class="col-md-6">
									<span class="headtxt">Volunteer Refrence :</span>
									<span><?php echo $vlr['vol_fnm']; ?></span>
								</div>
							<?php }else{ ?>
								<div class="col-md-6">
									<span class="headtxt">Other Refrence :</span>
									<span><?php echo $r['oth_add_ref']; ?></span>
								</div>
							<?php } ?>
							<div class="col-md-6">
								<span class="headtxt">Reference Type :</span>
								<span><?php echo $r['ref_type']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">Annual Income :</span>
								<span><?php echo $r['annual_income']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Student Special Need :</span>
								<span><?php echo $r['stud_spec_need']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3" style="margin-top:10px;">
								<p style="font-size:16px;border-bottom: 1px solid #eee">Academic Information:</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">School Id Card No :</span>
								<span><?php echo $r['schl_idcard_no']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Student Special Need :</span>
								<span><?php echo $r['stud_spec_need']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">School Name :</span>
								<span><?php echo $r['schl_name']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Student Address :</span>
								<span><?php echo $r['schl_add']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">School Midium :</span>
								<span><?php echo $r['stud_midium']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Student Class / Grade :</span>
								<span><?php echo $r['stud_class']; ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<span class="headtxt">School Education Board :</span>
								<span><?php echo $r['stud_education_board']; ?></span>
							</div>
							<div class="col-md-6">
								<span class="headtxt">Student Status :</span>
								<span><?php echo $nm; ?></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 ">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Change Student Status</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" id="myForm" method="post">
								<div class="form-body">
									<input type="hidden" id="id" name="id" value="<?php echo $r['stud_id']; ?>">
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="status" name="status">
											<option value="">Select Status</option>
											<option value="1">Approve</option>
											<option value="0">Unapprove</option>
										</select>
										<label for="form_control_1"><label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="edit_stud" name="edit_stud" value="Submit" />
									<button type="clear" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
<?php	
	}
	}
?>		
			</div>
		</div>
	</div>
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<?php include('quick_sidebar.php'); ?>
</div>
<?php include('footer.php'); ?>

<script>
/*jQuery(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
});*/
</script>

<?php include("js.php"); ?>

<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
 var rough_enter1 = 0;
 $(document).ready(function() {
	
	$("#edit_stud").on('click', function(){
		//alert("0");

				var status = document.getElementById('status').value;
				var id = document.getElementById('id').value;
				
				if(requ && requ.readyState != 4)
				{
				requ.abort();
				}
				
				requ = $.ajax({
					type:"POST",
					data:"status="+status+"&id="+id,
					url:"ad_data.php?call=edit_student",
					success: function(html){
						//alert(html);
						if(html == 1){
							//alert("Update Successfully.");
							document.getElementById('status').value = '';
							window.location = "student_list.php";
						}else
						{
							alert("Try Again.");
						}	
					}
				});
					
    });
	
 });

 
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>