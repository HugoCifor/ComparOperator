<?php
include "../config/bdd.php";
include '../config/autoload.php';

$TOname = $_POST['TOname'];
$destPrice = $_POST['destPrice'];

if (!empty($_POST['DestName'])&& $_POST['DestName'] != ' ' ) {
    $destName=$_POST['DestName'];
}else{
    $destName=$_POST['selectDest'];
}

$newOffer =array(
    'TOname'=>$TOname,
    'destPrice'=>$destPrice,
    'destName'=>$destName
);



$offer = new Manager();
$offer-> creatNewOffer($newOffer);


header('Location:../admin.php');

