<?php

namespace App\Zoo;

abstract class Animal{
    //Race,Nom et Moyen de locomotion.
    protected string $locomotion;

    public function __construct(protected string $race,protected string $nom)
    {
        
    }

    /**
     * Get the value of race
     *
     * @return string
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * Set the value of race
     *
     * @param string $race
     *
     * @return self
     */
    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of locomotion
     *
     * @return string
     */
    public function getLocomotion(): string
    {
        return $this->locomotion;
    }

    /**
     * Set the value of locomotion
     *
     * @param string $locomotion
     *
     * @return self
     */
    public function setLocomotion(string $locomotion): self
    {
        $this->locomotion = $locomotion;

        return $this;
    }

    public function identify() : string{
        return "Je m'appelle " . $this->nom . " et ma race est " . $this->race;
    }

    public function flee() : string{
        return "Je me mets à " . $this->locomotion . ' pour fuir';
    }

    abstract public function eat() : string;
}