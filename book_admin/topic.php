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
			<a href="#">Topic</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$cc_id = base64_decode($_GET['ids']);
		$mast = $con->query("select cc_name, cc_id, cc_status from create_topic where cc_id = '$cc_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Topic</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Topic Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="Topic Name" id="cc_name" name="cc_name" value="<?php echo $r['cc_name'] ?>" />
									<input type="hidden" id="cc_id" name="cc_id" value="<?php echo $r['cc_id'] ?>" />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="cc_status" name="cc_status" >
										<option value="0" <?php if($r['cc_status'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['cc_status'] == 1){ echo 'selected'; } ?>>No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>topic_list" class="btn btn-primary">List</a>	
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
							<h3 class="col-xs-12 form-title">Create Topic</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Topic Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="Topic Name" id="cc_name" name="cc_name" />
									<input type="hidden" id="cc_id" name="cc_id" />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="cc_status" name="cc_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>topic_list" class="btn btn-primary">List</a>	
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
	$("#add_mast").on('click', function(){
		var cc_id = document.getElementById('cc_id').value;
		var cc_name = document.getElementById('cc_name').value;
		var cc_status = document.getElementById('cc_status').value;
		if(cc_name == ''){
			alert('Enter Topic Name.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"cc_id="+cc_id+"&cc_name="+cc_name+"&cc_status="+cc_status,
				url:"<?php echo $admin_url?>ad_data.php?call=add_topic",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('cc_id').value = '';
						document.getElementById('cc_name').value = '';
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