<?php 
	include("header.php");
?>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="web_management">Web Management</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="touch_a_life_site">Touch A Life Site</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="logo_banner">Logo And Banner</a>
				
			</li>
		</ul>
	</div>
<div class="row">
	<link rel="stylesheet" href="<?php echo $site_url?>book_admin/css/croppie.css">
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog" style="width: 90%;">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Profile Picture Upload</h4>
			</div>
			<div class="modal-body">
				<div class="row margin-bottom-60">
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<div id="upload-demo" style="width:350px"></div>
						
						<i class="fa fa-undo" aria-hidden="true" id="rotateLeft" data-rotate="-90" style="margin-right: 15px;"></i>
						<i class="fa fa-repeat" aria-hidden="true" id="rotateRight" data-rotate="90"></i>
						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
						<strong>Select Image:</strong>
						<br/>
						<input type="file" id="upload">
						<br/>
						<button class="btn btn-success upload-result">Upload Image</button>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12" >
						<div id="upload-demo-i" style="background:#e1e1e1;width:300px;height:300px;margin-top: 30px;text-align: center;padding-top: 25px;"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php 

	$country = '';
	$state = '';
	$city = '';
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$spre = $con->query("select * from quick_user where q_id = '$id'");
		if(mysqli_num_rows($spre) > 0){
			$r = mysqli_fetch_array($spre);
			
			$country = $r['q_country'];
			$state = $r['q_state'];
			$city = $r['q_city'];
			
?>

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
		<form id="form" method="post" enctype="multipart/form-data">
			<div class="form-body">
				
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="hidden" class="getData" id="q_id" name="q_id" value="<?php echo $r['q_id']?>">
						<select class="form-control getData" id="logo_type" name="logo_type">
						<option value="">Select Logo Type</option>
						<option value="header">Header</option>
						<option value="footer">Footer</option>

					</select>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<input type="file" class="form-control getData" id="logo_file" name="logo_file"> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
					<select class="form-control getData" id="logo_status" name="logo_status">
						<option value="1">Active</option>
						<option value="0">Deactive</option>
					</select>
					</div>
					
				</div>
				
			<div class="row" >
				<hr>
				<div class="col-xs-12">
					<input type="submit" class="btn blue" id="add_admin" name="add_admin" value="Submit" />
					<button type="clear" class="btn default">Cancel</button>
				</div>
			</div>
		</form>
		</div>
	</div>
</div>


<?php	
		}
	}	else {
?>		

<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
	<div class="col-md-12 txtinputmb20 gray-bg register-now portlet light bordered">
		<div class="portlet-body form">
			
			<div class="form-body">
				
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<label>Logo Type :- </label>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
						<select class="form-control getData" id="logo_type" name="logo_type">
						<option value="">Select Logo Type</option>
						<option value="header">Header</option>
						<option value="footer">Footer</option>

						</select>

					</div>
				</div>	
				<div class="row">
				<form method="post" name="s3_upload_tal" id="s3_upload_logo" enctype="multipart/form-data" action="<?php echo $site_url?>upload_img_hd.php" style="padding: 0px; margin: 0px;" onchange="readURLs3(this,'tal_logo');">
						
						<input type="hidden" id="types" name="types" value="logo" />
					
					<div class="col-md-3 col-sm-3 col-xs-6">
					<label><strong>Logo File (PNG only) :- </strong></label>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
					
						<input type="file" class="form-control getData inputfile inputfile-6" id="logo_file" name="logo_file" accept="image/x-png"> 
					</div>
				</form>
				</div>

					<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
					<label>Logo Status :- </label>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
					<select class="form-control getData" id="logo_status" name="logo_status">
					<option value="">Select Logo Status</option>
						<option value="0">Deactive</option>
						<option value="1">Active</option>
					</select>
					</div>
					
				</div>
				
			<div class="row" >
				<hr>
				<div class="col-xs-12">
					<input type="submit" class="btn blue" id="add_admin" name="add_admin" value="Submit" />
					<button type="clear" class="btn default">Cancel</button>
				</div>
			</div>
		
		</div>
	</div>
</div>
<?php
	}
?>
 
</div>
 
