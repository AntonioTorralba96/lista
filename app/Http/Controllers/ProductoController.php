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

    public function postCreate(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect('/productos');
    }

    public function getEdit($id)
    {
        $arrayProductos=Producto::findOrFail($id);
        return view('productos.edit', array('producto'=>$arrayProductos));
    }

    public function putEdit(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect('productos/show/' . $producto->id);

    }

    public function changeBuy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->pendiente = !$producto->pendiente;
        $producto->save();
        return back();
    }
}
