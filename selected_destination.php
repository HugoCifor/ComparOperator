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
$TOs = $manager->getTONamesByDest($_GET['dest']);

var_dump($TOs)
?>
     <div class="TOResult">
        <?php foreach ($TOs as $key => $value) {
            $set= new Manager();
            $donnee = $set-> prepDataForTO($value);
            $premium = new TourOperator($donnee);
            $result = $premium->getPremium();
            if ($result==1) {
                ?><div class="TO"><a href=<?=$donnee['link']?>><?=$donnee['name']?></a></div><?php 
            }else{
                ?><div class="TO"><?=$value?></div> <?php
            }       
        }?>         
     </div>


     
 </body>
 </html>