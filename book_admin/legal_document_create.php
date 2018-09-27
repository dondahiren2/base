<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>legal_management">Legal & Certificate Management</a>
			<i class="fa fa-angle-right"></i>
		</li> 
		<li>
			<a href="<?php echo $admin_url?>legal_document_create_list">Legal Document List</a>
			<i class="fa fa-angle-right"></i>
		</li> 
		<li>
			<a href="#">Lagal Document Create</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		$mast = $con->query("select ld_id, ld_uid, m_name, p_name, ld_title, ld_status, ld_p_id, ld_c_id, ld_m_id, m_name, p_name from legal_document as ld join legal_document_page as ldp on ld.ld_uid = ldp.ldp_uid join master_category as m on ld.ld_m_id = m.m_id join prime_category as p on ld.ld_p_id = p.p_id where ld_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div class="row">
						<h3 class="col-xs-12 form-title">Edit Document Create</h3>
					</div>
					<div class="portlet-body ">
						<div class="row">
							<div class="col-xs-4 text_box_padding">
								<p class="text_margin_0">Select Master Category :</p>
								<input type="text" class="form-control search_master_name" placeholder="Select Department" id="m_name" name="m_name" value="<?php echo $r['m_name'];?>" />
								<input type="hidden" id="ld_id" name="ld_id" value="<?php echo $r['ld_id'];?>"  />
								<input type="hidden" id="ld_m_id" name="ld_m_id" value="<?php echo $r['ld_m_id'];?>" />
								<input type="hidden" id="ld_c_id" name="ld_c_id" value="<?php echo $r['ld_c_id'];?>" />
								<input type="hidden" id="ld_uid" name="ld_uid" value="<?php echo $r['ld_uid'];?>" />
							</div>
							<div class="col-xs-3 text_box_padding">
								<p class="text_margin_0">Select Prime Category :</p>
								<input type="text" class="form-control search_prime_name" placeholder="Select Prime Department" id="p_name" name="p_name"  value="<?php echo $r['p_name'];?>" />
								<input type="hidden" id="ld_p_id" name="ld_p_id" value="<?php echo $r['ld_p_id'];?>" />
							</div>
							<div class="col-xs-3 text_box_padding">
								<p class="text_margin_0">Document Title:</p>
								<input type="text" class="form-control" placeholder="Document Title" id="ld_title" name="ld_title" value="<?php echo $r['ld_title'];?>" />
							</div>
							<div class="col-xs-2 text_box_padding">
								<p class="text_margin_0">Display</p>
								<select class="form-control" id="ld_status" name="ld_status" >
									<option value="0" <?php if($r['ld_status'] == 0){ echo 'selected'; } ?> >Yes</option>
									<option value="1" <?php if($r['ld_status'] == 1){ echo 'selected'; } ?> >No</option>
								</select>
							</div>
							
							<div class="col-md-12" style="border-top: 3px solid #ccc;padding-top: 10px;margin-top: 5px;"></div>
							<div class="col-xs-3 text_box_padding">
								<p class="text_margin_0">LS Master Category</p>
								<input type="text" class="form-control ls_search_master_name" placeholder="Select LS Master Category" id="ls_m_name" name="ls_m_name" />
								<input type="hidden" id="ls_c_id" name="ls_c_id" value="9" />
								<input type="hidden" id="ls_m_id" name="ls_m_id" />
								<input type="hidden" id="ldp_id" name="ldp_id" />
							</div>
							<div class="col-xs-2 text_box_padding">
								<p class="text_margin_0">LS Prime Category</p>
								<input type="text" class="form-control ls_search_prime_name" placeholder="Select LS Prime Category" id="ls_p_name" name="ls_p_name" />
								<input type="hidden" id="ls_p_id" name="ls_p_id" />
							</div>
							<div class="col-xs-2 text_box_padding">
								<p class="text_margin_0">LS Sub Category</p>
								<input type="text" class="form-control ls_search_sub_name" placeholder="Select LS Sub Category" id="ls_s_name" name="ls_s_name" />
								<input type="hidden" id="ls_s_id" name="ls_s_id" />
							</div>
							<div class="col-xs-2 text_box_padding">
								<p class="text_margin_0">LS Title</p>
								<input type="text" class="form-control ls_search_list_name" placeholder="Title" id="ls_title" name="ls_title" />
								<input type="hidden" id="ls_id" name="ls_id" />
							</div> 
							<div class="col-xs-1 text_box_padding">
								<p class="text_margin_0">Position No</p>
								<input type="text" class="form-control" placeholder="Position No" id="ldp_ls_position" name="ldp_ls_position" />
							</div>
							<div class="col-xs-1 text_box_padding">
								<p class="text_margin_0">Display</p>
								<select class="form-control" id="ldp_display" name="ldp_display" >
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
										<td>LS Master Category</td>
										<td>LS Prime Category</td>
										<td>LS Sub Category</td>
										<td>Title</td>
										<td style="width: 70px;">Position</td>
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
							<h3 class="col-xs-12 form-title">Document Create</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Master Category :</p>
									<input type="text" class="form-control search_master_name" placeholder="Select Department" id="m_name" name="m_name"/>
									<input type="hidden" id="ld_id" name="ld_id" />
									<input type="hidden" id="ld_m_id" name="ld_m_id" />
									<input type="hidden" id="ld_c_id" name="ld_c_id" value="7" />
									<input type="hidden" id="ld_uid" name="ld_uid" value="<?php echo date('dmYHis').rand(1111,9999)?>" />
								</div>
								<div class="col-xs-3 text_box_padding">
									<p class="text_margin_0">Select Prime Category :</p>
									<input type="text" class="form-control search_prime_name" placeholder="Select Prime Department" id="p_name" name="p_name"/>
									<input type="hidden" id="ld_p_id" name="ld_p_id" />
								</div>
								<div class="col-xs-3 text_box_padding">
									<p class="text_margin_0">Document Title:</p>
									<input type="text" class="form-control" placeholder="Document Title" id="ld_title" name="ld_title" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control" id="ld_status" name="ld_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								
								<div class="col-md-12" style="border-top: 3px solid #ccc;padding-top: 10px;margin-top: 5px;"></div>
								<div class="col-xs-3 text_box_padding">
									<p class="text_margin_0">LS Master Category</p>
									<input type="text" class="form-control ls_search_master_name" placeholder="Select LS Master Category" id="ls_m_name" name="ls_m_name" />
									<input type="hidden" id="ls_c_id" name="ls_c_id" value="9" />
									<input type="hidden" id="ls_m_id" name="ls_m_id" />
									<input type="hidden" id="ldp_id" name="ldp_id" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">LS Prime Category</p>
									<input type="text" class="form-control ls_search_prime_name" placeholder="Select LS Prime Category" id="ls_p_name" name="ls_p_name" />
									<input type="hidden" id="ls_p_id" name="ls_p_id" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">LS Sub Category</p>
									<input type="text" class="form-control ls_search_sub_name" placeholder="Select LS Sub Category" id="ls_s_name" name="ls_s_name" />
									<input type="hidden" id="ls_s_id" name="ls_s_id" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">LS Title</p>
									<input type="text" class="form-control ls_search_list_name" placeholder="Title" id="ls_title" name="ls_title" />
									<input type="hidden" id="ls_id" name="ls_id" />
								</div> 
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Position No</p>
									<input type="text" class="form-control" placeholder="Position No" id="ldp_ls_position" name="ldp_ls_position" />
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control" id="ldp_display" name="ldp_display" >
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
											<td>LS Master Category</td>
											<td>LS Prime Category</td>
											<td>LS Sub Category</td>
											<td>Title</td>
											<td style="width: 70px;">Position</td>
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
	$(".nav_legal_management").addClass('active_head');
	 
	$(".search_master_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('ld_c_id').value;
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
			document.getElementById('ld_m_id').value = m_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#m_name").val("");
				$("#ld_m_id").val("");
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
			var cc_id = document.getElementById('ld_c_id').value;
			var s_m_id = document.getElementById('ld_m_id').value;
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
			document.getElementById('ld_p_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#p_name").val("");
				$("#ld_p_id").val("");
				$("#p_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
   
	$(".ls_search_master_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('ls_c_id').value;
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
			document.getElementById('ls_m_id').value = m_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#ls_m_name").val("");
				$("#ls_m_id").val("");
				$("#ls_m_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
	
	$(".ls_search_prime_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('ls_c_id').value;
			var s_m_id = document.getElementById('ls_m_id').value;
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
			document.getElementById('ls_p_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#ls_p_name").val("");
				$("#ls_p_id").val("");
				$("#ls_p_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
	
	$(".ls_search_sub_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('ls_c_id').value;
			var s_m_id = document.getElementById('ls_m_id').value;
			var p_id = document.getElementById('ls_p_id').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_sub_name",
				dataType: "json",
				data: {
					cc_id: cc_id, m_id: s_m_id, p_id: p_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var s_id = ui.item.s_id;
			document.getElementById('ls_s_id').value = s_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#ls_s_name").val("");
				$("#ls_s_id").val("");
				$("#ls_s_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
   
	$(".ls_search_list_name").autocomplete({
		source: function (request, response) {
			var c_id = document.getElementById('ls_c_id').value;
			var m_id = document.getElementById('ls_m_id').value;
			var p_id = document.getElementById('ls_p_id').value;
			var s_id = document.getElementById('ls_s_id').value;
			
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_lagel_page_list",
				dataType: "json",
				data: {
					c_id: c_id, m_id: m_id, p_id: p_id, s_id: s_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var ls_id = ui.item.ls_id;
			document.getElementById('ls_id').value = ls_id; 
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$ ("#cr_page_name").focus(); 
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$("#add_mast").on('click', function(){
		var ld_id = document.getElementById('ld_id').value;
		var ld_m_id = document.getElementById('ld_m_id').value;
		var ld_c_id = document.getElementById('ld_c_id').value;
		var ld_uid = document.getElementById('ld_uid').value;
		var ld_p_id = document.getElementById('ld_p_id').value;
		var ld_title = document.getElementById('ld_title').value;
		var ld_status = document.getElementById('ld_status').value;
		var m_name = document.getElementById('m_name').value;
		var p_name = document.getElementById('p_name').value;
		
		if(m_name == '' || ld_m_id == ''){
			alert('Select Master Category Name.');
		} else if(p_name == '' || ld_p_id == ''){
			alert('Select Prime Category');
		} else if(ld_title == ''){
			alert('Enter Document Title.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"ld_id="+ld_id+"&ld_m_id="+ld_m_id+"&ld_c_id="+ld_c_id+"&ld_uid="+ld_uid+"&ld_p_id="+ld_p_id+"&ld_title="+ld_title+"&ld_status="+ld_status,
				url:"<?php echo $admin_url?>ad_data.php?call=create_new_lagel_page",
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
		var ld_uid = document.getElementById('ld_uid').value;
		var ls_m_name = document.getElementById('ls_m_name').value;
		var ls_m_id = document.getElementById('ls_m_id').value;
		var ls_p_name = document.getElementById('ls_p_name').value;
		var ls_p_id = document.getElementById('ls_p_id').value;
		var ls_s_name = document.getElementById('ls_s_name').value;
		var ls_s_id = document.getElementById('ls_s_id').value;
		var ldp_ls_position = document.getElementById('ldp_ls_position').value;
		var ldp_display = document.getElementById('ldp_display').value;
		var ls_title = document.getElementById('ls_title').value;
		var ls_id = document.getElementById('ls_id').value;
		var ldp_id = document.getElementById('ldp_id').value;
		
		if(ls_m_name == ''){
			alert('Select LS Master Category');
		} else if(ls_p_name == ''){
			alert('Select LS Prime Category');
		} else if(ls_s_name == ''){
			alert('Select LS Sub Category');
		} else if(ls_title == ''){
			alert('Select LS Title.');
		} else if(ldp_ls_position == ''){
			alert('Enter Position.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"ld_uid="+ld_uid+"&ls_title="+ls_title+"&ls_id="+ls_id+"&ldp_display="+ldp_display+"&ldp_ls_position="+ldp_ls_position+"&ldp_id="+ldp_id,
				url:"<?php echo $admin_url?>ad_data.php?call=create_lagel_sub_page",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){ 
						document.getElementById('ls_m_name').value = '';
						document.getElementById('ls_m_id').value = '';
						document.getElementById('ls_p_name').value = '';
						document.getElementById('ls_p_id').value = '';
						document.getElementById('ls_s_name').value = '';
						document.getElementById('ls_s_id').value = '';
						document.getElementById('ldp_ls_position').value = '';
						document.getElementById('ldp_display').value = '';
						document.getElementById('ls_title').value = '';
						document.getElementById('ls_id').value = '';
						$('#ls_m_name').focus();
						lagel_page_lits();
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });
});
 
lagel_page_lits(); 
function lagel_page_lits(){
	var ld_uid = document.getElementById('ld_uid').value;
	if(requ && requ.readyState != 4){
		requ.abort();
	}   
	requ = $.ajax({
		type:"POST",
		data:"ld_uid="+ld_uid,
		url:"<?php echo $admin_url?>ad_data.php?call=lagel_page_lits",
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
		url:"<?php echo $admin_url?>ad_data.php?call=lagel_lits_delete",
		beforeSend: function(){
			$(".response_gif").show();
		},
		success: function(html){
			if(html == 1){
				lagel_page_lits();
			} else {
				alert('Delete Successfully');
			}
		}
	});
}

function editbtn(cf_uid, cr_cf_uid){ 
	if(requ && requ.readyState != 4){
		requ.abort();
	}   
	requ = $.ajax({
		type:"POST",
		data:"cf_uid="+cf_uid+"&cr_cf_uid="+cr_cf_uid,
		dataType:"JSON",
		url:"<?php echo $admin_url?>ad_data.php?call=get_lagel_page_list_info",
		beforeSend: function(){
			$(".response_gif").show();
		},
		success: function(data){
			var datas = data.length;
			if(datas > 0){
				for(var i =0; i < datas; i++){
					document.getElementById("ls_m_name").value = data[i].m_name;
					document.getElementById("ls_m_id").value = data[i].ls_m_id;
					document.getElementById("ldp_id").value = data[i].ldp_id;
					document.getElementById("ls_p_name").value = data[i].p_name;
					document.getElementById("ls_p_id").value = data[i].ls_p_id;
					document.getElementById("ls_s_name").value = data[i].s_name;
					document.getElementById("ls_s_id").value = data[i].ls_s_id;
					document.getElementById("ls_title").value = data[i].ls_title;
					document.getElementById("ls_id").value = data[i].ls_id;
					document.getElementById("ldp_ls_position").value = data[i].ldp_ls_position;
					document.getElementById("ldp_display").value = data[i].ldp_display;
				}
			}
			$(".response_gif").hide();
		}
	});
}
</script>
</body>
</html>