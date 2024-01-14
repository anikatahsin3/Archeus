<?php
    include "db_connect.php";

    $tech_id = $_POST['tech_id'];
    $sql = "SELECT * from cv_tech_skill where tech_skill_id = $tech_id ";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);
    $status = $data['tech_skill_toggle'];

        if($status == '1'){

            $status = '0';
        }
        else{

            $status = '1';
        }
    $update = "UPDATE cv_tech_skill set tech_skill_toggle = '$status' where tech_skill_id = $tech_id";
    $result1 = mysqli_query($conn,$update);
    
    if($result1){

        echo $status;
    }

?>