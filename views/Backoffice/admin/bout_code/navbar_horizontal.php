				<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " >
					
					<!-- begin:: Header Menu -->
					<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn">
					<i class="la la-close">
					</i>
					</button>
					<!-- end:: Header Menu -->
					<!-- begin:: Header Topbar -->
					<div class="kt-header__topbar mx-auto">
						<!--begin: Notifications -->
						
						<div class="kt-header__topbar-item dropdown">
							<div class="kt-header__topbar-wrapper ss" data-toggle="dropdown" data-offset="30px, 0px" aria-expanded="true">
								<span class="kt-header__topbar-icon">
									<i class="la la-bell-o" style="font-size:25px;">
									</i>
                        <div class="spinner-grow text-primary spinner-grow-sm signaler" role="status" style=";<?php 
echo (notification::nombre(0)!=0)?"":"display:none;";
                        ?>">
                            <span class="sr-only">Loading...</span>
                        </div>
								</span>
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
								<form>
									<div class="kt-head" style="background-image: url(../../assets/Backoffice/media/misc/head_bg_sm.jpg)">
										<h3 class="kt-head__title">
										User Notifications</h3>
										<div class="kt-head__sub">
											<span class="kt-head__desc" style="border-radius:0px;">
											<span class="total">6</span> new notifications</span>
											<div class="btn btn-primary text-center text-white del" style="cursor:pointer;border-radius:0px;">Tout marquer comme lu</div>
										</div>
									</div>
									<div class="kt-notification kt-margin-t-30 kt-margin-b-20 kt-scroll" data-scroll="true" data-height="270" data-mobile-height="220">

									<div class="remplir">
										<?php 
									notification::afficher(0);
									?>
									</div>
									</div>
								</form>
							</div>
						</div>
						<!--end: Notifications -->
						<!--begin: Quick Actions -->
						<div class="kt-header__topbar-item">
							<div class="kt-header__topbar-wrapper" id="kt_offcanvas_toolbar_quick_actions_toggler_btn">
								<span class="kt-header__topbar-icon">
									<i class="la la-gear">
									</i>
								</span>
							</div>
						</div>
						<!--end: Quick Actions -->
						<!--begin:: Languages -->
						<div class="kt-header__topbar-item kt-header__topbar-item--langs">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
								<span class="kt-header__topbar-icon">
									<img class="" src="../../assets/Backoffice/media/flags/020-flag.svg" alt="" />
								</span>
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
								<ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
									<li class="kt-nav__item kt-nav__item--active">
										<a href="#" class="kt-nav__link">
											<span class="kt-nav__link-icon">
												<img src="../../assets/Backoffice/media/flags/020-flag.svg" alt="" />
											</span>
											<span class="kt-nav__link-text">
											English</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<span class="kt-nav__link-icon">
												<img src="../../assets/Backoffice/media/flags/016-spain.svg" alt="" />
											</span>
											<span class="kt-nav__link-text">
											Spanish</span>
										</a>
									</li>
									<li class="kt-nav__item">
										<a href="#" class="kt-nav__link">
											<span class="kt-nav__link-icon">
												<img src="../../assets/Backoffice/media/flags/017-germany.svg" alt="" />
											</span>
											<span class="kt-nav__link-text">
											German</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!--end:: Languages -->
						<!--begin: User Bar -->
						<div class="kt-header__topbar-item kt-header__topbar-item--user">
							
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px, 0px">
								<div class="kt-header__topbar-user">
									<span class="kt-header__topbar-welcome kt-hidden-mobile">
									Hi,</span>
									<span class="kt-header__topbar-username kt-hidden-mobile">
									<?=$username?></span>
									<img alt="Pic" src="../../assets/Backoffice/media/users/0.png" />
									<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
									<span class="kt-badge kt-badge--username kt-badge--lg kt-badge--brand kt-hidden kt-badge--bold">
									S</span>
								</div>
							</div>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
								<div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(../../assets/Backoffice/media/misc/head_bg_sm.jpg)">
									<div class="kt-user-card__wrapper">
										<div class="kt-user-card__pic">
											<img alt="Pic" src="../../assets/Backoffice/media/users/0.png" />
										</div>
										<div class="kt-user-card__details">
											<div class="kt-user-card__name">
											Administrateur</div>
											<div class="kt-user-card__position">
											<?=$email?></div>
										</div>
									</div>
								</div>
								<ul class="kt-nav kt-margin-b-10">
									<li class="kt-nav__item">
										<a href="#"  data-toggle="modal" data-target="#exampleModalLon" class="kt-nav__link">
											<span class="kt-nav__link-icon">
												<i class="la la-user" style="font-size:25px;">
												</i>
											</span>
											<span class="kt-nav__link-text">
											Mon Profile</span>
										</a>
									</li>
									<li class="kt-nav__item kt-nav__item--custom kt-margin-t-15">
										<a href="../../login/deconnexion.php" class="btn btn-label-brand btn-upper btn-sm btn-bold">
										Se déconnecter</a>
									</li>
								</ul>
							</div>
							
						</div>
						<!--end: User Bar -->
						<!--begin:: Quick Panel Toggler -->
						<div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="right">
							<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
								<i class="la la-grids" style="font-size:25px;">
								</i>
								
							</span>
						</div>
						<!--end:: Quick Panel Toggler -->
					</div>
					<!-- end:: Header Topbar -->
				</div>