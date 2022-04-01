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
    <link rel="stylesheet" href="./css/index.css">
    <title>comparOperator</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" media="screen"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav id="navbar"class="flex flex-row items-center"style="background-image: url(https://sacavoyage.fr/wp-content/uploads/AAAAAAA.jpg);">
            <span class=" ">HS Company</span>
                <ul class="flex flex-row text-white font-normal text-lg">
                    
                    
                </ul>
        </nav>
<header>
 
</header>


<?php $data = 'oui'; 
    $classe = new Manager($data);
    $info = $classe ->getDestinationNames();
    ?>
    <ul><?php
        foreach ($info as $key => $value) {
            echo "<li class='deroulant ".$value."'onclick='names(this)'>".$value."</li>";
        }
    ?>
    </ul>

    
<script src="./JS/main.js"></script>
</body>

<script src="./js/test.js"></script> 

</html>