<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
				<i class="fa fa-home"></i>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="registered_members">Registered Members</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Student List</a>
			</li>
	</ul>			
</div>
<aside class="right-side">
	<section class="content-header">
		<h3>Student List</h3>
	</section>
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" >
					<div class="col-md-12" style="padding: 10px;border: 1px solid #2980b9;border-radius: 10px !important;">
						<div class="col-md-3">
							<div style="float:left;font-size:20px;color: #2980b9;">Upload Student list</div>
						</div>
						<form action="excelupload.php" method="post" enctype="multipart/form-data">
						<div class="col-md-5">
						
						<input type="file" name="files" id="prd_pic" class="inputfile inputfile-6" />
							<label for="prd_pic" class="nospace"><span id="reg_filenm"></span> 
								<strong>Select Excel File</strong>
							</label>
						</div>
						<div class="col-md-2">
							<input type="Submit" class="form-control saerchbtn" value="Import" name="submitexcel" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="" />
						</div>
						</form>
					</div>
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
							<select class="form-control saerchbtn" id="ng_nm" name="ng_nm"></select>
						</div>
						<div class="col-md-2">
							<select class="form-control saerchbtn" id="vl_nm" name="vl_nm"></select>
						</div>
						<div class="col-md-2">
							<select class="form-control saerchbtn" id="scl_nm" name="scl_nm"></select>
						</div>
						<div class="col-md-2" >
							<select class="form-control saerchbtn" id="sel_class" name="sel_class"></select>
						</div>
						<div class="col-md-2" >
							<select class="form-control saerchbtn" id="stud_medium" name="stud_medium"></select>
						</div>

						<div class="col-md-3" style="display:none">
							<datalist class="form-control" id="emailid" name="emailid" style="display:none;">
							</datalist>
							<input type="text" list="emailid" class="form-control saerchbtn" placeholder="Email" id="email" name="email"/>
						</div>
						<div class="col-md-2" style="padding-top: 10px;">
							<input type="button" class="form-control saerchbtn" value="Export To Excel" id="cls" name="cls" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="gotoexcel();" />
						</div>
						<div class="col-md-2" style="padding-top: 10px;">
							<input type="button" class="form-control" value="Export To PDF" name="cls" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="icard_pdf();" />
						</div>
					</div>

				<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
					<div> Total Records : <span id="total_records"></span></div>
					<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
						<thead>
							<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
								<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
								<th style="width:10px">Unique Id</th>
								<th style="width:100px;text-align:left">Student Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="stud_fnm" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="stud_fnm" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">School Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="schl_name" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="schl_name" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>	
								<th style="width:100px;text-align:left">NGO Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="ngo_add_ref" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="ngo_add_ref" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Volunteer Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="vol_add_ref" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="vol_add_ref" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>		
								<th style="width:100px;text-align:left">Medium
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="stud_midium" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="stud_midium" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>													
								<th style="width:100px;text-align:left">Class
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="stud_class" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="stud_class" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Email
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="stud_email" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="stud_email" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:70px">Password</th>
								<th style="width:100px;text-align:left"> Mobile <br/>No
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="stud_contact" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="stud_contact" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Profile
								</th>
								<th style="width:100px;text-align:left">Status
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="stud_status" data-id="asc" aria-hidden="true" style="float: right; position: relative;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="stud_status" data-id="desc"  aria-hidden="true" style="float: right; position: relative; margin-top: 0px;cursor: pointer;"></i>
									</span>
								</th>
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
	$(".nav_registered_members").addClass('active_head');
	ngo_name();
	vol_name();
	stud_name();
	emailid();
	schl_name();
	class_name();
	medium_name();
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
		var ng_nm = document.getElementById("ng_nm").value;
		var email = document.getElementById("email").value;
		var vol_nm = document.getElementById("vl_nm").value;
		var scl_nm = document.getElementById("scl_nm").value;
		var sel_class = document.getElementById("sel_class").value;
		var stud_medium = document.getElementById("stud_medium").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"studnm="+studnm+"&ng_nm="+ng_nm+"&email="+email+"&vol_nm="+vol_nm+"&scl_nm="+scl_nm+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&stud_medium="+stud_medium+"&sel_class="+sel_class,
			url:"ad_data.php?call=sudent_list",
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
	window.location = "more_student.php?id="+id;
}

function call_dash(id){  
	
	var site_usl = "<?php echo site_url_dash; ?>";
	window.open(site_usl+'open_dash.php?id='+id+'&type=student');
}

function gotoexcel(){ 
	//alert("1");
	var studnm = document.getElementById("studnm").value;
	var email = document.getElementById("email").value;
	var schl_nm = document.getElementById("scl_nm").value;
	var vol_nm = document.getElementById("vl_nm").value;
	var ng_nm = document.getElementById("ng_nm").value;
	//alert(ngo_id);
	
	
	window.open("../demo_excel_new.php?studnm="+studnm+"&email="+email+"&ng_nm="+ng_nm+"&vol_nm="+vol_nm+"&schl_nm="+schl_nm+"&type=admin");
	//window.location = "../demo_excel_new.php";
}

function ngo_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"ad_data.php?call=ngo_nm",
		success:function(msg){
			//alert(msg);
			$("#ng_nm").html(msg);
		}
	});
}
function vol_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"ad_data.php?call=vol_nm",
		success:function(msg){
			//alert(msg);
			$("#vl_nm").html(msg);
		}
	});
}

function stud_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"ad_data.php?call=stud_nm",
		success:function(msg){
			//alert(msg);
			$("#studs").html(msg);
		}
	});
}

function emailid(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"ad_data.php?call=email_stdudent",
		success:function(msg){
			//alert(msg);
			$("#emailid").html(msg);
		}
	});
}

function schl_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"ad_data.php?call=schl_nm",
		success:function(msg){
			//alert(msg);
			$("#scl_nm").html(msg);
		}
	});
}


function icard_pdf(){		
			var sh = [];	 
			$(".rowsf:input:checked").each(function(){
				sh.push(this.value);
			}); 
			
			window.open("icard.php?id="+sh);
}

function class_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"../user_dash/user_data.php?call=class_nm",
		success:function(msg){
			//alert(msg);
			$("#sel_class").html(msg);
		}
	});
}

function medium_name(){
	//alert("1");
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"../user_dash/user_data.php?call=medium_nm",
		success:function(msg){
			//alert(msg);
			$("#stud_medium").html(msg);
		}
	});
}

</script>
</body>
</html>