<?php
require_once 'vendor/autoload.php';

use Elgamine\Models\Armoire;

if(!empty($_POST) && isset($_POST['id'])) {
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