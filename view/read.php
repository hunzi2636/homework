<?php
$mysqli=require 'db.php';
//$sql = "SELECT * FROM user";
$sql="select * from user a join message b on a.name=b.name";        //选择两个表

$res=mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($res);
while($row = mysqli_fetch_assoc($res)) {
    $message=$row["message"];
    $time=$row["time"];
}
echo $message;
echo $time;

