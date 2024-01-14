<!-- $_SESSION['t_user'] -->
<?php
$id = $_GET['id'];
session_start();
if (
    isset($_SESSION['t_user']) && !empty($_SESSION['t_user'])
) {
    $t_id = $_SESSION['t_user'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="teacher_post.css">

        <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

        <title>Post | Archeus</title>
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
                                $sqlquery1 = "SELECT * FROM teacher WHERE t_username = '$t_id'";

                                $infoget = mysqli_query($conn, $sqlquery1);
                                $info = mysqli_fetch_array($infoget, MYSQLI_ASSOC);

                                $name = $info['t_name'];
                            ?>
                                <div class="text logo-text">
                                    <span class="profession"><a href='teacher_profile.php?id={$row['tpost_id']}'><?php echo $name; ?></a></span>
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

                        <?php
                        try {
                            // $conn = new PDO('mysql:host=localhost:3306;dbname=archeus;', 'root', '');
                            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            // $sqlquery = "SELECT * FROM post_teacher WHERE tpost_id = '$id'";
                            // $returnobj = $conn->query($sqlquery);

                            // $info = $returnobj->fetchAll();
                            // echo "{$info['tpost_title']}";

                            include "db_connect.php";
                            $sqlquery1 = "SELECT * FROM post_teacher WHERE tpost_id = '$id' ";
                            $infoget = mysqli_query($conn, $sqlquery1);
                            $info = mysqli_fetch_array($infoget, MYSQLI_ASSOC);

                            $name = $info['t_name'];
                            $title = $info['tpost_title'];
                            $desc = $info['tpost_desc'];

                            $sqlquery2 = "SELECT * FROM drop_cv WHERE post_id = '$id'";
                            $infoget2 = mysqli_query($conn, $sqlquery2);
                            // $info2 = mysqli_fetch_array($infoget2, MYSQLI_ASSOC);

                            // $st_id = $info2['st_username'];
                            // $st_name = $info2['st_name'];

                            // $sqlquery3 = "SELECT * FROM student WHERE st_username = '$st_id'";
                            // $infoget3 = mysqli_query($conn, $sqlquery3);
                            // $info3 = mysqli_fetch_array($infoget3, MYSQLI_ASSOC);

                        ?>
                            <div class="ui card postbox">
                                <div class="content">

                                    <div class="header" id="post_title"><?php echo "{$info['tpost_title']}"; ?></div>
                                    <div class="header" id="author_name"><?php echo "{$info['t_name']}"; ?> | Author</div>

                                    <div class="description">
                                        <p id="post_desc"><?php echo $info['tpost_desc']; ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php
                        while ($info2 = mysqli_fetch_array($infoget2,MYSQLI_ASSOC)) {                           
                            // echo "<p><strong>" . strtoupper($info2['st_username']) . "</strong></p>";
                            ?>
                            <div class="ui card postbox cvdrops">
                                <div class="cvdetails" id="post_title"><?php echo "{$info2['st_username']}"; ?></div>
                                <div class="cvdetails" id="post_title"><?php echo "{$info2['st_name']}"; ?></div>
                                <div class="text logo-text">
                                    <span class="profession"><a href='teacher_viewcv.php?id=<?php echo "{$info2['st_username']}";?>'>CV</a></span>
                                </div>
                            </div>
                            <?php
                            
                        }

                        } catch (PDOException $ex) {
                            echo '<script>
                                        alert("Found error");
                                        window.location = "teacher_home.php";
                                </script>';
                        }

                        ?>
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