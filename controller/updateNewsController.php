<?php
    require_once("config.php");
    $id = $_POST['id'];
    $votesSum = $_POST['votesSum'];
    $votesCount = $_POST['votesCount'];

    if($votesCount!=0)
        $updateNewsVoteQuery = "UPDATE data_news SET votes_count='$votesCount', votes_sum='$votesSum' WHERE id='$id'";
    else
        $updateNewsVoteQuery = "UPDATE data_news SET votes_sum='$votesSum' WHERE id='$id'";

    if ($conn->query($updateNewsVoteQuery) === TRUE) 
        $response = true;
    else
        $response = false;
        
    $conn->close();
    header('Content-Type: application/json');
    echo json_encode($response);