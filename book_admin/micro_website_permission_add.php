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
			<a href="<?php echo $admin_url?>micro-website-permission">Micro Website Permission List</a>
			<i class="fa fa-angle-right"></i>
		</li> 
		<li>
			<a href="#">Micro Website Permission</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		$mast = $con->query("select cc_id, bp_id, m_name, m_id, p_name, p_id, bp_crop_name, bp_status from basic_profile as bp join prime_category as p on bp.bp_user_type = p.p_id join master_category as m on p.p_m_id = m.m_id join create_topic as cc on p.p_cc_id = cc.cc_id where bp_id = $m_id ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Micro Website Permission</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="s_m_name" name="s_m_name" value="<?php echo $r['m_name'] ?>" />
									<input type="hidden" id="s_m_id" name="s_m_id" value="<?php echo $r['m_id'] ?>"  />
									<input type="hidden" id="s_cc_id" name="s_cc_id" value="<?php echo $r['cc_id'] ?>"  /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Prime Category Name :</p>
									<input type="text" class="form-control search_prime_name" placeholder="Prime Category Name" id="s_p_name" name="s_p_name" value="<?php echo $r['p_name'] ?>"  />
									<input type="hidden" id="s_p_id" name="s_p_id" value="<?php echo $r['p_id'] ?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Website Name	:</p>
									<input type="text" class="form-control search_school" placeholder="Website Name" id="s_name" name="s_name" value="<?php echo $r['bp_crop_name'] ?>"  />
									<input type="hidden" id="bp_id" name="bp_id" value="<?php echo $r['bp_id'] ?>"  />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
									<select class="form-control" id="s_status" name="s_status" >
										<option value="1" <?php if($r['bp_status'] == 1){ echo 'selected'; } ?> >Yes</option>
										<option value="0" <?php if($r['bp_status'] == 0){ echo 'selected'; } ?>>No</option>
										<option value="2" <?php if($r['bp_status'] == 2){ echo 'selected'; } ?>>Block</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>micro-website-permission" class="btn btn-primary">List</a>	
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
							<h3 class="col-xs-12 form-title">Create Micro Website Permission</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="s_m_name" name="s_m_name"/>
									<input type="hidden" id="s_m_id" name="s_m_id" />
									<input type="hidden" id="s_cc_id" name="s_cc_id" value="7" /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Prime Category Name :</p>
									<input type="text" class="form-control search_prime_name" placeholder="Prime Category Name" id="s_p_name" name="s_p_name" />
									<input type="hidden" id="s_p_id" name="s_p_id" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Website Name	:</p>
									<input type="text" class="form-control search_school" placeholder="Website Name" id="s_name" name="s_name" />
									<input type="hidden" id="bp_id" name="bp_id" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
									<select class="form-control" id="s_status" name="s_status" >
										<option value="1">Yes</option>
										<option value="0">No</option>
										<option value="2">Block</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>micro-website-permission" class="btn btn-primary">List</a>	
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
			var cc_id = document.getElementById('s_cc_id').value;
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
			document.getElementById('s_m_id').value = m_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#s_m_id").val("");
				$("#s_m_name").val("");
				$("#s_m_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$(".search_prime_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('s_cc_id').value;
			var s_m_id = document.getElementById('s_m_id').value;
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
			document.getElementById('s_p_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#s_p_id").val("");
				$("#s_p_name").val("");
				$("#s_p_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$(".search_school").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('s_cc_id').value;
			var s_m_id = document.getElementById('s_p_id').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_school_name",
				dataType: "json",
				data: {
					m_id: s_m_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var p_id = ui.item.p_id;
			document.getElementById('bp_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#bp_id").val("");
				$("#s_name").val("");
				$("#s_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$("#add_mast").on('click', function(){
		
		var s_cc_id = document.getElementById('s_cc_id').value; 
		var s_m_id = document.getElementById('s_m_id').value;
		var s_p_name = document.getElementById('s_p_name').value;
		var s_p_id = document.getElementById('s_p_id').value;
		var s_name = document.getElementById('s_name').value;
		var bp_id = document.getElementById('bp_id').value;
		var s_status = document.getElementById('s_status').value;
		var s_m_name = document.getElementById('s_m_name').value;
		
		if(s_m_name == ''){
			alert('Enter Master Category Name.');
		} else if(s_p_name == ''){
			alert('Enter Prime Category Name.');
		} else if(s_name == ''){
			alert('Enter Website Name.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"s_cc_id="+s_cc_id+"&s_m_id="+s_m_id+"&s_p_id="+s_p_id+"&s_name="+s_name+"&s_status="+s_status+"&bp_id="+bp_id,
				url:"<?php echo $admin_url?>ad_data.php?call=add_micro_permission",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Saved Successfully.");
						document.getElementById('s_m_id').value = ''; 
						document.getElementById('s_p_id').value = '';
						document.getElementById('s_name').value = '';
						document.getElementById('s_p_name').value = '';
						document.getElementById('s_m_name').value = '';
						document.getElementById('bp_id').value = '';
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