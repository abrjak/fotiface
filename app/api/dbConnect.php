<?php
    // DB-Configuration für fotiface mit MySQLi 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'fotiface';

    $mysqli = new mysqli($host, $username, $password, $database);

    if ($mysqli->connect_error){
        die('Connection Error (' . $mysqli->connect_errno . ') ' . $mysqli_error);
    }