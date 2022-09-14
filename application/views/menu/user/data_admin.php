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

