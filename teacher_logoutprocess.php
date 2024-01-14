
<?php
include "db_connect.php";
session_start();

$logout_time = date("H:i:s");

$sql = "SELECT * FROM teacher";
$out = mysqli_query($conn, $sql);

if(isset($_SESSION['t_user']) && !empty($_SESSION['t_user']))
{
    $tuser = $_SESSION['t_user'];
    unset($_SESSION['t_user']); ///deleting the session stored value
    session_destroy();

    date_default_timezone_set('Asia/Dhaka');
    $logout_date = date('y-m-d g:i:s');

    $sql1="UPDATE teacher_log SET tlog_logout_date_time='$logout_date' WHERE t_username='$tuser' ";
    $logouttime = $conn->query($sql1);

    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";
    
}
else{
    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";
}
?>