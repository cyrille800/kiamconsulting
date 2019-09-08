<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
	header("location: ../../pages_error/404.html");
}
require "../../../entities/class_ecole.php";
require "../../../entities/class_concour.php";
require "../../../entities/class_activiter.php";
require "../../../entities/class_notification.php";
require "../../../entities/class_admin.php";

$username=admin::retourne_valeur("id",$_SESSION["id_admin"],"username");
$email=admin::retourne_valeur("id",$_SESSION["id_admin"],"email");
$password=admin::retourne_valeur("id",$_SESSION["id_admin"],"password");
?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="utf-8"/>
		<title>
		Keen | Blank Page</title>
		<meta name="description" content="Blank page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js">
		</script>
		<script>
		WebFont.load({
		google: {"families":["Poppins:300,400,500,600,700"]},
		active: function() {
		sessionStorage.fonts = true;
		}
		});
		</script>
		<link href="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="../../assets/Backoffice/media/logos/favicon.ico" />
	</head>

	<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >

		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
			<div class="kt-header-mobile__logo">
				<a href="">
					<img alt="Logo" src="../../assets/Backoffice/media/logos/logo-6.png"/>
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler">
				<span>
				</span>
				</button>
				
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler">
				<span>
				</span>
				</button>
				
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler">
				<i class="flaticon-more">
				</i>
				</button>
			</div>
		</div>

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
<?php 
include "bout_code/navbar_vertical.php";
?>
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
<?php 
include "bout_code/navbar_horizontal.php";
?>
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="padding:0px;">
					<iframe src="dashboard.php" style="height:auto;border:none;background-color: #f2f3fa;padding:0px;" class="col-md-12" name="frame1">
						
					</iframe>
				</div>
<?php 
include "bout_code/footer.php";
?>
			</div>
		</div>
	</div>
<?php 
include "bout_code/action_rapide.php";
?>
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="la la-arrow-up">
		</i>
	</div>


<div class="modal fade" id="exampleModalLon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modifier compte administrateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="kt-portlet__body">
				<!--begin::Accordion-->
				<div class="accordion" id="accordionExample4">
					<div class="card">
						<div class="card-header" id="headingOne4">
							<div class="card-title" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
								<i class="fas fa-user"></i> Changer les linformations de connexion
							</div>
						</div>
						<div id="collapseOne4" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample4">
							<div class="card-body">
<form class="kt-form kt-form--label-right" action="" method="post" enctype="multipart/form-data" id="formulaire" autocomplete="off">
	<input type="text" name="id" value="<?php echo $_SESSION["id_admin"];?>" style="display:none;">
					<div class="kt-portlet__body">
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Pseudo</label>
							<div class="col-10">
								<input type="text" class="form-control" name="pseudo" placeholder="Pseudo" value="<?php echo $username; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">Email</label>
							<div class="col-10">
								<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-2 col-form-label">password</label>
							<div class="col-10">
								<input type="password" class="form-control" name="pass" placeholder="saisir votre mot de passe pour valider">
							</div>
						</div>

					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<div class="row">
								<div class="col-2">
								</div>
								<div class="col-10">
									<button type="submit" class="btn btn-success">modifier</button>
								</div>
							</div>
						</div>
					</div>
				</form>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo4">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
								<i class="fa fa-key" aria-hidden="true"></i> changer le mot de passe
							</div>
						</div>
						<div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample4">
							<div class="card-body">
