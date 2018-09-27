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
						<a href="#">Web Received product</a>
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
											
											<div class="col-md-2" >
												<select class="form-control saerchbtn" id="sel_class" name="sel_class"></select>
											</div>
											<div class="col-md-2">
												<select class="form-control saerchbtn" id="stud_medium" name="stud_medium"></select>
											</div>
											
											
										</div>
		
									<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
										<input type="hidden" id="proj_id" name="proj_id" value="<?php echo $proj_id;?>" />
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													
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
													<th style="width:100px;text-align:left"> Class
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_class" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_class" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													
													<th style="width:100px;text-align:left">Order tx id
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="stud_contact" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="stud_contact" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Photo
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
	//proj_name();
	vol_name();
	schl_name1();
	//emailid();
	//product_name();
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
		var scl_nm = document.getElementById("sclnm").value;
		var vl_nm = document.getElementById("vl_nm").value;
		var ngo_id = "";
		
		var sel_class = document.getElementById("sel_class").value;
		var stud_medium = document.getElementById("stud_medium").value;
		var proj_id = "<?php echo $proj_id; ?>";
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"scl_nm="+scl_nm+"&ngo_id="+ngo_id+"&vl_nm="+vl_nm+"&sel_class="+sel_class+"&stud_medium="+stud_medium+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&proj_id="+proj_id,
			url:"user_data.php?call=web_orders",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#sudent_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>