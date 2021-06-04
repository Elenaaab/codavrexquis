<?php
namespace app\Controllers;


    class CoreController 
    {
    
        protected function show($viewName, $viewVars = [])
        {
            $baseUri = $_SERVER['BASE_URI'] . "/public";
            global $router;
    
            require __DIR__ . "/../views/partials/_header.tpl.php";
            require __DIR__ . "/../views/{$viewName}.tpl.php";
            require __DIR__ . "/../views/partials/_footer.tpl.php";
            
        }
    
    }

