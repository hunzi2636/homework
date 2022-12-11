<?php
$j=0;
$mysqli=require 'db.php';
$sql = "SELECT * FROM user WHERE phone =".$_POST['phone']."";
$res=mysqli_query($mysqli,$sql);
if ($res<1){
    die ("账号或密码错误");
}$row = mysqli_fetch_assoc($res);
if (password_verify($_POST['password'],$row["password_hash"])) {
    echo "登陆成功";
}else{
    echo ("账号或密码错误");
}

$mysqli->close();