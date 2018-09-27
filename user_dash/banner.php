<?php 
	include("header.php");
?>
<link rel="stylesheet" href="https://foliotek.github.io/Croppie/croppie.css">
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="<?php echo $user_url?>micro_site">Micro Web Management</a>
				<i class="fa fa-angle-right"></i>
			</li> 
			<li>
				<a href="#">Banner</a>
			</li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				
				<div class="col-md-12 col-sm-12 col-xs-12 "> 
					<form method="post" name="banner" id="banner" enctype="multipart/form-data" action="<?php echo $site_url?>upload_banner.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="images_banner" id="images_banner" class="inputfile inputfile-6" onchange="readURLs3('banner','mlb_path');" />
							<label for="images_banner" class=""><span></span> 
								<strong>Upload Web Banner( Size : 1920px X 500px JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="parts" name="parts" value="banner" /> 
					</form>
					<div id="msg_banner" style="display:block"></div>
				</div> 
				<div class="col-md-12" style="padding: 0px;margin-top: 30px;overflow-x:auto">
					<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
						<thead>
							<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
								<th style="width:50px;text-align:left">Sr.No.</th>
								<th style="width:125px;text-align:left">Banner Image</th>
								<th style="width:70px">Action</th>
							</tr>
						</thead> 
						<tbody>
							<?php
								$re = $con->query("select mlb_id, mlb_path, mlb_active from micro_logo_banner where mlb_unique_id = '$bp_unique_id' and mlb_type = 'banner'");
								if(mysqli_num_rows($re) > 0){
									$i=1;
									while($r = mysqli_fetch_assoc($re)){
										if($r['mlb_path']){
											$mlb_path = $cdn_path.$r['mlb_path'];
										} else {
											$mlb_path = 'https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/mirco_logo.png';
										}
										$action = '<i onclick="deletebtn('.$r["mlb_id"].')" class="fa fa-times" aria-hidden="true" title="Delete" style="font-size: 20px;float: left;cursor: pointer;margin-left: 10px;margin-top: -2px;"></i>';
							?>
										<tr>
											<td><?php echo $i++; ?></td>
											<td><img src="<?php echo $mlb_path; ?>" target="_blank" style="width:200px;" /></td> 
											<td style="width:70px"><?php echo $action; ?></td>
										</tr>
							<?php
									}
								} else {
							?>
										<tr>
											<td style="width:50px;text-align:left" colspan="4">Not found any record</td>
										</tr>
							<?php
								}
							 ?>
						</tbody> 
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>

<script src="https://foliotek.github.io/Croppie/croppie.js"></script>
<script>
	var requ;
	function readURLs3(work_path, ids) {
		console.log(work_path+" "+ids);
		$('#'+work_path).ajaxForm({
			target:'',
			beforeSubmit:function(e){
				$('#msg_'+work_path).html("File Uploading...");
			}, 
			cache: false,
			success:function(response){
				if(response == 2){
					$('#msg_'+work_path).html("File Not Upload.");
				} else if(response == 3){
					$('#msg_'+work_path).html("File Format Invalid.");
				} else {
					$('#msg_'+work_path).html("File Upload"); 
					location.reload();
				}
			},complete: function(response) {
			},
			error:function(e){
			}
		}).submit();
	}
	
	
	function deletebtn(bt_id){
		$.ajax({
			type:"POST",
			data:"id="+bt_id,
			url:"<?php echo $admin_url?>ad_data.php?call=delete_banner",
			beforeSend: function(){
			
			},
			success: function(html){
				if(html == 1){
					alert('Delete Successfully.');
					location.reload();
				} else {
					alert('Try Again.');
				}
			}
		});
	}
	
</script>
</body>
</html>