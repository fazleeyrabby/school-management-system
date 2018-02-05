<?php
   $query_result= $obj_app->select_all_article_info();
   $query_result1= $obj_app->select_all_slider_image_info();
   $query_result2= $obj_app->select_all_upcomming_courses_info();
   $query_result3= $obj_app->select_box_info();
   
?>
<header id="head">
    <div class="container">
        <div class="fluid_container">                       
            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                <?php while($slider_image_info=mysqli_fetch_assoc($query_result1)) {?>
                <div data-thumb="" data-src="assets/<?php echo $slider_image_info['slider_image'];?>">
                    <h2>We develop.</h2>
                </div> 
                <?php }?>
            </div><!-- #camera_wrap_3 -->
        </div><!-- .fluid_container -->
    </div>
</header>
<div class="container">
    <div class="row">
        <?php while($box_info=mysqli_fetch_assoc($query_result3)) {?>
        <div class="col-md-3">
            <div class="grey-box-icon b4">  
                <h4><?php echo $box_info['box_title'];?></h4>
                <p align="justify"><?php echo $box_info['box_description'];?></p>
                <p><a href="#"><em>Read More →</em></a></p>
            </div><!--grey box -->
        </div><!--/span3-->
        <?php }?>
    </div>
</div>
<section class="container">
    <div class="row">
        <div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About Us</h2></div> 
            <?php while($article_info=mysqli_fetch_assoc($query_result)){ ?>
            <p align="justify"><span><?php echo $article_info['article_description'];?></span></p>
           <?php }?>
            <a href="#" title="read more" class="btn-inline " target="_self">read more</a> </div>
        <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Up Coming Courses</h2></div> 
            <div class="list styled custom-list">
                <?php while($upcomming_courses_info=mysqli_fetch_assoc($query_result2)){ ?>
                <ul>
                    <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#"><?php echo $upcomming_courses_info['name'];?></a></li>             
                </ul>
                <?php }?>
            </div>
        </div>
    </div>
</section>