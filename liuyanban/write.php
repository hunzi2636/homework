<?php
session_start();
$mysqli=require 'db.php';
//echo ($_SESSION['phone']),($_SESSION['password']),$_SESSION["name"];//测试
if (empty($_SESSION['phone']&&$_SESSION['password'])){
    //判断是否登录
    die( "<script>if (confirm('当前未登录，是否登录？')) location.href='log_in.html';</script>"   );                   //跳转登录页面
}
$time=time();                                 //获得时间戳
$sql2="INSERT INTO message (phone,name,comments,time) values (?,?,?,?)";             //写入留言
$stmt=$mysqli->stmt_init();
if (!$stmt->prepare($sql2)) {
    die("sql error:".$mysqli->error);
}
$stmt->bind_param("ssss",$_SESSION['phone'],$_SESSION['name'],$_POST['message'],$time);//手机号从session读取
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
//$mysqli->close();