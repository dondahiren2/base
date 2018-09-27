<?php 
	include("header.php");
	$ngo_id = 20;
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="dashboard.php">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="cvendor_list.php">Corporate Vendor List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Corporate Vendor Details</a>
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
			<h3 class="form-title">Assinged To NGO</h3>
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<label class="lableedit ">NGO</label>
					<input placeholder="NGO" type="text" class="form-control " id="bp_call_int_remark" name="bp_call_int_remark" />
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
			<h3 class="form-title">Super Admin Communication</h3>
			<div class="row">
				<div class="col-md-6 col-sm-3 col-xs-12">
					<textarea class="form-control" id="bp_call_sup_disc" style="height:100px;" ></textarea>
				</div>
				<div class="col-md-6 col-sm-3 col-xs-12">
					<input placeholder="Remark" type="text" class="form-control textbox-n" id="bp_call_sup_remark" />
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Status</label>
					<select class="form-control" id="bp_sup_ad_status" name='bp_sup_ad_status'>
						<option value="0">Pending</option>
						<option value="2" >Rejected</option>
						<option value="1" >Approved</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					Last Submit Date : 
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input type="submit" name="create_register" class="btn btn-primary" id="submit_super_commnication" value="Submit"/>
				</div>
			</div>
		</div>
	
		<div class="portlet light bordered">
			<h3 class="form-title">Visiting</h3>
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<label class="lableedit ">Visiting</label>
					<select class="form-control" id="bp_visit" name='bp_visit'>
						<option value="0" >No</option>
						<option value="1">Yes</option>
					</select>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<p class="text_margin_0" >Visiting Person Name</p>
					<input type="text" class="form-control" id="bp_v_from_name"  />
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<label class="lableedit ">From Person Name</label>
					<input type="text" class="form-control" id="bp_v_to_name" />
				</div>
				<div class="col-md-5 col-sm-5 col-xs-12">
					<label class="lableedit">Document Upload</label>
					<form method="post" name="uplongo_photo" id="s3_uplongo_fornt_img" enctype="multipart/form-data" action="https://beta.touchalife.hk/uplongo_img.php" style="padding: 0px; margin: 0px;">
						<div class="box">
							<input type="file" name="fornt_img" id="fornt_img" class="inputfile inputfile-6" onchange="readURLs3(this,'fornt_img');">
							<label for="fornt_img" class=""><span></span> 
								<strong>Document Upload (PDF/JPG)</strong>
							</label>
						</div>
						<input type="hidden" id="types" name="types" value="fornt_img">
					</form>
					<div id="s3_msg_fornt_img" style="line-height: 20px;text-align: left;margin-left: 2px;margin-top: -3px;"></div>
					<input type="hidden" class="form-control" id="bp_v_file_upload" name="v_file_upload">
				</div>
				
				<div class="col-md-5 col-sm-5 col-xs-12">
					<label class="lableedit ">Remark</label>
					<input type="text" class="form-control" id="bp_v_remark" />
				</div> 	
				<div class="col-md-2 col-sm-2 col-xs-12">
					<label class="lableedit ">Status</label>
					<select class="form-control" id="bp_visiting_status" name='bp_visiting_status' >
						<option value="0">Pending</option>
						<option value="2" >Rejected</option>
						<option value="1" >Approved</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<label class="lableedit ">Date</label>
					<input type="text" class="form-control datepickerdob" id="bp_v_date" />	
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input type="submit" name="submit_visiting" class="btn btn-primary" id="submit_visiting" value="Submit"/>
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