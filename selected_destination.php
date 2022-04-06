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
    <div class="nomDeDestination">
        <h1><?=$_GET['dest']?></h1>
    </div>


    <?php
    $manager = new Manager();
    $TOs = $manager->getTONamesByDest($_GET['dest']);
    ?>
    <h3>Nos tours-opérateur</h3>
    <div class="TOtoDest">

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

        <div class="TONotes">

            <?php foreach ($TOs as $key => $value) {
            $set= new Manager();
            $donnee = $set-> prepDataForTO($value);
            $premium = new TourOperator($donnee);
            $result = $premium->getGrade();
            ?><div class='notesStars'>

                <?php
                if ($result>0) {

                    ?><div class='stars'> <?php

                    for ($i=0; $i < $result; $i++) { 
                        if ($result-$i>=1) {
                           ?><img class="star"  src="./images/star.webp" alt="" srcset=""><?php
                        }elseif ($result-$i>0) {
                            ?><img class="star" src="./images/star-half-yellow.webp" alt="" srcset=""><?php
                        }
                    }
                    for ($i=0; $i <5-$result; $i++) { 
                        ?><img class="star"  src="./images/star-line-yellow-1.webp" alt="" srcset=""><?php
                    }
                    ?>

                    </div>
                    
                    <div class="note"><?=$result?>/5</div> <?php
                }else {

                    ?><div class="note">pas encore noté</div> <?php
                }

            ?></div><?php
        } ?>

        </div>

    </div>

    <div class="imgLocation">
        <?php
        $imgLocation = new Image($_GET['dest']);
        $imageFind = $imgLocation -> getImage();
         ?><img src=<?=$imageFind['img']?> alt="" >

   
    </div>

   
        <div class="alreadyPostedReview">
            <div class="author"></div>
            <div class="message"></div>
        </div>
        <div class="newReview">
            <div class="newAuthor"></div>
            <div class="newMessage"></div>
        </div>

      <?php    //affichage form ajout com et note


    ?>

     
 </body>
 </html>