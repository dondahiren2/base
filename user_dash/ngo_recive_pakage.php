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

<script type="text/javascript" src="webcam.js"></script>
<link rel="stylesheet" type="text/css" href="wabcamcss.css" />

<head>
<style>
#results { float:right; width:100%; border:0px solid; background:none;margin:0px;}
</style>
</head>

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
						<a href="#">Receive Package</a>
					</li>
				</ul>
				
			</div>
			<div class="row">
<?php 
		//$proj_id = $_SESSION['db_id'];
		$ng_id = $_SESSION['ngo_db_id'];
			
?>

<div class="col-md-12">
	
	<div class="portlet light bordered">
		<div class="portlet-title">
			<div class="caption font-red-sunglo">
				<i class="icon-settings font-red-sunglo"></i>
				<span class="caption-subject bold uppercase">Receive Package </span>
			</div>
		</div>
			<form role="form" id="ngoform" action="user_data.php?call=recieve_package" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
			<input type="hidden" id="ngo_id" name="ngo_id" value="<?php echo $ng_id; ?>" />
			
			<section style="margin-bottom:20px;">
					<div class="row" style="margin-bottom:20px;">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>Select Project :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div style="margin-right:5px;">
								<select class="form-control" id="proj_id" name="proj_id">
									
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>Select Type :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="form-control" id="user_type" name="user_type">
								<option value="student">Student</option>
								<option value="ngo">NGO</option>
								<option value="volunteer">Volunteer</option>
								<option value="school">School</option>
							</select>
						</div>
					</div>
				</section>
				<section style="margin-bottom:20px;">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>User id :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="User Id" id="user_id" name="user_id" value="" onchange="updatestatus(this.value);"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>Select Order Id :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<select class="form-control" id="ord_id" name="ord_id">
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>OR</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>Photo :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 ripadding" >
							<div class="box">
								<input type="file" name="profile_pic" id="profile_pic" class="inputfile inputfile-6"/>
								<label for="profile_pic" class=""><span></span> 
									<strong>Upload Photo (PDF/JPG)</strong>
								</label>
							</div>
						</div>
						<div id="results"></div>
							<a onclick="take_pic()" id="prof">Take Photo </a>
							<input type="hidden" value="" name="profile_takepic" id="profile_takepic" />
						<div id="prof_disp" class="popup" style="display:none;text-align: -webkit-center;">
							<div id="prof_pic"></div>
							<input type="button" value="Take Photo" id="profile" onClick="take_snapshot()"/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>Order id :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control required" placeholder="Order Id" id="order_id" name="order_id" /> 
							</div>
						</div>
					</div>
				</section>
				<div class="form-actions noborder">
					<input type="submit" class="btn blue" id="rec_package" name="rec_package" value="Submit" />
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

<script language="JavaScript">  
	Webcam.set({
		width: 600,
		height: 450,
		image_format: 'jpeg',
		jpeg_quality: 90
	});
	Webcam.attach('#prof_pic'); 

</script>

<script>
$(document).ready(function(){

	proj_name();
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
	
	               
	
});

function take_pic() {
	$('#prof_disp').css({"display":"block"});
}

function take_snapshot() {
	Webcam.snap( function(data_uri) {
		document.getElementById('results').innerHTML = 
			'<h2>Processing:</h2>';
		Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
			var displaypath = '../'+text;
			//alert(displaypath);
			document.getElementById("profile_pic").disabled = true;
			document.getElementById("profile_takepic").value = text;
			document.getElementById('results').innerHTML = 
			'<img src="'+displaypath+'" style="height:150px;width:150px;"/>';
			$('#profile').toggle('hide');
			$('#prof_disp').css({"display":"none"});
			document.getElementById('order_id').focus;
		} );	
	} );
}

function updatestatus(val){
	var type = document.getElementById('user_type').value;
	var proj_id = document.getElementById('proj_id').value;
	$.ajax({
		type:"POST",
		data:"type="+type+"&val="+val+"&proj_id="+proj_id,
		url:"user_data.php?call=update_or_status",
		success: function(msg){
			//alert(msg);
			$('#ord_id').html(msg);
		}
	});
}

function update_order_status(idval){
	//alert("1");
	var spl_id = idval.split("-");
	var id1 = spl_id[0];
	var id2 = spl_id[1];
	$.ajax({
		type:"POST",
		data:"id1="+id1+"&id2="+id2,
		url:"user_data.php?call=update_ord_status",
		success: function(msg){
			//alert(msg);
			if(msg == "1"){
				//alert("your Order Status Update Successfully");
			}else{
				//alert("your Order Status Not Update Successfully");
			}
		}
	});
}

function proj_name(){
	//alert(stat_no);
	var ng_id = document.getElementById('ngo_id').value;
	$.ajax({
		type:"post",
		data:"ng_id="+ng_id, 
		url:"user_data.php?call=proj_list",
		success:function(msg){
			//alert(msg);
			$("#proj_id").html(msg);
		}
	});
}

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>