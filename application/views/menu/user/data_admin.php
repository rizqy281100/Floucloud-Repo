<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right NavBar Links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">

          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
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

          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>

          <div class="dropdown-menu dropdown-menu-right">

            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">View Profile</a>

            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Reset Password</a>

            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Sign Out</a>

          </div>

        </li>

      </ul>
    </nav>

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

            <li class="nav-item">
              <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">

              <a class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>User<i class="fas fa-angle-left right"></i></p>
              </a>

              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="<?php echo base_url('user'); ?>" class="nav-link">
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

            <li class="nav-item">

              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Content<i class="fas fa-angle-left right"></i></p>
              </a>

              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>IaaS</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SaaS</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>PaaS</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cloud Partnership</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cloud Services</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Private Cloud</p>
                  </a>
                </li>

              </ul>

            </li>

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

    <!-- Data Admin Table -->
    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row">

            <!-- Add New Admin Button -->
            <div class="col-4">
              <button type="submit" class="btn text-white btn_add_admin">Add Admin
                <i class="fa fa-plus" style="padding-left: 5px;"></i>
              </button>
            </div>

            <div class="dropdown col-8 text-right">
              <button type="submit" class="btn" data-toggle="dropdown">
                <i class="fa fa-cog fa-md"></i>
            
                <div class="dropdown-menu dropdown-menu-left">
                  <a class="dropdown-item" href="#">Name</a>
                  <a class="dropdown-item" href="#">Email</a>
                  <a class="dropdown-item" href="#">Status</a>
                  <a class="dropdown-item" href="#">Last Login</a>
                </div>
              </button>

              <button type="submit" class="btn" data-toggle="dropdown">
                <i class="fa fa-sort fa-md"></i>
              
                <div class="dropdown-menu dropdown-menu-left">
                  <a class="dropdown-item" href="#">Name</a>
                  <a class="dropdown-item" href="#">Email</a>
                  <a class="dropdown-item" href="#">Status</a>
                  <a class="dropdown-item" href="#">Last Login</a>
                </div>
              </button>
            </div>

          </div>
        </div>
      </section>

      <!-- Main Content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h3 class="card-title">Admin Data Tables</h3>
                </div>
                
                <div class="card-body">

                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Last Login</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php 
                        foreach($query as $list):
                      ?>
                      <tr>
                          <td><?= $list['name']?></td>
                          <td><?= $list['email']?></td>
                          <td><?= $list['last_login']?></td>
                          <td><?= $list['status']?></td>
                          <td><?= $list['name']?></td>
                      </tr>

                      <?php
                        endforeach;
                      ?>

                    </tbody>

                  </table>
                </div>
                
              </div>

            </div>
          </div>
        </div>
      </section>
      
    </div>
  </div>