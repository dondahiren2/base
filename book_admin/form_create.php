<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>technical_management">Technical Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>forms">Forms</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>form_create_list">Form Create List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Form Create</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['id'])){
		$m_id = base64_decode($_GET['id']);
		$mast = $con->query("select cf_id, cf_cc_id, cf_m_id, cf_uid, cf_p_id, cf_f_p_id, cf_status, m_name, p_name from create_forms as c join prime_category as p on c.cf_p_id = p.p_id join master_category as m on c.cf_m_id = m.m_id where cf_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
			
?>
 
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div class="row">
						<h3 class="col-xs-12 form-title">Edit Form</h3>
					</div>
					<div class="portlet-body ">
						<div class="row">
							<div class="col-xs-4 text_box_padding">
								<p class="text_margin_0">Select Master Category :</p>
								<input type="text" class="form-control search_master_name" placeholder="Select Department" id="m_name" name="m_name" value="<?php echo $r['m_name'] ?>" />
								<input type="hidden" id="cf_id" name="cf_id" value="<?php echo $r['cf_id']?>" />
								<input type="hidden" id="cf_m_id" name="cf_m_id" value="<?php echo $r['cf_m_id']?>" />
								<input type="hidden" id="fp_cc_id" name="fp_cc_id" value="<?php echo $r['cf_cc_id']?>" />
								<input type="hidden" id="cf_uid" name="cf_uid" value="<?php echo $r['cf_uid']?>" />
							</div>
							<div class="col-xs-3 text_box_padding">
								<p class="text_margin_0">Select Prime Category :</p>
								<input type="text" class="form-control search_prime_name" placeholder="Select Department" id="p_name" name="p_name" value="<?php echo $r['p_name'] ?>" />
								<input type="hidden" id="cf_p_id" name="cf_p_id" value="<?php echo $r['cf_p_id']?>" />
							</div>
							<div class="col-xs-3 text_box_padding">
								<p class="text_margin_0">Select Form type:</p>
								<input type="text" class="form-control user_type" placeholder="Select Page type" id="user_type" name="user_type"/>
								<input type="hidden" id="cf_f_p_id" name="cf_f_p_id" />
								<input type="hidden" id="cr_id" name="cr_id" />
							</div>
							<div class="col-xs-2 text_box_padding">
								<p class="text_margin_0">Display</p>
								<select class="form-control" id="cf_status" name="cf_status" >
									<option value="0" <?php if($r['cf_status'] == 0){ echo 'selected';} ?> >Yes</option>
									<option value="1" <?php if($r['cf_status'] == 1){ echo 'selected';} ?> >No</option>
								</select>
							</div>
							
							<div class="col-md-12" style="border-top: 3px solid #ccc;padding-top: 10px;margin-top: 5px;"></div>
							<div class="col-xs-3 text_box_padding">
								<p class="text_margin_0">Select Form Page List :</p>
								<input type="text" class="form-control form_page_list" placeholder="Select Page Name" id="cr_page_name" name="cr_page_name" />
								<input type="hidden" id="cr_page_id" name="cr_page_id" />
							</div>
							<div class="col-xs-2 text_box_padding">
								<p class="text_margin_0">Page Code :</p>
								<input type="text" class="form-control" placeholder="Page Code" id="cr_form_code" name="cr_form_code" />
							</div>
							<div class="col-xs-2 text_box_padding">
								<p class="text_margin_0">Display Name on WebPage</p>
								<input type="text" class="form-control" placeholder="Display Name on WebPage" id="cr_form_name" name="cr_form_name" />
							</div>
							<div class="col-xs-1 text_box_padding">
								<p class="text_margin_0">Position No</p>
								<input type="text" class="form-control" placeholder="Position No" id="cr_position" name="cr_position" />
							</div>
							<div class="col-xs-1 text_box_padding">
								<p class="text_margin_0">PrefixCode</p>
								<input type="text" class="form-control" placeholder="PrefixCode" id="cr_pre_fix" name="cr_pre_fix" />
							</div>
							<div class="col-xs-1 text_box_padding">
								<p class="text_margin_0">Show On Profile</p>
								<select class="form-control" id="cr_is_profile" name="cr_is_profile" >
									<option value="0">Yes</option>
									<option value="1">No</option>
								</select>
							</div>
							<div class="col-xs-1 text_box_padding">
								<p class="text_margin_0">Display</p>
								<select class="form-control" id="cr_status" name="cr_status" >
									<option value="0">Yes</option>
									<option value="1">No</option>
								</select>
							</div>
							<div class="col-xs-1 text_box_padding">
								<p class="text_margin_0">&nbsp;</p>
								<input type="submit" class="form-control btn btn-primary" value="Add" style="color:#fff" id="add_btn" name="add_btn" />
							</div>
							<div class="col-xs-12 text_box_padding" style="height:200px;border: 1px solid #ccc;margin-bottom: 10px;overflow-x: auto;" >
								<table class="table table-striped table-bordered table-vcenter">
									<thead>
									<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);" >
										<td style="width: 70px;">Sr.No</td>
										<td>Page Name</td>
										<td>Code</td>
										<td>Display Name</td>
										<td style="width: 70px;">Position</td>
										<td style="width: 70px;">PrefixCode</td>
										<td style="width: 150px;">Show On Profile</td>
										<td style="width: 70px;">Status</td>
										<td style="width: 70px;" >Action</td>
									</tr>
									</thead>
									<tbody id="get_data"></tbody>
								</table>
							</div>
							
							<div class="col-xs-12 text_box_padding footer_border">
								<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
								<a href="<?php echo $admin_url?>form_create_list" class="btn btn-primary">List</a>	
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php 
		}
	} else { 
			
	?>		
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Create Form</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Master Category :</p>
									<input type="text" class="form-control search_master_name" placeholder="Select Department" id="m_name" name="m_name"/>
									<input type="hidden" id="cf_id" name="cf_id" />
									<input type="hidden" id="cf_m_id" name="cf_m_id" />
									<input type="hidden" id="fp_cc_id" name="fp_cc_id" value="7" />
									<input type="hidden" id="cf_uid" name="cf_uid" value="<?php echo date('dmYHis').rand(1111,9999)?>" />
								</div>
								<div class="col-xs-3 text_box_padding">
									<p class="text_margin_0">Select Prime Category :</p>
									<input type="text" class="form-control search_prime_name" placeholder="Select Department" id="p_name" name="p_name"/>
									<input type="hidden" id="cf_p_id" name="cf_p_id" />
								</div>
								<div class="col-xs-3 text_box_padding">
									<p class="text_margin_0">Select Form type:</p>
									<input type="text" class="form-control user_type" placeholder="Select Page type" id="user_type" name="user_type"/>
									<input type="hidden" id="cf_f_p_id" name="cf_f_p_id" />
									<input type="hidden" id="cr_id" name="cr_id" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control" id="cf_status" name="cf_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								
								<div class="col-md-12" style="border-top: 3px solid #ccc;padding-top: 10px;margin-top: 5px;"></div>
								<div class="col-xs-3 text_box_padding">
									<p class="text_margin_0">Select Form Page List</p>
									<input type="text" class="form-control form_page_list" placeholder="Select Page Name" id="cr_page_name" name="cr_page_name" />
									<input type="hidden" id="cr_page_id" name="cr_page_id" />
									<input type="hidden" id="cr_id" name="cr_id" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">Page Code</p>
									<input type="text" class="form-control" placeholder="Page Code" id="cr_form_code" name="cr_form_code" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">Display Name on WebPage</p>
									<input type="text" class="form-control" placeholder="Display Name on WebPage" id="cr_form_name" name="cr_form_name" />
								</div> 
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Position No</p>
									<input type="text" class="form-control" placeholder="Position No" id="cr_position" name="cr_position" />
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">PrefixCode</p>
									<input type="text" class="form-control" placeholder="PrefixCode" id="cr_pre_fix" name="cr_pre_fix" />
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Show On Profile</p>
									<select class="form-control" id="cr_is_profile" name="cr_is_profile" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control" id="cr_status" name="cr_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">&nbsp;</p>
									<input type="submit" class="form-control btn btn-primary" value="Add" style="color:#fff" id="add_btn" name="add_btn" />
								</div>
								<div class="col-xs-12 text_box_padding" style="height:200px;border: 1px solid #ccc;margin-bottom: 10px;overflow-x: auto;" >
									<table class="table table-striped table-bordered table-vcenter">
										<thead>
										<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);" >
											<td style="width: 70px;">Sr.No</td>
											<td>Page Name</td>
											<td>Code</td>
											<td>Display Name</td>
											<td style="width: 70px;">Position</td>
											<td style="width: 70px;">PrefixCode</td>
											<td style="width: 150px;">Show On Profile</td>
											<td style="width: 70px;">Status</td>
											<td style="width: 70px;" >Action</td>
										</tr>
										</thead>
										<tbody id="get_data"></tbody>
									</table>
								</div> 
								
								<div class="col-xs-12 text_box_padding footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>form_create_list" class="btn btn-primary">List</a>	
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
 
