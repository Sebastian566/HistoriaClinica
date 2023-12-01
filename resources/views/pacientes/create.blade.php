@extends('adminlte::page')

@section('title', 'Crear | Paciente')

@section('content_header')

    <h1></h1>

@stop

@section('content')


<form action="{{ route('pacientes.store') }}" method="POST">
    @csrf


    <div class="col-md-5 mx-auto mb-2">
    <h1 class="mb-0">Añadir paciente</h1>
    <hr />
    <form action="/pacientes" method="POST" enctype="multipart/form-data">
        @csrf
        
            <div>
                <input type="text" name="tipo_doc" class="form-control" placeholder="Tipo de documento" required>
            </div>
            <br>
            <div>
                <input type="number" name="n_cedula" class="form-control" placeholder="Cedula" required>
            </div>
            <br>

            <div>
                <input type="text" name="historia" class="form-control" placeholder=" Historia">
            </div>
            <br>

            <div>
                <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
            </div>
            <br>

            <div>
                <input type="text" name="nombres" class="form-control" placeholder="Nombre">
            </div>
            <br>

            <div>
                <input type="number" name="edad" class="form-control" placeholder="Edad">
            </div>
            <br>

            <div>
                <input type="date" name="f_nacimiento" class="form-control" placeholder="Fecha de nacimiento">
            </div>
            <br>
            
            <div>
                <input type="text" name="pais" class="form-control" placeholder="pais">
            </div>
            <br>

            <div>
                <input type="text" name="ciudad" class="form-control" placeholder="ciudad">
            </div>
            <br>

            <div>
                <input type="text" name="domicilio" class="form-control" placeholder="Domicilio">
            </div>
            <br>

            <div>
                <input type="number" name="telefono_1" class="form-control" placeholder="Telefono 1">
            </div>
            <br>

            <div>
                <input type="number" name="telefono_2" class="form-control" placeholder="Telefono 2">
            </div>
            <br>

            <div>
                <input type="text" name="estado_civil" class="form-control" placeholder="Estado civil">
            </div>
            <br>

            <div>
                <input type="text" name="sexo" class="form-control" placeholder="Sexo">
            </div>
            <br>

            <div>
                <input type="text" name="n_conyugue" class="form-control" placeholder="n_conyugue">
            </div>
            <br>

            <div>
                <input type="text" name="apellidos_g" class="form-control" placeholder="apellidos_g">
            </div>
            <br>


            <div>
             <label for="f_registro">Fecha y hora de registro:</label>
                <input type="datetime-local" name="f_registro" class="form-control" placeholder="Fecha de registro">
            </div>
            <br>
           

           
            <br>

            
    
 
        <div>
            <div class="d-grid">
                <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
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