<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
include_once "../../../../entities/class_activiter.php";
include_once "../../../../entities/class_proccedure.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="description" content="Blank page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<link href="../../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" media="screen" />
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
</head>
<body>
<div class="kt-subheader   kt-grid__item bg-white" style="padding:20px;padding-left:40px;" id="kt_subheader">
    <div class="kt-subheader__main">
              <h3 class="kt-subheader__title">
              Services</h3>
              <span class="kt-subheader__separator kt-hidden">
              </span>
              <div class="kt-subheader__breadcrumbs mr-5 pr-5">
                <a href="#" class="kt-subheader__breadcrumbs-home">
                  <i class="la la-shelter" style="font-size:25px;">
                  </i>
                </a>
                <span class="kt-subheader__breadcrumbs-separator">
                </span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Controler service                 </a>
                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                Active link</span>
                -->
              </div>
                                    <div class="kt-subheader__toolbar ml-5 pl-5"  style="">
                            <div class="kt-subheader__wrapper">
                                <div class="dropdown dropdown-inline">
                                    <div class="btn btn-icon btn btn-primary btn-bold lefts" style="cursor:pointer;">
                                        <i class="fa fa-angle-left">
                                        </i>
                                    </div>
                                    <div class="btn btn-icon btn btn-primary btn-bold rights" style="cursor:pointer;">
                                        <i class="fa fa-angle-right">
                                        </i>
                                    </div>
                                    <a href="liste.php?id=<?php echo $_GET["id"];?>" class="btn btn-info btn-bold rights" style="cursor:pointer;">
                                        <?php 
                                        $requette=config::$bdd->query("select count(*) from activiter_client where id_activiter=".$_GET["id"]." && etape_actuel=-1");
                                        $nombre=$requette->fetch();
                                        $afficher="(".$nombre[0].")";
                                        ?>
                                        <i class="fas fa-list"></i>&nbsp;&nbsp; nombre de personnes ayant fini &nbsp;&nbsp;
                                    <?php echo $afficher; ?></a>
                                </div>
                                
                            </div>
                        </div>
            </div>
</div>


					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>

<div style="display:flex;overflow:hidden;" class="principale">
	<?php 
activiter::controler($_GET["id"]);
?>

</div>
		</div>


                                <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="post" action="">
<div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Liste des paiements</h5>
                                    </div>
                                    <div class="modal-body">

