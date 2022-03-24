<?php

namespace App\Zoo;

class Poisson extends Animal{

    protected string $locomotion = "nager";

    public function eat(): string{
        return "Je mange du plancton";
    }

    public function nager(): string{
        return "Je me mets à nager";
    }
}