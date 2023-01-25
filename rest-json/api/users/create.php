<?php

// HEADERS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/User.php';

//Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog user object

$user = new User($db);

//Get raw user data
$data = json_decode(file_get_contents("php://input"));

$user->first_name = $data->first_name;
$user->last_name = $data->last_name;
$user->phone = $data->phone;
$user->email = $data->email;

//Create user

if($user->create())
{
    
    echo json_encode(array(
        'message' => 'User created!'
    ));
    session_start();
}else
    echo json_encode(array(
        'error' => 'User not created!'
    ));

?>