<div class="kt-section__content" style="height:300px;overflow-y:scroll;">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th  class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Type de L'OFFRE</font></font></th>
                                    <th  class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Paiement effectué</font></font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $req=config::$bdd->query("select * from paiement");
                                while ($data=$req->fetch()) {
                                echo '                                <tr>
                                    <td scope="row" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'.$data["titre"].'</font></font></td>
                                    <td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="pourt" id_paiement="'.$data["id"].'">';
                                    echo "";
                                    echo '</font></font></td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                                    </div>
                                    <div class="modal-footer">
                                        <input type="button"  class="btn btn-outline-brand" data-dismiss="modal" value="close">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                                <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="post" action="">
<div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Liste des fichiers</h5>
                                    </div>
                                    <div class="modal-body">

<div class="kt-section__content" style="height:300px;overflow-y:scroll;">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th  class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etape</font></font></th>
                                    <th  class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">fichier</font></font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $req=config::$bdd->query("select * from proccedure where id_active=".$_GET["id"]);
                                while ($data=$req->fetch()) {
                                echo '                                <tr>
                                    <th  class="text-center" scope="row"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'.$data["titre"].'</font></font></th>
                                    <td  class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">';
if($data["fichier"]==2){
    echo '<img src="../../../assets/Backoffice/media/files/pdf.svg" alt="" width="35px">
                                                            <div class="kt-widget-7__item-info" style="display:inline-block;">
                                                                <a href="" target="_blank" lien="'.$_GET["id"].$data["id"].'" class="kt-widget-7__item-title pdfs" style="cursor:pointer;">
                                                                    ouvrir
                                                                </a>';
}else{
    echo "pas de retour";
}
                                    echo '</font></font></td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                                    </div>
                                    <div class="modal-footer">
                                        <input type="button"  class="btn btn-outline-brand" data-dismiss="modal" value="close">
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
                            <button type="button" class="btn btn-primary dropdown-toggle remplacement" data-toggle="dropdown" value="rien"><span class="peit">Type de message</span>
                            </button>
                            <input type="text" id="id_personne" value="" style="display:none;">
                            <div class="dropdown-menu col-12" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                            <span class="dropdown-item text-center mx-auto mola" value="avertissement" style="cursor:pointer;"> <i class="la la-warning text-warning" style="font-size:25px;"></i>Avertissement</span>
                            <span class="dropdown-item text-center mx-auto mola" value="info" style="cursor:pointer;"> <i class="la la-lightbulb-o text-info" style="font-size:25px;"></i>Information</span>
                            <span class="dropdown-item text-center mx-auto mola" value="erreur" style="cursor:pointer;"> <i class="la  la-question-circle text-danger" style="font-size:25px;"></i>Erreur</span>
                            <span class="dropdown-item text-center mx-auto mola" value="valider" style="cursor:pointer;"> <i class="la la-check text-success" style="font-size:25px;"></i>valider</span>
                            </div>
                        </div>
                                                    <div class="form-group row mt-4 col-11">
                            <label for="example-text-input" class="col-2 col-form-label">ajouter un titre</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" placeholder="saisir le titre" name="operation" autocomplete="off">
                            </div>
                            </div>
                            <div class="btn-group btn-group-sm ml-5" role="group" aria-label="Small group">
                            <button type="button" class="btn btn-primary ml-5 envoyer_message"><i class="la la-envelope"></i>Envoyer un message</button>
                            <button type="button" class="btn btn-info envoyer_fichier"> <i class="la la-send"></i>Envoyer un fichier</button>
                        </div>
                            <div class="form-group form-group-last" id="envoyer_message" style="display:none;">
                        <label for="exampleTextarea"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">saisir le message</font></font></label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                            <div class="form-group form-group-last" id="envoyer_fichier" style="display:none;">
                        <label for="exampleTextarea"><font style="vertical-align: inherit;"></font></label>
                        <a href="../Blog/filemanager/dialog.php?type=2&field_id=fieldID&lang=en_EN"  class="mt-4 btn btn-danger btn-sm iframe-btn">Envoyer un fichier <i class="la la-send"></i></a> <span class="ml-4 msg">Selectionner un fichier</span>
                        <input type="text" name="fieldID" id="fieldID" style="display:none;">
                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button"  class="btn btn-outline-brand" data-dismiss="modal" value="close">
                                        <button type="button" class="btn btn-brand send_message">Valider</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					<!-- end:: Content -->

        <script>
        var KTAppOptions = {
        "colors": {
        "state": {
        "brand": "#385aeb",
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
	<script src="../../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
	</script>
	<script src="../../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
	</script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
    <script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>
	<script>
     			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
            var socket = io.connect("http://localhost:1337");
var der=-1;
$(".envoyer_message").click(function(){
    $("#envoyer_fichier").hide();
    $("#envoyer_message").show();
    $('[name="fieldID"]').val("")
    $('.msg').text("Selectionner un fichier")
    der=0;
})

$(".envoyer_fichier").click(function(){
    $("#envoyer_fichier").show();
    $("#envoyer_message").hide();
    $('[name="message"]').val("")
    der=1;
})



    $('.iframe-btn').fancybox({
    'type'      : 'iframe',
            afterShow : function() {
            $(".fancybox-inner").css("height","500px")

        },
        afterClose:function(){
            $(".msg").text("fichier selectionner")
        }
    });

$(".paiement").click(function(){
    var id_client=$(this).attr("id_client");
    $(".pourt").each(function(){
    var id_paiement=$(this).attr("id_paiement");
    var element=$(this);
    $.post("../../../../entities/paiement_client.php",{operation:"verifier_existe",id_client:id_client,id_paiement:id_paiement},function(data){
if(data=="oui"){
    element.html("<i class='la la-check text-success' style='font-size:25px;'></i>");
}else{
    element.html("<i class='la la-close text-danger' style='font-size:25px;'></i>");
}
    })
    })
})
            $(".jio").click(function(){
                $("#id_personne").val($(this).attr("id"))
            })
        	$(".rights").click(function(){
        		$(".principale").animate({scrollLeft: "+="+($(".un").width())}, 200);
        	})
         	$(".lefts").click(function(){
        		$(".principale").animate({scrollLeft: "-="+($(".un").width())}, 200);
        	})

$(".terminer").click(function(){
                    var id_client=parseInt($(this).attr("id_client"));
                var activiter=parseInt($(this).attr("id_activiter"));
                var id=parseInt($(this).attr("id_activiter_client"));
                var nombre_etape=parseInt($(this).attr("nombre_etape"))+1;
                var element=$(this);
                $.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:-1},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                    element.parents(".card.mb-4").remove();
                })
})
        	$(".droite").click(function(){

        		var el=$(this).parent().parent().parent().parent();
        		var etape_suivante=parseInt(el.parent().parent().parent().next().attr("id_proccedure"));
        		if(!isNaN(etape_suivante)){

        			        			var els=$(this).parent().parent().find(".annuler");
                    els.hide()
                    var id_client=els.attr("id_client");
                    var id_activiter_client=els.attr("id_activiter_client");
                    var id_activiter=els.attr("id_activiter");
                    var nombre_etapes=els.attr("nombre_etape");
                    els.after('<div class="w-75 rounded-circle text-center pt-2 gauche bg-dark text-white" id_client="'+id_client+'" id_activiter_client="'+id_activiter_client+'" id_activiter="'+id_activiter+'" nombre_etape="'+(parseInt(nombre_etapes)+1)+'" style="cursor:pointer;height:30px;"><i class="fa fa-angle-left"></i></div>');
                    els.remove();

$(".terminer").click(function(){
                    var id_client=parseInt($(this).attr("id_client"));
                var activiter=parseInt($(this).attr("id_activiter"));
                var id=parseInt($(this).attr("id_activiter_client"));
                var nombre_etape=parseInt($(this).attr("nombre_etape"))+1;
                var element=$(this);
                $.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:-1},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                    element.parents(".card.mb-4").remove();
                })
})
        	$(".gauche").click(function(){
                $(".terminer").click(function(){
                    var id_client=parseInt($(this).attr("id_client"));
                var activiter=parseInt($(this).attr("id_activiter"));
                var id=parseInt($(this).attr("id_activiter_client"));
                var nombre_etape=parseInt($(this).attr("nombre_etape"))+1;
                var element=$(this);
                $.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:-1},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                    element.parents(".card.mb-4").remove();
                })
})
        		var el=$(this).parent().parent().parent().parent();
        		var etape_suivante=parseInt(el.parent().parent().parent().prev().attr("id_proccedure"));
        		if(!isNaN(etape_suivante)){
        			        		if($(this).parent().parent().find(".terminer").attr("class")!=undefined){
        			var els=$(this).parent().parent().find(".terminer");
        			els.find("i").removeClass("fa-check");
        			els.find("i").addClass("fa-angle-right");
        			els.addClass("droite")
        			els.addClass("bg-dark")
        			els.addClass("text-white")
        			els.removeClass("terminer")

        		}
				var nombre_etape=parseInt($(this).attr("nombre_etape"))-1;
												        		if(nombre_etape==0){
                                                                    $(this).parents(".row").find("[nombre_etape]").attr("nombre_etape",0)
        			        		var els=$(this).parent().parent().find(".gauche");
                                                        els.hide()
                    var id_client=els.attr("id_client");
                    var id_activiter_client=els.attr("id_activiter_client");
                    var id_activiter=els.attr("id_activiter");
                    var nombre_etapes=els.attr("nombre_etape");
                    els.after('<div class="w-75 rounded-circle text-center pt-2 annuler" id_client="'+id_client+'" id_activiter_client="'+id_activiter_client+'" id_activiter="'+id_activiter+'" nombre_etape="'+nombre_etapes+'" style="cursor:pointer;height:30px;"><i class="fa fa-angle-left fa-times"></i></div>');
                    els.remove();

                                                                                $(".annuler").click(function(){
                     var d=$(this).parent().parent().parent().parent();
                     var id_client=$(this).attr("id_client");
                     var activiter=$(this).attr("id_activiter");
                    $.post("../../../../entities/activiter_client.php",{operation:"supprimer",id_client:$(this).attr("id_client"),id_activiter:$(this).attr("id_activiter")},function(data){
                    if(data!="ok"){
                    toastr.error(data);
                    }else{
                        $.post("../../../../entities/notification.php",{id_personne:id_client,type:"error",operations:"message d avertissement",message:"vous avez été rétirer d une activité",etat:0},function(data){ 
                        socket.emit("envoyer_notification_client",{type:"error",message:"vous avez été retiré d'une activité",id_client:id_client})
                        socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                        })
                        d.remove();
                        toastr.success("opération terminer avec succès")
                    }
                    })
                    
                    })
        			        		}
				$(this).parents(".row").find("[nombre_etape]").attr("nombre_etape",nombre_etape)
        		var id_client=parseInt($(this).attr("id_client"));
        		var activiter=parseInt($(this).attr("id_activiter"));
        		var id=parseInt($(this).attr("id_activiter_client"));
        		$.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:etape_suivante},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                })
        		el.clone(true).appendTo(el.parent().parent().parent().prev().find(".col-11.mx-auto:eq(1)") );
        		el.remove();
        		}
        	})
        			        			        		var er=0;
        		$("[id_proccedure]").each(function(){
        			er++;
        		})
        			        		var nombre_etape=parseInt($(this).attr("nombre_etape"))+1;
        			        		if(nombre_etape==er-1){
        			        		var els=$(this).parent().parent().find(".droite");
        			els.find("i").removeClass("fa-angle-right");
        			els.find("i").addClass("fa-check");
        			els.addClass("terminer")
        			els.removeClass("bg-dark")
        			els.removeClass("text-white")
        			els.removeClass("droite")
        			        		}
        			        		$(this).parents(".row").find("[nombre_etape]").attr("nombre_etape",nombre_etape)
        		var id_client=parseInt($(this).attr("id_client"));
        		var activiter=parseInt($(this).attr("id_activiter"));
        		var id=parseInt($(this).attr("id_activiter_client"));
        		$.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:etape_suivante},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                })
        		
        		el.clone(true).appendTo(el.parent().parent().parent().next().find(".col-11.mx-auto:eq(1)") );
        		el.remove();
        		
        		}

        	})

        	$(".gauche").click(function(){
        		var el=$(this).parent().parent().parent().parent();
        		var etape_suivante=parseInt(el.parent().parent().parent().prev().attr("id_proccedure"));
        		if(!isNaN(etape_suivante)){
        			        		if($(this).parent().parent().find(".terminer").attr("class")!=undefined){
        			var els=$(this).parent().parent().find(".terminer");
        			els.find("i").removeClass("fa-check");
        			els.find("i").addClass("fa-angle-right");
        			els.addClass("droite")
        			els.addClass("bg-dark")
        			els.addClass("text-white")
        			els.removeClass("terminer")
                    $(".terminer").click(function(){
                    var id_client=parseInt($(this).attr("id_client"));
                var activiter=parseInt($(this).attr("id_activiter"));
                var id=parseInt($(this).attr("id_activiter_client"));
                var nombre_etape=parseInt($(this).attr("nombre_etape"))+1;
                var element=$(this);
                $.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:-1},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                    element.parents(".card.mb-4").remove();
                })
})
        	$(".droite").click(function(){
                $(".terminer").click(function(){
                    var id_client=parseInt($(this).attr("id_client"));
                var activiter=parseInt($(this).attr("id_activiter"));
                var id=parseInt($(this).attr("id_activiter_client"));
                var nombre_etape=parseInt($(this).attr("nombre_etape"))+1;
                var element=$(this);
                $.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:-1},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                    element.parents(".card.mb-4").remove();
                })
})
        		var el=$(this).parent().parent().parent().parent();
        		var etape_suivante=parseInt(el.parent().parent().parent().next().attr("id_proccedure"));
        		if(!isNaN(etape_suivante)){

        			        		var nombre_etape=parseInt($(this).attr("nombre_etape"))+1;
        			        		$(this).parents(".row").find("[nombre_etape]").attr("nombre_etape",nombre_etape)
        		var id_client=parseInt($(this).attr("id_client"));
        		var activiter=parseInt($(this).attr("id_activiter"));
        		var id=parseInt($(this).attr("id_activiter_client"));
        		$.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:etape_suivante},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                })
        		
        		el.clone(true).appendTo(el.parent().parent().parent().next().find(".col-11.mx-auto:eq(1)") );
        		el.remove();
        		
        		}

        	})
        		}
				var nombre_etape=parseInt($(this).attr("nombre_etape"))-1;
								        		if(nombre_etape==0){
                                                    $(this).parents(".row").find("[nombre_etape]").attr("nombre_etape",0)
        			        		var els=$(this).parent().parent().find(".gauche");

                                                        els.hide()
                    var id_client=els.attr("id_client");
                    var id_activiter_client=els.attr("id_activiter_client");
                    var id_activiter=els.attr("id_activiter");
                    var nombre_etapes=els.attr("nombre_etape");
                    els.after('<div class="w-75 rounded-circle text-center pt-2 annuler" id_client="'+id_client+'" id_activiter_client="'+id_activiter_client+'" id_activiter="'+id_activiter+'" nombre_etape="'+nombre_etapes+'" style="cursor:pointer;height:30px;"><i class="fa fa-angle-left fa-times"></i></div>');
                    els.remove();
                                                            $(".annuler").click(function(){
                     var d=$(this).parent().parent().parent().parent();
                     var activiter=$(this).attr("id_activiter");
                     var id_client=$(this).attr("id_client");
                    $.post("../../../../entities/activiter_client.php",{operation:"supprimer",id_client:$(this).attr("id_client"),id_activiter:$(this).attr("id_activiter")},function(data){
                        $.post("../../../../entities/notification.php",{id_personne:id_client,type:"error",operations:"message d avertissement",message:"vous avez été rétirer d une activité",etat:0},function(data){ 
                        socket.emit("envoyer_notification_client",{type:"error",message:"vous avez été retiré d'une activité",id_client:id_client})
                        socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                        })
                    if(data!="ok"){
                    toastr.error(data);
                    }else{
                        d.remove();
                        toastr.success("opération terminer avec succès")
                    }
                    })
                    })

        			        		}
				$(this).parents(".row").find("[nombre_etape]").attr("nombre_etape",nombre_etape)
        		var id_client=parseInt($(this).attr("id_client"));
        		var activiter=parseInt($(this).attr("id_activiter"));
        		var id=parseInt($(this).attr("id_activiter_client"));
        		$.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:etape_suivante},function(data){
                    socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                })
        		el.clone(true).appendTo(el.parent().parent().parent().prev().find(".col-11.mx-auto:eq(1)") );
        		el.remove();
        		}
        	})

            $(".mola").click(function(){
                if($(this).attr("value")=="avertissement"){
                    $(".remplacement").removeClass("btn-info");
                    $(".remplacement").removeClass("btn-primary");
                    $(".remplacement").removeClass("btn-danger");
                    $(".remplacement").removeClass("btn-warning");
                    $(".remplacement").addClass("btn-warning");
                    $(".remplacement").attr("value","avertissement");
                    $(".remplacement .peit").text("type de message : 'avertissement'")
                }
                if($(this).attr("value")=="valider"){
                    $(".remplacement").removeClass("btn-info");
                    $(".remplacement").removeClass("btn-primary");
                    $(".remplacement").removeClass("btn-danger");
                    $(".remplacement").removeClass("btn-warning");
                    $(".remplacement").addClass("btn-success");
                    $(".remplacement").attr("value","valider");
                    $(".remplacement .peit").text("type de message : 'valider'")
                }

                if($(this).attr("value")=="erreur"){
                    $(".remplacement").removeClass("btn-info");
                    $(".remplacement").removeClass("btn-primary");
                    $(".remplacement").removeClass("btn-danger");
                    $(".remplacement").removeClass("btn-warning");
                    $(".remplacement").addClass("btn-danger");
                    $(".remplacement").attr("value","erreur");
                    $(".remplacement .peit").text("type de message : 'erreur'")
                }

                if($(this).attr("value")=="info"){
                    $(".remplacement").removeClass("btn-info");
                    $(".remplacement").removeClass("btn-primary");
                    $(".remplacement").removeClass("btn-danger");
                    $(".remplacement").removeClass("btn-warning");
                    $(".remplacement").addClass("btn-info");
                    $(".remplacement").attr("value","info");
                    $(".remplacement .peit").text("type de message : 'information'")
                }
            })
