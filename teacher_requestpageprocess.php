<?php
include "db_connect.php";
$s_id = $_GET['data'];
$sk_id = $_GET['data1'];

$update = "UPDATE cv_tech_skill set tech_skill_verification = '1' where st_username= $s_id and tech_skill_name = $sk_id";
$result1 = mysqli_query($conn,$update);

?>