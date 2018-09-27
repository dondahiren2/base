<?php 
	include("header.php");
?>
<link rel="stylesheet" href="https://foliotek.github.io/Croppie/croppie.css">
<link rel="stylesheet" href="<?php echo $site_url?>css/web_font.css">
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="<?php echo $user_url?>micro_site">Micro Web Management</a>
				<i class="fa fa-angle-right"></i>
			</li> 
			<li>
				<a href="#">Logo</a>
			</li>
		</ul>
	</div>
	<section class="content">
	<div class="row">
	 
		<div class="col-md-12 ">
			<div class="box box-primary"  style="padding: 15px 0px;">
				<div class="col-md-12">
					<h4 class="form-title">Logo</h4>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 ">
					 <label>Web Logo</label>
					 <?php 
						$re = $con->query("select mlb_path from micro_logo_banner where mlb_unique_id = '$bp_unique_id' and mlb_type = 'logo'");
						if(mysqli_num_rows($re) > 0){
							$r = mysqli_fetch_assoc($re);
							if($r['mlb_path']){
								$mlb_path = $cdn_path.$r['mlb_path'];
							} else {
								$mlb_path = 'https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/mirco_logo.png';
							}
						} else {
							$mlb_path = 'https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/mirco_logo.png';
						}
					 ?>
					 <img src="<?php echo $mlb_path?>" id="logo_path" alt="logo pic here" class="img-responsive" style="width:300px;margin-top:10px;margin-bottom: 10px;"/>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 15px;">
					<input type="submit" value="Logo Upload" id="upload_logo" class="btn btn-success"/>
				</div> 
			</div>
		</div>
	</div> 
	</section>
	
	<section class="content"  style="margin-top: 25px;">
	<div class="row">
	 
		<div class="col-md-12">
			<div class="box box-primary" style="padding: 15px 0px;">
				<div class="col-md-12">
					<h4 class="form-title">Navigation & Site Name Font Family</h4>
				</div>
				<?php 
					$re = $con->query("select mh_topbar_color, mh_id, mh_nav_back_color, mh_nav_active_color, mh_nav_active_top_color, mh_font, mh_active_color, mh_color from micro_header where mh_tal_id = '$bp_tal_id' ");
					if(mysqli_num_rows($re) > 0){
						$r = mysqli_fetch_assoc($re);
						$mh_topbar_color =  $r['mh_topbar_color'];
						$mh_nav_back_color =  $r['mh_nav_back_color'];
						$mh_nav_active_color =  $r['mh_nav_active_color'];
						$mh_nav_active_top_color =  $r['mh_nav_active_top_color'];
						$mh_id = $r['mh_id'];
						$mh_font =  $r['mh_font'];
						$mh_color =  $r['mh_color'];
						$mh_active_color =  $r['mh_active_color'];
					} else {
						$mh_topbar_color = 'f0f0f0';
						$mh_nav_active_top_color = '72c02c';
						$mh_nav_active_color = '92d7f8';
						$mh_nav_back_color = '404295';
						$mh_id = '';
						$mh_font = 'Segoeui';
						$mh_color = 'FFFFFF';
						$mh_active_color = '000000';
					}
				 ?>
				<div class="col-md-4 col-sm-4 col-xs-4 ">
					 <label>Topbar Background Color</label>
					 <input type="hidden" value="<?php echo $mh_id?>" id="mh_id" />
					 <input type="text" value="<?php echo $mh_topbar_color?>" id="mh_topbar_color" class="form-control jscolor" style="margin-top:10px;margin-bottom: 10px;"/>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					 <label>Background Color</label>
					 <input type="text" value="<?php echo $mh_nav_back_color?>" id="mh_nav_back_color" class="form-control jscolor" style="margin-top:10px;margin-bottom: 10px;"/>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					 <label>Active Background Color</label>
					 <input type="text" value="<?php echo $mh_nav_active_color?>" id="mh_nav_active_color" class="form-control jscolor" style="margin-top:10px;margin-bottom: 10px;"/>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					 <label>Active Top Background Color</label>
					 <input type="text" value="<?php echo $mh_nav_active_top_color?>" id="mh_nav_active_top_color" class="form-control jscolor" style="margin-top:10px;margin-bottom: 10px;"/>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					 <label>Text Color</label>
					 <input type="text" value="<?php echo $mh_color?>" id="mh_color" class="form-control jscolor" style="margin-top:10px;margin-bottom: 10px;"/>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					 <label>Active Text Color</label>
					 <input type="text" value="<?php echo $mh_active_color?>" id="mh_active_color" class="form-control jscolor" style="margin-top:10px;margin-bottom: 10px;"/>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<label>Font Family</label></br>
					<?php 
						$re = $con->query("select ff_name, ff_file from font_family");
						if(mysqli_num_rows($re) > 0){
							while($r = mysqli_fetch_assoc($re)){
								if($r["ff_name"] == $mh_font){
									$select_class = 'active_name';
								} else {
									$select_class = '';
								}
								echo '<div class="col-md-3 boxs1"><div class="col-md-12 boxs '.$select_class.'" style="font-family:'.$r["ff_name"].'" id="'.$r["ff_name"].'">Touch A Life</div></div>';
							}
						} else {
						}
					 ?>	
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 15px;">
					<input type="submit" value="Submit" id="nav_color" class="btn btn-primary"/>
				</div> 
			</div>
		</div>
	</div> 
	</section>
	
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
	  		<div class="col-md-4 col-sm-4 col-xs-12 text-center">
				<div id="upload-demo" style="width:350px;margin:auto;"></div>
				<i class="fa fa-undo" aria-hidden="true" id="rotateLeft" data-rotate="-90" style="margin-right: 15px;"></i>
				<i class="fa fa-repeat" aria-hidden="true" id="rotateRight" data-rotate="90"></i>
	  		</div>
	  		<div class="col-md-4 col-sm-4 col-xs-12" style="padding-top:30px;">
				<strong>Select Logo:</strong>
				<br/>
				<input type="file" id="upload" style="display: block !important;">
				<br/>
				<button class="btn btn-success upload-result">Upload</button>
	  		</div>
	  		<div class="col-md-4 col-sm-4 col-xs-12" style="">
				<div id="upload-demo-i" style="background:#e1e1e1;width:350px;height:150px;margin-top: 30px;text-align: center;padding-top: 25px;margin:auto;"></div>
				<p class="text-center" style="text-align: center;">Preview Logo</p>
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

