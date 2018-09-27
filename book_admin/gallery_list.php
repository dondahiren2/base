<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>web_management">Web Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>micro_site">Micro Web Site</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>gallery_list">Gallery List</a>
		</li>
	</ul>	
</div>
<aside class="right-side">
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-top:20px;">
					<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
						<div style="float:left;font-size:20px;">Search</div>
						<div style="float:right"></div>
					</div>
					<div class="col-md-12" style="margin-bottom:10px;">
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control" placeholder="TAL UNIQUE ID" id="mg_tal_id" name="mg_tal_id"/>
						</div>
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control" placeholder="Gallery Name" id="mg_title" name="mg_title"/> 
						</div>
						<div class="col-md-2 text_box_padding">
							<input type="submit" class="btn btn-primary"  id="btn_search" value="Search" name="btn_search" />
							<input type="submit" class="btn btn-primary"  id="btn_reset" value="Reset" name="btn_reset" />
						</div>
					</div>

					<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
						<div>Total Records : <span id="total_records"></span></div>
						<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
							<thead>
								<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
									<th style="width:50px">Sr.No.</th>
									<th style="width:120px;text-align:left">TAL ID</th>
									<th style="width:150px;text-align:left">NAME</th>
									<th style="width:120px;text-align:left">Date</th>
									<th style="width:200px;text-align:left">Title</th>
									<th style="width:150px;text-align:left">Sub Title</th>
									<th style="text-align:left">Description</th>
									<th style="width:150px;text-align:left">Main Image</th> 
									<th style="width:60px;text-align:left">Display</th> 
									<th style="width:60px">Action</th>
								</tr>
							</thead> 
							<tbody id="master_list"></tbody> 
						</table>
						<div id="order_search_page"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</aside>

<?php include('footer.php'); ?>
<script>
	var requ;
	var page = 1;
	var fields = "";
	var ord_sort = "";
	$(document).ready(function() {
		$(".nav_web_management").addClass('active_head');
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
		$("#btn_search").click(function () { 
			loadData(page,fields,ord_sort);
		});
		$("#btn_reset").click(function () {
			document.getElementById("mg_title").value = '';  
			document.getElementById("mg_tal_id").value = '';  
			loadData(page,fields,ord_sort);
		});
		$(".chkSelectAll").click(function() { 
			$(".rowsf:checkbox:not(:disabled)").prop("checked", this.checked); 
		}); 
		
	 	});

	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var mg_title = document.getElementById("mg_title").value; 
		var mg_tal_id = document.getElementById("mg_tal_id").value; 
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"mg_title="+mg_title+"&mg_tal_id="+mg_tal_id+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"<?php echo $admin_url?>ad_data.php?call=live_micro_gallery_list",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(msg){
				var msga = msg.split("pagination_part");
				$("#master_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
				$(".response_gif").hide();
			}
		});
	}

	function editbtn(id){ 
		$(".response_gif").show();
		window.location = "<?php echo $admin_url ?>gallery/"+btoa(id);
	}
 
</script>
<style>
	p{
		margin:0px;
	}
</style>
</body>
</html>