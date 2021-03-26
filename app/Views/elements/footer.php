    <!-- modal -->
        <div class="modal" tabindex="-1" role="dialog" id="add">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add School</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <!-- begin -->
                <form method="post" action="<?= base_url('smartcampus/school/addschool') ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">School Name</label>
                        <input type="text" name="school" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter School Name" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Short Name</label>
                        <input type="text" class="form-control" id="text" name="aka" aria-describedby="emailHelp" placeholder="Enter Short Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select City</label>
                        <select class="form-control" name="city" required>
                            <option selected disabled>--City--</option>
                            <option>Lagos</option>
                            <option>Calabar</option>
                        </select>
                    </div>
                    <!-- <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Create</button>
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
 <!-- begin::footer -->
 <footer>
        <div class="container">
            <div>© <script> document.write(new Date().getFullYear()) </script> v1.1 Powered by <a href="<?= base_url() ?>">Smart Campus</a></div>
            <!-- <div>
                <nav class="nav">
                    <a href="#" class="nav-link">Change Log</a>
                    <a href="#" class="nav-link">Get Help</a>
                </nav>
            </div> -->
        </div>
    </footer>
    <!-- end::footer -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="<?= base_url('public/asset/vendors/bundle.js') ?>"></script>

<!-- datatable -->
<script src="<?= base_url('public/asset/vendors/dataTable/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('public/asset/vendors/dataTable/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('public/asset/vendors/dataTable/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('public/asset/assets/js/examples/datatable.js')?>"></script>

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

<script>
$(document).ready(function(){
    setTimeout(function(){
        $('.hide-message').hide()
    }, 7000);
})
</script>
</body>

</html>