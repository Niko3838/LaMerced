<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartaController extends Controller
{
    public function index(){

        $productos = DB::table('productos')->get();
        $productos_frutas = DB::table('productos_frutas')->get();
        $productos_cafe = DB::table('productos_cafe')->get();
        $productos_entradas = DB::table('productos_entradas')->get();

        return view('carta.productos', [
            'productos' => $productos,
            'productos_frutas' => $productos_frutas,
            'productos_cafe' => $productos_cafe,
            'productos_entradas' => $productos_entradas,
        ]);
    }
}
