<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>web_management">Web Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>micro_site">Micro Web Site</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>testimonial_list">Testimonial List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Testimonial</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		mysqli_set_charset($con, 'utf8');
		$mast = $con->query("select mt_id, mt_name, mt_designation, mt_text, mt_file, mt_status, mt_tal_id from micro_testimonials where mt_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Testimonial</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p class="text_margin_0">Person Name :</p>
									<input type="text" class="form-control" placeholder="Person Name" id="mt_name" name="mt_name" value="<?php echo $r['mt_name']?>"  />
									<input type="hidden" class="" id="mt_id" name="mt_id" value="<?php echo $r['mt_id']?>" /> 
									<input type="hidden" class="" id="mt_tal_id" name="mt_tal_id" value="<?php echo $r['mt_tal_id']?>" /> 
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Designation</p>
									<input type="text" class="form-control" placeholder="Designation" id="mt_designation" name="mt_designation" value="<?php echo $r['mt_designation']?>"/>
								</div> 
								<div class="col-xs-12">
									<p class="text_margin_0">Testimonial Text</p>
									<textarea type="text" class="form-control" rows="10" id="mt_text" name="mt_text" ><?php echo $r['mt_text']?></textarea>
								</div>
								<div class="col-xs-12">
									<input type="hidden" class="" id="mt_file" name="mt_file" value="<?php echo $r['mt_file']?>" /> 
									<div  style="margin-top: 10px;">
										<?php
											if($r['mt_file']){
										?>
											<div id="file_remove" style="border: 1px solid #ccc;padding: 10px 10px 6px;margin-top: 10px;width: 172px;text-align: center;height: 172px;line-height: 43px;position: relative;">
												<img src="<?php echo $cdn_path.$r['mt_file'] ?>" id="show_img" style="width: 150px;"/>
											</div>
										<?php
											} else {
										?>
											<img src="https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/No-Profile.png" id="show_img" class="show_img" style="width: 150px;"/>
										<?php
											}
										?>
									</div>
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Status</p>
									<select class="form-control" id="mt_status" name="mt_status" >
										<option value="0" <?php if($r['mt_status'] == 0){ echo 'selected'; } ?> >Pending</option>
										<option value="1" <?php if($r['mt_status'] == 1){ echo 'selected'; } ?> >Activated</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $user_url?>testimonial_list" class="btn btn-primary">List</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
	<?php 
		}
	} 
	?>
	</div>
	 
<?php include('footer.php'); ?>
 
<script>
var requ;
 $(document).ready(function() {
	$(".nav_micro_site").addClass('active_head');
	  
	$("#add_mast").on('click', function(){
		var mt_name = document.getElementById('mt_name').value;
		var mt_designation = document.getElementById('mt_designation').value;
		var mt_text = document.getElementById('mt_text').value; 
		var mt_file = document.getElementById('mt_file').value; 
		var mt_id = document.getElementById('mt_id').value;
		var mt_status = document.getElementById('mt_status').value;
		var mt_tal_id = document.getElementById('mt_tal_id').value;
		
		if(mt_name == ''){
			alert('Enter News Title.');
		} else if(mt_designation == ''){
			alert('Enter Designation.');
		} else if(mt_text == ''){
			alert('Enter Testimonial Text.');
		} else if(mt_file == ''){
			alert('Upload Profile Pic.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"mt_name="+mt_name+"&mt_designation="+mt_designation+"&mt_text="+mt_text+"&mt_file="+mt_file+"&mt_id="+mt_id+"&mt_status="+mt_status+"&mt_tal_id="+mt_tal_id,
				url:"<?php echo $admin_url?>ad_data.php?call=add_testimonials",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('mt_name').value = '';
						document.getElementById('mt_designation').value = '';
						document.getElementById('mt_text').value = '';
						document.getElementById('mt_file').value = ''; 
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