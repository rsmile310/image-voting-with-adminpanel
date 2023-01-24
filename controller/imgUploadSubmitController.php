<?php
    require_once("config.php");
    // Get reference to uploaded image
    $image = $_FILES["upload_file"];
    $image_name = time() ."_".$image["name"];
    $file_path = '../uploads';
    if(!is_dir($file_path))
        mkdir($file_path, 0777, true);
    // Move the temp image file to the images/ directory
    move_uploaded_file(
        // Temp image location
        $image["tmp_name"],
        // New image location, __DIR__ is the location of the current PHP file
        __DIR__ ."/". $file_path ."/".$image_name
    );
    $sql = "INSERT INTO data_submissions(filename) VALUES('".$image_name."')";
    $result = $conn->query($sql);
    if($result)
        echo json_encode(true);
?>