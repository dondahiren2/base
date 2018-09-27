<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include("../config.php");
	  if($_SESSION['uname'] == ""){
		header('location:index.php');
	  }
?>

<body class="page-header-fixed page-quick-sidebar-over-content ">

<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner">
		<div class="page-logo">
			<a href="index.php">
			Books For A Pourpose
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<?php include('top_naigation.php'); ?>
	</div>
</div>
<div class="clearfix">
</div>

<div class="page-container">
	<?php include("menu.php"); ?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<?php include('theme_panel.php'); ?>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="dashboard.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Category Details</a>
					</li>
				</ul>
			</div>
			<div class="row">
<?php
	if(isset($_GET['ms_id'])){
		$ms_id = $_GET['ms_id'];
		$mast = $con->query("select * from m_catagory where mc_id = '$ms_id'");
		if(mysqli_num_rows($mast) > 0){
			$mr = mysqli_fetch_array($mast);
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Master Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<input type="hidden" id="ms_id" name="ms_id" value="<?php echo $ms_id ; ?>" />
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $mr['mc_name']; ?>" id="m_name" name="m_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder" style="margin-top:60px;">
									<input type="submit" class="btn blue" id="edit_mast" name="edit_mast" value="Edit" />
									<a href="master_list.php" class="btn default">List</a>	
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php }}else{ ?>		
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Master Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Master Category Name" id="m_name" name="m_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder" style="margin-top:60px;">
									<input type="submit" class="btn blue" id="add_mast" name="add_mast" value="Add" />
									<a href="master_list.php" class="btn default">List</a>	
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php } 
	if(isset($_GET['pr_id'])){
		$pr_id = $_GET['pr_id'];
		$prm = $con->query("select * from p_catagory where pc_id = '$pr_id'");
		if(mysqli_num_rows($prm) > 0){
			$pr = mysqli_fetch_array($prm); 
			$mid = $pr['mc_id'];
			$mque = $con->query("select * from m_catagory where mc_id = $mid");
			$mnm = mysqli_fetch_array($mque); 
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Prime Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
									<input type="hidden" id="pid" name="pid" value="<?php echo $pr_id ?>" />
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="mu_id" name="mu_id">
											<option value="<?php echo $mnm['mc_id']; ?>"><?php echo $mnm['mc_name']; ?></option>
										<?php
											$mq = $con->query("select * from m_catagory");
											while($mn = mysqli_fetch_array($mq)){
										?>
											<option value="<?php echo $mn['mc_id'] ;?>"><?php echo $mn['mc_name']; ?></option>
										<?php		
											}
										?>
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $pr['pc_name']; ?>" id="p_name" name="p_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="edit_prime" name="edit_prime" value="Edit" />
									<a href="prime_list.php" class="btn default">List</a>	
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php }} else{ ?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Prime Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<select class="form-control m_id" id="m_id" name="m_id">
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Prime Category Name" id="p_name" name="p_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="add_prime" name="add_prime" value="Add" />
									<a href="prime_list.php" class="btn default">List</a>	
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php } ?>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
<?php
	if(isset($_GET['sb_id'])){
		$sb_id = $_GET['sb_id'];
		$sub = $con->query("select * from s_catagory where sc_id = '$sb_id'");
		if(mysqli_num_rows($sub) > 0){
			$sr = mysqli_fetch_array($sub); 
			$pid = $sr['pc_id'];
			$pque = $con->query("select * from p_catagory where pc_id = $pid");
			$pnm = mysqli_fetch_array($pque); 
			$mid = $sr['mc_id'];
			$mque = $con->query("select * from m_catagory where mc_id = $mid");
			$mnm = mysqli_fetch_array($mque); 
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Sub Category Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
								<input type="hidden" id="sid" name="sid" value="<?php echo $sb_id ?>" />
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="sm_id" name="sm_id">
											<option value="<?php echo $mnm['mc_id']; ?>"><?php echo $mnm['mc_name']; ?></option>
										<?php
											$pq = $con->query("select * from m_catagory");
											while($mn = mysqli_fetch_array($pq)){
										?>
											<option value="<?php echo $mn['mc_id'] ;?>"><?php echo $mn['mc_name']; ?></option>
										<?php		
											}
										?>
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="pu_id" name="pu_id">
											<option value="<?php echo $pnm['pc_id']; ?>"><?php echo $pnm['pc_name']; ?></option>
										<?php
											$pq = $con->query("select * from p_catagory");
											while($pn = mysqli_fetch_array($pq)){
										?>
											<option value="<?php echo $pn['pc_id'] ;?>"><?php echo $pn['pc_name']; ?></option>
										<?php		
											}
										?>
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $sr['sc_name']; ?>" id="s_name" name="s_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="edit_sub" name="edit_sub" value="Edit" />
									<a href="sub_list.php" class="btn default">List</a>	
								</div>
							</form>
						</div>
					</div>
				</div>	
	<?php }} else{ ?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Sub Category Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<select class="form-control m_id" id="sm_id" name="sm_id">
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="p_id" name="p_id">
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Sub Category Name" id="s_name" name="s_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="add_sub" name="add_sub" value="Add" />
									<a href="sub_list.php" class="btn default">List</a>	
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php } ?>
				<div class="col-md-3"></div>				
			</div>
		</div>
	</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<?php include('quick_sidebar.php'); ?>
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include('footer.php'); ?>

