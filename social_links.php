<?php 
	include("header.php");

	$msm_id = '';
	$msm_facebook = '';
	$msm_google = '';
	$msm_instagram = '';
	$msm_twitter = '';
	  
	mysqli_set_charset($con, 'utf8');
	$re = $con->query("select msm_id, msm_facebook, msm_google, msm_instagram, msm_twitter from micro_social_media where msm_bp_tal_id = '$bp_tal_id' and msm_bp_unique_id = '$bp_unique_id' ");
	if(mysqli_num_rows($re) > 0){
		while($r = mysqli_fetch_assoc($re)){
			$msm_id = $r['msm_id'];
			$msm_facebook = $r['msm_facebook'];
			$msm_google = $r['msm_google'];
			$msm_instagram = $r['msm_instagram'];
			$msm_twitter = $r['msm_twitter'];
		}
	}
?>
<script src="js/jscolor.js"></script>

<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>technical_management">Mirco Web Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>social_links">Social Links</a>
		</li>
	</ul>
</div>
	<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Social Links</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;"><i class="fa fa-facebook"></i> Facebook:</p>
									<input type="text" class="form-control" placeholder="facebook" id="msm_facebook" name="msm_facebook" value="<?php echo $msm_facebook;?>" />
									<input type="hidden" id="msm_id" name="msm_id" value="<?php echo $msm_id;?>" /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;"><i class="fa fa-google-plus"></i> Google Plus:</p>
									<input type="text" class="form-control" placeholder="google plus" id="msm_google" name="msm_google" value="<?php echo $msm_google;?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;"><i class="fa fa-twitter"></i> Twitter:</p>
									<input type="text" class="form-control" placeholder="twitter" id="msm_twitter" name="msm_twitter" value="<?php echo $msm_twitter;?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;"><i class="fa fa-instagram"></i> Instagram:</p>
									<input type="text" class="form-control" placeholder="instagram" id="msm_instagram" name="msm_instagram" value="<?php echo $msm_instagram;?>" />
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
$(document).ready(function() {
	$(".nav_micro_site").addClass('active_head');
	 
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
			data:{msm_id: msm_id, msm_facebook: msm_facebook, msm_google: msm_google, msm_instagram: msm_instagram, msm_twitter: msm_twitter},
			url:"<?php echo $admin_url?>ad_data.php?call=add_social_links",
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