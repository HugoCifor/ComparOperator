<?php
include "./config/bdd.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="wrapper">
        <div class="wrapperLondre">Londres</div>
        <div class="wrapperRome">Rome</div>
        <div class="wrapperMonaco">Monaco</div>
        <div class="wrapperTunis">Tunis</div>
    </div>
    
<script src="/JS/main.js"></script>
</body>
</html>