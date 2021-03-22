<!doctype html>
<html lang="en">

<!-- Mirrored from protable.laborasyon.com/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2019 16:46:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Protable - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/asset/assets/media/image/favicon.png') ?>"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?= base_url('public/asset/vendors/bundle.css') ?>" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="<?= base_url('public/asset/vendors/datepicker/daterangepicker.css') ?>">

    <!-- Slick -->
    <link rel="stylesheet" href="<?= base_url('public/asset/vendors/slick/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/asset/vendors/slick/slick-theme.css') ?>">

    <!-- Vmap -->
    <link rel="stylesheet" href="<?= base_url('public/asset/vendors/vmap/jqvmap.min.css') ?>">

    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('public/asset/assets/css/app.min.css') ?>" type="text/css">
</head>
<body>

<!-- begin::preloader-->
<div class="preloader">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewBox="0 0 128 128"
         xml:space="preserve">
        <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF"/>
        <g>
            <path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z"
                  fill="#000000" fill-opacity="1"/>
            <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64"
                              dur="500ms" repeatCount="indefinite">
            </animateTransform>
        </g>
    </svg>
</div>
<!-- end::preloader -->

<!-- begin::navigation -->
<div class="navigation">

    <!-- begin::logo -->
    <div id="logo">
        <a href="index-2.html">
            <img class="logo" src="<?= base_url('public/asset/assets/media/image/logo.png') ?>" alt="logo">
            <img class="logo-sm" src="<?= base_url('public/asset/assets/media/image/logo-sm.png') ?>" alt="small logo">
            <img class="logo-dark" src="<?= base_url('public/asset/assets/media/image/logo-dark.png') ?>" alt="dark logo">
        </a>
    </div>
    <!-- end::logo -->

    <!-- begin::navigation header -->
    <header class="navigation-header">
        <figure class="avatar avatar-state-success">
            <img src="<?= base_url('public/asset/assets/media/image/user/man_avatar3.jpg') ?>" class="rounded-circle" alt="image">
        </figure>
        <div>
            <h5>Nikos Pedlow</h5>
            <p class="text-muted">Administrator</p>
            <ul class="nav">
                <li class="nav-item">
                    <a href="profile.html" class="btn nav-link bg-info-bright" title="Profile" data-toggle="tooltip">
                        <i data-feather="user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn nav-link bg-success-bright" title="Settings" data-toggle="tooltip">
                        <i data-feather="settings"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="btn nav-link bg-danger-bright" title="Logout" data-toggle="tooltip">
                        <i data-feather="log-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- end::navigation header -->

    <!-- begin::navigation menu -->
    <div class="navigation-menu-body">
        <ul>
            <li class="navigation-divider">Main</li>
            <li class="open">
                <a href="index-2.html">
                    <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                    <span>Dashboard</span>
                </a>
                <ul>
                    <li><a class="active" href="index-2.html">Dashboard 1</a></li>
                    <li><a href="dashboard-two.html">Dashboard 2</a></li>
                </ul>
            </li>
            <li>
                <a href="chat.html">
                    <i class="nav-link-icon" data-feather="message-circle"></i>
                    <span>Chat</span>
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
            <li>
                <a href="inbox.html">
                    <i class="nav-link-icon" data-feather="mail"></i>
                    <span>Mail</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
            <li>
                <a href="app-todo.html">
                    <i class="nav-link-icon" data-feather="check-circle"></i>
                    <span>Todo</span>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
            <li>
                <a href="file-manager.html">
                    <i class="nav-link-icon" data-feather="file"></i>
                    <span>File Manager</span>
                </a>
            </li>
            <li>
                <a href="calendar.html">
                    <i class="nav-link-icon" data-feather="calendar"></i>
                    <span>Calendar</span>
                </a>
            </li>
            <li class="navigation-divider">UI Elements</li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="monitor"></i>
                    <span>Components</span>
                </a>
                <ul>
                    <li>
                        <a href="#">Basic</a>
                        <ul>
                            <li><a href="alerts.html">Alert</a></li>
                            <li><a href="accordion.html">Accordion</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="dropdown.html">Dropdown</a></li>
                            <li><a href="list-group.html">List Group</a></li>
                            <li><a href="pagination.html">Pagination</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="media-object.html">Media Object</a></li>
                            <li><a href="progress.html">Progress</a></li>
                            <li><a href="modal.html">Modal</a></li>
                            <li><a href="spinners.html">Spinners</a></li>
                            <li><a href="navs.html">Navs</a></li>
                            <li><a href="tab.html">Tab</a></li>
                            <li><a href="tooltip.html">Tooltip</a></li>
                            <li><a href="popovers.html">Popovers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Cards</a>
                        <ul>
                            <li><a href="basic-cards.html">Basic Cards </a></li>
                            <li><a href="image-cards.html">Image Cards </a></li>
                            <li><a href="card-scroll.html">Card Scroll </a></li>
                            <li><a href="other-cards.html">Others </a></li>
                        </ul>
                    </li>
                    <li><a href="avatar.html">Avatar</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="colors.html">Colors</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="globe"></i>
                    <span>Plugins</span>
                </a>
                <ul>
                    <li><a href="sweet-alert.html">Sweet Alert</a></li>
                    <li><a href="lightbox.html">Lightbox</a></li>
                    <li><a href="toast.html">Toast</a></li>
                    <li><a href="tour.html">Tour</a></li>
                    <li><a href="slick-slide.html">Slick Slide</a></li>
                    <li><a href="nestable.html">Nestable</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="mouse-pointer"></i>
                    <span>Forms</span>
                </a>
                <ul>
                    <li><a href="basic-form.html">Form Layouts</a></li>
                    <li><a href="custom-form.html">Custom Forms</a></li>
                    <li><a href="advanced-form.html">Advanced Form</a></li>
                    <li><a href="form-validation.html">Validation</a></li>
                    <li><a href="form-wizard.html">Wizard</a></li>
                    <li><a href="file-upload.html">File Upload</a></li>
                    <li><a href="datepicker.html">Datepicker</a></li>
                    <li><a href="timepicker.html">Timepicker</a></li>
                    <li><a href="colorpicker.html">Colorpicker</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="grid"></i>
                    <span>Tables</span>
                </a>
                <ul>
                    <li><a href="tables.html">Basic Tables</a></li>
                    <li><a href="data-table.html">Datatable</a></li>
                    <li><a href="responsive-table.html">Responsive Tables</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="pie-chart"></i>
                    <span>Charts</span>
                </a>
                <ul>
                    <li><a href="apexchart.html">Apex</a></li>
                    <li><a href="chartjs.html">Chartjs</a></li>
                    <li><a href="justgage.html">Justgage</a></li>
                    <li><a href="morsis.html">Morsis</a></li>
                    <li><a href="peity.html">Peity</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="map-pin"></i>
                    <span>Maps</span>
                </a>
                <ul>
                    <li><a href="google-map.html">Google</a></li>
                    <li><a href="vector-map.html">Vector</a></li>
                </ul>
            </li>
            <li class="navigation-divider">Extras</li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="user"></i>
                    <span>Authentication</span>
                </a>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="recover-password.html">Recovery Password</a></li>
                    <li><a href="lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="copy"></i>
                    <span>Pages</span>
                </a>
                <ul>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="invoice.html">Invoice</a></li>

                    <li><a href="pricing-table.html">Pricing Table</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li>
                        <a href="#">Error Pages</a>
                        <ul>
                            <li><a href="404.html">404</a></li>
                            <li><a href="404-2.html">404 V2</a></li>
                            <li><a href="503.html">503</a></li>
                            <li><a href="mean-at-work.html">Mean at Work</a></li>
                        </ul>
                    </li>
                    <li><a href="blank-page.html">Starter Page</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="send"></i>
                    <span>Email Templates</span>
                </a>
                <ul>
                    <li><a href="email-template-basic.html">Basic</a></li>
                    <li><a href="email-template-alert.html">Alert</a></li>
                    <li><a href="email-template-billing.html">Billing</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="menu"></i>
                    <span>Menu Level</span>
                </a>
                <ul>
                    <li>
                        <a href="#">Menu Level</a>
                        <ul>
                            <li>
                                <a href="#">Menu Level </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->

