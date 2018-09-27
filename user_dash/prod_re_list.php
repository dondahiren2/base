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
		
		<?php include('top_naigation.php'); 
		?>
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
						<a href="#">Student List</a>
					</li>
				</ul>
			</div>
					<aside class="right-side">
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
										<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
											<div style="float:left;font-size:20px;">Search</div>
											<div style="float:right">
												<!--<input type="submit" class="btn btn-primary" id="add_prod" value="Add Product" name="add_prod" />-->
												<!--<input type="submit" class="btn btn-primary"  id="deleteall" value="Delete All" name="deleteall" /> -->
											</div>
										</div>
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="col-md-1">NGO List</div>
											<div class="col-md-2">
												<select class="form-control" id="ngo_list" name="ngo_list" onchange="vol_name_req(<?php echo $proj_id; ?>);,schl_name1_req(<?php echo $proj_id; ?>);"></select>
											</div>
											<div class="col-md-1">Volunteer List</div>
											<div class="col-md-2">
												<select class="form-control" id="vol_list" name="vol_list" onchange="schl_name1_req(<?php echo $proj_id; ?>);"></select>
											</div>
											<div class="col-md-1">School List</div>
											<div class="col-md-2">
													<select class="form-control" id="schl_list" name="schl_list"></select>
											</div>
										</div>
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="col-md-1">Report type</div>
											<div class="col-md-2">
													<select class="form-control" id="r_type" name="r_type">
													<option>Short</option>
													<option>Detailed</option>
													</select>
											</div>
											<div class="col-md-1"></div>
											<div class="col-md-2">
												<input type="button" class="form-control saerchbtn" value="Export To Excel" id="cls" name="cls" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="gotoexcel();" />
											</div>
										</div> 
										
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="popuptext" id="myPopup">
												<input type="hidden" id="prod_id" name="prod_id" value="">
												<div id="close" style="float:right;margin-right:20px;cursor:pointer;">
													<i class="fa fa-close"></i>
												</div>
												<div style="width:auto;height:auto;">
													<div><h3>Quatation</h3></div>
												</div>
												<div class="row">
													<div class="col-md-2 col-sm-2 col-xs-12" style="text-align:left;">
														<p style="margin-top:18px;">Vendor Name :</p>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-12" style="text-align:left;">
														<div class="form-group" id="ven_list"> 
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 col-sm-2 col-xs-12" style="text-align:left;">
														<p style="margin-top:18px;">Message :</p>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-12">
														<div class="form-group"> 
															<textarea class="form-control" placeholder="Message" id="msg" name="msg"></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 col-sm-2 col-xs-12" style="text-align:left;">
														<p style="margin-top:7px;">End Date :</p>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-12">
														<div class="form-group"> 
															<input placeholder="End Date" class="textbox-n form-control" type="text" onfocus="(this.type='date')"  id="end_date" name="end_date" onfocusout="(this.type='text')">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 col-sm-2 col-xs-12" style="text-align:left;">
														<p style="margin-top:7px;">Quantity :</p>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-12">
														<div class="form-group"> 
															<input type="text" class="form-control" placeholder="Quantity" id="requirement" name="requirement" readonly />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 col-sm-2 col-xs-12" style="text-align:left;">
														<p style="margin-top:7px;">Extra Quantity :</p>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-12">
														<div class="form-group"> 
															<input type="text" class="form-control" placeholder="Quantity" id="qty" name="qty" onkeyup="gettotal();"/>
														</div>
													</div><div class="col-md-2 col-sm-2 col-xs-12" style="text-align:left;">
														<p style="margin-top:7px;">Quantity :</p>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-12">
														<div class="form-group"> 
															<input type="text" class="form-control" placeholder="Quantity" id="tot_qty" name="tot_qty" readonly />
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-2 col-sm-2 col-xs-12" style="text-align:left;">
														<div style="float:left;margin-right:10px;margin-top:2px;">
															<p>SMS :</p>
														</div>
														<div class="form-group" style="float:left;"> 
															<input type="checkbox" id="option1" value="sms" name="sendoption[]" class="checkbox" title="Send Through SMS">
														</div>
													</div>
													<div class="col-md-2 col-sm-2 col-xs-12">
														<div style="float:left;margin-right:10px;margin-top:2px;">
															<p>Mail :</p>
														</div>
														<div class="form-group" style="float:left;"> 
															<input type="checkbox" id="option2" name="sendoption[]" class="checkbox" value="mail" title="Send Through Mail">
														</div>
													</div>
												</div>
												<div class="form-actions noborder">
													<input type="submit" class="btn blue" id="edit_ven" name="edit_ven" value="Submit" onclick="addtoquate();"/>
													<input type="clear" class="btn default" value="Cancel"/>
												</div>
											</div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;">
										<input type="hidden" id="proj_id" name="proj_id" value="<?php echo $proj_id; ?>">
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
													<th style="width:100px">Image</th>
													<th style="width:100px;text-align:left">Estimated <br/>Price
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="mc_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="mc_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Logistic <br/>Price
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="pc_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="pc_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Management <br/>Price
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="sub_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="sub_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th>Total</th>
													<th>Requirement</th>
													<th>Total Amount</th>
													<th>Add to Quatation</th>
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
	var proj_id = '<?php echo $proj_id; ?>';
	ngo_name_req(proj_id);
	vol_name_req(proj_id);
	schl_name1_req(proj_id);
	ven_name();
	
	$(".saerchbtn").keypress(function (e) { 
		if(e.keyCode == 13){
			loadData(page,fields,ord_sort);
		}
	}); 
	$('select').on('change', function() {
		fields = this.value;
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
	
	$("#add_prod").click(function(){
		window.location = "proj_product.php"
	});

	$("#close").click(function(){
		$("#myPopup").css("display","none");
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
		var ngo_nm = document.getElementById("ngo_list").value;
		var vol_nm = document.getElementById("vol_list").value;
		var schl_nm = document.getElementById("schl_list").value;
		var proj_id = "<?php  echo $proj_id; ?>";
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"ngo_nm="+ngo_nm+"&vol_nm="+vol_nm+"&schl_nm="+schl_nm+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&proj_id="+proj_id,
			url:"user_data.php?call=prod_req_list",
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
	window.location = "proj_product.php?p_id="+id;
}

function deletedbtn(id){
	if(requ && requ.readyState != 4){
		requ.abort();
	}
	requ = $.ajax({
		type:"POST",
		data:"id="+id,
		url:"user_data.php?call=delete_product",
		success: function(html){
			if(html == 1){
				//alert("deleted successfully.");
				window.location = "product_list.php";
			} else {
			}	
		}
	});
}

function open_quatation(id,req){
	//alert("1");
	$("#myPopup").css("display","block");
	document.getElementById('prod_id').value = id;
	document.getElementById('requirement').value = req;
	//var v_id = document.getElementById("v_id").value;
	/* $.ajax({
		type:"post",
		data:"id="+id, 
		url:"user_data.php?call=add_ven_quatation",
		success:function(msg){ 
			//$("#quat_cont").html(msg);
		}	
	});  */
}

function addtoquate(){
	//alert("1");
	var requ = document.getElementById("requirement").value;
	var end_date = document.getElementById("end_date").value;  
	var id = document.getElementById("prod_id").value;
	var msg = document.getElementById("msg").value;
	var qty = document.getElementById("qty").value;
	var ngo_id = document.getElementById("ngo_list").value;
	var vol_id = document.getElementById("vol_list").value;
	var school_id = document.getElementById("schl_list").value;
	
	var ven_listss=[];
	$(".ven_listss").each(function(){
		if(this.checked == true){  
			//alert("if");
			ven_listss.push(this.value); 
		}
	});
	
	$.ajax({
		type:"post",
		data:"id="+id+"&msg="+msg+"&qty="+qty+"&vendor_list="+ven_listss+"&end_date="+end_date+"&requ="+requ+"&ngo_id="+ngo_id+"&vol_id="+vol_id+"&school_id="+school_id, 
		url:"user_data.php?call=add_ven_quatation",
		success:function(msg){
			//alert(msg);
			$("#tot_qty").html(msg);
			location.reload();
		}	
	});
}

function ven_name(){
	//salert("1");
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"user_data.php?call=ven_list",
		success:function(msg){
			//alert(msg);
			$("#ven_list").html(msg);
		}
	});
}

function gotoexcel(){ 
	//alert("1");
	var id = [];	 
	$(".rowsf:input:checked").each(function(){
		id.push(this.value);
	}); 
	var ngonm = document.getElementById("ngo_list").value;
	var volnm = document.getElementById("vol_list").value;
	var schlnm = document.getElementById("schl_list").value;
	var projnm = document.getElementById("proj_id").value;
	var r_type = document.getElementById("r_type").value;
	//alert(ngo_id);
	window.open("../demo_excel_product.php?ngonm="+ngonm+"&volnm="+volnm+"&schlnm="+schlnm+"&projnm="+projnm+"&id="+id+"&type=project"+"&r_type="+r_type);
	//window.location = "../demo_excel_new.php";
}
	

function ngo_name_req(proj_id){
	//alert(stat_no);
	$.ajax({
		type:"post",
		data:"proj_id="+proj_id, 
		url:"user_data.php?call=ngo_nm_req",
		success:function(msg){
			//alert(msg);
			
			$("#ngo_list").html(msg);
		}
	});
}

function vol_name_req(proj_id){
	//alert(stat_no);
	var ngo_id = document.getElementById("ngo_list").value;
	$.ajax({
		type:"post",
		data:"ngo_id="+ngo_id+"&proj_id="+proj_id, 
		url:"user_data.php?call=vol_nm_req",
		success:function(msg){
			//alert(msg);
			
			$("#vol_list").html(msg);
		}
	});
}

function schl_name1_req(proj_id){
	//alert(stat_no);
	var vol_id = document.getElementById('vol_list').value;
	var ngo_id = document.getElementById('ngo_list').value;
	$.ajax({
		type:"post",
		data:"proj_id="+proj_id+"&vol_id="+vol_id+"&ngo_id="+ngo_id, 
		url:"user_data.php?call=schl_nm1_req",
		success:function(msg){
			
			$("#schl_list").html(msg);
		}
	});
}	

function gettotal(){
	//alert("1");
	var requir = document.getElementById('requirement').value;
	var extra = document.getElementById('qty').value;
	var total = 0;

	//total = ((requir) + (extra));
	total = (parseFloat(requir) + parseFloat(extra));
	document.getElementById('tot_qty').value = total;
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>