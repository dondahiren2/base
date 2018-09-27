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
							<input type="submit" class="btn btn-success"  id="create_master_category" value="Create Interview Question" name="create_prime_category" />
						</div>
					</div>
					<div class="col-md-12" style="margin-bottom:10px;">
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control saerchbtn search_master_name" placeholder="Select Master Category" id="m_name" name="m_name"/>
							<input type="hidden" id="im_cc_id" name="im_cc_id" value="7" />
							<input type="hidden" id="im_m_id" name="im_m_id" />
						</div>
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control saerchbtn search_prime_name" placeholder="Select Prime Category" id="p_name" name="p_name"/>
							<input type="hidden" id="im_p_id" name="im_p_id"/>
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
											<i class="fa fa-caret-up" id="im_m_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
											<i class="fa fa-caret-down" id="im_m_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:150px;text-align:left">Prime Category
										<span style="width: 10px; float: right;">
											<i class="fa fa-caret-up" id="im_p_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
											<i class="fa fa-caret-down" id="im_p_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
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
			document.getElementById("m_name").value = '';
			document.getElementById("p_name").value = '';
			document.getElementById("im_m_id").value = '';
			document.getElementById("im_p_id").value = ''; 
			loadData(page,fields,ord_sort);
		});
		
		$("#create_master_category").click(function() { 
			window.location = "<?php echo $admin_url ?>telephone_interview_question";
		});
		
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
	});

	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){ 
		var im_m_id = document.getElementById("im_m_id").value;
		var im_p_id = document.getElementById("im_p_id").value;
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&im_m_id="+im_m_id+"&im_p_id="+im_p_id,
			url:"<?php echo $admin_url?>ad_data.php?call=telephone_interview_question_list",
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
		window.location = "<?php echo $admin_url ?>telephone_interview_question/"+btoa(id);
	}

	function deletedbtn(id, uid){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id+"&uid="+uid,
			url:"<?php echo $admin_url?>ad_data.php?call=interview_delete",
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