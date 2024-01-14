<!-- $_SESSION['t_user'] -->
<?php 
 session_start();
 if(
    isset($_SESSION['t_user']) && !empty($_SESSION['t_user'])
 ){
    $id = $_SESSION['t_user'];
    try {
        include "db_connect.php";
        $sqlquery1 = "SELECT * FROM teacher WHERE t_username = '$id'";

        $infoget = mysqli_query($conn, $sqlquery1);
        $info = mysqli_fetch_array($infoget,MYSQLI_ASSOC);

        $name = $info['t_name'];
        $email = $info['t_email'];
        $dept = $info['t_dept'];
        $des = $info['t_des'];
        $room = $info['t_room'];

        ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Profile | Archeus</title>

                <link rel="stylesheet" href="teacher_profile.css">
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
                            <span class="home_button" onclick="window.location.href = 'teacher_home.php';">Archeus</span>
                        </div>

                        <div id="top_logout">
                            <a class="ui orange button huge" name="logout"
                                onclick="window.location.href = 'teacher_logoutprocess.php';" id="buttonbox2">Logout</a>
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
                                        <label class="user_id">(<?php echo $id; ?>)</label>
                                    </div>
                                    <label class="user_uni"><?php echo $des; ?></label>
                                </div>
                            </div>

                            <div class="midinfo">
                                <!-- <div class="imgdiv">
                                    <i class='bx bxs-bookmark-alt iconbox' style='color:#7b7fed'></i>
                                    <i class='bx bx-file iconbox' style='color:#f8881a'></i>
                                </div> -->
                            </div>

                            <div class="rightinfo">
                                <div class="basicdiv">
                                    <!-- <label class="user_phone">Contact Details: </label> -->
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
                                <label for="skills" class="skills">Dummy Tab</label>
                                <!-- <label for="projects" class="projects"></i>Projects</label> -->
                                <div class="slider"></div>
                            </nav>
                            <section>
                                <div class="content content-1">
                                    <div class="info">
                                        <div class="b_info">
                                            <ul>
                                                <li>Name: <?php echo $name; ?></li>
                                                <!-- <li>DOB: 22-12-1998</li> -->
                                                <li>E-mail: <?php echo $email; ?></li>
                                                <li>Room: <?php echo $room; ?></li>
                                            </ul>
                                        </div>
                                        <div class="b_info">
                                            <ul>
                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="edit">
                                        <button class="edit_button" onclick="window.location.href = 'teacher_editprofile.php';"><i class='bx bx-edit-alt bx-lg'></i></button>
                                    </div>
                                </div>
                                <div class="content content-2">
                                <!-- <div class="skills">
                                        <div class="skill">
                                            <u>Verified Skills</u>
                                            <div class="v_skills">
                                                <b>Teacher name</b>
                                                <br>
                                                Course Name
                                            </div>
                                        </div>
                                        <div class="skill">
                                            <u>Softwares</u>
                                            <div class="softwares">
                                                Adobe Illustrator
                                                <br>
                                                Adobe Photoshop
                                                <br>
                                                Figma
                                            </div>
                                            <u>Languages</u>
                                            <div class="lang">
                                                C
                                                <br>
                                                Pyhton
                                                <br>
                                                Java
                                            </div>
                                        </div>
                                    </div> -->
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
        window.location = "teacher_home.php";
        </script>';
    }


 }
 else{
    ?>
       <script>location.assign('welcome.php')</script>
   <?php
}
?>