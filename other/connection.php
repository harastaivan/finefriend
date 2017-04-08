<?php

$user = 'root';
$pw = '1777';
$host = '127.0.0.1:3306';
$dbname = 'finefriend';
$conn = new mysqli($host, $user, $pw, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

//echo "Initial character set: " . $conn->character_set_name();

if (!$conn->set_charset("utf8")) {
    die('Error loading character set utf8: ' . $conn->error);
} else {
    //echo "Current character set: " . $conn->character_set_name();
}


?>