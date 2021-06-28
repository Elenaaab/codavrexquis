<body>
    <div class="deco1"></div>
    <div class="deco2"></div>
    <main class=" main container">
        <div class="row d-flex justify-content-around">
            <div class="game col-4">
                <h3 class="d-flex justify-content-center">c0davre <br> écrit</h3>
                <p class="d-flex justify-content-center">Mêlez vos mots à ceux de la machine !</p>
                <a href="<?= $router->generate('game.gameOne')?>">JOUER</a>
            </div>
            <div class="game col-4">
                <h3 class="d-flex justify-content-center">c0davre <br> dessiné</h3>
                <p class="d-flex justify-content-center">La machine transforme vos dessins en poésie !</p>
                <a href="<?=$router->generate('game.gameTwo')?>">JOUER</a>
            </div>
        </div>
        <header class="row">
            <h1 class="d-flex justify-content-center">c0davre exquis</h1>
            <h2 class="d-flex justify-content-center">du surréalisme p0étique à la Big Data</h2>
        </header>
        <div class="row d-flex justify-content-around">
            <div class="rules col-4">
                <h3 class="d-flex justify-content-center">hist0ire</h3>
                <p class="d-flex justify-content-center">Ce jeu littéraire a été inventé à Paris, au 54 de la rue du Château dans la maison où vivaient Marcel Duhamel, Jacques Prévert et Yves Tanguy.  La première phrase qui résulta de ce processus et qui donna le nom à ce jeu fut : <br> <blockquote> « Le cadavre – exquis – boira – le vin – nouveau.»</blockquote>
                <a href="https://fr.wikipedia.org/wiki/Cadavre_exquis">More</a>
                </p>
            </div>
            <div class="rules col-4">
                <h3 class="d-flex justify-content-center">m0de d'empl0i</h3>
                <p class="d-flex justify-content-center">Le principe du jeu est le suivant : chaque participant écrit à tour de rôle une partie d'une phrase, dans l'ordre sujet–verbe–complément, sans savoir ce que le précédent a écrit. <br> Un jeu entre vous et la machine...</p>
                <a href="https://fr.wikipedia.org/wiki/Cadavre_exquis">More</a>
            </div>
        </div>
        <!-- Bouton pour accéder à la version troll grâce au bouton qui se déplace aléatoirement en js sur la page -->
        <h4><a class="versionactive" href="<?= $router->generate('game.gameThree') ?>">tr0ll</a></h4>
    </main>
