<?php
session_start();
$mysqli=require 'db.php';
//$t=time();
//$name=require "name.php"; //取名字
//$message=$_POST['message'];
$time=time();
//
//require "read.php";
$sql="select * from user  join message ";                            //展示留言
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

//if (empty($_SESSION['phone']&&$_SESSION['password'])){
//    //判断是否登录
//    echo "<script>if (confirm('当前未登录，是否登录？')) location.href='log_in.html';</script>";                       //跳转登录页面
//}


$sql2="INSERT INTO message (phone,name,comments,time) values (?,?,?,?)";
$stmt=$mysqli->stmt_init();
if (!$stmt->prepare($sql2)) {
    die("sql error:".$mysqli->error);
}
$stmt->bind_param("ssss",$_POST['phone'],$_POST['name'],$_POST['message'],$time);//手机号作为二次验证
if ($stmt->execute()){
    echo "留言成功";
}else{
    echo '留言失败';
    die($mysqli->error.$mysqli->errno);
}
//while($row = mysqli_fetch_assoc($res)) {
//    $message=$row["message"];
//    $time=$row["time"];
//    $name=$row['name'];
//}
//$row1= mysqli_query($mysqli,"UPDATE user SET message=$message
//WHERE phone=$phone");
//$row2=mysqli_query($mysqli,"UPDATE user SET time=$time
//WHERE phone=$phone");
//if ($row1==1&&$row2==1) {
//    echo "留言成功";
//}
$mysqli->close();