<?php
$mysqli=require 'db.php';
$id=$_POST['id'];
if (empty($_POST['id'])){
    die ("id不能为空");
}
$j=0;
echo ( "<script>if (confirm('确定要删除该条留言吗？')) $j=1;</script>");
if ($j==1){$sql="delete from message where id=".$id."";
$res=mysqli_query($mysqli,$sql);
if ($res){
    header('location:delete.php');
}else {
    die ("删除失败,请重试");
}}
$mysqli->close();