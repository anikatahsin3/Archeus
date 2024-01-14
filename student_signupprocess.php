<?php
/*
1.WE will receive data of Student Register information here
2.IF the data is valid, we will store it in Database and forward to login page.
3.Else forward to Sign up page.
cname,cemail,cpass,caddress
id=st_user, name=st_name, email=st_email, dept=st_dept, dob=st_dob,
gender=st_gender, pass=st_pass, cpass=st_cpass
*/

//Import PHPMailer classes into the global namespace
 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'C:\xampp\htdocs\Archeus\PHPMailer-master\src\Exception.php';
    require 'C:\xampp\htdocs\Archeus\PHPMailer-master\src\PHPMailer.php';
    require 'C:\xampp\htdocs\Archeus\PHPMailer-master\src\SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //checking if the info are valid and not empty.
    if (
        !empty($_POST["st_user"]) && !empty($_POST["st_name"]) &&
        !empty($_POST["st_email"]) && !empty($_POST["st_dept"]) &&
        !empty($_POST["st_dob"]) && !empty($_POST["st_gender"]) &&
        !empty($_POST["st_pass"]) && !empty($_POST["st_cpass"]) &&
        isset($_POST["st_user"]) && isset($_POST["st_name"]) &&
        isset($_POST["st_email"]) && isset($_POST["st_dept"]) &&
        isset($_POST["st_dob"]) && isset($_POST["st_gender"]) &&
        isset($_POST["st_pass"]) && isset($_POST["st_cpass"])

    ) {
        //storing the informations in variables
        $suser = $_POST["st_user"];
        $sname = $_POST["st_name"];
        $semail = $_POST["st_email"];
        $sdept = $_POST["st_dept"];
        $sdob = $_POST["st_dob"];
        $sgender = $_POST["st_gender"];
        $spass = $_POST["st_pass"];
        $scpass = $_POST["st_cpass"];

        //  to check pattern for student id
        $id_pattern = "/^011|^021|^031|^111/i";
        $email_pattern = "/@bscse.uiu.ac.bd$|@bseee.uiu.ac.bd$|@bsce.uiu.ac.bd$|@bba.uiu.ac.bd$/";
        

        /*trying to access database and store all the information there.*/
        try {
            //creating connection with Archeus database
            include "db_connect.php";

            
            $sqlquery1 = "SELECT * FROM student WHERE st_username='$suser' ";
            $returnobj1 = mysqli_query($conn, $sqlquery1);

            // if($returnobj1){
            //     //it means this id already belongs to a student and cannot be taken.
            //     echo '<script>alert("This ID already exists.");</script>';
            //     echo"<script>location.assign('student_signup.php')</script>";
            // }
            if ($spass != $scpass) {
                echo '<script>alert("Passwords does not match. Try again.");</script>';
                echo "<script>location.assign('student_signup.php')</script>";
            } else if (strlen($suser) != 9) {
                echo '<script>alert("User ID must contain 9 digits. Try again.");</script>';
                echo "<script>location.assign('student_signup.php')</script>";
            } else if (preg_match($id_pattern, $suser) == 0) {
                echo '<script>alert("User ID must start with 011 or 021 or 031 or 111. Try again.");</script>';
                echo "<script>location.assign('student_signup.php')</script>";
            } else if (preg_match($email_pattern, $semail) == 0) {
                echo '<script>alert("Invalid email address. Try again.");</script>';
                echo "<script>location.assign('student_signup.php')</script>";
            } else {
                

                //Enable verbose debug output
                    $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
        
                    //Send using SMTP
                    $mail->isSMTP();
        
                    //Set the SMTP server to send through
                    $mail->Host = 'smtp.gmail.com';
        
                    //Enable SMTP authentication
                    $mail->SMTPAuth = true;
        
                    //SMTP username
                    $mail->Username = 'archeusuiu@gmail.com';
        
                    //SMTP password
                    $mail->Password = 'xpdziutywtfkuvij';
        
                    //Enable TLS encryption;
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        
                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                    $mail->Port = 587;
        
                    //Recipients
                    $mail->setFrom('archeusuiu@gmail.com', 'https://www.uiu.ac.bd/');
        
                    //Add a recipient
                    $mail->addAddress($semail, $sname);
        
                    //Set email format to HTML
                    $mail->isHTML(true);
        
                    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        
                    $mail->Subject = 'Email verification';
                    $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
        
                    $mail->send();
                    echo 'Message has been sent';
        
                    $encrypted_password = password_hash($scpass, PASSWORD_DEFAULT);


                //every entry is valid and ready to be registered
                //database code executing
                $sqlquery = "INSERT INTO student(st_id,st_username,st_name,st_email,st_pass,st_dept,st_contact,st_dob,st_gender,role,verification_code,email_verified_at) VALUES(NULL,'$suser','$sname','$semail','$spass','$sdept',NULL,'$sdob','$sgender','student','$verification_code', NULL)";
                mysqli_query($conn, $sqlquery);

                $sqlquery2 = "INSERT INTO student_log(stlog_id,st_username,st_name) VALUES(NULL,'$suser','$sname') ";
                mysqli_query($conn, $sqlquery2);

                //after successful registration forwarding to login page
                // echo '<script>alert("Registration completed successfully!! Login to Process");</script>';
                echo "<script>location.assign('student_signupsuccess.php')</script>";
                exit();
            }
        } catch (PDOException $ex) {
            //if found error forward to register page
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            echo '<script>
             alert("catch error");
             </script>';
            echo "<script>location.assign('student_signup.php')</script>";
        }
    } else {
        //if any value is empty or invalid, then forward to register page again.
        echo '<script>
         alert("You forgot to put your information in one of the fields. Check again.");
         </script>';
        echo "<script>location.assign('student_signup.php')</script>";
    }
} else {
    //forwarding to register page if not post method.
    echo '<script>
    alert("not post method");
    </script>';
    echo "<script>location.assign('student_signup.php')</scrpit>";
}
