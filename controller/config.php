<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wholesome_db";

    // $servername = "localhost";
    // $username = "wholesome_dbusr";
    // $password = "ROst0442zCi1Y";
    // $dbname = "wholesome_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'utf8');
    