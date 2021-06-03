<?php

namespace app\Controllers;


class CoreController {


    // Meilleure manière d'utiliser le router partout dans le projet (plutôt que global) : 
    
    private $router;

    // Le constructeur va récupérer le $router en argument :
    
    public function __construct($router)
    {
        $this->router = $router;
    }  


    protected function show( $viewName, $viewVars = [] ) 
    {

       $router = $this->router;

        $baseUrl = $_SERVER['BASE_URI'];

        require_once __DIR__.'/../views/partials/_header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/partials/_footer.tpl.php';

    }

    /**
     * Get the value of router
     */ 
    public function getRouter()
    {
        return $this->router;
    }
}
