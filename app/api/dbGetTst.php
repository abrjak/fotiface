<?php

    include('dbConnect.php');
    $testdata = array();
    $query = "SELECT * FROM tst";

    $statement = $mysqli->prepare($query);

    $statement->execute();

    $result = $statement->get_result();

    $i = 0;

    while ($row = mysqli_fetch_assoc($result)){
        $testdata[$i]['id'] = $row['id'];
        $testdata[$i]['username'] = $row['username'];
        $i++;
    }

    $json = json_encode($testdata);
    echo $json;
    $result->free();
    $statement->close();
    exit;