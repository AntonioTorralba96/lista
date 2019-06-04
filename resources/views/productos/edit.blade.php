@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Editar Producto
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('productos/edit/'.$producto->id) }}" method="POST">
                        {{method_field('PUT')}}
                        @csrf

                        <div class="form-group">
                            <label for="title">Nombre</label>
                            <input type="text" name="nombre" value="{{ $producto->nombre }}" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Precio</label>
                            <input type="number" name="precio" value="{{ $producto->precio }}" id="precio" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Categoría</label>
                            <input type="text" name="categoria" value="{{ $producto->categoria }}" id="gategoria" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Imagen</label>
                            <input type="text" name="imagen" value="{{ $producto->imagen }}" id="imagen" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"> {{ $producto->descripcion }}" </textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Editar Producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop