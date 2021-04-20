@extends('adminems::panel')

@section('content')

	{!! Form::open(['route' => 'roles.store', 'method' => 'POST' , 'id' => 'admin-form']) !!}
		@include('adminems::role.forms.form')
	{!! Form::close() !!}

	<div class="col-md-12">
		<button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="fa fa-save"></i> Agregar </button>
		<a class="btn btn-info btn-addon m-b-sm" href="{{ route('roles.index') }}"><i class="fa fa-long-arrow-left"></i> Volver al listado </a>
	</div>
@stop