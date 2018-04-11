<div class="row">
    <div class="col-md-2 col-sm-3">
        <?php include 'dashboard-menu.php'; ?>
    </div>
    <div class="col-md-10 col-sm-9" style="padding-top: 15px;">
        <div class="card border-light mb-3">
            <div class="card-header text-center">Student List</div>
            <div class="card-body"></div>
            <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Si NO</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Mother Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Gender</th>                    
                    <th scope="col">Action</th>                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $sl => $row) { ?>
                    <tr>
                        <th scope="row"><?php echo ($sl + 1) ?></th>
                        <td><?php echo $row->s_name ?></td>
                        <td><?php echo $row->std_id ?></td>
                        <td><?php echo $row->f_name ?></td>
                        <td><?php echo $row->m_name ?></td>                    
                        <td><?php echo $row->cls_name ?></td>
                        <td><?php echo $row->sec_name ?></td>
                        <td><?php echo $row->std_gender ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo site_url("students/edit_student/" . $row->id) ?>"><i class="ion-compose"></i>Edit</a>
                                    <a class="dropdown-item" href="<?php echo site_url("students/student_delete/" . $row->id) ?>" onclick="return confirm('Sure to delete ?')"><i class="ion-trash-a"></i>Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>

