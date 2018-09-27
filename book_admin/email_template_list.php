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
			<a href="<?php echo $admin_url?>email_template_list">Email & SMS Templates List</a>
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
							<input type="submit" class="btn btn-success"  id="create_master_category" value="Create Email Templates" name="create_prime_category" />
						</div>
					</div>
					<div class="col-md-12" style="margin-bottom:10px;">
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control saerchbtn search_master_name" placeholder="Master Category" id="et_m_name" name="et_m_name"/>
							<input type="hidden" class="getData" id="et_c_id" name="et_c_id" value="3" />
							<input type="hidden" class="getData" id="et_c_name" name="et_c_name" value="email" />
							<input type="hidden" class="getData" id="et_m_id" name="et_m_id" />
						</div>
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control saerchbtn search_prime_name" placeholder="Prime Category" id="et_p_name" name="et_p_name"/>
							<input type="hidden" class="getData" id="et_p_id" name="et_p_id" />
						</div>
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control saerchbtn search_sub_name" placeholder="Sub Category" id="et_s_name" name="et_s_name"/>
							<input type="hidden" class="getData" id="et_s_id" name="et_s_id" />
						</div>
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control saerchbtn" placeholder="Subject" id="et_subject" name="et_subject"/>
						</div>
						<div class="col-md-2 text_box_padding">
							<input type="submit" class="btn btn-primary"  id="btn_search" value="Search" name="btn_search" />
							<input type="submit" class="btn btn-primary"  id="btn_reset" value="Reset" name="btn_reset" />
						</div>
					</div>

					<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
						<div> Total Records : <span id="total_records"></span></div>
						<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
							<thead>
								<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
									<th style="width:50px">Sr.No.</th>
									<th style="width:150px;text-align:left">Master Category
										<span style="width: 10px; float: right;">
											<i class="fa fa-caret-up" id="et_m_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
											<i class="fa fa-caret-down" id="et_m_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:150px;text-align:left">Prime Category
										<span style="width: 10px; float: right;">
											<i class="fa fa-caret-up" id="et_p_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
											<i class="fa fa-caret-down" id="et_p_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:150px;text-align:left">Sub Category
										<span style="width: 10px; float: right;">
											<i class="fa fa-caret-up" id="et_s_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
											<i class="fa fa-caret-down" id="et_s_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:150px;text-align:left">Subject</th>
									<th style="width:150px;text-align:left">From Address</th>
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
		$(".nav_email_management").addClass('active_head');
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
			document.getElementById("et_m_id").value = ''; 
			document.getElementById("et_m_name").value = ''; 
			document.getElementById("et_p_id").value = ''; 
			document.getElementById("et_p_name").value = ''; 
			document.getElementById("et_s_id").value = ''; 
			document.getElementById("et_s_name").value = ''; 
			document.getElementById("et_subject").value = ''; 
			loadData(page,fields,ord_sort);
		});
		$(".chkSelectAll").click(function() { 
			$(".rowsf:checkbox:not(:disabled)").prop("checked", this.checked); 
		});
		
		$("#create_master_category").click(function() { 
			window.location = "<?php echo $admin_url ?>email_template";
		});
		
		
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

	});

	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var et_m_name = document.getElementById("et_m_name").value;
		var et_p_name = document.getElementById("et_p_name").value;
		var et_s_name = document.getElementById("et_s_name").value;
		var et_subject = document.getElementById("et_subject").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"et_m_name="+et_m_name+"&et_p_name="+et_p_name+"&et_s_name="+et_s_name+"&et_subject="+et_subject+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"<?php echo $admin_url?>ad_data.php?call=email_template_list",
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
		window.location = "<?php echo $admin_url ?>email_template/"+btoa(id);
	}

	function deletebtn(id){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id,
			url:"<?php echo $admin_url?>ad_data.php?call=delete_email_templates",
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
<style>
	p{
		margin:0px;
	}
</style>
</body>
</html>