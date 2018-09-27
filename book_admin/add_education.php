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
						<a href="#">Education Details</a>
					</li>
				</ul>
			</div>
			<div class="row">
<?php
	if(isset($_GET['id'])){
		$me_id = $_GET['id'];
		$mdm = $con->query("select * from medium where medium_id = '$me_id'");
		if(mysqli_num_rows($mdm) > 0){
			$mr = mysqli_fetch_array($mdm);
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Medium Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<input type="hidden" id="me_id" name="me_id" value="<?php echo $me_id ; ?>" />
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $mr['medium_name']; ?>" id="m_name" name="m_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="edit_medum" name="edit_medum" value="Edit" />
									<a href="medium_list.php" class="btn default">List</a>	
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
								<span class="caption-subject bold uppercase">Medium Details</span>
							</div>	
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Medium Name" id="m_name" name="m_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="add_medum" name="add_medum" value="Add" />
									<a href="medium_list.php" class="btn default">List</a>	
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php } 
	if(isset($_GET['id'])){
		$cl_id = $_GET['id'];
		$cls = $con->query("select * from class where cl_id = '$cl_id'");
		if(mysqli_num_rows($cls) > 0){
			$cr = mysqli_fetch_array($cls);  
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Class Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<input type="hidden" id="cl_id" name="cl_id" value="<?php echo $cl_id ; ?>" />
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $cr['cl_name']; ?>" id="c_name" name="c_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="edit_cls" name="edit_cls" value="Edit" />
									<a href="class_list.php" class="btn default">List</a>	
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
								<span class="caption-subject bold uppercase">Class Details</span>
							</div>	
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Class Name" id="c_name" name="c_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="add_class" name="add_class" value="Add" />
									<a href="class_list.php" class="btn default">List</a>	
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
	if(isset($_GET['id'])){
		$b_id = $_GET['id'];
		$brd = $con->query("select * from board where board_id = '$b_id'");
		if(mysqli_num_rows($brd) > 0){
			$br = mysqli_fetch_array($brd);  
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Board Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
								<input type="hidden" id="b_id" name="b_id" value="<?php echo $b_id ?>" />
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $br['board_name']; ?>" id="b_name" name="b_name" />
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $br['board_short_name']; ?>" id="sh_name" name="sh_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="edit_brd" name="edit_brd" value="Edit" />
									<a href="board_list.php" class="btn default">List</a>	
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
								<span class="caption-subject bold uppercase">Board Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form method="post">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Board Name" id="b_name" name="b_name" />
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Short Name" id="sh_name" name="sh_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="add_brd" name="add_brd" value="Add" />
									<a href="board_list.php" class="btn default">List</a>	
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

	$("#add_medum").on('click', function(){
		//alert("0");
		var m_name = document.getElementById('m_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"m_name="+m_name,
			url:"ad_data.php?call=add_medium",
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
	
	$("#edit_medum").on('click', function(){
		//alert("0");
		var me_id = document.getElementById('me_id').value;
		var m_name = document.getElementById('m_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"m_name="+m_name+"&me_id="+me_id,
			url:"ad_data.php?call=edit_medium",
			success: function(html){
				//alert(html);
				if(html == 1){
					window.location = "medium_list.php";
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });
	
	$("#add_class").on('click', function(){
		//alert("0");
		var c_name = document.getElementById('c_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"c_name="+c_name,
			url:"ad_data.php?call=add_class",
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
	
	$("#edit_cls").on('click', function(){
		//alert("0");
		var cl_id = document.getElementById('cl_id').value;
		var c_name = document.getElementById('c_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"cl_id="+cl_id+"&c_name="+c_name,
			url:"ad_data.php?call=edit_class",
			success: function(html){
				//alert(html);
				if(html == 1){
					window.location = "class_list.php";
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });
	
	$("#add_brd").on('click', function(){
		//alert("0");
		var b_name = document.getElementById('b_name').value;
		var sh_name = document.getElementById('sh_name').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"b_name="+b_name+"&sh_name="+sh_name,
			url:"ad_data.php?call=add_board",
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
	
	$("#edit_brd").on('click', function(){
		var b_id = document.getElementById('b_id').value;
		var b_name = document.getElementById('b_name').value;
		var sh_name = document.getElementById('sh_name').value;
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"b_id="+b_id+"&b_name="+b_name+"&sh_name="+sh_name,
			url:"ad_data.php?call=edit_board",
			success: function(html){
				//alert(html);
				if(html == 1){
					window.location = "board_list.php";
				}else
				{
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