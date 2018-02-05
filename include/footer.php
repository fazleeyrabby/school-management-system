<?php
$query_result = $obj_app->select_all_contact_info();
$query_result1 = $obj_app->select_all_category_info();
$query_result2 = $obj_app->select_admission_info();
?>
<footer id="footer">

    <div class="container">
        <div class="row">
            <div class="footerbottom">
                <div class="col-md-4 col-sm-6">
                    <div class="footerwidget">
                        <h4>
                            Course Categories
                        </h4>
                        <div class="menu-course">
                            <?php while ($category_info = mysqli_fetch_assoc($query_result1)) { ?>
                                <ul class="menu">
                                    <li><a href="#"> <?php echo $category_info['category_name']; ?></a></li>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="footerwidget">
                        <h4>
                            Help and Support
                        </h4>
                        <?php while ($admission_info = mysqli_fetch_assoc($query_result2)) { ?>
                                <ul class="menu">
                                    <li><a href="#"> <?php echo $admission_info['admission_title']; ?></a></li>
                                </ul>
                            <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6"> 
                    <div class="footerwidget"> 

                        <h4>Contact Us</h4> 
                        <?php while ($contact_info = mysqli_fetch_assoc($query_result)) { ?>
                            <p><?php echo $contact_info['address']; ?></p>
                            <div class="contact-info"> 
                                <i class="fa fa-phone"></i><?php echo $contact_info['phone']; ?><br>
                                <i class="fa fa-envelope-o"></i> <?php echo $contact_info['email']; ?>
                            </div> 
                        <?php } ?>
                    </div><!-- end widget --> 
                </div>
            </div>
        </div>
        <div class="social text-center">
            <a href="https://twitter.com/" target="_blank"><i title="tweeter" class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i title="facebook" class="fa fa-facebook"></i></a>
            <a href="https://dribbble.com/" target="_blank"><i title="dribbble" class="fa fa-dribbble"></i></a>
            <a href="https://www.flickr.com" target="_blank"><i title="flickr" class="fa fa-flickr"></i></a>

        </div>

        <div class="clear"></div>
        <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="simplenav">
                            <a href="index.php">Home</a> | 
                            <a href="about.php">About</a> |
                            <a href="result.php">Result</a> |
                            <a href="school_info.php">School Information</a> |
                            <a href="contact.php">Contact</a> 
                    </div>
                </div>

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="text-right">
                            Copyright &copy; 2016.
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of panels -->
        </div>
    </div>
</footer>