<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $arrayProductos=Producto::all();
        return view('productos.index', array('arrayProductos'=>$arrayProductos));
    }

    public function getShow($id)
    {
        $arrayProductos=Producto::findOrFail($id);
        return view('productos.show', array('producto'=>$arrayProductos));
    }

    public function getCreate()
    {
        return view('productos.create');
    }

    public function getEdit($id)
    {
        $arrayProductos=Producto::findOrFail($id);
        return view('productos.edit', array('producto'=>$arrayProductos));
    }
}
