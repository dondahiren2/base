<?php 
	include("header.php");
?>
	<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="task_management">Task Management</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="ad_user_list.php">Ad Hoc Task List</a>
			</li>
		</ul>		
	</div>

	<aside class="right-side">
		<section class="content">
			<div class="row"> 
				<div class="col-md-12">
					<div class="box box-primary col-md-12" style="padding: 15px 0px;">
						
						<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
							<h4 class="form-title">Search By</h4>
						<div>
						<div class="row" style="padding-top:0px;margin-bottom:10px;">
						
							<div class="col-md-3 paddingRight">
								<label>Select Category</label>
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
							</div>
							<div class="col-md-3 paddingRight">
								<label>Subject</label>
								<input type="text" class="form-control saerchbtn" placeholder="Subject" id="t_sub" />
							</div>
							<div class="col-md-3 paddingRight">
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
							<div class="col-md-3 ">
								<label>Report To</label>
								<select class="form-control select2 select-report " placeholder="Report To" id="t_report_to" name="t_report_to[]" multiple="multiple" >
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
							<div class="col-md-2 paddingRight">
								<label>Status</label>
								<select class="form-control" placeholder="Category" id="t_status" name="t_status" >
									<option value=""></option>
									<option value="Created">Created</option>
									<option value="Accepted">Accepted</option>
									<option value="Review">Review</option>
									<option value="Review Again">Review Again</option>
									<option value="Rejected">Rejected</option>
									<option value="Completed">Completed</option>
									<option value="Closed">Closed</option>
								</select>
							</div>
							<div class="col-md-3 paddingRight">
								<label style="display: inherit;">Task Date</label>
								<input type="text" class="form-control saerchbtn datepicker" placeholder="Start Date" id="t_sdate" style="width: 105px;float: left;" />
								<input type="text" class="form-control saerchbtn datepicker" placeholder="End Date" id="t_edate" style="width: 105px;float: left;margin-left: 15px;" /> 
							</div>
							<div class="col-md-3" style="padding-top: 20px;">
								<input type="submit" class="btn btn-success" id="search_data" value="Search" />
								<input type="submit" class="btn btn-primary" id="add_admin_user" value="Create Task" />
							</div>
						</div>

					<div class="col-md-12" style="padding: 0px;margin-top: 30px;overflow-x:auto">
						<div> Total Records : <span id="total_records"></span></div>
						<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
							<thead>
								<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
									<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
									<th style="width:10px">Sr.No.</th>
									<th style="width:125px;text-align:left">Task Id</th>
									<th style="width:125px;text-align:left">Task Date</th>
									<th style="width:100px;text-align:left">Completed Date</th>
									<th style="width:100px;text-align:left">Category</th>
									<th style="width:115px;text-align:left">Subject</th>
									<th style="width:115px;text-align:left">Assign To</th>
									<th style="width:100px;text-align:left">Report To</th>
									<th style="width:100px;text-align:left">Status</th>
									<th style="width:70px">Action</th>
								</tr>
							</thead> 
							<tbody id="ad_list"></tbody> 
						</table>
					</div>
					<div id="order_search_page"></div>
					</div><!-- /.box -->
					<!-- Form Element sizes -->
				</div><!--/.col (left) -->
			</div><!-- /.row (main row) -->
		</section><!-- /.content -->
	</aside>
		
</div>
</div>

<?php include('footer.php'); ?>
<link href="<?php echo $admin_url?>select2/select2.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $admin_url?>select2/select2.full.min.js" type="text/javascript"></script> 
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
$(document).ready(function() {
	$('.select-assign').select2();
	$('.select-report').select2();
	
	$(".nav_task_management").addClass('active_head');
		
	$("#search_data").click(function () { 
		loadData(page,fields,ord_sort);
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
	$(".chkSelectAll").click(function() { 
		$(".rowsf:checkbox:not(:disabled)").prop("checked", this.checked); 
	}); 
	
	$("#deleteall").click(function() { 
		var r = confirm("are you sure delete all records?");
		if (r == true) {
			
			var id = [];	 
			$(".rowsf:input:checked").each(function(){
				id.push(this.value);
			}); 
		
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"post",
				data:"id="+id, 
				url:"ad_data.php?call=ad_delete",
				success:function(html){ 
					if(html == 1){
						alert("delete all records successfully.");
						window.location = "ad_user_list";
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});
	
	$("#add_admin_user").click(function() { 
		window.location = "task_create";
	});
});

	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var t_category = document.getElementById("t_category").value;
		var t_sub = document.getElementById("t_sub").value;
		var t_assign_to = $('#t_assign_to').val();
		var t_report_to = $('#t_report_to').val();
		var t_status = document.getElementById("t_status").value;
		var t_sdate = document.getElementById("t_sdate").value;
		var t_edate = document.getElementById("t_edate").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"t_category="+escape(t_category)+"&t_sub="+escape(t_sub)+"&t_assign_to="+escape(t_assign_to)+"&t_report_to="+escape(t_report_to)+"&page="+page+"&t_status="+t_status+"&t_sdate="+t_sdate+"&t_edate="+t_edate,
			url:"ad_data.php?call=task_list",
			success: function(msg){
				var msga = msg.split("pagination_part");
				$("#ad_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});		
	}

function editbtn(id){ 
	window.location = "task_create.php?id="+id;
}

function deletebtn(id){
	if(requ && requ.readyState != 4){
		requ.abort();
	}
	requ = $.ajax({
		type:"POST",
		data:"id="+id,
		url:"ad_data.php?call=task_delete",
		success: function(html){
			if(html == 1){
				loadData(page,fields,ord_sort);
				alert('Delete Successfully');
			} else {
				alert('Try Again');
			}	
		}
	});
}


	
</script>
 
</body>
</html>