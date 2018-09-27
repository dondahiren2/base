<?php include("header.php");
	  $ngo_id = $_SESSION['ngo_db_id'];
?>

			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Volunteer List</a>
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
										</div>
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="col-md-2">
												<datalist class="form-control" id="sel_vl" name="sel_vl" style="display:none;">
												</datalist>
												<input type="text" list="sel_vl" class="form-control saerchbtn" placeholder="Volunteer Name" id="fnm" name="fnm"/>
											</div>
											<div class="col-md-2">
												<datalist class="form-control" id="emailid" name="emailid" style="display:none;">
												</datalist>
												<input type="text" list="emailid" class="form-control saerchbtn" placeholder="Email" id="email" name="email"/>
											</div>
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Blood Group" id="bld_grp" name="bld_grp"/></div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
										<div> Total Records : <span id="total_records"></span></div>
										<input type="hidden" id="ngo_id" name="ngo_id" value="<?php echo $ngo_id;?>" />
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">Volunteer Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_nm" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_nm" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>		
													<th style="width:100px;text-align:left">Email Id
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_email" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_email" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left"> Blood Group
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_no_staff" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_no_staff" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Mobile No
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_no_stud" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_no_stud" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:70px">Is Admin</th>
													<th style="width:70px">Action</th>
												</tr>
											</thead> 
											<tbody id="school_list"></tbody> 
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
	
	vol_name();
	emailid();
	
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
		
});
loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){     
		var fnm = document.getElementById("fnm").value;
		var email = document.getElementById("email").value;
		var bld_grp = document.getElementById("bld_grp").value;
		var ngo_id = document.getElementById("ngo_id").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"fnm="+fnm+"&email="+email+"&bld_grp="+bld_grp+"&ngo_id="+ngo_id+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"user_data.php?call=ngo_volun_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#school_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(id){ 
	window.location = "volun_edit.php?id="+id;
}

function changeisadmin(val,id){
	$.ajax({
		type:"POST",
		data:"val="+val+"&id="+id,
		url:"user_data.php?call=update_is_admin",
		success: function(msg){
			alert(msg);
		}
	});
}

function vol_name(){
	//alert(stat_no);
	var ngo_id = document.getElementById("ngo_id").value;
	$.ajax({
		type:"post",
		data:"ngo_id="+ngo_id, 
		url:"user_data.php?call=vol_nm1",
		success:function(msg){
			//alert(msg);
			$("#sel_vl").html(msg);
		}
	});
}

function emailid(){
	//alert(stat_no);
	var ngo_id = document.getElementById("ngo_id").value;
	$.ajax({
		type:"post",
		data:"ngo_id="+ngo_id, 
		url:"user_data.php?call=email_volun",
		success:function(msg){
			//alert(msg);
			$("#emailid").html(msg);
		}
	});
}
	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>