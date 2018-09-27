<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include('../config.php');
	  if($_SESSION['uname'] == ""){
		header('location:index.php');
	  }
?>
<body class="page-header-fixed page-quick-sidebar-over-content ">
		<?php include('top_naigation.php'); ?>

<div class="clearfix">
</div>
<div class="page-container">
	<?php include("menu.php"); ?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<?php include('theme_panel.php'); ?>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Project Category List</a>
					</li>
				</ul>
				
			</div>
					<aside class="right-side">
						<section class="content-header">
							<h3>Project Category List</h3>
						</section>
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
										<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
											<div style="float:left;font-size:20px;">Search</div>
											<div style="float:right">
												<input type="submit" class="btn btn-primary"  id="add_prod" value="Add Project Category" name="add_prod" />
												<!--<input type="submit" class="btn btn-primary"  id="deleteall" value="Delete All" name="deleteall" /> -->
											</div>
										</div>
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Name" id="cat_nm" name="cat_nm"/></div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">Category Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="mc_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="mc_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>			
													<th style="width:70px">Action</th>
												</tr>
											</thead> 
											<tbody id="master_list"></tbody> 
										</table>
									<div id="order_search_page"></div></div>
									</div>
								</div>
							</div>
						</section>
					</aside>
						
		</div>
	</div>
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<?php include('quick_sidebar.php'); ?>
</div>
<?php include('footer.php'); ?>

<script>
/*jQuery(document).ready(function() {   
   // initiate layout and plugins
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features
});*/
</script>
<?php include("js.php"); ?>
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
$(document).ready(function() {
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
	$("#add_prod").click(function(){
		window.location = "project_cate.php"
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
				url:"ad_data.php?call=delete_proj_cate",
				success:function(html){ 
					if(html == 1){
						//alert("delete all records successfully.");
						window.location = "project_cate_list.php";
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});	
		
loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var cat_nm = document.getElementById("cat_nm").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"cat_nm="+cat_nm+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"ad_data.php?call=proj_cate_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#master_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}
	
});

function editbtn(id){ 
	window.location = "project_cate.php?pc_id="+id;
}

function deletedbtn(id){
	if(requ && requ.readyState != 4){
		requ.abort();
	}
	requ = $.ajax({
		type:"POST",
		data:"id="+id,
		url:"ad_data.php?call=delete_proj_cate",
		success: function(html){
			if(html == 1){
				//alert("deleted successfully.");
				window.location = "project_cate_list.php";
			} else {
			}	
		}
	});
}



	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>