<form class="kt-form kt-form--label-right" action="" method="post" enctype="multipart/form-data" id="formulaire_password" autocomplete="off">
	<input type="text" name="id" value="<?php echo $_SESSION["id_admin"];?>" style="display:none;">
					<div class="kt-portlet__body">
						<div class="form-group row">
							<label for="example-text-input" class="col-3 col-form-label">Password</label>
							<div class="col-9">
								<input type="password" class="form-control" name="ancien_password" placeholder="ancien password" value="" autocomplete="off" data-identify="<?php echo $password; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-3 col-form-label">Password</label>
							<div class="col-9">
								<input type="password" class="form-control" name="nouveau_password" placeholder="nouveau password" value="">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-text-input" class="col-3 col-form-label">Password</label>
							<div class="col-9">
								<input type="password" class="form-control" name="nouveau_nouveau_password" placeholder="réecrire à nouveau le nouveau password" value="">
							</div>
						</div>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-form__actions">
							<div class="row">
								<div class="col-2">
								</div>
								<div class="col-10">
									<button type="submit" class="btn btn-success">modifier</button>
								</div>
							</div>
						</div>
					</div>
				</form>
							</div>
						</div>
					</div>
				</div>
				<!--end::Accordion-->
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<form method="post" action="">
<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Selectionner l'etablissement</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="btn-group col-12">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choisir l'école
							</button>
							<div class="dropdown-menu col-12" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
								<?php 
								ecole::afficher_liste();
								?>
							</div>
						</div>
									</div>
									<div class="modal-footer">
										<input type="button"  class="btn btn-outline-brand" data-dismiss="modal" value="close">
										<button type="submit" class="btn btn-brand">Valider</button>
									</div>
									</form>
								</div>
							</div>
						</div>

						<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<form method="post" action="">
<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Selectionner la matiere</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="btn-group col-12">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choisir la matiere
							</button>
							<div class="dropdown-menu col-12" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
								<?php 
								concours::afficher_liste();
								?>
							</div>
						</div>
									</div>
									<div class="modal-footer">
										<input type="button"  class="btn btn-outline-brand" data-dismiss="modal" value="close">
										<button type="submit" class="btn btn-brand">Valider</button>
									</div>
									</form>
								</div>
							</div>
						</div>


						<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<form method="post" action="">
