    <!-- SideBar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- SideBar Logo -->
      <a href="<?php echo base_url('dashboard'); ?>" class="brand-link">
        <img src="assets/img/flou-logo.svg" alt="FlouCloud Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">FlouCloud</span>
      </a>

      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Sub Menu Dashboard -->
            <li class="nav-item">
              <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <!-- Sub Menu User -->
            <li class="nav-item">

              <a class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>User<i class="fas fa-angle-left right"></i></p>
              </a>

              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url('user'); ?>"" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo base_url('admin'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Admin</p>
                  </a>
                </li>
              </ul>

            </li>

            <!-- Sub Menu Content -->
            <li class="nav-item">
              <a href="<?php echo base_url('content'); ?>" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Content</p>
              </a>
            </li>

            <!-- Sub Menu Notification -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-bell"></i>
                <p>Notification</p>
              </a>
            </li>
          </ul>

        </nav>
      </div>
    </aside>

