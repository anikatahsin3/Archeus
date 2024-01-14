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
            <title>Students</title>

            <link rel="stylesheet" href="admin_student.css">
            <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        <li><a href="admin_hp.php">
                                <i class='bx bx-home'></i>
                                <span class="link-name">Home</span>
                            </a></li>
                        <li><a href="admin_student.php">
                                <i class='bx bxs-group active'></i>
                                <span class="link-name active">Students</span>
                            </a></li>
                        <li><a href="admin_teacher.php">
                                <i class='bx bxs-user'></i>
                                <span class="link-name">Teachers</span>
                            </a></li>
                        <li><a href="teacher_signup.php">
                                <i class='bx bx-plus-circle'></i>
                                <span class="link-name">Create Teacher
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
                    <h1>Students List</h1>
                </div>
                <?php
                try{
                    include "db_connect.php";

                    $sqlquery1="SELECT student.st_username, student.st_name, student.st_email, student.status, 
                                        student_log.stlog_login_date_time, student_log.stlog_logout_date_time
                                FROM student
                                INNER JOIN student_log ON student.st_username = student_log.st_username
                                ORDER BY student.st_name";

                    $result1 = mysqli_query($conn, $sqlquery1);

                    ?>
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Login time</th>
                            <th>Logout time</th>
                            <th>Status</th>
                            <!-- <th></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                while($x=mysqli_fetch_assoc($result1)){
                                    ?>
                        <tr>
                            <td><?php echo $x['st_username']; ?></td>
                            <td><?php echo $x['st_name']; ?></td>
                            <td><?php echo $x['st_email']; ?></td>
                            <td><?php echo $x['stlog_login_date_time']; ?></td>
                            <td><?php echo $x['stlog_logout_date_time']; ?></td>
                            <td>
                            <center>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" <?php if($x['status']=='1'){echo "checked";}?> onclick="toggleStatus(<?php echo $x['st_username']?>)" id="check" >
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
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script>src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.0.min.js"</script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
                    
            <script>
                function toggleStatus(id){
                    var id =id;
                    $.ajax({
                        url:"/Archeus/toggle.php",
                        type:"post",
                        data:{s_id:id},
                        success:function(data){
                                $hell = data.slice(-1);
                                if($hell=='1'){
                                    swal("Status Active!");
                                }
                                else{
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
       <script>location.assign('welcome.php')</script>
   <?php
}
?>