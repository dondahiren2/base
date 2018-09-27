<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>dashboard">Dashboard</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>registered_members">Registered Members</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">School List</a>
		</li>
	</ul>	
</div>
<aside class="right-side">
	<section class="content-header">
		<h3>School List</h3>
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
							<select class="form-control saerchbtn" id="sclnm" name="sclnm"></select>
						</div>
						<div class="col-md-2">
							<select class="form-control saerchbtn" id="ng_nm" name="ng_nm" ></select>
						</div>
						<div class="col-md-2">
							<datalist class="form-control" id="emailid" name="emailid" style="display:none;">
							</datalist>
							<input type="text" list="emailid" class="form-control saerchbtn" placeholder="Email" id="email" name="email"/>
						</div>
						<div class="col-md-2">
							<select class="form-control saerchbtn" id="vl_nm" name="vl_nm" ></select>
						</div>
						<div class="col-md-2"> </div>
						<div class="col-md-2"> </div>
					</div>

				<div style="padding: 15px;margin-top: 30px;overflow-x:auto">
					<div> Total Records : <span id="total_records"></span></div>
					<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
						<thead>
							<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);width:500%;">
								<th style="width:10px;">Sr.No.</th>
								<th style="width:10px">Unique Id</th>
								<th style="width:10px">Date</th>
								<th style="width:100px;text-align:left;">School Name</th>
								<th style="width:100px;text-align:left">Volunteer Name</th>
								<th style="width:100px;text-align:left;">NGO Name</th>
								<th style="width:100px;text-align:left">Total Students</th> 
								<th style="width:100px;text-align:left">Telephone No</th>
								<th style="width:100px;text-align:left">Email</th>
								<th style="width:100px;text-align:left">Password</th>
								<th style="width:70px">Status</th>
								<th style="width:70px">Action</th>
							</tr>
						</thead>
						<tbody id="school_list"></tbody> 
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
	schl_name();
	ngo_name();
	vol_name();
	//emailid();
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
	$(".chkSelectAll").click(function() { 
			$(".rowsf:checkbox:not(:disabled)").prop("checked", this.checked); 
	}); 
		
});
	
	loadData(page,fields,ord_sort);
	
	function loadData(page,fields,ord_sort){
		var sclnm = document.getElementById("sclnm").value;
		var ng_nm = document.getElementById("ng_nm").value;
		var email = document.getElementById("email").value;
		var vl_nm = document.getElementById("vl_nm").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}   
		requ = $.ajax({
			type:"POST",
			data:"sclnm="+sclnm+"&ng_nm="+ng_nm+"&email="+email+"&vl_nm="+vl_nm+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"ad_data.php?call=school_list",
			success: function(msg){ 
				var msga = msg.split("pagination_part");
				$("#school_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

	function editbtn(id){ 
		window.location = "more_school.php?id="+btoa(id);
	}

	function call_dash(id){	
		var site_usl = "<?php echo site_url_dash; ?>";
		window.open(site_usl+'open_dash.php?id='+id+'&type=school');
	}

	function schl_name(){
		//alert(stat_no);
		$.ajax({
			type:"post",
			//data:"stat_no="+stat_no, 
			url:"ad_data.php?call=schl_nm",
			success:function(msg){
				//alert(msg);
				$("#sclnm").html(msg);
			}
		});
	}

	function ngo_name(){
		//alert(stat_no);
		$.ajax({
			type:"post",
			//data:"stat_no="+stat_no, 
			url:"ad_data.php?call=ngo_nm",
			success:function(msg){
				//alert(msg);
				$("#ng_nm").html(msg);
			}
		});
	}

	function vol_name(){
		//alert(stat_no);
		$.ajax({
			type:"post",
			//data:"stat_no="+stat_no, 
			url:"ad_data.php?call=vol_nm",
			success:function(msg){
				//alert(msg);
				$("#vl_nm").html(msg);
			}
		});
	}

</script>
</body>
</html>