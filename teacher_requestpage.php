<!-- $_SESSION['t_user'] -->
<?php 
 session_start();
 if(
    isset($_SESSION['t_user']) && !empty($_SESSION['t_user'])
 ){
    $id = $_SESSION['t_user'];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="teacher_requestpage.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script src="custom_tags_input.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js" type="module"></script>

    <title>Edit Your Profile | Archeus</title>
</head>

<body class="dark">

    <?php
            try{
                include "db_connect.php";
                $sqlquery1 = "SELECT * FROM teacher WHERE t_username = '$id'";

                $infoget = mysqli_query($conn, $sqlquery1);
                $info = mysqli_fetch_array($infoget,MYSQLI_ASSOC);

                $name = $info['t_name'];
                $email = $info['t_email']; 

            ?>
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

        <!-- <div class="top">
                        <div id="top_title">
                            Archeus
                        </div>

                        <div id="top_logout">
                            <a class="ui orange button huge" name="logout" onclick="window.location.href = 'teacher_logoutprocess.php';" id="buttonbox2">Logout</a>
                        </div>
                    </div> -->

        <div class="mid">
            <nav class="sidebar open">
                <header>
                    <div class="image-text">
                        <div class="image-text">
                            <?php
                                try{
                                    include "db_connect.php";
                                    $sqlquery1 = "SELECT * FROM teacher WHERE t_username = '$id'";

                                    $infoget = mysqli_query($conn, $sqlquery1);
                                    $info = mysqli_fetch_array($infoget,MYSQLI_ASSOC);

                                    $name = $info['t_name'];
                                    ?>
                            <div class="text logo-text">
                                <span class="profession"><a href='teacher_profile.php?id={$row['tpost_id']}'><?php echo $name; ?></a></span>
                            </div>
                            <?php
                                }catch (PDOException $ex){
                                    echo '<script>
                                    alert("Oops!! Caught An Error");
                                    </script>';
                                    echo "<script>location.assign('teacher_home.php')</script>";
                                }
                                ?>


                        </div>
                    </div>

                </header>

                <div class="menu-bar">
                    <div class="menu">

                        <!-- search here -->
                        <form action="teacher_searchpage.php" method="GET" enctype="multipart/form-data">
                            <li class="search-box">
                                <i class='bx bx-search icon'></i>
                                <input type="text" placeholder="Search..." name="t_seacrh" id="t_seacrh">
                            </li>
                        </form>

                        <ul class="menu-links">
                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bx-home-smile icon' style='color:#857de7'></i>
                                    <span class="text nav-text" onclick="window.location.href = 'teacher_home.php';"
                                        id="menuitems">Home Page</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bxs-pencil icon' style='color:#f24e1e'></i>
                                    <span class="text nav-text"
                                        onclick="window.location.href = 'teacher_editprofile.php';" id="menuitems">Edit
                                        Profile</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class="bx bx-check icon" style="color:#4ecb71"></i>
                                    <span class="text nav-text" onclick="window.location.href = 'teacher_requestpage.php';" id="menuitems">Pending Validation Requests</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bx-filter-alt icon' style='color:#4873ff'></i>
                                    <span class="text nav-text" onclick="window.location.href = 'teacher_filter.php';"
                                        id="menuitems">Filter</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="bottom-content">

                        <!-- <li class="mode">
                                    <div class="sun-moon">
                                        <i class='bx bx-moon icon moon'></i>
                                        <i class='bx bx-sun icon sun'></i>
                                    </div>
                                    <span class="mode-text text">Dark mode</span>

                                    <div class="toggle-switch">
                                        <span class="switch"></span>
                                    </div>
                                    </li> -->
                        <div id="bottomdev" align="right">
                            <div>
                                Developed by
                            </div>
                            <div class="spaceboxv"></div>
                            <div>
                                Deadly Diamond Of Death | 2022
                            </div>
                        </div>

                    </div>
                </div>

            </nav>

            <div class="bg_contentbox">

                <div class="contentbox">
                <section class="dashboard">
                    <div class="col">
                        <h1>Request List</h1>
                        <span class="spaceboxv2"></span>
                    </div>
                    <?php
                    try{
                        include "db_connect.php";
                        $id = $_SESSION['t_user'];

                    $sqlquery1="SELECT * from verification_request WHERE t_username ='$name' AND verified=0 ";

                    $result1 = mysqli_query($conn, $sqlquery1);

                    

                    ?>
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Student ID</th>
                                <th>Skill name</th>
                                <th>Action</th>
                                <!-- <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($x=mysqli_fetch_assoc($result1)){
                                    

                                    $stid = $x['st_username'] ;
                                    $sid = $x['skill_name'] ;

                                    $sqlquery3="SELECT * from cv_tech_skill WHERE st_username ='$stid'and tech_skill_name = '$sid'";                                
                                    $result3 = mysqli_query($conn, $sqlquery3);
                                    $y=mysqli_fetch_assoc($result3)

                            ?>

                        <tr>
                            <td><?php
                            if($y['tech_skill_verification'] ='1'){
                             echo $x['st_name'];
                            } ?></td>
                            <td><?php
                            if($y['tech_skill_verification'] ='1'){
                             echo $x['st_username']; 
                            }?></td>
                            <td><?php 
                            if($y['tech_skill_verification'] ='1'){
                            echo $x['skill_name'];
                            } ?></td>
                            <td>
                                <div>
                                    <a class="ui orange button huge" name="signup" onclick="window.location.href = 'teacher_requestpageprocess.php';" id="buttonbox2">Validate</a>
                                </div>
                            </td>



                            
                        </tr>
                        <?php
                                }
                         ?>
                            <!-- and so on... -->
                        </tbody>
                    </table>
                    <?php
                }catch (PDOException $ex) {
                    echo '<script>alert("Found error");window.location = "welcome.php";</script>';
                }
                ?>
                </section>
                </div>

            </div>

        </div>
    </div>

    <?php
            }catch (PDOException $ex) {
                echo '<script>
                    alert("Found error");
                    window.location = "teacher_home.php";
                    </script>';
            }
            ?>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";
            }
        });
    </script>

</body>

</html>
<?php
 }
 else{
    ?>
<script>
    location.assign('welcome.php')
</script>
<?php
}
?>