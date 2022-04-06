<?php
include "../config/bdd.php";
include '../config/autoload.php';


if ($_POST['TOPremium']=='on') {
    $toPremium=$_POST['TOPremium'];
}else{
    $toPremium = 'off';
}
$TOname=$_POST['TOname'];


$updateP = array(
    'TOPremium'=>$toPremium,
    'TOname'=>$TOname
);

$newUpdate = new Manager();
$newUpdate-> updatePremium($updateP);
header('Location:../admin.php');
