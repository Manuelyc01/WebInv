@extends('adminems::panel')

@section('content')
	@if(isset($element))
		{!! Form::model($element, ['route' => ['listo-consumir-adm.update', $element->id], 'method' => 'PUT' , 'id' => 'admin-form']) !!}
	@else
		{!! Form::open(['route' => 'listo-consumir-adm.store', 'method' => 'POST' , 'id' => 'admin-form']) !!}
	@endif

	@include('admin.listo-consumir-adm.forms.form')
	{!! Form::close() !!}

	<div class="col-md-12">
		<button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="fa fa-plus"></i> Guardar cambios </button>
	</div>
@stop

@section('scripts')


@stop