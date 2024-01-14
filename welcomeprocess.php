
<?php
/*
1.WE will receive data of login information here
2.IF the data is valid, we will check if it's admin, teacher or student.
    2.1. If the data exists in our database then they will visit their profile page.
3.Else forward to login page.
4.we will only need username and password to login.
user,pass
*/
//checking if the info are valid and not empty.
if (
    !empty($_POST['user']) && !empty($_POST['pass']) &&
    isset($_POST['user']) && isset($_POST['pass'])
) {
    //storing the informations in variables     
    $username = $_POST["user"];
    $pass = $_POST["pass"];

    /*trying to access database and check if the login information are valid.*/
    try {
        //creating connection with EMed database
        $conn1 = new PDO('mysql:host=localhost:3306;dbname=archeus;', 'root', '');
        $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        include "db_connect.php";

        //database code executing
        $sqlquery1 = "SELECT * FROM student WHERE st_username='$username' AND st_pass='$pass' ";
        $returnobj1 = $conn1->query($sqlquery1);

        $sqlquery2 = "SELECT * FROM teacher WHERE t_username='$username' AND t_pass='$pass' ";
        $returnobj2 = $conn1->query($sqlquery2);

        $sqlquery3 = "SELECT * FROM admin WHERE ad_username='$username' AND ad_pass='$pass' ";
        $returnobj3 = $conn1->query($sqlquery3);

        //email verification 
        $getmail="SELECT st_email FROM student WHERE st_username='$username' AND st_pass='$pass' ";
        $mailget=mysqli_query($conn, $getmail);
        $row = mysqli_fetch_assoc($mailget);
        $email = $row['st_email'];

        $result = mysqli_query($conn, $sqlquery1);
        $user = mysqli_fetch_object($result); 



        if ($returnobj1->rowCount() == 1) {
            //it means this login information belongs to a student and is valid.
            //login successful
            session_start();
            $_SESSION['st_user'] = $username;

            date_default_timezone_set('Asia/Dhaka');
            $login_date = date('y-m-d g:i:s');

            $sql1 = "UPDATE student_log SET stlog_login_date_time='$login_date', stlog_logout_date_time='--' WHERE st_username='$username' ";
            $logintime = $conn1->query($sql1);

            // //forwarding to home page
            // echo "<script>location.assign('email-verification.php.php')</script>";

            if ($user->email_verified_at == null)
            {
                header("Location: email-verification.php?email=" . $email);
            }
            else{
                echo "<script>location.assign('student_home.php')</script>";

            }
        }
        
           
            
        else if ($returnobj2->rowCount() == 1) {
            //it means this login information belongs to a teacher and is valid.
            //login successful
            session_start();
            $_SESSION['t_user'] = $username;

            date_default_timezone_set('Asia/Dhaka');
            $login_date = date('y-m-d g:i:s');

            $sql1 = "UPDATE teacher_log SET tlog_login_date_time='$login_date', tlog_logout_date_time='--' WHERE t_username='$username' ";
            $logintime = $conn1->query($sql1);

            //forwarding to home page
            echo "<script>location.assign('teacher_home.php')</script>";
        } else if ($returnobj3->rowCount() == 1) {
            //it means this login information belongs to a admin and is valid.
            //login successful
            session_start();
            $_SESSION['ad_user'] = $username;

            //forwarding to home page
            echo "<script>location.assign('admin_hp.php')</script>";
        } else {
            //the info is invalid and returning to login page
            echo '<script>
                 alert("Sorry! Your User or Password does not match");
                 </script>';
            echo "<script>location.assign('welcome.php')</script>";
        }  
        
    } catch (PDOException $ex) {
        //if found error forward to login page
        // echo"<script>location.assign('welcome.php')</script>";
        echo '<script>
            alert("Found error");
            window.location = "welcome.php";
            </script>';
    }
} else {
    //if any value is empty or invalid, then forward to login page again.
    //  echo"<script>location.assign('welcome.php')</script>";

    if (empty($username)) {
        echo '<script>
            alert("ERROR! , User ID required..");
            window.location = "welcome.php";
            </script>';
    } else if (empty($pass)) {
        echo '<script>
            alert("ERROR! Password required..");
            window.location = "welcome.php";
            </script>';
    }
}

?>