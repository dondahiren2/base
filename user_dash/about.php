<?php 
	include("header.php");
	$ids = isset($_GET['ids']) ? $_GET['ids'] : '';
	$types = isset($_GET['types']) ? $_GET['types'] : '';
	 
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
			<a href="<?php echo $user_url?>about_list"><?php echo ucwords($types);?> List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#"><?php echo ucwords($types);?></a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if($ids != 'create'){
		$m_id = base64_decode($_GET['ids']);
		mysqli_set_charset($con, 'utf8');
		$mast = $con->query("select ma_id, ma_title, ma_text, ma_alignment, ma_position, ma_photo, ma_color, ma_status from micro_about where ma_id = '$m_id' and ma_tal_id = '$bp_tal_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
		<div class="col-md-6 col-md-offset-3">
			<div class="portlet light bordered">
				<div class="row">
					<h3 class="col-xs-12 form-title">Edit <?php echo ucwords($types);?></h3>
				</div>
				<div class="portlet-body ">
					<div class="row">
						<div class="col-xs-12">
							<p class="text_margin_0">Title</p>
							<input type="text" class="form-control" placeholder="Title" id="ma_title" name="ma_title" value="<?php echo $r['ma_title']?>" />
							<input type="hidden" class="" id="ma_id" name="ma_id" value="<?php echo $r['ma_id']?>" /> 
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0"><?php echo ucwords($types);?> Text</p>
							<textarea type="text" class="form-control" rows="10" id="ma_text" name="ma_text" ><?php echo $r['ma_text']?></textarea>
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Alignment</p>
							<select class="form-control" id="ma_alignment" name="ma_alignment" >
								<option value=""></option>
								<option value="Left" <?php if($r['ma_alignment'] == 'Left'){ echo 'selected'; } ?> >Left</option>
								<option value="Right" <?php if($r['ma_alignment'] == 'Right'){ echo 'selected'; } ?> >Right</option>
							</select>
						</div> 
						<div class="col-xs-12">
							<p class="text_margin_0">Position</p>
							<input type="text" class="form-control" placeholder="Position" id="ma_position" name="ma_position" value="<?php echo $r['ma_position']?>"  />
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Background Color</p>
							<input type="text" class="form-control jscolor" placeholder="Background Color" id="ma_color" name="ma_color" value="<?php echo $r['ma_color']?>"  />
						</div>
						<div class="col-xs-12">
							<input type="submit" value="Photo Upload" id="upload_logo" class="btn btn-success"/>
							<input type="hidden" class="" id="ma_photo" name="ma_photo" value="<?php echo $r['ma_photo']?>" /> 
							<div  style="margin-top: 10px;">
								<img src="<?php echo $cdn_path.$r['ma_photo']?>" id="show_img" style="width: 150px;"/>
							</div>
						</div>
						<div class="col-xs-12 footer_border">
							<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
							<a href="<?php echo $user_url?>about_list/<?php echo $types;?>" class="btn btn-primary">List</a>	
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
					<h3 class="col-xs-12 form-title">Create <?php echo ucwords($types);?></h3>
				</div>
				<div class="portlet-body ">
					<div class="row">
						<div class="col-xs-12">
							<p class="text_margin_0">Title</p>
							<input type="text" class="form-control" placeholder="Title" id="ma_title" name="ma_title" />
							<input type="hidden" class="" id="ma_id" name="ma_id" /> 
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0"><?php echo ucwords($types);?> Text</p>
							<textarea type="text" class="form-control" rows="10" id="ma_text" name="ma_text" ></textarea>
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Alignment</p>
							<select class="form-control" id="ma_alignment" name="ma_alignment" >
								<option value=""></option>
								<option value="Left">Left</option>
								<option value="Right">Right</option>
							</select>
						</div> 
						<div class="col-xs-12">
							<p class="text_margin_0">Position</p>
							<input type="text" class="form-control" placeholder="Position" id="ma_position" name="ma_position" />
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Background Color</p>
							<input type="text" class="form-control jscolor" placeholder="Background Color" id="ma_color" name="ma_color" />
						</div>
						<div class="col-xs-12">
							<input type="submit" value="Photo Upload" id="upload_logo" class="btn btn-success"/>
							<input type="hidden" class="" id="ma_photo" name="ma_photo" /> 
							<div  style="margin-top: 10px;">
								<img src="https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/No-Profile.png" id="show_img" style="width: 150px;"/>
							</div>
						</div>
						<div class="col-xs-12 footer_border">
							<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
							<a href="<?php echo $user_url?>about_list/<?php echo $types;?>" class="btn btn-primary">List</a>	
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php 
	} 
	?>
	</div>
	<script src="<?php echo $user_url?>js/jscolor.js"></script>
	
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
			<div class="col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top:30px;">
				<strong>Select Image:</strong>
				<br/>
				<input type="file" id="upload" style="display: block !important;margin: auto;">
				<br/>
	  		</div> 
	  		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
				<div id="upload-demo" style="width:700px;margin:auto;"></div>
				<i class="fa fa-undo" aria-hidden="true" id="rotateLeft" data-rotate="-90" style="margin-right: 15px;"></i>
				<i class="fa fa-repeat" aria-hidden="true" id="rotateRight" data-rotate="90"></i>
	  		</div>
			<div class="col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top:30px;">
				<button class="btn btn-success upload-result">Upload Preview Image</button>
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
			width: 650,
			height: 450
		},
		boundary: {
			width: 700,
			height: 500
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
				data: {"image":resp, "parts":"about" },
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function (data) {
					var split = data.split('part');
					if(split[0] == 1){
						var img = split[1];
						document.getElementById("ma_photo").value = img;
						document.getElementById("show_img").src = '<?php echo $cdn_path?>'+img;
						alert("Upload Successfully.");
						$("#myModal").modal('hide');
						$(".response_gif").hide();
					} else {
						alert("Try Again.");
					}					
					/*html = '<img src="' + resp + '" />';
					$("#upload-demo-i").html(html);*/
				}
			});
		});
	});
	
	$("#upload_logo").on('click', function(){
		 $("#myModal").modal();
	});
	
	$("#add_mast").on('click', function(){
		var ma_title = document.getElementById('ma_title').value;
		var ma_text = document.getElementById('ma_text').value;
		var ma_alignment = document.getElementById('ma_alignment').value; 
		var ma_position = document.getElementById('ma_position').value; 
		var ma_color = document.getElementById('ma_color').value;
		var ma_id = document.getElementById('ma_id').value;
		var ma_photo = document.getElementById('ma_photo').value;
		var ma_status = 0;

		if(ma_title == ''){
			alert('Enter Title.');
		} else if(ma_text == ''){
			alert('Enter About Text.');
		} else if(ma_alignment == ''){
			alert('Select Alignment.');
		} else if(ma_position == ''){
			alert('Enter Position.');
		} else if(ma_photo == ''){
			alert('Upload Photo.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"ma_title="+ma_title+"&ma_text="+ma_text+"&ma_alignment="+ma_alignment+"&ma_position="+ma_position+"&ma_photo="+ma_photo+"&ma_status="+ma_status+"&ma_id="+ma_id+"&ma_color="+ma_color+"&types=<?php echo $types;?>",
				url:"<?php echo $admin_url?>ad_data.php?call=add_about",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						location.reload(); 
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