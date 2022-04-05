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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="./CSS/main.css" media="screen"/> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>comparOperator</title>
</head>
<<<<<<< HEAD
<body id="body">
=======
<body>



<nav id="navbar"class="flex flex-row items-center"style="background-image: url(https://sacavoyage.fr/wp-content/uploads/AAAAAAA.jpg);">

            <span class=" ">HS Company</span>
                <ul class="flex flex-row text-white font-normal text-lg">
                    
                    
                </ul>
        </nav>
<header>
 
</header>

<?php
$classe = new Manager();
$info = $classe ->getDestinationNames();

?>
>>>>>>> b139d4af44841bc4611ca971d174329d4ad2bcb9
    <img id="logo1"src="./images/logo3.png" alt="">
<header id="header">  
    <img id="logo2"src="./images/logo2.png" alt="">
    <nav id="navbar"class="flex flex-row items-center justify-between">
        <ul id="destination" class="flex flex-row text-white font-normal text-lg">
            <li class="mx-2 p-2 rounded-white ease-in-out transition duration-500 ease-in-out">
<<<<<<< HEAD
                <select id="select" name="nom" size="1" class="rounded flex flex-row text-black text-lg ">
                    <option href="#rome">Rome</option>
                    <option href="#londres">Londres</option>
                    <option href="#monaco" >Monaco</option>
                    <option href="#tunis">Tunis</option>
                    <option href="#mars">Mars</option>
                </select>
                <button type="submit">Valider</button>

                <form action="./selected_destination.php" method="get">
                    <select id="select" name="dest" size="1" class="rounded flex flex-row text-black text-lg ">
                        <?php foreach ($info as $key => $value) { ?> 
                            <option href=<?=$value?> ><?=$value?> </option> <?php
                        } ?>  
                    </select>
                    <button type="submit" class="text-black">Valider</button>
                </form>

            </li>
        </ul>
    </nav>
    <section >   
     
    <div id="sliderSettings" class=" ">
        <div id="pSlider" class="pSlider">
            <ol id="slider-container"class="slider-container" dir="ltr">
                <li id="slide_1" class="li_slide">
                    <div class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_1" src=""></a> 
                    <a class="next_slide" href="#slide_2" src=""></a> 
                </li>
                <li id="slide_2" class="li_slide">
                    <div class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_2"></a> 
                    <a class="next_slide" href="#slide_3" ></a> 
                </li>
                <li id="slide_3" class="li_slide">
                    <div class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_3"></a> 
                    <a class="next_slide" href="#slide_4"></a> 
                </li>
                <li id="slide_4" class="li_slide">
                    <div  class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_4"></a>
                    <a class="next_slide" href="#slide_5"></a> 
                </li>
                <li id="slide_5" class="li_slide">
                    <div  class="slide-snapper"></div>
                    <a class="prev_slide" href="#slide_5"></a>
                    <a class="next_slide" href="#slide_1"></a> 
                </li>
            </ol>
        </div>
    </div>
<<<<<<< HEAD
   
=======
  

<script src="./JS/main.js"></script>
</body>

>>>>>>> b139d4af44841bc4611ca971d174329d4ad2bcb9
    </section>

</header>
<section>

