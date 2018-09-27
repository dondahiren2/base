<?php 
	include("header.php");
	
	$nsd_id = '';
	$nsd_title = '';
	$nsd_description = '';
	$nsd_lang = '';
	$nsd_active = '';
	
	mysqli_set_charset($con, 'utf8');
	$re = $con->query("select nsd_id, nsd_title, nsd_description, nsd_lang, nsd_active from micro_short_details where nsd_unique_id = '$bp_unique_id' and nsd_tal_id = '$bp_tal_id' ");
	if(mysqli_num_rows($re) > 0){
		while($r = mysqli_fetch_assoc($re)){
			$nsd_id = $r['nsd_id'];
			$nsd_title = $r['nsd_title'];
			$nsd_description = $r['nsd_description'];
			$nsd_lang = $r['nsd_lang']; 
			if($r['nsd_active'] == 0){
				$nsd_active = 'Pending';
			} else if($r['nsd_active'] == 1){
				$nsd_active = 'Activated';
			}
			
		}
	}
	
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>technical_management">Mirco Web Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>short-details">Short Details</a> 
		</li>
	</ul>
</div>
	<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Short Description</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Language</p>
									<select class="form-control" id="nsd_lang" name="nsd_lang" >
										<option value="">Select Language</option>
										<?php
											$re = $con->query("select s_id, s_name, s_code from sub_category where s_p_id = 24 and s_status = 0");
											if(mysqli_num_rows($re) > 0){
												while($r = mysqli_fetch_array($re)){
										?>
													<option value="<?php echo $r['s_code'] ?>" <?php if($r['s_code'] == $nsd_lang){ echo 'selected'; }?> ><?php echo ucfirst($r['s_name']) ?></option>
										<?php
												}
											}
										?> 
									</select>
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Title:</p>
									<input type="text" class="form-control" placeholder="Title" id="nsd_title" name="nsd_title" value="<?php echo $nsd_title;?>" />
									<input type="hidden" id="nsd_id" name="nsd_id" value="<?php echo $nsd_id;?>" /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Short Description :</p>
									<textarea type="text" class="form-control" rows="15" id="nsd_description" name="nsd_description"><?php echo $nsd_description;?></textarea> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Status : <?php echo $nsd_active;?></p> 
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" /> 
								</div>
							</div>
						</div>
					</div>
				</div>
	  
<?php include('footer.php'); ?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script>
var requ;
/*
	google.load("elements", "1", {
		packages: "transliteration"
	});

	function onLoad() {
		var nsd_lang = document.getElementById("nsd_lang").value;
		var options = {
			sourceLanguage: 'en',
			destinationLanguage: ['gu'],         
			transliterationEnabled: true
		};

		var control = new google.elements.transliteration.TransliterationControl(options);  
		var ids = [ "nsd_title", "nsd_description" ];  
		control.makeTransliteratable(ids);
	}
	google.setOnLoadCallback(onLoad);
		*/
 $(document).ready(function() {
	$(".nav_micro_site").addClass('active_head');
	 
	$("#add_mast").on('click', function(){
		var nsd_lang = document.getElementById('nsd_lang').value;
		var nsd_title = document.getElementById('nsd_title').value;
		var nsd_description = document.getElementById('nsd_description').value; 
		var nsd_id = document.getElementById('nsd_id').value; 
		var nsd_active = 0; 

		if(nsd_lang == ''){
			alert('Select Language.');
		} else if(nsd_title == ''){
			alert('Enter Title.');
		} else if(nsd_description == ''){
			alert('Enter Short Description.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:{nsd_lang:nsd_lang, nsd_title: nsd_title, nsd_description: nsd_description, nsd_id:nsd_id, nsd_active:nsd_active},
				url:"<?php echo $admin_url?>ad_data.php?call=add_short_description",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('s_cc_name').value = '';
						document.getElementById('s_cc_id').value = '';
						document.getElementById('s_id').value = '';
						document.getElementById('s_m_name').value = '';
						document.getElementById('s_m_id').value = '';
						document.getElementById('s_p_name').value = '';
						document.getElementById('s_p_id').value = '';
						document.getElementById('s_name').value = '';
					} else if(html == 2){
						alert("Update Successfully.");
					} else if(html == 4){
						alert("Already Saved Successfully.");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });
});
</script>
</body>
</html>