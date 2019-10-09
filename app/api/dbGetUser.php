<?php

    include('dbConnect.php');

    $id = 1;

    $user = array();
    $query = "SELECT * FROM tst WHERE id=?";

    $statement = $mysqli->prepare($query);

    $statement->bind_param("i", $id);

    $statement->execute();

    $result = $statement->get_result();

    while ($row = mysqli_fetch_assoc($result)){
        $user['id'] = $row['id'];
        $user['username'] = $row['username'];
    }

    $json = json_encode($user);
    echo $json;
    $result->free();
    $statement->close();
    exit;