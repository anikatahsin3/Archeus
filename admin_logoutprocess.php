
<?php
session_start();

if(isset($_SESSION['ad_user']) && !empty($_SESSION['ad_user']))
{
    unset($_SESSION['ad_user']); ///deleting the session stored value
    session_destroy();
    
    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";
}
else{
    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";
}
?>