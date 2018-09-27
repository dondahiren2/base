<?php 
	include("header.php");
?>
			<!-- BEGIN PAGE HEADER-->
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="contact">contact</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Contact group List</a>
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
								<input type="text" class="form-control saerchbtn" placeholder="First Name" id="fnm" />
							</div>
							<div class="col-md-2 paddingRight">
								<input type="text" class="form-control saerchbtn" placeholder="Last Name" id="lnm" />
							</div>
							<div class="col-md-4 paddingRight">
								<input type="text" class="form-control saerchbtn" placeholder="Email" id="email" />
							</div>
							<div class="col-md-2 paddingRight">
								<select class="form-control" id="country" name='country'>
									<option value="" >Country</option>
									<?php $cr = $con->query("select distinct q_country from quick_user where q_country != ''");
										while($rcr = mysqli_fetch_array($cr)){
											?>

											<option value="<?php echo $rcr["q_country"] ?>" ><?php echo $rcr["q_country"] ?></option>';
										<?php }	
									 ?>
								</select>
							</div>
							<div class="col-md-2 paddingRight">
								<select class="form-control" id="state" name='state'>
									<option value="" >State</option>
									<?php $cr = $con->query("select distinct q_state from quick_user where q_state != ''");
										while($rcr = mysqli_fetch_array($cr)){
											?>

											<option value="<?php echo $rcr["q_state"] ?>" ><?php echo $rcr["q_state"] ?></option>';
										<?php }	
									 ?>
								</select>
							</div>
							<div class="col-md-2 paddingRight">
								<select class="form-control" id="city" name='city'>
									<option value="" >City</option>
									<?php $cr = $con->query("select distinct q_city from quick_user where q_city != ''");
										while($rcr = mysqli_fetch_array($cr)){
											?>

											<option value="<?php echo $rcr["q_city"] ?>" ><?php echo $rcr["q_city"] ?></option>';
										<?php }	
									 ?>
								</select>
							</div>
							<div class="col-md-2 paddingRight">
								<select class="form-control" id="source" name='source'>
									<option value="" >Source</option>
									<?php $cr = $con->query("select distinct q_info_source from quick_user");
										while($rcr = mysqli_fetch_array($cr)){
											echo '<option value="'.$rcr["q_info_source"].'" >'.$rcr["q_info_source"].'</option>';
										}	
									 ?>
								</select>
							</div>
							<div class="col-md-3 paddingRight">
								<select class="form-control" id="m_status" name='m_status'>
									<option value="" >Contact Mailing Status</option>
									<option value="1">Active</option>
									<option value="0">Deactive</option>
								</select>
							</div>
							<div class="col-md-3">
								<input type="submit" class="btn btn-success" id="search_data" value="Search" />
								<input type="submit" class="btn btn-primary" id="add_admin_user" value="Add Members" />
							</div>
						</div>

					<div class="col-md-12" style="padding: 0px;margin-top: 30px;overflow-x:auto">
						<div> Total Records : <span id="total_records"></span></div>
						<table width="100%" class="table table-striped table-bordered table-vcenter" style="border:1px solid #fff;" cellspacing='0' cellpadding='5' >
							<thead>
								<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
									<th style="width:10px"><input type="checkbox" id="chkSelectAll" class="chkSelectAll checkbox" title="Select All"></th>
									<th style="width:10px">Sr.No.</th>
									<th style="width:125px;text-align:left">First Name
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_fname" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_fname" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>			
									<th style="width:125px;text-align:left">Middle Name
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_fname" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_fname" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>			
									<th style="width:125px;text-align:left">Last Name
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_lname" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_lname" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">Email
										<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_email" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_email" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">Birthdate
											<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_birthdate" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_birthdate" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">Gender
											<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="ad_gender" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="ad_gender" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">City
											<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_city" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_city" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">State
											<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_state" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_state" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">Country
											<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_country" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_country" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
										</span>
									</th>
									<th style="width:100px;text-align:left">Source
											<span style="width: 10px; float: right;">
										<i class="fa fa-caret-up" id="q_info_source" data-id="asc" aria-hidden="true" style="float: right; position: absolute;cursor: pointer;"></i>
										<i class="fa fa-caret-down" id="q_info_source" data-id="desc"  aria-hidden="true" style="float: right; position: absolute; margin-top: 10px;cursor: pointer;"></i>
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
	$(".nav_contact").addClass('active_head');			
		
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
				url:"ad_data.php?call=contact_delete",
				success:function(html){ 
					if(html == 1){
						alert("delete all records successfully.");
						window.location = "contact_list";
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
		var f_name = document.getElementById("fnm").value;
		var l_name = document.getElementById("lnm").value;
		var email = document.getElementById("email").value;
		var country = document.getElementById("country").value;
		var state = document.getElementById("state").value;
		var city = document.getElementById("city").value;
		var source = document.getElementById("source").value;
		var m_status = document.getElementById("m_status").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"f_name="+f_name+"&l_name="+l_name+"&email="+email+"&state="+state+"&city="+city+"&country="+country+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort+"&source="+source+"&m_status="+m_status,
			url:"ad_data.php?call=contact_list",
			success: function(msg){
				var msga = msg.split("pagination_part");
				$("#ad_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});		
	}

function editbtn(id){ 
	window.location = "contact_user.php?id="+id;
}

function deletebtn(id){
	if(requ && requ.readyState != 4){
		requ.abort();
	}
	requ = $.ajax({
		type:"POST",
		data:"id="+id,
		url:"ad_data.php?call=contact_delete",
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