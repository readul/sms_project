<div class="row">
    <div class="col-md-2 col-sm-3">
        <?php include 'dashboard-menu.php'; ?>
    </div>
    <div class="col-md-10 col-sm-9" style="padding-top: 15px;">
        <div class="card border-light mb-3">
            <div class="card-header text-center">Add Teacher</div>
            <div class="card-body">
                <?php echo form_open() ?>     
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputName">Teacher Name</label>
                            <input type="text" name="t_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                            <id="emailHelp" class="form-text text-muted">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Present Address</label>
                            <input type="text" name="p_add" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Parmanent Address</label>
                            <input type="text" name="pa_add" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Of Birth</label>
                            <input type="date" name="tcr_birthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            <id="emailHelp" class="form-text text-muted">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" name="tcr_age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Age">
                            <id="emailHelp" class="form-text text-muted">
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" name="tcr_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                            <id="emailHelp" class="form-text text-muted">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Gender</label>
                            <select class="form-control" name="tcr_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Blood Group</label>
                            <input type="text" name="tcr_blood" class="form-control" id="exampleInputPassword1" placeholder="Enter Blood Group">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Registar Date</label>
                            <input type="date" name="t_date" class="form-control" id="exampleInputPassword1" placeholder="Enter Date">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contact Number</label>
                            <input type="number" name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" name="submit_btn" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
