<?php 
 session_start();
 if(
    isset($_SESSION['t_user']) && !empty($_SESSION['t_user'])
 ){
    $id = $_SESSION['t_user'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $gender = $_POST["t_gender"];
        $dept = $_POST["t_dept"];
        $room = $_POST["t_room"];
        $contact = $_POST["t_contact"];

        try{
            $conn1 = new PDO('mysql:host=localhost:3306;dbname=archeus;', 'root', '');
            $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqlquery2 = "SELECT * FROM teacher WHERE t_username='$id'";
            $returnobj2 = $conn1->query($sqlquery2);

            if ($returnobj2->rowCount() == 1) {
                //it means this login information belongs to a teacher and is valid.
                //login successful
    
                $sql1 = "UPDATE teacher SET t_gender='$gender', t_dept='$dept', t_room='$room', t_contact='$contact'  WHERE t_username='$id' ";
                $logintime = $conn1->query($sql1);

                //forwarding to home page
                echo '<script>
                alert("Information Updated Successfully...");
                window.location = "teacher_editprofile.php";
                </script>';
            }
        }
        catch (PDOException $ex) {
            //if found error forward to login page
            // echo"<script>location.assign('welcome.php')</script>";
            echo '<script>
                alert("Found error");
                window.location = "teacher_editprofile.php";
                </script>';
        }
    }
    else{
        echo '<script>
        alert("not post method");
        window.location = "teacher_editprofile.php";
        </script>';
    }
}
else{
    ?>
        <script>location.assign('welcome.php')</script>
    <?php
}
?>        
