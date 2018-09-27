<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $user_url?>web_management">Web Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $user_url?>micro_site">Micro Web Site</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $user_url?>testimonial_list">Testimonial List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Testimonial</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['id'])){
		$m_id = base64_decode($_GET['id']);
		mysqli_set_charset($con, 'utf8');
		$mast = $con->query("select mt_id, mt_name, mt_designation, mt_text, mt_file from micro_testimonials where mt_id = '$m_id' and mt_tal_id = '$bp_tal_id' ");
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
									<input type="submit" value="Person Photo Upload" id="upload_logo" class="btn btn-success"/>
									<input type="hidden" class="" id="mt_file" name="mt_file" value="<?php echo $r['mt_file']?>" /> 
									<div  style="margin-top: 10px;">
										<?php
											if($r['mt_file']){
										?>
											<div id="file_remove" style="border: 1px solid #ccc;padding: 10px 10px 6px;margin-top: 10px;width: 172px;text-align: center;height: 172px;line-height: 43px;position: relative;">	
												<i class="fa fa-times" aria-hidden="true" style="right: 0;margin-top: -12px;cursor: pointer;position: absolute;float: left;" onclick="file_remove(<?php echo $r['mt_id']; ?>);" ></i>
												<img src="<?php echo $cdn_path.$r['mt_file'] ?>" id="show_img" style="width: 150px;"/>
											</div>	
											
											<img src="https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/No-Profile.png" id="show_img" class="show_img" style="width: 150px;display:none;"/>
										<?php
											} else {
										?>
											<img src="https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/No-Profile.png" id="show_img" class="show_img" style="width: 150px;"/>
										<?php
											}
										?>
									</div>
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
	} else { ?>		
		<div class="col-md-6 col-md-offset-3">
			<div class="portlet light bordered">
				<div class="row">
					<h3 class="col-xs-12 form-title">Create Testimonial</h3>
				</div>
				<div class="portlet-body ">
					<div class="row">
						<div class="col-xs-12">
							<p class="text_margin_0">Person Name :</p>
							<input type="text" class="form-control" placeholder="Person Name" id="mt_name" name="mt_name" />
							<input type="hidden" class="" id="mt_id" name="mt_id" /> 
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Designation</p>
							<input type="text" class="form-control" placeholder="Designation" id="mt_designation" name="mt_designation"/>
						</div> 
						<div class="col-xs-12">
							<p class="text_margin_0">Testimonial Text</p>
							<textarea type="text" class="form-control" rows="10" id="mt_text" name="mt_text" ></textarea>
						</div>
						<div class="col-xs-12">
							<input type="submit" value="Person Photo Upload" id="upload_logo" class="btn btn-success"/>
							<input type="hidden" class="" id="mt_file" name="mt_file" /> 
							<div  style="margin-top: 10px;">
								<img src="https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/No-Profile.png" id="show_img" style="width: 150px;"/>
							</div>
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
	?>
	</div>
	
	
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:80%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Logo Upload</h4>
      </div>
      <div class="modal-body">
		<div class="row margin-bottom-60">
	  		<div class="col-md-4 col-sm-4 col-xs-12 text-center">
				<div id="upload-demo" style="width:200px;margin:auto;"></div>
				<i class="fa fa-undo" aria-hidden="true" id="rotateLeft" data-rotate="-90" style="margin-right: 15px;"></i>
				<i class="fa fa-repeat" aria-hidden="true" id="rotateRight" data-rotate="90"></i>
				
	  		</div>
	  		<div class="col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
				<strong>Select Image:</strong>
				<br/>
				<input type="file" id="upload" style="display: block !important;">
				<br/>
				<button class="btn btn-success upload-result">Upload Preview Image</button>
	  		</div>
	  		<div class="col-md-4 col-sm-4 col-xs-12" style="">
				<div id="upload-demo-i" style="background:#e1e1e1;width:200px;height:200px;margin-top: 30px;text-align: center;padding-top: 25px;margin:auto;"></div>
				<p class="text-center" style="text-align: center;">Preview Image</p>
	  		</div>
	  	</div>
      </div>
      <div class="modal-footer"> 
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
  
  
</div>

<?php include('footer.php'); ?>
<link rel="stylesheet" href="https://foliotek.github.io/Croppie/croppie.css">
<script src="https://foliotek.github.io/Croppie/croppie.js"></script>
<script>
var requ;
 $(document).ready(function() {
	$(".nav_micro_site").addClass('active_head');
	$uploadCrop = $('#upload-demo').croppie({
		enableExif: true,
		viewport: {
			width: 150,
			height: 150
		},
		boundary: {
			width: 200,
			height: 200
		},
		enableExif: true,
		enableOrientation: true
	});

	$('#upload').on('change', function () { 
		var reader = new FileReader();
		reader.onload = function (e) {
			$uploadCrop.croppie('bind', {
				url: e.target.result
			}).then(function(){
				console.log('jQuery bind complete');
			});
			
		}
		reader.readAsDataURL(this.files[0]);
	});

	$( "#rotateLeft" ).click(function() {
		$uploadCrop.croppie('rotate', parseInt($(this).data('rotate')));
	});

	$( "#rotateRight" ).click(function() {
		$uploadCrop.croppie('rotate',parseInt($(this).data('rotate')));
	});

	$('.upload-result').on('click', function (ev) {
		$uploadCrop.croppie('result', {
			type: 'canvas',
			size: 'viewport'
		}).then(function (resp) {
			$.ajax({
				url: "<?php echo $site_url?>ajaxpro_testimonials",
				type: "POST",
				data: {"image":resp, "parts":"testimonial" },
				success: function (data) {
					var split = data.split('part');
					if(split[0] == 1){
						var img = split[1];
						document.getElementById("mt_file").value = img;
						document.getElementById("show_img").src = '<?php echo $cdn_path?>'+img;
						alert("Upload Successfully.");
					} else {
						alert("Try Again.");
					}					
					html = '<img src="' + resp + '" />';
					$("#upload-demo-i").html(html);
				}
			});
		});
	});
	
	$("#upload_logo").on('click', function(){
		 $("#myModal").modal();
	});
	
	$("#add_mast").on('click', function(){
		var mt_name = document.getElementById('mt_name').value;
		var mt_designation = document.getElementById('mt_designation').value;
		var mt_text = document.getElementById('mt_text').value; 
		var mt_file = document.getElementById('mt_file').value; 
		var mt_id = document.getElementById('mt_id').value;
		
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
				data:"mt_name="+mt_name+"&mt_designation="+mt_designation+"&mt_text="+mt_text+"&mt_file="+mt_file+"&mt_id="+mt_id,
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

	function file_remove(id){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id,
			url:"<?php echo $admin_url?>ad_data.php?call=file_remove_testimonial",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(html){
				if(html == 1){
					$(".show_img").css({"display":"block"});
					$("#file_remove").css({"display":"none"});
					alert("deleted successfully.");
				} else {
					alert("Try Again.");
				}	
			}
		});
	} 
</script>
</body>
</html>