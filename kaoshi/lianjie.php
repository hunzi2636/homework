<?php
$servername ="localhost";
$username ="root";
$password ="root";
$database="homework";
$conn =new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
    die("连接失败；".$conn->connect_error);
}
//$data=file_get_contents("./database.txt");

$sql= "insert into user(id,username,sex,phone,qq,college,profession)
    values('3','赵','男','6841533','45534','化学','唐')";
if($conn->query($sql)===true){
    echo json_encode('成功');
}else{
    echo "Error";

}
$conn->close();

