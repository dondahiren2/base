<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<?php include("header.php");
	  include('../config.php');
	  if($_SESSION['uname'] == ""){
		header('location:index.php');
	  }
?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.php">
			DIANA
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<?php include('top_naigation.php'); ?>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php include("menu.php"); ?>
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
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="cli_user_list.php">Client User List</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
					<aside class="right-side">
						<section class="content-header">
							<h3>Admin User List</h3>
						</section>
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
										<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
											<div style="float:left;font-size:20px;">Search</div>
											<div style="float:right">
												<input type="submit" class="btn btn-primary"  id="deleteall" value="Delete All" name="deleteall" /> 
											</div>
										</div>
										<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="First Name" id="fnm" /></div>
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Last Name" id="lnm" /></div>
											<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Email" id="email" /></div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">First Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="rg_fname" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="rg_fname" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>			
													<th style="width:100px;text-align:left">Last Name
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="rg_lname" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="rg_lname" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Email
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="rg_email" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="rg_email" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Mobile
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="rg_email" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="rg_email" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:100px;text-align:left">Status
														<span style="width: 10px; float: right;">
														<i class="fa fa-caret-up" id="rg_active" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
														<i class="fa fa-caret-down" id="rg_active" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
														</span>
													</th>
													<th style="width:70px">Action</th>
												</tr>
											</thead> 
											<tbody id="client_list"></tbody> 
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
				url:"ad_data.php?call=client_delete",
				success:function(html){ 
					if(html == 1){
						alert("delete all records successfully.");
						window.location = "cli_user_list.php";
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});
	
	 
	/*$(window).scroll(function() {
			if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.7){
				console.log('loading');
				page = page + 1;
				var f_name = document.getElementById("fnm").value;
				var l_name = document.getElementById("lnm").value;
				var email = document.getElementById("email").value;
				var type = document.getElementById("typ").value;
		
				if(requ && requ.readyState != 4){
					requ.abort();
				}
				requ = $.ajax({
					type:"POST",
					data:"f_name="+f_name+"&l_name="+l_name+"&email="+email+"&type="+type+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
					url:"ad_data.php?call=ad_list",
					success: function(msg){
						//alert(msg);
						var msga = msg.split("pagination_part");
						$("#ad_list").append(msga[0]);
						$("#total_records").html(msga[1]); 
					}
				});
			}
    }); */
		
});
loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var f_name = document.getElementById("fnm").value;
		var l_name = document.getElementById("lnm").value;
		var email = document.getElementById("email").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"f_name="+f_name+"&l_name="+l_name+"&email="+email+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"ad_data.php?call=client_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#client_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(id){ 
	window.location = "edit_cli_user.php?id="+id;
}

function deletedbtn(id){
		//alert("1");
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id,
			url:"ad_data.php?call=client_delete",
			success: function(html){
				//alert(html);
				if(html == 1){
					alert("deleted successfully.");
					window.location = "cli_user_list.php";
				} else {
				}	
			}
		});
}


	
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>