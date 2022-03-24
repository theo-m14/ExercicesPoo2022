<?php

declare(strict_types=1);

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
    $poisson = new Poisson('poisson-rouge','Nemo');
    echo '<p>' . $poisson->flee() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/', function(){
    require_once '../views/homepage.php';
})->register('/fuirOiseau', function(){
    $oiseau = new Oiseau('Perroquet', 'Rio');
    echo '<p>' . $oiseau->flee() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/eatPoisson', function(){
    $poisson = new Poisson('poisson-rouge','Nemo');
    echo '<p>' . $poisson->eat() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/eatOiseau', function(){
    $oiseau = new Oiseau('Perroquet', 'Rio');
    echo '<p>' . $oiseau->eat() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/identityPoisson', function(){
    $poisson = new Poisson('poisson-rouge','Nemo');
    echo '<p>' . $poisson->identify() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/identityOiseau', function(){
    $oiseau = new Oiseau('Perroquet', 'Rio');
    echo '<p>' . $oiseau->identify() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/identityPoisson', function(){
    $poisson = new Poisson('poisson-rouge','Nemo');
    echo '<p>' . $poisson->identify() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/locomotionPoisson',function(){
    $poisson = new Poisson('poisson-rouge','Nemo');
    echo '<p>' . $poisson->nager() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/locomotionOiseau',function(){
    $oiseau = new Oiseau('Perroquet', 'Rio');
    echo '<p>' . $oiseau->voler() . '</p>'; 
    echo '<a href="/">Retour</a>';
})->register('/calculatrice', function(){
    require_once '../views/calculatrice.php';
});

$router->resolve($_SERVER['REQUEST_URI']);