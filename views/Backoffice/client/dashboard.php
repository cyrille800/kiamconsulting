
<!DOCTYPE html>
<!-- 
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8"/>
        
        <title>Keen | Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->

                    <!--begin::Page Vendors Styles(used by this page) -->
                            <link href="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Vendors Styles -->
        
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
                    <link href="../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

	    <!--begin::Layout Skins(used by all pages) -->
        
<link href="../../assets/Backoffice/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="../../assets/Backoffice/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="../../assets/Backoffice/css/demo1/skins/brand/navy.css" rel="stylesheet" type="text/css" />
<link href="../../assets/Backoffice/css/demo1/skins/aside/navy.css" rel="stylesheet" type="text/css" />	    <!--end::Layout Skins -->

        <link rel="shortcut icon" href="../../assets/Backoffice/media/logos/favicon.ico" />
                <!-- Hotjar Tracking Code for keenthemes.com -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1070954,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-37564768-1');
        </script>
            </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >

<div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="padding:10px;padding-left:40px;">
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">Dashboard</h3>
            
                            <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="la la-tachometer"></i></a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Dashboards                        </a>
                                            <span class="kt-subheader__breadcrumbs-separator"></span>
                </div>
                    
        </div>
    </div>
</div>
                        <div class="kt-subheader__main bg-white">
                            <h3 class="kt-subheader__title">
                            Recherche</h3>
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

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
				
					<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--begin::Dashboard 1-->
<!--begin::Row--> 
<div class="row">
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head kt-portlet__head--noborder">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Author Sales</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-toolbar-wrapper">
				<div class="dropdown dropdown-inline">
					<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="flaticon-more-1"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
    <ul class="kt-nav">
        <li class="kt-nav__section kt-nav__section--first">
            <span class="kt-nav__section-text">Export Tools</span>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-print"></i>
                <span class="kt-nav__link-text">Print</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-copy"></i>
                <span class="kt-nav__link-text">Copy</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                <span class="kt-nav__link-text">Excel</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-file-text-o"></i>
                <span class="kt-nav__link-text">CSV</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                <span class="kt-nav__link-text">PDF</span>
            </a>
        </li>
    </ul>
</div>				</div>
			</div>		
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget-19">
			<div class="kt-widget-19__title">
				<div class="kt-widget-19__label"><small>$</small>64M</div>
				<img class="kt-widget-19__bg" src="./assets/media/misc/iconbox_bg.png" alt="bg">
			</div>
			<div class="kt-widget-19__data">
				<!--Doc: For the chart bars you can use state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
				<div class="kt-widget-19__chart">
					<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-45" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="45"></div></div>
					<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-95" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="95"></div></div>
					<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-63" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="63"></div></div>
					<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-11" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="11"></div></div>
					<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-46" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="46"></div></div>
					<div class="kt-widget-19__bar"><div class="kt-widget-19__bar-88" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="88"></div></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->	</div>
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head  kt-portlet__head--noborder">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Technologies</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-toolbar-wrapper">
				<div class="dropdown dropdown-inline">
					<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="flaticon-more-1"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
    <!--begin::Nav-->
    <ul class="kt-nav">
        <li class="kt-nav__head">
            Export Options
            <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
        </li>
        <li class="kt-nav__separator"></li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-drop"></i>
                <span class="kt-nav__link-text">Users</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                <span class="kt-nav__link-text">Reports</span>
                <span class="kt-nav__link-badge">
					<span class="kt-badge kt-badge--danger">9</span>
                </span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-link"></i>
                <span class="kt-nav__link-text">Statements</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-new-email"></i>
                <span class="kt-nav__link-text">Customer Support</span>
            </a>
        </li>
        <li class="kt-nav__separator"></li>
        <li class="kt-nav__foot">
            <a class="btn btn-label-brand btn-bold btn-sm" href="#">Proceed</a>
            <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
        </li>
    </ul>
    <!--end::Nav-->
</div>				</div>
			</div>		
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget-21">
			<div class="kt-widget-21__title">
				<div class="kt-widget-21__label">9.3M</div>
				<img src="./assets/media/misc/iconbox_bg.png" class="kt-widget-21__bg" alt="bg">
			</div>
			<div class="kt-widget-21__data">
				<!--Doc: For the chart legend bullet colors can be changed with state helper classes: kt-bg-success, kt-bg-info, kt-bg-danger. Refer: components/custom/colors.html -->
				<div class="kt-widget-21__legends">
					<div class="kt-widget-21__legend">
						<i class="kt-bg-brand"></i>
						<span>HTML</span>
					</div>
					<div class="kt-widget-21__legend">
						<i class="kt-shape-bg-color-4"></i>
						<span>CSS</span>
					</div>
					<div class="kt-widget-21__legend">
						<i class="kt-shape-bg-color-3"></i>
						<span>Angular</span>
					</div>
				</div>
				<div class="kt-widget-21__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
					<div class="kt-widget-21__stat">+37%</div>
					<!--Doc: For the chart initialization refer to "widgetTechnologiesChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
					<canvas id="kt_widget_technologies_chart" style="height: 100px; width: 100px; display: block;" width="89" height="89" class="chartjs-render-monitor"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->	</div>
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">		
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head  kt-portlet__head--noborder">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Total Orders</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-toolbar-wrapper">
				<div class="dropdown dropdown-inline">
					<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="flaticon-more-1"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
    <ul class="kt-nav">
        <li class="kt-nav__section kt-nav__section--first">
            <span class="kt-nav__section-text">Export Tools</span>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-print"></i>
                <span class="kt-nav__link-text">Print</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-copy"></i>
                <span class="kt-nav__link-text">Copy</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                <span class="kt-nav__link-text">Excel</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-file-text-o"></i>
                <span class="kt-nav__link-text">CSV</span>
            </a>
        </li>
        <li class="kt-nav__item">
            <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                <span class="kt-nav__link-text">PDF</span>
            </a>
        </li>
    </ul>
