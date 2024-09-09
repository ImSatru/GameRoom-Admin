<?php

$servername = "localhost";
$username = "root";
$password = "Fernandaedward17";
$dbname = "usc";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

