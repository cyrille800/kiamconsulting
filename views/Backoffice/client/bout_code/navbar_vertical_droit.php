  <div id="kt_quick_panel" class="kt-offcanvas-panel">
            <div class="kt-offcanvas-panel__nav">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">
                        Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_actions" role="tab">
                        Actions</a>
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
                        <div class="kt-timeline" id="<?php echo notification::nombre_total($_SESSION["id"]);?>">
                            
                            <?php 
                            notification::afficher_simple($_SESSION["id"]);
                            ?>
                            
                        </div>
                        
                        <!--End::Timeline -->
                        
                    </div>
                    <div class="tab-pane fade kt-offcanvas-panel__content kt-scroll" id="kt_quick_panel_tab_actions" role="tabpanel">
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--solid-success">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon kt-hide">
                                        <i class="flaticon-stopwatch">
                                        </i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                    Recent Bills</h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-group">
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="flaticon-more">
                                            </i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">
                                                Action</a>
                                                <a class="dropdown-item" href="#">
                                                Another action</a>
                                                <a class="dropdown-item" href="#">
                                                Something else here</a>
                                                <div class="dropdown-divider">
                                                </div>
                                                <a class="dropdown-item" href="#">
                                                Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-portlet__content">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
                                </div>
                            </div>
                            
                            <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                Dismiss</a>
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                View</a>
                            </div>
                        </div>
                        <!--end::Portlet-->
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--solid-focus">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <span class="kt-portlet__head-icon kt-hide">
                                        <i class="flaticon-stopwatch">
                                        </i>
                                    </span>
                                    <h3 class="kt-portlet__head-title">
                                    Latest Orders</h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-group">
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="flaticon-more">
                                            </i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">
                                                Action</a>
                                                <a class="dropdown-item" href="#">
                                                Another action</a>
                                                <a class="dropdown-item" href="#">
                                                Something else here</a>
                                                <div class="dropdown-divider">
                                                </div>
                                                <a class="dropdown-item" href="#">
                                                Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-portlet__content">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
                                </div>
                            </div>
                            
                            <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                Dismiss</a>
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                View</a>
                            </div>
                        </div>
                        <!--end::Portlet-->
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--solid-info">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                    Latest Invoices</h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-group">
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="flaticon-more">
                                            </i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">
                                                Action</a>
                                                <a class="dropdown-item" href="#">
                                                Another action</a>
                                                <a class="dropdown-item" href="#">
                                                Something else here</a>
                                                <div class="dropdown-divider">
                                                </div>
                                                <a class="dropdown-item" href="#">
                                                Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-portlet__content">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
                                </div>
                            </div>
                            
                            <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                Dismiss</a>
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                View</a>
                            </div>
                        </div>
                        <!--end::Portlet-->
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--solid-warning">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                    New Comments</h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-group">
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="flaticon-more">
                                            </i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">
                                                Action</a>
                                                <a class="dropdown-item" href="#">
                                                Another action</a>
                                                <a class="dropdown-item" href="#">
                                                Something else here</a>
                                                <div class="dropdown-divider">
                                                </div>
                                                <a class="dropdown-item" href="#">
                                                Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-portlet__content">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
                                </div>
                            </div>
                            
                            <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                Dismiss</a>
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                View</a>
                            </div>
                        </div>
                        <!--end::Portlet-->
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--solid-brand">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                    Recent Posts</h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-group">
                                        <div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-sm btn-font-light btn-outline-hover-light btn-circle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="flaticon-more">
                                            </i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">
                                                Action</a>
                                                <a class="dropdown-item" href="#">
                                                Another action</a>
                                                <a class="dropdown-item" href="#">
                                                Something else here</a>
                                                <div class="dropdown-divider">
                                                </div>
                                                <a class="dropdown-item" href="#">
                                                Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-portlet__content">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting simply dummy text of the printing industry.
                                </div>
                            </div>
                            
                            <div class="kt-portlet__foot kt-portlet__foot--sm kt-align-right">
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                Dismiss</a>
                                <a href="#" class="btn btn-bold btn-upper btn-sm btn-font-light btn-outline-hover-light">
                                View</a>
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                </div>
            </div>
        </div>