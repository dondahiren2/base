<?php 
	include("header.php");
?>

 <style type="text/css">
    input[type=file]{
      display: inline;
    }
    #image_preview{
      border: 1px solid black;
      padding: 10px;
	  display:none;
	  margin-top: 10px;
    }
	
	#img_uploads{
      border: 1px solid black;
      padding: 10px;
	  display:none;
	  margin-top: 10px;
    }
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
	
    #uploadimg{
		width: 231px;
		float: left;
		border: 1px solid;
		padding: 15px;
		margin-right: 10px;
		position: relative;
		margin-top: 10px;
    }
    .uploadremove{
		position: absolute;
		right: 1px;
		top: 0px;
		cursor:pointer;
    }
	
	#progress-bar {background-color: #12CC1A;height:20px;color: #FFFFFF;width:0%;-webkit-transition: width .3s;-moz-transition: width .3s;transition: width .3s;}
	.btnSubmit{background-color:#09f;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
	#progress-div {border:#0FA015 1px solid;padding:0px;margin:30px 0px;border-radius:4px;text-align:center;display:none;}
	#targetLayer{width:100%;text-align:center;display:none;}
  </style>
  
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
			<a href="<?php echo $user_url?>gallery_list">Gallery List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Gallery</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['id'])){
		$m_id = base64_decode($_GET['id']);
		mysqli_set_charset($con, 'utf8');
		$mast = $con->query("select mg_id, mg_date, mg_title, mg_sub_title, mg_text, mg_all_img from micro_gallery where mg_id = '$m_id' and mg_tal_id = '$bp_tal_id'");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?> 
		<div class="col-md-6 col-md-offset-3">
			<div class="portlet light bordered">
				<div class="row">
					<h3 class="col-xs-12 form-title">Edit Gallery</h3>
				</div>
				<div class="portlet-body ">
					<div class="row">
						<form id="uploadForm" action="<?php echo $user_url?>uploadFile.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12">
							<p class="text_margin_0">Title*:</p>
							<input type="text" class="form-control" placeholder="Title" id="mg_title" name="mg_title" value="<?php echo $r['mg_title']?>" />
							<input type="hidden" class="" id="mg_id" name="mg_id" value="<?php echo $r['mg_id']?>"  /> 
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Sub Title</p>
							<input type="text" class="form-control" placeholder="Sub Title" id="mg_sub_title" name="mg_sub_title" value="<?php echo $r['mg_sub_title']?>" />
						</div> 
						<div class="col-xs-12">
							<p class="text_margin_0">Description</p>
							<textarea type="text" class="form-control" rows="10" id="mg_text" name="mg_text" ><?php echo $r['mg_text']?></textarea>
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Date</p>
							<input type="text" class="form-control datepickerdob" placeholder="Date" id="mg_date" name="mg_date" value="<?php echo date('d-m-Y', strtotime($r['mg_date']))?>"/>
						</div> 
						<div class="col-xs-12">
							<p class="text_margin_0">Photo Upload Multiple (Size: 1MB Maximum)</p>
							<input type="file" id="uploadFile" name="uploadFile[]" multiple/> 
							
							<div id="image_preview"></div>
							<div id="progress-div"><div id="progress-bar"></div></div>
							<div id="targetLayer"></div>
							<div id="img_uploads" style="display:block;float:left;width: 100%;">
								Upload File List
								<div id="img_upload">
									<?php 
										$mg_all_img = $r['mg_all_img'];
										if($mg_all_img){
											$imgs = explode('parts', $mg_all_img);
											$c = count($imgs);
											for($i=0;$i<$c;$i++){
												if($imgs[$i]){
									?>
													<div id="uploadimg">
														<i class="fa fa-times uploadremove" onclick="file_remove(<?php echo $r['mg_id']?>, '<?php echo $imgs[$i]?>')" aria-hidden="true"></i>
														<img src="<?php echo $cdn_path.$imgs[$i]?>" style="width:200px;margin-right: 5px;" />
													</div>
									<?php			
												}
											}
										}
									?>
								</div>
							</div>
							<div id="img_unupload"></div>
						</div>
						<div class="col-xs-12 footer_border">
							<input type="submit" class="btn btn-primary" id="submitImage" name="submitImage" value="Submit" />
							<a href="<?php echo $user_url?>gallery" class="btn btn-primary">Create New Gallery</a>
							<a href="<?php echo $user_url?>gallery_list" class="btn btn-primary">Gallery List</a>
						</div>
						</form>
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
					<h3 class="col-xs-12 form-title">Create Gallery</h3>
				</div>
				<div class="portlet-body ">
					<div class="row">
						<form id="uploadForm" action="<?php echo $user_url?>uploadFile.php" method="post" enctype="multipart/form-data">
						<div class="col-xs-12">
							<p class="text_margin_0">Title*:</p>
							<input type="text" class="form-control" placeholder="Title" id="mg_title" name="mg_title" />
							<input type="hidden" class="" id="mg_id" name="mg_id" /> 
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Sub Title</p>
							<input type="text" class="form-control" placeholder="Sub Title" id="mg_sub_title" name="mg_sub_title"/>
						</div> 
						<div class="col-xs-12">
							<p class="text_margin_0">Description</p>
							<textarea type="text" class="form-control" rows="10" id="mg_text" name="mg_text" ></textarea>
						</div>
						<div class="col-xs-12">
							<p class="text_margin_0">Date</p>
							<input type="text" class="form-control datepickerdob" placeholder="Date" id="mg_date" name="mg_date"/>
						</div> 
						<div class="col-xs-12">
							<p class="text_margin_0">Photo Upload Multiple (Size: 1MB Maximum)</p>
							<input type="file" id="uploadFile" name="uploadFile[]" multiple/> 
							
							<div id="image_preview"></div>
							<div id="progress-div"><div id="progress-bar"></div></div>
							<div id="targetLayer"></div>
							<div id="img_uploads">
								Upload File List
								<div id="img_upload"></div>
							</div>
							<div id="img_unupload"></div>
						</div>
						<div class="col-xs-12 footer_border">
							<input type="submit" class="btn btn-primary" id="submitImage" name="submitImage" value="Submit" />
							<a href="<?php echo $user_url?>gallery" class="btn btn-primary">Create New Gallery</a>
							<a href="<?php echo $user_url?>gallery_list" class="btn btn-primary">Gallery List</a>
						</div>
						</form>
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
	$(".nav_micro_site").addClass('active_head');
	$("#uploadFile").change(function(){
		$("#image_preview").css({'display':'block'});
		$('#image_preview').html("");
		var total_file=document.getElementById("uploadFile").files.length;
		for(var i=0;i<total_file;i++){
			$('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
		}
	});
	
	$('#uploadForm').submit(function(e) {	
		/*if($('#uploadFile').val()) {*/
			e.preventDefault();
			$(this).ajaxSubmit({ 
				target: '#targetLayer', 
				beforeSubmit: function() {
					$(".response_gif").show();
					$('#submitImage').attr('disabled',true);
					$("#progress-div").css({'display':'block'});
					$("#progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){	
					$("#progress-bar").width(percentComplete + '%');
					$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>');
				},
				success:function (data){
					var msg = data.split('par123');
					if(msg[0] == 1){
						alert('Gallery Created Successfully.');
						$("#img_uploads").css({'display':'block'});
						var uploadimg = msg[1].split('parts');
						for(var i=0;i<uploadimg.length;i++){
							if(uploadimg[i]){
								$('#img_upload').append('<img src="<?php echo $cdn_path?>'+uploadimg[i]+'" style="width:200px;margin-right: 5px;" />');
							}
						}
					} else if(msg[0] == 2){
						alert('Gallery Updated Successfully.');
						$("#img_uploads").css({'display':'block'});
						location.reload();
					} else if(msg[0] == 0){
						alert('Try Again');
					} 
					$(".response_gif").hide();
				},
				resetForm: true 
			}); 
			return false; 
		/*}*/
	});
	
	 
});

	function file_remove(id, path){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id+"&path="+path,
			url:"<?php echo $admin_url?>ad_data.php?call=file_remove_gallery",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(html){
				if(html == 1){
					alert("deleted successfully.");
					location.reload();
				} else {
					alert("Try Again.");
				}	
			}
		});
	} 
</script>
</body>
</html>