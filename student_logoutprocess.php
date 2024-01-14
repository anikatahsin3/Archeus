
<?php
include "db_connect.php";
session_start();

$logout_time = date("H:i:s");

$sql = "SELECT * FROM student";
$out = mysqli_query($conn, $sql);

// $sql2 = "SELECT * FROM teacher";
// $out2 = mysqli_query($conn, $sql2);

// $row = mysqli_fetch_assoc($out);
// $row2 = mysqli_fetch_assoc($out2);

if(isset($_SESSION['st_user']) && !empty($_SESSION['st_user']))
{
    $suser = $_SESSION['st_user'];
    unset($_SESSION['st_user']); ///deleting the session stored value
    session_destroy();

    date_default_timezone_set('Asia/Dhaka');
    $logout_date = date('y-m-d g:i:s');

    $sql1="UPDATE student_log SET stlog_logout_date_time='$logout_date' WHERE st_username='$suser' ";
    $logouttime = $conn->query($sql1);
    
    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";

}
else{
    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";
}
?>