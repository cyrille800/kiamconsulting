<?php 
include_once "../../../../entities/class_activiter.php";
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
<body>

					<!-- begin:: Subheader -->
					<div class="kt-subheader   kt-grid__item" id="kt_subheader">
						<div class="kt-subheader__main">
							<h3 class="kt-subheader__title">
							Blank Page</h3>
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
								Features                    </a>
								<span class="kt-subheader__breadcrumbs-separator">
								</span>
								<a href="" class="kt-subheader__breadcrumbs-link">
								Misc                    </a>
								<span class="kt-subheader__breadcrumbs-separator">
								</span>
								<a href="" class="kt-subheader__breadcrumbs-link">
								Blank Page                    </a>
								<!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
								Active link</span>
								-->
							</div>
							
						</div>
						<div class="kt-subheader__toolbar"  style="position:static;">
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
								</div>
								
							</div>
						</div>
					</div>
					<!-- end:: Subheader -->
					<!-- begin:: Content -->
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
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
        	$(".rights").click(function(){
        		$(".principale").animate({scrollLeft: "+="+($(".un").width())}, 200);
        	})
         	$(".lefts").click(function(){
        		$(".principale").animate({scrollLeft: "-="+($(".un").width())}, 200);
        	})

        	$(".droite").click(function(){

        		var el=$(this).parent().parent().parent().parent();
        		var etape_suivante=parseInt(el.parent().parent().parent().next().attr("id_proccedure"));
        		if(!isNaN(etape_suivante)){
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
        		$.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:etape_suivante})
        		
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
        	$(".droite").click(function(){
        		var el=$(this).parent().parent().parent().parent();
        		var etape_suivante=parseInt(el.parent().parent().parent().next().attr("id_proccedure"));
        		if(!isNaN(etape_suivante)){

        			        		var nombre_etape=parseInt($(this).attr("nombre_etape"))+1;
        			        		$(this).parents(".row").find("[nombre_etape]").attr("nombre_etape",nombre_etape)
        		var id_client=parseInt($(this).attr("id_client"));
        		var activiter=parseInt($(this).attr("id_activiter"));
        		var id=parseInt($(this).attr("id_activiter_client"));
        		$.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:etape_suivante})
        		
        		el.clone(true).appendTo(el.parent().parent().parent().next().find(".col-11.mx-auto:eq(1)") );
        		el.remove();
        		
        		}

        	})
        		}
				var nombre_etape=parseInt($(this).attr("nombre_etape"))-1;
				$(this).parents(".row").find("[nombre_etape]").attr("nombre_etape",nombre_etape)
        		var id_client=parseInt($(this).attr("id_client"));
        		var activiter=parseInt($(this).attr("id_activiter"));
        		var id=parseInt($(this).attr("id_activiter_client"));
        		$.post("../../../../entities/activiter_client.php",{operation:"modifier",id:id,id_client:id_client,id_activiter:activiter,nombre_etape_fait:nombre_etape,etape_actuel:etape_suivante})
        		el.clone(true).appendTo(el.parent().parent().parent().prev().find(".col-11.mx-auto:eq(1)") );
        		el.remove();
        		}
        	})

        })
	</script>
</body>
</html>