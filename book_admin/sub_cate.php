<?php 
	include("header.php");
	
	$title = isset($_GET['title']) ? $_GET['title'] : ''; 
	$title_ids = isset($_GET['title_ids']) ? $_GET['title_ids'] : ''; 
	$ids = isset($_GET['ids']) ? $_GET['ids'] : ''; 
 
	$main_page_name = '';
	$main_page_url = '';
	$cat_page_url = '';
	$active_page_name = '';
	
	if($title){
		if($title == 'email'){
			$main_page_name = 'E-Mail Tamplates';
			$main_page_url = 'email_catagory_master';
			$cat_page_url = 'email_catagory_master';
			$cat_list_page_url = 'sub_list/'.$title.'/'.$title_ids;
			$active_page_name = 'nav_email_management';		
		}else if($title == 'product'){
			$main_page_name = ' Product Category Master';
			$main_page_url = 'product_service_master';
			$cat_page_url = 'category_master';
			$cat_list_page_url = 'sub_list/'.$title.'/'.$title_ids;
			$active_page_name = 'nav_product_master';		
		}else if($title == 'form'){
			$main_page_name = ' Form Category';
			$main_page_url = 'forms';
			$cat_page_url = 'form_master';
			$cat_list_page_url = 'sub_list/'.$title.'/'.$title_ids;
			$active_page_name = 'nav_technical_management';		
		}else if($title == 'legal'){
			$main_page_name = 'Legal & Certificate Management';
			$main_page_url = 'legal_management';
			$cat_page_url = 'legal_catagory_master';
			$cat_list_page_url = 'sub_list/'.$title.'/'.$title_ids;
			$active_page_name = 'nav_legal_management';		
		}
		
	} else {
		echo '<script> window.location = "'.$admin_url.'dashboard";</script>';
	}
	
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url.$main_page_url?>"><?php echo $main_page_name ?></a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url.$cat_page_url?>">Category Master</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url.$cat_list_page_url?>">Sub Category List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Sub Category</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if($ids != 'create'){
		$m_id = base64_decode($_GET['ids']);
		$mast = $con->query("select s_id, s_cc_id, s_cc_name, s_m_id, s_m_name, s_p_id, s_p_name, s_name, s_status from sub_category where s_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Sub Category</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
 
								<input type="hidden" class="form-control search_topic_name" placeholder="Topic Name" id="s_cc_name" name="s_cc_name" value="<?php echo $r['s_cc_name']?>" />
								<input type="hidden" id="s_cc_id" name="s_cc_id" value="<?php echo $r['s_cc_id']?>" />
								<input type="hidden" id="s_id" name="s_id" value="<?php echo $r['s_id']?>"  />
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="s_m_name" name="s_m_name" value="<?php echo $r['s_m_name']?>" />
									<input type="hidden" id="s_m_id" name="s_m_id" value="<?php echo $r['s_m_id']?>"  />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Prime Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control search_prime_name" placeholder="Prime Category Name" id="s_p_name" name="s_p_name" value="<?php echo $r['s_p_name']?>"  />
									<input type="hidden" id="s_p_id" name="s_p_id" value="<?php echo $r['s_p_id']?>"  />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Sub Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="Sub Category Name" id="s_name" name="s_name" value="<?php echo $r['s_name']?>"  />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="s_status" name="s_status" >
										<option value="0" <?php if($r['s_status'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['s_status'] == 1){ echo 'selected'; } ?>>No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url.$cat_list_page_url?>" class="btn btn-primary">List</a>	
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
							<h3 class="col-xs-12 form-title">Create Sub Category</h3>
						</div>
						<div class="portlet-body ">
							<div class="row"> 
								<input type="hidden" id="s_cc_name" name="s_cc_name"  value="<?php echo $title ?>" />
								<input type="hidden" id="s_cc_id" name="s_cc_id"  value="<?php echo $title_ids?>" />
								<input type="hidden" id="s_id" name="s_id" />
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control search_master_name" placeholder="Master Category Name" id="s_m_name" name="s_m_name"/>
									<input type="hidden" id="s_m_id" name="s_m_id" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Prime Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control search_prime_name" placeholder="Prime Category Name" id="s_p_name" name="s_p_name" />
									<input type="hidden" id="s_p_id" name="s_p_id" />
								</div>
								<div class="col-xs-12">
									<p style="margin-top:7px;">Sub Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="Sub Category Name" id="s_name" name="s_name" />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="s_status" name="s_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url.$cat_list_page_url?>" class="btn btn-primary">List</a>	
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
	$(".<?php echo  $active_page_name; ?>").addClass('active_head');
	$(".search_topic_name").autocomplete({
		source: function (request, response) {
			$.ajax({
				url: "<?php echo $admin_url?>ad_data.php?call=search_topic_name",
				dataType: "json",
				data: {
					term: request.term
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function(event, ui) {
			var cc_id = ui.item.cc_id;
			document.getElementById('s_cc_id').value = cc_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
	
	$(".search_master_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('s_cc_id').value;
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
			document.getElementById('s_m_id').value = m_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$(".search_prime_name").autocomplete({
		source: function (request, response) {
			var cc_id = document.getElementById('s_cc_id').value;
			var s_m_id = document.getElementById('s_m_id').value;
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
			document.getElementById('s_p_id').value = p_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
  
	$("#add_mast").on('click', function(){
		var s_cc_name = document.getElementById('s_cc_name').value;
		var s_cc_id = document.getElementById('s_cc_id').value;
		var s_id = document.getElementById('s_id').value;
		var s_m_name = document.getElementById('s_m_name').value;
		var s_m_id = document.getElementById('s_m_id').value;
		var s_p_name = document.getElementById('s_p_name').value;
		var s_p_id = document.getElementById('s_p_id').value;
		var s_name = document.getElementById('s_name').value;
		var s_status = document.getElementById('s_status').value;
				
		if(s_cc_name == ''){
			alert('Enter Topic Name.');
		} else if(s_m_name == ''){
			alert('Enter Master Category Name.');
		} else if(s_p_name == ''){
			alert('Enter Prime Category Name.');
		} else if(s_name == ''){
			alert('Enter Sub Category Name.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"s_cc_name="+s_cc_name+"&s_cc_id="+s_cc_id+"&s_id="+s_id+"&s_m_name="+s_m_name+"&s_m_id="+s_m_id+"&s_p_name="+s_p_name+"&s_p_id="+s_p_id+"&s_name="+s_name+"&s_status="+s_status,
				url:"<?php echo $admin_url?>ad_data.php?call=add_sub",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully."); 
						document.getElementById('s_id').value = '';
						document.getElementById('s_m_name').value = '';
						document.getElementById('s_m_id').value = '';
						document.getElementById('s_p_name').value = '';
						document.getElementById('s_p_id').value = '';
						document.getElementById('s_name').value = '';
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