<br>
<div class="card border-light mb-3">
    <div class="card-header text-center">User Registration</div>
    <div class="card-body">
        <?php echo form_open() ?>     
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="std_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    <id="emailHelp" class="form-text text-muted">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Parent</label>
                    <input type="text" name="prnt_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name"> 
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Class</label>
                    <input type="text" name="cls" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputName">Section</label>
                    <input type="text" name="sec" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Roll</label>
                    <input type="text" name="std_roll" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Roll">
                    <id="emailHelp" class="form-text text-muted">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Birthday</label>
                    <input type="date" name="std_birthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    <id="emailHelp" class="form-text text-muted">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputName">Gender</label>
                    <select class="form-control" name="std_gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="std_address" class="form-control" id="exampleInputPassword1" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="std_email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="std_pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Photo</label>
                    <input type="file" name="std_photo" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" name="submit_btn" class="btn btn-primary">Submit</button>

            </div>
        </div>

        <?php echo form_close(); ?>

    </div>
</div>

