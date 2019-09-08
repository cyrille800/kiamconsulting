	<div id="kt_offcanvas_toolbar_quick_actions" class="kt-offcanvas-panel">
		<div class="kt-offcanvas-panel__head">
			<h3 class="kt-offcanvas-panel__title">
			Notifications
			</h3>
			<a href="#" class="kt-offcanvas-panel__close" id="kt_offcanvas_toolbar_quick_actions_close">
				<i class="la la-delete">
				</i>
			</a>
		</div>
		<div class="kt-offcanvas-panel__body">
			<div class="kt-grid-nav-v2">
<div class="fade show kt-scroll active col-12" id="kt_quick_panel_tab_notifications" role="tabpanel" style="height:750px; overflow-y:scroll;"  id='<?php echo notification::nombre_total(0);?>'>

                        <iframe src="page_vierge.php" name="notification" class="kt-timeline" id="<?php echo notification::nombre_total(0);?>" style="border:0px;margin:0;width:100%;height:75%;"></iframe>

                        <div class="btn-group col-12 mt-3">
                            <button type="button"  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Type de message
                            </button>
                            <div class="dropdown-menu col-12">
                                <?php 
                                $s=config::$bdd->query("select distinct type from notification where id_personne=0");
                                while($data=$s->fetch()){
                                echo '<a class="dropdown-item"  target="notification">'.$data['type'].'</a>';
                                }
                                ?>
                            </div>
                        </div>


                                            <div class="kt-section__content kt-section__content--border col-8 mt-3">
                        <nav aria-label="..." class="col-2">
                            <ul class="pagination col-1">
                                <?php 
                                $requette=config::$bdd->query("select count(*) from notification where id_personne=0");
                                $fr=$requette->fetch();
                                $nombres=intval($fr[0]);
                                for($i=0;$i<$nombres/40;$i++){
                                    echo '<li class="page-item ';
                                    if(isset($_GET["nombre"])){
                                        if(intval($_GET["nombre"])==($i+1)){
                                            echo "active";
                                        }
                                    }else{
                                        if($i==0){
                                            echo "active";
                                        }
                                    }
                                    echo '"><a class="page-link" target="notification" style="cursor:pointer;">'.($i+1).'</a></li>';
                                }
                                ?>
                                
                            </ul>
                        </nav>
                    </div>
                        <!--End::Timeline -->
                        
                    </div>
			</div>
		</div>
	</div>