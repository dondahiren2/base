<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include('../config.php');
	  $stf_id = $_SESSION['scl_db_id'];
?>

<body class="page-header-fixed page-quick-sidebar-over-content ">

<div class="page-header navbar navbar-fixed-top">
	
	<div class="page-header-inner">

		<?php include('top_naigation.php'); ?>
	</div>
</div>

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php include("school_menu.php"); ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
		
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN STYLE CUSTOMIZER -->
				<?php include('theme_panel.php'); ?>
			<!-- END STYLE CUSTOMIZER -->
			
			<!-- BEGIN PAGE HEADER-->
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="staff_list.php">Staff List</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
					<aside class="right-side">
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
										<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
											<div style="float:left;font-size:20px;">Search</div>
											<div class="botmarg" style="float:right">
												<input type="submit" class="btn btn-primary"  id="deleteall" value="Delete All" name="deleteall" /> 
											</div>
										</div>
										<input type="hidden" id="stf_sess" name="stf_sess" value="<?php echo $stf_id; ?>"/>
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="School Name" id="schl_nm" name="schl_nm"/></div>
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="First Name" id="s_fnm" name="s_fnm" /></div>
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Email Id" id="s_email" name="s_email"/></div>
											<div class="col-md-2"><input type="text" class="form-control saerchbtn datep" placeholder="Type" id="s_type" name="s_type" /></div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">School Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="ad_fname" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="ad_fname" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>			
													<th style="width:100px;text-align:left">First Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="ad_lname" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="ad_lname" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Last Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="ad_type" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="ad_type" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Mobile No
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="ad_type" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="ad_type" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Email id
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="ad_type" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="ad_type" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Type
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="ad_type" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="ad_type" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:70px">Is Admin</th>
													<th style="width:70px">Action</th>
												</tr>
											</thead> 
											<tbody id="staff_list"></tbody> 
										</table>
									<div id="order_search_page"></div></div>
									</div><!-- /.box -->
									<!-- Form Element sizes -->
								</div><!--/.col (left) -->
							</div><!-- /.row (main row) -->
						</section><!-- /.content -->
					</aside>
						
		</div>
	</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<?php include('quick_sidebar.php'); ?>
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include('footer.php'); ?>
	<div class="page-footer-inner">
		2014 &copy; Metronic by keenthemes. 
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>

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
	$(".chkSelectAll").click(function() { 
			$(".rowsf:checkbox:not(:disabled)").prop("checked", this.checked); 
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
				url:"user_data.php?call=staff_delete",
				success:function(html){ 
					if(html == 1){
						alert("delete all records successfully.");
						window.location = "staff_list.php";
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});
});
loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var schl_nm = document.getElementById("schl_nm").value;
		var s_fnm = document.getElementById("s_fnm").value;
		var s_email = document.getElementById("s_email").value;
		var s_type = document.getElementById("s_type").value;
		var stf_sess = document.getElementById("stf_sess").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({      
			type:"POST",
			data:"schl_nm="+schl_nm+"&s_fnm="+s_fnm+"&s_email="+s_email+"&s_type="+s_type+"&stf_sess="+stf_sess+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"user_data.php?call=staff_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#staff_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(id){ 
	window.location = "staff_edit.php?id="+id;
}

function deletedbtn(id){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id,
			url:"user_data.php?call=staff_delete",
			success: function(html){
				if(html == 1){
					//alert("deleted successfully.");
					window.location = "staff_list.php";
				} else {
				}	
			}
		});
}

function changeisadmin(val,id){
	$.ajax({
		type:"POST",
		data:"val="+val+"&id="+id,
		url:"user_data.php?call=update_is_admin_schl",
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