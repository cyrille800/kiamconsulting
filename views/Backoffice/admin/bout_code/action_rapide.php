	<div id="kt_offcanvas_toolbar_quick_actions" class="kt-offcanvas-panel">
		<div class="kt-offcanvas-panel__head">
			<h3 class="kt-offcanvas-panel__title">
			Quick Actions
			</h3>
			<a href="#" class="kt-offcanvas-panel__close" id="kt_offcanvas_toolbar_quick_actions_close">
				<i class="la la-delete">
				</i>
			</a>
		</div>
		<div class="kt-offcanvas-panel__body">
			<div class="kt-grid-nav-v2">
<div class="tab-pane fade show kt-offcanvas-panel__content kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel" style="height:750px; overflow-y:scroll;">
                        <!--Begin::Timeline -->
                        <div class="kt-timeline" id='<?php echo notification::nombre_total(0);?>'>
                           <?php 
                            notification::afficher_simple(0);
                            ?>
                        </div>
                        
                        <!--End::Timeline -->
                        
                    </div>
			</div>
		</div>
	</div>