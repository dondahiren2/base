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
							<form role="form" id="primeform" action="ad_data.php?call=edit_board" method="post" >
							<input type="hidden" id="b_id" name="b_id" value="<?php echo $b_id ?>" />
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Board Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" value="<?php echo $br['board_name']; ?>" id="b_name" name="b_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Short Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" value="<?php echo $br['board_short_name']; ?>" id="sh_name" name="sh_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="form-actions noborder">
										<input type="submit" class="btn blue" id="edit_brd" name="edit_brd" value="Edit" />
										<a href="board_list.php" class="btn default">List</a>	
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
								<span class="caption-subject bold uppercase">Board Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" id="primeform" action="ad_data.php?call=add_board" method="post" >
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Board Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" placeholder="Board Name" id="b_name" name="b_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Short Name :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" class="form-control" placeholder="Short Name" id="sh_name" name="sh_name" />
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="form-actions noborder">
										<input type="submit" class="btn blue" id="add_brd" name="add_brd" value="Add" />
										<a href="board_list.php" class="btn default">List</a>	
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
	
	/*$("#add_brd").on('click', function(){
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
					
    });*/
	
 });

</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>