<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Selectionner l'activité à controler</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="btn-group col-12">
							<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choisir l'activité
							</button>
							<div class="dropdown-menu col-12" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
								<?php 
								activiter::afficher_liste();
								?>
							</div>
						</div>
									</div>
									<div class="modal-footer">
										<input type="button"  class="btn btn-outline-brand" data-dismiss="modal" value="close">
										<button type="submit" class="btn btn-brand">Valider</button>
									</div>
									</form>
								</div>
							</div>
						</div>


	<script src="../../assets/Backoffice/js/jquery.js" type="text/javascript">
	</script>
	<script>
	var KTAppOptions = {
	"colors": {
	"state": {
	"brand": "#5d78ff",
	"metal": "#c4c5d6",
	"light": "#ffffff",
	"accent": "#00c5dc",
	"primary": "#5867dd",
	"success": "#34bfa3",
	"info": "#36a3f7",
	"warning": "#ffb822",
	"danger": "#fd3995",
	"focus": "#9816f4"
	},
	"base": {
	"label": [
	"#c5cbe3",
	"#a1a8c3",
	"#3d4465",
	"#3e4466"
	],
	"shape": [
	"#f0f3ff",
	"#d9dffa",
	"#afb4d4",
	"#646c9a"
	]
	}
	}
	};
	</script>
	<!-- end::Global Config -->
	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
	</script>
	<script src="../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
	</script>
	<!--end::Global Theme Bundle -->
	
	<!--begin::Page Vendors(used by this page) -->
	<script src="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript">
	</script>
	<!--end::Page Vendors -->
	<script src="../../assets/Backoffice/js/demo1/pages/dashboard.js" type="text/javascript">
	</script>
	<script src="../../assets/Backoffice/js/jquery-visibility.js" type="text/javascript"></script>
	<script src="../../assets/Backoffice/js/jquery.inactivityTimeout.js" type="text/javascript"></script>
	<script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>
	<script>
		$(function(){


            $(document).inactivityTimeout({
                inactivityWait: 900,
                dialogWait: 5,
                logoutUrl: '../../login/index.php'
            })

var temps;
setInterval(function(){
	$("#inactivity-notifier div").css({"background-color":"#5867dd","opacity":"0.7","border-color":"rgb(0,0,230)"})
})
$ ( document ). on ( ' hide ' , function () {
 temps = setTimeout(function(){
document.location.href="../../login/index.php";
  },(1000*60)*5)
}); 

$ ( document ). on ( ' show ' , function () {
	clearTimeout(temps);
}); 

$(".drf").click(function(){
	$(".nombre_demande").text("0")
	$(".nombre_demande").css("display","none");
})
$("#kt_offcanvas_toolbar_quick_actions_toggler_btn").click(function(){
$(".page-link:eq(0)").trigger("click");
})

$(".page-item").click(function(){
    $(".page-item").removeClass("active");
    $(this).addClass("active")
})
                $('[target="notification"]').click(function(){
                    var chaine=$("iframe[name='notification']").attr("src");
                    if(chaine.indexOf("notifications.php")==-1){
                        $("iframe[name='notification']").attr("src","notifications.php?nombre=1");
                    }
                })

                var gty="";
var numero="";
$(".dropdown-item").click(function(){
    gty=$(this).text();
    setTimeout(function(){
$("[name='notification']").attr("src","notifications.php?type="+gty+"&&nombre="+numero)
    },300)
})
$(".page-link").click(function(){
    var f=$(this)
        setTimeout(function(){
$("[name='notification']").attr("src","notifications.php?type="+gty+"&&nombre="+parseInt(f.text()))
    },300)
    numero=$(this).text();
})
          

$("#formulaire_password").submit(function(e){
	e.preventDefault();

	var verification=$("[data-identify]").attr("data-identify");
	var ancien_password=$("[name='ancien_password']").val();
	var nouveau_password=$("[name='nouveau_password']").val();
	var nouveau_nouveau_password=$("[name='nouveau_nouveau_password']").val();
	var formulaire=$(this);
if(ancien_password=="" || nouveau_password=="" || nouveau_nouveau_password==""){
	toastr.error("remplir tous les champs");
}else{
	                             $.post( "../../../entities/admin.php",{operation:"convertir",pass:ancien_password},function(data){
    if(data!=verification){
    toastr.error("vous n'avez pas le droit d'effectuer cette operation");
    }else{
    if(nouveau_password!=nouveau_nouveau_password){
    toastr.error("le troisième champs ne correspond pas au deuxieme champs");	
    }else{
    $.post( "../../../entities/admin.php",formulaire.serialize(),function(datas){
    	if(datas!="ok"){
    		toastr.error(datas)
    	}else{
    		$.post( "../../../entities/admin.php",{operation:"convertir",pass:nouveau_password},function(d){
    			$("[data-identify]").attr("data-identify",d)
    		})
    		toastr.success("operation terminer");
    	}
    })
    }
    }
 });
}
})
$("#formulaire").submit(function(e){
	e.preventDefault();
	var verification=$("[data-identify]").attr("data-identify");
	var pass=$("[name='pass']").val();
	var pseudo=$("[name='pseudo']").val();
	var email=$("[name='email']").val();
	var form=$(this);
	    		$.post( "../../../entities/admin.php",{operation:"convertir",pass:pass},function(d){
    			if(d==verification){
	if(pseudo=="" || email==""){
		toastr.error("remplir tous les champs");
	}else{
	                             $.post( "../../../entities/admin.php",form.serialize(),function(data){
    if(data!="ok"){
    toastr.error(data);
    }else{
    toastr.success("operation terminé avec succèe");	
    }
 } );
	}
    			}else{
    				toastr.error("la confirmation du mot de passe est incorrect, impossible d'effectuer les changement")
    			}
    		})

})


                $(".kt-menu__item").click(function(){
                    $(".kt-menu__item").removeClass("kt-menu__item--here");
                    $(this).addClass("kt-menu__item--here")
                })

                $(".kt-menu__link").click(function(){
                	$(".kt-menu__item--active").removeClass("kt-menu__item--active")
                	$(this).parent().addClass("kt-menu__item--active")
                	$(".kt-menu__item--open").not($(this).parents(".kt-menu__item--open")).removeClass("kt-menu__item--open")
                })

			            var socket = io.connect("http://localhost:1337");

            socket.on("notification_message_admin",function(message){
    toastr.info("Vous avez un nouveau message");
    $(".iok").text(parseInt($(".iok").text())+1);
})

socket.on("recevoir_notification",function(data){
	if(data.type=="info"){
		toastr.info(data.message);
	}
	if(data.type=="warning"){
		toastr.warning(data.message);
	}
	if(data.type=="primary"){
		toastr.primary(data.message);
	}
	if(data.type=="error"){
		toastr.error(data.message);
	}

	if(data.message=="vous avez recu une demande de service"){
		var n=parseInt($(".nombre_demande").text());
		n++;
		$(".nombre_demande").text(n)
		$(".nombre_demande").css("display","");
	}
})

socket.on("resd",function(nombre){
    $(".iok").text(parseInt($(".iok").text())-nombre.nombre_message);
})



$.get("../../../entities/message.php",{operation:"tout_afficher"},function(data){
    if(data!=0){
        if(parseInt($(".iok").text())!=data){
         $(".iok").text(data);   
        }
    }else{
            $(".iok").text("0");
    }
})

			        $(".del").click(function(){
            $(".remplir").fadeOut("fast").queue(function(){
                $(".hy").remove();
                $(this).dequeue();
            })
             $.post("../../../entities/notification.php",{operation:"lues",id_client:0})
             $(".signaler").hide();
        })

$(".click").click(function(){
	$('[data-dismiss="modal"]').trigger("click");
})

var i=0;
$(".hy").each(function(){
	i++;
	$(".total").text(i)
})

        $(".hy").click(function(){
        	$(".page-link:eq(0)").trigger("click");
              $("#kt_offcanvas_toolbar_quick_actions").addClass(" kt-offcanvas-panel--on");
              $("#kt_offcanvas_toolbar_quick_actions").css("opacity","1");
              $("#kt_offcanvas_toolbar_quick_actions").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
              $(".bv").click(function(){
               $("#kt_offcanvas_toolbar_quick_actions").removeClass("kt-offcanvas-panel--on"); 
               $("#kt_offcanvas_toolbar_quick_actions").css("opacity","0");
               $(this).remove();
              })

              $.post("../../../entities/notification.php",{operation:"lue",id_client:0,id_notif:$(this).attr("id")})
              $(this).remove()  
            var i=0;
            $(".remplir").children().each(function(){
i++;
            })

            if(i==0){
                $(".signaler").hide();
            }          
        })

                $(".ss").click(function(){
            var i=0;
            $(".remplir").children().each(function(){
i++;
            })
            if(i==0){
              $("#kt_offcanvas_toolbar_quick_actions").addClass(" kt-offcanvas-panel--on");
              $("#kt_offcanvas_toolbar_quick_actions").css("opacity","1");
              $("#kt_offcanvas_toolbar_quick_actions").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
              $(".bv").click(function(){
               $("#kt_offcanvas_toolbar_quick_actions").removeClass("kt-offcanvas-panel--on"); 
               $("#kt_offcanvas_toolbar_quick_actions").css("opacity","0");
               $(this).remove();
              })
             setTimeout(function(){
                $(".dropdown-menu.dropdown-menu-fit.dropdown-menu-right.dropdown-menu-anim.dropdown-menu-top-unround.dropdown-menu-lg").removeClass("show")
             },60)

            }
        })


socket.on("recevoir_notification",function(data){
                    $(".signaler").show()
                    $.post("../../../entities/notification.php",{operation:"dernier_time",id_client:0},function(datase){
                        $(".kt-timeline").prepend(datase);
                    })
                    $.post("../../../entities/notification.php",{operation:"dernier",id_client:0},function(datas){
                        $(".remplir").show();
                        $(".remplir").prepend(datas);
        $(".hy").click(function(){
        	$(".page-link:eq(0)").trigger("click");
              $("#kt_offcanvas_toolbar_quick_actions").addClass(" kt-offcanvas-panel--on");
              $("#kt_offcanvas_toolbar_quick_actions").css("opacity","1");
              $("#kt_offcanvas_toolbar_quick_actions").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
              $(".bv").click(function(){
               $("#kt_offcanvas_toolbar_quick_actions").removeClass("kt-offcanvas-panel--on"); 
               $("#kt_offcanvas_toolbar_quick_actions").css("opacity","0");
               $(this).remove();
              })

              $.post("../../../entities/notification.php",{operation:"lue",id_client:0,id_notif:$(this).attr("id")})
              $(this).remove()  
            var i=0;
            $(".remplir").children().each(function(){
i++;
            })

            if(i==0){
                $(".signaler").hide();
            }          
        })
                    })
})

		})
	</script>
</body>
<!-- end::Body -->
</html>