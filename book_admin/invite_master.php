<?php 
	include("header.php");
?> 
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Invite Members</a>
			</li>
		</ul>
	</div>
	<aside class="right-side">
		<section class="content">
			<div class="row"> 
				<div class="col-md-12">
					<div class="box box-primary" style="padding-bottom:20px;">
						<div class="col-md-12" style="margin-bottom:50px;overflow-x:auto;text-align:center;margin-top: 15px;">
						
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat blue-madison">
									<a href="#">
									<div class="visual">
										<i class="fa fa-comments"></i>
									</div>
									<div class="details">
									<!-- 	<div class="number">
											<?php
												$coun = $con->query("select count(*) from ngo_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div> -->
										<div class="desc">
											NGO Invite
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat red-intense">
									<a href="#">
									<div class="visual">
										<i class="fa fa-bar-chart-o"></i>
									</div>
									<div class="details">
										<!-- <div class="number">
											<?php 
												$coun = $con->query("select count(*) from school_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div> -->
										<div class="desc">
											School Invite
										</div>
									</div>
									</a>													
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat green-haze">
									<a href="#">
									<div class="visual">
										<i class="fa fa-shopping-cart"></i>
									</div>
									<div class="details">
										<!-- <div class="number">
											<?php
												$coun = $con->query("select count(*) from student_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div> -->
										<div class="desc">
											Student
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<a href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<!-- <div class="number">
											<?php
												$coun = $con->query("select count(*) from volunteer_register ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div> -->
										<div class="desc">
											Volunteer
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<a href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<!-- <div class="number">
											<?php
												$coun = $con->query("select count(*) from donor ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div> -->
										<div class="desc">
											Intership
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<a href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<!-- <div class="number">
											<?php
												$coun = $con->query("select count(*) from donor ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div> -->
										<div class="desc">
											Personal Donor
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<a href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
										<!-- <div class="number">
											<?php
												$coun = $con->query("select count(*) from donor ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div> -->
										<div class="desc">
											Corporation Donor
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<a href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
									<!-- 	<div class="number">
											<?php
												$coun = $con->query("select count(*) from donor ");
												$counn = mysqli_fetch_array($coun);
												echo $counn[0];
											?>
										</div> -->
										<div class="desc">
											Corporate / NGO Partner
										</div>
									</div>
									</a>
								</div>
							</div>
							
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<a href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
									<!-- 	<div class="number">
											<?php
												$coun = $con->query("select count(*) from vendor ");
												$counn = mysqli_fetch_array($coun);
												echo 0;
											?>
										</div> -->
										<div class="desc">
											Personal Vendor
										</div>
									</div>
									</a>
								</div>
							</div>
							<div class="col-lg-3 div_pending_zero col-md-3 col-sm-6 col-xs-12">
								<div class="dashboard-stat purple-plum">
									<a href="#">
									<div class="visual">
										<i class="fa fa-globe"></i>
									</div>
									<div class="details">
									<!-- 	<div class="number">
											<?php
												$coun = $con->query("select count(*) from vendor ");
												$counn = mysqli_fetch_array($coun);
												//echo $counn[0];
												echo 0;
											?>
										</div> -->
										<div class="desc">
											Corporate Vendor
										</div>
									</div>
									</a>
								</div>
							</div>
							
						</div>
					</div>
				</div><!--/.col (left) -->
			</div><!-- /.row (main row) -->
		</section><!-- /.content -->
	</aside>
<?php include('footer.php'); ?>
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
$(document).ready(function() {
	$(".nav_invite_members").addClass('active_head');
	
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
		//alert(fields);
		ord_sort = $(this).attr("data-id");
		//alert(ord_sort);
		loadData(page,fields,ord_sort);
		//alert(loadData(page,fields,ord_sort));
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
				url:"ad_data.php?call=diamond_delete",
				success:function(html){ 
					if(html == 1){
						alert("delete all records successfully.");
						window.location = "diamond_list.php";
					} else {
						alert("try again.");
					}
				}	
			});
		}
	});
	 
	/*$(window).scroll(function() {
			if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.5){
				console.log('loading');
				page = page + 1;
				var shape = document.getElementById("shape").value;
				var color = document.getElementById("color").value;
				var clarity = document.getElementById("clarity").value;
				var cut = document.getElementById("cut").value;
		
				if(requ && requ.readyState != 4){
					requ.abort();
				}
				requ = $.ajax({
					type:"POST",
					data:"shape="+shape+"&color="+color+"&clarity="+clarity+"&cut="+cut+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
					url:"ad_data.php?call=diamond_list",
					success: function(msg){
						var msga = msg.split("pagination_part");
						$("#diamond_list").append(msga[0]);
						$("#total_records").html(msga[1]); 
					}
				});
			}
    }); */
		
});
loadData(page,fields,ord_sort);
	function loadData(page,fields,ord_sort){
		var shape = document.getElementById("shape").value;
		var color = document.getElementById("color").value;
		var clarity = document.getElementById("clarity").value;
		var cut = document.getElementById("cut").value;
		
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"shape="+shape+"&color="+color+"&clarity="+clarity+"&cut="+cut+"&page="+page+"&fields="+fields+"&ord_sort="+ord_sort,
			url:"ad_data.php?call=diamond_list",
			success: function(msg){
				//alert(msg);
				var msga = msg.split("pagination_part");
				$("#diamond_list").html(msga[0]);
				$("#order_search_page").html(msga[1]);
				$("#total_records").html(msga[2]); 
			}
		});
	}

function editbtn(id){ 
	window.location = "edit_diamond.php?id="+id;
}

function deletedbtn(id){
		if(requ && requ.readyState != 4){
			requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"id="+id,
			url:"ad_data.php?call=diamond_delete",
			success: function(html){
				if(html == 1){
					alert("deleted successfully.");
					window.location = "diamond_list.php";
				} else {
				}	
			}
		});
}


	
</script>
</body>
</html>