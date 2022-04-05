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
    <title>Document</title>
</head>
<body>

<?php
$classe = new Manager();
$infoDest = $classe ->getDestinationNames();
$listTO = $classe ->getAllTONames();
?>

<div class="AddTO">
    <h2>Ajouter un TO</h2>
    <form action="./process/addTO.php" method="post">
        <label >Nom du tour-opérateur</label>
        <input type="text" name="TOName" id="TOName"><br>
        <label >Lien du site du tour-opérateur</label>
        <input type="text" name="TOLink" id="TOLink"><br>
        <label >le tour-opérateur est-il premium?</label>
        <input type="checkbox" name="TOPremium" id="TOPremium"><br>
        <button type="submit">valider</button>

    </form>
</div>

<div class="AddOffer">
    <h2>Ajouter d'une destination</h2>
    <form action="./process/addOffer.php" method="post">
        <label >créer une destination</label>
        <input type="text" name="DestName" id="DestName">
        <label > ou selectionner une destination </label>
        <select name="selectDest" id="destinationAddOfferDEST" class="destination">
                <?php foreach ($infoDest as $key => $value) { ?> 
                    <option value="<?=$value?>" ><?=$value?> </option> <?php
                } ?> 
        </select><br>
        <label >selectionner le tour-opérateur</label>
        <select name="TOname" id="TOAddOfferTO" class="TO">
                <?php foreach ($listTO as $key => $value) { ?> 
                    <option value="<?=$value?>" ><?=$value?> </option> <?php
                } ?> 
        </select><br>
        <label >Prix</label>
        <input type="text" name="destPrice" id="destPrice" placeholder="prix en euro €"><br>
        <button type="submit">valider</button>

    </form>
</div>


    

<div class="SetPremium">
    <h2>Gestion des premiums</h2>
    <form action="" method="post">
               <label >selectionner le tour-opérateur</label>
        <select name="TOname" id="TOPremium" class="TO">
                <?php foreach ($listTO as $key => $value) { ?> 
                    <option href=<?=$value?> ><?=$value?> </option> <?php
                } ?> 
        </select><br>
        <label >le tour-opérateur est-il premium?</label>
        <input type="checkbox" name="TOPremium" id="TOPremium"><br>
        <button type="submit">valider</button>
    </form>
</div>
</body>
</html>