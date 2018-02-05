<?php
$query_result = $obj_app->select_all_student_eight_info();
?>
<header id="head" class="secondary">
    <div class="container">
        <h1>Student</h1> 
    </div>
</header>


<!-- container -->
<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" >
        <thead>
            <tr>
                <h4 class="text-center">Class VIII Students List </h4>   
            </tr>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Group</th>
                <th class="text-center">Shift</th>
                <th class="text-center">Class roll Photo</th>
                <th class="text-center">Session</th>
                <th class="text-center">Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($student_info = mysqli_fetch_assoc($query_result)) { ?>
                <tr>

                    <td class="text-center"><?php echo $student_info['student_name']; ?></td>
                    <td class="text-center"><?php echo $student_info['group1']; ?></td> 
                    <td class="text-center"><?php echo $student_info['shift']; ?></td> 
                    <td class="text-center"><?php echo $student_info['roll']; ?></td> 
                    <td class="text-center"><?php echo $student_info['session']; ?></td> 
                    <td class="text-center"><img height="100px!important" src="assets/<?php echo $student_info['photo']; ?>" alt=""></td>   
                </tr>
            <?php } ?>
        </tbody>
    </table>            
</div><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

