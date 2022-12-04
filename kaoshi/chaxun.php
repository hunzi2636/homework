<?php
$j=0;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT * FROM user WHERE $name";

//$res=$conn->query($sql);
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)) {
    //echo "id:" . $row["id"]. "  username:   " . $row["username"]. "    title:   " . $row["title"] ."  content:  " . $row["content"] . " time:   ". $row["time"] ."<br>";
}
if ($password==$row["phone"]){
    echo "cg";
    $j=1;
} else {
    echo "sb";
    $j=0;
}
return $j;
$conn->close();