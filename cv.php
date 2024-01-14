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
            <title>Create CV</title>

            <link rel="stylesheet" href="cv.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
        </head>

        <body id="bg">
            <div class="top">
                <div class="logo">Archeus</div>
            </div>
            <br>
            <div class="container mid">
                <div class="cv_head text-center">
                    <h2><u>Create Your Own CV</u></h2>
                </div>

                <br>
                <br>

                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            <h3><u>Basic Information</u></h3>
                        </div>
                    </div>
                    <br>
                    <form class="row justify-content-center" action="cv_process.php" method="POST" enctype="multipart/form-data">
                        <div class="col-3"></div>
                        <div class="col">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control form-control-sm rounded inup" name='name' id="name" required>
                            <br>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-sm inup" name='email' id="email" required>
                            <br>
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control form-control-sm inup" name='phone' id="phone" required>
                            <br>
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control form-control-sm inup" name='city' id="city" required>
                            <br>
                        </div>
                        <div class="col">
                            <label for="link" class="form-label">Facebook</label>
                            <input type="url" class="form-control form-control-sm inup" name='fb' id="link" >
                            <br>
                            <label for="link" class="form-label">LinkedIn</label>
                            <input type="url" class="form-control form-control-sm inup" name='li' id="link" >
                        </div>

                        <div class="cv_head text-center">
                            <h3><u>Education</u></h3>
                        </div>
                        <br>
                        <br>
                        <div class="col-3"></div>
                        <div class="col">
                            <label for="ss" class="form-label">Secondary School/O'levels</label>
                            <input type="text" class="form-control form-control-sm inup" name='ss' id="ss" required>
                            <br>
                            <label for="syear" class="form-label">Starting Year</label>
                            <input type="number" class="form-control form-control-sm inup" name='syear' id="syear" required>
                            <br>
                            <label for="eyear" class="form-label">Ending Year</label>
                            <input type="number" class="form-control form-control-sm inup" name='eyear' id="eyear" required>
                            <br>
                            <br>
                            <label for="hs" class="form-label">Higher School/A'levels</label>
                            <input type="text" class="form-control form-control-sm inup" name='hs' id="hs" required>
                            <br>
                            <label for="syear" class="form-label">Starting Year</label>
                            <input type="number" class="form-control form-control-sm inup" name='hs_syear' id="syear" required>
                            <br>
                            <label for="eyear" class="form-label">Ending Year</label>
                            <input type="number" class="form-control form-control-sm inup" name='hs_eyear' id="eyear" required>
                            <br>
                        </div>
                        <div class="col">
                            <label for="uni" class="form-label">University</label>
                            <input type="text" class="form-control form-control-sm inup" name='uni' id="uni" required>
                            <br>
                            <label for="syear" class="form-label">Starting Year</label>
                            <input type="number" class="form-control form-control-sm inup" name='u_syear' id="syear" required>
                            <br>
                            <label for="eyear" class="form-label">Ending Year</label>
                            <input type="number" class="form-control form-control-sm inup" name='u_eyear' id="eyear" required>
                            <br>
                            <label for="dept" class="form-label">Department</label>
                            <input type="text" class="form-control form-control-sm inup" name='dept' id="dept" required>
                            <br>
                            <label for="major" class="form-label">Major</label>
                            <input type="text" class="form-control form-control-sm inup" name='major' id="major" required>
                            <br>
                            <label for="cgpa" class="form-label">CGPA</label>
                            <input type="text" class="form-control form-control-sm inup" name='cgpa' id="cgpa" required>
                            <br>
                        </div>

                        <div class="cv_head text-center">
                            <h3><u>Technical Skills</u></h3>
                        </div>
                        <br>
                        <br>
                        <div id="tskill">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <label for="t_skill" class="form-label">Skill</label>
                                    <input type="text" class="form-control form-control-sm inup" name='t_skill[]' id="t_skill">
                                    <br>
                                    <label for="des" class="form-label">Describe</label>
                                    <textarea class="form-control inup" placeholder="Describe..." name='des[]' id="des"
                                        style="height: 80px;"></textarea>
                                    <br>
                                    <label for="rp" class="form-label">Related Projects</label>
                                    <input type="text" class="form-control form-control-sm inup" name='rp[]' id="rp">
                                    <br>
                                    <button type="button" class="btn btn-success btn-lg add1" id="buttonbox1">Add</button>
                                </div>
                                <br>
                                <div class="col"></div>
                                <br>
                            </div>
                            <br><br>
                        </div>

                        <div class="cv_head text-center">
                            <h3><u>Soft Skills</u></h3>
                        </div>
                        <br>
                        <br>
                        <div id="sskill">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <label for="s_skill" class="form-label">Skill</label>
                                    <input type="text" class="form-control form-control-sm inup" name='s_skill[]' id="s_skill" >
                                    <br>
                                    <button type="button" class="btn btn-success btn-lg add2" id="buttonbox1">Add</button>
                                </div>
                                <br>
                                <div class="col"></div>
                                <br>
                            </div>
                            <br>
                            <br>
                        </div>

                        <br>
                        <br>

                        <div class="cv_head text-center">
                            <h3><u>Extra Activities/Club Activities</u></h3>
                        </div>
                        <br>
                        <br>
                        <div id="ea">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <label for="e_name" class="form-label">Activity Name</label>
                                    <input type="text" class="form-control form-control-sm inup" name='e_name[]' id="e_name" >
                                    <br>
                                    <label for="role" class="form-label">Description</label>
                                    <input type="text" class="form-control form-control-sm inup" name='role[]' id="role" >
                                    <br>
                                    <label for="cont" class="form-label">Link</label>
                                    <textarea class="form-control inup" placeholder="Details..." name='cont[]' id="cont"
                                        style="height: 80px;"></textarea>
                                    <br>
                                    <button type="button" class="btn btn-success btn-lg add3" id="buttonbox1">Add</button>
                                </div>
                                <br>
                                <div class="col"></div>
                                <br>
                            </div>
                            <br>
                            <br>
                        </div>
                        
                            <div class="cv_head text-center">
                                <h3><u>Personal Projects</u></h3>
                            </div>
                            <br>
                            <br>
                            <div id="p_projects">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <label for="p_name" class="form-label">Project Name</label>
                                        <input type="text" class="form-control form-control-sm inup" name='p_name[]' id="p_name" >
                                        <br>
                                        <br>
                                        <label for="p_des" class="form-label">Project Description</label>
                                        <textarea class="form-control inup" placeholder="Details..." name='p_des[]' id="p_des"
                                            style="height: 80px;"></textarea>
                                        <br>
                                        <button type="button" class="btn btn-success btn-lg add4" id="buttonbox1">Add</button>
                                    </div>
                                    <br>
                                    <div class="col"></div>
                                    <br>
                                </div>
                                <br><br>
                            </div>

                            <div class="cv_head text-center">
                                <h3><u>Publications</u></h3>
                            </div>
                            <br>
                            <br>
                            <div id="pub">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control form-control-sm inup" name='title[]' id="title" >
                                        <br>
                                        <label for="year_p" class="form-label">Year Published</label>
                                        <input type="number" class="form-control form-control-sm inup" name='year_p[]' id="year_p" >
                                        <br>
                                        <label for="ver" class="form-label">Publication link</label>
                                        <input type="text" class="form-control form-control-sm inup" name='pu_ver[]' id="ver" >
                                        <br>
                                        <button type="button" class="btn btn-success btn-lg add5" id="buttonbox1">Add</button>
                                    </div>
                                    <br>
                                    <div class="col"></div>
                                    <br>
                                </div>
                            </div>

                            <br><br>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                <input class="btn btn-primary" type="submit" id="buttonbox1" value="Submit">
                                </div>
                            </div>
                    </form>
                </div>
                <br><br>
            </div>

            <div class="bottom">
                    <div>
                        Developed by
                    </div>
                    <div>
                        Deadly Diamond Of Death | 2022
                    </div>
                </div>


            <br>
            <br>


        <<<<<<< Updated upstream

            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        

            <script>
                $(document).ready(function () {
                $(".add1").click(function (a) {
                    console.log("working")
                    a.preventDefault();
                    $("#tskill").append(`
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <label for="t_skill" class="form-label">Skill</label>
                                <input type="text" class="form-control form-control-sm" name='t_skill[]' id="t_skill" >
                                <br>
                                <label for="des" class="form-label">Describe</label>
                                <textarea class="form-control" placeholder="Describe..." name='des[]' id="des"
                                    style="height: 80px;"></textarea>
                                <br>
                                <label for="rp" class="form-label">Related Projects</label>
                                <input type="text" class="form-control form-control-sm" name='rp[]' id="rp" >
                                <br>
                                <button type="button" class="btn btn-danger btn-lg remove1" id="buttonbox2">Remove</button>
                            </div>
                            <br>
                        <div class="col"></div>
                        <br>
                        </div>
                        <br>`);
                });

                $(document).on('click', '.remove1', function (a) {
                    a.preventDefault();
                    let delete1 = $(this).parent();
                    $(delete1).remove();
                });
            });
            </script>

            <script>
            $(document).ready(function () {
                $(".add2").click(function (a) {
                    a.preventDefault();
                    $("#sskill").append(`
                    <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <label for="s_skill" class="form-label">Skill</label>
                                <input type="text" class="form-control form-control-sm" name='s_skill[]' id="s_skill">
                                <br>
                                <button type="button" class="btn btn-danger btn-lg remove2" id="buttonbox2">Remove</button>
                            </div>
                            <br>
                            <div class="col"></div>
                            <br>
                            <br>
                        </div>
                        <br>`);
                });

                $(document).on('click', '.remove2', function (a) {
                    a.preventDefault();
                    let delete1 = $(this).parent();
                    $(delete1).remove();
                });
            });

            </script>

            <script>
            $(document).ready(function () {
                $(".add3").click(function (a) {
                    a.preventDefault();
                    $("#ea").append(`
                    <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <label for="e_name" class="form-label">Activity Name</label>
                                <input type="text" class="form-control form-control-sm" name='e_name[]' id="e_name">
                                <br>
                                <label for="role" class="form-label">Description</label>
                                <input type="text" class="form-control form-control-sm" name='role[]' id="role">
                                <br>
                                <label for="cont" class="form-label">Link</label>
                                <textarea class="form-control" placeholder="Details..." name='cont[]' id="cont"
                                    style="height: 80px;"></textarea>
                                <br>
                                <button type="button" class="btn btn-danger btn-lg remove3" id="buttonbox2">Remove</button>
                            </div>
                            <br>
                            <div class="col"></div>
                            <br>
                        </div>
                        <br>`);
                });

                $(document).on('click', '.remove3', function (a) {
                    a.preventDefault();
                    let delete1 = $(this).parent();
                    $(delete1).remove();
                });
            });
            </script>

            <script>
            $(document).ready(function () {
                $(".add4").click(function (a) {
                    a.preventDefault();
                    $("#p_projects").append(`
                    <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <label for="p_name" class="form-label">Project Name</label>
                                <input type="text" class="form-control form-control-sm" name='p_name[]' id="p_name">
                                <br>
                                <br>
                                <label for="p_des" class="form-label">Project Description</label>
                                <textarea class="form-control" placeholder="Details..." name='p_des[]' id="p_des"
                                    style="height: 80px;"></textarea>
                                <br>
                                <button type="button" class="btn btn-danger btn-lg remove4" id="buttonbox2">Remove</button>
                            </div>
                            <br>
                            <div class="col"></div>
                            <br>
                        </div>
                        <br>`);
                });

                $(document).on('click', '.remove4', function (a) {
                    a.preventDefault();
                    let delete1 = $(this).parent();
                    $(delete1).remove();
                });
            });
            </script>

            <script>
            $(document).ready(function () {
                    $(".add5").click(function (a) {
                        a.preventDefault();
                        $("#pub").append(`
                        <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control form-control-sm" name='title[]' id="title">
                                    <br>
                                    <label for="year_p" class="form-label">Year Published</label>
                                    <input type="number" class="form-control form-control-sm" name='year_p[]' id="year_p">
                                    <br>
                                    <label for="ver" class="form-label">Publication link</label>
                                    <input type="text" class="form-control form-control-sm" name='pu_ver[]' id="ver">
                                    <br>
                                    <button type="button" class="btn btn-danger btn-lg remove5" id="buttonbox2">Remove</button>
                                </div>
                                <br>
                                <div class="col"></div>
                                <br>
                            </div>
                            <br>`);
                    });

                    $(document).on('click', '.remove5', function (a) {
                        a.preventDefault();
                        let delete1 = $(this).parent();
                        $(delete1).remove();
                    });
                });
            </script>
        =======
            <!-- <script src="cv.js"></script> -->
            
        >>>>>>> Stashed changes

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