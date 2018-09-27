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
						<a href="#">Invite School / Ngo</a>
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
				<span class="caption-subject bold uppercase">Invite School / Ngo</span>
			</div>
		</div>
			<form role="form" id="ngoform" action="user_data.php?call=invite_scl_vol" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
			<input type="hidden" id="ngo_id" name="ngo_id" value="<?php echo $ng_id; ?>" />
			<section style="margin-bottom:20px;">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>Select Project :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div style="float:left;margin-right:5px;">
								<select class="form-control" id="proj_id" name="proj_id" onchange="scl_name(this.value);volun_list(this.value);stud_in_list(this.value);">
									
								</select>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<input class="form-control saerchbtn" type="button" id="all_stud" name="all_stud" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" value="Select All"/>
						</div>
					</div>
					
				</section>
				<section style="margin-bottom:20px;">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p>Select For Invite :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div style="float:left;margin-right:5px;">
								<input class="rdio" type="radio" value="school" id="school" name="invite" onclick="show_form()" style="float:left;"/>
							</div>
							<div style="float:left;margin-right:15px;margin-top:2px;">
								<p>School</p>
							</div>
							<div style="float:left;margin-right:5px;">
								<input class="rdio" type="radio" id="volun" value="volunteer" name="invite" onclick="show_form()" style="float:left;"/>
							</div>
							<div style="float:left;margin-top:2px;"><p>Volunteer</p></div>
							<div style="float:left;margin-right:5px;">
								<input class="rdio" type="radio" id="stud" value="student" name="invite" onclick="show_form()" style="float:left;margin-left: 20px;"/>
							</div>
							<div style="float:left;margin-top:2px;"><p>Student</p></div>
						</div>
					</div>

				</section>
				
				<section id="school_frm" style="display:none;">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:18px;">School Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group" id="schl_list"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:18px;">Message :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group"> 
								<textarea class="form-control" placeholder="Message" id="scl_msg" name="scl_msg"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div style="float:left;margin-right:10px;margin-top:2px;">
								<p>SMS :</p>
							</div>
							<div class="form-group" style="float:left;"> 
								<input type="checkbox" id="scl_sms" name="scl_sms" class="checkbox" title="Send Through SMS">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12"> 
							<div style="float:left;margin-right:10px;margin-top:2px;">
								<p>Mail :</p>
							</div>
							<div class="form-group" style="float:left;"> 
								<input type="checkbox" id="scl_mail" name="scl_mail" class="checkbox" title="Send Through Mail">
							</div>
						</div>
					</div>
				</section>
				<section id="volun_frm" style="display:none;">
					<!--<input type="hidden" id="proj_id" name="proj_id" value="" />-->
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:18px;">Volunteer Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group" id="volun_list"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:18px;">Message :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group"> 
								<textarea class="form-control" placeholder="Message" id="vl_msg" name="vl_msg"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div style="float:left;margin-right:10px;margin-top:2px;">
								<p>SMS :</p>
							</div>
							<div class="form-group" style="float:left;"> 
								<input type="checkbox" id="vl_sms" name="vl_sms" class="checkbox" title="Send Through SMS">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div style="float:left;margin-right:10px;margin-top:2px;">
								<p>Mail :</p>
							</div>
							<div class="form-group" style="float:left;"> 
								<input type="checkbox" id="vl_mail" name="vl_mail" class="checkbox" title="Send Through Mail">
							</div>
						</div>
					</div>
				</section>
				<section id="stud_frm" style="display:none;">
					<!--<input type="hidden" id="proj_id" name="proj_id" value="" />-->
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:18px;">Student Name :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">

							<div class="form-group" id="stud_in_list"> 
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<p style="margin-top:18px;">Message :</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="form-group"> 
								<textarea class="form-control" placeholder="Message" id="st_msg" name="st_msg"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div style="float:left;margin-right:10px;margin-top:2px;">
								<p>SMS :</p>
							</div>
							<div class="form-group" style="float:left;"> 
								<input type="checkbox" id="st_sms" name="st_sms" class="checkbox" title="Send Through SMS">
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div style="float:left;margin-right:10px;margin-top:2px;">
								<p>Mail :</p>
							</div>
							<div class="form-group" style="float:left;"> 
								<input type="checkbox" id="st_mail" name="st_mail" class="checkbox" title="Send Through Mail">
							</div>
						</div>
					</div>
				</section>
				<div class="form-actions noborder">
					<input type="submit" class="btn blue" id="scl_invite" name="scl_invite" value="Submit" />
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

	
	proj_name();
	
	$(window).load(function() {
		$(".loader").fadeOut("slow");
	});
	//alert("1");
	               
	
        $("#all_stud").click(function () {
        	if(document.getElementById("school").checked == true){
            $(".school:checkbox:not(:disabled)").attr('checked', true);
        	}else if(document.getElementById("volun").checked == true){
            $(".volunteer:checkbox:not(:disabled)").attr('checked', true);
        	}else if(document.getElementById("stud").checked == true){
            $(".stud:checkbox:not(:disabled)").attr('checked', true);
        	}
        });
   
});

function scl_name(proj_id){
	//alert(stat_no);
	var ngo_id = document.getElementById('ngo_id').value;
	$.ajax({
		type:"post",
		data:"ngo_id="+ngo_id+"&proj_id="+proj_id, 
		url:"user_data.php?call=schl_list",
		success:function(msg){
			//alert(msg);
			$("#schl_list").html(msg);
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

function volun_list(proj_id){
	//alert(stat_no);
	var ngo_id = document.getElementById('ngo_id').value;
	$.ajax({
		type:"post",
		data:"ngo_id="+ngo_id+"&proj_id="+proj_id, 
		url:"user_data.php?call=volun_list",
		success:function(msg){
			//alert(msg);
			$("#volun_list").html(msg);
		}
	});
}

function stud_in_list(proj_id){
	//alert(stat_no);
	var ngo_id = document.getElementById('ngo_id').value;
	$.ajax({
		type:"post",
		data:"ngo_id="+ngo_id+"&proj_id="+proj_id, 
		url:"user_data.php?call=stud_in_list",
		success:function(msg){
			//alert(msg);
			$("#stud_in_list").html(msg);
		}
	});
}

function show_form(){
	//alert("1");
	if(document.getElementById("school").checked == true){
		$("#school_frm").css({"display":"block"});
		$("#volun_frm").css({"display":"none"});
		$("#stud_frm").css({"display":"none"});
	}else if(document.getElementById("volun").checked == true){
		$("#school_frm").css({"display":"none"});
		$("#volun_frm").css({"display":"block"});
		$("#stud_frm").css({"display":"none"});
	}else if(document.getElementById("stud").checked == true){
		$("#school_frm").css({"display":"none"});
		$("#volun_frm").css({"display":"none"});
		$("#stud_frm").css({"display":"block"});
	}else {
		$("#school_frm").css({"display":"none"});   
		$("#volun_frm").css({"display":"none"});  
		$("#stud_frm").css({"display":"none"}); 
	}
}

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>