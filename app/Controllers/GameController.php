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
        && !empty($_POST['adjectif'])
        && !empty($_POST['complement']))

         {
            //  On met les données au propre : 

            $adjectif = filter_input(INPUT_POST, 'adjectif');
            $complement = filter_input(INPUT_POST, 'complement');

            $adjectif = strtolower($adjectif);
            $complement = strtolower($complement);

            // On insère les données dans la database : 

            $newAdjectif = new Adjectif();
            $newAdjectif->setWord($adjectif);
            $newAdjectif->insert();

            $newComplement = new Complement();
            $newComplement->setWord($complement);
            $newComplement->insert();

            // On va chercher au hasard les mots manquants dans la database : 

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
        && !empty($_POST["adjectif2"])) {

            $sujet = filter_input(INPUT_POST, 'sujet');
            $verbe = filter_input(INPUT_POST, 'verbe');
            $adjectif2 = filter_input(INPUT_POST, 'adjectif2');

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

            $newAdjectif = Adjectif::find();
            $newComplement = Complement::find();
            
            $this->show('jeuadulte2', ['sujet' => $sujet, 'adjectif' => $newAdjectif, 'verbe' => $verbe, 'complement' => $newComplement, 'adjectif2' => $adjectif2]);

        } else {
            http_response_code(404);
            $this->show('error/err404');
            exit();
        }
    }


    // Méthode du jeuenfant (on utilise un formulaire vide pour afficher des mots) : 

    public function createGameKids() {

        $newSujet = Sujet::find();
        $newAdjectif = Adjectif::find();
        $newVerbe = Verbe::find();
        $newComplement = Complement::find();
        $newAdjectif2 = Adjectif::find();

        $this->show('jeuenfant', ['sujet' => $newSujet, 'adjectif' => $newAdjectif, 'verbe' => $newVerbe, 'complement' => $newComplement, 'adjectif2' => $newAdjectif2]);

    }

    // Méthode de la version troll : 

    public function createTroll() {
        if (!empty($_POST)
        && !empty($_POST["sujet"])
        && !empty($_POST["adjectif"])
        && !empty($_POST["complement"])) {

            $sujet = filter_input(INPUT_POST, 'sujet');
            $adjectif = filter_input(INPUT_POST, 'adjectif');
            $complement = filter_input(INPUT_POST, 'complement');

            $newSujet = strtolower($sujet);
            $newAdjectif = strtolower($adjectif);
            $newComplement = strtolower($complement);

            $newSujet = new Sujet();
            $newSujet->setWord($sujet);
            $newSujet->insertTroll();

            $newAdjectif = new Adjectif();
            $newAdjectif->setWord($adjectif);
            $newAdjectif->insertTroll();

            $newComplement = new Complement();
            $newComplement->setWord($complement);
            $newComplement->insertTroll();

            $newVerbe = Verbe::findTroll();
            $newAdjectif2 = Adjectif::findTroll();
            
            $this->show('troll', ['sujet' => $sujet, 'adjectif' => $adjectif, 'verbe' => $newVerbe, 'complement' => $complement, 'adjectif2' => $newAdjectif2]);

        } else {
            http_response_code(404);
            $this->show('error/err404');
            exit();
        }
    }

    // Affichage des pages jeux :
     
    public function gameOne()
    {

        $this->show('jeuadulte1', ["sujet" => "","adjectif" => "","verbe" => "","complement" => "","adjectif2" => ""]);
    }
    public function gameOneTwo()
    {

        $this->show('jeuadulte2',["sujet" => "","adjectif" => "","verbe" => "","complement" => "","adjectif2" => ""]);
    }
    public function gameTwo()
    {

        $this->show('jeuenfant',["sujet" => "","adjectif" => "","verbe" => "","complement" => "","adjectif2" => ""]);
    }
    public function gameThree()
    {

        $this->show('troll',["sujet" => "","adjectif" => "","verbe" => "","complement" => "","adjectif2" => ""]);
    }
}


