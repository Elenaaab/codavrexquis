<?php
namespace app\Controllers;

use app\Models\Adjectif;
use app\Models\Sujet;
use app\Models\Complement;
use app\Models\Verbe;


class GameController extends CoreController {

            // Méthode de récupération des données POST sur jeuadulte1 :

    public function createGame() {


        if (!empty($_POST)
        && !empty($_POST["adjectif"])
        && !empty($_POST["complement"]))

         {
            $adjectif = filter_input(INPUT_POST, 'adjectif');
            $complement = filter_input(INPUT_POST, 'complement');

            $adjectif = strtolower($adjectif);
            $complement = strtolower($complement);

            $newAdjectif = new Adjectif();
            $newAdjectif->setWord($adjectif);
            $newAdjectif->insert();

            $newComplement = new Complement();
            $newComplement->setWord($complement);
            $newComplement->insert();

            // On va chercher au hasard les mots manquants dans la bdd : 

            $newSujet = Sujet::find();
            $newVerbe = Verbe::find();
            $newAdjectif2 = Adjectif::find();
            
            $this->show('jeuadulte1', ['sujet' => $newSujet, 'adjectif' => $adjectif, 'verbe' => $newVerbe, 'complement' => $complement, 'adjectif2' => $newAdjectif2]);

        } else {
            http_response_code(404);
            $this->show('error/err404');
            exit();
        }
    }

    // Méthode de récupération des données POST sur jeuadulte2 :

    public function createGameTwo() {
        if (!empty($_POST)
        && !empty($_POST["sujet"])
        && !empty($_POST["verbe"])
        && !empty($_POST["adjectif"])) {

            $sujet = filter_input(INPUT_POST, 'sujet');
            $verbe = filter_input(INPUT_POST, 'verbe');
            $adjectif2 = filter_input(INPUT_POST, 'adjectif');

            $sujet = strtolower($sujet);
            $verbe = strtolower($verbe);
            $adjectif2 = strtolower($adjectif2);

            $newSujet = new Sujet();
            $newSujet->setWord($sujet);
            $newSujet->insert();

            $newVerbe = new Verbe();
            $newVerbe->setWord($verbe);
            $newVerbe->insert();

            $newAdjectif = new Adjectif();
            $newAdjectif->setWord($adjectif2);
            $newAdjectif->insert();

            // On va chercher au hasard les mots manquants dans la bdd : 

            $newAdjectif = Adjectif::find();
            $newComplement = Complement::find();
            
            $this->show('jeuadulte2', ['sujet' => $sujet, 'adjectif' => $newAdjectif, 'verbe' => $verbe, 'complement' => $newComplement, 'adjectif' => $adjectif2]);

        } else {
            http_response_code(404);
            $this->show('error/err404');
            exit();
        }
    }

    // Affichage des pages jeux :
     
    public function gameOne()
    {

        $this->show('jeuadulte1');
    }
    public function gameOneTwo()
    {

        $this->show('jeuadulte2');
    }
    public function gameTwo()
    {

        $this->show('jeuenfant');
    }
    public function gameThree()
    {

        $this->show('troll');
    }
}


