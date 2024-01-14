<?php
    if(
            isset($_GET['sid']) && isset($_GET['sstatus']) && !empty($_GET['sid'])
    ){
        
        $id=$_GET['sid'];
        $status=$_GET['sstatus'];
        
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=archeus;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            //deleting the database row
            if($status==1){ 
               $sqlquery="UPDATE student SET status=0 WHERE st_username='$id' "; 
            }
            else if($status==0){
               $sqlquery="UPDATE student SET status=1 WHERE st_username='$id' "; 
            }
            
            $conn->exec($sqlquery);
            
            ?>
                <script>location.assign('admin_student.php')</script>
            <?php
        }
        catch (PDOException $ex){
            echo '<script>
                alert("Can not connect to database.");
                window.location = "admin_student.php";
            </script>';
        }     
    }
    else{
        echo '<script>
            alert("field is empty.");
            window.location = "admin_student.php";
        </script>';
    }

?>
