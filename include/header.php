<?php
$query_result = $obj_app->select_all_published_category_info();
?>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.php">
                <img src="./assets/front_end_assets/images/school-logo.jpg" margin-top="" height="65px!important" alt="Techro HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li class="c4"><a href="index.php">Home</a></li>
                 <!--<?php while ($category_info = mysqli_fetch_assoc($query_result)) { ?>
                <li class="c4"><a href="contact.php?id=<?php echo $category_info['category_id'];?>"><?php echo $category_info['category_name']; ?></a></li>
                <?php } ?>-->
                <li class="c4"><a href="about.php">About</a></li>
                <!--<li class="c4"><a href="courses.php">Courses</a></li>-->
<!--                <li class="c4"><a href="teachers.php">Teachers</a></li>
                <li class="c4"><a href="committee.php">Managing Committee</a></li>
                <li class="c4"><a href="staff.php">Staff</a></li>-->
                <li class="c4 dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDENTS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
<!--                        <li ><a href="sidebar-right.html"></a></li>-->
                        <li class="c4"><a href="class_eight.php"> Class VIII </a></li>
                        <li class="c4"><a href="class_nine.php"> Class IX</a></li>
                        <li class="c4"><a href="class_ten.php">Class X</a></li>
                    </ul>
                </li>
                <li class="c4"><a href="result.php">Result</a></li>
                <li class="c4"><a href="school_info.php">School Information</a></li>
                <li class="c4 dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <b class="caret"></b></a>
                    <ul class="dropdown-menu">
<!--                        <li ><a href="sidebar-right.html"></a></li>-->
                        <li class="c4"><a href="teachers.php">Teacher</a></li>
                        <li class="c4"><a href="committee.php">Managing Committee</a></li>
                        <li class="c4"><a href="staff.php">Staff</a></li>
                    </ul>
                </li>
                <li class="c4"><a href="contact.php">Contact</a></li>

            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
