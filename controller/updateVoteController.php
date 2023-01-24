<?php
    require_once("config.php");
    $id = $_POST['id'];
    $votesSum = $_POST['votesSum'];
    $votesCount = $_POST['votesCount'];

    if($votesCount!=0)
        $updateVoteQuery = "UPDATE data_images SET votes_count='$votesCount', votes_sum='$votesSum' WHERE id='$id'";
    else
        $updateVoteQuery = "UPDATE data_images SET votes_sum='$votesSum' WHERE id='$id'";

    if ($conn->query($updateVoteQuery) === TRUE) 
        $response = true;
    else
        $response = false;
        
    $conn->close();
    header('Content-Type: application/json');
    echo json_encode($response);