
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
						<a href="#">School List</a>
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
												<select class="form-control saerchbtn" id="sclnm" name="sclnm"></select>
											</div>
											<div class="col-md-2">
												<select class="form-control saerchbtn" id="vl_nm" name="vl_nm"></select>
											</div>
											<div class="col-md-2">
												<datalist class="form-control" id="emailid" name="emailid" style="display:none;">
												</datalist>
												<input type="text" list="emailid" class="form-control saerchbtn" placeholder="Email" id="email" name="email"/>
											</div>
											<div class="col-md-2"></div>
											<div class="col-md-2"></div>
											<div class="col-md-2">
												<input type="button" class="form-control saerchbtn" value="Export To Excel" id="cls" name="cls" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="gotoexcel();" />
											</div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;" class="table-responsive">
										<div> Total Records : <span id="total_records"></span></div>
										<input type="hidden" id="ngo_id" name="ngo_id" value="<?php echo $ngo_id;?>" />
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);width:500%;">
													<th style="width:10px;"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">Incharge Person</th>	
													<th style="width:100px;text-align:left;">School Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_nm" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_nm" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>														
													<th style="width:100px;text-align:left">Address
													</th>
													<th style="width:100px;text-align:left">Village
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_village" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_village" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Taluka
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_taluka" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_taluka" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">District
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_district" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_district" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">State
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_state" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_state" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Zip Code
													</th>
													<th style="width:100px;text-align:left">No Students
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_no_stud" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_no_stud" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Area Code</th>
													<th style="width:100px;text-align:left">Telephone No
													</th>
													<th style="width:100px;text-align:left">Principal Name</th>
													<th style="width:100px;text-align:left">Principal No
													</th>
													<th style="width:100px;text-align:left">Email
													</th>
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
	emailid();
	vol_name();
	schl_name1();
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
		
});
loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var sclnm = document.getElementById("sclnm").value;
		var email = document.getElementById("email").value;
		var vl_nm = document.getElementById("vl_nm").value;
		var ngo_id = document.getElementById("ngo_id").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"sclnm="+sclnm+"&email="+email+"&vl_nm="+vl_nm+"&ngo_id="+ngo_id+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"user_data.php?call=ngo_school_list",
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
	window.location = "school_edit.php?id="+id;
}

function emailid(){
	//alert(stat_no);
	var ngo_id = document.getElementById("ngo_id").value;
	$.ajax({
		type:"post",
		data:"ngo_id="+ngo_id, 
		url:"user_data.php?call=email_school",
		success:function(msg){
			//alert(msg);
			$("#emailid").html(msg);
		}
	});
}

function gotoexcel(){ 
	//alert("1");
	var sclnm = document.getElementById("sclnm").value;
	var email = document.getElementById("email").value;
	var vl_nm = document.getElementById("vl_nm").value;
	var ngo_id = document.getElementById("ngo_id").value;
	//alert(ngo_id);
	window.open("../demo_excel_school.php?sclnm="+sclnm+"&email="+email+"&vl_nm="+vl_nm+"&ngo_id="+ngo_id+"&type=ngo");
	//window.location = "../demo_excel_new.php";
}
	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>