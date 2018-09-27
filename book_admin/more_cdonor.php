<?php 
	include("header.php");
	$ngo_id = 18;
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="dashboard.php">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="cdonor_list.php">corporate Donor List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">corporate Donor Details</a>
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
	$("#edit_cdon").on('click', function(){
		var status = document.getElementById('status').value;
		var id = document.getElementById('id').value; 
		if(requ && requ.readyState != 4) {
			requ.abort();
		}
		
		requ = $.ajax({
			type:"POST",
			data:"status="+status+"&id="+id,
			url:"ad_data.php?call=edit_cdonor",
			success: function(html){
				if(html == 1){
					document.getElementById('status').value = '';
					window.location = "cdonor_list.php";
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