<?php include('footer.php'); ?> 
<script src="<?php echo $site_url?>book_admin/js/croppie.js"></script>
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
var rough_enter1 = 0;
$(document).ready(function() { 	
	$(".nav_web_management").addClass('active_head');



	/*$uploadCrop = $('#upload-demo').croppie({
		enableExif: true,
		viewport: {
			width: 250,
			height: 250
		},
		boundary: {
			width: 300,
			height: 300
		},
		enableExif: true,
		enableOrientation: true
	});

	$('#upload').on('change', function () { 
		var reader = new FileReader();
		reader.onload = function (e) {
			$uploadCrop.croppie('bind', {
				url: e.target.result
			}).then(function(){
				console.log('jQuery bind complete');
			});
			
		}
		reader.readAsDataURL(this.files[0]);
	});

	$( "#rotateLeft" ).click(function() {
		$uploadCrop.croppie('rotate', parseInt($(this).data('rotate')));
	});

	$( "#rotateRight" ).click(function() {
		$uploadCrop.croppie('rotate',parseInt($(this).data('rotate')));
	});

	$('.upload-result').on('click', function (ev) {
		$uploadCrop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function (resp) {
			$.ajax({
				url: "<?php echo $site_url?>ajaxpro",
				type: "POST",
				data: {"image":resp,"type":"profile"},
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function (data) {
					var spli = data.split('part');
					if(spli[0] == 1){
						document.getElementById("ad_profile").value = spli[1];
					} else {
						alert("Try Again.");
					}					
					html = '<img src="' + resp + '" />';
					$("#upload-demo-i").html(html);
					$(".response_gif").hide();
				}
			});
		});
	});*/
	/*
	$("#add_admin").on('click', function(){
		var ad_id = document.getElementById('ad_id').value;
		var ad_fname = document.getElementById('ad_fname').value;
		var ad_mname = document.getElementById('ad_mname').value;
		var ad_lname = document.getElementById('ad_lname').value;
		var ad_email = document.getElementById('ad_email').value;
		var ad_pass = document.getElementById('ad_pass').value;
		var ad_work_type = document.getElementById('ad_work_type').value;
		var ad_type = document.getElementById('ad_type').value;
		var ad_profile = document.getElementById('ad_profile').value;
		var ad_sort = document.getElementById('ad_sort').value;
		var ad_display = document.getElementById('ad_display').value;
		var ad_gender = document.getElementById('ad_gender').value;
		var ad_blood_group = document.getElementById('ad_blood_group').value;
		var ad_floor = document.getElementById('ad_floor').value;
		var ad_units = document.getElementById('ad_units').value;
		var ad_so_name = document.getElementById('ad_so_name').value;
		var ad_so_no = document.getElementById('ad_so_no').value;
		var ad_add1 = document.getElementById('ad_add1').value;
		var ad_add2 = document.getElementById('ad_add2').value;
		var ad_other_add = document.getElementById('ad_other_add').value;
		var ad_village = document.getElementById('ad_village').value;
		var ad_taluka = document.getElementById('ad_taluka').value;
		var ad_district = document.getElementById('ad_district').value;
		var ad_country = document.getElementById('ad_country').value;
		var ad_state = document.getElementById('ad_state').value;
		var ad_city = document.getElementById('ad_city').value;
		var ad_pincode = document.getElementById('ad_pincode').value;
		var ad_con_code = document.getElementById('ad_con_code').value;
		var ad_mobile_no = document.getElementById('ad_mobile_no').value;
		var ad_con_code_tel = document.getElementById('ad_con_code_tel').value;
		var ad_area_code_tel = document.getElementById('ad_area_code_tel').value;
		var ad_tel_no = document.getElementById('ad_tel_no').value;
		var ad_con_code_fax = document.getElementById('ad_con_code_fax').value;
		var ad_active = document.getElementById('ad_active').value;
		var ad_area_code_fax = document.getElementById('ad_area_code_fax').value;
		var ad_fa_no = document.getElementById('ad_fa_no').value;
		var ad_dob = document.getElementById('ad_dob').value;
		var ad_id_proof_no = document.getElementById('ad_id_proof_no').value;
		var ad_front_id_proof_img = document.getElementById('ad_front_id_proof_img').value;
		var ad_back_id_proof_img = document.getElementById('ad_back_id_proof_img').value;
		var ad_pan_no = document.getElementById('ad_pan_no').value;
		var ad_pan_no_img = document.getElementById('ad_pan_no_img').value;
		var ad_edu = document.getElementById('ad_edu').value;
		var ad_edu_img = document.getElementById('ad_edu_img').value;
		var ad_status = document.getElementById('ad_status').value;
		var ad_join_date = document.getElementById('ad_join_date').value;
		var ad_leaving_date = document.getElementById('ad_leaving_date').value;
		
		if(ad_fname == ""){
			alert("Enter First Name");
		} else if(ad_lname == "") {
			alert("Enter Last Name");
		} else if(ad_mname == "") {
			alert("Enter Middle Name");
		} else if(ad_email == "") {
			alert("Enter Email");
		} else if(ad_pass == "") {
			alert("Enter Password");
		} else if(ad_work_type == "") {
			alert("Enter User Type");
		} else if(ad_type == "") {
			alert("Enter Role Type");
		} else if(ad_profile == "") {
			alert("Enter Profile Picture");
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",	data:"ad_id="+ad_id+"&ad_fname="+ad_fname+"&ad_mname="+ad_mname+"&ad_lname="+ad_lname+"&ad_email="+ad_email+"&ad_pass="+ad_pass+"&ad_work_type="+ad_work_type+"&ad_type="+ad_type+"&ad_profile="+ad_profile+"&ad_sort="+ad_sort+"&ad_display="+ad_display+"&ad_gender="+ad_gender+"&ad_blood_group="+ad_blood_group+"&ad_floor="+ad_floor+"&ad_units="+ad_units+"&ad_so_name="+ad_so_name+"&ad_so_no="+ad_so_no+"&ad_add1="+ad_add1+"&ad_add2="+ad_add2+"&ad_other_add="+ad_other_add+"&ad_village="+ad_village+"&ad_taluka="+ad_taluka+"&ad_district="+ad_district+"&ad_country="+ad_country+"&ad_state="+ad_state+"&ad_city="+ad_city+"&ad_pincode="+ad_pincode+"&ad_con_code="+ad_con_code+"&ad_mobile_no="+ad_mobile_no+"&ad_con_code_tel="+ad_con_code_tel+"&ad_area_code_tel="+ad_area_code_tel+"&ad_tel_no="+ad_tel_no+"&ad_con_code_fax="+ad_con_code_fax+"&ad_area_code_fax="+ad_area_code_fax+"&ad_fa_no="+ad_fa_no+"&ad_dob="+ad_dob+"&ad_id_proof_no="+ad_id_proof_no+"&ad_front_id_proof_img="+ad_front_id_proof_img+"&ad_back_id_proof_img="+ad_back_id_proof_img+"&ad_pan_no="+ad_pan_no+"&ad_pan_no_img="+ad_pan_no_img+"&ad_edu="+ad_edu+"&ad_edu_img="+ad_edu_img+"&ad_status="+ad_status+"&ad_join_date="+ad_join_date+"&ad_leaving_date="+ad_leaving_date+"&ad_active="+ad_active,
				url:"ad_data.php?call=save_admin",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Submit Successfully.");
						location.reload();
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });

	*/
	
	$("#add_admin").on('click', function(){
		var idArray = [];
		var valueArray = [];
		$('.getData').each(function() {
			var elt = $("#"+this.id).attr('type');
			if(elt == 'checkbox'){
				var checkboxc = '';
				$('input[name="'+this.name+'"]:checked').each(function() {
					checkboxc += this.value+'part';
				});				
				idArray.push(this.name);
				valueArray.push(checkboxc);
			} else if(elt == 'radio'){
				var radios = '';
				$('input[name="'+this.name+'"]:checked').each(function() {
					radios += this.value;
				});				
				idArray.push(this.name);
				valueArray.push(radios);
			} else {
				idArray.push(this.id);
				valueArray.push(this.value);
			}
		});
		
		console.log("idArray = "+ idArray);
		console.log("valueArray = "+ valueArray);
	
	});

	$(".getData").keypress(function(event){
        var ew = event.which;
        if(ew == 32)
            return true;
        if(48 <= ew && ew <= 57)
            return true;
        if(64 <= ew && ew <= 90)
            return true;
        if(97 <= ew && ew <= 122)
            return true;
        return false;
	});

});

	function readURLs3(input, typex) {
		
		/*	if(typex == 'tal'){
				document.getElementById('ad_profile').value = '';
			}*/
			
			$('#s3_upload_'+typex).ajaxForm({
				target:'',
				beforeSubmit:function(e){
					$('#s3_msg_'+typex).html("File Uploading...");
				}, 
				cache: false,
				success:function(response){
					if(response == 1) {
						$('#s3_msg_'+typex).html("File Uploaded");
					} else if(response == 2){
						$('#s3_msg_'+typex).html("File Not Upload.");
					} else if(response == 3){
						$('#s3_msg_'+typex).html("File Format Invalid.");
					} else {
						$('#s3_msg_'+typex).html("File Upload");
						console.log("response "+response);
						if(typex == 'profile'){
							document.getElementById('ad_profile').value = response;
						} else if(typex == 'fornt_img'){
							document.getElementById('ad_front_id_proof_img').value = response;
						} else if(typex == 'back_img'){
							document.getElementById('ad_back_id_proof_img').value = response;
						} else if(typex == 'pan_img'){
							document.getElementById('ad_pan_no_img').value = response;
						} else if(typex == 'edu_img'){
							document.getElementById('ad_edu_img').value = response;
						}
						
					}
				},complete: function(response) {
				},
				error:function(e){
				}
			}).submit();
		
	}
 function validation(){
 	var logo_type = document.getElementById('logo_type').value;
 	var logo_url = document.getElementById('logo_url').value;
 	var logo_status = document.getElementById('logo_status').value;
 	if(logo_type == ''){
 		alert("please select any type");
 		return false;
 	}else if(logo_url == ''){
 		alert("please select any Logo");
 		return false;
 	}else if(logo_status == ''){
 		alert("please select any Logo Status");
 		return false;
 	}
 }
</script>

</body>
</html>