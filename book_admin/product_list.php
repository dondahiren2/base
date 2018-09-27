<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="product_service_master">Product & Service Master</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Product List</a>
		</li>
	</ul>
</div>
<aside class="right-side">
	<section class="content-header">
		<h3>Product List</h3>
	</section>
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-top:20px;">
					<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
						<div style="float:left;font-size:20px;">Search</div>
						<div style="float:right">
							<input type="submit" class="btn btn-primary"  id="add_prod" value="Add Product" name="add_prod" />
							<!--<input type="submit" class="btn btn-primary"  id="deleteall" value="Delete All" name="deleteall" /> -->
						</div>
					</div>
					<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
						<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Master Category Name" id="mast_nm" name="mast_nm"/></div>
						<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Prime Category Name" id="prm_nm" name="prm_nm"/></div>
						<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Sub Category Name" id="sub_nm" name="sub_nm"/></div>
						<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Brand Name" id="brd_nm" name="brd_nm"/></div>
					</div> 

				<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
					<div> Total Records : <span id="total_records"></span></div>
					<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
						<thead>
							<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
								<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
								<th style="width:10px">Sr.No.</th>
								<th style="width:100px;text-align:left">Title
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="p_title" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="p_title" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Master <br/>Category<br/> Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="mc_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="mc_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Prime <br/>Category <br/>Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="pc_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="pc_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Sub <br/>Category <br/>Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="sub_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="sub_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Brand<br/> Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="b_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="b_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Project <br/> Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="proj_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="proj_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>	
								<th style="width:100px">Image</th>
								<th style="width:70px">Action</th>
							</tr>
						</thead> 
						<tbody id="product_list"></tbody> 
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
	$(".nav_product_master").addClass('active_head');
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
		window.location = "product.php"
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
				url:"ad_data.php?call=delete_product",
				success:function(html){ 
					if(html == 1){
						alert("delete all records successfully.");
						window.location = "product_list.php";
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});	
		
loadData(page,fields,ord_sort);    
	function loadData(page,fields,ord_sort){    
		var mast_nm = document.getElementById("mast_nm").value;
		var prm_nm = document.getElementById("prm_nm").value;
		var sub_nm = document.getElementById("sub_nm").value;
		var brd_nm = document.getElementById("brd_nm").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"sub_nm="+sub_nm+"&mast_nm="+mast_nm+"&prm_nm="+prm_nm+"&brd_nm="+brd_nm+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"ad_data.php?call=product_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				//alert(msga[0]);
				$("#product_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}
	
});

function editbtn(id){ 
	window.location = "product.php?p_id="+id;
}

function deletedbtn(id){
	if(requ && requ.readyState != 4){
		requ.abort();
	}
	requ = $.ajax({
		type:"POST",
		data:"id="+id,
		url:"ad_data.php?call=delete_product",
		success: function(html){
			if(html == 1){
				//alert("deleted successfully.");
				window.location = "product_list.php";
			} else {
			}	
		}
	});
}



	
</script>
</body>
</html>