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
$info = $classe ->getDestinationNames();
?>

<div class="AddTO">
    <h2>Ajouter un TO</h2>
    <form action="" method="post">
        <label >Nom du tour-opérateur</label>
        <input type="text" name="TOName" id="TOName"><br>
        <label >Lien du site du tour-opérateur</label>
        <input type="text" name="TOLink" id="TOLink"><br>
        <label >le tour-opérateur est-il premium?</label>
        <input type="checkbox" name="TOPremium" id="TOPremium"><br>
        <label >selectionner la destination que propose le tour-opérateur</label>
        <select name="destination" id="destination">
                <?php foreach ($info as $key => $value) { ?> 
                    <option href=<?=$value?> ><?=$value?> </option> <?php
                } ?> 
        </select><br>
        <label >ajout du prix</label>   
        <input type="text" name="price" id="price" placeholder="prix en euro €">     <br>
        <button type="submit">valider</button>
    </form>
</div>

<div class="AddTO">
    <h2>Ajouter une offre</h2>
    <form action="" method="post">
        <label >selectionner la destination que propose le tour-opérateur</label>
        <select name="destination" id="destination">
                <?php foreach ($info as $key => $value) { ?> 
                    <option href=<?=$value?> ><?=$value?> </option> <?php
                } ?> 
        </select><br>
        <label >selectionner le tour-opérateur</label>
        <select name="destination" id="destination">
                <?php foreach ($info as $key => $value) { ?> 
                    <option href=<?=$value?> ><?=$value?> </option> <?php
                } ?> 
        </select><br>
        <label >ajout du prix</label>   
        <input type="text" name="price" id="price" placeholder="prix en euro €">     <br>
        <button type="submit">valider</button>

    </form>
</div>
    

<div class="AddTO">
    <h2>Gestion des premiums</h2>
    <form action="" method="post">
        <label >selectionner le tour-opérateur</label>
        <select name="destination" id="destination">
                <?php foreach ($info as $key => $value) { ?> 
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