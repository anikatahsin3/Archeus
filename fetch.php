<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 $connect = mysqli_connect("localhost", "root", "", "archeus");
 $query = "SELECT * FROM post_teacher ORDER BY tpost_datetime DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
  <h3>'.$row["tpost_title"].'</h3>
  <p>'.$row["tpost_desc"].'</p>
  <p class="text-muted" align="right">By - '.$row["t_name"].'</p>
  <hr />
  ';
 }
}

?>
