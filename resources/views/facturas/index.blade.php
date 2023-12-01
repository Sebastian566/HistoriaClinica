@extends('adminlte::page')

@section('title', 'HUV | Pacientes')

@section('content_header')
<div class="d-flex justify-content-center align-items-center">
    <h1 class="display-4 "><i class="fas fa-file-invoice"></i> Lista de Facturas</h1>
</div>

    
@stop

@section('content')
<br>
<br>
<div class="d-flex justify-content-center mt-4">
    <form action="{{ route('facturas.index') }}" method="GET" class="form-inline">
        <div class="input-group mx-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input id="t_paciente" type="text" name="t_paciente" class="form-control" placeholder="Tipo de paciente">
        </div>

        <div class="input-group mx-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input id="factura" type="text" name="factura" class="form-control" placeholder="Factura">
        </div>

        <div class="input-group mx-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input id="cliente" type="text" name="cliente" class="form-control" placeholder="Cliente">
        </div>

          <button type="submit" class="btn btn-primary mx-2">
            <i class="fas fa-search"></i> Buscar
        </button>
        <a href="{{ route('facturas.index') }}" type="button" class="btn btn-secondary mx-2">
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



<table id="facturas" class="table table-striped table-bordered shadow lg mt-4" style="width:100%">
<thead class="">


    <tr>
        <th scope="col">ID </th>
        <th scope="col">T PACIENTE </th>
        <th scope="col">FACTURA</th>
        <th scope="col">DEPARTAMENTO</th>
        <th scope="col">TIPO DOC</th>
        <th scope="col">FACTURA F</th>
        <th scope="col">F INGRESO</th>
        
        <th scope="col">ACCIONES</th>
    
    </tr>
</thead>
<tbody>
    @if($facturas->count() > 0)
    @foreach ($facturas as $factura)
    <tr>
                        <td class="align-middle">{{ $factura->id }}</td>
                        <td class="align-middle">{{ $factura->t_paciente }}</td>
                        <td class="align-middle">{{ $factura->factura }}</td>
                        <td class="align-middle">{{ $factura->dpto }}</td>
                        <td class="align-middle">{{ $factura->tipo_doc }}</td>
                        <td class="align-middle">{{ $factura->factura_fiscal }}</td>  
                        <td class="align-middle">{{ $factura->f_ingreso }}</td>  
                       
                        
                        
                        <td class="align-midle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            
                            <a href="{{ route('facturas.show', $factura->id)}}" type="button" class="btn btn-info" style="margin: 5px; border-radius: 15%;" ><i class="fas fa-eye"></i></a>
                           
                           
                            <a href="{{ route('facturas.edit', $factura->id)}}" type="button" class="btn custom-btn" style="margin: 5px; border-radius: 15%; background-color: #485ec6; color: white;"><i class="fas fa-edit"></i></a>
                                
                            </div>
       
        </td>
    </tr>
    @endforeach  
    @else
                <tr>
                    <td class="text-center" colspan="10"> Factura no encontrada.</td>
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
  new DataTable('#facturas', {
    searching: false, // Desactiva el buscador
    info: true // Muestra la información de la cantidad total de registros
    
});
</script>



@stop