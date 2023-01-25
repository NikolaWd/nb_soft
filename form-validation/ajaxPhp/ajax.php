<?php

$request = $_GET['request'];

if($request == "registration")
{
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    $date = strtotime($_POST['date']);
    $d = date("Y-m-d", $date);

    if($gender == "1")
        $gender = "Muški";
    else
        $gender = "Ženski";

    session_start();

    $_SESSION['user'] = $name . " " . $last_name;
    $_SESSION['gender'] = $gender;
    $_SESSION['adress'] = $city . " - " . $adress;
    $_SESSION['date'] =  $d;

    echo "1";

}

?>