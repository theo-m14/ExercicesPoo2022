<?php

namespace App\Zoo;


class Oiseau extends Animal{

    protected string $locomotion = "voler";

    public function eat(): string{
        return "Je mange des vers";
    }

    public function voler() : string {
        return "Je me mets à voler";
    }
}