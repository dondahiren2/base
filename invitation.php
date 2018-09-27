<?php
	include("header.php");
	include('../config.php');
	if(isset($_SESSION['ermsg']) and $_SESSION['ermsg'] != ''){
		echo "<script>alert('".$_SESSION['ermsg']."')</script>";
		$_SESSION['ermsg'] = '';
	}else {
		//echo "<script>alert('session not stored');</script>";
	}
?>

<!DOCTYPE html>

<html lang="en">

<body class="page-header-fixed page-quick-sidebar-over-content ">
<div class="loader"></div>
<div class="page-header navbar navbar-fixed-top">

	<div class="page-header-inner">
		
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
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Invite For Project</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php 
		//date('m/d/y', strtotime($date));
		$proj_id = $_SESSION['db_id'];
			
?>

<div class="col-md-12">
	
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-red-sunglo">
				<i class="icon-settings font-red-sunglo"></i>
				<span class="caption-subject bold uppercase">Invite NGO</span>
			</div>
		</div>
			<form role="form" id="ngoform" action="user_data.php?call=invite_ngo" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
			
				<section>
					<input type="hidden" id="proj_id" name="proj_id" value="<?php echo $proj_id;  ?>" />
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:18px;">NGO Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group" id="ngo_list"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:18px;">Message :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group"> 
								<textarea class="form-control" placeholder="Message" id="msg" name="msg"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div style="float:left;margin-right:10px;margin-top:2px;">
								<p>SMS :</p>
							</div>
							<div class="form-group" style="float:left;"> 
								<input type="checkbox" id="sms" name="sms" class="checkbox" title="Send Through SMS">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div style="float:left;margin-right:10px;margin-top:2px;">
								<p>Mail :</p>
							</div>
							<div class="form-group" style="float:left;"> 
								<input type="checkbox" id="mail" name="mail" class="checkbox" title="Send Through Mail">
							</div>
						</div>
					</div>
				</section>
				<div class="form-actions noborder">
					<input type="submit" class="btn blue" id="edit_ngo" name="edit_ngo" value="Submit" />
					<input type="clear" class="btn default" value="Cancel"/>
				</div>
				
			</form>
		</div>
	</div>
</div>
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

<script>
$(document).ready(function(){

	ngo_name();
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
	//alert("1");
	               
	
});

function ngo_name(){
	//alert(stat_no);
	var proj_id = "<?php echo $proj_id; ?>";
	$.ajax({
		type:"post",
		data:"proj_id="+proj_id, 
		url:"user_data.php?call=ngo_list",
		success:function(msg){
			//alert(msg);
			$("#ngo_list").html(msg);
		}
	});
}

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>