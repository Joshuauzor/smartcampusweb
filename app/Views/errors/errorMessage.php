            <!-- validation message -->
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif ?>
            <!-- ends here -->

            <!-- success message -->
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success text-center" role="alert">
                    <?= session()->get('success') ?>
                </div>
            <?php endif ?>
            <!-- success message ends -->

            <!-- error message -->
            <?php if (session()->get('error')) : ?>
                <div class="alert alert-danger text-center" role="alert">
                    <?= session()->get('error') ?>
                </div>
            <?php endif ?>
            <!-- error message ends -->
            <style>
                .error-Msg{
                    margin-top: -6%;
                }
            </style>