@extends('adminlte::page')

@section('title', 'Crear | Articulo')

@section('content_header')

    <h1></h1>

@stop

@section('content')


<form action="{{ route('articulos.store') }}" method="POST">
    @csrf


    <div class="col-md-5 mx-auto mb-2">
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="/articulos" method="POST" enctype="multipart/form-data">
        @csrf
        
            <div>
                <input type="text" name="servicio" class="form-control" placeholder="Servicio" required>
            </div>
            <br>
            <div>
                <input type="number" name="ot" class="form-control" placeholder="Ot" required>
            </div>
            <br>

            <div>
                <input type="text" name="nombre_id" class="form-control" placeholder="Nombre id">
            </div>
            <br>

            <div>
                <input type="text" name="direccion" class="form-control" placeholder="Dirección">
            </div>
            <br>

            <div>
                <input type="number" name="referencia" class="form-control" placeholder="Referencia">
            </div>
            <br>

            <div>
                <input type="text" name="g_claro" class="form-control" placeholder="g_claro">
            </div>
            <br>

            <div>
                <input type="text" name="tipored" class="form-control" placeholder="tipored">
            </div>
            <br>

            <div>
                <input type="number" name="cap" class="form-control" placeholder="Cap">
            </div>
            <br>

            <div>
                <input type="text" name="ubicacion_id" class="form-control" placeholder="Ubicación">
            </div>
            <br>

            <div>
                <input type="date" name="fecha_inicio" class="form-control" placeholder="Fecha de inicio">
            </div>
            <br>

            <div>
                <input type="date" name="fecha_fin" class="form-control" placeholder="Fecha fin">
            </div>
            <br>

            <div>
                <input type="number" name="meses" class="form-control" placeholder="Meses">
            </div>
            <br>

            <div>
                <input type="number" name="vr_contratado" class="form-control" placeholder="Vr Contratado">
            </div>
            <br>

            <div>
                <input type="number" name="vr_ultifactura" class="form-control" placeholder="Vr Ultifactura">
            </div>
            <br>

            
    
 
        <div>
            <div class="d-grid">
                <a href="{{ route('articulos.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop