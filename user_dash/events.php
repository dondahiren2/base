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
			<a href="<?php echo $user_url?>events_list">Events List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Event</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		mysqli_set_charset($con, 'utf8');
		$mast = $con->query("select te_id, te_start_date, te_end_date, te_title, te_stime, te_etime, te_Topics_id, te_details, te_Venue, te_img, te_Organised, te_email, te_mno, te_Note from micro_events where te_id = '$m_id' and te_tal_id = '$bp_tal_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Event</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
							<div class="form-group col-md-12">
								<label>Event Title</label>
								<input type="text" class="form-control" name="te_title" id="te_title" value="<?php echo $r['te_title']?>" placeholder="Event Title"/>
								<input type="hidden" name="te_id" id="te_id" value="<?php echo $r['te_id']?>"  />
								<input type="hidden" name="te_Topics_id" id="te_Topics_id" value="<?php echo $r['te_Topics_id']?>"  />
							</div>
							<div class="form-group col-md-2">
								<label>Start Date</label>
								<input type="text" name="te_start_date" id="te_start_date" class="form-control datepicker2" placeholder="Date" value="<?php echo $r['te_start_date']?>"/>
							</div>
							 <div class="form-group col-md-2">
								<label>End Date</label>
								<input type="text" name="te_end_date" id="te_end_date" class="form-control datepicker2" placeholder="Date" value="<?php echo $r['te_end_date']?>"/>
							</div>
							<div class="form-group col-md-2">
								<label>Start Time</label>
								<input type="text" name="te_stime" id="te_stime" class="timepicker form-control" placeholder="Time" value="<?php echo $r['te_stime']?>"/>
							</div>
							<div class="form-group col-md-2">
								<label>End Time</label>
								<input type="text" name="te_etime" id="te_etime" class="timepicker form-control" placeholder="Time" value="<?php echo $r['te_etime']?>"/>
							</div>
							<div class="form-group col-md-12">
								<label style="">Topics & Speakers</label>
								<label style="padding-left: 15px; letter-spacing: 2px; font-size: 13px; height: 20px; font-weight:normal;float:right;">
								<input type='button' value='Add' id='addButtons' class="form-control1">
								<input type='button' value='Remove' id='removeButtons' class="form-control1"></label>
							</div>
							<?php
								$te_Topics_id = $r['te_Topics_id'];
								$spr = $con->query("select * from micro_topics_speakers where tts_teid='$te_Topics_id'");
									if(mysqli_num_rows($spr) > 0){
										while($ra = mysqli_fetch_array($spr)){
										?>
										<div class="form-group col-md-8">
											<input type="text" name="te_Topics_0" id="te_Topics_0"  value="<?php echo $ra['tts_topics']?>"  class="form-control" placeholder="Topics"/>
											<input type="hidden" name="tts_id_0" id="tts_id_0"  value="<?php echo $ra['tts_id']?>" />
										</div>
										<div class="form-group col-md-3">
											<input type="text" name="te_Speakers_0" id="te_Speakers_0"  value="<?php echo $ra['tts_speakers']?>"  class="form-control" placeholder="Speakers"/>
										</div>
										<div class="form-group col-md-1" style="text-align: center;">
											<label style=""><i class="fa fa-trash-o" onclick="remove_event_topic(<?php echo $ra['tts_id']?>)" aria-hidden="true" style="font-size:18px;cursor:pointer;line-height: 35px;"></i></label>
										</div>
										<?php
										}
									}
                    ?>
					
							 
							<div id='TextBoxesGroup'></div>
							<div class="form-group col-md-6">
								<label style="">Details</label>
								<textarea type="text" style="height:94px !important;" name="te_details" id="te_details" class="form-control" ><?php echo $r['te_details']?></textarea>
							</div>
							<div class="form-group col-md-6">
								<label style="">Venue</label>
								<textarea type="text" style="height:94px !important;" name="te_Venue" id="te_Venue" class="form-control" ><?php echo $r['te_Venue']?></textarea>
							</div>
							<div class="form-group col-md-2">
								<label style="">Organised by</label>
								<input type="text" name="te_Organised" id="te_Organised" class="form-control" placeholder="Organised by" value="<?php echo $r['te_Organised']?>"/>
							</div>
							<div class="form-group col-md-4">
								<div class="col-md-12"  style="padding-left:0px;">
								<label style="">Contact</label>
								</div>
								<div class="col-md-6" style="padding-left:0px;">
								<input type="text" name="te_email" id="te_email" class="form-control" placeholder="E-Mail" value="<?php echo $r['te_email']?>"/>
								</div>
								<div class="col-md-6" style="padding-left:0px;padding-right:0px;">
								<div class="col-sm-2" style="padding: 0px 5px;line-height: 35px;text-align: right;">
										+91
									</div> 
									<div class="col-sm-10" style="padding:0px">
										<input type="text" name="te_mno" id="te_mno" maxlength="10" class="form-control margin-bottom-20" value="<?php echo $r['te_mno']?>">
									</div>
									<span id="errorMsg" style="float: right;font-size: 10px;"></span>
								</div>
							</div>
							 
							<div class="form-group col-md-6">
								<label style="">Note</label>
								<input type="text" name="te_Note" id="te_Note" class="form-control" placeholder="Note" value="<?php echo $r['te_Note']?>"/>
							</div>
							 
								<div class="col-xs-12">
									<p class="text_margin_0">Upload File</p>
									<input type="submit" value="Photo Upload" id="upload_logo" class="btn btn-success"/>
									<input type="hidden" class="" id="te_img" name="te_img" value="<?php echo $r['te_img']?>" /> 
									<div  style="margin-top: 10px;">
										<?php 
											if($r['te_img']){
										?>
												<img src="<?php echo $cdn_path.$r['te_img']?>" id="show_img" style="width: 150px;"/>
										<?php 
											} else {
										?>
												<img src="https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/No-Profile.png" id="show_img" style="width: 150px;"/>
										<?php 
											}
										?>
									</div> 
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $user_url?>events_list" class="btn btn-primary">List</a>	
								</div>
							</div>
						
						</div>
					</div>
				</div>
	<?php 
		}
	} else { ?>		
				<div class="col-md-12">
					<div class="portlet light bordered">
						<h3 class="col-xs-12 form-title">Create Event</h3>
						<div class="portlet-body ">
							<div class="row">
							<div class="form-group col-md-12">
								<label>Event Title</label>
								<input type="text" class="form-control" name="te_title" id="te_title" placeholder="Event Title"/>
								<input type="hidden" name="te_id" id="te_id" />
								<input type="hidden" name="te_Topics_id" id="te_Topics_id" />
							</div>
							<div class="form-group col-md-2">
								<label>Start Date</label>
								<input type="text" name="te_start_date" id="te_start_date" class="form-control datepicker2" placeholder="Date"/>
							</div>
							 <div class="form-group col-md-2">
								<label>End Date</label>
								<input type="text" name="te_end_date" id="te_end_date" class="form-control datepicker2" placeholder="Date"/>
							</div>
							<div class="form-group col-md-2">
								<label>Start Time</label>
								<input type="text" name="te_stime" id="te_stime" class="timepicker form-control" placeholder="Time"/>
							</div>
							<div class="form-group col-md-2">
								<label>End Time</label>
								<input type="text" name="te_etime" id="te_etime" class="timepicker form-control" placeholder="Time"/>
							</div>
							<div class="form-group col-md-12">
								<label style="">Topics & Speakers</label>
								<label style="padding-left: 15px; letter-spacing: 2px; font-size: 13px; height: 20px; font-weight:normal;float:right;">
								<input type='button' value='Add' id='addButtons' class="form-control1">
								<input type='button' value='Remove' id='removeButtons' class="form-control1"></label>
							</div>
							<div class="form-group col-md-8">
								<label style="">Topics</label>
								<input type="text" name="te_Topics_0" id="te_Topics_0" class="form-control" placeholder="Topics"/>
								<input type="hidden" name="tts_id_0" id="tts_id_0" />
							</div>
							<div class="form-group col-md-4">
								<label style="">Speakers</label>
								<input type="text" name="te_Speakers_0" id="te_Speakers_0" class="form-control" placeholder="Speakers"/>
							</div>
							<div id='TextBoxesGroup'></div>
							<div class="form-group col-md-6">
								<label style="">Details</label>
								<textarea type="text" style="height:94px !important;" name="te_details" id="te_details" class="form-control" ></textarea>
							</div>
							<div class="form-group col-md-6">
								<label style="">Venue</label>
								<textarea type="text" style="height:94px !important;" name="te_Venue" id="te_Venue" class="form-control" ></textarea>
							</div>
							<div class="form-group col-md-2">
								<label style="">Organised by</label>
								<input type="text" name="te_Organised" id="te_Organised" value="" class="form-control" placeholder="Organised by"/>
							</div>
							<div class="form-group col-md-4">
								<div class="col-md-12"  style="padding-left:0px;">
								<label style="">Contact</label>
								</div>
								<div class="col-md-6" style="padding-left:0px;">
								<input type="text" name="te_email" id="te_email" class="form-control" placeholder="E-Mail"/>
								</div>
								<div class="col-md-6" style="padding-left:0px;padding-right:0px;">
								<div class="col-sm-2" style="padding: 0px 5px;line-height: 35px;text-align: right;">
										+91
									</div> 
									<div class="col-sm-10" style="padding:0px">
										<input type="text" name="te_mno" id="te_mno" onkeypress="return isNumber(event)"  maxlength="10" class="form-control margin-bottom-20">
									</div>
									<span id="errorMsg" style="float: right;font-size: 10px;"></span>
								</div>
							</div>
							 
							<div class="form-group col-md-6">
								<label style="">Note</label>
								<input type="text" name="te_Note" id="te_Note" class="form-control" placeholder="Note"/>
							</div>
							 
								<div class="col-xs-12">
									<p class="text_margin_0">Upload File</p>
									<input type="submit" value="Photo Upload" id="upload_logo" class="btn btn-success"/>
									<input type="hidden" class="" id="te_img" name="te_img" /> 
									<div  style="margin-top: 10px;">
										<img src="https://touchalife.s3-ap-southeast-1.amazonaws.com/uploads/No-Profile.png" id="show_img" style="width: 150px;"/>
									</div> 
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $user_url?>events_list" class="btn btn-primary">List</a>	
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
				<div id="upload-demo" style="width:450px;margin:auto;"></div>
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
<link rel="stylesheet" href="https://foliotek.github.io/Croppie/croppie.css">
<script src="https://foliotek.github.io/Croppie/croppie.js"></script>

<link rel="stylesheet" href="<?php echo $site_url?>css/jquery.ui.timepicker.css" />
<script src="<?php echo $site_url?>js/jquery.ui.timepicker.js"></script>
<script>
var requ;
 $(document).ready(function() {
	$('.timepicker').timepicker({
		showPeriod: true,
		showLeadingZero: true
	});

	$(".nav_micro_site").addClass('active_head');
	$uploadCrop = $('#upload-demo').croppie({
		enableExif: true,
		viewport: {
			width: 400,
			height: 400
		},
		boundary: {
			width: 450,
			height: 450
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
				data: {"image":resp, "parts":"events" },
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function (data) {
					var split = data.split('part');
					if(split[0] == 1){
						var img = split[1];
						document.getElementById("te_img").value = img;
						document.getElementById("show_img").src = '<?php echo $cdn_path?>'+img;
						alert("Upload Successfully.");
						$("#myModal").modal('hide');
						$(".response_gif").hide();
					} else {
						alert("Try Again.");
					}
				}
			});
		});
	});
	
	$("#upload_logo").on('click', function(){
		 $("#myModal").modal();
	});
	
	var counter = 1;
	$("#addButtons").click(function () {

		if(counter>10){
			alert("Only 10 textboxes allow");
			return false;
		}
		var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
	
		newTextBoxDiv.after().html('<div class="form-group col-md-8"><input type="hidden" name="tts_id_'+counter+'" id="tts_id_'+counter+'"  value="" /><input type="text" name="te_Topics_" id="te_Topics_'+counter+'" class="form-control" placeholder="Topics"/></div><div class="form-group col-md-4"><input type="text" name="te_Speakers_'+counter+'" id="te_Speakers_'+counter+'" class="form-control" placeholder="Speakers"/></div>');
		newTextBoxDiv.appendTo("#TextBoxesGroup");
		counter++;
	});

	$("#removeButtons").click(function () {
		if(counter==1){
			alert("No more textbox to remove");
			return false;
		}
		counter--;
		$("#TextBoxDiv" + counter).remove();
	});

		
	$("#add_mast").on('click', function(){
		var te_title = document.getElementById("te_title").value;
        var te_start_date = document.getElementById("te_start_date").value;
        var te_end_date = document.getElementById("te_end_date").value;
        var te_stime = document.getElementById("te_stime").value;
        var te_etime = document.getElementById("te_etime").value;
        var te_Venue = document.getElementById("te_Venue").value;
        var te_Organised = document.getElementById("te_Organised").value;
        var te_Note = document.getElementById("te_Note").value;
        var te_email = document.getElementById("te_email").value;
        var te_mno = document.getElementById("te_mno").value;
        var te_details = document.getElementById("te_details").value; 
        var te_Topics_id = document.getElementById("te_Topics_id").value; 
        var te_img = document.getElementById("te_img").value; 
		var te_id = document.getElementById("te_id").value;

		var te_Topics = "";
        var te_Speakers = "";
        var tts_id = "";
        var te_status = "";
        
        for(i=0; i<counter; i++){
            te_Topics += $("#te_Topics_"+i).val()+'___';
            te_Speakers += $("#te_Speakers_"+i).val()+'___';
			tts_id += $("#tts_id_"+i).val()+'___';
        }
        
        if(te_title == ""){
            alert("Enter Event Title");
        } else {
			if(requ && requ.readyState != 4){
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:{te_title:te_title, te_start_date:te_start_date, te_end_date:te_end_date, te_stime:te_stime, te_etime:te_etime, te_Venue:te_Venue, te_details:te_details, te_Organised:te_Organised, te_Note:te_Note, te_Topics:te_Topics, te_Speakers:te_Speakers, tts_id:tts_id, te_email:te_email, te_mno:te_mno, te_img:te_img, te_id:te_id, te_Topics_id:te_Topics_id, te_status:te_status},
				url:"<?php echo $admin_url?>ad_data.php?call=events_insert",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("saved successfully.");
						location.reload();
					}else if(html == 2){
						alert("updated successfully.");
						location.reload();
					}else{
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
        }  
    });
});


	function remove_event_topic( id ) {
	  if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+escape(id),
			url:"<?php echo $admin_url?>ad_data.php?call=remove_event_topic",
			success: function(html){
				if(html == 1){
					alert("Remove successfully.");
					location.reload();
				}else{
					alert("Try Again.");
				}
			}
		});
	}
 
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