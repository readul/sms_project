<br><br><br>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="card border-light mb-3">
            <div class="card-header text-center">User Login</div>
            <div class="card-body">
                <?php echo form_open() ?> 

                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="std_email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="std_pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>                    

                <button type="submit" class="btn btn-primary">Login</button>
                <?php echo form_close(); ?>



            </div>
        </div>
    </div>
</div>
</div>


