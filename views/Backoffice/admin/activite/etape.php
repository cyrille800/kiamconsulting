<?php 
require_once "../../../../entities/class_proccedure.php";
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
<body style="background-color:white;" id="<?php echo (isset($_GET["id"]))?$_GET["id"]:"";?>">
					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>
<?php 

if(isset($_GET["id"])){
?>
<div class="accordion accordion-outline" id="accordionExample">
        <?php 
        $id=(isset($_GET["id"]))?$_GET["id"]:"";
        proccedure::afficher($id);
        ?>
 </div>       
		</div>
					<!-- end:: Content -->
                        <div class="modal fade" id="ajouter_etape" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form  action="" method="post" enctype="multipart/form-data" id='formulaire' autocomplete="off">
<div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modifier l'étape</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                <div class="kt-form kt-form--label-right">
                    <div class="kt-portlet__body">
                        <div style="display:none;"><div  class="action"></div></div>
                        <div class="form-group row">
                            <input type="text" name="id_active" value="<?php echo (isset($_GET["id"]))?$_GET["id"]:"";?>" style="display:none;">
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
                            <label for="example-text-input" class="col-2 col-form-label">Intervention du client</label>
                            <div class="col-10">
                            <div class="ml-5"></div><div class="ml-5"></div><div class="ml-5"></div>
                        <label class="kt-radio kt-radio--solid kt-radio--brand mr-3 ml-5">
                                <input type="radio" name="fichier"" value="0"> non
                                <span></span>
                            </label>
                        <label class="kt-radio kt-radio--solid kt-radio--brand ml-1">
                                <input type="radio" name="fichier" value="1"> oui, "reponse simple"
                                <span></span>
                            </label>
                            <div style="margin-left:20px;"></div>
                            <label class="kt-radio kt-radio--solid kt-radio--brand ml-5">
                                <input type="radio" name="fichier" value="2"> oui, "inserer des fichiers"
                                <span></span>
                            </label>
                            </div>
                        </div>
                                                <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Modifier l'image</label>
                            <div class="col-10">
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                            </div>
                        </div>
                    </div>
                </div>                                    
                                    </div>
                                    <div class="modal-footer">
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
<?php
}

?>

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
        document.location.href="etape.php?id="+$("body").attr("id");     
    }
}
})
}else{
    toastr.error("remplir tous les champs");
}

})


        	 $(".btn.btn-info.btn-icon.btn-circle").click(function(){
    var v=$(this).attr("url");
    $(".cible").attr("src",v);
})

$(".modifier").click(function(){
    var id=$(this).attr("id");
    $("[name='titre']").val($(this).parents(".card").find(".titre").text())
    $("[name='description']").val($(this).parents(".card").find(".description").text())
    $("[name='fichier'][value='"+$(this).parents(".card").find("[rel]").attr("rel")+"']").attr("checked","checked")
    $("[operation]").attr("operation","modifier")
    $(".action").html("<input text='text' name='operation' value='modifier'><input text='text' name='id' value='"+id+"'>")
})

 $(".supprimer").click(function(e){
    e.preventDefault();
    id=$(this).attr("id");
    element=$(this)
    $.post( "../../../../entities/proccedure.php",{operation:"supprimer",id:id},function(data){
    if(data!="ok"){
    toastr.error(data);
    }else{
        toastr.success("operation terminer");
        element.parent().parent().parent().parent().parent().hide();
    }
 } );    
})

        })
	</script>
</body>
</html>