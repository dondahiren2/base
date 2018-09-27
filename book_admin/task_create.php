<?php 
	include("header.php");
?>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="task_management">Task Management</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Task Create</a>
					</li>
				</ul>
			</div>
			<div class="row">
<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$mast = $con->query("select * from task where t_id = '$id'");
		if(mysqli_num_rows($mast) > 0){
			$rw = mysqli_fetch_array($mast);
			
			$t_assign_to = explode(',',$rw['t_assign_to']);
			
?>
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-body form">
							
								<div class="row form-body has-info">
									<div class="col-md-6">
										<label>Category</label>
									 	<select class="form-control" placeholder="Category" id="t_category" name="t_category" >
									 	    <option value="">Select Category</option>
									 	    <?php 
									 	        mysqli_set_charset($con, 'utf8');
                                                $spre = $con->query("select tc_cat_name from task_category where tc_action = 1 ");
                                                if(mysqli_num_rows($spre) > 0){
                                                   while($r = mysqli_fetch_array($spre)){
                                                    ?>
                                                        <option <?php if($rw['t_category'] == $r['tc_cat_name']){ echo 'selected'; } ?>  value="<?php echo $r['tc_cat_name']?>"><?php echo $r['tc_cat_name']?></option>
                                                    <?php
                                                   }
                                                }
									 	    ?>
									 	    <option  <?php if($rw['t_category'] == 'Other'){ echo 'selected'; } ?>  value="Other"></option>
									 	</select>
									 	<?php 
											if($rw['t_other_cat']){
										?>
												<input type="text" value="<?php echo $rw['t_other_cat']?>" class="form-control" placeholder="Category" id="t_other_cat" name="t_other_cat" />
										<?php 
											} else {
										?>
												<input type="text" value="<?php echo $rw['t_other_cat']?>" class="form-control" placeholder="Category" id="t_other_cat" name="t_other_cat" style="display:none;" />
										<?php 
											}
										?>
									 	<input type="hidden" id="t_id" name="t_id" value="<?php echo $rw['t_id']?>"  />
									</div>
									<div class="col-md-6">
									    <label>Subject</label>
									 	<input type="text" class="form-control" placeholder="Subject" id="t_sub" name="t_sub" value="<?php echo $rw['t_sub']?>" />
									</div>
								</div>
								<div class="row  form-body has-info">
									<div class="col-md-6">
									    <label>Assign To</label>
										<select class="form-control select2 select-assign " placeholder="Assign To" id="t_assign_to" name="t_assign_to[]" multiple="multiple" >
											<?php 
									 	        mysqli_set_charset($con, 'utf8');
                                                $spre = $con->query("select ad_id, ad_fname, ad_lname from admin_user where ad_active = 0 ");
                                                if(mysqli_num_rows($spre) > 0){
                                                   while($r = mysqli_fetch_array($spre)){
                                                    ?>
                                                        <option <?php if(in_array($r['ad_id'], $t_assign_to)){ echo 'selected'; } ?> value="<?php echo $r['ad_id']?>"><?php echo ucfirst($r['ad_fname']).' '.ucfirst($r['ad_lname'])?></option>
                                                    <?php
                                                   }
                                                }
									 	    ?>
									 	</select>
									</div>
									<div class="col-md-3">
										<label>Task Date</label>
										<input type="text" class="form-control datepicker" placeholder="Task Date" id="t_task_date" name="t_task_date" value="<?php echo date('d-m-Y', strtotime($rw['t_task_date']));?>" />
									</div>
									<div class="col-md-3">
										<label>Complete Date</label>
										<input type="text" class="form-control datepicker" placeholder="Complete Date" id="t_complate_date" name="t_complate_date" value="<?php echo date('d-m-Y', strtotime($rw['t_complate_date']));?>"  />
									</div>
									
								</div>
								<div class="row form-body has-info">
									<div class="col-md-12">
										<label>Description</label>
									    <textarea name="content" id="t_description" name="t_description" ><?php echo $rw['t_description']; ?></textarea>
									</div>
								</div>
								<div class="row form-body has-info">
									<div class="col-md-6">
										<label>Status</label>
									 	<select class="form-control" placeholder="Category" id="t_status" name="t_status" >
									 	    <option <?php if($rw['t_status'] == 'Created'){ echo 'selected'; } ?> value="Created">Created</option>
											<option <?php if($rw['t_status'] == 'Accepted'){ echo 'selected'; } ?> value="Accepted">Accepted</option>
											<option <?php if($rw['t_status'] == 'Review'){ echo 'selected'; } ?> value="Review">Review</option>
											<option <?php if($rw['t_status'] == 'Review Again'){ echo 'selected'; } ?> value="Review Again">Review Again</option>
											<option <?php if($rw['t_status'] == 'Rejected'){ echo 'selected'; } ?> value="Rejected">Rejected</option>
											<option <?php if($rw['t_status'] == 'Completed'){ echo 'selected'; } ?> value="Completed">Completed</option>
											<option <?php if($rw['t_status'] == 'Closed'){ echo 'selected'; } ?> value="Closed">Closed</option>
									 	</select>
									</div>
									<div class="col-md-6">
										<label>Attachment File</label>
										<form method="post" name="upload_photo" id="s3_upload_photo" enctype="multipart/form-data" action="<?php echo $site_url?>upload_s3.php" style="padding: 0px; margin: 0px;">
        									<input type="hidden" id="times" name="times" value="<?php echo date('dmYHis')?>" />
        									<input type="file" onchange="readURLs3(this);" name="images[]"  multiple />
        								</form>
        								<div id="s3_msg" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
        								<input type="hidden" class="form-control" placeholder="Attachment File" id="t_attechment" name="t_attechment" value="<?php echo $rw['t_attechment'];?>"  />
										<?php 
											if($rw['t_attechment']){
												
												$t_attechment = explode('partition', $rw['t_attechment']);
												$c = count($t_attechment);
												$k = 1;
												for($i=0;$i<$c;$i++){
													if($t_attechment[$i]){
													?>
														<div style="margin-top: 5px;margin-bottom: 5px;"><a href="<?php echo $site_url.$t_attechment[$i]; ?>" target="_blank" ><i class="fa fa-paperclip" aria-hidden="true"></i> Attachment <?php echo $k ?></a>  <i title="Remove File" class="fa fa-times" aria-hidden="true" style="cursor:pointer;margin-left: 15px;font-size: 15px;" onclick="remove_file('<?php echo $rw['t_id']; ?>','<?php echo $t_attechment[$i]; ?>')" ></i> </div>
													<?php
														$k++;	
													}
												}
											}
										?>
									</div>
								</div>
								
								<div class="row form-body form-md-line-input has-info">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-actions noborder" style="margin-top:10px;">
										<input type="submit" class="btn blue" id="add_cate" name="add_cate" value="Update Task" />
										<a href="<?php echo $admin_url?>ad_hoc_task_list" class="btn default">Ad Hoc Task List</a>
									</div>
								</div>
								</div>
							
						</div>
					</div>
				</div>
	
	<?php 
		
		}
	
	}else{ ?>		
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-body form">
							
								<div class="row form-body has-info">
									<div class="col-md-6">
										<label>Category</label>
									 	<select class="form-control" placeholder="Category" id="t_category" name="t_category" >
									 	    <option value="">Select Category</option>
									 	    <?php 
									 	        mysqli_set_charset($con, 'utf8');
                                                $spre = $con->query("select tc_cat_name from task_category where tc_action = 1 ");
                                                if(mysqli_num_rows($spre) > 0){
                                                   while($r = mysqli_fetch_array($spre)){
                                                    ?>
                                                        <option value="<?php echo $r['tc_cat_name']?>"><?php echo $r['tc_cat_name']?></option>
                                                    <?php
                                                   }
                                                }
									 	    ?>
									 	    <option value="Other">Other</option>
									 	</select>
									 	<input type="text" class="form-control" placeholder="Category" id="t_other_cat" name="t_other_cat" style="display:none;" />
									 	<input type="hidden" id="t_id" name="t_id" />
									</div>
									<div class="col-md-6">
									    <label>Subject</label>
									 	<input type="text" class="form-control" placeholder="Subject" id="t_sub" name="t_sub" />
									</div>
								</div>
								<div class="row  form-body has-info">
									<div class="col-md-6">
									    <label>Assign To</label>
										<select class="form-control select2 select-assign " placeholder="Assign To" id="t_assign_to" name="t_assign_to[]" multiple="multiple" >
											<?php 
									 	        mysqli_set_charset($con, 'utf8');
                                                $spre = $con->query("select ad_id, ad_fname, ad_lname from admin_user where ad_active = 0 ");
                                                if(mysqli_num_rows($spre) > 0){
                                                   while($r = mysqli_fetch_array($spre)){
                                                    ?>
                                                        <option value="<?php echo $r['ad_id']?>"><?php echo ucfirst($r['ad_fname']).' '.ucfirst($r['ad_lname'])?></option>
                                                    <?php
                                                   }
                                                }
									 	    ?>
									 	</select>
									</div>
									<div class="col-md-3">
										<label>Task Date</label>
										<input type="text" class="form-control datepicker" placeholder="Task Date" id="t_task_date" name="t_task_date" value="<?php echo date('d-m-Y');?>" />
									</div>
									<div class="col-md-3">
										<label>Complete Date</label>
										<input type="text" class="form-control datepicker" placeholder="Complete Date" id="t_complate_date" name="t_complate_date" value="<?php echo date('d-m-Y');?>"  />
									</div>
									
								</div>
								<div class="row form-body has-info">
									<div class="col-md-12">
										<label>Description</label>
									    <textarea name="content" id="t_description" name="t_description" ></textarea>
									</div>
								</div>
								<div class="row form-body has-info">
									<div class="col-md-6">
										<label>Status</label>
									 	<select class="form-control" placeholder="Category" id="t_status" name="t_status" >
									 	    <option value="Created">Created</option>
											<option value="Accepted">Accepted</option>
											<option value="Review">Review</option>
											<option value="Review Again">Review Again</option>
											<option value="Rejected">Rejected</option>
											<option value="Completed">Completed</option>
											<option value="Closed">Closed</option>
									 	</select>
									</div>
									<div class="col-md-6">
										<label>Attachment File</label>
										<form method="post" name="upload_photo" id="s3_upload_photo" enctype="multipart/form-data" action="<?php echo $site_url?>upload_s3.php" style="padding: 0px; margin: 0px;">
        									<input type="hidden" id="times" name="times" value="<?php echo date('dmYHis')?>" />
        									<input type="file" onchange="readURLs3(this);" name="images[]"  multiple />
        								</form>
        								<div id="s3_msg" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;" ></div>
        								<input type="hidden" class="form-control" placeholder="Attachment File" id="t_attechment" name="t_attechment" />
									</div>
								</div>
								
								<div class="row form-body form-md-line-input has-info">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-actions noborder" style="margin-top:10px;">
										<input type="submit" class="btn blue" id="add_cate" name="add_cate" value="Create Task" />
										<a href="<?php echo $admin_url?>ad_hoc_task_list" class="btn default">Ad Hoc Task List</a>
									</div>
								</div>
								</div>
							
						</div>
					</div>
				</div>
	<?php } ?>	
 
			</div>
 
