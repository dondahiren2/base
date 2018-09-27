<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="task_management">Task Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Task Category</a>
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
							<label>Category Title</label>
							<input type="text"  class="form-control saerchbtn" placeholder="Category Title" id="tc_cat_name" name="tc_cat_name"/>
							<input type="hidden" id="tc_id" name="tc_id"/>
						</div>
						<div class="col-md-2">
							<label>Display Type</label>
							<select class="form-control" id="tc_action" name="tc_action">
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
								<th style="width:100px;text-align:left">Category Title</th>			
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

<?php include('footer.php'); ?>
<script type="application/javascript" >
var requ;
var page = 1;
 
$(document).ready(function() {
	$(".nav_task_management").addClass('active_head');	
	$(document).on('click','#btn_submit', function () { 
	    var tc_id = document.getElementById("tc_id").value;
	    var tc_cat_name = document.getElementById("tc_cat_name").value;
	    var tc_action = document.getElementById("tc_action").value;
	    
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"tc_id="+tc_id+"&tc_cat_name="+tc_cat_name+"&tc_action="+tc_action,
			url:"ad_data.php?call=task_category_insert",
			success: function(html){ 
                if(html == 1){
                    alert('Proccess Successfully.');
                    document.getElementById("tc_id").value = "";
                    document.getElementById("tc_cat_name").value = "";
	                document.getElementById("tc_action").value = "";
	                document.getElementById("tc_cat_name").focus();
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
			url:"ad_data.php?call=task_category_list",
			success: function(msg){ 
				var msga = msg.split("pagination_part");
				$("#pven_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(tc_id, tc_cat_name, tc_action){
	document.getElementById("tc_id").value = tc_id;
    document.getElementById("tc_cat_name").value = tc_cat_name;
	document.getElementById("tc_action").value = tc_action;
}

function deletebtn(id){
	$.ajax({
		type:"post",
		data:"tc_id="+id, 
		url:"ad_data.php?call=task_category_delete",
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