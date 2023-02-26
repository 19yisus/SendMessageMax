<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProbandoController extends Controller
{
	public function index(){
		return Inertia::render("Probando");
	}

	public function store(Request $request){
		$validated = $request->validate([
			'title' => 'required'
		]);

		return response()->json("recibido", 200);
		// redirect(route("Probando.index"));
	}
}
