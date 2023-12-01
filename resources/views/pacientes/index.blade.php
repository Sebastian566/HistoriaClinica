@extends('adminlte::page')

@section('title', 'HUV | Pacientes')

@section('content_header')
<div class="d-flex justify-content-center align-items-center">
    <h1 class="display-4"><i class="fas fa-users"></i> Lista de Pacientes</h1>
</div>

@stop

@section('content')
<br>
<br>
<div class="d-flex justify-content-center">
    <form action="{{ route('pacientes.index') }}" method="GET" class="form-inline">
    <div class="input-group mx-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input id="nombres" type="text" name="nombres" class="form-control" placeholder="Nombres">
        </div>

        <div class="input-group mx-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input id="apellidos" type="text" name="apellidos" class="form-control" placeholder="Apellidos">
        </div>

        <div class="input-group mx-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input id="n_cedula" type="text" name="n_cedula" class="form-control" placeholder="Número de Cédula">
        </div>

        <div class="input-group mx-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input id="pais" type="text" name="pais" class="form-control" placeholder="País">
        </div>

        <div class="input-group mx-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input id="edad" type="number" name="edad" class="form-control" placeholder="Edad">
        </div>

        <button type="submit" class="btn btn-primary mx-2">
            <i class="fas fa-search"></i> Buscar
        </button>
        <a href="{{ route('pacientes.index') }}" type="button" class="btn btn-secondary mx-2">
            <i class="fas fa-times"></i> Limpiar
        </a>
    </form>
</div>

<br>
<br>


@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ $message }}</p>
    </div>
@endif



<table id="pacientes" class="table table-striped table-bordered shadow lg mt-4" style="width:100%">
<thead class="">


    <tr>
        <th scope="col">ID </th>
        <th scope="col">C PACIENTE </th>
        <th scope="col">TIPO DOC</th>
        <th scope="col">N CEDULA</th>
        <th scope="col">HISTORIA</th>
        <th scope="col">APELLIDOS</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">EDAD</th>
        <th scope="col">PAIS</th>
        <th scope="col">CIUDAD</th>
        <th scope="col">ACCIONES</th>
    
    </tr>
</thead>
<tbody>
    @if($pacientes->count() > 0)
    @foreach ($pacientes as $paciente)
    <tr>
                        <td class="align-middle">{{ $paciente->id }}</td>
                        <td class="align-middle">{{ $paciente->c_paciente }}</td>
                        <td class="align-middle">{{ $paciente->tipo_doc }}</td>
                        <td class="align-middle">{{ $paciente->n_cedula }}</td>
                        <td class="align-middle">{{ $paciente->historia }}</td>
                        <td class="align-middle">{{ $paciente->apellidos }}</td>  
                        <td class="align-middle">{{ $paciente->nombres }}</td>  
                        <td class="align-middle">{{ $paciente->edad }}</td>  
                        <td class="align-middle">{{ $paciente->pais }}</td>  
                        <td class="align-middle">{{ $paciente->ciudad }}</td>  
                        
                        
                        <td class="align-midle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            
                            <a href="{{ route('pacientes.show', $paciente->id)}}" type="button" class="btn custom-btn" style="margin: 5px; border-radius: 15%;background-color: #485ec6; color: white;" ><i class="fas fa-eye"></i></a>
                           
                           
                           


                                
                               
                            </div>
       
        </td>
    </tr>
    @endforeach  
    @else
                <tr>
                    <td class="text-center" colspan="11"> Paciente no encontrado.</td>
                </tr>
            @endif
</tbody>


</table>

<br>

@stop

@section('css')
    
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bulma.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css" rel="stylesheet">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bulma.min.js"></script>

<script>
    new DataTable('#pacientes', {

       
        searching: false, // Desactiva el buscador

        
        
    });


    
</script>



@stop