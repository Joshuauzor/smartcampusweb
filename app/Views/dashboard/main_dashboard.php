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

            </div>
        </div>

    </div>
    <!-- end::container -->

</div>
<!-- end::main-content -->