<body>
    <div class="deco3"></div>
    <main class="container">
        <h1>c0davre exquis</h1>
        <h3>La version écrite</h3>
        <p class="introjeu">Remplissez les champs libre en laissant courir votre imagination. Le sujet et le verbe doivent être à la 3e personne du singulier. Utilisez l'écriture inclusive (exemple : joli.e)</p>

            <!-- Intégrer un élément cliquable pour choisir la version avec un display none -->

            <h4><a class="versioninactive" href="<?= $router->generate('game.gameOne') ?>">Versi0n 1</a></h4>
            <h4><a class="versionactive" href="<?= $router->generate('game.gameOneTwo') ?>">Versi0n 2</a></h4>

            <!-- Formulaire 1 -->
            <form class="row" action="" method="POST">
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="sujet"> </label>
                    <input class="words" type="text" name="sujet" placeholder="SUJET MYSTERE" id="1" disabled>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="adjectif"> </label>
                    <input class="words" type="text" name="adjectif" placeholder="adjectif" id="2" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="verbe"> </label>
                    <input class="words" type="text" name="verbe" placeholder="VERBE MYSTERE" id="3" disabled>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="words" type="text" name="complement" placeholder="complément" id="4" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="adjectif2"> </label>
                    <input class="words" type="text" name="adjectif2" placeholder="ADJECTIF MYSTERE" id="5" disabled>
                </div>
                <div class="col-2">
                    <input class="button" type="submit" value="JOUER">
                </div>
            </form>
        <p class="exemple">Un papillon - bleu - dévore - l'océan - profond</p>
        <div class="row reponseex">
            <p class="col-12">Votre c0davre exquis :</p>
            <div class="col-12 reponse"><?= $viewVars['sujet'] . ' ' . $viewVars['adjectif'] . ' ' . $viewVars['verbe'] . ' ' . $viewVars['complement'] . ' ' . $viewVars['adjectif2'] ?></div>
        </div>

    </main>