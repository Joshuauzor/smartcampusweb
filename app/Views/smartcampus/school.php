<?= view('elements/head') ?>
<?= view('elements/preloader') ?>
<?= view('elements/nav_header') ?>
<?= view('elements/navigation') ?>
<?= view('elements/main_header') ?>
<!-- start -->
<main class="main-content">

        <div class="container">

             <!-- begin::page-header -->
             <div class="page-header">
                <h4 class="text-uppercase"><?= $uri ?></h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('campus') ?>">Smartcampus</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('school') ?>"><?= $uri ?></a>
                        </li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Datatable</li> -->
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

            <?= view('elements/status_log') ?>

            
            <!-- btn -->
            <div class="row mb-3">
                <div class="col-md-12">
                <button type="button" class="btn btn-outline-secondary btn-uppercase" data-toggle="modal" data-target="#add">
                    <i class="ti-plus mr-2"></i> Create School
                </button>
                </div>
            </div>
            <!-- btn end -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="col-sm-12 col-md-6">
                                    <div id="example1_filter" class="dataTables_filter"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example1_info" style="width: 1061px;">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">S/N</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 287px;" aria-label="Position: activate to sort column ascending">School</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 148px;" aria-label="Office: activate to sort column ascending">Nick Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 51px;" aria-label="Age: activate to sort column ascending">City</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 51px;" aria-label="Age: activate to sort column ascending">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>     
                                            <?php $i=0; foreach($allSchools as $row): $i++?>                                  
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1"><?= $i ?></td>
                                                <td><?= $row->school_name ?></td>
                                                <td><?= $row->aka ?></td>
                                                <td><?= $row->city  ?></td>  
                                                <td> j </td>                                                                      
                                            </tr>
                                            <?php endforeach ?>
                                            <!-- <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                            </tr> -->
                                    </tbody>
                                        <tfoot>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 194px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">S/N</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 287px;" aria-label="Position: activate to sort column ascending">School</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 148px;" aria-label="Office: activate to sort column ascending">Nick Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 51px;" aria-label="Age: activate to sort column ascending">City</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 51px;" aria-label="Age: activate to sort column ascending">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="font-weight-bold">Total: <?= $countSchools ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<!-- end -->
<?= view('elements/footer') ?>

   