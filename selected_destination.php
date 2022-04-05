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
     <link rel="stylesheet" href="./css/destination.css">
     <title>Document</title>
 </head>
 <body>
     <?php
$manager = new Manager();
$TOs = $manager->getTOName($_GET['dest']);

var_dump($TOs)
?>
     <div class="TOResult">
        
            <?php foreach ($TOs as $key => $value) {
                ?> <div class="TO"><?=$value?></div> <?php
            }
            ?>
            <?php foreach ($TOs as $key => $value) {
                $set= new Manager();
                $donnee = $set-> prepDataForTO($value);
                $set = new TourOperator($donnee);
                $premium = $set->getPremium() ;
                var_dump($premium);

           } ?>
            
     </div>


     
 </body>
 </html>