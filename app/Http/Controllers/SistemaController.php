<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller {
    public function rotina($id) {
        return view('pages/sistema/rotina', compact('id'));
    }
    public function ciclo($id) {
        return view('pages/sistema/ciclo', compact('id'));
    }
}