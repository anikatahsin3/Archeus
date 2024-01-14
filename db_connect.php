<html lang="en">
<head>
    
</head>
<body>
<?php

$host="localhost";
$user="root";
$password="";
$db="archeus";

$conn=mysqli_connect($host,$user,$password,$db);

if($conn==true){
}
else{
    die("Connection error!");
}



?>
</body>
</html>