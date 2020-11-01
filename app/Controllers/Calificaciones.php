<?php namespace App\Controllers;

class Calificaciones extends BaseController {
	
	public function index() {
		$data = ["titulo" => "Inicio"];

		$vistas = view('layout/header',$data).
				  view('layout/menu').
				  view('calificaciones/index').
				  view('layout/footer');
		return $vistas;
	}

	public function calificaciones() {
		$data = ["titulo" => "Calificaciones"];

		$vistas = view('layout/header',$data).
				  view('layout/menu').
				  view('calificaciones/calificaciones').
				  view('layout/footer');
		return $vistas;
	}

	//--------------------------------------------------------------------

}
