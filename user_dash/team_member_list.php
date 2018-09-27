<?php 
	include("header.php");
?>
			<!-- BEGIN PAGE HEADER-->
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="admin_user_list">Team Members</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Admin User List</a>
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
							<div class="col-md-2 paddingRight">
								<input type="text" class="form-control saerchbtn" placeholder="First Name" id="fnm" />
							</div>
							<div class="col-md-2 paddingRight">
								<input type="text" class="form-control saerchbtn" placeholder="Last Name" id="lnm" />
							</div>
							<div class="col-md-4 paddingRight">
								<input type="text" class="form-control saerchbtn" placeholder="Email" id="email" />
							</div>
							<div class="col-md-2 paddingRight">
								<select class="form-control" id="ad_work_type" name='ad_work_type'>
									<option value="">Designation</option>
									<?php 
										mysqli_set_charset($con, 'utf8');
										$spre = $con->query("select at_title from admin_type where at_action = 1 ");
										if(mysqli_num_rows($spre) > 0){
										   while($r1 = mysqli_fetch_array($spre)){
											?>
												<option value="<?php echo $r1['at_title']?>" ><?php echo $r1['at_title']?></option>
											<?php
										   }
										}
									?>
								</select>
							</div>
							<div class="col-md-2">
								<select class="form-control" id="typ" name='typ'>
									<option value="">User Role Type</option>
									<?php 
										mysqli_set_charset($con, 'utf8');
										$spre = $con->query("select ut_title from user_type where ut_action = 1 ");
										if(mysqli_num_rows($spre) > 0){
										   while($r1 = mysqli_fetch_array($spre)){
											?>
												<option value="<?php echo $r1['ut_title']?>" ><?php echo $r1['ut_title']?></option>
											<?php
										   }
										}
									?>
								</select>
							</div>
							<div class="col-md-2 paddingRight">
								<select class="form-control" id="ad_display" name='ad_display'>
									<option value="" >Show On Website</option>
									<option value="1">Yes</option>
									<option value="0">No</option>
								</select>
							</div>
							<div class="col-md-2 paddingRight">
								<select class="form-control" id="ad_active" name='ad_active'>
									<option value="" >Status</option>
									<option value="0">Pending</option>
									<option value="1">Activated</option>
									<option value="2">Rejected</option>
								</select>
							</div>
							<div class="col-md-3">
								<input type="submit" class="btn btn-success" id="search_data" value="Search" />
								<input type="submit" class="btn btn-primary" id="add_admin_user" value="Add Members" />
							</div>
						</div>

					<div class="col-md-12" style="padding: 0px;margin-top: 30px;overflow-x:auto">
						<div> Total Records : <span id="total_records"></span></div>
						<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
							<thead>
								<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
									<th style="width:50px;text-align:left">Sr.No.</th>
									<th style="width:125px;text-align:left">Name</th>
									<th style="width:125px;text-align:left">Email</th>
									<th style="width:100px;text-align:left">TAL ID</th>
									<th style="width:100px;text-align:left">Password</th>
									<th style="width:115px;text-align:left">Designation</th>
									<th style="width:115px;text-align:left">User Role</th>
									<th style="width:100px;text-align:left">Profile</th>
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
 
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
$(document).ready(function() {
	$(".nav_admin_user_list").addClass('active_head');		
		
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
						loadData(page,fields,ord_sort);
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});
	
	$("#add_admin_user").click(function() { 
		window.location = "<?php echo $user_url ?>team_member";
	});
});

	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var f_name = document.getElementById("fnm").value;
		var l_name = document.getElementById("lnm").value;
		var email = document.getElementById("email").value;
		var type = document.getElementById("typ").value;
		var ad_work_type = document.getElementById("ad_work_type").value;
		var ad_display = document.getElementById("ad_display").value;
		var ad_active = document.getElementById("ad_active").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"f_name="+f_name+"&l_name="+l_name+"&email="+email+"&type="+type+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&ad_work_type="+ad_work_type+"&ad_display="+ad_display+"&ad_active="+ad_active,
			url:"<?php echo $admin_url ?>ad_data.php?call=ad_list",
			success: function(msg){
				var msga = msg.split("pagination_part");
				$("#ad_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});		
	}

function editbtn(id){ 
	window.location = "<?php echo $user_url ?>team_member/"+id;
}

function deletebtn(id){
	if(requ && requ.readyState != 4){
		requ.abort();
	}
	requ = $.ajax({
		type:"POST",
		data:"id="+id,
		url:"ad_data.php?call=ad_delete",
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