<?php
$st_id = $_GET["st_id"];
$post_id = $_GET["post_id"];
$name  = $_GET["st_name"];

try {
    include "db_connect.php";
    $sqlquery = "INSERT INTO drop_cv(id, post_id, st_username,st_name) VALUES(NULL, '$post_id', '$st_id','$name')";
    mysqli_query($conn, $sqlquery);

    echo '<script>
             alert("Congrats! Your CV has been dropped into this post");
             </script>';
    echo "<script>location.assign('student_home.php')</script>";

} catch (PDOException $ex) {
    echo '<script>
                alert("Found error");
                window.location = "student_home.php";
        </script>';
}

?>