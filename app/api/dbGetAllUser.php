<?php

    include('dbConnect.php');
    $user = array();
    $query = "SELECT * FROM tst";

    $statement = $mysqli->prepare($query);

    $statement->execute();

    $result = $statement->get_result();

    $i = 0;

    while ($row = mysqli_fetch_assoc($result)){
        $user[$i]['id'] = $row['id'];
        $user[$i]['username'] = $row['username'];
        $i++;
    }

    $json = json_encode($user);
    echo $json;
    $result->free();
    $statement->close();
    exit;