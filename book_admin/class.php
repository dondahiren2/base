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
							<form role="form" id="primeform" action="ad_data.php?call=edit_class" method="post" >
								<input type="hidden" id="cl_id" name="cl_id" value="<?php echo $cl_id ; ?>" />
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Class Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" value="<?php echo $cr['cl_name']; ?>" id="c_name" name="c_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="form-actions noborder">
										<input type="submit" class="btn blue" id="edit_cls" name="edit_cls" value="Edit" />
										<a href="class_list.php" class="btn default">List</a>	
									</div>
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
							<form role="form" id="primeform" action="ad_data.php?call=add_class" method="post" >
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Class Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" placeholder="Class Name" id="c_name" name="c_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="form-actions noborder">
										<input type="submit" class="btn blue" id="add_class" name="add_class" value="Add" />
										<a href="class_list.php" class="btn default">List</a>	
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

	/*$("#add_class").on('click', function(){
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
					
    });*/
	
 });

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>