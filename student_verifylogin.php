<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Account | Archeus</title>

    <link rel="stylesheet" href="student_verifylogin.css">


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

</head>

<body>
    <div class="layout">
        <div class="top">
            <div>
                Archeus
            </div>
        </div>

        <div class="mid">
            <div class="contentbox">
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

                <a class="ui orange button huge" name="signup" onclick="window.location.href = 'welcome.php';" id="buttonbox1">Go Back</a>

            </div>
        </div>

        <div class="bottom">
            <div>
                Developed by
            </div>
            <div>
                Deadly Diamond Of Death | 2022
            </div>
        </div>
    </div>

</body>

</html>