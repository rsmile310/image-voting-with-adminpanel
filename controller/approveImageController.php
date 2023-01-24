<?php
    require_once("config.php");
    $id = $_POST['id'];
    $imgName = $_POST['imgName'];
    $imgRealName = explode("/",$imgName)[2];
    $deleteImageQuery = "DELETE FROM data_submissions WHERE id='".$id."'";

    if ($conn->query($deleteImageQuery)) {
        $insertImageQuery = "INSERT INTO data_images(filename) VALUES('".$imgRealName."')";
        if($conn->query($insertImageQuery)){
            /* Store the path of source file */
            $filePath = $imgName;
            /* Store the path of destination file */
            $destinationFilePath = '../img/'.$imgRealName;
            /* Move File from images to copyImages folder */
            rename($filePath, $destinationFilePath); 
            $response = true;
        }
        else
            $response = false;
    }
    else
        $response = false;
    $conn->close();
    header('Content-Type: application/json');
    echo json_encode($response);