<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include('../config.php');  
	  
	if(isset($_SESSION['scl_db_id'])){
		$schl_id = $_SESSION['scl_db_id'];
	}else{
		$schl_id = "";
	}
?>
<body class="page-header-fixed page-quick-sidebar-over-content ">

<div class="page-header navbar navbar-fixed-top">

	<div class="page-header-inner">

			<?php include('top_naigation.php'); ?>
	</div>
</div>
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
						<a href="#">Order List</a>
					</li>
				</ul>
				
			</div>
					<aside class="right-side">
						<section class="content-header">
							<h3>Order List</h3>
						</section>
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
										
									<input type="hidden" id="schl_id" name="schl_id" value="<?php echo $schl_id; ?>" />
									<div style="padding: 15px;margin-top: 30px;">
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">Product Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="p_title" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="p_title" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>	
													<th style="width:100px">Image</th>
													<th style="width:100px">Quantity</th>
													<th style="width:100px">Order No</th>
													<th style="width:100px">NGO Name</th>
													<th style="width:100px">Volunteer Name</th>
													<th style="width:100px">Amount</th>
													<th style="width:100px">Order Status</th>
													<th style="width:100px">Shipping Status</th>
												</tr>
											</thead> 
											<tbody id="order_sh_list"></tbody> 
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
	
	$("#close").click(function(){
		$("#myPopup").css("display","none");
	});
		
loadData(page,fields,ord_sort);    
	function loadData(page,fields,ord_sort){  
		var schl_id = document.getElementById("schl_id").value;
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"page="+page+"&schl_id="+schl_id+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"user_data.php?call=school_order",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				//alert(msga[0]);
				$("#order_sh_list").html(msga[0]);
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
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>