<!-- begin::main -->
<div id="main">

    <!-- begin::header -->
    <div class="header">

        <!-- begin::header left -->
        <ul class="navbar-nav">

            <!-- begin::navigation-toggler -->
            <li class="nav-item navigation-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="menu"></i>
                </a>
            </li>
            <!-- end::navigation-toggler -->

            <!-- begin::header-logo -->
            <li class="nav-item" id="header-logo">
                <a href="index-2.html">
                    <img class="logo" src="<?= base_url('public/asset/assets/media/image/logo.png')?>" alt="logo">
                    <img class="logo-sm" src="<?= base_url('public/asset/assets/media/image/logo-sm.png') ?>" alt="small logo">
                    <img class="logo-dark" src="<?= base_url('public/asset/assets/media/image/logo-dark.png') ?>" alt="dark logo">
                </a>
            </li>
            <!-- end::header-logo -->
        </ul>
        <!-- end::header left -->

        <!-- begin::header-right -->
        <div class="header-right">
            <ul class="navbar-nav">

                <!-- begin::search-form -->
                <li class="nav-item search-form">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-default" type="button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <!-- end::search-form -->

                <!-- begin::header minimize/maximize -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                        <i class="maximize" data-feather="maximize"></i>
                        <i class="minimize" data-feather="minimize"></i>
                    </a>
                </li>
                <!-- end::header minimize/maximize -->

                <!-- begin::header app list -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">
                        <i data-feather="grid"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-3">
                            <h6 class="text-uppercase font-size-11 mb-3">Web Apps</h6>
                            <div class="row row-xs">
                                <div class="col-6">
                                    <a href="chat.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center mb-3">
                                            <i class="text-success width-23 height-23"
                                               data-feather="message-circle"></i>
                                            <div class="mt-2">Chat</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="inbox.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center mb-3">
                                            <i class="text-info width-23 height-23" data-feather="mail"></i>
                                            <div class="mt-2">Mail</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="calendar.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center">
                                            <i class="text-warning width-23 height-23" data-feather="calendar"></i>
                                            <div class="mt-2">Calendar</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="file-manager.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center">
                                            <i class="text-danger width-23 height-23" data-feather="file"></i>
                                            <div class="mt-2">File Manager</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- end::header app list -->

                <!-- begin::header messages dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link nav-link-notify" title="Messages" data-toggle="dropdown">
                        <i data-feather="message-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-4 text-center" data-backround-image="<?= base_url('public/asset/assets/media/image/image1.png') ?>">
                            <h6 class="mb-1">Messages</h6>
                            <small class="font-size-11 opacity-7">2 unread messages</small>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <img src="<?= base_url('public/asset/assets/media/image/user/man_avatar1.jpg') ?>"
                                                     class="rounded-circle" alt="user">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Herbie Pallatina
                                                <i title="Make unread" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                            </p>
                                            <div class="small text-muted">
                                                <span class="mr-2">02:30 PM</span>
                                                <span>Have you madimage</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <img src="<?= base_url('public/asset/assets/media/image/user/women_avatar5.jpg') ?>"
                                                     class="rounded-circle" alt="user">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Andrei Miners
                                                <i title="Make unread" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                            </p>
                                            <div class="small text-muted">
                                                <span class="mr-2">08:36 PM</span>
                                                <span>I have a meetinimage</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-divider small pb-2 pl-3 pt-3">
                                    <span>Old chats</span>
                                </li>
                                <li>
                                    <a href="#"
                                       class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <img src="<?= base_url('public/asset/assets/media/image/user/man_avatar3.jpg') ?>"
                                                     class="rounded-circle" alt="user">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Kevin added
                                                <i title="Make unread" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <div class="small text-muted">
                                                <span class="mr-2">11:09 PM</span>
                                                <span>Have you madimage</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-2 text-right">
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">Mark All Read</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- end::header messages dropdown -->

                <!-- begin::header notification dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                        <i data-feather="bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-4 text-center" data-backround-image="<?= base_url('public/asset/assets/media/image/image1.png') ?>">
                            <h6 class="mb-1">Notifications</h6>
                            <small class="font-size-11 opacity-7">1 unread notifications</small>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                New customer registered
                                                <i title="Make unread" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">20 min ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-divider small pb-2 pl-3 pt-3">
                                    <span>Old notifications</span>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                New Order Recieved
                                                <i title="Mark as read" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">45 sec ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Server Limit Reached!
                                                <i title="Make unread" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">55 sec ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Apps are ready for update
                                                <i title="Make unread" data-toggle="tooltip"
                                                   class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small">Yesterday</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-2 text-right">
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">Mark All Read</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- end::header notification dropdown -->
            </ul>

            <!-- begin::mobile header toggler -->
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
            <!-- end::mobile header toggler -->
        </div>
        <!-- end::header-right -->
    </div>
    <!-- end::header -->

    <!-- begin::main-content -->
    <div class="main-content">

        <!-- begin::container -->
        <div class="container">

            <div class="page-header">
                <h4>Sales Dashboard</h4>
                <small class="">Welcome, <span class="text-primary">Nikos Pedlow</span></small>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Conversion Rate</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-success text-white rounded-circle">
                                                <i class="fa fa-percent"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">0.19%</h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">+ 1.2%</span> than last week
                                        </p>
                                    </div>
                                    <canvas id="widget-chart1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Unique Purchases</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-warning text-white rounded-circle">
                                                <i class="fa fa-dollar"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">3,137</h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-danger">-1.2%</span> than last week
                                        </p>
                                    </div>
                                    <canvas id="widget-chart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Order Quantity</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-danger text-white rounded-circle">
                                                <i class="fa fa-cube"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">1,650</h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">+ 2.1%</span> than last week
                                        </p>
                                    </div>
                                    <canvas id="widget-chart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex justify-content-between">
                                        <span>Sales this month</span>
                                        <span class="dropdown">
                                            <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <span class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Action</a>
                                                <a href="#" class="dropdown-item">Another action</a>
                                                <a href="#" class="dropdown-item">Something else here</a>
                                            </span>
                                        </span>
                                    </h6>
                                    <div id="chart1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Total Customers</h6>
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <span class="bar-1">2,5,9,6,5,2,4,3,7,5</span>
                                        </div>
                                        <div class="font-size-30 mb-1 font-weight-bold text-primary">1.241</div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-up text-primary m-r-5"></i> 23% increase in Last week
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Average Order Value</h6>
                                    <div class="text-center">
                                        <div class="mb-2">
                                            <span class="bar-3">2,5,9,6,5,2,4,3,7,5</span>
                                        </div>
                                        <div class="font-size-30 mb-1 font-weight-bold text-success">$732.52</div>
                                        <p class="mb-0 text-muted">
                                            <i class="fa fa-caret-down text-danger m-r-5"></i> 4 lead less than last
                                            week
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-md-flex justify-content-between">
                                        Your Most Recent Earnings
                                        <span class="reportrange btn btn-outline-light btn-sm mt-3 mt-md-0">
                                            <i class="ti-calendar mr-2"></i>
                                            <span class="text"></span>
                                            <i class="ti-angle-down ml-2"></i>
                                        </span>
                                    </h6>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="card border mb-3">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-block mr-3 icon-block-lg icon-block-outline-success text-success">
                                                            <i class="fa fa-bar-chart"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="text-uppercase font-size-11">Gross Earnings</h6>
                                                            <h4 class="mb-0">$1,958,104</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border mb-3">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-block mr-3 icon-block-lg icon-block-outline-danger  text-danger">
                                                            <i class="fa fa-hand-lizard-o"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="text-uppercase font-size-11">Tax Withheld</h6>
                                                            <h4 class="mb-0">$234,769</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border mb-3">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-block mr-3 icon-block-lg icon-block-outline-warning text-warning">
                                                            <i class="fa fa-dollar"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="text-uppercase font-size-11">Net Earnings</h6>
                                                            <h4 class="mb-0">$1,608,469</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Sales Count</th>
                                                        <th>Gross Earnings</th>
                                                        <th>Tax Withheld</th>
                                                        <th class="text-right">Net Earnings</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>03/15/2018</td>
                                                        <td>1,050</td>
                                                        <td class="text-success">+ $32,580.00</td>
                                                        <td class="text-danger">- $3,023.10</td>
                                                        <td class="text-right">$28,670.90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03/14/2018</td>
                                                        <td>780</td>
                                                        <td class="text-success">+ $30,065.10</td>
                                                        <td class="text-danger">- $2,780.00</td>
                                                        <td class="text-right">$26,930.40</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03/13/2018</td>
                                                        <td>1.980</td>
                                                        <td class="text-success">+ $30,065.10</td>
                                                        <td class="text-danger">- $2,780.00</td>
                                                        <td class="text-right">$26,930.40</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03/12/2018</td>
                                                        <td>300</td>
                                                        <td class="text-success">+ $30,065.10</td>
                                                        <td class="text-danger">- $2,780.00</td>
                                                        <td class="text-right">$26,930.40</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03/11/2018</td>
                                                        <td>940</td>
                                                        <td class="text-success">+ $30,065.10</td>
                                                        <td class="text-danger">- $2,780.00</td>
                                                        <td class="text-right">$26,930.40</td>
                                                    </tr>
                                                    <tr>
                                                        <td>03/10/2018</td>
                                                        <td>1.280</td>
                                                        <td class="text-success">+ $30,065.10</td>
                                                        <td class="text-danger">-$2,780.00</td>
                                                        <td class="text-right">$26,930.40</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex justify-content-between">
                                        <span>Income Distribution</span>
                                        <span class="dropdown">
                                            <a class="btn btn-outline-light btn-sm dropdown-toggle" href="#"
                                               data-toggle="dropdown">USA</a>
                                            <span class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">USA</a>
                                                <a href="#" class="dropdown-item">Germany</a>
                                                <a href="#" class="dropdown-item">France</a>
                                                <a href="#" class="dropdown-item">Italy</a>
                                            </span>
                                        </span>
                                    </h6>
                                    <div id="vmap_usa_en" style="height: 300px"></div>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-borderless mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th class="wd-40">States</th>
                                                <th class="wd-25 text-right">Orders</th>
                                                <th class="wd-35 text-right">Earnings</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="tx-medium">California</td>
                                                <td class="text-right">12,201</td>
                                                <td class="text-right text-success">$150,200.80</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-medium">Texas</td>
                                                <td class="text-right">11,950</td>
                                                <td class="text-right text-success">$138,910.20</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-medium">Wyoming</td>
                                                <td class="text-right">11,198</td>
                                                <td class="text-right text-success">$132,050.00</td>
                                            </tr>
                                            <tr>
                                                <td class="tx-medium">Florida</td>
                                                <td class="text-right">9,885</td>
                                                <td class="text-right text-success">$127,762.10</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Users Assigned to Me</h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                                            <div>
                                                <figure class="avatar avatar-state-success m-r-15">
                                                    <img src="<?= base_url('public/asset/assets/media/image/user/man_avatar5.jpg') ?>"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="m-b-0">Valentine Maton</h6>
                                                <small class="text-muted">Engineer</small>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="badge badge-danger mr-2 d-sm-inline d-none">Denied</span>
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-outline-light btn-sm"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View</a>
                                                        <a href="#" class="dropdown-item">Send Message</a>
                                                        <a href="#" class="dropdown-item">Assign</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center p-l-r-0">
                                            <div>
                                                <figure class="avatar avatar-state-success m-r-15">
                                                    <img src="<?= base_url('public/asset/assets/media/image/user/women_avatar3.jpg') ?>"
                                                         class="rounded-circle" alt="image">
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="m-b-0">Holmes Cherryman</h6>
                                                <small class="text-muted">Human resources</small>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="badge badge-success mr-2 d-sm-inline d-none">Completed</span>
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                       class="btn btn-outline-light btn-sm"
                                                       aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">View</a>
                                                        <a href="#" class="dropdown-item">Send Message</a>
                                                        <a href="#" class="dropdown-item">Assign</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-3 text-center">
                                        <a href="#">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Total Sales By Org Unit</h6>
                                    <p class="text-muted">Total Sales</p>
                                    <h2 class="number-font">69,453</h2>
                                    <div class="progress" style="height: 10px">
                                        <div class="progress-bar w-25 bg-primary" role="progressbar"></div>
                                        <div class="progress-bar w-50 bg-info" role="progressbar"></div>
                                        <div class="progress-bar w-25 bg-warning" role="progressbar"></div>
                                    </div>
                                    <div class="row mt-3 pt-3">
                                        <div class="col border-right">
                                            <p class="mb-0">
                                                <span class="fa fa-circle text-primary mr-1"></span>
                                                Sales
                                            </p>
                                            <h5 class="mt-2 mb-0">25%</h5>
                                        </div>
                                        <div class="col border-right">
                                            <p class="mb-0">
                                                <span class="fa fa-circle text-info mr-1"></span>
                                                Marketing
                                            </p>
                                            <h5 class="mt-2 mb-0">50%</h5>
                                        </div>
                                        <div class="col">
                                            <p class="mb-0">
                                                <span class="fa fa-circle text-warning mr-1"></span>
                                                Finance
                                            </p>
                                            <h5 class="mt-2 mb-0">25%</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Daily Task List</h6>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck1">Talk
                                            to new customers
                                            <small class="text-muted font-size-11">13 May 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck2">Older
                                            users will be deleted from
                                            the system
                                            <small class="text-muted font-size-11">20 Apr 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck3">Assignment
                                            will be
                                            completed
                                            <small class="text-muted font-size-11">13 May 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4" checked>
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck4">Customer
                                            notes
                                            <small class="text-muted font-size-11">10 Jan 2018</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck5">Clear
                                            old log records and backup
                                            will be taken
                                            <small class="text-muted font-size-11">13 May 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-checkbox-success todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck6">Talk
                                            to new customers
                                            <small class="text-muted font-size-11">27 Feb 2019</small>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox-success custom-checkbox todo-item">
                                        <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                        <label class="custom-control-label d-flex justify-content-between"
                                               for="customCheck7">Older
                                            users will be deleted from
                                            the system
                                            <small class="text-muted font-size-11">13 May 2019</small>
                                        </label>
                                    </div>
                                    <form class="mt-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                   aria-label="Example text with button addon"
                                                   placeholder="New task" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="button-addon1">Add
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- end::container -->

    </div>
    <!-- end::main-content -->

    <!-- begin::footer -->
    <footer>
        <div class="container">
            <div>© <script> document.write(new Date().getFullYear()) </script> v1.1 Powered by <a href="http://laborasyon.com/">Smart Campus</a></div>
            <div>
                <nav class="nav">
                    <!-- <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a> -->
                    <a href="#" class="nav-link">Change Log</a>
                    <a href="#" class="nav-link">Get Help</a>
                </nav>
            </div>
        </div>
    </footer>
    <!-- end::footer -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="<?= base_url('public/asset/vendors/bundle.js') ?>"></script>

