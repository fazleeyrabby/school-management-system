<?php
    require './classes/application.php';
    $obj_app=new Application();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="free-educational-responsive-web-template-webEdu">
        <meta name="author" content="webThemez.com">
        <title>School Management System</title>
        <link rel="favicon" href="assets/front_end_assets/images/favicon.png">
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="assets/front_end_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/front_end_assets/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="assets/front_end_assets/css/bootstrap-theme.css" media="screen"> 
        <link rel="stylesheet" href="assets/front_end_assets/css/style.css">
        <link rel='stylesheet' id='camera-css'  href='assets/front_end_assets/css/camera.css' type='text/css' media='all'> 
    </head>
    <body>
        <!-- Header  -->
        <?php include './include/header.php'; ?>
        <!-- /Header -->
        
       <!--home content-->
       <?php 
            if(isset($pages)){
                switch ($pages){
                    case 'about':
                        include './pages/about_content.php';
                        break;
//                    case 'courses':
//                        include './pages/courses_content.php';
//                        break;
                    case 'teachers':
                        include './pages/teachers_content.php';
                        break;
                    case 'committee':
                        include './pages/committee_content.php';
                        break;
                    case 'staff':
                        include './pages/staff_content.php';
                        break;
                    case 'result':
                        include './pages/result_content.php';
                        break;
                    case 'school_info':
                        include './pages/school_info_content.php';
                        break;
                    case 'contact':
                        include './pages/contact_content.php';
                        break;
                    case 'class_nine':
                        include './pages/class_nine_content.php';
                        break;
                    case 'class_ten':
                        include './pages/class_ten_content.php';
                        break;
                    case 'class_eight':
                        include './pages/class_eight_content.php';
                        break;
                }
            }else{
                include './pages/home_content.php';
            }
       ?>
       <!--home content end-->

        <!--footer-->
        <?php include './include/footer.php';?>
        <!--footer end-->

        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src="assets/front_end_assets/js/modernizr-latest.js"></script> 
        <script type='text/javascript' src='assets/front_end_assets/js/jquery.min.js'></script>
        <script type='text/javascript' src='assets/front_end_assets/js/fancybox/jquery.fancybox.pack.js'></script>

        <script type='text/javascript' src='assets/front_end_assets/js/jquery.mobile.customized.min.js'></script>
        <script type='text/javascript' src='assets/front_end_assets/js/jquery.easing.1.3.js'></script> 
        <script type='text/javascript' src='assets/front_end_assets/js/camera.min.js'></script> 
        <script src="assets/front_end_assets/js/bootstrap.min.js"></script> 
        <script src="assets/front_end_assets/js/custom.js"></script>
        <script>
            jQuery(function () {
                jQuery('#camera_wrap_4').camera({
                    transPeriod: 500,
                    time: 3000,
                    height: '600',
                    loader: 'false',
                    pagination: true,
                    thumbnails: false,
                    hover: false,
                    playPause: false,
                    navigation: false,
                    opacityOnGrid: false,
                    imagePath: 'assets/front_end_assets/images/'
               });
            });
        </script>
    </body>
</html>