<?php include('footer.php'); ?>
 		<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>


<link href="<?php echo $admin_url?>select2/select2.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $admin_url?>select2/select2.full.min.js" type="text/javascript"></script>

<script type="application/javascript" >
var requ;
 $(document).ready(function() {
	$('.select-assign').select2();
		
	$("#add_cate").on('click', function(){
		var t_id = document.getElementById('t_id').value;
		var t_category = document.getElementById('t_category').value;
		var t_sub = document.getElementById('t_sub').value;
		var t_assign_to = $('#t_assign_to').val();
		var t_task_date = document.getElementById('t_task_date').value;
		var t_description = CKEDITOR.instances['t_description'].getData();
		var t_status = document.getElementById('t_status').value;
		var t_attechment = document.getElementById('t_attechment').value;
		var t_complate_date = document.getElementById('t_complate_date').value;
		var t_other_cat = document.getElementById('t_other_cat').value;
		 
		if(t_category == ""){
			alert("Select Category");
		} else if(t_sub == "") {
			alert("Enter Subject Name");
		} else if(t_assign_to == "") {
			alert("Select Assign Members");
		} else if(t_task_date == "") {
			alert("Enter Task Date");
		} else if(t_complate_date == "") {
			alert("Enter Complete Date");
		} else if(t_description == "") {
			alert("Enter Description");
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"t_id="+t_id+"&t_category="+t_category+"&t_sub="+escape(t_sub)+"&t_assign_to="+t_assign_to+"&t_task_date="+t_task_date+"&t_complate_date="+t_complate_date+"&t_description="+escape(t_description)+"&t_status="+t_status+"&t_attechment="+t_attechment+"&t_other_cat="+t_other_cat,
				url:"ad_data.php?call=save_task",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Submit Successfully.");
						location.reload();
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
		 
	});

	
	$(".nav_task_management").addClass('active_head');
    CKEDITOR.replace( 't_description' );
 
    $(document).on('click','#t_category', function () { 
		var cat = this.value;
		if(cat == 'Other'){
    		$("#t_other_cat").css({'display':'block'});
		} else {
		    $("#t_other_cat").css({'display':'none'});
		}
	});

 });


	function readURLs3(input) {
		var times = document.getElementById("times").value;
 		if(times == ""){
		} else {
			$('#s3_upload_photo').ajaxForm({
				target:'',
				beforeSubmit:function(e){
					$('#s3_msg').html("File Uploading...");
				}, 
				cache: false,
				success:function(response){
					if(response == 1) {
						$('#s3_msg').html("File Uploaded");
					} else if(response == 2){
						$('#s3_msg').html("File Not Upload.");
					} else if(response == 3){
						$('#s3_msg').html("File Format Invalid.");
					} else {
						$('#s3_msg').html("File Upload");
						console.log("response "+response);
						document.getElementById('t_attechment').value = response;
					}
				},complete: function(response) {
				},
				error:function(e){
				}
			}).submit();
		}
	}
 
	function remove_file(id, files) {
		if(files == "") {
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"t_id="+id+"&files="+files,
				url:"ad_data.php?call=remove_attach_file_task",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Successfully.");
						location.reload();
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}	
	}

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>