<!-- Chartjs -->
<script src="<?= base_url('public/asset/vendors/charts/chartjs/chart.min.js') ?>"></script>

<!-- Apex chart -->
<script src="<?= base_url('public/asset/vendors/charts/apex/apexcharts.min.js') ?>"></script>

<!-- Circle progress -->
<script src="<?= base_url('public/asset/vendors/circle-progress/circle-progress.min.js') ?>"></script>

<!-- Peity -->
<script src="<?= base_url('public/asset/vendors/charts/peity/jquery.peity.min.js') ?>"></script>
<script src="<?= base_url('public/asset/assets/js/examples/charts/peity.js') ?>"></script>

<!-- Datepicker -->
<script src="<?= base_url('public/asset/vendors/datepicker/daterangepicker.js') ?>"></script>

<!-- Slick -->
<script src="<?= base_url('public/asset/vendors/slick/slick.min.js') ?>"></script>

<!-- Vamp -->
<script src="<?= base_url('public/asset/vendors/vmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('public/asset/vendors/vmap/maps/jquery.vmap.usa.js') ?>"></script>
<script src="<?= base_url('public/asset/assets/js/examples/vmap.js') ?>"></script>

<!-- Dashboard scripts -->
<script src="<?= base_url('public/asset/assets/js/examples/dashboard.js') ?>"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>

<!-- App scripts -->
<script src="<?= base_url('public/asset/assets/js/app.min.js') ?>"></script>
</body>

<!-- Mirrored from protable.laborasyon.com/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2019 16:47:07 GMT -->
</html>