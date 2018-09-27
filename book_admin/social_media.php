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
			<a href="<?php echo $admin_url?>social_media_list">Social Media List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Social Media</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		mysqli_set_charset($con, 'utf8');
		$mast = $con->query("select msm_id, msm_facebook, msm_google, msm_instagram, msm_twitter from micro_social_media where msm_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast); 
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Short Details</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;"><i class="fa fa-facebook"></i> Facebook:</p>
									<input type="text" class="form-control" placeholder="facebook" id="msm_facebook" name="msm_facebook" value="<?php echo $r['msm_facebook'];?>" />
									<input type="hidden" id="msm_id" name="msm_id" value="<?php echo $r['msm_id'];?>" /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;"><i class="fa fa-google-plus"></i> Google Plus:</p>
									<input type="text" class="form-control" placeholder="google plus" id="msm_google" name="msm_google" value="<?php echo $r['msm_google'];?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;"><i class="fa fa-twitter"></i> Twitter:</p>
									<input type="text" class="form-control" placeholder="twitter" id="msm_twitter" name="msm_twitter" value="<?php echo $r['msm_twitter'];?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;"><i class="fa fa-instagram"></i> Instagram:</p>
									<input type="text" class="form-control" placeholder="instagram" id="msm_instagram" name="msm_instagram" value="<?php echo $r['msm_instagram'];?>" />
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>social_media_list" class="btn btn-primary">List</a>	
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
 <script src="<?php echo $user_url ?>js/jscolor.js"></script>
<script>
var requ;
$(document).ready(function() {
	$(".nav_web_management").addClass('active_head');
		 
	$("#add_mast").on('click', function(){
		var msm_id = document.getElementById('msm_id').value;
		var msm_facebook = document.getElementById('msm_facebook').value;
		var msm_google = document.getElementById('msm_google').value;
		var msm_instagram = document.getElementById('msm_instagram').value;
		var msm_twitter = document.getElementById('msm_twitter').value; 
		if(requ && requ.readyState != 4) {
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:{msm_id: msm_id, msm_facebook: msm_facebook, msm_google: msm_google, msm_instagram: msm_instagram, msm_twitter: msm_twitter },
			url:"<?php echo $admin_url?>ad_data.php?call=admin_social_links_update",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(html){
				if(html == 1){
					alert("Insert Successfully."); 
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
    });

	
});
</script>
</body>
</html>