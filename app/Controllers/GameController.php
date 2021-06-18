<?php
namespace app\Controllers;

use app\Controllers\CoreController;
use app\Models\Codavre;
use app\Models\Troll;

class GameController extends CoreController {



// Méthode GET et POST : la GET affiche la réponse, la POST envoie les valeurs du form en BDD -create)


// $email = isset($_POST['email']) ? $_POST['email'] : '';
// $name = isset($_POST['name']) ? $_POST['name'] : '';
// $password= isset($_POST['password']) ? $_POST['password'] : '';
// $role = isset($_POST['role']) ? intval($_POST['role']) : 0;

// $user = new User();

// $user->setEmail($email);
// $user->setName($name);
// $user->setPassword($password);
// $user->setRole($role);

// if ($user->insert()) {  --> la méthode insert est codée dans le model
//     global $router;
//     header('Location: '. $router->generate('user-list'));
// }
// }



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


