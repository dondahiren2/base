<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include('../config.php');
?>
<body class="page-header-fixed page-quick-sidebar-over-content ">

<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner">
		<div class="page-logo">
			<a href="index.php">
			Touch A Life
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
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
						<a href="#">User Type</a>
					</li>
				</ul>
				
			</div>
					<aside class="right-side">

						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div class="box box-primary" style="padding-top:20px;">
										
										<div class="col-md-12" style="padding:0px;margin-bottom:10px;">
											<div class="col-md-3">
												<label>User Type</label>
												<input type="text"  class="form-control saerchbtn" placeholder="User Type" id="ut_title" name="ut_title"/>
												<input type="hidden" id="ut_id" name="ut_id"/>
											</div>
											<div class="col-md-2">
												<label>Display Type</label>
											    <select class="form-control" id="ut_action" name="ut_action">
											        <option value="1">Show</option>
											        <option value="0">Hide</option>
											    </select>
											</div>
											<div class="col-md-2" style="line-height: 80px;"> 
												<input type="submit" class="btn btn-primary" id="btn_submit" name="btn_submit"/>
											</div>
										</div>
		
									<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
										<div> Total Records : <span id="total_records"></span></div>
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px">Sr.No.</th>
													<th style="width:100px;text-align:left">User Type</th>			
													<th style="width:100px;text-align:left">Display Type</th>
													<th style="width:100px;text-align:left">Action</th>
												</tr>
											</thead> 
											<tbody id="pven_list"></tbody> 
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

 
<?php include("js.php"); ?>
<script type="application/javascript" >
var requ;
var page = 1;
 
$(document).ready(function() {
 
	$(document).on('click','#btn_submit', function () { 
	    var ut_id = document.getElementById("ut_id").value;
	    var ut_title = document.getElementById("ut_title").value;
	    var ut_action = document.getElementById("ut_action").value;
	    
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"ut_id="+ut_id+"&ut_title="+ut_title+"&ut_action="+ut_action,
			url:"ad_data.php?call=user_type_insert",
			success: function(html){ 
                if(html == 1){
                    alert('Proccess Successfully.');
                    document.getElementById("ut_id").value = "";
                    document.getElementById("ut_title").value = "";
	                document.getElementById("ut_action").value = "";
	                document.getElementById("ut_title").focus();
                    loadData(page);
                } else {
                    alert('Try Again.');
                }
			}
		}); 
	});
	
	$(document).on('click','.pagination li.active', function () { 
		var page = $(this).attr('p');
		loadData(page);
	});
	 
});
    loadData(page);
	function loadData(page){
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"page="+page,
			url:"ad_data.php?call=user_type_list",
			success: function(msg){ 
				var msga = msg.split("pagination_part");
				$("#pven_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(ut_id, ut_title, ut_action){
	document.getElementById("ut_id").value = ut_id;
    document.getElementById("ut_title").value = ut_title;
	document.getElementById("ut_action").value = ut_action;
}

function deletebtn(id){
	$.ajax({
		type:"post",
		data:"ut_id="+id, 
		url:"ad_data.php?call=user_type_delete",
		success:function(html){
			if(html == 1){
                alert('Proccess Successfully.');
                loadData(page);
            } else {
                alert('Try Again.');
            }
		}
	});
}
 
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>