</section>
<main>
<section>
    <div id="card" style="background-image: url(https://www.alibabuy.com/photos/library/1500/11411.jpg);">  
        <div class="box-container">
	        <div class="box-item">
                <div class="flip-box">
                    <div class="flip-box-front text-center" style="background-image: url('https://www.voyageur-independant.com/wp-content/uploads/quel-city-pass-pour-rome.jpg');">
                        <div class="inner color-white">
                            <h3  id="h3" class="flip-box-header  text-black font-serif italic text-5xl ">Rome</h3>
                            <p class="text-black"></p>
                        </div>
                    </div>
                    <div class="flip-box-back text-center" style="background-image: url('https://media.istockphoto.com/illustrations/background-blue-light-soft-abstract-website-wallpaper-illustration-id1329666470?k=20&m=1329666470&s=612x612&w=0&h=WjF1mgbJrTzQfKGL8B2iaKH-Y2Q9--NVwArM58VEN7E=');">
                        <div class="inner color-white">
                            <h3 class="flip-box-header">"rom-antique"</h3>
                            <p>Civilisations antiques et modernes dans cette métropole vieille de 2 500 ans.</p>
                            <button class="flip-box-button">découvrir</button>
                        </div>
                    </div>
                </div>
	        </div>
	        <div class="box-item">
                <div class="flip-box">
                    <div class="flip-box-front text-center" style="background-image: url('https://cdn2.civitatis.com/reino-unido/londres/guia/camden-town.jpg');">
                        <div  class="inner color-white">
                            <h3 id="h3" class="flip-box-header text-black font-serif italic text-5xl ">Londres</h3>
                            <p class="text-black"></p>
                        </div>
                    </div>
                    <div class="flip-box-back text-center" style="background-image: url('https://media.istockphoto.com/illustrations/background-blue-light-soft-abstract-website-wallpaper-illustration-id1329666470?k=20&m=1329666470&s=612x612&w=0&h=WjF1mgbJrTzQfKGL8B2iaKH-Y2Q9--NVwArM58VEN7E=');">
                        <div class="inner color-white">
                            <h3 class="flip-box-header">Hello...</h3>
                            <p> On vous emmène dans les coins les plus insolites de Londres</p>
                            <button class="flip-box-button">découvrir</button>
                        </div>
                    </div>
                </div>
	        </div>
	        <div class="box-item">
                <div class="flip-box">
                    <div class="flip-box-front text-center filter-" style="background-image: url('https://img.ev.mu/images/portfolio/villes/40699/1605x1070/297766.jpg');">
                        <div class="inner color-white">
                            <h3 id="h3" class="flip-box-header text-black font-serif italic text-5xl ">Monaco</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="flip-box-back text-center" style="background-image: url('https://media.istockphoto.com/illustrations/background-blue-light-soft-abstract-website-wallpaper-illustration-id1329666470?k=20&m=1329666470&s=612x612&w=0&h=WjF1mgbJrTzQfKGL8B2iaKH-Y2Q9--NVwArM58VEN7E=');">
                        <div class="inner color-white">
                            <h3 class="flip-box-header">La principauté du Rocher </h3>
                            <p> Enclavée en côte d’Azur, c'est un lieu de villégiature privilégié de la Jet-Set.</p>
                            <button class="flip-box-button">découvrir</button>
                        </div>
                    </div>
                </div>
	        </div>
            <div class="box-item">
                <div class="flip-box">
                    <div class="flip-box-front text-center filter-" style="background-image: url('https://www.voyage-tunisie.info/wp-content/uploads/2017/11/tunis3.jpg');">
                        <div class="inner color-white">
                            <h3 id="h3" class="flip-box-header text-black font-serif italic text-5xl ">Tunis</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="flip-box-back text-center" style="background-image: url('https://media.istockphoto.com/illustrations/background-blue-light-soft-abstract-website-wallpaper-illustration-id1329666470?k=20&m=1329666470&s=612x612&w=0&h=WjF1mgbJrTzQfKGL8B2iaKH-Y2Q9--NVwArM58VEN7E=');">
                        <div class="inner color-white">
                            <h3 class="flip-box-header">Culture et sable fin...</h3>
                            <p>Entre plages de rêve et trésors architecturaux,à la recherche d'un séjour détente...</p>
                            <button class="flip-box-button">découvrir</button>
                        </div>
                    </div>
                </div>
	        </div>
            <div class="box-item">
                <div class="flip-box">
                    <div class="flip-box-front text-center filter-" style="background-image: url('https://file1.science-et-vie.com/var/scienceetvie/storage/images/1/1/6/116656/l-incroyable-conquete-mars.jpg?alias=original');">
                        <div class="inner color-white">
                            <h3 id="h3" class="flip-box-header text-black font-serif italic text-5xl ">Mars</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="flip-box-back text-center" style="background-image: url('https://media.istockphoto.com/illustrations/background-blue-light-soft-abstract-website-wallpaper-illustration-id1329666470?k=20&m=1329666470&s=612x612&w=0&h=WjF1mgbJrTzQfKGL8B2iaKH-Y2Q9--NVwArM58VEN7E=');">
                        <div class="inner color-white">
                            <h3 class="flip-box-header">Avec Rover</h3>
                            <p>Explorer la planète Mars devient possible pour tout le monde</p>
                            <button class="flip-box-button">découvrir</button>
                        </div>
                    </div>
                </div>
	        </div>
        </div>
    </section>
</main>
<footer id="footer">
    <img id="logofooter"src="./images/logo.PNG" alt="">
    <img id="logofooter"src="./images/logo3.PNG" alt="">
<form id="notes" action="" method="post">
        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre">
        </div>
        <div>
            <label for="commentaire">Commentaire</label>
            <textarea name="comment" id="commentaire"></textarea>
        </div>
        <div class="stars">
            <i class="lar la-star" data-value="1"></i><i class="lar la-star" data-value="2"></i><i class="lar la-star" data-value="3"></i><i class="lar la-star" data-value="4"></i><i class="lar la-star" data-value="5"></i>
        </div>
        <input type="hidden" name="note" id="note" value="0">
        <button type="submit">Valider</button>
    </form>
</footer>
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="/JS/main.js"></script>

</html>