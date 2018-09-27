<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
				<i class="fa fa-home"></i>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="registered_members">Registered Members</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Personal Vendor List</a>
			</li>
	</ul>	
</div>
<aside class="right-side">
	<section class="content-header">
		<h3>Personal Vendor List</h3>
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
							<datalist class="form-control" id="sel_ven" name="sel_ven" style="display:none;">
							</datalist>
							<input type="text" list="sel_ven" class="form-control saerchbtn" placeholder="Vendor Name" id="vnnm" name="vnnm"/>
						</div>
						<div class="col-md-2"><input type="text" class="form-control saerchbtn" placeholder="Mobile No" id="mno" name="mno"/></div>
						<div class="col-md-2">
							<datalist class="form-control" id="emailid" name="emailid" style="display:none;">
							</datalist>
							<input type="text" list="emailid" class="form-control saerchbtn" placeholder="Email" id="email" name="email"/>
						</div>
					</div>

				<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
					<div> Total Records : <span id="total_records"></span></div>
					<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
						<thead>
							<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
								<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
								<th style="width:10px">Unique Id</th>
								<th style="width:100px;text-align:left">Vendor <br/>Name
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="ven_fnm" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="ven_fnm" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>			
								<th style="width:100px;text-align:left">Mobile No
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="ven_mono" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="ven_mono" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Email
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="ven_email" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="ven_email" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:70px">Password</th>
								<th style="width:100px;text-align:left">Date Of <br/>Birth
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="ven_dob" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="ven_dob" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:100px;text-align:left">Profile
								</th>
								<th style="width:100px;text-align:left">Status
									<span style="width: 10px; float: right;">
									<i class="fa fa-caret-up" id="ven_status" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
									<i class="fa fa-caret-down" id="ven_status" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
									</span>
								</th>
								<th style="width:70px">Action</th>
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
var fields = "";
var ord_sort = "";
$(document).ready(function() {
	$(".nav_registered_members").addClass('active_head');	
	ven_name();
	emailid();
	
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
		var vnnm = document.getElementById("vnnm").value;
		var mno = document.getElementById("mno").value;
		var email = document.getElementById("email").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"vnnm="+vnnm+"&mno="+mno+"&email="+email+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"ad_data.php?call=pven_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#pven_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(id){   
	window.location = "more_pvendor.php?id="+id;
}

function ven_name(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"ad_data.php?call=ven_nm",
		success:function(msg){
			//alert(msg);
			$("#sel_ven").html(msg);
		}
	});
}

function emailid(){
	//alert(stat_no);
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"ad_data.php?call=email_pven",
		success:function(msg){
			//alert(msg);
			$("#emailid").html(msg);
		}
	});
}

function call_dash(id){  
	var site_usl = "<?php echo site_url_dash; ?>";
	window.open(site_usl+'open_dash.php?id='+id+'&type=pven');
}
	
</script>
</body>
</html>