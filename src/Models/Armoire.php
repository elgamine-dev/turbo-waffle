<?php
namespace Elgamine\Models;

use ORM;

class Armoire {
	private $db;

	public function __construct(){
		ORM::configure('mysql:host=localhost;dbname=mon_armoire');
		ORM::configure('username', 'root');
		ORM::configure('password', 'root');

		$this->db = ORM::forTable('mes_chaussettes');
	}

	public function getInstance(){
		return $this->db;
	}

	public static function all($limit=50, $offset=0){
		$a = new self();
		$result = $a->getInstance()
			->limit($limit)
			->offset($offset)
			->findMany();
		return $result;
	}

	public static function get($id){
		$a = new self;
		return $a->db->findOne($id);
	}

	public static function save($id, $data){
		$record = new self;
		$sock = $record->db->findOne($id);
		foreach($data as $key => $value){
			$sock->$key = $value;
		}
		$sock->save();
	}

	public static function total(){
		$a = new self;
		return $a->db->count();
	}




}

