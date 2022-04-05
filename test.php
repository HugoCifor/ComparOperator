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

<nav id="navbar"class="flex flex-row items-center"style="background-color:orange;">
            <span class=" ">HS Company</span>
                <ul class="flex flex-row text-white font-normal text-lg">
                    
                    
                </ul>
        </nav>
<header>
        
    <div id="sliderSettings">
        <div id="pSlider" class="pSlider">
            <ol id="slider-container" dir="ltr">
                <li id="slide_1" class="li_slide">
                    <div class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_4" src=""></a> 
                    <a class="next_slide" href="#slide_2" src=""></a> 
                </li>
                <li id="slide_2" class="li_slide">
                    <div class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_1"></a> 
                    <a class="next_slide" href="#slide_3" ></a> 
                </li>
                <li id="slide_3" class="li_slide">
                    <div class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_2"></a> 
                    <a class="next_slide" href="#slide_4"></a> 
                </li>
                <li id="slide_4" class="li_slide">
                    <div  class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_3"></a>
                    <a class="next_slide" href="#slide_1"></a> </li>
            </ol>
        </div>
    </div>
</header>

<?php // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $classe = new Manager();
    $info = $classe ->getDestinationNames();
    ?>
    <ul><?php
        foreach ($info as $key => $value) {
            echo "<li class='deroulant ".$value."'onclick='names(this)'>".$value."</li>";
        }
    ?>
    </ul>
    
<?php

$test = $classe -> prepDataForTO('Fram');
echo '<pre>' . var_export($test, true) . '</pre>';
?>



<script src="./js/main.js"></script>
</body>
</html>