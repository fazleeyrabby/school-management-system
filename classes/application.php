<?php

class Application {

    private $db_connect;

    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'school-management-system';
        $this->db_connect = mysqli_connect($host_name, $user_name, $password, $db_name);
        if (!$this->db_connect) {
            die('Connection Faild' . mysqli_errno($this->db_connect));
        }
    }

    public function select_all_published_category_info() {
        $sql = "SELECT * FROM tbl_category WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_article_info() {
        $sql = "SELECT * FROM tbl_article WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_teachers_info() {
        $sql = "SELECT * FROM tbl_teacher WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_committee_info() {
        $sql = "SELECT * FROM tbl_managing_committee WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_slider_image_info() {
        $sql = "SELECT * FROM tbl_slider_image WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function save_contact_us_info($data) {
        $sql = "INSERT INTO tbl_contact_us (name,email,phone,subject,message)VALUES('$data[name]','$data[email]','$data[phone]','$data[subject]','$data[message]')";
        if (mysqli_query($this->db_connect, $sql)) {
            $message = 'Massage sent successfully';
            return $message;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_address() {
        $sql = "SELECT * FROM 	tbl_address WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_staff_info() {
        $sql = "SELECT * FROM tbl_staff WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_upcomming_courses_info() {
        $sql = "SELECT * FROM tbl_upcomming_courses WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_contact_info() {
        $sql = "SELECT * FROM tbl_address WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_school_info() {
        $sql = "SELECT * FROM tbl_school_info WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_jsc_result_info() {
        $sql = "SELECT * FROM tbl_jsc_result WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_ssc_result_info() {
        $sql = "SELECT * FROM tbl_hsc_result WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_student_eight_info() {
        $sql = "SELECT * FROM student WHERE student_class=0 AND publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_student_nine_info() {
        $sql = "SELECT * FROM student WHERE student_class=1 AND publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_student_ten_info() {
        $sql = "SELECT * FROM student WHERE student_class=2 AND publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_teacher_info() {
        $sql = "SELECT * FROM tbl_teacher LIMIT 4";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_committee_info() {
        $sql = "SELECT committee_name,committee_designation,committee_photo FROM tbl_managing_committee WHERE committee_name='MD.SAHABUDDIN' AND publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_about_us_info() {
        $sql = "SELECT * FROM tbl_about_us WHERE publication_status=1 ORDER BY about_us_id DESC";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_article_info() {
        $sql = "SELECT * FROM tbl_article  LIMIT 2";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_latest_news_info() {
        $sql = "SELECT * FROM latest_news WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_box_info() {
        $sql = "SELECT * FROM tbl_box WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function contact_form_email_check($email_address) {
        $sql = "SELECT email FROM tbl_contact_us WHERE email='$email_address'";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_all_category_info() {
        $sql = "SELECT * FROM tbl_category WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

    public function select_admission_info() {
        $sql = "SELECT * FROM tbl_admission WHERE publication_status=1";
        if (mysqli_query($this->db_connect, $sql)) {
            $query_result = mysqli_query($this->db_connect, $sql);
            return $query_result;
        } else {
            die('Query Problem' . mysqli_error($this->db_connect));
        }
    }

}
