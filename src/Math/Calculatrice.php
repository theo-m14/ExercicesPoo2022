<?php

declare(strict_types=1);

namespace App\Math;

class Calculatrice{

    public function add(float $number1,float $number2) : float{
        return $number1+$number2;
    }

    public function multiply(float $number1,float $number2) : float{
        return $number1*$number2;
    }

    public function divide(float $number1,float $number2) : float{
        return $number1/$number2;
    }

    public function substract(float $number1,float $number2) : float{
        return $number1-$number2;
    }

    public function average(float $number1,float $number2) : float{
        return ($number1+$number2)/2;
    }
}