<?php
/*
Teacher's new post backend
*/
//post_title,newpost

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //checking if the info are valid and not empty.
    if(
        !empty($_POST["post_title"]) && !empty($_POST["newpost"]) &&
        isset($_POST["post_title"]) && isset($_POST["newpost"])
    ){
        //storing the informations in variables
        $tpost_title = $_POST["post_title"];
        $tpost_newpost = $_POST["newpost"];
        $skills = $_POST['skills'];

        /*trying to access database and store all the information there.*/
        try {
            //creating connection with Archeus database
            include "db_connect.php";

            $postID = uniqid();

            //every entry is valid and ready to be registered
            //database code executing
            //tpost_id,t_username,t_name,tpost_title,tpost_desc,tpost_datetime

            date_default_timezone_set('Asia/Dhaka');
            $post_date = date('y-m-d g:i:s');

            $sqlquery = "INSERT INTO post_teacher(tpost_id, t_username, t_name, tpost_title, tpost_desc, tpost_datetime) VALUES('$postID', 'AH', 'Abir Hasan', '$tpost_title', '$tpost_newpost','$post_date')";
            mysqli_query($conn, $sqlquery);

            
            //Splitting Tags array for database input:

            $arr = (explode(',',$skills));

            //Inserting tags into Database:

            for($i=0;$i<count($arr);$i++){
                // echo $arr[$i];
                $insert_query = "INSERT INTO tags_teacher (id, post_teacher_id, tag_name, created_at) VALUES (NULL,'$postID', '$arr[$i]','$post_date')";
                mysqli_query($conn, $insert_query);   
            }

            //after successful registration forwarding to login page
            echo "<script>location.assign('teacher_home.php')</script>";
        }catch (PDOException $ex){
            //if found error forward to register page
            echo '<script>
             alert("Oops!! Caught An Error");
             </script>';
            echo "<script>location.assign('teacher_home.php')</script>";
        }
    }else{
        //if any value is empty or invalid, then forward to register page again.
            echo '<script>alert("You forgot to put your information in one of the fields. Check again");</script>';
            echo"<script>location.assign('teacher_home.php')</script>";
    }
}else{
    //forwarding to register page if not post method.
    echo '<script>
    alert("Not Post Method");
    </script>';
    echo "<script>location.assign('teacher_home.php')</scrpit>";
}
