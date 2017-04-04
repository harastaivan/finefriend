<?php

$user = 'root';
$pw = 'root';
$host = '127.0.0.1:3306';
$dbname = 'finefriend';
$conn = new mysqli($host, $user, $pw, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}


?>