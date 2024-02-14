<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarController extends Controller {
    public function rotina() {
        return view('pages/criar/rotina');
    }
    public function ciclo() {
        return view('pages/criar/ciclo');
    }
}