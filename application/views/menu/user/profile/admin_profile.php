
    <div class="container mt-5 pt-4">
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
                                    <input type="fullname" class="form-control txt text-muted" id="fullname" value="<?= $this->session->userdata('name') ?>" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="email" style="color: black;">Email</label>
                                    <input type="email" class="form-control txt text-muted" id="email" value="rizqy1078@gmail.com" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="username" style="color: black;">Username</label>
                                    <input type="text" class="form-control txt text-muted" id="username" value="admin_repo" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="password" style="color: black;">Password</label>
                                    <input type="password" class="form-control txt text-muted" id="password" value="admin123" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="phone" style="color: black;">Phone</label>
                                    <input type="tel" class="form-control txt text-muted" id="email" value="085692432820" readonly>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="role" style="color: black;">Role</label>
                                    <input type="text" class="form-control txt text-muted" id="role" value="Admin" readonly>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="register_date" style="color: black;">Register Date</label>
                                    <input type="text" class="form-control txt text-muted" id="register_date" value="2022-08-26 00:09:38" readonly>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="last_login" style="color: black;">Last Login</label>
                                    <input type="text" class="form-control txt text-muted" id="last_login" value="2022-08-19 10:41:41" readonly>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <span class="btn btn-success mt-3 status">Active</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

