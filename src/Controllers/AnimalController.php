<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Zoo\Animal;
use App\Zoo\Oiseau;
use App\Zoo\Poisson;

class AnimalController{
    public function animalFlee(Animal $animal) :string{

        $animalAction = $animal->flee();
        return (new \App\View('animalAction',['animalAction' => $animalAction]))->render();
    }

    public function animalEat(Animal $animal) :string{
        $animalAction = $animal->eat();
        return (new \App\View('animalAction',['animalAction' => $animalAction]))->render();
    }

    public function animalLocomotion(Animal $animal) : string{
        $animalAction = $animal->getLocomotion();
        return (new \App\View('animalAction',['animalAction' => $animalAction]))->render();
    }

    public function animalIdentify(Animal $animal) : string{
        $animalAction = $animal->identify();
        return (new \App\View('animalAction',['animalAction' => $animalAction]))->render();
    }

    public function poissonNage(Poisson $poisson) : string{
        $animalAction = $poisson->nager();
        return (new \App\View('animalAction',['animalAction' => $animalAction]))->render();
    }

    public function oiseauVole(Oiseau $oiseau) : string{
        $animalAction = $oiseau->voler();
        return (new \App\View('animalAction',['animalAction' => $animalAction]))->render();
    }
}