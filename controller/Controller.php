<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author ml
 */
include_once("model/Model.php");  

class Controller {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke() {
        if (!isset($_GET['id'])) {
            // no special book is requested, we'll show a list of all available books  
            $films = $this->model->getFilmList();
            include 'view/listFilm.php';
        } else {
            // show the requested book 
            $film = $this->model->getFilm($_GET['id']);
            include 'view/viewFilm.php';
        }
    }

}
