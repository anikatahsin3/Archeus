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
            <title>Teacher</title>

            <link rel="stylesheet" href="admin_teacher.css">
            <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        </head>

        <body>
            <nav>
                <div class="logo-name">
                    <div class="logo-image">
                        <!--<img src="images/logo.png" alt="">-->
                    </div>

                    <span class="logo_name">Archeus</span>
                </div>

                <div class="menu-items">
                    <ul class="nav-links">
                        <li><a href = "admin_hp.php">
                                <i class='bx bx-home'></i>
                                <span class="link-name" onclick="window.location.href = 'admin_hp.php';">Home</span>
                            </a></li>
                        <li><a href="admin_student.php">
                                <i class='bx bxs-group'></i>
                                <span class="link-name">Students</span>
                            </a></li>
                        <li><a href="admin_teacher.php">
                                <i class='bx bxs-user active'></i>
                                <span class="link-name active">Teachers</span>
                            </a></li>
                        <li><a href="teacher_signup.php">
                                <i class='bx bx-plus-circle'></i>
                                <span class="link-name" onclick="window.location.href = 'teacher_signup.php';">Create Teacher
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

            <section class="dashboard">
                <div class="col">
                    <h1>Teachers List</h1>
                </div>
                <?php
                try{
                    include "db_connect.php";

                    // student list
                    // $sqlquery1="SELECT * FROM student";
                    $sqlquery1="SELECT teacher.t_username, teacher.t_name, teacher.t_email, 
                                        teacher_log.tlog_login_date_time, teacher_log.tlog_logout_date_time
                                FROM teacher
                                INNER JOIN teacher_log ON teacher.t_username = teacher_log.t_username
                                ORDER BY teacher.t_name";

                    $result1 =mysqli_query($conn, $sqlquery1);
                    ?>
                        <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Teacher ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Login time</th>
                                <th>Logout time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($result1 as $x){
                                    ?>
                                        <tr>
                                            <td><?php echo $x['t_username']; ?></td>
                                            <td><?php echo $x['t_name']; ?></td>
                                            <td><?php echo $x['t_email']; ?></td>
                                            <td><?php echo $x['tlog_login_date_time']; ?></td>
                                            <td><?php echo $x['tlog_logout_date_time']; ?></td>
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