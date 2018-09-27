<!DOCTYPE html>

<html lang="en">
<?php include("header.php");
	  include("../config.php");
?>

<script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>
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
						<a href="#">Send Mail</a>
					</li>
				</ul>
			</div>
			<div class="row">		
				<div class="col-md-12">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Mail</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=send_mail" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Email Id" id="mail_id" name="mail_id" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Mail Subject" id="mail_sub" name="mail_sub" />
										<label for="form_control_1"></label>
									</div>
								</div>
								
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<textarea class="form-control" placeholder="Mail message" id="mail_msg" name="mail_msg"></textarea>
										<label for="form_control_1"></label>
									</div>
								</div>
								<script>
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace( 'mail_msg' );
					</script>
								<div class="form-actions noborder">
									<input type="submit" class="btn blue" id="mail_send" name="mail_send" value="Send" />
									
								</div>
							</form>
						</div>
					</div>
				</div>
		
			</div>
		</div>
	</div>
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<?php include('quick_sidebar.php'); ?>
</div>
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
	
 });
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>