$(".send_message").click(function(){
    if(($.trim($("[name='operation']").val())=="" || $.trim($("[name='message']").val())=="") && $.trim($("[name='fieldID']").val())==""){
        toastr.error("veuiller remplir toutes les cases")
    }else{
        if($(".remplacement .peit").text()=="Type de message"){
            toastr.error("choisir le type de message")
        }else{
            var message="";
            var operation="";
            var type="";
            var nom_fichier="";
            if($.trim($("[name='message']").val())==""){
            var word=$("#fieldID").val();
          var words=word.split('/');
          nom_fichier=words[words.length-1];
          var cd=nom_fichier.split('.');
          message=cd[cd.length-1];
          operation=$("[name='operation']").val();
          type="fichier";
            }else{
                message=$("[name='message']").val();
                operation=$("[name='operation']").val();
                type=$(".remplacement").attr("value");
            }
                $.post("../../../../entities/notification.php",{id_personne:$("#id_personne").val(),type:type,operations:operation,message:message,etat:0,nom_fichier:nom_fichier},function(data){
                    if(data=="ok"){
                    $(".remplacement").removeClass("btn-info");
                    $(".remplacement").removeClass("btn-primary");
                    $(".remplacement").removeClass("btn-danger");
                    $(".remplacement").removeClass("btn-warning");
                    $(".remplacement").addClass("btn-primary");
                    $(".remplacement .peit").text("type de message")
                    $("[name='operation']").attr("value","")
                    $('[name="fieldID"]').val("")
                    $("[name='message']").val("")
                    $("[name='operation']").val("")
                    $(".msg").text("Selectionner un fichier")
                        toastr.success("message envoyer")
                        socket.emit("envoyer_notification_client",{type:"warning",message:message,id_client:$("#id_personne").val()})
                    }else{
                        toastr.error("changer le nom du fichier");
                    }
                })
        }
    }
})

