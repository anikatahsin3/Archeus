<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(
        //checking if the info are valid and not empty.

        // !empty($_POST["name"]) && !empty($_POST["email"]) &&
        // !empty($_POST["phone"]) && !empty($_POST["city"]) &&
        // !empty($_POST["fb"]) && !empty($_POST["li"]) && 
        // !empty($_POST["ss"]) && !empty($_POST["syear"]) &&
        // !empty($_POST["eyear"]) && !empty($_POST["hs"]) &&
        // !empty($_POST["hs_syear"]) && !empty($_POST["hs_eyear"]) &&
        // !empty($_POST["uni"]) && !empty($_POST["u_syear"]) &&
        // !empty($_POST["u_eyear"]) && !empty($_POST["dept"]) &&
        // !empty($_POST["major"]) && !empty($_POST["cgpa"]) &&
        // !empty($_POST["t_skill"]) && !empty($_POST["des"]) &&
        // !empty($_POST["rp"]) && !empty($_POST["s_skill"]) &&
        // !empty($_POST["e_name"]) && !empty($_POST["role"]) &&
        // !empty($_POST["cont"]) && !empty($_POST["p_name"]) &&
        // !empty($_POST["p_ver"]) && !empty($_POST["p_des"]) &&
        // !empty($_POST["title"]) && !empty($_POST["year_p"]) &&
        // !empty($_POST["pu_ver"])
        // &&
        isset($_POST["name"]) && isset($_POST["email"]) && 
        isset($_POST["phone"]) && isset($_POST["city"]) &&
        isset($_POST["fb"]) && isset($_POST["li"]) &&
        isset($_POST["ss"]) && isset($_POST["syear"])&&
        isset($_POST["eyear"]) && isset($_POST["hs"]) && 
        isset($_POST["hs_syear"]) && isset($_POST["hs_eyear"]) &&
        isset($_POST["uni"]) && isset($_POST["u_syear"]) &&
        isset($_POST["u_eyear"]) && isset($_POST["dept"])&&
        isset($_POST["major"]) && isset($_POST["cgpa"])  
        // isset($_POST["t_skill"]) && isset($_POST["des"]) &&
        // isset($_POST["rp"]) && isset($_POST["s_skill"]) &&
        // isset($_POST["e_name"]) && isset($_POST["role"])&&
        // isset($_POST["cont"]) && isset($_POST["p_name"]) && 
        // isset($_POST["p_ver"]) && isset($_POST["p_des"]) &&
        // isset($_POST["title"]) && isset($_POST["year_p"]) &&
        // isset($_POST["pu_ver"])
      ){
        //storing the informations in variables

        //Basic Information
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $city=$_POST["city"];
        $fb=$_POST["fb"];
        $li=$_POST["li"];

        //Education
        $ss=$_POST["ss"];
        $syear=$_POST["syear"];
        $eyear=$_POST["eyear"];
        $hs=$_POST["hs"];
        $hs_syear=$_POST["hs_syear"];
        $hs_eyear=$_POST["hs_eyear"];
        $uni=$_POST["uni"];
        $u_syear=$_POST["u_syear"];
        $u_eyear=$_POST["u_eyear"];
        $dept=$_POST["dept"];
        $major=$_POST["major"];
        $cgpa=$_POST["cgpa"];

        //Technical Skills
        $t_skill=$_POST["t_skill"];
        $t_des=$_POST["des"];
        $rp=$_POST["rp"];

        //Soft Skills
        $s_skill=$_POST["s_skill"];

        //Extracurricular activites
        $e_name=$_POST["e_name"];
        $e_des=$_POST["role"];
        $link=$_POST["cont"];

        //Personal Projects
        $p_name=$_POST["p_name"];
        // $p_ver=$_POST["p_ver"];
        $p_des=$_POST["p_des"];

        //Publications
        $title=$_POST["title"];
        $year_p=$_POST["year_p"];
        $pub_link=$_POST["pu_ver"];
        

       try{
             //creating connection with Archeus database

                include "db_connect.php";

                //every entry is valid and ready to be registered
                //database code executing
                //Getting student ID:

                $getid="SELECT st_username FROM student WHERE st_email='$email'";
                $returnid=mysqli_query($conn, $getid);

                $row = mysqli_fetch_assoc($returnid);

                $id = $row['st_username'];

                //Storing into cv basic table:
                $sqlquery1 = "INSERT INTO cv_basic(cv_id, st_username, st_name, st_email, st_contact, st_city, st_facebook, st_linkedin) VALUES(NULL,'$id','$name','$email','$phone','$city','$fb','$li')";
                mysqli_query($conn, $sqlquery1);
                
                
                //Storing into edu table:
                $sqlquery1="INSERT INTO cv_edu(st_username,	edu_school,	edu_school_start, edu_school_end, edu_college, edu_college_start, edu_college_end, edu_uni, edu_uni_start, edu_uni_end, edu_uni_dept, edu_uni_major, edu_uni_cgpa) VALUES('$id','$ss', '$syear', '$eyear', '$hs', '$hs_syear', '$hs_eyear', '$uni', '$u_syear', '$u_eyear', '$dept', '$major', '$cgpa')";
                mysqli_query($conn, $sqlquery1);


                //Storing into eca table:

                for($i=0;$i<count($e_name);$i++)
                {
                 
                    $sqlquery2="INSERT INTO cv_eca(st_username, eca_name, eca_desc, eca_link) VALUES('$id','$e_name[$i]','$e_des[$i]','$link[$i]')";
                    mysqli_query($conn, $sqlquery2);	 
                 
                }
                
                //Storing into tech skill table:

                for($i=0;$i<count($t_skill);$i++)
                {
                 
                    $sqlquery3="INSERT INTO cv_tech_skill(st_username, tech_skill_name, tech_skill_desc, tech_skill_related_project) VALUES ('$id','$t_skill[$i]','$t_des[$i]','$rp[$i]')";
                    mysqli_query($conn, $sqlquery3); 

                    $sqlquery11="INSERT INTO  tags_student(id, post_student_id, st_name, tag_name) VALUES (NULL,'$id','$name','$t_skill[$i]')";
                    mysqli_query($conn, $sqlquery11);
                 
                }
                
                //Storing into soft skill table:

                for($i=0;$i<count($s_skill);$i++)
                {
                 
                    $sqlquery4="INSERT INTO cv_soft_skill(st_username, soft_skill_name) VALUES('$id','$s_skill[$i]')";
                    mysqli_query($conn, $sqlquery4);

                    $sqlquery10="INSERT INTO  tags_student(id, post_student_id, st_name, tag_name) VALUES (NULL,'$id','$name','$s_skill[$i]')";
                    mysqli_query($conn, $sqlquery10);
                 
                }

                //Storing into project table:

                for($i=0;$i<count($p_name);$i++)
                {
                 
                    $sqlquery5="INSERT INTO cv_project(st_username, project_name, project_desc) VALUES('$id','$p_name[$i]','$p_des[$i]')";
                    mysqli_query($conn, $sqlquery5); 
                 
                }
                
                //Storing into publications table:

                for($i=0;$i<count($title);$i++)
                {
                 
                    $sqlquery6="INSERT INTO cv_publication(st_username, pub_title, pub_year_published, pub_link) VALUES('$id','$title[$i]',' $year_p[$i]','$pub_link[$i]')";
                    mysqli_query($conn, $sqlquery6); 
                 
                }
                

                
                
                //after successful registration forwarding to Home page
                
                echo '<script>alert("Information updated successfully!!");</script>';
                echo "<script>location.assign('student_home.php')</script>";
              
         }catch(PDOException $ex){
             //if found error forward to register page
             echo '<script>
             alert("Error");
             </script>';
            echo"<script>location.assign('cv.php')</script>";
         }
     }else{
         //if any value is empty or invalid, then forward to register page again.
         echo '<script>
         alert("You forgot to put your information in one of the fields.Please check again.");
         </script>';
         echo"<script>location.assign('cv.php')</script>";
     }
 }
 else{
    //forwarding to register page if not post method.
    echo '<script>
    alert("not post method");
    </script>';
    echo"<script>location.assign('student_home.php')</scrpit>";
} 
?>