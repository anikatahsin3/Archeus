<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Archeus</title>

    <link rel="stylesheet" href="student_signup.css">

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
                    <p class="welcometag">Sign Up | Student</p>

                    <form action="student_signupprocess.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <div class="field">
                                <input class="inup" type="text" placeholder="ID" name="st_user" id="st_user">
                            </div>
                        </div>

                        <br>

                        <div>
                            <div class="field">
                                <input class="inup" type="text" placeholder="Name" name="st_name" id="st_name">
                            </div>
                        </div>

                        <br>

                        <div>
                            <div class="field">
                                <input class="inup" type="text" placeholder="Email" name="st_email" id="st_email">
                            </div>
                        </div>

                        <br>


                        <!-- ddd = drop down department -->
                        <div class="field">
                            <select class="inup_ddd" name="st_dept" id="st_dept">
                                <option value="">Department</option>
                                <option value="EEE">EEE</option>
                                <option value="CSE">CSE</option>
                                <option value="CE">CE</option>
                                <option value="BBA">BBA</option>
                                <option value="ECO">ECO</option>
                            </select>
                        </div>

                        <br>

                        <div>
                            <label>DOB</label>
                            <span class="field">
                                <input class="inup_short" type="date" name="st_dob" id="st_dob">
                            </span>

                            <span class="field">
                                <select class="inup_dd" name="st_gender" id="st_gender">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </span>
                        </div>

                        <br>

                        <div class="field">
                            <input class="inup" type="password" placeholder="Password" name="st_pass" id="st_pass">
                        </div>

                        <br>

                        <div class="field">
                            <input class="inup" type="password" placeholder="Confirm Password" name="st_cpass" id="st_cpass">
                        </div>

                        <div class="spaceboxv"></div>

                        <div id="buttonspan">
                            <div>
                                <button class="ui secondary button huge" id="buttonbox1" type="submit" name="submit">Submit</button>
                            </div>

                            <div class="spaceboxv2"></div>

                            <div>
                                <a class="ui orange button huge" name="signup" onclick="window.location.href = 'welcome.php';" id="buttonbox2">Go Back</a>
                            </div>

                        </div>

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