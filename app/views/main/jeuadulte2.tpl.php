<body>
    <div class="deco3"></div>
    <main class="container">
        <h1>c0davre exquis</h1>
        <h3>La version écrite</h3>
        <p class="introjeu">Remplissez les champs libre en laissant courir votre imagination. Le sujet et le verbe doivent être à la 3e personne du singulier.</p>
        <div>

         <!-- Intégrer un élément cliquable pour choisir la version avec un display none -->

            <h4><a class="versioninactive" href="<?= $router->generate('game.gameOne')?>">Versi0n 1</a></h4> 
            <h4><a class="versionactive" href="<?= $router->generate('game.gameOneTwo')?>">Versi0n 2</a></h4>
            
        <!-- Formulaire 2 -->

            <form class="row" action="" method="POST">
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="sujet"> </label>
                    <input class="words" type="text" name="sujet" placeholder="sujet" id="6" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="words" type="text" name="adjectif" placeholder="ADJECTIF MYSTERE" id="7" disabled>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="verbe"> </label>
                    <input class="words" type="text" name="verbe" placeholder="verbe" id="8" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="words" type="text" name="complement" placeholder="COMPLEMENT MYSTERE" id="9" disabled>
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
    
        <p class="exemple">Un papillon - bleu - dévore - l'océan - profond</p>
        <div class="row reponseex">
            <p class="col-12">Votre c0davre exquis :</p>
            <!-- Affichage de la phrase foreach + short tag  -->
            <div class="d-none col-12">
                <div class="col-12"></div>
            </div>
            <div class="col-12 reponse"></div>
        </div>  
        <!-- Bouton pour accéder à la version troll grâce au bouton qui se déplace aléatoirement en js sur la page -->
        <h4><a class="d-none versionactive" href="<?= $router->generate('troll')?>">tr0ll m0de</a></h4>
    </main>
