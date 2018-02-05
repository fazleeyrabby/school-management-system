<?php
$email_address=$_GET['email'];
require './classes/application.php';
$obj_app=new Application();
$query_result=$obj_app->contact_form_email_check($email_address);
$contact_email=mysqli_fetch_assoc($query_result);
if($contact_email){
    echo 'This email already exits';
}  else {
    echo 'Email available';
}