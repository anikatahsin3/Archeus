<?php
 session_start();
 if(
    isset($_SESSION['st_user']) && !empty($_SESSION['st_user'])
 ){

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            //checking if the info are valid and not empty.
            if(
                !empty($_POST["post_title"]) && !empty($_POST["newpost"]) &&
                isset($_POST["post_title"]) && isset($_POST["newpost"])
            ){
                $id = $_SESSION['st_user'];
                //storing the informations in variables
                $tpost_title = $_POST["post_title"];
                $tpost_newpost = $_POST["newpost"];

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

                    $sqlquery1 = "SELECT * FROM student WHERE st_username = '$id'";

                    $infoget = mysqli_query($conn, $sqlquery1);
                    $info = mysqli_fetch_array($infoget,MYSQLI_ASSOC);

                    $name = $info['st_name'];


                    $sqlquery = "INSERT INTO post_student(stpost_id, st_username, st_name, stpost_title, stpost_desc, stpost_datetime) VALUES('$postID', '$id', '$name', '$tpost_title', '$tpost_newpost','$post_date')";
                    mysqli_query($conn, $sqlquery);


                    //after successful registration forwarding to login page
                    echo "<script>location.assign('student_thesis.php')</script>";
                }catch (PDOException $ex){
                    //if found error forward to register page
                    echo '<script>
                    alert("Oops!! Caught An Error");
                    </script>';
                    echo "<script>location.assign('student_thesis.php')</script>";
                }
            }else{
                //if any value is empty or invalid, then forward to register page again.
                    echo '<script>alert("You forgot to put your information in one of the fields. Check again");</script>';
                    echo"<script>location.assign('student_thesis.php')</script>";
            }
        }else{
            //forwarding to register page if not post method.
            echo '<script>
            alert("Not Post Method");
            </script>';
            echo "<script>location.assign('student_thesis.php')</scrpit>";
        }
}
else{
    ?>
        <script>location.assign('welcome.php')</script>
    <?php
}
?>
