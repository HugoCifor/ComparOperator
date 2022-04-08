<?php
include "./config/bdd.php";
include './config/autoload.php';

$newtest = new Manager();
$test=$newtest -> isDestinationKnown('Londres');


echo '<pre>' . var_export($test, true) . '</pre>';
