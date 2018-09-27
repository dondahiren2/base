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
			<a href="<?php echo $admin_url?>form_pages_list">Form Page List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Create Page Name</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['id'])){
		$m_id = base64_decode($_GET['id']);
		$mast = $con->query("select fp_id, fp_cc_id, fp_m_id, fp_p_id, fp_page_name, fp_page_code, fp_status, m_name, p_name, fp_table_name from form_page_list as f join create_topic as c on f.fp_cc_id = c.cc_id join master_category as m on f.fp_m_id = m.m_id join prime_category as p on f.fp_p_id = p.p_id where fp_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Sub Category</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="s_m_name" name="s_m_name"  value="<?php echo $r['m_name']?>" />
									<input type="hidden" id="fp_id" name="fp_id" value="<?php echo $r['fp_id']?>"  />
									<input type="hidden" id="fp_m_id" name="fp_m_id" value="<?php echo $r['fp_m_id']?>"  />
									<input type="hidden" id="fp_cc_id" name="fp_cc_id" value="<?php echo $r['fp_cc_id']?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Prime Category Name :</p>
									<input type="text" class="form-control search_prime_name" placeholder="Prime Category Name" id="s_p_name" name="s_p_name"  value="<?php echo $r['p_name']?>"  />
									<input type="hidden" id="fp_p_id" name="fp_p_id" value="<?php echo $r['fp_p_id']?>"  />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Page Name :</p>
									<input type="text" class="form-control" placeholder="Page Name" id="fp_page_name" name="fp_page_name" value="<?php echo $r['fp_page_name']?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Page Code :</p>
									<input type="text" class="form-control" placeholder="Page Code" id="fp_page_code" name="fp_page_code" value="<?php echo $r['fp_page_code']?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Table Name :</p>
									<input type="text" class="form-control" placeholder="Table Name" id="fp_table_name" name="fp_table_name" value="<?php echo $r['fp_table_name']?>" />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
									<select class="form-control" id="fp_status" name="fp_status" >
										<option value="0" <?php if($r['fp_status'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['fp_status'] == 1){ echo 'selected'; } ?>>No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>form_pages_list" class="btn btn-primary">List</a>	
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
							<h3 class="col-xs-12 form-title">Create Page Name</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="s_m_name" name="s_m_name"/>
									<input type="hidden" id="fp_id" name="fp_id" />
									<input type="hidden" id="fp_m_id" name="fp_m_id" />
									<input type="hidden" id="fp_cc_id" name="fp_cc_id" value="6" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Prime Category Name :</p>
									<input type="text" class="form-control search_prime_name" placeholder="Prime Category Name" id="s_p_name" name="s_p_name" />
									<input type="hidden" id="fp_p_id" name="fp_p_id" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Page Name :</p>
									<input type="text" class="form-control" placeholder="Page Name" id="fp_page_name" name="fp_page_name" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Page Code :</p>
									<input type="text" class="form-control" placeholder="Page Code" id="fp_page_code" name="fp_page_code" />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Table Name :</p>
									<input type="text" class="form-control" placeholder="Table Name" id="fp_table_name" name="fp_table_name" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
									<select class="form-control" id="fp_status" name="fp_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>form_pages_list" class="btn btn-primary">List</a>	
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
			document.getElementById('fp_m_id').value = m_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#s_m_name").val("");
				$("#fp_m_id").val("");
				$("#fp_m_id").focus();
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
			var s_m_id = document.getElementById('fp_m_id').value;
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
			document.getElementById('fp_p_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#s_p_name").val("");
				$("#fp_prime_id").val("");
				$("#fp_prime_id").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$("#add_mast").on('click', function(){
		var fp_cc_id = document.getElementById('fp_cc_id').value;
		var fp_p_id = document.getElementById('fp_p_id').value;
		var fp_m_id = document.getElementById('fp_m_id').value;
		var fp_page_name = document.getElementById('fp_page_name').value;
		var fp_page_code = document.getElementById('fp_page_code').value;
		var fp_table_name = document.getElementById('fp_table_name').value;
		var fp_status = document.getElementById('fp_status').value;
		var fp_id = document.getElementById('fp_id').value;
		
		if(fp_m_id == ''){
			alert('Enter Master Category Name.');
		} else if(fp_p_id == ''){
			alert('Enter Prime Category Name.');
		} else if(fp_page_name == ''){
			alert('Enter Page Name.');
		} else if(fp_page_code == ''){
			alert('Enter Page Code.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"fp_cc_id="+fp_cc_id+"&fp_m_id="+fp_m_id+"&fp_p_id="+fp_p_id+"&fp_page_name="+fp_page_name+"&fp_page_code="+fp_page_code+"&fp_status="+fp_status+"&fp_id="+fp_id+"&fp_table_name="+fp_table_name,
				url:"<?php echo $admin_url?>ad_data.php?call=add_form_page",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully."); 
						document.getElementById('fp_page_name').value = '';
						document.getElementById('fp_page_code').value = '';
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
});
</script>
</body>
</html>