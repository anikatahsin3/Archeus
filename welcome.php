<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Archeus</title>

    <link rel="stylesheet" href="welcome.css">


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

                <div>
                    <br>
                    <br>
                    <p class="welcometag">Welcome</p>

                    <form action="welcomeprocess.php" method="POST" enctype="multipart/form-data">

                        <div>
                            <span id="fieldtag">username</span>
                            <div class="field">
                                <input class="inup" type="text" name="user" id="user">
                            </div>
                        </div>

                        <br>
                        <span id="fieldtag">password</span>

                        <div class="field">
                            <input class="inup" type="password" name="pass" id="pass">
                        </div>

                        <div class="spaceboxv"></div>

                        <span id="buttonspan">
                            <button class="ui secondary button huge" id="buttonbox1" type="submit" name="submit">Login</button>

                            <span class="spaceboxh"></span>
                            <a class="ui orange button huge" name="signup" onclick="window.location.href = 'student_signup.php';" id="buttonbox2">Sign Up</a>
                        </span>

                        <br>
                        <br>

                        <span id="forgotpw">Forgot Password?</span>

                        <br>
                        <form>

                </div>
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