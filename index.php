<?php
require_once 'vendor/autoload.php';
define('ROOT', __DIR__);

use Elgamine\Controllers\ArmoireController;

// si j'intercepte des données dans le post
// je modifie l'entrée correspondante
if(!empty($_POST) && isset($_POST['id'])) {
	ArmoireController::save($_POST['id'], $_POST);
}

if(isset($_GET['id']) && !isset($_GET['action'])) {
	ArmoireController::show($_GET['id']);
} else if(isset($_GET['id']) && $_GET['action'] === 'edit') {
	ArmoireController::edit($_GET['id']);
} else {
	ArmoireController::home($_GET['id']);
}