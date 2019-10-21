<?php

include('dbConnect.php');

$uploadImage = $_FILES["uploadImage"]["name"];

$folder = "images/";

$imagePath = "$folder".$_FILES["uploadImage"]["name"];

move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $imagePath);

$query = "INSERT INTO tbl_image (fk_user_id, image_path, image_name) VALUES(1, '$imagePath', '$uploadImage')";

$statement = $mysqli->prepare($query);

$statement->execute();

