<script>
    var xmlhttp=new XMLHttpRequest();
    function ajax_email_check(given_email,objID){
        //alert(given_email);
        var server_page='email_check.php?email='+given_email;
        xmlhttp.open('GET',server_page);
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById(objID).innerHTML=xmlhttp.responseText;
                if(xmlhttp.responseText=='This email already exits'){
                   document.getElementById('sub_btn').disabled=true; 
                }else{
                     document.getElementById('sub_btn').disabled=false;
                }
            }
        }
        xmlhttp.send(null);
    }
</script>
<?php
    if(isset($_POST['btn'])){
        $message=$obj_app->save_contact_us_info($_POST);
    }
   $query_result=$obj_app->select_all_address();
?>
<header id="head" class="secondary">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</header>


<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="section-title">Your Message</h3>
            
            <h4 align="center">
                <?php
                    if(isset($message)) {echo $message;}?></h4>
            <form class="form-light mt-20" role="form" action="" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your name" required="">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" onblur="ajax_email_check(this.value,'res');" class="form-control" placeholder="Email address" required="">
                            <span id="res"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone number" required="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Write you message here..." style="height:100px;" required=""></textarea>
                </div>
                <button type="submit" name="btn" id="sub_btn" class="btn btn-two">Send message</button><p><br/></p>
            </form>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="section-title">Office Address</h3>
                    <?php while($address_info=  mysqli_fetch_assoc($query_result)) {?>
                    <div class="contact-info">
                        <h5>Address</h5>
                        <p><?php echo $address_info['address'];?></p>

                        <h5>Email</h5>
                        <p><?php echo $address_info['email'];?></p>

                        <h5>Phone</h5>
                        <p><?php echo $address_info['phone'];?></p>
                    </div>
                    <?php }?>
                </div> 
            </div> 						
        </div>
    </div>
</div>
<!-- /container -->