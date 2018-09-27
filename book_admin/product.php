<?php 
	include("header.php");
?>
<script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="product_service_master">Product & Service Master</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Product Details</a>
		</li>
	</ul>
</div>
<div class="row">
<?php
	if(isset($_GET['p_id'])){
		$id = $_GET['p_id'];
		$prd = $con->query("select * from product where p_id = '$id'");
		if(mysqli_num_rows($prd) > 0){
			$r = mysqli_fetch_array($prd);					
?>
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Update Product Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=edit_product" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
								<input type="hidden" id="p_id" name="p_id" value="<?php echo $id; ?>" />
								<input type="hidden" id="pr_id" name="pr_id" value="<?php echo $r['proj_id']; ?>" />
								<input type="hidden" id="ven_id" name="ven_id" value="<?php echo $r['pre_vendor']; ?>" />
									<div class="form-group form-md-line-input has-info">
										<label for="form_control_1">Projects : </label>
											<div class="" id="projects" style="margin-top:12px;">
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Product Title :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['p_title']; ?>" id="p_title" name="p_title" placeholder="Product Title"/>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Master Category :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control" id="mst_id" name="mst_id" onchange="prime_nm()">
												<?php if($r['mc_id'] == ""){echo '<option value = "">Select any </option>';} ?>
												<?php $co_nm = $con->query("select mc_id,mc_name from m_catagory");
												$country_id = "";
												while($mn = mysqli_fetch_array($co_nm)){
													if($r['mc_id'] == $mn['mc_id']){
														$selected = 'selected';
														$country_id = $mn['mc_id'];
													}else{
														$selected = '';
													}
													
												?>
													<option value="<?php echo $mn['mc_id']; ?>" <?php echo $selected ?> ><?php echo $mn['mc_name']; ?></option>
												<?php 
													}
												?>
											</select>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Prime category :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control" id="prm_id" name="prm_id">
												<?php if($r['pc_id'] == ""){echo '<option value = "">Select any </option>';} ?>
												<?php $co_nm = $con->query("select pc_id,pc_name from p_catagory");
												$country_id = "";
												while($mn = mysqli_fetch_array($co_nm)){
													if($r['pc_id'] == $mn['pc_id']){
														$selected = 'selected';
														$country_id = $mn['pc_id'];
													}else{
														$selected = '';
													}
													
												?>
													<option value="<?php echo $mn['pc_id']; ?>" <?php echo $selected ?> ><?php echo $mn['pc_name']; ?></option>
												<?php 
													}
												?>
											</select>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Sub category :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control" id="sub_id" name="sub_id">
												<?php if($r['sub_id'] == ""){echo '<option value = "">Select any </option>';} ?>
												<?php $co_nm = $con->query("select sc_id,sc_name from s_catagory");
												$country_id = "";
												while($mn = mysqli_fetch_array($co_nm)){
													if($r['sub_id'] == $mn['sc_id']){
														$selected = 'selected';
														$country_id = $mn['sc_id'];
													}else{
														$selected = '';
													}
													
												?>
													<option value="<?php echo $mn['sc_id']; ?>" <?php echo $selected ?> ><?php echo $mn['sc_name']; ?></option>
												<?php 
													}
												?>
											</select>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Company Name :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['comp_name']; ?>" id="b_name" name="b_name" placeholder="Company Name"/>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Item No :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['item_no']; ?>" id="item_no" name="item_no" placeholder="Item No"/>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Size :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['size']; ?>" id="p_size" name="p_size" placeholder="Size"/>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Color :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['color']; ?>" id="p_color" name="p_color" placeholder="Color" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<!--<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" value="" id="p_qty" name="p_qty" placeholder="Quantity" />
										<label for="form_control_1"></label>
									</div>-->
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">MOU :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control" id="mou" name="mou">
												<?php if($r['p_mou'] == ""){echo '<option value = "">Select MOU </option>';} else{echo '<option value = '.$r["p_mou"].'>'.$r["p_mou"].' </option>' ;} ?>
												<option value="KG">KG</option>
												<option value="GM">GM</option>
												<option value="ML">ML</option>
												<option value="Lit">Lit </option>
												<option value="Pcs">Pcs </option>
											</select>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Unit :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['unit']; ?>" id="unit" name="unit" placeholder="Unit" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Estimate Price :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['esti_price']; ?>" id="e_price" name="e_price" placeholder="Estimate Price"/>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Logistic Price :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['logis_price']; ?>" id="l_price" name="l_price" placeholder="Logistic Price"/>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Management Price :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" value="<?php echo $r['manage_price']; ?>" id="m_price" name="m_price" placeholder="Management Price"/>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<img src="<?php if($r['p_image'] == "") echo $default_img; else echo $r['p_image']; ?>" height="75" width="75" />
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<div class="box">
												<input type="file" name="prd_pic" id="prd_pic" class="inputfile inputfile-6" />
													<label for="prd_pic" class="nospace"><span id="reg_filenm"></span> 
														<strong>Upload Product Image</strong>
													</label>
											</div>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Select Vendor :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<div class="" id="ven_list" style="margin-top:5px;">
											</div>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
											<textarea type="text" class="form-control" placeholder="Description" id="p_desc" name="p_desc">
												<?php echo $r['description']; ?>
											</textarea>
											<label for="form_control_1"></label>
										</div>
									</div>
									<script>
										// Replace the <textarea id="editor1"> with a CKEditor
										// instance, using default configuration.
										CKEDITOR.replace( 'p_desc' );
									</script>
								<div class="row form-group form-body form-md-line-input has-info">
								<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
									<div class="form-actions noborder">
										<input type="submit" class="btn blue" id="edit_prod" name="edit_prod" value="Edit" />
										<a href="product_list.php" class="btn default">List</a>	
									</div>
								</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php }}else{ ?>		
				<div class="col-md-6">
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">Product Details</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form" onsubmit="return valid_ngo()" id="ngoform" action="ad_data.php?call=add_product" method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle">
								<div class="form-body">
									<div class="form-group form-md-line-input has-info">
										<label for="form_control_1">Projects : </label>
										<div class="" id="projects" style="margin-top:12px;">
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Product Title :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Title" id="p_title" name="p_title" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Master Category :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control" id="mst_id" name="mst_id" onchange="prime_nme();">
												<?php $co_nm = $con->query("select mc_id,mc_name from m_catagory"); ?>
												<option value="">Select Master Category</option>
												<?php
												while($mn = mysqli_fetch_array($co_nm)){
												?>
													<option value="<?php echo $mn['mc_id']; ?>"><?php echo $mn['mc_name']; ?></option>
												<?php 
													}
												?>
											</select>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Prime category :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control" id="prm_id" name="prm_id" onchange="sub_nm();">
												<?php $co_nm = $con->query("select pc_id,pc_name from s_catagory"); ?>
												<option value="">Select Prime Category</option>
												<?php
												while($mn = mysqli_fetch_array($co_nm)){
												?>
													<option value="<?php echo $mn['pc_id']; ?>"><?php echo $mn['pc_name']; ?></option>
												<?php 
													}
												?>
											</select>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Sub category :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control" id="sub_id" name="sub_id">
												<?php $co_nm = $con->query("select sc_id,sc_name from s_catagory"); ?>
												<option value="">Select Sub Category</option>
												<?php
												while($mn = mysqli_fetch_array($co_nm)){
												?>
													<option value="<?php echo $mn['sc_id']; ?>"><?php echo $mn['sc_name']; ?></option>
												<?php 
													}
												?>
											</select>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Company Name :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Brand / Company Name" id="b_name" name="b_name" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Item No :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Item No" id="item_no" name="item_no" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Size :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Size" id="p_size" name="p_size" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Color :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Color" id="p_color" name="p_color" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<!--<div class="form-group form-md-line-input has-info">
										<input type="text" class="form-control" placeholder="Quantity" id="p_qty" name="p_qty" />
										<label for="form_control_1"></label>
									</div>-->
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">MOU :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<select class="form-control" id="mou" name="mou">
												<option value="">Select </option>
												<option value="KG">KG</option>
												<option value="GM">GM</option>
												<option value="ML">ML</option>
												<option value="Lit">Lit </option>
												<option value="Pcs">Pcs </option>
											</select>
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Unit :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Unit" id="unit" name="unit" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Estimate Price :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Estimated Price" id="e_price" name="e_price" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Logistic Price :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Logistic Cost" id="l_price" name="l_price" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
											<p style="margin-top:7px;">Management Price :</p>
										</div>
										<div class="col-md-9 col-sm-9 col-xs-12">
											<input type="text" class="form-control" placeholder="Management Cost" id="m_price" name="m_price" />
											<label for="form_control_1"></label>
										</div>
									</div>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
											<textarea type="text" class="form-control" placeholder="Description" id="p_desc" name="p_desc">
												<table width="100%">
													<tr>
														<td width="50%"></td><td width="50%"></td>
													</tr>
													<tr>
														<td width="50%"></td><td width="50%"></td>
													</tr>
													<tr>
														<td width="50%"></td><td width="50%"></td>
													</tr>
													<tr>
														<td width="50%"></td><td width="50%"></td>
													</tr>
												</table>
											</textarea>
											<label for="form_control_1"></label>
										</div>
									</div>
									<script>
										// Replace the <textarea id="editor1"> with a CKEditor
										// instance, using default configuration.
										CKEDITOR.replace( 'p_desc' );
									</script>
									<div class="row form-group form-body form-md-line-input has-info">
										<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
											<div class="box">
												<input type="file" name="prd_pic" id="prd_pic" class="inputfile inputfile-6" />
													<label for="prd_pic" class="nospace"><span id="reg_filenm"></span> 
														<strong>Upload Product Image</strong>
													</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-3 col-sm-3 col-xs-12" style="padding-left:0px;">
										<p style="margin-top:7px;">Select Vendor :</p>
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<div class="" id="ven_list" style="margin-top:5px;">
										</div>
										<label for="form_control_1"></label>
									</div>
								</div>
								<div class="row form-group form-body form-md-line-input has-info">
									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
										<div class="form-actions noborder">
											<input type="submit" class="btn blue" id="add_prod" name="add_prod" value="Add" />
											<a href="product_list.php" class="btn default">List</a>	
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	<?php } ?>
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
	$(".nav_product_master").addClass('active_head');
	
	<?php if(isset($_GET['p_id'])){ ?>
		projects1();
	<?php }else{ ?>
		projects();
	<?php } ?>
	
	<?php if(isset($_GET['p_id'])){ ?>
		ven_name1();
	<?php }else{ ?>
		ven_name();
	<?php } ?>
	
	
 });

	
