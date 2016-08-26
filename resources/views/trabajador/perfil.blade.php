@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="table-responsive">
				  <table class="table table-condensed">
				    	<tr>
				    		<th>#</th>
				    		<th>Nombre</th>
				    		<th>Usuario</th>
				    		<th>Correo</th>
				    		<th>Editar</th>
				    	</tr>
				    	@foreach ($users as $user)
					    <tr>
					    	<td>{{ $user->id }}</td>
					        <td>{{ $user->name }}</td>
					        <td>{{ $user->user }}</td>
					        <td>{{ $user->email }}</td>
					        <td><a href="{{ url('/edit/'.$user->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
					    </tr>
					    @endforeach
				  </table>
				</div>
            
            </div>
        </div>
    </div>
</div>
@endsection
