<?php
    if (session_status() === PHP_SESSION_NONE) @session_start();
    unset($_SESSION["access_id"]);
    // setcookie('access_id', "", time() + (86400 * 30), "/");
    header("Location: ../admin/");
?>