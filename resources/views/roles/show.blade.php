@extends('adminlte::page')

@section('title', 'Mostrar | Rol')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="col-md-7 mx-auto mb-2">

<h2>Mostrar articulo</h2>

<form action="{{ route('roles.show',$role->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>


<br>
<div>
<strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
</div>


</div>



<div class="col-md-7 mx-auto mb-2">
<br>
<a href="{{ route('roles.index') }}" class="btn btn-secondary" tabindex="5">Atrás</a>


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