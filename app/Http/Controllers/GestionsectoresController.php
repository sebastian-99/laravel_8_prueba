<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GestionsectoresController extends Controller
{
    public function view(){

        $search = DB::table('sector')
        ->select("sector_id",
                "nombre",
                "activo")
        ->get();
    
        return view("Gestión de sectores.view")
        ->with("search",$search);
    }

    public function create(){
        return view("Gestión de sectores.create");
    }

    public function store(request $request){

        $nombre = $request->nombre_sector;

        DB::select("INSERT INTO sector (nombre) VALUES ('$nombre')");

        return redirect()->route('view_gestion');

    }

    public function update($id){
        
        
        $search = DB::table('sector')
        ->select("sector_id",
                "nombre",
                "activo")
        ->where('sector_id',$id)
        ->first();
        

        $name = $search->nombre;
        $id = $search->sector_id;

        return view("Gestión de sectores.update")
        ->with("name",$name)
        ->with("id",$id);
    }

    public function upload(request $request){
        
        $id= $request->id;
        $name = $request->nombre_sector;

        DB::insert("UPDATE sector SET nombre='$name' WHERE sector_id = $id");

        return redirect()->route('view_gestion');
    }

    public function desactivate($id){

        DB::select("UPDATE sector SET activo = 0 WHERE sector_id = $id");
        return redirect()->route('view_gestion');
    }
    public function activate($id){

        DB::select("UPDATE sector SET activo = 1 WHERE sector_id = $id");
        return redirect()->route('view_gestion');
    }
}
