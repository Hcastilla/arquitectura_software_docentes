<?php
namespace Controllers;

use Models\Usuario as usr;
use Modules\View;
use Modules\Helpers\Redirect;

class HomeController{
	
	public function index(){
		session_start();

		if(!isset($_SESSION['user']) || is_null($_SESSION['user']))
		{
			Redirect::route('/login');
		}
	}

	public function crear($nombre, $apellido){
		$u = new usr();
		var_dump ($u->insert([
			'nombre' => $nombre,
			'apellido' => $apellido
		]));
	}
}