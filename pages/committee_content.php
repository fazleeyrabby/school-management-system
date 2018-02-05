<?php
$query_result = $obj_app->select_all_committee_info();
?>
<header id="head" class="secondary">
    <div class="container">
        <h1>Managing Committee</h1> 
    </div>
</header>


<!-- container -->
<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" >
        <thead>
            <tr>
                <th class="text-center">Committee Name</th>
                <th class="text-center">Committee Designation</th>
                <th class="text-center">Committee Phone Number</th>
                <th class="text-center">Committee Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($committee_info = mysqli_fetch_assoc($query_result)) { ?>
                <tr>
                    <td class="text-center"><?php echo $committee_info['committee_name']; ?></td>
                    <td class="text-center"><?php echo $committee_info['committee_designation']; ?></td>
                    <td class="text-center"><?php echo $committee_info['committee_number']; ?></td> 
                    <td class="text-center"><img height="100px!important" src="assets/<?php echo $committee_info['committee_photo']; ?>" alt=""></td>   
                </tr>
            <?php } ?>
        </tbody>
    </table>            
</div>