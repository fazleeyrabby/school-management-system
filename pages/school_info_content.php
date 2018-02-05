<?php
$query_result = $obj_app->select_all_school_info();
$school_info=mysqli_fetch_assoc($query_result);
?>
<header id="head" class="secondary">
    <div class="container">
        <h1>School Information at a glance</h1> 
    </div>
</header>


<!-- container -->
<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" >
        <thead>
            
        </thead>
        <tbody>
            <tr>
                <th class="text-center">Recognition</th>
                <td class="text-center"><?php echo $school_info['recognition'];?></td>
                
            </tr>
            <tr>
                <th class="text-center">Group</th>
                <td class="text-center"><?php echo $school_info['groups'];?></td>
                
            </tr>
            <tr>
                <th class="text-center">Land</th>
                <td class="text-center"><?php echo $school_info['land'];?></td>
                
            </tr>
            <tr>
                <th class="text-center">Play Ground</th>
                <td class="text-center"><?php echo $school_info['play_ground'];?></td>
                
            </tr>
            <tr>
                <th class="text-center">Sanitation</th>
                <td class="text-center"><?php echo $school_info['sanitation'];?></td>
                
            </tr>
            <tr>
                <th class="text-center">Laboratory</th>
                <td class="text-center"><?php echo $school_info['laboratory'];?></td>
                
            </tr>
            <tr>
                <th class="text-center">Managing Committee</th>
                <td class="text-center"><?php echo $school_info['managing_committee'];?></td>
                
            </tr>
            <tr>
                <th class="text-center">Managing Duration</th>
                <td class="text-center"><?php echo $school_info['managing_duration'];?></td>  
            </tr>
            <tr>
                <th class="text-center">Total No.of Students</th>
                <td class="text-center"><?php echo $school_info['total_no_of_students'];?></td>  
            </tr>
            <tr>
                <th class="text-center">Computer Lab</th>
                <td class="text-center"><?php echo $school_info['computer_lab'];?></td>  
            </tr>
            <tr>
                <th class="text-center">Computer Lab PC</th>
                <td class="text-center"><?php echo $school_info['computer_lab_pc'];?></td>    
            </tr>
            <tr>
                <th class="text-center">Number Of Employee</th>
                <td class="text-center"><?php echo $school_info['number_of_employee'];?></td>    
            </tr>
            <tr>
                <th class="text-center">Teacher</th>
                <td class="text-center"><?php echo $school_info['teacher'];?></td>
            </tr>
            <tr>
                <th class="text-center">Staff</th>
                <td class="text-center"><?php echo $school_info['staff'];?></td> 
            </tr>
            <tr>
                <th class="text-center">Co-curricular Activity</th>
                <td class="text-center"><?php echo $school_info['co_curricular_activity'];?></td>  
            </tr>
            <tr>
                <th class="text-center">Sports</th>
                <td class="text-center"><?php echo $school_info['sports'];?></td>
            </tr> 
        </tbody>
    </table>            
</div>