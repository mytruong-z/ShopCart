<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url(); ?>assets4/css/style.css" rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
    .container {
        width: 30%;
        margin-top: 100px;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: auto;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;

    }
    .form-but {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }
    .form_login{
        margin-top: 100px;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>
<body>
<div class="container">
    <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
    <form class="form_login" action="http://localhost/ShopCart/Login/login_auth" method="post">
        <img id="profile-img" class="profile-img-card" src="<?php echo base_url();?>assets/image/avatar_2x.png" />

        <?php echo (!empty($error) ? '<p class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$error.'</p>' : ''); ?>
        <div class="form-group has-feedback">
            <input type="text" id="inputUsername" class="form-control form-but" name="username" placeholder="Username" required="" value="">
            <?php echo form_error('username','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
            <input type="password" id="inputPassword" class="form-control form-but" name="password" placeholder="Password" required="">
            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
        <div id="remember" class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn-primary " value="Login"/>
            <?php
            echo '<label class="text-danger">'.$this->session->flashdata
                ("error").'</label>';
            ?>
        </div>
    </form>
    <p class="footInfo"><a href="#">Forgot the password? </a></p>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        loadProfile();
    });
    function getLocalProfile(callback){
        var profileImgSrc      = localStorage.getItem("PROFILE_IMG_SRC");
        var profileName        = localStorage.getItem("PROFILE_NAME");
        var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");
        if(profileName !== null
            && profileReAuthEmail !== null
            && profileImgSrc !== null) {
            callback(profileImgSrc, profileName, profileReAuthEmail);
        }
    }

    function loadProfile() {
        if(!supportsHTML5Storage()) { return false; }
        // we have to provide to the callback the basic
        // information to set the profile
        getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
            //changes in the UI
            $("#profile-img").attr("src",profileImgSrc);
            $("#profile-name").html(profileName);
            $("#reauth-email").html(profileReAuthEmail);
            $("#inputUsername").hide();
            $("#remember").hide();
        });
    }

    function supportsHTML5Storage() {
        try {
            return 'localStorage' in window && window['localStorage'] !== null;
        } catch (e) {
            return false;
        }
    }

    function testLocalStorageData() {
        if(!supportsHTML5Storage()) { return false; }
        localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
        localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
        localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
    }
</script>
</body>
</html>