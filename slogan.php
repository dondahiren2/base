<?php 
	include("header.php");
	
	$ms_id = '';
	$ms_s1 = '';
	$ms_back_color1 = '';
	$ms_s2 = '';
	$ms_back_color2 = '';
	$ms_s3 = '';
	$ms_back_color3 = '';
	$ms_s4 = '';
	$ms_back_color4 = '';
	$ms_s5 = '';
	$ms_back_color5 = '';
	$ms_active = '';
	
	mysqli_set_charset($con, 'utf8');
	$re = $con->query("select ms_id, ms_s1, ms_back_color1, ms_s2, ms_back_color2, ms_s3, ms_back_color3, ms_s4, ms_back_color4, ms_s5, ms_back_color5, ms_active from micro_slogan where ms_tal_id = '$bp_tal_id' and ms_unique_id = '$bp_unique_id' ");
	if(mysqli_num_rows($re) > 0){
		while($r = mysqli_fetch_assoc($re)){
			$ms_id = $r['ms_id'];
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
			
			if($r['ms_active'] == 0){
				$ms_active = 'Pending';
			} else if($r['ms_active'] == 1){
				$ms_active = 'Activated';
			} else {
				$ms_active = 'Pending';
			}
			
		}
	} else {
		$ms_back_color1 = '9B6BCC';
		$ms_back_color2 = 'E74C3C';
		$ms_back_color3 = 'E67E22';
		$ms_back_color4 = '4CACFF';
		$ms_back_color5 = 'F1C40F';
		$ms_active = 'Pending';
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
			<a href="<?php echo $admin_url?>slogan">Slogan</a>
		</li>
	</ul>
</div>
	<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Slogan</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p style="margin-top:7px;">Slogan1:</p>
									<input type="text" class="form-control" placeholder="Slogan1" id="ms_s1" name="ms_s1" value="<?php echo $ms_s1;?>" />
									<input type="hidden" id="ms_id" name="ms_id" value="<?php echo $ms_id;?>" /> 
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
									<p style="margin-top:7px;">Status : <?php echo $ms_active;?></p> 
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
		var ms_active = 0; 

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
				data:{ms_id: ms_id, ms_s1: ms_s1, ms_back_color1: ms_back_color1, ms_s2: ms_s2, ms_back_color2: ms_back_color2, ms_s3: ms_s3, ms_back_color3: ms_back_color3, ms_s4: ms_s4, ms_back_color4: ms_back_color4, ms_s5: ms_s5, ms_back_color5: ms_back_color5, ms_active: ms_active},
				url:"<?php echo $admin_url?>ad_data.php?call=add_slogan",
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