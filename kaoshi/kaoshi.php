<?php
$j=0;
$name=$_POST['name'];
$word=$_POST['word'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "SELECT * FROM user WHERE username=".$name."";

//$res=$conn->query($sql);
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)) {
    //echo "id:" . $row["id"]. "  username:   " . $row["username"]. "    title:   " . $row["title"] ."  content:  " . $row["content"] . " time:   ". $row["time"] ."<br>";
}
var_dump($word);
var_dump($row["phone"]);
if ($word==$row["phone"]){
    echo "cg";
    $j=1;
} else {
    echo "sb";
    $j=0;
}
$conn->close();
if ($j==1){
    require 'lianjie.php';
    echo "<br>";
    require 'qingqiu.php';
}





