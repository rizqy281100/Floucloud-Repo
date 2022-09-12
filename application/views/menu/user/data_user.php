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

    <!-- Content -->
    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row">

            <div class="col-12 text-right">

              <button type="submit" class="btn">
                <i class="fa fa-search fa-md"></i>
              </button>

              <button type="submit" class="btn">
                <i class="fa fa-cog fa-md"></i>
              </button>

              <button type="submit" class="btn">
                <i class="fa fa-sort fa-md"></i>
              </button>

            </div>

          </div>
        </div>
      </section>

      <!-- User Data Tables -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Data Tables</h3>
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
                    <!-- 1 - 10 -->
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>X</td>
                    </tr>

                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      <td>5</td>
                      <td>C</td>
                    </tr>

                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5
                      </td>
                      <td>Win 95+</td>
                      <td>5.5</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6
                      </td>
                      <td>Win 98+</td>
                      <td>6</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      <td>7</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>Win XP</td>
                      <td>6</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.7</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 1.5</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 2.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 3.0</td>
                      <td>Win 2k+ / OSX.3+</td>
                      <td>1.9</td>
                      <td>A</td>
                    </tr>

                    <!-- 11 - 20 -->
                    <tr>
                      <td>Gecko</td>
                      <td>Camino 1.0</td>
                      <td>OSX.2+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Camino 1.5</td>
                      <td>OSX.3+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Netscape 7.2</td>
                      <td>Win 95+ / Mac OS 8.6-9.2</td>
                      <td>1.7</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Netscape Browser 8</td>
                      <td>Win 98SE+</td>
                      <td>1.7</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Netscape Navigator 9</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.0</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.1</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.1</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.2</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.2</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.3</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.3</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.4</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.4</td>
                      <td>A</td>
                    </tr>

                    <!-- 21 - 30 -->
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.5</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.5</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.6</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.6</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.7</td>
                      <td>Win 98+ / OSX.1+</td>
                      <td>1.7</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.8</td>
                      <td>Win 98+ / OSX.1+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Seamonkey 1.1</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Gecko</td>
                      <td>Epiphany 2.20</td>
                      <td>Gnome</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Webkit</td>
                      <td>Safari 1.2</td>
                      <td>OSX.3</td>
                      <td>125.5</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Webkit</td>
                      <td>Safari 1.3</td>
                      <td>OSX.3</td>
                      <td>312.8</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Webkit</td>
                      <td>Safari 2.0</td>
                      <td>OSX.4+</td>
                      <td>419.3</td>
                      <td>A</td>
                    </tr>

                    <tr>
                      <td>Webkit</td>
                      <td>Safari 3.0</td>
                      <td>OSX.4+</td>
                      <td>522.1</td>
                      <td>A</td>
                    </tr>

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