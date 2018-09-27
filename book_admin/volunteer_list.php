<?php 
	include("header.php");
	$id = isset($_GET['id']) ? $_GET['id'] : '';
?>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="<?php echo $admin_url?>dashboard">dashboard</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="<?php echo $admin_url?>registered_members">Registered Members</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="<?php echo $admin_url?>volunteer_list">Volunteer List</a>
			</li>
		</ul>		
	</div>
	<aside class="right-side">
		<section class="content-header">
			<h3>Volunteer List</h3>
		</section>
		<section class="content">
			<div class="row"> 
				<div class="col-md-12">
					<div class="box box-primary" style="padding-top:20px;">
						<div class="col-md-12"  style="padding-top:0px;margin-bottom:10px;">
							<div style="float:left;font-size:20px;">Search</div>
						</div>
						<div class="col-md-12" style="padding-top:0px;margin-bottom:10px;">
							<div class="col-md-2">
								<select class="form-control saerchbtn" id="ng_nm" name="ng_nm" onchange="loadData(1,0,0);"></select>
							</div>
							<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Mobile No" id="mno" name="mno"/></div>
							<div class="col-md-2">
								<datalist class="form-control" id="emailid" name="emailid" style="display:none;">
								</datalist>
								<input type="text" list="emailid" class="form-control saerchbtn" placeholder="Email" id="email" name="email"/>
							</div>
							<div class="col-md-2">
								<select class="form-control saerchbtn" id="status" name='status'>
									<option value=""  <?php if($id === ''){ echo 'selected'; } ?> >Status</option>
									<option value="0" <?php if($id === 0){ echo 'selected'; } ?> >Pending</option>
									<option value="3" <?php if($id === 3){ echo 'selected'; } ?>  >Blocked</option>
									<option value="4" <?php if($id === 4){ echo 'selected'; } ?>  >Waiting</option>
									<option value="2" <?php if($id === 2){ echo 'selected'; } ?>  >Rejected</option>
									<option value="1" <?php if($id === 1){ echo 'selected'; } ?>  >Approved</option>
								</select>
							</div>
						</div>

					<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
						<div> Total Records : <span id="total_records"></span></div>
						<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
							<thead>
								<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
									<th style="width:10px">Sr.No.</th>
									<th style="width:10px">TAL ID</th>
									<th style="width:100px;text-align:left">Volunteer Name
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="bp_fname" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="bp_fname" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>			
									<th style="width:100px;text-align:left">NGO Name
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="biv_ngo_id" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="biv_ngo_id" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>			
									<th style="width:100px;text-align:left">Mobile No
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="bp_mobile_no" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="bp_mobile_no" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">Email
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="bp_email" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="bp_email" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:70px">Password</th>
									<th style="width:100px;text-align:left">Date Of Register
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="bp_create_date" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="bp_create_date" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">Status</th>
									<th style="width:70px">Action</th>
								</tr>
							</thead> 
							<tbody id="ngo_list"></tbody> 
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
var fields = "";
var ord_sort = "";
$(document).ready(function() {
	$(".nav_registered_members").addClass('active_head');
	
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
	 
});

	ngo_name();
function ngo_name(){
	$.ajax({
		type:"post",
		url:"<?php echo $admin_url?>ad_data.php?call=ngo_nm",
		success:function(msg){
			$("#ng_nm").html(msg);
		}
	});
}
	loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var ngnm = document.getElementById("ng_nm").value;
		var mno = document.getElementById("mno").value;
		var email = document.getElementById("email").value;
		var status = document.getElementById("status").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"ngnm="+ngnm+"&mno="+mno+"&email="+email+"&status="+status+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"<?php echo $admin_url?>ad_data.php?call=volun_list",
			success: function(msg){
				var msga = msg.split("pagination_part");
				$("#ngo_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(id){ 
	window.location = "<?php echo $admin_url?>more_volunteer.php?id="+id;
}

function call_dash(id){
	var site_usl = "<?php echo site_url_dash; ?>";
	window.open(site_usl+'open_dash.php?id='+id+'&type=ngo');
}
 
</script>

</body>
</html>