</div>				</div>
			</div>		
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget-20">
			<div class="kt-widget-20__title">
				<div class="kt-widget-20__label">17M</div>
				<img class="kt-widget-20__bg" src="./assets/media/misc/iconbox_bg.png" alt="bg">
			</div>
			<div class="kt-widget-20__data">
				<div class="kt-widget-20__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
					<!--Doc: For the chart initialization refer to "widgetTotalOrdersChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
					<canvas id="kt_widget_total_orders_chart" width="320" height="160" class="chartjs-render-monitor" style="display: block; height: 80px; width: 160px;"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->	</div>

	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid kt-widget ">
	<div class="kt-portlet__body">
		<div id="kt-widget-slider-13-1" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="8000">
			<div class="kt-slider__head">
				<div class="kt-slider__label">Announcements</div>
				<div class="kt-slider__nav">
					<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-1" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-1" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item kt-slider__body">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">Keen Admin Launch Day</a>
							<div class="kt-widget-13__desc">
								To start a blog, think of a topic about and first brainstorm party is ways to write details
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__label">
								<div class="btn btn-sm btn-label btn-bold">
									07 OCT, 2018
								</div> 
							</div>
							<div class="kt-widget-13__toolbar">
								<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
							</div>						
						</div>
					</div>
				</div>

				<div class="carousel-item kt-slider__body active">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">Incredibly Positive Reviews</a>
							<div class="kt-widget-13__desc">
								To start a blog, think of a topic about and first brainstorm party is ways to write details
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__title">
								<div class="btn btn-sm btn-label btn-bold">
									17 NOV, 2018
								</div> 
							</div>
							<div class="kt-widget-13__toolbar">
								<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
							</div>						
						</div>
					</div>
				</div>

				<div class="carousel-item kt-slider__body">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">Award Winning Theme</a>
							<div class="kt-widget-13__desc">
								To start a blog, think of a topic about and first brainstorm party is ways to write details
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__label">
								<div class="btn btn-sm btn-label btn-bold">
									03 SEP, 2018
								</div> 
							</div>
							<div class="kt-widget-13__toolbar">
								<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View</a>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->	</div>	
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid kt-widget-13">
	<div class="kt-portlet__body">
		<div id="kt-widget-slider-13-2" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="4000">
			<div class="kt-slider__head">
				<div class="kt-slider__label">Projects</div>
				<div class="kt-slider__nav">
					<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-2" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-2" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item kt-slider__body">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">Keen Admin Launch Day</a>
							<div class="kt-widget-13__desc">
								To start a blog, think of a topic about and first brainstorm party is ways to write details
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__progress">
								<div class="kt-widget-13__progress-info">
									<div class="kt-widget-13__progress-status">
										Progress
									</div>
									<div class="kt-widget-13__progress-value">78%</div>
								</div>
								<div class="progress">
									<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item kt-slider__body active">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">First Milestone Achivement</a>
							<div class="kt-widget-13__desc">
								To start a blog, think of a topic about and first brainstorm party is ways to write details
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__progress">
								<div class="kt-widget-13__progress-info">
									<div class="kt-widget-13__progress-status">
										Progress
									</div>
									<div class="kt-widget-13__progress-value">55%</div>
								</div>
								<div class="progress">
									<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item kt-slider__body">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">Reached 50,000 sales</a>
							<div class="kt-widget-13__desc">
								To start a blog, think of a topic about and first brainstorm party is ways to write details
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__progress">
								<div class="kt-widget-13__progress-info">
									<div class="kt-widget-13__progress-status">
										Progress
									</div>
									<div class="kt-widget-13__progress-value">24%</div>
								</div>
								<div class="progress">
									<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->	</div>
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid kt-widget-13">
	<div class="kt-portlet__body">
		<div id="kt-widget-slider-13-3" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="12000">
			<div class="kt-slider__head">
				<div class="kt-slider__label">Today's Schedule</div>
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

				<div class="carousel-item kt-slider__body active">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">Octa Pre-Launch Meeting</a>
							<div class="kt-widget-13__desc kt-widget-13__desc--xl kt-font-brand">
								9:20AM - 10:00AM
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__label">
								<i class="fa fa-map-marker-alt kt-label-font-color-2"></i>	
								<span class="kt-label-font-color-2">490 E Main St. Norwich...</span>
							</div>
							<div class="kt-widget-13__toolbar">
								<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
							</div>						
						</div>
					</div>
				</div>

				<div class="carousel-item kt-slider__body">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">UI/UX Design Updates</a>
							<div class="kt-widget-13__desc kt-widget-13__desc--xl kt-font-brand">
								11:15AM - 12:30PM
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__label">
								<i class="fa fa-map-marker-alt kt-label-font-color-2"></i>	
								<span class="kt-label-font-color-2">246 R St. Manhattan NY...</span>
							</div>
							<div class="kt-widget-13__toolbar">
								<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
							</div>						
						</div>
					</div>
				</div>

				<div class="carousel-item kt-slider__body">
					<div class="kt-widget-13">
						<div class="kt-widget-13__body">
							<a class="kt-widget-13__title" href="#">Sales Report Summary Meet-up</a>
							<div class="kt-widget-13__desc kt-widget-13__desc--xl kt-font-brand">
								4:30PM - 5:30PM
							</div>
						</div>
						<div class="kt-widget-13__foot">
							<div class="kt-widget-13__label">
								<i class="fa fa-map-marker-alt kt-label-font-color-2"></i>
								<span class="kt-label-font-color-2">492 F Sub St. Norwich CT...</span>
							</div>
							<div class="kt-widget-13__toolbar">
								<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">View Map</a>
							</div>						
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->	</div>	
</div>
<!--end::Row--> 

