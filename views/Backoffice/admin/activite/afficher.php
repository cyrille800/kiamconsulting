<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
include_once "../../../../entities/class_activiter.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<link href="../../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

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
<body  id="<?php echo (isset($_GET["id"]))?$_GET["id"]:"";?>" operation="ajouter">
<div class="kt-subheader   kt-grid__item bg-white" style="padding:20px;padding-left:40px;margin-bottom:20px;" id="kt_subheader">
    <div class="kt-subheader__main">
              <h3 class="kt-subheader__title">
              Services</h3>
              <span class="kt-subheader__separator kt-hidden">
              </span>
              <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home">
                  <i class="la la-shelter" style="font-size:25px;">
                  </i>
                </a>
                <span class="kt-subheader__breadcrumbs-separator">
                </span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Afficher les services                 </a>
                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                Active link</span>
                -->
              </div>
                                  <div class="ml-5"></div><div class="ml-5"></div><div class="ml-5"></div><div class="ml-5"></div>
                            <div class="kt-subheader__wrapper ml-5 pl-5">
                                <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="" data-placement="top" data-original-title="Ajouter">
                                    <a href="#" class="btn btn btn-label btn-label-brand btn-bold bv" data-toggle="modal" data-target="#ajouter_etape">
                                        <i class="la la-plus">
                                        </i>
                                        Ajouter une étape
                                    </a>
                                </div>
                                
                            </div>
            </div>
</div>


					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content" style="padding:0px;">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>

<div class="kt-container  kt-grid__item col-9 mx-auto">
        <div class="row">
    <div class="col-xl-4">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__body">
                <!--begin::Section-->
                <div class="kt-section">
                    <div class="kt-section__content">
                        <span class="lead">Liste des services :</span> 
                        <ul class="kt-nav kt-nav--v2 kt-nav--md-space kt-nav--bold kt-nav--lg-font">
<?php 
$id=(isset($_GET["id"]))?$_GET["id"]:"";
    activiter::afficher($id);
?>
                        </ul>
                    </div>
                </div>
                <!--end::Section-->
            </div>
        </div>
        <!--end::Portlet-->
    </div>
    <div class="col-xl-8">
        <!--begin::Portlet-->
<div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">Liste des étapes du services</h3>
                </div>
            </div>
            <div class="kt-portlet__body" style="height:600px;">
                    <iframe src="attendre.php" style="height:500px;border:none;background-color:white;padding:0px;" class="col-md-12" name="frame3">
                        
                    </iframe>
            </div>
        </div>
        <!--end::Portlet-->
    </div>
</div>  </div>
<!--End::App-->	</div>

		</div>
					<!-- end:: Content -->

                        <div class="modal fade" id="ajouter_etape" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form  action="" method="post" enctype="multipart/form-data" id='formulaire' autocomplete="off">
<div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ajouter une étape</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                <div class="kt-form kt-form--label-right">
                    <div class="kt-portlet__body">
                        <div class="form-group form-group-last">
                            <div class="alert alert-secondary" role="alert">
                                <div class="alert-icon"><i class="la la-warning kt-font-brand"></i></div>
                                <div class="alert-text">
                                    Utiliser des informations representatives qui permettront aux étudiants de ce reférencer .
                                </div>
                            </div>
                        </div>
                        <div style="display:none;"><div  class="action"></div></div>
                        <div class="form-group row">
                            <input type="text" name="id_active" value="" style="display:none;">
                            <label for="example-text-input" class="col-2 col-form-label">Titre</label>
                            <div class="col-10">
                                <input type="text" class="form-control" name="titre" placeholder="titre" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Description</label>
                            <div class="col-10">
                                <input type="text" class="form-control" name="description" placeholder="description" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Action</label>
                            <div class="col-10">
                            <div class="ml-5"></div><div class="ml-5"></div><div class="ml-5"></div>
                        <label class="kt-radio kt-radio--solid kt-radio--brand mr-3 ml-5">
                                <input type="radio" name="fichier"" value="0"> action de l'administrateur
                                <span></span>
                            </label>
                        <label class="kt-radio kt-radio--solid kt-radio--brand ml-1">
                                <input type="radio" name="fichier" value="1"> action du client (message de confirmation)
                                <span></span>
                            </label>
                            <div style="margin-left:20px;"></div>
                            <label class="kt-radio kt-radio--solid kt-radio--brand ml-5">
                                <input type="radio" name="fichier" value="2"> action du client (envoyer un fichier)
                                <span></span>
                            </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label"></label>
                            <div class="col-10">
                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="choisir une image" style="cursor:pointer;">
                                    <span class="lead text-warning">Rattâcher une image <i class="la la-space-shuttle"></i></span>  <i class="la la-file-picture-o btn-bold ml-4" style="font-size:25px;cursor:pointer;"></i>
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" style="display:none;">
                                </label>
                            </div>
                        </div>

                    </div>
                </div>                                    
                                    </div>
                                    <div class="modal-footer">
                                                                    <div class="alert alert-secondary verif" role="alert">
                                <div class="alert-icon"><i class="la la-warning kt-font-brand"></i></div>
                                <div class="alert-text">
                                 Vous devez selectionner une activitée pour poursuivre .
                                </div>
                            </div>

                                        <input type="button"  class="btn btn-outline-brand io" data-dismiss="modal" value="close">
                                        <button type="submit" class="btn btn-brand operation">Valider</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="simage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <img src="" class="cible modal-dialog" alt=""  style="position:absolute;left:10%;top:0;">
                        </div>
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
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
        	var tableau=['iuy'];
        	$("specialite").each(function(){
        		var element=$(this).text();
        		if(tableau.indexOf(element)==-1){
        			tableau.push(element);
        			$(".kt-nav.kt-nav--bold.kt-nav--fit-ver.kt-nav--v4").append('<li class="kt-nav__item e"><a class="kt-nav__link active" data-toggle="tab" href="#" role="tab"><span class="kt-nav__link-icon"><i class="la la-cog"></i></span><span class="kt-nav__link-text">'+element+'</span></li>')
        		}
        	})

         	$("#generalSearch").keyup(function(){
        		var val=$(this).val();
        		val=val.toLowerCase();
        		var i=0;
        		$(".element").each(function(){
        			var f=$(this).attr("nom");
        			f=f.toLowerCase();
        			if(f.indexOf(val)!=-1){
        				i++;
        				$(".rps").text(i);
        				$(this).show();
        			}else{
        				$(this).hide();
        			}
        		})
        	})


