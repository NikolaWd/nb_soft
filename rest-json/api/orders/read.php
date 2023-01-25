<?php

// HEADERS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Order.php';

//Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog order object

$order = new Order($db);

// Blog order query
$res = $order->read();
//Get row count
$num = $res->rowCount();

//Check ig any posts
    if($num > 0) 
    {
        $orders_arr = array();
        $orders_arr['data'] = array();

        while($row = $res->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $order_item = array(
                'id' => $id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'value' => $value,
                'dateCreate' => $dateCreate,
            );

            array_push($orders_arr['data'], $order_item);
        }

        echo json_encode($orders_arr);


    }else
    {
        echo json_encode(array(
            'message' => 'No orders found!'
        ));
    }

?>