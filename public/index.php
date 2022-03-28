<?php

declare(strict_types=1);

use App\Controllers\AnimalController;
use App\Controllers\CalculatriceController;
use App\Controllers\HomeController;
use App\Router;
use App\Zoo\Oiseau;
use App\Zoo\Poisson;


spl_autoload_register(static function(string $fqcn) {
    // $fqcn contient Domain\Forum\Message
    // remplaçons les \ par des / et ajoutons .php à la fin.
    // on obtient Domain/Forum/Message.php
    $path = '../' . str_replace('\\', '/', $fqcn).'.php';
    $path = str_replace('App', 'src', $path);
    // puis chargeons le fichier
    require_once($path);
 });

$router = new Router();


$router->register('/fuirPoisson', function(){

        echo (new AnimalController)->animalFlee(new Poisson('poisson-rouge','Nemo'));

    })->register('/', function(){

        echo (new HomeController())->index();

    })->register('/fuirOiseau', function(){

        echo (new AnimalController)->animalFlee(new Oiseau('Perroquet', 'Rio'));

    })->register('/eatPoisson', function(){

        echo (new AnimalController)->animalEat(new Poisson('poisson-rouge','Nemo'));

    })->register('/eatOiseau', function(){

        echo (new AnimalController)->animalEat(new Oiseau('Perroquet', 'Rio'));

    })->register('/identityPoisson', function(){

        echo (new AnimalController)->animalIdentify(new Poisson('poisson-rouge','Nemo'));

    })->register('/identityOiseau', function(){

        echo (new AnimalController)->animalIdentify(new Oiseau('Perroquet', 'Rio'));

    })->register('/locomotionPoisson',function(){

        echo (new AnimalController)->poissonNage(new Poisson('poisson-rouge','Nemo'));

    })->register('/locomotionOiseau',function(){

        echo (new AnimalController)->oiseauVole(new Oiseau('Perroquet', 'Rio'));

    })->register('/calculatrice', function(){

        echo (new CalculatriceController)->renderCalculatrice();
    });

$router->resolve($_SERVER['REQUEST_URI']);