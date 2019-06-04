@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <img src="https://picsum.photos/200/300/?random" style="height:500px"/>

        </div>
        <div class="col-sm-8">

            <h1 style="min-height:45px;margin:5px 0 10px 0">
                {{$producto->nombre}}
            </h1>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$producto->categoria}}
            </h4>
            <p><b>Estado: </b>
            @if($producto->pendiente==0)
                Producto actualmente comprado<br>
                <a href="{{ url('/productos/buy/' . $producto->id ) }}">
                    <button type="button" class="btn btn-danger">Devolver</button></a>
            @else

                Producto sin comprar.<br>
                <a href="{{ url('/productos/buy/' . $producto->id ) }}">
                    <button type="button" class="btn btn-success">Comprar</button></a>
            @endif
            <a href="{{ url('/productos/edit/' . $producto->id ) }}">
                <button type="button" class="btn btn-warning">Editar Producto</button></a>
            <a href="{{ url('/productos') }}">
                <button type="button" class="btn btn-default">Volver al Listado de Productos</button></a>

        </div>
    </div>

@stop