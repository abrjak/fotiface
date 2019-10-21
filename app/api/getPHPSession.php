<?php
    session_start();
    
    $userId;
    if(isset($_SESSION["userId"])){
        $userId = $_SESSION["userId"];
    } else {
        $userId = 0;
    }

$json = json_encode($userId);
echo $json;

?>
