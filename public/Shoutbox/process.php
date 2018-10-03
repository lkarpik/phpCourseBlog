<?php

include 'database.php';

// Check if submit

if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Set timezone
    date_default_timezone_set('Europe/Warsaw');
    $time = date('H:i:s', time());
    
    // Validate entry
    if(!isset($user) || $user == '' || !isset($message) || $message == ''){
        $error = 'Please enter Your name and message';
        header('Location: index.php?error='.urlencode($error));
        exit();
    } else {
        $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time')";
        if(!mysqli_query($con, $query)){
            die('Error: '.mysqli_error($con));
        } else 
        header('location: index.php');
        exit();
    }
mysqli_close($con);

}
