		</div>
	</div>
</div>

<div class="page-footer" style="text-align:center;">
	<div class="page-footer">
		<?php echo date('Y');?> &copy; Touch A Life.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>

<script src="<?php echo $admin_url;?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $admin_url;?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo $admin_url;?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--   
<script src="<?php echo $admin_url;?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $admin_url;?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $admin_url;?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $admin_url;?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
-->
<script src="<?php echo $admin_url;?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo $admin_url;?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $admin_url;?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="<?php echo $admin_url;?>js/jquery.form.js"></script>
 
<script>
jQuery(document).ready(function() {
	$( ".datepickerdob" ).datepicker({ 
		dateFormat: 'dd-mm-yy',
		changeMonth: true,
		changeYear: true 
	}).val();
    
	$( ".datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
});


notification();
function notification(){
	$.ajax({
		url: "<?php echo $site_url?>data.php?call=notification",
		type: "POST",
		success: function (data) {
			var split = data.split('spliting');
			$("#notifications-wrapper").html(split[0]);
			$("#notificationCount").html(split[1]);
		}
	});
}

</script>