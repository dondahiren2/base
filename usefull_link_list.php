<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $user_url?>web_management">Web Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $user_url?>micro_site">Micro Web Site</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $user_url?>usefull_link_list">Usefull Link List</a>
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
						<div style="float:right">
							<input type="submit" class="btn btn-success"  id="create_master_category" value="Create Usefull Link" name="create_prime_category" />
						</div>
					</div>
					<div class="col-md-12" style="margin-bottom:10px;">
						<div class="col-md-2 text_box_padding">
							<input type="text" class="form-control" placeholder="Usefull Link Title" id="mn_title" name="mn_title"/> 
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
									<th style="text-align:left">Title</th>
									<th style="width:150px;text-align:left">Link</th> 
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
		$(".nav_micro_site").addClass('active_head');
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
			document.getElementById("mn_title").value = '';  
			loadData(page,fields,ord_sort);
		});
		$(".chkSelectAll").click(function() { 
			$(".rowsf:checkbox:not(:disabled)").prop("checked", this.checked); 
		});
		
		$("#create_master_category").click(function() { 
			window.location = "<?php echo $user_url ?>usefull_link";
		});
		
	 	});

	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var mn_title = document.getElementById("mn_title").value; 
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"mn_title="+mn_title+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&mn_type=usefull_link",
			url:"<?php echo $admin_url?>ad_data.php?call=whats_news_list",
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
		window.location = "<?php echo $user_url ?>usefull_link/"+btoa(id);
	}

	function deletebtn(id){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id,
			url:"<?php echo $admin_url?>ad_data.php?call=delete_micro_news",
			beforeSend: function(){
				$(".response_gif").show();
			},
			success: function(html){
				if(html == 1){
					alert("deleted successfully.");
					loadData(page,fields,ord_sort);
				} else {
					alert("Try Again.");
				}	
			}
		});
	}
	 
</script>
<style>
	p{
		margin:0px;
	}
</style>
</body>
</html>