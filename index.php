<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#113634">
    <meta name="description" content="My portfolio presents me as a web developer intern, specialized in front-end but learning to be a fullstack developer! ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> • Xhesika Milaqi • </title>
    <link rel="apple-touch-icon" sizes="114x114" href="./images/logo-fox.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="icon" size="16x16" type="image/png" href="./images/logo-fox.png">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <img src="./images/logo-fox.png" alt="Logo de portfolio" id="logo">
    <!-- <div id="first-page">
        <div id="leftside"></div>
        <div id="rightside"></div>
    </div> -->
    <header class="row-limit-size">
        <div class="burger">
            <img src="./images/barres.png" alt="Barres de menu burger" id="barres">
        </div>

        <nav id="menu">
            <ul>
                <li><a href="./index.php">ACCUEIL</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="./project.php">Projets</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">À propos</a></li>
            </ul>
        </nav>
    </header>
    <main id="main-page">
        <a href="index.php"><img src="./images/logo-fox1.png" alt="Le logo du portfolio/Fox" id="logo-x"></a>
        <!-- <-- <p class="nom">Xhesika Milaqi</p>  -->
        <img src="./images/Background.png" alt="background" class="background-first">
        <div class="reseaux">
            <a href="https://github.com/XhesikaMilaqi" target="_blank"><img src="./images/git.png" alt="Logo de github" class="reseau-soc"></a>
            <a href="" target="_blank"></a><img src="./images/instagram.png" alt="Logo de Instagram" class="reseau-soc">
            <a href="https://www.linkedin.com/in/xhesika-milaqi-465687237/" target="_blank"><img src="./images/linkedin.png" alt="Logo du Linkedin" class="reseau-soc"></a>
        </div>
        <!-- SLIDER -->
        <div id="slider-box">

            <div class="figcap">
                <p class="desc">
                    <span class="bnj">Bonjour,</span> <br> Je m'appelle <span class="info">Xhesika Milaqi,</span> stagiere <span class="info"> de developpement web et web mobile fullstack.</span> Mon point fort, <span class="info">front-end.</span> J'aime les <span class="info">technologies innovantes</span> et tout ce qui entre dans le monde du <span class="info">Web</span>.
                </p>

                <figure id="slide-project">
                    <img src="./images/Desktop .png" alt="Images de mes projets" id="slide1">
                    <img src="./img-projet/maitrise.png" alt="Image de ce que je maitrise." id="slide2">
                    <img src="./images/slide2.jpg" alt="Images de mes projets" id="slide3">
                    <img src="./img-projet/slide3.jpg" alt="Images de mes projets" id="slide4">
                    <img src="./img-projet/slide4.jpg" alt="Images de mes projets" id="slide5">
                    <div id="next">►</div>
                    <div id="back">◄</div>
                </figure>
            </div>
            <img src="./images/about.png" alt="Ecriture de background" class="back-slider">

        </div>
        <div id="project">
            <figure class="my-project">
                <a href="./project.php"><img src="./images/rectangle.png" alt="Photo et liens vers un de mes projets" class="project-img" data-tilt></a>
                <a href="./project.php"><img src="./images/rectangle.png" alt="Photo et liens vers un de mes projets" class="project-img" data-tilt></a>
            </figure>
            <a href="./project.php"><button class="submit">Voir les projets</button></a>

            <img src="./img-projet/Projects-back.png" alt="Background de la partie project." class="back-project">

        </div>
        <!-- Slider de mes projets -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./images/painting.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./images/painting.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./images/Desktop .png" alt=""></div>
                <div class="swiper-slide"><img src="./img-projet/slide2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img-projet/slide3.jpg" alt=""></div>
            </div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>



    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
        });
    </script>
    <script src="./style/jquery.js"></script>
    <script src="./style/slide.js"></script>
</body>

</html>