<script>
/*jQuery(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
});*/
</script>

<?php include("js.php"); ?>

<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
 var rough_enter1 = 0;
 $(document).ready(function() {
	  master_name();
	  prime_name();

	$("#add_mast").on('click', function(){
		//alert("0");
		var m_name = document.getElementById('m_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"m_name="+m_name,
			url:"ad_data.php?call=add_master",
			success: function(html){
				//alert(html);
				if(html == 1){
					//alert("Update Successfully.");
					//document.getElementById('m_name').value = '';
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });
	
	$("#edit_mast").on('click', function(){
		//alert("0");
		var mid = document.getElementById('ms_id').value;
		var m_name = document.getElementById('m_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"m_name="+m_name+"&mid="+mid,
			url:"ad_data.php?call=edit_master",
			success: function(html){
				//alert(html);
				if(html == 1){
					window.location = "master_list.php";
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });
	
	$("#add_prime").on('click', function(){
		//alert("0");
		var m_id = document.getElementById('m_id').value;
		var p_name = document.getElementById('p_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"m_id="+m_id+"&p_name="+p_name,
			url:"ad_data.php?call=add_prime",
			success: function(html){
				//alert(html);
				if(html == 1){
					//alert("Update Successfully.");
					//document.getElementById('m_name').value = '';
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });
	
	$("#edit_prime").on('click', function(){
		//alert("0");
		var m_id = document.getElementById('mu_id').value;
		var p_name = document.getElementById('p_name').value;
		var prid = document.getElementById('pid').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"m_id="+m_id+"&p_name="+p_name+"&prid="+prid,
			url:"ad_data.php?call=edit_prime",
			success: function(html){
				//alert(html);
				if(html == 1){
					//alert("Update Successfully.");
					document.getElementById('m_name').value = '';
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });
	
	$("#add_sub").on('click', function(){
		//alert("0");
		var p_id = document.getElementById('p_id').value;
		var s_name = document.getElementById('s_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"p_id="+p_id+"&s_name="+s_name,
			url:"ad_data.php?call=add_sub",
			success: function(html){
				//alert(html);
				if(html == 1){
					window.location = "prime_list.php";
					//alert("Update Successfully.");
					//document.getElementById('m_name').value = '';
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });
	
	$("#edit_sub").on('click', function(){
		//alert("0");
		var p_id = document.getElementById('pu_id').value;
		var s_name = document.getElementById('s_name').value;
		var sid = document.getElementById('sid').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"p_id="+p_id+"&s_name="+s_name+"&sid="+sid,
			url:"ad_data.php?call=edit_sub",
			success: function(html){
				//alert(html);
				if(html == 1){
					//alert("Update Successfully.");
					//document.getElementById('m_name').value = '';
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });
	
 });


function master_name(){
	//alert(1);
	$.ajax({
		type:"post",
		url:"ad_data.php?call=master_nm",
		success:function(msg){
			//alert(msg);
			$(".m_id").html(msg);
		}
	});
}

function prime_name(){
	//alert(1);
	$.ajax({
		type:"post",
		url:"ad_data.php?call=prime_nm",
		success:function(msg){
			//alert(msg);
			$("#p_id").html(msg);
		}
	});
}

 
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>