<!--begin::Row--> 
<div class="row">
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Top Products</h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-toolbar-wrapper">
	<div class="dropdown dropdown-inline">
		<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="flaticon-more-1"></i>
		</button>
		<div class="dropdown-menu dropdown-menu-right">
			<ul class="kt-nav">
				<li class="kt-nav__section kt-nav__section--first">
					<span class="kt-nav__section-text">Export Tools</span>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-print"></i>
						<span class="kt-nav__link-text">Print</span>
					</a>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-copy"></i>
						<span class="kt-nav__link-text">Copy</span>
					</a>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-file-excel-o"></i>
						<span class="kt-nav__link-text">Excel</span>
					</a>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-file-text-o"></i>
						<span class="kt-nav__link-text">CSV</span>
					</a>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-file-pdf-o"></i>
						<span class="kt-nav__link-text">PDF</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="kt-widget-1">
            <ul class="nav nav-pills nav-tabs-btn nav-pills-btn-brand" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_tabs_19_15d5cf0da597b4" role="tab">
                        <span class="nav-link-icon"><i class="flaticon2-graphic"></i></span>
                        <span class="nav-link-title">Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_tabs_19_25d5cf0da597b4" role="tab">
                        <span class="nav-link-icon"><i class="flaticon2-position"></i></span>
                        <span class="nav-link-title">Code</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_tabs_19_35d5cf0da597b4" role="tab">
                        <span class="nav-link-icon"><i class="flaticon2-layers-1"></i></span>
                        <span class="nav-link-title">Design</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="kt_tabs_19_15d5cf0da597b4" role="tabpanel">
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">
                               HTML 5 Templates
                            </a>
                            <div class="kt-widget-1__item-desc">Font-end,Admin &amp; Email</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+79%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">
                                Wordpress Themes
                            </a>
                            <div class="kt-widget-1__item-desc">eCommerce Website, Plugin</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+21%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-brand" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">eCommerce Websites</a>
                            <div class="kt-widget-1__item-desc">Shops, Fasion wep sites &amp; atc</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">-16%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">UI/UX Design</a>
                            <div class="kt-widget-1__item-desc">Evrything you ever imagine</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+4%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">Freebie Themes</a>
                            <div class="kt-widget-1__item-desc">Font-end &amp; Admin</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+34</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_tabs_19_25d5cf0da597b4" role="tabpanel">
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">UI/UX Design</a>
                            <div class="kt-widget-1__item-desc">Evrything you ever imagine</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+4%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">HTML 5 Templates</a>
                            <div class="kt-widget-1__item-desc">Font-end,Admin &amp; Email</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+79%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">Wordpress Themes</a>
                            <div class="kt-widget-1__item-desc">eCommerce Website, Plugin</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+21%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-brand" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">eCommerce Websites</a>
                            <div class="kt-widget-1__item-desc">Shops, Fasion wep sites &amp; atc</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">-16%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">Freebie Themes</a>
                            <div class="kt-widget-1__item-desc">Font-end &amp; Admin</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+34</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_tabs_19_35d5cf0da597b4" role="tabpanel">
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">eCommerce Websites</a>
                            <div class="kt-widget-1__item-desc">Shops, Fasion wep sites &amp; atc</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">-16%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar  bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">UI/UX Design</a>
                            <div class="kt-widget-1__item-desc">Evrything you ever imagine</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+4%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-focus" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">Latest Trends</a>
                            <div class="kt-widget-1__item-desc">eCommerce Website, Plugin</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+34%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">HTML 5 Templates</a>
                            <div class="kt-widget-1__item-desc">Font-end,Admin &amp; Email</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+79%</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget-1__item">
                        <div class="kt-widget-1__item-info">
                            <a href="#" class="kt-widget-1__item-title">Freebie Themes</a>
                            <div class="kt-widget-1__item-desc">Font-end &amp; Admin</div>
                        </div>
                        <div class="kt-widget-1__item-stats">
                            <div class="kt-widget-1__item-value">+34</div>
                            <div class="kt-widget-1__item-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Portlet-->	</div>
	<div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Sales Statistics</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-wrapper">
	<div class="dropdown dropdown-inline">
		<button type="button" class="btn btn-label-brand btn-sm btn-bold dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Export
		</button>
		<div class="dropdown-menu dropdown-menu-right">
			<ul class="kt-nav">
				<li class="kt-nav__section kt-nav__section--first">
					<span class="kt-nav__section-text">Export Tools</span>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-print"></i>
						<span class="kt-nav__link-text">Print</span>
					</a>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-copy"></i>
						<span class="kt-nav__link-text">Copy</span>
					</a>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-file-excel-o"></i>
						<span class="kt-nav__link-text">Excel</span>
					</a>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-file-text-o"></i>
						<span class="kt-nav__link-text">CSV</span>
					</a>
				</li>
				<li class="kt-nav__item">
					<a href="#" class="kt-nav__link">
						<i class="kt-nav__link-icon la la-file-pdf-o"></i>
						<span class="kt-nav__link-text">PDF</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget-9">
			<div class="kt-widget-9__panel">
				<div class="kt-widget-9__legends">
					<div class="kt-widget-9__legend">
						<div class="kt-widget-9__legend-bullet kt-bg-brand"></div>
						<div class="kt-widget-9__legend-label">Author</div>
					</div>
					<div class="kt-widget-9__legend">
						<div class="kt-widget-9__legend-bullet kt-label-bg-color-1"></div>
						<div class="kt-widget-9__legend-label">Customer</div>
					</div>
				</div>
				<div class="kt-widget-9__toolbar">
					<div class="dropdown dropdown-inline">
						<button type="button" class="btn btn-default dropdown-toggle btn-font-sm btn-bold btn-upper" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							August
						</button>
						<div class="dropdown-menu dropdown-menu-right">
						    <ul class="kt-nav">
						        <li class="kt-nav__section kt-nav__section--first">
						            <span class="kt-nav__section-text">Export Tools</span>
						        </li>
						        <li class="kt-nav__item">
						            <a href="#" class="kt-nav__link">
						                <i class="kt-nav__link-icon la la-print"></i>
						                <span class="kt-nav__link-text">Print</span>
						            </a>
						        </li>
						        <li class="kt-nav__item">
						            <a href="#" class="kt-nav__link">
						                <i class="kt-nav__link-icon la la-copy"></i>
						                <span class="kt-nav__link-text">Copy</span>
						            </a>
						        </li>
						        <li class="kt-nav__item">
						            <a href="#" class="kt-nav__link">
						                <i class="kt-nav__link-icon la la-file-excel-o"></i>
						                <span class="kt-nav__link-text">Excel</span>
						            </a>
						        </li>
						        <li class="kt-nav__item">
						            <a href="#" class="kt-nav__link">
						                <i class="kt-nav__link-icon la la-file-text-o"></i>
						                <span class="kt-nav__link-text">CSV</span>
						            </a>
						        </li>
						        <li class="kt-nav__item">
						            <a href="#" class="kt-nav__link">
						                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
						                <span class="kt-nav__link-text">PDF</span>
						            </a>
						        </li>
						    </ul>
						</div>		
					</div>
				</div>
			</div>
			<div class="kt-widget-9__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
				<!--Doc: For the chart initialization refer to "widgetSalesStatisticsChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
				<canvas id="kt_chart_sales_statistics" height="600" width="1394" class="chartjs-render-monitor" style="display: block; height: 300px; width: 697px;"></canvas>
			</div>
		</div>
	</div>	 
