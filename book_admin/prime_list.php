<?php 
	include("header.php");
	
	$title = isset($_GET['title']) ? $_GET['title'] : ''; 
	$title_ids = isset($_GET['ids']) ? $_GET['ids'] : ''; 
	
	$main_page_name = '';
	$main_page_url = '';
	$cat_page_url = '';
	$active_page_name = '';
	
	if($title){
		if($title == 'email'){
			$main_page_name = 'E-Mail Tamplates';
			$main_page_url = 'email_catagory_master';
			$cat_page_url = 'email_catagory_master';
			$active_page_name = 'nav_email_management';		
		}else if($title == 'product'){
			$main_page_name = ' Product Category Master';
			$main_page_url = 'product_service_master';
			$cat_page_url = 'category_master';
			$active_page_name = 'nav_product_master';		
		}else if($title == 'form'){
			$main_page_name = ' Form Category';
			$main_page_url = 'forms';
			$cat_page_url = 'form_master';
			$active_page_name = 'nav_technical_management';		
		}else if($title == 'legal'){
			$main_page_name = 'Legal & Certificate Management';
			$main_page_url = 'legal_management';
			$cat_page_url = 'legal_catagory_master';
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
			<a href="<?php echo $admin_url.$main_page_url?>"><?php echo $main_page_name;?></a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url.$cat_page_url?>">Category Master</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Prime Category List</a>
		</li>
	</ul>	
</div>
<aside class="right-side">
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-top:20px;">
					<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
						<div style="float:left;font-size:20px;">Search</div>
						<div style="float:right">
							<input type="submit" class="btn btn-success"  id="create_master_category" value="Create Prime Category" name="create_prime_category" />
						</div>
					</div>
					<div class="col-md-12" style="margin-bottom:10px;">
						<div class="col-md-3 text_box_padding">
							<input type="text" class="form-control saerchbtn search_master_name" placeholder="Master Category Name" id="p_m_name" name="p_m_name"/>
							<input type="hidden" id="p_cc_name" name="p_cc_name" value="<?php echo $title?>"/>
							<input type="hidden" id="p_cc_id" name="p_cc_id" value="<?php echo $title_ids?>"/>
						</div>
						<div class="col-md-3 text_box_padding">
							<input type="text" class="form-control saerchbtn" placeholder="Prime Category Name" id="p_name" name="p_name"/>
						</div>
						<div class="col-md-3 text_box_padding">
							<input type="submit" class="btn btn-primary"  id="btn_search" value="Search" name="btn_search" />
							<input type="submit" class="btn btn-primary"  id="btn_reset" value="Reset" name="btn_reset" />
						</div>
					</div>

					<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
						<div> Total Records : <span id="total_records"></span></div>
						<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
							<thead>
								<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
									<th style="width:20px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
									<th style="width:50px">Sr.No.</th> 
									<th style="width:150px;text-align:left">Master Category Name
										<span style="width: 10px; float: right;">
											<i class="fa fa-caret-up" id="p_m_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
											<i class="fa fa-caret-down" id="p_m_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:150px;text-align:left">Prime Category Name
										<span style="width: 10px; float: right;">
											<i class="fa fa-caret-up" id="p_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
											<i class="fa fa-caret-down" id="p_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>		
									<th style="width:60px">Display</th>
									<th style="width:60px">Action</th>
								</tr>
							</thead> 
							<tbody id="master_list"></tbody> 
						</table>
						<div id="order_search_page"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</aside>

<?php include('footer.php'); ?>
<script>
	var requ;
	var page = 1;
	var fields = "";
	var ord_sort = "";
	$(document).ready(function() {
		$(".<?php echo $active_page_name?>").addClass('active_head');
		$(".saerchbtn").keypress(function (e) { 
			if(e.keyCode == 13){
				loadData(page,fields,ord_sort);
			}
		}); 
		$(document).on('click','.pagination li.active', function () { 
			var page = $(this).attr('p');
			loadData(page,fields,ord_sort);
		});
		$(".fa-caret-up").click(function () { 
			fields = this.id;
			ord_sort = $(this).attr("data-id");
			loadData(page,fields,ord_sort);
		});
		$(".fa-caret-down").click(function () { 
			fields = this.id;
			ord_sort = $(this).attr("data-id");
			loadData(page,fields,ord_sort);
		});
		$("#btn_search").click(function () { 
			loadData(page,fields,ord_sort);
		});
		$("#btn_reset").click(function () {
			document.getElementById("p_name").value = '';
			document.getElementById("p_m_name").value = ''; 	
			loadData(page,fields,ord_sort);
		});
		$(".chkSelectAll").click(function() { 
			$(".rowsf:checkbox:not(:disabled)").prop("checked", this.checked); 
		});
		
		$("#create_master_category").click(function() { 
			window.location = "<?php echo $admin_url ?>prime_cate/<?php echo $title?>/<?php echo $title_ids ?>/create";
		});
		
		$(".search_master_name").autocomplete({
			source: function (request, response) {
				var cc_id = document.getElementById('p_cc_id').value;
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
				/*document.getElementById('p_m_id').value = m_id;*/
			},
			minLength: 0,
			scroll: true
		}).focus(function(){    
			 $(this).autocomplete("search", "");
		});

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
				/*document.getElementById('cc_id').value = cc_id;*/
			},
			minLength: 0,
			scroll: true
		}).focus(function(){    
			 $(this).autocomplete("search", "");
		});

	});

	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var p_name = document.getElementById("p_name").value;
		var p_m_name = document.getElementById("p_m_name").value;
		var p_cc_name = document.getElementById("p_cc_name").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"p_name="+p_name+"&p_m_name="+p_m_name+"&p_cc_name="+p_cc_name+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&display=0",
			url:"<?php echo $admin_url?>ad_data.php?call=prime_list",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(msg){
				var msga = msg.split("pagination_part");
				$("#master_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
				$(".response_gif").hide();
			}
		});
	}

	function editbtn(id){ 
		$(".response_gif").show();
		window.location = "<?php echo $admin_url ?>prime_cate/<?php echo $title?>/<?php echo $title_ids ?>/"+btoa(id);
	}

	function deletedbtn(id){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id,
			url:"<?php echo $admin_url?>ad_data.php?call=delete_prime",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(html){
				if(html == 1){
					alert("deleted successfully.");
					loadData(page,fields,ord_sort);
				} else {
					alert("Try Again.");
				}	
			}
		});
	}
	 
</script>
</body>
</html>