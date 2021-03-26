 <!-- error -->
 <div class="row mb-3 hide-message">
    <?php if(session()->get('error')): ?>
        <div class="col-md-12">
            <div class="alert alert-danger"><?= session()->get('error') ?></div>
        </div>
    <?php endif ?>
</div>
<!-- success -->
<div class="row mb-3 hide-message">
    <?php if(session()->get('success')): ?>
        <div class="col-md-12">
            <div class="alert alert-success"><?= session()->get('success') ?></div>
        </div>
    <?php endif ?>
</div>
    <!-- validation message -->
<?php if (isset($validation)) : ?>
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert"><?= $validation->listErrors() ?></div>
    </div>
<?php endif ?>
<!-- ends here -->
<!-- error -->