<?php namespace App\Controllers;

class Usuario extends BaseController {
	
	public function perfil() {
		$data = ["titulo" => "Editar perfil"];

		$vistas = view('layout/header',$data).
				  view('layout/menu').
				  view('usuario/perfil').
				  view('layout/footer');
		return $vistas;
	}

	//--------------------------------------------------------------------

}
