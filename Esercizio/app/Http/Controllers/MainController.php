<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function hola1() {
		return view('hola');
	}

	public function hola2() {
		return view('holaTu', [
			'name' => 'Pluto'
		]);
	}

	public function hola3() {
		$name = 'minni';
		return view('holaTu', compact('name'));
	}
}
