<?php
if(empty($_POST['name'])) {
    die("姓名不能为空");
}
if (strlen($_POST['phone'])!=11) {
    die ("请输入正确的电话号码");
}
    if (strlen($_POST['password'])<6) {
        die ("密码长度必须大于6");
}
    if (!preg_match("/[a-z]/i",$_POST['password'])) {
        die("密码必须至少包含一个a-z的字母");
    }
if (!preg_match("/[0-9]/",$_POST['password'])) {
    die("密码必须至少包含一个0-9的数字");
}
//if ($_POST['password']!==$_POST['password_confirmation'])
// die ("两次密码不一致");
$password_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
$mysqli=require 'db.php';
$sql="INSERT INTO user (name,phone,password_hash) values (?,?,?)";
$stmt=$mysqli->stmt_init();
if (!$stmt->prepare($sql)) {
    die("sql error:".$mysqli->error);
}

$stmt->bind_param("sss",$_POST['name'],$_POST['phone'],$password_hash);
if ($stmt->execute()){
    echo "注册成功";
} else{
    if ($mysqli->errno===1062){
        die("该手机号已注册过");
    }else{
        die($mysqli->error.$mysqli->errno);
    }
}
$mysqli->close();
//print_r($_POST);
//var_dump($password_hash);
