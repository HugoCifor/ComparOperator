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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="./CSS/selected_destination.css">
     <title>Destinations</title>
 </head>
 <body id="body">
    <nav id="navbar">
        <div class="nomDeDestination">
            <h1 id="titledestination" class=" text-white text-4xl italic"><?=$_GET['dest']?></h1>
        </div>
        <img id="logo1" src="./images/logo1.png" >
    </nav>

    <?php
    $manager = new Manager();
    $TOs = $manager->getTONamesByDest($_GET['dest']);
    ?>

    <div class="TOtoDest">
        <div class="TOResult">
            <h3>Nos tours-opérateur</h3>

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
        $imgLocation = new Destinationdetail($_GET['dest']);
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
    <main>
    <?php include "./utils/alert.php" ?>
    <h1 class="text-center">Nos tours-opérateurs</h1>
    <section>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Tour-opérateur</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Commentaires</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $patient) { ?>
                    <tr>
                        <th scope="row"><?= $patient['id'] ?></th>
                        <td><?= $patient['toName'] ?></td>
                        <td><?= $patient['price'] ?></td>
                        <td><?= $patient['grade'] ?></td>
                        <td><?= $patient['comment'] ?></td>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>
</main>

<footer id="footer" class="align-content text-white text-center font-medium p-10 ">
        <div class="flex flex-row ">
            <a href="#top"><img id="butTop" class="w-12 " src="./images/Capture.PNG" alt="Retour en haut"></a>
        </div>
        <div class="flex flex-row justify-around ">
            <div id="developpement">
                <h3>Développement :</h3><br>SARL ANTHEDESIGN<br>Adresse : 12 Rue du Huit Mai 1945, 60350 ATTICHY<br>Site Web : www.anthedesign.fr
            </div>
            <div id="hebergement">
                <h3>Hébergement :</h3><br>Hébergeur : SARL ANTHEDESIGN<br>12 Rue du Huit Mai 1945, 60350 ATTICHY<br>Site Web : www.anthedesign.fr
            </div>        
            <div id="editor">
                <h3>Éditeur du Site :</h2><br>SARL ANTHEDESIGN Numéro de SIRET : 75221735600027<br>Responsable éditorial : Hugo ESSIQUE<br>12 Rue du Huit Mai 1945, 60350 ATTICHY<br>Téléphone : 09 72 21 25 07<br>Email : contact@anthedesign.fr<br>Site Web : www.anthedesign.fr
            </div>
        </div>
	    <div><br>
            <div class="text-center text-gray-900">Production : DEVEAUX Sarah et LAMURE Hugo _2022_ </div> 
        </div>
    </footer> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="/JS/main.js"></script>
 </body>
 </html>