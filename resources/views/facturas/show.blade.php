@extends('adminlte::page')

@section('title', 'Mostrar | Factura')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="col-md-7 mx-auto mb-2">

<h2>Mostrar Factura</h2>

<div class="container">
    <form action="{{ route('facturas.show', $factura->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="t_paciente" class="form-label">Tipo de paciente</label>
                    <input id="t_paciente" name="t_paciente" type="text" class="form-control" value="{{ $factura->t_paciente }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="factura" class="form-label">Factura</label>
                    <input id="factura" name="factura" type="number" class="form-control" value="{{ $factura->factura }}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dpto" class="form-label">Dpto</label>
                    <input id="dpto" name="dpto" type="text" class="form-control" value="{{ $factura->dpto }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo_doc" class="form-label">Tipo doc</label>
                    <input id="tipo_doc" name="tipo_doc" type="text" class="form-control" value="{{ $factura->tipo_doc }}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="factura_fiscal" class="form-label">Factura fiscal</label>
                    <input id="factura_fiscal" name="factura_fiscal" type="number" class="form-control" value="{{ $factura->factura_fiscal }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="f_ingreso" class="form-label">Fecha ingreso</label>
                    <input id="f_ingreso" name="f_ingreso" type="date" class="form-control" value="{{ $factura->f_ingreso }}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="f_cierre" class="form-label">Fecha cierre</label>
                    <input id="f_cierre" name="f_cierre" type="date" class="form-control" value="{{ $factura->f_cierre }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente" class="form-label">Cliente</label>
                    <input id="cliente" name="cliente" type="number" class="form-control" value="{{ $factura->cliente }}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="n_cedula" class="form-label">Cedula</label>
                    <input id="n_cedula" name="n_cedula" type="number" class="form-control" value="{{ $factura->n_cedula }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="valor" class="form-label">Valor</label>
                    <input id="valor" name="valor" type="number" class="form-control" value="{{ $factura->valor }}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="credito" class="form-label">Credito</label>
                    <input id="credito" name="credito" type="number" class="form-control" value="{{ $factura->credito }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="f_registro" class="form-label">Fecha registro</label>
                    <input id="f_registro" name="f_registro" type="datetime-local" class="form-control" value="{{ $factura->f_registro }}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha_egreso" class="form-label">Fecha egreso</label>
                    <input id="fecha_egreso" name="fecha_egreso" type="datetime-local" class="form-control" value="{{ $factura->fecha_egreso }}" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="estado_salida" class="form-label">Estado salida</label>
                    <input id="estado_salida" name="estado_salida" type="number" class="form-control" value="{{ $factura->estado_salida }}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="diagnostico" class="form-label">Diagnostico</label>
                    <input id="diagnostico" name="diagnostico" type="text" class="form-control" value="{{ $factura->diagnostico }}" readonly>
                </div>
            </div>
        </div>

      
    </form>
</div>


</div>



<div class="col-md-7 mx-auto mb-2">
<br>
<a href="javascript:void(0);" class="btn btn-secondary" tabindex="5" onclick="history.back();">Atrás</a>



</div>


<br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop