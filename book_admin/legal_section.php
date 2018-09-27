<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>legal_management">Legal & Certificate Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>legal_list">Create Legal & Certificate Section</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Create Section</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		$mast = $con->query("select ls_id, ls_c_id, ls_m_id, ls_p_id, ls_s_id, ls_description, m_name, p_name, s_name, ls_title, ls_display from legal_section as ls join master_category as m on ls.ls_m_id = m.m_id join prime_category as p on ls.ls_p_id = p.p_id join sub_category as s on ls.ls_s_id = s.s_id where ls_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Section</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Master Category</p>
									<input type="text" class="form-control search_master_name" placeholder="Select Master Category" id="ls_m_name" name="ls_m_name" value="<?php echo $r['m_name']?>" />
									<input type="hidden" class="" id="ls_id" name="ls_id" value="<?php echo $r['ls_id']?>"  />
									<input type="hidden" class="getData" id="ls_c_id" name="ls_c_id" value="<?php echo $r['ls_c_id']?>"  /> 
									<input type="hidden" class="getData" id="ls_m_id" name="ls_m_id"  value="<?php echo $r['ls_m_id']?>" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Prime Category</p>
									<input type="text" class="form-control search_prime_name" placeholder="Select Prime Category" id="ls_p_name" name="ls_p_name" value="<?php echo $r['p_name']?>" />
									<input type="hidden" class="getData" id="ls_p_id" name="ls_p_id" value="<?php echo $r['ls_p_id']?>"  />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Sub Category</p>
									<input type="text" class="form-control search_sub_name" placeholder="Select Sub Category" id="ls_s_name" name="ls_s_name" value="<?php echo $r['s_name']?>"  />
									<input type="hidden" class="getData" id="ls_s_id" name="ls_s_id" value="<?php echo $r['ls_s_id']?>"  />
								</div> 
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Other Title</p>
									<input type="text" class="form-control getData" placeholder="Other Title" id="ls_title" name="ls_title" value="<?php echo $r['ls_title']?>"  />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control getData" id="ls_display" name="ls_display" >
										<option value="0" <?php if($r['ls_display'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['ls_display'] == 1){ echo 'selected'; } ?> >No</option>
									</select>
								</div>
								<div class="col-xs-12 text_box_padding">
									<p class="text_margin_0">Content Details</p>
									<textarea  class="form-control " name="description_view" id="description_view"><?php echo $r['ls_description']?></textarea>
								</div>
								<div class="col-xs-12 text_box_padding" style="margin-top: 15px;">
									<p class="">Preview</p>
									<div id="ls_description" class="ckeditor_display" style="border:1px solid #ccc;"><?php echo $r['ls_description']?></div>
								</div>
								<div class="col-xs-12 text_box_padding footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>legal_list" class="btn btn-primary">List</a>	
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
							<h3 class="col-xs-12 form-title" style="padding: 0;padding-bottom: 5px;">Create Section</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Master Category</p>
									<input type="text" class="form-control search_master_name" placeholder="Select Master Category" id="ls_m_name" name="ls_m_name" />
									<input type="hidden" class="" id="ls_id" name="ls_id" />
									<input type="hidden" class="getData" id="ls_c_id" name="ls_c_id" value="9" /> 
									<input type="hidden" class="getData" id="ls_m_id" name="ls_m_id" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Prime Category</p>
									<input type="text" class="form-control search_prime_name" placeholder="Select Prime Category" id="ls_p_name" name="ls_p_name"/>
									<input type="hidden" class="getData" id="ls_p_id" name="ls_p_id" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Select Sub Category</p>
									<input type="text" class="form-control search_sub_name" placeholder="Select Sub Category" id="ls_s_name" name="ls_s_name" />
									<input type="hidden" class="getData" id="ls_s_id" name="ls_s_id" />
								</div> 
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Other Title</p>
									<input type="text" class="form-control getData" placeholder="Other Title" id="ls_title" name="ls_title" />
								</div>
								<div class="col-xs-4 text_box_padding">
									<p class="text_margin_0">Display</p>
									<select class="form-control getData" id="ls_display" name="ls_display" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-12 text_box_padding">
									<p class="text_margin_0">Content Details</p>
									<textarea  class="form-control " name="description_view" id="description_view"></textarea>
								</div>
								<div class="col-xs-12 text_box_padding" style="margin-top: 15px;">
									<p class="">Preview</p>
									<div id="ls_description" class="ckeditor_display" style="border:1px solid #ccc;"></div>
								</div>
								<div class="col-xs-12 text_box_padding footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>legal_list" class="btn btn-primary">List</a>	
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

<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
 
<script>
var requ;
CKEDITOR.replace('description_view');
CKEDITOR.instances['description_view'].on('change', function() { 
	var data = CKEDITOR.instances['description_view'].getData();
	document.getElementById('ls_description').innerHTML = data;
});

 $(document).ready(function() {
	$(".nav_legal_management").addClass('active_head');
	
	$(".search_master_name").autocomplete({
		source: function (request, response) {
			var et_c_id = document.getElementById('ls_c_id').value;
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
			document.getElementById('ls_m_id').value = m_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$(".search_prime_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('ls_c_id').value;
			var s_m_id = document.getElementById('ls_m_id').value;
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
			document.getElementById('ls_p_id').value = p_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});

	$(".search_sub_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('ls_c_id').value;
			var s_m_id = document.getElementById('ls_m_id').value;
			var p_id = document.getElementById('ls_p_id').value;
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
			document.getElementById('ls_s_id').value = s_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
   
	$("#add_mast").on('click', function(){
		var et_id = document.getElementById('ls_id').value;
		var et_m_name = document.getElementById('ls_m_name').value;
		var et_p_name = document.getElementById('ls_p_name').value;
		var et_s_name = document.getElementById('ls_s_name').value;
		var et_description = document.getElementById('ls_description').innerHTML;
		
		if(et_m_name == ''){
			alert('Enter Master Category.');
		} else if(et_p_name == ''){
			alert('Enter Prime Category.');
		} else if(et_s_name == ''){
			alert('Enter Sub Category.');
		} else if(et_description == ''){
			alert('Enter Content Details.');
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
				url:"<?php echo $admin_url?>ad_data.php?call=add_lagel_section",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('ls_id').value = '';
						document.getElementById('ls_m_name').value = '';
						document.getElementById('ls_p_name').value = '';
						document.getElementById('ls_s_name').value = '';
						document.getElementById('ls_title').value = '';
						CKEDITOR.instances['description_view'].setData('');
						document.getElementById('ls_description').innerHTML = '';
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