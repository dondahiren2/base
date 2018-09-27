<?php 
	include("header.php");
?>
			<!-- BEGIN PAGE HEADER-->
			<div class="page-bar">
				<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="web_management">Web Management</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="touch_a_life_site">Touch A Life Site</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="logo_banner">Logo And Banner</a>
				
			</li>
				</ul>
				
			</div>

	<aside class="right-side">
		<section class="content">
			<div class="row"> 
				<div class="col-md-12">
					<div class="box box-primary col-md-12" style="padding: 15px 0px;">
						
						<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
							<h4 class="form-title">Search By</h4>
						<div>
						<div class="row" style="padding-top:0px;margin-bottom:10px;">
						
							
							<div class="col-md-2 paddingRight">
								<select class="form-control" id="logo_type" name='logo_type'>
									<option value="" >Select Logo Type</option>
									<?php $cr = $con->query("SELECT DISTINCT tal_logo_name FROM `tal_logo`");
										while($rcr = mysqli_fetch_array($cr)){
											?>

											<option value="<?php echo $rcr["tal_logo_name"] ?>" ><?php echo $rcr["tal_logo_name"] ?></option>';
										<?php }	
									 ?>
								</select>
							</div>
							<div class="col-md-2 paddingRight">
								<select class="form-control saerchbtn" id="status" name='status'>
									<option value="" >Status</option>
									<option value="1" >Active</option>
									<option value="0" >Deactive</option>
									
								</select>
							</div>
							
							<div class="col-md-3">
								<input type="submit" class="btn btn-success" id="search_data" value="Search" />
								<input type="submit" class="btn btn-primary" id="add_admin_user" value="Add Logo" />
							</div>
						</div>

					<div class="col-md-12" style="padding: 0px;margin-top: 30px;overflow-x:auto">
						<div> Total Records : <span id="total_records"></span></div>
						<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
							<thead>
								<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
									<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
									<th style="width:10px">Sr.No.</th>
									<th style="width:125px;text-align:left">Logo Type
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="tal_logo_name" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="tal_logo_name" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>			
									<th style="width:125px;text-align:left">Logo
										
									</th>			
									<th style="width:125px;text-align:left">Status
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="tal_logo_status" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="tal_logo_status" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									
									
									<th style="width:70px">Action</th>
								</tr>
							</thead> 
							<tbody id="ad_list"></tbody> 
						</table>
					</div>
					<div id="order_search_page"></div>
					</div><!-- /.box -->
					<!-- Form Element sizes -->
				</div><!--/.col (left) -->
			</div><!-- /.row (main row) -->
		</section><!-- /.content -->
	</aside>
		
</div>
</div>

<?php include('footer.php'); ?>
 
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
$(document).ready(function() {
	$(".nav_web_management").addClass('active_head');			
		
	$("#search_data").click(function () { 
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
				url:"hd_data.php?call=logo_delete",
				success:function(html){ 
					if(html == 1){
						alert("delete all records successfully.");
						window.location = "logo_banner";
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});
	
	$("#add_admin_user").click(function() { 
		window.location = "contact_user";
	});
});

	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var logo_type = document.getElementById("logo_type").value;
		var status = document.getElementById("status").value;
		
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"logo_type="+logo_type+"&status="+status+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"hd_data.php?call=logo_list",
			success: function(msg){
				var msga = msg.split("pagination_part");
				$("#ad_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});		
	}

function editbtn(id){ 
	window.location = "add_logo_banner.php?id="+id;
}

function deletebtn(id){
	if(requ && requ.readyState != 4){
		requ.abort();
	}
	requ = $.ajax({
		type:"POST",
		data:"id="+id,
		url:"hd_data.php?call=contact_delete",
		success: function(html){
			if(html == 1){
				loadData(page,fields,ord_sort);
				alert('Delete Successfully');
			} else {
				alert('Try Again');
			}	
		}
	});
}


	
</script>
 
</body>
</html>