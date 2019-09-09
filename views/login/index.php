<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../pages_error/404.html");
}
require_once "../../entities/class_client.php"; 

if(isset($_POST["valider"])){
	$pass=md5($_POST["pass"]);

	$requette=config::$bdd->query("select count(id) from admin where password='".$pass."'");
	$tab=$requette->fetch();
	if(intval($tab[0])>0){
		header("location:../backoffice/admin/index.php");
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
		<link rel="shortcut icon" href="../assets/Backoffice/media/logos/favicon.ico" />
<!--===============================================================================================-->
</head>
<body>
								<div class="notification col-3 mt-5" style="position:absolute;top:5;">

					</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90" style="margin-top:-20%;">
				<form class="login100-form validate-form flex-sb flex-w" autocomplete="off" method="post">
					<span class="login100-form-title p-b-51">
						Login
					</span>

<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" autocomplete="off">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="valider">
							Login
						</button>
					</div>
				</form>

							<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Messages </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" >Demandes </a>
      </li>
    </ul>
  </div>
  <div class="card-body" id="0">
    <h1 class="card-title text-primary message">0</h1>
  </div>
   <div class="card-body" id="1" style="display: none;">
    <h1 class="card-title text-primary service"><?php 
		$t=config::$bdd->query("select count(*) from activiter_client,proccedure where activiter_client.etape_actuel=proccedure.id && proccedure.fichier=0");
		$n=$t->fetch();
		$nombre=$n[0];
		echo intval($nombre);
		?></h1>
  </div>
    <div class="card-body" id="2" style="display: none;">
    <h1 class="card-title text-primary demande"><?php 
		$t=config::$bdd->query("select count(*) from patient where resultat=0");
		$n=$t->fetch();
		$nombre=$n[0];

		echo intval($nombre);
		?></h1>
  </div>
</div>

			</div>
		</div>
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
	<script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>

	<script>
		$(function(){

$.get("../../entities/message.php",{operation:"tout_afficher"},function(data){
    if(data!=0){
        if(parseInt($(".message").text())!=data){
         $(".message").text(data);   
        }
    }else{
            $(".message").text("0");
    }
})

			$(".nav-link").click(function(){
				$(".nav-link").removeClass("active");
				$(this).addClass("active")
			})
			$(".nav-link:eq(0)").click(function(){
				$(".card-body#1").hide();
				$(".card-body#2").hide();
				$(".card-body#0").show();
			})
			$(".nav-link:eq(1)").click(function(){
				$(".card-body#0").hide();
				$(".card-body#2").hide();
				$(".card-body#1").show();
			})
			$(".nav-link:eq(2)").click(function(){
				$(".card-body#1").hide();
				$(".card-body#0").hide();
				$(".card-body#2").show();
			})
			var socket = io.connect("http://localhost:1337");
			socket.on("recevoir_notification",function(data){
					if(data.message=="vous avez recu une demande de service"){
					            	var nbr=parseInt($(".demande").text())+1;
			            	$(".demande").text(nbr)
	}else{
					            	var nbr=parseInt($(".service").text())+1;
			            	$(".service").text(nbr)
	}

		if(data.type=="error"){
			data.type=="danger";
		}
		$(".notification").append('<div class="alert alert-'+data.type+' alert-dismissible fade show" role="alert">'+data.message+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>')
})

			            socket.on("notification_message_admin",function(message){
			            	var nbr=parseInt($(".message").text())+1;
			            	$(".message").text(nbr)
    $(".notification").append('<div class="alert alert-info alert-dismissible fade show" role="alert">Vous avez recu un nouveau message<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>')
})
		})
	</script>

</body>
</html>