<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    public function getCategoria(){
        return response()->json(
            categoria::all(),200
        );
    }
    public function getCategoriaById($id){
        $categoria = Categoria::find($id);
        if (is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        return response()->json($categoria::find($id),200);
    }
    public function addCategoria(Request $request){
        $categoria = Categoria::create($request->all());
        return response()->json($categoria,200);
    }
    
    public function updateCategoria(Request $request,$id){
        $categoria = Categoria::find($id);
        if (is_null($categoria)){
            return response()->json(['Mensaje'=> 'Registro no encontrado'],404);
        }
        $categoria->update($request->all());
        return response($categoria,200);

    }

    public function deleteCategoria($id){
        $categoria = Categoria::find($id);
        if (is_null($categoria)){
            return response()->json(['Mensaje'=> 'Registro no encontrado'],404);
        }
        $categoria ->delete();
        return response()->json($categoria,200);
    }
    

}
