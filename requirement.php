<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include('../config.php');
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
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Requirement List</a>
					</li>
				</ul>
				
			</div>
					<aside class="right-side">
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;padding-right:0px;">
											<div class="col-md-2" style="float:right;">
												<input type="button" class="form-control saerchbtn" value="Export To Excel" id="excel" name="excel" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="gotoexcel();" />
											</div>
										</div>
									</div>
									<div style="padding: 15px;margin-top: 30px;">
										<!--<div> Total Records : <span id="total_records"></span></div>-->
										<input type="hidden" id="proj_id" name="proj_id" value="<?php echo $proj_id;?>" />
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px">School Name</th>
													<th style="width:70px">Class</th>
												</tr>
											</thead> 
											<tbody id="project_list"></tbody> 
										</table>
									<!--<div id="order_search_page"></div></div>-->
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
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		var proj_id = document.getElementById("proj_id").value;
		requ = $.ajax({
			type:"POST",
			data:"page="+page+"&proj_id="+proj_id+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"user_data.php?call=requirement_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#project_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}
	
function gotoexcel(){ 
	window.location = "../demo_excel.php";
}

	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>