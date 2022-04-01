<?php
include "./config/bdd.php";
include './config/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparOperator</title>
</head>
<body>
    <h1>welcome to the comparOperator</h1>
    <?php $data = 'oui';
    $classe = new Destination($data);
    $info = $classe ->getDestinationNames();

foreach ($info as $key => $value) {
    echo $value."</br>";
}
?>

</body>
</html>