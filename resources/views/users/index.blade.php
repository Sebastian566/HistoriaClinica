@extends('adminlte::page')

@section('title', 'HUV | Usuarios')

@section('content_header')
    <div class="d-flex justify-content-center align-items-center">
    <h1 class="display-4"><i class="fas fa-users"></i> Usuarios</h1>
</div>
@stop

@section('content')
<br>
<a href="users/create" class="btn btn-primary mb-3"><i class="fas fa-user-plus"></i></a>


@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ $message }}</p>
    </div>
@endif


<table id="users" class="table table-striped table-bordered shadow lg mt-4" style="width:100%">
<thead class="">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
</thead>
        <tbody>
            @if($data->count() > 0)
            @foreach ($data as $key => $user)
                <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                    <label class="">{{ $v }}</label>
                    @endforeach
                @endif
                </td>
                        <td class="align-middle">
                            
                                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}"  style="margin: 5px; border-radius: 15%;"><i class="fas fa-eye"></i></a>
                                
                                <a href="{{ route('users.edit', $user->id)}}" type="button" class="btn custom-btn" style="margin: 5px; border-radius: 15%; background-color: #485ec6; color: white;"><i class="fas fa-edit"></i></a>
                                  
                                  
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                
                             
                   
                
                        </td>
                  </tr>
                @endforeach  
                @else
                <tr>
                    <td class="text-center" colspan="5">User not found</td>
                </tr>
            @endif
</tbody>


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
    new DataTable('#users',{

      
    info: true // Muestra la información de la cantidad total de registros
    });
</script>
@stop