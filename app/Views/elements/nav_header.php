    <!-- begin::navigation header -->
    <header class="navigation-header">
        <figure class="avatar avatar-state-success">
            <img src="<?= base_url('public/asset/assets/media/image/avatar.png') ?>" class="rounded-circle" alt="image">
        </figure>
        <div>
            <h5><?= $user->name ?></h5>
            <?php if($user->role == 'super_admin' || $user->role == 'admin'): ?>
            <p class="text-muted">Administrator</p>
            <?php else: ?>
                <p class="text-muted">User</p>
            <?php endif ?>
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
                    <a href="<?= base_url('logout') ?>" class="btn nav-link bg-danger-bright" title="Logout" data-toggle="tooltip">
                        <i data-feather="log-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- end::navigation header -->