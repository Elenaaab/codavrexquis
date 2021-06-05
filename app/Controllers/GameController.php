<?php
namespace app\Controllers;

use app\Controllers\CoreController;
use app\Models\Codavre;
use app\Models\Troll;

class GameController extends CoreController {


// Il existe 3 jeux dont 2 sont identiques (à l'exception du model utilisé) et 2 utilisent le même model mais sont l'exact inverse l'un de l'autre : 

// Ils répondent tous les 3 à la même structure : 

// * 1 * :
// * 2 * :
// * 3 * :


public function gameOne()
    {

        $codavreModel = new Codavre ();
        $codavrelist = $codavreModel->findWords();

        $viewVars = [
            'codavreList' => $codavrelist
        ];

        $this->show('jeuadulte', $viewVars);
    }


    public function gameTwo()
    {
        $codavreModel = new Codavre ();
        $codavrelist = $codavreModel->findWords();

        $viewVars = [
            'codavreList' => $codavrelist
        ];

        $this->show('jeuenfant', $viewVars);
    }

    public function gameThree()
    {

        $TrollModel = new Troll ();
        $trolllist = $TrollModel->findTrollWords();

        $viewVars = [
            'trollList' => $trolllist
        ];

        $this->show('troll', $viewVars);
    }


}


