@extends('adminlte::page')

@section('title', 'Mostrar | Usuario')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="col-md-7 mx-auto mb-2">

<h1>Mostrar usuario</h1>
<br>

<form action="{{ route('users.show',$user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="" class="form-label">Nombre</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ $user->name }}" readonly>
    </div>

<br>

    <div>
        <label for="" class="form-label">Email</label>
        <input id="email" name="" type="email" class="form-control" value="{{ $user->email }}" readonly>
    </div>
        
    <br>
    <div>
        @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
        <label for="" class="form-label">Rol</label>
        <input id="email" name="" type="email" class="form-control "  value="{{ $v }}"  readonly>
                   
                @endforeach
            @endif
    </div>
        
 
    
</div>

</div>


<div class="col-md-7 mx-auto mb-2">
<br>
<a href="{{ route('users.index') }}" class="btn btn-secondary" tabindex="5">Atrás</a>


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