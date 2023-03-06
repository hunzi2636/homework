<?php
$mysqli=require 'db.php';
$sql = "SELECT * FROM user WHERE phone =".$_POST['phone']."";
$res=mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($res);
$name=$row['name'];
return "$name";
$mysqli->close();