$("#formulaire").submit(function(e){
    e.preventDefault();
  var titre=$("[name='titre']").val();
  var description=$("[name='description']").val();
  var fichier=$("[name='fichier']:checked").attr("value");
if($.trim(titre)!="" && $.trim(description)!="" && $.trim(fichier)!=""){
$.ajax({
    type : 'POST',
    url : '../../../../entities/proccedure.php',
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
    success: function(data){  
if(data!="ok"){
toastr.error(data);   
    }else{
        $(".io").trigger("click");
        $("[name='frame3']").attr("src","etape.php?id="+$("body").attr("id")) 
    }
}
})
}else{
    toastr.error("remplir tous les champs");
}

})

$(".kt-nav__item").click(function(){
    var d=$(this);
setTimeout(function(){
    $(".ght").attr("href","ajouter.php?id="+d.attr("id"));
    $(".kt-nav__item--active").removeClass("kt-nav__item--active")
    d.addClass("kt-nav__item--active");
    $("body").attr("id",d.find("a").attr("id"))
$('[name="id_active"]').attr("value",d.find("a").attr("id"))
    d.find(".depose_ici").html('<i class="la la-copy ml-5 lii" data-toggle="modal" data-target="#exampleModal2" style="font-size:25px;color:white;background-color:#415482;padding:3px;border-radius:4px;" data-skin="brand" title="" data-original-title="Brand skin"></i>');
    $(".depose_ici").not(d.find(".depose_ici")).html("");
    $(".etatss").text(d.attr("etat"))
    $(".descriptionss").text(d.attr("description"))
    $(".titress").text(d.attr("titre"))
},100)
})
 $(".supprimer").click(function(e){
    e.preventDefault();
    id=$("body").attr("id");
    element=$(this)
    $.post( "../../../../entities/activiter.php",{operation:"supprimer",id:id},function(data){
    if(data!="ok"){
    toastr.error(data);
    }else{
        toastr.success("operation terminer");
        $(".kt-nav__item[id='"+id+"']").remove();
        document.location.href="afficher.php";
    }
 } );    
})

$(".modifier").click(function(){
    var id=$(this).attr("id");
    $("[name='titre']").val($(this).parents(".card").find(".titre").text())
    $("[name='description']").val($(this).parents(".card").find(".description").text())
    $("[name='fichier'][value='"+$(this).parents(".card").find("[rel]").attr("rel")+"']").attr("checked","checked")
    $("[operation]").attr("operation","modifier")
    $(".action").html("<input text='text' name='operation' value='modifier'><input text='text' name='id' value='"+id+"'>")
})

$(".bv").click(function(){
    $("[name='titre']").val("");
    $("[name='description']").val("");
    $("[name='fichier']").removeAttr("checked");
    $("[operation]").attr("operation","ajouter")
    if($.trim($("body").attr("id"))==""){
        $(".operation").hide();
        $(".verif").show();
    }else{
        $(".operation").show();
        $(".verif").hide();
    }
    $(".action").html("");
})
 $(".lii").click(function(e){
    e.preventDefault();
 })

 $(".btn.btn-info.btn-icon.btn-circle").click(function(){
    var v=$(this).attr("url");
    $(".cible").attr("src",v);
})

        })
	</script>
</body>
</html>