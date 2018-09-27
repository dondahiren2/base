<?php 
	include("header.php");
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$ngo_id = 11;
	$kyc_admin = 1;
	$type = 'VOL';
?>
<link rel="stylesheet" href="https://foliotek.github.io/Croppie/croppie.css">
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="<?php echo $admin_url?>dashboard">Dashboard</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="<?php echo $admin_url?>volunteer_list">Volunteer List</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Volunteer Details</a>
			</li>
		</ul>
	</div>
	<div class="row">
	<div class="col-md-12">
	<div class="box box-primary">
		<?php
			$diver = 0;
			$vol_nm = $con->query("SELECT cr_form_name, cr_form_code, cr_pre_fix FROM `create_forms` as cf join create_form_page as cr on cf.cf_uid = cr.cr_cf_uid  WHERE cf_p_id = $ngo_id  and cf_status = 0 order by cr_position asc");
			if(mysqli_num_rows($vol_nm) > 0){
				while($r = mysqli_fetch_assoc($vol_nm)){
					if($r['cr_pre_fix'] == 'admin'){
						if($diver == 0){
							echo '<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
									<div class="col-md-12 border_admi"></div>	
								</div>';
						}
						$diver++;
					}
					echo '<div class="portlet light bordered">';
						$cr_form_name = $r['cr_form_name'];
						$pre_fix = $r['cr_pre_fix'];
						echo '<h3 class="form-title">'.$cr_form_name.'</h3>';
						$cr_form_code = $r['cr_form_code'];
						include('../forms/'.$cr_form_code.'.php');
					echo '</div>';
				}
			}
		?>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<input type="submit" name="submit_ngo" class="btn btn-primary" id="submit_ngo" value="Submit"/>
		</div>
	</div>
	</div>
	</div>
 

<input type="hidden" id="bcd_data_type" />
<input type="hidden" id="bank_data_type" />
<input type="hidden" id="kyc_data_type" />
<input type="hidden" id="ref_data_type" />

<input type="hidden" id="bp_unique_id" />
<input type="hidden" id="bp_tal_id" />
 
<?php include('footer.php'); ?>

<script src="https://foliotek.github.io/Croppie/croppie.js"></script>
<script>
var requ;
			
