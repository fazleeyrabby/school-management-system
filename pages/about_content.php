<?php
$query_result1 = $obj_app->select_committee_info();
$committee_info = mysqli_fetch_assoc($query_result1);

$query_result = $obj_app->select_teacher_info();

$query_result2 = $obj_app->select_about_us_info();
$query_result3 = $obj_app->select_article_info();
$query_result4 = $obj_app->select_latest_news_info();
?>
<header id="head" class="secondary">
    <div class="container">
        <h1>About Us</h1>
    </div>
</header>
<section class="container">
    <div class="row">

        <section class="col-sm-8 maincontent">
            <h3>About of School</h3>
            <p>
                <!--<img src="assets/front_end_assets/images/about.jpg" alt="" class="img-rounded pull-right" width="300">-->
            </p>
            <?php while ($about_us_info = mysqli_fetch_assoc($query_result3)) { ?>
                <p align="justify"><?php echo $about_us_info['article_description']; ?></p>
            <?php } ?>
            <h3>Our Achievements</h3>
            <?php while ($about_us_info = mysqli_fetch_assoc($query_result2)) { ?>
                <strong><?php echo $about_us_info['achievement_year']; ?></strong>
                <p align="justify"><?php echo $about_us_info['achievement_description']; ?></p>
            <?php } ?>
        </section>
        <aside class="col-sm-4 sidebar sidebar-right">
            <div class="panel">
                <h4>Latest News</h4>
                <?php while ($latest_news_info = mysqli_fetch_assoc($query_result4)) { ?>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="#"><?php echo $latest_news_info['news_title']; ?></a><br>
                            <span class="small text-muted"><?php echo $latest_news_info['news_description']; ?></span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </aside>
    </div>
</section>

<section class="team-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Our Team</h3>
                <br />
            </div>
        </div>
        <div class="row">
            <?php while ($teacher_info = mysqli_fetch_assoc($query_result)) { ?>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    Team Member 
                    <div class="team-member">
                        <div class="member-img">
                            <img class="img-responsive" src="assets/<?php echo $teacher_info['teacher_photo']; ?>" alt="">
                        </div>
                        Member Details 
                        <h4><?php echo $teacher_info['teacher_name']; ?></h4>
                        Designation 
                        <span class="pos"><?php echo $teacher_info['teacher_designation']; ?></span>
                        <div class="team-socials">
                            <a href="https://twitter.com/" target="_blank"><i title="tweeter" class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/" target="_blank"><i title="facebook" class="fa fa-facebook"></i></a>
                            <a href="https://dribbble.com/" target="_blank"><i title="dribbble" class="fa fa-dribbble"></i></a>
                            <a href="https://www.flickr.com" target="_blank"><i title="flickr" class="fa fa-flickr"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>