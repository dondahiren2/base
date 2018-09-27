
<?php 
	include("header.php");
	$proj_id = $_SESSION['db_id'];
?>			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Bid List</a>
					</li>
				</ul>
				
			</div>
			
			
				<aside class="right-side">
						<section class="content-header">
							<h3>Bid List</h3>
						</section>
						<input type="hidden" id="ship_add" name="ship_add" value="" />
						<section>
							<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
								<div class="popuptext" id="myPopup">
									<input type="hidden" id="prod_id" name="prod_id" value="">
									<div id="close" style="float:right;margin-right:20px;cursor:pointer;">
										<i class="fa fa-close"></i>
									</div>
									<div style="width:auto;height:auto;">
										<div><h3>Order Details</h3></div>
									</div>
									
									<div class="col-md-6" id="product_det">
										
									</div>
									
									<div class="col-md-6 adddisplay" id="adddisplay" style="display:none;">
										<div id="addlist">
											
										</div>
										<div class="finaddlast">
											<input class="btnenq btn-default-1" type="button" id="addnewadd" value="+ADD NEW ADDRESS">
										</div>

									</div>
									
									<form role="form" id="ngoform" action="user_data.php?call=edit_address" method="post"  enctype="multipart/form-data">
									<div id="editadd" name="editadd" style="display:none;">
									<input type="hidden" id="add_id" name="add_id" value="" />
										<table>
											<tr>
												<td style="padding-left:50px;">Contact Person Name </td>
												<td > : </td>
												<td><input type="text" id="add_title_edit" name="add_title_edit"/></td>
												<td style="padding-left:50px;"> Building No. </td>
												<td> : </td>
												<td><input type="text" id="building_no_edit" name="building_no_edit"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Floor </td>
												<td> : </td>
												<td><input type="text" id="floor_edit" name="floor_edit"/></td>
												<td style="padding-left:50px;"> Unit </td>
												<td> : </td>
												<td><input type="text" id="unit_edit" name="unit_edit"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Address Line1 </td>
												<td> : </td>
												<td><input type="text" id="add1_edit" name="add1_edit"/></td>
												<td style="padding-left:50px;"> Address Line2 </td>
												<td> : </td>
												<td><input type="text" id="add2_edit" name="add2_edit"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Other Reference </td>
												<td> : </td> 
												<td><input type="text" id="oth_ref_edit" name="oth_ref_edit"/></td>
												<td style="padding-left:50px;"> Village </td>
												<td> : </td>
												<td><input type="text" id="village_edit" name="village_edit"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Taluka </td>
												<td> : </td>
												<td><input type="text" id="taluka_edit" name="taluka_edit"/></td>
												<td style="padding-left:50px;"> District </td>
												<td> : </td>
												<td><input type="text" id="dist_edit" name="dist_edit"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Country </td>
												<td> : </td>
												<td><select id="country" name="country_edit" style="width:75%;" onchange="state_nm();"></select></td>
												<td style="padding-left:50px;"> State </td>
												<td> : </td>
												<td><select id="state" name="state_edit" style="width:75%;" onchange="city_nm();"></select></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> City </td>
												<td> : </td>
												<td><Select id="city" name="city_edit" placeholder="" ><input type="hidden" id="citynm" name="citynm" value=""/></select></td>
												<td style="padding-left:50px;"> Pin Code </td>
												<td> : </td> 
												<td><input type="text" id="pin_code_edit" name="pin_code_edit"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Contact No.1 </td>
												<td> : </td>
												<td><input type="text" id="add_contact_edit" name="add_contact_edit"/></td>
												<td style="padding-left:50px;"> Contact No.2 </td>
												<td> : </td>
												<td><input type="text" id="add_contact2_edit" name="add_contact2_edit"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"><input type="submit" id="edit_new_add" name="edit_new_add" value="Save"/></td>
												<td style="padding-left:50px;"><input type="Submit" id="cancle" name="cancle" value="Cancle"/></td>
											</tr>
										</table>
									</div>
									</form>
									
									<form role="form" id="ngoform" action="user_data.php?call=add_address" method="post"  enctype="multipart/form-data">
									<div id="nreadd" name="nreadd" style="display:none;">
										<table>
											<tr>
												<td style="padding-left:50px;">Contact Person Name </td>
												<td > : </td>
												<td><input type="text" id="add_title" name="add_title"/></td>
												<td style="padding-left:50px;"> Building No. </td>
												<td> : </td>
												<td><input type="text" id="building_no" name="building_no"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Floor </td>
												<td> : </td>
												<td><input type="text" id="floor" name="floor"/></td>
												<td style="padding-left:50px;"> Unit </td>
												<td> : </td>
												<td><input type="text" id="unit" name="unit"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Address Line1 </td>
												<td> : </td>
												<td><input type="text" id="add1" name="add1"/></td>
												<td style="padding-left:50px;"> Address Line2 </td>
												<td> : </td>
												<td><input type="text" id="add2" name="add2"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Other Reference </td>
												<td> : </td>
												<td><input type="text" id="oth_ref" name="oth_ref"/></td>
												<td style="padding-left:50px;"> Village </td>
												<td> : </td>
												<td><input type="text" id="village" name="village"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Taluka </td>
												<td> : </td>
												<td><input type="text" id="taluka" name="taluka"/></td>
												<td style="padding-left:50px;"> District </td>
												<td> : </td>
												<td><input type="text" id="dist" name="dist"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Country </td>
												<td> : </td>
												<td><select class="country_work" id="country" name="country" style="width:75%;" onchange="work_state();"></select></td>
												<td style="padding-left:50px;"> State </td>
												<td> : </td>
												<td><select class="state_work" id="state" name="state" style="width:75%;" onchange="city_name();"></select></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> City </td>
												<td> : </td>
												<td><Select class="city_work" id="city_work_1" name="city" placeholder="" ></select></td>
												<td style="padding-left:50px;"> Pin Code </td>
												<td> : </td>
												<td><input type="text" id="pin_code" name="pin_code"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"> Contact No.1 </td>
												<td> : </td>
												<td><input type="text" id="add_contact" name="add_contact"/></td>
												<td style="padding-left:50px;"> Contact No.2 </td>
												<td> : </td>
												<td><input type="text" id="add_contact2" name="add_contact2"/></td>
											</tr>
											<tr>
												<td style="padding-left:50px;"><input type="submit" id="add_new_add" name="add_new_add" value="Save"/></td>
												<td style="padding-left:50px;"><input type="Submit" id="cancle" name="cancle" value="Cancle"/></td>
											</tr>
										</table>
									</div>
									</form>
								</div>
							</div>
						</section>
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
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
													<th style="width:100px;text-align:left">NGO Name</th>
													<th style="width:100px;text-align:left">Volunteer Name</th>
													<th style="width:100px;text-align:left">School Name</th>
												</tr>
											</thead> 
											<tbody id="bid_list"></tbody> 
										</table>
									<div id="order_search_page"></div></div>
									</div>
								</div>
							</div>
						</section>
					</aside>
						
		</div>
	</div>
