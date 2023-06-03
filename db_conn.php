<?php
$sname="localhost";
$uname="root";
$password="anta13@j";
$db_name="test_db";
$conn = mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){

    echo"connection failed";
}
?>
