<?php

namespace app\Controllers;

class MainController extends CoreController
{

    public function home()
    {

        $this->show('home');
    }

    public function info()
    
    {
        $this->show('projet');
    }
}
