<?php
session_start();
$mysqli=require 'db.php';
$sql="select * from message where phone=".$_SESSION['phone']."";
$res=mysqli_query($mysqli,$sql);
//if (!$res) {
//    printf("Error: %s\n", mysqli_error($mysqli));
//    exit();
//}
$long=mysqli_num_rows($res);
for ($i=0;$i<$long;$i++){
    $row = mysqli_fetch_assoc($res);
    if ($row){
        $name=$row['name'];
        $phone=$row['phone'];
        $comments=$row['comments'];
        $time1=$row["time"];
        $id=$row["id"];
        echo "<tr><td>$name</td><td>$phone</td><td>$comments</td><td>$time1</td><td>$id</td>";
    }else {
    die ("错误".$mysqli->error);
    }
}
$mysqli->close();