function sub_name(){
	$.ajax({
		type:"post",
		url:"ad_data.php?call=sub_nm",
		success:function(msg){
			$("#sub_id").html(msg);
		}
	});
}

function prime_name(){
	$.ajax({
		type:"post",
		url:"ad_data.php?call=prime_nm",
		success:function(msg){
			$("#prm_id").html(msg);
		}
	});
}

function master_name(){
	$.ajax({
		type:"post",
		url:"ad_data.php?call=master_nm",
		success:function(msg){
			$("#mst_id").html(msg);
		}
	});
}

function prime_nme(){
	var id = document.getElementById('mst_id').value;
	$.ajax({
		type:"post",
		data:"id="+id, 
		url:"ad_data.php?call=prime_name",
		success:function(msg){
			$("#prm_id").html(msg);
		}
	});
}

function sub_nm(){
	//alert(1);
	var id = document.getElementById('prm_id').value;
	$.ajax({
		type:"post",
		data:"id="+id, 
		url:"ad_data.php?call=sub_name",
		success:function(msg){
			//alert(msg);
			$("#sub_id").html(msg);
		}
	});
}

function projects1(){
	var pro_id = document.getElementById('pr_id').value;
	$.ajax({
		type:"post",
		data:"pro_id="+pro_id, 
		url:"ad_data.php?call=projs",
		success:function(msg){
			$("#projects").html(msg);
			var spl = pro_id.split(",");
			for(var i = 0 ;i < spl.length ; i++){
				var id = 'language_'+ spl[i];
				document.getElementById(id).checked = true;
			}
		}
	});
}

function projects(){
	$.ajax({
		type:"post",
		url:"ad_data.php?call=projs",
		success:function(msg){
			$("#projects").html(msg);
		}
	});
}

function ven_name(){
	//salert("1");
	$.ajax({
		type:"post",
		//data:"stat_no="+stat_no, 
		url:"ad_data.php?call=ven_list",
		success:function(msg){
			//alert(msg);
			$("#ven_list").html(msg);
		}
	});
}

function ven_name1(){
	//alert("1");
	var ven_id = document.getElementById('ven_id').value;
	$.ajax({
		type:"post",
		data:"ven_id="+ven_id, 
		url:"ad_data.php?call=ven_list",
		success:function(msg){
			//alert(msg);
			$("#ven_list").html(msg);
			var spl = ven_id.split(",");
			//alert(spl);
			for(var i = 0 ;i < spl.length ; i++){
				var id = 'ven_'+ spl[i];
				document.getElementById(id).checked = true;
			}
		}
	});
}
 
</script>
</body>
</html>