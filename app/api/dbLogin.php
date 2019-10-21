<?php

include('dbConnect.php');

session_start();

$form_data = json_decode(file_get_contents("php://input"));

$validation_error = '';

$username = $form_data->username;

$query = "SELECT * FROM tbl_user WHERE username =?";

$statement = $mysqli->prepare($query);

$statement->bind_param("s", $username);

$statement->execute();

$result = $statement->get_result();

if($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        if(password_verify($form_data->password, $row['password'])){
            $_SESSION["userId"] = $row['id'];
        } else {
            $validation_error = 'Benutzername oder Passwort sind falsch';
        }
    }
} else {
    $validation_error = 'Benutzername oder Passwort sind falsch';
}

$output = array(
    'error' => $validation_error
);

$json = json_encode($output);
echo $json;

$result->free();
$statement->close();
exit;

?>