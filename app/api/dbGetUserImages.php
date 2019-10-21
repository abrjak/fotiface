<?php

include('dbConnect.php');

$user_id = 1;

$images = array();

$query = "SELECT id, image_path, image_name from tbl_image where fk_user_id=?";

$statement = $mysqli->prepare($query);

$statement->bind_param('i', $user_id);

$statement->execute();

$result = $statement->get_result();

$i = 0;

while($row = mysqli_fetch_assoc($result)){
    $images[$i]['id'] = $row['id'];
    $images[$i]['image_path'] = $row['image_path'];
    $images[$i]['image_name'] = $row['image_name'];
    $i++;
}

$json = json_encode($images);
echo $json;
$result->free();
$statement->close();
exit;