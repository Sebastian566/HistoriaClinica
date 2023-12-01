@extends('adminlte::page')

@section('title', 'Editar | Paciente')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="col-md-7 mx-auto mb-2">

<h2>Editar paciente</h2>

<form action="{{ route('pacientes.update',$paciente->id) }}" method="POST">
    @csrf
    @method('PUT')

<div>
    <label for="" class="form-label">TIPO DOC</label>
    <input id="tipo_doc" name="tipo_doc" type="text" class="form-control" value="{{ $paciente->tipo_doc }}">
</div>
<div>
    <label for="" class="form-label">CEDULA</label>
    <input id="n_cedula" name="n_cedula" type="number" class="form-control" value="{{ $paciente->n_cedula }}">
</div>
<div>
    <label for="" class="form-label">HISTORIA</label>
    <input id="historia" type="text" name="historia" class="form-control" value="{{ $paciente->historia }}">
</div>
<div>
    <label for="" class="form-label">APELLIDOS</label>
    <input id="apellidos" type="text" name="apellidos" class="form-control" step="any" value="{{ $paciente->apellidos }}">
</div>

<div>
    <label for="" class="form-label">NOMBRE</label>
    <input id="nombres" type="text" name="nombres" class="form-control" value="{{ $paciente->nombres }}">
</div>

<div>
    <label for="" class="form-label">EDAD</label>
    <input id="edad" type="text" name="edad" class="form-control" value="{{ $paciente->edad }}">
</div>

<div>
    <label for="" class="form-label">PAIS</label>
    <input id="pais" type="text" name="pais" class="form-control" value="{{ $paciente->pais }}">
</div>
<div>
    <label for="" class="form-label">CIUDAD</label>
    <input id="ciudad" type="number" name="ciudad" class="form-control" value="{{ $paciente->ciudad }}">
</div>

<div>
    <label class="form-label">Fecha de registro</label>
    <input id="f_registro" type="datetime-local" name="f_registro" class="form-control" value="{{ $paciente->f_registro }}">
</div>

</div>

<div class="col-md-7 mx-auto mb-2">

<a href="{{ route('pacientes.index') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
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