<div class="row">
    <div class="col-md-2 col-sm-3">
        <?php include 'dashboard-menu.php'; ?>
    </div>
    <div class="col-md-10 col-sm-9" style="padding-top: 15px;">
        <div class="card border-light mb-3">
            <div class="card-header text-center">Edit Student</div>
            <div class="card-body"> 
                <?php echo form_open() ?>     
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputName">Student Name</label>
                            <input value="<?php echo $row->s_name; ?>" type="text" name="s_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                            <id="emailHelp" class="form-text text-muted">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName">Father Name</label>
                            <input value="<?php echo $row->f_name; ?>" type="text" name="f_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Mother Name</label>
                            <input value="<?php echo $row->m_name; ?>" type="text" name="m_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Present Address</label>
                            <input value="<?php echo $row->p_add; ?>" type="text" name="p_add" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Parmanent Address</label>
                            <input value="<?php echo $row->pa_add; ?>" type="text" name="pa_add" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Of Birth</label>
                            <input value="<?php echo $row->std_birthday; ?>" type="date" name="std_birthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            <id="emailHelp" class="form-text text-muted">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Id</label>
                            <input value="<?php echo $row->std_id; ?>" type="text" name="std_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Id">
                            <id="emailHelp" class="form-text text-muted">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputName">Class</label>
                            <select class="form-control" name="std_class">
                                <option value="">-- Select Class --</option>
                                <?php
                                foreach ($class_rows as $class_row) {
                                    if ($row->class_id == $class_row->id) {
                                        $selected = '  selected';
                                    } else {
                                        $selected = '';
                                    }
                                    echo '<option value="' . $class_row->id . '" ' . $selected . '>' . $class_row->cls_name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Section</label>
                            <select class="form-control" name="std_section">
                                <option value="">-- Select Section --</option>
                                <?php
                                foreach ($section_rows as $section_row) {
                                    //$selected = $row->section_id == $section_row->id ? ' selected' : '';
                                    if ($row->section_id == $section_row->id) {
                                        $selected = '  selected';
                                    } else {
                                        $selected = '';
                                    }
                                    echo '<option value="' . $section_row->id . '" ' . $selected . '>' . $section_row->sec_name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">TEST</label>
                            <select class="form-control" name="std_gender">
                                <option value="Female"> --  NONE --</option>
                                <option value="Male">Male</option>
                                <option value="Female" selected>Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Gender</label>
                            <select value="<?php echo $row->std_gender; ?>" class="form-control" name="std_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Blood Group</label>
                            <input value="<?php echo $row->std_blood; ?>" type="text" name="std_blood" class="form-control" id="exampleInputPassword1" placeholder="Enter Blood Group">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Parent Contact Number</label>
                            <input value="<?php echo $row->phone_number; ?>" type="number" name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
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
