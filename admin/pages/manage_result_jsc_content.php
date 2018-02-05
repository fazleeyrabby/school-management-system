<?php
if (isset($_GET['status'])) {
    $jsc_result_id = $_GET['id'];
    if ($_GET['status'] == 'unpublished') {
        $message = $obj_sup_admin->unpublished_manage_result_jsc_info_by_id($jsc_result_id);
    } else if ($_GET['status'] == 'published') {
        $message = $obj_sup_admin->published_manage_result_jsc_info_by_id($jsc_result_id);
    } else if ($_GET['status'] == 'delete') {
        $message = $obj_sup_admin->delete_result_jsc_info_by_id($jsc_result_id);
    }
}

$query_result = $obj_sup_admin->select_all_result_jsc_info();
?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <h2 align="center">
            <?php
            if (isset($message)) {
                echo $message;
            }
            unset($message);
            ?>
        </h2>
        <h2 align="center">
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
        </h2>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>result Info ID</th>
                        <th>Year</th>
                        <th>Total Exam</th>
                        <th>App</th>
                        <th>GPA 5</th>
                        <th>GPA 4</th>
                        <th>GPA 3.5</th>
                        <th>GPA 3</th>
                        <th>GPA 2</th>
                        <th>GPA 1</th>
                        <th>Total Pass</th>
                        <th>% Of Pass</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($result_jsc_info = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td><?php echo $result_jsc_info['jsc_result_id']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['year']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['total_exam']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['app']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['gpa_five']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['gpa_four']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['gpa_three_point_five']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['gpa_three']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['gpa_two']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['gpa_one']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['total_pass']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['percentice_of_pass']; ?></td>
                            <td class="center"><?php echo $result_jsc_info['publication_status']; ?></td>
                            <td class="center">
                                <?php
                                if ($result_jsc_info['publication_status'] == 1) {
                                    echo 'Published';
                                } else {
                                    echo 'Unpublished';
                                }
                                ?>
                            </td>
                            <td class="center">
                                <?php if ($result_jsc_info['publication_status'] == 1) { ?>
                                    <a class="btn btn-success" href="?status=unpublished&&id=<?php echo $result_jsc_info['jsc_result_id']; ?>" title="Unpublished">
                                        <i class="halflings-icon white arrow-down"></i>  
                                    </a>
                                <?php } else { ?>
                                    <a class="btn btn-danger" href="?status=published&&id=<?php echo $result_jsc_info['jsc_result_id']; ?>" title="Published">
                                        <i class="halflings-icon white arrow-up"></i>  
                                    </a>
                                <?php } ?>
                                <a class="btn btn-info" href="edit_result_jsc_info.php?id=<?php echo $result_jsc_info['jsc_result_id']; ?>" title="Edit">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="?status=delete&&id=<?php echo $result_jsc_info['jsc_result_id']; ?>" title="Delete" onclick="return check_delete_info();">
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
</div><!--/row-->