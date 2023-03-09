<?php
session_start();
if (empty($_POST['phone'])){
    die ("手机号不能为空");
}
if (empty($_POST['password'])){
    die ("密码不能为空");
}
$mysqli=require 'db.php';
$sql = "SELECT * FROM user WHERE phone =".$_POST['phone']."";
$res=mysqli_query($mysqli,$sql);
if ($res<1){
    die ("账号或密码错误");
}
$row = mysqli_fetch_assoc($res);
if (password_verify($_POST['password'],$row["password_hash"])) {
    echo "登陆成功";
    $_SESSION['phone']=$_POST['phone'];
    $_SESSION['password']=$_POST['password'];
    header('location:tree.php');//跳转主页
}else{
    echo ("账号或密码错误");
    exit();
}

$mysqli->close();