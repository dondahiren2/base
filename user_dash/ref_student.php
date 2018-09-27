<?php 
	include("header.php");
	$v_id = $_SESSION['vol_db_id'];
?>

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
										</div>
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="col-md-2">
												<datalist class="form-control" id="studs" name="studs" style="display:none;">
												</datalist>
												<input type="text" list="studs" class="form-control saerchbtn" placeholder="Student Name" id="studnm" name="studnm"/>
											</div>
											<div class="col-md-2">
												<datalist class="form-control" id="emailid" name="emailid" style="display:none;">
												</datalist>
												<input type="text" list="emailid" class="form-control saerchbtn" placeholder="Email" id="email" name="email"/>
											</div>
											<div class="col-md-2">
												<select class="form-control saerchbtn" id="sclnm" name="sclnm"></select>
											</div>
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Class" id="cls" name="cls"/></div>
											<div class="col-md-2"></div>
											<div class="col-md-2">
												<input type="button" class="form-control saerchbtn" value="Export To Excel" id="cls" name="cls" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="gotoexcel();" />
											</div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;">
										<input type="hidden" id="vl_id" name="vl_id" value="<?php echo $v_id; ?>" />
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">Student <br/> Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_fnm" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_fnm" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>	
													<th style="width:100px;text-align:left">School Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Email Id
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_email" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_email" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Mobile <br/>No
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_contact" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_contact" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Aadhar <br/> No
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_adhar_no" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_adhar_no" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left"> Class
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_class" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_class" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:70px">Medium</th>
													<th style="width:70px">Action</th>
												</tr>
											</thead> 
											<tbody id="sudent_list"></tbody> 
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
	
	schl_name1();
	stud_name();
	emailid();
	
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
		var studnm = document.getElementById("studnm").value;
		var scl_nm = document.getElementById("sclnm").value;
		var email = document.getElementById("email").value;
		var cls = document.getElementById("cls").value;
		var vl_id = document.getElementById("vl_id").value;
		//alert(vl_id);
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"studnm="+studnm+"&scl_nm="+scl_nm+"&email="+email+"&vl_id="+vl_id+"&cls="+cls+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"user_data.php?call=sudent_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#sudent_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(id){ 
	window.location = "student_edit.php?id="+id;
}

function gotoexcel(){ 
		var studnm = document.getElementById("studnm").value;
		var scl_nm = document.getElementById("sclnm").value;
		var email = document.getElementById("email").value;
		var cls = document.getElementById("cls").value;
		var vl_id = document.getElementById("vl_id").value;
		window.open("../demo_excel_new.php?studnm="+studnm+"&scl_nm="+scl_nm+"&email="+email+"&vl_id="+vl_id+"&cls="+cls+"&type=volunteer");
	//window.location = "../demo_excel_new.php";
}

function stud_name(){
	//alert(stat_no);
	var vl_id = document.getElementById("vl_id").value;
	$.ajax({
		type:"post",
		data:"vl_id="+vl_id, 
		url:"user_data.php?call=stud_nm_vol",
		success:function(msg){
			//alert(msg);
			$("#studs").html(msg);
		}
	});
}

function emailid(){
	//alert(stat_no);
	var vl_id = document.getElementById("vl_id").value;
	$.ajax({
		type:"post",
		data:"vl_id="+vl_id, 
		url:"user_data.php?call=email_stud_vol",
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