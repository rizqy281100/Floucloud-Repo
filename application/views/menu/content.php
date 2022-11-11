    <!-- Content -->
    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">

            <div class="col-6">
              <button type="button" class="btn text-white btn_add" data-toggle="modal" data-target="#exampleModal">Add New Content
                <i class="fa fa-plus pl-1"></i>
              </button>

              <button type="button" class="btn text-white btn_update ml-3" data-toggle="modal" data-target="#exampleModal2">Edit Document Version
                <i class="fa fa-plus pl-1"></i>
              </button>

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
                      <form method="post" action="<?= base_url() ?>Content/simpan">
                        <div class="form-row">

                          <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="thumbnail_picture" id="uploadThumbnail">
                            <label class="custom-file-label" for="uploadThumbnail">Choose Image Thumbnail</label>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" name="categories" id="category" placeholder="Content Category">
                          </div>

                          <div class="form-group col-md-6">
                            <label for="contentVer">Content Version</label>
                            <input type="text" class="form-control" name="document_version" id="contentVer" placeholder="Content Version">
                          </div>

                          <div class="form-group col-md-12">
                            <label for="contentTitle">Content Title</label>
                            <input type="text" class="form-control" name="document_title" id="contentTitle" placeholder="Content Title">
                          </div>

                        </div>
                        
                        <div class="form-group">
                          <label for="contentCaption">Content Caption</label>
                          <textarea type="textarea" class="form-control" name="document_caption" id="contentCaption" placeholder="Caption Here"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="contentLink">Content Link</label>
                          <input type="text" class="form-control" name="document_link" id="contentLiknk" placeholder="Content Link">
                        </div>

                        <div class="custom-file mt-2">
                          <input type="file" class="custom-file-input" name="picture_1" id="uploadPicture1">
                          <label class="custom-file-label" for="uploadPicture1">Choose Picture 1</label>
                        </div>

                        <div class="custom-file mt-2">
                          <input type="file" class="custom-file-input" name="picture_2" id="uploadPicture2">
                          <label class="custom-file-label" for="uploadPicture2">Choose Picture 2</label>
                        </div>

                        <div class="custom-file mt-2">
                          <input type="file" class="custom-file-input" name="picture_3" id="uploadPicture3">
                          <label class="custom-file-label" for="uploadPicture3">Choose Picture 3</label>
                        </div>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="save">Upload</button>
                    </div>

                      </form>

                      
                  </div>

                  </div>
                  
                </div>
              </div>
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
                  <h3 class="card-title">Contents Data Table</h3>
                </div>
                          
                <div class="card-body">

                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Thumbnail</th>
                        <th>Category</th>
                        <!-- <th>Document Link</th> -->
                        <th>Title</th>
                        <th>Version</th>
                        <th>Picture 1</th>
                        <th>Picture 2</th>
                        <th>Picture 3</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach($content as $list): ?>
                      
                      <tr>
                        <td><?= $list['thumbnail_picture']?></td>
                        <td><?= $list['categories']?></td>

                        <td><?= $list['document_title']?></td>
                        <td><?= $list['document_version']?></td>
                        <td><?= $list['picture_1']?></td>
                        <td><?= $list['picture_2']?></td>
                        <td><?= $list['picture_3']?></td>
                        <td>
                          <a href="#" class="btn btn-info btn-sm update-record">Edit</a>
                          <a href="#" class="btn btn-danger btn-sm delete-record">Delete</a>
                        </td>
                      </tr>

                      <?php endforeach; ?>

                    </tbody>
                  </table>
