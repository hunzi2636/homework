<?php
$host="localhost";
$dbname="ks";
$username="root";
$password="root";
$mysqli=new mysqli($host,$username,$password,$dbname);
if ($mysqli->connect_errno) {
    die("connection error:".$mysqli->connect_error);
}
return $mysqli;
