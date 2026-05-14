<?php
$conn = new mysqli("localhost","root","","course_system");

if($conn->connect_error){
    die("Connection Failed");
}
?>