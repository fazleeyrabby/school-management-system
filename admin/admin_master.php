<?php
    session_start();
    ob_start();
    $admin_id = $_SESSION['admin_id'];
    if ($admin_id == NULL) {
        header('Location:index.php');
    }
    require '../classes/super_admin.php';
    $obj_sup_admin = new Super_admin();


    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'logout') {
            $obj_sup_admin->logout();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="../assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/admin_assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="../assets/admin_assets/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="../assets/admin_assets/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="img/favicon.ico">
        <script>
            function check_delete_info() {
                var check = confirm('Are you sure to delete this');
                if (check) {
                    return true;
                } else {
                    return false;
                }

            }
        </script>
    </head>

    <body>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php"><span>Metro</span></a>

                    <!-- start: Header Menu -->
                    <?php include './includes/admin_header.php'; ?>
                    <!-- start: Header -->

                    <div class="container-fluid-full">
                        <div class="row-fluid">

                            <!-- start: Main Menu -->
                            <?php include './includes/admin_sidebar.php'; ?>
                            <!-- end: Main Menu -->

                            <noscript>
                            <div class="alert alert-block span10">
                                <h4 class="alert-heading">Warning!</h4>
                                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                            </div>
                            </noscript>

                            <!-- start: Content -->
                            <div id="content" class="span10">
                                <?php
                                if (isset($admin_master)) {
                                    switch ($admin_master) {
                                        case 'category':
                                            include './pages/category_content.php';
                                            break;
                                        case 'manage_category':
                                            include './pages/manage_category_content.php';
                                            break;
                                        case 'edit_category':
                                            include './pages/edit_category_content.php';
                                            break;
                                        case 'article':
                                            include './pages/article_content.php';
                                            break;
                                        case 'manage_article':
                                            include './pages/manage_article_content.php';
                                            break;
                                        case 'edit_article':
                                            include './pages/edit_article_content.php';
                                            break;
                                        case 'teacher':
                                            include './pages/teacher_content.php';
                                            break;
                                        case 'manage_teacher':
                                            include './pages/manage_teacher_content.php';
                                            break;
                                        case 'edit_teacher':
                                            include './pages/edit_teacher_content.php';
                                            break;
                                        case 'managing_committee':
                                            include './pages/managing_committee_content.php';
                                            break;
                                        case 'manage_managing_committee':
                                            include './pages/manage_managing_committee_content.php';
                                            break;
                                        case 'edit_committee':
                                            include './pages/edit_committee_content.php';
                                            break;
                                        case 'slider_image':
                                            include './pages/slider_image_content.php';
                                            break;
                                        case 'manage_slider_image':
                                            include './pages/manage_slider_image_content.php';
                                            break;
                                        case 'edit_slider_image':
                                            include './pages/edit_slider_image_content.php';
                                            break;
                                        case 'address':
                                            include './pages/address_content.php';
                                            break;
                                        case 'manage_address':
                                            include './pages/manage_address_content.php';
                                            break;
                                        case 'staff':
                                            include './pages/staff_content.php';
                                            break;
                                        case 'manage_staff':
                                            include './pages/manage_staff_content.php';
                                            break;
                                        case 'up_comming_course':
                                            include './pages/up_comming_courses_content.php';
                                            break;
                                        case 'manage_upcomming-courses':
                                            include './pages/manage_up_comming_courses_content.php';
                                            break;
                                        case 'edit_upcomming_courses':
                                            include './pages/edit_up_comming_courses_content.php';
                                            break;
                                        case 'school_information':
                                            include './pages/school_information_content.php';
                                            break;
                                        case 'manage_school_info':
                                            include './pages/manage_school_info_content.php';
                                            break;
                                        case 'edit_school_info':
                                            include './pages/edit_school_info_content.php';
                                            break;
                                        case 'result_jsc':
                                            include './pages/result_jsc-content.php';
                                            break;
                                        case 'manage_result_jsc':
                                            include './pages/manage_result_jsc_content.php';
                                            break;
                                        case 'edit_result_jsc':
                                            include './pages/edit_result_jsc_info_content.php';
                                            break;
                                        case 'result_hsc':
                                            include './pages/result_hsc_content.php';
                                            break;
                                        case 'manage_result_ssc':
                                            include './pages/manage_result_ssc_content.php';
                                            break;
                                        case 'edit_result_ssc':
                                            include './pages/edit_result_ssc_content.php';
                                            break;
                                        case 'student':
                                            include './pages/student_content.php';
                                            break;
                                        case 'manage_student':
                                            include './pages/manage_student_content.php';
                                            break;
                                        case 'about_us':
                                            include './pages/about_us_content.php';
                                            break;
                                        case 'latest_news':
                                            include './pages/latest_news_content.php';
                                            break;
                                        case 'box':
                                            include './pages/box_content.php';
                                            break;
                                        case 'addmission':
                                            include './pages/addmission_content.php';
                                            break;
                                        case 'browser_category':
                                            include './pages/browser_category_content.php';
                                            break;
                                    }
                                } else {
                                    include './pages/home_content.php';
                                }
                                ?>
                                <!-- end: Content -->
                            </div>
                        </div><!--/#content.span10-->
                    </div><!--/fluid-row-->

                    <div class="modal hide fade" id="myModal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h3>Settings</h3>
                        </div>
                        <div class="modal-body">
                            <p>Here settings can be configured...</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn" data-dismiss="modal">Close</a>
                            <a href="#" class="btn btn-primary">Save changes</a>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!--footer-->
                    <?php include './includes/admin_footer.php'; ?>

                    <!-- start: JavaScript-->

                    <script src="../assets/admin_assets/js/jquery-1.9.1.min.js"></script>
                    <script src="../assets/admin_assets/js/jquery-migrate-1.0.0.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery-ui-1.10.0.custom.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.ui.touch-punch.js"></script>

                    <script src="../assets/admin_assets/js/modernizr.js"></script>

                    <script src="../assets/admin_assets/js/bootstrap.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.cookie.js"></script>

                    <script src='../assets/admin_assets/js/fullcalendar.min.js'></script>

                    <script src='../assets/admin_assets/js/jquery.dataTables.min.js'></script>

                    <script src="../assets/admin_assets/js/excanvas.js"></script>
                    <script src="../assets/admin_assets/js/jquery.flot.js"></script>
                    <script src="../assets/admin_assets/js/jquery.flot.pie.js"></script>
                    <script src="../assets/admin_assets/js/jquery.flot.stack.js"></script>
                    <script src="../assets/admin_assets/js/jquery.flot.resize.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.chosen.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.uniform.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.cleditor.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.noty.js"></script>

                    <script src="../assets/admin_assets/js/jquery.elfinder.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.raty.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.iphone.toggle.js"></script>

                    <script src="../assets/admin_assets/js/jquery.uploadify-3.1.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.gritter.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.imagesloaded.js"></script>

                    <script src="../assets/admin_assets/js/jquery.masonry.min.js"></script>

                    <script src="../assets/admin_assets/js/jquery.knob.modified.js"></script>

                    <script src="../assets/admin_assets/js/jquery.sparkline.min.js"></script>

                    <script src="../assets/admin_assets/js/counter.js"></script>

                    <script src="../assets/admin_assets/js/retina.js"></script>

                    <script src="../assets/admin_assets/js/custom.js"></script>
                    <!-- end: JavaScript-->

                    </body>
                    </html>
