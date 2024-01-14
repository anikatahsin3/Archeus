<!-- $_SESSION['t_user'] -->
<?php
session_start();
if (
    isset($_SESSION['t_user']) && !empty($_SESSION['t_user'])
) {
    $id = $_SESSION['t_user'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="teacher_sthesis.css">

        <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
        <script src="custom_tags_input.js"></script>
        <title>Teacher Home | Archeus</title>
    </head>

    <body class="dark">
        <div class="layout">

            <nav class="navbar fixed-top navbar top">
                <div id="top_title">
                    <span class="home_button" onclick="window.location.href = 'teacher_home.php';">Archeus</span>
                </div>
                <div id="top_logout">
                    <a class="ui orange button huge" name="logout" onclick="window.location.href = 'teacher_logoutprocess.php';" id="buttonbox2">Logout</a>
                </div>

            </nav>

            <div class="mid">
                <nav class="sidebar open">
                    <header>
                        <div class="image-text">
                            <?php
                            try {
                                include "db_connect.php";
                                $sqlquery1 = "SELECT * FROM teacher WHERE t_username = '$id'";

                                $infoget = mysqli_query($conn, $sqlquery1);
                                $info = mysqli_fetch_array($infoget, MYSQLI_ASSOC);

                                $name = $info['t_name'];
                            ?>
                                <div class="text logo-text">
                                    <span class="profession"><?php echo $name; ?></span>
                                </div>
                            <?php
                            } catch (PDOException $ex) {
                                //if found error forward to register page
                                echo '<script>
                                    alert("Oops!! Caught An Error");
                                    </script>';
                                echo "<script>location.assign('teacher_home.php')</script>";
                            }
                            ?>


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
                                        <span class="text nav-text" onclick="window.location.href = 'teacher_home.php';" id="menuitems">Home Page</span>
                                    </a>
                                </li>

                                <li class="nav-link" id="link_list">
                                    <a href="#">
                                        <i class='bx bxs-pencil icon' style='color:#f24e1e'></i>
                                        <span class="text nav-text" onclick="window.location.href = 'teacher_editprofile.php';" id="menuitems">Edit Profile</span>
                                    </a>
                                </li>

                                <li class="nav-link" id="link_list">
                                    <a href="#">
                                        <i class="bx bx-check icon" style="color:#4ecb71"></i>
                                        <span class="text nav-text" id="menuitems">Pending Validation Requests</span>
                                    </a>
                                </li>

                                <li class="nav-link" id="link_list">
                                    <a href="#">
                                        <i class='bx bx-filter-alt icon' style='color:#4873ff'></i>
                                        <span class="text nav-text" onclick="window.location.href = 'teacher_filter.php';" id="menuitems">Filter</span>
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

                        <span class="spaceboxv2"></span>

                        <?php
                        try {
                            $conn = new PDO('mysql:host=localhost:3306;dbname=archeus;', 'root', '');
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $sqlquery = "SELECT * FROM post_student ORDER BY stpost_datetime DESC";
                            $returnobj = $conn->query($sqlquery);

                            if ($returnobj->rowCount() == 0) {
                                ///no data found
                                echo "No data found";
                            } else {
                                /*<?php echo $row['id'];?>*/
                                //tpost_id,t_username, t_name,tpost_title, tpost_desc
                                $tabledata = $returnobj->fetchAll();
                                foreach ($tabledata as $row) {
                        ?>
                                    <div class="ui card postbox">
                                        <div class="content">
                                            <i class='right floated bx bx-star iconbox' style='color:#343400'></i>
                                            <div class="header" id="post_title"><?php echo $row['stpost_title']; ?></div>
                                            <div class="header" id="author_name"><?php echo $row['st_name']; ?> | Author</div>

                                            <div class="description">
                                                <p id="post_desc"><?php echo $row['stpost_desc']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                }
                            }
                        } catch (PDOException $ex) {
                            //if found error forward to login page
                            // echo"<script>location.assign('welcome.php')</script>";
                            echo '<script>
                                alert("Found error");
                                window.location = "welcome.php";
                                </script>';
                        }
                        ?>

                    </div>

                </div>

                <div class="bg_contentbox2">
                    <div class="contentbox2">
                        <ul class="menu-links">

                            <li class="nav-link" id="link_list">
                                <a id="rightitems" href="#">
                                    <i class='bx bx-duplicate iconbox' style='color:#fc3f5b'></i>
                                    <span class="text nav-text" onclick="window.location.href = 'teacher_sthesis.php';" id="menuitems2">Student Thesis Posts</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>

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

    </body>

    </html>
<?php
} else {
?>
    <script>
        location.assign('welcome.php')
    </script>
<?php
}
?>