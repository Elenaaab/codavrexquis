<footer class="container d-flex justify-content-center">
        <nav class="row">
            <ul class="d-flex align-items-center">
                <li class="col-3 "><a  href="<?= $router->generate('main.home')?>">HOME</a></li>
                <li class="col-3 "><a  href="<?= $router->generate('game.gameOne')?>">ECRIT</a></li>
                <li class="col-3 "><a  href="<?= $router->generate('game.gameTwo')?>">DESSIN</a></li>
                <li class="col-3 "><a  href="<?= $router->generate('main.info')?>">PROJET</a></li>
            </ul>
        </nav>
    </footer>    
