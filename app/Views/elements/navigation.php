    <!-- begin::navigation menu -->
    <div class="navigation-menu-body">
        <ul>
            <li class="navigation-divider">Main</li>
            <li class="<?php echo $uri == 'dashboard' ? 'open' : ''?>">
                <a href="<?= base_url('dashboard') ?>" class="<?php echo $uri == 'dashboard' ? 'active' : ''?>">
                    <i class="nav-link-icon" data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?php echo $uri == 'campus' || $uri == 'school' ? 'open' : ''?>">
                <a href="#">
                    <i class="nav-link-icon" data-feather="book-open"></i>
                    <span>Smart Campus</span>
                </a>
                <ul>
                    <li><a href="<?= base_url('campus') ?>" class="<?php echo $uri == 'campus' ? 'active' : ''?>">Dashboard</a></li>
                    <li><a href="<?= base_url('school') ?>" class="<?php echo $uri == 'school' ? 'active' : ''?>">School</a></li>
                    <li><a href="dashboard-two.html">Courses</a></li>
                    <li><a href="dashboard-two.html">Past Question</a></li>
                    <li><a href="dashboard-two.html">Tutorials</a></li>
                    <li><a href="#">Quiz</a></li>
                </ul>
            </li>
            <!-- smart commerce -->
            <li>
                <a href="#" class="<?php echo $uri == 'commerce' ? 'active' : ''?>">
                    <i class="nav-link-icon" data-feather="shopping-bag"></i> 
                    <span>Smart Commerce</span>
                </a>
                <ul>
                    <li><a href="<?= base_url('commerce') ?>">Dashboard</a></li>
                    <li><a href="dashboard-two.html">Products</a></li>
                    <li><a href="dashboard-two.html">Sold</a></li>
                </ul>
            </li>
            <!-- smart food -->
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="package"></i>
                    <span>Smart Food</span>
                </a>
                <ul>
                    <li><a href="#">Dashboard </a></li>
                    <li><a href="#">Vendors</a></li>
                </ul>
            </li>
            <!-- ends -->
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="users"></i>
                    <span>User Management</span>
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="settings"></i>
                    <span>Global Settings</span>
                    <span class="badge badge-success">2</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('logout') ?>">
                    <i class="nav-link-icon" data-feather="log-out"></i>
                    <span>Logout</span>
                    <span class="badge badge-warning">2</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->