</div>
<?php include('footer.php'); ?>

<?php //include("js.php"); ?>
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
	
	$("#addnewadd").click(function(){
		$("#nreadd").css("display","block");
		$("#adddisplay").css("display","none");
	});
	
loadData(page,fields,ord_sort);    
	function loadData(page,fields,ord_sort){    
		/* var mast_nm = document.getElementById("mast_nm").value;
		var prm_nm = document.getElementById("prm_nm").value;	
		var sub_nm = document.getElementById("sub_nm").value;
		var brd_nm = document.getElementById("brd_nm").value; 
		var proj_id = document.getElementById("proj_id").value;*/
		var proj_id = "<?php echo $proj_id; ?>;";
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&proj_id="+proj_id,
			url:"user_data.php?call=bid_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				//alert(msga[0]);
				$("#bid_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}
	
});

function edit_add(id){ 
	$("#nreadd").css("display","none");
	$("#adddisplay").css("display","none"); 
	$("#editadd").css("display","block"); 
	document.getElementById('add_id').value = id;
	add_data();
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

function open_order(id,v_id,bid_id,qt_id){
	$("#myPopup").css("display","block");
	$.ajax({
		type:"POST",
		data:"id="+id+"&v_id="+v_id+"&bid_id="+bid_id+"&qt_id="+qt_id,
		url:"user_data.php?call=disp_address",
		success: function(msg){
			//alert(msg);
			var msga = msg.split('~');
			$('#addlist').html(msga[0]);
			$('#product_det').html(msga[1]);
		}
	});
}

function add_data(){
	var add_id = document.getElementById("add_id").value;
	//alert(add_id);
	$.ajax({
		type:"post", 
		data:"add_id="+add_id,
		url:"user_data.php?call=addr_data",        
		success:function(msg){
			//alert(msg);
			var msga = msg.split("~");
			$("#add_title_edit").val(msga[0]);      
			$("#add1_edit").val(msga[1]);
			$("#add2_edit").val(msga[2]);
			$("#building_no_edit").val(msga[3]);
			$("#floor_edit").val(msga[4]);
			$("#unit_edit").val(msga[5]);
			$("#oth_ref_edit").val(msga[6]);
			$("#village_edit").val(msga[7]);
			$("#taluka_edit").val(msga[8]);
			$("#dist_edit").val(msga[9]);
			if(msga[10] != ""){
				$(".city_edit").val(msga[10]);
				$("#citynm").val(msga[10]);
				dbcity();
			}else{
				
			}
			if(msga[11] != ""){
				$(".state_edit").val(msga[11]);
			}else{
				
			}
			if(msga[12] != ""){
				$(".country_edit").val(msga[12]);    
			}else{
				
			}
			$("#pin_code_edit").val(msga[13]);
			$("#add_contact_edit").val(msga[14]);
			$("#add_contact2_edit").val(msga[15]);
		}
	});
}

function dbcity(){
	var citid = document.getElementById('citynm').value;
	//alert(citid);
	$.ajax({
		type:"post",
		data:"citid="+citid, 
		url:"user_data.php?call=db_city",
		success:function(msg){
			//alert(msg);
			$(".city_edit").html(msg);
		}
	});
}

function selected(id,sel_id){
	//alert(sel_id);
	document.getElementById('ship_add').value = id;
	$('#'+sel_id).addClass("selectted_border");
	$('#'+sel_id).append('<span class="addselected"></span>');
}

function send_to_odrder(bid_id){
	//alert("1");
	var det = document.getElementById('ord_det').value;
	var ad_id = document.getElementById('ship_add').value;
	//alert(det);
	$.ajax({
		type:"post",
		data:"bid_id="+bid_id+"&det="+det+"&ad_id="+ad_id, 
		url:"user_data.php?call=add_to_order",
		success:function(msg){
			//alert(msg);
			if(msg == 1){
				alert("Your Order Confirm Succsessfully");
				location.reload();
			}else{
				alert("Your Order Not Confirm Succsessfully");
				location.reload();
			}
		}
	});
}

</script>