<script src="https://foliotek.github.io/Croppie/croppie.js"></script>
<script>
var requ;
$(document).ready(function() {
	$(".nav_micro_site").addClass('active_head');
	
	$uploadCrop = $('#upload-demo').croppie({
		enableExif: true,
		viewport: {
			width: 300,
			height: 100
		},
		boundary: {
			width: 350,
			height: 150
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


	$('.boxs').on('click', function () { 
		$('.boxs').removeClass('active_name');
		$(this).toggleClass('active_name');
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
				url: "ajaxpro_micro",
				type: "POST",
				data: {"image":resp, "parts":"logo" },
				success: function (data) {
					var split = data.split('part');
					if(split[0] == 1){
						var img = split[1];
						$("#logo_path").css({"display":"block"});
						document.getElementById("logo_path").src = "<?php echo $cdn_path?>"+img;
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
	
	$("#nav_color").click(function (){ 
 	 
		var mh_nav_back_color = document.getElementById('mh_nav_back_color').value;
		var mh_topbar_color = document.getElementById('mh_topbar_color').value;
		var mh_nav_active_color = document.getElementById('mh_nav_active_color').value;
		var mh_nav_active_top_color = document.getElementById('mh_nav_active_top_color').value;
		var mh_color = document.getElementById('mh_color').value;
		var mh_active_color = document.getElementById('mh_active_color').value;
		var mh_id = document.getElementById('mh_id').value;
		
		var shape = '';
		$(".active_name").each(function(){
			shape = this.id;
		});
		
		if(mh_nav_back_color == ''){
			alert('Select Color Code.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:{mh_nav_back_color:mh_nav_back_color, mh_topbar_color:mh_topbar_color, mh_nav_active_color:mh_nav_active_color, mh_nav_active_top_color:mh_nav_active_top_color, mh_id:mh_id, shape:shape, mh_active_color:mh_active_color, mh_color:mh_color},
				url:"<?php echo $admin_url?>ad_data.php?call=insert_navigation_color",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Submit successful");
					} else if(html == 2){
						alert("Update successful");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			}); 
		}
	});
 
	$("#upload_logo").on('click', function(){
		 $("#myModal").modal();
	});
});
  
</script>
</body>
</html>