<?php
    require_once("config.php");
    $id = $_POST['id'];
    $imgName = $_POST['imgName'];
    $deleteImageQuery = "DELETE FROM data_submissions WHERE id='".$id."'";

    if ($conn->query($deleteImageQuery)) {
        unlink($imgName);
        $response = true;
    }
    else
        $response = false;
        
    $conn->close();
    header('Content-Type: application/json');
    if($response)
        echo json_encode($response);