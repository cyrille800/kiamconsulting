				<button class="kt-aside-close " id="kt_aside_close_btn">
					<i class="la la-close">
					</i>
				</button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
					<!-- begin::Aside Brand -->
					<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand" style="background-color: #20232d;">
						<div class="kt-aside__brand-logo">
							<a href="">
								<img alt="Logo" src="../../assets/Backoffice/media/logos/logo-6.png" />
							</a>
						</div>

						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler">
								<span>
								</span>
							</button>
						</div>
					</div>
					<!-- end:: Aside Brand -->
					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">

							<ul class="kt-menu__nav ">

								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">
										Tableau de bord</h4>
								</li>

<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--here"  aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
	<a href="dashboard.php" class="kt-menu__link kt-menu__toggle" target="frame1">
		<i class="kt-menu__link-icon  la la-dashboard"  style="font-size:25px;">
		</i>
		<span class="kt-menu__link-text">
			<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;">
			Dashboard</font>
			</font>
		</span>
		<i class="kt-menu__ver-arrow la la-angle-right">
		</i>
	</a>
</li>


								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">
										Users</h4>
								</li>


<li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
	<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
				<i class="kt-menu__link-icon la la-user"  style="font-size:25px;">
		</i>
		<span class="kt-menu__link-text">
		Gestion des clients</span>
		<?php 
		$t=config::$bdd->query("select count(*) from patient where resultat=0");
		$n=$t->fetch();
		$nombre=$n[0];
		?>
		<span class="kt-badge kt-badge--brand nombre_demande"  style="<?php echo ($nombre==0)?"display: none":"";?>"><?php echo $nombre;?></span>
									</span>
		<i class="kt-menu__ver-arrow la la-angle-right">
		</i>
	</a>
	<div class="kt-menu__submenu " kt-hidden-height="160" style="display: none; overflow: hidden;">
		<span class="kt-menu__arrow">
		</span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
				<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
					<span>
					</span>
					</i>
					<span class="kt-menu__link-text">
					étudiants</span>
					<i class="kt-menu__ver-arrow la la-angle-right">
					</i>
				</a>
				<div class="kt-menu__submenu " kt-hidden-height="80" style="display: none; overflow: hidden;">
					<span class="kt-menu__arrow">
					</span>
					<ul class="kt-menu__subnav">
						<li class="kt-menu__item " aria-haspopup="true">
							<a href="client.php?nombre=0" target="frame1" class="kt-menu__link ">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
								<span>
								</span>
								</i>
								<span class="kt-menu__link-text">
								Consulter les étudiants</span>
							</a>
						</li>
						
					</ul>
				</div>
			</li>
			<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
				<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
					<span>
					</span>
					</i>
					<span class="kt-menu__link-text">
					patients</span>

																<span class="kt-menu__link-badge">
										<span class="kt-badge kt-badge--brand nombre_demande"  style="<?php echo ($nombre==0)?"display: none":"";?>"><?php echo $nombre;?></span>
									</span>
					<i class="kt-menu__ver-arrow la la-angle-right">
					</i>
				</a>
				<div class="kt-menu__submenu ">
					<span class="kt-menu__arrow">
					</span>
					<ul class="kt-menu__subnav">
						<li class="kt-menu__item " aria-haspopup="true">
							<a href="client.php?nombre=1" target="frame1" class="kt-menu__link ">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
								<span>
								</span>
								</i>
								<span class="kt-menu__link-text">
								Consulter les patients</span>
							</a>
						</li>
						<li class="kt-menu__item drf" aria-haspopup="true">
							<a href="demande.php" target="frame1" class="kt-menu__link ">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
								<span>
								</span>
								</i>
								<span class="kt-menu__link-text">
								Demande d'adhesion</span>
								<span class="kt-badge kt-badge--brand nombre_demande"  style="<?php echo ($nombre==0)?"display: none":"";?>"><?php echo $nombre;?></span>
									</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</li>

								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">
										Communication</h4>
								</li>

<li class="kt-menu__item  kt-menu__item--submenu">
	<a href="messagerie.php" class="kt-menu__link kt-menu__toggle" target="frame1">
		<i class="kt-menu__link-icon la la-comments-o"  style="font-size:25px;">
		</i>
		<span class="kt-menu__link-text">
			<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;">
			Message</font>
			</font>
		</span>
											<span class="kt-menu__link-badge">
										<span class="kt-badge kt-badge--brand iok">0</span>
									</span>
		<i class="kt-menu__ver-arrow la la-angle-right">
		</i>
	</a>