$(document).ready(function() {
	$(".nav_registered_members").addClass('active_head');
	
	$uploadCrop = $('#upload-demo').croppie({
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
			var unique_id = document.getElementById('bp_unique_id').value;
			var tal_id = document.getElementById('bp_tal_id').value;
			var bp_fname = document.getElementById('bp_fname').value;
			var bp_lname = document.getElementById('bp_lname').value;
			$.ajax({
				url: "<?php echo $site_url?>ajaxpro",
				type: "POST",
				data: {"image":resp, "type":"Volunteer", "parts":"logo", "unique_id": unique_id, "tal_id": tal_id, "names": bp_fname+'-'+bp_lname },
				success: function (data) {
					var split = data.split('part');
					if(split[0] == 1){
						var img = split[1];
						document.getElementById("bk_profile").value = img;
						alert("Upload Successfully.");
					} else {
						alert("Try Again.");
					}					
					html = '<img src="' + resp + '" />';
					$("#upload-demo-i").html(html);
				}
			});
		});
	});
	
	$("#submit_ngo").click(function (){ 
 	
		 
		var bp_fname = document.getElementById('bp_fname').value;
		var bp_mname = document.getElementById('bp_mname').value;
		var bp_lname = document.getElementById('bp_lname').value;
		var bp_mobile_no = document.getElementById('bp_mobile_no').value;
		var bp_email = document.getElementById('bp_email').value;
		var unique_id = document.getElementById('bp_unique_id').value;
		var bcd_data_type = document.getElementById('bcd_data_type').value;
		var bank_data_type = document.getElementById('bank_data_type').value;
		var kyc_data_type = document.getElementById('kyc_data_type').value;
		var ref_data_type = document.getElementById('ref_data_type').value;
		
		if(bp_fname == ''){
			alert('Enter First Name.');
		} else if(bp_mname == ''){
			alert('Enter Middel Name.');
		} else if(bp_lname == ''){
			alert('Enter Last Name.');
		} else if(bp_mobile_no == ''){
			alert('Enter Mobile No.');
		} else if(bp_email == ''){
			alert('Enter Email.');
		} else {
			
			var idArray = [];
			var valueArray = [];
			
			$('.get_data').each(function() {
				
				var elt = $("#"+this.id).attr('type');
				console.log(elt+' '+this.name);
				
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
		
			var con_id = [];
			var con_val = [];
			
			$('.contact_getData').each(function() {
				var elt = $("#"+this.id).attr('type');
				if(elt == 'checkbox'){
					var checkboxc = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						checkboxc += this.value+'part';
					});				
					con_id.push(this.name);
					con_val.push(checkboxc);
				} else if(elt == 'radio'){
					var radios = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						radios += this.value;
					});				
					con_id.push(this.name);
					con_val.push(radios);
				} else {
					con_id.push(this.id);
					con_val.push(this.value);
				}
			});
		
			var bank_id = [];
			var bank_val = [];
			
			$('.bank_getData').each(function() {
				var elt = $("#"+this.id).attr('type');
				if(elt == 'checkbox'){
					var checkboxc = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						checkboxc += this.value+'part';
					});				
					bank_id.push(this.name);
					bank_val.push(checkboxc);
				} else if(elt == 'radio'){
					var radios = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						radios += this.value;
					});				
					bank_id.push(this.name);
					bank_val.push(radios);
				} else {
					bank_id.push(this.id);
					bank_val.push(this.value);
				}
			});
		
			var kyc_id = [];
			var kyc_val = [];
			
			$('.kyc_getData').each(function() {
				var elt = $("#"+this.id).attr('type');
				if(elt == 'checkbox'){
					var checkboxc = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						checkboxc += this.value+'part';
					});				
					kyc_id.push(this.name);
					kyc_val.push(checkboxc);
				} else if(elt == 'radio'){
					var radios = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						radios += this.value;
					});				
					kyc_id.push(this.name);
					kyc_val.push(radios);
				} else {
					kyc_id.push(this.id);
					kyc_val.push(this.value);
				}
			});
		
			var ref_id = [];
			var ref_val = [];
			
			
			$('.get_ref_vol').each(function() {
				var elt = $("#"+this.id).attr('type');
				if(elt == 'checkbox'){
					var checkboxc = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						checkboxc += this.value+'part';
					});				
					ref_id.push(this.name);
					ref_val.push(checkboxc);
				} else if(elt == 'radio'){
					var radios = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						radios += this.value;
					});				
					ref_id.push(this.name);
					ref_val.push(radios);
				} else {
					ref_id.push(this.id);
					ref_val.push(this.value);
				}
			});
			 
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"id=<?php echo $id?>&idArray="+idArray+"&valueArray="+valueArray+"&unique_id="+unique_id+"&con_id="+con_id+"&con_val="+con_val+"&bcd_data_type="+bcd_data_type+"&bank_id="+bank_id+"&bank_val="+bank_val+"&bank_data_type="+bank_data_type+"&kyc_data_type="+kyc_data_type+"&kyc_val="+kyc_val+"&kyc_id="+kyc_id+"&ref_val="+ref_val+"&ref_id="+ref_id+"&ref_data_type="+ref_data_type,
				url:"<?php echo $admin_url?>ad_data.php?call=update_volunteer",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Submit successful");
						location.reload();
					} else if(html == 2){
						alert("Submit successful");
						location.reload();
					} else if(html == 3){
						alert("Submit successful");
						location.reload();
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			}); 
		}
	});
 
	$("#submit_call_interview").on('click', function(){
		var remark = document.getElementById('bp_call_int_remark').value;
		var status = document.getElementById('bp_call_int_status').value;
		var unique_id = document.getElementById('bp_unique_id').value;
		 
		if(remark == ""){
			alert('Enter Call Interview Question Remark.');
		} else {
			var qua = [];
			var ans = [];
			var iq_id = [];
			var types = [];
			
			$('.get_ans').each(function() {
				var elt = $("#"+this.id).attr('data-id');
				var ty = $("#"+this.id).attr('data-type');
				var quas = document.getElementById('que_'+elt).innerHTML;
				var anss = document.getElementById('ans_'+elt).value;
				iq_id.push(elt);
				qua.push(quas);
				ans.push(anss);
				types.push(ty);
				
			});
		
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"remark="+remark+"&status="+status+"&iq_id="+iq_id+"&qua="+qua+"&ans="+ans+"&unique_id="+unique_id+"&types="+types,
				url:"<?php echo $admin_url?>ad_data.php?call=interview_question_fillup",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1) {
						alert("Submit Successfully");
						location.reload();
					} else if(html == 2) {
						alert("Update Successfully");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });

	$("#bp_visit").on('change', function(){
		var id = this.value;
		if(id == 1){
			document.getElementById("bp_v_from_name").readOnly = false;
			document.getElementById("bp_v_to_name").readOnly = false;
			document.getElementById("bp_v_remark").readOnly = false;
			document.getElementById("bp_visiting_status").disabled = false;
		} else {
			document.getElementById("bp_v_from_name").readOnly = true;
			document.getElementById("bp_v_to_name").readOnly = true;
			document.getElementById("bp_v_remark").readOnly = true;
			document.getElementById("bp_visiting_status").disabled = true;

		}
    });

	$("#submit_super_commnication").on('click', function(){
		var disc = document.getElementById('bp_call_sup_disc').value;
		var remark = document.getElementById('bp_call_sup_remark').value;
		var status = document.getElementById('bp_sup_ad_status').value;
		var unique_id = document.getElementById('bp_unique_id').value;
		 
		if(remark == ""){
			alert('Enter Super Admin Communication Remark.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"remark="+remark+"&status="+status+"&disc="+disc+"&unique_id="+unique_id,
				url:"<?php echo $admin_url?>ad_data.php?call=submit_super_commnication_fillup",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1) {
						alert("Submit Successfully");
						location.reload();
					} else if(html == 2) {
						alert("Update Successfully");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });

	$("#create_ngo_approved").on('click', function(){
		var disc = document.getElementById('bp_ngo_approve_disc').value;
		var remark = document.getElementById('bp_ngo_approve_remark').value;
		var status = document.getElementById('bp_ngo_approve_status').value;
		var unique_id = document.getElementById('bp_unique_id').value;
		var biv_ngo_id = document.getElementById('biv_ngo_id').value;
		var fnames = document.getElementById('bp_fname').value;
		var lnames = document.getElementById('bp_lname').value;
		var names = fnames+' '+lnames;
		  
		if(disc == ""){
			alert('Enter Communication Details.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"remark="+remark+"&status="+status+"&disc="+disc+"&unique_id="+unique_id+"&biv_ngo_id="+biv_ngo_id+"&names="+names,
				url:"<?php echo $admin_url?>ad_data.php?call=submit_ngo_approved_commnication_fillup",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1) {
						alert("Submit Successfully");
						location.reload();
					} else if(html == 2) {
						alert("Update Successfully");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });

	$("#submit_visiting").on('click', function(){
		var bp_visit = document.getElementById('bp_visit').value;
		var from_name = document.getElementById('bp_v_from_name').value;
		var to_name = document.getElementById('bp_v_to_name').value;
		var file_upload = document.getElementById('bp_v_file_upload').value;
		var remark = document.getElementById('bp_v_remark').value;
		var unique_id = document.getElementById('bp_unique_id').value;
		var status = document.getElementById('bp_visiting_status').value;
		 
		if(from_name == ""){
			alert('Enter Visiting Person Name.');
		} else if(to_name == ""){
			alert('Enter From Person Name.');
		} else if(remark == ""){
			alert('Enter Remark.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"remark="+remark+"&status="+status+"&bp_visit="+bp_visit+"&unique_id="+unique_id+"&from_name="+from_name+"&to_name="+to_name+"&file_upload="+file_upload,
				url:"<?php echo $admin_url?>ad_data.php?call=submit_visiting_fillup",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1) {
						alert("Submit Successfully");
						location.reload();
					} else if(html == 2) {
						alert("Update Successfully");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });
	
	$("#submit_admin_part").on('click', function(){
		var designation = document.getElementById('bp_designation').value;
		var user_role = document.getElementById('bp_user_role').value;
		var show_on_webiste = document.getElementById('bp_show_on_webiste').value;
		var remark = document.getElementById('bp_remark').value;
		var unique_id = document.getElementById('bp_unique_id').value;
		var status = document.getElementById('bp_status').value;
		 
		if(designation == ""){
			alert('Enter Visiting Person Name.');
		} else if(user_role == ""){
			alert('Enter From Person Name.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"remark="+remark+"&status="+status+"&designation="+designation+"&unique_id="+unique_id+"&user_role="+user_role+"&show_on_webiste="+show_on_webiste,
				url:"<?php echo $admin_url?>ad_data.php?call=submit_administration1_fillup",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1) {
						alert("Submit Successfully");
						location.reload();
					} else if(html == 2) {
						alert("Update Successfully");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });
 	
	$("#kyc_request").on('click', function(){
		var bk_status = document.getElementById('bk_status').value;
		var bk_varification_remark = document.getElementById('bk_varification_remark').value;
		var unique_id = document.getElementById('bp_unique_id').value;
		if(requ && requ.readyState != 4) {
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"bk_status="+bk_status+"&bk_varification_remark="+bk_varification_remark+"&unique_id="+unique_id,
			url:"<?php echo $admin_url?>ad_data.php?call=kyc_request",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(html){
				if(html == 1) {
					alert("Submit Successfully");
					location.reload();
				} else if(html == 2) {
					alert("Update Successfully");
				} else {
					alert("Try Again.");
				}
				$(".response_gif").hide();
			}
		});
    });
 	
	$("#upload_logo").on('click', function(){
		$("#myModal").modal();
	});
});

	loadData();
	function loadData(){
		var country = '';
		var state = '';

		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"bp_id=<?php echo $id?>",
			dataType:"json",
			url:"<?php echo $admin_url?>ad_data.php?call=get_profile_vol",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(data){
				var profile = data.basic_profile;
				var contact_details = data.basic_contact_details;
				var basic_bank_details = data.basic_bank_details;
				var basic_kyc = data.basic_kyc;
				var basic_ref1 = data.basic_ref1;
				
				var per_con = '';
				var per_state = '';
				var per_city = '';
				/*console.log("profile "+JSON.stringify(profile));*/
				profile.forEach(function(elementObject){
					var keys = Object.keys(elementObject);
					keys.forEach(function(key){
						$("#"+key).val(elementObject[key]);
					   
						if(key == 'bp_country' ){
							per_con = elementObject[key];
						}
						if(key == 'bp_state' ){
							per_state = elementObject[key];
						}
						if(key == 'bp_city' ){
							per_city = elementObject[key];
						}
						
						if(key == 'bp_ngo_approve_date' ){
							$("#bp_ngo_approve_date").html(elementObject[key]); 
						}
						
						if(key == 'bp_sup_l_u_date' ){
							$("#bp_sup_l_u_date").html(elementObject[key]); 
						}
					})
				});
				country_name(per_con, 'bp_', 0, 0, per_state, per_city);
				
				if(contact_details.length == 0){
					$("#bcd_data_type").val('inserts');
				} else {
					$("#bcd_data_type").val('updates');
				}
				
				if(basic_kyc.length == 0){
					$("#kyc_data_type").val('inserts');
				} else {
					$("#kyc_data_type").val('updates');
				}
				
				if(basic_ref1.length == 0){
					$("#ref_data_type").val('inserts');
				} else {
					$("#ref_data_type").val('updates');
				}
				
				if(basic_bank_details.length == 0){
					$("#bank_data_type").val('inserts');
				} else {
					$("#bank_data_type").val('updates');
				}

				var per_con = '';
				var per_state = '';
				var per_city = '';
				
				contact_details.forEach(function(elementObject){
					var keys = Object.keys(elementObject);
					keys.forEach(function(key){
						$("#"+key).val(elementObject[key]);
						if(key == 'bcd_country' ){
							per_con = elementObject[key];
						}
						if(key == 'bcd_state' ){
							per_state = elementObject[key];
						}
						if(key == 'bcd_city' ){
							per_city = elementObject[key];
						}
					})
				});
				country_name(per_con, 'bcd_', 0, 0, per_state, per_city);
				 

				basic_bank_details.forEach(function(elementObject){
					var keys = Object.keys(elementObject);
					keys.forEach(function(key){
					  $("#"+key).val(elementObject[key]);
					  
					  if(key == 'bbd_bank_proof'){ 
							if(elementObject[key]){
								document.getElementById("links_bank_photo").href = "<?php echo $cdn_path ?>"+elementObject[key];
								var extension = elementObject[key].split('.').pop(); 
								if(extension == 'pdf'){
									document.getElementById("image_bank_photo").src = "<?php echo $cdn_path ?>uploads/pdf.png";
								} else {
									document.getElementById("image_bank_photo").src = "<?php echo $cdn_path ?>"+elementObject[key];
								}
								$("#links_bank_photo").css({'display':'block'});
							} else {
								$("#links_bank_photo").css({'display':'none'});
							}
						}
						
					})
				});
				
				basic_ref1.forEach(function(elementObject){
					var keys = Object.keys(elementObject);
					keys.forEach(function(key){
						$("#"+key).val(elementObject[key]);
						if(key == 'biv_connect_ngo'){
							if(elementObject[key] == 0){
								document.getElementById("biv_connect_ngo1").checked = true;
								document.getElementById("biv_connect_ngo2").checked = false;
								$("#ngo_drop").css({"display":"block"});
							} else {
								document.getElementById("biv_connect_ngo2").checked = true;
								document.getElementById("biv_connect_ngo1").checked = false;
								$("#ngo_drop").css({"display":"none"});
							}
						}
					})
				});
				
				var logo_path = '';
 
				basic_kyc.forEach(function(elementObject){
					var keys = Object.keys(elementObject);
					keys.forEach(function(key){
						$("#"+key).val(elementObject[key]);
						if(key == 'bk_profile'){
							logo_path = elementObject[key];
						}
							
						if(key == 'bk_id_proof_front_pic'){
							if(elementObject[key]){
								document.getElementById("links_proof_front").href = "<?php echo $cdn_path ?>"+elementObject[key];
								var extension = elementObject[key].split('.').pop(); 
								if(extension == 'pdf'){
									document.getElementById("image_proof_front").src = "<?php echo $cdn_path ?>uploads/pdf.png";
								} else {
									document.getElementById("image_proof_front").src = "<?php echo $cdn_path ?>"+elementObject[key];
								}
								$("#links_proof_front").css({'display':'block'});
							} else {
								$("#links_proof_front").css({'display':'none'});
							}
						}
					  	
						if(key == 'bk_id_proof_back_pic'){ 
							if(elementObject[key]){
								document.getElementById("links_proof_back").href = "<?php echo $cdn_path ?>"+elementObject[key]; 
								var extension = elementObject[key].split('.').pop(); 
								if(extension == 'pdf'){
									document.getElementById("image_proof_back").src = "<?php echo $cdn_path ?>uploads/pdf.png";
								} else {
									document.getElementById("image_proof_back").src = "<?php echo $cdn_path ?>"+elementObject[key];
								}
								$("#links_proof_back").css({'display':'block'});
							} else {
								$("#links_proof_back").css({'display':'none'});
							}
						}
  
						if(key == 'bk_pan_card_pic'){ 
							if(elementObject[key]){
								document.getElementById("links_pan_card").href = "<?php echo $cdn_path ?>"+elementObject[key]; 
								var extension = elementObject[key].split('.').pop();
								if(extension == 'pdf'){
									document.getElementById("image_pan_card").src = "<?php echo $cdn_path ?>uploads/pdf.png";
								} else {
									document.getElementById("image_pan_card").src = "<?php echo $cdn_path ?>"+elementObject[key];
								}
								$("#links_pan_card").css({'display':'block'});
							} else {
								$("#links_pan_card").css({'display':'none'});
							}
						} 
					
						if(key == 'bk_education_pic'){ 
							if(elementObject[key]){
								document.getElementById("links_education").href = "<?php echo $cdn_path ?>"+elementObject[key]; 
								var extension = elementObject[key].split('.').pop();
								if(extension == 'pdf'){
									document.getElementById("image_education").src = "<?php echo $cdn_path ?>uploads/pdf.png";
								} else {
									document.getElementById("image_education").src = "<?php echo $cdn_path ?>"+elementObject[key];
								}
								$("#links_education").css({'display':'block'});
							} else {
								$("#links_education").css({'display':'none'});
							}
						} 
					});
				});
				
				if(logo_path){
					document.getElementById("logo_path").src = "<?php echo $cdn_path ?>"+logo_path;
					$("#logo_path").css({'display':'block'});
				} else {
					$("#logo_path").css({'display':'none'});
				}
				
				get_call_interview(); 
				
				$(".response_gif").hide();
			}
		});
	}
	
	function readURLs3(work_path, ids) {
		
		console.log(work_path+" "+ids);
 
		var tal_ids = document.getElementById("bp_tal_id").value;
		document.getElementById("tal_ids_"+work_path).value = tal_ids;
		if(tal_ids == ""){
		} else {
			$('#'+work_path).ajaxForm({
				target:'',
				beforeSubmit:function(e){
					$('#msg_'+work_path).html("File Uploading...");
				}, 
				cache: false,
				success:function(response){
					if(response == 2){
						$('#msg_'+work_path).html("File Not Upload.");
					} else if(response == 3){
						$('#msg_'+work_path).html("File Format Invalid.");
					} else {
						$('#msg_'+work_path).html("File Upload"); 
						var splits = response.split('splits');
						
						if(splits[1] == 'pdf'){
							document.getElementById('image_'+work_path).src = "<?php echo $cdn_path ?>uploads/pdf.png";
						} else {
							document.getElementById('image_'+work_path).src = "<?php echo $cdn_path ?>"+splits[0];
						}
						document.getElementById("links_"+work_path).href = "<?php echo $cdn_path ?>"+splits[0];
						$("#links_"+work_path).css({'display':'block'});
						document.getElementById(ids).value = splits[0];
					}
				},complete: function(response) {
					
				},
				error:function(e){
				}
			}).submit();
		}		
		 
	}
	
	function get_call_interview(){
		var bp_unique_id = document.getElementById("bp_unique_id").value;

		$.ajax({
			type:"POST",
			data:"bp_unique_id="+bp_unique_id,
			dataType:"json",
			url:"<?php echo $admin_url?>ad_data.php?call=get_call_interview_by_id",
			beforeSend: function(){
			
			},
			success: function(data){
				var que = data.result;
				var len = que.length;
				var txt = '';
				console.log(len);
				if(len > 0){
					var j = 1;
					for(var i=0;i<len;i++){
						if(que[i].ci_create_date == null){
							var create_date = '';
						} else {
							var create_date = que[i].ci_create_date;
						}
						
						txt += '<tr>';
						txt += '<td>'+j+'</td>';
						txt += '<td id="que_'+que[i].iq_id+'" >'+que[i].iq_question+'</td>';
						txt += '<td><textarea class="form-control get_ans" data-type="'+que[i].iq_type+'" data-id="'+que[i].iq_id+'" id="ans_'+que[i].iq_id+'" >'+que[i].iq_answer+'</textarea></td>';
						txt += '<td>'+create_date+'</td>';
						txt += '</tr>';
						j++;
					}
				}
				$("#get_call_interview").html("");
				$("#get_call_interview").html(txt);
			}
		});
	}
	
	function country_name(id, types, show, pho_code, per_state, per_city){
		console.log('id = '+ id +' types = '+types);
		var country = id;
		$.ajax({
			type:"post",
			data:"country_name="+country,
			url:"<?php echo $site_url?>data.php?call=country_leva",
			success:function(msg){
				$("#"+types+"country").html(msg);
				if(show == 0){
					state_name(types, show, pho_code, per_state, per_city);
				}
			}
		});
	}

	function state_name(types, show, pho_code, per_state, per_city){
		var state = per_state;
		var con_no = document.getElementById(types+"country").value;
		console.log('con_no = '+ con_no +' state = '+state+' types = '+types);
		$.ajax({
			type:"post",
			data:"con_id="+con_no+"&state_id="+state, 
			url:"<?php echo $site_url?>data.php?call=state_leva",
			success:function(msg){
				var spl = msg.split('split_state');	
				$("#"+types+"state").html(spl[0]);
				$("#"+types+"con_code").val(spl[1]);
				console.log(spl[1]+" - "+types+"con_code");
				if(show == 0){
					city_name(types, show, pho_code, per_state, per_city );
				}
			}
		});
	}

	function city_name(types, show, pho_code, per_state, per_city) {
		var city_name = per_city;
		var stat_no = document.getElementById(types+"state").value;
		$.ajax({
			type:"post",
			data:"stat_no="+stat_no+"&city_name="+city_name, 
			url:"<?php echo $site_url?>data.php?call=city_leva",
			success:function(msg){     
				if(show == 0){
					$("#"+types+"city").html(msg);
				}
			}
		});
	}

</script>
</body>
</html>