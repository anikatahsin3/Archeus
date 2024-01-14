
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js"</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Archeus\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\Archeus\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\Archeus\PHPMailer-master\src\SMTP.php';



include "db_connect.php";
session_start();

$id = $_SESSION["st_user"];

$s_name = $_GET["skill"];

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $mail = new PHPMailer(true);
    if (
        !empty($_POST["tri"]) && !empty($_POST["t_n"]) &&
        isset($_POST["tri"]) && isset($_POST["t_n"]) 
   
    ){
        $trimester = $_POST["tri"];
        $t_name = $_POST["t_n"];
    }
    try{
         $gettmail= "SELECT t_email FROM teacher WHERE t_name= '$t_name'";
         $mailget = mysqli_query($conn, $gettmail);
         $mailinfo = mysqli_fetch_assoc($mailget);
         $email =  $mailinfo['t_email'];

         $getsname = "SELECT * FROM student WHERE st_username=$id";
         $infoget = mysqli_query($conn, $getsname);
         $info = mysqli_fetch_assoc($infoget);
         $sname = $info['st_name'];


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
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

         //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
         $mail->Port = 465;

         //Recipients
         $mail->setFrom('archeusuiu@gmail.com', 'https://www.uiu.ac.bd/');

         //Add a recipient
         $mail->addAddress($email, $t_name);

         //Set email format to HTML
         $mail->isHTML(true);

         $mail->Subject = 'SKILL VERIFICATION REQUEST';
         $mail->Body    = '<p>Verification requested by: '. $sname .'<br> <a href="http://localhost/Archeus/welcome.php">VERIFY</a> </p>';

         $mail->send();
         echo 'Message has been sent';

         $encrypted_password = password_hash($tpass, PASSWORD_DEFAULT);

         $sqlinsert = "INSERT INTO verification_request(id, st_username, st_name, t_username, skill_name, trimester) VALUES(NULL,'$id', '$sname','$t_name','$s_name',' $trimester')";	
         mysqli_query($conn, $sqlinsert);
        ?>
         <script> swal("Request Sent!") </script>
         <?php
         //after successful submition forwarding to skill_table page
         echo "<script>location.assign('skills_table.php')</script>";
    }
    catch (PDOException $ex) {
        //if found error forward to register page
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo '<script>
         alert("Oops!! Caught An Error");
         </script>';
        echo "<script>location.assign('request_validation.php')</script>";
    }
}
else{
    //forwarding to register page if not post method.
    echo '<script>
    alert("Not Post Method");
    </script>';
    echo "<script>location.assign('teacher_signup.php')</scrpit>";
}
?>

