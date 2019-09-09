  <div id="kt_quick_panel" class="kt-offcanvas-panel">
            <div class="kt-offcanvas-panel__nav">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">
                        Notifications</a>
                    </li>
                </ul>
                <button class="kt-offcanvas-panel__close" id="kt_quick_panel_close_btn">
                <i class="flaticon2-delete">
                </i>
                </button>
            </div>
            <div class="kt-offcanvas-panel__body">
                <div class="tab-content">
                    <div class="tab-pane fade show kt-offcanvas-panel__content kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                        <!--Begin::Timeline -->

                        <iframe src="page_vierge.php" name="notification" class="kt-timeline" id="<?php echo notification::nombre_total($_SESSION["id"]);?>" style="border:0px;margin:0;width:100%;height:80%;"></iframe>

                        <div class="btn-group col-12 mt-3">
                            <button type="button" class="btn btn-primary dropdown-toggle el" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Type de message
                            </button>
                            <div class="dropdown-menu col-12" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                <?php 
                                $s=config::$bdd->query("select distinct type from notification where id_personne=".$_SESSION["id"]);
                                while($data=$s->fetch()){
                                echo '<a class="dropdown-item" href="#" target="notification">'.$data['type'].'</a>';
                                }
                                ?>
                            </div>
                        </div>


                                            <div class="kt-section__content kt-section__content--border col-8 mt-3">
                        <nav aria-label="..." class="col-2 mx-auto">
                            <ul class="pagination col-1">
                                <?php 
                                $requette=config::$bdd->query("select count(*) from notification where id_personne=".$_SESSION["id"]);
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
                                    echo '"><a class="page-link" target="notification" href="#">'.($i+1).'</a></li>';
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