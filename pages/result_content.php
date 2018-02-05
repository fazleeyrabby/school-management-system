<?php
$query_result = $obj_app->select_all_jsc_result_info();
$query_result1 = $obj_app->select_all_ssc_result_info();
?>
<header id="head" class="secondary">
    <div class="container">
        <h1>Result</h1> 
    </div>
</header>


<!-- container -->
<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" >
        <thead>

        </thead>
        <tbody>
            <tr>
                <h4 class="text-center">JSC &nbsp;&nbsp; Statistics </h4>   
            </tr>
            <tr>
                <th class="text-center">Year</th>
                <th class="text-center">Total Exam</th>
                <th class="text-center">App</th>
                <th class="text-center">GPA 5</th>
                <th class="text-center">GPA 4</th>
                <th class="text-center">GPA 3.5</th>
                <th class="text-center">GPA 3</th>
                <th class="text-center">GPA 2</th>
                <th class="text-center">GPA 1.5</th>
                <th class="text-center">Total Pass</th>
                <th class="text-center">% Of Pass</th>
            </tr>
             <?php while ($jsc_rsult = mysqli_fetch_assoc($query_result)) { ?>
            <tr>  
                <td class="text-center"><?php echo $jsc_rsult['year']; ?></td>
                <td class="text-center"><?php echo $jsc_rsult['total_exam']; ?></td>
                <td class="text-center"><?php echo $jsc_rsult['app']; ?></td>
                <td class="text-center"><?php echo $jsc_rsult['gpa_five']; ?></td>
                <td class="text-center"><?php echo $jsc_rsult['gpa_four']; ?></td>
                <td class="text-center"><?php echo $jsc_rsult['gpa_three_point_five']; ?></td>
                <td class="text-center"><?php echo $jsc_rsult['gpa_three']; ?></td>
                <td class="text-center"><?php echo $jsc_rsult['gpa_two']; ?></td>  
                <td class="text-center"><?php echo $jsc_rsult['gpa_one']; ?></td>  
                <td class="text-center"><?php echo $jsc_rsult['total_pass']; ?></td>   
                <td class="text-center"><?php echo $jsc_rsult['percentice_of_pass']; ?></td>    
            </tr>
            <?php } ?>
        </tbody>
    </table>            
    <table class="table table-striped table-bordered bootstrap-datatable datatable" >
        <thead>

        </thead>
        <tbody>
            <tr>
                <h4 class="text-center">SSC &nbsp;&nbsp; Statistics </h4>   
            </tr>
            <tr>
                <th class="text-center">Year</th>
                <th class="text-center">Group</th>
                <th class="text-center">Total Exam</th>
                <th class="text-center">App</th>
                <th class="text-center">GPA 5</th>
                <th class="text-center">GPA 4</th>
                <th class="text-center">GPA 3.5</th>
                <th class="text-center">GPA 3</th>
                <th class="text-center">GPA 2</th>
                <th class="text-center">GPA 1.5</th>
                <th class="text-center">Total Pass</th>
                <th class="text-center">% Of Pass</th>
            </tr>
             <?php while ($ssc_rsult = mysqli_fetch_assoc($query_result1)) { ?>
            <tr>  
                <td class="text-center"><?php echo $ssc_rsult['year']; ?></td>
                <td class="text-center"><?php echo $ssc_rsult['group1']; ?></td>
                <td class="text-center"><?php echo $ssc_rsult['total_exam']; ?></td>
                <td class="text-center"><?php echo $ssc_rsult['app']; ?></td>
                <td class="text-center"><?php echo $ssc_rsult['gpa_five']; ?></td>
                <td class="text-center"><?php echo $ssc_rsult['gpa_four']; ?></td>
                <td class="text-center"><?php echo $ssc_rsult['gpa_three_point_five']; ?></td>
                <td class="text-center"><?php echo $ssc_rsult['gpa_three']; ?></td>
                <td class="text-center"><?php echo $ssc_rsult['gpa_two']; ?></td>  
                <td class="text-center"><?php echo $ssc_rsult['gpa_one']; ?></td>  
                <td class="text-center"><?php echo $ssc_rsult['total_pass']; ?></td>   
                <td class="text-center"><?php echo $ssc_rsult['percentice_of_pass']; ?></td>    
            </tr>
            <?php } ?>
        </tbody>
    </table>            
</div>