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
			<a href="<?php echo $admin_url?>slogan_list">Slogan List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Slogan</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		mysqli_set_charset($con, 'utf8');
		$mast = $con->query("select ms_id, ms_s1, ms_back_color1, ms_s2, ms_back_color2, ms_s3, ms_back_color3, ms_s4, ms_back_color4, ms_s5, ms_back_color5, ms_active, ms_tal_id from micro_slogan where ms_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
			
			$ms_id = $r['ms_id'];
			$ms_tal_id = $r['ms_tal_id'];
			$ms_s1 = $r['ms_s1'];
			if($r['ms_back_color1']){
				$ms_back_color1 = $r['ms_back_color1'];
			} else {
				$ms_back_color1 = '9B6BCC';
			}
			$ms_s2 = $r['ms_s2'];
			if($r['ms_back_color2']){
				$ms_back_color2 = $r['ms_back_color2'];
			} else {
				$ms_back_color2 = 'E74C3C';
			}
			
			$ms_s3 = $r['ms_s3']; 
			if($r['ms_back_color3']){
				$ms_back_color3 = $r['ms_back_color3'];
			} else {
				$ms_back_color3 = 'E67E22';
			}
			
			$ms_s4 = $r['ms_s4']; 
			if($r['ms_back_color4']){
				$ms_back_color4 = $r['ms_back_color4'];
			} else {
				$ms_back_color4 = '4CACFF';
			}
			
			$ms_s5 = $r['ms_s5'];
			if($r['ms_back_color4']){
				$ms_back_color5 = $r['ms_back_color5'];
			} else {
				$ms_back_color5 = 'F1C40F';
			}
			 
			
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Short Details</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan1:</p>
									<input type="text" class="form-control" placeholder="Slogan1" id="ms_s1" name="ms_s1" value="<?php echo $ms_s1;?>" />
									<input type="hidden" id="ms_id" name="ms_id" value="<?php echo $ms_id;?>" /> 
									<input type="hidden" id="ms_tal_id" name="ms_tal_id" value="<?php echo $ms_tal_id;?>" /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan1 Background Color:</p>
									<input type="text" class="form-control jscolor" placeholder="Slogan1 Background Color" id="ms_back_color1" name="ms_back_color1" value="<?php echo $ms_back_color1;?>" />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan2:</p>
									<input type="text" class="form-control" placeholder="Slogan2" id="ms_s2" name="ms_s2" value="<?php echo $ms_s2;?>" /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan2 Background Color:</p>
									<input type="text" class="form-control jscolor" placeholder="Slogan2 Background Color" id="ms_back_color2" name="ms_back_color2" value="<?php echo $ms_back_color2;?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan3:</p>
									<input type="text" class="form-control" placeholder="Slogan3" id="ms_s3" name="ms_s3" value="<?php echo $ms_s3;?>" /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan3 Background Color:</p>
									<input type="text" class="form-control jscolor" placeholder="Slogan3 Background Color" id="ms_back_color3" name="ms_back_color3" value="<?php echo $ms_back_color3;?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan4:</p>
									<input type="text" class="form-control" placeholder="Slogan4" id="ms_s4" name="ms_s4" value="<?php echo $ms_s4;?>" /> 
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan4 Background Color:</p>
									<input type="text" class="form-control jscolor" placeholder="Slogan4 Background Color" id="ms_back_color4" name="ms_back_color4" value="<?php echo $ms_back_color4;?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan5:</p>
									<input type="text" class="form-control" placeholder="Slogan5" id="ms_s5" name="ms_s5" value="<?php echo $ms_s5;?>" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan5 Background Color:</p>
									<input type="text" class="form-control jscolor" placeholder="Slogan5 Background Color" id="ms_back_color5" name="ms_back_color5" value="<?php echo $ms_back_color5;?>" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Status</p>
									<select class="form-control" id="ms_active" name="ms_active" >
										<option value="0" <?php if($r['ms_active'] == 0){ echo 'selected'; } ?> >Pending</option>
										<option value="1" <?php if($r['ms_active'] == 1){ echo 'selected'; } ?> >Activated</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>short_description_list" class="btn btn-primary">List</a>	
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
		var ms_id = document.getElementById('ms_id').value;
		var ms_s1 = document.getElementById('ms_s1').value;
		var ms_back_color1 = document.getElementById('ms_back_color1').value;
		var ms_s2 = document.getElementById('ms_s2').value;
		var ms_back_color2 = document.getElementById('ms_back_color2').value;
		var ms_s3 = document.getElementById('ms_s3').value;
		var ms_back_color3 = document.getElementById('ms_back_color3').value;
		var ms_s4 = document.getElementById('ms_s4').value;
		var ms_back_color4 = document.getElementById('ms_back_color4').value;
		var ms_s5 = document.getElementById('ms_s5').value;
		var ms_back_color5 = document.getElementById('ms_back_color5').value;
		var ms_active = document.getElementById('ms_active').value; 
		var ms_tal_id = document.getElementById('ms_tal_id').value; 
		
		if(ms_s1 == ''){
			alert('Select Language.');
		} else if(ms_back_color1 == ''){
			alert('Enter Title.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:{ms_id: ms_id, ms_s1: ms_s1, ms_back_color1: ms_back_color1, ms_s2: ms_s2, ms_back_color2: ms_back_color2, ms_s3: ms_s3, ms_back_color3: ms_back_color3, ms_s4: ms_s4, ms_back_color4: ms_back_color4, ms_s5: ms_s5, ms_back_color5: ms_back_color5, ms_active: ms_active, ms_tal_id: ms_tal_id},
				url:"<?php echo $admin_url?>ad_data.php?call=live_slogan",
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
		}
    });

	
});
</script>
</body>
</html>