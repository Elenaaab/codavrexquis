
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
    <title>Codavre Exquis Adulte</title>
</head>
<body>
    <div class="deco3"></div>
    <main class="container">
        <h1>c0davre exquis</h1>
        <h3>La version écrite</h3>
        <p class="introjeu">Remplissez les champs libre en laissant courir votre imagination. Le sujet et le verbe doivent être à la 3e personne du singulier.</p>
        <div>

         <!-- Intégrer un élément cliquable pour choisir la version avec un display none -->

            <h4><a class="versioninactive" href="#">Versi0n 1</a></h4> 
            <h4><a class="versionactive" href="#">Versi0n 2</a></h4>

        <!-- Formulaire 1 -->
        <!-- Champ à remplir dans action= est l'URL vers lequel la méthode GET va envoyer les données -->

            <form class="row" action="./form.php" method="get">
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="sujet"> </label>
                    <input class="words" type="text" name="sujet" placeholder="sujet" id="1" required>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="words" type="text" name="adjectif" placeholder="adjectif" id="2" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="verbe"> </label>
                    <input class="words" type="text" name="verbe" placeholder="verbe" id="3" required>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="words" type="text" name="complement" placeholder="complément" id="4" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="adjectif"> </label>
                    <input class="words" type="text" name="adjectif" placeholder="adjectif" id="5" required>
                </div>
                <div class="col-2">
                    <input class="button" type="submit" value="JOUER">
                </div>
            </form>
            <div class="row reponse d-none">
                <p>Votre c0davre exquis</p>
            </div>
        </div>
       
        <!-- Formulaire 2 -->
        <!-- Champ à remplir dans action= est l'URL vers lequel la méthode GET va envoyer les données -->

        <div class="d-none">
            <form class="row" action="./form.php" method="get">
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="sujet"> </label>
                    <input class="words" type="text" name="sujet" placeholder="sujet" id="6" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="words" type="text" name="adjectif" placeholder="adjectif" id="7" required>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="verbe"> </label>
                    <input class="words" type="text" name="verbe" placeholder="verbe" id="8" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="words" type="text" name="complement" placeholder="complément" id="9" required>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="adjectif"> </label>
                    <input class="words" type="text" name="adjectif" placeholder="adjectif" id="10" required>
                </div>
                <div class="col-2">
                    <input class="button" type="submit" value="JOUER">
                </div>
            </form>
        </div>
        <p class="exemple">Un papillon - bleu - dévore - l'océan - profond</p>
        <div class="row reponseex">
            <p class="col-12">Votre c0davre exquis :</p>
            <!-- Affichage de la phrase foreach ou juste echo short tag ? -->
            <div class="d-none col-12 reponse">
                <div class="reponse col-2"></div>
                <div class="reponse col-2"></div>
                <div class="reponse col-2"></div>
                <div class="reponse col-2"></div>
                <div class="reponse col-2"></div>
            </div>
            <div class="col-12 reponse"></div>
        </div>  
        <!-- Bouton pour accéder à la version troll grâce au bouton qui se déplace aléatoirement en js sur la page -->
        <h4><a class="d-none versionactive" href="#">tr0ll m0de</a></h4>
    </main>
      <footer class="container d-flex justify-content-center">
        <nav class="row ">
            <ul class="navigateur d-flex align-items-center">
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