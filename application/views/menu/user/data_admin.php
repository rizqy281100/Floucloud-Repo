    <!-- Data Admin Table -->
    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row">

            <!-- Add New Admin Button -->
            <div class="col-4">
              <button type="submit" class="btn text-white btn_add" data-toggle="modal" data-target="#exampleModal">Add Admin
                <i class="fa fa-plus pl-1"></i>
              </button>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Upload Content</h5>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body">
                      <form>
                        <div class="form-row">

                          <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="uploadThumbnail">
                            <label class="custom-file-label" for="uploadThumbnail">Choose Image Thumbnail</label>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" placeholder="Content Category">
                          </div>

                          <div class="form-group col-md-6">
                            <label for="contentVer">Content Version</label>
                            <input type="text" class="form-control" id="contentVer" placeholder="Content Version">
                          </div>


                          <div class="form-group col-md-12">
                            <label for="contentTitle">Content Title</label>
                            <input type="text" class="form-control" id="contentTitle" placeholder="Content Title">
                          </div>

                        </div>
                        
                        <div class="form-group">
                          <label for="contentCaption">Content Caption</label>
                          <textarea type="textarea" class="form-control" id="contentCaption" placeholder="Caption Here"></textarea>
                        </div>

                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="uploadFile">
                          <label class="custom-file-label" for="uploadFile">Choose File</label>
                        </div>

                        <div class="custom-file mt-2">
                          <input type="file" class="custom-file-input" id="uploadPicture1">
                          <label class="custom-file-label" for="uploadPicture1">Choose Picture 1</label>
                        </div>

                        <div class="custom-file mt-2">
                          <input type="file" class="custom-file-input" id="uploadPicture2">
                          <label class="custom-file-label" for="uploadPicture2">Choose Picture 2</label>
                        </div>

                        <div class="custom-file mt-2">
                          <input type="file" class="custom-file-input" id="uploadPicture3">
                          <label class="custom-file-label" for="uploadPicture3">Choose Picture 3</label>
                        </div>

                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Upload</button>
                    </div>

                  </div>
                  
                </div>
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
                        foreach($admin as $list):
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

