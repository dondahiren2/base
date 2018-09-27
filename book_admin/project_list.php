<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="dashboard.php">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Project List</a>
		</li>
	</ul>	
</div>
<aside class="right-side">
	<section class="content-header">
		<h3>Project List</h3>
	</section>
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-top:20px;">
					<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
						<div style="float:left;font-size:20px;">Search</div>
						<div style="float:right">
							<input type="submit" class="btn btn-primary"  id="add_proj" value="Add Project" name="add_proj" />
							<!--<input type="submit" class="btn btn-primary"  id="deleteall" value="Delete All" name="deleteall" /> -->
						</div>
					</div>
					<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
						<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Project Title" id="prjtit" name="prjtit"/></div>
						<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Status" id="prjst" name="prjst"/></div>
						<div class="col-md-2">
							<select class="form-control saerchbtn">
								<option>Current Project</option>
								<option>Future Project</option>
								<option>Past Project</option>
							</select>
						</div>
					</div>

				<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
					<div> Total Records : <span id="total_records"></span></div>
					<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
						<thead>
							<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
								<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
								<th style="width:10px">Sr.No.</th>
								<th style="width:100px;text-align:left">Project Category
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="proj_title" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="proj_title" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>	
								<th style="width:100px;text-align:left">Project title
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="proj_title" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="proj_title" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>														
								<th style="width:100px;text-align:left">Project Data
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="proj_data" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="proj_data" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Profile
								</th>
								<th style="width:100px;text-align:left">Status
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="proj_status" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="proj_status" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:70px">Action</th>
							</tr>
						</thead> 
						<tbody id="proj_list"></tbody> 
					</table>
				<div id="order_search_page"></div></div>
				</div>
			</div>
		</div>
	</section>
</aside>
<?php include('footer.php'); ?>
 
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
$(document).ready(function() {
	$(".nav_project_master").addClass('active_head');
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
	$(".chkSelectAll").click(function() { 
			$(".rowsf:checkbox:not(:disabled)").prop("checked", this.checked); 
	}); 
	
	$("#add_proj").click(function(){
		window.location = "project.php"
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
				url:"ad_data.php?call=delete_project",
				success:function(html){ 
					if(html == 1){
						alert("delete all records successfully.");
						window.location = "project_list.php";
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});	

});
loadData(page,fields,ord_sort); 
	function loadData(page,fields,ord_sort){
		var prjtit = document.getElementById("prjtit").value;
		var prjst = document.getElementById("prjst").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"prjtit="+prjtit+"&prjst="+prjst+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"ad_data.php?call=project_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#proj_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(id){ 
	window.location = "project.php?id="+id;
}

function call_dash(id){  
	var site_usl = "<?php echo site_url_dash; ?>";
	window.open(site_usl+'open_dash.php?id='+id+'&type=project');
}

function deletedbtn(id){
	if(requ && requ.readyState != 4){
		requ.abort();
	}
	requ = $.ajax({
		type:"POST",
		data:"id="+id,
		url:"ad_data.php?call=delete_project",
		success: function(html){
			if(html == 1){
				//alert("deleted successfully.");
				window.location = "project_list.php";
			} else {
				window.location = "project_list.php";
			}	
		}
	});
}
	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>