<?php

$hostname  = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error){
    die("connection error:" . $conn->connect_error);
}

?>


