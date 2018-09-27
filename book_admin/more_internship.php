<?php 
	include("header.php");
	$ngo_id = 16;
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="dashboard.php">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="cvendor_list.php">Internship List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Internship Details</a>
		</li>
	</ul>
</div>
 	<div class="row">
	<div class="col-md-12">
	<div class="box box-primary">
		<?php
			$vol_nm = $con->query("SELECT cr_form_name, cr_form_code, cr_pre_fix FROM `create_forms` as cf join create_form_page as cr on cf.cf_uid = cr.cr_cf_uid  WHERE cf_p_id = $ngo_id  and cf_status = 0 order by cr_position asc");
			if(mysqli_num_rows($vol_nm) > 0){
				while($r = mysqli_fetch_assoc($vol_nm)){
					echo '<div class="portlet light bordered">';
						$cr_form_name = $r['cr_form_name'];
						$pre_fix = $r['cr_pre_fix'];
						echo '<p class="topmarg">'.$cr_form_name.'</p>';
						$cr_form_code = $r['cr_form_code'];
						include('../forms/'.$cr_form_code.'.php');
					echo '</div>';
				}
			}
		?>
		
		<div class="col-md-12 col-sm-12 col-xs-12">
			<input type="submit" name="submit_ngo_invite" class="btn btn-primary" id="submit_ngo_invite" value="invite"/>
		</div>
		
		<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
			<div class="col-md-12 border_admi"></div>	
		</div>
		

		<div class="portlet light bordered">
			<h3 class="form-title">Call Interview Question</h3>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<table class="table table-striped table-bordered table-vcenter">
						<thead>
							<tr style="background-color: rgb(46, 158, 177); color: rgb(255, 255, 255);">
								<td style="width:50px;">Sr.No</td>
								<td style="width:300px;">Question</td>
								<td>Answer</td>
								<td style="width:100px;">Date & Time</td>
							</tr>
						</thead>
						<tbody id="get_call_interview"></tbody>
					</table>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<label class="lableedit ">Remark</label>
					<input placeholder="Remark" type="text" class="form-control " id="bp_call_int_remark" name="bp_call_int_remark" />
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Status</label>
					<select class="form-control" id="bp_call_int_status" name='bp_call_int_status'>
						<option value="0">Pending</option>
						<option value="2" >Rejected</option>
						<option value="1" >Approved</option>
					</select>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input type="submit" name="submit_call_interview" class="btn btn-primary" id="submit_call_interview" value="Submit"/>
				</div>
			</div>
		</div>
	 
		<div class="portlet light bordered">
			<h3 class="form-title">Web Administration</h3>
			<?php include('../forms/IN_A_9_0.php'); ?>
		</div>
	</div>
	</div>
	</div>

<?php include('footer.php'); ?>
<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
var rough_enter1 = 0;
$(document).ready(function() {
	$(".nav_registered_members").addClass('active_head');	
	$("#edit_cven").on('click', function(){
		var status = document.getElementById('status').value;
		var id = document.getElementById('id').value;
		
		if(requ && requ.readyState != 4) {
			requ.abort();
		}
		
		requ = $.ajax({
			type:"POST",
			data:"status="+status+"&id="+id,
			url:"ad_data.php?call=edit_cvendor",
			success: function(html){
				if(html == 1){
					document.getElementById('status').value = '';
					window.location = "cvendor_list.php";
				}else{
					alert("Try Again.");
				}	
			}
		});
    });
	
 });
 
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>