<!-- $_SESSION['st_user'] -->
<?php 
 session_start();
 if(
    isset($_SESSION['st_user']) && !empty($_SESSION['st_user'])
 ){
    include "db_connect.php";
    

    $u_id = $_GET['data'];
    $getskill="SELECT * FROM cv_tech_skill WHERE tech_skill_id =$u_id";
    $skillget=mysqli_query($conn, $getskill);
    $ts=mysqli_fetch_assoc($skillget);

    $getteach="SELECT * FROM teacher ";
    $teachget=mysqli_query($conn,  $getteach);
    // $teach=mysqli_fetch_assoc($teachget);

    ?> 
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Validate Skill | Archeus</title>

            <link rel="stylesheet" href="request_validate.css">

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

                    <div id="top_title">
                        Archeus
                    </div>

                    <div id="top_logout">
                        <a class="ui orange button huge" name="signup" onclick="window.location.href = 'welcome.php';" id="logout_button">Logout</a>
                    </div>

                </div>

                <div class="mid">
                    <div class="contentbox">

                        <div>
                            <br>
                            <br>
                            <p class="welcometag">Skill Validation</p>

                            <form action="request_validationprocess.php?skill=<?php echo $ts['tech_skill_name'] ?>" method="POST" enctype="multipart/form-data">
                                <div>
                                    <div class="field">
                                        <p class="welcometag"> <?php echo $ts['tech_skill_name'] ?> </p>
                                    </div>
                                </div>

                                <br>

                                <div>
                                    <div class="field">
                                        <input class="inup" type="text" placeholder="Trimester" name="tri" id="tri">
                                    </div>
                                </div>

                                <br>

                                <!-- ddd = drop down department -->
                                <div class="field">
                                    <select class="inup_ddd" name="t_n" id="t_n">
                                    <?php while($teach=mysqli_fetch_assoc($teachget)){ ?>
                                        <option ><?php echo $teach['t_name'];?></option>
                                    <?php }
                                    ?>
                                    </select>
                                </div>

                                <br>

                                <div class="spaceboxv"></div>

                                <div id="buttonspan">
                                    <div>
                                        <button class="ui secondary button huge" id="buttonbox1" type="submit" name="submit">Submit</button>
                                    </div>

                                    <div class="spaceboxv2"></div>

                                    <div>
                                        <a class="ui orange button huge" name="signup" onclick="window.location.href = 'skills_table.php';" id="buttonbox2">Go Back</a>
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
