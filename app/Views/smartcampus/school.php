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
                                                <!-- <a href="#" title="" data-toggle="tooltip" data-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 width-15 height-15"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                    </a> -->
                                                <td class="d-flex"> 
                                                    <form action="<?= base_url('smartcampus/school/deleteSchool') ?>" method="post" id="deleteSchForm<?= $row->school_id ?>">
                                                        <input type="hidden" name="school_id" value="<?= $row->school_id ?>">
                                                        <button type="button" name="your_name" id="deleteSch<?= $row->school_id ?>" value="your_value" data-toggle="tooltip" data-original-title="Delete" style="border: none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 width-15 height-15"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                        </button>
                                                    </form>
                                                    <a href="#" title=""  data-original-title="Edit"  data-toggle="modal" data-target="#editschool<?= $row->school_id ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                    </a>                                                
                                                </td> 
                                                <!-- modal edit school-->
                                                <div class="modal" tabindex="-1" role="dialog" id="editschool<?= $row->school_id ?>">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit School</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <!-- begin -->
                                                        <form method="post" action="<?= base_url('smartcampus/school/editSchool') ?>">
                                                            <input type="hidden" name="school_id" value="<?= $row->school_id ?>" class="form-control" required>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">School Name</label>
                                                                <input type="text" name="school" value="<?= $row->school_name ?>" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter School Name" required>
                                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with</small> -->
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Short Name</label>
                                                                <input type="text" class="form-control" id="text" value="<?= $row->aka ?>" name="aka" aria-describedby="emailHelp" placeholder="Enter Short Name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Select City</label>
                                                                <select class="form-control" name="city" required>
                                                                    <option><?= $row->city  ?></option>
                                                                    <option>Lagos</option>
                                                                    <option>Calabar</option>
                                                                </select>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                                        </form>
                                                        <!-- end -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- <button type="button" class="btn btn-primary">Create</button> -->
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                
                                                <!-- script  -->
                                                <!-- begin my script to delete sch -->
                                                <script>
                                                    $(document).ready(function(){
                                                        $('#deleteSch<?= $row->school_id ?>').on('click', function(){
                                                            const swalWithBootstrapButtons = Swal.mixin({
                                                        customClass: {
                                                            confirmButton: 'btn btn-success',
                                                            cancelButton: 'btn btn-danger'
                                                        },
                                                        buttonsStyling: true
                                                        })

                                                        swalWithBootstrapButtons.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonText: 'Yes, delete it!',
                                                        cancelButtonText: 'No, cancel it!',
                                                        reverseButtons: true
                                                        }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            $('#deleteSchForm<?= $row->school_id ?>').submit();
                                                            swalWithBootstrapButtons.fire(
                                                            'Deleted!',
                                                            'School has been deleted.',
                                                            'success'
                                                            )
                                                        } else {
                                                            result.dismiss === Swal.DismissReason.cancel
                                                        }
                                                        })
                                                        })
                                                    })
                                                </script>
                                                <!-- end -->
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

   