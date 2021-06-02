<?php

namespace app\Controllers;


class CoreController {

        
    protected function show( $viewName, $viewVars = [] ) 
    {

        global $router;
        $baseUrl = $_SERVER['BASE_URI'];

        require_once __DIR__.'/public/app/Views/partials/_header.tpl.php';
        require_once __DIR__.'/public/app/Views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/public/app/Views/partials/_footer.tpl.php';

    }


}