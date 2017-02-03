<?php
require_once 'vendor/autoload.php';

use Elgamine\Models\Armoire;

// si j'intercepte des données dans le post
// je modifie l'entrée correspondante
if(!empty($_POST) && isset($_POST['id'])) {
	//je demandes au navigateur de rediriger vers l'index
	header('Location:/?id=' . $_POST['id']);
	Armoire::save($_POST['id'], [
		'description'=>$_POST['description'],
		'temp_lavage'=>$_POST['temp_lavage'],
		'couleur'=>$_POST['couleur'],
		'pointure'=>$_POST['pointure'],
	]);
}

if(isset($_GET['id']) && !isset($_GET['action'])) {
	$sock = Armoire::get($_GET["id"]);
	require __DIR__ . "/src/Views/details.php";
} else if(isset($_GET['id']) && $_GET['action'] === 'edit') {
	$sock = Armoire::get($_GET["id"]);
	require __DIR__ . "/src/Views/edit.php";
	
} else {
	$socks = Armoire::all();
	require __DIR__ . "/src/Views/table.php";
}