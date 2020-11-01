<?php namespace App\Controllers;

class Login extends BaseController {

	public function index() {
		$data = ["titulo" => "Login Usuario"];

		$vistas = view('layout/header',$data).
				  view('login/index').
				  view('layout/footer');
		return $vistas;
	}

	//--------------------------------------------------------------------

}
