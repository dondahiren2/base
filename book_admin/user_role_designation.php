<?php 
	include("header.php");
	
	$title = isset($_GET['title']) ? $_GET['title'] : '';
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$names = '';
	$only_name = '';
	$url = '';
	$create_names = '';
	
	if($title == 'user_role'){
		$only_name = 'User Role';
		$names = 'User Role List';
		$create_names = 'User Role Create';
		$url = 'user_role_designation_list/'.$title;
	} else if($title == 'designation'){
		$only_name = 'Designation';
		$names = 'Designation List';
		$create_names = 'Designation Create';
		$url = 'user_role_designation_list/'.$title;
	}
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>technical_management">Technical Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url.$url?>"><?php echo $names?></a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#"><?php echo $create_names?></a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if($id != 'create'){
		$m_id = base64_decode($_GET['id']);
		 
		$mast = $con->query("select ur_id, p_name, m_name, ur_r_type, ur_status, m_id, p_id from user_role as ur join master_category as m on ur.ur_m_id = m.m_id join prime_category as p on ur.ur_p_id = p.p_id where ur_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit <?php echo $only_name?></h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p class="text_margin_0" >Master Category Name</p>
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="m_name" name="m_name" value="<?php echo $r['m_name']?>"  />
									<input type="hidden" class="MainGetData" id="ur_cc_id" name="ur_cc_id" value="7" />
									<input type="hidden" class="MainGetData"  id="ur_m_id" name="ur_m_id" value="<?php echo $r['m_id']?>" />
									<input type="hidden" class="MainGetData"  id="ur_type_of" name="ur_type_of" value="<?php echo $title?>" />
									<input type="hidden" id="ur_id" name="ur_id"  value="<?php echo $r['ur_id']?>" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Prime Category Name</p>
									<input type="text" class="form-control search_prime_name" placeholder="Prime Category Name" id="p_name" name="p_name" value="<?php echo $r['p_name']?>"  />
									<input type="hidden" id="ur_p_id" name="ur_p_id" class="MainGetData"  value="<?php echo $r['p_id']?>"  />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Role Name</p>
									<input type="text" class="form-control MainGetData search_role_name" placeholder="Role Name" id="ur_r_type" name="ur_r_type"  value="<?php echo $r['ur_r_type']?>" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Display</p>
									<select class="form-control" id="s_status" name="s_status" >
										<option value="0" <?php if($r['s_status'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['s_status'] == 1){ echo 'selected'; } ?>>No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url.$url?>" class="btn btn-primary">List</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
	<?php 
		}
	} else { ?>		
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Create <?php echo $only_name?></h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p class="text_margin_0" >Master Category Name</p>
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="m_name" name="m_name" />
									<input type="hidden" class="MainGetData" id="ur_cc_id" name="ur_cc_id" value="7" />
									<input type="hidden" class="MainGetData"  id="ur_m_id" name="ur_m_id" />
									<input type="hidden" class="MainGetData"  id="ur_type_of" name="ur_type_of" value="<?php echo $title?>" />
									<input type="hidden" id="ur_id" name="ur_id" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Prime Category Name</p>
									<input type="text" class="form-control search_prime_name" placeholder="Prime Category Name" id="p_name" name="p_name" />
									<input type="hidden" id="ur_p_id" name="ur_p_id" class="MainGetData"  />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Role Name</p>
									<input type="text" class="form-control MainGetData search_role_name" placeholder="Role Name" id="ur_r_type" name="ur_r_type" />
								</div>
								
								<div class="col-xs-12">
									<p class="text_margin_0">Display</p>
									<select class="form-control MainGetData" id="ur_status" name="ur_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url.$url?>" class="btn btn-primary">List</a>	
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

	$(".search_role_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('ur_p_id').value;
			var type_of = document.getElementById('ur_type_of').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_role_name",
				dataType: "json",
				data: {
					cc_id: cc_id, type_of: type_of, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});

	$(".search_master_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('ur_cc_id').value;
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
			document.getElementById('ur_m_id').value = m_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#ur_m_id").val("");
				$("#m_name").val("");
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
			var cc_id = document.getElementById('ur_cc_id').value;
			var s_m_id = document.getElementById('ur_m_id').value;
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
			document.getElementById('ur_p_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#ur_p_id").val("");
				$("#p_name").val("");
				$("#p_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$("#add_mast").on('click', function(){
		var ur_m_id = document.getElementById('ur_m_id').value;
		var ur_p_id = document.getElementById('ur_p_id').value;
		var ur_r_type = document.getElementById('ur_r_type').value;
		var ur_id = document.getElementById('ur_id').value;
		if(ur_m_id == ''){
			alert('Enter Master Category Name.');
		} else if(ur_p_id == ''){
			alert('Enter Prime Category Name.');
		} else if(ur_r_type == ''){
			alert('Enter Role Name.');
		} else {
			var idArray = [];
			var valueArray = [];
			
			$('.MainGetData').each(function() {
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
		
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"idArray="+idArray+"&valueArray="+valueArray+"&ur_id="+ur_id,
				url:"<?php echo $admin_url?>ad_data.php?call=user_role_designation_create",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1) {
						alert("Insert Successfully");
						location.reload();
					} else if(html == 4) {
						alert("Already Inserted");
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
});
</script>
</body>
</html>