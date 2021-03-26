 <!-- begin::main-content -->
 <div class="main-content">

    <!-- begin::container -->
    <div class="container">

        <div class="page-header">
            <?php if($user->role == 'super_admin' || $user->role == 'admin'): ?>
                <h4>Administrator Dashboard</h4>
            <?php else: ?>
                <h4>User Dashboard</h4>
            <?php endif ?>
            <small class="">Welcome, <span class="text-primary"><?= $user->name ?></span></small>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- first row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span>Users</span>
                                    <span class="avatar">
                                        <span class="avatar-title bg-success text-white rounded-circle">
                                            <i class="fa fa-users"></i>
                                        </span>
                                    </span>
                                </h6>
                                <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                    <h3 class="mb-0 mr-2">0.19%</h3>
                                    <p class="small text-muted mb-0 line-height-20">
                                        <span class="text-success">+ 1.2%</span> than last week
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span>Admin</span>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span>School(s)</span>
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
                            </div>
                        </div>
                    </div>
                </div>

                <!-- second row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span>Food Vendors</span>
                                    <span class="avatar">
                                        <span class="avatar-title bg-success text-white rounded-circle">
                                            <i class="fa fa-users"></i>
                                        </span>
                                    </span>
                                </h6>
                                <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                    <h3 class="mb-0 mr-2">10</h3>
                                    <p class="small text-muted mb-0 line-height-20">
                                        <span class="text-success">+ 1.2%</span> than last week
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span>Goods</span>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                    <span>School(s)</span>
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- third row -->

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