<!-- $_SESSION['st_user'] -->
<?php 
 session_start();
 if(
    isset($_SESSION['st_user']) && !empty($_SESSION['st_user'])
 ){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="skills_table.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script src="custom_tags_input.js"></script>
    <title>Student Home | Archeus</title>
</head>

<body class="dark">
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

                        <div class="text logo-text">
                            <span class="name">Archeus</span>
                            <span class="profession">Student Home</span>
                        </div>
                    </div>

                </header>

                <div class="menu-bar">
                    <div class="menu">

                        <li class="search-box">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Search...">
                        </li>

                        <ul class="menu-links">
                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bx-home-smile icon' style='color:#857de7'></i>
                                    <span class="text nav-text" onclick="window.location.href = 'student_home.php';"
                                        id="menuitems">Home Page</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bxs-pencil icon' style='color:#f24e1e'></i>
                                    <span class="text nav-text" id="menuitems">Edit Profile</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bx-check icon' style='color:#4ecb71'></i>
                                    <span class="text nav-text" id="menuitems"
                                        onclick="window.location.href = 'skills_table.php';">My Skills</span>
                                </a>
                            </li>

                            <!-- <li class="nav-link" id="link_list">
                                        <a href="#">
                                            <i class='bx bxs-message-square-dots icon' style='color:#8490ff'></i>
                                            <span class="text nav-text" id="menuitems">CV Drops</span>
                                        </a>
                                    </li> -->

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bx-message-square-dots icon' style='color:#ffffff'></i>
                                    <span class="text nav-text" id="menuitems"
                                        onclick="window.location.href = 'cv_template.php';">View CV</span>
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
        </div>

        <div class="container">
            <section class="dashboard">
                <div class="col">
                    <h1>Verification List</h1>
                </div>
                <?php
                    try{
                        include "db_connect.php";
                        $id = $_SESSION['st_user'];

                    $sqlquery1="SELECT * from cv_tech_skill WHERE st_username =$id";

                    $result1 = mysqli_query($conn, $sqlquery1);

                    ?>
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Skill Name</th>
                            <th>Status</th>
                            <th>Verification</th>
                            <th>Active</th>
                            <!-- <th></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                while($x=mysqli_fetch_assoc($result1)){
                                    $uid = $x['tech_skill_id'] ;
                                    ?>
                        <tr>
                            <td><?php echo $x['tech_skill_name']; ?></td>
                            <td><?php echo $x['tech_skill_verification']; ?></td>
                            <td>

                                <button class="request_btn"
                                    onclick="window.location.href = 'request_validation.php?data=<?php echo $uid?>';">Request</button>
                            </td>


                            <td>
                                <center>
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input"
                                            <?php if($x['tech_skill_toggle']=='1'){echo "checked";}?>
                                            onclick="toggleStatus1(<?php echo $x['tech_skill_id']?>)" id="check">
                                    </div>
                                </center>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        src = "https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js"
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script>
        function toggleStatus1(id) {
            var id = id;
            $.ajax({
                url: "/Archeus/toggle1.php",
                type: "post",
                data: {
                    tech_id: id
                },
                success: function (data) {
                    $hell = data.slice(-1);
                    if ($hell == '1') {
                        swal("Status Active!");
                    } else {
                        swal("Status Inactive!");
                    }
                }
            });



        }
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