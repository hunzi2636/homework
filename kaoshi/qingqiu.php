<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "UPDATE user SET id=1 WHERE username='王五' ";
$res=mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();