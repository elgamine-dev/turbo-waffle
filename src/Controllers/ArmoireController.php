<?php

namespace Elgamine\Controllers;

use Elgamine\Models\Armoire;

class ArmoireController extends Controller{

	public static function home(){
		$perPage = 10;
		$page = (!isset($_GET['page'])) ? 1 : $_GET['page'];
		$offset = $page * $perPage - $perPage;
		$socks = Armoire::all($perPage, $offset);
		$total = Armoire::total();
		self::view('table', [
			'socks'=>$socks,
			'pagination'=>[
				'total'=> $total,
				'perPage'=>$perPage,
				'nbPages' =>  ceil($total / $perPage),
				'currentPage' => $page,
				'offset'=> $offset
			]
		]);
	}

	public static function show($id){
		$sock = Armoire::get($id);
		self::view('details', ['sock'=>$sock]);
	}

	public static function edit($id){
		self::view('edit', ['sock'=>Armoire::get($id)]);
	}

	public static function save($id, $data){
		Armoire::save($id, [
			'description'=>$data['description'],
			'temp_lavage'=>$data['temp_lavage'],
			'couleur'=>$data['couleur'],
			'pointure'=>$data['pointure'],
		]);
		
		self::redirect('/?id=' . $id);
	}
}