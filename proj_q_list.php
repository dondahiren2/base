<!DOCTYPE html>

<html lang="en">
<?php 
	include("header.php");
	include("../config.php");
	$proj_id = $_SESSION['db_id'];
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
						<a href="#">Quatation List</a>
					</li>
				</ul>
				
			</div>
					<aside class="right-side">
						<section class="content-header">
							<h3>Quatation List</h3>
						</section>
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
										<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
											<input type="hidden" id="proj_id" id="proj_id" value="<?php echo $proj_id; ?>" />
											<div class="popuptext" id="myPopup">
												<div id="close" style="float:right;margin-right:20px;cursor:pointer;">
													<i class="fa fa-close"></i>
												</div>
												<div style="width:auto;height:auto;">
													<div><h3>Quatation</h3></div>
												</div>
												<div>
													<table style="width:92%;margin:20px;" class="table table-striped table-vcenter">
														<thead>
															<tr>
																<th style="width:60%;border-top:0px;">Name</th>
																<th style="width:20%;border-top:0px;">Quantity</th>
																<th style="width:20%;border-top:0px;">Price</th>
																<th style="width:20%;border-top:0px;">Shipping Charge</th>
																<th style="width:20%;border-top:0px;">Tax</th>
															</tr>
														</thead>
														<tbody id="quat_cont"></tbody>
													</table>
												</div>
											</div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">Title
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="p_title" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="p_title" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Project Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="proj_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="proj_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>	
													<th style="width:100px">Image</th>
													<th style="width:100px;text-align:left">Qty</th>
													<th style="width:100px;text-align:left">NGO<br/> Name</th>
													<th style="width:100px;text-align:left">Volunteer <br/>Name</th>
													<th style="width:100px;text-align:left">School <br/>Name</th>
													<th style="width:10px">Quatation</th>
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
			url:"user_data.php?call=proj_product_list",
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

function changeisadmin(val,id){
	$.ajax({
		type:"POST",
		data:"val="+val+"&id="+id,
		url:"user_data.php?call=update_quat_select",
		success: function(msg){
			alert(msg);
		}
	});
}

/* function open_quatation(id){
	//alert("1");
	$("#myPopup").css("display","block");
	var v_id = document.getElementById("v_id").value;
	$.ajax({
		type:"post",
		data:"id="+id+"&v_id="+v_id, 
		url:"user_data.php?call=add_quatation",
		success:function(msg){ 
			$("#quat_cont").html(msg);
		}	
	});
}

function totalamount(qty,p_id){
	//alert(qty);
	var price_id = document.getElementById('price').value;
	var charge = document.getElementById('charge').value;
	var v_id = document.getElementById('v_id').value;
	var qt_det = document.getElementById('qt_det').value;
	var tax = document.getElementById('tax').value;
	$.ajax({
		type:"post",
		data:"price_id="+price_id+"&qty="+qty+"&charge="+charge+"&v_id="+v_id+"&p_id="+p_id+"&qt_det="+qt_det+"&tax="+tax, 
		url:"user_data.php?call=sum_total",
		success:function(msg){ 
			//alert(msg);
			$("#total").html(msg);
		}	
	});
} */
function gettotal(){
	var price_id = document.getElementById('price').value;
	var charge = document.getElementById('charge').value;
	var qty = document.getElementById('q_qty').value;
	var tax = document.getElementById('tax').value;
	var total = 0;

	total = (parseFloat(qty) * parseFloat(price_id)) + (parseFloat(charge) + parseFloat(tax));
	$("#total").html(total);
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>