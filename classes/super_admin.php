<?php

class Super_admin {

    protected $db_connect;

    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = 'wamp';
        $db_name = 'db_school_manage_system';
        $this->db_connect = mysqli_connect($host_name, $user_name, $password, $db_name);
        if (!$this->db_connect) {
            die('Connection Faild' . mysqli_errno($this->db_connect));
        }
    }

    public function save_category_info($data) {
        $sql = "INSERT INTO tbl_category (category_name,category_description,publication_status)VALUES('$data[category_name]','$data[category_description]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Category info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_category() {
        $sql = "SELECT * FROM tbl_category";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_category_by_id($category_id) {
        $sql = "UPDATE tbl_category SET publication_status=0 WHERE category_id='$category_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Category info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_category_by_id($category_id) {
        $sql = "UPDATE tbl_category SET publication_status=1 WHERE category_id='$category_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Category info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_category_info_by_id($category_id) {
        $sql = "SELECT * FROM tbl_category WHERE category_id='$category_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_category_info($data) {
        $sql = "UPDATE tbl_category SET category_name='$data[category_name]',category_description='$data[category_description]',publication_status='$data[publication_status]' WHERE category_id='$data[category_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "category info update successfully";
            header('Location:manage_category.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_category_by_id($category_id) {
        $sql = "DELETE FROM tbl_category WHERE category_id='$category_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Category info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_article_info($data) {
        $sql = "INSERT INTO tbl_article (article_title,article_description,publication_status)VALUES('$data[article_title]','$data[article_description]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'article info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_article() {
        $sql = "SELECT * FROM tbl_article";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_article_by_id($article_id) {
        $sql = "UPDATE tbl_article SET publication_status=0 WHERE article_id='$article_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Article info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_article_by_id($article_id) {
        $sql = "UPDATE tbl_article SET publication_status=1 WHERE article_id='$article_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Article info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_article_info_by_id($article_id) {
        $sql = "SELECT * FROM tbl_article WHERE article_id='$article_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_article_info($data) {
        $sql = "UPDATE tbl_article SET article_title='$data[article_title]',article_description='$data[article_description]',publication_status='$data[publication_status]' WHERE article_id='$data[article_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "Article info update successfully";
            header('Location:manage_article.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_article_by_id($article_id) {
        $sql = "DELETE FROM tbl_article WHERE article_id='$article_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Article info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_teacher_info($data) {
        $directory = '../assets/admin_assets/teacher_photo/'; //forword / means folder er modde doka 
        $target_file = $directory . $_FILES['teacher_photo']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['teacher_photo']['size'];
        $image = getimagesize($_FILES['teacher_photo']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {                   //if image double 
                echo 'This image is already exist';
                exit();
            } else {                                                   //if image new
                if ($file_size > 5242880) {                   //if image size is exceed than the givenvalue
                    echo 'File size is too large. Please select a file within 5MB';
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die("File type is not valid");
                    } else {
                        move_uploaded_file($_FILES['teacher_photo']['tmp_name'], $target_file);  //to upload image
                        $sql = "INSERT INTO tbl_teacher(teacher_name,teacher_designation,teacher_phone_number,teacher_photo,publication_status) VALUES ('$data[teacher_name]','$data[teacher_designation]','$data[teacher_phone_number]','$target_file','$data[publication_status]')";
                        if (mysqli_query($this->db_connect, $sql)) {
                            $message = "Product information create Successfully";
                            return $message;
                        } else {
                            die('Query Problem' . mysqli_error($this->db_connect));
                        }
                    }
                }
            }
        } else {
            echo 'This is not a image.';
        }
    }

    public function select_all_teacher() {
        $sql = "SELECT * FROM tbl_teacher";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_teacher_by_id($teacher_id) {
        $sql = "UPDATE tbl_teacher SET publication_status=0 WHERE teacher_id='$teacher_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Teacher info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_teacher_by_id($teacher_id) {
        $sql = "UPDATE tbl_teacher SET publication_status=1 WHERE teacher_id='$teacher_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Teacher info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_teacher_info_by_id($teacher_id) {
        $sql = "SELECT * FROM tbl_teacher WHERE teacher_id='$teacher_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_teacher_info($data) {
        $sql = "UPDATE tbl_teacher SET teacher_name='$data[teacher_name]',teacher_designation='$data[teacher_designation]',teacher_phone_number='$data[teacher_phone_number]',teacher_photo='$data[teacher_photo]',publication_status='$data[publication_status]' WHERE teacher_id='$data[teacher_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "Teacher info update successfully";
            header('Location:manage_teacher.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_teacher_by_id($teacher_id) {
        $sql = "DELETE FROM tbl_teacher WHERE teacher_id='$teacher_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "teacher info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_managing_committee_info($data) {
        $directory = '../assets/admin_assets/committee_photo/'; //forword / means folder er modde doka 
        $target_file = $directory . $_FILES['committee_photo']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['committee_photo']['size'];
        $image = getimagesize($_FILES['committee_photo']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {                   //if image double 
                echo 'This image is already exist';
                exit();
            } else {                                                   //if image new
                if ($file_size > 5242880) {                   //if image size is exceed than the givenvalue
                    echo 'File size is too large. Please select a file within 5MB';
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die("File type is not valid");
                    } else {
                        move_uploaded_file($_FILES['committee_photo']['tmp_name'], $target_file);  //to upload image
                        $sql = "INSERT INTO tbl_managing_committee(committee_name,committee_designation,committee_number,committee_photo,publication_status) VALUES ('$data[committee_name]','$data[committee_designation]','$data[committee_number]','$target_file','$data[publication_status]')";
                        if (mysqli_query($this->db_connect, $sql)) {
                            $message = "Committe information save Successfully";
                            return $message;
                        } else {
                            die('Query Problem' . mysqli_error($this->db_connect));
                        }
                    }
                }
            }
        } else {
            echo 'This is not a image.';
        }
    }

    public function select_all_committee() {
        $sql = "SELECT * FROM tbl_managing_committee";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_committee_by_id($committee_id) {
        $sql = "UPDATE tbl_managing_committee SET publication_status=0 WHERE committee_id='$committee_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Committee info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_committee_by_id($committee_id) {
        $sql = "UPDATE tbl_managing_committee SET publication_status=1 WHERE committee_id='$committee_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "committee info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_committee_info_by_id($committee_id) {
        $sql = "SELECT * FROM tbl_managing_committee WHERE committee_id='$committee_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_committee_info($data) {
        $sql = "UPDATE tbl_managing_committee SET committee_name='$data[committee_name]',committee_designation='$data[committee_designation]',committee_number='$data[committee_number]',committee_photo='$data[committee_photo]',publication_status='$data[publication_status]' WHERE committee_id='$data[committee_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "committee info update successfully";
            header('Location:manage_managing_committee.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_committee_by_id($committee_id) {
        $sql = "DELETE FROM tbl_managing_committee WHERE committee_id='$committee_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "committee info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_slider_image_info($data) {
        $directory = '../assets/admin_assets/slider_image/'; //forword / means folder er modde doka 
        $target_file = $directory . $_FILES['slider_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['slider_image']['size'];
        $image = getimagesize($_FILES['slider_image']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {                   //if image double 
                echo 'This image is already exist';
                exit();
            } else {                                                   //if image new
                if ($file_size > 5242880) {                   //if image size is exceed than the givenvalue
                    echo 'File size is too large. Please select a file within 5MB';
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die("File type is not valid");
                    } else {
                        move_uploaded_file($_FILES['slider_image']['tmp_name'], $target_file);  //to upload image
                        $sql = "INSERT INTO tbl_slider_image(image_title,slider_image,publication_status) VALUES ('$data[image_title]','$target_file','$data[publication_status]')";
                        if (mysqli_query($this->db_connect, $sql)) {
                            $message = "Slider Image save Successfully";
                            return $message;
                        } else {
                            die('Query Problem' . mysqli_error($this->db_connect));
                        }
                    }
                }
            }
        } else {
            echo 'This is not a image.';
        }
    }

    public function select_all_slider_image() {
        $sql = "SELECT * FROM tbl_slider_image";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_slider_image_by_id($image_id) {
        $sql = "UPDATE tbl_slider_image SET publication_status=0 WHERE image_id='$image_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Image info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_slider_image_by_id($image_id) {
        $sql = "UPDATE tbl_slider_image SET publication_status=1 WHERE image_id='$image_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Image info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_slider_image_info_by_id($image_id) {
        $sql = "SELECT * FROM tbl_slider_image WHERE image_id='$image_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_slider_image_info($data) {
        $sql = "UPDATE tbl_slider_image SET image_title='$data[image_title]',publication_status='$data[publication_status]' WHERE image_id='$data[image_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "Image info update successfully";
            header('Location:manage_slider_image.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_slider_image_by_id($image_id) {
        $sql = "DELETE FROM tbl_slider_image WHERE image_id='$image_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Image info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_address_info($data) {
        $sql = "INSERT INTO tbl_address (address,email,phone,publication_status)VALUES('$data[address]','$data[email]','$data[phone]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Address info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_staff_info($data) {
        $directory = '../assets/admin_assets/staff_photo/'; //forword / means folder er modde doka 
        $target_file = $directory . $_FILES['staff_photo']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['staff_photo']['size'];
        $image = getimagesize($_FILES['staff_photo']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {                   //if image double 
                echo 'This image is already exist';
                exit();
            } else {                                                   //if image new
                if ($file_size > 5242880) {                   //if image size is exceed than the givenvalue
                    echo 'File size is too large. Please select a file within 5MB';
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die("File type is not valid");
                    } else {
                        move_uploaded_file($_FILES['staff_photo']['tmp_name'], $target_file);  //to upload image
                        $sql = "INSERT INTO tbl_staff (staff_name,staff_designation,staff_number,staff_photo,publication_status)VALUES('$data[staff_name]','$data[staff_designation]','$data[staff_number]','$target_file','$data[publication_status]')";
                        if (mysqli_query($this->db_connect, $sql)) {
                            $message = "Staff info save Successfully";
                            return $message;
                        } else {
                            die('Query Problem' . mysqli_error($this->db_connect));
                        }
                    }
                }
            }
        } else {
            echo 'This is not a image.';
        }
    }

    public function save_upcomming_courses_info($data) {
        $sql = "INSERT INTO tbl_upcomming_courses (title,name,publication_status)VALUES('$data[title]','$data[name]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Up comming info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_upcomming_courses() {
        $sql = "SELECT * FROM tbl_upcomming_courses";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_upcomming_courses_by_id($upcomming_courses_id) {
        $sql = "UPDATE tbl_upcomming_courses SET publication_status=0 WHERE upcomming_courses_id='$upcomming_courses_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Up-Comming info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_upcomming_courses_by_id($upcomming_courses_id) {
        $sql = "UPDATE tbl_upcomming_courses SET publication_status=1 WHERE upcomming_courses_id='$upcomming_courses_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Category info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_upcomming_courses_info_by_id($upcomming_courses_id) {
        $sql = "SELECT * FROM tbl_upcomming_courses WHERE upcomming_courses_id='$upcomming_courses_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_upcomming_courses_info($data) {
        $sql = "UPDATE tbl_upcomming_courses SET title='$data[title]',name='$data[name]',publication_status='$data[publication_status]' WHERE upcomming_courses_id='$data[upcomming_courses_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "Upcomming Courses info update successfully";
            header('Location:manage_up_comming_courses.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_upcomming_courses_by_id($upcomming_courses_id) {
        $sql = "DELETE FROM tbl_upcomming_courses WHERE upcomming_courses_id='$upcomming_courses_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "Up-Comming info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_school_info($data) {
        $sql = "INSERT INTO tbl_school_info (recognition,groups,land,play_ground,sanitation,laboratory,managing_committee,managing_duration,total_no_of_students,computer_lab,computer_lab_pc,number_of_employee,teacher,staff,co_curricular_activity,sports,publication_status) VALUES ('$data[recognition]','$data[groups]','$data[land]','$data[play_ground]','$data[sanitation]','$data[laboratory]','$data[managing_committee]','$data[managing_duration]','$data[total_no_of_students]','$data[computer_lab]','$data[computer_lab_pc]','$data[number_of_employee]','$data[teacher]','$data[staff]','$data[co_curricular_activity]','$data[sports]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'School info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_school_info() {
        $sql = "SELECT * FROM tbl_school_info";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_school_info_by_id($school_info_id) {
        $sql = "UPDATE tbl_school_info SET publication_status=0 WHERE school_info_id='$school_info_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "School info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_school_info_by_id($school_info_id) {
        $sql = "UPDATE tbl_school_info SET publication_status=1 WHERE school_info_id='$school_info_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "School info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_school_info_by_id($school_info_id) {
        $sql = "SELECT * FROM tbl_school_info WHERE school_info_id='$school_info_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_school_info($data) {
        $sql = "UPDATE tbl_school_info SET recognitation='$data[recognitation]',total_no_of_students='$data[total_no_of_students]',teacher='$data[teacher]',teacher='$data[teacher]',number_of_employee='$data[number_of_employee]',computer_lab_pc='$data[computer_lab_pc]',publication_status='$data[publication_status]' WHERE school_info_id='$data[school_info_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "school info update successfully";
            header('Location:school_info.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_achool_info_by_id($school_info_id) {
        $sql = "DELETE FROM tbl_school_info WHERE school_info_id='$school_info_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "School info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_jsc_result($data) {
        $sql = "INSERT INTO tbl_jsc_result (year,total_exam,app,gpa_five,gpa_four,gpa_three_point_five,gpa_three,gpa_two,gpa_one,total_pass,percentice_of_pass,publication_status)VALUES('$data[year]','$data[total_exam]','$data[app]','$data[gpa_five]','$data[gpa_four]','$data[gpa_three_point_five]','$data[gpa_three]','$data[gpa_two]','$data[gpa_one]','$data[total_pass]','$data[percentice_of_pass]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'JSC result info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_result_jsc_info() {
        $sql = "SELECT * FROM 	tbl_jsc_result";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_manage_result_jsc_info_by_id($jsc_result_id) {
        $sql = "UPDATE 	tbl_jsc_result SET publication_status=0 WHERE jsc_result_id='$jsc_result_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "result info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_manage_result_jsc_info_by_id($jsc_result_id) {
        $sql = "UPDATE 	tbl_jsc_result SET publication_status=1 WHERE jsc_result_id='$jsc_result_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "result info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_result_jsc_info_by_id($jsc_result_id) {
        $sql = "SELECT * FROM tbl_jsc_result WHERE jsc_result_id='$jsc_result_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_result_jsc_info($data) {
        $sql = "UPDATE tbl_jsc_result SET year='$data[year]',total_exam='$data[total_exam]',app='$data[app]',gpa_five='$data[gpa_five]',gpa_four='$data[gpa_four]',gpa_three_point_five='$data[gpa_three_point_five]',gpa_two='$data[gpa_two]',gpa_one='$data[gpa_one]',total_pass='$data[total_pass]',percentice_of_pass='$data[percentice_of_pass]',publication_status='$data[publication_status]' WHERE jsc_result_id='$data[jsc_result_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "result Jsc info update successfully";
            header('Location:manage_result_jsc.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_result_jsc_info_by_id($jsc_result_id) {
        $sql = "DELETE FROM tbl_jsc_result WHERE jsc_result_id='$jsc_result_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "result info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_ssc_result($data) {
        $sql = "INSERT INTO tbl_hsc_result (year,group1,total_exam,app,gpa_five,gpa_four,gpa_three_point_five,gpa_three,gpa_two,gpa_one,total_pass,percentice_of_pass,publication_status)VALUES('$data[year]','$data[group1]','$data[total_exam]','$data[app]','$data[gpa_five]','$data[gpa_four]','$data[gpa_three_point_five]','$data[gpa_three]','$data[gpa_two]','$data[gpa_one]','$data[total_pass]','$data[percentice_of_pass]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'SSC result info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_result_ssc_info() {
        $sql = "SELECT * FROM 	tbl_hsc_result";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_manage_result_ssc_info_by_id($ssc_result_id) {
        $sql = "UPDATE 	tbl_hsc_result SET publication_status=0 WHERE ssc_result_id='$ssc_result_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "result info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_manage_result_ssc_info_by_id($ssc_result_id) {
        $sql = "UPDATE 	tbl_hsc_result SET publication_status=1 WHERE ssc_result_id='$ssc_result_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "result info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_result_ssc_info_by_id($ssc_result_id) {
        $sql = "SELECT * FROM tbl_hsc_result WHERE ssc_result_id='$ssc_result_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_result_ssc_info($data) {
        $sql = "UPDATE tbl_hsc_result SET year='$data[year]',group1='$data[group1]',total_exam='$data[total_exam]',app='$data[app]',gpa_five='$data[gpa_five]',gpa_four='$data[gpa_four]',gpa_three_point_five='$data[gpa_three_point_five]',gpa_two='$data[gpa_two]',gpa_one='$data[gpa_one]',total_pass='$data[total_pass]',percentice_of_pass='$data[percentice_of_pass]',publication_status='$data[publication_status]' WHERE ssc_result_id='$data[ssc_result_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "result ssc info update successfully";
            header('Location:manage_result_ssc.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_result_ssc_info_by_id($ssc_result_id) {
        $sql = "DELETE FROM tbl_hsc_result WHERE ssc_result_id='$ssc_result_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "result info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_student_info($data) {
        $directory = '../assets/admin_assets/student_photo/'; //forword / means folder er modde doka 
        $target_file = $directory . $_FILES['student_photo']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_size = $_FILES['student_photo']['size'];
        $image = getimagesize($_FILES['student_photo']['tmp_name']);
        if ($image) {
            if (file_exists($target_file)) {                   //if image double 
                echo 'This image is already exist';
                exit();
            } else {                                                   //if image new
                if ($file_size > 5242880) {                   //if image size is exceed than the givenvalue
                    echo 'File size is too large. Please select a file within 5MB';
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png') {
                        die("File type is not valid");
                    } else {
                        move_uploaded_file($_FILES['student_photo']['tmp_name'], $target_file);  //to upload image
                        $sql = "INSERT INTO student(student_class,student_name,group1,shift,roll,session,photo,publication_status) VALUES ('$data[student_class]','$data[student_name]','$data[group1]','$data[shift]','$data[roll]','$data[session]','$target_file','$data[publication_status]')";
                        if (mysqli_query($this->db_connect, $sql)) {
                            $message = "student information create Successfully";
                            return $message;
                        } else {
                            die('Query Problem' . mysqli_error($this->db_connect));
                        }
                    }
                }
            }
        } else {
            echo 'This is not a image.';
        }
    }

    public function select_all_student() {
        $sql = "SELECT * FROM 	student";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function unpublished_student_by_id($student_id) {
        $sql = "UPDATE 	student SET publication_status=0 WHERE student_id='$student_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "student info unpublished successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function published_student_by_id($student_id) {
        $sql = "UPDATE 	student SET publication_status=1 WHERE student_id='$student_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "student info published successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_student_info_by_id($student_id) {
        $sql = "SELECT * FROM student WHERE student_id='$student_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function update_student_info($data) {
        $sql = "UPDATE student SET year='$data[year]',group1='$data[group1]',total_exam='$data[total_exam]',app='$data[app]',gpa_five='$data[gpa_five]',gpa_four='$data[gpa_four]',gpa_three_point_five='$data[gpa_three_point_five]',gpa_two='$data[gpa_two]',gpa_one='$data[gpa_one]',total_pass='$data[total_pass]',percentice_of_pass='$data[percentice_of_pass]',publication_status='$data[publication_status]' WHERE student_id='$data[student_id]'";
        if (mysqli_query($this->db_connect, $sql)) {
            //session_start();
            $_SESSION['message'] = "student info update successfully";
            header('Location:manage_student.php');
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function delete_student_by_id($student_id) {
        $sql = "DELETE FROM student WHERE student_id='$student_id'";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = "student info delete successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_about_us_info($data) {
        $sql = "INSERT INTO tbl_about_us (about_us_description,latest_news_description,achievement_year,achievement_description,publication_status)VALUES('$data[about_us_description]','$data[latest_news_description]','$data[achievement_year]','$data[achievement_description]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'About Us info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_latest_news_info($data) {
        $sql = "INSERT INTO latest_news (news_title,news_description,publication_status)VALUES('$data[news_title]','$data[news_description]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Latest News info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_box_info($data) {
        $sql = "INSERT INTO tbl_box (box_title,box_description,publication_status)VALUES('$data[box_title]','$data[box_description]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Box info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_admission_info($data) {
        $sql = "INSERT INTO tbl_admission(admission_title,admission_description,publication_status)VALUES('$data[admission_title]','$data[admission_description]','$data[publication_status]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'admission info save successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function logout() {
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_id']);
        header('Location:index.php');
    }

}
