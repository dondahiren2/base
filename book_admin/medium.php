<?php 
	include("header.php");
?>
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
			<div class="col-md-3"></div>
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
							<form role="form" id="primeform" action="ad_data.php?call=edit_medium" method="post" >
								<input type="hidden" id="me_id" name="me_id" value="<?php echo $me_id ; ?>" />
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Medium Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" value="<?php echo $mr['medium_name']; ?>" id="m_name" name="m_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="form-actions noborder">
										<input type="submit" class="btn blue" id="edit_medum" name="edit_medum" value="Edit" />
										<a href="medium_list.php" class="btn default">List</a>	
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
		
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
							<form role="form" id="primeform" action="ad_data.php?call=add_medium" method="post" >
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Medium Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" placeholder="Medium Name" id="m_name" name="m_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="form-actions noborder">
										<input type="submit" class="btn blue" id="add_medum" name="add_medum" value="Add" />
										<a href="medium_list.php" class="btn default">List</a>	
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php } ?>
			<div class="col-md-3"></div>				
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

	/*$("#add_medum").on('click', function(){
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
					
    });*/
	
	/*$("#edit_medum").on('click', function(){
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
					
    });*/
	
 });

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>