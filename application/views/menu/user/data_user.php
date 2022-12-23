  <!-- Data Tables Nav -->
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
                      <th>Sales Segmen</th>
                      <th>Status</th>
                      <th>Last Login</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php 
                        foreach($user as $list):
                      ?>
                      
                      <tr>
                          <td><?= $list['username']?></td>
                          <td><?= $list['email']?></td>
                          <td><?= $list['sales_segmen']?></td>
                          <td><?= $list['status']?></td>
                          <td><?= $list['last_login']?></td>
                          <td>
                            <a href="#" class="btn btn-info btn-sm update-record">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm delete-record">Delete</a>
                          </td>
                      </tr>

                      <?php
                        endforeach;
                      ?>
                  </tbody>

                </table>

