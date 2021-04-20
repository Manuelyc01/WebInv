<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Crear & Editar - Usuarios </h3>
		<div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{!! Form::stdText('Usuario', 1, 'name', $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			{!! Form::stdText('Email', 1 , 'email', $errors) !!}
		</div>

		<div class="form-group">
			{!! Form::stdSelect('Rol', 1 , 'role_id', $roles, null) !!}
		</div>

		<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			<label class="col-sm-2 control-label"><strong> Contraseña <span class="required"> * </span> </strong></label>
			<div class="col-sm-8">
				{!! Form::password('password', ['class' => 'form-control']) !!}
				{!! $errors->first('password', '<span class="help-block"><strong> :message </strong></span>') !!}
			</div>
		</div>

		{{-- <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			<label class="col-sm-2 control-label"><strong> Confimar contraseña </strong></label>
			<div class="col-sm-8">
				{!! Form::text('confirm_password', null , ['class' => 'form-control']) !!}
			</div>
		</div> --}}

	</div>

	<div class="panel-footer text-right">
			<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>
