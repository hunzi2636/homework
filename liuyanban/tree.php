<?php
$mysqli=require 'db.php';
$sql="select * from message ";                            //展示留言
$res=mysqli_query($mysqli,$sql);
$long=mysqli_num_rows($res);
for ($i=0;$i<$long;$i++){
    $row = mysqli_fetch_assoc($res);
    $name=$row['name'];
    $phone=$row['phone'];
    $comments=$row['comments'];
    $time1=$row["time"];
    echo "<tr><td>$name</td><td>$phone</td><td>$comments</td><td>$time1</td></tr>";
}
$mysqli->close();