<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include("../config.php");
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
						<a href="#">Product Details</a>
					</li>
				</ul>
			</div>
			<div class="row">
<?php
	if(isset($_GET['p_id'])){
		$id = $_GET['p_id'];
		$prd = $con->query("select * from product where p_id = '$id'");
		if(mysqli_num_rows($prd) > 0){
			$r = mysqli_fetch_array($prd);
			
			$sid = $r['sc_id'];
			$sque = $con->query("select * from s_catagory where sc_id = $sid");
			$snm = mysqli_fetch_array($sque);

			$bid = $r['board_id'];
			$bque = $con->query("select * from board where board_id = $bid");
			$bnm = mysqli_fetch_array($bque);		

			$mid = $r['meduim_id'];
			$mque = $con->query("select * from medium where medium_id = $mid");
			$mnm = mysqli_fetch_array($mque);					
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Product Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=edit_product" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
								<div class="form-body">
								<input type="hidden" id="p_id" name="p_id" value="<?php echo $id; ?>" />
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="s_id" name="s_id">
											<option value="<?php echo $snm['sc_id']; ?>"><?php echo $snm['sc_name']; ?></option>
										<?php
											$sq = $con->query("select * from s_catagory");
											while($sn = mysqli_fetch_array($sq)){
										?>
											<option value="<?php echo $sn['sc_id']; ?>"><?php echo $sn['sc_name']; ?></option>
										<?php		
											}
										?>
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="b_id" name="b_id">
											<option value="<?php echo $bnm['board_id']; ?>"><?php echo $bnm['board_short_name']; ?></option>
										<?php
											$bq = $con->query("select * from board");
											while($bn = mysqli_fetch_array($bq)){
										?>
											<option value="<?php echo $bn['board_id']; ?>"><?php echo $bn['board_short_name']; ?></option>
										<?php		
											}
										?>
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="m_id" name="m_id">
											<option value="<?php echo $mnm['medium_id']; ?>"><?php echo $mnm['medium_name']; ?></option>
										<?php
											$mq = $con->query("select * from medium");
											while($mn = mysqli_fetch_array($mq)){
										?>
											<option value="<?php echo $mn['medium_id']; ?>"><?php echo $mn['medium_name']; ?></option>
										<?php		
											}
										?>
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $r['std_class']; ?>" id="class_nm" name="class_nm" />
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $r['product_name']; ?>" id="p_name" name="p_name" />
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="<?php echo $r['groups']; ?>" id="grp" name="grp" />
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<div class="box">
											<input type="file" name="prd_pic" id="prd_pic" class="inputfile inputfile-6" />
												<label for="prd_pic" class="nospace"><span id="reg_filenm"></span> 
													<strong>Upload Product Image</strong>
												</label>
										</div>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="edit_prod" name="edit_prod" value="Edit" />
									<a href="product_list.php" class="btn default">List</a>	
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
								<span class="caption-subject bold uppercase">Product Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=add_product" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="sub_id" name="sub_id">
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="bord_id" name="bord_id">
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="med_id" name="med_id">
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="cls_id" name="cls_id">
										</select>
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Product Name" id="p_name" name="p_name" />
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Group" id="grp" name="grp" />
										<label for="form_control_1"></label>
									</div>
									<div class="form-group form-md-line-input has-info">
										<div class="box">
											<input type="file" name="prd_pic" id="prd_pic" class="inputfile inputfile-6" />
												<label for="prd_pic" class="nospace"><span id="reg_filenm"></span> 
													<strong>Upload Product Image</strong>
												</label>
										</div>
									</div>
								</div>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="add_prod" name="add_prod" value="Add" />
									<a href="product_list.php" class="btn default">List</a>	
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php } ?>
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


<?php include("js.php"); ?>

<script type="application/javascript" >
var requ;
var page = 1;
var fields = "";
var ord_sort = "";
var rough_enter = 0;
 var rough_enter1 = 0;
 $(document).ready(function() {
	 sub_name();
	 board_name();
	 midium_name();
	 class_name();
	
	/*$("#add_prod").on('click', function(){
		//alert("0");
		var sub_id = document.getElementById('sub_id').value;
		var bord_id = document.getElementById('bord_id').value;
		var med_id = document.getElementById('med_id').value;
		var class_nm = document.getElementById('class_nm').value;
		var p_name = document.getElementById('p_name').value;
		var grp = document.getElementById('grp').value;
		var prd_pic = document.getElementById('prd_pic').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"sub_id="+sub_id+"&bord_id="+bord_id+"&med_id="+med_id+"&class_nm="+class_nm+"&p_name="+p_name+"&grp="+grp+"&prd_pic="+prd_pic,
			url:"ad_data.php?call=add_product",
			success: function(html){
				//alert(html);
				if(html == 1){
					alert("Insert Successfully.");
					//document.getElementById('m_name').value = '';
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });*/
	
	/*$("#edit_prod").on('click', function(){
		//alert("0");
		var sub_id = document.getElementById('s_id').value;
		var bord_id = document.getElementById('b_id').value;
		var med_id = document.getElementById('m_id').value;
		var class_nm = document.getElementById('class_nm').value;
		var p_name = document.getElementById('p_name').value;
		var grp = document.getElementById('grp').value;
		var p_id = document.getElementById('p_id').value;
		var prd_pic = document.getElementById('prd_pic').value;
		
		if(requ && requ.readyState != 4)
		{
		requ.abort();
		}
		requ = $.ajax({
			type:"POST",
			data:"sub_id="+sub_id+"&bord_id="+bord_id+"&med_id="+med_id+"&class_nm="+class_nm+"&p_name="+p_name+"&grp="+grp+"&p_id="+p_id+"&prd_pic="+prd_pic,
			url:"ad_data.php?call=edit_product",
			success: function(html){
				//alert(html);
				if(html == 1){
					//alert("Insert Successfully.");
					//document.getElementById('m_name').value = '';
				}else
				{
					alert("Try Again.");
				}	
			}
		});
					
    });*/
	
 });
 
function sub_name(){
	//alert(1);
	$.ajax({
		type:"post",
		url:"ad_data.php?call=sub_nm",
		success:function(msg){
			//alert(msg);
			$("#sub_id").html(msg);
		}
	});
}
 
function board_name(){
	//alert(1);
	$.ajax({
		type:"post",
		url:"ad_data.php?call=board_nm",
		success:function(msg){
			//alert(msg);
			$("#bord_id").html(msg);
		}
	});
}

function midium_name(){
	//alert(1);
	$.ajax({
		type:"post",
		url:"ad_data.php?call=midium_nm",
		success:function(msg){
			//alert(msg);
			$("#med_id").html(msg);
		}
	});
}

function class_name(){
	//alert(1);
	$.ajax({
		type:"post",
		url:"ad_data.php?call=class_nm",
		success:function(msg){
			//alert(msg);
			$("#cls_id").html(msg);
		}
	});
}
 
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>