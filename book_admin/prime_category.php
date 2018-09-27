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
			<a href="<?php echo $admin_url?>tech_category_master">Category Master</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>prime_category_list">Prime Category List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Prime Category</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		$mast = $con->query("select p_id, p_cc_id, cc_name as p_cc_name, p_m_id, m_name as p_m_name, p_name, p_status from create_topic as c join master_category as m on c.cc_id = m.m_cc_id join prime_category as p on p.p_cc_id = c.cc_id and p.p_m_id = m.m_id where p_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Prime Category</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Topic Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control search_topic_name" placeholder="Topic Name" id="p_cc_name" name="p_cc_name" value="<?php echo $r['p_cc_name']?>" />
									<input type="hidden" id="p_cc_id" name="p_cc_id" value="<?php echo $r['p_cc_id']?>" />
									<input type="hidden" id="p_id" name="p_id" value="<?php echo $r['p_id']?>"  />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="p_m_name" name="p_m_name" value="<?php echo $r['p_m_name']?>" />
									<input type="hidden" id="p_m_id" name="p_m_id" value="<?php echo $r['p_m_id']?>"  />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Prime Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="Prime Category Name" id="p_name" name="p_name" value="<?php echo $r['p_name']?>"  />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="p_status" name="p_status" >
										<option value="0" <?php if($r['p_status'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['p_status'] == 1){ echo 'selected'; } ?>>No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>prime_category_list" class="btn btn-primary">List</a>	
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
							<h3 class="col-xs-12 form-title">Create Prime Category</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Topic Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control search_topic_name" placeholder="Topic Name" id="p_cc_name" name="p_cc_name" />
									<input type="hidden" id="p_cc_id" name="p_cc_id" />
									<input type="hidden" id="p_id" name="p_id" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="p_m_name" name="p_m_name"/>
									<input type="hidden" id="p_m_id" name="p_m_id" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Prime Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="Prime Category Name" id="p_name" name="p_name" />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="p_status" name="p_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>prime_category_list" class="btn btn-primary">List</a>	
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
	$(".search_topic_name").autocomplete({
		source: function (request, response) {
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_topic_name",
				dataType: "json",
				data: {
					term: request.term
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var cc_id = ui.item.cc_id;
			document.getElementById('p_cc_id').value = cc_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#p_cc_id").val("");
				$("#p_cc_name").val("");
				$("#p_cc_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
	
	$(".search_master_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('p_cc_id').value;
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
			document.getElementById('p_m_id').value = m_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#p_m_id").val("");
				$("#p_m_name").val("");
				$("#p_m_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$("#add_mast").on('click', function(){
		var p_cc_name = document.getElementById('p_cc_name').value;
		var p_cc_id = document.getElementById('p_cc_id').value;
		var p_id = document.getElementById('p_id').value;
		var p_m_name = document.getElementById('p_m_name').value;
		var p_m_id = document.getElementById('p_m_id').value;
		var p_name = document.getElementById('p_name').value;
		var p_status = document.getElementById('p_status').value;
		
		if(p_cc_name == ''){
			alert('Enter Topic Name.');
		} else if(p_m_name == ''){
			alert('Enter Master Category Name.');
		} else if(p_name == ''){
			alert('Enter Prime Category Name.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"p_cc_name="+p_cc_name+"&p_cc_id="+p_cc_id+"&p_id="+p_id+"&p_m_name="+p_m_name+"&p_m_id="+p_m_id+"&p_name="+p_name+"&p_status="+p_status,
				url:"<?php echo $admin_url?>ad_data.php?call=add_prime",
				beforeSend: function(){
					$(".response_gif").show();
				},success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('p_cc_name').value = '';
						document.getElementById('p_cc_id').value = '';
						document.getElementById('p_id').value = '';
						document.getElementById('p_m_name').value = '';
						document.getElementById('p_m_id').value = '';
						document.getElementById('p_name').value = '';
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