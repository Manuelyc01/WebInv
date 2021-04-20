@extends('adminems::panel')

@section('content')
	{!! Form::model($user, ['route' => ['usuarios.update', $user->id], 'method' => 'PUT' , 'id' => 'admin-form']) !!}
		@include('adminems::users.forms.form')
	{!! Form::close() !!}

	{{ Form::open(['route' => ['usuarios.destroy' , $user->id] , 'method' => 'DELETE', 'id' => 'form-delete-detail']) }}
	{{ Form::close() }}

	<div class="col-md-12">
		<button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="fa fa-save"></i> Guardar cambios </button>
		<button id="delete-btn" class="btn btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-close"></i> Eliminar </button>
		<a class="btn btn-info btn-addon m-b-sm" href="{{ route('usuarios.index') }}"><i class="fa fa-long-arrow-left"></i> Volver al listado</a>
	</div>
@stop