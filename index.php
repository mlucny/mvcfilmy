<?php

include_once("controller/Controller.php");
include_once("lib/Database.php");
Database::connect("localhost", "root", "", "filmy");

$controller = new Controller();
$controller->invoke();
