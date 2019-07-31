<?php 
include "../../../../entities/class_concour.php";
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
					<!-- end:: Subheader -->
					<!-- begin:: Content -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content" style="padding:0px;">
					<div class="kt-subheader   kt-grid__item bg-white mb-4" style="padding:10px;padding-left:40px;" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">
                                            Matieres                               
                </h3>
                       

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__toolbar" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            <span class="rps">0</span> Totals                                   </span>
                
                                    <form class="kt-subheader__search" id="kt_subheader_search_form">
                        <div class="input-group">
							<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
							<div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="la la-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                            </div>

                    </div>        
    </div>
</div>
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--Begin::App-->
<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
    <!--Begin:: App Aside-->
    <div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--sm kt-app__aside--fit mr-5 ml-4" id="kt_users_aside" style="opacity: 1;">
        <div class="kt-portlet col-12">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--general-1">
                    <div class="kt-widget__wrapper">
                        <div class="kt-widget__label">
                            <span class="kt-widget__desc text-center">
                               Trie par Specialité
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="kt-portlet__body">
                <ul class="kt-nav kt-nav--bold kt-nav--fit-ver kt-nav--v4" role="tablist">
                	<li class="kt-nav__item all"><a class="kt-nav__link active" data-toggle="tab" href="#" role="tab"><span class="kt-nav__link-icon"><i class="la la-cog"></i></span><span class="kt-nav__link-text">all</span></a></li>
                </ul>
            </div>

        </div>
    </div>
    <!--End:: App Aside-->

    <!--Begin:: App Content-->
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content ml-4">
        <div class="row col-11">
<?php 
concours::afficher();
?>
            </div>
        </div>

    </div>
    <!--End:: App Content-->
</div>
<!--End::App-->	</div>

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

 $(".supprimer").click(function(){
    id=$(this).attr("id");
    element=$(this)
    $.post( "../../../../entities/concour.php",{operation:"supprimer",id:id},function(data){
    if(data!="ok"){
    toastr.error(data);
    }else{
        element.parent().hide();
    }
 } );    
})
        })
	</script>
</body>
</html>