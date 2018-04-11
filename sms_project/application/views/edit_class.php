<div class="row">
    <div class="col-md-2 col-sm-3">
        <?php include 'dashboard-menu.php'; ?>
    </div>
    <div class="col-md-10 col-sm-9" style="padding-top: 15px;">
        <br>
        <div class="card border-light mb-3">
            <div class="card-header text-center">Edit Class</div>
            <div class="card-body">           
                <?php echo form_open() ?>     
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputName">Class Name</label>
                            <input value="<?php echo $row->cls_name; ?>" type="text" name="cls_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Class">
                            <id="emailHelp" class="form-text text-muted">
                        </div> 

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <button type="submit" name="submit_btn" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>