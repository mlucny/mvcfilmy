<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author ml
 */
include_once("model/Film.php");

class Model {

    private $listOfRecords;

    public function getFilmList() {
        $this->listOfRecords = Database::queryArray("SELECT * FROM film");
        if (!sizeof($this->listOfRecords)) {
            throw new Exception("Tabulka neobsahuje záznam");
        }
        return $this->listOfRecords;
    }

    public function getFilm($id) {
        $allFilms = $this->getFilmList();
        return $allFilms[$id];
    }

}
