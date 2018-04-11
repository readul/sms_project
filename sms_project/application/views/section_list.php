<div class="row">
    <div class="col-md-2 col-sm-3">
        <?php include 'dashboard-menu.php'; ?>
    </div>
    <div class="col-md-10 col-sm-9" style="padding-top: 15px;">
        <div class="card border-light mb-3">
            <div class="card-header text-center">Section List</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Si NO</th>
                            <th scope="col">Section Name</th>
                            <th scope="col">Action</th>                    
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $sl => $row) { ?>
                            <tr>
                                <th scope="row"><?php echo ($sl + 1) ?></th>
                                <td><?php echo $row->sec_name ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="<?php echo site_url("students/section_edit/" . $row->id) ?>"><i class="ion-compose"></i>Edit</a>
                                            <a class="dropdown-item" href="<?php echo site_url("students/section_delete/" . $row->id) ?>" onclick="return confirm('Sure to delete ?')"><i class="ion-trash-a"></i>Delete</a>
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
</div>

