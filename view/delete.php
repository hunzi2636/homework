<?php
$id=$_POST['id'];
$con=require "db.php";
$sql="delete from message where id='$id'";
$is=mysqli_query($con,$sql);
if ($is){
    echo "删除成功";
    header("location:index.php");
}else{
    echo "删除失败";
}
