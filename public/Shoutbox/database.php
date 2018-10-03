<?php

// Connect

$con = mysqli_connect('192.168.10.10', 'homestead', 'secret', 'shoutit', '3306');

// Test con

if (mysqli_connect_errno()) {
    echo "Failed to connecto to database: ".mysqli_connect_error();
} 