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
 <nav id="navbar"class="flex flex-row items-center img-fluid ">
        <img id="logo3" src="./images/logo3.png" class="img-fluid " >
    </nav>  
    <h1 id="titledestination" class="img-fluid text-blue-900 text-center text-6xl italic"><br><?=$_GET['dest']?></h1><br><br><br><br>
    <a id="returnHome"class="text-blue-900 text-xl"href="./index.php"> Retour page accueil</a>    
    <div id="dest" class="img-fluid">
            <table class="table">
                <thead class="bg-blue-100">
                    <h3> 
                        <?php
                        $manager = new Manager();
                        $TOs = $manager->getTONamesByDest($_GET['dest']);
                        ?>
                    </h3>
                    <tr class="">
                        <th scope="col" class="text-xl">Opérateur</th>
                        <th scope="col" class="text-xl">Prix</th>
                        <th scope="col" class="text-xl">Notes</th>
                    </tr>
                </thead>
                <tbody class="table bg-red ">    
                    <?php foreach ($TOs as $key => $value) {
                        $set= new Manager();
                        $donnee = $set-> prepDataForTO($value);
                        $premium = new TourOperator($donnee);
                        $result = $premium->getPremium();
                    
                    if ($result==1) {
                        ?><tr>
                            
                            <th class="TO"><a href=<?=$donnee['link']?>><?=$donnee['name']?></a></th><?php 
                    }else{
                        ?><th class="TO"><?=$value?></th> <?php
                    }       
                }?>  
           
                   
                <?php foreach ($TOs as $key => $value) {
                    $set= new Manager();
                    $donnee = $set-> prepDataForTO($value);
                    $premium = new TourOperator($donnee);
                    $result = $premium->getGrade();
                    
                    ?><th class='notesStars'><a href=<?=$donnee['link']?>><?=$donnee['name']?></a></th><?php
                    
                    if ($result>0) {
                    
                        ?><th class='stars'> <?php

                        for ($i=0; $i < $result; $i++) { 
                            if ($result-$i>=1) {
                                ?><img class="star"  src="./images/star.webp" alt="" srcset=""><?php
                            }elseif ($result-$i>0) {
                                ?><img class="star" src="./images/star-half-yellow.webp" alt="" srcset=""><?php
                            }
                        }
                        
                        for ($i=0; $i <5-$result; $i++) { 
                            ?><img class="star"  src="./images/star-line-yellow-1.webp" alt="" srcset=""><?php
                        }?>
                
                    </th>
                        <th class="note"><?=$result?>/5</tr> <?php
                    }else {
                        ?><th class="note">pas encore noté</tr> <?php
                    }
                        ?></tr><?php
                } ?>
                </tbody>
            </table>
        </div>
            <div class="TONotes">

               
            </div>
        </div>
    <div class="imgLocation  flex flex-row ">
        <?php
        $imgLocation = new Destinationdetail($_GET['dest']);
        $imageFind = $imgLocation -> getImage();
         ?><img src=<?=$imageFind['img']?> alt="" class="img-fluid" >
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
        <h1 class="text-center">Nos tours-opérateurs</h1>
        <section>
            <table class="table bg-blue-100">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Tour-opérateur</th>
                        <th scope="col">Commentaires</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php foreach ($TO as $key =>$value) { ?>
                        <tr>
                            <th scope="row"><?= $patient['id'] ?></th>
                            <td><?= $patient[''] ?></td>
                            <td><?= $patient[''] ?></td>
                            <td><?= $patient['comment'] ?></td>   
                        </tr>
                    <?php } ?> -->
                </tbody>
            </table>
        </section>
    </main>
<footer id="footer" class="align-content bg-blue-200 text-blue-900 text-center font-medium p-10">
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
        <div  class="text-center text-gray-900">Production : DEVEAUX Sarah et LAMURE Hugo _2022_ </div> 
    </div>
</footer> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="/JS/main.js"></script>
 </body>
 </html>