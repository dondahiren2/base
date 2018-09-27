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
										</div>
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="col-md-3">
												<select class="form-control" id="con_list" name="con_list" onchange="call_list()">
													<option value="">Select Any For List</option>
													<option value="ngo">NGO List</option>
													<option value="volun">Volunteer List</option>
													<option value="school">School List</option>
													<option value="student">Student List</option>
												</select>
											</div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;">
										<input type="hidden" id="proj_id" name="proj_id" value="<?php echo $proj_id; ?>" />
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th width="40%" id="name" style="width:100px;text-align:left">Name
													</th>
													<th id="vlnm" style="display:none">Volunteer Name</th>
													<th id="stnm" style="display:none">Student Name</th>
													<th id="sclnm" style="display:none">School Name</th>
													<th width="30%" >Status</th>
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
	function loadData(page,fields,ord_sort){
		var proj_id = document.getElementById("proj_id").value;
		var list = document.getElementById('con_list').value;
		//alert(vl_id);
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"proj_id="+proj_id+"&list="+list+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"user_data.php?call=project_conn_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#sudent_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}
	
function call_list(){
	var list = document.getElementById('con_list').value;
	if(list == "ngo"){
		$("#name").html("NGO Name");
		$("#vlnm").css("display","none");
		$("#stnm").css("display","none");
		$("#sclnm").css("display","none");
	}else if(list == "volun"){
		$("#name").html("NGO Name");
		$("#stnm").css("display","none");
		$("#sclnm").css("display","none");
		$("#vlnm").css("display","block");
	}else if(list == "school"){
		$("#name").html("Volunteer Name");
		$("#vlnm").css("display","none");
		$("#stnm").css("display","none");
		$("#sclnm").css("display","block");
	}else{
		$("#name").html("School Name");
		$("#vlnm").css("display","none");
		$("#sclnm").css("display","none");
		$("#stnm").css("display","block");
	}
	loadData(page,fields,ord_sort);
}
	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>