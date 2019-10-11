<?php

    include('dbConnect.php');

    session_start();

    $form_data = json_decode(file_get_contents('php://input'));

    $_SESSION['name'] = $form_data->username;

    $query = 'SELECT username, password FROM user WHERE username = ?';
    
    $statement = $mysqli->prepare($query);

    $statement->bind_param('s', $formdata->username);

