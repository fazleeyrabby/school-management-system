<?php
if (isset($_GET['status'])) {
    $image_id = $_GET['id'];
    if ($_GET['status'] == 'unpublished') {
        $message = $obj_sup_admin->unpublished_slider_image_by_id($image_id);
    } else if ($_GET['status'] == 'published') {
        $message = $obj_sup_admin->published_slider_image_by_id($image_id);
    } else if ($_GET['status'] == 'delete') {
        $message = $obj_sup_admin->delete_slider_image_by_id($image_id);
    }
}

$query_result = $obj_sup_admin->select_all_slider_image();
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
                        <th>Image ID</th>
                        <th>Image Title</th>
                        <th>Publication Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($slider_image_info = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td><?php echo $slider_image_info['image_id']; ?></td>
                            <td class="center"><?php echo $slider_image_info['image_title']; ?></td>
                            <td class="center">
                                <?php
                                if ($slider_image_info['publication_status'] == 1) {
                                    echo 'Published';
                                } else {
                                    echo 'Unpublished';
                                }
                                ?>
                            </td>
                            <td class="center">
                                <?php if ($slider_image_info['publication_status'] == 1) { ?>
                                    <a class="btn btn-success" href="?status=unpublished&&id=<?php echo $slider_image_info['image_id']; ?>" title="Unpublished">
                                        <i class="halflings-icon white arrow-down"></i>  
                                    </a>
                                <?php } else { ?>
                                    <a class="btn btn-danger" href="?status=published&&id=<?php echo $slider_image_info['image_id']; ?>" title="Published">
                                        <i class="halflings-icon white arrow-up"></i>  
                                    </a>
                                <?php } ?>
                                <a class="btn btn-info" href="edit_slider_image.php?id=<?php echo $slider_image_info['image_id']; ?>" title="Edit">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="?status=delete&&id=<?php echo $slider_image_info['image_id']; ?>" title="Delete" onclick="return check_delete_info();">
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