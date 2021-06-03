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


// public function home()
// {

//     $homeproductModel = new Product ();
//     $homeproductModellist = $homeproductModel->findProductFromHome();

//     $homecategoryModel = new Category ();
//     $homecategoryModellist = $homecategoryModel->findCategoryFromHome();

//     $viewVars = [
//         'homeproductModellist'  => $homeproductModellist,
//         'homecategoryModellist' => $homecategoryModellist
//     ];

//     $this->show('main/home', $viewVars);
// }