@extends('adminems::panel')

@section('content')
	<style>
		.tag-profile {
			display: block;
		}
		.img-avatar {
			max-width: 250px;
			max-height: 250px;
			padding-bottom: 5px;
		}
	</style>

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title"> Mi perfil </h2>
			</div>

			{!! Form::open(['route' => 'save.profile', 'method' => 'POST' , 'id' => 'profile-form' , 'enctype' => 'multipart/form-data']) !!}
			<div class="panel-body ">
				<h2> Información personal </h2>	<br>
				<div class="col-md-4">
					<label class="tag-profile" for="image"> Imagen </label>
					@if (Auth::user()->image)
						<img class="img-avatar" src="{{ asset(Auth::user()->image) }}" alt="">
						@else
						<p> sin imagen </p>
					@endif

					{!! Form::file('image') !!}

					<h3> <label class="label label-info"> {{ Auth::user()->role->name }} </label> </h3>
				</div>

				<div class="col-md-8 form-horizontal">

					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						<label class="col-sm-2 control-label"><strong> Usuario </strong></label>
						<div class="col-sm-8">
							{!! Form::text('name', \Auth::user()->name , ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>
					</div>

					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<label class="col-sm-2 control-label"><strong> Email </strong></label>
						<div class="col-sm-8">
							{!! Form::text('email', \Auth::user()->email , ['class' => 'form-control', 'placeholder' => '']) !!}
						</div>
					</div>

					<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
						<label class="col-sm-2 control-label"><strong> Contraseña </strong></label>
						<div class="col-sm-8">
							{!! Form::text('password', null , ['class' => 'form-control', 'disabled' => true]) !!}
						</div>
					</div>

					<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
						<label class="col-sm-2 control-label"><strong> Confimar contraseña </strong></label>
						<div class="col-sm-8">
							{!! Form::text('confirm_password', null , ['class' => 'form-control', 'disabled' => true]) !!}
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="button-group pull-right">
						<a href="{{ route('panel') }}" class="btn btn-danger"> Regresar </a>
						{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
					</div>
				</div>

			</div>
			{!! Form::close() !!}
		</div>

	</div>
@stop

@section('scripts')
	@include('adminems::success')
@stop