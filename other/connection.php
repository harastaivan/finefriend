<?php

$user = 'root';
$pw = '1777';
$host = '127.0.0.1:3306';
$dbname = 'finefriend';
$conn = new mysqli($host, $user, $pw, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}


?>