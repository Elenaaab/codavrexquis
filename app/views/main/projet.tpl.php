<body>
    <div class="deco2"></div>
    <div class="deco6"></div>
    <header class="row">
        <h1 class="d-flex justify-content-center">c0davre exquis</h1>
        <h2 class="d-flex justify-content-center">du surréalisme p0étique à la Big Data</h2>
    </header>
    <main class=" main container">
        <div class="row d-flex justify-content-around">
            <div class="rules col-4">
                <h3 class="d-flex justify-content-center">pr0jet</h3>
                <p class="d-flex justify-content-center">Passionnée d'écriture, de littérature et notamment du mouvement surréaliste, j'ai toujours adoré le jeu du cadavre exquis que j'ai découvert lors de mon agrégation de français. C'est un jeu que l'on fait traditionnellement découvrir en classe aux élèves à l'aide d'une feuille et d'un stylo, j'ai imaginé une version 2.0 qui se jouerait avec la machine. Il existe déjà des sites qui en proposent, mais vous jouez avec d'autres personnes, ce n'est pas le cas ici. J'ai voulu souligner le côté magique d'une requête SQL qui décide du mot choisi. Parce que la programmation informatique est finalement, communiquer par écrit avec les machines, donner l'illusion que les machines, nous répondent parfois.</p>
            </div>
            <div class="rules col-4">
                <h3 class="d-flex justify-content-center">techn0s</h3>
                <p class="d-flex justify-content-center">L'idée étant de mettre en application ce que j'ai appris en formation O'clock pendant le socle de 3 mois, le choix était vite vu. Structure et style sont en purs HTML5 et CSS3, avec le soutien de Boostrap5 pour le placement des éléments en flexbox. Le back est en PHP7 en structure MVC et les requêtes sont faites via MYSQL. J'ai également utilisé les composants Altorouter et Altodispacher. Les interactions dynamiques sont faites en javascript. Mon projet est en open source sur Github, merci par avance à ceux qui souhaiteront y contribuer ! </p>
            </div>
            <div class="row"></div>
            <h3 class="col-12 d-flex justify-content-center">c0ntact</h3>
            <h5 class="col-12 d-flex justify-content-center"><a  href="mailto:ellelaby@gmail.com">Par mail</a></h5>
            <h5 class="col-12 d-flex justify-content-center"><a  href="https://github.com/Elenaaab">Github</a></h5>
        </div>
     <!-- Salut à toi jeune hacker ! Maintenant que tu m'as trouvé, tu vas cliquer ? La question elle est vite répondue -->
        <h4><a class="troll" href="<?= $router->generate('game.gameThree') ?>">tr0ll</a></h4>
    </main>
