<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="shortcut icon" href="../assets/Backoffice/media/logos/favicon.ico" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" style="background-image:url('../assets/Backoffice/image/login.svg');background-repeat:no-repeat;background-position:left 90% top 90%;height:100%;background-size:50%;">
		<aside style="padding-left:15%;padding-top:2%;">
			<a href="index.php">
				<img src="../assets/Backoffice/media/logos/logo-5.png" alt="" >
			</a>
			<div style="float:right;margin-right:17%;padding:1%;" >
			<ul class="snip1189">
				<li><a href="inscription.php" >S'inscrire</a></li>
				<li><a href="index.php" >connexion</a></li>
			</ul>
							</div>
		</aside>
<center style="margin-top:7%;">
		<div class="" style="">
			<div class="wrap-login100">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="" id="formulaire" autocomplete="off">
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="operation" value="connexion" style="display:none;">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="erreur" style="background-color:rgba(255,0,0,0.1);color:red;padding:2%;width:100%;border-radius:7px;display:none;">
						message
					</div>
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="forget.php" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" style="background-color: #242939;">
							Login
						</button><br>
					</div>
				</form>
			</div>
		</div>
</center>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
	$(function(){
if(Cookies.get("username")!=undefined){
$("[name='username']").val(Cookies.get("username"))
$("[name='password']").val(Cookies.get("password"))
$("[name='remember-me']").attr("checked","checked")	
}
$("#formulaire").submit(function(e){
e.preventDefault();

$.ajax({
    type : 'POST',
    url : '../../entities/client.php',
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
    success: function(data){
if(data!="ok"){
    $(".erreur").text(data)
    $(".erreur").fadeIn("fast");
    setTimeout(function(){
    $(".erreur").fadeOut("fast");	
    },2000)
}else{
    $(".erreur").hide();
    if($("[name='remember-me']").prop("checked")==true){
Cookies.set('username',$("[name='username']").val(), { expires: 360, path: '' });
Cookies.set('password',$("[name='password']").val(), { expires: 360, path: '' });
}else{
	Cookies.remove('username',{ path: '' });
	Cookies.remove('password',{ path: '' });
}


    document.location.href="../Backoffice/client/index.php";
}      
    }
})

})
	})
</script>
</body>
</html>