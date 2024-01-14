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
            <link rel="stylesheet" href="student_filterprocess.css">

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
            <title>Student Filter | Archeus</title>
        </head>

        <body class="dark">
            <div class="layout">

                <nav class="navbar fixed-top navbar top">
                    <div id="top_title">
                        <span class="home_button" onclick="window.location.href = 'student_home.php';">Archeus</span>
                    </div>
                    <div id="top_logout">
                        <a class="ui orange button huge" name="logout" onclick="window.location.href = 'student_logoutprocess.php';" id="buttonbox2">Logout</a>
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
                                            <span class="text nav-text" onclick="window.location.href = 'student_home.php';" id="menuitems">Home Page</span>
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
                                            <i class='bx bx-bookmarks icon' style='color:#ffffff'></i>
                                            <span class="text nav-text" id="menuitems">Bookmark</span>
                                        </a>
                                    </li>

                                    <li class="nav-link" id="link_list">
                                        <a href="#">
                                            <i class='bx bx-check icon' style='color:#4ecb71'></i>
                                            <span class="text nav-text" id="menuitems">Validation Request</span>
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
                                            <span class="text nav-text" id="menuitems" onclick="window.location.href = 'cv_template.php';">View CV</span>
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
                            <?php
                            try{
                                $conn = new PDO('mysql:host=localhost:3306;dbname=archeus;', 'root', '');
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                ?>
                                <form class="form_div" action="student_filterprocess.php" method="GET" enctype="multipart/form-data">
                                    <div class="filter">
                                        <select class="field" name="tags" id="tags">
                                            <option value="">Tags</option>
                                            <?php
                                                $sqlquery = "SELECT DISTINCT tag_name FROM tags_teacher ORDER BY tag_name ASC";
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
                                                        <option value="<?php echo $row['tag_name']; ?>"><?php echo $row['tag_name']; ?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                
                                    <div align="right">
                                        <button class="ui secondary button huge" id="buttonbox2" type="submit" name="submit">Filter</button>
                                    </div>
                                </form>
                                <?php
                            }
                            catch (PDOException $ex) {
                                echo '<script>
                                        alert("Found error");
                                        window.location = "teacher_filter.php";
                                </script>';
                            }
                                
                            ?>  
                            
                            <span class="spaceboxv2"></span>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == "GET") {
                                try{
                                    if( isset($_GET['tags'])){
                                        $tag = $_GET['tags'];

                                        $conn = new PDO('mysql:host=localhost:3306;dbname=archeus;', 'root', '');
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                        if (empty($tag)){
                                            echo "<script>location.assign('student_filter.php')</script>";
                                        }
                                        else if(!empty($tag)){
                                            $sqlquery = "SELECT post_teacher.*, tags_teacher.*
                                            FROM post_teacher
                                            INNER JOIN tags_teacher
                                            ON post_teacher.tpost_id = tags_teacher.post_teacher_id 
                                            WHERE tag_name='$tag'
                                            ORDER BY post_teacher.t_name";
                                            $count = 1;
                                            
                                            $returnobj = $conn->query($sqlquery);
                                        }

                                        $returnobj=$conn->query($sqlquery);
                                        if ($returnobj->rowCount() == 0){
                                            // no data
                                        }
                                        else{
                                            $searchdata1 = $returnobj->fetchAll();
                                            foreach ($searchdata1 as $row) {
                                                ?>
                                                        <div class="ui card postbox">
                                                            <div class="content">
                                                                <i class='right floated bx bx-star iconbox' style='color:#343400'></i>
                                                                <div class="header" id="post_title"><?php echo $row['tpost_title']; ?></div>
                                                                <div class="header" id="author_name"><?php echo $row['t_name']; ?> | Author</div>

                                                                <div class="description">
                                                                    <p id="post_desc"><?php echo $row['tpost_desc']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="spaceboxv"></span>
                                                    <?php
                                            }
                                        }
                                    }

                                }catch (PDOException $ex) {
                                            //if found error forward to register page
                                            echo '<script>alert("Oops!! Caught An Error");</script>';
                                            echo "<script>location.assign('teacher_filter.php')</script>";
                                }
                            }
                            else{
                                echo '<script>alert("Not GET Method");</script>';
                                echo "<script>location.assign('teacher_filter.php')</scrpit>";
                            }
                            ?>

                        </div>
                    </div>

                    <div class="bg_contentbox2">
                        <div class="contentbox2">
                            <ul class="menu-links">
                                <li class="nav-link" id="link_list">
                                    <a id="rightitems" href="#">
                                        <i class='bx bxs-copy-alt iconbox' style='color:#ffffff'></i>
                                        <span class="text nav-text" onclick="window.location.href = '';" id="menuitems2">Bookmark</span>
                                    </a>
                                </li>

                                <li class="nav-link" id="link_list">
                                    <a id="rightitems" href="#">
                                        <i class='bx bx-duplicate iconbox' style='color:#fc3f5b' ></i>
                                        <span class="text nav-text" onclick="window.location.href = '';" id="menuitems2">Student Thesis Posts</span>
                                    </a>
                                </li>

                                <li class="nav-link" id="link_list">
                                        <a href="#">
                                            <i class='bx bx-filter-alt iconbox' style='color:#4873ff'></i>
                                            <span class="text nav-text" onclick="window.location.href = 'student_filter.php';" id="menuitems2">Filter Post</span>
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
}
 else{
    ?>
       <script>location.assign('welcome.php')</script>
   <?php
}
?>