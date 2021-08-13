@extends('adminems::panel')

@section('content')
	{!! Form::model($seo, ['route' => ['seo.update', $seo->id], 'method' => 'PUT' , 'id' => 'admin-form']) !!}
		@include('adminems::seo.forms.form')
	{!! Form::close() !!}

	<div class="col-md-12">
		<button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="fa fa-save"></i> Guardar cambios </button>
		<a class="btn btn-info btn-addon m-b-sm" href="{{ route('seo.index') }}"><i class="fa fa-long-arrow-left"></i> Volver al listado</a>
	</div>
@stop