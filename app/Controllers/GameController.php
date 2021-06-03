<?php

use app\Controllers\CoreController;
use app\Models\Codavre;
use app\Models\Troll;

class GameController extends CoreController {


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



// public function findOneType(int $id)
// {
//     $sql = "SELECT `pokemon_type`.*, `type`.`name` AS `type_name`, `type`.`color` AS `color`, `pokemon`.`nom` AS `nom`, `pokemon`.`numero` AS `numero`
//     FROM `pokemon_type`
//     INNER JOIN `pokemon` ON `pokemon_type`.`pokemon_numero` = `pokemon`.`numero`
//     INNER JOIN type ON `pokemon_type`.`type_id` = `type`.`id`
//     WHERE `type_id` = {$id}
//     ";
// }


