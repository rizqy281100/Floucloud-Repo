    <!-- Content -->
    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">

            <div class="col-4">
              <button type="button" class="btn text-white btn_add_admin" data-toggle="modal" data-target="#exampleModal">Add New Content
                <i class="fa fa-plus" style="padding-left: 5px;"></i>
              </button>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Upload Content</h5>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <div class="modal-body text-center">
                      <form>
                        <div class="form-row">

                          <!-- <div class="image-area mt-4">
                            <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                          </div> -->

                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputAddress">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="form-group">
                          <label for="inputAddress2">Address 2</label>
                          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>

                          <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">Check me out</label>
                          </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
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
                        <td>Internet</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>

                      <tr>
                        <td>Gecko</td>
                        <td>Test</td>
                        <td>Win 9+</td>
                        <td> 5</td>
                        <td>Z</td>
                      </tr>

                      <tr>
                        <td>Girg</td>
                        <td>Ethernet</td>                        
                        <td>Win 8</td>                        
                        <td> 7</td>                        
                        <td>H</td>                                     
                      </tr>
                      
                      <tr>
                        <td>Bro</td>
                        <td>Internet</td>
                        <td>Win XP</td>
                        <td> 88</td>
                        <td>Q</td>
                      </tr>

                      <tr>
                        <td>Jeik</td>
                        <td>Linux</td>
                        <td>Teech</td>
                        <td> 3</td>
                        <td>Y</td>
                      </tr>

                      <tr>
                        <td>Trident</td>
                        <td>Internet</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>

                    </tbody>
                  </table>
