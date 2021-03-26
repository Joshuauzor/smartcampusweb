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
                                <div class="col-12">
                                    <a href="<?= base_url('campus') ?>">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center mb-3">
                                            <i class="text-success width-23 height-23"
                                               data-feather="book-open"></i>
                                            <div class="mt-2">Smart Campus</div>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="col-6">
                                    <a href="inbox.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center mb-3">
                                            <i class="text-info width-23 height-23" data-feather="mail"></i>
                                            <div class="mt-2">Mail</div>
                                        </div>
                                    </a>
                                </div> -->
                                <div class="col-6">
                                    <a href="<?= base_url('commerce') ?>">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center">
                                            <i class="text-warning width-23 height-23" data-feather="shopping-bag"></i>
                                            <div class="mt-2" style="font-size: 8.7px!important">Smart Commerce</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="file-manager.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center">
                                            <i class="text-danger width-23 height-23" data-feather="package"></i>
                                            <div class="mt-2">Smart Food</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- end::header app list -->

                <!-- begin::header messages dropdown -->
                <!-- <li class="nav-item dropdown">
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
                </li> -->
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