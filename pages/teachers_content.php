<?php
$query_result = $obj_app->select_all_teachers_info();
?>


<header id="head" class="secondary">
    <div class="container">
        <h1>Teachers</h1> 
    </div>
</header>

<!--<div class="form-group">
    <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
        <div class="icon-addon addon-lg">
            <input type="text" name="teacher_search" placeholder="Search Teacher" onkeyup="teacherSearch(this.value)" class="form-control" id="teacher_search">
            <span id="res"></span>
            <label for="teacher" class="glyphicon glyphicon-search" rel="tooltip" title="teacher"></label>
        </div>
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
        </span>
    </div>
</div>-->
<!-- container -->

<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" >
        <thead>
            <tr>
                <th class="text-center">Teacher Name</th>
                <th class="text-center">Teacher Designation</th>
                <th class="text-center">Teacher Phone Number</th>
                <th class="text-center">Teacher Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($teacher_info = mysqli_fetch_assoc($query_result)) { ?>
                <tr>
                    <td class="text-center"><?php echo $teacher_info['teacher_name']; ?></td>
                    <td class="text-center"><?php echo $teacher_info['teacher_designation']; ?></td>
                    <td class="text-center"><?php echo $teacher_info['teacher_phone_number']; ?></td> 
                    <td class="text-center">
                        <img  height="100px!important" src="assets/<?php echo $teacher_info['teacher_photo']; ?>" alt="">
                    </td>   
                </tr>
            <?php } ?>
        </tbody>
    </table>            
</div>
</html>