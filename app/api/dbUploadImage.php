<?php

session_start();

include('dbConnect.php');

$userId = $_SESSION["userId"]; 

$folder = "images/";

$total = count($_FILES["uploadImage"]["name"]);

$query = "INSERT INTO tbl_image (fk_user_id, image_path, image_name) VALUES";

for($i=0 ; $i < $total ; $i++){

    $uploadImage = $_FILES["uploadImage"]["name"][$i];

    $imagePath = "$folder".$_FILES["uploadImage"]["name"][$i];

    move_uploaded_file($_FILES["uploadImage"]["tmp_name"][$i], $imagePath);

    if($i == $total-1){
        $query .= "('$userId', '$imagePath', '$uploadImage')";
    } else {
        $query .= "('$userId', '$imagePath', '$uploadImage'),";
    }
   
}

echo $query;

$statement = $mysqli->prepare($query);

$statement->execute();

$statement->close();

header('Location: http://localhost/fotiface/#!/gallery');

exit;









