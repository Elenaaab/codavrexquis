<body>
    <div class="deco4"></div>
    <div class="deco5"></div>
    <main class="container">
        <div class="row">
            <h1 class="d-flex justify-content-center">c0davre exquis</h1>
            <h3 class="d-flex justify-content-center">La version dessinée</h3>
            <p class="introjeu">Qui a dit que la poésie ne s'exprimait qu'avec des mots ? <q>La poésie, c'est l'art
                    d'évoquer et de suggérer des sensations, les impressions, les émotions les plus vives par l'union
                    intense des sons, des rythmes, des harmonies...</q> <br> Choisissez vos 5 dessins colorés préférés, dans l'ordre que vous voulez, et laissez
                la machine traduire votre dessin en c0davre exquis. <br> Il suffit de cliquer sur un dessin pour qu'il s'ajoute au tableau !</p>
        </div>
        <div class="indications row">
            <h4 class="tableaux col-12">Votre c0davre exquis : <?= $viewVars['sujet'] . ' ' . $viewVars['adjectif'] . ' ' . $viewVars['verbe'] . ' ' . $viewVars['complement'] . ' ' . $viewVars['adjectif2'] ?> </h4>

            <div class="jeu col-6">
                <!-- Lorsque l'utilisateur clique sur une forme, js la fait disparaitre de la div jeu et apparaitre dans la div tableau -->
                <div class="espacejeu row">
                    <div class="jeu forme1"></div>
                    <div class="jeu forme2"></div>
                    <div class="jeu forme3"></div>
                    <div class="jeu forme4"></div>
                    <div class="jeu forme5"></div>
                    <div class="jeu forme6"></div>
                    <div class="jeu forme7"></div>
                    <div class="jeu forme8"></div>
                    <div class="jeu forme9"></div>
                    <div class="jeu forme10"></div>
                    <div class="jeu forme11"></div>
                </div>
            </div>
            <div class="tableau col-4">
                <div class="espacejeu row">
                    <!-- Formulaire -->
                    <form class="row" action="" method="POST">
                        <div class="col-12">
                            <input class="d-none button" type="submit" id="0" value="JOUER">
                        </div>
                        <div class="d-none">
                            <label for="sujet"> </label>
                            <input class="d-none" type="text" name="sujet" id="1">
                        </div>
                        <div class="d-none">
                            <label for="adjectif"> </label>
                            <input class="d-none" type="text" name="adjectif" id="2">
                        </div>
                        <div class="d-none">
                            <label for="verbe"> </label>
                            <input class="d-none" type="text" name="verbe" id="3">
                        </div>
                        <div class="d-none">
                            <label for="complement"> </label>
                            <input class="d-none" type="text" name="complement" id="4">
                        </div>
                        <div class="d-none ">
                            <label for="adjectif2"> </label>
                            <input class="d-none" type="text" name="adjectif2" id="5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>