<script>
var requ;
 $(document).ready(function() {
	$(".nav_technical_management").addClass('active_head');
	$(".search_master_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('fp_cc_id').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_master_name",
				dataType: "json",
				data: {
					cc_id: cc_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var m_id = ui.item.m_id;
			document.getElementById('cf_m_id').value = m_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#m_name").val("");
				$("#cf_m_id").val("");
				$("#m_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
	
	$(".search_prime_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('fp_cc_id').value;
			var s_m_id = document.getElementById('cf_m_id').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_prime_name",
				dataType: "json",
				data: {
					cc_id: cc_id, m_id: s_m_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var p_id = ui.item.p_id;
			document.getElementById('cf_p_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#p_name").val("");
				$("#cf_p_id").val("");
				$("#p_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$(".user_type").autocomplete({
		source: function (request, response) {
			var cc_id = 6;
			var s_m_id = 8;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_prime_name",
				dataType: "json",
				data: {
					cc_id: cc_id, m_id: s_m_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var p_id = ui.item.p_id;
			document.getElementById('cf_f_p_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#user_type").val("");
				$("#cf_f_p_id").val("");
				$("#user_type").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$(".form_page_list").autocomplete({
		source: function (request, response) {
			var cf_f_p_id = document.getElementById('cf_f_p_id').value;
			
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_form_page_list",
				dataType: "json",
				data: {
					cf_f_p_id: cf_f_p_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var p_id = ui.item.fp_id;
			var page_code = ui.item.page_code;
			document.getElementById('cr_page_id').value = p_id;
			document.getElementById('cr_form_code').value = page_code;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#cr_page_name").val("");
				$("#cr_page_id").val("");
				$("#cr_form_code").val("");
				$("#cr_page_name").focus(); 
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$("#add_mast").on('click', function(){
		var fp_cc_id = document.getElementById('fp_cc_id').value;
		var cf_m_id = document.getElementById('cf_m_id').value;
		var cf_uid = document.getElementById('cf_uid').value;
		var cf_p_id = document.getElementById('cf_p_id').value;
		var cf_f_p_id = document.getElementById('cf_f_p_id').value;
		var cf_status = document.getElementById('cf_status').value;
		var cf_id = document.getElementById('cf_id').value;
		
		if(cf_m_id == ''){
			alert('Select Master Category Name.');
		} else if(cf_p_id == ''){
			alert('Select Prime Category');
		} else if(cf_f_p_id == ''){
			alert('Select Form type.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"fp_cc_id="+fp_cc_id+"&cf_m_id="+cf_m_id+"&cf_uid="+cf_uid+"&cf_p_id="+cf_p_id+"&cf_f_p_id="+cf_f_p_id+"&cf_status="+cf_status+"&cf_id="+cf_id,
				url:"<?php echo $admin_url?>ad_data.php?call=create_new_form_page",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully."); 
						location.reload();
					} else if(html == 2){
						alert("Update Successfully.");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });

	$("#add_btn").on('click', function(){
		var cf_f_p_id = document.getElementById('cf_f_p_id').value;
		var cr_page_id = document.getElementById('cr_page_id').value;
		var cr_form_code = document.getElementById('cr_form_code').value;
		var cr_form_name = document.getElementById('cr_form_name').value;
		var cr_position = document.getElementById('cr_position').value;
		var cr_is_profile = document.getElementById('cr_is_profile').value;
		var cr_pre_fix = document.getElementById('cr_pre_fix').value;
		var cf_uid = document.getElementById('cf_uid').value;
		var cr_status = document.getElementById('cr_status').value;
		var cr_id = document.getElementById('cr_id').value;
		
		if(cf_f_p_id == ''){
			alert('Select Form Type.');
		} else if(cr_page_id == ''){
			alert('Select Form Page List');
		} else if(cr_form_code == ''){
			alert('Enter Page Code.');
		} else if(cr_form_name == ''){
			alert('Enter Display Name on WebPage.');
		} else if(cr_position == ''){
			alert('Enter Position.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"cf_f_p_id="+cf_f_p_id+"&cr_page_id="+cr_page_id+"&cr_form_code="+cr_form_code+"&cr_form_name="+cr_form_name+"&cr_position="+cr_position+"&cf_uid="+cf_uid+"&cr_status="+cr_status+"&cr_is_profile="+cr_is_profile+"&cr_pre_fix="+cr_pre_fix+"&cr_id="+cr_id,
				url:"<?php echo $admin_url?>ad_data.php?call=create_form_page",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						document.getElementById('cr_page_name').value = '';
						document.getElementById('cr_page_id').value = '';
						document.getElementById('cr_form_code').value = '';
						document.getElementById('cr_form_name').value = ''; 
						document.getElementById('cr_position').value = '';
						document.getElementById('cr_pre_fix').value = '';
						$('#cr_page_name').focus();
						page_lits();
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });
});
 
page_lits(); 
function page_lits(){
	var cf_uid = document.getElementById('cf_uid').value;
	if(requ && requ.readyState != 4){
		requ.abort();
	}   
	requ = $.ajax({
		type:"POST",
		data:"cf_uid="+cf_uid,
		url:"<?php echo $admin_url?>ad_data.php?call=page_lits",
		beforeSend: function(){
			$(".response_gif").show();
		},
		success: function(msg){
			$("#get_data").html(msg);
			$(".response_gif").hide();
		}
	});
}

function deletedbtn(cf_uid, cr_cf_uid){
	
	if(requ && requ.readyState != 4){
		requ.abort();
	}   
	requ = $.ajax({
		type:"POST",
		data:"cf_uid="+cf_uid,
		url:"<?php echo $admin_url?>ad_data.php?call=page_lits_delete",
		beforeSend: function(){
			$(".response_gif").show();
		},
		success: function(html){
			if(html == 1){
				page_lits();
			} else {
				alert('Delete Successfully');
			}
		}
	});
}

function editbtn(cf_uid, cr_cf_uid){
	var cr_cf_uid = document.getElementById('cf_uid').value;
	if(requ && requ.readyState != 4){
		requ.abort();
	}   
	requ = $.ajax({
		type:"POST",
		data:"cf_uid="+cf_uid+"&cr_cf_uid="+cr_cf_uid,
		dataType:"JSON",
		url:"<?php echo $admin_url?>ad_data.php?call=get_page_list_info",
		beforeSend: function(){
			$(".response_gif").show();
		},
		success: function(data){
			var datas = data.length;
			
			if(datas > 0){
				for(var i =0; i < datas; i++){
				
					document.getElementById("cr_id").value = data[i].cr_id;
					document.getElementById("cr_form_name").value = data[i].cr_form_name;
					document.getElementById("cr_pre_fix").value = data[i].cr_pre_fix;
					document.getElementById("cr_is_profile").value = data[i].cr_is_profile;
					document.getElementById("cr_position").value = data[i].cr_position;
					document.getElementById("cr_status").value = data[i].cr_status;
					document.getElementById("cr_form_code").value = data[i].cr_form_code;
					document.getElementById("cr_page_name").value = data[i].fp_page_name;
					document.getElementById("cr_page_id").value = data[i].cr_page_id;
					document.getElementById("cf_f_p_id").value = data[i].p_id;
					document.getElementById("user_type").value = data[i].p_name;
					
				}
			}
			$(".response_gif").hide();
		}
	});
}
</script>
</body>
</html>