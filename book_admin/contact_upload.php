<?php 
	include("header.php");
?>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
						<i class="fa fa-home"></i>
						<a href="contact">contact</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Contact upload</a>
					</li>
		</ul>
	</div>
<aside class="right-side">
	<section class="content">
		<div class="row"> 
			<div class="col-md-12">
				<div class="box box-primary" style="padding-bottom:20px;">
					<div style="margin-bottom:50px;overflow-x:auto;text-align:center;margin-top: 15px;" class="col-md-12">
						 <div class="col-md-12" style="padding: 10px;border: 1px solid #2980b9;border-radius: 10px !important;">
						<div class="col-md-3">
							<div style="float:left;font-size:20px;color: #2980b9;">Upload Contact list</div>
						</div>
						<form action="ad_data.php?call=contact_upload" method="post" enctype="multipart/form-data">
						<div class="col-md-5">
						
						<input type="file" name="files" id="prd_pic" class="inputfile inputfile-6" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
							<label for="prd_pic" class="nospace"><span id="reg_filenm"></span> 
								<strong>Select Excel File</strong>
							</label>
						</div>
						<div class="col-md-2">
							<input type="Submit" class="form-control saerchbtn" value="Import" name="submitexcel" style="background-color: rgb(46, 158, 177);color: rgb(255, 255, 255);" onclick="" />
						</div>
						</form>
					</div>
						
						
					</div>
				</div>
			</div><!--/.col (left) -->
		</div><!-- /.row (main row) -->
	</section><!-- /.content -->
</aside>

<?php include('footer.php'); ?>
<script type="application/javascript" >
	$(document).ready(function() {
		$(".nav_contact").addClass('active_head');		
	}); 	
</script>
</body>
</html>