@extends('adminlte::page')

@section('title', 'Mostrar | Paciente')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="col-md-7 mx-auto mb-2">

<h2>Mostrar Factura</h2>
<br>

        <form action="{{ route('pacientes.show', $paciente->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="c_paciente" class="form-label">Cedula</label>
                        <input id="c_paciente" name="c_paciente" type="number" class="form-control" value="{{ $paciente->c_paciente }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipo_doc" class="form-label">Tipo de documento</label>
                        <input id="tipo_doc" name="tipo_doc" type="text" class="form-control" value="{{ $paciente->tipo_doc }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="historia" class="form-label">Historia</label>
                        <input id="historia" name="historia" type="number" class="form-control" value="{{ $paciente->historia }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input id="apellidos" name="apellidos" type="text" class="form-control" value="{{ $paciente->apellidos }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input id="nombres" name="nombres" type="text" class="form-control" value="{{ $paciente->nombres }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="edad" class="form-label">Edad</label>
                        <input id="edad" name="edad" type="text" class="form-control" value="{{ $paciente->edad }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="f_nacimiento" class="form-label">Fecha de nacimiento</label>
                        <input id="f_nacimiento" name="f_nacimiento" type="date" class="form-control" value="{{ $paciente->f_nacimiento }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pais" class="form-label">Pais</label>
                        <input id="pais" name="pais" type="text" class="form-control" value="{{ $paciente->pais }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <input id="ciudad" name="ciudad" type="number" class="form-control" value="{{ $paciente->ciudad }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="domicilio" class="form-label">Domicilio</label>
                        <input id="domicilio" name="domicilio" type="text" class="form-control" value="{{ $paciente->domicilio }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefono_1" class="form-label">Telefono</label>
                        <input id="telefono_1" name="telefono_1" type="number" class="form-control" value="{{ $paciente->telefono_1 }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="estado_civil" class="form-label">Estado civil</label>
                        <input id="estado_civil" name="estado_civil" type="text" class="form-control" value="{{ $paciente->estado_civil }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sexo" class="form-label">Sexo</label>
                        <input id="sexo" name="sexo" type="text" class="form-control" value="{{ $paciente->sexo }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="n_conyugue" class="form-label">n_conyugue</label>
                        <input id="n_conyugue" name="n_conyugue" type="text" class="form-control" value="{{ $paciente->n_conyugue }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellidos_g" class="form-label">apellidos_g</label>
                        <input id="apellidos_g" name="apellidos_g" type="text" class="form-control" value="{{ $paciente->apellidos_g }}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombres_g" class="form-label">nombres_g</label>
                        <input id="nombres_g" name="nombres_g" type="text" class="form-control" value="{{ $paciente->nombres_g }}" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="f_registro" class="form-label">Fecha de registro</label>
                        <input id="f_registro" name="f_registro" type="datetime-local" class="form-control" value="{{ $paciente->f_registro }}" readonly>
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