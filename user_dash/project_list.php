
<?php include("header.php");
	  include('../config.php');
	  $ngo_id = $_SESSION['ngo_db_id'];
?>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Project List</a>
					</li>
				</ul>
				
			</div>
					<aside class="right-side">
						<section class="content">
							<div class="row"> 
								<div class="col-md-12">
									<div style="padding: 15px;margin-top: 30px;">
										<div> Total Records : <span id="total_records"></span></div>
										<input type="hidden" id="ngo_id" name="ngo_id" value="<?php echo $ngo_id;?>" />
										<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
											<thead>
												<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
													<th style="width:10px">Project Name</th>
													<th style="width:70px">Working Status</th>
													<th style="width:70px">Status</th>
												</tr>
											</thead> 
											<tbody id="project_list"></tbody> 
										</table>
									<div id="order_search_page"></div></div>
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
		var ngo_id = document.getElementById("ngo_id").value;
		requ = $.ajax({
			type:"POST",
			data:"page="+page+"&ngo_id="+ngo_id+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"user_data.php?call=project_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#project_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function changestatus(val,id,projec_id){
	$.ajax({
		type:"POST",
		data:"val="+val+"&id="+id+"&projec_id="+projec_id,
		url:"user_data.php?call=update_status",
		success: function(msg){
			alert(msg);
		}
	});
}
	
</script>