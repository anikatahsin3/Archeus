<?php 
 session_start();
 if(
    isset($_SESSION['ad_user']) && !empty($_SESSION['ad_user'])
 ){
    ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Teacher Sign Up | Archeus</title>

            <link rel="stylesheet" href="teacher_signup.css">

            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

            <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
            <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

        </head>

        <body>
            <div class="layout">
            <nav>
                <div class="logo-name">
                    <div class="logo-image">
                        <!--<img src="images/logo.png" alt="">-->
                    </div>

                    <span class="logo_name">Archeus</span>
                </div>

                <div class="menu-items">
                    <ul class="nav-links">
                        <li><a href="admin_hp.php">
                                <i class='bx bx-home'></i>
                                <span class="link-name">Home</span>
                            </a></li>
                        <li><a href="admin_student.php">
                                <i class='bx bxs-group'></i>
                                <span class="link-name">Students</span>
                            </a></li>
                        <li><a href="admin_teacher.php">
                                <i class='bx bxs-user'></i>
                                <span class="link-name">Teachers</span>
                            </a></li>
                        <li><a href="teacher_signup.php">
                                <i class='bx bx-plus-circle active'></i>
                                <span class="link-name active">Create Teacher
                                    Account</span>
                            </a></li>
                    </ul>

                    <ul class="logout-mode">
                        <li><a href="#">
                                <i class='bx bx-log-out'></i>
                                <span class="link-name"
                                    onclick="window.location.href = 'admin_logoutprocess.php';">Logout</span>
                            </a></li>
                    </ul>
                </div>
            </nav>

                <div class="mid">
                    <div class="contentbox">

                        <div>
                            <br>
                            <br>
                            <p class="welcometag">Sign Up | Teacher</p>

                            <form action="teacher_signupprocess.php" method="POST" enctype="multipart/form-data">
                                <div>
                                    <div class="field">
                                        <input class="inup" type="text" placeholder="Name" name="t_name" id="t_name">
                                    </div>
                                </div>

                                <br>

                                <div>
                                    <div class="field">
                                        <input class="inup" type="text" placeholder="Username" name="t_user" id="t_user">
                                    </div>
                                </div>

                                <br>

                                <div>
                                    <div class="field">
                                        <input class="inup" type="text" placeholder="Email" name="t_email" id="t_email">
                                    </div>
                                </div>

                                <br>

                                <!-- ddd = drop down department -->
                                <div class="field">
                                    <select class="inup_ddd" name="t_dept" id="t_dept">
                                        <option value="">Department</option>
                                        <option value="EEE">EEE</option>
                                        <option value="CSE">CSE</option>
                                        <option value="CE">CE</option>
                                        <option value="BBA">BBA</option>
                                        <option value="ECO">ECO</option>
                                    </select>
                                </div>

                                <br>

                                <div class="field">
                                    <select class="inup_ddd" name="t_des" id="t_dept">
                                        <option value="">Designation</option>
                                        <option value="Vice Chancellor">Vice Chancellor</option>
                                        <option value="Pro-Vice Chancellor">Pro-Vice Chancellor</option>
                                        <option value="Professor">Professor</option>
                                        <option value="Associate Professor">Associate Professor</option>
                                        <option value="Assistant Professor">Assistant Professor</option>
                                        <option value="Lecturer">Lecturer</option>
                                    </select>
                                    <!-- <input class="inup" type="text" placeholder="Designation" name="t_des" id="t_des"> -->
                                </div>

                                <br>

                                <div class="spaceboxv"></div>

                                <div id="buttonspan">
                                    <div>
                                        <button class="ui secondary button huge" id="buttonbox1" type="submit" name="submit">Submit</button>
                                    </div>

                                    <div class="spaceboxv2"></div>

                                    <div>
                                        <a class="ui orange button huge" name="signup" onclick="window.location.href = 'admin_hp.php';" id="buttonbox2">Go Back</a>
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
    <?php
}
 else{
    ?>
       <script>location.assign('welcome.php')</script>
   <?php
}
?>