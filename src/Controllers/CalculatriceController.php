<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Math\Calculatrice;

class CalculatriceController{
    public function renderCalculatrice(){
        if(!empty($_POST)){
            $validOperation = ['add', 'sub', 'mult','div','average'];
            if(in_array($_POST['action'],$validOperation)){
                $calculatrice = new Calculatrice;
                switch($_POST['action']){
                    case 'add':
                        $result = $calculatrice->add(floatval($_POST['number1']), floatval($_POST['number2']));
                        break;
                    case 'sub':
                        $result = $calculatrice->substract(floatval($_POST['number1']), floatval($_POST['number2']));
                        break;
                    case 'mult':
                        $result = $calculatrice->multiply(floatval($_POST['number1']), floatval($_POST['number2']));
                        break;
                    case 'div':
                        $result = $calculatrice->divide(floatval($_POST['number1']), floatval($_POST['number2']));
                        break;
                    default:
                        $result = $calculatrice->average(floatval($_POST['number1']), floatval($_POST['number2']));
                }

                return (new \App\View('calculatrice',['result' => $result, 'error' => '']))->render();
            }else{
                $error = 'Veuillez saisir une opération valide';
                return (new \App\View('calculatrice',['error' => $error, 'result' => '']))->render();
            }
        }
        return (new \App\View('calculatrice',['result' => '', 'error' => '' ]))->render();
    }
}