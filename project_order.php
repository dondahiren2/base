<!DOCTYPE html>

<html lang="en">
<?php 
	include("header.php");
	include("../config.php");
	if($_SESSION['db_id'] == ''){
		//session_destroy();
		//echo "<script>window.location = 'https://touchalife.foundation/'</script>";
	}else{
		$proj_id = $_SESSION['db_id'];
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
									<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
											<input type="hidden" id="v_id" id="v_id" value="<?php echo $ven_id; ?>" />
											<div class="popuptext" id="myPopup">
												<div id="close" style="float:right;margin-right:20px;cursor:pointer;">
													<i class="fa fa-close"></i>
												</div>
												<div style="width:auto;height:auto;">
													<div><h3>Update Order Status</h3></div>
												</div>
												<div id="change_ord">
													
												</div>
											</div>
										</div>
									
										<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
											<input type="hidden" id="proj_id" id="proj_id" value="<?php echo $proj_id; ?>" />
		
									<div style="padding: 15px;margin-top: 30px">
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px">Sr. No.</th>
													<th style="width:100px;text-align:left">Product Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="p_title" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="p_title" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>	
													<th style="width:100px">Image</th>
													<th style="width:100px;text-align:left">Qty</th>
													<th style="width:100px;text-align:left">Amount</th>
													<th style="width:100px;text-align:left">Ship Charge</th>
													<th style="width:100px;text-align:left">Tax</th>
													<th style="width:100px;text-align:left">Total</th>
													<th style="width:100px;text-align:left">Ship Address</th>
													<th style="width:100px;text-align:left">Order Status</th>
													<th style="width:100px;text-align:left">Ship Detail</th>
													<th style="width:100px;text-align:left">Ship Status</th>
													<th style="width:100px;text-align:left">Vendor Name</th>
												</tr>
											</thead> 
											<tbody id="roj_ord_list"></tbody> 
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

<?php include("js.php"); ?>

<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";

$(document).ready(function() {
	
	country_name();
	ind_state();
	maha_cities();
	work_country();
	work_ind_state();
	
	
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
	
	$("#close").click(function(){
		$("#myPopup").css("display","none");
	});
	
loadData(page,fields,ord_sort);    
	function loadData(page,fields,ord_sort){    
		/* var mast_nm = document.getElementById("mast_nm").value;
		var prm_nm = document.getElementById("prm_nm").value;	
		var sub_nm = document.getElementById("sub_nm").value;
		var brd_nm = document.getElementById("brd_nm").value; */
		var proj_id = document.getElementById("proj_id").value;
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&proj_id="+proj_id,
			url:"user_data.php?call=project_orders",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				//alert(msga[0]);
				$("#roj_ord_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}
	
});

function update_order(id){
	$("#myPopup").css("display","block");
	//var ship_id = document.getElementById('ship_id').value;
	$.ajax({
		type:"post",
		data:"id="+id, 
		url:"user_data.php?call=disp_order",
		success:function(msg){ 
			$("#change_ord").html(msg);
		}	
	});
}

function edit_order(id){
	var det = document.getElementById('ship_detils').text;
	alert(det);
	var shp_id = document.getElementById('shipnm').value;
	$.ajax({
		type:"POST",
		data:"id="+id+"&det="+det+"&shp_id="+shp_id,
		url:"user_data.php?call=update_order",
		success: function(msg){
			alert(msg);
		}
	});
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>