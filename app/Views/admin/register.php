<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('public/asset/assets/media/image/favicon.png')?>"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?= base_url('public/asset/vendors/bundle.css')?>" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url('public/asset/assets/css/app.min.css')?>" type="text/css">
</head>
<body class="form-membership">

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

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="<?= base_url('public/asset/assets/media/image/logo.png')?>" alt="image">
        <img class="logo-dark" src="<?= base_url('public/asset/assets/media/image/logo-dark.png')?>" alt="image">
    </div>
    <!-- ./ logo -->

    <!-- error message -->
    <?php echo view('errors/errorMessage')?>
    <!-- ends -->
    <h5>Create account</h5>

    <!-- form -->
    <form action="<?= base_url('admin/auth/register')?>" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" value="<?= set_value("name")?>" name="name" placeholder="Full Name" required autofocus>
            <?php if(isset($validation)): ?>
                <?php if($validation->hasError('name')): ?>
                    <span class="text-danger error-Msg"><?= $validation->getError('name') ?></span>
                <?php endif ?>
            <?php endif ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" value="<?= set_value("email")?>" name="email" placeholder="Email" required>
            <?php if(isset($validation)): ?>
                <?php if($validation->hasError('email')): ?>
                    <span class="text-danger error-Msg"><?= $validation->getError('email') ?></span>
                <?php endif ?>
            <?php endif ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" value="<?= set_value("password")?>" name="password" placeholder="Password" required>
            <?php if(isset($validation)): ?>
                <?php if($validation->hasError('password')): ?>
                    <span class="text-danger error-Msg"><?= $validation->getError('password') ?></span>
                <?php endif ?>
            <?php endif ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="<?= set_value("regToken")?>"  name="regToken" placeholder="Registration Token" >
            <?php if(isset($validation)): ?>
                <?php if($validation->hasError('regToken')): ?>
                    <span class="text-danger error-Msg"><?= $validation->getError('regToken') ?></span>
                <?php endif ?>
            <?php endif ?>
        </div>
        <button class="btn btn-primary btn-block">Register</button>
        <hr>
        <p class="text-muted">Already have an account?</p>
        <a href="<?= base_url('admin/login')?>" class="btn btn-outline-light btn-sm">Sign in!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="<?= base_url('public/asset/vendors/bundle.js')?>"></script>

<!-- App scripts -->
<script src="<?= base_url('public/asset/assets/js/app.min.js')?>"></script>
</body>

</html>