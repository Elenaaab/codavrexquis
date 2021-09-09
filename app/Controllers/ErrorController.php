<?php

namespace app\Controllers;

class ErrorController extends CoreController {

    public function err404() {
        
        header('HTTP/1.0 404 Not Found');
        
        global $router;

        require __DIR__ . "/../views/error/error.tpl.php";

    }
}