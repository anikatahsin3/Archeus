<?php
    // $str = " tahsin 011 031";
    // echo $str;
    // $pattern = "/^011|^anika/i";
    // $pattern2 = "/011$|anika$/i";
    // echo "\n";
    // echo preg_match($pattern, $str);
    // echo  nl2br (" \n "); //for new line
    // echo preg_match($pattern2, $str);
    // echo  nl2br ("kings \n garden");

    // $str2 = "011182035";
    // $pat2 = "/\d+!/i";
    // echo $pat2;
    // echo preg_match($str2, $pat2);

    // $str = "need a memeber. ";
    // $pattern = "/ /i";
    // // echo preg_split($pattern, $str);
    // $a = preg_split($pattern, $str);

    // foreach($a as $x){
    //     echo $x;
    // }
try{
    include "db_connect.php";

    $suser = '011182035';

    $sqlquery1="SELECT * FROM student WHERE st_username='$suser' ";
    $returnobj1=$conn->query($sqlquery1);
    $row = mysqli_fetch_assoc($returnobj1);

    echo $row['st_name'];

    date_default_timezone_set('Asia/Dhaka');
    $login_date = date('y-m-d g:i:s');

    $sqlquery2="INSERT INTO student_log(stlog_id,st_username,st_name,stlog_login_date_time) VALUES(NULL,'$suser','anika','$login_date') ";
    mysqli_query($conn, $sqlquery2);

    $sqlquery3="SELECT COUNT(*) FROM student";
    $result3 =mysqli_query($conn, $sqlquery3);
    $row3 = mysqli_fetch_assoc($result3);
    foreach($row3 as $x){
        echo $x;
    }

    echo "done";
}
catch(PDOException $ex){
    //if found error forward to register page
    echo '<script>
    alert("catch error");
    </script>';
   echo"<script>location.assign('test.php')</script>";
}
    
?>
