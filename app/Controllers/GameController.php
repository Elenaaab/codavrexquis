<?php
namespace app\Controllers;

use app\Controllers\CoreController;
use app\Models\Codavre;
use app\Models\Troll;

class GameController extends CoreController {

    public function createGame() {

   if(!empty($_POST) 
        && !empty($_POST["sujet"]) 
        && !empty($_POST["adjectif"])
        && !empty($_POST["verbe"]) 
        && !empty($_POST["complement"])
        && !empty($_POST["adjectif"]))

         {

            $sujet = filter_input(INPUT_POST, 'sujet');
            $adjectif = filter_input(INPUT_POST, 'adjectif');
            $verbe = filter_input(INPUT_POST, 'verbe');
            $complement = filter_input(INPUT_POST, 'complement');
            $adjectif2 = filter_input(INPUT_POST, 'adjectif');

            $sujet = strtolower($sujet);
            $adjectif = strtolower($adjectif);
            $verbe = strtolower($verbe);
            $complement = strtolower($complement);
            $adjectif2 = strtolower($adjectif2);

$game = new Codavre();

$game->setWord($sujet);
$game->setWord($adjectif);
$game->setWord($verbe);
$game->setWord($complement);
$game->setWord($adjectif2);

$game->insert();

    } else {

        http_response_code(404);
        $this->show('error/err404');
        exit();
    }


public function createTroll() {


}

// Il existe 3 jeux dont 2 sont identiques (à l'exception du model utilisé) et 2 utilisent le même model mais sont l'exact inverse l'un de l'autre : 

// Ils répondent tous les 3 à la même structure : 


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


