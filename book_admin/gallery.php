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
			<a href="<?php echo $admin_url?>web_management">Web Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>micro_site">Micro Web Site</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>gallery_list">Gallery List</a>
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
		$mast = $con->query("select mg_id, mg_tal_id, mg_date, mg_title, mg_sub_title, mg_text, mg_all_img, mg_status from micro_gallery where mg_id = '$m_id' ");
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
						 
						<div class="col-xs-12">
							<p class="text_margin_0">Title*:</p>
							<input type="text" class="form-control" placeholder="Title" id="mg_title" name="mg_title" value="<?php echo $r['mg_title']?>" />
							<input type="hidden" class="" id="mg_id" name="mg_id" value="<?php echo $r['mg_id']?>"  /> 
							<input type="hidden" class="" id="mg_tal_id" name="mg_tal_id" value="<?php echo $r['mg_tal_id']?>"  /> 
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
							<p class="text_margin_0">Status</p>
							<select class="form-control" id="mg_status" name="mg_status" >
								<option value="0" <?php if($r['mg_status'] == 0){ echo 'selected'; } ?> >Pending</option>
								<option value="1" <?php if($r['mg_status'] == 1){ echo 'selected'; } ?> >Activated</option>
							</select>
						</div>
						<div class="col-xs-12">
							 
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
							<a href="<?php echo $admin_url?>gallery_list" class="btn btn-primary">Gallery List</a>
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
	$(".nav_web_management").addClass('active_head');
	
	$("#submitImage").on('click', function(){
		var mg_title = document.getElementById('mg_title').value;
		var mg_id = document.getElementById('mg_id').value;
		var mg_sub_title = document.getElementById('mg_sub_title').value; 
		var mg_text = document.getElementById('mg_text').value; 
		var mg_status = document.getElementById('mg_status').value;  
		var mg_tal_id = document.getElementById('mg_tal_id').value;  

		if(mg_title == ''){
			alert('Enter Title.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:{mg_title:mg_title, mg_id: mg_id, mg_sub_title: mg_sub_title, mg_text:mg_text, mg_status:mg_status, mg_tal_id:mg_tal_id},
				url:"<?php echo $admin_url?>ad_data.php?call=live_gallery",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 2){
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