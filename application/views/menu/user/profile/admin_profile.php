
<div class="content-wrapper">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="card">
                    <div class="card-body">

                        <div class="account-settings">
                            
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin Profile Picture">
                                </div>

                                <button type="button" id="submit" name="submit" class="btn btn-primary mt-2 butn">Upload Document</button> <br>
                                <button type="button" id="submit" name="submit" class="btn btn-primary mt-4 butn">Edit Document</button> <br>
                                <button type="button" id="submit" name="submit" class="btn btn-primary mt-4 butn">Update Document</button> <br>
                                <button type="button" id="submit" name="submit" class="btn btn-primary mt-4 butn">Delete Document</button> <br>
                                <button type="button" id="submit" name="submit" class="btn btn-secondary mt-4 butn">Send Notification</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="row gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fullname" style="color: black;">Name</label>
                                    <input type="fullname" class="form-control txt text-muted txtEdit" id="fullname" value="<?= $this->session->userdata('name') ?>" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="email" style="color: black;">Email</label>
                                    <input type="email" class="form-control txt text-muted txtEdit" id="email" value="<?= $this->session->userdata('email') ?>" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="username" style="color: black;">Username</label>
                                    <input type="text" class="form-control txt text-muted txtEdit" id="username" value="<?= $this->session->userdata('username') ?>" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone" style="color: black;">Phone</label>
                                    <input type="tel" class="form-control txt text-muted txtEdit" id="phone" value="<?= $this->session->userdata('phone') ?>" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="role" style="color: black;">Role</label>
                                    <input type="text" class="form-control txt text-muted txtEdit" id="role" value="<?= $this->session->userdata('role') ?>" readonly>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="register_date" style="color: black;">Register Date</label>
                                    <input type="text" class="form-control txt text-muted txtEdit" id="register_date" value="<?= $this->session->userdata('register_date') ?>" readonly>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="last_login" style="color: black;">Last Login</label>
                                    <input type="text" class="form-control txt text-muted txtEdit" id="last_login" value="<?= $this->session->userdata('last_login') ?>" readonly>
                                </div>
                            </div>
                            

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <?php if($this->session->userdata('status') == 1): ?>
                                        <span class="btn btn-success mt-4 status">Active</span>
                                    <?php else: ?>
                                        <span class="btn btn-danger mt-4 status">Inactive</span>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

