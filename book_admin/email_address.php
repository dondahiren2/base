<?php 
	include("header.php");
?>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="<?php echo $admin_url?>technical_management">Technical Management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $admin_url?>email_address_list">Email Address List</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Email Address</a>
		</li>
	</ul>
</div>
	<div class="row">
<?php
	if(isset($_GET['ids'])){
		$m_id = base64_decode($_GET['ids']);
		$mast = $con->query("select ea_id, ea_address, ea_uname, ea_pass, ea_host, ea_port, ea_status from email_address where ea_id = '$m_id' ");
		if(mysqli_num_rows($mast) > 0){
			$r = mysqli_fetch_array($mast);
?>
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Edit Email Address</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p class="text_margin_0">Email Address :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="Email Address" id="ea_address" name="ea_address" value="<?php echo $r['ea_address'] ?>" />
									<input type="hidden" class="" id="ea_id" name="ea_id" value="<?php echo $r['ea_id'] ?>" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">UserName</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="UserName" id="ea_uname" name="ea_uname" value="<?php echo $r['ea_uname'] ?>"/>
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Password</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="Password" id="ea_pass" name="ea_pass" value="<?php echo $r['ea_pass'] ?>" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Host</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="Host Name" id="ea_host" name="ea_host" value="<?php echo $r['ea_host'] ?>" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Port</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="Host Name" id="ea_port" name="ea_port" value="<?php echo $r['ea_port'] ?>" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control" id="ea_status" name="ea_status" >
										<option value="0" <?php if($r['ea_status'] == 0){ echo 'selected'; } ?> >Yes</option>
										<option value="1" <?php if($r['ea_status'] == 1){ echo 'selected'; } ?>>No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>email_address_list" class="btn btn-primary">List</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
	<?php 
		}
	} else { ?>		
				<div class="col-md-6 col-md-offset-3">
					<div class="portlet light bordered">
						<div class="row">
							<h3 class="col-xs-12 form-title">Create Email Address</h3>
						</div>
						<div class="portlet-body ">
							<div class="row">
								<div class="col-xs-12">
									<p class="text_margin_0">Email Address :</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="Email Address" id="ea_address" name="ea_address" />
									<input type="hidden" class="" id="ea_id" name="ea_id" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">UserName</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="UserName" id="ea_uname" name="ea_uname"/>
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Password</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="Password" id="ea_pass" name="ea_pass" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Host</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="Host Name" id="ea_host" name="ea_host" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Port</p>
								</div>
								<div class="col-xs-12">
									<input type="text" class="form-control getData" placeholder="Host Name" id="ea_port" name="ea_port" />
								</div>
								<div class="col-xs-12">
									<p class="text_margin_0">Display</p>
								</div>
								<div class="col-xs-12">
									<select class="form-control getData" id="ea_status" name="ea_status" >
										<option value="0">Yes</option>
										<option value="1">No</option>
									</select>
								</div>
								<div class="col-xs-12 footer_border">
									<input type="submit" class="btn btn-primary" id="add_mast" name="add_mast" value="Submit" />
									<a href="<?php echo $admin_url?>email_address_list" class="btn btn-primary">List</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
	<?php 
	} 
	?>
	</div>
<?php include('footer.php'); ?>
 
<script>
var requ;
 $(document).ready(function() {
	$(".nav_technical_management").addClass('active_head');
	 
	$("#add_mast").on('click', function(){
		var ea_id = document.getElementById('ea_id').value;
		var ea_address = document.getElementById('ea_address').value;
		var ea_uname = document.getElementById('ea_uname').value;
		var ea_pass = document.getElementById('ea_pass').value;
		var ea_host = document.getElementById('ea_host').value;
		var ea_port = document.getElementById('ea_port').value;
		
		if(ea_address == ''){
			alert('Enter Email Address.');
		} else if(ea_uname == ''){
			alert('Enter UserName.');
		} else if(ea_pass == ''){
			alert('Enter Password.');
		} else if(ea_host == ''){
			alert('Enter Host.');
		} else if(ea_port == ''){
			alert('Enter Port.');
		} else {
			
			var idArray = [];
			var valueArray = [];
			
			$('.getData').each(function() {
				var elt = $("#"+this.id).attr('type');
				if(elt == 'checkbox'){
					var checkboxc = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						checkboxc += this.value+'part';
					});				
					idArray.push(this.name);
					valueArray.push(checkboxc);
				} else if(elt == 'radio'){
					var radios = '';
					$('input[name="'+this.name+'"]:checked').each(function() {
						radios += this.value;
					});				
					idArray.push(this.name);
					valueArray.push(radios);
				} else {
					idArray.push(this.id);
					valueArray.push(this.value);
				}
			});
		
			if(requ && requ.readyState != 4) {
				requ.abort();
			}
			requ = $.ajax({
				type:"POST",
				data:"idArray="+idArray+"&valueArray="+valueArray+"&id="+ea_id,
				url:"<?php echo $admin_url?>ad_data.php?call=add_email",
				beforeSend: function(){
					$(".response_gif").show();
				},
				success: function(html){
					if(html == 1){
						alert("Insert Successfully.");
						document.getElementById('ea_address').value = '';
						document.getElementById('ea_uname').value = '';
						document.getElementById('ea_pass').value = '';
						document.getElementById('ea_host').value = '';
						document.getElementById('ea_port').value = '';
						document.getElementById('ea_id').value = '';
					} else if(html == 2){
						alert("Update Successfully.");
					} else {
						alert("Try Again.");
					}
					$(".response_gif").hide();
				}
			});
		}
    });
});
</script>
</body>
</html>