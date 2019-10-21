<?php

include('dbConnect.php');

$imagename = $_FILES["uploadImage"]["name"];

$imagetmp = addslashes(file_get_contents($_FILES['uploadImage']['tmp_name']));

$query = "INSERT INTO tbl_image(user_id, image, image_name) VALUES(1, '$imagetmp', '$imagename')";

$statement = $mysqli->prepare($query);

$statement->execute();