</div>
<!--end::Portlet-->
			 	</div>

	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid kt-portlet--tabs">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Latest Tasks                         
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#kt_portlet_tabs_1_1_content" role="tab" aria-selected="false">
                        Today
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1_2_content" role="tab" aria-selected="false">
                        Week
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1_3_content" role="tab" aria-selected="true">
                        Month
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="kt_portlet_tabs_1_1_content" role="tabpanel">
                <div class="kt-widget-5">
                    <div class="kt-widget-5__item kt-widget-5__item--info">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Management meeting
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                09:30 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--danger">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Replace datatables rows color
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                12:00 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--brand">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Export Navitare booking table
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                01:20 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--success">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                NYCS internal discussion
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                03: 00 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--danger">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Project Launch 
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                11: 00 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--success">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Server maintenance 
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                4: 30 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_portlet_tabs_1_2_content" role="tabpanel">
                <div class="kt-widget-5">
                    <div class="kt-widget-5__item kt-widget-5__item--brand">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Export Navitare booking table
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                01:20 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--danger">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Replace datatables rows color
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                12:00 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--brand">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Export Navitare booking table
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                01:20 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--danger">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                    Replace datatables rows color
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                12:00 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--success">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                NYCS internal discussion
                            </a>
                            <div class="kt-widget-5__item-datetime ">
                                03: 00 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check ">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--info ">
                        <div class="kt-widget-5__item-info ">
                            <a href="#" class="kt-widget-5__item-title">
                                Management meeting
                            </a>
                            <div class="kt-widget-5__item-datetime ">
                                09:30 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check ">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="kt_portlet_tabs_1_3_content" role="tabpanel">
                <div class="kt-widget-5 ">
                    <div class="kt-widget-5__item kt-widget-5__item--success">
                        <div class="kt-widget-5__item-info ">
                            <a href="#" class="kt-widget-5__item-title">
                                NYCS internal discussion
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                03: 00 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--danger">
                        <div class="kt-widget-5__item-info ">
                            <a href="#" class="kt-widget-5__item-title">
                                Replace datatables rows color
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                12:00 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--danger">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Replace datatables rows color
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                12:00 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--brand">
                        <div class="kt-widget-5__item-info">
                            <a href="#" class="kt-widget-5__item-title">
                                Export Navitare booking table
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                01:20 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--brand">
                        <div class="kt-widget-5__item-info ">
                            <a href="#" class="kt-widget-5__item-title">
                                Export Navitare booking table
                            </a>
                            <div class="kt-widget-5__item-datetime ">
                                01:20 PM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                    <div class="kt-widget-5__item kt-widget-5__item--info">
                        <div class="kt-widget-5__item-info ">
                            <a href="#" class="kt-widget-5__item-title">
                                Management meeting
                            </a>
                            <div class="kt-widget-5__item-datetime">
                                09:30 AM
                            </div>
                        </div>
                        <div class="kt-widget-5__item-check">
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="radio1">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end::Portlet-->	</div>
	<div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-14">
	<div class="kt-portlet__body">
		<!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
		<div id="kt-widget-slider-14-1" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="8000">
			<div class="kt-slider__head">
				<div class="kt-slider__label">New Products</div>
				<div class="kt-slider__nav">
					<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-14-1" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-14-1" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item">
					<div class="kt-widget-14__body">
						<div class="kt-widget-14__product">
							<div class="kt-widget-14__thumb">
								<a href="#"><img src="./assets/media/blog/1.jpg" class="kt-widget-14__image--landscape" alt="" title=""></a>
							</div>
							<div class="kt-widget-14__content">
								<a href="#"><h3 class="kt-widget-14__title">Active Smartwatch</h3></a>
								<div class="kt-widget-14__desc">
									Beautifully designed watch that helps you track your fitness and diet – while keeping you motivated!
								</div>
							</div>
						</div>
						<div class="kt-widget-14__data">
							<div class="kt-widget-14__info">
								<div class="kt-widget-14__info-title kt-font-brand">246</div>
								<div class="kt-widget-14__desc">Purchases</div>
							</div>
							<div class="kt-widget-14__info">
								<div class="kt-widget-14__info-title">37</div>
								<div class="kt-widget-14__desc">Reviews</div>
							</div>
						</div>
					</div>
					<div class="kt-widget-14__foot">
						<div class="kt-widget-14__foot-info">
							<div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
								24 Nov, 2018
							</div> 
							<div class="kt-widget-14__foot-desc">Date of Release</div>
						</div>
						<div class="kt-widget-14__foot-toolbar">
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
						</div>
					</div>
				</div>
				<div class="carousel-item active">
					<div class="kt-widget-14__body">
						<div class="kt-widget-14__product">
							<div class="kt-widget-14__thumb">
								<a href="#"><img src="./assets/media/blog/2.jpg" class="kt-widget-14__image--landscape" alt="" title=""></a>
							</div>
							<div class="kt-widget-14__content">
								<a href="#"><h3 class="kt-widget-14__title">DSLR Lens</h3></a>
								<div class="kt-widget-14__desc">
									Wide-angle, Quick Focus. Emphasis is on modern lenses for 35 mm film SLRs and for DSLRs with sensor sizes less than or equal to 35 mm.
								</div>
							</div>
						</div>
						<div class="kt-widget-14__data">
							<div class="kt-widget-14__info">
								<div class="kt-widget-14__info-title kt-font-brand">142</div>
								<div class="kt-widget-14__desc">Purchases</div>
							</div>
							<div class="kt-widget-14__info">
								<div class="kt-widget-14__info-title">25</div>
								<div class="kt-widget-14__desc">Reviews</div>
							</div>
						</div>
					</div>
					<div class="kt-widget-14__foot">
						<div class="kt-widget-14__foot-info">
							<div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
								24 Nov, 2018
							</div> 
							<div class="kt-widget-14__foot-desc">Date of Release</div>
						</div>
						<div class="kt-widget-14__foot-toolbar">
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="kt-widget-14__body">
						<div class="kt-widget-14__product">
							<div class="kt-widget-14__thumb">
								<a href="#"><img src="./assets/media/blog/4.jpg" class="kt-widget-14__image--landscape" alt="" title=""></a>
							</div>
							<div class="kt-widget-14__content">
								<a href="#"><h3 class="kt-widget-14__title">Polaroid Camera</h3></a>
								<div class="kt-widget-14__desc">
									Instant is back! Make photos fun again with the new range of Polaroid Instant Cameras with Vintage Effects and Built in Flash
								</div>
							</div>
						</div>
						<div class="kt-widget-14__data">
							<div class="kt-widget-14__info">
								<div class="kt-widget-14__info-title kt-font-brand">3578</div>
								<div class="kt-widget-14__desc">Purchases</div>
							</div>
							<div class="kt-widget-14__info">
								<div class="kt-widget-14__info-title">457</div>
								<div class="kt-widget-14__desc">Reviews</div>
							</div>
						</div>
					</div>
					<div class="kt-widget-14__foot">
						<div class="kt-widget-14__foot-info">
							<div class="kt-widget-14__foot-label btn btn-sm btn-label-brand btn-bold">
								24 Nov, 2018
							</div> 
							<div class="kt-widget-14__foot-desc">Date of Release</div>
						</div>
						<div class="kt-widget-14__foot-toolbar">
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Preview</a>
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Details</a>
						</div>
					</div>
				</div> 		
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid-half kt-widget-15">
	<div class="kt-portlet__body">
		<!-- Doc: The bootstrap carousel is a slideshow for cycling through a series of content, see https://getbootstrap.com/docs/4.1/components/carousel/ -->
		<div id="kt-widget-slider-14-2" class="kt-slider carousel slide pointer-event" data-ride="carousel" data-interval="8000">
			<div class="kt-slider__head">
				<div class="kt-slider__label">New Authors</div>
				<div class="kt-slider__nav">
					<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-14-2" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-14-2" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item">
					<div class="kt-widget-15__body">
						<div class="kt-widget-15__author">
							<div class="kt-widget-15__photo">
								<a href="#"><img src="./assets/media/users/100_14.jpg" alt="" title=""></a>
							</div>
							<div class="kt-widget-15__detail">
								<a href="#" class="kt-widget-15__name">Andy John</a>
								<div class="kt-widget-15__desc">
									AngularJS Expert
								</div>
							</div>
						</div>
						<div class="kt-widget-15__wrapper">
							<div class="kt-widget-15__info">
								<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a> 
								<a href="#" class="kt-widget-15__info--item">sale@boatline.com</a>
							</div>
							<div class="kt-widget-15__info">
								<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a> 
								<a href="#" class="kt-widget-15__info--item">(+44) 345 345 4705</a>
							</div>
						</div>
					</div>		
					<div class="kt-widget-15__foot">
						<div class="kt-widget-15__foot-info">
							<div class="kt-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
								01 Sep, 2018
							</div> 
							<div class="kt-widget-15__foot-desc">Joined Date</div>
						</div>
						<div class="kt-widget-15__foot-toolbar">
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
						</div>
					</div>				
				</div>
				<div class="carousel-item active">
					<div class="kt-widget-15__body">
						<div class="kt-widget-15__author">
							<div class="kt-widget-15__photo">
								<a href="#"><img src="./assets/media/users/100_3.jpg" alt="" title=""></a>
							</div>
							<div class="kt-widget-15__detail">
								<a href="#" class="kt-widget-15__name">Patrick Smith</a>
								<div class="kt-widget-15__desc">
									ReactJS Expert
								</div>
							</div>
						</div>
						<div class="kt-widget-15__wrapper">
							<div class="kt-widget-15__info">
								<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a> 
								<a href="#" class="kt-widget-15__info--item">patrick@boatline.com</a>
							</div>
							<div class="kt-widget-15__info">
								<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a> 
								<a href="#" class="kt-widget-15__info--item">(+44) 345 345 5574</a>
							</div>
						</div>
					</div>
					<div class="kt-widget-15__foot">
						<div class="kt-widget-15__foot-info">
							<div class="kt-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
								01 Sep, 2018
							</div> 
							<div class="kt-widget-15__foot-desc">Joined Date</div>
						</div>
						<div class="kt-widget-15__foot-toolbar">
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
						</div>
					</div>						
				</div>
				<div class="carousel-item">
					<div class="kt-widget-15__body">
						<div class="kt-widget-15__author">
							<div class="kt-widget-15__photo">
								<a href="#"><img src="./assets/media/users/100_7.jpg" alt="" title=""></a>
							</div>
							<div class="kt-widget-15__detail">
								<a href="#" class="kt-widget-15__name">Amanda Collin</a>
								<div class="kt-widget-15__desc">
									Project Manager
								</div>
							</div>
						</div>
						<div class="kt-widget-15__wrapper">
							<div class="kt-widget-15__info">
								<a href="#" class="btn btn-icon btn-sm btn-circle btn-success"><i class="fa fa-envelope"></i></a> 
								<a href="#" class="kt-widget-15__info--item">amanda@boatline.com</a>
							</div>
							<div class="kt-widget-15__info">
								<a href="#" class="btn btn-icon btn-sm btn-circle btn-brand"><i class="fa fa-phone"></i></a> 
								<a href="#" class="kt-widget-15__info--item">(+44) 345 345 1247</a>
							</div>
						</div>
					</div>	
					<div class="kt-widget-15__foot">
						<div class="kt-widget-15__foot-info">
							<div class="kt-widget-15__foot-label btn btn-sm btn-label-brand btn-bold">
								01 Sep, 2018
							</div> 
							<div class="kt-widget-15__foot-desc">Joined Date</div>
						</div>
						<div class="kt-widget-15__foot-toolbar">
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Message</a>
							<a href="#" class="btn btn-default btn-sm btn-bold btn-upper">Profile</a>
						</div>
					</div>				
				</div> 
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->	</div>

	<div class="col-lg-12 col-xl-4 order-lg-2 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">Latest Uploads</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-actions">
				<a href="#" class="btn btn-default btn-upper btn-sm btn-bold">All FILES</a>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--fluid">
		<div class="kt-widget-7">
			<div class="kt-widget-7__items">
				<div class="kt-widget-7__item">
					<div class="kt-widget-7__item-pic">
						<img src="./assets/media/files/doc.svg" alt="">
					</div>
					<div class="kt-widget-7__item-info">
						<a href="#" class="kt-widget-7__item-title">
							Keeg Design Reqs
						</a>
						<div class="kt-widget-7__item-desc">
							95 MB
						</div>
					</div>
					<div class="kt-widget-7__item-toolbar">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-more-1"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__section kt-nav__section--first">
										<span class="kt-nav__section-text">EXPORT TOOLS</span>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-eye"></i>
											<span class="kt-nav__link-text">View</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-comment-o"></i>
											<span class="kt-nav__link-text">Coments</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-copy"></i>
											<span class="kt-nav__link-text">Copy</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<i class="kt-nav__link-icon la la-file-excel-o"></i>
											<span class="kt-nav__link-text">Excel</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-widget-7__item">
					<div class="kt-widget-7__item-pic">
						<img src="./assets/media/files/pdf.svg" alt="">
					</div>
					<div class="kt-widget-7__item-info">
						<a href="#" class="kt-widget-7__item-title">
							S.E.R Agreement
						</a>
						<div class="kt-widget-7__item-desc">
							805 MB
						</div>
					</div>
					<div class="kt-widget-7__item-toolbar">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-more-1"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__section kt-nav__section--first">
										<span class="kt-nav__section-text">EXPORT TOOLS</span>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-eye"></i>
										<span class="kt-nav__link-text">View</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-comment-o"></i>
										<span class="kt-nav__link-text">Coments</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-copy"></i>
										<span class="kt-nav__link-text">Copy</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-excel-o"></i>
										<span class="kt-nav__link-text">Excel</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-widget-7__item">
					<div class="kt-widget-7__item-pic">
						<img src="./assets/media/files/jpg.svg" alt="">
					</div>
					<div class="kt-widget-7__item-info">
						<a href="#" class="kt-widget-7__item-title">
							FlyMore Screenshot
						</a>
						<div class="kt-widget-7__item-desc">
							4 MB
						</div>
					</div>
					<div class="kt-widget-7__item-toolbar">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-more-1"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__section kt-nav__section--first">
										<span class="kt-nav__section-text">EXPORT TOOLS</span>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-eye"></i>
										<span class="kt-nav__link-text">View</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-comment-o"></i>
										<span class="kt-nav__link-text">Coments</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-copy"></i>
										<span class="kt-nav__link-text">Copy</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-excel-o"></i>
										<span class="kt-nav__link-text">Excel</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-widget-7__item">
					<div class="kt-widget-7__item-pic">
						<img src="./assets/media/files/zip.svg" alt="">
					</div>
					<div class="kt-widget-7__item-info">
						<a href="#" class="kt-widget-7__item-title">
							ST.11 Dacuments
						</a>
						<div class="kt-widget-7__item-desc">
							Unknown
						</div>
					</div>
					<div class="kt-widget-7__item-toolbar">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-more-1"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__section kt-nav__section--first">
										<span class="kt-nav__section-text">EXPORT TOOLS</span>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-eye"></i>
										<span class="kt-nav__link-text">View</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-comment-o"></i>
										<span class="kt-nav__link-text">Coments</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-copy"></i>
										<span class="kt-nav__link-text">Copy</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-excel-o"></i>
										<span class="kt-nav__link-text">Excel</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-widget-7__item">
					<div class="kt-widget-7__item-pic">
						<img src="./assets/media/files/xml.svg" alt="">
					</div>
					<div class="kt-widget-7__item-info">
						<a href="#" class="kt-widget-7__item-title">
							XML AOL Data Fetchin
						</a>
						<div class="kt-widget-7__item-desc">
							4 MB
						</div>
					</div>
					<div class="kt-widget-7__item-toolbar">
						<div class="dropdown dropdown-inline">
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-more-1"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<ul class="kt-nav">
									<li class="kt-nav__section kt-nav__section--first">
										<span class="kt-nav__section-text">EXPORT TOOLS</span>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-eye"></i>
										<span class="kt-nav__link-text">View</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-comment-o"></i>
										<span class="kt-nav__link-text">Coments</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-copy"></i>
										<span class="kt-nav__link-text">Copy</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
										<i class="kt-nav__link-icon la la-file-excel-o"></i>
										<span class="kt-nav__link-text">Excel</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="kt-widget-7__foot">
				<img src="./assets/media/misc/clouds.png" alt="">
				<div class="kt-widget-7__upload">
					<a href="#"><i class="flaticon-upload"></i></a>	
					<span>Drag files here</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end::Portlet-->


	</div>
	<div class="col-lg-12 col-xl-8 order-lg-3 order-xl-1">
		<!--begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Recent Orders <small>32500 total</small></h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper kt-form">
                <div class="kt-form__group kt-form__group--inline kt-margin-r-10">
                    <div class="kt-form__label">Sort By:</div>
                    <div class="kt-form__control" style="width: 160px;">
                        <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_status" title="Status" tabindex="-98"><option class="bs-title-option" value=""></option>
                                <option value="1">Pending</option>
                                <option value="2">Delivered</option>
                                <option value="3">Canceled</option>
                                <option value="4">Success</option>
                                <option value="5">Info</option>
                                <option value="6">Danger</option>
                        </select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="Status"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Status</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                    </div>
                </div>
                <a href="#" class="btn btn-brand btn-upper btn-bold">New Record</a>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">
	    <!--Doc: For the datatable initialization refer to "recentOrdersInit" function in "src\theme\app\scripts\custom\dashboard.js" -->
	    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" id="kt_recent_orders" style=""><table class="kt-datatable__table" style="display: block; min-height: 500px; max-height: 500px;"><thead class="kt-datatable__head"><tr class="kt-datatable__row" style="left: 0px;"><th data-field="id" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox">&nbsp;<span></span></label></span></th><th data-field="employee_id" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Order ID</span></th><th data-field="first_name" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 130px;">Customer</span></th><th data-field="hire_date" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Date</span></th><th data-field="status" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Status</span></th><th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort"><span style="width: 80px;">Actions</span></th></tr></thead><tbody class="kt-datatable__body ps ps--active-y" style="max-height: 447px;"><tr data-row="0" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">463978155-5</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Carroll Maharry</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/18/2018</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--danger kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Delivered</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="2">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">590410601-7</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Jae Frammingham</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">10/22/2017</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--info kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Delivered</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="2" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="3">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">562079447-4</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Natalie Stuchberry</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">6/1/2018</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--brand kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Pending</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="3" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="4">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">078485871-3</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Abran Ivett</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">2/6/2018</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--focus kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Pending</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="4" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="5">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">048140516-X</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Viola Ends</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/16/2018</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--focus kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Delivered</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="5" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="6">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">115191539-4</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Marabel Foystone</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">5/10/2018</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--brand kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Pending</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="6" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="7">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">053408526-1</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Maiga Frogley</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">10/24/2017</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--success kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Pending</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="7" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="8">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">996172199-3</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Leia Rapelli</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">3/11/2018</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--info kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Canceled</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="8" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="9">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">290771439-2</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Lilias Stollsteiner</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">4/26/2018</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--danger kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Canceled</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><tr data-row="9" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="id"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="10">&nbsp;<span></span></label></span></td><td data-field="employee_id" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-label-font-color-3 kt-font-bold">475138305-1</span></span></td><td data-field="first_name" class="kt-datatable__cell"><span style="width: 130px;"><span class="kt-label-font-color-3 kt-font-bold">Chrissie Trenouth</span></span></td><td data-field="hire_date" class="kt-datatable__cell"><span style="width: 110px;">4/5/2018</span></td><td data-field="status" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--info kt-badge--dot kt-badge--md"></span>&nbsp;&nbsp;<span class="kt-label-font-color-2 kt-font-bold">Delivered</span></span></td><td class="kt-datatable__cell--center kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                                <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                                <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a title="Edit details" class="btn btn-clean btn-icon btn-sm btn-icon-md" href="#">                            <i class="la la-edit"></i>                        </a>                    </span></td></tr><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 447px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div></div></tbody></table><div class="kt-datatable__pager kt-datatable--paging-loaded"><ul class="kt-datatable__pager-nav"><li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li><li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li><li style=""></li><li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li><li></li><li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li><li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="20"><i class="flaticon2-fast-next"></i></a></li></ul><div class="kt-datatable__pager-info"><div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-selected="10" tabindex="-98"><option class="bs-title-option" value=""></option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Select page size"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">10</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 200</span></div></div></div>
    </div>
</div>
<!--end::Portlet-->	</div>
</div>
<!--end::Row-->
<!--end::Dashboard 1-->	</div>
<!-- end:: Content -->				</div>
<!-- end::Demo Panel -->
        <!-- begin::Global Config(global config for global JS sciprts) -->
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
    	    	   <script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript"></script>
		    	   <script src="../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

         
            <!--begin::Page Vendors(used by this page) -->
                            <script src="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
                        <!--end::Page Vendors -->
          

                    
            <!--begin::Page Scripts(used by this page) -->
                            <script src="../../assets/Backoffice/js/demo1/pages/dashboard.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>