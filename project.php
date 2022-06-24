<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#113634">
    <meta name="description" content="My portfolio presents me as a fullstack web developer intern! ">
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
    <!-- J'inclus la page template où se trouve le header  -->
    <?php 
        require_once './template.php';
    ?>
    <div id="container">
        <div>
            <figcaption>
                <h3 class="tittre-projet">PROJET <br>
                - Salon de Beauté -</h3>
                <a href="http://localhost/php/xhesika-lilian/" target="_blank"><img src="./img-projet/beauty.jpg" alt="Image de projet" class="pro-img"></a>
                <h3 class="tittre-projet">HTML, CSS, JavaScript</h3>
                
                <h4 class="description desc-projet">Sur ce projet j'ai collaborée avec un collègue pour avoir une rendu d'un site de salon de beauté. J'ai travaillé sur la partie du header, footer et j'ai stylisé la partie main du site en Html et CSS, où se trouve les images et les parties texte, sur lesquels nous décrivons ce que nous proposons comme soins. J'ai utilisé JavaScript pour faire le menu burger.</h4>
            </figcaption>
            <a href="http://localhost/php/xhesika-lilian/" target="_blank" class="pro-lien">VOIR LE PROJET</a>
        </div>

        <div>
            <figcaption>
                <h3 class="tittre-projet">PROJET <br>
                - Guest House -</h3>
                <a href="http://localhost/php/Xhesika-Tiff-Lilian.Nouveau/" target="_blank"><img src="./img-projet/projetG.jpg" alt="Image de projet" class="pro-img"></a>
                <h3 class="tittre-projet">HTML, PHP, SaSS, JavaScript</h3>
                
                <h4 class="description desc-projet">
                Sur ce projet j'ai collaborée avec deux collègues pour faire un site des gîtes en PHP. J'ai travaillé sur tout le front en Html et SaSS. J'ai utilisé JavaScript pour le slider. Pour voir la partie admin, vous devez vous connecter avec l'id:  Admin et mot de passe: Admin.
                </h4>
            </figcaption>
            <a href="http://localhost/php/Xhesika-Tiff-Lilian.Nouveau/" target="_blank" class="pro-lien">VOIR LE PROJET</a>
            <a href="http://localhost/php/Xhesika-Tiff-Lilian/admin/" target="_blank" class="pro-lien">VOIR Admin</a>

        </div>

        <div>
            <figcaption>
                <h3 class="tittre-projet">PROJET <br>
                - Jeu Memory -</h3>
                <a href="http://127.0.0.1:5502/index.html" target="_blank"><img src="./img-projet/memory.jpg" alt="Image de projet" class="pro-img"></a>
                <h3 class="tittre-projet">JavaScript</h3>
                <h4 class="description desc-projet">
                Sur ce projet j'ai travaillé en full JavaScript. Projet pour reussir un jeu de memory. 
                </h4>
            </figcaption>
            <a href="http://127.0.0.1:5502/index.html" target="_blank" class="pro-lien">VOIR LE PROJET</a>

        </div>

        <!-- LEs projets// Peintures -->
        <div id="pro-paint">
                
            <figcaption>
                <h3 class="tittre-projet">Travail personnelle  <br>
                    - Peinture -
                </h3>

                <img src="./img-projet/slide2.jpg" alt="Image de peinture" class="paint p-l">
            </figcaption> 

            <figcaption>
                <img src="./img-projet/slide4.jpg" alt="Image de peinture" class="paint p-r">
            </figcaption> 
            <figcaption>
                <img src="./img-projet/painting3.jpg" alt="Image de peinture" class="paint p-l1">
            </figcaption>

            <figcaption>
                <img src="./images/painting.jpg" alt="Image de peinture" class="paint p-r1">
            </figcaption> 
            <figcaption>
                <img src="./img-projet/painting2.jpg" alt="Image de peinture" class="paint p-r2">
            </figcaption> 
        </div>
       
    </div>
    <footer class="pro-footer">
        <img src="./images/logo-fox1.png" alt="Logo de footer">

        <h2 class="copyright">© 2022 Xhesika Milaqi</h2>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="./style/jquery.js"></script>
    <script src="./style/slide.js"></script>
</body>
</html>