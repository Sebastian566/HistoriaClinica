@extends('adminlte::page')

@section('title', 'HUV | Roles')

@section('content_header')
<div class="d-flex justify-content-center align-items-center">
    <h1 class="display-4"><i class="fas fa-user-tag"></i> Manejo de Roles</h1>
</div>

@stop

@section('content')

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('roles.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i></a>
</div>

<br>


@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<table  id="roles" class="table table-striped table-bordered shadow lg mt-4" style="width:100%">
<thead class="">
<tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
     </thead>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
        <a href="{{ route('roles.show', $role->id)}}" type="button" class="btn btn-info" style="margin: 5px; border-radius: 15%;" ><i class="fas fa-eye"></i></a>
            
            <a href="{{ route('roles.edit', $role->id)}}" type="button" class="btn btn-primary" style="margin: 5px; border-radius: 15%;" ><i class="fas fa-edit"></i></a>
            
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            
        </td>
    </tr>
    @endforeach
</table>

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
    new DataTable('#roles');
</script>
@stop