</li>

								



<li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
	<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"></rect>
													<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
													<polygon id="Path" fill="#000000" opacity="0.3" points="4 19 10 11 16 19"></polygon>
													<polygon id="Path-Copy" fill="#000000" points="11 19 15 14 19 19"></polygon>
													<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" id="Path" fill="#000000" opacity="0.3"></path>
												</g>
											</svg></span>
		<span class="kt-menu__link-text">
		Blog</span>
		<i class="kt-menu__ver-arrow la la-angle-right">
		</i>
	</a>
	<div class="kt-menu__submenu " kt-hidden-height="160" style="display: none; overflow: hidden;">
		<span class="kt-menu__arrow">
		</span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
				<span class="kt-menu__link">
					<span class="kt-menu__link-text">
					Features</span>
				</span>
			</li>
			<li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
				<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
					<span>
					</span>
					</i>
					<span class="kt-menu__link-text">
					Posts</span>
					<i class="kt-menu__ver-arrow la la-angle-right">
					</i>
				</a>
				<div class="kt-menu__submenu " kt-hidden-height="80" style="display: none; overflow: hidden;">
					<span class="kt-menu__arrow">
					</span>
					<ul class="kt-menu__subnav">
						<li class="kt-menu__item " aria-haspopup="true">
							<a href="../admin/Blog/ajouterPost.php" target="frame1" class="kt-menu__link ">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
								<span>
								</span>
								</i>
								<span class="kt-menu__link-text">
								Ajouter un post</span>
							</a>
						</li>
						<li class="kt-menu__item " aria-haspopup="true">
							<a href="../admin/Blog/afficherPost.php" target="frame1" class="kt-menu__link ">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
								<span>
								</span>
								</i>
								<span class="kt-menu__link-text">
								Consulter les posts</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
				<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
					<span>
					</span>
					</i>
					<span class="kt-menu__link-text">
					Catégories</span>
					<i class="kt-menu__ver-arrow la la-angle-right">
					</i>
				</a>
				<div class="kt-menu__submenu ">
					<span class="kt-menu__arrow">
					</span>
					<ul class="kt-menu__subnav">
						<li class="kt-menu__item " aria-haspopup="true">
							<a href="../admin/Blog/ajouterCategorie.php" target="frame1" class="kt-menu__link ">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
								<span>
								</span>
								</i>
								<span class="kt-menu__link-text">
								Ajouter une catégorie</span>
							</a>
						</li>
						<li class="kt-menu__item " aria-haspopup="true">
							<a href="../admin/Blog/afficherCategorie.php" target="frame1" class="kt-menu__link ">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
								<span>
								</span>
								</i>
								<span class="kt-menu__link-text">
								Consulter les catégories</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
				<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
					<span>
					</span>
					</i>
					<span class="kt-menu__link-text">
					Commentaire</span>
					<i class="kt-menu__ver-arrow la la-angle-right">
					</i>
				</a>
				<div class="kt-menu__submenu ">
					<span class="kt-menu__arrow">
					</span>
					<ul class="kt-menu__subnav">
						<li class="kt-menu__item " aria-haspopup="true">
							<a href="../admin/Blog/afficherCommentaire.php" target="frame1" class="kt-menu__link ">
								<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
								<span>
								</span>
								</i>
								<span class="kt-menu__link-text">
								Consulter les commentaires</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</li>
