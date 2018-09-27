<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>email_management">E-Mail Templates</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>email_template_list">Email Templates List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Email Templates</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		$mast = $con->query("select et_id, et_m_id, et_m_name, et_p_id, et_p_name, et_c_id, et_c_name, et_s_id, et_s_name, et_subject, et_description, et_from_address, et_status from email_tamplate where et_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Email Address</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Master Category</p>
									<input type="text" class="form-control getData search_master_name" placeholder="Select Master Category" id="et_m_name" name="et_m_name" value="<?php echo $r['et_m_name']?>" />
									<input type="hidden" class="" id="et_id" name="et_id" value="<?php echo $r['et_id']?>" />
									<input type="hidden" class="getData" id="et_c_id" name="et_c_id" value="3" value="<?php echo $r['et_c_id']?>"  />
									<input type="hidden" class="getData" id="et_c_name" name="et_c_name" value="email" value="<?php echo $r['et_c_name']?>"  />
									<input type="hidden" class="getData" id="et_m_id" name="et_m_id" value="<?php echo $r['et_m_id']?>"  />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Prime Category</p>
									<input type="text" class="form-control getData search_prime_name" placeholder="Select Prime Category" id="et_p_name" name="et_p_name" value="<?php echo $r['et_p_name']?>" />
									<input type="hidden" class="getData" id="et_p_id" name="et_p_id" value="<?php echo $r['et_p_id']?>"  />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Sub Category</p>
									<input type="text" class="form-control getData search_sub_name" placeholder="Select Sub Category" id="et_s_name" name="et_s_name" value="<?php echo $r['et_s_name']?>"  />
									<input type="hidden" class="getData" id="et_s_id" name="et_s_id" value="<?php echo $r['et_s_id']?>"  />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select From Address</p>
									<select class="form-control getData" id="et_from_address" name="et_from_address" >
									<?php 
										$rea = $con->query("SELECT ea_address FROM `email_address` where ea_status = 0 ");
										if(mysqli_num_rows($rea) > 0){
											while($ra = mysqli_fetch_assoc($rea)){
									?>
											<option value="<?php echo $ra['ea_address']?>" <?php if($ra['ea_address'] == $r['et_from_address']){ echo 'selected';}  ?>><?php echo $ra['ea_address']?></option>
									<?php			
											}
										}
									?>
									</select>
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Subject</p>
									<input type="text" class="form-control getData" placeholder="Subject" id="et_subject" name="et_subject" value="<?php echo $r['et_subject']?>" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control getData" id="et_status" name="et_status" >
										<option value="0" <?php if($r['et_status'] == 0 ){ echo 'selected';}  ?>>Yes</option>
										<option value="1" <?php if($r['et_status'] == 1 ){ echo 'selected';}  ?>>No</option>
									</select>
								</div>
								<div class="col-xs-12 text_box_padding">
									<p class="text_margin_0">Content of Email</p>
									<textarea  class="form-control " name="description_view" id="description_view"><?php echo $r['et_description']?></textarea>
								</div>
								<div class="col-xs-12 text_box_padding" style="margin-top: 15px;">
									<p class="">Preview</p>
									<div id="et_description" class="ckeditor_display" style="border:1px solid #ccc;"><?php echo $r['et_description']?></div>
								</div>
								<div class="col-xs-12 text_box_padding footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>email_template_list" class="btn btn-primary">List</a>	
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
						<div class="row">
							<h3 class="col-xs-12 form-title">Create Email Templates</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Master Category</p>
									<input type="text" class="form-control getData search_master_name" placeholder="Select Master Category" id="et_m_name" name="et_m_name" />
									<input type="hidden" class="" id="et_id" name="et_id" />
									<input type="hidden" class="getData" id="et_c_id" name="et_c_id" value="3" />
									<input type="hidden" class="getData" id="et_c_name" name="et_c_name" value="email" />
									<input type="hidden" class="getData" id="et_m_id" name="et_m_id" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Prime Category</p>
									<input type="text" class="form-control getData search_prime_name" placeholder="Select Prime Category" id="et_p_name" name="et_p_name"/>
									<input type="hidden" class="getData" id="et_p_id" name="et_p_id" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Sub Category</p>
									<input type="text" class="form-control getData search_sub_name" placeholder="Select Sub Category" id="et_s_name" name="et_s_name" />
									<input type="hidden" class="getData" id="et_s_id" name="et_s_id" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select From Address</p>
									<select class="form-control getData" id="et_from_address" name="et_from_address" >
									<?php 
										$rea = $con->query("SELECT ea_address FROM `email_address` where ea_status = 0 ");
										if(mysqli_num_rows($rea) > 0){
											while($ra = mysqli_fetch_assoc($rea)){
									?>
											<option value="<?php echo $ra['ea_address']?>"><?php echo $ra['ea_address']?></option>
									<?php			
											}
										}
									?>
									</select>
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Subject</p>
									<input type="text" class="form-control getData" placeholder="Subject" id="et_subject" name="et_subject" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control getData" id="et_status" name="et_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-12 text_box_padding">
									<p class="text_margin_0">Content of Email</p>
									<textarea  class="form-control " name="description_view" id="description_view"></textarea>
								</div>
								<div class="col-xs-12 text_box_padding" style="margin-top: 15px;">
									<p class="">Preview</p>
									<div id="et_description" class="ckeditor_display" style="border:1px solid #ccc;"></div>
								</div>
								<div class="col-xs-12 text_box_padding footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>email_template_list" class="btn btn-primary">List</a>	
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

<script src="https://ckeditor.com/assets/libs/ckeditor4/4.10.0/ckeditor.js"></script>
 
<script>
var requ;
CKEDITOR.replace('description_view');
CKEDITOR.instances['description_view'].on('change', function() { 
	var data = CKEDITOR.instances['description_view'].getData();
	document.getElementById('et_description').innerHTML = data;
});

 $(document).ready(function() {
	$(".nav_email_management").addClass('active_head');
	
	$(".search_master_name").autocomplete({
		source: function (request, response) {
			var et_c_id = document.getElementById('et_c_id').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_master_name",
				dataType: "json",
				data: {
					cc_id: et_c_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var m_id = ui.item.m_id;
			document.getElementById('et_m_id').value = m_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$(".search_prime_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('et_c_id').value;
			var s_m_id = document.getElementById('et_m_id').value;
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
			document.getElementById('et_p_id').value = p_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});

	$(".search_sub_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('et_c_id').value;
			var s_m_id = document.getElementById('et_m_id').value;
			var p_id = document.getElementById('et_p_id').value;
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_sub_name",
				dataType: "json",
				data: {
					cc_id: cc_id, m_id: s_m_id, p_id: p_id, term: request.term 
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var s_id = ui.item.s_id;
			document.getElementById('et_s_id').value = s_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});

  
	$("#add_mast").on('click', function(){
		var et_id = document.getElementById('et_id').value;
		var et_m_name = document.getElementById('et_m_name').value;
		var et_p_name = document.getElementById('et_p_name').value;
		var et_s_name = document.getElementById('et_s_name').value;
		var et_subject = document.getElementById('et_subject').value;
		var et_description = document.getElementById('et_description').innerHTML;
		
		if(et_m_name == ''){
			alert('Enter Master Category.');
		} else if(et_p_name == ''){
			alert('Enter Prime Category.');
		} else if(et_s_name == ''){
			alert('Enter Sub Category.');
		} else if(et_subject == ''){
			alert('Enter Subject.');
		} else if(et_description == ''){
			alert('Enter Content of Email.');
		} else {
			
			var idArray = [];
			var valueArray = [];
			
			$('.getData').each(function() {
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
				data:"idArray="+idArray+"&valueArray="+valueArray+"&id="+et_id+"&description="+escape(et_description),
				url:"<?php echo $admin_url?>ad_data.php?call=add_email_templates",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('et_id').value = '';
						document.getElementById('et_m_name').value = '';
						document.getElementById('et_p_name').value = '';
						document.getElementById('et_s_name').value = '';
						document.getElementById('et_subject').value = '';
						CKEDITOR.instances['description_view'].setData('');
						document.getElementById('et_description').innerHTML = '';
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
</script>
</body>
</html>