<div class="row">
    <div class="col-md-2 col-sm-3">
        <?php include 'dashboard-menu.php'; ?>
    </div>
    <div class="col-md-10 col-sm-9" style="padding-top: 15px;">
        <div class="card border-light mb-3">
            <div class="card-header text-center">Student Attendence</div>
            <div class="card-body"></div>

            <?php echo form_open(NULL, 'method="GET" class="form-inline"') ?>
            <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Select Class</label>
                <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <label for="staticEmail2" class="sr-only">Select Class</label>
                <select class="form-control" name="std_class">
                    <option value="">-- Select Class --</option>
                    <?php
                    foreach ($class_rows as $class_row) {
                        echo '<option value="' . $class_row->id . '">' . $class_row->cls_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Select Section </label>
                <select class="form-control" name="std_section">
                    <option value="">-- Select Section --</option>
                    <?php
                    foreach ($section_rows as $section_row) {
                        echo '<option value="' . $section_row->id . '">' . $section_row->sec_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">View Studetns</button>
            <?php echo form_close(); ?>

            <?php echo form_open() ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Id</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Status(Check if present)</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $sl => $row) { ?>
                        <tr>
                            <th scope="row"><?php echo ($sl + 1) ?></th>
                            <td><?php echo $row->std_id ?></td>
                            <td><?php echo $row->s_name ?></td>
                            <td>
                                <input type="checkbox" value="<?php echo $row->id ?>" name="presents[]">
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button type="submit" name="submit_btn" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>
            <input type="hidden" name="date" value="<?php echo $date; ?>" >
            <input type="hidden" name="class_id" value="<?php echo $class_id; ?>" >
            <input type="hidden" name="section_id" value="<?php echo $section_id; ?>" >
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
