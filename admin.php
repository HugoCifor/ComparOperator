<?php
include "./config/bdd.php";
include './config/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./CSS/admin.css" media="screen"/> 
    <title>Document</title>
</head>
<body class=grid grid-cols-1 tablet:grid-cols-2 laptop:grid-cols-3 desktop:grid-cols-4>
<?php
$classe = new Manager();
$infoDest = $classe ->getDestinationNames();
$listTO = $classe ->getAllTONames();
?>
<<<<<<< HEAD
<section>
        <div class="box-container">
            <div class="box ">
                <div class="AddTO">
                    <div class="info">
                        <h2 class="text-white text-center">Ajouter un TO</h2>
                        <form action="./process/addTO.php" method="post">
                            <label >Nom du tour-opérateur</label>
                            <input type="text" name="TOName" id="TOName"><br>
                            <label >Lien du site du tour-opérateur</label>
                            <input type="text" name="TOLink" id="TOLink"><br>
                            <label >le tour-opérateur est-il premium?</label>
                            <input type="checkbox" name="TOPremium" id="TOPremium"><br>
                        
                            <div class="btn">
                                <button type="submit">valider</button>
                            </div>    
                        </form>
                    </div>
</section>
<section>
        <div class="box-container">
            <div class="box">
                    <div class="info">
                        <div class="AddOffer">
                            <h2 class="text-white text-center">Ajouter d'une destination</h2>
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
                                    <div class="btn">
                                        <button type="submit">valider</button>
                                    </div>    
                            </form>
                        </div>
                                </section>
                                <section>
                        <div class="box-container">
            <div class="box">
                    <div class="info">
                        <div class="SetPremium">
                            <h2 class="text-white text-center">Gestion des premiums</h2>
                            <form action="" method="post">
                                <label >selectionner le tour-opérateur</label>
                                <select name="TOname" id="TOPremium" class="TO">
                                <?php foreach ($listTO as $key => $value) { ?> 
                                <option href=<?=$value?> ><?=$value?> </option> <?php
                                } ?> 
                                </select><br>
                                <label >le tour-opérateur est-il premium?</label>
                                <input type="checkbox" name="TOPremium" id="TOPremium"><br>
                                <div class="btn">
                                <button type="submit">valider</button>
                                </div>
                            </form>
                        </div>
                            </section>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</body>
</html>