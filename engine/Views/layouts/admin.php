<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Adminto - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>


    <body class="authentication-bg">
    <?php if ($this->route['action'] !='login'): ?>

    <div class="left-side-menu">
        <div class="slimScrollDiv active" style="position: relative; overflow: hidden; width: auto; height: 549px;"><div class="slimscroll-menu in" style="overflow: hidden; width: auto; height: 549px;">
                <!-- User box -->
                <div class="user-box text-center">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
                    <div class="dropdown">
                        <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Nowak Helme</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user mr-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings mr-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock mr-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out mr-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">Admin Head</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-muted">
                                <i class="mdi mdi-settings"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#" class="text-custom">
                                <i class="mdi mdi-power"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu" class="active">

                    <ul class="metismenu in" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li class="active">
                            <a href="index.html" class="active">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="typography.html">
                                <i class="mdi mdi-format-font"></i>
                                <span> Typography </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-invert-colors"></i>
                                <span> User Interface </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level collapse" aria-expanded="false">
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                                <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                <li><a href="ui-material-icons.html">Material Design Icons</a></li>
                                <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li>
                                <li><a href="ui-dripicons.html">Dripicons</a></li>
                                <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-range-slider.html">Range Slider</a></li>
                                <li><a href="ui-components.html">Components</a>
                                </li><li><a href="ui-sweetalert.html">Sweet Alert</a>
                                </li><li><a href="ui-treeview.html">Tree view</a>
                                </li><li><a href="ui-widgets.html">Widgets</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-texture"></i>
                                <span class="badge badge-warning float-right">7</span>
                                <span> Forms </span>
                            </a>
                            <ul class="nav-second-level collapse" aria-expanded="false">
                                <li><a href="form-elements.html">General Elements</a></li>
                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-fileupload.html">Form Uploads</a></li>
                                <li><a href="form-quilljs.html">Quilljs Editor</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-view-list"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level collapse" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                                <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-chart-donut-variant"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level collapse" aria-expanded="false">
                                <li><a href="charts-flot.html">Flot Charts</a></li>
                                <li><a href="charts-morris.html">Morris Charts</a></li>
                                <li><a href="charts-chartist.html">Chartist Charts</a></li>
                                <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                                <li><a href="charts-other.html">Other Charts</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="calendar.html">
                                <i class="mdi mdi-calendar"></i>
                                <span> Calendar </span>
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                <i class="mdi mdi-email"></i>
                                <span> Mail </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-page-layout-sidebar-left"></i>
                                <span class="badge badge-purple float-right">New</span>
                                <span> Layouts </span>
                            </a>
                            <ul class="nav-second-level collapse" aria-expanded="false">
                                <li><a href="layouts-sidebar-sm.html">Small Sidebar</a></li>
                                <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                <li><a href="layouts-dark-topbar.html">Dark Topbar</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                                <li><a href="layouts-boxed.html">Boxed</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-google-pages"></i>
                                <span> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level collapse" aria-expanded="false">
                                <li><a href="pages-starter.html">Starter Page</a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-layers"></i>
                                <span> Extra Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level collapse" aria-expanded="false">
                                <li><a href="extras-projects.html">Projects</a></li>
                                <li><a href="extras-tour.html">Tour</a></li>
                                <li><a href="extras-taskboard.html">Taskboard</a></li>
                                <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                <li><a href="extras-profile.html">Profile</a></li>
                                <li><a href="extras-maps.html">Maps</a></li>
                                <li><a href="extras-contact.html">Contact list</a></li>
                                <li><a href="extras-pricing.html">Pricing</a></li>
                                <li><a href="extras-timeline.html">Timeline</a></li>
                                <li><a href="extras-invoice.html">Invoice</a></li>
                                <li><a href="extras-faq.html">FAQs</a></li>
                                <li><a href="extras-gallery.html">Gallery</a></li>
                                <li><a href="extras-email-templates.html">Email Templates</a></li>
                                <li><a href="extras-maintenance.html">Maintenance</a></li>
                                <li><a href="extras-comingsoon.html">Coming Soon</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-share-variant"></i>
                                <span> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level nav collapse" aria-expanded="false">
                                <li>
                                    <a href="javascript: void(0);">Level 1.1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-third-level nav collapse" aria-expanded="false">
                                        <li>
                                            <a href="javascript: void(0);">Level 2.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Level 2.2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 8px; position: absolute; top: -206.406px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 366.668px;"></div>
            <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
        </div>
        <!-- Sidebar -left -->

    </div>
    <?php endif; ?>
        <?php echo $content; ?>
    <script src="/assets/js/jquery-3.5.1.min.js"></script>

        <!-- Vendor js -->
        <script src="/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/form.js"></script>
