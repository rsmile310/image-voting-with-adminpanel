<?php
    if (session_status() === PHP_SESSION_NONE) @session_start();
    include_once('config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username=="admin1"&&$password=="admin1") {
        $_SESSION['access_id']=$username;
        $response = true;
    }
    else
        $response = false;
    $conn->close();
    header('Content-Type: application/json');
    echo json_encode($response);
?>