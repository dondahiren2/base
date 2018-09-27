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
			<a href="<?php echo $user_url?>whats_news_list">Whats News List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Whats News</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['id'])){
		$m_id = base64_decode($_GET['id']);
		mysqli_set_charset($con, 'utf8');
		$mast = $con->query("select mn_id, mn_title, mn_link, mn_file from micro_news where mn_id = '$m_id' and mn_tal_id = '$bp_tal_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Whats News</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p class="text_margin_0">News Title :</p>
									<input type="text" class="form-control getData" placeholder="News Title" id="mn_title" name="mn_title" value="<?php echo $r['mn_title'];?>" />
									<input type="hidden" class="" id="mn_id" name="mn_id" value="<?php echo $r['mn_id'];?>" />
									<input type="hidden" class="" id="mn_process" name="mn_process" value="0" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">URL Link</p>
									<input type="text" class="form-control getData" placeholder="URL Link" id="mn_link" name="mn_link" value="<?php echo $r['mn_link'];?>" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Upload File</p> 
									<form method="post" name="banner" id="banner" enctype="multipart/form-data" action="<?php echo $site_url?>upload_micro_img.php" style="padding: 0px; margin: 0px;">
										<div class="box">
											<input type="file" name="images_banner" id="images_banner" class="inputfile inputfile-6" onchange="readURLs3('banner','mn_file');" />
											<label for="images_banner" class=""><span></span> 
												<strong>Upload File (PDF / JPG)</strong>
											</label>
										</div>
										<input type="hidden" id="parts" name="parts" value="whats_news" /> 
									</form>
									<div id="msg_banner" style="display:block">Your upload status here...</div>
									<input type="hidden" class="form-control" id="mn_file" name="mn_file" value="<?php echo $r['mn_file'];?>" />
									
										<?php
											if($r['mn_file']){
										?>
											<div id="file_remove" style="float: left;border: 1px solid #ccc;padding: 10px 10px 6px;margin-top: 10px;width: 60px;text-align: center;height: 60px;line-height: 43px;">	
												<i class="fa fa-times" aria-hidden="true" style="position: absolute;float: left;margin-left: 25px;margin-top: -10px;cursor: pointer;" onclick="file_remove(<?php echo $r['mn_id']; ?>);" ></i>
												
												<a href="<?php echo $cdn_path.$r['mn_file'] ?>"><i style="font-size: 18px;color: black;" class="fa fa-link" aria-hidden="true"></i></a>
											</div>	
										<?php
											}
										?>
									
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $user_url?>whats_news_list" class="btn btn-primary">List</a>	
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
							<h3 class="col-xs-12 form-title">Create Whats News</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p class="text_margin_0">News Title :</p>
									<input type="text" class="form-control getData" placeholder="News Title" id="mn_title" name="mn_title" />
									<input type="hidden" class="" id="mn_id" name="mn_id" />
									<input type="hidden" class="" id="mn_process" name="mn_process" value="0" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">URL Link</p>
									<input type="text" class="form-control getData" placeholder="URL Link" id="mn_link" name="mn_link"/>
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Upload File</p>
									<form method="post" name="banner" id="banner" enctype="multipart/form-data" action="<?php echo $site_url?>upload_micro_img.php" style="padding: 0px; margin: 0px;">
										<div class="box">
											<input type="file" name="images_banner" id="images_banner" class="inputfile inputfile-6" onchange="readURLs3('banner','mn_file');" />
											<label for="images_banner" class=""><span></span> 
												<strong>Upload File (PDF / JPG)</strong>
											</label>
										</div>
										<input type="hidden" id="parts" name="parts" value="whats_news" /> 
									</form>
									<div id="msg_banner" style="display:block">Your upload status here...</div>
									<input type="hidden" class="form-control" id="mn_file" name="mn_file" />
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $user_url?>whats_news_list" class="btn btn-primary">List</a>	
								</div>
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
	$("#add_mast").on('click', function(){
		var mn_title = document.getElementById('mn_title').value;
		var mn_link = document.getElementById('mn_link').value;
		var mn_file = document.getElementById('mn_file').value; 
		var mn_id = document.getElementById('mn_id').value; 
		var parts = document.getElementById('parts').value;
		var mn_process = document.getElementById('mn_process').value;
		
		if(mn_title == ''){
			alert('Enter News Title.');
		} else if(mn_process == 1){
			alert('Please wait file uploading.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"mn_title="+mn_title+"&mn_link="+mn_link+"&mn_file="+mn_file+"&mn_id="+mn_id+"&parts="+parts,
				url:"<?php echo $admin_url?>ad_data.php?call=add_news_topic",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('mn_title').value = '';
						document.getElementById('mn_link').value = '';
						document.getElementById('mn_file').value = '';
						document.getElementById('mn_id').value = ''; 
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
			url:"<?php echo $admin_url?>ad_data.php?call=file_remove",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(html){
				if(html == 1){
					$("#file_remove").css({"display":"none"});
					alert("deleted successfully.");
				} else {
					alert("Try Again.");
				}	
			}
		});
	}
	 
	function readURLs3(work_path, ids) {
		var mn_title = document.getElementById("mn_title").value;
		console.log(work_path+" "+ids+" mn_title = "+mn_title);
		if(mn_title){
			$('#'+work_path).ajaxForm({
				target:'',
				beforeSubmit:function(e){
					document.getElementById("mn_process").value = 1;
					$('#msg_'+work_path).html("File Uploading...");
				}, 
				cache: false,
				success:function(response){
					if(response == 2){
						$('#msg_'+work_path).html("File Not Upload.");
					} else if(response == 3){
						$('#msg_'+work_path).html("File Format Invalid.");
					} else {
						document.getElementById("mn_process").value = 0;
						$('#msg_'+work_path).html("File Upload"); 
						document.getElementById(ids).value = response;
					}
				},complete: function(response) {
				},
				error:function(e){
				}
			}).submit();
		} else {
		} 
	}
	
</script>
</body>
</html>