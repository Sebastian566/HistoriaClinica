@extends('adminlte::page')

@section('title', 'Editar | Articulo')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="col-md-7 mx-auto mb-2">

<h2>Editar articulo</h2>

<form action="{{ route('articulos.update',$articulo->id) }}" method="POST">
    @csrf
    @method('PUT')

<div>
    <label for="" class="form-label">Servicio</label>
    <input id="servicio" name="servicio" type="text" class="form-control" value="{{ $articulo->servicio }}">
</div>
<div>
    <label for="" class="form-label">Ot</label>
    <input id="ot" name="ot" type="number" class="form-control" value="{{ $articulo->ot }}">
</div>
<div>
    <label for="" class="form-label">Nombre id</label>
    <input id="nombre_id" type="text" name="nombre_id" class="form-control" value="{{ $articulo->nombre_id }}">
</div>
<div>
    <label for="" class="form-label">Dirección</label>
    <input id="direccion" type="text" name="direccion" class="form-control" step="any" value="{{ $articulo->direccion }}">
</div>

<div>
    <label for="" class="form-label">Referencia</label>
    <input id="direccion" type="number" name="referencia" class="form-control" value="{{ $articulo->referencia }}">
</div>

<div>
    <label for="" class="form-label">g_claro</label>
    <input id="g_claro" type="text" name="g_claro" class="form-control" value="{{ $articulo->g_claro }}">
</div>

<div>
    <label for="" class="form-label">Tipored</label>
    <input id="tipored" type="text" name="tipored" class="form-control" value="{{ $articulo->tipored }}">
</div>

<div>
    <label for="" class="form-label">Cap</label>
    <input id="cap" type="number" name="cap" class="form-control"value="{{ $articulo->cap }}">
</div>
<div>
    <label for="" class="form-label">Ubicación id</label>
    <input id="ubicacion_id" type="text" name="ubicacion_id" class="form-control" value="{{ $articulo->ubicacion_id }}">
</div>
<div>
    <label for="" class="form-label">Fecha inicio</label>
    <input id="fecha_inicio" type="date" name="fecha_inicio" class="form-control" value="{{ $articulo->fecha_inicio }}">
</div>
<div>
    <label for="" class="form-label">Fecha fin</label>
    <input id="fecha_fin" type="date" name="fecha_fin" class="form-control" value="{{ $articulo->fecha_fin }}">
</div>
<div>
    <label for="" class="form-label">Meses</label>
    <input id="meses" type="number" name="meses" class="form-control" value="{{ $articulo->meses }}">
</div>
<div>
    <label for="" class="form-label">Vr Contratado</label>
    <input id="vr_contratado" type="number" name="vr_contratado" class="form-control" value="{{ $articulo->vr_contratado }}">
</div>
<div>
    <label for="" class="form-label">Vr Ultifactura</label>
    <input id="vr_ultifactura" type="number" name="vr_ultifactura" class="form-control" value="{{ $articulo->vr_ultifactura }}">
</div>

</div>

<div class="col-md-7 mx-auto mb-2">

<a href="{{ route('articulos.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</div>

</form>
<br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop