<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Film
 *
 * @author ml
 */
class Film {

    private $idfilmy;
    private $nazev;
    private $hodnoceni;
    private $obsah;
    private $format;

    public function __construct($film) {
        $this->idfilmy = $film->idfilmy;
        $this->nazev = $film->nazev;
        $this->hodnoceni = $film->hodnoceni;
        $this->obsah = $film->obsah;
        $this->format = $film->format;
    }

}
