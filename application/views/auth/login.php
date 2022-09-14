  <div class="vh-100 d-flex justify-content-center align-items-center bg_img">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-4">
          <div class="card card-primary">

            <form method="post" action="<?php echo base_url('auth'); ?>" id="form_login">
              <div class="card-body">
                <img class="img" src="assets/img/flou-logo.png" style="width: 280px; height: 200px;">

                <?php if($this->session->flashdata('message')): ?>
                  <?php echo $this->session->flashdata('message') ?>
                <?php endif ?>

                <!-- Email -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="text" name="email" id="email" class="form-control uName" placeholder="Enter Email" value="<?php echo set_value('email'); ?>">
                  <?php echo form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                </div>

                <!-- Password -->
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" id="password" class="form-control passW" placeholder="Enter Password">
                  <?php echo form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                </div>

                <!-- Forgot Password -->
                <h6 class="text-center">Forgot Your Password?
                  <button type="button" class="btn forgot_pw" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Click Here</button>
                </h6>
            
                <!-- Submit Button -->
                <div class="text-center">
                  <button type="submit" class="btn mt-1 btn_login" href="#">Sign In</button>
                </div>

              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>

