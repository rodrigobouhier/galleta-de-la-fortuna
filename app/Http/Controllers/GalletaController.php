<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalletaController extends Controller
{
    public function index(){
        return view('Galletas.index');
    }

    public function create(){
        return view('Galletas.create');
    }

    public function show($tusuerte){
        return view('Galletas.show', compact('tusuerte'));
    }
}
