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
    <link rel="stylesheet" href="./style/style.css">

</head>

<body class="test row-limit-size">
    <img src="./images/logo-fox.png" alt="Logo de portfolio" id="logo">
    <!-- Header et menu -->
    <header class="row-limit-size">
        <div class="burger">
            <img src="./images/barres.png" alt="Barres de menu burger" id="barres">
        </div>

        <nav id="menu">
            <ul>
                <li ><a href="./index.php">Portfolio</a></li>
                <li ><a href="./project.php">Projets</a></li>
                <li ><a href="index.php#contact">Contact</a></li>
                <li ><a href="./aboutme.php" target="blank" >À propos</a></li>
            </ul>
        </nav>
    </header>
    <main id="main-page" class="row-limit-size">
        <a href="index.php"><img src="./images/logo-fox1.png" alt="Le logo du portfolio/Fox" id="logo-x"></a>
        
        <img src="./images/Background.png" alt="background" class="background-first">
        <div class="reseaux">
            <a href="https://github.com/XhesikaMilaqi" target="_blank"><img src="./images/git.png" alt="Logo de github" class="reseau-soc"></a>
            <a href="" target="_blank"><img src="./images/instagram.png" alt="Logo de Instagram" class="reseau-soc"></a>
            <a href="https://www.linkedin.com/in/xhesika-milaqi-465687237/" target="_blank"><img src="./images/linkedin.png" alt="Logo du Linkedin" class="reseau-soc"></a>
        </div>
        <!-- SLIDER -->
        <div id="slider-box" class="row-limit-size">

            <div class="figcap">
                <p class="desc">
                    <span class="bnj">Bonjour,</span> <br> Je m'appelle <span class="info">Xhesika Milaqi,</span> stagiere <span class="info"> de developpement web et web mobile fullstack.</span> J'aime les <span class="info">technologies innovantes</span> et tout ce qui entre dans le monde du <span class="info">Web</span>.
                </p>

                <figure id="slide-project">
                    <p id="slide1"><span class="info">Competences </span><br><br> Rigoureusse <br> <span class="info">Esprit d'équipe </span><br> Gestion du Stress <br> <span class="info">Force de proposition </span> </p> 
                    <p id="slide2"> Sens du relationel <br> <span class="info">Esprit d'entre-aide </span><br> <br> Administration<br> <span class="info">Capacité d'adaptation</span></p>
                    <p id="slide3"><span class="info">Competences Web </span><br> <br>HTML <br><span class="info"> CSS </span><br> SaSS <br> </p>
                    <p id="slide4"> <span class="info"> JavaScript </span><br> JQuery <br> <span class="info">PHP </span><br>MySQL <br><span class="info">CMS (WordPress)</span></p>
                    <div id="next"><img src="./images/next.png" alt="fleche vers la gauche"></div>
                    <div id="back"><img src="./images/back.png" alt="fleche vers la droite"></div>
                </figure>
            </div>
            <img src="./images/about.png" alt="Ecriture de background" class="back-slider">

        </div>
        <!-- Projets -->
        <div id="project">
            <figure class="my-project">
                <a href="http://localhost/php/xhesika-lilian/" target="_blank"><img src="./img-projet/beauty-pro.jpg" alt="Photo et liens vers un de mes projets" class="project-img" data-tilt></a>
                <a href="http://localhost/php/Xhesika-Tiff-Lilian.Nouveau/" target="_blank"><img src="./img-projet/gite-pro.jpg" alt="Photo et liens vers un de mes projets" class="project-img" data-tilt></a>
            </figure>
            <a href="./project.php"><button class="submit">Voir les projets</button></a>

            <img src="./img-projet/Projects-back.png" alt="Background de la partie project." class="back-project">

        </div>

        <!-- Formulaire de contact -->
        <div id="contact-page">
            <h2 class="cont">Contactez moi !</h2>
            <section id="section">
                
                <form action="#" method="POST" id="contact">
                    <div class="formulaire-l">
                        <label for="nom" class="contact-lab">Nom</label><br>
                        <input type="text" name="nom" class="input-cont">
                        <br>
                        <label for="society" class="contact-lab">Société</label><br>
                        <input type="text" name="society" class="input-cont" required>
                        <br>
                        <label for="mail" class="contact-lab">E-mail</label><br>
                        <input type="email" name="mail" class="input-cont" required>
                    </div>
                    <div>
                        <label for="message" class="contact-lab">Message</label>
                        <br>
                        <textarea type="text" name="message" cols="30" rows="12" placeholder="Ecrivez votre message" class="input-mail"></textarea>
                        <br><br>
                        <input type="submit" name="submit" class="btn-submit" value="Envoyer">
                    </div>
                </form>
                
            </section>
            <img src="./images/Contact.png" alt="background de partie contact" class="background-cont">
            
            
        </div>
        <?php
    if (isset($_POST['submit'])) {

        $nom = $_POST['nom'];
        $society = $_POST['society'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];


        $send = @mail(
            'jessy.99milaqi@gmail.com',
            'Contact ' . $nom . ' ' . $society,
            $_POST['message'],
            'De: ' . $_POST['mail']
        );

        if ($send) {
            echo 'Message envoyé';
        } else {
            echo '<p class="erreur">Oops, un problème est survenue !<p/>';
        }
    }

?>

    </main>

    <footer>
        <img src="./images/logo-fox1.png" alt="Logo de footer">

        <h2 class="copyright">© 2022 Xhesika Milaqi</h2>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>



    <script src="./style/jquery.js"></script>
    <script src="./style/slide.js"></script>
</body>

</html>