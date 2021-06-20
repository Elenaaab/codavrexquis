<?php
namespace app\Controllers;


    abstract class CoreController 
    {
    

        // Méthode construct à ajouter (sécu)

        // Méthode check authorizations ? Pas de backoffice donc pas besoin
        

        protected function show($viewName, $viewVars = [])
        {
            $baseUri = $_SERVER['BASE_URI'];
            global $router;
    
            require __DIR__ . "/../views/partials/_header.tpl.php";
            require __DIR__ . "/../views/main/{$viewName}.tpl.php";
            require __DIR__ . "/../views/layout/footer.tpl.php";
            require __DIR__ . "/../views/partials/_footer.tpl.php";
        }
    
    }

