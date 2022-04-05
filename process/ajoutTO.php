<?php
include "../config/bdd.php";
include '../config/autoload.php';

$toName = $_POST['TOName'];
$toLink = $_POST['TOLink'];
$toPremium = $_POST['TOPremium'];
$destination = $_POST['destination'];
$price = $_POST['price'];

if(
    isset($toName) && !empty($toName) &&
    isset($toLink) && !empty($toLink) &&
    isset($toPremium) && !empty($toPremium) &&
    isset($destination) && !empty($destination) &&
    isset($price) && !empty($price) 
){
    $newTO = array(
        "name" => $toName,
        "link" => $toLink,
        "premium" => $toPremium,
        "destination" => $destination,
        "price" => $price
    );
    
    $TO = new manager();

    $info = $TO -> createTourOperator($newTO);
    // echo '<pre>' . var_export($info, true) . '</pre>';

    
}




