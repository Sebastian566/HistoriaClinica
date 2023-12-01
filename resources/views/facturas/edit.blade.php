@extends('adminlte::page')

@section('title', 'Editar | Factura')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="col-md-7 mx-auto mb-2">

<h2>Editar Factura</h2>

<form action="{{ route('facturas.update',$factura->id) }}" method="POST">
    @csrf
    @method('PUT')

<div>
    <label for="" class="form-label">Tipo de paciente</label>
    <input id="t_paciente" name="t_paciente" type="text" class="form-control" value="{{ $factura->t_paciente }}">
</div>
<div>
    <label for="" class="form-label">Factura</label>
    <input id="factura" name="factura" type="number" class="form-control" value="{{ $factura->factura }}">
</div>
<div>
    <label for="" class="form-label">Dpto</label>
    <input id="dpto" type="text" name="dpto" class="form-control" value="{{ $factura->dpto }}">
</div>
<div>
    <label for="" class="form-label">Tipo doc</label>
    <input id="tipo_doc" type="text" name="tipo_doc" class="form-control" step="any" value="{{ $factura->tipo_doc }}">
</div>

<div>
    <label for="" class="form-label">Factura fiscal</label>
    <input id="factura_fiscal" type="number" name="factura_fiscal" class="form-control" value="{{ $factura->factura_fiscal }}">
</div>

<div>
    <label for="" class="form-label">Fecha ingreso</label>
    <input id="f_ingreso" type="date" name="f_ingreso" class="form-control" value="{{ $factura->f_ingreso }}">
</div>

<div>
    <label for="" class="form-label">Fecha cierre</label>
    <input id="f_cierre" type="date" name="f_cierre" class="form-control" value="{{ $factura->f_cierre }}">
</div>
<div>
    <label for="" class="form-label">Cliente</label>
    <input id="cliente" type="number" name="cliente" class="form-control" value="{{ $factura->cliente }}">
</div>

<div>
    <label class="form-label">Cedula</label>
    <input id="n_cedula" type="number" name="n_cedula" class="form-control" value="{{ $factura->n_cedula }}">
</div>

<div>
    <label class="form-label">Valor</label>
    <input id="valor" type="number" name="valor" class="form-control" value="{{ $factura->valor }}">
</div>

<div>
    <label class="form-label">Credito</label>
    <input id="credito" name="credito" type="number" class="form-control" value="{{ $factura->credito }}">
</div>

<div>
    <label for="" class="form-label">Fecha registro</label>
    <input id="f_registro" name="f_registro" type="datetime-local" class="form-control" value="{{ $factura->f_registro }}" >
</div>  

<div>
    <label for="" class="form-label">Fecha egreso</label>
    <input id="fecha_egreso" name="fecha_egreso" type="datetime-local" class="form-control" value="{{ $factura->fecha_egreso }}" >
</div>  

<div>
    <label for="" class="form-label">Estado salida</label>
    <input id="estado_salida" name="estado_salida" type="number" class="form-control" value="{{ $factura->estado_salida }}" >
</div>  

<div>
    <label for="" class="form-label">Diagnostico</label>
    <input id="diagnostico" name="diagnostico" type="text" class="form-control" value="{{ $factura->diagnostico }}" >
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