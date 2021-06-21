<body class="trollmode">
    <div class="deco3"></div>
    <main class="container">
        <h1>c0davre exquis</h1>
        <h3>La version tr0ll</h3>
        <p class="introjeu">Si tu es arrivé ici, bravo, c'est qu'un troll vit en toi ! Comme c'est trop tentant d'écrire n'importe quoi dans le formulaire, lâche-toi ici, écris ce que tu veux, la machine te répondra n'importe quoi elle aussi !<br>Ce tr0ll m0de est dédié à jh0n, a0dren et y0hann, une source de tr0ll-inspiration infinie.</p>
        <div>

            <!-- Formulaire 1 -->
            <!-- Champ à remplir dans action= est l'URL vers lequel la méthode POST va envoyer les données -->

            <form class="row" action="./form.php" method="POST">
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="sujet"> </label>
                    <input class="wordstroll" type="text" name="sujet" placeholder="sujet" id="1" required>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="wordstroll" type="text" name="adjectif" placeholder="adjectif" id="2" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="verbe"> </label>
                    <input class="wordstroll" type="text" name="verbe" placeholder="verbe" id="3" required>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="wordstroll" type="text" name="complement" placeholder="complément" id="4" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="adjectif"> </label>
                    <input class="wordstroll" type="text" name="adjectif" placeholder="adjectif" id="5" required>
                </div>
                <div class="col-2">
                    <input class="buttontroll" type="submit" value="JOUER">
                </div>
            </form>
            <div class="row reponse d-none">
                <p>Votre c0davre exquis</p>
            </div>
        </div>

        <!-- Formulaire 2 -->
        <!-- Champ à remplir dans action= est l'URL vers lequel la méthode POST va envoyer les données -->

        <div class="d-none">
            <form class="row" action="./form.php" method="get">
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="sujet"> </label>
                    <input class="wordstroll" type="text" name="sujet" placeholder="sujet" id="6" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="wordstroll" type="text" name="adjectif" placeholder="adjectif" id="7" required>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="verbe"> </label>
                    <input class="wordstroll" type="text" name="verbe" placeholder="verbe" id="8" required>
                </div>
                <!-- Mot choisi par l'ordinateur -->
                <div class="col-2">
                    <label for="complement"> </label>
                    <input class="wordstroll" type="text" name="complement" placeholder="complément" id="9" required>
                </div>
                <!-- Mot choisi par l'user -->
                <div class="col-2">
                    <label for="adjectif"> </label>
                    <input class="wordstroll" type="text" name="adjectif" placeholder="adjectif" id="10" required>
                </div>
                <div class="col-2">
                    <input class="buttontroll" type="submit" value="JOUER">
                </div>
            </form>
        </div>
        <p class="exempletroll">Un slip - pourri - harcèle - un steak - vicieux</p>
        <div class="row reponseex">
            <p class="col-12">Votre c0davre exquis :</p>
            <div class="d-none col-12 reponse"></div>
        </div>
    </main>