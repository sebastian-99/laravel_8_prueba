<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GestionsectoresController extends Controller
{
    public function view(){
        return view("Gestión de sectores.view");
    }

    public function create(){
        return view("Gestión de sectores.create");
    }

    public function store(request $request){

        $nombre = $request->nombre_sector;

        DB::select("INSERT INTO sector (nombre) VALUES ('$nombre')");

        return redirect()->route('view_gestion');

    }
}