$(".pluss").click(function(){
    var id=$(this).attr("id_client");
    $(".pdfs").each(function(){
        var el=$(this);
var lien="../../../assets/Backoffice/media/fichier_proccedure/";
lien+=$(this).attr("lien");
lien+=id.toString()+".pdf";
$(this).attr("href",lien);
$.post("../../../assets/Backoffice/media/fichier_proccedure/test.php",{nom:$(this).attr("lien")+id.toString()+".pdf"},function(data){
    if(data=="0"){
        el.html("<span class='text-danger'>vide</span>")
    }
})
    })
})

                                                            $(".annuler").click(function(){
                    var d=$(this).parent().parent().parent().parent();
                    var id_client=$(this).attr("id_client");
                    var activiter=$(this).attr("id_activiter");
                    $.post("../../../../entities/activiter_client.php",{operation:"supprimer",id_client:$(this).attr("id_client"),id_activiter:$(this).attr("id_activiter")},function(data){
                    if(data!="ok"){
                    toastr.error(data);
                    }else{
                        $.post("../../../../entities/notification.php",{id_personne:id_client,type:"error",operations:"message d avertissement",message:"vous avez été rétirer d une activité",etat:0},function(data){ 
                        socket.emit("envoyer_notification_client",{type:"error",message:"vous avez été retiré d'une activité",id_client:id_client})
                        socket.emit("evolution",{id_activiter:activiter,id_client:id_client})
                        })

                        d.remove();
                        toastr.success("opération terminer avec succès")
                    }
                    })
                    
                    })


            socket.emit("connexion_activiter",{nombre:<?php echo intval($_GET["id"]);?>})
            var id_activiter=<?php echo intval($_GET["id"]);?>;
socket.on("actualiser",function(d){
    if(parseInt(d.id_activiter)==id_activiter){
        document.location.href="controler.php?id="+id_activiter;
    }
})

            socket.on("actualiser_etape",function(id){
                var ft=$("[id_client='"+id.id_client+"'] i.fa.fa-angle-right");
                ft.parent().trigger("click");
            })

        })
	</script>
</body>
</html>