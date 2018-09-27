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
			$cat_list_page_url = 'master_list/'.$title.'/'.$title_ids;
			$active_page_name = 'nav_email_management';		
		} else if($title == 'product'){
			$main_page_name = ' Product Category Master';
			$main_page_url = 'product_service_master';
			$cat_page_url = 'category_master';
			$cat_list_page_url = 'master_list/'.$title.'/'.$title_ids;
			$active_page_name = 'nav_product_master';		
		} else if($title == 'form'){
			$main_page_name = ' Form Category';
			$main_page_url = 'forms';
			$cat_page_url = 'form_master';
			$cat_list_page_url = 'master_list/'.$title.'/'.$title_ids;
			$active_page_name = 'nav_technical_management';		
		}else if($title == 'legal'){
			$main_page_name = 'Legal & Certificate Management';
			$main_page_url = 'legal_management';
			$cat_page_url = 'legal_catagory_master';
			$cat_list_page_url = 'master_list/'.$title.'/'.$title_ids;
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
			<a href="<?php echo $admin_url.$cat_list_page_url?>">Master Category List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Master Category</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if($ids != 'create'){
		$m_id = base64_decode($_GET['ids']);
		$mast = $con->query("select m_id, m_name, m_cc_id, m_cc_name, m_status from master_category where m_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Master Category</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
									<input type="hidden" class="form-control search_topic_name" placeholder="Topic Name" id="cc_name" name="cc_name" value="<?php echo $r['m_cc_name']?>" />
									<input type="hidden" id="cc_id" name="cc_id" value="<?php echo $r['m_cc_id']?>" />
									<input type="hidden" id="m_id" name="m_id" value="<?php echo $r['m_id']?>" />
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="Master Category Name" id="m_name" name="m_name" value="<?php echo $r['m_name']?>"/>
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="m_status" name="m_status" >
										<option value="0" <?php if($r['m_status'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['m_status'] == 1){ echo 'selected'; } ?>>No</option>
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
							<h3 class="col-xs-12 form-title">Create Master Category</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<input type="hidden" class="form-control search_topic_name" placeholder="Topic Name" id="cc_name" name="cc_name" value="<?php echo $title; ?>" />
								<input type="hidden" id="cc_id" name="cc_id" value="<?php echo $title_ids; ?>" />
								<input type="hidden" id="m_id" name="m_id" />
								<div class="col-xs-12">
									<p style="margin-top:7px;">Master Category Name :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control" placeholder="Master Category Name" id="m_name" name="m_name" />
								</div>
								
								<div class="col-xs-12">
									<p style="margin-top:7px;">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="m_status" name="m_status" >
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
	$(".nav_technical_management").addClass('active_head');
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
			document.getElementById('cc_id').value = cc_id;
		},
		minLength: 0,
		scroll: true
	}).focus(function(){    
		 $(this).autocomplete("search", "");
	});
 
 
	$("#add_mast").on('click', function(){
		var m_id = document.getElementById('m_id').value;
		var cc_id = document.getElementById('cc_id').value;
		var cc_name = document.getElementById('cc_name').value;
		var m_name = document.getElementById('m_name').value;
		var m_status = document.getElementById('m_status').value;
		if(cc_name == ''){
			alert('Enter Topic Name.');
		} else if(m_name == ''){
			alert('Enter Master Category Name.');
		} else {
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"cc_id="+cc_id+"&cc_name="+cc_name+"&m_name="+m_name+"&m_status="+m_status+"&m_id="+m_id,
				url:"<?php echo $admin_url?>ad_data.php?call=add_master",
				beforeSend: function(){
					$(".response_gif").show();
				},success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('cc_id').value = '';
						document.getElementById('cc_name').value = '';
						document.getElementById('m_id').value = '';
						document.getElementById('m_name').value = '';
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