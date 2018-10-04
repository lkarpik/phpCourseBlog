<?php
// Create connection to database
$db_host = '192.168.10.10';
$db_name = 'quizzer';
$db_user = 'homestead';
$db_pass = 'secret';

// Create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// error handler

if ($mysqli->connect_error) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}