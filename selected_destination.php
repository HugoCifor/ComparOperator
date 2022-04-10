<?php

use LDAP\Result;

include "./config/bdd.php";
include './config/autoload.php';

$manager = new Manager();
$control = $manager ->getDestinationNames();


if (isset($_GET['dest']) && in_array($_GET['dest'],$control)) {?>
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
<<<<<<< HEAD
 <nav id="navbar"class="flex flex-row items-center img-fluid ">
        <img id="logo3" src="./images/logo3.png" class="img-fluid " >
        <img id="logo4" src="./images/logo4.png"class="img-fluid " >
   </nav>  
        <h1 id="titledestination" class="img-fluid text-blue-900 text-center text-6xl italic"><br><?=$_GET['dest']?></h1><br><br><br><br>
        <div id="dest" class="img-fluid">
=======
     <nav id="navbar"class="flex flex-row items-center img-fluid">
         <img id="logo1" src="./images/logo1.png" class="img-fluid " >
        </nav>  
        <h1 id="titledestination" class="img-fluid text-gray-800 text-center text-5xl italic"><?=$_GET['dest']?></h1><br><br><br><br><br><br>
>>>>>>> e776a056d768878513e97a5e97ed7d9ba9571125


<<<<<<< HEAD
            <table class="table img-fluid w-50 h-50 bg-blue-100">
                <thead class="img-fluid">
                    <h3> 
                        <?php
                        $manager = new Manager();
                        $TOs = $manager->getTONamesByDest($_GET['dest']);
                        ?>
                    </h3>
                    <tr class="img-fluid ">
                        <th scope="col">Opérateur</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Notes</th>
                    </tr>
                </thead>
                <tbody>
                   
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
                        </tr>
                </tbody>
            </table>
        </div>
=======
            

        <div class="NoteImageRevue">
>>>>>>> e776a056d768878513e97a5e97ed7d9ba9571125
        <div class="TOtoDest">
            <div class="TOResult">
                <?php
                $TOsNames = $manager->getTONamesByDest($_GET['dest']); 

                foreach ($TOsNames as $key => $value) {
                    ?>
                    <div class="allTO"> <?php
                        $donneeTO = $manager-> prepDataForTO($value);
                        $premium = new TourOperator($donneeTO);
                        $result = $premium->getPremium(); 
                        if ($result==1) {
                            ?><div class="TO"><a href=<?=$donneeTO['link']?>><?=$donneeTO['name']?></a></div><?php 
                        }else{
                            ?><div class="TO"><?=$value?></div> <?php
                        }     ?> 

                        <div class="TONotes">
                            <?php 
                                $donneeTO = $manager-> prepDataForTO($value);
                                $donneeDEST = $manager-> prepDataForDEST($_GET['dest'],$donneeTO['id']);
                    
                                $newDest= new Destination($donneeDEST);
                                $price = $newDest->getPrice();
                    
                                $premium = new TourOperator($donneeTO);
                                $result = $premium->getGrade();

                                ?>
                                <div class='notesStars'>

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

                                    for ($i=0; $i <5-ceil($result); $i++) { 
                                        ?><img class="star"  src="./images/star-line-yellow-1.webp" alt="" srcset=""><?php
                                    }?>

                                    </div>
                                    <div class="note"><?=$result?>/5</div> <?php
                                }else {?>
                                    <div class="note">pas encore noté</div> <?php
                                }?>
                                </div>           
                        </div>  
                        <div class="price">
                            <?=$price?>
                        </div>
                    </div><?php
                    
                }?>  
            </div>  
        </div>
    <div class="imgLocation h-50 w-50 flex flex-row ">
        <?php
        $imgLocation = new Destinationdetail($_GET['dest']);
        $imageFind = $imgLocation -> getImage();
         ?><img class="LocImg" src=<?=$imageFind['img']?> alt="" class="img-fluid" >
    </div>

    
    <div class="revue">
        <div class="alreadyPostedReview">
            <?php 
            $donneeTO = $manager-> prepDataForTO($value);
            $donneeReview = $manager->preparDataForReview($donneeTO['id']);
            foreach ($TOsNames as $key => $value) {
                ?><div class="comments"><?php
                

                $donneeTO = $manager-> prepDataForTO($value);
                $donneeReview = $manager->preparDataForReview($donneeTO['id']);
                foreach ($donneeReview as $key => $valueTO) {
                    if ($key==0) {
                       echo($value.' : ');
                    }   
                }

                foreach ($donneeReview as $key => $valueTO) {
                    $newreview = new Review($valueTO);
                    ?>
                        <div class="commentary">
                            <div class="author">
                                <?php echo($newreview->getAuthor()." : ");
                                ?>
                            </div> 
                            <div class="message">
                                <?php $test = $newreview->getMessage();
                                echo($test);?>
                            </div>
                        </div><?php
                  }?>
                
                </div><?php
     
            }
        ?>
            
        </div>
        <div class="newReview">
            <form action="./process/addReview.php" method="post">
                <input class='author' type="text" name="author" id="author" placeholder="votre nom">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="votre message..."></textarea> 
                <select id="select" name="TO" size="1" class="TOForm">
                        <?php foreach ($TOsNames as $key => $value) { ?> 
                            <option href=<?=$value?> ><?=$value?> </option> <?php
                        } ?>  
                </select><br>
                <label>note</label>
                <select id="select" name="score" size="1" class="TOForm">
                    <?php for ($i=1; $i <6 ; $i++) { ?>
                        <option href=<?=$i?> ><?=$i?> </option> <?php
                    }?>
                </select><br>
                <input type="submit" value="envoyer">
            </form>

            
            <div class="newMessage"></div>
        </div>
    </div>
</div>
    <?php   //affichage form ajout com et note


    ?>
<<<<<<< HEAD
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
                    <!-- <?php foreach ($patients as $patient) { ?>
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
<footer id="footer" class="align-content bg-blue-100 text-blue-900 text-center font-medium p-10">
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
=======


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
    <?php
                
}else{
    header('location:./index.php');
}

>>>>>>> e776a056d768878513e97a5e97ed7d9ba9571125
