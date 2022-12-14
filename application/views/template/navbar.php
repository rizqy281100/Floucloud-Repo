    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" role="button">
            <i class="fas fa-bars"></i>
          </a>
        </li>
      </ul>

      <!-- Right NavBar Links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">

          <a class="nav-link" data-widget="navbar-search" role="button">
            <i class="fas fa-search"></i>
          </a>
            
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                          
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>

                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>

              </div>
            </form>
          </div>

        </li>

        <!-- Admin Profile Dropdown -->
        <li class="nav-item dropdown">

          <a class="nav-link" data-toggle="dropdown">
            <span class="mr-4"><?= $this->session->userdata('username') ?></span>
            <i class="far fa-user"></i>
          </a>

          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url('profileAdmin'); ?>" class="dropdown-item">View Profile</a>

            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Reset Password</a>

            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item">Sign Out</a>
          </div>

        </li>

      </ul>

    </nav>

