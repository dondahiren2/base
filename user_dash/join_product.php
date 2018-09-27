<!DOCTYPE html>

<html lang="en">
<?php 
	include("header.php");
	  include("../config.php");
	  $ngo_id = $_SESSION['ngo_db_id'];
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
						<a href="#">Student Join</a>
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
											<div class="col-md-2">
												<select class="form-control saerchbtn" id="vl_nm" name="vl_nm"></select>
											</div>
											<div class="col-md-3">
												<select class="form-control saerchbtn" id="prj_nm" name="prj_nm"></select>
											</div>
											<div class="col-md-2" style="margin-top:20px;">
												<select class="form-control saerchbtn" id="product" name="product"></select>
											</div>
											<div class="col-md-2" style="margin-top:20px;">
												<select class="form-control saerchbtn" id="sel_class" name="sel_class"></select>
											</div>
											<div class="col-md-2" style="margin-top:20px;">
												<select class="form-control saerchbtn" id="stud_medium" name="stud_medium"></select>
											</div>
											<div class="col-md-2" style="margin-top:20px;">
												<input type="button" class="form-control saerchbtn" value="Join To Product" id="prod" name="prod" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="add_to_product();" />
											</div>
											
										</div>
		
									<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
										<input type="hidden" id="ngo_id" name="ngo_id" value="<?php echo $ngo_id;?>" />
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">Student <br/>Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_fnm" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_fnm" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>			
													<th style="width:100px;text-align:left">School <br/>Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="schl_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="schl_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Volunteer <br/>Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="vol_ref_add" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="vol_ref_add" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Medium
													</th>
													<th style="width:100px;text-align:left">Email <br/> Id
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_email" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_email" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Mobile <br/> No
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_contact" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_contact" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Aadhar <br/>No
													</th>
													<th style="width:100px;text-align:left"> Class
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_class" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_class" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
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
	proj_name();
	vol_name();
	schl_name1();
	emailid();
	product_name();
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
		var scl_nm = document.getElementById("sclnm").value;
		var email = document.getElementById("email").value;
		var vl_nm = document.getElementById("vl_nm").value;
		var ngo_id = document.getElementById("ngo_id").value;
		var prj_nm = document.getElementById("prj_nm").value;
		var sel_class = document.getElementById("sel_class").value;
		var stud_medium = document.getElementById("stud_medium").value;
		var product = document.getElementById("product").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"studnm="+studnm+"&scl_nm="+scl_nm+"&email="+email+"&ngo_id="+ngo_id+"&vl_nm="+vl_nm+"&prj_nm="+prj_nm+"&sel_class="+sel_class+"&stud_medium="+stud_medium+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&product="+product,
			url:"user_data.php?call=join_stud_prod_list",
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

function emailid(){
	//alert(stat_no);
	var ngo_id = document.getElementById("ngo_id").value;
	$.ajax({
		type:"post",
		data:"ngo_id="+ngo_id, 
		url:"user_data.php?call=email_student",
		success:function(msg){
			//alert(msg);
			$("#emailid").html(msg);
		}
	});
}

function add_to_product(){
	//alert("1");
	var prod = document.getElementById('product').value;
	var scl_nm = document.getElementById("sclnm").value;
	var vl_nm = document.getElementById("vl_nm").value;
	var sel_class = document.getElementById("sel_class").value;
	var stud_medium = document.getElementById("stud_medium").value;
	if(prod == ""){
		alert("Select any product");
		return false;
	}else{
		var id = [];
		$(".rowsf:input:checked").each(function(){
			id.push(this.value);
		}); 
		
		//alert(id);
		requ = $.ajax({
			type:"post",
			data:"id="+id+"&prod="+prod+"&scl_nm="+scl_nm+"&vl_nm="+vl_nm+"&sel_class="+sel_class+"&stud_medium="+stud_medium, 
			url:"user_data.php?call=join_product",
			success:function(html){ 
				//alert(html);
				if(html == 1){
					alert("Join Students successfully.");
					$(".rowsf").prop("checked", false);
					$("#chkSelectAll").prop("checked", false);
				}else if(html == 0) {
					alert("try again.");
				}else{
					alert("Please select students for join to product");
				}
			}	
		});
	}
		 
	
}

function proj_name(){
	//alert(stat_no);
	var ng_id = document.getElementById('ngo_id').value;
	$.ajax({
		type:"post",
		data:"ng_id="+ng_id, 
		url:"user_data.php?call=proj_list",
		success:function(msg){
			//alert(msg);
			$("#prj_nm").html(msg);
		}
	});
}
	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>