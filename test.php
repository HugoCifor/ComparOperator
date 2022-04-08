<?php
include "./config/bdd.php";
include './config/autoload.php';

$newtest = new Manager();
$test=$newtest -> isDestinationKnown('Londres');


echo '<pre>' . var_export($test, true) . '</pre>';
?>
<section>
        <div class="box-container">
            <div class="box">
                    <div class="info">
                        <div class="AddOffer">
                            <h2 class="text-white text-center">Ajouter d'une destination</h2><br><br>
                            <form action="./process/addOffer.php" method="post">
                                <label class="text-xl text-white">créer une destination</label>
                                <input type="text" name="DestName" id="DestName" class="rounded">
                                    <label class="text-xl text-white"> ou selectionner une destination </label>
                                    <select name="selectDest" id="destinationAddOfferDEST" class="destination rounded">
                                        <?php foreach ($infoDest as $key => $value) { ?> 
                                            <option value="<?=$value?>" ><?=$value?> </option> <?php
                                        } ?> 
                                    </select><br>
                                    <label class="text-xl text-white" >selectionner le tour-opérateur</label>
                                    <select name="TOname" id="TOAddOfferTO" class="TO rounded">
                                        <?php foreach ($listTO as $key => $value) { ?> 
                                            <option value="<?=$value?>" ><?=$value?> </option> <?php
                                        } ?> 
                                    </select><br>
                                    <label class="text-xl text-white">Prix</label>
                                    <input type="text" name="destPrice" id="destPrice" placeholder="prix en euro €" class="rounded"><br>
                                    <div class="btn">
                                        <button id="btn" type="submit" class="text-xl text">valider</button>
                                    </div>    
                            </form>
                        </div>
                    </div>
            </div>
    </section>