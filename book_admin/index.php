<?php
include_once("../config.php");
$uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : ''; 

if($uname != ''){
	echo "<script>window.location = '".$admin_url."dashboard'; </script>";
}else{
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Touch A Life</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="<?php echo $admin_url?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $admin_url?>css/AdminLT.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $admin_url?>assets/global/css/custom_css.css" rel="stylesheet" type="text/css"/>
</head>
<body >
	<script src="<?php echo $admin_url;?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $admin_url;?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            window.onload = function() {
                document.getElementById("userid").focus();
            }
			
			$("#ad_login").click(function(){
				if(document.getElementById("userid").value == "") {
					alert("Enter The Email");
				} else if (document.getElementById("pwd").value == ""){
					alert("Enter The Password");
				} else {
					var u = document.getElementById("userid").value;
					var p = document.getElementById("pwd").value;
					$.ajax({
						type:"post",
						data:"u="+u+"&p="+p,
						url:"ad_data.php?call=login",
						success:function(html){
							if(html == 1) {
								window.location = "dashboard";
							}else if(html == 0){
								alert("Username & Password InValid.");
							} else {
								alert("your account is not activated");
							}
						}
					});
				}
			});
			
	   });
    </script>
	
	<div class="row" style="margin: 0;margin-top: 10%;">
	<div class="col-md-4 col-md-offset-4">
		<div class="col-md-12" style="background: transparent none repeat scroll 0% 0%; font-size: 40px;">
			<img src="<?php echo $site_url?>images/logo.png" class="img-responsive" style="margin:auto;width: 200px;" />
		</div>
        <div class="logfield col-md-12">
			<input id="userid" type="text" placeholder="Username" name="txtUsername" class="btntext">
            <input id="pwd" type="password" placeholder="Password" name="txtUsername" class="btntext">
            <input id="ad_login" class="btn" type="submit" value="Login" name="btnLogin">
        </div>
    </div>
	 
</body>
</html>
