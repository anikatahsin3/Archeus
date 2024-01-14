<!-- $_SESSION['st_user'] -->
<?php 
 session_start();
 if(
    isset($_SESSION['st_user']) && !empty($_SESSION['st_user'])
 ){
    $id = $_SESSION['st_user'];
    try{
        include "db_connect.php";
        // student
        $sqlquery1 = "SELECT * FROM student WHERE st_username = '$id'";
        $infoget1 = mysqli_query($conn, $sqlquery1);
        $info1 = mysqli_fetch_array($infoget1,MYSQLI_ASSOC);

        $name = $info1['st_name'];
        $email = $info1['st_email'];
        $dept = $info1['st_dept'];
        $contact = $info1['st_contact'];
        $dob = $info1['st_dob'];
        $gender = $info1['st_gender'];
        $point = $info1['st_point'];
        $year = $info1['st_year'];

        // CV_edu
        $sqlquery2 = "SELECT * FROM cv_edu WHERE st_username = '$id'";
        $infoget2 = mysqli_query($conn, $sqlquery2);
        $info2 = mysqli_fetch_array($infoget2,MYSQLI_ASSOC);

        $school = $info2['edu_school'];
        $college = $info2['edu_college'];

        // tech skills
        $sqlquery3 = "SELECT DISTINCT tech_skill_name FROM cv_tech_skill WHERE st_username = '$id'";
        $infoget3 = mysqli_query($conn, $sqlquery3);

        // soft skills
        $sqlquery4 = "SELECT DISTINCT soft_skill_name FROM cv_soft_skill WHERE st_username = '$id'";
        $infoget4 = mysqli_query($conn, $sqlquery4);


        ?>       
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Profile | Archeus</title>

                <link rel="stylesheet" href="student_profile.css">

                <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

                <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
                <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

            </head>

            <body>
                <div class="layout">

                    <nav class="navbar fixed-top navbar top">

                        <div id="top_title">
                            <span class="home_button" onclick="window.location.href = 'student_home.php';">Archeus</span>
                        </div>

                        <div id="top_logout">
                            <a class="ui orange button huge" name="logout"
                                onclick="window.location.href = 'student_logoutprocess.php';" id="buttonbox2">Logout</a>
                        </div>

                    </nav>

                    <div class="mid">
                        <div class="topinfobox">
                            <div class="leftinfo">
                                <div class="imgdiv">
                                    <div class="userimg" id="userimg">
                                    </div>
                                </div>

                                <div class="userinfo">
                                    <div>
                                        <label class="user_name"><?php echo $name; ?></label>
                                        <label class="user_id"><em>(<?php echo $id; ?>)</em></label>
                                    </div>
                                    <label class="user_uni"><?php echo $year; ?> year at United International University</label>
                                </div>
                            </div>

                            <div class="midinfo">
                                <div class="imgdiv">
                                    <i class='bx bx-file iconbox' style='color:#f8881a'></i>
                                </div>
                            </div>

                            <div class="rightinfo">
                                <div class="basicdiv">
                                    <label class="user_phone">Contact Details: <?php echo $contact; ?></label>
                                    <label class="user_dept">Department: <?php echo $dept; ?></label>
                                    <label class="user_email">Email: <?php echo $email; ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper">
                            <input type="radio" name="slider" checked id="basic_info">
                            <input type="radio" name="slider" id="skills">
                            <input type="radio" name="slider" id="projects">
                            <nav>
                                <label for="basic_info" class="basic_info">Basic Information</label>
                                <label for="skills" class="skills"></i>Skills</label>
                                <!-- <label for="projects" class="projects"></i>Projects</label> -->
                                <div class="slider"></div>
                            </nav>
                            <section>
                                <div class="content content-1">
                                    <div class="info">
                                        <div class="b_info">
                                            <ul>
                                                <li>Name: <?php echo $name; ?></li>
                                                <li>DOB: <?php echo $dob; ?></li>
                                                <li>E-mail: <?php echo $email; ?></li>
                                                <li>Phone: <?php echo $contact; ?></li>
                                            </ul>
                                        </div>
                                        <div class="b_info">
                                            <ul>
                                                <li>ID: <?php echo $id; ?></li>
                                                <li>Department: <?php echo $dept; ?></li>
                                                <li>School: <?php echo $school; ?></li>
                                                <li>College: <?php echo $college; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="edit">
                                        <button class="edit_button"><i class='bx bx-edit-alt bx-lg'></i></button>
                                    </div>
                                </div>
                                <div class="content content-2">
                                <div class="skills">
                                        <div class="skill">
                                            <u>Verified Skills</u>
                                            <div class="v_skills">
                                            <?php
                                                while ($info3 = mysqli_fetch_array($infoget3,MYSQLI_ASSOC)) {
                                                    echo "<p><strong>" . strtoupper($info3['tech_skill_name']) . "</strong></p>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                        <div class="skill">
                                            <?php
                                                while ($info4 = mysqli_fetch_array($infoget4,MYSQLI_ASSOC)) {
                                                    echo "<p><strong>" . strtoupper($info4['soft_skill_name']) . "</strong></p>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="edit">
                                        <button class="edit_button"><i class='bx bx-edit-alt bx-lg'></i></button>
                                    </div>
                                </div>
                                <div class="content content-3">

                                </div>
                            </section>
                        </div>

                    </div>
                </div>


                <script src="student_profile_sadman.js"></script>
            </body>

            </html>
        <?php
    }
    catch(PDOException $ex){
        //if found error forward to login page
        // echo"<script>location.assign('welcome.php')</script>";
        echo '<script>
        alert("Found error");
        window.location = "student_home.php";
        </script>';
    }
}
 else{
    ?>
       <script>location.assign('welcome.php')</script>
   <?php
}
?>