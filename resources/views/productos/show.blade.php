@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <img src="https://picsum.photos/200/300/?random" style="height:500px"/>

        </div>
        <div class="col-sm-8">

            <h1 style="min-height:45px;margin:5px 0 10px 0">
                {{$producto[0]}}
            </h1>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$producto[1]}}
            </h4>
            <p><b>Estado: </b>Producto actualmente comprado</p>
            <button type="button" class="btn btn-danger">Pendiente de Compra</button>
            <button type="button" class="btn btn-warning">Editar Producto</button>
            <button type="button" class="btn btn-default">Volver al Listado de Productos</button>

        </div>
    </div>

@stop