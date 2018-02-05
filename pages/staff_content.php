<?php
    $query_result = $obj_app->select_all_staff_info();
?>
<header id="head" class="secondary">
    <div class="container">
        <h1>Staff</h1> 
    </div>
</header>


<!-- container -->
<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" >
        <thead>
            <tr>
                <th class="text-center">Staff Name</th>
                <th class="text-center">Staff Designation</th>
                <th class="text-center">Staff Number</th>
                <th class="text-center">Staff Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($staff_info = mysqli_fetch_assoc($query_result)) { ?>
                <tr>
                    <td class="text-center"><?php echo $staff_info['staff_name']; ?></td>
                    <td class="text-center"><?php echo $staff_info['staff_designation']; ?></td>
                    <td class="text-center"><?php echo $staff_info['staff_number']; ?></td> 
                    <td class="text-center"><img height="100px!important" src="assets/<?php echo $staff_info['staff_photo']; ?>" alt=""></td>   
                </tr>
            <?php } ?>
        </tbody>
    </table>            
</div>