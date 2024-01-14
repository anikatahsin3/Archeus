<?php
    include "db_connect.php";

    $s_id = $_POST['s_id'];
    $sql = "SELECT * from student where st_username= $s_id ";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);
    $status = $data['status'];

        if($status == '1'){

            $status = '0';
        }
        else{

            $status = '1';
        }
    $update = "UPDATE student set status = '$status' where st_username= $s_id";
    $result1 = mysqli_query($conn,$update);
    
    if($result1){

        echo $status;
    }

?>