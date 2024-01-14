<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
        <input type="text" name="verification_code" placeholder="Enter verification code" required />
    
        <input type="submit" name="verify_email" value="Verify Email">
    </form>
    <?php
 
    if (isset($_POST["verify_email"]))
    {
        $email = $_POST["email"];
        $verification_code = $_POST["verification_code"];
 
        // connect with database
        include "db_connect.php";
 
        // mark email as verified
        $sql = "UPDATE student SET email_verified_at = NOW(), status = 1 WHERE st_email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
        $result  = mysqli_query($conn, $sql);
 
 
        if (mysqli_affected_rows($conn) == 0)
        {
            die("Verification code failed.");
        }
 
        echo '<script>alert("You have been successfully verified!.");</script>';
        echo "<script>location.assign('student_home.php')</script>";
        exit();
    }
 
?>
</body>
</html>


