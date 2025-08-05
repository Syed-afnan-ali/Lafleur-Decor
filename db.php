<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'lafleur';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    // echo "Connected to database";
}

// $conn = new mysqli("localhost", "root", "", "lafleur");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    ?>