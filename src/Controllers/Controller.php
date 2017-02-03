<?php

namespace Elgamine\Controllers;

class Controller {

	protected static function view($name, $vars = []){
		// je fais une boucle sur mon tableau de variables
		foreach($vars as $key => $value){
			// je crée une variable de variable
			// $$key va etre transforme comme ceci :
			// si $key vaut 'foo', j'aurai une variable $foo 
			$$key = $value;
		}
		require ROOT . "/src/Views/".$name.".php";
	}

	protected static function redirect($location){
		//je demandes au navigateur de rediriger vers l'index
		header('Location:' . $location);
	}
}