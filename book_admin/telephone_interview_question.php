<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>email_management">E-Mail & SMS Templates</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>telephone_interview_question_list">Telephone Interview Question List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>#">Create Question</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['id'])){
		$m_id = base64_decode($_GET['id']);
		$mast = $con->query("select im_id, im_cc_id, im_m_id, im_p_id, im_status, m_name, p_name, im_uid from interview_main as im join prime_category as p on im.im_p_id = p.p_id join master_category as m on im.im_m_id = m.m_id where im_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
			
?>
 			<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Create Telephone Interview Question</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-5 text_box_padding">
									<p class="text_margin_0">Master Category</p>
									<input type="text" class="form-control search_master_name" placeholder="Select Master Category" id="m_name" name="m_name"  value="<?php echo $r['m_name'] ?>"/>
									<input type="hidden" id="im_id" name="im_id" value="<?php echo $r['im_id'] ?>" />
									<input type="hidden" id="im_m_id" name="im_m_id" class="MainGetData" value="<?php echo $r['im_m_id'] ?>" />
									<input type="hidden" id="im_cc_id" name="im_cc_id"  class="MainGetData" value="<?php echo $r['im_cc_id'] ?>" />
									<input type="hidden" id="im_uid" name="im_uid" value="<?php echo $r['im_uid'] ?>"/>
								</div>
								<div class="col-xs-5 text_box_padding">
									<p class="text_margin_0">Prime Category</p>
									<input type="text" class="form-control search_prime_name" placeholder="Select Prime Category" id="p_name" name="p_name" value="<?php echo $r['p_name'] ?>" />
									<input type="hidden" id="im_p_id" name="im_p_id" class="MainGetData" value="<?php echo $r['im_p_id'] ?>" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control MainGetData" id="im_status" name="im_status" >
										<option value="0" <?php if($r['im_status'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['im_status'] == 1){ echo 'selected'; } ?> >No</option>
									</select>
								</div>
								<div class="col-md-12" style="border-top: 3px solid #ccc;padding-top: 10px;margin-top: 5px;"></div>
								<div class="col-xs-9 text_box_padding">
									<p class="text_margin_0">Question</p>
									<input type="text" class="form-control SubGetData" placeholder="Question" id="iq_question" name="iq_question" />
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Position</p>
									<input type="text" class="form-control SubGetData" placeholder="Position" id="iq_position" name="iq_position	" />
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control SubGetData" id="iq_display" name="iq_display" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">&nbsp;</p>
									<input type="submit" class="form-control btn btn-primary" value="Add" style="color:#fff" id="add_btn" name="add_btn" />
								</div>
								<div class="col-xs-12 text_box_padding" style="height:200px;border: 1px solid #ccc;margin-bottom: 10px;overflow-x: auto;" >
									<table class="table table-striped table-bordered table-vcenter">
										<thead>
										<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);" >
											<td style="width: 70px;">Sr.No</td>
											<td>Question</td>
											<td style="width: 70px;">Position</td>
											<td style="width: 70px;">Display</td>
											<td style="width: 70px;" >Action</td>
										</tr>
										</thead>
										<tbody id="get_data"></tbody>
									</table>
								</div> 
								
								<div class="col-xs-12 text_box_padding footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>telephone_interview_question_list" class="btn btn-primary">List</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
	
	<?php 
		}
	} else { 
			
	?>		
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Create Telephone Interview Question</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-5 text_box_padding">
									<p class="text_margin_0">Master Category</p>
									<input type="text" class="form-control search_master_name" placeholder="Select Master Category" id="m_name" name="m_name" />
									<input type="hidden" id="im_id" name="im_id" />
									<input type="hidden" id="im_m_id" name="im_m_id" class="MainGetData" />
									<input type="hidden" id="im_cc_id" name="im_cc_id"  class="MainGetData"  value="7" />
									<input type="hidden" id="im_uid" name="im_uid" value="<?php echo date('dmYHis').rand(1111,9999)?>" />
								</div>
								<div class="col-xs-5 text_box_padding">
									<p class="text_margin_0">Prime Category</p>
									<input type="text" class="form-control search_prime_name" placeholder="Select Prime Category" id="p_name" name="p_name" />
									<input type="hidden" id="im_p_id" name="im_p_id" class="MainGetData" />
								</div>
								<div class="col-xs-2 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control MainGetData" id="im_status" name="im_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-md-12" style="border-top: 3px solid #ccc;padding-top: 10px;margin-top: 5px;"></div>
								<div class="col-xs-9 text_box_padding">
									<p class="text_margin_0">Question</p>
									<input type="text" class="form-control SubGetData" placeholder="Question" id="iq_question" name="iq_question" />
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Position</p>
									<input type="text" class="form-control SubGetData" placeholder="Position" id="iq_position" name="iq_position	" />
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control SubGetData" id="iq_display" name="iq_display" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-1 text_box_padding">
									<p class="text_margin_0">&nbsp;</p>
									<input type="submit" class="form-control btn btn-primary" value="Add" style="color:#fff" id="add_btn" name="add_btn" />
								</div>
								<div class="col-xs-12 text_box_padding" style="height:200px;border: 1px solid #ccc;margin-bottom: 10px;overflow-x: auto;" >
									<table class="table table-striped table-bordered table-vcenter">
										<thead>
										<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);" >
											<td style="width: 70px;">Sr.No</td>
											<td>Question</td>
											<td style="width: 70px;">Position</td>
											<td style="width: 70px;">Display</td>
											<td style="width: 70px;" >Action</td>
										</tr>
										</thead>
										<tbody id="get_data"></tbody>
									</table>
								</div> 
								
								<div class="col-xs-12 text_box_padding footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>telephone_interview_question_list" class="btn btn-primary">List</a>	
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
	$(".nav_email_management").addClass('active_head');
	
	$(".search_master_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('im_cc_id').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_master_name",
				dataType: "json",
				data: {
					cc_id: cc_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var m_id = ui.item.m_id;
			document.getElementById('im_m_id').value = m_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#m_name").val("");
				$("#im_m_id").val("");
				$("#m_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
	
	$(".search_prime_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('im_cc_id').value;
			var s_m_id = document.getElementById('im_m_id').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_prime_name",
				dataType: "json",
				data: {
					cc_id: cc_id, m_id: s_m_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var p_id = ui.item.p_id;
			document.getElementById('im_p_id').value = p_id;
		},
		change: function(event, ui) {
			if (ui.item == null) {
				$("#p_name").val("");
				$("#im_p_id").val("");
				$("#p_name").focus();
			}
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
    
	$("#add_mast").on('click', function(){
		var im_m_id = document.getElementById('im_m_id').value;
		var im_p_id = document.getElementById('im_p_id').value;
		var im_uid = document.getElementById('im_uid').value;
		var im_id = document.getElementById('im_id').value;
		 
		if(im_m_id == ''){
			alert('Select Master Category.');
		} else if(im_p_id == ''){
			alert('Select Prime Category');
		} else {
			var idArray = [];
			var valueArray = [];
			
			$('.MainGetData').each(function() {
				var elt = $("#"+this.id).attr('type');
				if(elt == 'checkbox'){
					var checkboxc = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						checkboxc += this.value+'part';
					});				
					idArray.push(this.name);
					valueArray.push(checkboxc);
				} else if(elt == 'radio'){
					var radios = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						radios += this.value;
					});				
					idArray.push(this.name);
					valueArray.push(radios);
				} else {
					idArray.push(this.id);
					valueArray.push(this.value);
				}
			});
		
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"idArray="+idArray+"&valueArray="+valueArray+"&im_uid="+im_uid+"&im_id="+im_id,
				url:"<?php echo $admin_url?>ad_data.php?call=interview_question_create",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1) {
						alert("Insert Successfully");
						location.reload();
					} else if(html == 2) {
						alert("Update Successfully");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });

	$("#add_btn").on('click', function(){
		var im_m_id = document.getElementById('im_m_id').value;
		var im_p_id = document.getElementById('im_p_id').value;
		var iq_question = document.getElementById('iq_question').value;
		var im_uid = document.getElementById('im_uid').value;
		 
		if(im_m_id == ''){
			alert('Select Master Category.');
		} else if(im_p_id == ''){
			alert('Select Prime Category');
		} else if(iq_question == ''){
			alert('Enter Question.');
		} else {
			var idArray = [];
			var valueArray = [];
			
			$('.SubGetData').each(function() {
				var elt = $("#"+this.id).attr('type');
				if(elt == 'checkbox'){
					var checkboxc = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						checkboxc += this.value+'part';
					});				
					idArray.push(this.name);
					valueArray.push(checkboxc);
				} else if(elt == 'radio'){
					var radios = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						radios += this.value;
					});				
					idArray.push(this.name);
					valueArray.push(radios);
				} else {
					idArray.push(this.id);
					valueArray.push(this.value);
				}
			});
		
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"idArray="+idArray+"&valueArray="+valueArray+"&im_uid="+im_uid,
				url:"<?php echo $admin_url?>ad_data.php?call=interview_question",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						document.getElementById('iq_question').value = '';
						document.getElementById('iq_position').value = '';
						$('#iq_question').focus();
						page_lits();
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });
});
 
page_lits(); 
function page_lits(){
	var cf_uid = document.getElementById('im_uid').value;
	if(requ && requ.readyState != 4){
		requ.abort();
	}   
	requ = $.ajax({
		type:"POST",
		data:"cf_uid="+cf_uid,
		url:"<?php echo $admin_url?>ad_data.php?call=interview_question_lits",
		beforeSend: function(){
			$(".response_gif").show();
		},
		success: function(msg){
			$("#get_data").html(msg);
			$(".response_gif").hide();
		}
	});
}

function deletedbtn(cf_uid, cr_cf_uid){
	if(requ && requ.readyState != 4){
		requ.abort();
	}   
	requ = $.ajax({
		type:"POST",
		data:"cf_uid="+cf_uid,
		url:"<?php echo $admin_url?>ad_data.php?call=interview_question_lits_delete",
		beforeSend: function(){
			$(".response_gif").show();
		},
		success: function(html){
			if(html == 1){
				page_lits();
			} else {
				alert('Delete Successfully');
			}
		}
	});
}
</script>
</body>
</html>