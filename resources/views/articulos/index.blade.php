@extends('adminlte::page')

@section('title', 'HUV | Articulos')

@section('content_header')
    <h1>Lista de articulos</h1>
@stop

@section('content')

@can('articulo-create')
<a href="{{ route('articulos.create') }}" class="btn btn-primary mb-3"> <i class="fas fa-plus"></i></a>
@endcan


<div style="float: right; margin-right: 20px;">
        <form method="GET" action="{{ route('articulos.index') }}">
            <select name="tipored">
                <option value="">Mostrar Todo</option>
                <option value="Claro">Claro</option>
                <option value="Tigo">Tigo</option>
                <option value="Movistar">Movistar</option>
            </select>
            <button type="submit">Filtrar</button>
        </form>
    </div>
<br>


<table id="articulos" class="table table-striped table-bordered shadow lg mt-4" style="width:100%">
<thead class="bg-primary text-white">

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ $message }}</p>
    </div>
@endif
    <tr>
        <th scope="col">SERVICIO</th>
        <th scope="col">OT</th>
        <th scope="col">NOMBREID</th>
        <th scope="col">DIRECCION</th>
        <th scope="col">REFERENCIA</th>
        <th scope="col">G_CLARO</th>
        <th scope="col">TIPORED</th>
        <th scope="col">CAP</th>
        <th scope="col">UBICACIONID</th>
        <th scope="col">Fecha inicio</th>
        <th scope="col">Fecha fin</th>
        <th scope="col">MESES</th>
        <th scope="col">VR CONTRATADO</th>
        <th scope="col">VR ULTFACTURA</th>
        <th scope="col">ACCIONES</th>
    </tr>
    
</thead>
<tbody>
    @if($articulos->count() > 0)
    @foreach ($articulos as $articulo)
    <tr>
                        <td class="align-middle">{{ $articulo->servicio }}</td>
                        <td class="align-middle">{{ $articulo->ot }}</td>
                        <td class="align-middle">{{ $articulo->nombre_id }}</td>
                        <td class="align-middle">{{ $articulo->direccion }}</td>  
                        <td class="align-middle">{{ $articulo->referencia }}</td>  
                        <td class="align-middle">{{ $articulo->g_claro }}</td>  
                        <td class="align-middle">{{ $articulo->tipored }}</td>  
                        <td class="align-middle">{{ $articulo->cap }}</td>  
                        <td class="align-middle">{{ $articulo->ubicacion_id }}</td>  
                        <td class="align-middle">{{ $articulo->fecha_inicio }}</td>  
                        <td class="align-middle">{{ $articulo->fecha_fin }}</td>  
                        <td class="align-middle">{{ $articulo->meses }}</td>  
                        <td class="align-middle">{{ $articulo->vr_contratado }}</td>  
                        <td class="align-middle">{{ $articulo->vr_ultifactura }}</td>
                        
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            
                            <a href="{{ route('articulos.show', $articulo->id)}}" type="button" class="btn btn-info" style="margin: 5px; border-radius: 15%;" ><i class="fas fa-eye"></i></a>
                           
                            @can('articulo-edit', $articulo)
                                <a href="{{ route('articulos.edit', $articulo->id)}}" type="button" class="btn btn-primary" style="margin: 5px; border-radius: 15%;" ><i class="fas fa-edit"></i></a>
                                @endcan
                                @can('articulo-delete')
                                <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" type="button" class="btn btn-danger p-0" style="margin: 5px;border-radius: 15%;" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0"><i class="fas fa-trash"></i></button>
                                    @endcan
                                </form>
                            </div>
       
        </td>
    </tr>
    @endforeach  
    @else
                <tr>
                    <td class="text-center" colspan="5"> Articulo no encontrado.</td>
                </tr>
            @endif
</tbody>


</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#articulos');
</script>


@stop