<li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
							<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
								<i class="kt-menu__link-icon la la-cube" style="font-size:25px;">
								</i>
								<span class="kt-menu__link-text">
									Contact</span>
								<span class="kt-menu__link-badge">
									<span class="kt-badge kt-badge--brand">
										2</span>
								</span>
								<i class="kt-menu__ver-arrow la la-angle-right">
								</i>
							</a>
							<div class="kt-menu__submenu " kt-hidden-height="40" style="">
								<span class="kt-menu__arrow">
								</span>
								<ul class="kt-menu__subnav">
									<li class="kt-menu__item" aria-haspopup="true">
										<a href="Contact/afficherMessage.php" class="kt-menu__link " target="frame1">
											<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
											</i>
											<span class="kt-menu__link-text">
												Messages</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

																<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">
										Paiement</h4>
								</li>

							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
								<a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
									<i class="kt-menu__link-icon la la-eur" style="font-size:25px;">
									</i>
									<span class="kt-menu__link-text">
									Paiement</span>
									<i class="kt-menu__ver-arrow la la-angle-right">
									</i>
								</a>
								<div class="kt-menu__submenu ">
									<span class="kt-menu__arrow">
									</span>
									<ul class="kt-menu__subnav">
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="paiement/ajouter.php" class="kt-menu__link " target="frame1">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Ajouter un mode de paiement</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="paiement/afficher.php" class="kt-menu__link " target="frame1">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Consulter les paiements</span>
											</a>
										</li>
										

									</ul>
								</div>
							</li>

								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">
										Extension</h4>
								</li>

							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
								<a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
									<i class="kt-menu__link-icon la la-building" style="font-size:25px;">
									</i>
									<span class="kt-menu__link-text">
									Ecole</span>
									<i class="kt-menu__ver-arrow la la-angle-right">
									</i>
								</a>
								<div class="kt-menu__submenu ">
									<span class="kt-menu__arrow">
									</span>
									<ul class="kt-menu__subnav">
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="ecole/specialite.php" class="kt-menu__link " target="frame1">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Spécialité et option</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="ecole/ajouter.php" class="kt-menu__link " target="frame1">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Ajouer une école</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="#" class="kt-menu__link "  data-toggle="modal" data-target="#exampleModal">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Ajouer plus de détails</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="ecole/afficher.php" target="frame1" class="kt-menu__link ">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Consulter les écoles</span>
											</a>
										</li>
										
									</ul>
								</div>
							</li>



							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
								<a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
									<i class="kt-menu__link-icon la la-ioxhost" style="font-size:25px;">
									</i>
									<span class="kt-menu__link-text">
									Services</span>
									<?php 
		$t=config::$bdd->query("select count(*) from activiter_client,proccedure where activiter_client.etape_actuel=proccedure.id && proccedure.fichier=0");
		$n=$t->fetch();
		$nombre=$n[0];
		?>
		<span class="kt-badge kt-badge--brand service"  style="<?php echo ($nombre==0)?"display: none":"";?>"><?php echo $nombre;?></span>
									</span>
									
									<i class="kt-menu__ver-arrow la la-angle-right">
									</i>
								</a>
								<div class="kt-menu__submenu ">
									<span class="kt-menu__arrow">
									</span>
									<ul class="kt-menu__subnav">
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="activite/ajouter.php" class="kt-menu__link " target="frame1">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Ajouter un service</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="activite/afficher.php" class="kt-menu__link " target="frame1">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Consulter les services</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true" >
											<a  href="#" class="kt-menu__link "   data-toggle="modal" data-target="#exampleModal3" target="frame1">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
												<span>
												</span>
												</i>
												<span class="kt-menu__link-text">
												Controler les services</span>
												<span class="kt-badge kt-badge--brand service" style="<?php echo ($nombre==0)?"display: none":"";?>"><?php echo $nombre;?></span>
											</a>
										</li>

										</ul>
									</div>
								</li>
								<li class="kt-menu__item " aria-haspopup="true" >
									<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
										<i class="kt-menu__link-icon la la-book" style="font-size:25px;">
										</i>
										<span class="kt-menu__link-text">
											Concours</span>
										<i class="kt-menu__ver-arrow la la-angle-right">
										</i>
									</a>
									<div class="kt-menu__submenu ">
										<span class="kt-menu__arrow">
										</span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="concour/ajouter.php" class="kt-menu__link " target="frame1">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
														<span>
														</span>
													</i>
													<span class="kt-menu__link-text">
														Ajouter une matiere</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="concour/ajouter.php" class="kt-menu__link " data-toggle="modal" data-target="#exampleModal2" target="frame1">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
														<span>
														</span>
													</i>
													<span class="kt-menu__link-text">
														Ajouter un quizz</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="concour/afficher.php" class="kt-menu__link " target="frame1">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
														<span>
														</span>
													</i>
													<span class="kt-menu__link-text">
														Consulter les matieres</span>
												</a>
											</li>
										
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="concour/Resultat.php" class="kt-menu__link " target="frame1">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
														<span>
														</span>
													</i>
													<span class="kt-menu__link-text">
														Resultat</span>
												</a>
											</li>
											<li class="kt-menu__item " aria-haspopup="true">
												<a href="concour/ajouter.php" class="kt-menu__link " data-toggle="modal" data-target="#exampleModal4" target="frame1">
													<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
														<span>
														</span>
													</i>
													<span class="kt-menu__link-text">
														Date de publication</span>
												</a>
											</li>
										</ul>
									</div>
								</li>

							</ul>

						</ul>
					</div>
				</div>
				</div>