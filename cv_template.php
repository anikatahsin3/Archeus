<!-- $_SESSION['st_user'] -->
<?php 
 session_start();
 if(
    isset($_SESSION['st_user']) && !empty($_SESSION['st_user'])
 ){
    ?>         
        <?php
        //Database connect:
        include "db_connect.php";

        $id = $_SESSION['st_user'];
        

        //Queries to fetch needed student data:
        $getskill="SELECT * FROM cv_tech_skill WHERE st_username=$id";
        $skillget=mysqli_query($conn, $getskill);

        $getsskill="SELECT * FROM cv_soft_skill WHERE st_username=$id";
        $sskillget=mysqli_query($conn, $getsskill);

        $getactivity="SELECT * FROM cv_eca WHERE st_username=$id";
        $activityget=mysqli_query($conn, $getactivity);

        $getproject="SELECT * FROM cv_project WHERE st_username=$id";
        $projectget=mysqli_query($conn, $getproject);

        $getpub="SELECT * FROM cv_publication WHERE st_username=$id";
        $pubget=mysqli_query($conn, $getpub);


        $getbasic="SELECT * FROM cv_basic WHERE st_username=$id";
        $infoget=mysqli_query($conn, $getbasic);
        $info = mysqli_fetch_array($infoget,MYSQLI_ASSOC);

        $getedu="SELECT * FROM cv_edu WHERE st_username=$id";
        $eduget=mysqli_query($conn, $getedu);
        $info1 = mysqli_fetch_array($eduget,MYSQLI_ASSOC);

        ?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CV Template</title>

            <link rel="stylesheet" href="cv_template.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
            <link
                href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,500&family=Quicksand:wght@300;400&display=swap"
                rel="stylesheet">
            <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        </head>

        <body class="scale_cv">
            <div class="page" id="pdf">
                <div class="row justify-content-center">
                    <div class="col top_part">
                        <div class="row justify-content-center">
                            <div class="col top_field">
                                <h3 class="name">
                                    <?php echo "<p><strong>" . strtoupper($info['st_name']) . "</strong></p>";?></h3>
                                <br>
                                <h5 class="category">Address: <span
                                        class="gen_text"><?php echo "<p><strong>" . strtoupper($info['st_city']) . "</strong></p>";?></span>
                                </h5>
                                <h5 class="category">Phone: <span
                                        class="gen_text"><?php echo "<p><strong>" . strtoupper($info['st_contact']) . "</strong></p>";?></span>
                                </h5>
                                <h5 class="category">E-mail: <span
                                        class="gen_text"><?php echo "<p><strong>" . strtoupper($info['st_email']) . "</strong></p>";?></span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div id="line"></div>
                        <div id="diamond">
                            <i class='bx bxs-graduation bx-flip-horizontal bx-xs' id="icons"></i>
                            <h5 class="title">Education:</h5>
                        </div>
                        <div id="line"></div>
                        <span class="subtitle">Secondary School:</span>
                        <?php echo "<p><strong>" . strtoupper($info1['edu_school']) . "</strong></p>";?>
                        <div class="row">
                            <div class="col text">Starting Year:
                                <?php echo "" . strtoupper($info1['edu_school_start']) . "";?></div>
                            <div class="col text">Ending Year: <?php echo "" . strtoupper($info1['edu_school_end']) . "";?>
                            </div>
                        </div>
                        <div id="line"></div>
                        <span class="subtitle">Higher Secondary School:</span>
                        <?php echo "<p><strong>" . strtoupper($info1['edu_college']) . "</strong></p>";?>
                        <div class="row">
                            <div class="col text">Starting Year:
                                <?php echo "" . strtoupper($info1['edu_college_start']) . "";?></div>
                            <div class="col text">Ending Year: <?php echo "" . strtoupper($info1['edu_college_end']) . "";?>
                            </div>
                        </div>
                        <div id="line"></div>
                        <span class="subtitle">University:</span>
                        <?php echo "<p><strong>" . strtoupper($info1['edu_uni']) . "</strong></p>";?>
                        <div class="row">
                            <div class="col text">Starting Year: <?php echo "" . strtoupper($info1['edu_uni_start']) . "";?>
                            </div>
                            <div class="col text">Ending Year: <?php echo "" . strtoupper($info1['edu_uni_end']) . "";?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text">Department:
                                <?php echo "" . strtoupper($info1['edu_uni_dept']) . "</strong></p>";?></div>

                            <div class="col text">Major: <?php echo "" . strtoupper($info1['edu_uni_major']) . "";?></div>

                            <div class="col text">CGPA: <?php echo "" . strtoupper($info1['edu_uni_cgpa']) . "";?></div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="line"></div>
                        <div id="diamond">
                            <i class='bx bx-extension bx-xs' id="icons"></i>

                            <h5 class="title">Skills</h5>
                        </div>
                        <div id="line"></div>
                        <span class="subtitle">Technical Skills</span>
                        <ul class="text">
                            <?php
                                while ($tskill = mysqli_fetch_array($skillget,MYSQLI_ASSOC)) {
                                    {
                                    echo "<p><strong>" . strtoupper($tskill['tech_skill_name']) . "</strong></p>";
                                    ?>
                            <li>Related Project:</li>
                            <li><?php echo "<p><strong>" . strtoupper($tskill['tech_skill_related_project']) . "</strong></p>"; ?>
                            </li>

                            <?php
                                    }
                                }
                            ?>
                        </ul>
                        <span class="subtitle">Soft Skills</span>
                        <ul class="text">
                            <?php
                                while ($info2 = mysqli_fetch_array($sskillget,MYSQLI_ASSOC)) {
                                    {
                                        echo "<p><strong>" . strtoupper($info2['soft_skill_name']) . "<p><strong>";
                                
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="line"></div>
                        <div id="diamond">
                            <i class='bx bx-run bx-xs' id="icons"></i>
                            <h5 class="title">Extracurricular</h5>
                        </div>
                        <div id="line"></div>
                        <ul class="text">
                            <?php
                                    while ($info3 = mysqli_fetch_array($activityget,MYSQLI_ASSOC)) {
                                        {   
                                            ?><li>Activity name:</li><?php
                                            echo "<p><strong>" . strtoupper($info3['eca_name']) . "<p><strong>";
                                            ?>

                            <li><small>Description</small></li>
                            <?php echo "<p><strong>" . strtoupper($info3['eca_desc']) . "<p><strong>"; ?>
                            <li><a href="#">Link</a></li>

                            <?php
                                        }
                                    }
                                ?>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="line"></div>
                        <div id="diamond">
                            <i class='bx bx-book-alt bs-xs' id="icons"></i>
                            <h5 class="title">Projects</h5>
                        </div>
                        <div id="line"></div>
                        <ul class="text">
                            <?php
                                    while ($info4 = mysqli_fetch_array($projectget,MYSQLI_ASSOC)) {
                                        {   
                                            ?><li>Project name:</li><?php
                                            echo "<p><strong>" . strtoupper($info4['project_name']) . "<p><strong>";
                                            ?>

                            <li><small>Description</small></li>
                            <?php echo "<p><strong>" . strtoupper($info4['project_desc']) . "<p><strong>"; ?>
                            <?php
                                        }
                                    }
                                ?>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="line"></div>
                        <div id="diamond">
                            <i class='bx bx-edit-alt bx-xs' id="icons"></i>
                            <h5 class="title">Publications</h5>
                        </div>
                        <div id="line"></div>
                        <ul class="text">
                            <?php
                                    while ($info5 = mysqli_fetch_array($pubget,MYSQLI_ASSOC)) {
                                        {   
                                            ?><li>Title:</li><?php
                                            echo "<p><strong>" . strtoupper($info5['pub_title']) . "<p><strong>";
                                            ?>
                            <li>Year Published:</li>
                            <?php echo "<p><strong>" . strtoupper($info5['pub_year_published']) . "<p><strong>"; ?>
                            <li><a href="#"><?php echo "<p><strong>" . strtoupper($info5['pub_link']) . "<p><strong>"; ?></a>
                            </li>

                            <?php
                                        }
                                    }
                                ?>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col"></div>
                <div class="col dl_button">
                    <i class='bx bx-download bx-lg dl_pdf' title="Download PDF" id="pdf_button"></i>
                </div>
            </div>

            <script src="cv_template.js"></script>
            <script src="html2pdf.bundle.min.js"></script>
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