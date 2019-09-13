<?php 
session_start();
if(!isset($_SESSION["id_admin"])){
	header("location: ../../pages_error/404.html");
}
include_once "../../../entities/class_paiement_client.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="description" content="Blank page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

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
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="kt-subheader   kt-grid__item bg-white" style="padding:20px;padding-left:40px;" id="kt_subheader">
    <div class="kt-subheader__main">
              <h3 class="kt-subheader__title">
              Dashboard</h3>
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
                Administrateur                </a>
                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                Active link</span>
                -->
              </div>
            </div>
</div>
					<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
								<div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
				<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>
			</div>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--begin::Dashboard 3-->
<!--begin::Row--> 
<div class="row">
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid-half">
	<div class="kt-portlet__head kt-portlet__head--noborder">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Somme actuelle</h3>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget-19">
			<div class="kt-widget-19__title mx-auto">
				<div class="kt-widget-19__label"><small>XAF</small><?php 
				$requette=config::$bdd->query("select sum(paiement.montant) from paiement_client,paiement where paiement.id=paiement_client.id_paiement && paiement_client.etat=1");
				$data=$requette->fetch();
				echo "&nbsp;&nbsp;".$data[0];
				if($data[0]==""){
					echo "0";
				}
				?></div>
				<img class="kt-widget-19__bg" src="./assets/media/misc/iconbox_bg.png" alt="bg">
			</div>
		</div>
	</div>
</div>
</div>
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid-half">
	<div class="kt-portlet__head  kt-portlet__head--noborder">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Clients</h3>
		</div>

	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget-21">
			<div class="kt-widget-21__title">
				<div class="kt-widget-21__label"><?php 
				$requette=config::$bdd->query("select count(*) from client");
				$data=$requette->fetch();
				echo "Nombre : &nbsp;&nbsp;".$data[0];
				?></div>
				<img src="./assets/media/misc/iconbox_bg.png" class="kt-widget-21__bg" alt="bg">
			</div>
			<div class="kt-widget-21__data">
				<!--Doc: For the chart legend bullet colors can be changed with state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
				<div class="kt-widget-21__legends">
					<div class="kt-widget-21__legend">
						<i class="kt-bg-brand"></i>
						<span>Patients</span> : <?php 
				$requette=config::$bdd->query("select count(*) from client where type=1");
				$data=$requette->fetch();
				echo $data[0];
				?>
					</div>
					<div class="kt-widget-21__legend">
						<i class="kt-shape-bg-color-4"></i>
						<span>Clients</span> : <?php 
				$requette=config::$bdd->query("select count(*) from client where type=0");
				$data=$requette->fetch();
				echo $data[0];
				?>
					</div>
				</div>
				<div class="kt-widget-21__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
					<div class="kt-widget-21__stat"></div>
					<!--Doc: For the chart initialization refer to "widgetTechnologiesChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
					<canvas id="kt_widget_technologies_chart" style="height: 100px; width: 100px; display: block;" width="89" height="89" class="chartjs-render-monitor"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-13">
	<div class="kt-portlet__body">
		<div id="kt-widget-slider-13-3" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="12000">
			<div class="kt-slider__head">
				<div class="kt-slider__label">Liste des services</div>
				<div class="kt-slider__nav">
					<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-3" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-3" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="carousel-inner">

<?php 
				$requette=config::$bdd->query("select * from activite");
				$i=0;
				while($data=$requette->fetch()){
					echo '<div class="carousel-item kt-slider__body  '.(($i==0)?"active":"").'">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">'.$data["titre"].'</a>
							<div class="kt-widget-13__desc kt-widget-13__desc--xl kt-font-brand">
								Nombre de personnes : ';
$requettes=config::$bdd->query("select count(*) from activiter_client where id_activiter=".$data["id"]." && etape_actuel!=-1");
				$datas=$requettes->fetch();
				echo $datas[0];
								echo '
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__label">	
								<span class="kt-label-font-color-2">'.$data["description"].'</span>
							</div>						
						</div>
					</div>
				</div>';
					$i++;
				}
				
				echo $data[0];
				?>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->	</div>
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">		
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Liste des écoles</h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="kt-widget-1">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="kt_tabs_19_15d7430f773072" role="tabpanel">

                	<?php 
				$requette=config::$bdd->query("select count(id_client) as 'nombre' from etudiant where ecole_choisie!=0 group by ecole_choisie");
				$max=0;
				while($data=$requette->fetch()){
					if($max<$data[0]){
						$max=$data[0];
					}
				}
				$requette=config::$bdd->query("select * from school");
				while($data=$requette->fetch()){
					echo '<div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">
                               '.$data["titre"].'
                            </a>
                            <div class="kt-widget-1__item-desc">'.$data["specialite"].'</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">';
$requettes=config::$bdd->query("select count(*) from etudiant where ecole_choisie=".$data["id"]." group by ecole_choisie");
				$datas=$requettes->fetch();
echo (intval($datas[0])*100)/$max;
                            echo '%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: ';
				echo (intval($datas[0])*100)/$max;
                                    echo '%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>';
				}				

                	?>

                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->	</div>

	<div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Listes des demandes</h3>
        </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">
<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" id="kt_recent_orders" style="">
    <table class="table bg-white" style="height:400px;">
        <thead>
            <tr class="thead-dark text-center">
                <th>nom</th>
                <th>prenom</th>
                <th>sexe</th>
                <th>pays</th>
                <th>ville</th>
            </tr>
        </thead>
        <tbody>
                <?php 
$requette=config::$bdd->query("select * from patient where resultat=0");
$i=0;
while($data=$requette->fetch()){
    echo "<tr class='text-center'><td>".$data["nom"]."</td><td>".$data["prenom"]."</td><td>".$data["sexe"]."</td><td>".$data["pays"]."</td><td>".$data["ville"]."</td></tr>";
    $i++;
}
                                                if($i==0){
                            echo "<div class='text-white bg-danger col-4 text-center mx-auto mb-3' style='border-radius:3px;'>Aucune demande</div>";
                        }
                ?>
        </tbody>
    </table>
<?php 
if($i!=0){
	?>
	<div class="kt-datatable__pager kt-datatable--paging-loaded">
		<ul class="kt-datatable__pager-nav">
			<li>
				<a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled">
					<i class="flaticon2-fast-back">
					</i>
				</a>
			</li>
			<li>
				<a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled">
					<i class="flaticon2-back">
					</i>
				</a>
			</li>
			<li style="">
			</li>
			<li style="display: none;">
				<input type="text" class="kt-pager-input form-control" title="Page number">
			</li>
			<li>
				<a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">
				1</a>
			</li>
			<li>
				<a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">
				2</a>
			</li>
			<li>
				<a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">
				3</a>
			</li>
			<li>
				<a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">
				4</a>
			</li>
			<li>
				<a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">
				5</a>
			</li>
			<li>
			</li>
			<li>
				<a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2">
					<i class="flaticon2-next">
					</i>
				</a>
			</li>
			<li>
				<a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="20">
					<i class="flaticon2-fast-next">
					</i>
				</a>
			</li>
		</ul>
	</div>
	<?php
}
?>
</div>
    </div>
</div>
<!--end::Portlet-->	</div>
</div>
<!--end::Row--> 
<!--end::Dashboard 3-->	</div>

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
	<script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
	</script>
	<script src="../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
	</script>
	<script src="assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
	<script>
		        			$(window).on("load",function(){
		$(".preload").fadeOut("fast");
		})

        $(function(){
        	
        })
	</script>
</body>
</html>
