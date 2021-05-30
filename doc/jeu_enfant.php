<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/css/styles.css">
    <title>C0davre Exquis</title>
</head>

<body>
    <div class="deco4"></div>
    <div class="deco5"></div>
    <main class="container">
        <div class="row">
            <h1 class="d-flex justify-content-center">c0davre exquis</h1>
            <h3 class="d-flex justify-content-center">La version dessinée</h3>
            <p class="introjeu">Qui a dit que la poésie ne s'exprimait qu'avec des mots ? <q>La poésie, c'est l'art
                d'évoquer et de suggérer des sensations, les impressions, les émotions les plus vives par l'union
                intense des sons, des rythmes, des harmonies...</q>  <br> Choisissez vos 5 dessins colorés préférés, dans l'ordre que vous voulez,  et laissez
                la machine traduire votre dessin en c0davre exquis. <br> Il suffit de cliquer sur un dessin pour qu'il s'ajoute au tableau !</p>
            <a href="https://fr.wikipedia.org/wiki/Cadavre_exquis">More</a>
        </div>
        <div class="indications row">
            <h4 class="tableaux col-6 d-flex justify-content-center">Dessins</h4>
            <h4 class="tableaux col-6 d-flex justify-content-center">Tableau</h4>
            
            <div class="jeu col-6">

                <!-- Lorsque l'utilisateur clique sur une forme, js la fait disparaitre de la div jeu et apparaitre dans la div tableau -->
                <div class="espacejeu row">
                <div class="forme1"></div>
                <div class="forme2"></div>
                <div class="forme3"></div>
                <div class="forme4"></div>
                <div class="forme5"></div>
                <div class="forme6"></div>
                <div class="forme7"></div>
                <div class="forme8"></div>
                <div class="forme9"></div>
                <div class="forme10"></div>
                <div class="forme11"></div>
                </div>
            </div>
            <div class="tableau col-6">
            <div class="espacejeu row">
            <div class="resultat1"></div>
            <div class="resultat2"></div>
            <div class="resultat3"></div>
            <div class="resultat4"></div>
            <div class="resultat5"></div>
            <div class="d-none">cOdavre réponse</div>
            </div>
        </div>
        </div>
    </main>
    <footer class="container d-flex justify-content-center">
        <nav class="row navigateur ">
            <ul class="d-flex align-items-center">
            <li class="col-3 "><a  href="http://localhost/trinity/LABO/Codavre-Exquis/doc/#">HOME</a></li>
                <li class="col-3 "><a  href="http://localhost/trinity/LABO/Codavre-Exquis/doc/./jeu_adulte.php">ECRIT</a></li>
                <li class="col-3 "><a  href="http://localhost/trinity/LABO/Codavre-Exquis/doc/./jeu_enfant.php">DESSIN</a></li>
                <li class="col-3 "><a  href="http://localhost/trinity/LABO/Codavre-Exquis/doc/./projet.php">PROJET</a></li>
            </ul>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>